<?php

class ImageComposerHelper extends AppHelper {

	public $helpers = array('Html');

	public function allVotesFlag($allVotesSummary, $parties, $width = 1200, $height = 630) {

		$filename = 'all-votes-'.$width.'x'.$height.'.png';
		$file_rel_path = '/img/flags/'.$filename;
		$filepath = WWW_ROOT . $file_rel_path;

		$stats = stat($filepath);
		if ($stats[9] < (time() - (60 * 2))) { // 2 mins
			// build new flag
			$im = $this->buildFlag($allVotesSummary, false, $parties);

			imagepng($im, $filepath);
			imagedestroy($im);
		}

		

		return $this->Html->image($file_rel_path);

	}

	public function flag($user, $friendshipVoteSummary, $my_vote, $parties) {

		$filename = $user['User']['id'].'-'.time().'.png';
		$filepath = WWW_ROOT . 'img/flags/'.$filename;

		$im = $this->buildFlag($friendshipVoteSummary, $my_vote, $parties);

		imagepng($im, $filepath);
		imagedestroy($im);

		return $filename;
		

	}

	private function buildColors($im, $parties) {
		$colors = array();


		foreach ($parties as $party) {
			$colors[$party['Party']['id']]  = 
				imagecolorallocate(
					$im, 
					$party['Party']['colour_r'], 
					$party['Party']['colour_g'], 
					$party['Party']['colour_b']
				);
			
		}

		return $colors;
	}


	private function buildFlag($friendshipVoteSummary, $my_vote, $parties, $width = 1200, $height = 630) {

		// Create an image
		$im = imagecreatetruecolor($width, $height);

		// transparent
		$colourBlack = imagecolorallocate($im, 1, 1, 1);
		imagecolortransparent($im, $colourBlack);


		// build colours
		$colors = $this->buildColors($im, $parties);


		$total = 0;
		foreach ($friendshipVoteSummary as $party) {
			$total += $party['votes'];
		}

		if ($my_vote) $total++;

		$x = 0;
		foreach ($parties as $party) {

			$party_id = $party['Party']['id'];
			$colour = $colors[$party_id];
			$party_total = $friendshipVoteSummary[$party_id]['votes'];

			if ($my_vote && $my_vote['Vote']['party_id'] == $party_id) {
				$party_total++;
			}

			$new_x = $x + ($party_total / $total) * $width;
			$new_x = $x + 120;
			
			// Draw a white rectangle
			imagefilledrectangle($im, $x, 0, $new_x, $height, $colour);

			$x = $new_x;
		}

		// Save the image
		return $im;
		

	}


	function grid($votes, $parties, $width = 1200, $height = 630) {


		// Create an image
		$im = imagecreatetruecolor($width, $height);

		// transparent
		$colourBlack = imagecolorallocate($im, 1, 1, 1);
		imagecolortransparent($im, $colourBlack);


		// build colours
		$colors = $this->buildColors($im, $parties);


		$count = count($votes);

		$grid_width = max(1,$width/ceil(sqrt($count)));
		$grid_height = max(1, $height/ceil(sqrt($count)));

		$squares_per_row = $width / $grid_width;

		$x = 0;

		foreach ($votes as $k => $vote) {

			$party_id = $vote['Vote']['party_id'];

			$x1 = ($k * $grid_width) % $width;
			$y1 = floor($k * $grid_width / $width) * $grid_height;
			$x2 = $x1 + $grid_width - 1;
			$y2 = $y1 + $grid_height - 1;

			$colour = $colors[$party_id];
			
			// Draw a white rectangle
			imagefilledrectangle($im, $x1, $y1, $x2, $y2, $colour);

		}

		// Save the image
		imagepng($im, WWW_ROOT . '/img/grid.png');
		imagedestroy($im);


	}
}

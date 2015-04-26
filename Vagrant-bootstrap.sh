#!/usr/bin/env bash

# so that php 5.4 gets installed
sudo apt-get update
sudo apt-get install -y python-software-properties
sudo apt-get update
sudo add-apt-repository ppa:ondrej/php5-oldstable
sudo apt-get update

# LAMP
sudo apt-get install -y apache2
sudo a2enmod rewrite
sudo apt-get install -y php5 libapache2-mod-php5 php5-mcrypt php5-curl php5-mysql
sudo apt-get install -y php5-gd
# virtual hosts
sudo ln -s /srv/config/sites-available/local.conf /etc/apache2/sites-available/local.conf
sudo a2ensite local.conf
sudo a2dissite 000-default

### Installing MySQL 5.5
sudo debconf-set-selections <<< 'mysql-server-5.5 mysql-server/root_password password rootpass'
sudo debconf-set-selections <<< 'mysql-server-5.5 mysql-server/root_password_again password rootpass'
sudo apt-get update
sudo apt-get -y install mysql-server-5.5

# install mail
# echo postfix postfix/mail#name string local.xmas.argos.co.uk | sudo debconf-set-selections
# echo postfix postfix/main_mailer_type string 'Internet Site' |  sudo debconf-set-selections
# sudo apt-get -y install mailutils
# sudo service postfix reload

# firephp
sudo apt-get install php-pear
sudo pear channel-discover pear.firephp.org
sudo pear install firephp/FirePHPCore

# reload apache service
sudo service apache2 reload

# export variables for any SSH sessions
sudo cp /srv/config/setEnvVars.sh /etc/profile.d/
source /etc/profile.d/setEnvVars.sh

# create database only once
mysql -uroot -prootpass -e "create schema if not exists voter"

# load schema
# /vagrant_data/application/backend/app/Console/cake schema create -y

# add test data
mysql -uroot -prootpass --database voter < /srv/config/sql/empty.sql

# (re)load crontab
crontab /srv/config/crons/crontab

# start again for good measure
sudo apachectl restart
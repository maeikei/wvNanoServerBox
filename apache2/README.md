apache 2 settings
=======
sudo cp -rf ./* /etc/apache2/
sudo a2enmod rewrite
sudo service apache2 restart
sudo update-rc.d apache2 enable

sudo apt-get install libapache2-mod-php5 php5-mysql


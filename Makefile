
.PHONY : all apache2

all:

	
apache2:
	sudo cp -rf ./apache2/sites-available/* /etc/apache2/sites-available/
	sudo cp -f ./apache2/php5/apache2/php.ini /etc/php5/apache2/
	sudo a2enmod rewrite 
	sudo service apache2 restart
	sudo apt-get install libapache2-mod-php5 php5-mysql

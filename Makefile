
.PHONY : all apache2 mount

all:

mount:
	mkdir -p ./wvbox/app/tmp/
	sudo mount tmpfs ./wvbox/app/tmp/ -t tmpfs -o size=128m
	sudo chown www-data -R ./wvbox/app/tmp/
	
	mkdir -p ./cakephp/app/tmp/
	sudo mount tmpfs ./cakephp/app/tmp/ -t tmpfs -o size=128m
	sudo chown www-data -R ./cakephp/app/tmp/

	
apache2:
	sudo cp -rf ./apache2/sites-available/* /etc/apache2/sites-available/
	sudo a2enmod rewrite 
	sudo service apache2 restart
	sudo apt-get install php5-pgsql php5-cli

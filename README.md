# php-course
TBD

#Setup

1) Startup Ubuntu

2) Install git: `sudo apt-get update`

                `sudo apt-get install git `
                
3) Install Apache: `sudo apt-get install apache2`

4) Install MySQL: `sudo apt-get install mysql-server libapache2-mod-auth-mysql php5-mysql`

5) Enter 'root' password when prompted

5) Setup MySQL: `sudo mysql_install_db`

                `sudo /usr/bin/mysql_secure_installation`
                
                Answer is Y for installation, n for eveything else until the last one ('Reload privilege tables now?') which is Y
                
6) Install PHP: `sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt`

7) Go to: `/etc/apache2/sites-enabled`

8) Run this: `sudo nano 000-default.conf`

   Remove `html/` from `DocumentRoot` line
   
9) Restart Apache: `sudo service apache2 restart`
   

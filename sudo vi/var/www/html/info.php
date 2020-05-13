commands executed after ssh into ec2 ubuntu instance
sudo apt-get update
sudo apt-get install apache2 -y
sudo apt install php libapache2-mod-php php-mysql -y
sudo systemctl restart apache2
sudo systemctl enable apache2
sudo apt install php-cli -y
sudo vi /var/www/html/info.php => 
<?php
phpinfo();
?>
sudo systemctl restart apache2

unable to open in browser:http://54.191.41.200/info.php to check with the context path

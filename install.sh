#!/bin/dev

apt-get update

echo Installation de composer
curl -sS https://getcomposer.org/installer | php
mv composer.phar /user/local/bin/composer

echo Installation de php-mcrypt
apt-get install php-mcrypt

echo Installation de mysql
apt-get install mysql-server

echo Installation de phpmyadmin
apt-get install phpmyadmin

echo Déplacement du dossier vers l'emplacement souhaité
mv todo-list ../../var/www/html/

echo Déplacement vers le dossier
cd ../../var/www/html/todo-list/

echo Veuillez lancer start.sh


PROJET : LISTE DE FILMS

SITE CRÉE AVEC LARAVEL

COMMENT LANCER L'APPLICATION WEB : (INSTALLATION)

LARAVEL :

Créer le projet avec Laravel : composer create-project laravel/laravel example-app

Aller dans le dossier des fichiers installer de Laravel : cd example-app

Lancer le serveur Laravel : php artisan serve

Le serveur : http://127.0.0.1:8000 ou localhost:8000

Voir la version de Laravel d'installer : Taper "php artisan --version" dans le terminal.

COMPOSER :

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" php composer-setup.php php -r "unlink('composer-setup.php');"

Ensuite : sudo mv composer.phar /usr/local/bin/composer

Voir la version de composer d'installer : Taper "composer" dans le terminal.

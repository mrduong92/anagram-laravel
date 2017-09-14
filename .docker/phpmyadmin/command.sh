#!/bin/bash

if [ ! -d "/var/www/app/.docker/phpmyadmin/src/phpMyAdmin-4.7.2" ]; then
    echo "------ [BEGIN] Extract PhpMyAdmin Source Code ------"
    tar -zxf /var/www/app/.docker/phpmyadmin/phpMyAdmin-4.7.4-all-languages.tar.gz -C /var/www/app/.docker/phpmyadmin/src/
    echo "------ [END] Extract PhpMyAdmin Source Code ------"
fi

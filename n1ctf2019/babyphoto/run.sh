#!/bin/bash
a2enmod rewrite
service apache2 start
chown -R mysql:mysql /var/run/mysqld /var/lib/mysql && service mysql restart
tail -F /var/log/apache2/access.log
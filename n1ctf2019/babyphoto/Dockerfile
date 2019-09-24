FROM ubuntu:18.04
ENV DEBIAN_FRONTEND=noninteractive
RUN sed -i "s/security.ubuntu.com/mirrors.aliyun.com/g" /etc/apt/sources.list && \
    sed -i "s/archive.ubuntu.com/mirrors.aliyun.com/g" /etc/apt/sources.list  && \
    apt-get update
RUN apt-get install -y php7.2 && \
    apt-get install -y apache2 && \
    apt-get install -y libapache2-mod-php && \
    apt-get install -y php-xml && \
    apt-get install -y php-mbstring && \
    apt-get install -y zip && \
    apt-get install -y unzip && \
    apt-get install -y git && \
    apt-get install -y curl && \
    apt-get install -y mysql-server && \
    apt-get install -y php-mysql && \
    apt-get install -y composer

COPY babyphoto /var/www/html/babyphoto
COPY run.sh /run.sh
COPY install.sql /install.sql
COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY apache2.conf /etc/apache2/apache2.conf
RUN chmod 500 /run.sh

WORKDIR /var/www/html/babyphoto
RUN chmod -R 777 storage/
RUN mkdir /var/run/mysqld && chmod 777 /var/run/mysqld /var/lib/mysql
RUN composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/ && \
    composer install
RUN chown -R mysql:mysql  /var/run/mysqld /var/lib/mysql && \
    service mysql start && \
    mysql -uroot < /install.sql && \
    rm /install.sql && \
    php artisan migrate
CMD /bin/bash /run.sh
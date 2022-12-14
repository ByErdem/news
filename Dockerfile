FROM php:8.1.10-fpm
RUN apt-get update
RUN apt-get install -y autoconf pkg-config libssl-dev libzip-dev git gcc make libc-dev vim unzip

RUN docker-php-ext-install bcmath pdo pdo_mysql mysqli sockets zip

RUN pecl install pcov \
    && docker-php-ext-enable pcov

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/ \
    && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer

RUN curl -sS https://get.symfony.com/cli/installer | bash \
    && mv /root/.symfony5/bin/symfony /usr/local/bin/

WORKDIR /home/app

COPY . .

RUN chmod -R 777 /home/app/var/log
RUN chmod -R 777 /home/app/var/cache

EXPOSE 8082

CMD ["symfony", "server:start", "--port=8082"]
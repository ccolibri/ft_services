FROM alpine:latest

RUN apk update
RUN apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli \
	php7-zlib php7-curl php7-mbstring php7-json php7-session

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz
RUN tar -zxvf /phpMyAdmin-5.0.2-all-languages.tar.gz
RUN rm -f /phpMyAdmin-5.0.2-all-languages.tar.gz
RUN mv /phpMyAdmin-5.0.2-all-languages /etc/phpmyadmin

COPY config.inc.php /etc/phpmyadmin
COPY entrypoint.sh /tmp/

EXPOSE 5000

ENTRYPOINT ["sh", "/tmp/entrypoint.sh"]
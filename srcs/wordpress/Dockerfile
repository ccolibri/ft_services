FROM alpine:latest

RUN apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib\
			php7-curl php7-mbstring php7-json php7-session mysql-client

RUN		apk add openrc nginx php-fpm supervisor
RUN		adduser -D -g 'www' www
RUN		mkdir /www && chown -R www:www /var/lib/nginx && chown -R www:www /www && mkdir -p /run/nginx

ADD https://wordpress.org/latest.tar.gz ./
RUN tar -zxvf latest.tar.gz
RUN rm -f latest.tar.gz
RUN mv wordpress /www/

COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY wp-config.php /www/wordpress/
COPY launch-wordpress.sh /tmp/
COPY supervisord.conf /etc/supervisord.conf

RUN chmod +x /tmp/launch-wordpress.sh

EXPOSE 5050

ENTRYPOINT ["sh", "/tmp/launch-wordpress.sh"]
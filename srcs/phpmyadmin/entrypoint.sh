php -S 0.0.0.0:5000 -t /etc/phpmyadmin/

mkdir /run/nginx
chmod 744 /run/nginx

/usr/bin/supervisord -c /etc/supervisord.conf
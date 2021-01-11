FROM alpine:latest

RUN apk update
RUN apk add nginx openssh openssl openrc supervisor

RUN adduser -D -g 'www' www
RUN mkdir /www && chown -R www:www /var/lib/nginx && chown -R www:www /www && mkdir -p /run/nginx
RUN adduser -D admin && echo "admin:admin" | chpasswd 
RUN ssh-keygen -A

VOLUME	["/sys/fs/cgroup"]

RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 365 -nodes -out /etc/ssl/certs/ccaptain.crt \
-keyout /etc/ssl/certs/ccaptain.key -subj "/C=RU/ST=Moscow/L=Moscow/O=SCHOOL21/CN=www.ccaptain.com"

COPY nginx.conf /etc/nginx/nginx.conf
COPY supervisord.conf /etc/supervisord.conf
COPY entrypoint.sh /tmp/
RUN  chmod +rw /etc/supervisord.conf

EXPOSE 80 443 22

ENTRYPOINT ["sh", "/tmp/entrypoint.sh"]
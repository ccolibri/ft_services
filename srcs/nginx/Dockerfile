FROM alpine:latest

RUN apk update
RUN apk add nginx openssh openssl supervisor

RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 365 -nodes -out /etc/ssl/certs/ccaptain.crt \
-keyout /etc/ssl/certs/ccaptain.key -subj "/C=RU/ST=Moscow/L=Moscow/O=SCHOOL21/CN=www.ccaptain.com"

COPY supervisord.conf /etc/supervisord.conf
RUN	chmod +rw /etc/supervisord.conf
COPY nginx.conf /etc/nginx/nginx.conf
COPY entrypoint.sh /tmp/

EXPOSE 80 443 22

ENTRYPOINT ["sh", "/tmp/entrypoint.sh"]
FROM alpine:latest

RUN apk update
RUN apk add mysql mysql-client mariadb mariadb-client

COPY mysql-init.sh ./
COPY wordpress-dump.sql ./
COPY entrypoint.sh ./
RUN chmod +x mysql-init.sh

VOLUME ["/var/lib/mysql"]

EXPOSE 3306

ENTRYPOINT ["sh", "entrypoint.sh"]
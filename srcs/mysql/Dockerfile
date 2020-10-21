FROM alpine:latest

RUN apk update
RUN apk add mysql mysql-client

RUN chown -R mysql:mysql /var/lib/mysql

COPY mariadb.cnf /etc/mysql/mariadb.cnf
COPY mysql-init /tmp/
COPY entrypoint.sh /tmp/

VOLUME ["/var/lib/mysql"]
EXPOSE 3306

ENTRYPOINT ["sh", "/tmp/entrypoint.sh"]
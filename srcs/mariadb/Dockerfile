FROM alpine:latest

RUN apk update
RUN apk add mysql mysql-client

RUN mkdir -p /run/mysqld && chown -R mysql:mysql /run/mysqld

COPY mariadb.cnf /etc/mariadb.cnf
COPY mysql-init /tmp/
COPY entrypoint.sh /tmp/

VOLUME ["/var/lib/mysql"]
EXPOSE 3306

ENTRYPOINT ["sh", "/tmp/entrypoint.sh"]
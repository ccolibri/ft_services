FROM alpine:latest

RUN apk update
RUN apk add mysql mysql-client

RUN mkdir -p /run/mysqld && chown -R mysql:mysql /run/mysqld

COPY mariadb-server.cnf /etc/my.cnf.d/mariadb-server.cnf
COPY mysql-init /initfile
COPY entrypoint.sh /tmp/

VOLUME ["/var/lib/mysql"]
EXPOSE 3306

ENTRYPOINT ["sh", "/tmp/entrypoint.sh"]
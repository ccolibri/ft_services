/usr/bin/mysql_install_db --user=root --datadir=/var/lib/mysql
/usr/bin/mysqld --user=root --bootstrap --verbose=0 < /tmp/mysql-init
/usr/bin/mysqld --user=root --console
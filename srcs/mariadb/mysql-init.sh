until mysqladmin ping
do
	sleep 1
done
echo "CREATE DATABASE wordpress;" | mysql -u root --skip-password
echo "CREATE USER 'ccaptain'@'%' IDENTIFIED BY 'ccaptain';" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'ccaptain'@'%' WITH GRANT OPTION;" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password
mysql -u root wordpress < wordpress-dump.sql
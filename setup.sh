minikube start --driver=hyperkit --cpus=2 --memory='3072'
minikube addons enable metrics-server
minikube addons enable dashboard
eval $(minikube -p minikube docker-env)

minikube addons enable metallb

kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)"

kubectl apply -f srcs/metallb/metallb.yaml

docker build -t nginx-image ./srcs/nginx
docker build -t ftps-image ./srcs/ftps
docker build -t grafana-image ./srcs/grafana
docker build -t influxdb-image ./srcs/influxdb
docker build -t mariadb-image ./srcs/mariadb
docker build -t phpmyadmin-image ./srcs/phpmyadmin
docker build -t telegraf-image ./srcs/telegraf
docker build -t wordpress-image ./srcs/wordpress

kubectl apply -f ./srcs/nginx/nginx.yaml
kubectl apply -f ./srcs/ftps/ftps.yaml
kubectl apply -f ./srcs/grafana/grafana_config.yaml
kubectl apply -f ./srcs/grafana/grafana.yaml
kubectl apply -f ./srcs/influxdb/influxdb_config.yaml
kubectl apply -f ./srcs/influxdb/influxdb.yaml
kubectl apply -f ./srcs/mariadb/mysql.yaml
kubectl apply -f ./srcs/phpmyadmin/phpmyadmin.yaml
kubectl apply -f ./srcs/wordpress/wordpress.yaml
kubectl apply -f ./srcs/telegraf/telegraf_config.yaml
kubectl apply -f ./srcs/telegraf/telegraf.yaml
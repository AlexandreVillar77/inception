#!/bin/bash

if [ ! -f /etc/ssl/certs/nginx.crt ]; then
	echo "Nginx: setting up ssl ...";
	openssl req -x509 -nodes -days 365 -newkey rsa:4096 -out /etc/ssl/certs/nginx.crt -keyout /etc/ssl/private/nginx.key -subj "/C=FR/ST=IDF/L=Paris/O=42/OU=42/CN=avillar.42.fr/UID=avillar"
	echo "Nginx: ssl is set up!";
fi

ip a

exec "$@"

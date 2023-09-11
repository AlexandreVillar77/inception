From debian:buster

RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install mariadb-server -y

RUN mkdir -p /var/run/mysqld && \
	chown -R mysql:mysql /var/run/mysqld && \
	chmod 777 /var/run/mysqld


EXPOSE 3306

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY ./tools /var/www/

RUN service mysql start && mysql < /var/www/setup.sql && rm -f /var/www/setup.sql

CMD ["mysqld"]

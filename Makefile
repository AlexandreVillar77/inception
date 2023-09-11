all:
	@sudo docker-compose -f ./srcs/docker-compose.yml up

down:
	@sudo docker-compose -f ./srcs/docker-compose.yml down

re:
	@sudo docker-compose -f ./srcs/docker-compose.yml up --build

clean:
	@sudo docker stop $$(sudo docker ps -qa);\
	sudo docker rm $$(sudo docker ps -qa);\
	sudo docker rmi -f $$(sudo docker images -qa);\
	sudo docker volume rm $$(sudo docker volume ls -q);\
	sudo docker network rm $$(sudo docker network ls -q);\

.PHONY: all re down clean

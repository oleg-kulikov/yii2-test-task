#!/usr/bin/env make

export GROUP_ID := $(shell id -g)
export USER_ID  := $(shell id -u)

up:
	docker compose up -d --build

down:
	docker compose down --remove-orphans

restart: down up

status:
	docker compose ps -a

php-cli:
	docker compose run --rm php-cli sh

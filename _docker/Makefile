init: docker-down docker-build docker-up
up: docker-up
down: docker-down
restart: up down

docker-up:
	docker-compose up -d

docker-build:
	docker-compose build

docker-down:
	docker-compose down --remove-orphans

docker-down-clear:
	docker-compose down -v --remove-orphans

composer-install:
	docker-compose exec php-cli composer install

composer-install-prod:
	docker-compose exec php-cli composer install --verbose --prefer-dist --no-progress --no-interaction --no-dev --optimize-autoloader

migrate:
	docker-compose exec php-cli php artisan migrate

seed:
	docker-compose exec php-cli php artisan seed

test:
	docker-compose exec php-cli php artisan test

artisan:
	$(ARTISAN) $(cmd)

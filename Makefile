install: cp-env up composer-install   migrate generate-key

up:
	@docker-compose up -d

composer-install:
	@docker-compose exec --user=www php composer install

migrate:
	@docker-compose exec --user=www php php artisan migrate

down:
	@docker-compose down

cp-env:
	@test -f .env || cp .env.example .env

generate-key:
	@docker-compose exec --user=www php php artisan key:generate

seed:
	@docker-compose exec --user=www php php artisan db:seed --class=BrandSeeder
	@docker-compose exec --user=www php php artisan db:seed --class=CarModelSeeder
	@docker-compose exec --user=www php php artisan db:seed --class=AutoSeeder

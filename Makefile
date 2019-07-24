.PHONY: staging production build_staging build_production test lint

# main targets are staging, production
staging: build_staging
production: build_production

build_staging:
	composer install -o

build_production:
	composer install -o --no-dev

test:
	./vendor/bin/phpunit

lint:
	phpmd src,web,tests text cleancode,codesize,controversial,design,unusedcode

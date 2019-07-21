.PHONY: staging production build_staging build_production test lint

PHP=php
COMPOSER=/usr/local/bin/composer

# main targets are staging, production
staging: build_staging lint test
production: build_production

build_staging:
	$(COMPOSER) install -o

build_production:
	$(COMPOSER) install -o --no-dev

test:
	./vendor/bin/phpunit

lint:
	phpmd src,web,tests text cleancode,codesize,controversial,design,unusedcode

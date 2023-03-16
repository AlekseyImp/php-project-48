install: #run composer install
		composer install

lint: #run linter check
	composer exec --verbose phpcs -- --standard=PSR12 src bin

gendiff:
		./bin/gendiff
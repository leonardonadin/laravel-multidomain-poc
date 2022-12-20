## Laravel Multidomain POC

This is a proof of concept for a Laravel application that can be used to serve multiple domains from a single application.

### Usage Instructions with Sail

1. Clone the repository
2. Run `composer install`
3. Run `cp .env.local .env`
4. Run `./vendor/bin/sail up -d`
5. Run `./vendor/bin/sail artisan migrate`
6. Run `./vendor/bin/sail artisan db:seed`
7. Access the application at `http://localhost`


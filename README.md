# Jasmine Voyager

# install
* `composer create-project TIS/jasmine-voyagr`
* Setup database and APP_URL in `.env`
* `php artisan migrate`
* `php artisan db:seed --class=VoyagerDatabaseSeeder`
* `php artisan hook:setup`
* `php artisan storage:link`
* `composer dump-autoload`
* Create admin user `php artisan voyager:admin your@email.com --create`
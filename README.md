CRUD admin panel is being in development.

Install:

Write in config/app.php:

```
Deepslam\LaravelCrud\CrudServiceProvider::class
```

Then:

```
$ php artisan vendor:publish --provider="Deepslam\LaravelCrud\CrudServiceProvider" #publishes configs, langs, views and AdminLTE files
$ php artisan migrate #generates users table (using Laravel's default migrations)
```

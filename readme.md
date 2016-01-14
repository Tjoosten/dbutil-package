# Laravel dbutil

Simple MySQL laravel Wrapper for database management.

## Installation 

Require this package with composer: 

```
composer require Hopp/dbutil
```

After updating composer, add the ServiceProvider to the providers array in `config/app.php`

## Laravel 5.x

```php
Hopp\dbutil\ServiceProvider::class
```

If you like to use the facade, add this to your facades in `config/app.php`

```php
'DbUtil' => Hopp\DbUtil\Facade::class
```

## Security vurnabilities.

If you discover any security related issues, please email Topairy@gmail.com instead of using the issue tracker.

## Versioning

## Copyright and license

The MIT License (MIT). Please see [License File](LICENSE) for more information.

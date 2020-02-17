# Package Laravel Activity User

<p align="center">
<a href="https://packagist.org/packages/agungmartonosyn/user-activity">
    <img src="https://img.shields.io/packagist/v/agungmartonosyn/user-activity.svg?style=flat-square" alt="Package Version">
</a>

<a href="https://packagist.org/packages/laravel/framework">
    <img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License">
</a>


<a href="https://packagist.org/packages/agungmartonosyn/user-activity">
    <img src="https://img.shields.io/packagist/dt/agungmartonosyn/user-activity.svg?style=flat-square" alt="Total Downloads">
</a>

</p>


Penggunaan:

```php
//use
use Amar\UserActivity;

UserActivity::addToLog();
```


```php
// menampikan seluruh log aktifitas
Activity::logActivityLists();
```

Contoh penggunaan:
```php
   
$userActivities = Activity::logActivityLists();

$userActivities->url; //menampilkan url yang diakses
$userActivities->method; // menampikan method
$userActivities->ip; // menampilkan ip client
$userActivities->platform; //menampilkan os client
$userActivities->browser;  // menampilkan browser client
$userActivities->device; // menampilkan device client
$userActivities->user_id;  // menampilkan user_id client
$userActivities->created_at; // menampilkan created_at client
```


## Installation

Pertama
``` bash
composer require agungmartonosyn/user-activity
```

Kedua publish migration:
```bash
php artisan vendor:publish --provider="Amar\Useractivity\UserActivityProviders" --tag="migrations"
```
Ketiga :
```bash
php artisan migrate
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
##  
```php
config/app.php
  'providers' =>[
     Snnick\User\UserServiceProvider::class,
  ],


'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => Snnick\User\User::class,
        ],
    ],
```
##  
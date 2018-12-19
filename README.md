##  
```php
config/app.php

'providers' => [
     Snnick\User\UserServiceProvider::class,
],

config/auth.php

'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => Snnick\User\User::class,
    ],
],
```
##  
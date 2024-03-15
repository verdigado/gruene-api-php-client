# PHP Client for Gruene API

The API documentation can be found at https://api.gruene.de/api

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

Use with composer

```sh
composer require verdigado/gruene-api-client
```

## Getting Started

```php
<?php
require_once 'vendor/autoload.php';

use Verdigado\GrueneApiClient\apis\UsersApi;
use Verdigado\GrueneApiClient\Configuration;

$config = new Configuration();
$config->setApiKey('x-api-key', 'api_key');

$usersApi = new UsersApi(null, $config);

try {
    $user = $usersApi->getUser('10005');
    print_r($user->getUsername());
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}

```

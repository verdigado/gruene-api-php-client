# Verdigado\Gruen eApiClient\UsersApi

All URIs are relative to https://api.gruene.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findUsers()**](UsersApi.md#findUsers) | **GET** /v1/users | Find users |
| [**getSelf()**](UsersApi.md#getSelf) | **GET** /v1/users/self | Get the authenticated user |
| [**getUser()**](UsersApi.md#getUser) | **GET** /v1/users/{userId} | Get user by id |
| [**getUserRbacStructure()**](UsersApi.md#getUserRbacStructure) | **GET** /v1/users/{userId}/rbac-structure | Get user RBAC structure |


## `findUsers()`

```php
findUsers($search, $user_ids, $limit): \Verdigado\Gruen eApiClient\models\FindUsersResponse
```

Find users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: basic
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Verdigado\Gruen eApiClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search term to look for in firstname, lastname, email, username.
$user_ids = array('user_ids_example'); // string[] | Only return users with matching user id.
$limit = 3.4; // float

try {
    $result = $apiInstance->findUsers($search, $user_ids, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->findUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Search term to look for in firstname, lastname, email, username. | [optional] |
| **user_ids** | [**string[]**](../Model/string.md)| Only return users with matching user id. | [optional] |
| **limit** | **float**|  | [optional] |

### Return type

[**\Verdigado\Gruen eApiClient\models\FindUsersResponse**](../Model/FindUsersResponse.md)

### Authorization

[api_key](../../README.md#api_key), [bearer](../../README.md#bearer), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSelf()`

```php
getSelf(): \Verdigado\Gruen eApiClient\models\User
```

Get the authenticated user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: basic
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Verdigado\Gruen eApiClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSelf();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getSelf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Verdigado\Gruen eApiClient\models\User**](../Model/User.md)

### Authorization

[api_key](../../README.md#api_key), [bearer](../../README.md#bearer), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($user_id): \Verdigado\Gruen eApiClient\models\User
```

Get user by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: basic
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Verdigado\Gruen eApiClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\User**](../Model/User.md)

### Authorization

[api_key](../../README.md#api_key), [bearer](../../README.md#bearer), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserRbacStructure()`

```php
getUserRbacStructure($user_id): \Verdigado\Gruen eApiClient\models\UserRbacStructure
```

Get user RBAC structure

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: basic
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Verdigado\Gruen eApiClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getUserRbacStructure($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserRbacStructure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\UserRbacStructure**](../Model/UserRbacStructure.md)

### Authorization

[api_key](../../README.md#api_key), [bearer](../../README.md#bearer), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

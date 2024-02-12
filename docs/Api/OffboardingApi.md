# Verdigado\GrueneApiClient\OffboardingApi

All URIs are relative to https://app.gruene.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchUpdateOffboardingServiceUsers()**](OffboardingApi.md#batchUpdateOffboardingServiceUsers) | **POST** /v1/offboarding/users/self/batch | Batch update offboarding users for the authenticated service. |
| [**findUsersToOffboard()**](OffboardingApi.md#findUsersToOffboard) | **GET** /v1/offboarding/users/self | Find users to offboard for the service associated with the used credentials |


## `batchUpdateOffboardingServiceUsers()`

```php
batchUpdateOffboardingServiceUsers($batch_update_offboarding_service_users_dto)
```

Batch update offboarding users for the authenticated service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Verdigado\GrueneApiClient\Api\OffboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_update_offboarding_service_users_dto = new \Verdigado\GrueneApiClient\models\BatchUpdateOffboardingServiceUsersDto(); // \Verdigado\GrueneApiClient\models\BatchUpdateOffboardingServiceUsersDto

try {
    $apiInstance->batchUpdateOffboardingServiceUsers($batch_update_offboarding_service_users_dto);
} catch (Exception $e) {
    echo 'Exception when calling OffboardingApi->batchUpdateOffboardingServiceUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_update_offboarding_service_users_dto** | [**\Verdigado\GrueneApiClient\models\BatchUpdateOffboardingServiceUsersDto**](../Model/BatchUpdateOffboardingServiceUsersDto.md)|  | |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findUsersToOffboard()`

```php
findUsersToOffboard($limit, $after): \Verdigado\GrueneApiClient\models\FindOffboardingUsersResponse
```

Find users to offboard for the service associated with the used credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Verdigado\GrueneApiClient\Api\OffboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 200; // float | Amount of items to retrieve. This value is ignored when a cursor is set.
$after = 'after_example'; // string | Cursor for the next result set.

try {
    $result = $apiInstance->findUsersToOffboard($limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffboardingApi->findUsersToOffboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**| Amount of items to retrieve. This value is ignored when a cursor is set. | [optional] [default to 200] |
| **after** | **string**| Cursor for the next result set. | [optional] |

### Return type

[**\Verdigado\GrueneApiClient\models\FindOffboardingUsersResponse**](../Model/FindOffboardingUsersResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

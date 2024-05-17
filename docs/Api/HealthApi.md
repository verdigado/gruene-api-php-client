# Verdigado\GrueneApiClient\HealthApi

All URIs are relative to http://127.0.0.1:5000, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**healthGet()**](HealthApi.md#healthGet) | **GET** /health |  |


## `healthGet()`

```php
healthGet(): \Verdigado\GrueneApiClient\models\HealthCheckResponse
```



health check endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Verdigado\GrueneApiClient\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->healthGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->healthGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Verdigado\GrueneApiClient\models\HealthCheckResponse**](../Model/HealthCheckResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

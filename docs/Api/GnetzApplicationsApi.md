# Verdigado\Gruen eApiClient\GnetzApplicationsApi

All URIs are relative to https://api.gruene.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**gnetzApplicationsControllerFind()**](GnetzApplicationsApi.md#gnetzApplicationsControllerFind) | **GET** /v1/gnetz-applications |  |


## `gnetzApplicationsControllerFind()`

```php
gnetzApplicationsControllerFind(): \Verdigado\Gruen eApiClient\models\FindGnetzApplicationsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Verdigado\Gruen eApiClient\Api\GnetzApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->gnetzApplicationsControllerFind();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GnetzApplicationsApi->gnetzApplicationsControllerFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Verdigado\Gruen eApiClient\models\FindGnetzApplicationsResponse**](../Model/FindGnetzApplicationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# Verdigado\Gruen eApiClient\DefaultApi

All URIs are relative to https://api.gruene.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**clientInfoControllerGetClientInfo()**](DefaultApi.md#clientInfoControllerGetClientInfo) | **GET** /v1/client-info |  |


## `clientInfoControllerGetClientInfo()`

```php
clientInfoControllerGetClientInfo(): \Verdigado\Gruen eApiClient\models\ClientInfo
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Verdigado\Gruen eApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->clientInfoControllerGetClientInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->clientInfoControllerGetClientInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Verdigado\Gruen eApiClient\models\ClientInfo**](../Model/ClientInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

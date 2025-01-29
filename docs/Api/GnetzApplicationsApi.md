# Verdigado\GrueneApiClient\GnetzApplicationsApi

All URIs are relative to https://api.gruene.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findGnetzApplications()**](GnetzApplicationsApi.md#findGnetzApplications) | **GET** /v1/gnetz-applications | Find GNetz Applications |


## `findGnetzApplications()`

```php
findGnetzApplications(): \Verdigado\GrueneApiClient\models\FindGnetzApplicationsResponse
```

Find GNetz Applications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Verdigado\GrueneApiClient\Api\GnetzApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->findGnetzApplications();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GnetzApplicationsApi->findGnetzApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Verdigado\GrueneApiClient\models\FindGnetzApplicationsResponse**](../Model/FindGnetzApplicationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

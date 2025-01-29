# Verdigado\Gruen eApiClient\DivisionsApi

All URIs are relative to https://api.gruene.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findDivisions()**](DivisionsApi.md#findDivisions) | **GET** /v1/divisions | Find divisions |
| [**getDivision()**](DivisionsApi.md#getDivision) | **GET** /v1/divisions/{divisionId} | Get division by id |


## `findDivisions()`

```php
findDivisions($limit, $offset, $hierarchy, $level, $division_key, $search): \Verdigado\Gruen eApiClient\models\FindDivisionsResponse
```

Find divisions

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


$apiInstance = new Verdigado\Gruen eApiClient\Api\DivisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // float
$offset = 3.4; // float
$hierarchy = GR; // string | Filter by hierarchy
$level = BV; // string | Filter by hierarchy level
$division_key = array('division_key_example'); // string[] | Filter by division keys
$search = 'search_example'; // string | Search name attributes for substring

try {
    $result = $apiInstance->findDivisions($limit, $offset, $hierarchy, $level, $division_key, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DivisionsApi->findDivisions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**|  | [optional] [default to 20] |
| **offset** | **float**|  | [optional] |
| **hierarchy** | **string**| Filter by hierarchy | [optional] |
| **level** | **string**| Filter by hierarchy level | [optional] |
| **division_key** | [**string[]**](../Model/string.md)| Filter by division keys | [optional] |
| **search** | **string**| Search name attributes for substring | [optional] |

### Return type

[**\Verdigado\Gruen eApiClient\models\FindDivisionsResponse**](../Model/FindDivisionsResponse.md)

### Authorization

[api_key](../../README.md#api_key), [bearer](../../README.md#bearer), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDivision()`

```php
getDivision($division_id): \Verdigado\Gruen eApiClient\models\Division
```

Get division by id

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


$apiInstance = new Verdigado\Gruen eApiClient\Api\DivisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$division_id = 'division_id_example'; // string

try {
    $result = $apiInstance->getDivision($division_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DivisionsApi->getDivision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **division_id** | **string**|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\Division**](../Model/Division.md)

### Authorization

[api_key](../../README.md#api_key), [bearer](../../README.md#bearer), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

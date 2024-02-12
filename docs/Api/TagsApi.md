# Verdigado\GrueneApiClient\TagsApi

All URIs are relative to https://app.gruene.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findTags()**](TagsApi.md#findTags) | **GET** /v0/tags | List existing tags |


## `findTags()`

```php
findTags($type, $page, $limit): \Verdigado\GrueneApiClient\models\FindTagsResponse
```

List existing tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: basic
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Verdigado\GrueneApiClient\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Only return tags of a certain type
$page = 3.4; // float
$limit = 3.4; // float

try {
    $result = $apiInstance->findTags($type, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->findTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Only return tags of a certain type | [optional] |
| **page** | **float**|  | [optional] |
| **limit** | **float**|  | [optional] |

### Return type

[**\Verdigado\GrueneApiClient\models\FindTagsResponse**](../Model/FindTagsResponse.md)

### Authorization

[api_key](../../README.md#api_key), [bearer](../../README.md#bearer), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

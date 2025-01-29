# Verdigado\Gruen eApiClient\NewsApi

All URIs are relative to https://api.gruene.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findNews()**](NewsApi.md#findNews) | **GET** /v1/news | Find news |
| [**getNews()**](NewsApi.md#getNews) | **GET** /v1/news/{newsId} | Get a news post |


## `findNews()`

```php
findNews($limit, $offset, $division_key, $search, $category): \Verdigado\Gruen eApiClient\models\FindNewsResponse
```

Find news

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // float
$offset = 3.4; // float
$division_key = 'division_key_example'; // string
$search = 'search_example'; // string | Search name attributes for substring
$category = array('category_example'); // string[] | Filter by category id

try {
    $result = $apiInstance->findNews($limit, $offset, $division_key, $search, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->findNews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**|  | [optional] [default to 20] |
| **offset** | **float**|  | [optional] |
| **division_key** | **string**|  | [optional] |
| **search** | **string**| Search name attributes for substring | [optional] |
| **category** | [**string[]**](../Model/string.md)| Filter by category id | [optional] |

### Return type

[**\Verdigado\Gruen eApiClient\models\FindNewsResponse**](../Model/FindNewsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNews()`

```php
getNews($news_id): \Verdigado\Gruen eApiClient\models\News
```

Get a news post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$news_id = 'news_id_example'; // string

try {
    $result = $apiInstance->getNews($news_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->getNews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **news_id** | **string**|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\News**](../Model/News.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

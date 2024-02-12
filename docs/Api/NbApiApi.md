# Verdigado\GrueneApiClient\NbApiApi

All URIs are relative to https://app.gruene.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findGroups()**](NbApiApi.md#findGroups) | **GET** /v1/party/groups | Find all groups |
| [**findOrganizations()**](NbApiApi.md#findOrganizations) | **GET** /v1/party/organizations | Find all organizations |
| [**findRegionalChapters()**](NbApiApi.md#findRegionalChapters) | **GET** /v1/party/regionalchapters | Find all regional chapters |
| [**getRegionalChapter()**](NbApiApi.md#getRegionalChapter) | **GET** /v1/party/regionalchapters/{divisionKey} | Get regional chapter by division key |


## `findGroups()`

```php
findGroups($filter_external_refs_type, $filter_external_refs_key, $filter_level, $filter_type, $filter_slug, $filter_active): \Verdigado\GrueneApiClient\models\FindNbGroupsResponse
```

Find all groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure HTTP basic authorization: basic
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Verdigado\GrueneApiClient\Api\NbApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_external_refs_type = SHERPA; // string | Filter by external reference type
$filter_external_refs_key = 12345678; // string | Filter by external reference ID (sherpa role id)
$filter_level = 'filter_level_example'; // string | Filter by role level
$filter_type = EXECUTIVE_BOARD; // string | Filter by role type
$filter_slug = KV_EXECUTIVE_BOARD; // string | Filter by role slug
$filter_active = true; // string | Filter by active status. True by default

try {
    $result = $apiInstance->findGroups($filter_external_refs_type, $filter_external_refs_key, $filter_level, $filter_type, $filter_slug, $filter_active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NbApiApi->findGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter_external_refs_type** | **string**| Filter by external reference type | [optional] |
| **filter_external_refs_key** | **string**| Filter by external reference ID (sherpa role id) | [optional] |
| **filter_level** | **string**| Filter by role level | [optional] |
| **filter_type** | **string**| Filter by role type | [optional] |
| **filter_slug** | **string**| Filter by role slug | [optional] |
| **filter_active** | **string**| Filter by active status. True by default | [optional] |

### Return type

[**\Verdigado\GrueneApiClient\models\FindNbGroupsResponse**](../Model/FindNbGroupsResponse.md)

### Authorization

[api_key](../../README.md#api_key), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findOrganizations()`

```php
findOrganizations(): \Verdigado\GrueneApiClient\models\FindNbOrganizationsResponse
```

Find all organizations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure HTTP basic authorization: basic
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Verdigado\GrueneApiClient\Api\NbApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findOrganizations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NbApiApi->findOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Verdigado\GrueneApiClient\models\FindNbOrganizationsResponse**](../Model/FindNbOrganizationsResponse.md)

### Authorization

[api_key](../../README.md#api_key), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findRegionalChapters()`

```php
findRegionalChapters($limit, $offset, $filter_query, $filter_id_prefix, $filter_type): \Verdigado\GrueneApiClient\models\FindNbRegionalChaptersResponse
```

Find all regional chapters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure HTTP basic authorization: basic
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Verdigado\GrueneApiClient\Api\NbApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 3.4; // float | Page limit
$offset = 3.4; // float | Page offset
$filter_query = 'filter_query_example'; // string | Filter by query
$filter_id_prefix = 'filter_id_prefix_example'; // string | Filter by ID prefix
$filter_type = 'filter_type_example'; // string | Filter by type

try {
    $result = $apiInstance->findRegionalChapters($limit, $offset, $filter_query, $filter_id_prefix, $filter_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NbApiApi->findRegionalChapters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**| Page limit | [optional] |
| **offset** | **float**| Page offset | [optional] |
| **filter_query** | **string**| Filter by query | [optional] |
| **filter_id_prefix** | **string**| Filter by ID prefix | [optional] |
| **filter_type** | **string**| Filter by type | [optional] |

### Return type

[**\Verdigado\GrueneApiClient\models\FindNbRegionalChaptersResponse**](../Model/FindNbRegionalChaptersResponse.md)

### Authorization

[api_key](../../README.md#api_key), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRegionalChapter()`

```php
getRegionalChapter($division_key): \Verdigado\GrueneApiClient\models\NbRegionalChapterDto
```

Get regional chapter by division key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

// Configure HTTP basic authorization: basic
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Verdigado\GrueneApiClient\Api\NbApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$division_key = 'division_key_example'; // string

try {
    $result = $apiInstance->getRegionalChapter($division_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NbApiApi->getRegionalChapter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **division_key** | **string**|  | |

### Return type

[**\Verdigado\GrueneApiClient\models\NbRegionalChapterDto**](../Model/NbRegionalChapterDto.md)

### Authorization

[api_key](../../README.md#api_key), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

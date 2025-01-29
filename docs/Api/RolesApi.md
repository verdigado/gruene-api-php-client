# Verdigado\GrueneApiClient\RolesApi

All URIs are relative to https://api.gruene.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findRoleCategories()**](RolesApi.md#findRoleCategories) | **GET** /v1/role-categories | Find role categories |
| [**findRoleTags()**](RolesApi.md#findRoleTags) | **GET** /v1/role-tags | Find role tags |
| [**findRoles()**](RolesApi.md#findRoles) | **GET** /v1/roles | Find roles |
| [**getRole()**](RolesApi.md#getRole) | **GET** /v1/roles/{roleId} | Get role by id |


## `findRoleCategories()`

```php
findRoleCategories($limit, $offset, $search): \Verdigado\GrueneApiClient\models\FindRoleCategoriesResponse
```

Find role categories

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


$apiInstance = new Verdigado\GrueneApiClient\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // float
$offset = 3.4; // float
$search = 'search_example'; // string | Search name attribute for substring

try {
    $result = $apiInstance->findRoleCategories($limit, $offset, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->findRoleCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**|  | [optional] [default to 20] |
| **offset** | **float**|  | [optional] |
| **search** | **string**| Search name attribute for substring | [optional] |

### Return type

[**\Verdigado\GrueneApiClient\models\FindRoleCategoriesResponse**](../Model/FindRoleCategoriesResponse.md)

### Authorization

[api_key](../../README.md#api_key), [bearer](../../README.md#bearer), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findRoleTags()`

```php
findRoleTags($limit, $offset, $search): \Verdigado\GrueneApiClient\models\FindRoleTagsResponse
```

Find role tags

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


$apiInstance = new Verdigado\GrueneApiClient\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // float
$offset = 3.4; // float
$search = 'search_example'; // string | Search name attribute for substring

try {
    $result = $apiInstance->findRoleTags($limit, $offset, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->findRoleTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**|  | [optional] [default to 20] |
| **offset** | **float**|  | [optional] |
| **search** | **string**| Search name attribute for substring | [optional] |

### Return type

[**\Verdigado\GrueneApiClient\models\FindRoleTagsResponse**](../Model/FindRoleTagsResponse.md)

### Authorization

[api_key](../../README.md#api_key), [bearer](../../README.md#bearer), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findRoles()`

```php
findRoles($limit, $offset, $search, $category, $tag): \Verdigado\GrueneApiClient\models\FindRolesResponse
```

Find roles

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


$apiInstance = new Verdigado\GrueneApiClient\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // float
$offset = 3.4; // float
$search = 'search_example'; // string | Search term to look for in role name
$category = array('category_example'); // string[] | Filter by category id
$tag = array('tag_example'); // string[] | Filter by tag id

try {
    $result = $apiInstance->findRoles($limit, $offset, $search, $category, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->findRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**|  | [optional] [default to 20] |
| **offset** | **float**|  | [optional] |
| **search** | **string**| Search term to look for in role name | [optional] |
| **category** | [**string[]**](../Model/string.md)| Filter by category id | [optional] |
| **tag** | [**string[]**](../Model/string.md)| Filter by tag id | [optional] |

### Return type

[**\Verdigado\GrueneApiClient\models\FindRolesResponse**](../Model/FindRolesResponse.md)

### Authorization

[api_key](../../README.md#api_key), [bearer](../../README.md#bearer), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRole()`

```php
getRole($role_id): \Verdigado\GrueneApiClient\models\Role
```

Get role by id

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


$apiInstance = new Verdigado\GrueneApiClient\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 'role_id_example'; // string

try {
    $result = $apiInstance->getRole($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_id** | **string**|  | |

### Return type

[**\Verdigado\GrueneApiClient\models\Role**](../Model/Role.md)

### Authorization

[api_key](../../README.md#api_key), [bearer](../../README.md#bearer), [basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# Verdigado\GrueneApiClient\ProfilesApi

All URIs are relative to http://127.0.0.1:5000, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProfile()**](ProfilesApi.md#createProfile) | **POST** /v1/profiles | Create user profile |
| [**deleteProfile()**](ProfilesApi.md#deleteProfile) | **DELETE** /v1/profiles/{profileId} | Delete user profile |
| [**deleteProfileImage()**](ProfilesApi.md#deleteProfileImage) | **DELETE** /v1/profiles/{profileId}/image | Delete user profile image |
| [**findProfileTags()**](ProfilesApi.md#findProfileTags) | **GET** /v1/profiles-tags | List profile tags |
| [**findProfiles()**](ProfilesApi.md#findProfiles) | **GET** /v1/profiles | Find user profiles |
| [**getOwnProfile()**](ProfilesApi.md#getOwnProfile) | **GET** /v1/profiles/self | Get the authenticated user&#39;s profile |
| [**getProfile()**](ProfilesApi.md#getProfile) | **GET** /v1/profiles/{profileId} | Get a user profile |
| [**updateProfile()**](ProfilesApi.md#updateProfile) | **PUT** /v1/profiles/{profileId} | Update user profile |
| [**updateProfileImage()**](ProfilesApi.md#updateProfileImage) | **PUT** /v1/profiles/{profileId}/image | Update profile image |


## `createProfile()`

```php
createProfile($create_profile): \Verdigado\GrueneApiClient\models\Profile
```

Create user profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Verdigado\GrueneApiClient\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_profile = new \Verdigado\GrueneApiClient\models\CreateProfile(); // \Verdigado\GrueneApiClient\models\CreateProfile

try {
    $result = $apiInstance->createProfile($create_profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->createProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_profile** | [**\Verdigado\GrueneApiClient\models\CreateProfile**](../Model/CreateProfile.md)|  | |

### Return type

[**\Verdigado\GrueneApiClient\models\Profile**](../Model/Profile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProfile()`

```php
deleteProfile($profile_id)
```

Delete user profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Verdigado\GrueneApiClient\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string

try {
    $apiInstance->deleteProfile($profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProfileImage()`

```php
deleteProfileImage($profile_id)
```

Delete user profile image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Verdigado\GrueneApiClient\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string

try {
    $apiInstance->deleteProfileImage($profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteProfileImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findProfileTags()`

```php
findProfileTags($limit, $offset, $search, $type): \Verdigado\GrueneApiClient\models\FindProfileTagsResponse
```

List profile tags

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


$apiInstance = new Verdigado\GrueneApiClient\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // float
$offset = 3.4; // float
$search = 'search_example'; // string | Search label attributes for substring
$type = interest; // string | Filter by type

try {
    $result = $apiInstance->findProfileTags($limit, $offset, $search, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->findProfileTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**|  | [optional] [default to 20] |
| **offset** | **float**|  | [optional] |
| **search** | **string**| Search label attributes for substring | [optional] |
| **type** | **string**| Filter by type | [optional] |

### Return type

[**\Verdigado\GrueneApiClient\models\FindProfileTagsResponse**](../Model/FindProfileTagsResponse.md)

### Authorization

[api_key](../../README.md#api_key), [bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findProfiles()`

```php
findProfiles($tags, $search): \Verdigado\GrueneApiClient\models\FindProfilesResponse
```

Find user profiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Verdigado\GrueneApiClient\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tags = array('tags_example'); // string[] | Filter by profile tag ids
$search = 'search_example'; // string | Search term to look for in firstName, lastName, email, username.

try {
    $result = $apiInstance->findProfiles($tags, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->findProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tags** | [**string[]**](../Model/string.md)| Filter by profile tag ids | [optional] |
| **search** | **string**| Search term to look for in firstName, lastName, email, username. | [optional] |

### Return type

[**\Verdigado\GrueneApiClient\models\FindProfilesResponse**](../Model/FindProfilesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOwnProfile()`

```php
getOwnProfile(): \Verdigado\GrueneApiClient\models\Profile
```

Get the authenticated user's profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Verdigado\GrueneApiClient\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOwnProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getOwnProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Verdigado\GrueneApiClient\models\Profile**](../Model/Profile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfile()`

```php
getProfile($profile_id): \Verdigado\GrueneApiClient\models\PublicProfile
```

Get a user profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Verdigado\GrueneApiClient\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string

try {
    $result = $apiInstance->getProfile($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |

### Return type

[**\Verdigado\GrueneApiClient\models\PublicProfile**](../Model/PublicProfile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProfile()`

```php
updateProfile($profile_id, $update_profile)
```

Update user profile

When updating the collection attributes like `messengers` all items must be included. Omitting an item means it will be deleted. If an `id` attribute is present it means update the give item. Omitting the `id` attribute will add a new item to the collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Verdigado\GrueneApiClient\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$update_profile = new \Verdigado\GrueneApiClient\models\UpdateProfile(); // \Verdigado\GrueneApiClient\models\UpdateProfile

try {
    $apiInstance->updateProfile($profile_id, $update_profile);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->updateProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **update_profile** | [**\Verdigado\GrueneApiClient\models\UpdateProfile**](../Model/UpdateProfile.md)|  | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProfileImage()`

```php
updateProfileImage($profile_id, $profile_image): \Verdigado\GrueneApiClient\models\Profile
```

Update profile image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Verdigado\GrueneApiClient\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$profile_image = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->updateProfileImage($profile_id, $profile_image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->updateProfileImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **profile_image** | [**\SplFileObject**](../Model/\SplFileObject.md)|  | |

### Return type

[**\Verdigado\GrueneApiClient\models\Profile**](../Model/Profile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

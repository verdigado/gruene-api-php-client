# Verdigado\Gruen eApiClient\CampaignsApi

All URIs are relative to https://api.gruene.de, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addPoiPhoto()**](CampaignsApi.md#addPoiPhoto) | **POST** /v1/campaigns/pois/{poiId}/photos | Add POI photo |
| [**createArea()**](CampaignsApi.md#createArea) | **POST** /v1/campaigns/areas | Create a new Area |
| [**createExperienceArea()**](CampaignsApi.md#createExperienceArea) | **POST** /v1/campaigns/experience-areas | Create a new ExperienceArea |
| [**createFocusArea()**](CampaignsApi.md#createFocusArea) | **POST** /v1/campaigns/focus-areas | Create a new FocusArea |
| [**createPoi()**](CampaignsApi.md#createPoi) | **POST** /v1/campaigns/pois | Create a new POI |
| [**deleteArea()**](CampaignsApi.md#deleteArea) | **DELETE** /v1/campaigns/areas/{areaId} | Delete an Area |
| [**deleteExperienceArea()**](CampaignsApi.md#deleteExperienceArea) | **DELETE** /v1/campaigns/experience-areas/{experienceAreaId} | Delete a ExperienceArea |
| [**deleteFocusArea()**](CampaignsApi.md#deleteFocusArea) | **DELETE** /v1/campaigns/focus-areas/{focusAreaId} | Delete a FocusArea |
| [**deletePoi()**](CampaignsApi.md#deletePoi) | **DELETE** /v1/campaigns/pois/{poiId} | Delete a POI |
| [**deletePoiPhoto()**](CampaignsApi.md#deletePoiPhoto) | **DELETE** /v1/campaigns/pois/{poiId}/photos/{photoId} | Delete a POI Photo |
| [**findAreas()**](CampaignsApi.md#findAreas) | **GET** /v1/campaigns/areas | Find Areas |
| [**findExperienceAreas()**](CampaignsApi.md#findExperienceAreas) | **GET** /v1/campaigns/experience-areas | Find ExperienceAreas |
| [**findFocusAreas()**](CampaignsApi.md#findFocusAreas) | **GET** /v1/campaigns/focus-areas | Find FocusAreas |
| [**findOwnAreas()**](CampaignsApi.md#findOwnAreas) | **GET** /v1/campaigns/areas/self | Find own Areas |
| [**findOwnPois()**](CampaignsApi.md#findOwnPois) | **GET** /v1/campaigns/pois/self | Find own POIs |
| [**findPois()**](CampaignsApi.md#findPois) | **GET** /v1/campaigns/pois | Find POIs |
| [**getArea()**](CampaignsApi.md#getArea) | **GET** /v1/campaigns/areas/{areaId} | Get an Area |
| [**getExperienceArea()**](CampaignsApi.md#getExperienceArea) | **GET** /v1/campaigns/experience-areas/{experienceAreaId} | Get a ExperienceArea |
| [**getFocusArea()**](CampaignsApi.md#getFocusArea) | **GET** /v1/campaigns/focus-areas/{focusAreaId} | Get a FocusArea |
| [**getPoi()**](CampaignsApi.md#getPoi) | **GET** /v1/campaigns/pois/{poiId} | Get a POI |
| [**updateArea()**](CampaignsApi.md#updateArea) | **PUT** /v1/campaigns/areas/{areaId} | Update an Area |
| [**updateExperienceArea()**](CampaignsApi.md#updateExperienceArea) | **PUT** /v1/campaigns/experience-areas/{experienceAreaId} | Update a ExperienceArea |
| [**updateFocusArea()**](CampaignsApi.md#updateFocusArea) | **PUT** /v1/campaigns/focus-areas/{focusAreaId} | Update a FocusArea |
| [**updatePoi()**](CampaignsApi.md#updatePoi) | **PUT** /v1/campaigns/pois/{poiId} | Update a POI |


## `addPoiPhoto()`

```php
addPoiPhoto($poi_id, $image): \Verdigado\Gruen eApiClient\models\Poi
```

Add POI photo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$poi_id = 'poi_id_example'; // string
$image = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->addPoiPhoto($poi_id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->addPoiPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **poi_id** | **string**|  | |
| **image** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\Poi**](../Model/Poi.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createArea()`

```php
createArea($create_area): \Verdigado\Gruen eApiClient\models\Area
```

Create a new Area

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_area = new \Verdigado\Gruen eApiClient\models\CreateArea(); // \Verdigado\Gruen eApiClient\models\CreateArea

try {
    $result = $apiInstance->createArea($create_area);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->createArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_area** | [**\Verdigado\Gruen eApiClient\models\CreateArea**](../Model/CreateArea.md)|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\Area**](../Model/Area.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createExperienceArea()`

```php
createExperienceArea($create_experience_area): \Verdigado\Gruen eApiClient\models\ExperienceArea
```

Create a new ExperienceArea

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_experience_area = new \Verdigado\Gruen eApiClient\models\CreateExperienceArea(); // \Verdigado\Gruen eApiClient\models\CreateExperienceArea

try {
    $result = $apiInstance->createExperienceArea($create_experience_area);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->createExperienceArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_experience_area** | [**\Verdigado\Gruen eApiClient\models\CreateExperienceArea**](../Model/CreateExperienceArea.md)|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\ExperienceArea**](../Model/ExperienceArea.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFocusArea()`

```php
createFocusArea($create_focus_area): \Verdigado\Gruen eApiClient\models\FocusArea
```

Create a new FocusArea

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_focus_area = new \Verdigado\Gruen eApiClient\models\CreateFocusArea(); // \Verdigado\Gruen eApiClient\models\CreateFocusArea

try {
    $result = $apiInstance->createFocusArea($create_focus_area);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->createFocusArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_focus_area** | [**\Verdigado\Gruen eApiClient\models\CreateFocusArea**](../Model/CreateFocusArea.md)|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\FocusArea**](../Model/FocusArea.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPoi()`

```php
createPoi($create_poi): \Verdigado\Gruen eApiClient\models\Poi
```

Create a new POI

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_poi = new \Verdigado\Gruen eApiClient\models\CreatePoi(); // \Verdigado\Gruen eApiClient\models\CreatePoi

try {
    $result = $apiInstance->createPoi($create_poi);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->createPoi: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_poi** | [**\Verdigado\Gruen eApiClient\models\CreatePoi**](../Model/CreatePoi.md)|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\Poi**](../Model/Poi.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteArea()`

```php
deleteArea($area_id): \Verdigado\Gruen eApiClient\models\Area
```

Delete an Area

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$area_id = 'area_id_example'; // string

try {
    $result = $apiInstance->deleteArea($area_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->deleteArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **area_id** | **string**|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\Area**](../Model/Area.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExperienceArea()`

```php
deleteExperienceArea($experience_area_id): \Verdigado\Gruen eApiClient\models\ExperienceArea
```

Delete a ExperienceArea

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_area_id = 'experience_area_id_example'; // string

try {
    $result = $apiInstance->deleteExperienceArea($experience_area_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->deleteExperienceArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **experience_area_id** | **string**|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\ExperienceArea**](../Model/ExperienceArea.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFocusArea()`

```php
deleteFocusArea($focus_area_id): \Verdigado\Gruen eApiClient\models\FocusArea
```

Delete a FocusArea

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$focus_area_id = 'focus_area_id_example'; // string

try {
    $result = $apiInstance->deleteFocusArea($focus_area_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->deleteFocusArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **focus_area_id** | **string**|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\FocusArea**](../Model/FocusArea.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePoi()`

```php
deletePoi($poi_id): \Verdigado\Gruen eApiClient\models\Poi
```

Delete a POI

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$poi_id = 'poi_id_example'; // string

try {
    $result = $apiInstance->deletePoi($poi_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->deletePoi: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **poi_id** | **string**|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\Poi**](../Model/Poi.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePoiPhoto()`

```php
deletePoiPhoto($poi_id, $photo_id): \Verdigado\Gruen eApiClient\models\Poi
```

Delete a POI Photo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$poi_id = 'poi_id_example'; // string
$photo_id = 'photo_id_example'; // string

try {
    $result = $apiInstance->deletePoiPhoto($poi_id, $photo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->deletePoiPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **poi_id** | **string**|  | |
| **photo_id** | **string**|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\Poi**](../Model/Poi.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAreas()`

```php
findAreas($bbox): \Verdigado\Gruen eApiClient\models\FindAreasResponse
```

Find Areas

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bbox = -74.006,40.7128,-73.935242,40.789142; // string

try {
    $result = $apiInstance->findAreas($bbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->findAreas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bbox** | **string**|  | [optional] |

### Return type

[**\Verdigado\Gruen eApiClient\models\FindAreasResponse**](../Model/FindAreasResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findExperienceAreas()`

```php
findExperienceAreas($bbox): \Verdigado\Gruen eApiClient\models\FindExperienceAreasResponse
```

Find ExperienceAreas

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bbox = 52.01,12.01,54.01, 14.01; // string

try {
    $result = $apiInstance->findExperienceAreas($bbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->findExperienceAreas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bbox** | **string**|  | [optional] |

### Return type

[**\Verdigado\Gruen eApiClient\models\FindExperienceAreasResponse**](../Model/FindExperienceAreasResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findFocusAreas()`

```php
findFocusAreas($bbox): \Verdigado\Gruen eApiClient\models\FindFocusAreasResponse
```

Find FocusAreas

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bbox = -74.006,40.7128,-73.935242,40.789142; // string

try {
    $result = $apiInstance->findFocusAreas($bbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->findFocusAreas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bbox** | **string**|  | [optional] |

### Return type

[**\Verdigado\Gruen eApiClient\models\FindFocusAreasResponse**](../Model/FindFocusAreasResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findOwnAreas()`

```php
findOwnAreas($bbox): \Verdigado\Gruen eApiClient\models\FindAreasResponse
```

Find own Areas

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bbox = -74.006,40.7128,-73.935242,40.789142; // string

try {
    $result = $apiInstance->findOwnAreas($bbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->findOwnAreas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bbox** | **string**|  | [optional] |

### Return type

[**\Verdigado\Gruen eApiClient\models\FindAreasResponse**](../Model/FindAreasResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findOwnPois()`

```php
findOwnPois($type, $bbox): \Verdigado\Gruen eApiClient\models\FindPoisResponse
```

Find own POIs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = POSTER; // string | filter by POI type
$bbox = -74.006,40.7128,-73.935242,40.789142; // string

try {
    $result = $apiInstance->findOwnPois($type, $bbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->findOwnPois: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| filter by POI type | [optional] |
| **bbox** | **string**|  | [optional] |

### Return type

[**\Verdigado\Gruen eApiClient\models\FindPoisResponse**](../Model/FindPoisResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findPois()`

```php
findPois($type, $bbox): \Verdigado\Gruen eApiClient\models\FindPoisResponse
```

Find POIs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = POSTER; // string | filter by POI type
$bbox = -74.006,40.7128,-73.935242,40.789142; // string

try {
    $result = $apiInstance->findPois($type, $bbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->findPois: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| filter by POI type | [optional] |
| **bbox** | **string**|  | [optional] |

### Return type

[**\Verdigado\Gruen eApiClient\models\FindPoisResponse**](../Model/FindPoisResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArea()`

```php
getArea($area_id): \Verdigado\Gruen eApiClient\models\Area
```

Get an Area

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$area_id = 'area_id_example'; // string

try {
    $result = $apiInstance->getArea($area_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **area_id** | **string**|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\Area**](../Model/Area.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExperienceArea()`

```php
getExperienceArea($experience_area_id): \Verdigado\Gruen eApiClient\models\ExperienceArea
```

Get a ExperienceArea

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_area_id = 'experience_area_id_example'; // string

try {
    $result = $apiInstance->getExperienceArea($experience_area_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getExperienceArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **experience_area_id** | **string**|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\ExperienceArea**](../Model/ExperienceArea.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFocusArea()`

```php
getFocusArea($focus_area_id): \Verdigado\Gruen eApiClient\models\FocusArea
```

Get a FocusArea

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$focus_area_id = 'focus_area_id_example'; // string

try {
    $result = $apiInstance->getFocusArea($focus_area_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getFocusArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **focus_area_id** | **string**|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\FocusArea**](../Model/FocusArea.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPoi()`

```php
getPoi($poi_id): \Verdigado\Gruen eApiClient\models\Poi
```

Get a POI

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$poi_id = 'poi_id_example'; // string

try {
    $result = $apiInstance->getPoi($poi_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getPoi: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **poi_id** | **string**|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\Poi**](../Model/Poi.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateArea()`

```php
updateArea($area_id, $update_area): \Verdigado\Gruen eApiClient\models\Area
```

Update an Area

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$area_id = 'area_id_example'; // string
$update_area = new \Verdigado\Gruen eApiClient\models\UpdateArea(); // \Verdigado\Gruen eApiClient\models\UpdateArea

try {
    $result = $apiInstance->updateArea($area_id, $update_area);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->updateArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **area_id** | **string**|  | |
| **update_area** | [**\Verdigado\Gruen eApiClient\models\UpdateArea**](../Model/UpdateArea.md)|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\Area**](../Model/Area.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExperienceArea()`

```php
updateExperienceArea($experience_area_id, $update_experience_area): \Verdigado\Gruen eApiClient\models\ExperienceArea
```

Update a ExperienceArea

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$experience_area_id = 'experience_area_id_example'; // string
$update_experience_area = new \Verdigado\Gruen eApiClient\models\UpdateExperienceArea(); // \Verdigado\Gruen eApiClient\models\UpdateExperienceArea

try {
    $result = $apiInstance->updateExperienceArea($experience_area_id, $update_experience_area);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->updateExperienceArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **experience_area_id** | **string**|  | |
| **update_experience_area** | [**\Verdigado\Gruen eApiClient\models\UpdateExperienceArea**](../Model/UpdateExperienceArea.md)|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\ExperienceArea**](../Model/ExperienceArea.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFocusArea()`

```php
updateFocusArea($focus_area_id, $update_focus_area): \Verdigado\Gruen eApiClient\models\FocusArea
```

Update a FocusArea

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$focus_area_id = 'focus_area_id_example'; // string
$update_focus_area = new \Verdigado\Gruen eApiClient\models\UpdateFocusArea(); // \Verdigado\Gruen eApiClient\models\UpdateFocusArea

try {
    $result = $apiInstance->updateFocusArea($focus_area_id, $update_focus_area);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->updateFocusArea: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **focus_area_id** | **string**|  | |
| **update_focus_area** | [**\Verdigado\Gruen eApiClient\models\UpdateFocusArea**](../Model/UpdateFocusArea.md)|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\FocusArea**](../Model/FocusArea.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePoi()`

```php
updatePoi($poi_id, $update_poi): \Verdigado\Gruen eApiClient\models\Poi
```

Update a POI

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\Gruen eApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\Gruen eApiClient\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$poi_id = 'poi_id_example'; // string
$update_poi = new \Verdigado\Gruen eApiClient\models\UpdatePoi(); // \Verdigado\Gruen eApiClient\models\UpdatePoi

try {
    $result = $apiInstance->updatePoi($poi_id, $update_poi);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->updatePoi: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **poi_id** | **string**|  | |
| **update_poi** | [**\Verdigado\Gruen eApiClient\models\UpdatePoi**](../Model/UpdatePoi.md)|  | |

### Return type

[**\Verdigado\Gruen eApiClient\models\Poi**](../Model/Poi.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

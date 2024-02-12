# OpenAPIClient-php


## OpenAPI Endpoints
<a href=\"/api-json\">OpenAPI Spec in JSON</a><br>
<a href=\"/api-yaml\">OpenAPI Spec in YAML</a><br>

### Offboarding
Every service conntected to Grünes Netz needs to remove users when they are removed from `saml.gruene.de`.
Connected services need to pull a list of users waiting for removal at least once a week.
api.gruene.de needs to be informed whether the user did not exist or was removed.
API tokens can be obtained from `technik@verdigado.com`.



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Verdigado\GrueneApiClient\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->healthGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->healthGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://app.gruene.de*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*HealthApi* | [**healthGet**](docs/Api/HealthApi.md#healthget) | **GET** /health | 
*NbApiApi* | [**findGroups**](docs/Api/NbApiApi.md#findgroups) | **GET** /v1/party/groups | Find all groups
*NbApiApi* | [**findOrganizations**](docs/Api/NbApiApi.md#findorganizations) | **GET** /v1/party/organizations | Find all organizations
*NbApiApi* | [**findRegionalChapters**](docs/Api/NbApiApi.md#findregionalchapters) | **GET** /v1/party/regionalchapters | Find all regional chapters
*NbApiApi* | [**getRegionalChapter**](docs/Api/NbApiApi.md#getregionalchapter) | **GET** /v1/party/regionalchapters/{divisionKey} | Get regional chapter by division key
*OffboardingApi* | [**batchUpdateOffboardingServiceUsers**](docs/Api/OffboardingApi.md#batchupdateoffboardingserviceusers) | **POST** /v1/offboarding/users/self/batch | Batch update offboarding users for the authenticated service.
*OffboardingApi* | [**findUsersToOffboard**](docs/Api/OffboardingApi.md#finduserstooffboard) | **GET** /v1/offboarding/users/self | Find users to offboard for the service associated with the used credentials
*TagsApi* | [**findTags**](docs/Api/TagsApi.md#findtags) | **GET** /v0/tags | List existing tags
*UsersApi* | [**findUsers**](docs/Api/UsersApi.md#findusers) | **GET** /v0/users | Find users
*UsersApi* | [**getSelf**](docs/Api/UsersApi.md#getself) | **GET** /v0/users/self | Get the authenticated user
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /v0/users/{userId} | Get user by id

## Models

- [BatchUpdateOffboardingServiceUsersDto](docs/Model/BatchUpdateOffboardingServiceUsersDto.md)
- [FindNbGroupsResponse](docs/Model/FindNbGroupsResponse.md)
- [FindNbOrganizationsResponse](docs/Model/FindNbOrganizationsResponse.md)
- [FindNbRegionalChaptersResponse](docs/Model/FindNbRegionalChaptersResponse.md)
- [FindOffboardingUsersResponse](docs/Model/FindOffboardingUsersResponse.md)
- [FindOffboardingUsersResponseMeta](docs/Model/FindOffboardingUsersResponseMeta.md)
- [FindTagsResponse](docs/Model/FindTagsResponse.md)
- [FindUsersResponse](docs/Model/FindUsersResponse.md)
- [HealthCheckResponse](docs/Model/HealthCheckResponse.md)
- [HealthCheckResponseErrorValue](docs/Model/HealthCheckResponseErrorValue.md)
- [HealthCheckResponseInfoValue](docs/Model/HealthCheckResponseInfoValue.md)
- [NbExternalRefDto](docs/Model/NbExternalRefDto.md)
- [NbGroupDto](docs/Model/NbGroupDto.md)
- [NbOrganizationDto](docs/Model/NbOrganizationDto.md)
- [NbRegionalChapterDto](docs/Model/NbRegionalChapterDto.md)
- [OffboardingUserInfoDto](docs/Model/OffboardingUserInfoDto.md)
- [PageInfo](docs/Model/PageInfo.md)
- [Tag](docs/Model/Tag.md)
- [UpsertOffboardingServiceUserDto](docs/Model/UpsertOffboardingServiceUserDto.md)
- [User](docs/Model/User.md)

## Authorization

### basic

- **Type**: HTTP basic authentication


### bearer

- **Type**: Bearer authentication (JWT)


### api_key

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.1.0`
    - Package version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

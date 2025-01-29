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



// Configure Bearer (JWT) authorization: bearer
$config = Verdigado\GrueneApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Verdigado\GrueneApiClient\Api\CampaignsApi(
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

## API Endpoints

All URIs are relative to *https://api.gruene.de*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CampaignsApi* | [**addPoiPhoto**](docs/Api/CampaignsApi.md#addpoiphoto) | **POST** /v1/campaigns/pois/{poiId}/photos | Add POI photo
*CampaignsApi* | [**createArea**](docs/Api/CampaignsApi.md#createarea) | **POST** /v1/campaigns/areas | Create a new Area
*CampaignsApi* | [**createExperienceArea**](docs/Api/CampaignsApi.md#createexperiencearea) | **POST** /v1/campaigns/experience-areas | Create a new ExperienceArea
*CampaignsApi* | [**createFocusArea**](docs/Api/CampaignsApi.md#createfocusarea) | **POST** /v1/campaigns/focus-areas | Create a new FocusArea
*CampaignsApi* | [**createPoi**](docs/Api/CampaignsApi.md#createpoi) | **POST** /v1/campaigns/pois | Create a new POI
*CampaignsApi* | [**deleteArea**](docs/Api/CampaignsApi.md#deletearea) | **DELETE** /v1/campaigns/areas/{areaId} | Delete an Area
*CampaignsApi* | [**deleteExperienceArea**](docs/Api/CampaignsApi.md#deleteexperiencearea) | **DELETE** /v1/campaigns/experience-areas/{experienceAreaId} | Delete a ExperienceArea
*CampaignsApi* | [**deleteFocusArea**](docs/Api/CampaignsApi.md#deletefocusarea) | **DELETE** /v1/campaigns/focus-areas/{focusAreaId} | Delete a FocusArea
*CampaignsApi* | [**deletePoi**](docs/Api/CampaignsApi.md#deletepoi) | **DELETE** /v1/campaigns/pois/{poiId} | Delete a POI
*CampaignsApi* | [**deletePoiPhoto**](docs/Api/CampaignsApi.md#deletepoiphoto) | **DELETE** /v1/campaigns/pois/{poiId}/photos/{photoId} | Delete a POI Photo
*CampaignsApi* | [**findAreas**](docs/Api/CampaignsApi.md#findareas) | **GET** /v1/campaigns/areas | Find Areas
*CampaignsApi* | [**findExperienceAreas**](docs/Api/CampaignsApi.md#findexperienceareas) | **GET** /v1/campaigns/experience-areas | Find ExperienceAreas
*CampaignsApi* | [**findFocusAreas**](docs/Api/CampaignsApi.md#findfocusareas) | **GET** /v1/campaigns/focus-areas | Find FocusAreas
*CampaignsApi* | [**findOwnAreas**](docs/Api/CampaignsApi.md#findownareas) | **GET** /v1/campaigns/areas/self | Find own Areas
*CampaignsApi* | [**findOwnPois**](docs/Api/CampaignsApi.md#findownpois) | **GET** /v1/campaigns/pois/self | Find own POIs
*CampaignsApi* | [**findPois**](docs/Api/CampaignsApi.md#findpois) | **GET** /v1/campaigns/pois | Find POIs
*CampaignsApi* | [**getArea**](docs/Api/CampaignsApi.md#getarea) | **GET** /v1/campaigns/areas/{areaId} | Get an Area
*CampaignsApi* | [**getExperienceArea**](docs/Api/CampaignsApi.md#getexperiencearea) | **GET** /v1/campaigns/experience-areas/{experienceAreaId} | Get a ExperienceArea
*CampaignsApi* | [**getFocusArea**](docs/Api/CampaignsApi.md#getfocusarea) | **GET** /v1/campaigns/focus-areas/{focusAreaId} | Get a FocusArea
*CampaignsApi* | [**getPoi**](docs/Api/CampaignsApi.md#getpoi) | **GET** /v1/campaigns/pois/{poiId} | Get a POI
*CampaignsApi* | [**updateArea**](docs/Api/CampaignsApi.md#updatearea) | **PUT** /v1/campaigns/areas/{areaId} | Update an Area
*CampaignsApi* | [**updateExperienceArea**](docs/Api/CampaignsApi.md#updateexperiencearea) | **PUT** /v1/campaigns/experience-areas/{experienceAreaId} | Update a ExperienceArea
*CampaignsApi* | [**updateFocusArea**](docs/Api/CampaignsApi.md#updatefocusarea) | **PUT** /v1/campaigns/focus-areas/{focusAreaId} | Update a FocusArea
*CampaignsApi* | [**updatePoi**](docs/Api/CampaignsApi.md#updatepoi) | **PUT** /v1/campaigns/pois/{poiId} | Update a POI
*DefaultApi* | [**clientInfoControllerGetClientInfo**](docs/Api/DefaultApi.md#clientinfocontrollergetclientinfo) | **GET** /v1/client-info | 
*DivisionsApi* | [**findDivisions**](docs/Api/DivisionsApi.md#finddivisions) | **GET** /v1/divisions | Find divisions
*DivisionsApi* | [**getDivision**](docs/Api/DivisionsApi.md#getdivision) | **GET** /v1/divisions/{divisionId} | Get division by id
*GnetzApplicationsApi* | [**gnetzApplicationsControllerFind**](docs/Api/GnetzApplicationsApi.md#gnetzapplicationscontrollerfind) | **GET** /v1/gnetz-applications | 
*HealthApi* | [**healthGet**](docs/Api/HealthApi.md#healthget) | **GET** /health | 
*NbApiApi* | [**findGroups**](docs/Api/NbApiApi.md#findgroups) | **GET** /v1/party/groups | Find all groups
*NbApiApi* | [**findOrganizations**](docs/Api/NbApiApi.md#findorganizations) | **GET** /v1/party/organizations | Find all organizations
*NbApiApi* | [**findRegionalChapters**](docs/Api/NbApiApi.md#findregionalchapters) | **GET** /v1/party/regionalchapters | Find all regional chapters
*NbApiApi* | [**getRegionalChapter**](docs/Api/NbApiApi.md#getregionalchapter) | **GET** /v1/party/regionalchapters/{divisionKey} | Get regional chapter by division key
*NewsApi* | [**findNews**](docs/Api/NewsApi.md#findnews) | **GET** /v1/news | Find news
*NewsApi* | [**getNews**](docs/Api/NewsApi.md#getnews) | **GET** /v1/news/{newsId} | Get a news post
*OffboardingApi* | [**batchUpdateOffboardingServiceUsers**](docs/Api/OffboardingApi.md#batchupdateoffboardingserviceusers) | **POST** /v1/offboarding/users/self/batch | Batch update offboarding users for the authenticated service.
*OffboardingApi* | [**findUsersToOffboard**](docs/Api/OffboardingApi.md#finduserstooffboard) | **GET** /v1/offboarding/users/self | Find users to offboard for the service associated with the used credentials
*ProfilesApi* | [**createProfile**](docs/Api/ProfilesApi.md#createprofile) | **POST** /v1/profiles | Create user profile
*ProfilesApi* | [**deleteProfile**](docs/Api/ProfilesApi.md#deleteprofile) | **DELETE** /v1/profiles/{profileId} | Delete user profile
*ProfilesApi* | [**deleteProfileImage**](docs/Api/ProfilesApi.md#deleteprofileimage) | **DELETE** /v1/profiles/{profileId}/image | Delete user profile image
*ProfilesApi* | [**findProfileTags**](docs/Api/ProfilesApi.md#findprofiletags) | **GET** /v1/profile-tags | List profile tags
*ProfilesApi* | [**findProfiles**](docs/Api/ProfilesApi.md#findprofiles) | **GET** /v1/profiles | Find user profiles
*ProfilesApi* | [**getOwnProfile**](docs/Api/ProfilesApi.md#getownprofile) | **GET** /v1/profiles/self | Get the authenticated user&#39;s profile
*ProfilesApi* | [**getProfile**](docs/Api/ProfilesApi.md#getprofile) | **GET** /v1/profiles/{profileId} | Get a user profile
*ProfilesApi* | [**updateProfile**](docs/Api/ProfilesApi.md#updateprofile) | **PUT** /v1/profiles/{profileId} | Update user profile
*ProfilesApi* | [**updateProfileImage**](docs/Api/ProfilesApi.md#updateprofileimage) | **PUT** /v1/profiles/{profileId}/image | Update profile image
*RolesApi* | [**findRoleCategories**](docs/Api/RolesApi.md#findrolecategories) | **GET** /v1/role-categories | Find role categories
*RolesApi* | [**findRoleTags**](docs/Api/RolesApi.md#findroletags) | **GET** /v1/role-tags | Find role tags
*RolesApi* | [**findRoles**](docs/Api/RolesApi.md#findroles) | **GET** /v1/roles | Find roles
*RolesApi* | [**getRole**](docs/Api/RolesApi.md#getrole) | **GET** /v1/roles/{roleId} | Get role by id
*UsersApi* | [**findUsers**](docs/Api/UsersApi.md#findusers) | **GET** /v1/users | Find users
*UsersApi* | [**getSelf**](docs/Api/UsersApi.md#getself) | **GET** /v1/users/self | Get the authenticated user
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /v1/users/{userId} | Get user by id
*UsersApi* | [**getUserRbacStructure**](docs/Api/UsersApi.md#getuserrbacstructure) | **GET** /v1/users/{userId}/rbac-structure | Get user RBAC structure

## Models

- [Address](docs/Model/Address.md)
- [Area](docs/Model/Area.md)
- [AreaFlyerSpot](docs/Model/AreaFlyerSpot.md)
- [AreaHouse](docs/Model/AreaHouse.md)
- [BatchUpdateOffboardingServiceUsers](docs/Model/BatchUpdateOffboardingServiceUsers.md)
- [ClientInfo](docs/Model/ClientInfo.md)
- [CreateArea](docs/Model/CreateArea.md)
- [CreateExperienceArea](docs/Model/CreateExperienceArea.md)
- [CreateFocusArea](docs/Model/CreateFocusArea.md)
- [CreatePoi](docs/Model/CreatePoi.md)
- [CreateProfile](docs/Model/CreateProfile.md)
- [Division](docs/Model/Division.md)
- [DivisionEmail](docs/Model/DivisionEmail.md)
- [DivisionMembership](docs/Model/DivisionMembership.md)
- [DivisionOfficeAddress](docs/Model/DivisionOfficeAddress.md)
- [ExperienceArea](docs/Model/ExperienceArea.md)
- [FindAreasResponse](docs/Model/FindAreasResponse.md)
- [FindDivisionsResponse](docs/Model/FindDivisionsResponse.md)
- [FindExperienceAreasResponse](docs/Model/FindExperienceAreasResponse.md)
- [FindFocusAreasResponse](docs/Model/FindFocusAreasResponse.md)
- [FindGnetzApplicationsResponse](docs/Model/FindGnetzApplicationsResponse.md)
- [FindNbGroupsResponse](docs/Model/FindNbGroupsResponse.md)
- [FindNbOrganizationsResponse](docs/Model/FindNbOrganizationsResponse.md)
- [FindNbRegionalChaptersResponse](docs/Model/FindNbRegionalChaptersResponse.md)
- [FindNewsResponse](docs/Model/FindNewsResponse.md)
- [FindOffboardingUsersResponse](docs/Model/FindOffboardingUsersResponse.md)
- [FindPoisResponse](docs/Model/FindPoisResponse.md)
- [FindProfileTagsResponse](docs/Model/FindProfileTagsResponse.md)
- [FindProfilesResponse](docs/Model/FindProfilesResponse.md)
- [FindRoleCategoriesResponse](docs/Model/FindRoleCategoriesResponse.md)
- [FindRoleTagsResponse](docs/Model/FindRoleTagsResponse.md)
- [FindRolesResponse](docs/Model/FindRolesResponse.md)
- [FindUsersResponse](docs/Model/FindUsersResponse.md)
- [FocusArea](docs/Model/FocusArea.md)
- [GnetzApplication](docs/Model/GnetzApplication.md)
- [GnetzApplicationCategory](docs/Model/GnetzApplicationCategory.md)
- [HealthCheckResponse](docs/Model/HealthCheckResponse.md)
- [HealthCheckResponseErrorValue](docs/Model/HealthCheckResponseErrorValue.md)
- [HealthCheckResponseInfoValue](docs/Model/HealthCheckResponseInfoValue.md)
- [Image](docs/Model/Image.md)
- [ImageLink](docs/Model/ImageLink.md)
- [ImageSrcSet](docs/Model/ImageSrcSet.md)
- [KeysetPaginationMeta](docs/Model/KeysetPaginationMeta.md)
- [MessengerEntry](docs/Model/MessengerEntry.md)
- [NbExternalRef](docs/Model/NbExternalRef.md)
- [NbGroup](docs/Model/NbGroup.md)
- [NbOrganization](docs/Model/NbOrganization.md)
- [NbRegionalChapter](docs/Model/NbRegionalChapter.md)
- [News](docs/Model/News.md)
- [NewsBody](docs/Model/NewsBody.md)
- [NewsCategory](docs/Model/NewsCategory.md)
- [OffboardingUserInfo](docs/Model/OffboardingUserInfo.md)
- [OffsetPaginationMeta](docs/Model/OffsetPaginationMeta.md)
- [PhoneNumberEntry](docs/Model/PhoneNumberEntry.md)
- [Poi](docs/Model/Poi.md)
- [PoiAddress](docs/Model/PoiAddress.md)
- [PoiFlyerSpot](docs/Model/PoiFlyerSpot.md)
- [PoiHouse](docs/Model/PoiHouse.md)
- [PoiPoster](docs/Model/PoiPoster.md)
- [Polygon](docs/Model/Polygon.md)
- [Profile](docs/Model/Profile.md)
- [ProfileImage](docs/Model/ProfileImage.md)
- [ProfilePrivacySettings](docs/Model/ProfilePrivacySettings.md)
- [ProfileRole](docs/Model/ProfileRole.md)
- [ProfileTag](docs/Model/ProfileTag.md)
- [PublicProfile](docs/Model/PublicProfile.md)
- [Role](docs/Model/Role.md)
- [RoleAlias](docs/Model/RoleAlias.md)
- [RoleCategory](docs/Model/RoleCategory.md)
- [RoleTag](docs/Model/RoleTag.md)
- [SocialMediaEntry](docs/Model/SocialMediaEntry.md)
- [UpdateArea](docs/Model/UpdateArea.md)
- [UpdateExperienceArea](docs/Model/UpdateExperienceArea.md)
- [UpdateFocusArea](docs/Model/UpdateFocusArea.md)
- [UpdateMessengerEntry](docs/Model/UpdateMessengerEntry.md)
- [UpdatePhoneNumber](docs/Model/UpdatePhoneNumber.md)
- [UpdatePoi](docs/Model/UpdatePoi.md)
- [UpdateProfile](docs/Model/UpdateProfile.md)
- [UpdateSocialMediaEntry](docs/Model/UpdateSocialMediaEntry.md)
- [UpsertOffboardingServiceUser](docs/Model/UpsertOffboardingServiceUser.md)
- [User](docs/Model/User.md)
- [UserRbacGroup](docs/Model/UserRbacGroup.md)
- [UserRbacRole](docs/Model/UserRbacRole.md)
- [UserRbacStructure](docs/Model/UserRbacStructure.md)

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
    - Package version: `0.9.0-dev`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

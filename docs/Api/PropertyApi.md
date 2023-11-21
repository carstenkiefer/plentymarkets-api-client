# ck/plenty-client\PropertyApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restPropertiesAmazonsGet()**](PropertyApi.md#restPropertiesAmazonsGet) | **GET** /rest/properties/amazons | List property amazons |
| [**restPropertiesAmazonsPost()**](PropertyApi.md#restPropertiesAmazonsPost) | **POST** /rest/properties/amazons | Create one or multiple property amazon |
| [**restPropertiesAmazonsPropertyAmazonIdDelete()**](PropertyApi.md#restPropertiesAmazonsPropertyAmazonIdDelete) | **DELETE** /rest/properties/amazons/{propertyAmazonId} | Delete a property amazon |
| [**restPropertiesAmazonsPropertyAmazonIdGet()**](PropertyApi.md#restPropertiesAmazonsPropertyAmazonIdGet) | **GET** /rest/properties/amazons/{propertyAmazonId} | Get a property amazon |
| [**restPropertiesAmazonsPut()**](PropertyApi.md#restPropertiesAmazonsPut) | **PUT** /rest/properties/amazons | Update one or multiple property amazon |
| [**restPropertiesAvailabilitiesAvailabilityIdDelete()**](PropertyApi.md#restPropertiesAvailabilitiesAvailabilityIdDelete) | **DELETE** /rest/properties/availabilities/{availabilityId} | Delete an availability |
| [**restPropertiesAvailabilitiesAvailabilityIdGet()**](PropertyApi.md#restPropertiesAvailabilitiesAvailabilityIdGet) | **GET** /rest/properties/availabilities/{availabilityId} | Get an availability |
| [**restPropertiesAvailabilitiesAvailabilityIdPut()**](PropertyApi.md#restPropertiesAvailabilitiesAvailabilityIdPut) | **PUT** /rest/properties/availabilities/{availabilityId} | Update an availability |
| [**restPropertiesAvailabilitiesGet()**](PropertyApi.md#restPropertiesAvailabilitiesGet) | **GET** /rest/properties/availabilities | List availabilities |
| [**restPropertiesAvailabilitiesPost()**](PropertyApi.md#restPropertiesAvailabilitiesPost) | **POST** /rest/properties/availabilities | Create an availability |
| [**restPropertiesDestinationsGet()**](PropertyApi.md#restPropertiesDestinationsGet) | **GET** /rest/properties/destinations | Get property destinations |
| [**restPropertiesGet()**](PropertyApi.md#restPropertiesGet) | **GET** /rest/properties | List properties |
| [**restPropertiesGroupsGet()**](PropertyApi.md#restPropertiesGroupsGet) | **GET** /rest/properties/groups | List property groups |
| [**restPropertiesGroupsGroupIdGet()**](PropertyApi.md#restPropertiesGroupsGroupIdGet) | **GET** /rest/properties/groups/{groupId} | Get a property group |
| [**restPropertiesGroupsGroupIdPropertiesPost()**](PropertyApi.md#restPropertiesGroupsGroupIdPropertiesPost) | **POST** /rest/properties/groups/{groupId}/properties | Mass attach propertyId and groupId collection into the pivot table. |
| [**restPropertiesGroupsGroupIdPropertiesPropertyIdDelete()**](PropertyApi.md#restPropertiesGroupsGroupIdPropertiesPropertyIdDelete) | **DELETE** /rest/properties/groups/{groupId}/properties/{propertyId} | Detach a property from a property group. |
| [**restPropertiesGroupsGroupIdPropertiesPropertyIdPost()**](PropertyApi.md#restPropertiesGroupsGroupIdPropertiesPropertyIdPost) | **POST** /rest/properties/groups/{groupId}/properties/{propertyId} | Attach a property to a property group |
| [**restPropertiesGroupsGroupIdPut()**](PropertyApi.md#restPropertiesGroupsGroupIdPut) | **PUT** /rest/properties/groups/{groupId} | Update a property group |
| [**restPropertiesGroupsNamesGet()**](PropertyApi.md#restPropertiesGroupsNamesGet) | **GET** /rest/properties/groups/names | List group names |
| [**restPropertiesGroupsNamesGroupNameIdDelete()**](PropertyApi.md#restPropertiesGroupsNamesGroupNameIdDelete) | **DELETE** /rest/properties/groups/names/{groupNameId} | Delete a group name |
| [**restPropertiesGroupsNamesGroupNameIdGet()**](PropertyApi.md#restPropertiesGroupsNamesGroupNameIdGet) | **GET** /rest/properties/groups/names/{groupNameId} | Get a group name |
| [**restPropertiesGroupsNamesGroupNameIdPut()**](PropertyApi.md#restPropertiesGroupsNamesGroupNameIdPut) | **PUT** /rest/properties/groups/names/{groupNameId} | Update a group name |
| [**restPropertiesGroupsNamesPost()**](PropertyApi.md#restPropertiesGroupsNamesPost) | **POST** /rest/properties/groups/names | Create an group name |
| [**restPropertiesGroupsOptionsGet()**](PropertyApi.md#restPropertiesGroupsOptionsGet) | **GET** /rest/properties/groups/options | List group options |
| [**restPropertiesGroupsOptionsGroupOptionIdDelete()**](PropertyApi.md#restPropertiesGroupsOptionsGroupOptionIdDelete) | **DELETE** /rest/properties/groups/options/{groupOptionId} | Delete a group option |
| [**restPropertiesGroupsOptionsGroupOptionIdGet()**](PropertyApi.md#restPropertiesGroupsOptionsGroupOptionIdGet) | **GET** /rest/properties/groups/options/{groupOptionId} | Get a group option |
| [**restPropertiesGroupsOptionsGroupOptionIdPut()**](PropertyApi.md#restPropertiesGroupsOptionsGroupOptionIdPut) | **PUT** /rest/properties/groups/options/{groupOptionId} | Update a group option |
| [**restPropertiesGroupsOptionsPost()**](PropertyApi.md#restPropertiesGroupsOptionsPost) | **POST** /rest/properties/groups/options | Create a group option |
| [**restPropertiesGroupsPost()**](PropertyApi.md#restPropertiesGroupsPost) | **POST** /rest/properties/groups | Create a property group |
| [**restPropertiesGroupsPropertyIdDelete()**](PropertyApi.md#restPropertiesGroupsPropertyIdDelete) | **DELETE** /rest/properties/groups/{propertyId} | Delete a property group |
| [**restPropertiesGroupsSurchargeTypesGet()**](PropertyApi.md#restPropertiesGroupsSurchargeTypesGet) | **GET** /rest/properties/groups/surcharge/types | Get surcharge types from module configuration |
| [**restPropertiesGroupsTypesGet()**](PropertyApi.md#restPropertiesGroupsTypesGet) | **GET** /rest/properties/groups/types | Get group types from module configuration |
| [**restPropertiesMarketsGet()**](PropertyApi.md#restPropertiesMarketsGet) | **GET** /rest/properties/markets | List property markets |
| [**restPropertiesMarketsPost()**](PropertyApi.md#restPropertiesMarketsPost) | **POST** /rest/properties/markets | Create a property market |
| [**restPropertiesMarketsPropertiesMarketIdDelete()**](PropertyApi.md#restPropertiesMarketsPropertiesMarketIdDelete) | **DELETE** /rest/properties/markets/{propertiesMarketId} | Delete a property market |
| [**restPropertiesMarketsPropertiesMarketIdGet()**](PropertyApi.md#restPropertiesMarketsPropertiesMarketIdGet) | **GET** /rest/properties/markets/{propertiesMarketId} | Get a property market |
| [**restPropertiesMarketsPropertiesMarketIdPut()**](PropertyApi.md#restPropertiesMarketsPropertiesMarketIdPut) | **PUT** /rest/properties/markets/{propertiesMarketId} | Update a property market |
| [**restPropertiesMultipleOptionsDelete()**](PropertyApi.md#restPropertiesMultipleOptionsDelete) | **DELETE** /rest/properties/multiple/options | Delete property options |
| [**restPropertiesMultipleOptionsPost()**](PropertyApi.md#restPropertiesMultipleOptionsPost) | **POST** /rest/properties/multiple/options | Create property options |
| [**restPropertiesNamesGet()**](PropertyApi.md#restPropertiesNamesGet) | **GET** /rest/properties/names | List names |
| [**restPropertiesNamesNameIdDelete()**](PropertyApi.md#restPropertiesNamesNameIdDelete) | **DELETE** /rest/properties/names/{nameId} | Delete a property name |
| [**restPropertiesNamesNameIdGet()**](PropertyApi.md#restPropertiesNamesNameIdGet) | **GET** /rest/properties/names/{nameId} | Get a property name |
| [**restPropertiesNamesNameIdPut()**](PropertyApi.md#restPropertiesNamesNameIdPut) | **PUT** /rest/properties/names/{nameId} | Update a property name |
| [**restPropertiesNamesPost()**](PropertyApi.md#restPropertiesNamesPost) | **POST** /rest/properties/names | Create a name |
| [**restPropertiesOptionsGet()**](PropertyApi.md#restPropertiesOptionsGet) | **GET** /rest/properties/options | List property options |
| [**restPropertiesOptionsPost()**](PropertyApi.md#restPropertiesOptionsPost) | **POST** /rest/properties/options | Create a property option |
| [**restPropertiesOptionsPropertyOptionIdDelete()**](PropertyApi.md#restPropertiesOptionsPropertyOptionIdDelete) | **DELETE** /rest/properties/options/{propertyOptionId} | Delete a property option |
| [**restPropertiesOptionsPropertyOptionIdGet()**](PropertyApi.md#restPropertiesOptionsPropertyOptionIdGet) | **GET** /rest/properties/options/{propertyOptionId} | Get a property option |
| [**restPropertiesOptionsPropertyOptionIdPut()**](PropertyApi.md#restPropertiesOptionsPropertyOptionIdPut) | **PUT** /rest/properties/options/{propertyOptionId} | Update a property option |
| [**restPropertiesPost()**](PropertyApi.md#restPropertiesPost) | **POST** /rest/properties | Create a property |
| [**restPropertiesPropertyIdDelete()**](PropertyApi.md#restPropertiesPropertyIdDelete) | **DELETE** /rest/properties/{propertyId} | Delete a property |
| [**restPropertiesPropertyIdGet()**](PropertyApi.md#restPropertiesPropertyIdGet) | **GET** /rest/properties/{propertyId} | Get a property. |
| [**restPropertiesPropertyIdPut()**](PropertyApi.md#restPropertiesPropertyIdPut) | **PUT** /rest/properties/{propertyId} | Update a property |
| [**restPropertiesRelationsDelete()**](PropertyApi.md#restPropertiesRelationsDelete) | **DELETE** /rest/properties/relations | Delete property relations |
| [**restPropertiesRelationsGet()**](PropertyApi.md#restPropertiesRelationsGet) | **GET** /rest/properties/relations | List property relations |
| [**restPropertiesRelationsMarkupsGet()**](PropertyApi.md#restPropertiesRelationsMarkupsGet) | **GET** /rest/properties/relations/markups | List relation markups |
| [**restPropertiesRelationsMarkupsPost()**](PropertyApi.md#restPropertiesRelationsMarkupsPost) | **POST** /rest/properties/relations/markups | Create a property relation markup |
| [**restPropertiesRelationsMarkupsRelationMarkupIdDelete()**](PropertyApi.md#restPropertiesRelationsMarkupsRelationMarkupIdDelete) | **DELETE** /rest/properties/relations/markups/{relationMarkupId} | Delete a property relation markup |
| [**restPropertiesRelationsMarkupsRelationMarkupIdGet()**](PropertyApi.md#restPropertiesRelationsMarkupsRelationMarkupIdGet) | **GET** /rest/properties/relations/markups/{relationMarkupId} | Get a property relation markup |
| [**restPropertiesRelationsMarkupsRelationMarkupIdPut()**](PropertyApi.md#restPropertiesRelationsMarkupsRelationMarkupIdPut) | **PUT** /rest/properties/relations/markups/{relationMarkupId} | Update a property relation markup |
| [**restPropertiesRelationsPost()**](PropertyApi.md#restPropertiesRelationsPost) | **POST** /rest/properties/relations | Create a property relation |
| [**restPropertiesRelationsPut()**](PropertyApi.md#restPropertiesRelationsPut) | **PUT** /rest/properties/relations | Update relations |
| [**restPropertiesRelationsRelationIdDelete()**](PropertyApi.md#restPropertiesRelationsRelationIdDelete) | **DELETE** /rest/properties/relations/{relationId} | Delete a property relation |
| [**restPropertiesRelationsRelationIdFilePost()**](PropertyApi.md#restPropertiesRelationsRelationIdFilePost) | **POST** /rest/properties/relations/{relationId}/file | Save property relation file to S3 |
| [**restPropertiesRelationsRelationIdGet()**](PropertyApi.md#restPropertiesRelationsRelationIdGet) | **GET** /rest/properties/relations/{relationId} | Get a property relation |
| [**restPropertiesRelationsRelationIdPut()**](PropertyApi.md#restPropertiesRelationsRelationIdPut) | **PUT** /rest/properties/relations/{relationId} | Update a property relation |
| [**restPropertiesRelationsRelationIdValuesDelete()**](PropertyApi.md#restPropertiesRelationsRelationIdValuesDelete) | **DELETE** /rest/properties/relations/{relationId}/values | Delete all property relation values of a specified property relation |
| [**restPropertiesRelationsValuesGet()**](PropertyApi.md#restPropertiesRelationsValuesGet) | **GET** /rest/properties/relations/values | List property relation values |
| [**restPropertiesRelationsValuesPost()**](PropertyApi.md#restPropertiesRelationsValuesPost) | **POST** /rest/properties/relations/values | Create a property relation value |
| [**restPropertiesRelationsValuesPropertiesRelationValueIdDelete()**](PropertyApi.md#restPropertiesRelationsValuesPropertiesRelationValueIdDelete) | **DELETE** /rest/properties/relations/values/{propertiesRelationValueId} | Delete a property relation value |
| [**restPropertiesRelationsValuesPropertiesRelationValueIdPut()**](PropertyApi.md#restPropertiesRelationsValuesPropertiesRelationValueIdPut) | **PUT** /rest/properties/relations/values/{propertiesRelationValueId} | Update a property relation value |
| [**restPropertiesRelationsValuesPut()**](PropertyApi.md#restPropertiesRelationsValuesPut) | **PUT** /rest/properties/relations/values | Update multiple property relation value |
| [**restPropertiesRelationsValuesRelationMarkupIdGet()**](PropertyApi.md#restPropertiesRelationsValuesRelationMarkupIdGet) | **GET** /rest/properties/relations/values/{relationMarkupId} | Get a property relation value |
| [**restPropertiesSelectionsGet()**](PropertyApi.md#restPropertiesSelectionsGet) | **GET** /rest/properties/selections | List property selections |
| [**restPropertiesSelectionsPost()**](PropertyApi.md#restPropertiesSelectionsPost) | **POST** /rest/properties/selections | Create a property selection |
| [**restPropertiesSelectionsPropertySelectionIdDelete()**](PropertyApi.md#restPropertiesSelectionsPropertySelectionIdDelete) | **DELETE** /rest/properties/selections/{propertySelectionId} | Delete a property selection |
| [**restPropertiesSelectionsPropertySelectionIdGet()**](PropertyApi.md#restPropertiesSelectionsPropertySelectionIdGet) | **GET** /rest/properties/selections/{propertySelectionId} | Get a property selection |
| [**restPropertiesSelectionsPropertySelectionIdPut()**](PropertyApi.md#restPropertiesSelectionsPropertySelectionIdPut) | **PUT** /rest/properties/selections/{propertySelectionId} | Update a property selection |
| [**restPropertiesSystemlangGet()**](PropertyApi.md#restPropertiesSystemlangGet) | **GET** /rest/properties/systemlang | Get system language |


## `restPropertiesAmazonsGet()`

```php
restPropertiesAmazonsGet(): \ck/plenty-client\Model\PropertyAmazon[]
```

List property amazons

Lists property amazons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesAmazonsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesAmazonsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\PropertyAmazon[]**](../Model/PropertyAmazon.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesAmazonsPost()`

```php
restPropertiesAmazonsPost($property_id, $platform, $category, $field, $_rest_properties_amazons): \ck/plenty-client\Model\PropertyAmazon
```

Create one or multiple property amazon

Creates one or multiple property amazon.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | The ID of the property
$platform = 'platform_example'; // string | The platform of the property amazon
$category = 'category_example'; // string | The category of the property amazon
$field = 'field_example'; // string | The field of the property amazon
$_rest_properties_amazons = new \ck/plenty-client\Model\RestPropertiesAmazonsPostRequest(); // \ck/plenty-client\Model\RestPropertiesAmazonsPostRequest

try {
    $result = $apiInstance->restPropertiesAmazonsPost($property_id, $platform, $category, $field, $_rest_properties_amazons);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesAmazonsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**| The ID of the property | |
| **platform** | **string**| The platform of the property amazon | |
| **category** | **string**| The category of the property amazon | |
| **field** | **string**| The field of the property amazon | |
| **_rest_properties_amazons** | [**\ck/plenty-client\Model\RestPropertiesAmazonsPostRequest**](../Model/RestPropertiesAmazonsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyAmazon**](../Model/PropertyAmazon.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesAmazonsPropertyAmazonIdDelete()`

```php
restPropertiesAmazonsPropertyAmazonIdDelete($property_amazon_id)
```

Delete a property amazon

Deletes a property amazon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_amazon_id = 56; // int | The ID of the property amazon

try {
    $apiInstance->restPropertiesAmazonsPropertyAmazonIdDelete($property_amazon_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesAmazonsPropertyAmazonIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_amazon_id** | **int**| The ID of the property amazon | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesAmazonsPropertyAmazonIdGet()`

```php
restPropertiesAmazonsPropertyAmazonIdGet($property_amazon_id): \ck/plenty-client\Model\PropertyAmazon
```

Get a property amazon

Gets a proeprty amazon. The ID of the property amazon must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_amazon_id = 56; // int | The ID of the property amazon

try {
    $result = $apiInstance->restPropertiesAmazonsPropertyAmazonIdGet($property_amazon_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesAmazonsPropertyAmazonIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_amazon_id** | **int**| The ID of the property amazon | |

### Return type

[**\ck/plenty-client\Model\PropertyAmazon**](../Model/PropertyAmazon.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesAmazonsPut()`

```php
restPropertiesAmazonsPut(): \ck/plenty-client\Model\PropertyAmazon
```

Update one or multiple property amazon

Updates one or multiple property amazon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesAmazonsPut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesAmazonsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\PropertyAmazon**](../Model/PropertyAmazon.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesAvailabilitiesAvailabilityIdDelete()`

```php
restPropertiesAvailabilitiesAvailabilityIdDelete($availability_id)
```

Delete an availability

Deletes an availability. The ID ot the availability must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$availability_id = 56; // int | The ID of the availability

try {
    $apiInstance->restPropertiesAvailabilitiesAvailabilityIdDelete($availability_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesAvailabilitiesAvailabilityIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **availability_id** | **int**| The ID of the availability | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesAvailabilitiesAvailabilityIdGet()`

```php
restPropertiesAvailabilitiesAvailabilityIdGet($availability_id): \ck/plenty-client\Model\PropertyAvailability
```

Get an availability

Gets an availability. The ID of the availability must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$availability_id = 56; // int | The ID of the property availability

try {
    $result = $apiInstance->restPropertiesAvailabilitiesAvailabilityIdGet($availability_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesAvailabilitiesAvailabilityIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **availability_id** | **int**| The ID of the property availability | |

### Return type

[**\ck/plenty-client\Model\PropertyAvailability**](../Model/PropertyAvailability.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesAvailabilitiesAvailabilityIdPut()`

```php
restPropertiesAvailabilitiesAvailabilityIdPut($availability_id): \ck/plenty-client\Model\PropertyAvailability
```

Update an availability

Updates an availability. The ID of the availabilty must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$availability_id = 56; // int | The ID of the availability

try {
    $result = $apiInstance->restPropertiesAvailabilitiesAvailabilityIdPut($availability_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesAvailabilitiesAvailabilityIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **availability_id** | **int**| The ID of the availability | |

### Return type

[**\ck/plenty-client\Model\PropertyAvailability**](../Model/PropertyAvailability.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesAvailabilitiesGet()`

```php
restPropertiesAvailabilitiesGet(): \ck/plenty-client\Model\PropertyAvailability[]
```

List availabilities

Lists availabilities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesAvailabilitiesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesAvailabilitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\PropertyAvailability[]**](../Model/PropertyAvailability.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesAvailabilitiesPost()`

```php
restPropertiesAvailabilitiesPost($property_id, $type, $value, $_rest_properties_availabilities): \ck/plenty-client\Model\PropertyAvailability
```

Create an availability

Creates an availability.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | The ID of the property
$type = 56; // int | The type of the availability
$value = 56; // int | The value of the availability
$_rest_properties_availabilities = new \ck/plenty-client\Model\RestPropertiesAvailabilitiesPostRequest(); // \ck/plenty-client\Model\RestPropertiesAvailabilitiesPostRequest

try {
    $result = $apiInstance->restPropertiesAvailabilitiesPost($property_id, $type, $value, $_rest_properties_availabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesAvailabilitiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**| The ID of the property | |
| **type** | **int**| The type of the availability | |
| **value** | **int**| The value of the availability | |
| **_rest_properties_availabilities** | [**\ck/plenty-client\Model\RestPropertiesAvailabilitiesPostRequest**](../Model/RestPropertiesAvailabilitiesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyAvailability**](../Model/PropertyAvailability.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesDestinationsGet()`

```php
restPropertiesDestinationsGet(): object
```

Get property destinations

Returns a json with the destinations processed: data from providers and translations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesDestinationsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesDestinationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGet()`

```php
restPropertiesGet(): \ck/plenty-client\Model\Property[]
```

List properties

Lists properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\Property[]**](../Model/Property.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsGet()`

```php
restPropertiesGroupsGet($group_id): \ck/plenty-client\Model\PropertyGroup[]
```

List property groups

Lists property groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | The ID of the group

try {
    $result = $apiInstance->restPropertiesGroupsGet($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| The ID of the group | |

### Return type

[**\ck/plenty-client\Model\PropertyGroup[]**](../Model/PropertyGroup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsGroupIdGet()`

```php
restPropertiesGroupsGroupIdGet($group_id): \ck/plenty-client\Model\PropertyGroup
```

Get a property group

Gets a property group. The ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | The ID of the group

try {
    $result = $apiInstance->restPropertiesGroupsGroupIdGet($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsGroupIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| The ID of the group | |

### Return type

[**\ck/plenty-client\Model\PropertyGroup**](../Model/PropertyGroup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsGroupIdPropertiesPost()`

```php
restPropertiesGroupsGroupIdPropertiesPost($group_id): object
```

Mass attach propertyId and groupId collection into the pivot table.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | The ID of the group

try {
    $result = $apiInstance->restPropertiesGroupsGroupIdPropertiesPost($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsGroupIdPropertiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| The ID of the group | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsGroupIdPropertiesPropertyIdDelete()`

```php
restPropertiesGroupsGroupIdPropertiesPropertyIdDelete($group_id, $property_id): object
```

Detach a property from a property group.

Detaches a property from a property group. The ID of the property and the ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | The ID of the group
$property_id = 56; // int | The ID of the property

try {
    $result = $apiInstance->restPropertiesGroupsGroupIdPropertiesPropertyIdDelete($group_id, $property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsGroupIdPropertiesPropertyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| The ID of the group | |
| **property_id** | **int**| The ID of the property | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsGroupIdPropertiesPropertyIdPost()`

```php
restPropertiesGroupsGroupIdPropertiesPropertyIdPost($group_id, $property_id): object
```

Attach a property to a property group

Attaches a property to a property group. The ID of the property and the ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | The ID of the group
$property_id = 56; // int | The ID of the property

try {
    $result = $apiInstance->restPropertiesGroupsGroupIdPropertiesPropertyIdPost($group_id, $property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsGroupIdPropertiesPropertyIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| The ID of the group | |
| **property_id** | **int**| The ID of the property | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsGroupIdPut()`

```php
restPropertiesGroupsGroupIdPut($group_id, $position, $names, $options, $_rest_properties_groups_group_id): \ck/plenty-client\Model\PropertyGroup
```

Update a property group

Updates a property group. The ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int
$position = 56; // int | The position  of the group
$names = 56; // int | The names of the group.
$options = 56; // int | The options of the group
$_rest_properties_groups_group_id = new \ck/plenty-client\Model\RestPropertiesGroupsPostRequest(); // \ck/plenty-client\Model\RestPropertiesGroupsPostRequest

try {
    $result = $apiInstance->restPropertiesGroupsGroupIdPut($group_id, $position, $names, $options, $_rest_properties_groups_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsGroupIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**|  | |
| **position** | **int**| The position  of the group | [optional] |
| **names** | **int**| The names of the group. | [optional] |
| **options** | **int**| The options of the group | [optional] |
| **_rest_properties_groups_group_id** | [**\ck/plenty-client\Model\RestPropertiesGroupsPostRequest**](../Model/RestPropertiesGroupsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyGroup**](../Model/PropertyGroup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsNamesGet()`

```php
restPropertiesGroupsNamesGet(): \ck/plenty-client\Model\PropertyGroupName[]
```

List group names

Lists group names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesGroupsNamesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\PropertyGroupName[]**](../Model/PropertyGroupName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsNamesGroupNameIdDelete()`

```php
restPropertiesGroupsNamesGroupNameIdDelete($group_name_id)
```

Delete a group name

Deletes a group name. The ID of the group name must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_name_id = 56; // int | The ID of the group name

try {
    $apiInstance->restPropertiesGroupsNamesGroupNameIdDelete($group_name_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsNamesGroupNameIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_name_id** | **int**| The ID of the group name | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsNamesGroupNameIdGet()`

```php
restPropertiesGroupsNamesGroupNameIdGet($group_name_id): \ck/plenty-client\Model\PropertyGroupName
```

Get a group name

Gets a group name. The ID of the group name must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_name_id = 56; // int | The ID of the group name

try {
    $result = $apiInstance->restPropertiesGroupsNamesGroupNameIdGet($group_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsNamesGroupNameIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_name_id** | **int**| The ID of the group name | |

### Return type

[**\ck/plenty-client\Model\PropertyGroupName**](../Model/PropertyGroupName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsNamesGroupNameIdPut()`

```php
restPropertiesGroupsNamesGroupNameIdPut($group_name_id): \ck/plenty-client\Model\PropertyGroupName
```

Update a group name

Updates a group name. The ID of the group name must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_name_id = 56; // int | The ID of the group name

try {
    $result = $apiInstance->restPropertiesGroupsNamesGroupNameIdPut($group_name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsNamesGroupNameIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_name_id** | **int**| The ID of the group name | |

### Return type

[**\ck/plenty-client\Model\PropertyGroupName**](../Model/PropertyGroupName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsNamesPost()`

```php
restPropertiesGroupsNamesPost($property_id, $lang, $name, $_rest_properties_groups_names): \ck/plenty-client\Model\PropertyGroupName
```

Create an group name

Creates a group name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | The ID of the property
$lang = 'lang_example'; // string | The lang of the group name
$name = 'name_example'; // string | The name of the group name
$_rest_properties_groups_names = new \ck/plenty-client\Model\RestPropertiesGroupsNamesPostRequest(); // \ck/plenty-client\Model\RestPropertiesGroupsNamesPostRequest

try {
    $result = $apiInstance->restPropertiesGroupsNamesPost($property_id, $lang, $name, $_rest_properties_groups_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsNamesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**| The ID of the property | |
| **lang** | **string**| The lang of the group name | |
| **name** | **string**| The name of the group name | |
| **_rest_properties_groups_names** | [**\ck/plenty-client\Model\RestPropertiesGroupsNamesPostRequest**](../Model/RestPropertiesGroupsNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyGroupName**](../Model/PropertyGroupName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsOptionsGet()`

```php
restPropertiesGroupsOptionsGet(): \ck/plenty-client\Model\PropertyGroupOption[]
```

List group options

Lists group options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesGroupsOptionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsOptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\PropertyGroupOption[]**](../Model/PropertyGroupOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsOptionsGroupOptionIdDelete()`

```php
restPropertiesGroupsOptionsGroupOptionIdDelete($group_option_id)
```

Delete a group option

Deletes a group option. The ID of the group option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_option_id = 56; // int | The ID of the group option

try {
    $apiInstance->restPropertiesGroupsOptionsGroupOptionIdDelete($group_option_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsOptionsGroupOptionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_option_id** | **int**| The ID of the group option | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsOptionsGroupOptionIdGet()`

```php
restPropertiesGroupsOptionsGroupOptionIdGet($group_option_id): \ck/plenty-client\Model\PropertyGroupOption
```

Get a group option

Gets a group option. The ID of the group option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_option_id = 56; // int | The ID of the group option

try {
    $result = $apiInstance->restPropertiesGroupsOptionsGroupOptionIdGet($group_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsOptionsGroupOptionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_option_id** | **int**| The ID of the group option | |

### Return type

[**\ck/plenty-client\Model\PropertyGroupOption**](../Model/PropertyGroupOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsOptionsGroupOptionIdPut()`

```php
restPropertiesGroupsOptionsGroupOptionIdPut($group_option_id): \ck/plenty-client\Model\PropertyGroupOption
```

Update a group option

Updates a group option. The ID of the group option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_option_id = 56; // int | The ID of the group option

try {
    $result = $apiInstance->restPropertiesGroupsOptionsGroupOptionIdPut($group_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsOptionsGroupOptionIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_option_id** | **int**| The ID of the group option | |

### Return type

[**\ck/plenty-client\Model\PropertyGroupOption**](../Model/PropertyGroupOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsOptionsPost()`

```php
restPropertiesGroupsOptionsPost($property_group_id, $group_option_identifier, $value, $_rest_properties_groups_options): \ck/plenty-client\Model\PropertyGroupOption
```

Create a group option

Creates a group option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_group_id = 56; // int | The ID of the property group
$group_option_identifier = 'group_option_identifier_example'; // string | The groupOptionIdentifier of the group name
$value = 'value_example'; // string | The value of the group name
$_rest_properties_groups_options = new \ck/plenty-client\Model\RestPropertiesGroupsOptionsPostRequest(); // \ck/plenty-client\Model\RestPropertiesGroupsOptionsPostRequest

try {
    $result = $apiInstance->restPropertiesGroupsOptionsPost($property_group_id, $group_option_identifier, $value, $_rest_properties_groups_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsOptionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_group_id** | **int**| The ID of the property group | |
| **group_option_identifier** | **string**| The groupOptionIdentifier of the group name | |
| **value** | **string**| The value of the group name | |
| **_rest_properties_groups_options** | [**\ck/plenty-client\Model\RestPropertiesGroupsOptionsPostRequest**](../Model/RestPropertiesGroupsOptionsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyGroupOption**](../Model/PropertyGroupOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsPost()`

```php
restPropertiesGroupsPost($position, $names, $options, $_rest_properties_groups): \ck/plenty-client\Model\PropertyGroup
```

Create a property group

Creates a property group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$position = 56; // int | The position  of the group
$names = 56; // int | The names of the group.
$options = 56; // int | The options of the group
$_rest_properties_groups = new \ck/plenty-client\Model\RestPropertiesGroupsPostRequest(); // \ck/plenty-client\Model\RestPropertiesGroupsPostRequest

try {
    $result = $apiInstance->restPropertiesGroupsPost($position, $names, $options, $_rest_properties_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **position** | **int**| The position  of the group | |
| **names** | **int**| The names of the group. | [optional] |
| **options** | **int**| The options of the group | [optional] |
| **_rest_properties_groups** | [**\ck/plenty-client\Model\RestPropertiesGroupsPostRequest**](../Model/RestPropertiesGroupsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyGroup**](../Model/PropertyGroup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsPropertyIdDelete()`

```php
restPropertiesGroupsPropertyIdDelete($group_id, $property_id)
```

Delete a property group

Deletes a property group. The ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 56; // int | The ID of the group
$property_id = 56; // int

try {
    $apiInstance->restPropertiesGroupsPropertyIdDelete($group_id, $property_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsPropertyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **int**| The ID of the group | |
| **property_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsSurchargeTypesGet()`

```php
restPropertiesGroupsSurchargeTypesGet()
```

Get surcharge types from module configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->restPropertiesGroupsSurchargeTypesGet();
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsSurchargeTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesGroupsTypesGet()`

```php
restPropertiesGroupsTypesGet()
```

Get group types from module configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->restPropertiesGroupsTypesGet();
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesGroupsTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesMarketsGet()`

```php
restPropertiesMarketsGet(): \ck/plenty-client\Model\PropertyMarket[]
```

List property markets

Lists property markets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesMarketsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesMarketsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\PropertyMarket[]**](../Model/PropertyMarket.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesMarketsPost()`

```php
restPropertiesMarketsPost($property_id, $referrer_id, $referrer_sub_id, $value, $_rest_properties_markets): \ck/plenty-client\Model\PropertyMarket
```

Create a property market

Creates a property market.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | Property id
$referrer_id = 3.4; // float | The referrer id of the property market
$referrer_sub_id = 56; // int | The referrer sub id of the property market
$value = 'value_example'; // string | The value of the property market
$_rest_properties_markets = new \ck/plenty-client\Model\RestPropertiesMarketsPostRequest(); // \ck/plenty-client\Model\RestPropertiesMarketsPostRequest

try {
    $result = $apiInstance->restPropertiesMarketsPost($property_id, $referrer_id, $referrer_sub_id, $value, $_rest_properties_markets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesMarketsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**| Property id | |
| **referrer_id** | **float**| The referrer id of the property market | |
| **referrer_sub_id** | **int**| The referrer sub id of the property market | |
| **value** | **string**| The value of the property market | |
| **_rest_properties_markets** | [**\ck/plenty-client\Model\RestPropertiesMarketsPostRequest**](../Model/RestPropertiesMarketsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyMarket**](../Model/PropertyMarket.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesMarketsPropertiesMarketIdDelete()`

```php
restPropertiesMarketsPropertiesMarketIdDelete($property_market_id, $properties_market_id)
```

Delete a property market

Deletes a property market. The ID of the property market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_market_id = 56; // int | The ID of the property market
$properties_market_id = 56; // int

try {
    $apiInstance->restPropertiesMarketsPropertiesMarketIdDelete($property_market_id, $properties_market_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesMarketsPropertiesMarketIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_market_id** | **int**| The ID of the property market | |
| **properties_market_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesMarketsPropertiesMarketIdGet()`

```php
restPropertiesMarketsPropertiesMarketIdGet($property_market_id, $properties_market_id): \ck/plenty-client\Model\PropertyMarket
```

Get a property market

Gets a property market. The ID of the property market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_market_id = 56; // int | The ID of the property market
$properties_market_id = 56; // int

try {
    $result = $apiInstance->restPropertiesMarketsPropertiesMarketIdGet($property_market_id, $properties_market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesMarketsPropertiesMarketIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_market_id** | **int**| The ID of the property market | |
| **properties_market_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertyMarket**](../Model/PropertyMarket.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesMarketsPropertiesMarketIdPut()`

```php
restPropertiesMarketsPropertiesMarketIdPut($properties_market_id, $_rest_properties_markets_properties_market_id): \ck/plenty-client\Model\PropertyMarket
```

Update a property market

Updates a property market. The ID of the property market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$properties_market_id = 56; // int
$_rest_properties_markets_properties_market_id = new \ck/plenty-client\Model\RestPropertiesMarketsPropertiesMarketIdPutRequest(); // \ck/plenty-client\Model\RestPropertiesMarketsPropertiesMarketIdPutRequest

try {
    $result = $apiInstance->restPropertiesMarketsPropertiesMarketIdPut($properties_market_id, $_rest_properties_markets_properties_market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesMarketsPropertiesMarketIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **properties_market_id** | **int**|  | |
| **_rest_properties_markets_properties_market_id** | [**\ck/plenty-client\Model\RestPropertiesMarketsPropertiesMarketIdPutRequest**](../Model/RestPropertiesMarketsPropertiesMarketIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyMarket**](../Model/PropertyMarket.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesMultipleOptionsDelete()`

```php
restPropertiesMultipleOptionsDelete()
```

Delete property options

Deletes property options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->restPropertiesMultipleOptionsDelete();
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesMultipleOptionsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesMultipleOptionsPost()`

```php
restPropertiesMultipleOptionsPost($property_id, $type_option_identifier): \ck/plenty-client\Model\PropertyOption
```

Create property options

Creates property options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | ID of the property
$type_option_identifier = 'type_option_identifier_example'; // string | The identifier of the property option type

try {
    $result = $apiInstance->restPropertiesMultipleOptionsPost($property_id, $type_option_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesMultipleOptionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**| ID of the property | |
| **type_option_identifier** | **string**| The identifier of the property option type | |

### Return type

[**\ck/plenty-client\Model\PropertyOption**](../Model/PropertyOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesNamesGet()`

```php
restPropertiesNamesGet(): \ck/plenty-client\Model\PropertyName[]
```

List names

Lists names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesNamesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\PropertyName[]**](../Model/PropertyName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesNamesNameIdDelete()`

```php
restPropertiesNamesNameIdDelete($name_id)
```

Delete a property name

Deletes a property name. The ID of the property name must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name_id = 56; // int | The ID of the property name

try {
    $apiInstance->restPropertiesNamesNameIdDelete($name_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesNamesNameIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name_id** | **int**| The ID of the property name | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesNamesNameIdGet()`

```php
restPropertiesNamesNameIdGet($name_id): \ck/plenty-client\Model\PropertyName
```

Get a property name

Gets a proeprty name. The ID of the property name must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name_id = 56; // int | The ID of the property name

try {
    $result = $apiInstance->restPropertiesNamesNameIdGet($name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesNamesNameIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name_id** | **int**| The ID of the property name | |

### Return type

[**\ck/plenty-client\Model\PropertyName**](../Model/PropertyName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesNamesNameIdPut()`

```php
restPropertiesNamesNameIdPut($name_id): \ck/plenty-client\Model\PropertyName
```

Update a property name

Updates a property name. The ID of the property name must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name_id = 56; // int | The ID of the property name

try {
    $result = $apiInstance->restPropertiesNamesNameIdPut($name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesNamesNameIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name_id** | **int**| The ID of the property name | |

### Return type

[**\ck/plenty-client\Model\PropertyName**](../Model/PropertyName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesNamesPost()`

```php
restPropertiesNamesPost($property_id, $lang, $name, $description, $_rest_properties_names): \ck/plenty-client\Model\PropertyName
```

Create a name

Creates a name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | The id of the property name
$lang = 'lang_example'; // string | The lang of the property name
$name = 'name_example'; // string | The name of the property name
$description = 'description_example'; // string | The description of the property name
$_rest_properties_names = new \ck/plenty-client\Model\RestPropertiesNamesPostRequest(); // \ck/plenty-client\Model\RestPropertiesNamesPostRequest

try {
    $result = $apiInstance->restPropertiesNamesPost($property_id, $lang, $name, $description, $_rest_properties_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesNamesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**| The id of the property name | |
| **lang** | **string**| The lang of the property name | |
| **name** | **string**| The name of the property name | |
| **description** | **string**| The description of the property name | [optional] |
| **_rest_properties_names** | [**\ck/plenty-client\Model\RestPropertiesNamesPostRequest**](../Model/RestPropertiesNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyName**](../Model/PropertyName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesOptionsGet()`

```php
restPropertiesOptionsGet(): \ck/plenty-client\Model\PropertyOption[]
```

List property options

Lists property options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesOptionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesOptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\PropertyOption[]**](../Model/PropertyOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesOptionsPost()`

```php
restPropertiesOptionsPost($property_id, $type_option_identifier, $_rest_properties_options): \ck/plenty-client\Model\PropertyOption
```

Create a property option

Creates a property option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | ID of the property
$type_option_identifier = 'type_option_identifier_example'; // string | The identifier of the property option type
$_rest_properties_options = new \ck/plenty-client\Model\RestPropertiesOptionsPostRequest(); // \ck/plenty-client\Model\RestPropertiesOptionsPostRequest

try {
    $result = $apiInstance->restPropertiesOptionsPost($property_id, $type_option_identifier, $_rest_properties_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesOptionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**| ID of the property | |
| **type_option_identifier** | **string**| The identifier of the property option type | |
| **_rest_properties_options** | [**\ck/plenty-client\Model\RestPropertiesOptionsPostRequest**](../Model/RestPropertiesOptionsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyOption**](../Model/PropertyOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesOptionsPropertyOptionIdDelete()`

```php
restPropertiesOptionsPropertyOptionIdDelete($property_option_id)
```

Delete a property option

Deletes a property option. The ID of the proeprty option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_option_id = 56; // int | The ID of the property option

try {
    $apiInstance->restPropertiesOptionsPropertyOptionIdDelete($property_option_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesOptionsPropertyOptionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_option_id** | **int**| The ID of the property option | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesOptionsPropertyOptionIdGet()`

```php
restPropertiesOptionsPropertyOptionIdGet($property_option_id): \ck/plenty-client\Model\PropertyOption
```

Get a property option

Gets a property option. The ID of the property option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_option_id = 56; // int | The ID of the property option

try {
    $result = $apiInstance->restPropertiesOptionsPropertyOptionIdGet($property_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesOptionsPropertyOptionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_option_id** | **int**| The ID of the property option | |

### Return type

[**\ck/plenty-client\Model\PropertyOption**](../Model/PropertyOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesOptionsPropertyOptionIdPut()`

```php
restPropertiesOptionsPropertyOptionIdPut($property_option_id, $property_option_id2): \ck/plenty-client\Model\PropertyOption
```

Update a property option

Updates a property option. The ID of the property option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_option_id = 56; // int | The ID of the property option
$property_option_id2 = 56; // int

try {
    $result = $apiInstance->restPropertiesOptionsPropertyOptionIdPut($property_option_id, $property_option_id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesOptionsPropertyOptionIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_option_id** | **int**| The ID of the property option | |
| **property_option_id2** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertyOption**](../Model/PropertyOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesPost()`

```php
restPropertiesPost($cast, $type_identifier, $position, $_rest_properties): \ck/plenty-client\Model\Property
```

Create a property

Creates a property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cast = 'cast_example'; // string | The cast of the property
$type_identifier = 'type_identifier_example'; // string | The identifier of the property type
$position = 56; // int | The position of the property
$_rest_properties = new \ck/plenty-client\Model\RestPropertiesPostRequest(); // \ck/plenty-client\Model\RestPropertiesPostRequest

try {
    $result = $apiInstance->restPropertiesPost($cast, $type_identifier, $position, $_rest_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cast** | **string**| The cast of the property | |
| **type_identifier** | **string**| The identifier of the property type | |
| **position** | **int**| The position of the property | |
| **_rest_properties** | [**\ck/plenty-client\Model\RestPropertiesPostRequest**](../Model/RestPropertiesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Property**](../Model/Property.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesPropertyIdDelete()`

```php
restPropertiesPropertyIdDelete($property_id)
```

Delete a property

Deletes a property. The ID of the property must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | The ID of the property

try {
    $apiInstance->restPropertiesPropertyIdDelete($property_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesPropertyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**| The ID of the property | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesPropertyIdGet()`

```php
restPropertiesPropertyIdGet($property_id): \ck/plenty-client\Model\Property
```

Get a property.

Gets a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | The ID of the property

try {
    $result = $apiInstance->restPropertiesPropertyIdGet($property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesPropertyIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**| The ID of the property | |

### Return type

[**\ck/plenty-client\Model\Property**](../Model/Property.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesPropertyIdPut()`

```php
restPropertiesPropertyIdPut($property_id): \ck/plenty-client\Model\Property
```

Update a property

Updates a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | The ID of the property

try {
    $result = $apiInstance->restPropertiesPropertyIdPut($property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesPropertyIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**| The ID of the property | |

### Return type

[**\ck/plenty-client\Model\Property**](../Model/Property.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsDelete()`

```php
restPropertiesRelationsDelete($relation_id)
```

Delete property relations

Deletes property relations. The ID of the property relations must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_id = 56; // int | The ID of the property relation

try {
    $apiInstance->restPropertiesRelationsDelete($relation_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_id** | **int**| The ID of the property relation | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsGet()`

```php
restPropertiesRelationsGet($page, $items_per_page, $paginate, $relation_type_identifier, $relation_target_id): \ck/plenty-client\Model\PropertyRelation[]
```

List property relations

Lists property relations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Current page of the response
$items_per_page = 56; // int | The requested amount of items per result page
$paginate = 56; // int | The condition that determines if the pagination should be used (default value is set to 0)
$relation_type_identifier = 'relation_type_identifier_example'; // string | The parameter that decides the type of relation
$relation_target_id = 56; // int | The ID of the target of the relation

try {
    $result = $apiInstance->restPropertiesRelationsGet($page, $items_per_page, $paginate, $relation_type_identifier, $relation_target_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Current page of the response | [optional] |
| **items_per_page** | **int**| The requested amount of items per result page | [optional] |
| **paginate** | **int**| The condition that determines if the pagination should be used (default value is set to 0) | [optional] |
| **relation_type_identifier** | **string**| The parameter that decides the type of relation | [optional] |
| **relation_target_id** | **int**| The ID of the target of the relation | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyRelation[]**](../Model/PropertyRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsMarkupsGet()`

```php
restPropertiesRelationsMarkupsGet(): \ck/plenty-client\Model\PropertyRelationMarkup[]
```

List relation markups

Lists relation markups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesRelationsMarkupsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsMarkupsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\PropertyRelationMarkup[]**](../Model/PropertyRelationMarkup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsMarkupsPost()`

```php
restPropertiesRelationsMarkupsPost($property_relation_id, $variation_sales_price_id, $markup, $_rest_properties_relations_markups): \ck/plenty-client\Model\PropertyRelationMarkup
```

Create a property relation markup

Creates a property relation markup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_relation_id = 56; // int | The ID of the property elation
$variation_sales_price_id = 56; // int | The ID of a variation's sales price
$markup = 3.4; // float | The property relation markup
$_rest_properties_relations_markups = new \ck/plenty-client\Model\RestPropertiesRelationsMarkupsPostRequest(); // \ck/plenty-client\Model\RestPropertiesRelationsMarkupsPostRequest

try {
    $result = $apiInstance->restPropertiesRelationsMarkupsPost($property_relation_id, $variation_sales_price_id, $markup, $_rest_properties_relations_markups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsMarkupsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_relation_id** | **int**| The ID of the property elation | |
| **variation_sales_price_id** | **int**| The ID of a variation&#39;s sales price | |
| **markup** | **float**| The property relation markup | |
| **_rest_properties_relations_markups** | [**\ck/plenty-client\Model\RestPropertiesRelationsMarkupsPostRequest**](../Model/RestPropertiesRelationsMarkupsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyRelationMarkup**](../Model/PropertyRelationMarkup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsMarkupsRelationMarkupIdDelete()`

```php
restPropertiesRelationsMarkupsRelationMarkupIdDelete($relation_markup_id)
```

Delete a property relation markup

Deletes a property relation markup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_markup_id = 56; // int | The ID of the relation markup

try {
    $apiInstance->restPropertiesRelationsMarkupsRelationMarkupIdDelete($relation_markup_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsMarkupsRelationMarkupIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_markup_id** | **int**| The ID of the relation markup | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsMarkupsRelationMarkupIdGet()`

```php
restPropertiesRelationsMarkupsRelationMarkupIdGet($relation_markup_id): \ck/plenty-client\Model\PropertyRelationMarkup
```

Get a property relation markup

Gets a property relation markup. The ID of the property relation markup must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_markup_id = 56; // int | The ID of the relation markup

try {
    $result = $apiInstance->restPropertiesRelationsMarkupsRelationMarkupIdGet($relation_markup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsMarkupsRelationMarkupIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_markup_id** | **int**| The ID of the relation markup | |

### Return type

[**\ck/plenty-client\Model\PropertyRelationMarkup**](../Model/PropertyRelationMarkup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsMarkupsRelationMarkupIdPut()`

```php
restPropertiesRelationsMarkupsRelationMarkupIdPut($relation_markup_id): \ck/plenty-client\Model\PropertyRelationMarkup
```

Update a property relation markup

Updates a property relation markup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_markup_id = 56; // int | The ID of the property relation markup

try {
    $result = $apiInstance->restPropertiesRelationsMarkupsRelationMarkupIdPut($relation_markup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsMarkupsRelationMarkupIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_markup_id** | **int**| The ID of the property relation markup | |

### Return type

[**\ck/plenty-client\Model\PropertyRelationMarkup**](../Model/PropertyRelationMarkup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsPost()`

```php
restPropertiesRelationsPost($property_id, $relation_type_identifier, $relation_target_id, $selection_relation_id, $_rest_properties_relations): \ck/plenty-client\Model\PropertyRelation
```

Create a property relation

Creates a property relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | The ID of the property
$relation_type_identifier = 'relation_type_identifier_example'; // string | The identifier of the property relation type
$relation_target_id = 56; // int | The ID of the property relation target
$selection_relation_id = 56; // int | The ID of the property selection relation
$_rest_properties_relations = new \ck/plenty-client\Model\RestPropertiesRelationsPostRequest(); // \ck/plenty-client\Model\RestPropertiesRelationsPostRequest

try {
    $result = $apiInstance->restPropertiesRelationsPost($property_id, $relation_type_identifier, $relation_target_id, $selection_relation_id, $_rest_properties_relations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**| The ID of the property | |
| **relation_type_identifier** | **string**| The identifier of the property relation type | |
| **relation_target_id** | **int**| The ID of the property relation target | |
| **selection_relation_id** | **int**| The ID of the property selection relation | |
| **_rest_properties_relations** | [**\ck/plenty-client\Model\RestPropertiesRelationsPostRequest**](../Model/RestPropertiesRelationsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyRelation**](../Model/PropertyRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsPut()`

```php
restPropertiesRelationsPut($relation_id): \ck/plenty-client\Model\PropertyRelation[]
```

Update relations

Updates relations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_id = 56; // int | The ID of the property relation

try {
    $result = $apiInstance->restPropertiesRelationsPut($relation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_id** | **int**| The ID of the property relation | |

### Return type

[**\ck/plenty-client\Model\PropertyRelation[]**](../Model/PropertyRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsRelationIdDelete()`

```php
restPropertiesRelationsRelationIdDelete($relation_id)
```

Delete a property relation

Deletes a property relation. The ID of the property relation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_id = 56; // int | The ID of the property relation

try {
    $apiInstance->restPropertiesRelationsRelationIdDelete($relation_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsRelationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_id** | **int**| The ID of the property relation | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsRelationIdFilePost()`

```php
restPropertiesRelationsRelationIdFilePost($relation_id, $key, $content, $delete_if_exists): object
```

Save property relation file to S3

Saves property relation file to S3.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_id = 56; // int | The ID of the property relation
$key = 'key_example'; // string | The name of the file that needs to be saved
$content = 'content_example'; // string | The actual file content in text format
$delete_if_exists = True; // bool | Condition for the check of already existing file

try {
    $result = $apiInstance->restPropertiesRelationsRelationIdFilePost($relation_id, $key, $content, $delete_if_exists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsRelationIdFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_id** | **int**| The ID of the property relation | |
| **key** | **string**| The name of the file that needs to be saved | |
| **content** | **string**| The actual file content in text format | |
| **delete_if_exists** | **bool**| Condition for the check of already existing file | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsRelationIdGet()`

```php
restPropertiesRelationsRelationIdGet($relation_id): \ck/plenty-client\Model\PropertyRelation
```

Get a property relation

Gets a property relation. The ID of the property relation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_id = 56; // int | The ID of the relation

try {
    $result = $apiInstance->restPropertiesRelationsRelationIdGet($relation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsRelationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_id** | **int**| The ID of the relation | |

### Return type

[**\ck/plenty-client\Model\PropertyRelation**](../Model/PropertyRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsRelationIdPut()`

```php
restPropertiesRelationsRelationIdPut($relation_id): \ck/plenty-client\Model\PropertyRelation
```

Update a property relation

Updates a property relation. The ID of the property relation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_id = 56; // int | The ID of the property relation

try {
    $result = $apiInstance->restPropertiesRelationsRelationIdPut($relation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsRelationIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_id** | **int**| The ID of the property relation | |

### Return type

[**\ck/plenty-client\Model\PropertyRelation**](../Model/PropertyRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsRelationIdValuesDelete()`

```php
restPropertiesRelationsRelationIdValuesDelete($relation_id)
```

Delete all property relation values of a specified property relation

Delete all property relation values of a specified property relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_id = 56; // int

try {
    $apiInstance->restPropertiesRelationsRelationIdValuesDelete($relation_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsRelationIdValuesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsValuesGet()`

```php
restPropertiesRelationsValuesGet(): \ck/plenty-client\Model\PropertyRelationValue[]
```

List property relation values

Lists property relation values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesRelationsValuesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsValuesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\PropertyRelationValue[]**](../Model/PropertyRelationValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsValuesPost()`

```php
restPropertiesRelationsValuesPost($property_id, $lang, $value, $_rest_properties_relations_values): \ck/plenty-client\Model\PropertyRelationValue
```

Create a property relation value

Creates a property relation value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | The ID of the property
$lang = 'lang_example'; // string | The lang of the property relation value
$value = 'value_example'; // string | The value of the property relation
$_rest_properties_relations_values = new \ck/plenty-client\Model\RestPropertiesRelationsValuesPostRequest(); // \ck/plenty-client\Model\RestPropertiesRelationsValuesPostRequest

try {
    $result = $apiInstance->restPropertiesRelationsValuesPost($property_id, $lang, $value, $_rest_properties_relations_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsValuesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**| The ID of the property | |
| **lang** | **string**| The lang of the property relation value | |
| **value** | **string**| The value of the property relation | |
| **_rest_properties_relations_values** | [**\ck/plenty-client\Model\RestPropertiesRelationsValuesPostRequest**](../Model/RestPropertiesRelationsValuesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyRelationValue**](../Model/PropertyRelationValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsValuesPropertiesRelationValueIdDelete()`

```php
restPropertiesRelationsValuesPropertiesRelationValueIdDelete($property_relation_value_id, $properties_relation_value_id)
```

Delete a property relation value

Deletes a property relation value. The ID of the property relation value must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_relation_value_id = 56; // int | The ID of the property relation value
$properties_relation_value_id = 56; // int

try {
    $apiInstance->restPropertiesRelationsValuesPropertiesRelationValueIdDelete($property_relation_value_id, $properties_relation_value_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsValuesPropertiesRelationValueIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_relation_value_id** | **int**| The ID of the property relation value | |
| **properties_relation_value_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsValuesPropertiesRelationValueIdPut()`

```php
restPropertiesRelationsValuesPropertiesRelationValueIdPut($property_relation_value_id, $properties_relation_value_id): \ck/plenty-client\Model\PropertyRelationValue
```

Update a property relation value

Updates a property relation value. The ID of the property relation value must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_relation_value_id = 56; // int | The ID of the property relation value
$properties_relation_value_id = 56; // int

try {
    $result = $apiInstance->restPropertiesRelationsValuesPropertiesRelationValueIdPut($property_relation_value_id, $properties_relation_value_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsValuesPropertiesRelationValueIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_relation_value_id** | **int**| The ID of the property relation value | |
| **properties_relation_value_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertyRelationValue**](../Model/PropertyRelationValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsValuesPut()`

```php
restPropertiesRelationsValuesPut(): \ck/plenty-client\Model\PropertyRelationValue
```

Update multiple property relation value

Updates multiple property relation value

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesRelationsValuesPut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsValuesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\PropertyRelationValue**](../Model/PropertyRelationValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesRelationsValuesRelationMarkupIdGet()`

```php
restPropertiesRelationsValuesRelationMarkupIdGet($property_relation_id, $relation_markup_id): \ck/plenty-client\Model\PropertyRelationValue
```

Get a property relation value

Gets a property relation value. The ID of the property relation value must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_relation_id = 56; // int | The ID of the property relation
$relation_markup_id = 56; // int

try {
    $result = $apiInstance->restPropertiesRelationsValuesRelationMarkupIdGet($property_relation_id, $relation_markup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesRelationsValuesRelationMarkupIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_relation_id** | **int**| The ID of the property relation | |
| **relation_markup_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertyRelationValue**](../Model/PropertyRelationValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesSelectionsGet()`

```php
restPropertiesSelectionsGet(): \ck/plenty-client\Model\PropertySelection[]
```

List property selections

Lists property selections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesSelectionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesSelectionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\PropertySelection[]**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesSelectionsPost()`

```php
restPropertiesSelectionsPost($property_id, $position, $_rest_properties_selections): \ck/plenty-client\Model\PropertySelection
```

Create a property selection

Creates a property selection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int | The ID of the property
$position = 56; // int | The position of the property selection
$_rest_properties_selections = new \ck/plenty-client\Model\RestPropertiesSelectionsPostRequest(); // \ck/plenty-client\Model\RestPropertiesSelectionsPostRequest

try {
    $result = $apiInstance->restPropertiesSelectionsPost($property_id, $position, $_rest_properties_selections);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesSelectionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**| The ID of the property | |
| **position** | **int**| The position of the property selection | |
| **_rest_properties_selections** | [**\ck/plenty-client\Model\RestPropertiesSelectionsPostRequest**](../Model/RestPropertiesSelectionsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertySelection**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesSelectionsPropertySelectionIdDelete()`

```php
restPropertiesSelectionsPropertySelectionIdDelete($property_selection_id)
```

Delete a property selection

Deletes a property selection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_selection_id = 56; // int | The ID of the property selection

try {
    $apiInstance->restPropertiesSelectionsPropertySelectionIdDelete($property_selection_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesSelectionsPropertySelectionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_selection_id** | **int**| The ID of the property selection | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesSelectionsPropertySelectionIdGet()`

```php
restPropertiesSelectionsPropertySelectionIdGet($property_selection_id): \ck/plenty-client\Model\PropertySelection
```

Get a property selection

Gets a property selection. The ID of property selection must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_selection_id = 56; // int | The ID of the property selection

try {
    $result = $apiInstance->restPropertiesSelectionsPropertySelectionIdGet($property_selection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesSelectionsPropertySelectionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_selection_id** | **int**| The ID of the property selection | |

### Return type

[**\ck/plenty-client\Model\PropertySelection**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesSelectionsPropertySelectionIdPut()`

```php
restPropertiesSelectionsPropertySelectionIdPut($property_selection_id, $property_selection_id2): \ck/plenty-client\Model\PropertySelection
```

Update a property selection

Updates a property selection. The ID of the property selection must be specifed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_selection_id = 56; // int | The ID of the property selection
$property_selection_id2 = 56; // int

try {
    $result = $apiInstance->restPropertiesSelectionsPropertySelectionIdPut($property_selection_id, $property_selection_id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesSelectionsPropertySelectionIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_selection_id** | **int**| The ID of the property selection | |
| **property_selection_id2** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertySelection**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPropertiesSystemlangGet()`

```php
restPropertiesSystemlangGet(): object
```

Get system language

Gets the system language.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPropertiesSystemlangGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->restPropertiesSystemlangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

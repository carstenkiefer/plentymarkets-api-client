# ck/plenty-client\WarehouseApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restWarehousesLayoutsPost()**](WarehouseApi.md#restWarehousesLayoutsPost) | **POST** /rest/warehouses/layouts | Create a warehouse location layout |
| [**restWarehousesLocationsAvailabilityWarehouseLocationIdGet()**](WarehouseApi.md#restWarehousesLocationsAvailabilityWarehouseLocationIdGet) | **GET** /rest/warehouses/locations/availability/{warehouseLocationId} | Get availability for storage location |
| [**restWarehousesLocationsDelete()**](WarehouseApi.md#restWarehousesLocationsDelete) | **DELETE** /rest/warehouses/locations | Delete multiple warehouse locations |
| [**restWarehousesLocationsDetailsGet()**](WarehouseApi.md#restWarehousesLocationsDetailsGet) | **GET** /rest/warehouses/locations/details | Get warehouse location details |
| [**restWarehousesLocationsDimensionsPost()**](WarehouseApi.md#restWarehousesLocationsDimensionsPost) | **POST** /rest/warehouses/locations/dimensions | Create a warehouse location dimension |
| [**restWarehousesLocationsDimensionsWarehouseLocationDimensionIdDelete()**](WarehouseApi.md#restWarehousesLocationsDimensionsWarehouseLocationDimensionIdDelete) | **DELETE** /rest/warehouses/locations/dimensions/{warehouseLocationDimensionId} | Delete a warehouse location dimension |
| [**restWarehousesLocationsDimensionsWarehouseLocationDimensionIdGet()**](WarehouseApi.md#restWarehousesLocationsDimensionsWarehouseLocationDimensionIdGet) | **GET** /rest/warehouses/locations/dimensions/{warehouseLocationDimensionId} | Get a warehouse location dimension |
| [**restWarehousesLocationsDimensionsWarehouseLocationDimensionIdPut()**](WarehouseApi.md#restWarehousesLocationsDimensionsWarehouseLocationDimensionIdPut) | **PUT** /rest/warehouses/locations/dimensions/{warehouseLocationDimensionId} | Update a warehouse location dimension |
| [**restWarehousesLocationsGroupPut()**](WarehouseApi.md#restWarehousesLocationsGroupPut) | **PUT** /rest/warehouses/locations/group | Edit the purpose and status for a group of storage locations |
| [**restWarehousesLocationsLevelsPositionsPost()**](WarehouseApi.md#restWarehousesLocationsLevelsPositionsPost) | **POST** /rest/warehouses/locations/levels/positions | Move a warehouse location level position |
| [**restWarehousesLocationsLevelsPost()**](WarehouseApi.md#restWarehousesLocationsLevelsPost) | **POST** /rest/warehouses/locations/levels | Create a warehouse location level |
| [**restWarehousesLocationsLevelsWarehouseLocationLevelIdDelete()**](WarehouseApi.md#restWarehousesLocationsLevelsWarehouseLocationLevelIdDelete) | **DELETE** /rest/warehouses/locations/levels/{warehouseLocationLevelId} | Delete a warehouse location level |
| [**restWarehousesLocationsLevelsWarehouseLocationLevelIdGet()**](WarehouseApi.md#restWarehousesLocationsLevelsWarehouseLocationLevelIdGet) | **GET** /rest/warehouses/locations/levels/{warehouseLocationLevelId} | Get a warehouse location level |
| [**restWarehousesLocationsLevelsWarehouseLocationLevelIdPut()**](WarehouseApi.md#restWarehousesLocationsLevelsWarehouseLocationLevelIdPut) | **PUT** /rest/warehouses/locations/levels/{warehouseLocationLevelId} | Update a warehouse location level |
| [**restWarehousesLocationsMultipleDimensionsPost()**](WarehouseApi.md#restWarehousesLocationsMultipleDimensionsPost) | **POST** /rest/warehouses/locations/multiple_dimensions | Create multiple warehouse location dimensions |
| [**restWarehousesLocationsPositionsPost()**](WarehouseApi.md#restWarehousesLocationsPositionsPost) | **POST** /rest/warehouses/locations/positions | Move a warehouse location position |
| [**restWarehousesLocationsPost()**](WarehouseApi.md#restWarehousesLocationsPost) | **POST** /rest/warehouses/locations | Create a warehouse location |
| [**restWarehousesLocationsPreviewsPost()**](WarehouseApi.md#restWarehousesLocationsPreviewsPost) | **POST** /rest/warehouses/locations/previews | Generate warehouse location preview and saves it |
| [**restWarehousesLocationsStockWarehouseLocationIdGet()**](WarehouseApi.md#restWarehousesLocationsStockWarehouseLocationIdGet) | **GET** /rest/warehouses/locations/stock/{warehouseLocationId} | List warehouse locations stock |
| [**restWarehousesLocationsWarehouseIdLabelPost()**](WarehouseApi.md#restWarehousesLocationsWarehouseIdLabelPost) | **POST** /rest/warehouses/locations/{warehouseId}/label | Generate the warehouse location label |
| [**restWarehousesLocationsWarehouseLocationIdDelete()**](WarehouseApi.md#restWarehousesLocationsWarehouseLocationIdDelete) | **DELETE** /rest/warehouses/locations/{warehouseLocationId} | Delete a warehouse location |
| [**restWarehousesLocationsWarehouseLocationIdGet()**](WarehouseApi.md#restWarehousesLocationsWarehouseLocationIdGet) | **GET** /rest/warehouses/locations/{warehouseLocationId} | Get a warehouse location |
| [**restWarehousesLocationsWarehouseLocationIdPut()**](WarehouseApi.md#restWarehousesLocationsWarehouseLocationIdPut) | **PUT** /rest/warehouses/locations/{warehouseLocationId} | Update a warehouse location |
| [**restWarehousesStructureWarehouseIdGet()**](WarehouseApi.md#restWarehousesStructureWarehouseIdGet) | **GET** /rest/warehouses/structure/{warehouseId} | Get a warehouse location structure |
| [**restWarehousesStructureWarehouseIdMovingGet()**](WarehouseApi.md#restWarehousesStructureWarehouseIdMovingGet) | **GET** /rest/warehouses/structure/{warehouseId}/moving | Get a warehouse location structure moving |
| [**restWarehousesWarehouseIdLocationsDimensionsGet()**](WarehouseApi.md#restWarehousesWarehouseIdLocationsDimensionsGet) | **GET** /rest/warehouses/{warehouseId}/locations/dimensions | List warehouse location dimensions |
| [**restWarehousesWarehouseIdLocationsGet()**](WarehouseApi.md#restWarehousesWarehouseIdLocationsGet) | **GET** /rest/warehouses/{warehouseId}/locations | List warehouse locations |
| [**restWarehousesWarehouseIdLocationsLevelWarehouseLocationLevelIdGet()**](WarehouseApi.md#restWarehousesWarehouseIdLocationsLevelWarehouseLocationLevelIdGet) | **GET** /rest/warehouses/{warehouseId}/locations/level/{warehouseLocationLevelId} | List warehouse locations by levelId |
| [**restWarehousesWarehouseIdLocationsLevelsGet()**](WarehouseApi.md#restWarehousesWarehouseIdLocationsLevelsGet) | **GET** /rest/warehouses/{warehouseId}/locations/levels | List warehouse location levels |


## `restWarehousesLayoutsPost()`

```php
restWarehousesLayoutsPost($parent_id, $warehouse_id, $level, $name, $shortcut, $separator, $is_active_for_pickup_path, $dimension_id, $position, $level_id, $label, $purpose_key, $status_key): \ck/plenty-client\Model\WarehouseLocationDimension
```

Create a warehouse location layout

Creates a warehouse location layout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = 56; // int | The parent ID of the warehouse location dimension
$warehouse_id = 56; // int | The warehouse ID of the warehouse location dimension
$level = 56; // int | The level of the warehouse location dimension
$name = 'name_example'; // string | The name of the warehouse location dimension
$shortcut = 'shortcut_example'; // string | The shortcut of the warehouse location dimension
$separator = 'separator_example'; // string | The separator of the warehouse location dimension
$is_active_for_pickup_path = 56; // int | Active flag for pickup path of the warehouse location dimension
$dimension_id = 56; // int | The warehouse location dimension ID of the warehouse location level
$position = 56; // int | The position of the warehouse location level
$level_id = 56; // int | The warehouse location level ID of the warehouse location
$label = 'label_example'; // string | The label of the warehouse location
$purpose_key = 'purpose_key_example'; // string | The location type key of the warehouse location
$status_key = 'status_key_example'; // string | The location status key of the warehouse location

try {
    $result = $apiInstance->restWarehousesLayoutsPost($parent_id, $warehouse_id, $level, $name, $shortcut, $separator, $is_active_for_pickup_path, $dimension_id, $position, $level_id, $label, $purpose_key, $status_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLayoutsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parent_id** | **int**| The parent ID of the warehouse location dimension | |
| **warehouse_id** | **int**| The warehouse ID of the warehouse location dimension | |
| **level** | **int**| The level of the warehouse location dimension | |
| **name** | **string**| The name of the warehouse location dimension | |
| **shortcut** | **string**| The shortcut of the warehouse location dimension | |
| **separator** | **string**| The separator of the warehouse location dimension | |
| **is_active_for_pickup_path** | **int**| Active flag for pickup path of the warehouse location dimension | |
| **dimension_id** | **int**| The warehouse location dimension ID of the warehouse location level | |
| **position** | **int**| The position of the warehouse location level | |
| **level_id** | **int**| The warehouse location level ID of the warehouse location | |
| **label** | **string**| The label of the warehouse location | |
| **purpose_key** | **string**| The location type key of the warehouse location | |
| **status_key** | **string**| The location status key of the warehouse location | |

### Return type

[**\ck/plenty-client\Model\WarehouseLocationDimension**](../Model/WarehouseLocationDimension.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesLocationsAvailabilityWarehouseLocationIdGet()`

```php
restWarehousesLocationsAvailabilityWarehouseLocationIdGet($warehouse_location_id): object[]
```

Get availability for storage location

Gets availability for storage location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_location_id = 56; // int | The ID of the warehouse location

try {
    $result = $apiInstance->restWarehousesLocationsAvailabilityWarehouseLocationIdGet($warehouse_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsAvailabilityWarehouseLocationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_location_id** | **int**| The ID of the warehouse location | |

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesLocationsDelete()`

```php
restWarehousesLocationsDelete($warehouse_location_ids)
```

Delete multiple warehouse locations

Deletes multiple warehouse locations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_location_ids = 56; // int | An array containing all the ID's for the warehouse locations that need to be deleted

try {
    $apiInstance->restWarehousesLocationsDelete($warehouse_location_ids);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_location_ids** | **int**| An array containing all the ID&#39;s for the warehouse locations that need to be deleted | |

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

## `restWarehousesLocationsDetailsGet()`

```php
restWarehousesLocationsDetailsGet(): object
```

Get warehouse location details

Gets warehouse location details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restWarehousesLocationsDetailsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsDetailsGet: ', $e->getMessage(), PHP_EOL;
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

## `restWarehousesLocationsDimensionsPost()`

```php
restWarehousesLocationsDimensionsPost($parent_id, $warehouse_id, $level, $name, $shortcut, $separator, $is_active_for_pickup_path): \ck/plenty-client\Model\WarehouseLocationDimension
```

Create a warehouse location dimension

Creates a warehouse location dimension.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = 56; // int | The parent ID of the warehouse location dimension
$warehouse_id = 56; // int | The warehouse ID of the warehouse location dimension
$level = 56; // int | The level of the warehouse location dimension
$name = 'name_example'; // string | The name of the warehouse location dimension
$shortcut = 'shortcut_example'; // string | The shortcut of the warehouse location dimension
$separator = 'separator_example'; // string | The separator of the warehouse location dimension
$is_active_for_pickup_path = 56; // int | Active flag for pickup path of the warehouse location dimension

try {
    $result = $apiInstance->restWarehousesLocationsDimensionsPost($parent_id, $warehouse_id, $level, $name, $shortcut, $separator, $is_active_for_pickup_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsDimensionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parent_id** | **int**| The parent ID of the warehouse location dimension | |
| **warehouse_id** | **int**| The warehouse ID of the warehouse location dimension | |
| **level** | **int**| The level of the warehouse location dimension | |
| **name** | **string**| The name of the warehouse location dimension | |
| **shortcut** | **string**| The shortcut of the warehouse location dimension | |
| **separator** | **string**| The separator of the warehouse location dimension | |
| **is_active_for_pickup_path** | **int**| Active flag for pickup path of the warehouse location dimension | |

### Return type

[**\ck/plenty-client\Model\WarehouseLocationDimension**](../Model/WarehouseLocationDimension.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesLocationsDimensionsWarehouseLocationDimensionIdDelete()`

```php
restWarehousesLocationsDimensionsWarehouseLocationDimensionIdDelete($warehouse_location_dimension_id)
```

Delete a warehouse location dimension

Deletes a warehouse location dimension

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_location_dimension_id = 56; // int | The ID of the warehouse location dimension

try {
    $apiInstance->restWarehousesLocationsDimensionsWarehouseLocationDimensionIdDelete($warehouse_location_dimension_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsDimensionsWarehouseLocationDimensionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_location_dimension_id** | **int**| The ID of the warehouse location dimension | |

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

## `restWarehousesLocationsDimensionsWarehouseLocationDimensionIdGet()`

```php
restWarehousesLocationsDimensionsWarehouseLocationDimensionIdGet($warehouse_location_dimension_id): \ck/plenty-client\Model\WarehouseLocationDimension
```

Get a warehouse location dimension

Gets a warehouse location dimension by ID. The warehouse location ID is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_location_dimension_id = 56; // int | The ID of the warehouse location dimension

try {
    $result = $apiInstance->restWarehousesLocationsDimensionsWarehouseLocationDimensionIdGet($warehouse_location_dimension_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsDimensionsWarehouseLocationDimensionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_location_dimension_id** | **int**| The ID of the warehouse location dimension | |

### Return type

[**\ck/plenty-client\Model\WarehouseLocationDimension**](../Model/WarehouseLocationDimension.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesLocationsDimensionsWarehouseLocationDimensionIdPut()`

```php
restWarehousesLocationsDimensionsWarehouseLocationDimensionIdPut($warehouse_location_dimension_id): \ck/plenty-client\Model\WarehouseLocationDimension
```

Update a warehouse location dimension

Updates a warehouse location dimension

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_location_dimension_id = 56; // int | The ID of the warehouse location dimension

try {
    $result = $apiInstance->restWarehousesLocationsDimensionsWarehouseLocationDimensionIdPut($warehouse_location_dimension_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsDimensionsWarehouseLocationDimensionIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_location_dimension_id** | **int**| The ID of the warehouse location dimension | |

### Return type

[**\ck/plenty-client\Model\WarehouseLocationDimension**](../Model/WarehouseLocationDimension.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesLocationsGroupPut()`

```php
restWarehousesLocationsGroupPut($purpose, $status): \ck/plenty-client\Model\WarehouseLocation[]
```

Edit the purpose and status for a group of storage locations

Edits the purpose and status for a group of storage locations by passing the group storage location ID (can be sent as mass assignment)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purpose = 'purpose_example'; // string | The purpose key value for warehouse location purposeKey field
$status = 'status_example'; // string | The status key value for warehouse location status field

try {
    $result = $apiInstance->restWarehousesLocationsGroupPut($purpose, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsGroupPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purpose** | **string**| The purpose key value for warehouse location purposeKey field | |
| **status** | **string**| The status key value for warehouse location status field | |

### Return type

[**\ck/plenty-client\Model\WarehouseLocation[]**](../Model/WarehouseLocation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesLocationsLevelsPositionsPost()`

```php
restWarehousesLocationsLevelsPositionsPost($to_move, $target, $side)
```

Move a warehouse location level position

Moves a warehouse location level position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$to_move = 56; // int | The warehouse location level ID that needs needs to be moved
$target = 56; // int | The warehouse location level ID that stands as position for the warehouse location level that needs to be moved
$side = 'side_example'; // string | The actual position from the left or right side of target

try {
    $apiInstance->restWarehousesLocationsLevelsPositionsPost($to_move, $target, $side);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsLevelsPositionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **to_move** | **int**| The warehouse location level ID that needs needs to be moved | |
| **target** | **int**| The warehouse location level ID that stands as position for the warehouse location level that needs to be moved | |
| **side** | **string**| The actual position from the left or right side of target | |

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

## `restWarehousesLocationsLevelsPost()`

```php
restWarehousesLocationsLevelsPost($parent_id, $dimension_id, $position, $name): \ck/plenty-client\Model\WarehouseLocationLevel
```

Create a warehouse location level

Creates a warehouse location level.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = 56; // int | The parent ID of the warehouse location level
$dimension_id = 56; // int | The warehouse location dimension ID of the warehouse location level
$position = 56; // int | The position of the warehouse location level
$name = 'name_example'; // string | The name of the warehouse location level

try {
    $result = $apiInstance->restWarehousesLocationsLevelsPost($parent_id, $dimension_id, $position, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsLevelsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parent_id** | **int**| The parent ID of the warehouse location level | |
| **dimension_id** | **int**| The warehouse location dimension ID of the warehouse location level | |
| **position** | **int**| The position of the warehouse location level | |
| **name** | **string**| The name of the warehouse location level | |

### Return type

[**\ck/plenty-client\Model\WarehouseLocationLevel**](../Model/WarehouseLocationLevel.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesLocationsLevelsWarehouseLocationLevelIdDelete()`

```php
restWarehousesLocationsLevelsWarehouseLocationLevelIdDelete($warehouse_location_level_id)
```

Delete a warehouse location level

Deletes a warehouse location level

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_location_level_id = 56; // int | The ID of the warehouse location level

try {
    $apiInstance->restWarehousesLocationsLevelsWarehouseLocationLevelIdDelete($warehouse_location_level_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsLevelsWarehouseLocationLevelIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_location_level_id** | **int**| The ID of the warehouse location level | |

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

## `restWarehousesLocationsLevelsWarehouseLocationLevelIdGet()`

```php
restWarehousesLocationsLevelsWarehouseLocationLevelIdGet($warehouse_location_level_id): \ck/plenty-client\Model\WarehouseLocationLevel
```

Get a warehouse location level

Gets a warehouse location level by ID. The warehouse location ID is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_location_level_id = 56; // int | The ID of the warehouse location level

try {
    $result = $apiInstance->restWarehousesLocationsLevelsWarehouseLocationLevelIdGet($warehouse_location_level_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsLevelsWarehouseLocationLevelIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_location_level_id** | **int**| The ID of the warehouse location level | |

### Return type

[**\ck/plenty-client\Model\WarehouseLocationLevel**](../Model/WarehouseLocationLevel.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesLocationsLevelsWarehouseLocationLevelIdPut()`

```php
restWarehousesLocationsLevelsWarehouseLocationLevelIdPut($warehouse_location_level_id): \ck/plenty-client\Model\WarehouseLocationLevel
```

Update a warehouse location level

Updates a warehouse location level

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_location_level_id = 56; // int | The ID of the warehouse location level

try {
    $result = $apiInstance->restWarehousesLocationsLevelsWarehouseLocationLevelIdPut($warehouse_location_level_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsLevelsWarehouseLocationLevelIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_location_level_id** | **int**| The ID of the warehouse location level | |

### Return type

[**\ck/plenty-client\Model\WarehouseLocationLevel**](../Model/WarehouseLocationLevel.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesLocationsMultipleDimensionsPost()`

```php
restWarehousesLocationsMultipleDimensionsPost($dimensions): \ck/plenty-client\Model\WarehouseLocationDimension[]
```

Create multiple warehouse location dimensions

Creates multiple warehouse location dimension.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dimensions = 56; // int | The dimensions array that contains data for creating multiple dimensions

try {
    $result = $apiInstance->restWarehousesLocationsMultipleDimensionsPost($dimensions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsMultipleDimensionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dimensions** | **int**| The dimensions array that contains data for creating multiple dimensions | |

### Return type

[**\ck/plenty-client\Model\WarehouseLocationDimension[]**](../Model/WarehouseLocationDimension.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesLocationsPositionsPost()`

```php
restWarehousesLocationsPositionsPost($to_move, $target, $side)
```

Move a warehouse location position

Moves a warehouse location position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$to_move = 56; // int | The warehouse location ID that needs needs to be moved
$target = 56; // int | The warehouse location ID that stands as position for the warehouse location that needs to be moved
$side = 'side_example'; // string | The actual position from the left or right side of target

try {
    $apiInstance->restWarehousesLocationsPositionsPost($to_move, $target, $side);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsPositionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **to_move** | **int**| The warehouse location ID that needs needs to be moved | |
| **target** | **int**| The warehouse location ID that stands as position for the warehouse location that needs to be moved | |
| **side** | **string**| The actual position from the left or right side of target | |

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

## `restWarehousesLocationsPost()`

```php
restWarehousesLocationsPost($level_id, $label, $purpose_key, $status_key, $position): \ck/plenty-client\Model\WarehouseLocation
```

Create a warehouse location

Creates a warehouse location.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$level_id = 56; // int | The warehouse location level ID of the warehouse location
$label = 'label_example'; // string | The label of the warehouse location
$purpose_key = 'purpose_key_example'; // string | The location type key of the warehouse location
$status_key = 'status_key_example'; // string | The location status key of the warehouse location
$position = 56; // int | The position of the warehouse location

try {
    $result = $apiInstance->restWarehousesLocationsPost($level_id, $label, $purpose_key, $status_key, $position);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level_id** | **int**| The warehouse location level ID of the warehouse location | |
| **label** | **string**| The label of the warehouse location | |
| **purpose_key** | **string**| The location type key of the warehouse location | |
| **status_key** | **string**| The location status key of the warehouse location | |
| **position** | **int**| The position of the warehouse location | |

### Return type

[**\ck/plenty-client\Model\WarehouseLocation**](../Model/WarehouseLocation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesLocationsPreviewsPost()`

```php
restWarehousesLocationsPreviewsPost($dimensions, $storage_location_data, $level_data, $save): object
```

Generate warehouse location preview and saves it

Generates warehouse location preview and saves it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dimensions = 56; // int | The warehouse location dimensions used by the generator
$storage_location_data = 56; // int | The warehouse location data used by the generator
$level_data = 56; // int | The warehouse location level data used by the generator
$save = 56; // int | The save parameter that triggers the preview method or the process save method

try {
    $result = $apiInstance->restWarehousesLocationsPreviewsPost($dimensions, $storage_location_data, $level_data, $save);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsPreviewsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dimensions** | **int**| The warehouse location dimensions used by the generator | |
| **storage_location_data** | **int**| The warehouse location data used by the generator | |
| **level_data** | **int**| The warehouse location level data used by the generator | |
| **save** | **int**| The save parameter that triggers the preview method or the process save method | |

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

## `restWarehousesLocationsStockWarehouseLocationIdGet()`

```php
restWarehousesLocationsStockWarehouseLocationIdGet($warehouse_location_id, $warehouse_location_id2): \ck/plenty-client\Model\RestWarehousesLocationsStockWarehouseLocationIdGet200Response
```

List warehouse locations stock

Lists all warehouse locations stock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_location_id = 56; // int | The ID of the warehouse
$warehouse_location_id2 = 56; // int

try {
    $result = $apiInstance->restWarehousesLocationsStockWarehouseLocationIdGet($warehouse_location_id, $warehouse_location_id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsStockWarehouseLocationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_location_id** | **int**| The ID of the warehouse | |
| **warehouse_location_id2** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\RestWarehousesLocationsStockWarehouseLocationIdGet200Response**](../Model/RestWarehousesLocationsStockWarehouseLocationIdGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesLocationsWarehouseIdLabelPost()`

```php
restWarehousesLocationsWarehouseIdLabelPost($warehouse_id, $warehouse_location_ids): object
```

Generate the warehouse location label

Generates the warehouse location label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The actual warehouse ID
$warehouse_location_ids = 'warehouse_location_ids_example'; // string | A string with all warehouse location ID's for which a label needs to be generated

try {
    $result = $apiInstance->restWarehousesLocationsWarehouseIdLabelPost($warehouse_id, $warehouse_location_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsWarehouseIdLabelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The actual warehouse ID | |
| **warehouse_location_ids** | **string**| A string with all warehouse location ID&#39;s for which a label needs to be generated | |

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

## `restWarehousesLocationsWarehouseLocationIdDelete()`

```php
restWarehousesLocationsWarehouseLocationIdDelete($warehouse_location_id)
```

Delete a warehouse location

Deletes a warehouse location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_location_id = 56; // int | The ID of the warehouse location

try {
    $apiInstance->restWarehousesLocationsWarehouseLocationIdDelete($warehouse_location_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsWarehouseLocationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_location_id** | **int**| The ID of the warehouse location | |

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

## `restWarehousesLocationsWarehouseLocationIdGet()`

```php
restWarehousesLocationsWarehouseLocationIdGet($warehouse_location_id): \ck/plenty-client\Model\WarehouseLocation
```

Get a warehouse location

Gets a warehouse location by ID. The warehouse location ID is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_location_id = 56; // int | The ID of the warehouse location

try {
    $result = $apiInstance->restWarehousesLocationsWarehouseLocationIdGet($warehouse_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsWarehouseLocationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_location_id** | **int**| The ID of the warehouse location | |

### Return type

[**\ck/plenty-client\Model\WarehouseLocation**](../Model/WarehouseLocation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesLocationsWarehouseLocationIdPut()`

```php
restWarehousesLocationsWarehouseLocationIdPut($warehouse_location_id): \ck/plenty-client\Model\WarehouseLocation
```

Update a warehouse location

Updates a warehouse location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_location_id = 56; // int | The ID of the warehouse location

try {
    $result = $apiInstance->restWarehousesLocationsWarehouseLocationIdPut($warehouse_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesLocationsWarehouseLocationIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_location_id** | **int**| The ID of the warehouse location | |

### Return type

[**\ck/plenty-client\Model\WarehouseLocation**](../Model/WarehouseLocation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesStructureWarehouseIdGet()`

```php
restWarehousesStructureWarehouseIdGet($warehouse_id): object
```

Get a warehouse location structure

Gets a warehouse location structure by warehouse ID. The warehouse ID is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The actual warehouse ID

try {
    $result = $apiInstance->restWarehousesStructureWarehouseIdGet($warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesStructureWarehouseIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The actual warehouse ID | |

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

## `restWarehousesStructureWarehouseIdMovingGet()`

```php
restWarehousesStructureWarehouseIdMovingGet($warehouse_id): object
```

Get a warehouse location structure moving

Gets a warehouse location structure moving by warehouse ID. The warehouse ID is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The actual warehouse ID

try {
    $result = $apiInstance->restWarehousesStructureWarehouseIdMovingGet($warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesStructureWarehouseIdMovingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The actual warehouse ID | |

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

## `restWarehousesWarehouseIdLocationsDimensionsGet()`

```php
restWarehousesWarehouseIdLocationsDimensionsGet($warehouse_id): \ck/plenty-client\Model\WarehouseLocationDimension
```

List warehouse location dimensions

Lists all warehouse location dimensions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The ID of the warehouse

try {
    $result = $apiInstance->restWarehousesWarehouseIdLocationsDimensionsGet($warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesWarehouseIdLocationsDimensionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The ID of the warehouse | |

### Return type

[**\ck/plenty-client\Model\WarehouseLocationDimension**](../Model/WarehouseLocationDimension.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesWarehouseIdLocationsGet()`

```php
restWarehousesWarehouseIdLocationsGet($warehouse_id): \ck/plenty-client\Model\RestWarehousesLocationsStockWarehouseLocationIdGet200Response
```

List warehouse locations

Lists all warehouse locations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The ID of the warehouse

try {
    $result = $apiInstance->restWarehousesWarehouseIdLocationsGet($warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesWarehouseIdLocationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The ID of the warehouse | |

### Return type

[**\ck/plenty-client\Model\RestWarehousesLocationsStockWarehouseLocationIdGet200Response**](../Model/RestWarehousesLocationsStockWarehouseLocationIdGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWarehousesWarehouseIdLocationsLevelWarehouseLocationLevelIdGet()`

```php
restWarehousesWarehouseIdLocationsLevelWarehouseLocationLevelIdGet($warehouse_id, $level_id, $warehouse_location_level_id): object
```

List warehouse locations by levelId

Lists all warehouse locations by levelId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The ID of the warehouse
$level_id = 56; // int | The ID of the warehouse location level
$warehouse_location_level_id = 56; // int

try {
    $result = $apiInstance->restWarehousesWarehouseIdLocationsLevelWarehouseLocationLevelIdGet($warehouse_id, $level_id, $warehouse_location_level_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesWarehouseIdLocationsLevelWarehouseLocationLevelIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The ID of the warehouse | |
| **level_id** | **int**| The ID of the warehouse location level | |
| **warehouse_location_level_id** | **int**|  | |

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

## `restWarehousesWarehouseIdLocationsLevelsGet()`

```php
restWarehousesWarehouseIdLocationsLevelsGet($warehouse_id): \ck/plenty-client\Model\WarehouseLocationLevel[]
```

List warehouse location levels

Lists all warehouse location levels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The ID of the warehouse

try {
    $result = $apiInstance->restWarehousesWarehouseIdLocationsLevelsGet($warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restWarehousesWarehouseIdLocationsLevelsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The ID of the warehouse | |

### Return type

[**\ck/plenty-client\Model\WarehouseLocationLevel[]**](../Model/WarehouseLocationLevel.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

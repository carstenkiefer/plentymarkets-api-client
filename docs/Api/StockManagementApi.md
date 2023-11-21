# ck\StockManagementApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restStockmanagementStockGet()**](StockManagementApi.md#restStockmanagementStockGet) | **GET** /rest/stockmanagement/stock | List stock |
| [**restStockmanagementStockRedistributePut()**](StockManagementApi.md#restStockmanagementStockRedistributePut) | **PUT** /rest/stockmanagement/stock/redistribute | Redistribute stock |
| [**restStockmanagementStockTypesTypeGet()**](StockManagementApi.md#restStockmanagementStockTypesTypeGet) | **GET** /rest/stockmanagement/stock/types/{type} | List stock by warehouse type |
| [**restStockmanagementWarehousesGet()**](StockManagementApi.md#restStockmanagementWarehousesGet) | **GET** /rest/stockmanagement/warehouses | List warehouses |
| [**restStockmanagementWarehousesPost()**](StockManagementApi.md#restStockmanagementWarehousesPost) | **POST** /rest/stockmanagement/warehouses | Create a warehouse |
| [**restStockmanagementWarehousesWarehouseIdGet()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdGet) | **GET** /rest/stockmanagement/warehouses/{warehouseId} | Get a warehouse |
| [**restStockmanagementWarehousesWarehouseIdManagementRacksGet()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdManagementRacksGet) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/racks | List racks |
| [**restStockmanagementWarehousesWarehouseIdManagementRacksPost()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdManagementRacksPost) | **POST** /rest/stockmanagement/warehouses/{warehouseId}/management/racks | Create a rack |
| [**restStockmanagementWarehousesWarehouseIdManagementRacksRackIdGet()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdManagementRacksRackIdGet) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/racks/{rackId} | Get a rack |
| [**restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesGet()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesGet) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/racks/{rackId}/shelves | List shelves |
| [**restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesPost()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesPost) | **POST** /rest/stockmanagement/warehouses/{warehouseId}/management/racks/{rackId}/shelves | Create a shelf |
| [**restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdGet()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdGet) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/racks/{rackId}/shelves/{shelfId} | Get a shelf |
| [**restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/racks/{rackId}/shelves/{shelfId}/storageLocations | List storage locations |
| [**restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsPost()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsPost) | **POST** /rest/stockmanagement/warehouses/{warehouseId}/management/racks/{rackId}/shelves/{shelfId}/storageLocations | Create a storage location |
| [**restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsStorageLocationIdGet()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsStorageLocationIdGet) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/racks/{rackId}/shelves/{shelfId}/storageLocations/{storageLocationId} | Get a storage location |
| [**restStockmanagementWarehousesWarehouseIdManagementStorageLocationsGet()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdManagementStorageLocationsGet) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/storageLocations | List storage locations |
| [**restStockmanagementWarehousesWarehouseIdManagementStorageLocationsStorageLocationIdGet()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdManagementStorageLocationsStorageLocationIdGet) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/storageLocations/{storageLocationId} | Get a storage location |
| [**restStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPut()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPut) | **PUT** /rest/stockmanagement/warehouses/{warehouseId}/stock/bookIncomingItems | Book incoming stock |
| [**restStockmanagementWarehousesWarehouseIdStockBookOutgoingItemsPut()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdStockBookOutgoingItemsPut) | **PUT** /rest/stockmanagement/warehouses/{warehouseId}/stock/bookOutgoingItems | Book outgoing stock |
| [**restStockmanagementWarehousesWarehouseIdStockCorrectionPut()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdStockCorrectionPut) | **PUT** /rest/stockmanagement/warehouses/{warehouseId}/stock/correction | Correct stock |
| [**restStockmanagementWarehousesWarehouseIdStockGet()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdStockGet) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/stock | List stock by warehouse |
| [**restStockmanagementWarehousesWarehouseIdStockMovementsGet()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdStockMovementsGet) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/stock/movements | List stock movements |
| [**restStockmanagementWarehousesWarehouseIdStockStorageLocationsGet()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdStockStorageLocationsGet) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/stock/storageLocations | List stock of a warehouse per storage location |
| [**restStockmanagementWarehousesWarehouseIdStockUnpackVariationPut()**](StockManagementApi.md#restStockmanagementWarehousesWarehouseIdStockUnpackVariationPut) | **PUT** /rest/stockmanagement/warehouses/{warehouseId}/stock/unpackVariation | Unpack variation |


## `restStockmanagementStockGet()`

```php
restStockmanagementStockGet($updated_at_from, $updated_at_to, $variation_id, $page, $items_per_page, $columns): \ck\Model\RestStockmanagementStockGet200Response
```

List stock

Lists stock of all warehouses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_at_from = 'updated_at_from_example'; // string | Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$updated_at_to = 'updated_at_to_example'; // string | Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$variation_id = 56; // int | Filter that restricts the search result to stock with a variation. The id of the variation must be specified.
$page = 56; // int | The requested page.
$items_per_page = 56; // int | The number of items per page.
$columns = 56; // int | The properties to be loaded.

try {
    $result = $apiInstance->restStockmanagementStockGet($updated_at_from, $updated_at_to, $variation_id, $page, $items_per_page, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementStockGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updated_at_from** | **string**| Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **updated_at_to** | **string**| Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **variation_id** | **int**| Filter that restricts the search result to stock with a variation. The id of the variation must be specified. | [optional] |
| **page** | **int**| The requested page. | [optional] |
| **items_per_page** | **int**| The number of items per page. | [optional] |
| **columns** | **int**| The properties to be loaded. | [optional] |

### Return type

[**\ck\Model\RestStockmanagementStockGet200Response**](../Model/RestStockmanagementStockGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementStockRedistributePut()`

```php
restStockmanagementStockRedistributePut($_rest_stockmanagement_stock_redistribute)
```

Redistribute stock

Redistributes stock of one storage location among one or more storage locations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_stockmanagement_stock_redistribute = new \ck\Model\RestStockmanagementStockRedistributePutRequest(); // \ck\Model\RestStockmanagementStockRedistributePutRequest

try {
    $apiInstance->restStockmanagementStockRedistributePut($_rest_stockmanagement_stock_redistribute);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementStockRedistributePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_stockmanagement_stock_redistribute** | [**\ck\Model\RestStockmanagementStockRedistributePutRequest**](../Model/RestStockmanagementStockRedistributePutRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementStockTypesTypeGet()`

```php
restStockmanagementStockTypesTypeGet($type, $page, $items_per_page, $columns, $updated_at_from, $updated_at_to, $variation_id): \ck\Model\RestStockmanagementStockGet200Response
```

List stock by warehouse type

Lists stock for all warehouses of the same warehouse type. The name of the type must be specified. Currently the only type available is 'sales'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The name of the warehouse type. Currently only 'sales' is available.
$page = 56; // int | The requested page.
$items_per_page = 56; // int | The number of items per page.
$columns = 56; // int | The properties to be loaded.
$updated_at_from = 'updated_at_from_example'; // string | Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$updated_at_to = 'updated_at_to_example'; // string | Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$variation_id = 56; // int | Filter that restricts the search result to stock with a variation. The id of the variation must be specified.

try {
    $result = $apiInstance->restStockmanagementStockTypesTypeGet($type, $page, $items_per_page, $columns, $updated_at_from, $updated_at_to, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementStockTypesTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| The name of the warehouse type. Currently only &#39;sales&#39; is available. | |
| **page** | **int**| The requested page. | [optional] |
| **items_per_page** | **int**| The number of items per page. | [optional] |
| **columns** | **int**| The properties to be loaded. | [optional] |
| **updated_at_from** | **string**| Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **updated_at_to** | **string**| Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **variation_id** | **int**| Filter that restricts the search result to stock with a variation. The id of the variation must be specified. | [optional] |

### Return type

[**\ck\Model\RestStockmanagementStockGet200Response**](../Model/RestStockmanagementStockGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesGet()`

```php
restStockmanagementWarehousesGet($with): object
```

List warehouses

Lists warehouses without applying any filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 56; // int | Related objects to be loaded. repairWarehouse is the only relation currently available.

try {
    $result = $apiInstance->restStockmanagementWarehousesGet($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **int**| Related objects to be loaded. repairWarehouse is the only relation currently available. | [optional] |

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

## `restStockmanagementWarehousesPost()`

```php
restStockmanagementWarehousesPost($_rest_stockmanagement_warehouses): \ck\Model\Warehouse
```

Create a warehouse

Creates a warehouse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_stockmanagement_warehouses = new \ck\Model\RestStockmanagementWarehousesPostRequest(); // \ck\Model\RestStockmanagementWarehousesPostRequest

try {
    $result = $apiInstance->restStockmanagementWarehousesPost($_rest_stockmanagement_warehouses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_stockmanagement_warehouses** | [**\ck\Model\RestStockmanagementWarehousesPostRequest**](../Model/RestStockmanagementWarehousesPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\Warehouse**](../Model/Warehouse.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdGet()`

```php
restStockmanagementWarehousesWarehouseIdGet($warehouse_id, $with): \ck\Model\Warehouse
```

Get a warehouse

Gets a warehouse. The id of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The id of the warehouse to be loaded
$with = 56; // int | Related objects to be loaded. 'repairWarehouse' is the only relation currently available.

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdGet($warehouse_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The id of the warehouse to be loaded | |
| **with** | **int**| Related objects to be loaded. &#39;repairWarehouse&#39; is the only relation currently available. | [optional] |

### Return type

[**\ck\Model\Warehouse**](../Model/Warehouse.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdManagementRacksGet()`

```php
restStockmanagementWarehousesWarehouseIdManagementRacksGet($warehouse_id, $page, $items_per_page, $columns, $with): \ck\Model\RestStockmanagementWarehousesWarehouseIdManagementRacksGet200Response
```

List racks

Lists racks for a warehouse. The id of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The id of the warehouse.
$page = 56; // int | The requested page.
$items_per_page = 56; // int | Number of items per page.
$columns = 56; // int | The attributes to be loaded.
$with = 56; // int | The relations to be loaded. Possible values are 'warehouse', 'shelves' and 'storageLocations'.

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdManagementRacksGet($warehouse_id, $page, $items_per_page, $columns, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdManagementRacksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The id of the warehouse. | |
| **page** | **int**| The requested page. | [optional] |
| **items_per_page** | **int**| Number of items per page. | [optional] |
| **columns** | **int**| The attributes to be loaded. | [optional] |
| **with** | **int**| The relations to be loaded. Possible values are &#39;warehouse&#39;, &#39;shelves&#39; and &#39;storageLocations&#39;. | [optional] |

### Return type

[**\ck\Model\RestStockmanagementWarehousesWarehouseIdManagementRacksGet200Response**](../Model/RestStockmanagementWarehousesWarehouseIdManagementRacksGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdManagementRacksPost()`

```php
restStockmanagementWarehousesWarehouseIdManagementRacksPost($warehouse_id): \ck\Model\Rack
```

Create a rack

Creates a rack. The id of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The id of the warehouse.

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdManagementRacksPost($warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdManagementRacksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The id of the warehouse. | |

### Return type

[**\ck\Model\Rack**](../Model/Rack.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdManagementRacksRackIdGet()`

```php
restStockmanagementWarehousesWarehouseIdManagementRacksRackIdGet($warehouse_id, $rack_id, $columns, $with): \ck\Model\Rack
```

Get a rack

Gets a rack. The id of the rack and the id of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The id of the warehouse.
$rack_id = 56; // int | The id of the rack.
$columns = 56; // int | The attributes to be loaded.
$with = 56; // int | The relations to be loaded. Possible values are 'warehouse', 'shelves' and 'storageLocations'.

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdGet($warehouse_id, $rack_id, $columns, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The id of the warehouse. | |
| **rack_id** | **int**| The id of the rack. | |
| **columns** | **int**| The attributes to be loaded. | [optional] |
| **with** | **int**| The relations to be loaded. Possible values are &#39;warehouse&#39;, &#39;shelves&#39; and &#39;storageLocations&#39;. | [optional] |

### Return type

[**\ck\Model\Rack**](../Model/Rack.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesGet()`

```php
restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesGet($warehouse_id, $rack_id, $page, $items_per_page, $columns, $with): \ck\Model\RestStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesGet200Response
```

List shelves

Lists shelves for a warehouse. The id of the rack and the id of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The id of the warehouse.
$rack_id = 56; // int | The id of the rack.
$page = 56; // int | The requested page.
$items_per_page = 56; // int | Number of items per page.
$columns = 56; // int | The attributes to be loaded.
$with = 56; // int | The relations to be loaded. Possible values are 'warehouse', 'rack' and 'storageLocations'.

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesGet($warehouse_id, $rack_id, $page, $items_per_page, $columns, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The id of the warehouse. | |
| **rack_id** | **int**| The id of the rack. | |
| **page** | **int**| The requested page. | [optional] |
| **items_per_page** | **int**| Number of items per page. | [optional] |
| **columns** | **int**| The attributes to be loaded. | [optional] |
| **with** | **int**| The relations to be loaded. Possible values are &#39;warehouse&#39;, &#39;rack&#39; and &#39;storageLocations&#39;. | [optional] |

### Return type

[**\ck\Model\RestStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesGet200Response**](../Model/RestStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesPost()`

```php
restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesPost($warehouse_id, $rack_id): \ck\Model\Shelf
```

Create a shelf

Creates a shelf. The id of the warehouse and the id of the rack must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The id of the warehouse.
$rack_id = 56; // int | The id of the rack.

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesPost($warehouse_id, $rack_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The id of the warehouse. | |
| **rack_id** | **int**| The id of the rack. | |

### Return type

[**\ck\Model\Shelf**](../Model/Shelf.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdGet()`

```php
restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdGet($warehouse_id, $rack_id, $shelf_id, $columns, $with): \ck\Model\Shelf
```

Get a shelf

Gets a shelf. The id of the shelf, the id of the rack and the id of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The id of the warehouse.
$rack_id = 56; // int | The id of the rack.
$shelf_id = 56; // int | The id of the shelf.
$columns = 56; // int | The attributes to be loaded.
$with = 56; // int | The relations to be loaded. Possible values are 'warehouse', 'rack' and 'storageLocations'.

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdGet($warehouse_id, $rack_id, $shelf_id, $columns, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The id of the warehouse. | |
| **rack_id** | **int**| The id of the rack. | |
| **shelf_id** | **int**| The id of the shelf. | |
| **columns** | **int**| The attributes to be loaded. | [optional] |
| **with** | **int**| The relations to be loaded. Possible values are &#39;warehouse&#39;, &#39;rack&#39; and &#39;storageLocations&#39;. | [optional] |

### Return type

[**\ck\Model\Shelf**](../Model/Shelf.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet()`

```php
restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet($warehouse_id, $rack_id, $shelf_id, $page, $items_per_page, $columns, $with): \ck\Model\RestStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet200Response
```

List storage locations

Lists storage locations. The id of the warehouse, the id of the rack and the id of the shelf must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The id of the warehouse.
$rack_id = 56; // int | The id of the rack.
$shelf_id = 56; // int | The id of the shelf.
$page = 56; // int | The requested page.
$items_per_page = 56; // int | Number of items per page.
$columns = 56; // int | The attributes to be loaded.
$with = 56; // int | The relations to be loaded. Possible values are 'warehouse', 'rack' and 'shelf'.

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet($warehouse_id, $rack_id, $shelf_id, $page, $items_per_page, $columns, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The id of the warehouse. | |
| **rack_id** | **int**| The id of the rack. | |
| **shelf_id** | **int**| The id of the shelf. | |
| **page** | **int**| The requested page. | [optional] |
| **items_per_page** | **int**| Number of items per page. | [optional] |
| **columns** | **int**| The attributes to be loaded. | [optional] |
| **with** | **int**| The relations to be loaded. Possible values are &#39;warehouse&#39;, &#39;rack&#39; and &#39;shelf&#39;. | [optional] |

### Return type

[**\ck\Model\RestStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet200Response**](../Model/RestStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsPost()`

```php
restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsPost($warehouse_id, $rack_id, $shelf_id): \ck\Model\StorageLocation
```

Create a storage location

Creates a storage location. The id of the warehouse, the id of the rack and the id of the shelf must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The id of the warehouse.
$rack_id = 56; // int | The id of the rack.
$shelf_id = 56; // int | The id of the shelf.

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsPost($warehouse_id, $rack_id, $shelf_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The id of the warehouse. | |
| **rack_id** | **int**| The id of the rack. | |
| **shelf_id** | **int**| The id of the shelf. | |

### Return type

[**\ck\Model\StorageLocation**](../Model/StorageLocation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsStorageLocationIdGet()`

```php
restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsStorageLocationIdGet($warehouse_id, $rack_id, $shelf_id, $storage_location_id, $columns, $with): \ck\Model\StorageLocation
```

Get a storage location

Gets a storage location. The id of the warehouse, the id of the rack, the id of the shelf and the id of the storage location must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The id of the warehouse.
$rack_id = 56; // int | The id of the rack.
$shelf_id = 56; // int | The id of the shelf.
$storage_location_id = 56; // int | The id of the storage location.
$columns = 56; // int | The attributes to be loaded.
$with = 56; // int | The relations to be loaded. Possible values are 'warehouse', 'rack' and 'shelf'.

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsStorageLocationIdGet($warehouse_id, $rack_id, $shelf_id, $storage_location_id, $columns, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsStorageLocationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The id of the warehouse. | |
| **rack_id** | **int**| The id of the rack. | |
| **shelf_id** | **int**| The id of the shelf. | |
| **storage_location_id** | **int**| The id of the storage location. | |
| **columns** | **int**| The attributes to be loaded. | [optional] |
| **with** | **int**| The relations to be loaded. Possible values are &#39;warehouse&#39;, &#39;rack&#39; and &#39;shelf&#39;. | [optional] |

### Return type

[**\ck\Model\StorageLocation**](../Model/StorageLocation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdManagementStorageLocationsGet()`

```php
restStockmanagementWarehousesWarehouseIdManagementStorageLocationsGet($warehouse_id, $page, $items_per_page, $columns, $with): \ck\Model\RestStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet200Response
```

List storage locations

Lists storage locations that belong to a warehouse. The id of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The id of the warehouse.
$page = 56; // int | The requested page.
$items_per_page = 56; // int | Number of items per page.
$columns = 56; // int | The attributes to be loaded.
$with = 56; // int | The relations to be loaded. Possible values are 'warehouse', 'rack' and 'shelf'.

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdManagementStorageLocationsGet($warehouse_id, $page, $items_per_page, $columns, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdManagementStorageLocationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The id of the warehouse. | |
| **page** | **int**| The requested page. | [optional] |
| **items_per_page** | **int**| Number of items per page. | [optional] |
| **columns** | **int**| The attributes to be loaded. | [optional] |
| **with** | **int**| The relations to be loaded. Possible values are &#39;warehouse&#39;, &#39;rack&#39; and &#39;shelf&#39;. | [optional] |

### Return type

[**\ck\Model\RestStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet200Response**](../Model/RestStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdManagementStorageLocationsStorageLocationIdGet()`

```php
restStockmanagementWarehousesWarehouseIdManagementStorageLocationsStorageLocationIdGet($warehouse_id, $storage_location_id, $columns, $with): \ck\Model\StorageLocation
```

Get a storage location

Gets a storage location. The id of the storage location and the id of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The id of the warehouse.
$storage_location_id = 56; // int | The id of the storage location.
$columns = 56; // int | The attributes to be loaded.
$with = 56; // int | The relations to be loaded. Possible values are 'warehouse', 'rack' and 'shelf'.

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdManagementStorageLocationsStorageLocationIdGet($warehouse_id, $storage_location_id, $columns, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdManagementStorageLocationsStorageLocationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The id of the warehouse. | |
| **storage_location_id** | **int**| The id of the storage location. | |
| **columns** | **int**| The attributes to be loaded. | [optional] |
| **with** | **int**| The relations to be loaded. Possible values are &#39;warehouse&#39;, &#39;rack&#39; and &#39;shelf&#39;. | [optional] |

### Return type

[**\ck\Model\StorageLocation**](../Model/StorageLocation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPut()`

```php
restStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPut($warehouse_id, $_rest_stockmanagement_warehouses_warehouse_id_stock_book_incoming_items)
```

Book incoming stock

Books incoming stock for multiple variations. The incoming stock will be added to the existing stock. The ID of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The ID of the warehouse.
$_rest_stockmanagement_warehouses_warehouse_id_stock_book_incoming_items = new \ck\Model\RestStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPutRequest(); // \ck\Model\RestStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPutRequest

try {
    $apiInstance->restStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPut($warehouse_id, $_rest_stockmanagement_warehouses_warehouse_id_stock_book_incoming_items);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The ID of the warehouse. | |
| **_rest_stockmanagement_warehouses_warehouse_id_stock_book_incoming_items** | [**\ck\Model\RestStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPutRequest**](../Model/RestStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPutRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdStockBookOutgoingItemsPut()`

```php
restStockmanagementWarehousesWarehouseIdStockBookOutgoingItemsPut($warehouse_id, $_rest_stockmanagement_warehouses_warehouse_id_stock_book_outgoing_items)
```

Book outgoing stock

Books outgoing stock for multiple variations. The ID of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The ID of the warehouse.
$_rest_stockmanagement_warehouses_warehouse_id_stock_book_outgoing_items = new \ck\Model\RestStockmanagementWarehousesWarehouseIdStockBookOutgoingItemsPutRequest(); // \ck\Model\RestStockmanagementWarehousesWarehouseIdStockBookOutgoingItemsPutRequest

try {
    $apiInstance->restStockmanagementWarehousesWarehouseIdStockBookOutgoingItemsPut($warehouse_id, $_rest_stockmanagement_warehouses_warehouse_id_stock_book_outgoing_items);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdStockBookOutgoingItemsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The ID of the warehouse. | |
| **_rest_stockmanagement_warehouses_warehouse_id_stock_book_outgoing_items** | [**\ck\Model\RestStockmanagementWarehousesWarehouseIdStockBookOutgoingItemsPutRequest**](../Model/RestStockmanagementWarehousesWarehouseIdStockBookOutgoingItemsPutRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdStockCorrectionPut()`

```php
restStockmanagementWarehousesWarehouseIdStockCorrectionPut($warehouse_id, $_rest_stockmanagement_warehouses_warehouse_id_stock_correction)
```

Correct stock

Corrects stock. The ID of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The ID of the warehouse.
$_rest_stockmanagement_warehouses_warehouse_id_stock_correction = new \ck\Model\RestStockmanagementWarehousesWarehouseIdStockCorrectionPutRequest(); // \ck\Model\RestStockmanagementWarehousesWarehouseIdStockCorrectionPutRequest

try {
    $apiInstance->restStockmanagementWarehousesWarehouseIdStockCorrectionPut($warehouse_id, $_rest_stockmanagement_warehouses_warehouse_id_stock_correction);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdStockCorrectionPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The ID of the warehouse. | |
| **_rest_stockmanagement_warehouses_warehouse_id_stock_correction** | [**\ck\Model\RestStockmanagementWarehousesWarehouseIdStockCorrectionPutRequest**](../Model/RestStockmanagementWarehousesWarehouseIdStockCorrectionPutRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdStockGet()`

```php
restStockmanagementWarehousesWarehouseIdStockGet($warehouse_id, $updated_at_from, $updated_at_to, $variation_id, $page, $items_per_page, $columns): \ck\Model\RestStockmanagementStockGet200Response
```

List stock by warehouse

Lists stock for a warehouse. The ID of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The ID of the warehouse.
$updated_at_from = 'updated_at_from_example'; // string | Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$updated_at_to = 'updated_at_to_example'; // string | Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$variation_id = 56; // int | Filter that restricts the search result to stock with a variation. The id of the variation must be specified.
$page = 56; // int | The requested page.
$items_per_page = 56; // int | The number of items per page.
$columns = 56; // int | The properties to be loaded.

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdStockGet($warehouse_id, $updated_at_from, $updated_at_to, $variation_id, $page, $items_per_page, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdStockGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The ID of the warehouse. | |
| **updated_at_from** | **string**| Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **updated_at_to** | **string**| Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **variation_id** | **int**| Filter that restricts the search result to stock with a variation. The id of the variation must be specified. | [optional] |
| **page** | **int**| The requested page. | [optional] |
| **items_per_page** | **int**| The number of items per page. | [optional] |
| **columns** | **int**| The properties to be loaded. | [optional] |

### Return type

[**\ck\Model\RestStockmanagementStockGet200Response**](../Model/RestStockmanagementStockGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdStockMovementsGet()`

```php
restStockmanagementWarehousesWarehouseIdStockMovementsGet($warehouse_id, $page, $items_per_page, $variation_id, $item_id, $created_at_from, $created_at_to, $year, $columns): \ck\Model\RestItemsIdVariationsVariationIdStockMovementsGet200Response
```

List stock movements

Lists stock movements for a warehouse. The ID of the warehouse must be specified. To get movements older than 3 months, set the 'year' parameter. NOTE: You can either get archive entries or non-archive entries. You can not get entries for the current year that are younger and older than 3 months with one request. You need separate requests to get entries older and younger than 3 months. To get all entries younger than 3 month you do not need to specify a year or any createdAt parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int | The ID of the warehouse
$page = 56; // int | The requested page. The default page that will be returned is page 1.
$items_per_page = 56; // int | The number of items per page. The default number per page is 50.
$variation_id = 56; // int | The ID of the variation
$item_id = 56; // int | The ID of the item
$created_at_from = 'created_at_from_example'; // string | Get entries with createdAt date after this date
$created_at_to = 'created_at_to_example'; // string | Get entries with createdAt date before this date
$year = 56; // int | Get entries from the archive for the given year. All movements older than 3 months are stored in the archive.
$columns = 56; // int | The properties to be loaded

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdStockMovementsGet($warehouse_id, $page, $items_per_page, $variation_id, $item_id, $created_at_from, $created_at_to, $year, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdStockMovementsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**| The ID of the warehouse | |
| **page** | **int**| The requested page. The default page that will be returned is page 1. | |
| **items_per_page** | **int**| The number of items per page. The default number per page is 50. | |
| **variation_id** | **int**| The ID of the variation | [optional] |
| **item_id** | **int**| The ID of the item | [optional] |
| **created_at_from** | **string**| Get entries with createdAt date after this date | [optional] |
| **created_at_to** | **string**| Get entries with createdAt date before this date | [optional] |
| **year** | **int**| Get entries from the archive for the given year. All movements older than 3 months are stored in the archive. | [optional] |
| **columns** | **int**| The properties to be loaded | [optional] |

### Return type

[**\ck\Model\RestItemsIdVariationsVariationIdStockMovementsGet200Response**](../Model/RestItemsIdVariationsVariationIdStockMovementsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdStockStorageLocationsGet()`

```php
restStockmanagementWarehousesWarehouseIdStockStorageLocationsGet($warehouse_id, $updated_at_from, $updated_at_to, $variation_id, $storage_location_id, $page, $items_per_page, $columns, $with): \ck\Model\RestItemsIdVariationsVariationIdStockRedistributePut200Response
```

List stock of a warehouse per storage location

Lists stock of a warehouse for each variation and storage location. The stock will only be listed if the stock is positive. Negative stock will not be listed. The ID of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_id = 56; // int
$updated_at_from = 'updated_at_from_example'; // string | Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$updated_at_to = 'updated_at_to_example'; // string | Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$variation_id = 56; // int | Filter that restricts the search result to stock with a variation.
$storage_location_id = 56; // int | Filter that restricts the search result to stock of a storage location.
$page = 56; // int | The requested page.
$items_per_page = 56; // int | The number of items per page.
$columns = 56; // int | The properties to be loaded.
$with = 56; // int | Load additional relations for a StockStorageLocation. Possible values:     <ul>     <li>'storageLocation' = The storageLocation this stock information belongs to.</li>     </ul>     Example: <code>?with[]=storageLocation</code>

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdStockStorageLocationsGet($warehouse_id, $updated_at_from, $updated_at_to, $variation_id, $storage_location_id, $page, $items_per_page, $columns, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdStockStorageLocationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_id** | **int**|  | |
| **updated_at_from** | **string**| Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **updated_at_to** | **string**| Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **variation_id** | **int**| Filter that restricts the search result to stock with a variation. | [optional] |
| **storage_location_id** | **int**| Filter that restricts the search result to stock of a storage location. | [optional] |
| **page** | **int**| The requested page. | [optional] |
| **items_per_page** | **int**| The number of items per page. | [optional] |
| **columns** | **int**| The properties to be loaded. | [optional] |
| **with** | **int**| Load additional relations for a StockStorageLocation. Possible values:     &lt;ul&gt;     &lt;li&gt;&#39;storageLocation&#39; &#x3D; The storageLocation this stock information belongs to.&lt;/li&gt;     &lt;/ul&gt;     Example: &lt;code&gt;?with[]&#x3D;storageLocation&lt;/code&gt; | [optional] |

### Return type

[**\ck\Model\RestItemsIdVariationsVariationIdStockRedistributePut200Response**](../Model/RestItemsIdVariationsVariationIdStockRedistributePut200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesWarehouseIdStockUnpackVariationPut()`

```php
restStockmanagementWarehousesWarehouseIdStockUnpackVariationPut($variation_stock_intake, $variation_stock_correction, $warehouse_id): \ck\Model\Warehouse
```

Unpack variation

Unpacks a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\StockManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$variation_stock_intake = 56; // int | The new item that will be booked in as result of the unpacking
$variation_stock_correction = 56; // int | The item that is unpacked
$warehouse_id = 56; // int

try {
    $result = $apiInstance->restStockmanagementWarehousesWarehouseIdStockUnpackVariationPut($variation_stock_intake, $variation_stock_correction, $warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockManagementApi->restStockmanagementWarehousesWarehouseIdStockUnpackVariationPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **variation_stock_intake** | **int**| The new item that will be booked in as result of the unpacking | |
| **variation_stock_correction** | **int**| The item that is unpacked | |
| **warehouse_id** | **int**|  | |

### Return type

[**\ck\Model\Warehouse**](../Model/Warehouse.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

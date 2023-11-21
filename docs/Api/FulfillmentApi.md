# ck\FulfillmentApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restFulfillmentPicklistPickingOrderItemGet()**](FulfillmentApi.md#restFulfillmentPicklistPickingOrderItemGet) | **GET** /rest/fulfillment/picklist/picking_order_item |  |
| [**restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet()**](FulfillmentApi.md#restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet) | **GET** /rest/fulfillment/picklist/picking_order_item/{pickingOrderItemId} |  |


## `restFulfillmentPicklistPickingOrderItemGet()`

```php
restFulfillmentPicklistPickingOrderItemGet(): \ck\Model\PickingOrderItem[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restFulfillmentPicklistPickingOrderItemGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->restFulfillmentPicklistPickingOrderItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\PickingOrderItem[]**](../Model/PickingOrderItem.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet()`

```php
restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet($picking_order_item_id): \ck\Model\PickingOrderItem
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$picking_order_item_id = 56; // int | The PickingOrderItemId

try {
    $result = $apiInstance->restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet($picking_order_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentApi->restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **picking_order_item_id** | **int**| The PickingOrderItemId | |

### Return type

[**\ck\Model\PickingOrderItem**](../Model/PickingOrderItem.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

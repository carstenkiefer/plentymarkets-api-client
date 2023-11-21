# ck\BasketApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restBasketGet()**](BasketApi.md#restBasketGet) | **GET** /rest/basket | Get basket |
| [**restBasketItemsGet()**](BasketApi.md#restBasketItemsGet) | **GET** /rest/basket/items | List basket items |
| [**restBasketItemsIdGet()**](BasketApi.md#restBasketItemsIdGet) | **GET** /rest/basket/items/{id} | Find a basket item by it&#39;s ID |
| [**restBasketItemsPost()**](BasketApi.md#restBasketItemsPost) | **POST** /rest/basket/items | Add item to basket |


## `restBasketGet()`

```php
restBasketGet(): \ck\Model\Basket
```

Get basket

Gets the shopping cart for the current customer session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck\Api\BasketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restBasketGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasketApi->restBasketGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\Basket**](../Model/Basket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBasketItemsGet()`

```php
restBasketItemsGet(): \ck\Model\BasketItem[]
```

List basket items

Lists all items in the shopping cart for the current customer session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck\Api\BasketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restBasketItemsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasketApi->restBasketItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\BasketItem[]**](../Model/BasketItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBasketItemsIdGet()`

```php
restBasketItemsIdGet($id): \ck\Model\BasketItem
```

Find a basket item by it's ID

Retrieve an item that is currently in the basket by it's ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck\Api\BasketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->restBasketItemsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasketApi->restBasketItemsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck\Model\BasketItem**](../Model/BasketItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBasketItemsPost()`

```php
restBasketItemsPost($_rest_basket_items): \ck\Model\BasketItem
```

Add item to basket

Adds a new item to the shopping cart using the request parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck\Api\BasketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_rest_basket_items = new \ck\Model\RestBasketItemsPostRequest(); // \ck\Model\RestBasketItemsPostRequest

try {
    $result = $apiInstance->restBasketItemsPost($_rest_basket_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasketApi->restBasketItemsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_basket_items** | [**\ck\Model\RestBasketItemsPostRequest**](../Model/RestBasketItemsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\BasketItem**](../Model/BasketItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

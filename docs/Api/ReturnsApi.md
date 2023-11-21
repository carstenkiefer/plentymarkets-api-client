# ck/plenty-client\ReturnsApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restOrdersOrderIdShippingReturnsAssignLabelReturnsIdPut()**](ReturnsApi.md#restOrdersOrderIdShippingReturnsAssignLabelReturnsIdPut) | **PUT** /rest/orders/{orderId}/shipping/returns/assign_label/{returnsId} |  |
| [**restOrdersOrderIdShippingReturnsGet()**](ReturnsApi.md#restOrdersOrderIdShippingReturnsGet) | **GET** /rest/orders/{orderId}/shipping/returns |  |
| [**restOrdersShippingReturnsReturnsIdGet()**](ReturnsApi.md#restOrdersShippingReturnsReturnsIdGet) | **GET** /rest/orders/shipping/returns/{returnsId} |  |


## `restOrdersOrderIdShippingReturnsAssignLabelReturnsIdPut()`

```php
restOrdersOrderIdShippingReturnsAssignLabelReturnsIdPut($returns_id, $order_id): \ck/plenty-client\Model\OrderReturns
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$returns_id = 56; // int | The id of the order returns to be assigned.
$order_id = 56; // int | The id of the order that the order returns has to be assigned to.

try {
    $result = $apiInstance->restOrdersOrderIdShippingReturnsAssignLabelReturnsIdPut($returns_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->restOrdersOrderIdShippingReturnsAssignLabelReturnsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **returns_id** | **int**| The id of the order returns to be assigned. | |
| **order_id** | **int**| The id of the order that the order returns has to be assigned to. | |

### Return type

[**\ck/plenty-client\Model\OrderReturns**](../Model/OrderReturns.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdShippingReturnsGet()`

```php
restOrdersOrderIdShippingReturnsGet($order_id, $page, $items_per_page, $with): \ck/plenty-client\Model\RestOrdersShippingReturnsReturnsIdGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The id of the order to search the orders returns
$page = 56; // int | The page to get. The default page that will be returned is page 1.
$items_per_page = 56; // int | The number of orders to be displayed per page. The default number of orders per page is 50.
$with = 56; // int | Load additional relations for an order. Currently possible are:  <ul>  <li>'documents' = The document objects that are associated with the order returns.</li>  <li>'labels' = The base64 encoded labels that are associated with the order returns.</li>  </ul>  Example: <code>?with[]=documents&with[]=labels</code>

try {
    $result = $apiInstance->restOrdersOrderIdShippingReturnsGet($order_id, $page, $items_per_page, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->restOrdersOrderIdShippingReturnsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The id of the order to search the orders returns | |
| **page** | **int**| The page to get. The default page that will be returned is page 1. | [optional] |
| **items_per_page** | **int**| The number of orders to be displayed per page. The default number of orders per page is 50. | [optional] |
| **with** | **int**| Load additional relations for an order. Currently possible are:  &lt;ul&gt;  &lt;li&gt;&#39;documents&#39; &#x3D; The document objects that are associated with the order returns.&lt;/li&gt;  &lt;li&gt;&#39;labels&#39; &#x3D; The base64 encoded labels that are associated with the order returns.&lt;/li&gt;  &lt;/ul&gt;  Example: &lt;code&gt;?with[]&#x3D;documents&amp;with[]&#x3D;labels&lt;/code&gt; | [optional] |

### Return type

[**\ck/plenty-client\Model\RestOrdersShippingReturnsReturnsIdGet200Response**](../Model/RestOrdersShippingReturnsReturnsIdGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingReturnsReturnsIdGet()`

```php
restOrdersShippingReturnsReturnsIdGet($returns_id, $with): \ck/plenty-client\Model\RestOrdersShippingReturnsReturnsIdGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$returns_id = 56; // int | The id of the order returns to search for.
$with = 56; // int | Load additional relations for an order. Currently possible are:  <ul>  <li>'documents' = The document objects that are associated with the order returns.</li>  <li>'labels' = The base64 encoded labels that are associated with the order returns.</li>  </ul>  Example: <code>?with[]=documents&with[]=labels</code>

try {
    $result = $apiInstance->restOrdersShippingReturnsReturnsIdGet($returns_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->restOrdersShippingReturnsReturnsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **returns_id** | **int**| The id of the order returns to search for. | |
| **with** | **int**| Load additional relations for an order. Currently possible are:  &lt;ul&gt;  &lt;li&gt;&#39;documents&#39; &#x3D; The document objects that are associated with the order returns.&lt;/li&gt;  &lt;li&gt;&#39;labels&#39; &#x3D; The base64 encoded labels that are associated with the order returns.&lt;/li&gt;  &lt;/ul&gt;  Example: &lt;code&gt;?with[]&#x3D;documents&amp;with[]&#x3D;labels&lt;/code&gt; | [optional] |

### Return type

[**\ck/plenty-client\Model\RestOrdersShippingReturnsReturnsIdGet200Response**](../Model/RestOrdersShippingReturnsReturnsIdGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

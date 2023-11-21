# ck\OrderSummaryApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restAccountsOrderSummariesContactsContactIdGet()**](OrderSummaryApi.md#restAccountsOrderSummariesContactsContactIdGet) | **GET** /rest/accounts/order_summaries/contacts/{contactId} | Get order summary by contact ID |
| [**restAccountsOrderSummariesGet()**](OrderSummaryApi.md#restAccountsOrderSummariesGet) | **GET** /rest/accounts/order_summaries | List order summaries |
| [**restAccountsOrderSummariesOrderSummaryIdDelete()**](OrderSummaryApi.md#restAccountsOrderSummariesOrderSummaryIdDelete) | **DELETE** /rest/accounts/order_summaries/{orderSummaryId} | Delete order summary |
| [**restAccountsOrderSummariesOrderSummaryIdGet()**](OrderSummaryApi.md#restAccountsOrderSummariesOrderSummaryIdGet) | **GET** /rest/accounts/order_summaries/{orderSummaryId} | Get order summary by order summary ID |
| [**restAccountsOrderSummariesOrderSummaryIdPut()**](OrderSummaryApi.md#restAccountsOrderSummariesOrderSummaryIdPut) | **PUT** /rest/accounts/order_summaries/{orderSummaryId} | Update order summary |
| [**restAccountsOrderSummariesOrdersAddressIdGet()**](OrderSummaryApi.md#restAccountsOrderSummariesOrdersAddressIdGet) | **GET** /rest/accounts/order_summaries/orders/{addressId} | Get order summary by address ID |
| [**restAccountsOrderSummariesPost()**](OrderSummaryApi.md#restAccountsOrderSummariesPost) | **POST** /rest/accounts/order_summaries | Create order summary |


## `restAccountsOrderSummariesContactsContactIdGet()`

```php
restAccountsOrderSummariesContactsContactIdGet($contact_id): \ck\Model\OrderSummary
```

Get order summary by contact ID

Gets an order summary. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\OrderSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int

try {
    $result = $apiInstance->restAccountsOrderSummariesContactsContactIdGet($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSummaryApi->restAccountsOrderSummariesContactsContactIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**|  | |

### Return type

[**\ck\Model\OrderSummary**](../Model/OrderSummary.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsOrderSummariesGet()`

```php
restAccountsOrderSummariesGet(): \ck\Model\OrderSummary[]
```

List order summaries

Lists order summaries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\OrderSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsOrderSummariesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSummaryApi->restAccountsOrderSummariesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\OrderSummary[]**](../Model/OrderSummary.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsOrderSummariesOrderSummaryIdDelete()`

```php
restAccountsOrderSummariesOrderSummaryIdDelete($order_summary_id)
```

Delete order summary

Deletes an order summary. The ID of the order summary must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\OrderSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_summary_id = 56; // int

try {
    $apiInstance->restAccountsOrderSummariesOrderSummaryIdDelete($order_summary_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSummaryApi->restAccountsOrderSummariesOrderSummaryIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_summary_id** | **int**|  | |

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

## `restAccountsOrderSummariesOrderSummaryIdGet()`

```php
restAccountsOrderSummariesOrderSummaryIdGet($order_summary_id): \ck\Model\OrderSummary
```

Get order summary by order summary ID

Gets an order summary. The ID of the order summary must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\OrderSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_summary_id = 56; // int

try {
    $result = $apiInstance->restAccountsOrderSummariesOrderSummaryIdGet($order_summary_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSummaryApi->restAccountsOrderSummariesOrderSummaryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_summary_id** | **int**|  | |

### Return type

[**\ck\Model\OrderSummary**](../Model/OrderSummary.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsOrderSummariesOrderSummaryIdPut()`

```php
restAccountsOrderSummariesOrderSummaryIdPut($order_summary_id): \ck\Model\OrderSummary
```

Update order summary

Updates an order summary. The ID of the order summary must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\OrderSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_summary_id = 56; // int

try {
    $result = $apiInstance->restAccountsOrderSummariesOrderSummaryIdPut($order_summary_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSummaryApi->restAccountsOrderSummariesOrderSummaryIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_summary_id** | **int**|  | |

### Return type

[**\ck\Model\OrderSummary**](../Model/OrderSummary.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsOrderSummariesOrdersAddressIdGet()`

```php
restAccountsOrderSummariesOrdersAddressIdGet($address_id): \ck\Model\OrderSummary
```

Get order summary by address ID

Gets an order summary. The ID of the address must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\OrderSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 56; // int

try {
    $result = $apiInstance->restAccountsOrderSummariesOrdersAddressIdGet($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSummaryApi->restAccountsOrderSummariesOrdersAddressIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **int**|  | |

### Return type

[**\ck\Model\OrderSummary**](../Model/OrderSummary.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsOrderSummariesPost()`

```php
restAccountsOrderSummariesPost(): \ck\Model\OrderSummary
```

Create order summary

Creates an order summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\OrderSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsOrderSummariesPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSummaryApi->restAccountsOrderSummariesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\OrderSummary**](../Model/OrderSummary.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

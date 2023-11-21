# ck/plenty-client\PlentyMarketplaceApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restIoCustomerLoginPost()**](PlentyMarketplaceApi.md#restIoCustomerLoginPost) | **POST** /rest/io/customer/login | plentyMarketplace login |
| [**restPartnerPortalPartnerPluginVisibilityPost()**](PlentyMarketplaceApi.md#restPartnerPortalPartnerPluginVisibilityPost) | **POST** /rest/partner-portal/partner-plugin/visibility | Change plugin visibility |


## `restIoCustomerLoginPost()`

```php
restIoCustomerLoginPost($body)
```

plentyMarketplace login

Log in to plentyMarketplace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck/plenty-client\Api\PlentyMarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ck/plenty-client\Model\RestIoCustomerLoginPostRequest(); // \ck/plenty-client\Model\RestIoCustomerLoginPostRequest

try {
    $apiInstance->restIoCustomerLoginPost($body);
} catch (Exception $e) {
    echo 'Exception when calling PlentyMarketplaceApi->restIoCustomerLoginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\ck/plenty-client\Model\RestIoCustomerLoginPostRequest**](../Model/RestIoCustomerLoginPostRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPartnerPortalPartnerPluginVisibilityPost()`

```php
restPartnerPortalPartnerPluginVisibilityPost($plenty_id, $body)
```

Change plugin visibility

Make a plugin visible or invisible on plentyMarketplace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck/plenty-client\Api\PlentyMarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$plenty_id = 'plenty_id_example'; // string | Cookie from a successful login.
$body = new \ck/plenty-client\Model\RestPartnerPortalPartnerPluginVisibilityPostRequest(); // \ck/plenty-client\Model\RestPartnerPortalPartnerPluginVisibilityPostRequest

try {
    $apiInstance->restPartnerPortalPartnerPluginVisibilityPost($plenty_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlentyMarketplaceApi->restPartnerPortalPartnerPluginVisibilityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plenty_id** | **string**| Cookie from a successful login. | |
| **body** | [**\ck/plenty-client\Model\RestPartnerPortalPartnerPluginVisibilityPostRequest**](../Model/RestPartnerPortalPartnerPluginVisibilityPostRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

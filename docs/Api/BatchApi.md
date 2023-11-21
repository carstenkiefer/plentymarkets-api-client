# ck/plenty-client\BatchApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restBatchGet()**](BatchApi.md#restBatchGet) | **GET** /rest/batch | Make batch requests |


## `restBatchGet()`

```php
restBatchGet($_rest_batch): object[]
```

Make batch requests

Pass several operations into a single HTTP request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_batch = new \ck/plenty-client\Model\RestBatchGetRequest(); // \ck/plenty-client\Model\RestBatchGetRequest

try {
    $result = $apiInstance->restBatchGet($_rest_batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->restBatchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_batch** | [**\ck/plenty-client\Model\RestBatchGetRequest**](../Model/RestBatchGetRequest.md)|  | [optional] |

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

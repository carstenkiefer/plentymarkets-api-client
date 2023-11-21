# ck\ConvertGuestsApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restAccountsGuestsConvertPost()**](ConvertGuestsApi.md#restAccountsGuestsConvertPost) | **POST** /rest/accounts/guests/convert | Convert guest account into regular account |


## `restAccountsGuestsConvertPost()`

```php
restAccountsGuestsConvertPost(): \ck\Model\Contact
```

Convert guest account into regular account

Converts a guest account into a regular account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\ConvertGuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsGuestsConvertPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertGuestsApi->restAccountsGuestsConvertPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\Contact**](../Model/Contact.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

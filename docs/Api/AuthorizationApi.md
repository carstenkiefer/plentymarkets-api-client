# ck/plenty-client\AuthorizationApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restAuthorizedUserGet()**](AuthorizationApi.md#restAuthorizedUserGet) | **GET** /rest/authorized_user | Get authorized user |
| [**restUserAuthorizedUserWithUiConfigGet()**](AuthorizationApi.md#restUserAuthorizedUserWithUiConfigGet) | **GET** /rest/user/authorized_user_with_ui_config | Get authorized user with UiConfig |
| [**restUsersMeGet()**](AuthorizationApi.md#restUsersMeGet) | **GET** /rest/users/me | Get authorized user |


## `restAuthorizedUserGet()`

```php
restAuthorizedUserGet(): object
```

Get authorized user

Gets an authorized user. This call returns a JSON object with information about the user after login. This information is used for correctly displaying the plentymarkets back end.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAuthorizedUserGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->restAuthorizedUserGet: ', $e->getMessage(), PHP_EOL;
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

## `restUserAuthorizedUserWithUiConfigGet()`

```php
restUserAuthorizedUserWithUiConfigGet(): object
```

Get authorized user with UiConfig

Gets an authorized user with UiConfig. This call returns a JSON object with information about the user after login. This information is used for correctly displaying the plentymarkets back end.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restUserAuthorizedUserWithUiConfigGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->restUserAuthorizedUserWithUiConfigGet: ', $e->getMessage(), PHP_EOL;
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

## `restUsersMeGet()`

```php
restUsersMeGet(): object
```

Get authorized user

Gets an authorized user. This call returns a JSON object with information about the user after login. This information is used for correctly displaying the plentymarkets back end.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restUsersMeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->restUsersMeGet: ', $e->getMessage(), PHP_EOL;
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

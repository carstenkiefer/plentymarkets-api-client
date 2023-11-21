# ck/plenty-client\AuthenticationApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restCheckPasswordPost()**](AuthenticationApi.md#restCheckPasswordPost) | **POST** /rest/check_password |  |
| [**restCheckPinPost()**](AuthenticationApi.md#restCheckPinPost) | **POST** /rest/check_pin |  |
| [**restLoginPost()**](AuthenticationApi.md#restLoginPost) | **POST** /rest/login | Login |
| [**restLoginRefreshPost()**](AuthenticationApi.md#restLoginRefreshPost) | **POST** /rest/login/refresh | Refresh |
| [**restLogoutPost()**](AuthenticationApi.md#restLogoutPost) | **POST** /rest/logout | Logout |
| [**restQuickLoginPost()**](AuthenticationApi.md#restQuickLoginPost) | **POST** /rest/quick_login |  |
| [**restSessionLimitsGet()**](AuthenticationApi.md#restSessionLimitsGet) | **GET** /rest/session_limits |  |
| [**restUserGet()**](AuthenticationApi.md#restUserGet) | **GET** /rest/user | User |


## `restCheckPasswordPost()`

```php
restCheckPasswordPost(): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck/plenty-client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restCheckPasswordPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->restCheckPasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCheckPinPost()`

```php
restCheckPinPost(): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck/plenty-client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restCheckPinPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->restCheckPinPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restLoginPost()`

```php
restLoginPost($_rest_login): object
```

Login

Logs in to plentymarkets with your back end user credentials. The login call returns a JSON object that contains information, such as the access token and the refresh token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck/plenty-client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_rest_login = new \ck/plenty-client\Model\RestLoginPostRequest(); // \ck/plenty-client\Model\RestLoginPostRequest

try {
    $result = $apiInstance->restLoginPost($_rest_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->restLoginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_login** | [**\ck/plenty-client\Model\RestLoginPostRequest**](../Model/RestLoginPostRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restLoginRefreshPost()`

```php
restLoginRefreshPost(): \ck/plenty-client\Model\TokenData
```

Refresh

Refreshes the access token using the refresh token. The refresh token is part of the login call response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck/plenty-client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restLoginRefreshPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->restLoginRefreshPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\TokenData**](../Model/TokenData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restLogoutPost()`

```php
restLogoutPost()
```

Logout

Logs out the back end user from plentymarkets. The access token expires.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->restLogoutPost();
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->restLogoutPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `restQuickLoginPost()`

```php
restQuickLoginPost(): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck/plenty-client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restQuickLoginPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->restQuickLoginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restSessionLimitsGet()`

```php
restSessionLimitsGet(): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restSessionLimitsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->restSessionLimitsGet: ', $e->getMessage(), PHP_EOL;
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

## `restUserGet()`

```php
restUserGet(): \ck/plenty-client\Model\User
```

User

The user call returns a JSON object that contains information about the currently logged in API-User.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restUserGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->restUserGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\User**](../Model/User.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

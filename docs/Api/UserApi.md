# ck\UserApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restBackendUserUserIdGet()**](UserApi.md#restBackendUserUserIdGet) | **GET** /rest/backend/user/{userId} |  |
| [**restBackendUsersGet()**](UserApi.md#restBackendUsersGet) | **GET** /rest/backend/users |  |
| [**restBackendUsersSearchNameNameGet()**](UserApi.md#restBackendUsersSearchNameNameGet) | **GET** /rest/backend/users/search_name/{name} | Find all users having a name or username like the given one. |
| [**restUserBackendPluginsetGet()**](UserApi.md#restUserBackendPluginsetGet) | **GET** /rest/user/backend_pluginset | get the backend plugin set for user |
| [**restUserBackendPluginsetPost()**](UserApi.md#restUserBackendPluginsetPost) | **POST** /rest/user/backend_pluginset | set the backend plugin set for user |
| [**restUserPinUsersGet()**](UserApi.md#restUserPinUsersGet) | **GET** /rest/user/pin_users | get all User with a secret value |


## `restBackendUserUserIdGet()`

```php
restBackendUserUserIdGet($user_id): \ck\Model\User
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The UserId

try {
    $result = $apiInstance->restBackendUserUserIdGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->restBackendUserUserIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **int**| The UserId | |

### Return type

[**\ck\Model\User**](../Model/User.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBackendUsersGet()`

```php
restBackendUsersGet(): \ck\Model\User[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restBackendUsersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->restBackendUsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\User[]**](../Model/User.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBackendUsersSearchNameNameGet()`

```php
restBackendUsersSearchNameNameGet($name): \ck\Model\User[]
```

Find all users having a name or username like the given one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name to search for

try {
    $result = $apiInstance->restBackendUsersSearchNameNameGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->restBackendUsersSearchNameNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name to search for | |

### Return type

[**\ck\Model\User[]**](../Model/User.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restUserBackendPluginsetGet()`

```php
restUserBackendPluginsetGet(): \ck\Model\PluginSet
```

get the backend plugin set for user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restUserBackendPluginsetGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->restUserBackendPluginsetGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\PluginSet**](../Model/PluginSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restUserBackendPluginsetPost()`

```php
restUserBackendPluginsetPost(): object
```

set the backend plugin set for user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restUserBackendPluginsetPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->restUserBackendPluginsetPost: ', $e->getMessage(), PHP_EOL;
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

## `restUserPinUsersGet()`

```php
restUserPinUsersGet(): object
```

get all User with a secret value

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restUserPinUsersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->restUserPinUsersGet: ', $e->getMessage(), PHP_EOL;
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

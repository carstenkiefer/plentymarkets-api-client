# ck\AddressDesignApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restAddressLayoutCountryCountryIdGet()**](AddressDesignApi.md#restAddressLayoutCountryCountryIdGet) | **GET** /rest/address_layout/country/{countryId} | Get layout by country id |
| [**restAddressLayoutDefaultGet()**](AddressDesignApi.md#restAddressLayoutDefaultGet) | **GET** /rest/address_layout/default | Get default layout |
| [**restAddressLayoutFieldsGet()**](AddressDesignApi.md#restAddressLayoutFieldsGet) | **GET** /rest/address_layout_fields | List all available fields |
| [**restAddressLayoutGet()**](AddressDesignApi.md#restAddressLayoutGet) | **GET** /rest/address_layout | List all layouts with their contents |
| [**restAddressLayoutPost()**](AddressDesignApi.md#restAddressLayoutPost) | **POST** /rest/address_layout | Create new layout |
| [**restAddressLayoutUuidDelete()**](AddressDesignApi.md#restAddressLayoutUuidDelete) | **DELETE** /rest/address_layout/{uuid} | Delete layout |
| [**restAddressLayoutUuidGet()**](AddressDesignApi.md#restAddressLayoutUuidGet) | **GET** /rest/address_layout/{uuid} | Get layout |
| [**restAddressLayoutUuidPut()**](AddressDesignApi.md#restAddressLayoutUuidPut) | **PUT** /rest/address_layout/{uuid} | Update layout |


## `restAddressLayoutCountryCountryIdGet()`

```php
restAddressLayoutCountryCountryIdGet($country_id): object
```

Get layout by country id

Gets a layout by the country ID. The ID of the country must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AddressDesignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_id = 56; // int | The ID of the country

try {
    $result = $apiInstance->restAddressLayoutCountryCountryIdGet($country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressDesignApi->restAddressLayoutCountryCountryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_id** | **int**| The ID of the country | |

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

## `restAddressLayoutDefaultGet()`

```php
restAddressLayoutDefaultGet(): object
```

Get default layout

Gets the default layout. If no layout is set as default, the layout with the lowest ID will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AddressDesignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAddressLayoutDefaultGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressDesignApi->restAddressLayoutDefaultGet: ', $e->getMessage(), PHP_EOL;
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

## `restAddressLayoutFieldsGet()`

```php
restAddressLayoutFieldsGet(): object
```

List all available fields

Lists all available fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AddressDesignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAddressLayoutFieldsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressDesignApi->restAddressLayoutFieldsGet: ', $e->getMessage(), PHP_EOL;
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

## `restAddressLayoutGet()`

```php
restAddressLayoutGet(): object[]
```

List all layouts with their contents

Lists all layouts including the content for each layout.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AddressDesignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAddressLayoutGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressDesignApi->restAddressLayoutGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAddressLayoutPost()`

```php
restAddressLayoutPost($layout): object
```

Create new layout

Creates a new layout with the name and isDefault flag given.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AddressDesignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$layout = 'layout_example'; // string | The layout array

try {
    $result = $apiInstance->restAddressLayoutPost($layout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressDesignApi->restAddressLayoutPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **layout** | **string**| The layout array | |

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

## `restAddressLayoutUuidDelete()`

```php
restAddressLayoutUuidDelete($uuid): object
```

Delete layout

Deletes a layout. The ID of the layout must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AddressDesignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the layout

try {
    $result = $apiInstance->restAddressLayoutUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressDesignApi->restAddressLayoutUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the layout | |

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

## `restAddressLayoutUuidGet()`

```php
restAddressLayoutUuidGet($uuid): object
```

Get layout

Gets a layout. The ID of the layout must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AddressDesignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the layout

try {
    $result = $apiInstance->restAddressLayoutUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressDesignApi->restAddressLayoutUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the layout | |

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

## `restAddressLayoutUuidPut()`

```php
restAddressLayoutUuidPut($layout, $uuid): object
```

Update layout

Updates a layout. The ID of the layout must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AddressDesignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$layout = 'layout_example'; // string | The layout array
$uuid = 'uuid_example'; // string | The UUID of the layout

try {
    $result = $apiInstance->restAddressLayoutUuidPut($layout, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressDesignApi->restAddressLayoutUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **layout** | **string**| The layout array | |
| **uuid** | **string**| The UUID of the layout | |

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

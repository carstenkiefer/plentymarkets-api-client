# ck/plenty-client\ExportSettingsApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restExportsExportIdDelete()**](ExportSettingsApi.md#restExportsExportIdDelete) | **DELETE** /rest/exports/{exportId} | Delete export |
| [**restExportsExportIdFiltersKeyDelete()**](ExportSettingsApi.md#restExportsExportIdFiltersKeyDelete) | **DELETE** /rest/exports/{exportId}/filters/{key} | Delete filter from the export |
| [**restExportsExportIdGet()**](ExportSettingsApi.md#restExportsExportIdGet) | **GET** /rest/exports/{exportId} | Get export |
| [**restExportsExportIdPut()**](ExportSettingsApi.md#restExportsExportIdPut) | **PUT** /rest/exports/{exportId} | Update an export |
| [**restExportsGet()**](ExportSettingsApi.md#restExportsGet) | **GET** /rest/exports | List elastic exports |
| [**restExportsPost()**](ExportSettingsApi.md#restExportsPost) | **POST** /rest/exports | Create an export |


## `restExportsExportIdDelete()`

```php
restExportsExportIdDelete($export_id)
```

Delete export

Deletes an export. The ID of the export must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ExportSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_id = 56; // int

try {
    $apiInstance->restExportsExportIdDelete($export_id);
} catch (Exception $e) {
    echo 'Exception when calling ExportSettingsApi->restExportsExportIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **export_id** | **int**|  | |

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

## `restExportsExportIdFiltersKeyDelete()`

```php
restExportsExportIdFiltersKeyDelete($export_id, $key): object
```

Delete filter from the export

Deletes filter from the export. The ID of the export and the ID of the filter must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ExportSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_id = 56; // int
$key = 56; // int

try {
    $result = $apiInstance->restExportsExportIdFiltersKeyDelete($export_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportSettingsApi->restExportsExportIdFiltersKeyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **export_id** | **int**|  | |
| **key** | **int**|  | |

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

## `restExportsExportIdGet()`

```php
restExportsExportIdGet($export_id): \ck/plenty-client\Model\Export
```

Get export

Gets detailed information about an export. The ID of the export must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ExportSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_id = 56; // int

try {
    $result = $apiInstance->restExportsExportIdGet($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportSettingsApi->restExportsExportIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **export_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\Export**](../Model/Export.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restExportsExportIdPut()`

```php
restExportsExportIdPut($export_id, $_rest_exports_export_id): \ck/plenty-client\Model\Export
```

Update an export

Updates an export. The ID of the export must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ExportSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_id = 56; // int
$_rest_exports_export_id = new \ck/plenty-client\Model\RestExportsExportIdPutRequest(); // \ck/plenty-client\Model\RestExportsExportIdPutRequest

try {
    $result = $apiInstance->restExportsExportIdPut($export_id, $_rest_exports_export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportSettingsApi->restExportsExportIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **export_id** | **int**|  | |
| **_rest_exports_export_id** | [**\ck/plenty-client\Model\RestExportsExportIdPutRequest**](../Model/RestExportsExportIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Export**](../Model/Export.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restExportsGet()`

```php
restExportsGet($id, $format_key, $type, $name, $page, $items_per_page): \ck/plenty-client\Model\RestExportsGet200Response
```

List elastic exports

Lists elastic exports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ExportSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the export
$format_key = 'format_key_example'; // string | The format of the export
$type = 'type_example'; // string | The type of the export
$name = 'name_example'; // string | The name of the export
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The number of items to list per page

try {
    $result = $apiInstance->restExportsGet($id, $format_key, $type, $name, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportSettingsApi->restExportsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the export | [optional] |
| **format_key** | **string**| The format of the export | [optional] |
| **type** | **string**| The type of the export | [optional] |
| **name** | **string**| The name of the export | [optional] |
| **page** | **int**| The page of results to search for | [optional] |
| **items_per_page** | **int**| The number of items to list per page | [optional] |

### Return type

[**\ck/plenty-client\Model\RestExportsGet200Response**](../Model/RestExportsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restExportsPost()`

```php
restExportsPost($_rest_exports): \ck/plenty-client\Model\Export
```

Create an export

Creates an export.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ExportSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_exports = new \ck/plenty-client\Model\RestExportsPostRequest(); // \ck/plenty-client\Model\RestExportsPostRequest

try {
    $result = $apiInstance->restExportsPost($_rest_exports);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportSettingsApi->restExportsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_exports** | [**\ck/plenty-client\Model\RestExportsPostRequest**](../Model/RestExportsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Export**](../Model/Export.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

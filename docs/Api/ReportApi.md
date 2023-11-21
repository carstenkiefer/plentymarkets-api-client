# ck/plenty-client\ReportApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restReportsKeyFiguresConfigGet()**](ReportApi.md#restReportsKeyFiguresConfigGet) | **GET** /rest/reports/key-figures/config | Returns all key figure configs |
| [**restReportsKeyFiguresConfigKeyFigureConfigIdDelete()**](ReportApi.md#restReportsKeyFiguresConfigKeyFigureConfigIdDelete) | **DELETE** /rest/reports/key-figures/config/{keyFigureConfigId} | Delete key figure configuration |
| [**restReportsKeyFiguresConfigKeyFigureConfigIdGet()**](ReportApi.md#restReportsKeyFiguresConfigKeyFigureConfigIdGet) | **GET** /rest/reports/key-figures/config/{keyFigureConfigId} | Get key figure config |
| [**restReportsKeyFiguresConfigKeyFigureConfigIdPut()**](ReportApi.md#restReportsKeyFiguresConfigKeyFigureConfigIdPut) | **PUT** /rest/reports/key-figures/config/{keyFigureConfigId} | Update key figure configuration |
| [**restReportsKeyFiguresConfigPost()**](ReportApi.md#restReportsKeyFiguresConfigPost) | **POST** /rest/reports/key-figures/config | Add a key figure configuration |
| [**restReportsKeyFiguresConfigTemplatePost()**](ReportApi.md#restReportsKeyFiguresConfigTemplatePost) | **POST** /rest/reports/key-figures/config/template | Generate key figure config from template class |
| [**restReportsKeyFiguresConfigTemplatesGet()**](ReportApi.md#restReportsKeyFiguresConfigTemplatesGet) | **GET** /rest/reports/key-figures/config/templates | Get key figure templates |
| [**restReportsKeyFiguresConfigsDelete()**](ReportApi.md#restReportsKeyFiguresConfigsDelete) | **DELETE** /rest/reports/key-figures/configs | Delete multiple key figure configurations |
| [**restReportsKeyFiguresDetailsKeyFigureNameGet()**](ReportApi.md#restReportsKeyFiguresDetailsKeyFigureNameGet) | **GET** /rest/reports/key-figures/details/{keyFigureName} | Return key figure calculation details |
| [**restReportsKeyFiguresGet()**](ReportApi.md#restReportsKeyFiguresGet) | **GET** /rest/reports/key-figures | Return list of key figure classes |
| [**restReportsKeyFiguresResultsPost()**](ReportApi.md#restReportsKeyFiguresResultsPost) | **POST** /rest/reports/key-figures/results | Search for key figure calculation results |
| [**restReportsOrderTypesGet()**](ReportApi.md#restReportsOrderTypesGet) | **GET** /rest/reports/order-types | Get order types in string format |
| [**restReportsRawDataConfigGet()**](ReportApi.md#restReportsRawDataConfigGet) | **GET** /rest/reports/raw-data/config | Returns list of all saved configurations |
| [**restReportsRawDataConfigPut()**](ReportApi.md#restReportsRawDataConfigPut) | **PUT** /rest/reports/raw-data/config | Resets all saved raw data configurations with given data |
| [**restReportsRawDataCreatorsConfigsGet()**](ReportApi.md#restReportsRawDataCreatorsConfigsGet) | **GET** /rest/reports/raw-data/creators-configs | Return a list of raw data creators with their configurations |
| [**restReportsRawDataCreatorsGet()**](ReportApi.md#restReportsRawDataCreatorsGet) | **GET** /rest/reports/raw-data/creators | Get list of all raw data creators |
| [**restReportsRawDataFileGet()**](ReportApi.md#restReportsRawDataFileGet) | **GET** /rest/reports/raw-data/file | Get a raw data file from the storage, the storage path of the file must be specified. |
| [**restReportsRawDataGet()**](ReportApi.md#restReportsRawDataGet) | **GET** /rest/reports/raw-data | Get list of raw data files. Valid filter combinations: (dataName), (dataName &amp; processStatus), (createdAtTimestamp) |


## `restReportsKeyFiguresConfigGet()`

```php
restReportsKeyFiguresConfigGet(): \ck/plenty-client\Model\KeyFigureConfigSearchResult
```

Returns all key figure configs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsKeyFiguresConfigGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\KeyFigureConfigSearchResult**](../Model/KeyFigureConfigSearchResult.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restReportsKeyFiguresConfigKeyFigureConfigIdDelete()`

```php
restReportsKeyFiguresConfigKeyFigureConfigIdDelete($key_figure_config_id): object
```

Delete key figure configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_figure_config_id = 56; // int

try {
    $result = $apiInstance->restReportsKeyFiguresConfigKeyFigureConfigIdDelete($key_figure_config_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigKeyFigureConfigIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_figure_config_id** | **int**|  | |

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

## `restReportsKeyFiguresConfigKeyFigureConfigIdGet()`

```php
restReportsKeyFiguresConfigKeyFigureConfigIdGet($key_figure_config_id): \ck/plenty-client\Model\KeyFigureConfig
```

Get key figure config

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_figure_config_id = 56; // int

try {
    $result = $apiInstance->restReportsKeyFiguresConfigKeyFigureConfigIdGet($key_figure_config_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigKeyFigureConfigIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_figure_config_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\KeyFigureConfig**](../Model/KeyFigureConfig.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restReportsKeyFiguresConfigKeyFigureConfigIdPut()`

```php
restReportsKeyFiguresConfigKeyFigureConfigIdPut($key_figure_config_id): \ck/plenty-client\Model\KeyFigureConfig
```

Update key figure configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_figure_config_id = 56; // int

try {
    $result = $apiInstance->restReportsKeyFiguresConfigKeyFigureConfigIdPut($key_figure_config_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigKeyFigureConfigIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_figure_config_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\KeyFigureConfig**](../Model/KeyFigureConfig.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restReportsKeyFiguresConfigPost()`

```php
restReportsKeyFiguresConfigPost(): \ck/plenty-client\Model\KeyFigureConfig
```

Add a key figure configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsKeyFiguresConfigPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\KeyFigureConfig**](../Model/KeyFigureConfig.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restReportsKeyFiguresConfigTemplatePost()`

```php
restReportsKeyFiguresConfigTemplatePost($key_figure_class): \ck/plenty-client\Model\KeyFigureConfig
```

Generate key figure config from template class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_figure_class = 'key_figure_class_example'; // string | Template class name

try {
    $result = $apiInstance->restReportsKeyFiguresConfigTemplatePost($key_figure_class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigTemplatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_figure_class** | **string**| Template class name | |

### Return type

[**\ck/plenty-client\Model\KeyFigureConfig**](../Model/KeyFigureConfig.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restReportsKeyFiguresConfigTemplatesGet()`

```php
restReportsKeyFiguresConfigTemplatesGet(): object[]
```

Get key figure templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsKeyFiguresConfigTemplatesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigTemplatesGet: ', $e->getMessage(), PHP_EOL;
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

## `restReportsKeyFiguresConfigsDelete()`

```php
restReportsKeyFiguresConfigsDelete(): object
```

Delete multiple key figure configurations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsKeyFiguresConfigsDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresConfigsDelete: ', $e->getMessage(), PHP_EOL;
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

## `restReportsKeyFiguresDetailsKeyFigureNameGet()`

```php
restReportsKeyFiguresDetailsKeyFigureNameGet($key_figure_name): \ck/plenty-client\Model\KeyFigure
```

Return key figure calculation details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_figure_name = 56; // int

try {
    $result = $apiInstance->restReportsKeyFiguresDetailsKeyFigureNameGet($key_figure_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresDetailsKeyFigureNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_figure_name** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\KeyFigure**](../Model/KeyFigure.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restReportsKeyFiguresGet()`

```php
restReportsKeyFiguresGet(): object[]
```

Return list of key figure classes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsKeyFiguresGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresGet: ', $e->getMessage(), PHP_EOL;
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

## `restReportsKeyFiguresResultsPost()`

```php
restReportsKeyFiguresResultsPost(): object
```

Search for key figure calculation results

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsKeyFiguresResultsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsKeyFiguresResultsPost: ', $e->getMessage(), PHP_EOL;
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

## `restReportsOrderTypesGet()`

```php
restReportsOrderTypesGet(): object[]
```

Get order types in string format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsOrderTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsOrderTypesGet: ', $e->getMessage(), PHP_EOL;
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

## `restReportsRawDataConfigGet()`

```php
restReportsRawDataConfigGet(): \ck/plenty-client\Model\RawDataConfigs
```

Returns list of all saved configurations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsRawDataConfigGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsRawDataConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\RawDataConfigs**](../Model/RawDataConfigs.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restReportsRawDataConfigPut()`

```php
restReportsRawDataConfigPut($configs): \ck/plenty-client\Model\RawDataConfigs
```

Resets all saved raw data configurations with given data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$configs = 56; // int | Resets all saved raw data configurations with given configs

try {
    $result = $apiInstance->restReportsRawDataConfigPut($configs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsRawDataConfigPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **configs** | **int**| Resets all saved raw data configurations with given configs | |

### Return type

[**\ck/plenty-client\Model\RawDataConfigs**](../Model/RawDataConfigs.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restReportsRawDataCreatorsConfigsGet()`

```php
restReportsRawDataCreatorsConfigsGet(): object
```

Return a list of raw data creators with their configurations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsRawDataCreatorsConfigsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsRawDataCreatorsConfigsGet: ', $e->getMessage(), PHP_EOL;
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

## `restReportsRawDataCreatorsGet()`

```php
restReportsRawDataCreatorsGet(): object[]
```

Get list of all raw data creators

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restReportsRawDataCreatorsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsRawDataCreatorsGet: ', $e->getMessage(), PHP_EOL;
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

## `restReportsRawDataFileGet()`

```php
restReportsRawDataFileGet($path): object
```

Get a raw data file from the storage, the storage path of the file must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | The raw data file path

try {
    $result = $apiInstance->restReportsRawDataFileGet($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsRawDataFileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| The raw data file path | |

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

## `restReportsRawDataGet()`

```php
restReportsRawDataGet($data_name, $process_status, $created_at_timestamp, $items_per_page, $sort_order, $page): \ck/plenty-client\Model\RawDataSearchResult
```

Get list of raw data files. Valid filter combinations: (dataName), (dataName & processStatus), (createdAtTimestamp)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_name = 'data_name_example'; // string | Filter that restricts the search result to raw data files e.g. orders,orderItems.
$process_status = 'process_status_example'; // string | Current process status, the status is only changed by internal processing. If this filter is used, the filter dataNames may only contain one value.
$created_at_timestamp = 56; // int | Timestamp from when daily generated raw data are to be filtered. This filter cannot be combined with the following filters: dataNames, processStatus
$items_per_page = 56; // int | The number of raw data files to be returned. The default number of files is 20 and the maximum is 100.
$sort_order = 'sort_order_example'; // string | Defines the sort order, possible values are: asc, desc
$page = 56; // int | Page

try {
    $result = $apiInstance->restReportsRawDataGet($data_name, $process_status, $created_at_timestamp, $items_per_page, $sort_order, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->restReportsRawDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_name** | **string**| Filter that restricts the search result to raw data files e.g. orders,orderItems. | [optional] |
| **process_status** | **string**| Current process status, the status is only changed by internal processing. If this filter is used, the filter dataNames may only contain one value. | [optional] |
| **created_at_timestamp** | **int**| Timestamp from when daily generated raw data are to be filtered. This filter cannot be combined with the following filters: dataNames, processStatus | [optional] |
| **items_per_page** | **int**| The number of raw data files to be returned. The default number of files is 20 and the maximum is 100. | [optional] |
| **sort_order** | **string**| Defines the sort order, possible values are: asc, desc | [optional] |
| **page** | **int**| Page | [optional] |

### Return type

[**\ck/plenty-client\Model\RawDataSearchResult**](../Model/RawDataSearchResult.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

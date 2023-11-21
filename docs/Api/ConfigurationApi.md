# ck\ConfigurationApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restPluginsPluginIdPluginSetsPluginSetIdConfigurationLayoutGet()**](ConfigurationApi.md#restPluginsPluginIdPluginSetsPluginSetIdConfigurationLayoutGet) | **GET** /rest/plugins/{pluginId}/plugin_sets/{pluginSetId}/configuration_layout |  |
| [**restPluginsPluginIdPluginSetsPluginSetIdConfigurationsGet()**](ConfigurationApi.md#restPluginsPluginIdPluginSetsPluginSetIdConfigurationsGet) | **GET** /rest/plugins/{pluginId}/plugin_sets/{pluginSetId}/configurations |  |
| [**restPluginsPluginIdPluginSetsPluginSetIdConfigurationsPut()**](ConfigurationApi.md#restPluginsPluginIdPluginSetsPluginSetIdConfigurationsPut) | **PUT** /rest/plugins/{pluginId}/plugin_sets/{pluginSetId}/configurations |  |
| [**restPluginsPluginSetsPluginSetIdConfigurationsExportGet()**](ConfigurationApi.md#restPluginsPluginSetsPluginSetIdConfigurationsExportGet) | **GET** /rest/plugins/plugin_sets/{pluginSetId}/configurations/export |  |
| [**restPluginsPluginSetsPluginSetIdConfigurationsImportPost()**](ConfigurationApi.md#restPluginsPluginSetsPluginSetIdConfigurationsImportPost) | **POST** /rest/plugins/plugin_sets/{pluginSetId}/configurations/import |  |


## `restPluginsPluginIdPluginSetsPluginSetIdConfigurationLayoutGet()`

```php
restPluginsPluginIdPluginSetsPluginSetIdConfigurationLayoutGet($plugin_id, $plugin_set_id): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 56; // int
$plugin_set_id = 56; // int

try {
    $result = $apiInstance->restPluginsPluginIdPluginSetsPluginSetIdConfigurationLayoutGet($plugin_id, $plugin_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->restPluginsPluginIdPluginSetsPluginSetIdConfigurationLayoutGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_id** | **int**|  | |
| **plugin_set_id** | **int**|  | |

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

## `restPluginsPluginIdPluginSetsPluginSetIdConfigurationsGet()`

```php
restPluginsPluginIdPluginSetsPluginSetIdConfigurationsGet($plugin_id, $plugin_set_id): \ck\Model\Configuration[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 56; // int
$plugin_set_id = 56; // int

try {
    $result = $apiInstance->restPluginsPluginIdPluginSetsPluginSetIdConfigurationsGet($plugin_id, $plugin_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->restPluginsPluginIdPluginSetsPluginSetIdConfigurationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_id** | **int**|  | |
| **plugin_set_id** | **int**|  | |

### Return type

[**\ck\Model\Configuration[]**](../Model/Configuration.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPluginsPluginIdPluginSetsPluginSetIdConfigurationsPut()`

```php
restPluginsPluginIdPluginSetsPluginSetIdConfigurationsPut($plugin_id, $plugin_set_id): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 56; // int
$plugin_set_id = 56; // int

try {
    $result = $apiInstance->restPluginsPluginIdPluginSetsPluginSetIdConfigurationsPut($plugin_id, $plugin_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->restPluginsPluginIdPluginSetsPluginSetIdConfigurationsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_id** | **int**|  | |
| **plugin_set_id** | **int**|  | |

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

## `restPluginsPluginSetsPluginSetIdConfigurationsExportGet()`

```php
restPluginsPluginSetsPluginSetIdConfigurationsExportGet($plugin_set_id): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_set_id = 56; // int

try {
    $result = $apiInstance->restPluginsPluginSetsPluginSetIdConfigurationsExportGet($plugin_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->restPluginsPluginSetsPluginSetIdConfigurationsExportGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_set_id** | **int**|  | |

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

## `restPluginsPluginSetsPluginSetIdConfigurationsImportPost()`

```php
restPluginsPluginSetsPluginSetIdConfigurationsImportPost($plugin_set_id): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_set_id = 56; // int

try {
    $result = $apiInstance->restPluginsPluginSetsPluginSetIdConfigurationsImportPost($plugin_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->restPluginsPluginSetsPluginSetIdConfigurationsImportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_set_id** | **int**|  | |

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

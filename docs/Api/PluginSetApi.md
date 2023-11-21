# ck\PluginSetApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restPluginSetsGet()**](PluginSetApi.md#restPluginSetsGet) | **GET** /rest/plugin_sets | List all Sets |
| [**restPluginSetsNewGitPluginDetailsPluginNameGet()**](PluginSetApi.md#restPluginSetsNewGitPluginDetailsPluginNameGet) | **GET** /rest/plugin_sets_new/git_plugin_details/{pluginName} | get git plugin description data |
| [**restPluginSetsNewPluginDetailsPluginNameVariationIdGet()**](PluginSetApi.md#restPluginSetsNewPluginDetailsPluginNameVariationIdGet) | **GET** /rest/plugin_sets_new/plugin_details/{pluginName}/{variationId} | get plugin description data |
| [**restPluginSetsPluginSetIdLanguagesCsvLanguageCodeGet()**](PluginSetApi.md#restPluginSetsPluginSetIdLanguagesCsvLanguageCodeGet) | **GET** /rest/plugin_sets/{pluginSetId}/languages/csv/{languageCode} | List all plugin translations csv. |
| [**restPluginSetsPluginSetIdLanguagesGet()**](PluginSetApi.md#restPluginSetsPluginSetIdLanguagesGet) | **GET** /rest/plugin_sets/{pluginSetId}/languages | List all the plugins translations for a plugin set |
| [**restPluginSetsPluginSetIdLanguagesTargetLanguageGet()**](PluginSetApi.md#restPluginSetsPluginSetIdLanguagesTargetLanguageGet) | **GET** /rest/plugin_sets/{pluginSetId}/languages/{targetLanguage} | List all plugin translations merged. |
| [**restPluginSetsPluginSetIdLanguagesTargetLanguagePost()**](PluginSetApi.md#restPluginSetsPluginSetIdLanguagesTargetLanguagePost) | **POST** /rest/plugin_sets/{pluginSetId}/languages/{targetLanguage} | Update all plugin translations |
| [**restPluginSetsPost()**](PluginSetApi.md#restPluginSetsPost) | **POST** /rest/plugin_sets | Create a Set |
| [**restPluginSetsPreviewHashGet()**](PluginSetApi.md#restPluginSetsPreviewHashGet) | **GET** /rest/plugin_sets/preview_hash | Get the preview hash for a set |
| [**restPluginSetsS3InboxOpensourcePluginsGet()**](PluginSetApi.md#restPluginSetsS3InboxOpensourcePluginsGet) | **GET** /rest/plugin_sets/s3-inbox-opensource-plugins |  |
| [**restPluginSetsSetIdDelete()**](PluginSetApi.md#restPluginSetsSetIdDelete) | **DELETE** /rest/plugin_sets/{setId} | Delete a set |
| [**restPluginSetsSetIdGet()**](PluginSetApi.md#restPluginSetsSetIdGet) | **GET** /rest/plugin_sets/{setId} | Get a set |
| [**restPluginSetsSetIdPluginsGet()**](PluginSetApi.md#restPluginSetsSetIdPluginsGet) | **GET** /rest/plugin_sets/{setId}/plugins | List all Plugins of Set |
| [**restPluginSetsSetIdPluginsGetCompatibilityPluginNameVariationIdGet()**](PluginSetApi.md#restPluginSetsSetIdPluginsGetCompatibilityPluginNameVariationIdGet) | **GET** /rest/plugin_sets/{setId}/plugins/get_compatibility/{pluginName}/{variationId} |  |
| [**restPluginSetsSetIdPluginsPluginIdDelete()**](PluginSetApi.md#restPluginSetsSetIdPluginsPluginIdDelete) | **DELETE** /rest/plugin_sets/{setId}/plugins/{pluginId} | Remove a plugin from a set |
| [**restPluginSetsSetIdPluginsPluginIdInstallGitPluginPost()**](PluginSetApi.md#restPluginSetsSetIdPluginsPluginIdInstallGitPluginPost) | **POST** /rest/plugin_sets/{setId}/plugins/{pluginId}/install_git_plugin | Install a git plugin into a set |
| [**restPluginSetsSetIdPluginsPluginIdPost()**](PluginSetApi.md#restPluginSetsSetIdPluginsPluginIdPost) | **POST** /rest/plugin_sets/{setId}/plugins/{pluginId} | Add a plugin to a set |
| [**restPluginSetsSetIdPluginsPluginIdPut()**](PluginSetApi.md#restPluginSetsSetIdPluginsPluginIdPut) | **PUT** /rest/plugin_sets/{setId}/plugins/{pluginId} | Change a plugin&#39;s &#39;active&#39; status for a set. |
| [**restPluginSetsSetIdPluginsPluginIdSetPositionPost()**](PluginSetApi.md#restPluginSetsSetIdPluginsPluginIdSetPositionPost) | **POST** /rest/plugin_sets/{setId}/plugins/{pluginId}/setPosition | Set a plugin&#39;s position in a set |
| [**restPluginSetsSetIdPluginsSearchGet()**](PluginSetApi.md#restPluginSetsSetIdPluginsSearchGet) | **GET** /rest/plugin_sets/{setId}/plugins/search | Search plugins |
| [**restPluginSetsSetIdPut()**](PluginSetApi.md#restPluginSetsSetIdPut) | **PUT** /rest/plugin_sets/{setId} | Update a set |
| [**restPluginSetsSetIdSetEntriesGet()**](PluginSetApi.md#restPluginSetsSetIdSetEntriesGet) | **GET** /rest/plugin_sets/{setId}/set_entries | List all SetEntries of Set |
| [**restPluginsPluginSetsPluginSetIdPluginsGet()**](PluginSetApi.md#restPluginsPluginSetsPluginSetIdPluginsGet) | **GET** /rest/plugins/plugin_sets/{pluginSetId}/plugins | List all Plugins of Set |


## `restPluginSetsGet()`

```php
restPluginSetsGet(): \ck\Model\PluginSet[]
```

List all Sets

Lists all available sets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPluginSetsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\PluginSet[]**](../Model/PluginSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPluginSetsNewGitPluginDetailsPluginNameGet()`

```php
restPluginSetsNewGitPluginDetailsPluginNameGet($plugin_name): object[]
```

get git plugin description data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_name = 56; // int

try {
    $result = $apiInstance->restPluginSetsNewGitPluginDetailsPluginNameGet($plugin_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsNewGitPluginDetailsPluginNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_name** | **int**|  | |

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

## `restPluginSetsNewPluginDetailsPluginNameVariationIdGet()`

```php
restPluginSetsNewPluginDetailsPluginNameVariationIdGet($plugin_name, $variation_id): object[]
```

get plugin description data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_name = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restPluginSetsNewPluginDetailsPluginNameVariationIdGet($plugin_name, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsNewPluginDetailsPluginNameVariationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_name** | **int**|  | |
| **variation_id** | **int**|  | |

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

## `restPluginSetsPluginSetIdLanguagesCsvLanguageCodeGet()`

```php
restPluginSetsPluginSetIdLanguagesCsvLanguageCodeGet($plugin_set_id, $language_code, $plugin_set_id2, $language_code2)
```

List all plugin translations csv.

Lists all plugin translations as a CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_set_id = 56; // int | The ID of the plugin set
$language_code = 'language_code_example'; // string | The code of the language
$plugin_set_id2 = 56; // int
$language_code2 = 56; // int

try {
    $apiInstance->restPluginSetsPluginSetIdLanguagesCsvLanguageCodeGet($plugin_set_id, $language_code, $plugin_set_id2, $language_code2);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsPluginSetIdLanguagesCsvLanguageCodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_set_id** | **int**| The ID of the plugin set | |
| **language_code** | **string**| The code of the language | |
| **plugin_set_id2** | **int**|  | |
| **language_code2** | **int**|  | |

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

## `restPluginSetsPluginSetIdLanguagesGet()`

```php
restPluginSetsPluginSetIdLanguagesGet($plugin_set_id, $plugin_set_id2): \ck\Model\PluginTranslation[]
```

List all the plugins translations for a plugin set

Lists all translations for all plugins in a plugin set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_set_id = 56; // int | The ID of the plugin set
$plugin_set_id2 = 56; // int

try {
    $result = $apiInstance->restPluginSetsPluginSetIdLanguagesGet($plugin_set_id, $plugin_set_id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsPluginSetIdLanguagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_set_id** | **int**| The ID of the plugin set | |
| **plugin_set_id2** | **int**|  | |

### Return type

[**\ck\Model\PluginTranslation[]**](../Model/PluginTranslation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPluginSetsPluginSetIdLanguagesTargetLanguageGet()`

```php
restPluginSetsPluginSetIdLanguagesTargetLanguageGet($plugin_set_id, $target_language, $plugin_set_id2, $target_language2): \ck\Model\PluginTranslation[]
```

List all plugin translations merged.

Lists all plugin translations that have been merged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_set_id = 56; // int | The ID of the plugin set
$target_language = 'target_language_example'; // string | The code of the language we target
$plugin_set_id2 = 56; // int
$target_language2 = 56; // int

try {
    $result = $apiInstance->restPluginSetsPluginSetIdLanguagesTargetLanguageGet($plugin_set_id, $target_language, $plugin_set_id2, $target_language2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsPluginSetIdLanguagesTargetLanguageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_set_id** | **int**| The ID of the plugin set | |
| **target_language** | **string**| The code of the language we target | |
| **plugin_set_id2** | **int**|  | |
| **target_language2** | **int**|  | |

### Return type

[**\ck\Model\PluginTranslation[]**](../Model/PluginTranslation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPluginSetsPluginSetIdLanguagesTargetLanguagePost()`

```php
restPluginSetsPluginSetIdLanguagesTargetLanguagePost($plugin_set_id, $target_language, $plugin_set_id2, $target_language2)
```

Update all plugin translations

Update all plugin translations from a csv file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_set_id = 56; // int | The ID of the plugin set
$target_language = 'target_language_example'; // string | The code of the language
$plugin_set_id2 = 56; // int
$target_language2 = 56; // int

try {
    $apiInstance->restPluginSetsPluginSetIdLanguagesTargetLanguagePost($plugin_set_id, $target_language, $plugin_set_id2, $target_language2);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsPluginSetIdLanguagesTargetLanguagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_set_id** | **int**| The ID of the plugin set | |
| **target_language** | **string**| The code of the language | |
| **plugin_set_id2** | **int**|  | |
| **target_language2** | **int**|  | |

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

## `restPluginSetsPost()`

```php
restPluginSetsPost($copy_plugin_set_id): \ck\Model\PluginSet
```

Create a Set

Creates a new plugin set with the given name. If a 'copyPluginSetId' is given, all set entries from that set will be copied into the new set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$copy_plugin_set_id = 56; // int | The ID of the plugin set of which to copy the set entries from into the      * new set

try {
    $result = $apiInstance->restPluginSetsPost($copy_plugin_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **copy_plugin_set_id** | **int**| The ID of the plugin set of which to copy the set entries from into the      * new set | [optional] |

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

## `restPluginSetsPreviewHashGet()`

```php
restPluginSetsPreviewHashGet(): object
```

Get the preview hash for a set

Get the hash required to preview a plugin set. Response content will be in the form ['previewHash' => 'adf245o9nwu90sdfjw409u4'].

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPluginSetsPreviewHashGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsPreviewHashGet: ', $e->getMessage(), PHP_EOL;
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

## `restPluginSetsS3InboxOpensourcePluginsGet()`

```php
restPluginSetsS3InboxOpensourcePluginsGet(): \ck\Model\PluginSet[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPluginSetsS3InboxOpensourcePluginsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsS3InboxOpensourcePluginsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\PluginSet[]**](../Model/PluginSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPluginSetsSetIdDelete()`

```php
restPluginSetsSetIdDelete($set_id): object
```

Delete a set

Deletes a plugin set. Response content will be the number of sets deleted (i. e. '1' or '0').

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int

try {
    $result = $apiInstance->restPluginSetsSetIdDelete($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsSetIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |

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

## `restPluginSetsSetIdGet()`

```php
restPluginSetsSetIdGet($set_id): \ck\Model\PluginSet
```

Get a set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int

try {
    $result = $apiInstance->restPluginSetsSetIdGet($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsSetIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |

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

## `restPluginSetsSetIdPluginsGet()`

```php
restPluginSetsSetIdPluginsGet($set_id, $include_stage): object
```

List all Plugins of Set

Lists all active Plugins of given Set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int
$include_stage = True; // bool | Include staged plugins in the result.

try {
    $result = $apiInstance->restPluginSetsSetIdPluginsGet($set_id, $include_stage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsSetIdPluginsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |
| **include_stage** | **bool**| Include staged plugins in the result. | [optional] |

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

## `restPluginSetsSetIdPluginsGetCompatibilityPluginNameVariationIdGet()`

```php
restPluginSetsSetIdPluginsGetCompatibilityPluginNameVariationIdGet($set_id, $plugin_name, $variation_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int
$plugin_name = 56; // int
$variation_id = 56; // int

try {
    $apiInstance->restPluginSetsSetIdPluginsGetCompatibilityPluginNameVariationIdGet($set_id, $plugin_name, $variation_id);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsSetIdPluginsGetCompatibilityPluginNameVariationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |
| **plugin_name** | **int**|  | |
| **variation_id** | **int**|  | |

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

## `restPluginSetsSetIdPluginsPluginIdDelete()`

```php
restPluginSetsSetIdPluginsPluginIdDelete($set_id, $plugin_id): object
```

Remove a plugin from a set

Removes a plugin from a set and deletes all plugin files. Response content will be 'true' if the deletion was successful, 'false' if not. If no plugin set with the given id can be found or the plugin is not associated to the set, a 404 will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int
$plugin_id = 56; // int

try {
    $result = $apiInstance->restPluginSetsSetIdPluginsPluginIdDelete($set_id, $plugin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsSetIdPluginsPluginIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |
| **plugin_id** | **int**|  | |

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

## `restPluginSetsSetIdPluginsPluginIdInstallGitPluginPost()`

```php
restPluginSetsSetIdPluginsPluginIdInstallGitPluginPost($set_id, $plugin_id): object
```

Install a git plugin into a set

Installs a git plugin into a set. Response content will be in the form ['gitPluginInstalled' => 'true' / 'false'].

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int
$plugin_id = 56; // int

try {
    $result = $apiInstance->restPluginSetsSetIdPluginsPluginIdInstallGitPluginPost($set_id, $plugin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsSetIdPluginsPluginIdInstallGitPluginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |
| **plugin_id** | **int**|  | |

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

## `restPluginSetsSetIdPluginsPluginIdPost()`

```php
restPluginSetsSetIdPluginsPluginIdPost($set_id, $plugin_id): object
```

Add a plugin to a set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int
$plugin_id = 56; // int

try {
    $result = $apiInstance->restPluginSetsSetIdPluginsPluginIdPost($set_id, $plugin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsSetIdPluginsPluginIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |
| **plugin_id** | **int**|  | |

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

## `restPluginSetsSetIdPluginsPluginIdPut()`

```php
restPluginSetsSetIdPluginsPluginIdPut($set_id, $plugin_id): object
```

Change a plugin's 'active' status for a set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int
$plugin_id = 56; // int

try {
    $result = $apiInstance->restPluginSetsSetIdPluginsPluginIdPut($set_id, $plugin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsSetIdPluginsPluginIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |
| **plugin_id** | **int**|  | |

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

## `restPluginSetsSetIdPluginsPluginIdSetPositionPost()`

```php
restPluginSetsSetIdPluginsPluginIdSetPositionPost($set_id, $plugin_id): \ck\Model\PluginSetEntry
```

Set a plugin's position in a set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int
$plugin_id = 56; // int

try {
    $result = $apiInstance->restPluginSetsSetIdPluginsPluginIdSetPositionPost($set_id, $plugin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsSetIdPluginsPluginIdSetPositionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |
| **plugin_id** | **int**|  | |

### Return type

[**\ck\Model\PluginSetEntry**](../Model/PluginSetEntry.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPluginSetsSetIdPluginsSearchGet()`

```php
restPluginSetsSetIdPluginsSearchGet($set_id, $plugin_set_id, $name, $in_stage, $in_productive, $type, $check_requirements, $check_update, $source, $installed, $active, $items_per_page): \ck\Model\RestPluginSetsSetIdPluginsSearchGet200Response
```

Search plugins

Searches for plugins. The search can be refined with numerous parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int
$plugin_set_id = 56; // int | Search for plugins from a specific plugin set.
$name = 'name_example'; // string | Search for plugins with a specific name.
$in_stage = True; // bool | Search for plugins that are in stage.
$in_productive = True; // bool | Search for plugins that are in productive.
$type = 'type_example'; // string | Search for plugins of a given type. Available types are 'Template' and 'Export'.
$check_requirements = True; // bool | Add the requirements to the response. This will add the 'notInstalledRequirements',      * 'notActiveStageRequirements' and 'notActiveProductiveRequirements' fields to the returned plugin model(s).
$check_update = True; // bool | Check for updates. If an update for a plugin is available, this will add the      * 'updateInformation' field to the returned plugin model(s).
$source = 'source_example'; // string | Search for plugins from a specific source. Available sources are 'marketplace', 'git', and      * 'local'.
$installed = True; // bool | Only search for installed / not installed plugins.
$active = True; // bool | Only search for plugins that are active / inactive.
$items_per_page = 56; // int | How many plugins to include per page of the search result.

try {
    $result = $apiInstance->restPluginSetsSetIdPluginsSearchGet($set_id, $plugin_set_id, $name, $in_stage, $in_productive, $type, $check_requirements, $check_update, $source, $installed, $active, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsSetIdPluginsSearchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |
| **plugin_set_id** | **int**| Search for plugins from a specific plugin set. | [optional] |
| **name** | **string**| Search for plugins with a specific name. | [optional] |
| **in_stage** | **bool**| Search for plugins that are in stage. | [optional] |
| **in_productive** | **bool**| Search for plugins that are in productive. | [optional] |
| **type** | **string**| Search for plugins of a given type. Available types are &#39;Template&#39; and &#39;Export&#39;. | [optional] |
| **check_requirements** | **bool**| Add the requirements to the response. This will add the &#39;notInstalledRequirements&#39;,      * &#39;notActiveStageRequirements&#39; and &#39;notActiveProductiveRequirements&#39; fields to the returned plugin model(s). | [optional] |
| **check_update** | **bool**| Check for updates. If an update for a plugin is available, this will add the      * &#39;updateInformation&#39; field to the returned plugin model(s). | [optional] |
| **source** | **string**| Search for plugins from a specific source. Available sources are &#39;marketplace&#39;, &#39;git&#39;, and      * &#39;local&#39;. | [optional] |
| **installed** | **bool**| Only search for installed / not installed plugins. | [optional] |
| **active** | **bool**| Only search for plugins that are active / inactive. | [optional] |
| **items_per_page** | **int**| How many plugins to include per page of the search result. | [optional] |

### Return type

[**\ck\Model\RestPluginSetsSetIdPluginsSearchGet200Response**](../Model/RestPluginSetsSetIdPluginsSearchGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPluginSetsSetIdPut()`

```php
restPluginSetsSetIdPut($set_id): object
```

Update a set

Updates a set. Response content will be 'true' if the update was successful, 'false' if not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int

try {
    $result = $apiInstance->restPluginSetsSetIdPut($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsSetIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |

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

## `restPluginSetsSetIdSetEntriesGet()`

```php
restPluginSetsSetIdSetEntriesGet($set_id): \ck\Model\PluginSetEntry[]
```

List all SetEntries of Set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int

try {
    $result = $apiInstance->restPluginSetsSetIdSetEntriesGet($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginSetsSetIdSetEntriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |

### Return type

[**\ck\Model\PluginSetEntry[]**](../Model/PluginSetEntry.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPluginsPluginSetsPluginSetIdPluginsGet()`

```php
restPluginsPluginSetsPluginSetIdPluginsGet($plugin_set_id, $include_stage): object
```

List all Plugins of Set

Lists all active Plugins of given Set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PluginSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_set_id = 56; // int
$include_stage = True; // bool | Include staged plugins in the result.

try {
    $result = $apiInstance->restPluginsPluginSetsPluginSetIdPluginsGet($plugin_set_id, $include_stage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginSetApi->restPluginsPluginSetsPluginSetIdPluginsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_set_id** | **int**|  | |
| **include_stage** | **bool**| Include staged plugins in the result. | [optional] |

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

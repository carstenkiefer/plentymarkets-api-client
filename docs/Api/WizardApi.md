# ck/plenty-client\WizardApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restWizardsFoldersGet()**](WizardApi.md#restWizardsFoldersGet) | **GET** /rest/wizards/folders | List wizard folders |
| [**restWizardsGet()**](WizardApi.md#restWizardsGet) | **GET** /rest/wizards | List wizards |
| [**restWizardsWizardKeyActionsActionKeyPost()**](WizardApi.md#restWizardsWizardKeyActionsActionKeyPost) | **POST** /rest/wizards/{wizardKey}/actions/{actionKey} | Perform an action of a registered actionHandlerClass of a given wizard |
| [**restWizardsWizardKeyDataDelete()**](WizardApi.md#restWizardsWizardKeyDataDelete) | **DELETE** /rest/wizards/{wizardKey}/data | Delete a wizard data |
| [**restWizardsWizardKeyDataGet()**](WizardApi.md#restWizardsWizardKeyDataGet) | **GET** /rest/wizards/{wizardKey}/data | Get a wizard data |
| [**restWizardsWizardKeyDataOptionIdDelete()**](WizardApi.md#restWizardsWizardKeyDataOptionIdDelete) | **DELETE** /rest/wizards/{wizardKey}/data/{optionId} | Delete a wizard data&#39;s option |
| [**restWizardsWizardKeyDataOptionIdGet()**](WizardApi.md#restWizardsWizardKeyDataOptionIdGet) | **GET** /rest/wizards/{wizardKey}/data/{optionId} | Get a wizard data by optionId |
| [**restWizardsWizardKeyDataOptionIdPost()**](WizardApi.md#restWizardsWizardKeyDataOptionIdPost) | **POST** /rest/wizards/{wizardKey}/data/{optionId} | Create a wizard data option |
| [**restWizardsWizardKeyDataOptionIdPut()**](WizardApi.md#restWizardsWizardKeyDataOptionIdPut) | **PUT** /rest/wizards/{wizardKey}/data/{optionId} | Update a wizard data option |
| [**restWizardsWizardKeyDataPost()**](WizardApi.md#restWizardsWizardKeyDataPost) | **POST** /rest/wizards/{wizardKey}/data | Create a wizard data |
| [**restWizardsWizardKeyDataPut()**](WizardApi.md#restWizardsWizardKeyDataPut) | **PUT** /rest/wizards/{wizardKey}/data | Update a wizard data |
| [**restWizardsWizardKeyFormfieldsFormfieldKeyPost()**](WizardApi.md#restWizardsWizardKeyFormfieldsFormfieldKeyPost) | **POST** /rest/wizards/{wizardKey}/formfields/{formfieldKey} | Load dynamic data |
| [**restWizardsWizardKeyGet()**](WizardApi.md#restWizardsWizardKeyGet) | **GET** /rest/wizards/{wizardKey} | Get a wizard |
| [**restWizardsWizardKeySettingsOptionIdPost()**](WizardApi.md#restWizardsWizardKeySettingsOptionIdPost) | **POST** /rest/wizards/{wizardKey}/settings/{optionId} | Finalize the wizard |


## `restWizardsFoldersGet()`

```php
restWizardsFoldersGet(): object[]
```

List wizard folders

Lists wizard folders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restWizardsFoldersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WizardApi->restWizardsFoldersGet: ', $e->getMessage(), PHP_EOL;
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

## `restWizardsGet()`

```php
restWizardsGet(): object[]
```

List wizards

Lists a wizard

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restWizardsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WizardApi->restWizardsGet: ', $e->getMessage(), PHP_EOL;
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

## `restWizardsWizardKeyActionsActionKeyPost()`

```php
restWizardsWizardKeyActionsActionKeyPost($wizard_key, $action_key): object
```

Perform an action of a registered actionHandlerClass of a given wizard

Performs an action of a registered actionHandlerClass of a given wizard

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wizard_key = 56; // int
$action_key = 56; // int

try {
    $result = $apiInstance->restWizardsWizardKeyActionsActionKeyPost($wizard_key, $action_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WizardApi->restWizardsWizardKeyActionsActionKeyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wizard_key** | **int**|  | |
| **action_key** | **int**|  | |

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

## `restWizardsWizardKeyDataDelete()`

```php
restWizardsWizardKeyDataDelete($wizard_key)
```

Delete a wizard data

Deletes a wizard data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wizard_key = 56; // int

try {
    $apiInstance->restWizardsWizardKeyDataDelete($wizard_key);
} catch (Exception $e) {
    echo 'Exception when calling WizardApi->restWizardsWizardKeyDataDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wizard_key** | **int**|  | |

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

## `restWizardsWizardKeyDataGet()`

```php
restWizardsWizardKeyDataGet($wizard_key): object
```

Get a wizard data

Gets a wizard data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wizard_key = 56; // int

try {
    $result = $apiInstance->restWizardsWizardKeyDataGet($wizard_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WizardApi->restWizardsWizardKeyDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wizard_key** | **int**|  | |

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

## `restWizardsWizardKeyDataOptionIdDelete()`

```php
restWizardsWizardKeyDataOptionIdDelete($wizard_key, $option_id)
```

Delete a wizard data's option

Deletes a wizard data option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wizard_key = 56; // int
$option_id = 56; // int

try {
    $apiInstance->restWizardsWizardKeyDataOptionIdDelete($wizard_key, $option_id);
} catch (Exception $e) {
    echo 'Exception when calling WizardApi->restWizardsWizardKeyDataOptionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wizard_key** | **int**|  | |
| **option_id** | **int**|  | |

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

## `restWizardsWizardKeyDataOptionIdGet()`

```php
restWizardsWizardKeyDataOptionIdGet($wizard_key, $option_id): object
```

Get a wizard data by optionId

Gets a wizard data by optionId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wizard_key = 56; // int
$option_id = 56; // int

try {
    $result = $apiInstance->restWizardsWizardKeyDataOptionIdGet($wizard_key, $option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WizardApi->restWizardsWizardKeyDataOptionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wizard_key** | **int**|  | |
| **option_id** | **int**|  | |

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

## `restWizardsWizardKeyDataOptionIdPost()`

```php
restWizardsWizardKeyDataOptionIdPost($wizard_key, $option_id): object
```

Create a wizard data option

Creates a wizard data option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wizard_key = 56; // int
$option_id = 56; // int

try {
    $result = $apiInstance->restWizardsWizardKeyDataOptionIdPost($wizard_key, $option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WizardApi->restWizardsWizardKeyDataOptionIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wizard_key** | **int**|  | |
| **option_id** | **int**|  | |

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

## `restWizardsWizardKeyDataOptionIdPut()`

```php
restWizardsWizardKeyDataOptionIdPut($wizard_key, $option_id): object
```

Update a wizard data option

Updates a wizard data option

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wizard_key = 56; // int
$option_id = 56; // int

try {
    $result = $apiInstance->restWizardsWizardKeyDataOptionIdPut($wizard_key, $option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WizardApi->restWizardsWizardKeyDataOptionIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wizard_key** | **int**|  | |
| **option_id** | **int**|  | |

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

## `restWizardsWizardKeyDataPost()`

```php
restWizardsWizardKeyDataPost($wizard_key): object
```

Create a wizard data

Creates a wizard data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wizard_key = 56; // int

try {
    $result = $apiInstance->restWizardsWizardKeyDataPost($wizard_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WizardApi->restWizardsWizardKeyDataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wizard_key** | **int**|  | |

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

## `restWizardsWizardKeyDataPut()`

```php
restWizardsWizardKeyDataPut($wizard_key): object
```

Update a wizard data

Updates a wizard data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wizard_key = 56; // int

try {
    $result = $apiInstance->restWizardsWizardKeyDataPut($wizard_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WizardApi->restWizardsWizardKeyDataPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wizard_key** | **int**|  | |

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

## `restWizardsWizardKeyFormfieldsFormfieldKeyPost()`

```php
restWizardsWizardKeyFormfieldsFormfieldKeyPost($wizard_key, $formfield_key): object
```

Load dynamic data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wizard_key = 56; // int
$formfield_key = 56; // int

try {
    $result = $apiInstance->restWizardsWizardKeyFormfieldsFormfieldKeyPost($wizard_key, $formfield_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WizardApi->restWizardsWizardKeyFormfieldsFormfieldKeyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wizard_key** | **int**|  | |
| **formfield_key** | **int**|  | |

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

## `restWizardsWizardKeyGet()`

```php
restWizardsWizardKeyGet($wizard_key): \ck/plenty-client\Model\Wizard
```

Get a wizard

Gets a wizard

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wizard_key = 56; // int

try {
    $result = $apiInstance->restWizardsWizardKeyGet($wizard_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WizardApi->restWizardsWizardKeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wizard_key** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\Wizard**](../Model/Wizard.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restWizardsWizardKeySettingsOptionIdPost()`

```php
restWizardsWizardKeySettingsOptionIdPost($wizard_key, $option_id): object
```

Finalize the wizard

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\WizardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wizard_key = 56; // int
$option_id = 56; // int

try {
    $result = $apiInstance->restWizardsWizardKeySettingsOptionIdPost($wizard_key, $option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WizardApi->restWizardsWizardKeySettingsOptionIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wizard_key** | **int**|  | |
| **option_id** | **int**|  | |

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

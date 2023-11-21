# ck\LogApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restDeleteLogGet()**](LogApi.md#restDeleteLogGet) | **GET** /rest/delete_log | Search the delete log |
| [**restLogsGet()**](LogApi.md#restLogsGet) | **GET** /rest/logs | Perform a search operation. |
| [**restLogsIdGet()**](LogApi.md#restLogsIdGet) | **GET** /rest/logs/{id} | Get Log entry by ID. |
| [**restLogsIntegrationKeysGet()**](LogApi.md#restLogsIntegrationKeysGet) | **GET** /rest/logs/integration_keys |  |
| [**restLogsPost()**](LogApi.md#restLogsPost) | **POST** /rest/logs | Create a log entry. |
| [**restLogsReferenceTypesGet()**](LogApi.md#restLogsReferenceTypesGet) | **GET** /rest/logs/reference_types | Get all registered reference types. |
| [**restLogsSettingsGet()**](LogApi.md#restLogsSettingsGet) | **GET** /rest/logs/settings | Show config. |
| [**restLogsSettingsPost()**](LogApi.md#restLogsSettingsPost) | **POST** /rest/logs/settings | Save config. |


## `restDeleteLogGet()`

```php
restDeleteLogGet($reference_type, $user_id, $updated_between, $page, $items_per_page): \ck\Model\RestDeleteLogGet200Response
```

Search the delete log

Searches the delete log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference_type = 56; // int | The type of deleted record
$user_id = 56; // int | The ID of the user who deleted the record
$updated_between = 'updated_between_example'; // string | Filter restricts the list of results to deleteLogs updated during the specified period. The end date (to) is optional. If no end date is specified, items updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../delete_log?updatedBetween=1451606400,1456790400 will list deleteLogs updated between 2016-01-01 and 2016-03-01. .../delete_log?updatedBetween=1451606400 will list deleteLogs updated since 2016-01-01. The PHP function strtotime is also supported.
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The number of items to list per page

try {
    $result = $apiInstance->restDeleteLogGet($reference_type, $user_id, $updated_between, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->restDeleteLogGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_type** | **int**| The type of deleted record | [optional] |
| **user_id** | **int**| The ID of the user who deleted the record | [optional] |
| **updated_between** | **string**| Filter restricts the list of results to deleteLogs updated during the specified period. The end date (to) is optional. If no end date is specified, items updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../delete_log?updatedBetween&#x3D;1451606400,1456790400 will list deleteLogs updated between 2016-01-01 and 2016-03-01. .../delete_log?updatedBetween&#x3D;1451606400 will list deleteLogs updated since 2016-01-01. The PHP function strtotime is also supported. | [optional] |
| **page** | **int**| The page of results to search for | [optional] |
| **items_per_page** | **int**| The number of items to list per page | [optional] |

### Return type

[**\ck\Model\RestDeleteLogGet200Response**](../Model/RestDeleteLogGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restLogsGet()`

```php
restLogsGet($page, $items_per_page, $integration, $identifier, $reference_type, $reference_value, $additional_info, $code, $level, $from_date, $to_date, $with): \ck\Model\RestLogsGet200Response
```

Perform a search operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page of results to search for.
$items_per_page = 56; // int | The number of items to list per page.
$integration = 56; // int | Filter that restricts the search result to log entries with custom integration key(s).
$identifier = 56; // int | Filter that restricts the search result to log entries with custom identifier(s).
$reference_type = 'reference_type_example'; // string | Filter that restricts the search result to log entries with custom reference types.
$reference_value = 'reference_value_example'; // string | Filter that restricts the search result to log entries with custom reference values.
$additional_info = 'additional_info_example'; // string | Filter that restricts the search result to log entries that match an additional info.
$code = 56; // int | Filter that restricts the search result to log entries with a custom code.
$level = 56; // int | Filter that restricts the search result to log entries of a custom level. Available values are: 'debug', 'info', 'notice', 'warning', 'error', 'critical', 'alert', 'emergency'.
$from_date = 'from_date_example'; // string | Filter that restricts the search result to log entries created after this date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$to_date = 'to_date_example'; // string | Filter that restricts the search result to log entries created before this date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$with = 56; // int | An array with child instances to be loaded. Valid instances are 'additionalInfo'.

try {
    $result = $apiInstance->restLogsGet($page, $items_per_page, $integration, $identifier, $reference_type, $reference_value, $additional_info, $code, $level, $from_date, $to_date, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->restLogsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page of results to search for. | [optional] |
| **items_per_page** | **int**| The number of items to list per page. | [optional] |
| **integration** | **int**| Filter that restricts the search result to log entries with custom integration key(s). | [optional] |
| **identifier** | **int**| Filter that restricts the search result to log entries with custom identifier(s). | [optional] |
| **reference_type** | **string**| Filter that restricts the search result to log entries with custom reference types. | [optional] |
| **reference_value** | **string**| Filter that restricts the search result to log entries with custom reference values. | [optional] |
| **additional_info** | **string**| Filter that restricts the search result to log entries that match an additional info. | [optional] |
| **code** | **int**| Filter that restricts the search result to log entries with a custom code. | [optional] |
| **level** | **int**| Filter that restricts the search result to log entries of a custom level. Available values are: &#39;debug&#39;, &#39;info&#39;, &#39;notice&#39;, &#39;warning&#39;, &#39;error&#39;, &#39;critical&#39;, &#39;alert&#39;, &#39;emergency&#39;. | [optional] |
| **from_date** | **string**| Filter that restricts the search result to log entries created after this date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **to_date** | **string**| Filter that restricts the search result to log entries created before this date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **with** | **int**| An array with child instances to be loaded. Valid instances are &#39;additionalInfo&#39;. | [optional] |

### Return type

[**\ck\Model\RestLogsGet200Response**](../Model/RestLogsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restLogsIdGet()`

```php
restLogsIdGet($id): \ck\Model\Log
```

Get Log entry by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restLogsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->restLogsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck\Model\Log**](../Model/Log.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restLogsIntegrationKeysGet()`

```php
restLogsIntegrationKeysGet(): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restLogsIntegrationKeysGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->restLogsIntegrationKeysGet: ', $e->getMessage(), PHP_EOL;
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

## `restLogsPost()`

```php
restLogsPost($_rest_logs): object
```

Create a log entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_logs = new \ck\Model\RestLogsPostRequest(); // \ck\Model\RestLogsPostRequest

try {
    $result = $apiInstance->restLogsPost($_rest_logs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->restLogsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_logs** | [**\ck\Model\RestLogsPostRequest**](../Model/RestLogsPostRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restLogsReferenceTypesGet()`

```php
restLogsReferenceTypesGet(): object
```

Get all registered reference types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restLogsReferenceTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->restLogsReferenceTypesGet: ', $e->getMessage(), PHP_EOL;
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

## `restLogsSettingsGet()`

```php
restLogsSettingsGet(): object
```

Show config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restLogsSettingsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->restLogsSettingsGet: ', $e->getMessage(), PHP_EOL;
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

## `restLogsSettingsPost()`

```php
restLogsSettingsPost(): object
```

Save config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restLogsSettingsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->restLogsSettingsPost: ', $e->getMessage(), PHP_EOL;
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

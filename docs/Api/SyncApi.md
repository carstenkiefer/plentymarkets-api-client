# ck/plenty-client\SyncApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restElasticSyncDocumentGet()**](SyncApi.md#restElasticSyncDocumentGet) | **GET** /rest/elastic-sync/document | Get a single storage object from sync documents |
| [**restElasticSyncDocumentPost()**](SyncApi.md#restElasticSyncDocumentPost) | **POST** /rest/elastic-sync/document | Upload a document to sync directory |
| [**restElasticSyncDocumentUrlGet()**](SyncApi.md#restElasticSyncDocumentUrlGet) | **GET** /rest/elastic-sync/document/url | Get a temporary url for a single document |
| [**restElasticSyncDocumentsDelete()**](SyncApi.md#restElasticSyncDocumentsDelete) | **DELETE** /rest/elastic-sync/documents | Delete files from sync documents |
| [**restElasticSyncDocumentsGet()**](SyncApi.md#restElasticSyncDocumentsGet) | **GET** /rest/elastic-sync/documents | List documents for a single sync |


## `restElasticSyncDocumentGet()`

```php
restElasticSyncDocumentGet($key): \ck/plenty-client\Model\StorageObject
```

Get a single storage object from sync documents

Gets a single storage object from sync documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The storage key of the object to get from sync documents.

try {
    $result = $apiInstance->restElasticSyncDocumentGet($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->restElasticSyncDocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The storage key of the object to get from sync documents. | |

### Return type

[**\ck/plenty-client\Model\StorageObject**](../Model/StorageObject.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restElasticSyncDocumentPost()`

```php
restElasticSyncDocumentPost($key): \ck/plenty-client\Model\StorageObject
```

Upload a document to sync directory

Uploads a document to sync directory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The storage key for the file to upload

try {
    $result = $apiInstance->restElasticSyncDocumentPost($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->restElasticSyncDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The storage key for the file to upload | |

### Return type

[**\ck/plenty-client\Model\StorageObject**](../Model/StorageObject.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restElasticSyncDocumentUrlGet()`

```php
restElasticSyncDocumentUrlGet($key): object
```

Get a temporary url for a single document

Gets a temporary url for a single document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The storage key to get temporary url for

try {
    $result = $apiInstance->restElasticSyncDocumentUrlGet($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->restElasticSyncDocumentUrlGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The storage key to get temporary url for | |

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

## `restElasticSyncDocumentsDelete()`

```php
restElasticSyncDocumentsDelete($key_list): object
```

Delete files from sync documents

Deletes files from sync documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_list = 56; // int | List of storage keys to delete

try {
    $result = $apiInstance->restElasticSyncDocumentsDelete($key_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->restElasticSyncDocumentsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_list** | **int**| List of storage keys to delete | |

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

## `restElasticSyncDocumentsGet()`

```php
restElasticSyncDocumentsGet($continuation_token): \ck/plenty-client\Model\StorageObjectList
```

List documents for a single sync

Lists documents for a single sync

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\SyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$continuation_token = 'continuation_token_example'; // string | token from previous request to continue listing documents

try {
    $result = $apiInstance->restElasticSyncDocumentsGet($continuation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncApi->restElasticSyncDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **continuation_token** | **string**| token from previous request to continue listing documents | [optional] |

### Return type

[**\ck/plenty-client\Model\StorageObjectList**](../Model/StorageObjectList.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

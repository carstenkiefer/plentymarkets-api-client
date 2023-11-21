# ck/plenty-client\MessengerApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restMessagesGet()**](MessengerApi.md#restMessagesGet) | **GET** /rest/messages | List message stream of a certain message (excluding message with UUID5) |
| [**restMessagesGetGet()**](MessengerApi.md#restMessagesGetGet) | **GET** /rest/messages/get | List messages per page |
| [**restMessagesPost()**](MessengerApi.md#restMessagesPost) | **POST** /rest/messages | Create message |
| [**restMessagesUuid5AttachmentsGet()**](MessengerApi.md#restMessagesUuid5AttachmentsGet) | **GET** /rest/messages/{uuid5}/attachments | Get attachment by UUID and file name |
| [**restMessagesUuid5ControlsPut()**](MessengerApi.md#restMessagesUuid5ControlsPut) | **PUT** /rest/messages/{uuid5}/controls | Update message controls |
| [**restMessagesUuid5Delete()**](MessengerApi.md#restMessagesUuid5Delete) | **DELETE** /rest/messages/{uuid5} | Delete message by UUID |
| [**restMessagesUuid5DonePut()**](MessengerApi.md#restMessagesUuid5DonePut) | **PUT** /rest/messages/{uuid5}/done | Set or unset doneAt date of message |
| [**restMessagesUuid5Get()**](MessengerApi.md#restMessagesUuid5Get) | **GET** /rest/messages/{uuid5} | Get message for the given UUID5 and all its associated successors |
| [**restMessagesUuid5ReadByPut()**](MessengerApi.md#restMessagesUuid5ReadByPut) | **PUT** /rest/messages/{uuid5}/readBy | Update ReadBy array of message |
| [**restMessagesUuid5TagsPut()**](MessengerApi.md#restMessagesUuid5TagsPut) | **PUT** /rest/messages/{uuid5}/tags | Update tags of message |
| [**restMessagesUuid5VisibilityPut()**](MessengerApi.md#restMessagesUuid5VisibilityPut) | **PUT** /rest/messages/{uuid5}/visibility | Update message visibility |


## `restMessagesGet()`

```php
restMessagesGet($uuid, $successors, $amount): \ck/plenty-client\Model\Message[]
```

List message stream of a certain message (excluding message with UUID5)

Lists the stream of messages of a certain message (excluding the message with the given UUID5).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\MessengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The reference UUID5 of the message to start from (excluding).
$successors = True; // bool | If set to FALSE, the messages older than the referenced message will be returned.
$amount = 56; // int | The number of messages to be listed (defaults to 50)

try {
    $result = $apiInstance->restMessagesGet($uuid, $successors, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessengerApi->restMessagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The reference UUID5 of the message to start from (excluding). | [optional] |
| **successors** | **bool**| If set to FALSE, the messages older than the referenced message will be returned. | [optional] |
| **amount** | **int**| The number of messages to be listed (defaults to 50) | [optional] |

### Return type

[**\ck/plenty-client\Model\Message[]**](../Model/Message.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restMessagesGetGet()`

```php
restMessagesGetGet($page, $items_per_page): \ck/plenty-client\Model\Message[]
```

List messages per page

Lists the number of messages per page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\MessengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The number of the returned page of messages. The default value is 1 (the first).
$items_per_page = 56; // int | The number of messages to be listed (defaults to 50).

try {
    $result = $apiInstance->restMessagesGetGet($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessengerApi->restMessagesGetGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The number of the returned page of messages. The default value is 1 (the first). | [optional] |
| **items_per_page** | **int**| The number of messages to be listed (defaults to 50). | [optional] |

### Return type

[**\ck/plenty-client\Model\Message[]**](../Model/Message.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restMessagesPost()`

```php
restMessagesPost($_rest_messages): \ck/plenty-client\Model\Message
```

Create message

Creates a new message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\MessengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_messages = new \ck/plenty-client\Model\RestMessagesPostRequest(); // \ck/plenty-client\Model\RestMessagesPostRequest

try {
    $result = $apiInstance->restMessagesPost($_rest_messages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessengerApi->restMessagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_messages** | [**\ck/plenty-client\Model\RestMessagesPostRequest**](../Model/RestMessagesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Message**](../Model/Message.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restMessagesUuid5AttachmentsGet()`

```php
restMessagesUuid5AttachmentsGet($uuid5, $filename): object
```

Get attachment by UUID and file name

Gets an attachment. The UUID of the message and the file name must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\MessengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid5 = 'uuid5_example'; // string | The UUID of the message
$filename = 'filename_example'; // string | The file name of the attachment

try {
    $result = $apiInstance->restMessagesUuid5AttachmentsGet($uuid5, $filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessengerApi->restMessagesUuid5AttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid5** | **string**| The UUID of the message | |
| **filename** | **string**| The file name of the attachment | |

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

## `restMessagesUuid5ControlsPut()`

```php
restMessagesUuid5ControlsPut($uuid5, $_rest_messages_uuid5_controls): \ck/plenty-client\Model\Message
```

Update message controls

Updates the message ui control options in the message meta data and returns the message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\MessengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid5 = 56; // int
$_rest_messages_uuid5_controls = new \ck/plenty-client\Model\RestMessagesUuid5ControlsPutRequest(); // \ck/plenty-client\Model\RestMessagesUuid5ControlsPutRequest

try {
    $result = $apiInstance->restMessagesUuid5ControlsPut($uuid5, $_rest_messages_uuid5_controls);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessengerApi->restMessagesUuid5ControlsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid5** | **int**|  | |
| **_rest_messages_uuid5_controls** | [**\ck/plenty-client\Model\RestMessagesUuid5ControlsPutRequest**](../Model/RestMessagesUuid5ControlsPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Message**](../Model/Message.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restMessagesUuid5Delete()`

```php
restMessagesUuid5Delete($uuid5): object
```

Delete message by UUID

Deletes a message by the UUID. The UUID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\MessengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid5 = 'uuid5_example'; // string | The UUID of the message to be deleted

try {
    $result = $apiInstance->restMessagesUuid5Delete($uuid5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessengerApi->restMessagesUuid5Delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid5** | **string**| The UUID of the message to be deleted | |

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

## `restMessagesUuid5DonePut()`

```php
restMessagesUuid5DonePut($uuid5, $done_at, $_rest_messages_uuid5_done): \ck/plenty-client\Model\Message[]
```

Set or unset doneAt date of message

Sets or unsets the doneAt date of the message. The UUID {uuid5} must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\MessengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid5 = 'uuid5_example'; // string | The UUID5 of the message
$done_at = 'done_at_example'; // string | Set (or unset, if doneAt is not given) the doneAt date in the message.
$_rest_messages_uuid5_done = new \ck/plenty-client\Model\RestMessagesUuid5DonePutRequest(); // \ck/plenty-client\Model\RestMessagesUuid5DonePutRequest

try {
    $result = $apiInstance->restMessagesUuid5DonePut($uuid5, $done_at, $_rest_messages_uuid5_done);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessengerApi->restMessagesUuid5DonePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid5** | **string**| The UUID5 of the message | |
| **done_at** | **string**| Set (or unset, if doneAt is not given) the doneAt date in the message. | [optional] |
| **_rest_messages_uuid5_done** | [**\ck/plenty-client\Model\RestMessagesUuid5DonePutRequest**](../Model/RestMessagesUuid5DonePutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Message[]**](../Model/Message.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restMessagesUuid5Get()`

```php
restMessagesUuid5Get($uuid5): \ck/plenty-client\Model\Message[]
```

Get message for the given UUID5 and all its associated successors

Gets the message for the given UUID5 and all its associated successors. The UUID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\MessengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid5 = 'uuid5_example'; // string | The UUID5 of the message

try {
    $result = $apiInstance->restMessagesUuid5Get($uuid5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessengerApi->restMessagesUuid5Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid5** | **string**| The UUID5 of the message | |

### Return type

[**\ck/plenty-client\Model\Message[]**](../Model/Message.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restMessagesUuid5ReadByPut()`

```php
restMessagesUuid5ReadByPut($read_by, $uuid5): \ck/plenty-client\Model\Message[]
```

Update ReadBy array of message

Updates the ReadBy array of the message. The UUID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\MessengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$read_by = 56; // int | The ID of the user who read the message
$uuid5 = 'uuid5_example'; // string | The UUID of the message

try {
    $result = $apiInstance->restMessagesUuid5ReadByPut($read_by, $uuid5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessengerApi->restMessagesUuid5ReadByPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **read_by** | **int**| The ID of the user who read the message | |
| **uuid5** | **string**| The UUID of the message | |

### Return type

[**\ck/plenty-client\Model\Message[]**](../Model/Message.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restMessagesUuid5TagsPut()`

```php
restMessagesUuid5TagsPut($tags, $uuid5): \ck/plenty-client\Model\Message[]
```

Update tags of message

Updates the tags of the message. The UUID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\MessengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tags = 56; // int | The tags of the message
$uuid5 = 'uuid5_example'; // string | The UUID of the message

try {
    $result = $apiInstance->restMessagesUuid5TagsPut($tags, $uuid5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessengerApi->restMessagesUuid5TagsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tags** | **int**| The tags of the message | |
| **uuid5** | **string**| The UUID of the message | |

### Return type

[**\ck/plenty-client\Model\Message[]**](../Model/Message.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restMessagesUuid5VisibilityPut()`

```php
restMessagesUuid5VisibilityPut($uuid5, $_rest_messages_uuid5_visibility): \ck/plenty-client\Model\Message[]
```

Update message visibility

Updates the message visibility. The UUID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\MessengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid5 = 'uuid5_example'; // string | The UUID of the message
$_rest_messages_uuid5_visibility = new \ck/plenty-client\Model\RestMessagesUuid5DonePutRequest(); // \ck/plenty-client\Model\RestMessagesUuid5DonePutRequest

try {
    $result = $apiInstance->restMessagesUuid5VisibilityPut($uuid5, $_rest_messages_uuid5_visibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessengerApi->restMessagesUuid5VisibilityPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid5** | **string**| The UUID of the message | |
| **_rest_messages_uuid5_visibility** | [**\ck/plenty-client\Model\RestMessagesUuid5DonePutRequest**](../Model/RestMessagesUuid5DonePutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Message[]**](../Model/Message.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# ck/plenty-client\TicketMessageApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restTicketsMessagesMessageIdGet()**](TicketMessageApi.md#restTicketsMessagesMessageIdGet) | **GET** /rest/tickets/messages/{messageId} | Get ticket message for given message ID |
| [**restTicketsTicketIdMessagesCommentGet()**](TicketMessageApi.md#restTicketsTicketIdMessagesCommentGet) | **GET** /rest/tickets/{ticketId}/messages/comment | List all internal ticket messages |
| [**restTicketsTicketIdMessagesGet()**](TicketMessageApi.md#restTicketsTicketIdMessagesGet) | **GET** /rest/tickets/{ticketId}/messages | List all ticket messages for given ticket ID |
| [**restTicketsTicketIdMessagesMessageGet()**](TicketMessageApi.md#restTicketsTicketIdMessagesMessageGet) | **GET** /rest/tickets/{ticketId}/messages/message | List all public ticket messages |


## `restTicketsMessagesMessageIdGet()`

```php
restTicketsMessagesMessageIdGet($message_id): \ck/plenty-client\Model\TicketMessage
```

Get ticket message for given message ID

Gets a ticket message. The ID of the message must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TicketMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 56; // int | The ID of the ticket message to be returned

try {
    $result = $apiInstance->restTicketsMessagesMessageIdGet($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketMessageApi->restTicketsMessagesMessageIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **int**| The ID of the ticket message to be returned | |

### Return type

[**\ck/plenty-client\Model\TicketMessage**](../Model/TicketMessage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTicketsTicketIdMessagesCommentGet()`

```php
restTicketsTicketIdMessagesCommentGet($ticket_id): \ck/plenty-client\Model\TicketMessage[]
```

List all internal ticket messages

Lists all internal ticket messages. The ID of the ticket must be specified. When type = 'comment', the message is internal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TicketMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | The ID of the ticket containing the messages

try {
    $result = $apiInstance->restTicketsTicketIdMessagesCommentGet($ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketMessageApi->restTicketsTicketIdMessagesCommentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticket_id** | **int**| The ID of the ticket containing the messages | |

### Return type

[**\ck/plenty-client\Model\TicketMessage[]**](../Model/TicketMessage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTicketsTicketIdMessagesGet()`

```php
restTicketsTicketIdMessagesGet($ticket_id): \ck/plenty-client\Model\TicketMessage[]
```

List all ticket messages for given ticket ID

Lists all ticket messages. The ID of the ticket must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TicketMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | The ID of the ticket containing the messages

try {
    $result = $apiInstance->restTicketsTicketIdMessagesGet($ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketMessageApi->restTicketsTicketIdMessagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticket_id** | **int**| The ID of the ticket containing the messages | |

### Return type

[**\ck/plenty-client\Model\TicketMessage[]**](../Model/TicketMessage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTicketsTicketIdMessagesMessageGet()`

```php
restTicketsTicketIdMessagesMessageGet($ticket_id): \ck/plenty-client\Model\TicketMessage[]
```

List all public ticket messages

Lists all public ticket messages. The ID of the ticket must be specified. When type = 'message', the message is public.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TicketMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | The ID of the ticket containing the messages

try {
    $result = $apiInstance->restTicketsTicketIdMessagesMessageGet($ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketMessageApi->restTicketsTicketIdMessagesMessageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticket_id** | **int**| The ID of the ticket containing the messages | |

### Return type

[**\ck/plenty-client\Model\TicketMessage[]**](../Model/TicketMessage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

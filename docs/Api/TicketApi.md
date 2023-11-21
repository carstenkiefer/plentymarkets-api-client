# ck/plenty-client\TicketApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restTicketsGet()**](TicketApi.md#restTicketsGet) | **GET** /rest/tickets | List tickets by filters |
| [**restTicketsPost()**](TicketApi.md#restTicketsPost) | **POST** /rest/tickets | Create ticket |
| [**restTicketsStatusNamesGet()**](TicketApi.md#restTicketsStatusNamesGet) | **GET** /rest/tickets/status/names | List status names |
| [**restTicketsStatusTypeNamesGet()**](TicketApi.md#restTicketsStatusTypeNamesGet) | **GET** /rest/tickets/status/type/names | List status names with typeId |
| [**restTicketsTicketIdGet()**](TicketApi.md#restTicketsTicketIdGet) | **GET** /rest/tickets/{ticketId} | Get ticket |
| [**restTicketsTicketIdPost()**](TicketApi.md#restTicketsTicketIdPost) | **POST** /rest/tickets/{ticketId} | Create message |
| [**restTicketsTicketIdPut()**](TicketApi.md#restTicketsTicketIdPut) | **PUT** /rest/tickets/{ticketId} | Update ticket |
| [**restTicketsTypesNamesGet()**](TicketApi.md#restTicketsTypesNamesGet) | **GET** /rest/tickets/types/names | List type names |


## `restTicketsGet()`

```php
restTicketsGet($id, $type_id, $priority_id, $parent_ticket_id, $status_id, $confidential, $contact_id, $deadline_at, $title, $progress, $plenty_id, $source, $status_group_id, $role_id, $owner_id, $fulltext, $customer_class_id, $resubmission_at): \ck/plenty-client\Model\RestTicketsGet200Response
```

List tickets by filters

Lists the tickets by filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Filter that restricts the search result to tickets of a specific ticket ID
$type_id = 56; // int | Filter that restricts the search result to tickets of specific ticket types
$priority_id = 56; // int | Filter that restricts the search result to tickets of a specific ticket priority ID
$parent_ticket_id = 56; // int | Filter that restricts the search result to tickets with a specified parent ticket ID
$status_id = 56; // int | Filter that restricts the search result to tickets with a specified status ID
$confidential = 56; // int | Filter that restricts the search result to tickets of a specific confidential value
$contact_id = 56; // int | Filter that restricts the search result to tickets with a specified contact ID
$deadline_at = 56; // int | Filter that restricts the search result to tickets with a specified deadline. Valid date formats are 'yyyy-mm-dd hh-mm-ss' or 'yyyy-mm-dd'.
$title = 56; // int | Filter that restricts the search result to tickets with a specified phrase in title
$progress = 56; // int | Filter that restricts the search result to tickets with a specified progress in percent
$plenty_id = 56; // int | Filter that restricts the search result to tickets with a specified client (store) ID
$source = 56; // int | Filter that restricts the search result to tickets with a specific source value
$status_group_id = 56; // int | Filter that restricts the search result to tickets with a specified status group ID
$role_id = 56; // int | Filter that restricts the search result to tickets with a specified role ID
$owner_id = 56; // int | Filter that restricts the search result to tickets with a specified owner ID
$fulltext = 56; // int | Filter that restricts the search result to tickets with full-text search. The search includes id, typeId, priorityId, title, source and the contact's firstName and lastName.
$customer_class_id = 56; // int | Filter that restricts the search result to tickets with a specified customer class ID
$resubmission_at = 56; // int | Filter that restricts the search result to tickets with a specified resubmission date. Valid date formats are 'yyyy-mm-dd hh-mm-ss' or 'yyyy-mm-dd'.

try {
    $result = $apiInstance->restTicketsGet($id, $type_id, $priority_id, $parent_ticket_id, $status_id, $confidential, $contact_id, $deadline_at, $title, $progress, $plenty_id, $source, $status_group_id, $role_id, $owner_id, $fulltext, $customer_class_id, $resubmission_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->restTicketsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Filter that restricts the search result to tickets of a specific ticket ID | [optional] |
| **type_id** | **int**| Filter that restricts the search result to tickets of specific ticket types | [optional] |
| **priority_id** | **int**| Filter that restricts the search result to tickets of a specific ticket priority ID | [optional] |
| **parent_ticket_id** | **int**| Filter that restricts the search result to tickets with a specified parent ticket ID | [optional] |
| **status_id** | **int**| Filter that restricts the search result to tickets with a specified status ID | [optional] |
| **confidential** | **int**| Filter that restricts the search result to tickets of a specific confidential value | [optional] |
| **contact_id** | **int**| Filter that restricts the search result to tickets with a specified contact ID | [optional] |
| **deadline_at** | **int**| Filter that restricts the search result to tickets with a specified deadline. Valid date formats are &#39;yyyy-mm-dd hh-mm-ss&#39; or &#39;yyyy-mm-dd&#39;. | [optional] |
| **title** | **int**| Filter that restricts the search result to tickets with a specified phrase in title | [optional] |
| **progress** | **int**| Filter that restricts the search result to tickets with a specified progress in percent | [optional] |
| **plenty_id** | **int**| Filter that restricts the search result to tickets with a specified client (store) ID | [optional] |
| **source** | **int**| Filter that restricts the search result to tickets with a specific source value | [optional] |
| **status_group_id** | **int**| Filter that restricts the search result to tickets with a specified status group ID | [optional] |
| **role_id** | **int**| Filter that restricts the search result to tickets with a specified role ID | [optional] |
| **owner_id** | **int**| Filter that restricts the search result to tickets with a specified owner ID | [optional] |
| **fulltext** | **int**| Filter that restricts the search result to tickets with full-text search. The search includes id, typeId, priorityId, title, source and the contact&#39;s firstName and lastName. | [optional] |
| **customer_class_id** | **int**| Filter that restricts the search result to tickets with a specified customer class ID | [optional] |
| **resubmission_at** | **int**| Filter that restricts the search result to tickets with a specified resubmission date. Valid date formats are &#39;yyyy-mm-dd hh-mm-ss&#39; or &#39;yyyy-mm-dd&#39;. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestTicketsGet200Response**](../Model/RestTicketsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTicketsPost()`

```php
restTicketsPost($_rest_tickets): \ck/plenty-client\Model\Ticket
```

Create ticket

Creates a ticket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_tickets = new \ck/plenty-client\Model\RestTicketsPostRequest(); // \ck/plenty-client\Model\RestTicketsPostRequest

try {
    $result = $apiInstance->restTicketsPost($_rest_tickets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->restTicketsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_tickets** | [**\ck/plenty-client\Model\RestTicketsPostRequest**](../Model/RestTicketsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Ticket**](../Model/Ticket.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTicketsStatusNamesGet()`

```php
restTicketsStatusNamesGet(): \ck/plenty-client\Model\TicketStatusName[]
```

List status names

Lists status names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restTicketsStatusNamesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->restTicketsStatusNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\TicketStatusName[]**](../Model/TicketStatusName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTicketsStatusTypeNamesGet()`

```php
restTicketsStatusTypeNamesGet(): \ck/plenty-client\Model\TicketStatusName[]
```

List status names with typeId

Lists status names with typeId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restTicketsStatusTypeNamesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->restTicketsStatusTypeNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\TicketStatusName[]**](../Model/TicketStatusName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTicketsTicketIdGet()`

```php
restTicketsTicketIdGet($ticket_id, $with): \ck/plenty-client\Model\Ticket
```

Get ticket

Gets the ticket. The ID of the ticket must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | The ID of the ticket to be loaded.
$with = 56; // int | An array with relations to be loaded with the ticket. Possible values are 'order' and 'contact'

try {
    $result = $apiInstance->restTicketsTicketIdGet($ticket_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->restTicketsTicketIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticket_id** | **int**| The ID of the ticket to be loaded. | |
| **with** | **int**| An array with relations to be loaded with the ticket. Possible values are &#39;order&#39; and &#39;contact&#39; | [optional] |

### Return type

[**\ck/plenty-client\Model\Ticket**](../Model/Ticket.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTicketsTicketIdPost()`

```php
restTicketsTicketIdPost($ticket_id): \ck/plenty-client\Model\TicketMessage
```

Create message

Creates a message for the ticket. The ID of the ticket must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | The ID of the ticket

try {
    $result = $apiInstance->restTicketsTicketIdPost($ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->restTicketsTicketIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticket_id** | **int**| The ID of the ticket | |

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

## `restTicketsTicketIdPut()`

```php
restTicketsTicketIdPut($ticket_id): \ck/plenty-client\Model\Ticket
```

Update ticket

Updates a ticket. The ID of the ticket must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | The ID of the ticket

try {
    $result = $apiInstance->restTicketsTicketIdPut($ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->restTicketsTicketIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticket_id** | **int**| The ID of the ticket | |

### Return type

[**\ck/plenty-client\Model\Ticket**](../Model/Ticket.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTicketsTypesNamesGet()`

```php
restTicketsTypesNamesGet(): \ck/plenty-client\Model\TicketTypeName[]
```

List type names

Lists all type names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restTicketsTypesNamesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->restTicketsTypesNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\TicketTypeName[]**](../Model/TicketTypeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

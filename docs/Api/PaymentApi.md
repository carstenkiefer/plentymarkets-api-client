# ck\PaymentApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restPaymentPaymentIdContactContactIdPost()**](PaymentApi.md#restPaymentPaymentIdContactContactIdPost) | **POST** /rest/payment/{paymentId}/contact/{contactId} | Create Payment-Contact-Relation |
| [**restPaymentPaymentIdContactDelete()**](PaymentApi.md#restPaymentPaymentIdContactDelete) | **DELETE** /rest/payment/{paymentId}/contact | Delete Payment-Contact-Relation |
| [**restPaymentPaymentIdOrderDelete()**](PaymentApi.md#restPaymentPaymentIdOrderDelete) | **DELETE** /rest/payment/{paymentId}/order | Delete Payment-Order-Relation |
| [**restPaymentPaymentIdOrderOrderIdPost()**](PaymentApi.md#restPaymentPaymentIdOrderOrderIdPost) | **POST** /rest/payment/{paymentId}/order/{orderId} | Create Payment-Order-Relation |
| [**restPaymentPropertiesTypesNamesNameIdGet()**](PaymentApi.md#restPaymentPropertiesTypesNamesNameIdGet) | **GET** /rest/payment/properties/types/names/{nameId} | Get a name of a property type |
| [**restPaymentPropertiesTypesNamesPost()**](PaymentApi.md#restPaymentPropertiesTypesNamesPost) | **POST** /rest/payment/properties/types/names | Create a name of a property type |
| [**restPaymentPropertiesTypesNamesPut()**](PaymentApi.md#restPaymentPropertiesTypesNamesPut) | **PUT** /rest/payment/properties/types/names | Update a name of a property type |
| [**restPaymentsEntrydateGet()**](PaymentApi.md#restPaymentsEntrydateGet) | **GET** /rest/payments/entrydate | List payments by entry date |
| [**restPaymentsGet()**](PaymentApi.md#restPaymentsGet) | **GET** /rest/payments | List payments |
| [**restPaymentsImportdateGet()**](PaymentApi.md#restPaymentsImportdateGet) | **GET** /rest/payments/importdate | List payments by import date |
| [**restPaymentsMethodNamesGet()**](PaymentApi.md#restPaymentsMethodNamesGet) | **GET** /rest/payments/methodNames | List payment methods names |
| [**restPaymentsMethodNamesPaymentMethodIdGet()**](PaymentApi.md#restPaymentsMethodNamesPaymentMethodIdGet) | **GET** /rest/payments/methodNames/{paymentMethodId} | List all payment method names for a payment method id |
| [**restPaymentsMethodNamesPaymentMethodIdLangGet()**](PaymentApi.md#restPaymentsMethodNamesPaymentMethodIdLangGet) | **GET** /rest/payments/methodNames/{paymentMethodId}/{lang} | Gets a payment method name by id and lang |
| [**restPaymentsMethodsEbicsGet()**](PaymentApi.md#restPaymentsMethodsEbicsGet) | **GET** /rest/payments/methods/ebics | Get EBICS Accounts |
| [**restPaymentsMethodsEbicsPost()**](PaymentApi.md#restPaymentsMethodsEbicsPost) | **POST** /rest/payments/methods/ebics | Create an EBICS Account |
| [**restPaymentsMethodsGet()**](PaymentApi.md#restPaymentsMethodsGet) | **GET** /rest/payments/methods | List payment methods |
| [**restPaymentsMethodsHbciGet()**](PaymentApi.md#restPaymentsMethodsHbciGet) | **GET** /rest/payments/methods/hbci | Returns the HBCI-Account count |
| [**restPaymentsMethodsListBackendActiveLanguageGet()**](PaymentApi.md#restPaymentsMethodsListBackendActiveLanguageGet) | **GET** /rest/payments/methods/list/backend_active/{language} | Returns all payment methods with id and name which are active for the backend |
| [**restPaymentsMethodsListBackendIconGet()**](PaymentApi.md#restPaymentsMethodsListBackendIconGet) | **GET** /rest/payments/methods/list/backend_icon | Returns all payment methods with id and backend icon url |
| [**restPaymentsMethodsListBackendSearchableLanguageGet()**](PaymentApi.md#restPaymentsMethodsListBackendSearchableLanguageGet) | **GET** /rest/payments/methods/list/backend_searchable/{language} | Returns all payment methods with id and name which are searchable for the backend |
| [**restPaymentsMethodsListGet()**](PaymentApi.md#restPaymentsMethodsListGet) | **GET** /rest/payments/methods/list | Returns all payment methods with id and name |
| [**restPaymentsMethodsListHandleSubscriptionLanguageGet()**](PaymentApi.md#restPaymentsMethodsListHandleSubscriptionLanguageGet) | **GET** /rest/payments/methods/list/handle_subscription/{language} |  |
| [**restPaymentsMethodsMethodIdGet()**](PaymentApi.md#restPaymentsMethodsMethodIdGet) | **GET** /rest/payments/methods/{methodId} | List payments of a payment method |
| [**restPaymentsMethodsPluginsPluginKeyGet()**](PaymentApi.md#restPaymentsMethodsPluginsPluginKeyGet) | **GET** /rest/payments/methods/plugins/{pluginKey} | Get a payment method |
| [**restPaymentsMethodsPost()**](PaymentApi.md#restPaymentsMethodsPost) | **POST** /rest/payments/methods | Create a payment method |
| [**restPaymentsMethodsPut()**](PaymentApi.md#restPaymentsMethodsPut) | **PUT** /rest/payments/methods | Update a payment method |
| [**restPaymentsOrdersOrderIdGet()**](PaymentApi.md#restPaymentsOrdersOrderIdGet) | **GET** /rest/payments/orders/{orderId} | List payments of an order |
| [**restPaymentsPaymentIdGet()**](PaymentApi.md#restPaymentsPaymentIdGet) | **GET** /rest/payments/{paymentId} | Get a payment |
| [**restPaymentsPaymentIdPropertiesGet()**](PaymentApi.md#restPaymentsPaymentIdPropertiesGet) | **GET** /rest/payments/{paymentId}/properties | List properties for a payment |
| [**restPaymentsPost()**](PaymentApi.md#restPaymentsPost) | **POST** /rest/payments | Create a payment |
| [**restPaymentsPropertiesDateGet()**](PaymentApi.md#restPaymentsPropertiesDateGet) | **GET** /rest/payments/properties/date | List properties by creation date |
| [**restPaymentsPropertiesGet()**](PaymentApi.md#restPaymentsPropertiesGet) | **GET** /rest/payments/properties | List properties |
| [**restPaymentsPropertiesPost()**](PaymentApi.md#restPaymentsPropertiesPost) | **POST** /rest/payments/properties | Create a payment property |
| [**restPaymentsPropertiesPropertyIdGet()**](PaymentApi.md#restPaymentsPropertiesPropertyIdGet) | **GET** /rest/payments/properties/{propertyId} | Get a property |
| [**restPaymentsPropertiesPut()**](PaymentApi.md#restPaymentsPropertiesPut) | **PUT** /rest/payments/properties | Update a payment property |
| [**restPaymentsPropertiesTypesGet()**](PaymentApi.md#restPaymentsPropertiesTypesGet) | **GET** /rest/payments/properties/types | List property types |
| [**restPaymentsPropertiesTypesPost()**](PaymentApi.md#restPaymentsPropertiesTypesPost) | **POST** /rest/payments/properties/types | Create a property type |
| [**restPaymentsPropertiesTypesPut()**](PaymentApi.md#restPaymentsPropertiesTypesPut) | **PUT** /rest/payments/properties/types | Update a property type |
| [**restPaymentsPropertiesTypesTypeIdGet()**](PaymentApi.md#restPaymentsPropertiesTypesTypeIdGet) | **GET** /rest/payments/properties/types/{typeId} | Get a property type |
| [**restPaymentsPropertyPropertyTypeIdPropertyValueGet()**](PaymentApi.md#restPaymentsPropertyPropertyTypeIdPropertyValueGet) | **GET** /rest/payments/property/{propertyTypeId}/{propertyValue} | List payments by property type ID and value |
| [**restPaymentsPut()**](PaymentApi.md#restPaymentsPut) | **PUT** /rest/payments | Update a payment |
| [**restPaymentsStatusStatusIdGet()**](PaymentApi.md#restPaymentsStatusStatusIdGet) | **GET** /rest/payments/status/{statusId} | List payments of a payment status |
| [**restPaymentsTransactionsTransactionTypeIdGet()**](PaymentApi.md#restPaymentsTransactionsTransactionTypeIdGet) | **GET** /rest/payments/transactions/{transactionTypeId} | List payments of a transaction type |


## `restPaymentPaymentIdContactContactIdPost()`

```php
restPaymentPaymentIdContactContactIdPost($payment_id, $contact_id): \ck\Model\PaymentContactRelation
```

Create Payment-Contact-Relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int
$contact_id = 56; // int

try {
    $result = $apiInstance->restPaymentPaymentIdContactContactIdPost($payment_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentPaymentIdContactContactIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **int**|  | |
| **contact_id** | **int**|  | |

### Return type

[**\ck\Model\PaymentContactRelation**](../Model/PaymentContactRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentPaymentIdContactDelete()`

```php
restPaymentPaymentIdContactDelete($payment_id)
```

Delete Payment-Contact-Relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int

try {
    $apiInstance->restPaymentPaymentIdContactDelete($payment_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentPaymentIdContactDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **int**|  | |

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

## `restPaymentPaymentIdOrderDelete()`

```php
restPaymentPaymentIdOrderDelete($payment_id)
```

Delete Payment-Order-Relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int

try {
    $apiInstance->restPaymentPaymentIdOrderDelete($payment_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentPaymentIdOrderDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **int**|  | |

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

## `restPaymentPaymentIdOrderOrderIdPost()`

```php
restPaymentPaymentIdOrderOrderIdPost($payment_id, $order_id): \ck\Model\PaymentOrderRelation
```

Create Payment-Order-Relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int
$order_id = 56; // int

try {
    $result = $apiInstance->restPaymentPaymentIdOrderOrderIdPost($payment_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentPaymentIdOrderOrderIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **int**|  | |
| **order_id** | **int**|  | |

### Return type

[**\ck\Model\PaymentOrderRelation**](../Model/PaymentOrderRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentPropertiesTypesNamesNameIdGet()`

```php
restPaymentPropertiesTypesNamesNameIdGet($name_id): \ck\Model\PaymentPropertyTypeName[]
```

Get a name of a property type

Gets a name of a property type. The ID of the name must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name_id = 56; // int

try {
    $result = $apiInstance->restPaymentPropertiesTypesNamesNameIdGet($name_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentPropertiesTypesNamesNameIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name_id** | **int**|  | |

### Return type

[**\ck\Model\PaymentPropertyTypeName[]**](../Model/PaymentPropertyTypeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentPropertiesTypesNamesPost()`

```php
restPaymentPropertiesTypesNamesPost($_rest_payment_properties_types_names): \ck\Model\PaymentPropertyTypeName
```

Create a name of a property type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payment_properties_types_names = new \ck\Model\RestPaymentPropertiesTypesNamesPutRequest(); // \ck\Model\RestPaymentPropertiesTypesNamesPutRequest

try {
    $result = $apiInstance->restPaymentPropertiesTypesNamesPost($_rest_payment_properties_types_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentPropertiesTypesNamesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_payment_properties_types_names** | [**\ck\Model\RestPaymentPropertiesTypesNamesPutRequest**](../Model/RestPaymentPropertiesTypesNamesPutRequest.md)|  | [optional] |

### Return type

[**\ck\Model\PaymentPropertyTypeName**](../Model/PaymentPropertyTypeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentPropertiesTypesNamesPut()`

```php
restPaymentPropertiesTypesNamesPut($_rest_payment_properties_types_names): \ck\Model\PaymentPropertyTypeName
```

Update a name of a property type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payment_properties_types_names = new \ck\Model\RestPaymentPropertiesTypesNamesPutRequest(); // \ck\Model\RestPaymentPropertiesTypesNamesPutRequest

try {
    $result = $apiInstance->restPaymentPropertiesTypesNamesPut($_rest_payment_properties_types_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentPropertiesTypesNamesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_payment_properties_types_names** | [**\ck\Model\RestPaymentPropertiesTypesNamesPutRequest**](../Model/RestPaymentPropertiesTypesNamesPutRequest.md)|  | [optional] |

### Return type

[**\ck\Model\PaymentPropertyTypeName**](../Model/PaymentPropertyTypeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsEntrydateGet()`

```php
restPaymentsEntrydateGet($start_date, $end_date, $items_per_page, $page): \ck\Model\Payment[]
```

List payments by entry date

Lists all payments by entry date within a certain date range. The start and the end of the date range must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 'start_date_example'; // string | The start date of the date range for the entry date of the payment
$end_date = 'end_date_example'; // string | The end date of the date range for the entry date of the payment
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsEntrydateGet($start_date, $end_date, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsEntrydateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **string**| The start date of the date range for the entry date of the payment | [optional] |
| **end_date** | **string**| The end date of the date range for the entry date of the payment | [optional] |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsGet()`

```php
restPaymentsGet($items_per_page, $page): \ck\Model\Payment[]
```

List payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsGet($items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsImportdateGet()`

```php
restPaymentsImportdateGet($start_date, $end_date, $items_per_page, $page): \ck\Model\Payment[]
```

List payments by import date

Lists all payments by import date within a certain date range. The start and the end of the date range must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 'start_date_example'; // string | The start date of the date range for the import date of the payment
$end_date = 'end_date_example'; // string | The end date of the date range for the import date of the payment
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsImportdateGet($start_date, $end_date, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsImportdateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **string**| The start date of the date range for the import date of the payment | [optional] |
| **end_date** | **string**| The end date of the date range for the import date of the payment | [optional] |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsMethodNamesGet()`

```php
restPaymentsMethodNamesGet($items_per_page, $page): \ck\Model\PaymentMethodName[]
```

List payment methods names

Lists all payment method names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsMethodNamesGet($items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\PaymentMethodName[]**](../Model/PaymentMethodName.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsMethodNamesPaymentMethodIdGet()`

```php
restPaymentsMethodNamesPaymentMethodIdGet($payment_method_id, $items_per_page, $page): \ck\Model\PaymentMethodName[]
```

List all payment method names for a payment method id

List all payment method names for a payment method id. The payment method id must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_method_id = 56; // int
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsMethodNamesPaymentMethodIdGet($payment_method_id, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodNamesPaymentMethodIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method_id** | **int**|  | |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\PaymentMethodName[]**](../Model/PaymentMethodName.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsMethodNamesPaymentMethodIdLangGet()`

```php
restPaymentsMethodNamesPaymentMethodIdLangGet($payment_method_id, $lang): \ck\Model\PaymentMethodName
```

Gets a payment method name by id and lang

Gets a payment method name by id and lang. The ID and the requested lang of the payment method must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_method_id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restPaymentsMethodNamesPaymentMethodIdLangGet($payment_method_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodNamesPaymentMethodIdLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method_id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

[**\ck\Model\PaymentMethodName**](../Model/PaymentMethodName.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsMethodsEbicsGet()`

```php
restPaymentsMethodsEbicsGet(): object[]
```

Get EBICS Accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPaymentsMethodsEbicsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsEbicsGet: ', $e->getMessage(), PHP_EOL;
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

## `restPaymentsMethodsEbicsPost()`

```php
restPaymentsMethodsEbicsPost($name): object[]
```

Create an EBICS Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the EBICS Account

try {
    $result = $apiInstance->restPaymentsMethodsEbicsPost($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsEbicsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the EBICS Account | [optional] |

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

## `restPaymentsMethodsGet()`

```php
restPaymentsMethodsGet($items_per_page, $page): \ck\Model\PaymentMethod[]
```

List payment methods

Lists all payment method plugins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsMethodsGet($items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\PaymentMethod[]**](../Model/PaymentMethod.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsMethodsHbciGet()`

```php
restPaymentsMethodsHbciGet()
```

Returns the HBCI-Account count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->restPaymentsMethodsHbciGet();
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsHbciGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `restPaymentsMethodsListBackendActiveLanguageGet()`

```php
restPaymentsMethodsListBackendActiveLanguageGet($language): object[]
```

Returns all payment methods with id and name which are active for the backend

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = 'language_example'; // string

try {
    $result = $apiInstance->restPaymentsMethodsListBackendActiveLanguageGet($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsListBackendActiveLanguageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**|  | |

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

## `restPaymentsMethodsListBackendIconGet()`

```php
restPaymentsMethodsListBackendIconGet(): object[]
```

Returns all payment methods with id and backend icon url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPaymentsMethodsListBackendIconGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsListBackendIconGet: ', $e->getMessage(), PHP_EOL;
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

## `restPaymentsMethodsListBackendSearchableLanguageGet()`

```php
restPaymentsMethodsListBackendSearchableLanguageGet($language): object[]
```

Returns all payment methods with id and name which are searchable for the backend

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = 'language_example'; // string

try {
    $result = $apiInstance->restPaymentsMethodsListBackendSearchableLanguageGet($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsListBackendSearchableLanguageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**|  | |

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

## `restPaymentsMethodsListGet()`

```php
restPaymentsMethodsListGet(): object[]
```

Returns all payment methods with id and name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPaymentsMethodsListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsListGet: ', $e->getMessage(), PHP_EOL;
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

## `restPaymentsMethodsListHandleSubscriptionLanguageGet()`

```php
restPaymentsMethodsListHandleSubscriptionLanguageGet($language): object[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = 'language_example'; // string

try {
    $result = $apiInstance->restPaymentsMethodsListHandleSubscriptionLanguageGet($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsListHandleSubscriptionLanguageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**|  | |

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

## `restPaymentsMethodsMethodIdGet()`

```php
restPaymentsMethodsMethodIdGet($method_id, $items_per_page, $page): \ck\Model\Payment[]
```

List payments of a payment method

Lists all payments of the a payment method. The ID of the payment method must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$method_id = 56; // int
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsMethodsMethodIdGet($method_id, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsMethodIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **method_id** | **int**|  | |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsMethodsPluginsPluginKeyGet()`

```php
restPaymentsMethodsPluginsPluginKeyGet($plugin_key, $items_per_page, $page): \ck\Model\PaymentMethod[]
```

Get a payment method

Gets a payment method plugin. The plugin key must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_key = 56; // int
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsMethodsPluginsPluginKeyGet($plugin_key, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsPluginsPluginKeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_key** | **int**|  | |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\PaymentMethod[]**](../Model/PaymentMethod.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsMethodsPost()`

```php
restPaymentsMethodsPost($_rest_payments_methods): \ck\Model\PaymentMethod
```

Create a payment method

Creates a payment method. The plugin key, the payment key and the name of the payment method must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments_methods = new \ck\Model\RestPaymentsMethodsPostRequest(); // \ck\Model\RestPaymentsMethodsPostRequest

try {
    $result = $apiInstance->restPaymentsMethodsPost($_rest_payments_methods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_payments_methods** | [**\ck\Model\RestPaymentsMethodsPostRequest**](../Model/RestPaymentsMethodsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsMethodsPut()`

```php
restPaymentsMethodsPut($_rest_payments_methods): \ck\Model\PaymentMethod
```

Update a payment method

Updates the name of the payment method. The name of the payment method must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments_methods = new \ck\Model\RestPaymentsMethodsPutRequest(); // \ck\Model\RestPaymentsMethodsPutRequest

try {
    $result = $apiInstance->restPaymentsMethodsPut($_rest_payments_methods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsMethodsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_payments_methods** | [**\ck\Model\RestPaymentsMethodsPutRequest**](../Model/RestPaymentsMethodsPutRequest.md)|  | [optional] |

### Return type

[**\ck\Model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsOrdersOrderIdGet()`

```php
restPaymentsOrdersOrderIdGet($order_id, $items_per_page, $page): \ck\Model\Payment[]
```

List payments of an order

Lists all payments of an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsOrdersOrderIdGet($order_id, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsOrdersOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**|  | |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsPaymentIdGet()`

```php
restPaymentsPaymentIdGet($payment_id): \ck\Model\Payment
```

Get a payment

Gets a payment. The ID of the payment must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int

try {
    $result = $apiInstance->restPaymentsPaymentIdGet($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPaymentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **int**|  | |

### Return type

[**\ck\Model\Payment**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsPaymentIdPropertiesGet()`

```php
restPaymentsPaymentIdPropertiesGet($payment_id, $items_per_page, $page): \ck\Model\PaymentProperty[]
```

List properties for a payment

Lists all properties for a payment. The ID of the payment must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 56; // int
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsPaymentIdPropertiesGet($payment_id, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPaymentIdPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **int**|  | |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\PaymentProperty[]**](../Model/PaymentProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsPost()`

```php
restPaymentsPost($_rest_payments): \ck\Model\Payment
```

Create a payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments = new \ck\Model\RestPaymentsPostRequest(); // \ck\Model\RestPaymentsPostRequest

try {
    $result = $apiInstance->restPaymentsPost($_rest_payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_payments** | [**\ck\Model\RestPaymentsPostRequest**](../Model/RestPaymentsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\Payment**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsPropertiesDateGet()`

```php
restPaymentsPropertiesDateGet($start_date, $end_date, $items_per_page, $page): \ck\Model\PaymentProperty[]
```

List properties by creation date

Lists all properties by creation date. The start and the end of the date range must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 'start_date_example'; // string | The start date of the date range for the date of creation of the property
$end_date = 'end_date_example'; // string | The end date of the date range for the date of creation of the property
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsPropertiesDateGet($start_date, $end_date, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **string**| The start date of the date range for the date of creation of the property | [optional] |
| **end_date** | **string**| The end date of the date range for the date of creation of the property | [optional] |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\PaymentProperty[]**](../Model/PaymentProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsPropertiesGet()`

```php
restPaymentsPropertiesGet($items_per_page, $page): \ck\Model\PaymentProperty[]
```

List properties

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsPropertiesGet($items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\PaymentProperty[]**](../Model/PaymentProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsPropertiesPost()`

```php
restPaymentsPropertiesPost($_rest_payments_properties): \ck\Model\PaymentProperty
```

Create a payment property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments_properties = new \ck\Model\RestPaymentsPropertiesPutRequest(); // \ck\Model\RestPaymentsPropertiesPutRequest

try {
    $result = $apiInstance->restPaymentsPropertiesPost($_rest_payments_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_payments_properties** | [**\ck\Model\RestPaymentsPropertiesPutRequest**](../Model/RestPaymentsPropertiesPutRequest.md)|  | [optional] |

### Return type

[**\ck\Model\PaymentProperty**](../Model/PaymentProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsPropertiesPropertyIdGet()`

```php
restPaymentsPropertiesPropertyIdGet($property_id): \ck\Model\PaymentProperty
```

Get a property

Gets a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int

try {
    $result = $apiInstance->restPaymentsPropertiesPropertyIdGet($property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesPropertyIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**|  | |

### Return type

[**\ck\Model\PaymentProperty**](../Model/PaymentProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsPropertiesPut()`

```php
restPaymentsPropertiesPut($_rest_payments_properties): \ck\Model\PaymentProperty
```

Update a payment property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments_properties = new \ck\Model\RestPaymentsPropertiesPutRequest(); // \ck\Model\RestPaymentsPropertiesPutRequest

try {
    $result = $apiInstance->restPaymentsPropertiesPut($_rest_payments_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_payments_properties** | [**\ck\Model\RestPaymentsPropertiesPutRequest**](../Model/RestPaymentsPropertiesPutRequest.md)|  | [optional] |

### Return type

[**\ck\Model\PaymentProperty**](../Model/PaymentProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsPropertiesTypesGet()`

```php
restPaymentsPropertiesTypesGet($items_per_page, $page): \ck\Model\PaymentPropertyType[]
```

List property types

Lists all property types. The language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsPropertiesTypesGet($items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\PaymentPropertyType[]**](../Model/PaymentPropertyType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsPropertiesTypesPost()`

```php
restPaymentsPropertiesTypesPost($_rest_payments_properties_types): \ck\Model\PaymentPropertyType
```

Create a property type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments_properties_types = new \ck\Model\RestPaymentsPropertiesTypesPutRequest(); // \ck\Model\RestPaymentsPropertiesTypesPutRequest

try {
    $result = $apiInstance->restPaymentsPropertiesTypesPost($_rest_payments_properties_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_payments_properties_types** | [**\ck\Model\RestPaymentsPropertiesTypesPutRequest**](../Model/RestPaymentsPropertiesTypesPutRequest.md)|  | [optional] |

### Return type

[**\ck\Model\PaymentPropertyType**](../Model/PaymentPropertyType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsPropertiesTypesPut()`

```php
restPaymentsPropertiesTypesPut($_rest_payments_properties_types): \ck\Model\PaymentPropertyType
```

Update a property type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments_properties_types = new \ck\Model\RestPaymentsPropertiesTypesPutRequest(); // \ck\Model\RestPaymentsPropertiesTypesPutRequest

try {
    $result = $apiInstance->restPaymentsPropertiesTypesPut($_rest_payments_properties_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesTypesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_payments_properties_types** | [**\ck\Model\RestPaymentsPropertiesTypesPutRequest**](../Model/RestPaymentsPropertiesTypesPutRequest.md)|  | [optional] |

### Return type

[**\ck\Model\PaymentPropertyType**](../Model/PaymentPropertyType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsPropertiesTypesTypeIdGet()`

```php
restPaymentsPropertiesTypesTypeIdGet($type_id): \ck\Model\PaymentPropertyType[]
```

Get a property type

Gets a property type. The ID of the type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int

try {
    $result = $apiInstance->restPaymentsPropertiesTypesTypeIdGet($type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertiesTypesTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type_id** | **int**|  | |

### Return type

[**\ck\Model\PaymentPropertyType[]**](../Model/PaymentPropertyType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsPropertyPropertyTypeIdPropertyValueGet()`

```php
restPaymentsPropertyPropertyTypeIdPropertyValueGet($property_type_id, $property_value, $items_per_page, $page): \ck\Model\Payment[]
```

List payments by property type ID and value

Lists all payments by the given property type ID and the value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_type_id = 56; // int
$property_value = 56; // int
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsPropertyPropertyTypeIdPropertyValueGet($property_type_id, $property_value, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPropertyPropertyTypeIdPropertyValueGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_type_id** | **int**|  | |
| **property_value** | **int**|  | |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsPut()`

```php
restPaymentsPut($_rest_payments): \ck\Model\Payment
```

Update a payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_payments = new \ck\Model\RestPaymentsPutRequest(); // \ck\Model\RestPaymentsPutRequest

try {
    $result = $apiInstance->restPaymentsPut($_rest_payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_payments** | [**\ck\Model\RestPaymentsPutRequest**](../Model/RestPaymentsPutRequest.md)|  | [optional] |

### Return type

[**\ck\Model\Payment**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsStatusStatusIdGet()`

```php
restPaymentsStatusStatusIdGet($status_id, $items_per_page, $page): \ck\Model\Payment[]
```

List payments of a payment status

Lists all payments of a payment status. The ID of the <a href='https://developers.plentymarkets.com/rest-doc/introduction#payment-statuses'  target='_blank'>payment status</a> must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status_id = 56; // int
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsStatusStatusIdGet($status_id, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsStatusStatusIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status_id** | **int**|  | |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPaymentsTransactionsTransactionTypeIdGet()`

```php
restPaymentsTransactionsTransactionTypeIdGet($transaction_type_id, $items_per_page, $page): \ck\Model\Payment[]
```

List payments of a transaction type

Lists all payments of a transaction type. The ID of the transaction type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_type_id = 56; // int
$items_per_page = 56; // int | The number of items to list per page
$page = 56; // int | The page of results to search for

try {
    $result = $apiInstance->restPaymentsTransactionsTransactionTypeIdGet($transaction_type_id, $items_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->restPaymentsTransactionsTransactionTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_type_id** | **int**|  | |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **page** | **int**| The page of results to search for | [optional] |

### Return type

[**\ck\Model\Payment[]**](../Model/Payment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

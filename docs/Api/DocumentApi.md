# ck/plenty-client\DocumentApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restCategoriesCategoryIdDocumentsDocumentIdDelete()**](DocumentApi.md#restCategoriesCategoryIdDocumentsDocumentIdDelete) | **DELETE** /rest/categories/{categoryId}/documents/{documentId} | Deletes a category document. The ID of the document must be specified. |
| [**restCategoriesCategoryIdDocumentsDownloadsGet()**](DocumentApi.md#restCategoriesCategoryIdDocumentsDownloadsGet) | **GET** /rest/categories/{categoryId}/documents/downloads | Download category documents |
| [**restCategoriesCategoryIdDocumentsGet()**](DocumentApi.md#restCategoriesCategoryIdDocumentsGet) | **GET** /rest/categories/{categoryId}/documents | List documents of a category |
| [**restCategoriesCategoryIdDocumentsPost()**](DocumentApi.md#restCategoriesCategoryIdDocumentsPost) | **POST** /rest/categories/{categoryId}/documents | Upload category documents |
| [**restDocumentsDocumentIdGet()**](DocumentApi.md#restDocumentsDocumentIdGet) | **GET** /rest/documents/{documentId} | Download the content of a document |
| [**restOrdersDocumentsDownloadsTypeGet()**](DocumentApi.md#restOrdersDocumentsDownloadsTypeGet) | **GET** /rest/orders/documents/downloads/{type} | Download documents of a document type |
| [**restOrdersDocumentsGet()**](DocumentApi.md#restOrdersDocumentsGet) | **GET** /rest/orders/documents | List order documents |
| [**restOrdersDocumentsTypeGet()**](DocumentApi.md#restOrdersDocumentsTypeGet) | **GET** /rest/orders/documents/{type} | List documents of a type |
| [**restOrdersOrderIdDocumentsCorrectionDocumentGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsCorrectionDocumentGeneratePost) | **POST** /rest/orders/{orderId}/documents/correction_document/generate | Generate adjustment form of an order |
| [**restOrdersOrderIdDocumentsCreditNoteGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsCreditNoteGeneratePost) | **POST** /rest/orders/{orderId}/documents/credit_note/generate | Generate credit note of an order |
| [**restOrdersOrderIdDocumentsDeliveryNoteGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsDeliveryNoteGeneratePost) | **POST** /rest/orders/{orderId}/documents/delivery_note/generate | Generate delivery note of an order |
| [**restOrdersOrderIdDocumentsDocumentIdDelete()**](DocumentApi.md#restOrdersOrderIdDocumentsDocumentIdDelete) | **DELETE** /rest/orders/{orderId}/documents/{documentId} | Delete document of an order |
| [**restOrdersOrderIdDocumentsDunningLetterGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsDunningLetterGeneratePost) | **POST** /rest/orders/{orderId}/documents/dunning_letter/generate | Generate dunning letter of an order |
| [**restOrdersOrderIdDocumentsInvoiceGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsInvoiceGeneratePost) | **POST** /rest/orders/{orderId}/documents/invoice/generate | Generate invoice of an order |
| [**restOrdersOrderIdDocumentsOfferGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsOfferGeneratePost) | **POST** /rest/orders/{orderId}/documents/offer/generate | Generate offer document of an order |
| [**restOrdersOrderIdDocumentsOrderConfirmationGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsOrderConfirmationGeneratePost) | **POST** /rest/orders/{orderId}/documents/order_confirmation/generate | Generate order confirmation of an order |
| [**restOrdersOrderIdDocumentsPickupDeliveryGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsPickupDeliveryGeneratePost) | **POST** /rest/orders/{orderId}/documents/pickup_delivery/generate | Generate pick-up delivery note of an order |
| [**restOrdersOrderIdDocumentsPoDeliveryNoteGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsPoDeliveryNoteGeneratePost) | **POST** /rest/orders/{orderId}/documents/po_delivery_note/generate | Generate purchase order (PO) delivery note of an order |
| [**restOrdersOrderIdDocumentsProFormaInvoiceGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsProFormaInvoiceGeneratePost) | **POST** /rest/orders/{orderId}/documents/pro_forma_invoice/generate | Generate pro forma invoice of an order |
| [**restOrdersOrderIdDocumentsReorderGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsReorderGeneratePost) | **POST** /rest/orders/{orderId}/documents/reorder/generate | Generate reorder document of an order |
| [**restOrdersOrderIdDocumentsRepairBillGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsRepairBillGeneratePost) | **POST** /rest/orders/{orderId}/documents/repair_bill/generate | Generate repair slip of an order |
| [**restOrdersOrderIdDocumentsReturnNoteGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsReturnNoteGeneratePost) | **POST** /rest/orders/{orderId}/documents/return_note/generate | Generate return slip of an order |
| [**restOrdersOrderIdDocumentsReversalDocumentGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsReversalDocumentGeneratePost) | **POST** /rest/orders/{orderId}/documents/reversal_document/generate | Generate reversal document of an order |
| [**restOrdersOrderIdDocumentsReversalDunningLetterGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsReversalDunningLetterGeneratePost) | **POST** /rest/orders/{orderId}/documents/reversal_dunning_letter/generate | Generate dunning letter reversal document of an order |
| [**restOrdersOrderIdDocumentsReversalRefundGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsReversalRefundGeneratePost) | **POST** /rest/orders/{orderId}/documents/reversal_refund/generate | Generate refund reversal document of an order |
| [**restOrdersOrderIdDocumentsSuccessConfirmationGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsSuccessConfirmationGeneratePost) | **POST** /rest/orders/{orderId}/documents/success_confirmation/generate | Generate success confirmation of an order |
| [**restOrdersOrderIdDocumentsTypeCurrentGet()**](DocumentApi.md#restOrdersOrderIdDocumentsTypeCurrentGet) | **GET** /rest/orders/{orderId}/documents/{type}/current | Get current invoice or credit note of an order |
| [**restOrdersOrderIdDocumentsTypeGeneratePost()**](DocumentApi.md#restOrdersOrderIdDocumentsTypeGeneratePost) | **POST** /rest/orders/{orderId}/documents/{type}/generate | Generate document of an order |
| [**restOrdersOrderIdDocumentsTypePost()**](DocumentApi.md#restOrdersOrderIdDocumentsTypePost) | **POST** /rest/orders/{orderId}/documents/{type} | Upload order documents |
| [**restOrdersOrderIdDocumentsTypeRecentGet()**](DocumentApi.md#restOrdersOrderIdDocumentsTypeRecentGet) | **GET** /rest/orders/{orderId}/documents/{type}/recent | Get most recent document of an order |


## `restCategoriesCategoryIdDocumentsDocumentIdDelete()`

```php
restCategoriesCategoryIdDocumentsDocumentIdDelete($category_id, $document_id): object
```

Deletes a category document. The ID of the document must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 56; // int
$document_id = 56; // int

try {
    $result = $apiInstance->restCategoriesCategoryIdDocumentsDocumentIdDelete($category_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restCategoriesCategoryIdDocumentsDocumentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **int**|  | |
| **document_id** | **int**|  | |

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

## `restCategoriesCategoryIdDocumentsDownloadsGet()`

```php
restCategoriesCategoryIdDocumentsDownloadsGet($category_id): object
```

Download category documents

Downloads the documents of a category as a zip file. The ID of the category must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 56; // int | The ID of the category

try {
    $result = $apiInstance->restCategoriesCategoryIdDocumentsDownloadsGet($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restCategoriesCategoryIdDocumentsDownloadsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **int**| The ID of the category | |

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

## `restCategoriesCategoryIdDocumentsGet()`

```php
restCategoriesCategoryIdDocumentsGet($category_id): \ck/plenty-client\Model\RestCategoriesCategoryIdDocumentsGet200Response
```

List documents of a category

Lists the documents of a category. The ID of the category must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 56; // int | The ID of the category

try {
    $result = $apiInstance->restCategoriesCategoryIdDocumentsGet($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restCategoriesCategoryIdDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **int**| The ID of the category | |

### Return type

[**\ck/plenty-client\Model\RestCategoriesCategoryIdDocumentsGet200Response**](../Model/RestCategoriesCategoryIdDocumentsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCategoriesCategoryIdDocumentsPost()`

```php
restCategoriesCategoryIdDocumentsPost($documents, $category_id, $number, $number_with_prefix, $directory_id, $display_date, $_rest_categories_category_id_documents): \ck/plenty-client\Model\Document[]
```

Upload category documents

Uploads documents to a category. The ID of the category must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documents = 56; // int | The array with the category documents
$category_id = 56; // int | The ID of the category
$number = 56; // int | The document number
$number_with_prefix = 'number_with_prefix_example'; // string | Number with prefix
$directory_id = 56; // int | The directory ID
$display_date = 'display_date_example'; // string | The date displayed on the document
$_rest_categories_category_id_documents = new \ck/plenty-client\Model\RestCategoriesCategoryIdDocumentsPostRequest(); // \ck/plenty-client\Model\RestCategoriesCategoryIdDocumentsPostRequest

try {
    $result = $apiInstance->restCategoriesCategoryIdDocumentsPost($documents, $category_id, $number, $number_with_prefix, $directory_id, $display_date, $_rest_categories_category_id_documents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restCategoriesCategoryIdDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documents** | **int**| The array with the category documents | |
| **category_id** | **int**| The ID of the category | |
| **number** | **int**| The document number | [optional] |
| **number_with_prefix** | **string**| Number with prefix | [optional] |
| **directory_id** | **int**| The directory ID | [optional] |
| **display_date** | **string**| The date displayed on the document | [optional] |
| **_rest_categories_category_id_documents** | [**\ck/plenty-client\Model\RestCategoriesCategoryIdDocumentsPostRequest**](../Model/RestCategoriesCategoryIdDocumentsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Document[]**](../Model/Document.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restDocumentsDocumentIdGet()`

```php
restDocumentsDocumentIdGet($document_id): object
```

Download the content of a document

Downloads the content of a document. The ID of the document must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 56; // int | The ID of the document

try {
    $result = $apiInstance->restDocumentsDocumentIdGet($document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restDocumentsDocumentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_id** | **int**| The ID of the document | |

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

## `restOrdersDocumentsDownloadsTypeGet()`

```php
restOrdersDocumentsDownloadsTypeGet($type, $page, $items_per_page, $contact_id, $plenty_id, $created_at_from, $created_at_to, $updated_at_from, $updated_at_to, $display_date_from, $display_date_to): object
```

Download documents of a document type

Downloads documents of the same document type as a zip file. The type of the documents must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The type of the order document. The available types are receipt, zReport, tillCount, posCouponReceipt, posInvoice, posInvoiceCancellation, cancellation, invoiceExternal, invoice, deliveryNote, creditNote, creditNoteExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, correction, reorder, uploaded.
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The number of documents to display per page. The default number displayed is 50. The maximum number is 6000.
$contact_id = 56; // int | Filter that restricts the search results to documents belonging to a specific contact ID.
$plenty_id = 56; // int | Filter that restricts the search results to documents belonging to the specific plenty ID.
$created_at_from = 'created_at_from_example'; // string | Filter that restricts the search result to documents that were created on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$created_at_to = 'created_at_to_example'; // string | Filter that restricts the search result to documents that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$updated_at_from = 'updated_at_from_example'; // string | Filter that restricts the search result to documents that were updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$updated_at_to = 'updated_at_to_example'; // string | Filter that restricts the search result to documents that were updated within a certain period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$display_date_from = 'display_date_from_example'; // string | Filter that restricts the search result to documents that were displayed on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$display_date_to = 'display_date_to_example'; // string | Filter that restricts the search result to documents that were displayed within a certain period of time. This filter can be used alone or can be combined with the displayDateFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.

try {
    $result = $apiInstance->restOrdersDocumentsDownloadsTypeGet($type, $page, $items_per_page, $contact_id, $plenty_id, $created_at_from, $created_at_to, $updated_at_from, $updated_at_to, $display_date_from, $display_date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersDocumentsDownloadsTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| The type of the order document. The available types are receipt, zReport, tillCount, posCouponReceipt, posInvoice, posInvoiceCancellation, cancellation, invoiceExternal, invoice, deliveryNote, creditNote, creditNoteExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, correction, reorder, uploaded. | |
| **page** | **int**| The page of results to search for | |
| **items_per_page** | **int**| The number of documents to display per page. The default number displayed is 50. The maximum number is 6000. | |
| **contact_id** | **int**| Filter that restricts the search results to documents belonging to a specific contact ID. | [optional] |
| **plenty_id** | **int**| Filter that restricts the search results to documents belonging to the specific plenty ID. | [optional] |
| **created_at_from** | **string**| Filter that restricts the search result to documents that were created on the specified date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **created_at_to** | **string**| Filter that restricts the search result to documents that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **updated_at_from** | **string**| Filter that restricts the search result to documents that were updated on the specified date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **updated_at_to** | **string**| Filter that restricts the search result to documents that were updated within a certain period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **display_date_from** | **string**| Filter that restricts the search result to documents that were displayed on the specified date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **display_date_to** | **string**| Filter that restricts the search result to documents that were displayed within a certain period of time. This filter can be used alone or can be combined with the displayDateFrom filter. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |

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

## `restOrdersDocumentsGet()`

```php
restOrdersDocumentsGet($page, $items_per_page, $contact_id, $plenty_id, $created_at_from, $created_at_to, $display_date_from, $display_date_to, $with, $with_content): \ck/plenty-client\Model\RestCategoriesCategoryIdDocumentsGet200Response
```

List order documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The items per page to search for
$contact_id = 56; // int | Filter that restricts the search results to documents belonging to a specific contact ID.
$plenty_id = 56; // int | Filter that restricts the search results to documents belonging to the specific plenty ID.
$created_at_from = 'created_at_from_example'; // string | Filter that restricts the search result to documents that were created on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$created_at_to = 'created_at_to_example'; // string | Filter that restricts the search result to documents that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$display_date_from = 'display_date_from_example'; // string | Filter that restricts the search result to documents that were displayed on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$display_date_to = 'display_date_to_example'; // string | Filter that restricts the search result to documents that were displayed within a certain period of time. This filter can be used alone or can be combined with the displayDateFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$with = 56; // int | Load additional relations for a document. Currently possible are:     <ul>     <li>'references' = The document reference objects that are associated with the document.</li>     </ul>     Example: <code>?with[]=references</code>
$with_content = True; // bool | Load also the document content as base64 encoded string.

try {
    $result = $apiInstance->restOrdersDocumentsGet($page, $items_per_page, $contact_id, $plenty_id, $created_at_from, $created_at_to, $display_date_from, $display_date_to, $with, $with_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page of results to search for | |
| **items_per_page** | **int**| The items per page to search for | |
| **contact_id** | **int**| Filter that restricts the search results to documents belonging to a specific contact ID. | [optional] |
| **plenty_id** | **int**| Filter that restricts the search results to documents belonging to the specific plenty ID. | [optional] |
| **created_at_from** | **string**| Filter that restricts the search result to documents that were created on the specified date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **created_at_to** | **string**| Filter that restricts the search result to documents that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **display_date_from** | **string**| Filter that restricts the search result to documents that were displayed on the specified date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **display_date_to** | **string**| Filter that restricts the search result to documents that were displayed within a certain period of time. This filter can be used alone or can be combined with the displayDateFrom filter. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **with** | **int**| Load additional relations for a document. Currently possible are:     &lt;ul&gt;     &lt;li&gt;&#39;references&#39; &#x3D; The document reference objects that are associated with the document.&lt;/li&gt;     &lt;/ul&gt;     Example: &lt;code&gt;?with[]&#x3D;references&lt;/code&gt; | [optional] |
| **with_content** | **bool**| Load also the document content as base64 encoded string. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestCategoriesCategoryIdDocumentsGet200Response**](../Model/RestCategoriesCategoryIdDocumentsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersDocumentsTypeGet()`

```php
restOrdersDocumentsTypeGet($type, $page, $items_per_page, $contact_id, $plenty_id, $created_at_from, $created_at_to, $updated_at_from, $updated_at_to, $display_date_from, $display_date_to, $with, $with_content): \ck/plenty-client\Model\RestCategoriesCategoryIdDocumentsGet200Response
```

List documents of a type

Lists documents of a type. The type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The type of the order document. The available types are receipt, tillCount, posCouponReceipt, posInvoice, posInvoiceCancellation, cancellation, zReport, invoiceExternal, invoice, deliveryNote, poDeliveryNote, creditNote, creditNoteExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, correction, reversal, reversalRefund, proFormaInvoice, reorder, uploaded.
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The items per page to search for
$contact_id = 56; // int | Filter that restricts the search results to documents belonging to a specific contact ID.
$plenty_id = 56; // int | Filter that restricts the search results to documents belonging to the specific plenty ID.
$created_at_from = 'created_at_from_example'; // string | Filter that restricts the search result to documents that were created on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$created_at_to = 'created_at_to_example'; // string | Filter that restricts the search result to documents that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$updated_at_from = 'updated_at_from_example'; // string | Filter that restricts the search result to documents that were updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$updated_at_to = 'updated_at_to_example'; // string | Filter that restricts the search result to documents that were updated within a certain period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$display_date_from = 'display_date_from_example'; // string | Filter that restricts the search result to documents that were displayed on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$display_date_to = 'display_date_to_example'; // string | Filter that restricts the search result to documents that were displayed within a certain period of time. This filter can be used alone or can be combined with the displayDateFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$with = 56; // int | Load additional relations for a document. Currently possible are:     <ul>     <li>'references' = The document reference objects that are associated with the document.</li>     </ul>     Example: <code>?with[]=references</code>
$with_content = True; // bool | Load also the document content as base64 encoded string.

try {
    $result = $apiInstance->restOrdersDocumentsTypeGet($type, $page, $items_per_page, $contact_id, $plenty_id, $created_at_from, $created_at_to, $updated_at_from, $updated_at_to, $display_date_from, $display_date_to, $with, $with_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersDocumentsTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| The type of the order document. The available types are receipt, tillCount, posCouponReceipt, posInvoice, posInvoiceCancellation, cancellation, zReport, invoiceExternal, invoice, deliveryNote, poDeliveryNote, creditNote, creditNoteExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, correction, reversal, reversalRefund, proFormaInvoice, reorder, uploaded. | |
| **page** | **int**| The page of results to search for | |
| **items_per_page** | **int**| The items per page to search for | |
| **contact_id** | **int**| Filter that restricts the search results to documents belonging to a specific contact ID. | [optional] |
| **plenty_id** | **int**| Filter that restricts the search results to documents belonging to the specific plenty ID. | [optional] |
| **created_at_from** | **string**| Filter that restricts the search result to documents that were created on the specified date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **created_at_to** | **string**| Filter that restricts the search result to documents that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **updated_at_from** | **string**| Filter that restricts the search result to documents that were updated on the specified date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **updated_at_to** | **string**| Filter that restricts the search result to documents that were updated within a certain period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **display_date_from** | **string**| Filter that restricts the search result to documents that were displayed on the specified date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **display_date_to** | **string**| Filter that restricts the search result to documents that were displayed within a certain period of time. This filter can be used alone or can be combined with the displayDateFrom filter. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **with** | **int**| Load additional relations for a document. Currently possible are:     &lt;ul&gt;     &lt;li&gt;&#39;references&#39; &#x3D; The document reference objects that are associated with the document.&lt;/li&gt;     &lt;/ul&gt;     Example: &lt;code&gt;?with[]&#x3D;references&lt;/code&gt; | [optional] |
| **with_content** | **bool**| Load also the document content as base64 encoded string. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestCategoriesCategoryIdDocumentsGet200Response**](../Model/RestCategoriesCategoryIdDocumentsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdDocumentsCorrectionDocumentGeneratePost()`

```php
restOrdersOrderIdDocumentsCorrectionDocumentGeneratePost($order_id, $document_date, $comment): object
```

Generate adjustment form of an order

Generate adjustment form of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'credit note'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
$comment = 'comment_example'; // string | Comment that appears below the stock units.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsCorrectionDocumentGeneratePost($order_id, $document_date, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsCorrectionDocumentGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |

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

## `restOrdersOrderIdDocumentsCreditNoteGeneratePost()`

```php
restOrdersOrderIdDocumentsCreditNoteGeneratePost($order_id, $document_date, $allow_regenerate, $comment): object
```

Generate credit note of an order

Generate credit note of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'credit note'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'
$allow_regenerate = True; // bool | If true, existing credit not document without reversal is generated once again.
$comment = 'comment_example'; // string | Comment that appears below the stock units.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsCreditNoteGeneratePost($order_id, $document_date, $allow_regenerate, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsCreditNoteGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39; | [optional] |
| **allow_regenerate** | **bool**| If true, existing credit not document without reversal is generated once again. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |

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

## `restOrdersOrderIdDocumentsDeliveryNoteGeneratePost()`

```php
restOrdersOrderIdDocumentsDeliveryNoteGeneratePost($order_id, $document_date, $comment, $storehouse_id): object
```

Generate delivery note of an order

Generate delivery note of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'order', 'warranty', 'repair' and 'delivery order'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
$comment = 'comment_example'; // string | Comment that appears below the stock units.
$storehouse_id = 56; // int | If set, only items with the given warehouse ID are included on the document.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsDeliveryNoteGeneratePost($order_id, $document_date, $comment, $storehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsDeliveryNoteGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |
| **storehouse_id** | **int**| If set, only items with the given warehouse ID are included on the document. | [optional] |

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

## `restOrdersOrderIdDocumentsDocumentIdDelete()`

```php
restOrdersOrderIdDocumentsDocumentIdDelete($order_id, $document_id): object
```

Delete document of an order

Deletes document of an order. The ID of the order and the ID of the document must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_id = 56; // int | The ID of the document

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsDocumentIdDelete($order_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsDocumentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_id** | **int**| The ID of the document | |

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

## `restOrdersOrderIdDocumentsDunningLetterGeneratePost()`

```php
restOrdersOrderIdDocumentsDunningLetterGeneratePost($order_id, $document_date, $comment, $article_id, $variation_id): object
```

Generate dunning letter of an order

Generate dunning letter of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'order', 'warranty', 'repair' and 'multi order'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
$comment = 'comment_example'; // string | Comment that appears below the stock units.
$article_id = 56; // int | Add an item to the order.
$variation_id = 56; // int | Add a variation to the order.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsDunningLetterGeneratePost($order_id, $document_date, $comment, $article_id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsDunningLetterGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |
| **article_id** | **int**| Add an item to the order. | [optional] |
| **variation_id** | **int**| Add a variation to the order. | [optional] |

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

## `restOrdersOrderIdDocumentsInvoiceGeneratePost()`

```php
restOrdersOrderIdDocumentsInvoiceGeneratePost($order_id, $document_date, $allow_regenerate, $comment, $valuta, $discount, $discount_percentage, $discount_days, $payment_due, $payment_due_days): object
```

Generate invoice of an order

Generate invoice of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'order', 'warranty', 'repair' and 'advance order'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
$allow_regenerate = True; // bool | If true, existing invoice document without reversal is generated once again.
$comment = 'comment_example'; // string | Comment that appears below the stock units.
$valuta = True; // bool | If true, valuta is enabled.
$discount = True; // bool | If true, discount is enabled for the document.
$discount_percentage = 56; // int | Overwrite percentage discount value. Possible values are 2, 3, 4, 5.
$discount_days = 56; // int | Overwrite discount in days. Possible values are 1, 5, 7, 10, 14, 21, 28, 30, 60, 90.
$payment_due = True; // bool | If true, payment due is enabled.
$payment_due_days = 56; // int | Overwrite payment due in days.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsInvoiceGeneratePost($order_id, $document_date, $allow_regenerate, $comment, $valuta, $discount, $discount_percentage, $discount_days, $payment_due, $payment_due_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsInvoiceGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |
| **allow_regenerate** | **bool**| If true, existing invoice document without reversal is generated once again. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |
| **valuta** | **bool**| If true, valuta is enabled. | [optional] |
| **discount** | **bool**| If true, discount is enabled for the document. | [optional] |
| **discount_percentage** | **int**| Overwrite percentage discount value. Possible values are 2, 3, 4, 5. | [optional] |
| **discount_days** | **int**| Overwrite discount in days. Possible values are 1, 5, 7, 10, 14, 21, 28, 30, 60, 90. | [optional] |
| **payment_due** | **bool**| If true, payment due is enabled. | [optional] |
| **payment_due_days** | **int**| Overwrite payment due in days. | [optional] |

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

## `restOrdersOrderIdDocumentsOfferGeneratePost()`

```php
restOrdersOrderIdDocumentsOfferGeneratePost($order_id, $document_date, $comment): object
```

Generate offer document of an order

Generate offer document of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'offer'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
$comment = 'comment_example'; // string | Comment that appears below the stock units.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsOfferGeneratePost($order_id, $document_date, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsOfferGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |

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

## `restOrdersOrderIdDocumentsOrderConfirmationGeneratePost()`

```php
restOrdersOrderIdDocumentsOrderConfirmationGeneratePost($order_id, $document_date, $comment, $valuta, $discount, $discount_percentage, $discount_days, $payment_due, $payment_due_days): object
```

Generate order confirmation of an order

Generate order confirmation of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'order', 'warranty', 'repair', 'advance order' and 'offer'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
$comment = 'comment_example'; // string | Comment that appears below the stock units.
$valuta = True; // bool | If true, valuta is enabled.
$discount = True; // bool | If true, discount is enabled for the document.
$discount_percentage = 56; // int | Overwrite percentage discount value. Possible values are 2, 3, 4, 5.
$discount_days = 56; // int | Overwrite discount in days. Possible values are 1, 5, 7, 10, 14, 21, 28, 30, 60, 90.
$payment_due = True; // bool | If true, payment due is enabled.
$payment_due_days = 56; // int | Overwrite payment due in days.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsOrderConfirmationGeneratePost($order_id, $document_date, $comment, $valuta, $discount, $discount_percentage, $discount_days, $payment_due, $payment_due_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsOrderConfirmationGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |
| **valuta** | **bool**| If true, valuta is enabled. | [optional] |
| **discount** | **bool**| If true, discount is enabled for the document. | [optional] |
| **discount_percentage** | **int**| Overwrite percentage discount value. Possible values are 2, 3, 4, 5. | [optional] |
| **discount_days** | **int**| Overwrite discount in days. Possible values are 1, 5, 7, 10, 14, 21, 28, 30, 60, 90. | [optional] |
| **payment_due** | **bool**| If true, payment due is enabled. | [optional] |
| **payment_due_days** | **int**| Overwrite payment due in days. | [optional] |

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

## `restOrdersOrderIdDocumentsPickupDeliveryGeneratePost()`

```php
restOrdersOrderIdDocumentsPickupDeliveryGeneratePost($order_id, $document_date, $comment): object
```

Generate pick-up delivery note of an order

Generate pick-up delivery note of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'order', 'warranty' and 'repair'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
$comment = 'comment_example'; // string | Comment that appears below the stock units.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsPickupDeliveryGeneratePost($order_id, $document_date, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsPickupDeliveryGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |

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

## `restOrdersOrderIdDocumentsPoDeliveryNoteGeneratePost()`

```php
restOrdersOrderIdDocumentsPoDeliveryNoteGeneratePost($order_id, $document_date): object
```

Generate purchase order (PO) delivery note of an order

Generate PO delivery note of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'redistribution'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsPoDeliveryNoteGeneratePost($order_id, $document_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsPoDeliveryNoteGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |

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

## `restOrdersOrderIdDocumentsProFormaInvoiceGeneratePost()`

```php
restOrdersOrderIdDocumentsProFormaInvoiceGeneratePost($order_id, $document_date, $comment, $valuta, $discount, $discount_percentage, $discount_days, $payment_due, $payment_due_days): object
```

Generate pro forma invoice of an order

Generate pro forma invoice of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'order', 'warranty', 'repair', 'advance order' and 'delivery order'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
$comment = 'comment_example'; // string | Comment that appears below the stock units.
$valuta = True; // bool | If true, valuta is enabled.
$discount = True; // bool | If true, discount is enabled for the document.
$discount_percentage = 56; // int | Overwrite percentage discount value. Possible values are 2, 3, 4, 5.
$discount_days = 56; // int | Overwrite discount in days. Possible values are 1, 5, 7, 10, 14, 21, 28, 30, 60, 90.
$payment_due = True; // bool | If true, payment due is enabled.
$payment_due_days = 56; // int | Overwrite payment due in days.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsProFormaInvoiceGeneratePost($order_id, $document_date, $comment, $valuta, $discount, $discount_percentage, $discount_days, $payment_due, $payment_due_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsProFormaInvoiceGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |
| **valuta** | **bool**| If true, valuta is enabled. | [optional] |
| **discount** | **bool**| If true, discount is enabled for the document. | [optional] |
| **discount_percentage** | **int**| Overwrite percentage discount value. Possible values are 2, 3, 4, 5. | [optional] |
| **discount_days** | **int**| Overwrite discount in days. Possible values are 1, 5, 7, 10, 14, 21, 28, 30, 60, 90. | [optional] |
| **payment_due** | **bool**| If true, payment due is enabled. | [optional] |
| **payment_due_days** | **int**| Overwrite payment due in days. | [optional] |

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

## `restOrdersOrderIdDocumentsReorderGeneratePost()`

```php
restOrdersOrderIdDocumentsReorderGeneratePost($order_id, $allow_regenerate, $comment): object
```

Generate reorder document of an order

Generate reorder document of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'reorder'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$allow_regenerate = True; // bool | If true, existing reorder document is generated once again.
$comment = 'comment_example'; // string | Comment that appears below the stock units.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsReorderGeneratePost($order_id, $allow_regenerate, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsReorderGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **allow_regenerate** | **bool**| If true, existing reorder document is generated once again. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |

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

## `restOrdersOrderIdDocumentsRepairBillGeneratePost()`

```php
restOrdersOrderIdDocumentsRepairBillGeneratePost($order_id, $document_date, $comment): object
```

Generate repair slip of an order

Generate repair slip of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'repair'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
$comment = 'comment_example'; // string | Comment that appears below the stock units.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsRepairBillGeneratePost($order_id, $document_date, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsRepairBillGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |

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

## `restOrdersOrderIdDocumentsReturnNoteGeneratePost()`

```php
restOrdersOrderIdDocumentsReturnNoteGeneratePost($order_id, $document_date, $comment): object
```

Generate return slip of an order

Generate return slip of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'order', 'warranty', 'repair' and 'returns'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
$comment = 'comment_example'; // string | Comment that appears below the stock units.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsReturnNoteGeneratePost($order_id, $document_date, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsReturnNoteGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |

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

## `restOrdersOrderIdDocumentsReversalDocumentGeneratePost()`

```php
restOrdersOrderIdDocumentsReversalDocumentGeneratePost($order_id, $document_date, $comment): object
```

Generate reversal document of an order

Generate reversal document of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'order', 'warranty', 'repair' and 'advance order'. A valid invoice must exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
$comment = 'comment_example'; // string | Comment that appears below the stock units.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsReversalDocumentGeneratePost($order_id, $document_date, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsReversalDocumentGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |

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

## `restOrdersOrderIdDocumentsReversalDunningLetterGeneratePost()`

```php
restOrdersOrderIdDocumentsReversalDunningLetterGeneratePost($order_id, $document_date, $comment): object
```

Generate dunning letter reversal document of an order

Generate dunning letter reversal document of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'order', 'repair' and 'warranty'. A valid dunning letter document must exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
$comment = 'comment_example'; // string | Comment that appears below the stock units.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsReversalDunningLetterGeneratePost($order_id, $document_date, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsReversalDunningLetterGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |

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

## `restOrdersOrderIdDocumentsReversalRefundGeneratePost()`

```php
restOrdersOrderIdDocumentsReversalRefundGeneratePost($order_id, $document_date, $comment): object
```

Generate refund reversal document of an order

Generate refund reversal document of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'credit note'. A valid credit note document must exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
$comment = 'comment_example'; // string | Comment that appears below the stock units.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsReversalRefundGeneratePost($order_id, $document_date, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsReversalRefundGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |

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

## `restOrdersOrderIdDocumentsSuccessConfirmationGeneratePost()`

```php
restOrdersOrderIdDocumentsSuccessConfirmationGeneratePost($order_id, $document_date, $comment): object
```

Generate success confirmation of an order

Generate success confirmation of an order. The ID of the order must be specified. The document can only be generated for orders of the type 'order', 'warranty', 'repair', 'advance order' and 'offer'.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$document_date = 'document_date_example'; // string | If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
$comment = 'comment_example'; // string | Comment that appears below the stock units.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsSuccessConfirmationGeneratePost($order_id, $document_date, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsSuccessConfirmationGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **document_date** | **string**| If not set, the current date will be used. The date has to be entered in W3C format, e.g. &#39;2019-05-29T13:33:23+02:00&#39;. | [optional] |
| **comment** | **string**| Comment that appears below the stock units. | [optional] |

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

## `restOrdersOrderIdDocumentsTypeCurrentGet()`

```php
restOrdersOrderIdDocumentsTypeCurrentGet($order_id, $type, $with_content): \ck/plenty-client\Model\Document
```

Get current invoice or credit note of an order

Get current invoice or credit note of an order. The ID of the order must be specified. The last valid document for which no reversal document exists is found.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$type = 'type_example'; // string | The type of the order document. The available types are invoice, creditNote, dunningLetter
$with_content = True; // bool | Load also the document content as base64 encoded string.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsTypeCurrentGet($order_id, $type, $with_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsTypeCurrentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **type** | **string**| The type of the order document. The available types are invoice, creditNote, dunningLetter | |
| **with_content** | **bool**| Load also the document content as base64 encoded string. | [optional] |

### Return type

[**\ck/plenty-client\Model\Document**](../Model/Document.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdDocumentsTypeGeneratePost()`

```php
restOrdersOrderIdDocumentsTypeGeneratePost($order_id, $type): object
```

Generate document of an order

Generate document of an order. The ID of the order and the type of the document must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int
$type = 56; // int

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsTypeGeneratePost($order_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsTypeGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**|  | |
| **type** | **int**|  | |

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

## `restOrdersOrderIdDocumentsTypePost()`

```php
restOrdersOrderIdDocumentsTypePost($order_id, $type, $_rest_orders_order_id_documents_type): \ck/plenty-client\Model\Document[]
```

Upload order documents

Uploads order documents. The ID of the order and the document type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$type = 'type_example'; // string | The document type. Supported types are 'invoiceExternal', 'deliveryNote', 'poDeliveryNote', 'orderConfirmation', 'offer', 'dunningLetter', 'reversalDunningLetter', 'returnNote', 'successConfirmation', 'correction', 'creditNoteExternal', 'reorder', 'uploaded'.
$_rest_orders_order_id_documents_type = new \ck/plenty-client\Model\RestOrdersOrderIdDocumentsTypePostRequest(); // \ck/plenty-client\Model\RestOrdersOrderIdDocumentsTypePostRequest

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsTypePost($order_id, $type, $_rest_orders_order_id_documents_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsTypePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **type** | **string**| The document type. Supported types are &#39;invoiceExternal&#39;, &#39;deliveryNote&#39;, &#39;poDeliveryNote&#39;, &#39;orderConfirmation&#39;, &#39;offer&#39;, &#39;dunningLetter&#39;, &#39;reversalDunningLetter&#39;, &#39;returnNote&#39;, &#39;successConfirmation&#39;, &#39;correction&#39;, &#39;creditNoteExternal&#39;, &#39;reorder&#39;, &#39;uploaded&#39;. | |
| **_rest_orders_order_id_documents_type** | [**\ck/plenty-client\Model\RestOrdersOrderIdDocumentsTypePostRequest**](../Model/RestOrdersOrderIdDocumentsTypePostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Document[]**](../Model/Document.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdDocumentsTypeRecentGet()`

```php
restOrdersOrderIdDocumentsTypeRecentGet($order_id, $type, $with_content): \ck/plenty-client\Model\Document
```

Get most recent document of an order

Get most recent document of an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$type = 'type_example'; // string | The type of the order document. The available types are receipt, invoiceExternal, invoice, deliveryNote, poDeliveryNote, creditNote, creditNoteExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, correction, reversal, reversalRefund, .
$with_content = True; // bool | Load also the document content as base64 encoded string.

try {
    $result = $apiInstance->restOrdersOrderIdDocumentsTypeRecentGet($order_id, $type, $with_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->restOrdersOrderIdDocumentsTypeRecentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **type** | **string**| The type of the order document. The available types are receipt, invoiceExternal, invoice, deliveryNote, poDeliveryNote, creditNote, creditNoteExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, correction, reversal, reversalRefund, . | |
| **with_content** | **bool**| Load also the document content as base64 encoded string. | [optional] |

### Return type

[**\ck/plenty-client\Model\Document**](../Model/Document.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

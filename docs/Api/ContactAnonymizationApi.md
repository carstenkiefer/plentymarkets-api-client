# ck/plenty-client\ContactAnonymizationApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restAccountsContactsContactIdAnonymizePut()**](ContactAnonymizationApi.md#restAccountsContactsContactIdAnonymizePut) | **PUT** /rest/accounts/contacts/{contactId}/anonymize | Anonymize contact |


## `restAccountsContactsContactIdAnonymizePut()`

```php
restAccountsContactsContactIdAnonymizePut($contact_id): \ck/plenty-client\Model\Contact
```

Anonymize contact

Anonymizes the contact by the given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ContactAnonymizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdAnonymizePut($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAnonymizationApi->restAccountsContactsContactIdAnonymizePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |

### Return type

[**\ck/plenty-client\Model\Contact**](../Model/Contact.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

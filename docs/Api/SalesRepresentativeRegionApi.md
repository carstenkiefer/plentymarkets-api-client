# ck\SalesRepresentativeRegionApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsGet()**](SalesRepresentativeRegionApi.md#restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsGet) | **GET** /rest/accounts/{accountId}/contacts/{contactId}/sales_representative_regions | Get region by contactId and accountId |
| [**restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsPost()**](SalesRepresentativeRegionApi.md#restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsPost) | **POST** /rest/accounts/{accountId}/contacts/{contactId}/sales_representative_regions | Create region for sales representative |
| [**restAccountsContactsContactIdSalesRepresentativeRegionsGet()**](SalesRepresentativeRegionApi.md#restAccountsContactsContactIdSalesRepresentativeRegionsGet) | **GET** /rest/accounts/contacts/{contactId}/sales_representative_regions | List regions by contactId |
| [**restAccountsContactsSalesRepresentativeRegionsGet()**](SalesRepresentativeRegionApi.md#restAccountsContactsSalesRepresentativeRegionsGet) | **GET** /rest/accounts/contacts/sales_representative_regions | Get sales representative of region |
| [**restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdDelete()**](SalesRepresentativeRegionApi.md#restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdDelete) | **DELETE** /rest/accounts/sales_representative_regions/{salesRepresentativeRegionId} | Delete region |
| [**restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdGet()**](SalesRepresentativeRegionApi.md#restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdGet) | **GET** /rest/accounts/sales_representative_regions/{salesRepresentativeRegionId} | Get region by ID |
| [**restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdPut()**](SalesRepresentativeRegionApi.md#restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdPut) | **PUT** /rest/accounts/sales_representative_regions/{salesRepresentativeRegionId} | Update region |


## `restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsGet()`

```php
restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsGet($account_id, $contact_id): \ck\Model\SalesRepresentativeRegion
```

Get region by contactId and accountId

Gets a region. The ID of the contact and the ID of the account must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\SalesRepresentativeRegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsGet($account_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepresentativeRegionApi->restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**| The ID of the account | |
| **contact_id** | **int**| The ID of the contact | |

### Return type

[**\ck\Model\SalesRepresentativeRegion**](../Model/SalesRepresentativeRegion.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsPost()`

```php
restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsPost($account_id, $contact_id): \ck\Model\SalesRepresentativeRegion
```

Create region for sales representative

Creates a region for the sales representative. The ID of the account and the ID of the sales representative (contactId) must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\SalesRepresentativeRegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsPost($account_id, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepresentativeRegionApi->restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**| The ID of the account | |
| **contact_id** | **int**| The ID of the contact | |

### Return type

[**\ck\Model\SalesRepresentativeRegion**](../Model/SalesRepresentativeRegion.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdSalesRepresentativeRegionsGet()`

```php
restAccountsContactsContactIdSalesRepresentativeRegionsGet($contact_id): object
```

List regions by contactId

Lists the regions. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\SalesRepresentativeRegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdSalesRepresentativeRegionsGet($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepresentativeRegionApi->restAccountsContactsContactIdSalesRepresentativeRegionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |

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

## `restAccountsContactsSalesRepresentativeRegionsGet()`

```php
restAccountsContactsSalesRepresentativeRegionsGet(): \ck\Model\RestAccountsContactsSalesRepresentativeRegionsGet200Response
```

Get sales representative of region

Gets the a sales representative of the region.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\SalesRepresentativeRegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsContactsSalesRepresentativeRegionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepresentativeRegionApi->restAccountsContactsSalesRepresentativeRegionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\RestAccountsContactsSalesRepresentativeRegionsGet200Response**](../Model/RestAccountsContactsSalesRepresentativeRegionsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdDelete()`

```php
restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdDelete($sales_representative_region_id): object
```

Delete region

Deletes a region. The ID of the sales representative`s region must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\SalesRepresentativeRegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_representative_region_id = 56; // int | The ID of the account contact relation

try {
    $result = $apiInstance->restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdDelete($sales_representative_region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepresentativeRegionApi->restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_representative_region_id** | **int**| The ID of the account contact relation | |

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

## `restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdGet()`

```php
restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdGet($sales_representative_region_id): \ck\Model\SalesRepresentativeRegion
```

Get region by ID

Gets the region of the sales representative. The ID of the sales representative`s region must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\SalesRepresentativeRegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_representative_region_id = 56; // int | The ID of the account contact relation

try {
    $result = $apiInstance->restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdGet($sales_representative_region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepresentativeRegionApi->restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_representative_region_id** | **int**| The ID of the account contact relation | |

### Return type

[**\ck\Model\SalesRepresentativeRegion**](../Model/SalesRepresentativeRegion.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdPut()`

```php
restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdPut($sales_representative_region_id): \ck\Model\SalesRepresentativeRegion
```

Update region

Updates the region. The ID of the sales representative`s region must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\SalesRepresentativeRegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_representative_region_id = 56; // int | The ID of the account contact relation

try {
    $result = $apiInstance->restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdPut($sales_representative_region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRepresentativeRegionApi->restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_representative_region_id** | **int**| The ID of the account contact relation | |

### Return type

[**\ck\Model\SalesRepresentativeRegion**](../Model/SalesRepresentativeRegion.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

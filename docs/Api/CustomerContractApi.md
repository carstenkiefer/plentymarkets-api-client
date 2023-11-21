# ck/plenty-client\CustomerContractApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restCustomerContractsContractIdDocumentGet()**](CustomerContractApi.md#restCustomerContractsContractIdDocumentGet) | **GET** /rest/customer_contracts/{contractId}/document | Starts download of contract document |
| [**restCustomerContractsContractIdGet()**](CustomerContractApi.md#restCustomerContractsContractIdGet) | **GET** /rest/customer_contracts/{contractId} | Returns a single contract |
| [**restCustomerContractsContractIdSignDocumentGet()**](CustomerContractApi.md#restCustomerContractsContractIdSignDocumentGet) | **GET** /rest/customer_contracts/{contractId}/sign/document | Starts download of signed contract document |
| [**restCustomerContractsContractIdSignGet()**](CustomerContractApi.md#restCustomerContractsContractIdSignGet) | **GET** /rest/customer_contracts/{contractId}/sign | Returns signing of a contract |
| [**restCustomerContractsContractIdSignPost()**](CustomerContractApi.md#restCustomerContractsContractIdSignPost) | **POST** /rest/customer_contracts/{contractId}/sign | Sign a contract |
| [**restCustomerContractsGet()**](CustomerContractApi.md#restCustomerContractsGet) | **GET** /rest/customer_contracts | List contracts |
| [**restCustomerContractsPost()**](CustomerContractApi.md#restCustomerContractsPost) | **POST** /rest/customer_contracts | Creates a new contract |


## `restCustomerContractsContractIdDocumentGet()`

```php
restCustomerContractsContractIdDocumentGet($contract_id): object
```

Starts download of contract document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck/plenty-client\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 56; // int

try {
    $result = $apiInstance->restCustomerContractsContractIdDocumentGet($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->restCustomerContractsContractIdDocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_id** | **int**|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCustomerContractsContractIdGet()`

```php
restCustomerContractsContractIdGet($contract_id): \ck/plenty-client\Model\CustomerContract
```

Returns a single contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck/plenty-client\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 'contract_id_example'; // string | The ID of the contract

try {
    $result = $apiInstance->restCustomerContractsContractIdGet($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->restCustomerContractsContractIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_id** | **string**| The ID of the contract | |

### Return type

[**\ck/plenty-client\Model\CustomerContract**](../Model/CustomerContract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCustomerContractsContractIdSignDocumentGet()`

```php
restCustomerContractsContractIdSignDocumentGet($contract_id): object
```

Starts download of signed contract document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck/plenty-client\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 56; // int

try {
    $result = $apiInstance->restCustomerContractsContractIdSignDocumentGet($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->restCustomerContractsContractIdSignDocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_id** | **int**|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCustomerContractsContractIdSignGet()`

```php
restCustomerContractsContractIdSignGet($contract_id): \ck/plenty-client\Model\Signing
```

Returns signing of a contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck/plenty-client\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 'contract_id_example'; // string | The ID of the contract

try {
    $result = $apiInstance->restCustomerContractsContractIdSignGet($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->restCustomerContractsContractIdSignGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_id** | **string**| The ID of the contract | |

### Return type

[**\ck/plenty-client\Model\Signing**](../Model/Signing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCustomerContractsContractIdSignPost()`

```php
restCustomerContractsContractIdSignPost($contract_id): \ck/plenty-client\Model\Signing
```

Sign a contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck/plenty-client\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 'contract_id_example'; // string | The ID of the contract

try {
    $result = $apiInstance->restCustomerContractsContractIdSignPost($contract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->restCustomerContractsContractIdSignPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_id** | **string**| The ID of the contract | |

### Return type

[**\ck/plenty-client\Model\Signing**](../Model/Signing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCustomerContractsGet()`

```php
restCustomerContractsGet(): \ck/plenty-client\Model\CustomerContract[]
```

List contracts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck/plenty-client\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restCustomerContractsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->restCustomerContractsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\CustomerContract[]**](../Model/CustomerContract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCustomerContractsPost()`

```php
restCustomerContractsPost(): \ck/plenty-client\Model\CustomerContract
```

Creates a new contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck/plenty-client\Api\CustomerContractApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->restCustomerContractsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerContractApi->restCustomerContractsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\CustomerContract**](../Model/CustomerContract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

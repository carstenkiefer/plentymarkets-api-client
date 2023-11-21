# ck\PimApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restPimAttributesDelete()**](PimApi.md#restPimAttributesDelete) | **DELETE** /rest/pim/attributes | Delete attributes |
| [**restPimAttributesGet()**](PimApi.md#restPimAttributesGet) | **GET** /rest/pim/attributes | Search attributes |
| [**restPimAttributesIdGet()**](PimApi.md#restPimAttributesIdGet) | **GET** /rest/pim/attributes/{id} | Get one attribute |
| [**restPimAttributesNamesDelete()**](PimApi.md#restPimAttributesNamesDelete) | **DELETE** /rest/pim/attributes/names | Delete attribute names |
| [**restPimAttributesNamesGet()**](PimApi.md#restPimAttributesNamesGet) | **GET** /rest/pim/attributes/names | Search attribute names |
| [**restPimAttributesNamesPost()**](PimApi.md#restPimAttributesNamesPost) | **POST** /rest/pim/attributes/names | Create attribute names |
| [**restPimAttributesNamesPut()**](PimApi.md#restPimAttributesNamesPut) | **PUT** /rest/pim/attributes/names | Update attribute names |
| [**restPimAttributesPost()**](PimApi.md#restPimAttributesPost) | **POST** /rest/pim/attributes | Create attributes |
| [**restPimAttributesPut()**](PimApi.md#restPimAttributesPut) | **PUT** /rest/pim/attributes | Update attributes |
| [**restPimAttributesValuesDelete()**](PimApi.md#restPimAttributesValuesDelete) | **DELETE** /rest/pim/attributes/values | Delete attribute values |
| [**restPimAttributesValuesGet()**](PimApi.md#restPimAttributesValuesGet) | **GET** /rest/pim/attributes/values | Search attribute values |
| [**restPimAttributesValuesIdGet()**](PimApi.md#restPimAttributesValuesIdGet) | **GET** /rest/pim/attributes/values/{id} | Get one attribute value |
| [**restPimAttributesValuesNamesDelete()**](PimApi.md#restPimAttributesValuesNamesDelete) | **DELETE** /rest/pim/attributes/values/names | Delete attribute value names |
| [**restPimAttributesValuesNamesGet()**](PimApi.md#restPimAttributesValuesNamesGet) | **GET** /rest/pim/attributes/values/names | Search attribute value names |
| [**restPimAttributesValuesNamesPost()**](PimApi.md#restPimAttributesValuesNamesPost) | **POST** /rest/pim/attributes/values/names | Create attribute value names |
| [**restPimAttributesValuesNamesPut()**](PimApi.md#restPimAttributesValuesNamesPut) | **PUT** /rest/pim/attributes/values/names | Update attribute value names |
| [**restPimAttributesValuesPost()**](PimApi.md#restPimAttributesValuesPost) | **POST** /rest/pim/attributes/values | Create attribute values |
| [**restPimAttributesValuesPut()**](PimApi.md#restPimAttributesValuesPut) | **PUT** /rest/pim/attributes/values | Update attribute values |
| [**restPimCategoriesBranchesGet()**](PimApi.md#restPimCategoriesBranchesGet) | **GET** /rest/pim/categories/branches | Search category branches |
| [**restPimCategoriesClientsGet()**](PimApi.md#restPimCategoriesClientsGet) | **GET** /rest/pim/categories/clients | Search category clients |
| [**restPimCategoriesDetailsGet()**](PimApi.md#restPimCategoriesDetailsGet) | **GET** /rest/pim/categories/details | Search category details |
| [**restPimCategoriesGet()**](PimApi.md#restPimCategoriesGet) | **GET** /rest/pim/categories | Search categories |
| [**restPimCategoriesIdGet()**](PimApi.md#restPimCategoriesIdGet) | **GET** /rest/pim/categories/{id} | Get one category |
| [**restPimCategoriesPropertiesGet()**](PimApi.md#restPimCategoriesPropertiesGet) | **GET** /rest/pim/categories/properties | Search category properties |
| [**restPimVariationsGet()**](PimApi.md#restPimVariationsGet) | **GET** /rest/pim/variations | Lists variations |


## `restPimAttributesDelete()`

```php
restPimAttributesDelete(): object
```

Delete attributes

Deletes attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPimAttributesDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesDelete: ', $e->getMessage(), PHP_EOL;
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

## `restPimAttributesGet()`

```php
restPimAttributesGet($with, $ids, $backend_name, $name, $position, $updated_at): \ck\Model\RestItemsAttributesGet200Response
```

Search attributes

Searches attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'attributeNames' = The attribute names of the attribute.</li><li> 'values' = The attribute values of the attribute.</li><li> 'maps' = The attribute maps of the attribute.</li></ub>
$ids = 'ids_example'; // string | Filter restricts the result to attributes with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
$backend_name = 'backend_name_example'; // string | Filter restricts the result to attributes with the specified backend name. Allowed comparators: 'eq' and 'in'.
$name = 'name_example'; // string | Filter restricts the result to attributes with the specified name. Allowed comparators: 'eq'.
$position = 56; // int | Filter restricts the result to attributes with the specified position. Allowed comparator: 'eq', 'between', 'gte', 'lte', 'gt' and 'lt'.
$updated_at = 'updated_at_example'; // string | Filter restricts the result to attributes which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. Allowed comparator: 'eq'', 'gte', 'lte', 'gt' and 'lt'.

try {
    $result = $apiInstance->restPimAttributesGet($with, $ids, $backend_name, $name, $position, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:&lt;ul&gt;&lt;li&gt; &#39;attributeNames&#39; &#x3D; The attribute names of the attribute.&lt;/li&gt;&lt;li&gt; &#39;values&#39; &#x3D; The attribute values of the attribute.&lt;/li&gt;&lt;li&gt; &#39;maps&#39; &#x3D; The attribute maps of the attribute.&lt;/li&gt;&lt;/ub&gt; | [optional] |
| **ids** | **string**| Filter restricts the result to attributes with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;, &#39;in&#39;, &#39;between&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39;. | [optional] |
| **backend_name** | **string**| Filter restricts the result to attributes with the specified backend name. Allowed comparators: &#39;eq&#39; and &#39;in&#39;. | [optional] |
| **name** | **string**| Filter restricts the result to attributes with the specified name. Allowed comparators: &#39;eq&#39;. | [optional] |
| **position** | **int**| Filter restricts the result to attributes with the specified position. Allowed comparator: &#39;eq&#39;, &#39;between&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39;. | [optional] |
| **updated_at** | **string**| Filter restricts the result to attributes which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. Allowed comparator: &#39;eq&#39;&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39;. | [optional] |

### Return type

[**\ck\Model\RestItemsAttributesGet200Response**](../Model/RestItemsAttributesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPimAttributesIdGet()`

```php
restPimAttributesIdGet($id): \ck\Model\Attribute
```

Get one attribute

Gets one attribute. The ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restPimAttributesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck\Model\Attribute**](../Model/Attribute.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPimAttributesNamesDelete()`

```php
restPimAttributesNamesDelete(): object
```

Delete attribute names

Deletes attribute names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPimAttributesNamesDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesNamesDelete: ', $e->getMessage(), PHP_EOL;
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

## `restPimAttributesNamesGet()`

```php
restPimAttributesNamesGet($with, $attribute_id, $lang, $name): \ck\Model\RestPimAttributesNamesGet200Response
```

Search attribute names

Searches attribute names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'attribute' = The attribute to the attribute name.</li></ub>
$attribute_id = 'attribute_id_example'; // string | Filter restricts the result to attributes with the specified attribute ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'
$lang = 'lang_example'; // string | Filter restricts the result to attributes with the specified language. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'in'.
$name = 'name_example'; // string | Filter restricts the result to attributes with the specified name. More than one parameter should be separated by commas. Allowed comparators: 'eq'.

try {
    $result = $apiInstance->restPimAttributesNamesGet($with, $attribute_id, $lang, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:&lt;ul&gt;&lt;li&gt; &#39;attribute&#39; &#x3D; The attribute to the attribute name.&lt;/li&gt;&lt;/ub&gt; | [optional] |
| **attribute_id** | **string**| Filter restricts the result to attributes with the specified attribute ID. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;, &#39;in&#39;, &#39;between&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39; | [optional] |
| **lang** | **string**| Filter restricts the result to attributes with the specified language. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39; and &#39;in&#39;. | [optional] |
| **name** | **string**| Filter restricts the result to attributes with the specified name. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;. | [optional] |

### Return type

[**\ck\Model\RestPimAttributesNamesGet200Response**](../Model/RestPimAttributesNamesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPimAttributesNamesPost()`

```php
restPimAttributesNamesPost(): object
```

Create attribute names

Creates attribute names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPimAttributesNamesPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesNamesPost: ', $e->getMessage(), PHP_EOL;
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

## `restPimAttributesNamesPut()`

```php
restPimAttributesNamesPut(): object
```

Update attribute names

Updates attribute names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPimAttributesNamesPut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesNamesPut: ', $e->getMessage(), PHP_EOL;
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

## `restPimAttributesPost()`

```php
restPimAttributesPost(): object
```

Create attributes

Creates attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPimAttributesPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesPost: ', $e->getMessage(), PHP_EOL;
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

## `restPimAttributesPut()`

```php
restPimAttributesPut(): object
```

Update attributes

Updates attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPimAttributesPut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesPut: ', $e->getMessage(), PHP_EOL;
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

## `restPimAttributesValuesDelete()`

```php
restPimAttributesValuesDelete(): object
```

Delete attribute values

Deletes attribute values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPimAttributesValuesDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesValuesDelete: ', $e->getMessage(), PHP_EOL;
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

## `restPimAttributesValuesGet()`

```php
restPimAttributesValuesGet($with, $ids, $attribute_id, $backend_name, $name, $position, $updated_at): \ck\Model\RestItemsAttributesAttributeIdValuesGet200Response
```

Search attribute values

Searches attribute values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'valueNames' = The names of the attribute value.</li><li> 'attribute' = The attribute of the attribute value.</li><li> 'valueMaps' = The maps of the attribute value.</li><li> 'valueMarketNames' = The value market names of the attribute value.</li></ub>
$ids = 'ids_example'; // string | Filter restricts the result to attribute values with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
$attribute_id = 'attribute_id_example'; // string | Filter restricts the result to attribute values with the specified attribute ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
$backend_name = 'backend_name_example'; // string | Filter restricts the result to attribute values with the specified backend name. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'in'.
$name = 'name_example'; // string | Filter restricts the result to attribute values with the specified name. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
$position = 'position_example'; // string | Filter restricts the result to attribute values with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'between', 'gte', 'lte', 'gt' and 'lt'.
$updated_at = 'updated_at_example'; // string | Filter restricts the result to attribute values which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. Allowed comparator: 'eq'', 'gte', 'lte', 'gt' and 'lt'.

try {
    $result = $apiInstance->restPimAttributesValuesGet($with, $ids, $attribute_id, $backend_name, $name, $position, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesValuesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:&lt;ul&gt;&lt;li&gt; &#39;valueNames&#39; &#x3D; The names of the attribute value.&lt;/li&gt;&lt;li&gt; &#39;attribute&#39; &#x3D; The attribute of the attribute value.&lt;/li&gt;&lt;li&gt; &#39;valueMaps&#39; &#x3D; The maps of the attribute value.&lt;/li&gt;&lt;li&gt; &#39;valueMarketNames&#39; &#x3D; The value market names of the attribute value.&lt;/li&gt;&lt;/ub&gt; | [optional] |
| **ids** | **string**| Filter restricts the result to attribute values with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;, &#39;in&#39;, &#39;between&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39;. | [optional] |
| **attribute_id** | **string**| Filter restricts the result to attribute values with the specified attribute ID. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;, &#39;in&#39;, &#39;between&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39;. | [optional] |
| **backend_name** | **string**| Filter restricts the result to attribute values with the specified backend name. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39; and &#39;in&#39;. | [optional] |
| **name** | **string**| Filter restricts the result to attribute values with the specified name. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;. | [optional] |
| **position** | **string**| Filter restricts the result to attribute values with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;, &#39;between&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39;. | [optional] |
| **updated_at** | **string**| Filter restricts the result to attribute values which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. Allowed comparator: &#39;eq&#39;&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39;. | [optional] |

### Return type

[**\ck\Model\RestItemsAttributesAttributeIdValuesGet200Response**](../Model/RestItemsAttributesAttributeIdValuesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPimAttributesValuesIdGet()`

```php
restPimAttributesValuesIdGet($id): \ck\Model\AttributeValue
```

Get one attribute value

Gets one attribute value. The ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restPimAttributesValuesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesValuesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck\Model\AttributeValue**](../Model/AttributeValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPimAttributesValuesNamesDelete()`

```php
restPimAttributesValuesNamesDelete(): object
```

Delete attribute value names

Deletes attribute value names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPimAttributesValuesNamesDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesValuesNamesDelete: ', $e->getMessage(), PHP_EOL;
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

## `restPimAttributesValuesNamesGet()`

```php
restPimAttributesValuesNamesGet($with, $value_id, $lang, $name): \ck\Model\RestPimAttributesValuesNamesGet200Response
```

Search attribute value names

Searches attribute value names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'attributeValue' = The attribute value to the attribute value name.</li></ub>
$value_id = 'value_id_example'; // string | Filter restricts the result to attribute value names with the specified value ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'
$lang = 'lang_example'; // string | Filter restricts the result to attribute value names with the specified language. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'in'.
$name = 'name_example'; // string | Filter restricts the result to attribute value names with the specified name. More than one parameter should be separated by commas. Allowed comparators: 'eq'.

try {
    $result = $apiInstance->restPimAttributesValuesNamesGet($with, $value_id, $lang, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesValuesNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:&lt;ul&gt;&lt;li&gt; &#39;attributeValue&#39; &#x3D; The attribute value to the attribute value name.&lt;/li&gt;&lt;/ub&gt; | [optional] |
| **value_id** | **string**| Filter restricts the result to attribute value names with the specified value ID. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;, &#39;in&#39;, &#39;between&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39; | [optional] |
| **lang** | **string**| Filter restricts the result to attribute value names with the specified language. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39; and &#39;in&#39;. | [optional] |
| **name** | **string**| Filter restricts the result to attribute value names with the specified name. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;. | [optional] |

### Return type

[**\ck\Model\RestPimAttributesValuesNamesGet200Response**](../Model/RestPimAttributesValuesNamesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPimAttributesValuesNamesPost()`

```php
restPimAttributesValuesNamesPost(): object
```

Create attribute value names

Creates attribute value names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPimAttributesValuesNamesPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesValuesNamesPost: ', $e->getMessage(), PHP_EOL;
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

## `restPimAttributesValuesNamesPut()`

```php
restPimAttributesValuesNamesPut(): object
```

Update attribute value names

Updates attribute value names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPimAttributesValuesNamesPut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesValuesNamesPut: ', $e->getMessage(), PHP_EOL;
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

## `restPimAttributesValuesPost()`

```php
restPimAttributesValuesPost(): object
```

Create attribute values

Creates attribute values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPimAttributesValuesPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesValuesPost: ', $e->getMessage(), PHP_EOL;
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

## `restPimAttributesValuesPut()`

```php
restPimAttributesValuesPut(): object
```

Update attribute values

Updates attribute values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restPimAttributesValuesPut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimAttributesValuesPut: ', $e->getMessage(), PHP_EOL;
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

## `restPimCategoriesBranchesGet()`

```php
restPimCategoriesBranchesGet($with): \ck\Model\RestPimCategoriesBranchesGet200Response
```

Search category branches

Searches category branches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'category' = The category of the category branch.</li></ub>

try {
    $result = $apiInstance->restPimCategoriesBranchesGet($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimCategoriesBranchesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:&lt;ul&gt;&lt;li&gt; &#39;category&#39; &#x3D; The category of the category branch.&lt;/li&gt;&lt;/ub&gt; | [optional] |

### Return type

[**\ck\Model\RestPimCategoriesBranchesGet200Response**](../Model/RestPimCategoriesBranchesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPimCategoriesClientsGet()`

```php
restPimCategoriesClientsGet($with, $category_id, $plenty_id): \ck\Model\RestPimCategoriesClientsGet200Response
```

Search category clients

Searches category clients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'category' = The category of the category client.</li></ub>
$category_id = 'category_id_example'; // string | Filter restricts the result to category clients with the specified category ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
$plenty_id = 56; // int | Filter restricts the result to category clients with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: 'eq'.

try {
    $result = $apiInstance->restPimCategoriesClientsGet($with, $category_id, $plenty_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimCategoriesClientsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:&lt;ul&gt;&lt;li&gt; &#39;category&#39; &#x3D; The category of the category client.&lt;/li&gt;&lt;/ub&gt; | [optional] |
| **category_id** | **string**| Filter restricts the result to category clients with the specified category ID. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;, &#39;in&#39;, &#39;between&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39;. | [optional] |
| **plenty_id** | **int**| Filter restricts the result to category clients with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;. | [optional] |

### Return type

[**\ck\Model\RestPimCategoriesClientsGet200Response**](../Model/RestPimCategoriesClientsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPimCategoriesDetailsGet()`

```php
restPimCategoriesDetailsGet($with, $category_id, $plenty_id, $lang, $name, $position): \ck\Model\RestPimCategoriesDetailsGet200Response
```

Search category details

Searches category details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'category' = The category of the category detail.</li></ub>
$category_id = 'category_id_example'; // string | Filter restricts the result to category details with the specified category ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
$plenty_id = 56; // int | Filter restricts the result to category details with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
$lang = 'lang_example'; // string | Filter restricts the result to category details with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in' and 'not'.
$name = 'name_example'; // string | Filter restricts the result to category details with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'like'.
$position = 'position_example'; // string | Filter restricts the result to category details with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'gte', 'lte', 'gt' and 'lt'.

try {
    $result = $apiInstance->restPimCategoriesDetailsGet($with, $category_id, $plenty_id, $lang, $name, $position);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimCategoriesDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:&lt;ul&gt;&lt;li&gt; &#39;category&#39; &#x3D; The category of the category detail.&lt;/li&gt;&lt;/ub&gt; | [optional] |
| **category_id** | **string**| Filter restricts the result to category details with the specified category ID. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;, &#39;in&#39;, &#39;between&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39;. | [optional] |
| **plenty_id** | **int**| Filter restricts the result to category details with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;. | [optional] |
| **lang** | **string**| Filter restricts the result to category details with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;, &#39;in&#39; and &#39;not&#39;. | [optional] |
| **name** | **string**| Filter restricts the result to category details with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39; and &#39;like&#39;. | [optional] |
| **position** | **string**| Filter restricts the result to category details with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;, &#39;in&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39;. | [optional] |

### Return type

[**\ck\Model\RestPimCategoriesDetailsGet200Response**](../Model/RestPimCategoriesDetailsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPimCategoriesGet()`

```php
restPimCategoriesGet($with, $ids, $type, $level, $name, $lang, $parent_id, $plenty_id, $linklist, $tag_id, $updated_at): \ck\Model\RestCategoriesGet200Response
```

Search categories

Searches categories.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'details' = The names of the category.</li><li> 'clients' = The clients of the category.</li><li> 'branch' = The branch of the category.</li><li> 'tagRelationship' = The tags linked with the category and their data.</li><li> 'elmarCategories' = The elmar categories of the category.</li></ub>
$ids = 'ids_example'; // string | Filter restricts the result to categories with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
$type = 'type_example'; // string | Filter restricts the result to categories with the specified type. Allowed comparators: 'eq', 'in' and 'not'.
$level = 56; // int | Filter restricts the result to categories with the specified level. Allowed comparators: 'eq', 'not', 'gte', 'lte', 'gt' and 'lt'.
$name = 'name_example'; // string | Filter restricts the result to categories with a category detail in the specified name. Allowed comparators: 'eq'.
$lang = 'lang_example'; // string | Filter restricts the result to categories with a category detail in the specified lang. Allowed comparators: 'eq' and 'not'.
$parent_id = 56; // int | Filter restricts the result to categories with the specified parent ID. Allowed comparator: 'eq'.
$plenty_id = 56; // int | Filter restricts the result to categories with the specified plenty ID. Allowed comparator: 'eq'.
$linklist = True; // bool | Filter restricts the result to categories with the specified linklist value. Allowed comparator: 'eq'.
$tag_id = 'tag_id_example'; // string | Filter restricts the result to categories with the specified tag id. Allowed comparator: 'eq', 'in' and 'not'.
$updated_at = 'updated_at_example'; // string | Filter restricts the result to categories which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. Allowed comparator: 'eq'', 'gte', 'lte', 'gt' and 'lt'.

try {
    $result = $apiInstance->restPimCategoriesGet($with, $ids, $type, $level, $name, $lang, $parent_id, $plenty_id, $linklist, $tag_id, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:&lt;ul&gt;&lt;li&gt; &#39;details&#39; &#x3D; The names of the category.&lt;/li&gt;&lt;li&gt; &#39;clients&#39; &#x3D; The clients of the category.&lt;/li&gt;&lt;li&gt; &#39;branch&#39; &#x3D; The branch of the category.&lt;/li&gt;&lt;li&gt; &#39;tagRelationship&#39; &#x3D; The tags linked with the category and their data.&lt;/li&gt;&lt;li&gt; &#39;elmarCategories&#39; &#x3D; The elmar categories of the category.&lt;/li&gt;&lt;/ub&gt; | [optional] |
| **ids** | **string**| Filter restricts the result to categories with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;, &#39;in&#39;, &#39;between&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39;. | [optional] |
| **type** | **string**| Filter restricts the result to categories with the specified type. Allowed comparators: &#39;eq&#39;, &#39;in&#39; and &#39;not&#39;. | [optional] |
| **level** | **int**| Filter restricts the result to categories with the specified level. Allowed comparators: &#39;eq&#39;, &#39;not&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39;. | [optional] |
| **name** | **string**| Filter restricts the result to categories with a category detail in the specified name. Allowed comparators: &#39;eq&#39;. | [optional] |
| **lang** | **string**| Filter restricts the result to categories with a category detail in the specified lang. Allowed comparators: &#39;eq&#39; and &#39;not&#39;. | [optional] |
| **parent_id** | **int**| Filter restricts the result to categories with the specified parent ID. Allowed comparator: &#39;eq&#39;. | [optional] |
| **plenty_id** | **int**| Filter restricts the result to categories with the specified plenty ID. Allowed comparator: &#39;eq&#39;. | [optional] |
| **linklist** | **bool**| Filter restricts the result to categories with the specified linklist value. Allowed comparator: &#39;eq&#39;. | [optional] |
| **tag_id** | **string**| Filter restricts the result to categories with the specified tag id. Allowed comparator: &#39;eq&#39;, &#39;in&#39; and &#39;not&#39;. | [optional] |
| **updated_at** | **string**| Filter restricts the result to categories which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. Allowed comparator: &#39;eq&#39;&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39;. | [optional] |

### Return type

[**\ck\Model\RestCategoriesGet200Response**](../Model/RestCategoriesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPimCategoriesIdGet()`

```php
restPimCategoriesIdGet($id): \ck\Model\Category
```

Get one category

Gets one category. The ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restPimCategoriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimCategoriesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck\Model\Category**](../Model/Category.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPimCategoriesPropertiesGet()`

```php
restPimCategoriesPropertiesGet($with, $category_id, $plenty_id, $value): \ck\Model\RestPimCategoriesPropertiesGet200Response
```

Search category properties

Searches category properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'category' = The category of the property.</li></ub>
$category_id = 'category_id_example'; // string | Filter restricts the result to category properties with the specified category ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
$plenty_id = 56; // int | Filter restricts the result to category properties with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
$value = 'value_example'; // string | Filter restricts the result to category properties with the specified value. More than one parameter should be separated by commas. Allowed comparators: 'eq'.

try {
    $result = $apiInstance->restPimCategoriesPropertiesGet($with, $category_id, $plenty_id, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimCategoriesPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:&lt;ul&gt;&lt;li&gt; &#39;category&#39; &#x3D; The category of the property.&lt;/li&gt;&lt;/ub&gt; | [optional] |
| **category_id** | **string**| Filter restricts the result to category properties with the specified category ID. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;, &#39;in&#39;, &#39;between&#39;, &#39;gte&#39;, &#39;lte&#39;, &#39;gt&#39; and &#39;lt&#39;. | [optional] |
| **plenty_id** | **int**| Filter restricts the result to category properties with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;. | [optional] |
| **value** | **string**| Filter restricts the result to category properties with the specified value. More than one parameter should be separated by commas. Allowed comparators: &#39;eq&#39;. | [optional] |

### Return type

[**\ck\Model\RestPimCategoriesPropertiesGet200Response**](../Model/RestPimCategoriesPropertiesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restPimVariationsGet()`

```php
restPimVariationsGet($with, $sort_by, $group_by, $ids, $item_id, $item_ids, $is_active, $is_main, $is_salable, $supplier_id, $availability_ids, $has_children, $has_active_children, $attribute_id, $any_attribute_id, $all_attribute_ids, $attribute_value_id, $any_attribute_value_id, $all_attribute_value_ids, $barcode_code, $barcode_id, $bundle_type, $category_id, $any_category_id, $all_category_ids, $any_characteristic_id, $all_characteristic_ids, $client_id, $any_client_id, $all_client_ids, $automatic_client_visibilities, $image_has_market_id, $flag1, $flag2, $manufacturer_id, $any_manufacturer_id, $item_type, $market_id, $any_market_id, $all_market_ids, $price_between, $price_between_by_id, $any_sales_price_id, $property_selection_id, $any_property_selection_id, $all_property_selection_ids, $has_name_in_language, $created_at, $updated_at, $item_created_at, $item_updated_at, $availability_updated_at, $stock_updated_at, $page, $items_per_page): \ck\Model\RestItemsVariationsGet200Response
```

Lists variations

Lists variations with the specified data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\PimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'additionalSkus' = The additional skus of the variation.</li><li>'attributeValues' = The attribute values of the variation.</li><li>'attributeValues.attribute'/b> = Includes attributeValues. The attribute data to the related attribute ID.</li><li>'attributeValues.attributeValue' = Includes attributeValues. The attribute value data to the related attribute value ID.</li><li>'barcodes' = The barcodes of the variation.</li><li>'barcodes.barcode' = Includes barcodes. The barcode data to the related barcode ID.</li><li>'base' = The variation base.</li><li>'base.item' = Includes base. The item data of the variation.</li><li>'base.itemSerialNumber' = Includes base. The item serial numbers of the variation.</li><li>'base.feedback' = Includes base. The feedback of the variation.</li><li>'base.characteristics' = Includes base. The characteristics of the variation.</li><li>'base.crossSelling' = Includes base. The cross selling items of the variation.</li><li>'base.texts' = Includes base. The texts of the variation.</li><li>'base.availability' = Includes base. The availability data related to the variation's availability ID.</li><li>'base.images' = Includes base. The images linked to the item.</li><li>'base.shippingProfiles' = Includes base. The shipping profiles linked to the item.</li><li>'base.stock' = Includes base. The stock of the variation.</li><li>'base.stockStorageLocations' = Includes base. The stock storage locations of the variation.</li><li>'bundleComponents' = The bundle components of the variation.</li><li>'categories' = The categories of the variation.</li><li>'categories.category' = Includes categories. The related category data for each category ID.</li><li>'categories.categoryBranch' = Includes categories. The related category branch data for each category ID.</li><li>'clients' = The clients of the variation.</li><li>'defaultCategories' = The default categories of the variation</li><li>'defaultCategories.category' = Includes defaultCategories. The category data to the related category ID.</li><li>'images' = The images of the variation</li><li>'images.image' = Includes images. The image data to the related image ID.</li><li>'markets' = The markets of the variation.</li><li>'marketIdentNumbers' = The market ident numbers of the variation</li><li>'salesPrices' = The sales prices of the variation.</li><li>'salesPrices.salesPrice' = Includes salesPrices. The sales price data to the related sales price ID.</li><li>'skus' = The skus of the variation.</li><li>'supplier' = The supplier of the variation.</li><li>'supplier.supplier' = Includes supplier. The contact data to the related supplier ID.</li><li>'timestamps' = The timetamps of the variation.</li><li>'warehouses' = The warehouses of the variation</li><li>'warehouses.warehouse' = Includes warehouses. The warehouse data to the related warehouse ID.</li><li>'unit' = The unit of the variation</li><li>'unit.unit' = Includes unit. The unit data of the related unit ID.</li><li>'tags' = The tags of the variation.</li><li>'tags.tag' = Includes tags. The tag data to the related tag ID.</li><li>'properties' = The properties of the variation.</li><li>'properties.property' = Includes properties. The property data to the related property ID.</li></ul>
$sort_by = 'sort_by_example'; // string | Sorts the results. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'id'</li><li>'itemId'</li><li>'isMain'</li><li>'position'</li><li>'availabilityId'</li><li>'createdAt'</li><li>'updatedAt'</li><li>'itemUpdatedAt'</li><li>'relatedUpdatedAt'</li><li>'variationName'</li><li>'number'</li></ul>
$group_by = 'group_by_example'; // string | Groups the result. The following parameters are available:<ul><li>'itemId' = Groups the result by the item ID.</li><li>'itemAttributeValue' = Groups the result by the attribute with the flag 'isGroupable'.</li></ul>
$ids = 'ids_example'; // string | Filter restricts the list of results to variations with the specified IDs. More than one parameter should be separated by commas.
$item_id = 56; // int | Filter restricts the list of results to variations with the specified item ID.
$item_ids = 'item_ids_example'; // string | Filter restricts the list of results to variations with the specified item IDs. More than one parameter should be separated by commas.
$is_active = True; // bool | Filter restricts the list of results to variations which are active/inactive.
$is_main = True; // bool | Filter restricts the list of results to variations which are main/not main.
$is_salable = True; // bool | Filter restricts the list of results to variations which are salable.
$supplier_id = 56; // int | Filter restricts the list of results to variations which have the given supplier ID.
$availability_ids = 'availability_ids_example'; // string | Filter restricts the list of results to variations with the specified availability IDs. More than one parameter should be separated by commas.
$has_children = True; // bool | Filter restricts the list of results to variations which have children.
$has_active_children = True; // bool | Filter restricts the list of results to variations which have active children.
$attribute_id = 56; // int | Filter restricts the list of results to variations which have the specified attribute ID.
$any_attribute_id = 'any_attribute_id_example'; // string | Filter restricts the list of results to variations which have any of the specified attribute IDs. More than one parameter should be separated by commas.
$all_attribute_ids = 'all_attribute_ids_example'; // string | Filter restricts the list of results to variations which have all specified attribute IDs. More than one parameter should be separated by commas.
$attribute_value_id = 56; // int | Filter restricts the list of results to variations which have the specified attribute value ID.
$any_attribute_value_id = 'any_attribute_value_id_example'; // string | Filter restricts the list of results to variations which have the any of the specified attribute value IDs. More than one parameter should be separated by commas.
$all_attribute_value_ids = 'all_attribute_value_ids_example'; // string | Filter restricts the list of results to variations which have all specified attribute value IDs. More than one parameter should be separated by commas.
$barcode_code = 'barcode_code_example'; // string | Filter restricts the list of results to variations which have a barcode with the specified code.
$barcode_id = 56; // int | Filter restricts the list of results to variations which have a barcode with the specified ID.
$bundle_type = 'bundle_type_example'; // string | Filter restricts the list of results to variations with the specified bundle type.
$category_id = 56; // int | Filter restricts the list of results to variations which have the specified category ID.
$any_category_id = 'any_category_id_example'; // string | Filter restricts the list of results to variations which have any of the specified category IDs. More than one parameter should be separated by commas.
$all_category_ids = 'all_category_ids_example'; // string | Filter restricts the list of results to variations which have all specified category IDs. More than one parameter should be separated by commas.
$any_characteristic_id = 'any_characteristic_id_example'; // string | Filter restricts the list of results to variations which have any of the specified characteristic IDs.
$all_characteristic_ids = 'all_characteristic_ids_example'; // string | Filter restricts the list of results to variations which have all specified characteristic IDs.
$client_id = 56; // int | Filter restricts the list of results to variations which have the specified client ID.
$any_client_id = 'any_client_id_example'; // string | Filter restricts the list of results to variations which have any of the specified client IDs. More than one parameter should be separated by commas.
$all_client_ids = 'all_client_ids_example'; // string | Filter restricts the list of results to variations which have all specified client IDs. More than one parameter should be separated by commas.
$automatic_client_visibilities = 'automatic_client_visibilities_example'; // string | Filter restricts the list of results to variations which have any of the specified automatic client visibilities. More than one parameter should be separated by commas.
$image_has_market_id = 3.4; // float | Filter restricts the list of results to variations which have an image available for the specified market ID.
$flag1 = 56; // int | Filter restricts the list of results to variations with the specified flag one.
$flag2 = 56; // int | Filter restricts the list of results to variations with the specified flag two.
$manufacturer_id = 56; // int | Filter restricts the list of results to variations with the specified manufacturer ID.
$any_manufacturer_id = 'any_manufacturer_id_example'; // string | Filter restricts the list of results to variations with any of the specified manufacturer IDs.
$item_type = 'item_type_example'; // string | Filter restricts the list of results to variations which have the specified item type.
$market_id = 3.4; // float | Filter restricts the list of results to variations which have the specified market ID.
$any_market_id = 'any_market_id_example'; // string | Filter restricts the list of results to variations which have any of the specified market IDs.
$all_market_ids = 'all_market_ids_example'; // string | Filter restricts the list of results to variations which have all specified market IDs.
$price_between = 'price_between_example'; // string | Filter restricts the list of results to variations which have a sales price between the specified minimum and maximum value. Minimum and maximum value should be separated by a comma.
$price_between_by_id = 'price_between_by_id_example'; // string | Filter restricts the list of results to variations where the specified sales price is between the specified minimum and maximum value. Sales price ID, Minimum and maximum value should be separated by a comma.
$any_sales_price_id = 'any_sales_price_id_example'; // string | Filter restricts the list of results to variations which have any of the specified sales price IDs. More than one parameter should be separated by commas.
$property_selection_id = 56; // int | Filter restricts the list of results to variations which have the specified property selection ID.
$any_property_selection_id = 'any_property_selection_id_example'; // string | Filter restricts the list of results to variations which have any of the specified property selection IDs.
$all_property_selection_ids = 'all_property_selection_ids_example'; // string | Filter restricts the list of results to variations which have all specified property selection IDs.
$has_name_in_language = 'has_name_in_language_example'; // string | Filter restricts the list of results to variations which have a name in the specified language.
$created_at = 'created_at_example'; // string | Filter restricts the list of results to variations which have been created in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to variations which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
$item_created_at = 'item_created_at_example'; // string | Filter restricts the list of results to variations whose item has been created in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
$item_updated_at = 'item_updated_at_example'; // string | Filter restricts the list of results to variations whose item has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
$availability_updated_at = 'availability_updated_at_example'; // string | Filter restricts the list of results to variations whose availablity has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
$stock_updated_at = 'stock_updated_at_example'; // string | Filter restricts the list of results to variations whose stock has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead.
$page = 56; // int | The requested page of results. Default value is 1.
$items_per_page = 56; // int | The number of results per page. Maximum value is 250. Default value is 50.

try {
    $result = $apiInstance->restPimVariationsGet($with, $sort_by, $group_by, $ids, $item_id, $item_ids, $is_active, $is_main, $is_salable, $supplier_id, $availability_ids, $has_children, $has_active_children, $attribute_id, $any_attribute_id, $all_attribute_ids, $attribute_value_id, $any_attribute_value_id, $all_attribute_value_ids, $barcode_code, $barcode_id, $bundle_type, $category_id, $any_category_id, $all_category_ids, $any_characteristic_id, $all_characteristic_ids, $client_id, $any_client_id, $all_client_ids, $automatic_client_visibilities, $image_has_market_id, $flag1, $flag2, $manufacturer_id, $any_manufacturer_id, $item_type, $market_id, $any_market_id, $all_market_ids, $price_between, $price_between_by_id, $any_sales_price_id, $property_selection_id, $any_property_selection_id, $all_property_selection_ids, $has_name_in_language, $created_at, $updated_at, $item_created_at, $item_updated_at, $availability_updated_at, $stock_updated_at, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PimApi->restPimVariationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:&lt;ul&gt;&lt;li&gt;&#39;additionalSkus&#39; &#x3D; The additional skus of the variation.&lt;/li&gt;&lt;li&gt;&#39;attributeValues&#39; &#x3D; The attribute values of the variation.&lt;/li&gt;&lt;li&gt;&#39;attributeValues.attribute&#39;/b&gt; &#x3D; Includes attributeValues. The attribute data to the related attribute ID.&lt;/li&gt;&lt;li&gt;&#39;attributeValues.attributeValue&#39; &#x3D; Includes attributeValues. The attribute value data to the related attribute value ID.&lt;/li&gt;&lt;li&gt;&#39;barcodes&#39; &#x3D; The barcodes of the variation.&lt;/li&gt;&lt;li&gt;&#39;barcodes.barcode&#39; &#x3D; Includes barcodes. The barcode data to the related barcode ID.&lt;/li&gt;&lt;li&gt;&#39;base&#39; &#x3D; The variation base.&lt;/li&gt;&lt;li&gt;&#39;base.item&#39; &#x3D; Includes base. The item data of the variation.&lt;/li&gt;&lt;li&gt;&#39;base.itemSerialNumber&#39; &#x3D; Includes base. The item serial numbers of the variation.&lt;/li&gt;&lt;li&gt;&#39;base.feedback&#39; &#x3D; Includes base. The feedback of the variation.&lt;/li&gt;&lt;li&gt;&#39;base.characteristics&#39; &#x3D; Includes base. The characteristics of the variation.&lt;/li&gt;&lt;li&gt;&#39;base.crossSelling&#39; &#x3D; Includes base. The cross selling items of the variation.&lt;/li&gt;&lt;li&gt;&#39;base.texts&#39; &#x3D; Includes base. The texts of the variation.&lt;/li&gt;&lt;li&gt;&#39;base.availability&#39; &#x3D; Includes base. The availability data related to the variation&#39;s availability ID.&lt;/li&gt;&lt;li&gt;&#39;base.images&#39; &#x3D; Includes base. The images linked to the item.&lt;/li&gt;&lt;li&gt;&#39;base.shippingProfiles&#39; &#x3D; Includes base. The shipping profiles linked to the item.&lt;/li&gt;&lt;li&gt;&#39;base.stock&#39; &#x3D; Includes base. The stock of the variation.&lt;/li&gt;&lt;li&gt;&#39;base.stockStorageLocations&#39; &#x3D; Includes base. The stock storage locations of the variation.&lt;/li&gt;&lt;li&gt;&#39;bundleComponents&#39; &#x3D; The bundle components of the variation.&lt;/li&gt;&lt;li&gt;&#39;categories&#39; &#x3D; The categories of the variation.&lt;/li&gt;&lt;li&gt;&#39;categories.category&#39; &#x3D; Includes categories. The related category data for each category ID.&lt;/li&gt;&lt;li&gt;&#39;categories.categoryBranch&#39; &#x3D; Includes categories. The related category branch data for each category ID.&lt;/li&gt;&lt;li&gt;&#39;clients&#39; &#x3D; The clients of the variation.&lt;/li&gt;&lt;li&gt;&#39;defaultCategories&#39; &#x3D; The default categories of the variation&lt;/li&gt;&lt;li&gt;&#39;defaultCategories.category&#39; &#x3D; Includes defaultCategories. The category data to the related category ID.&lt;/li&gt;&lt;li&gt;&#39;images&#39; &#x3D; The images of the variation&lt;/li&gt;&lt;li&gt;&#39;images.image&#39; &#x3D; Includes images. The image data to the related image ID.&lt;/li&gt;&lt;li&gt;&#39;markets&#39; &#x3D; The markets of the variation.&lt;/li&gt;&lt;li&gt;&#39;marketIdentNumbers&#39; &#x3D; The market ident numbers of the variation&lt;/li&gt;&lt;li&gt;&#39;salesPrices&#39; &#x3D; The sales prices of the variation.&lt;/li&gt;&lt;li&gt;&#39;salesPrices.salesPrice&#39; &#x3D; Includes salesPrices. The sales price data to the related sales price ID.&lt;/li&gt;&lt;li&gt;&#39;skus&#39; &#x3D; The skus of the variation.&lt;/li&gt;&lt;li&gt;&#39;supplier&#39; &#x3D; The supplier of the variation.&lt;/li&gt;&lt;li&gt;&#39;supplier.supplier&#39; &#x3D; Includes supplier. The contact data to the related supplier ID.&lt;/li&gt;&lt;li&gt;&#39;timestamps&#39; &#x3D; The timetamps of the variation.&lt;/li&gt;&lt;li&gt;&#39;warehouses&#39; &#x3D; The warehouses of the variation&lt;/li&gt;&lt;li&gt;&#39;warehouses.warehouse&#39; &#x3D; Includes warehouses. The warehouse data to the related warehouse ID.&lt;/li&gt;&lt;li&gt;&#39;unit&#39; &#x3D; The unit of the variation&lt;/li&gt;&lt;li&gt;&#39;unit.unit&#39; &#x3D; Includes unit. The unit data of the related unit ID.&lt;/li&gt;&lt;li&gt;&#39;tags&#39; &#x3D; The tags of the variation.&lt;/li&gt;&lt;li&gt;&#39;tags.tag&#39; &#x3D; Includes tags. The tag data to the related tag ID.&lt;/li&gt;&lt;li&gt;&#39;properties&#39; &#x3D; The properties of the variation.&lt;/li&gt;&lt;li&gt;&#39;properties.property&#39; &#x3D; Includes properties. The property data to the related property ID.&lt;/li&gt;&lt;/ul&gt; | [optional] |
| **sort_by** | **string**| Sorts the results. Append &#39;_asc&#39; or &#39;_desc&#39; to specify the sorting order. &#39;_desc&#39; is the default value if no other is specified. More than one parameter should be separated by commas. The following parameters are available:&lt;ul&gt;&lt;li&gt;&#39;id&#39;&lt;/li&gt;&lt;li&gt;&#39;itemId&#39;&lt;/li&gt;&lt;li&gt;&#39;isMain&#39;&lt;/li&gt;&lt;li&gt;&#39;position&#39;&lt;/li&gt;&lt;li&gt;&#39;availabilityId&#39;&lt;/li&gt;&lt;li&gt;&#39;createdAt&#39;&lt;/li&gt;&lt;li&gt;&#39;updatedAt&#39;&lt;/li&gt;&lt;li&gt;&#39;itemUpdatedAt&#39;&lt;/li&gt;&lt;li&gt;&#39;relatedUpdatedAt&#39;&lt;/li&gt;&lt;li&gt;&#39;variationName&#39;&lt;/li&gt;&lt;li&gt;&#39;number&#39;&lt;/li&gt;&lt;/ul&gt; | [optional] |
| **group_by** | **string**| Groups the result. The following parameters are available:&lt;ul&gt;&lt;li&gt;&#39;itemId&#39; &#x3D; Groups the result by the item ID.&lt;/li&gt;&lt;li&gt;&#39;itemAttributeValue&#39; &#x3D; Groups the result by the attribute with the flag &#39;isGroupable&#39;.&lt;/li&gt;&lt;/ul&gt; | [optional] |
| **ids** | **string**| Filter restricts the list of results to variations with the specified IDs. More than one parameter should be separated by commas. | [optional] |
| **item_id** | **int**| Filter restricts the list of results to variations with the specified item ID. | [optional] |
| **item_ids** | **string**| Filter restricts the list of results to variations with the specified item IDs. More than one parameter should be separated by commas. | [optional] |
| **is_active** | **bool**| Filter restricts the list of results to variations which are active/inactive. | [optional] |
| **is_main** | **bool**| Filter restricts the list of results to variations which are main/not main. | [optional] |
| **is_salable** | **bool**| Filter restricts the list of results to variations which are salable. | [optional] |
| **supplier_id** | **int**| Filter restricts the list of results to variations which have the given supplier ID. | [optional] |
| **availability_ids** | **string**| Filter restricts the list of results to variations with the specified availability IDs. More than one parameter should be separated by commas. | [optional] |
| **has_children** | **bool**| Filter restricts the list of results to variations which have children. | [optional] |
| **has_active_children** | **bool**| Filter restricts the list of results to variations which have active children. | [optional] |
| **attribute_id** | **int**| Filter restricts the list of results to variations which have the specified attribute ID. | [optional] |
| **any_attribute_id** | **string**| Filter restricts the list of results to variations which have any of the specified attribute IDs. More than one parameter should be separated by commas. | [optional] |
| **all_attribute_ids** | **string**| Filter restricts the list of results to variations which have all specified attribute IDs. More than one parameter should be separated by commas. | [optional] |
| **attribute_value_id** | **int**| Filter restricts the list of results to variations which have the specified attribute value ID. | [optional] |
| **any_attribute_value_id** | **string**| Filter restricts the list of results to variations which have the any of the specified attribute value IDs. More than one parameter should be separated by commas. | [optional] |
| **all_attribute_value_ids** | **string**| Filter restricts the list of results to variations which have all specified attribute value IDs. More than one parameter should be separated by commas. | [optional] |
| **barcode_code** | **string**| Filter restricts the list of results to variations which have a barcode with the specified code. | [optional] |
| **barcode_id** | **int**| Filter restricts the list of results to variations which have a barcode with the specified ID. | [optional] |
| **bundle_type** | **string**| Filter restricts the list of results to variations with the specified bundle type. | [optional] |
| **category_id** | **int**| Filter restricts the list of results to variations which have the specified category ID. | [optional] |
| **any_category_id** | **string**| Filter restricts the list of results to variations which have any of the specified category IDs. More than one parameter should be separated by commas. | [optional] |
| **all_category_ids** | **string**| Filter restricts the list of results to variations which have all specified category IDs. More than one parameter should be separated by commas. | [optional] |
| **any_characteristic_id** | **string**| Filter restricts the list of results to variations which have any of the specified characteristic IDs. | [optional] |
| **all_characteristic_ids** | **string**| Filter restricts the list of results to variations which have all specified characteristic IDs. | [optional] |
| **client_id** | **int**| Filter restricts the list of results to variations which have the specified client ID. | [optional] |
| **any_client_id** | **string**| Filter restricts the list of results to variations which have any of the specified client IDs. More than one parameter should be separated by commas. | [optional] |
| **all_client_ids** | **string**| Filter restricts the list of results to variations which have all specified client IDs. More than one parameter should be separated by commas. | [optional] |
| **automatic_client_visibilities** | **string**| Filter restricts the list of results to variations which have any of the specified automatic client visibilities. More than one parameter should be separated by commas. | [optional] |
| **image_has_market_id** | **float**| Filter restricts the list of results to variations which have an image available for the specified market ID. | [optional] |
| **flag1** | **int**| Filter restricts the list of results to variations with the specified flag one. | [optional] |
| **flag2** | **int**| Filter restricts the list of results to variations with the specified flag two. | [optional] |
| **manufacturer_id** | **int**| Filter restricts the list of results to variations with the specified manufacturer ID. | [optional] |
| **any_manufacturer_id** | **string**| Filter restricts the list of results to variations with any of the specified manufacturer IDs. | [optional] |
| **item_type** | **string**| Filter restricts the list of results to variations which have the specified item type. | [optional] |
| **market_id** | **float**| Filter restricts the list of results to variations which have the specified market ID. | [optional] |
| **any_market_id** | **string**| Filter restricts the list of results to variations which have any of the specified market IDs. | [optional] |
| **all_market_ids** | **string**| Filter restricts the list of results to variations which have all specified market IDs. | [optional] |
| **price_between** | **string**| Filter restricts the list of results to variations which have a sales price between the specified minimum and maximum value. Minimum and maximum value should be separated by a comma. | [optional] |
| **price_between_by_id** | **string**| Filter restricts the list of results to variations where the specified sales price is between the specified minimum and maximum value. Sales price ID, Minimum and maximum value should be separated by a comma. | [optional] |
| **any_sales_price_id** | **string**| Filter restricts the list of results to variations which have any of the specified sales price IDs. More than one parameter should be separated by commas. | [optional] |
| **property_selection_id** | **int**| Filter restricts the list of results to variations which have the specified property selection ID. | [optional] |
| **any_property_selection_id** | **string**| Filter restricts the list of results to variations which have any of the specified property selection IDs. | [optional] |
| **all_property_selection_ids** | **string**| Filter restricts the list of results to variations which have all specified property selection IDs. | [optional] |
| **has_name_in_language** | **string**| Filter restricts the list of results to variations which have a name in the specified language. | [optional] |
| **created_at** | **string**| Filter restricts the list of results to variations which have been created in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. | [optional] |
| **updated_at** | **string**| Filter restricts the list of results to variations which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. | [optional] |
| **item_created_at** | **string**| Filter restricts the list of results to variations whose item has been created in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. | [optional] |
| **item_updated_at** | **string**| Filter restricts the list of results to variations whose item has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. | [optional] |
| **availability_updated_at** | **string**| Filter restricts the list of results to variations whose availablity has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. | [optional] |
| **stock_updated_at** | **string**| Filter restricts the list of results to variations whose stock has been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. | [optional] |
| **page** | **int**| The requested page of results. Default value is 1. | [optional] |
| **items_per_page** | **int**| The number of results per page. Maximum value is 250. Default value is 50. | [optional] |

### Return type

[**\ck\Model\RestItemsVariationsGet200Response**](../Model/RestItemsVariationsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

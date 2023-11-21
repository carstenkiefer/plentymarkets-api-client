# ck/plenty-client\CategoryApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restCategoriesGet()**](CategoryApi.md#restCategoriesGet) | **GET** /rest/categories | List categories |
| [**restCategoriesIdClientsDelete()**](CategoryApi.md#restCategoriesIdClientsDelete) | **DELETE** /rest/categories/{id}/clients | Deactivate availability for clients |
| [**restCategoriesIdDelete()**](CategoryApi.md#restCategoriesIdDelete) | **DELETE** /rest/categories/{id} | Deletes a category |
| [**restCategoriesIdDetailsDelete()**](CategoryApi.md#restCategoriesIdDetailsDelete) | **DELETE** /rest/categories/{id}/details | Delete category details for the specified languages |
| [**restCategoriesIdGet()**](CategoryApi.md#restCategoriesIdGet) | **GET** /rest/categories/{id} | Get a category |
| [**restCategoriesIdPut()**](CategoryApi.md#restCategoriesIdPut) | **PUT** /rest/categories/{id} | Updates one category |
| [**restCategoriesIdTemplatesDelete()**](CategoryApi.md#restCategoriesIdTemplatesDelete) | **DELETE** /rest/categories/{id}/templates | Delete a category template |
| [**restCategoriesIdTemplatesGet()**](CategoryApi.md#restCategoriesIdTemplatesGet) | **GET** /rest/categories/{id}/templates | Get a category template |
| [**restCategoriesIdTemplatesPut()**](CategoryApi.md#restCategoriesIdTemplatesPut) | **PUT** /rest/categories/{id}/templates | Update a category template |
| [**restCategoriesPost()**](CategoryApi.md#restCategoriesPost) | **POST** /rest/categories | Creates new categories |
| [**restCategoriesPut()**](CategoryApi.md#restCategoriesPut) | **PUT** /rest/categories | Updates categories |
| [**restCategoryBranchesGet()**](CategoryApi.md#restCategoryBranchesGet) | **GET** /rest/category_branches | Get category trees |
| [**restCategoryBranchesIdGet()**](CategoryApi.md#restCategoryBranchesIdGet) | **GET** /rest/category_branches/{id} | Get category tree |


## `restCategoriesGet()`

```php
restCategoriesGet($page, $items_per_page, $with, $lang, $type, $parent_id, $plenty_id, $name, $level, $linklist, $updated_at, $tag_id, $meta_keywords): \ck/plenty-client\Model\RestCategoriesGet200Response
```

List categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page of results
$items_per_page = 56; // int | The number of results per page
$with = 'with_example'; // string | Includes the detail information, the active clients (stores) list of the category, all linked tags and their information and/or the linked Elmar category for each client. Available values: details, clients, elmarCategories, tags
$lang = 'lang_example'; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>languages</a> of the category detail information. Several languages must be separated by commas. If no language filter is set, the default language of the system is used.
$type = 'type_example'; // string | The category type. Available values: item, container, content, blog
$parent_id = 56; // int | The unique ID of the parent category
$plenty_id = 56; // int | The unique plenty ID of the client (store)
$name = 'name_example'; // string | The name of the category
$level = 'level_example'; // string | The level of the category
$linklist = True; // bool | Filter for the linklist of categories
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
$tag_id = 56; // int | Filter restricts the list of results to items with a specific tag
$meta_keywords = 'meta_keywords_example'; // string | Filter restricts the list of results to items with a specific meta keyword. Possible search operators are 'like' and 'eq'.

try {
    $result = $apiInstance->restCategoriesGet($page, $items_per_page, $with, $lang, $type, $parent_id, $plenty_id, $name, $level, $linklist, $updated_at, $tag_id, $meta_keywords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->restCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The requested page of results | [optional] |
| **items_per_page** | **int**| The number of results per page | [optional] |
| **with** | **string**| Includes the detail information, the active clients (stores) list of the category, all linked tags and their information and/or the linked Elmar category for each client. Available values: details, clients, elmarCategories, tags | [optional] |
| **lang** | **string**| The &lt;a href&#x3D;&#39;https://developers.plentymarkets.com/rest-doc/introduction#countries&#39; target&#x3D;&#39;_blank&#39;&gt;languages&lt;/a&gt; of the category detail information. Several languages must be separated by commas. If no language filter is set, the default language of the system is used. | [optional] |
| **type** | **string**| The category type. Available values: item, container, content, blog | [optional] |
| **parent_id** | **int**| The unique ID of the parent category | [optional] |
| **plenty_id** | **int**| The unique plenty ID of the client (store) | [optional] |
| **name** | **string**| The name of the category | [optional] |
| **level** | **string**| The level of the category | [optional] |
| **linklist** | **bool**| Filter for the linklist of categories | [optional] |
| **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional] |
| **tag_id** | **int**| Filter restricts the list of results to items with a specific tag | [optional] |
| **meta_keywords** | **string**| Filter restricts the list of results to items with a specific meta keyword. Possible search operators are &#39;like&#39; and &#39;eq&#39;. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestCategoriesGet200Response**](../Model/RestCategoriesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCategoriesIdClientsDelete()`

```php
restCategoriesIdClientsDelete($id): object
```

Deactivate availability for clients

Deactivate availability for clients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restCategoriesIdClientsDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->restCategoriesIdClientsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

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

## `restCategoriesIdDelete()`

```php
restCategoriesIdDelete($id): object
```

Deletes a category

Deletes a category. The ID of the category must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restCategoriesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->restCategoriesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

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

## `restCategoriesIdDetailsDelete()`

```php
restCategoriesIdDetailsDelete($id, $_rest_categories_id_details): object
```

Delete category details for the specified languages

Delete category details for the specified languages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_categories_id_details = new \ck/plenty-client\Model\RestCategoriesIdDetailsDeleteRequest(); // \ck/plenty-client\Model\RestCategoriesIdDetailsDeleteRequest

try {
    $result = $apiInstance->restCategoriesIdDetailsDelete($id, $_rest_categories_id_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->restCategoriesIdDetailsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_categories_id_details** | [**\ck/plenty-client\Model\RestCategoriesIdDetailsDeleteRequest**](../Model/RestCategoriesIdDetailsDeleteRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCategoriesIdGet()`

```php
restCategoriesIdGet($id, $page, $items_per_page, $with, $lang, $type, $parent_id, $plenty_id, $name, $level, $linklist, $updated_at): \ck/plenty-client\Model\RestCategoriesGet200Response
```

Get a category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the category
$page = 56; // int | The requested page of results
$items_per_page = 56; // int | The number of results per page
$with = 'with_example'; // string | Includes the detail information, the active clients (stores) list of the category and/or the linked Elmar category for each client. Available values: details, clients, elmarCategories
$lang = 'lang_example'; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>languages</a> of the category detail information. Several languages must be separated by commas. If no language filter is set, the default language of the system is used.
$type = 'type_example'; // string | The category type. Available values: item, container, content, blog
$parent_id = 56; // int | The unique ID of the parent category
$plenty_id = 56; // int | The unique plenty ID of the client (store)
$name = 'name_example'; // string | The name of the category
$level = 'level_example'; // string | The level of the category
$linklist = True; // bool | Filter for the linklist of categories
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restCategoriesIdGet($id, $page, $items_per_page, $with, $lang, $type, $parent_id, $plenty_id, $name, $level, $linklist, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->restCategoriesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the category | |
| **page** | **int**| The requested page of results | [optional] |
| **items_per_page** | **int**| The number of results per page | [optional] |
| **with** | **string**| Includes the detail information, the active clients (stores) list of the category and/or the linked Elmar category for each client. Available values: details, clients, elmarCategories | [optional] |
| **lang** | **string**| The &lt;a href&#x3D;&#39;https://developers.plentymarkets.com/rest-doc/introduction#countries&#39; target&#x3D;&#39;_blank&#39;&gt;languages&lt;/a&gt; of the category detail information. Several languages must be separated by commas. If no language filter is set, the default language of the system is used. | [optional] |
| **type** | **string**| The category type. Available values: item, container, content, blog | [optional] |
| **parent_id** | **int**| The unique ID of the parent category | [optional] |
| **plenty_id** | **int**| The unique plenty ID of the client (store) | [optional] |
| **name** | **string**| The name of the category | [optional] |
| **level** | **string**| The level of the category | [optional] |
| **linklist** | **bool**| Filter for the linklist of categories | [optional] |
| **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestCategoriesGet200Response**](../Model/RestCategoriesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCategoriesIdPut()`

```php
restCategoriesIdPut($id, $_rest_categories_id): \ck/plenty-client\Model\Category
```

Updates one category

Updates an existing category. The ID of the category must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_categories_id = new \ck/plenty-client\Model\RestCategoriesPutRequest(); // \ck/plenty-client\Model\RestCategoriesPutRequest

try {
    $result = $apiInstance->restCategoriesIdPut($id, $_rest_categories_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->restCategoriesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_categories_id** | [**\ck/plenty-client\Model\RestCategoriesPutRequest**](../Model/RestCategoriesPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Category**](../Model/Category.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCategoriesIdTemplatesDelete()`

```php
restCategoriesIdTemplatesDelete($id, $_rest_categories_id_templates): \ck/plenty-client\Model\CategoryTemplate
```

Delete a category template

Deletes a category template. The ID of the category, the plenty ID of the client (store) and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_categories_id_templates = new \ck/plenty-client\Model\RestCategoriesIdTemplatesGetRequest(); // \ck/plenty-client\Model\RestCategoriesIdTemplatesGetRequest

try {
    $result = $apiInstance->restCategoriesIdTemplatesDelete($id, $_rest_categories_id_templates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->restCategoriesIdTemplatesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_categories_id_templates** | [**\ck/plenty-client\Model\RestCategoriesIdTemplatesGetRequest**](../Model/RestCategoriesIdTemplatesGetRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\CategoryTemplate**](../Model/CategoryTemplate.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCategoriesIdTemplatesGet()`

```php
restCategoriesIdTemplatesGet($plenty_id, $id, $lang, $_rest_categories_id_templates): \ck/plenty-client\Model\CategoryTemplate
```

Get a category template

Gets a category template. The ID of the category, the plenty ID of the client (store) and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plenty_id = 56; // int | The unique plenty ID of the client (store)
$id = 56; // int
$lang = 'lang_example'; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the template. If no language filter is set, the default language of the system is used.
$_rest_categories_id_templates = new \ck/plenty-client\Model\RestCategoriesIdTemplatesGetRequest(); // \ck/plenty-client\Model\RestCategoriesIdTemplatesGetRequest

try {
    $result = $apiInstance->restCategoriesIdTemplatesGet($plenty_id, $id, $lang, $_rest_categories_id_templates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->restCategoriesIdTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plenty_id** | **int**| The unique plenty ID of the client (store) | |
| **id** | **int**|  | |
| **lang** | **string**| The &lt;a href&#x3D;&#39;https://developers.plentymarkets.com/rest-doc/introduction#countries&#39; target&#x3D;&#39;_blank&#39;&gt;language&lt;/a&gt; of the template. If no language filter is set, the default language of the system is used. | [optional] |
| **_rest_categories_id_templates** | [**\ck/plenty-client\Model\RestCategoriesIdTemplatesGetRequest**](../Model/RestCategoriesIdTemplatesGetRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\CategoryTemplate**](../Model/CategoryTemplate.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCategoriesIdTemplatesPut()`

```php
restCategoriesIdTemplatesPut($id, $_rest_categories_id_templates): \ck/plenty-client\Model\CategoryTemplate
```

Update a category template

Updates a category template. The ID of the category, the plenty ID of the client (store) and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_categories_id_templates = new \ck/plenty-client\Model\RestCategoriesIdTemplatesPutRequest(); // \ck/plenty-client\Model\RestCategoriesIdTemplatesPutRequest

try {
    $result = $apiInstance->restCategoriesIdTemplatesPut($id, $_rest_categories_id_templates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->restCategoriesIdTemplatesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_categories_id_templates** | [**\ck/plenty-client\Model\RestCategoriesIdTemplatesPutRequest**](../Model/RestCategoriesIdTemplatesPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\CategoryTemplate**](../Model/CategoryTemplate.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCategoriesPost()`

```php
restCategoriesPost($_rest_categories): \ck/plenty-client\Model\Category[]
```

Creates new categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_categories = new \ck/plenty-client\Model\RestCategoriesPostRequest(); // \ck/plenty-client\Model\RestCategoriesPostRequest

try {
    $result = $apiInstance->restCategoriesPost($_rest_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->restCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_categories** | [**\ck/plenty-client\Model\RestCategoriesPostRequest**](../Model/RestCategoriesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Category[]**](../Model/Category.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCategoriesPut()`

```php
restCategoriesPut($_rest_categories): \ck/plenty-client\Model\Category[]
```

Updates categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_categories = new \ck/plenty-client\Model\RestCategoriesPutRequest(); // \ck/plenty-client\Model\RestCategoriesPutRequest

try {
    $result = $apiInstance->restCategoriesPut($_rest_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->restCategoriesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_categories** | [**\ck/plenty-client\Model\RestCategoriesPutRequest**](../Model/RestCategoriesPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Category[]**](../Model/Category.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restCategoryBranchesGet()`

```php
restCategoryBranchesGet($page, $items_per_page, $type): object
```

Get category trees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page of results
$items_per_page = 56; // int | The number of results per page
$type = 'type_example'; // string | The category type. Available values: item, container, content, blog

try {
    $result = $apiInstance->restCategoryBranchesGet($page, $items_per_page, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->restCategoryBranchesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The requested page of results | [optional] |
| **items_per_page** | **int**| The number of results per page | [optional] |
| **type** | **string**| The category type. Available values: item, container, content, blog | [optional] |

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

## `restCategoryBranchesIdGet()`

```php
restCategoryBranchesIdGet($id): \ck/plenty-client\Model\CategoryBranch
```

Get category tree

Gets the category tree of a category. The ID of the category must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The unique category ID

try {
    $result = $apiInstance->restCategoryBranchesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->restCategoryBranchesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique category ID | |

### Return type

[**\ck/plenty-client\Model\CategoryBranch**](../Model/CategoryBranch.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

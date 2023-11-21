# ck/plenty-client\TagApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restTagsBulkPost()**](TagApi.md#restTagsBulkPost) | **POST** /rest/tags/bulk | Create up to 50 tags |
| [**restTagsBulkPut()**](TagApi.md#restTagsBulkPut) | **PUT** /rest/tags/bulk | Update up to 50 tags |
| [**restTagsGet()**](TagApi.md#restTagsGet) | **GET** /rest/tags | List tags |
| [**restTagsIdDelete()**](TagApi.md#restTagsIdDelete) | **DELETE** /rest/tags/{id} | Delete tag |
| [**restTagsIdGet()**](TagApi.md#restTagsIdGet) | **GET** /rest/tags/{id} | Get tag by ID |
| [**restTagsIdPut()**](TagApi.md#restTagsIdPut) | **PUT** /rest/tags/{id} | Update tag |
| [**restTagsIdRelationshipsTagTypeRelationshipUUIDDelete()**](TagApi.md#restTagsIdRelationshipsTagTypeRelationshipUUIDDelete) | **DELETE** /rest/tags/{id}/relationships/{tagType}/{relationshipUUID} | Delete tag relationship |
| [**restTagsPost()**](TagApi.md#restTagsPost) | **POST** /rest/tags | Create a tag |
| [**restTagsRelationshipsDelete()**](TagApi.md#restTagsRelationshipsDelete) | **DELETE** /rest/tags/relationships | Delete tag relationships |
| [**restTagsRelationshipsGet()**](TagApi.md#restTagsRelationshipsGet) | **GET** /rest/tags/relationships | List relationships |
| [**restTagsRelationshipsPost()**](TagApi.md#restTagsRelationshipsPost) | **POST** /rest/tags/relationships | Create tag relationship |
| [**restTagsRelationshipsRelationshipValueTagTypeIdDelete()**](TagApi.md#restTagsRelationshipsRelationshipValueTagTypeIdDelete) | **DELETE** /rest/tags/relationships/{relationshipValue}/{tagType}/{id} | Delete tag relationship |
| [**restTagsRelationshipsRelationshipValueTagTypeIdPut()**](TagApi.md#restTagsRelationshipsRelationshipValueTagTypeIdPut) | **PUT** /rest/tags/relationships/{relationshipValue}/{tagType}/{id} | Update tag relationship |


## `restTagsBulkPost()`

```php
restTagsBulkPost($_rest_tags_bulk): object[]
```

Create up to 50 tags

Creates up to 50 tags. The IDs of the tags must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_tags_bulk = new \ck/plenty-client\Model\RestTagsPostRequest(); // \ck/plenty-client\Model\RestTagsPostRequest

try {
    $result = $apiInstance->restTagsBulkPost($_rest_tags_bulk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->restTagsBulkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_tags_bulk** | [**\ck/plenty-client\Model\RestTagsPostRequest**](../Model/RestTagsPostRequest.md)|  | [optional] |

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTagsBulkPut()`

```php
restTagsBulkPut($_rest_tags_bulk): object[]
```

Update up to 50 tags

Updates up to 50 tags. The IDs of the tags must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_tags_bulk = new \ck/plenty-client\Model\RestTagsPostRequest(); // \ck/plenty-client\Model\RestTagsPostRequest

try {
    $result = $apiInstance->restTagsBulkPut($_rest_tags_bulk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->restTagsBulkPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_tags_bulk** | [**\ck/plenty-client\Model\RestTagsPostRequest**](../Model/RestTagsPostRequest.md)|  | [optional] |

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTagsGet()`

```php
restTagsGet($with, $tag_name, $tag_availability, $tag_lang, $color): object
```

List tags

Lists all tags. The results can be filtered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified tag information in the results. The following parameters are available: <ul><li>availabilities = The tag availabilities</li><li>names = The tag names</li><li>relationship = The tag relationships</li></ul>More than one parameter should be separated by commas.
$tag_name = 'tag_name_example'; // string | Filter restricts the list of results to tags with the specified tag name. The tag name must be specified.
$tag_availability = 'tag_availability_example'; // string | Filter restricts the list of results to tags with the specified availability type. The availability type must be specified.
$tag_lang = 'tag_lang_example'; // string | Filter restricts the list of results to tags which have names in the specified language. The language must be specified.
$color = 'color_example'; // string | Filter restricts the list of results to tags with the specified color. The color must be specified.

try {
    $result = $apiInstance->restTagsGet($with, $tag_name, $tag_availability, $tag_lang, $color);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->restTagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified tag information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;availabilities &#x3D; The tag availabilities&lt;/li&gt;&lt;li&gt;names &#x3D; The tag names&lt;/li&gt;&lt;li&gt;relationship &#x3D; The tag relationships&lt;/li&gt;&lt;/ul&gt;More than one parameter should be separated by commas. | [optional] |
| **tag_name** | **string**| Filter restricts the list of results to tags with the specified tag name. The tag name must be specified. | [optional] |
| **tag_availability** | **string**| Filter restricts the list of results to tags with the specified availability type. The availability type must be specified. | [optional] |
| **tag_lang** | **string**| Filter restricts the list of results to tags which have names in the specified language. The language must be specified. | [optional] |
| **color** | **string**| Filter restricts the list of results to tags with the specified color. The color must be specified. | [optional] |

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

## `restTagsIdDelete()`

```php
restTagsIdDelete($id)
```

Delete tag

Deletes a tag. The ID of the tag must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the tag

try {
    $apiInstance->restTagsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->restTagsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the tag | |

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

## `restTagsIdGet()`

```php
restTagsIdGet($id): \ck/plenty-client\Model\Tag
```

Get tag by ID

Gets a tag by the ID. The ID of the tag must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the tag

try {
    $result = $apiInstance->restTagsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->restTagsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the tag | |

### Return type

[**\ck/plenty-client\Model\Tag**](../Model/Tag.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTagsIdPut()`

```php
restTagsIdPut($id, $_rest_tags_id): \ck/plenty-client\Model\Tag
```

Update tag

Updates a tag. The ID of the tag must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the tag
$_rest_tags_id = new \ck/plenty-client\Model\RestTagsPostRequest(); // \ck/plenty-client\Model\RestTagsPostRequest

try {
    $result = $apiInstance->restTagsIdPut($id, $_rest_tags_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->restTagsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the tag | |
| **_rest_tags_id** | [**\ck/plenty-client\Model\RestTagsPostRequest**](../Model/RestTagsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Tag**](../Model/Tag.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTagsIdRelationshipsTagTypeRelationshipUUIDDelete()`

```php
restTagsIdRelationshipsTagTypeRelationshipUUIDDelete($id, $tag_type, $relationship_uuid): object
```

Delete tag relationship

Deletes a specific tag relationship that matches the specified data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the tag
$tag_type = 'tag_type_example'; // string | The type of the relationship, i.e. <b>board</b>
$relationship_uuid = 'relationship_uuid_example'; // string | The UUID of the relationship

try {
    $result = $apiInstance->restTagsIdRelationshipsTagTypeRelationshipUUIDDelete($id, $tag_type, $relationship_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->restTagsIdRelationshipsTagTypeRelationshipUUIDDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the tag | |
| **tag_type** | **string**| The type of the relationship, i.e. &lt;b&gt;board&lt;/b&gt; | |
| **relationship_uuid** | **string**| The UUID of the relationship | |

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

## `restTagsPost()`

```php
restTagsPost($_rest_tags): \ck/plenty-client\Model\Tag
```

Create a tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_tags = new \ck/plenty-client\Model\RestTagsPostRequest(); // \ck/plenty-client\Model\RestTagsPostRequest

try {
    $result = $apiInstance->restTagsPost($_rest_tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->restTagsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_tags** | [**\ck/plenty-client\Model\RestTagsPostRequest**](../Model/RestTagsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Tag**](../Model/Tag.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTagsRelationshipsDelete()`

```php
restTagsRelationshipsDelete(): object
```

Delete tag relationships

Deletes a list of tag relationships. The tag ID, tag type and relation value must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restTagsRelationshipsDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->restTagsRelationshipsDelete: ', $e->getMessage(), PHP_EOL;
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

## `restTagsRelationshipsGet()`

```php
restTagsRelationshipsGet($with, $tag_id, $tag_type, $relationship_value): object
```

List relationships

Lists all relationships. The results can be filtered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified tag information in the results. The following parameters are available: <ul><li>availability = The tag availability</li><li>tag = The tag</li></ul>More than one parameter should be separated by commas.
$tag_id = 56; // int | Filter restricts the list of results to tag relationships with the specified tag ID. The tag ID must be specified.
$tag_type = 'tag_type_example'; // string | Filter restricts the list of results to tag relationships with the specified tag type. The tag type must be specified.
$relationship_value = 56; // int | Filter restricts the list of results to tag relationships with the specified relationship value. This is the ID of the data record. The relationship value must be specified.

try {
    $result = $apiInstance->restTagsRelationshipsGet($with, $tag_id, $tag_type, $relationship_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->restTagsRelationshipsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified tag information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;availability &#x3D; The tag availability&lt;/li&gt;&lt;li&gt;tag &#x3D; The tag&lt;/li&gt;&lt;/ul&gt;More than one parameter should be separated by commas. | [optional] |
| **tag_id** | **int**| Filter restricts the list of results to tag relationships with the specified tag ID. The tag ID must be specified. | [optional] |
| **tag_type** | **string**| Filter restricts the list of results to tag relationships with the specified tag type. The tag type must be specified. | [optional] |
| **relationship_value** | **int**| Filter restricts the list of results to tag relationships with the specified relationship value. This is the ID of the data record. The relationship value must be specified. | [optional] |

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

## `restTagsRelationshipsPost()`

```php
restTagsRelationshipsPost($tag_id, $tag_type, $relationship_value, $relatonship_uuid5, $_rest_tags_relationships): \ck/plenty-client\Model\TagRelationship
```

Create tag relationship

Creates a tag relationship by linking a tag to a data record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 56; // int | The ID of the tag.
$tag_type = 'tag_type_example'; // string | The type of tag. Allowed values are category, ticket, variation, board, contact.
$relationship_value = 56; // int | The ID of the data record for which a tag relationship is created.
$relatonship_uuid5 = 'relatonship_uuid5_example'; // string | The ID of the data record for which a tag relationship is created. For models with uuid5 as primary key.
$_rest_tags_relationships = new \ck/plenty-client\Model\RestTagsRelationshipsPostRequest(); // \ck/plenty-client\Model\RestTagsRelationshipsPostRequest

try {
    $result = $apiInstance->restTagsRelationshipsPost($tag_id, $tag_type, $relationship_value, $relatonship_uuid5, $_rest_tags_relationships);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->restTagsRelationshipsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_id** | **int**| The ID of the tag. | [optional] |
| **tag_type** | **string**| The type of tag. Allowed values are category, ticket, variation, board, contact. | [optional] |
| **relationship_value** | **int**| The ID of the data record for which a tag relationship is created. | [optional] |
| **relatonship_uuid5** | **string**| The ID of the data record for which a tag relationship is created. For models with uuid5 as primary key. | [optional] |
| **_rest_tags_relationships** | [**\ck/plenty-client\Model\RestTagsRelationshipsPostRequest**](../Model/RestTagsRelationshipsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\TagRelationship**](../Model/TagRelationship.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restTagsRelationshipsRelationshipValueTagTypeIdDelete()`

```php
restTagsRelationshipsRelationshipValueTagTypeIdDelete($relationship_value, $relationship_type, $tag_type, $id)
```

Delete tag relationship

Deletes a specific tag relationship that matches the specified data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationship_value = 56; // int | The value of the relationship. This value is the ID of the data record the tag is linked to, e.g. item ID 1234.
$relationship_type = 'relationship_type_example'; // string | The type of the relationship, e.g. <b>category</b>, <b>item</b> or <b>ticket</b>
$tag_type = 'tag_type_example'; // string | The type of the tag
$id = 56; // int | The ID of the tag

try {
    $apiInstance->restTagsRelationshipsRelationshipValueTagTypeIdDelete($relationship_value, $relationship_type, $tag_type, $id);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->restTagsRelationshipsRelationshipValueTagTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relationship_value** | **int**| The value of the relationship. This value is the ID of the data record the tag is linked to, e.g. item ID 1234. | |
| **relationship_type** | **string**| The type of the relationship, e.g. &lt;b&gt;category&lt;/b&gt;, &lt;b&gt;item&lt;/b&gt; or &lt;b&gt;ticket&lt;/b&gt; | |
| **tag_type** | **string**| The type of the tag | |
| **id** | **int**| The ID of the tag | |

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

## `restTagsRelationshipsRelationshipValueTagTypeIdPut()`

```php
restTagsRelationshipsRelationshipValueTagTypeIdPut($relationship_value, $tag_type, $id): \ck/plenty-client\Model\TagRelationship
```

Update tag relationship

Updates a tag relationship.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationship_value = 56; // int
$tag_type = 56; // int
$id = 56; // int

try {
    $result = $apiInstance->restTagsRelationshipsRelationshipValueTagTypeIdPut($relationship_value, $tag_type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->restTagsRelationshipsRelationshipValueTagTypeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relationship_value** | **int**|  | |
| **tag_type** | **int**|  | |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\TagRelationship**](../Model/TagRelationship.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

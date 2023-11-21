# ck\FeedbackApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restFeedbacksCommentCommentIdDelete()**](FeedbackApi.md#restFeedbacksCommentCommentIdDelete) | **DELETE** /rest/feedbacks/comment/{commentId} | Delete a feedback comment |
| [**restFeedbacksCommentCommentIdGet()**](FeedbackApi.md#restFeedbacksCommentCommentIdGet) | **GET** /rest/feedbacks/comment/{commentId} | Get a feedback comment |
| [**restFeedbacksCommentPost()**](FeedbackApi.md#restFeedbacksCommentPost) | **POST** /rest/feedbacks/comment | Create a feedback comment |
| [**restFeedbacksCommentsGet()**](FeedbackApi.md#restFeedbacksCommentsGet) | **GET** /rest/feedbacks/comments | List feedback comments |
| [**restFeedbacksDeleteFeedbacksFeedbackIdsDelete()**](FeedbackApi.md#restFeedbacksDeleteFeedbacksFeedbackIdsDelete) | **DELETE** /rest/feedbacks/delete_feedbacks/{feedbackIds} | Delete multiple feedbacks |
| [**restFeedbacksFeedbackFeedbackIdDelete()**](FeedbackApi.md#restFeedbacksFeedbackFeedbackIdDelete) | **DELETE** /rest/feedbacks/feedback/{feedbackId} | Delete a feedback |
| [**restFeedbacksFeedbackFeedbackIdGet()**](FeedbackApi.md#restFeedbacksFeedbackFeedbackIdGet) | **GET** /rest/feedbacks/feedback/{feedbackId} | Get a feedback |
| [**restFeedbacksFeedbackFeedbackIdPut()**](FeedbackApi.md#restFeedbacksFeedbackFeedbackIdPut) | **PUT** /rest/feedbacks/feedback/{feedbackId} | Update a feedback |
| [**restFeedbacksFeedbackPost()**](FeedbackApi.md#restFeedbacksFeedbackPost) | **POST** /rest/feedbacks/feedback | Create a feedback |
| [**restFeedbacksFeedbackRepliesFeedbackIdGet()**](FeedbackApi.md#restFeedbacksFeedbackRepliesFeedbackIdGet) | **GET** /rest/feedbacks/feedback/replies/{feedbackId} | List feedback replies |
| [**restFeedbacksFeedbacksGet()**](FeedbackApi.md#restFeedbacksFeedbacksGet) | **GET** /rest/feedbacks/feedbacks | List feedbacks |
| [**restFeedbacksFeedbacksVisibilityPut()**](FeedbackApi.md#restFeedbacksFeedbacksVisibilityPut) | **PUT** /rest/feedbacks/feedbacks_visibility | Update the visibility of multiple feedbacks |
| [**restFeedbacksMigratePost()**](FeedbackApi.md#restFeedbacksMigratePost) | **POST** /rest/feedbacks/migrate | Migrate legacy feedbacks |
| [**restFeedbacksRatingPost()**](FeedbackApi.md#restFeedbacksRatingPost) | **POST** /rest/feedbacks/rating | Create a feedback rating |
| [**restFeedbacksRatingRatingIdDelete()**](FeedbackApi.md#restFeedbacksRatingRatingIdDelete) | **DELETE** /rest/feedbacks/rating/{ratingId} | Delete a feedback rating |
| [**restFeedbacksRatingRatingIdGet()**](FeedbackApi.md#restFeedbacksRatingRatingIdGet) | **GET** /rest/feedbacks/rating/{ratingId} | Get a feedback rating |
| [**restFeedbacksRatingsGet()**](FeedbackApi.md#restFeedbacksRatingsGet) | **GET** /rest/feedbacks/ratings | List feedback ratings |


## `restFeedbacksCommentCommentIdDelete()`

```php
restFeedbacksCommentCommentIdDelete($feedback_comment_id, $comment_id)
```

Delete a feedback comment

Deletes a feedback comment. The ID of the feedback comment must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedback_comment_id = 56; // int | The ID of the feedback comment
$comment_id = 56; // int

try {
    $apiInstance->restFeedbacksCommentCommentIdDelete($feedback_comment_id, $comment_id);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksCommentCommentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedback_comment_id** | **int**| The ID of the feedback comment | |
| **comment_id** | **int**|  | |

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

## `restFeedbacksCommentCommentIdGet()`

```php
restFeedbacksCommentCommentIdGet($feedback_comment_id, $comment_id): \ck\Model\FeedbackComment
```

Get a feedback comment

Gets a feedback comment. The ID of the feedback comment must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedback_comment_id = 56; // int | The ID of the feedback comment
$comment_id = 56; // int

try {
    $result = $apiInstance->restFeedbacksCommentCommentIdGet($feedback_comment_id, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksCommentCommentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedback_comment_id** | **int**| The ID of the feedback comment | |
| **comment_id** | **int**|  | |

### Return type

[**\ck\Model\FeedbackComment**](../Model/FeedbackComment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restFeedbacksCommentPost()`

```php
restFeedbacksCommentPost($message, $comment_relation_target_type_id, $comment_relation_target_id): \ck\Model\FeedbackComment
```

Create a feedback comment

Creates a comment for a review.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = 'message_example'; // string | Feedback comment message
$comment_relation_target_type_id = 56; // int | The type ID of the comment's target
$comment_relation_target_id = 56; // int | The ID of the comment's target

try {
    $result = $apiInstance->restFeedbacksCommentPost($message, $comment_relation_target_type_id, $comment_relation_target_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksCommentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message** | **string**| Feedback comment message | |
| **comment_relation_target_type_id** | **int**| The type ID of the comment&#39;s target | |
| **comment_relation_target_id** | **int**| The ID of the comment&#39;s target | |

### Return type

[**\ck\Model\FeedbackComment**](../Model/FeedbackComment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restFeedbacksCommentsGet()`

```php
restFeedbacksCommentsGet(): \ck\Model\FeedbackComment[]
```

List feedback comments

Lists all feedback comments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restFeedbacksCommentsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksCommentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\FeedbackComment[]**](../Model/FeedbackComment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restFeedbacksDeleteFeedbacksFeedbackIdsDelete()`

```php
restFeedbacksDeleteFeedbacksFeedbackIdsDelete($feedback_ids)
```

Delete multiple feedbacks

Deletes multiple feedbacks. A list with IDs of feedbacks must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedback_ids = 'feedback_ids_example'; // string | The list of feedback IDs, separated by commas

try {
    $apiInstance->restFeedbacksDeleteFeedbacksFeedbackIdsDelete($feedback_ids);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksDeleteFeedbacksFeedbackIdsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedback_ids** | **string**| The list of feedback IDs, separated by commas | |

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

## `restFeedbacksFeedbackFeedbackIdDelete()`

```php
restFeedbacksFeedbackFeedbackIdDelete($feedback_id)
```

Delete a feedback

Deletes a feedback. The ID of the feedback must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedback_id = 56; // int | The ID of the feedback

try {
    $apiInstance->restFeedbacksFeedbackFeedbackIdDelete($feedback_id);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksFeedbackFeedbackIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedback_id** | **int**| The ID of the feedback | |

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

## `restFeedbacksFeedbackFeedbackIdGet()`

```php
restFeedbacksFeedbackFeedbackIdGet($feedback_id): \ck\Model\Feedback
```

Get a feedback

Gets a feedback. The ID of the feedback must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedback_id = 56; // int | The ID of the feedback

try {
    $result = $apiInstance->restFeedbacksFeedbackFeedbackIdGet($feedback_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksFeedbackFeedbackIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedback_id** | **int**| The ID of the feedback | |

### Return type

[**\ck\Model\Feedback**](../Model/Feedback.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restFeedbacksFeedbackFeedbackIdPut()`

```php
restFeedbacksFeedbackFeedbackIdPut($feedback_id): \ck\Model\Feedback
```

Update a feedback

Updates a feedback. The ID of the feedback must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedback_id = 56; // int | The ID of the feedback

try {
    $result = $apiInstance->restFeedbacksFeedbackFeedbackIdPut($feedback_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksFeedbackFeedbackIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedback_id** | **int**| The ID of the feedback | |

### Return type

[**\ck\Model\Feedback**](../Model/Feedback.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restFeedbacksFeedbackPost()`

```php
restFeedbacksFeedbackPost($title, $feedback_relation_target_id, $feedback_relation_target_type_id, $feedback_relation_source_type_id): \ck\Model\Feedback
```

Create a feedback

Creates a feedback.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$title = 'title_example'; // string | Feedback title
$feedback_relation_target_id = 'feedback_relation_target_id_example'; // string | The ID of the feedback's target
$feedback_relation_target_type_id = 'feedback_relation_target_type_id_example'; // string | The type ID of the feedback's target
$feedback_relation_source_type_id = 'feedback_relation_source_type_id_example'; // string | The type ID of the feedback's source

try {
    $result = $apiInstance->restFeedbacksFeedbackPost($title, $feedback_relation_target_id, $feedback_relation_target_type_id, $feedback_relation_source_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksFeedbackPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **title** | **string**| Feedback title | [optional] |
| **feedback_relation_target_id** | **string**| The ID of the feedback&#39;s target | [optional] |
| **feedback_relation_target_type_id** | **string**| The type ID of the feedback&#39;s target | [optional] |
| **feedback_relation_source_type_id** | **string**| The type ID of the feedback&#39;s source | [optional] |

### Return type

[**\ck\Model\Feedback**](../Model/Feedback.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restFeedbacksFeedbackRepliesFeedbackIdGet()`

```php
restFeedbacksFeedbackRepliesFeedbackIdGet($feedback_id): \ck\Model\Feedback
```

List feedback replies

Lists feedback replies. The ID of the feedback must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedback_id = 56; // int | The ID of the feedback

try {
    $result = $apiInstance->restFeedbacksFeedbackRepliesFeedbackIdGet($feedback_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksFeedbackRepliesFeedbackIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedback_id** | **int**| The ID of the feedback | |

### Return type

[**\ck\Model\Feedback**](../Model/Feedback.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restFeedbacksFeedbacksGet()`

```php
restFeedbacksFeedbacksGet(): \ck\Model\Feedback[]
```

List feedbacks

Lists feedbacks. The reference type and the reference value must be specified (e.g. the reference type is 'order' and the reference value is the ID of the order).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restFeedbacksFeedbacksGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksFeedbacksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\Feedback[]**](../Model/Feedback.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restFeedbacksFeedbacksVisibilityPut()`

```php
restFeedbacksFeedbacksVisibilityPut($feedback_ids, $is_visible): \ck\Model\Feedback[]
```

Update the visibility of multiple feedbacks

Updates the visibility of multiple feedbacks. A list with IDs of feedbacks must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedback_ids = 'feedback_ids_example'; // string | The list of feedback IDs, separated by commas
$is_visible = True; // bool | The visibility value

try {
    $result = $apiInstance->restFeedbacksFeedbacksVisibilityPut($feedback_ids, $is_visible);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksFeedbacksVisibilityPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedback_ids** | **string**| The list of feedback IDs, separated by commas | |
| **is_visible** | **bool**| The visibility value | |

### Return type

[**\ck\Model\Feedback[]**](../Model/Feedback.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restFeedbacksMigratePost()`

```php
restFeedbacksMigratePost()
```

Migrate legacy feedbacks

@return \\Plenty\\Modules\\Feedback\\Models\\Feedback[]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->restFeedbacksMigratePost();
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksMigratePost: ', $e->getMessage(), PHP_EOL;
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

## `restFeedbacksRatingPost()`

```php
restFeedbacksRatingPost($rating_value, $rating_relation_target_type_id, $rating_relation_target_id): \ck\Model\FeedbackRating
```

Create a feedback rating

Creates a feedback rating.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rating_value = 56; // int | The feedback's comment message
$rating_relation_target_type_id = 56; // int | The type ID of the rating's target
$rating_relation_target_id = 56; // int | The ID of the rating's target

try {
    $result = $apiInstance->restFeedbacksRatingPost($rating_value, $rating_relation_target_type_id, $rating_relation_target_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksRatingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rating_value** | **int**| The feedback&#39;s comment message | |
| **rating_relation_target_type_id** | **int**| The type ID of the rating&#39;s target | |
| **rating_relation_target_id** | **int**| The ID of the rating&#39;s target | |

### Return type

[**\ck\Model\FeedbackRating**](../Model/FeedbackRating.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restFeedbacksRatingRatingIdDelete()`

```php
restFeedbacksRatingRatingIdDelete($feedback_rating_id, $rating_id)
```

Delete a feedback rating

Deletes a feedback rating. The ID of the feedback rating must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedback_rating_id = 56; // int | The ID of the feedback rating
$rating_id = 56; // int

try {
    $apiInstance->restFeedbacksRatingRatingIdDelete($feedback_rating_id, $rating_id);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksRatingRatingIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedback_rating_id** | **int**| The ID of the feedback rating | |
| **rating_id** | **int**|  | |

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

## `restFeedbacksRatingRatingIdGet()`

```php
restFeedbacksRatingRatingIdGet($feedback_rating_id, $rating_id): \ck\Model\FeedbackRating
```

Get a feedback rating

Gets a feedback rating. The ID of the feedback rating must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feedback_rating_id = 56; // int | The ID of the feedback rating
$rating_id = 56; // int

try {
    $result = $apiInstance->restFeedbacksRatingRatingIdGet($feedback_rating_id, $rating_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksRatingRatingIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedback_rating_id** | **int**| The ID of the feedback rating | |
| **rating_id** | **int**|  | |

### Return type

[**\ck\Model\FeedbackRating**](../Model/FeedbackRating.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restFeedbacksRatingsGet()`

```php
restFeedbacksRatingsGet(): \ck\Model\FeedbackRating[]
```

List feedback ratings

Lists feedback ratings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restFeedbacksRatingsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->restFeedbacksRatingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\FeedbackRating[]**](../Model/FeedbackRating.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

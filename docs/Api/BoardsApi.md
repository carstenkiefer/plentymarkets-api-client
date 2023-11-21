# ck\BoardsApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restBoardsBoardIdDelete()**](BoardsApi.md#restBoardsBoardIdDelete) | **DELETE** /rest/boards/{boardId} | Delete board |
| [**restBoardsBoardIdGet()**](BoardsApi.md#restBoardsBoardIdGet) | **GET** /rest/boards/{boardId} | Get board by ID |
| [**restBoardsBoardIdPost()**](BoardsApi.md#restBoardsBoardIdPost) | **POST** /rest/boards/{boardId} | Copy board |
| [**restBoardsBoardIdPut()**](BoardsApi.md#restBoardsBoardIdPut) | **PUT** /rest/boards/{boardId} | Update board |
| [**restBoardsGet()**](BoardsApi.md#restBoardsGet) | **GET** /rest/boards | List all boards |
| [**restBoardsPost()**](BoardsApi.md#restBoardsPost) | **POST** /rest/boards | Create new board |


## `restBoardsBoardIdDelete()`

```php
restBoardsBoardIdDelete($board_id): object
```

Delete board

Deletes a specific board.  The ID of the board must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board

try {
    $result = $apiInstance->restBoardsBoardIdDelete($board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->restBoardsBoardIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |

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

## `restBoardsBoardIdGet()`

```php
restBoardsBoardIdGet($board_id, $tasks_per_page): \ck\Model\Board
```

Get board by ID

Gets a specific board by its ID. The ID of the board must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$tasks_per_page = 56; // int | Maximum number of tasks to list per column

try {
    $result = $apiInstance->restBoardsBoardIdGet($board_id, $tasks_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->restBoardsBoardIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **tasks_per_page** | **int**| Maximum number of tasks to list per column | [optional] |

### Return type

[**\ck\Model\Board**](../Model/Board.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBoardsBoardIdPost()`

```php
restBoardsBoardIdPost($board_id): \ck\Model\Board
```

Copy board

Copies a specific board.  The ID of the board must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board

try {
    $result = $apiInstance->restBoardsBoardIdPost($board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->restBoardsBoardIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |

### Return type

[**\ck\Model\Board**](../Model/Board.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBoardsBoardIdPut()`

```php
restBoardsBoardIdPut($board_id, $_rest_boards_board_id): \ck\Model\Board
```

Update board

Updates a specific board. The ID of the board must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$_rest_boards_board_id = new \ck\Model\RestBoardsBoardIdPutRequest(); // \ck\Model\RestBoardsBoardIdPutRequest

try {
    $result = $apiInstance->restBoardsBoardIdPut($board_id, $_rest_boards_board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->restBoardsBoardIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **_rest_boards_board_id** | [**\ck\Model\RestBoardsBoardIdPutRequest**](../Model/RestBoardsBoardIdPutRequest.md)|  | [optional] |

### Return type

[**\ck\Model\Board**](../Model/Board.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBoardsGet()`

```php
restBoardsGet(): \ck\Model\Board[]
```

List all boards

Lists all boards.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restBoardsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->restBoardsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\Board[]**](../Model/Board.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBoardsPost()`

```php
restBoardsPost($_rest_boards): \ck\Model\Board
```

Create new board

Creates a new board.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\BoardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_boards = new \ck\Model\RestBoardsPostRequest(); // \ck\Model\RestBoardsPostRequest

try {
    $result = $apiInstance->restBoardsPost($_rest_boards);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardsApi->restBoardsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_boards** | [**\ck\Model\RestBoardsPostRequest**](../Model/RestBoardsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\Board**](../Model/Board.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

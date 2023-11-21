# ck/plenty-client\BoardApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restBoardsBoardIdColumnsColumnIdDelete()**](BoardApi.md#restBoardsBoardIdColumnsColumnIdDelete) | **DELETE** /rest/boards/{boardId}/columns/{columnId} | Delete column |
| [**restBoardsBoardIdColumnsColumnIdPositionPut()**](BoardApi.md#restBoardsBoardIdColumnsColumnIdPositionPut) | **PUT** /rest/boards/{boardId}/columns/{columnId}/position | Update position of of a column |
| [**restBoardsBoardIdColumnsColumnIdPost()**](BoardApi.md#restBoardsBoardIdColumnsColumnIdPost) | **POST** /rest/boards/{boardId}/columns/{columnId} | Copy column |
| [**restBoardsBoardIdColumnsColumnIdPut()**](BoardApi.md#restBoardsBoardIdColumnsColumnIdPut) | **PUT** /rest/boards/{boardId}/columns/{columnId} | Update column |
| [**restBoardsBoardIdColumnsColumnIdTasksGet()**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksGet) | **GET** /rest/boards/{boardId}/columns/{columnId}/tasks | List all task of a column |
| [**restBoardsBoardIdColumnsColumnIdTasksPost()**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksPost) | **POST** /rest/boards/{boardId}/columns/{columnId}/tasks | Create task in specific column |
| [**restBoardsBoardIdColumnsColumnIdTasksTaskIdDelete()**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdDelete) | **DELETE** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId} | Delete task |
| [**restBoardsBoardIdColumnsColumnIdTasksTaskIdGet()**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdGet) | **GET** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId} | Get task by ID |
| [**restBoardsBoardIdColumnsColumnIdTasksTaskIdPositionPut()**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdPositionPut) | **PUT** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId}/position | Update task position |
| [**restBoardsBoardIdColumnsColumnIdTasksTaskIdPost()**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdPost) | **POST** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId} | Copy task |
| [**restBoardsBoardIdColumnsColumnIdTasksTaskIdPut()**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdPut) | **PUT** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId} | Update task |
| [**restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesPost()**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesPost) | **POST** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId}/references | Create reference |
| [**restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceIdDelete()**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceIdDelete) | **DELETE** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId}/references/{referenceId} | Delete reference from a given task |
| [**restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceTypeReferenceKeyGet()**](BoardApi.md#restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceTypeReferenceKeyGet) | **GET** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId}/references/{referenceType}/{referenceKey} | Check reference key |
| [**restBoardsBoardIdColumnsGet()**](BoardApi.md#restBoardsBoardIdColumnsGet) | **GET** /rest/boards/{boardId}/columns | List all columns of a given board |
| [**restBoardsBoardIdColumnsPost()**](BoardApi.md#restBoardsBoardIdColumnsPost) | **POST** /rest/boards/{boardId}/columns | Create column and assign it to a board |


## `restBoardsBoardIdColumnsColumnIdDelete()`

```php
restBoardsBoardIdColumnsColumnIdDelete($board_id, $column_id): object
```

Delete column

Deletes a specific column. The ID of the board and the ID of column must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdDelete($board_id, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **column_id** | **string**| The ID of the column | |

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

## `restBoardsBoardIdColumnsColumnIdPositionPut()`

```php
restBoardsBoardIdColumnsColumnIdPositionPut($position, $board_id, $column_id): object
```

Update position of of a column

Updates the position of a specific column. Also updates the positions of all following columns on the same board. The ID of the board and the ID of the column must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$position = 56; // int | The position number
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdPositionPut($position, $board_id, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdPositionPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **position** | **int**| The position number | |
| **board_id** | **string**| The ID of the board | |
| **column_id** | **string**| The ID of the column | |

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

## `restBoardsBoardIdColumnsColumnIdPost()`

```php
restBoardsBoardIdColumnsColumnIdPost($board_id, $column_id): \ck/plenty-client\Model\BoardColumn
```

Copy column

Copies a specific column. The ID of the board and the ID of the column must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdPost($board_id, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **column_id** | **string**| The ID of the column | |

### Return type

[**\ck/plenty-client\Model\BoardColumn**](../Model/BoardColumn.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBoardsBoardIdColumnsColumnIdPut()`

```php
restBoardsBoardIdColumnsColumnIdPut($board_id, $column_id, $_rest_boards_board_id_columns_column_id): \ck/plenty-client\Model\BoardColumn
```

Update column

Updates a specific column. The ID of the board and the ID of the column must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$_rest_boards_board_id_columns_column_id = new \ck/plenty-client\Model\RestBoardsBoardIdColumnsColumnIdPutRequest(); // \ck/plenty-client\Model\RestBoardsBoardIdColumnsColumnIdPutRequest

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdPut($board_id, $column_id, $_rest_boards_board_id_columns_column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **column_id** | **string**| The ID of the column | |
| **_rest_boards_board_id_columns_column_id** | [**\ck/plenty-client\Model\RestBoardsBoardIdColumnsColumnIdPutRequest**](../Model/RestBoardsBoardIdColumnsColumnIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\BoardColumn**](../Model/BoardColumn.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBoardsBoardIdColumnsColumnIdTasksGet()`

```php
restBoardsBoardIdColumnsColumnIdTasksGet($board_id, $column_id, $start_at, $tasks_per_page): \ck/plenty-client\Model\BoardTask[]
```

List all task of a column

Lists all tasks of a given column. The ID of the board and the ID of the column must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$start_at = 56; // int | The position of a task to start listing at
$tasks_per_page = 56; // int | The number of tasks to list per page

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksGet($board_id, $column_id, $start_at, $tasks_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **column_id** | **string**| The ID of the column | |
| **start_at** | **int**| The position of a task to start listing at | [optional] |
| **tasks_per_page** | **int**| The number of tasks to list per page | [optional] |

### Return type

[**\ck/plenty-client\Model\BoardTask[]**](../Model/BoardTask.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBoardsBoardIdColumnsColumnIdTasksPost()`

```php
restBoardsBoardIdColumnsColumnIdTasksPost($board_id, $column_id, $_rest_boards_board_id_columns_column_id_tasks): \ck/plenty-client\Model\BoardTask
```

Create task in specific column

Creates a new task in a specific column. The ID of the board and the ID of the column must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$_rest_boards_board_id_columns_column_id_tasks = new \ck/plenty-client\Model\RestBoardsBoardIdColumnsColumnIdTasksPostRequest(); // \ck/plenty-client\Model\RestBoardsBoardIdColumnsColumnIdTasksPostRequest

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksPost($board_id, $column_id, $_rest_boards_board_id_columns_column_id_tasks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **column_id** | **string**| The ID of the column | |
| **_rest_boards_board_id_columns_column_id_tasks** | [**\ck/plenty-client\Model\RestBoardsBoardIdColumnsColumnIdTasksPostRequest**](../Model/RestBoardsBoardIdColumnsColumnIdTasksPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\BoardTask**](../Model/BoardTask.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBoardsBoardIdColumnsColumnIdTasksTaskIdDelete()`

```php
restBoardsBoardIdColumnsColumnIdTasksTaskIdDelete($board_id, $column_id, $task_id): object
```

Delete task

Deletes a task. The ID of the board, the ID of the column and the ID of the task must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$task_id = 'task_id_example'; // string | The ID of the task

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdDelete($board_id, $column_id, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **column_id** | **string**| The ID of the column | |
| **task_id** | **string**| The ID of the task | |

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

## `restBoardsBoardIdColumnsColumnIdTasksTaskIdGet()`

```php
restBoardsBoardIdColumnsColumnIdTasksTaskIdGet($board_id, $column_id, $task_id): \ck/plenty-client\Model\BoardTask
```

Get task by ID

Gets a task by its ID. The ID of the board, the ID of the column and the ID of the task must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$task_id = 'task_id_example'; // string | The ID of the task

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdGet($board_id, $column_id, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **column_id** | **string**| The ID of the column | |
| **task_id** | **string**| The ID of the task | |

### Return type

[**\ck/plenty-client\Model\BoardTask**](../Model/BoardTask.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBoardsBoardIdColumnsColumnIdTasksTaskIdPositionPut()`

```php
restBoardsBoardIdColumnsColumnIdTasksTaskIdPositionPut($board_id, $position, $column_id, $task_id): object
```

Update task position

Updates the position of a task. The ID of the board, the ID of the column and the ID of the task must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$position = 56; // int | The new position of the task
$column_id = 'column_id_example'; // string | The ID of the column the task belongs to
$task_id = 'task_id_example'; // string | The ID of the task

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdPositionPut($board_id, $position, $column_id, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdPositionPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **position** | **int**| The new position of the task | |
| **column_id** | **string**| The ID of the column the task belongs to | |
| **task_id** | **string**| The ID of the task | |

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

## `restBoardsBoardIdColumnsColumnIdTasksTaskIdPost()`

```php
restBoardsBoardIdColumnsColumnIdTasksTaskIdPost($board_id, $column_id, $task_id): \ck/plenty-client\Model\BoardTask
```

Copy task

Copies a specific task. The ID of the board, the ID of the column and the ID of the task must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$task_id = 'task_id_example'; // string | The ID of the task

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdPost($board_id, $column_id, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **column_id** | **string**| The ID of the column | |
| **task_id** | **string**| The ID of the task | |

### Return type

[**\ck/plenty-client\Model\BoardTask**](../Model/BoardTask.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBoardsBoardIdColumnsColumnIdTasksTaskIdPut()`

```php
restBoardsBoardIdColumnsColumnIdTasksTaskIdPut($board_id, $column_id, $task_id, $_rest_boards_board_id_columns_column_id_tasks_task_id): \ck/plenty-client\Model\BoardTask
```

Update task

Updates a task. The ID of the board, the ID of the column and the ID of the task must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$task_id = 'task_id_example'; // string | The ID of the task
$_rest_boards_board_id_columns_column_id_tasks_task_id = new \ck/plenty-client\Model\RestBoardsBoardIdColumnsColumnIdTasksTaskIdPutRequest(); // \ck/plenty-client\Model\RestBoardsBoardIdColumnsColumnIdTasksTaskIdPutRequest

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdPut($board_id, $column_id, $task_id, $_rest_boards_board_id_columns_column_id_tasks_task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **column_id** | **string**| The ID of the column | |
| **task_id** | **string**| The ID of the task | |
| **_rest_boards_board_id_columns_column_id_tasks_task_id** | [**\ck/plenty-client\Model\RestBoardsBoardIdColumnsColumnIdTasksTaskIdPutRequest**](../Model/RestBoardsBoardIdColumnsColumnIdTasksTaskIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\BoardTask**](../Model/BoardTask.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesPost()`

```php
restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesPost($board_id, $column_id, $task_id, $reference_value): \ck/plenty-client\Model\BoardTaskReference
```

Create reference

Creates a new reference from a given task to a contact or a ticket. The ID of the board, the ID of the column and the ID of the task must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$task_id = 'task_id_example'; // string | The ID of the task
$reference_value = 'reference_value_example'; // string | Reference type followed by foreign ID of the referenced object. Syntax: TYPE-ID Example: user-123456 Types: user,ticket,contact,order,item

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesPost($board_id, $column_id, $task_id, $reference_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **column_id** | **string**| The ID of the column | |
| **task_id** | **string**| The ID of the task | |
| **reference_value** | **string**| Reference type followed by foreign ID of the referenced object. Syntax: TYPE-ID Example: user-123456 Types: user,ticket,contact,order,item | |

### Return type

[**\ck/plenty-client\Model\BoardTaskReference**](../Model/BoardTaskReference.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceIdDelete()`

```php
restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceIdDelete($board_id, $column_id, $task_id, $reference_id): object
```

Delete reference from a given task

Deletes a reference from a given task. The ID of the board, the ID of the column, the ID of the task and the ID of the reference must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the task
$column_id = 'column_id_example'; // string | The ID of the column
$task_id = 'task_id_example'; // string | The ID of the task
$reference_id = 'reference_id_example'; // string | The ID of the reference

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceIdDelete($board_id, $column_id, $task_id, $reference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the task | |
| **column_id** | **string**| The ID of the column | |
| **task_id** | **string**| The ID of the task | |
| **reference_id** | **string**| The ID of the reference | |

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

## `restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceTypeReferenceKeyGet()`

```php
restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceTypeReferenceKeyGet($board_id, $column_id, $task_id, $reference_type, $reference_key): object
```

Check reference key

Checks the reference key. The ID of the board, the ID of the column and the ID of the task as well as the reference type and the reference key must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$column_id = 'column_id_example'; // string | The ID of the column
$task_id = 'task_id_example'; // string | The ID of the task
$reference_type = 'reference_type_example'; // string | The type of the reference
$reference_key = 56; // int | The key of the reference

try {
    $result = $apiInstance->restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceTypeReferenceKeyGet($board_id, $column_id, $task_id, $reference_type, $reference_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceTypeReferenceKeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **column_id** | **string**| The ID of the column | |
| **task_id** | **string**| The ID of the task | |
| **reference_type** | **string**| The type of the reference | |
| **reference_key** | **int**| The key of the reference | |

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

## `restBoardsBoardIdColumnsGet()`

```php
restBoardsBoardIdColumnsGet($board_id): \ck/plenty-client\Model\BoardColumn[]
```

List all columns of a given board

Lists all columns of a given board. The ID of the board must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board

try {
    $result = $apiInstance->restBoardsBoardIdColumnsGet($board_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |

### Return type

[**\ck/plenty-client\Model\BoardColumn[]**](../Model/BoardColumn.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restBoardsBoardIdColumnsPost()`

```php
restBoardsBoardIdColumnsPost($board_id, $_rest_boards_board_id_columns): \ck/plenty-client\Model\BoardColumn
```

Create column and assign it to a board

Creates a new column and assigns it to a given board. The ID of the board must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\BoardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$board_id = 'board_id_example'; // string | The ID of the board
$_rest_boards_board_id_columns = new \ck/plenty-client\Model\RestBoardsBoardIdColumnsPostRequest(); // \ck/plenty-client\Model\RestBoardsBoardIdColumnsPostRequest

try {
    $result = $apiInstance->restBoardsBoardIdColumnsPost($board_id, $_rest_boards_board_id_columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardApi->restBoardsBoardIdColumnsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **board_id** | **string**| The ID of the board | |
| **_rest_boards_board_id_columns** | [**\ck/plenty-client\Model\RestBoardsBoardIdColumnsPostRequest**](../Model/RestBoardsBoardIdColumnsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\BoardColumn**](../Model/BoardColumn.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

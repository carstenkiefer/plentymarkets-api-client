# # OrderItemTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the transaction | [optional]
**order_item_id** | **int** | The ID of the order item | [optional]
**quantity** | **float** | The quantity | [optional]
**user_id** | **int** | The ID of the user | [optional]
**identification** | **string** | External identification. Can be an arbitrary string. | [optional]
**direction** | **string** | The direction. Possible values are &#39;in&#39; and &#39;out&#39;. | [optional]
**status** | **string** | The status. Possible values are &#39;regular&#39; and &#39;cancelled&#39;. | [optional]
**receipt_id** | **int** | The receipt ID | [optional]
**warehouse_location_id** | **int** | The ID of the warehouse location | [optional]
**batch** | **string** | The batch | [optional]
**best_before_date** | **string** | The best before date | [optional]
**batch_best_before_date_id** | **int** | Deprecated. Replaced by $batch and $bestBeforeDate. | [optional]
**created_at** | **string** | The date the transaction was created | [optional]
**updated_at** | **string** | The date the transaction was last updated | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

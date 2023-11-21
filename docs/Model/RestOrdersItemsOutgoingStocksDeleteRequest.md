# # RestOrdersItemsOutgoingStocksDeleteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The Id of the order item to be booked back in. |
**warehouse_id** | **int** | The Id of the warehouse, where the quantity should be booked back in. optional |
**quantity** | **float** | The quantity for this order item to be booked back in. optional |
**batch** | **string** | [optional] The batch for this order item, to be booked back in. optional | [optional]
**best_before_date** | **string** | [optional] The best before date for this order item, to be booked back in. optional | [optional]
**reason_id** | **int** | [optional] The Id of the reason, why the quantity for this order item should be booked back in. Possible values are one of the following: optional | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

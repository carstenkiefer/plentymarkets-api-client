# # RestStockmanagementStockRedistributePutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redistributions** | [**\ck\Model\VariationStockRedistribution[]**](VariationStockRedistribution.md) |  |
**variation_id** | **int** | The ID of the variation |
**reason_id** | **int** | The reason for the redistribution. Valid reasons are:   401: Stock transfer  402: Stock correction by stocktaking  403: Stock transfer because of need for repair  optional | [optional]
**quantity** | **float** | The quantity to redistribute |
**current_storage_location_id** | **int** | The ID of the current storage location |
**current_warehouse_id** | **int** | The ID of the current warehouse |
**new_storage_location_id** | **int** | The ID of the new storage location |
**new_warehouse_id** | **int** | The ID of the new warehouse |
**batch** | **string** | The batch of the redistribution optional | [optional]
**best_before_date** | **string** | The best before date of the redistribution optional | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

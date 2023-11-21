# # VariationStockRedistribution

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**variation_id** | **int** | The ID of the variation | [optional]
**reason_id** | **int** | The reason for the redistribution. Valid reasons are: &lt;ul&gt;  &lt;li&gt;401: Stock transfer&lt;/li&gt;  &lt;li&gt;402: Stock correction by stocktaking&lt;/li&gt;  &lt;li&gt;403: Stock transfer because of need for repair&lt;/li&gt; &lt;/ul&gt; | [optional]
**quantity** | **float** | The quantity to redistribute | [optional]
**best_before_date** | **string** | The best before date of the redistribution | [optional]
**batch** | **string** | The batch of the redistribution | [optional]
**current_storage_location_id** | **int** | The ID of the current storage location | [optional]
**current_warehouse_id** | **int** | The ID of the current warehouse | [optional]
**new_storage_location_id** | **int** | The ID of the new storage location | [optional]
**new_warehouse_id** | **int** | The ID of the new warehouse | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

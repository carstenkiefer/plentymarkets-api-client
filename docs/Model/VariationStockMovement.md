# # VariationStockMovement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the stock movement | [optional]
**item_id** | **int** | The ID of the item | [optional]
**variation_id** | **int** | The ID of the variation | [optional]
**warehouse_id** | **int** | The ID of the warehouse | [optional]
**reason_string** | **string** | The reason string | [optional]
**attribute_values** | **string** | The attribute values of a variation | [optional]
**process_row_id** | **int** | The ID is either the actual ID of an order or of an incoming item data set. Whether it is an order ID or an incoming item data set ID depends on the processRowType. | [optional]
**quantity** | **int** | The quantity | [optional]
**reason** | **int** | The reason for the movement | [optional]
**created_at** | **string** | The date and time that the movement was created. This date is in W3C format. | [optional]
**process_row_type** | **int** | The type of the stock movement &lt;ul&gt;  &lt;li&gt;1 &#x3D; incoming item data set&lt;/li&gt;  &lt;li&gt;2 &#x3D; order&lt;/li&gt;                                      &lt;li&gt;3 &#x3D; deleted stock movement&lt;/li&gt;                                      &lt;li&gt;4 &#x3D; new stock intake&lt;/li&gt; &lt;/ul&gt; | [optional]
**best_before_date** | **string** | The best before date for the movement | [optional]
**batch** | **string** | The batch for the movement | [optional]
**storage_location_name** | **string** | The name of the storage location | [optional]
**warehouse_name** | **string** | The name of the warehouse | [optional]
**purchase_price** | **int** | The purchase price of a variation | [optional]
**user_id** | **int** | The id of the user. Can be null if the movement was not triggered by an user. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

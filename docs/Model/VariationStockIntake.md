# # VariationStockIntake

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**variation_id** | **int** | The ID of the variation | [optional]
**warehouse_id** | **int** | The ID of the warehouse | [optional]
**storage_location_id** | **int** | The ID of the storage location | [optional]
**delivered_at** | **string** | The date when stock was booked in. The date is given in W3C format. | [optional]
**order_number** | **string** | The order number | [optional]
**supplier_id** | **int** | The ID of the supplier | [optional]
**currency** | **string** | The currency | [optional]
**exchange_rate** | **float** | The exchange rate | [optional]
**quantity** | **float** | The quantity of a variation | [optional]
**purchase_price** | **float** | The purchase price | [optional]
**best_before_date** | **string** | The best before date of the variation | [optional]
**batch** | **string** | The batch of the variation | [optional]
**reason_id** | **int** | The ID of the reason. The following IDs are available: &lt;ul&gt; &lt;li&gt;101: Incoming items&lt;/li&gt; &lt;li&gt;102: Booked in by stocktaking&lt;/li&gt; &lt;li&gt;104: Rebooked into stock because no production errors were found&lt;/li&gt; &lt;li&gt;106: Maculation canceled&lt;/li&gt; &lt;li&gt;107: Packing error, items are re-booked&lt;/li&gt; &lt;li&gt;109: Incoming items (logistics)&lt;/li&gt; &lt;li&gt;115: Incoming items (second choice)&lt;/li&gt; &lt;li&gt;116: Booked in by correction&lt;/li&gt; &lt;li&gt;117: Unpacked item&lt;/li&gt; &lt;li&gt;180: Incoming items (purchase order)&lt;/li&gt; &lt;li&gt;181: Incoming items (warehousing)&lt;/li&gt; &lt;/ul&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

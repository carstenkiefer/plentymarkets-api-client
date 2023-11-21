# # Warehouse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The id of the warehouse | [optional]
**name** | **string** | The name of the warehouse | [optional]
**note** | **string** | A note for this warehouse | [optional]
**type_id** | **int** | The id of the warehouse type. The following types are available: &lt;ul&gt;     &lt;li&gt;0 &#x3D; Sales warehouse&lt;/li&gt;     &lt;li&gt;1 &#x3D; Repair warehouse&lt;/li&gt;     &lt;li&gt;4 &#x3D; Storage warehouse&lt;/li&gt;     &lt;li&gt;5 &#x3D; Transit warehouse&lt;/li&gt;     &lt;li&gt;6 &#x3D; Distribution warehouse&lt;/li&gt;     &lt;li&gt;7 &#x3D; Other&lt;/li&gt; &lt;/ul&gt; | [optional]
**allocation_referrer_ids** | **object[]** | Allocation Referrer Ids by automatic warehouse detection | [optional]
**on_stock_availability** | **int** | Displayed availability of a variation if stock is available | [optional]
**out_of_stock_availability** | **int** | Displayed availability of a variation if no stock is available | [optional]
**split_by_shipping_profile** | **bool** | Flag that indicates if for this warehouse orders are split by shipping profiles or not. &lt;ul&gt;&lt;li&gt;True &#x3D; Orders are split by shipping profiles&lt;/li&gt; &lt;li&gt;False &#x3D; Orders will not be split by shipping profiles&lt;/li&gt;&lt;/ul&gt; | [optional]
**storage_location_type** | **string** | The storage location type. The following types are available: &lt;ul&gt;&lt;li&gt;none&lt;/li&gt; &lt;li&gt;small&lt;/li&gt;&lt;li&gt;medium&lt;/li&gt; &lt;li&gt;large&lt;/li&gt; &lt;li&gt;europallet&lt;/li&gt;&lt;/ul&gt; | [optional]
**storage_location_zone** | **int** | The zone that the storage location is in | [optional]
**repair_warehouse_id** | **int** | The id of the associated repair warehouse | [optional]
**is_inventory_mode_active** | **bool** | Flag that indicates if the inventory mode for this warehouse is active or not. &lt;ul&gt;&lt;li&gt;True &#x3D; active&lt;/li&gt; &lt;li&gt;False &#x3D; inactive&lt;/li&gt;&lt;/ul&gt; | [optional]
**logistics_type** | **string** | The id of the logistics type of the warehouse. The logistics type states which service provider fulfills the storage and shipping. The following logistics types are available: &lt;ul&gt; &lt;li&gt;own&lt;/li&gt; &lt;li&gt;amazon&lt;/li&gt; &lt;li&gt;dhlFulfillment&lt;/li&gt; &lt;/ul&gt; | [optional]
**updated_at** | **string** | The updated at timestamp of the warehouse | [optional]
**created_at** | **string** | The created at timestamp of the warehouse | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # ItemCrossSelling

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** | The unique ID of the item to which cross-selling items are linked | [optional]
**cross_item_id** | **int** | The unique ID of the cross-selling item that is linked to the item | [optional]
**relationship** | **string** | The cross-selling relationship between item and cross-selling item. Possible values:&lt;ul&gt;&lt;li&gt;Accessory &#x3D; The cross-selling item is an accessory of the item.&lt;/li&gt;&lt;li&gt;ReplacementPart &#x3D; The cross-selling item is a replacement part for the item.&lt;/li&gt;&lt;li&gt;Similar &#x3D; The cross-selling item is similar to the item.&lt;/li&gt;&lt;li&gt;Bundle &#x3D; The cross-selling item is suitable to be sold as a bundle with the item.&lt;/li&gt;&lt;/ul&gt; | [optional]
**is_dynamic** | **bool** | Flag that indicates if the cross-selling link was generated automatically. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

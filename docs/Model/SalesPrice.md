# # SalesPrice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID of the sales price | [optional]
**position** | **int** | The position of the sales price | [optional]
**minimum_order_quantity** | **float** | The minimum order quantity of the sales price. Sales prices with different minimum quantities can be used to create a quantity based graduation of prices in plentymarkets. | [optional]
**type** | **string** | The price type of the sales price.&lt;ul&gt;&lt;li&gt;RRP &#x3D; Sales price is the recommended retail price (RRP). If the RRP and another sales price are linked with a variation, the RRP will be displayed in the online store as red strike-through text next to the sales price.&lt;/li&gt;&lt;li&gt;Special offer &#x3D; Sales price as a special offer. Special offers are used for markets, e.g. Amazon and Hitmeister.&lt;/li&gt;&lt;/ul&gt; | [optional]
**is_customer_price** | **bool** | Flag that indicates if the sales price is a customer price. Currently, this setting is not in use. | [optional]
**is_displayed_by_default** | **bool** | Flag that indicates if the sales price is displayed automatically in the Sales Prices area of the plentymarkets backend when a new item is created. When false, the sales price can still be added manually when a new item is created. | [optional]
**is_live_conversion** | **bool** | Flag that indicates if the sales price is converted live in the online store. When true, the default currency price will be converted into the active currencies based on the conversion rates saved in plentymarkets. | [optional]
**interval** | **string** | The interval of the price. Possible values are: daily, weekly, monthly, quarterly, semi-annual and annual. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

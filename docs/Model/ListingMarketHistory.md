# # ListingMarketHistory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The listing market history ID. | [optional]
**listing_market_id** | **int** | The listing market ID of the current listing market history. | [optional]
**referrer_id** | **int** | The referrer ID. | [optional]
**external_id** | **string** | The external ID of the listing market history. | [optional]
**status_id** | **int** | The status ID of the current listing market history. The following properties are available: &lt;ul&gt; &lt;li&gt;1 &#x3D; Active&lt;/li&gt; &lt;li&gt;2 &#x3D; Ended&lt;/li&gt; &lt;li&gt;3 &#x3D; Relisted&lt;/li&gt; &lt;li&gt;4 &#x3D; Hidden&lt;/li&gt; &lt;/ul&gt; | [optional]
**quantity** | **int** | The quantity available for sale on the marketplace. | [optional]
**quantity_sold** | **int** | The quantity sold currently on the marketplace. | [optional]
**quantity_sold_delta** | **int** | The difference between the sold quantity and orders imported for this listing market history. | [optional]
**quantity_remain** | **int** | The quantity remaining on the marketplace. | [optional]
**price** | **float** | The price offered for this listing market. @see ListingMarketHistoryVariation if the listing market history contains variations. | [optional]
**currency** | **string** | The currency for the price of this listing market. | [optional]
**sku** | **string** | The stock keeping unit of this listing market history. | [optional]
**created_at** | **string** | The date that the entry was created. | [optional]
**updated_at** | **string** | The date that the entry was updated last. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

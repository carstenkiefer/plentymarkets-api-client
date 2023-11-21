# # RestItemsItemIdPutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**position** | **int** | The position of the item optional | [optional]
**stock_type** | **int** | The stock type of the item. Possible values:0 &#x3D; Stocked item (default)1 &#x3D; Production item2 &#x3D; Colli3 &#x3D; Special order item optional allowed values are 0, 1, 2, 3 | [optional]
**store_special** | **int** | Option to present items more prominently in the online store.1 &#x3D; Special offer2 &#x3D; New items3 &#x3D; Top items optional allowed values are 0, 1, 2, 3 | [optional]
**owner_id** | **int** | The plentymarkets user that is assigned as owner of this item. optional | [optional]
**manufacturer_id** | **int** | The ID of the manufacturer of the item optional | [optional]
**created_at** | **string** | Timestamp of the date and time the item was created. optional | [optional]
**customs_tariff_number** | **string** | Deprecated: The customs tariff number of the item; usually a 11 digit code number based on the Harmonised System optional | [optional]
**revenue_account** | **int** | The revenue account the item is linked to. An individual revenue account can be saved for each item in plentymarkets. If this is not done, plentymarkets automatically determines a revenue account based on the VAT rate. optional | [optional]
**coupon_restriction** | **int** | Indicates if the item can be purchased using a promotional coupon.0 &#x3D; Permitted1 &#x3D; Not permitted2 &#x3D; Purchasable with coupon only optional allowed values are 0, 1, 2 | [optional]
**condition** | **int** | The condition of the item. Possible values:0 &#x3D; New1 &#x3D; Used2 &#x3D; Boxed as new3 &#x3D; New with label4 &#x3D; Factory seconds optional allowed values are 0, 1, 2, 3, 4 | [optional]
**condition_api** | **int** | The condition of the item that is transferred to markets via API.0 &#x3D; New1 &#x3D; Used but as new2 &#x3D; Used but very good3 &#x3D; Used but good4 &#x3D; Used but acceptable5 &#x3D; Factory seconds optional allowed values are 0, 1, 2, 3, 4, 5 | [optional]
**is_subscribable** | **bool** | Flag that indicates if the item can be ordered as a subscription item. If yes, the item can be ordered for delivery at regular intervals. optional | [optional]
**is_shipping_package** | **bool** | Flag that indicates if a shipping package is to be used for this item. If yes and the variation&#39;s dimensions are entered in the Settings tab of a variation, the correct shipping package is assigned automatically. optional | [optional]
**amazon_fba_platform** | **int** | Indicates the platform used for Fulfilment by Amazon (FBA). 0 &#x3D; Do not use1 &#x3D; AMAZON EU (Europe)2 &#x3D; AMAZON FE (Far East)3 &#x3D; AMAZON NA (North America) optional allowed values are 0, 1, 2, 3 | [optional]
**is_shippable_by_amazon** | **bool** | Flag that indicates if the item can be shipped with Amazon Multi-Channel. Amazon Multi-Channel Fulfillment is a service for fulfilling orders from sales channels other than Amazon platforms using inventory stored in the Amazon fulfillment center. optional | [optional]
**amazon_product_type** | **int** | The Amazon product type of the item. List of IDs: https://www.plentymarkets.co.uk/manual/data-exchange/data-formats/item/ optional | [optional]
**amazon_fedas** | **string** | The FEDAS product classification key of the item. optional | [optional]
**ebay_preset_id** | **int** | The eBay preset ID. This plentymarkets ID must be specified to save values for $ebayCategory, $ebayCategory2, $ebayStoreCategory and $ebayStoreCategory2. optional | [optional]
**ebay_category** | **int** | The eBay category 1 of the item. This category is used when a new listing is created. optional | [optional]
**ebay_category2** | **int** | The eBay category 2 of the item. This category is used when a new listing is created. optional | [optional]
**ebay_store_category** | **int** | The ID of the eBay store category 1 of the item. This value is used for new listings. optional | [optional]
**ebay_store_category2** | **int** | The ID of the eBay store category 2 of the item. This value is used for new listings. optional | [optional]
**rakuten_category_id** | **int** | The ID of the Rakuten category of this item. optional | [optional]
**flag_one** | **int** | Flag 1 of the item. Flags can be used to organise and filter items. Each item can be assigned up to two flags. Possible values: 1 to 31, 0 &#x3D; no flag optional allowed values are 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31 | [optional]
**flag_two** | **int** | Flag 2 of the item. Flags can be used to organise and filter items. Each item can be assigned up to two flags. Possible values: 1 to 11, 0 &#x3D; no flag optional allowed values are 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11 | [optional]
**age_restriction** | **int** | The age customers must be to purchase the item. Items with an age rating of 18+ must be linked to a shipping profile for which the PostIdent option is activated.0 &#x3D; None available3 &#x3D; Released for ages 3 and up6 &#x3D; Ages 6 and up9 &#x3D; Ages 9 and up12 &#x3D; Ages 12 and up14 &#x3D; Ages 14 and up16 &#x3D; Ages 16 and up18 &#x3D; Ages 18 and up50 &#x3D; Not marked88 &#x3D; Not 99 &#x3D; Unknown optional allowed values are 0, 3, 6, 9, 12, 14, 16, 18, 50, 88, 99 |
**feedback** | **int** | The feedback, i.e. rating, that this item received. Possible values are 1 to 5 or 1 to 10 depending on the maximum rating setting. An initial feedback can be saved for items. The saved value will then be displayed as the initial feedback. Every time new feedback is submitted, the average value will be recalculated automatically. optional | [optional]
**ebay_titles** | [**\ck\Model\ItemEbayTitle[]**](ItemEbayTitle.md) |  | [optional]
**title** | **string** | The title. |
**item_shipping_profiles** | [**\ck\Model\ItemShippingProfiles[]**](ItemShippingProfiles.md) |  | [optional]
**profile_id** | **int** | The unique ID of the shipping profile |
**item_properties** | [**\ck\Model\ItemProperty[]**](ItemProperty.md) |  | [optional]
**property_id** | **int** | The id of the property item |
**property_selection_id** | **int** | The id of the property selection optional | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

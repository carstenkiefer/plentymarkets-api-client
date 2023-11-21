# # RestItemsSalesPricesPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**position** | **int** | The position of the sales price |
**minimum_order_quantity** | **float** | The minimum order quantity of the sales price. Sales prices with different minimum quantities can be used to create a quantity based graduation of prices in plentymarkets. |
**type** | **string** | The price type of the sales price.RRP &#x3D; Sales price is the recommended retail price (RRP). If the RRP and another sales price are linked with a variation, the RRP will be displayed in the online store as red strike-through text next to the sales price.Special offer &#x3D; Sales price as a special offer. Special offers are used for markets, e.g. Amazon and Hitmeister.  allowed values are default, rrp, specialOffer, subscription |
**is_customer_price** | **bool** | Flag that indicates if the sales price is a customer price. Currently, this setting is not in use. |
**is_displayed_by_default** | **bool** | Flag that indicates if the sales price is displayed automatically in the Sales Prices area of the plentymarkets backend when a new item is created. When false, the sales price can still be added manually when a new item is created. |
**is_live_conversion** | **bool** | Flag that indicates if the sales price is converted live in the online store. When true, the default currency price will be converted into the active currencies based on the conversion rates saved in plentymarkets. |
**interval** | **string** | The interval of the price. Possible values are: daily, weekly, monthly, quarterly, semi-annual and annual. optional allowed values are none, daily, weekly, monthly, quarterly, semi-annual, annual | [optional]
**names** | [**\ck\Model\SalesPriceName[]**](SalesPriceName.md) |  |
**lang** | **string** | The language code of the sales price name |
**name_internal** | **string** | The internal name of the sales price. The internal name is used in the plentymarkets back end only. |
**name_external** | **string** | The external name of the sales price. The external name is displayed in the online store and as such is visible for customers. |
**countries** | [**\ck\Model\SalesPriceCountry[]**](SalesPriceCountry.md) |  |
**country_id** | **int** | The unique ID of the country |
**currencies** | [**\ck\Model\SalesPriceCurrency[]**](SalesPriceCurrency.md) |  |
**currency** | **string** | The ISO code of the currency; -1 &#x3D; all currencies. |
**customer_classes** | [**\ck\Model\SalesPriceCustomerClass[]**](SalesPriceCustomerClass.md) |  |
**referrers** | [**\ck\Model\SalesPriceReferrer[]**](SalesPriceReferrer.md) |  |
**referrer_id** | **int** | The ID of the referrer linked to the sales price |
**clients** | [**\ck\Model\SalesPriceOnlineStore[]**](SalesPriceOnlineStore.md) |  |
**plenty_id** | **int** | The unique ID of the client (store) |
**accounts** | [**\ck\Model\SalesPriceAccount[]**](SalesPriceAccount.md) |  | [optional]
**account_id** | **int** | The ID of the referrer account linked to the sales price |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

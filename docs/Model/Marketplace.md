# # Marketplace

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**site_id** | **int** | The ID of the site exactly as eBay specifies it in the docs. This value is/was used in the old eBay SOAP APIs | [optional]
**marketplace_id** | **string** | The ID of the marketplace exactly as eBay specifies it in the docs. This value is used in the new eBay REST APIs. Eg. &#x60;EBAY_DE&#x60; or &#x60;EBAY-DE&#x60; | [optional]
**market_id** | **int** | System-Listing wide internal ID for the listing marketplace. This id occurs only in correlation with the listing DB tables. | [optional]
**referrer_id** | **float** | System wide internal ID for the marketplace. Use this instead of &#x60;marketId&#x60; whenever possible! | [optional]
**shortcut** | **string** | The marketplace shortcut name. | [optional]
**currency** | **string** | The currency used for the marketplace | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

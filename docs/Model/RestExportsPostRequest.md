# # RestExportsPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | export name |
**limit** | **int** | maximum number of entries optional | [optional]
**format_key** | **string** | the format key |
**type** | **string** | export type  allowed values are item, order, order_item, contact, contactNewsletter, warehouse, attribute, category, property, item_image, manufacturer, stock_movement, stock, facet, facetValue, facetValueReference, listing, listingMarketHistory |
**output_type** | **string** | the output type  allowed values are admin, download, ftp, sftp, ftps |
**filters** | [**\ck/plenty-client\Model\Filter[]**](Filter.md) |  | [optional]
**key** | **string** | output param key  with outputParams |
**value** | **string** | output param value optional | [optional]
**format_settings** | [**\ck/plenty-client\Model\FormatSetting[]**](FormatSetting.md) |  | [optional]
**output_params** | [**\ck/plenty-client\Model\OutputParam[]**](OutputParam.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

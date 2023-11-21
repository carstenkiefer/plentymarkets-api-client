# # RestItemsAttributesPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**backend_name** | **string** | The back end name of the attribute. The name must be unique and must not contain commas, colons, semicolons or quotation marks. It is not visible in the plentymarkets front end. optional | [optional]
**position** | **int** | The position of the attribute. Attributes are displayed in the attribute overview in ascending order by position. optional | [optional]
**is_surcharge_percental** | **bool** | Flag that indicates if the surcharge is percental. optional | [optional]
**is_linkable_to_image** | **bool** | Flag that indicates if an image can be linked to the attribute. optional | [optional]
**amazon_attribute** | **string** | The attribute of the market Amazon that this attribute is liked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values. optional | [optional]
**fruugo_attribute** | **string** | The attribute of the market Fruugo that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. optional allowed values are null, color, size | [optional]
**pixmania_attribute** | **int** | The attribute of the market PIXmania that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values. optional | [optional]
**otto_attribute** | **string** | The attribute of the market OTTO that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. optional allowed values are none, Dimension1, Dimension2, Dimension3, Dimension4 | [optional]
**google_shopping_attribute** | **string** | The attribute of the market Google Shopping that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. optional allowed values are none, size, color, material, pattern | [optional]
**neckermann_at_ep_attribute** | **int** | The component of the market neckermann AT EP that this attribute is linked to. To list variations on this market, attributes must be linked to one of the components specified by the market. Check documentation of the market for permitted values. optional | [optional]
**type_of_selection_in_online_store** | **string** | How customers can select the attribute in the front end of a client. To allow attribute selection by check mark, attribute availability must be checked on the client side. optional allowed values are dropdown, image, box | [optional]
**la_redoute_attribute** | **int** | The attribute of the market La Redoute that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values. optional | [optional]
**is_groupable** | **bool** | Flag that indicates if the attribute can be grouped in item lists. If yes, variations with this attribute can be shown in the ItemViewCategoriesList template first. Other attributes are nested and can only be selected after this attribute has been selected. optional | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

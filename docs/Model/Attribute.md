# # Attribute

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID of the attribute. | [optional]
**backend_name** | **string** | The back end name of the attribute. The name must be unique and must not contain commas, colons, semicolons or quotation marks. It is not visible in the plentymarkets front end. | [optional]
**position** | **int** | The position of the attribute. Attributes are displayed in the attribute overview in ascending order by position. | [optional]
**is_surcharge_percental** | **bool** | Flag that indicates if the surcharge is percental. | [optional]
**is_linkable_to_image** | **bool** | Flag that indicates if an image can be linked to the attribute. | [optional]
**amazon_attribute** | **string** | The attribute of the market Amazon that this attribute is liked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values. | [optional]
**fruugo_attribute** | **string** | The attribute of the market Fruugo that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. | [optional]
**pixmania_attribute** | **int** | The attribute of the market PIXmania that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values. | [optional]
**otto_attribute** | **string** | The attribute of the market OTTO that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. | [optional]
**google_shopping_attribute** | **string** | The attribute of the market Google Shopping that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. | [optional]
**neckermann_at_ep_attribute** | **int** | The component of the market neckermann AT EP that this attribute is linked to. To list variations on this market, attributes must be linked to one of the components specified by the market. Check documentation of the market for permitted values. | [optional]
**type_of_selection_in_online_store** | **string** | How customers can select the attribute in the front end of a client. To allow attribute selection by check mark, attribute availability must be checked on the client side. | [optional]
**la_redoute_attribute** | **int** | The attribute of the market La Redoute that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values. | [optional]
**is_groupable** | **bool** | Flag that indicates if the attribute can be grouped in item lists. If yes, variations with this attribute can be shown in the ItemViewCategoriesList template first. Other attributes are nested and can only be selected after this attribute has been selected. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

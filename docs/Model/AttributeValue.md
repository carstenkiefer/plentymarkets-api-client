# # AttributeValue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID of the attribute value. | [optional]
**attribute_id** | **int** | The unique ID of the attribute associated with the attribute value. | [optional]
**backend_name** | **string** | The back end name of the attribute value. This name can only be assigned once per attribute. It is not visible in the plentymarkets front end. | [optional]
**position** | **int** | The position of the attribute value. Attribute values are sorted in ascending order by position. | [optional]
**image** | **string** | The name of the image associated with the attribute value; naming pattern is attr\\_\\{valueId\\}. | [optional]
**comment** | **string** | Optional comment on the attribute value. Comments are not visible in the plentymarkets front end. | [optional]
**amazon_value** | **string** | The attribute value of the market Amazon that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the values specified by the market. Check documentation of the market for permitted values. | [optional]
**otto_value** | **string** | The attribute value of the market OTTO that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the attribute values specified by the market. | [optional]
**neckermann_at_ep_value** | **string** | The attribute value of the market Neckermann AT EP that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the attribute values specified by the market. Check documentation of the market for permitted values. | [optional]
**la_redoute_value** | **string** | The attribute value of the market La Redoute that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the attribute values specified by the market. Check documentation of the market for permitted values. | [optional]
**tracdelight_value** | **string** |  | [optional]
**percentage_distribution** | **int** | The percentage for automatic stock distribution of attribute values. When reordering an item, the quantities of attribute values is automatically distributed among the total quantity. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

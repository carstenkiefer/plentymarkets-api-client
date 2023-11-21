# # RestItemsPropertiesPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**position** | **int** | The position of the property optional | [optional]
**unit** | **string** | The unit of measurement of the property. Value is null if no unit is associated. optional | [optional]
**property_group_id** | **int** | The ID of the property group the property is assigned to. Value is null if property is not assigned to a property group. optional | [optional]
**backend_name** | **string** | The backend name of the property. The back end name is not visible to customers. |
**value_type** | **string** | Permitted property values are: empty &#x3D; No property typeint &#x3D; A whole number can be saved for an item, e.g. a size.float &#x3D; A number with decimal places can be saved for an item, e.g. a measurement.selection &#x3D; One of several options can be saved for the item. The values of the property value Selection can be managed using the route PropertySelection.text &#x3D; Text can be saved for an item.file &#x3D; A file can be saved for an item. optional allowed values are empty, int, float, selection, text, file | [optional]
**is_searchable** | **bool** | Flag that indicates if items can be found by entering the property name as a search term. optional | [optional]
**is_oder_property** | **bool** | Flag that indicates if the property is available in the order process. Depending on the property type, customers e.g. can enter a text or value or select an option from a drop-down list. optional | [optional]
**is_shown_on_item_page** | **bool** | Flag that indicates if the property will be shown on the item&#39;s page in the online store- optional | [optional]
**is_shown_on_item_list** | **bool** | Flag that indicates if the property will be shown in the item listing in the online store. optional | [optional]
**is_shown_at_checkout** | **bool** | Flag that indicates if the property will be shown in the order process. optional | [optional]
**is_shown_in_pdf** | **bool** | Flag that indicates if the property will be shown in PDF documents. optional | [optional]
**is_shown_as_additional_costs** | **bool** | Display as additional costs optional | [optional]
**comment** | **string** | Internal comment/note saved for the property. Internal comments are not visible to customers. optional | [optional]
**surcharge** | **float** | The surcharge for the property. Surcharges will automatically be added to the item price in the detailed view of an item and in the order process. The default value is 0.00, i.e. no surcharge. In the plentymarkets front end, the template variable PriceDynamic displays the price of a variation including the surcharge. optional | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

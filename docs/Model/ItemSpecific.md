# # ItemSpecific

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A recommended Item Specific name. | [optional]
**min_values** | **int** | Minimum number of values that you can specify for this Item Specific. | [optional]
**max_values** | **int** | Maximum number of values that you can specify for this Item Specific. | [optional]
**selection_mode** | **string** | Controls whether you can specify your own name and value in listing requests, or if you need to use a name and/or value that eBay has defined. | [optional]
**value_type** | **string** | The data type (e.g., date) that eBay expects the value to adhere to in listing requests. Only returned if the data type is not Text. In some cases, more details about the data type are returned in the &#x60;valueFormat&#x60; field. | [optional]
**value_format** | **string** | The format of the data type (e.g., date format) that eBay expects the item specific&#39;s value to adhere to in listing requests. A data type identified by the &#x60;valueType&#x60; field may have different representations, and &#x60;valueFormat&#x60; specifies the precise format that is required. | [optional]
**help_text** | **string** | Help-text defines the purpose of the Item Specific. The help text will be shown only when it is available for the particular Item Specific. | [optional]
**help_url** | **string** | A page on the eBay Web site with context-specific help tips that provide useful information about this Item Specific. Only returned when an applicable page is available in the system. | [optional]
**variation_picture** | **string** | Indicates whether the name (e.g., Color) can (or must) be used to classify the variation pictures | [optional]
**variation_specifics** | **string** | Indicates whether the recommended name/value pair can be used as variation attributes in a fixed-price listing call. For example, a given category could disable a name like Brand in variation specifics (if Brand is only allowed in the item specifics at the Item level). The same category could enable a name like Size for variation specifics (in addition to recommending it for item specifics). If not returned, then the name/value can be used for both variation specifics and item specifics. | [optional]
**values** | **object[]** | The available values. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

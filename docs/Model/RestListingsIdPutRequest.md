# # RestListingsIdPutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the listing. |
**item_id** | **int** | The ID of the item. optional | [optional]
**type_id** | **int** | The ID of the listing type. Possible types are:      1 &#x3D; Auction     2 &#x3D; Fixed     3 &#x3D; Shop item  optional allowed values are 1, 2, 3 | [optional]
**stock_dependence_type_id** | **int** | The ID of the listing stock dependence. Possible stock dependence types are:      1 &#x3D; Unlimited with sync     2 &#x3D; Limited with reservation     3 &#x3D; Limited without reservation     4 &#x3D; Unlimited without sync  optional allowed values are 1, 2, 3, 4 | [optional]
**unit_combination_id** | **int** | The ID of the unit combination. optional | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # OrderShippingPackageItems

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the order shipping package item. Primary key auto-increment | [optional]
**package_id** | **int** | The ID of the package (id column from plenty_package_type2order) | [optional]
**item_id** | **int** | The ID of the item (plenty_item_variation_base_item_id column from plenty_item_variation_base) | [optional]
**variation_id** | **int** | The ID of the variation (plenty_item_variation_base_id column from plenty_item_variation_base) | [optional]
**item_quantity** | **float** | The quantity of the item in the package | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

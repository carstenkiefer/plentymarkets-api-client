# # BasketItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the item in the shopping cart | [optional]
**basket_id** | **int** | The ID of the shopping cart. The ID increases by 1 when a new customer enters the online store and adds an item to the shopping cart. | [optional]
**session_id** | **string** | The ID of the current customer session | [optional]
**order_row_id** | **int** |  | [optional]
**quantity** | **float** | The current quantity of the item | [optional]
**quantity_originally** | **float** | The initial quantity of the item | [optional]
**item_id** | **int** | The ID of the item | [optional]
**price_id** | **int** | The ID of the item price | [optional]
**attribute_value_set_id** | **int** | The ID of the attribute value set | [optional]
**rebate** | **int** | The discount on the item | [optional]
**vat** | **float** | The VAT | [optional]
**price** | **float** | The item price | [optional]
**given_price** | **float** |  | [optional]
**use_given_price** | **bool** |  | [optional]
**input_width** | **int** | The width of the item | [optional]
**input_length** | **int** | The length of the item | [optional]
**input_height** | **int** | The height of the item | [optional]
**item_type** | **int** | The item type | [optional]
**external_item_id** | **string** | The external variation ID | [optional]
**no_edit_by_customer** | **bool** | Shows whether the item was edited by the customer | [optional]
**cost_center_id** | **int** |  | [optional]
**gift_package_for_row_id** | **int** |  | [optional]
**position** | **int** | The item position | [optional]
**size** | **string** | The item size | [optional]
**shipping_profile_id** | **int** | The ID of the shipping profile | [optional]
**referrer_id** | **float** | The ID of the order referrer | [optional]
**delivery_date** | **string** | The delivery date | [optional]
**category_id** | **int** | The ID of the item category | [optional]
**reservation_datetime** | **int** |  | [optional]
**variation_id** | **int** | The ID of the item variation | [optional]
**bundle_variation_id** | **int** | The ID of the item bundle type | [optional]
**created_at** | **string** | The date that the shopping cart was created | [optional]
**updated_at** | **string** | The date that the shopping cart was updated last | [optional]
**attribute_total_markup** | **float** | attribute total markup | [optional]
**basket_item_order_params** | **object[]** | Array of BasketItemParams | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

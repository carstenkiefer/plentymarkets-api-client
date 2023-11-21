# # VariationSupplier

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID of the link between variation and supplier | [optional]
**variation_id** | **int** | The unique ID of the variation | [optional]
**supplier_id** | **int** | The unique ID of the supplier | [optional]
**purchase_price** | **float** | The price at which the variation was purchased from this supplier. | [optional]
**minimum_purchase** | **int** | The minimum quantity of the variation that has to be ordered from the supplier. This value is also used as a quantity suggestion when creating reorders. | [optional]
**item_number** | **string** | The external item number assigned to the variation by this supplier | [optional]
**last_price_query** | **string** | The date of the last price query to this supplier. This helps to plan price negotiations. | [optional]
**delivery_time_in_days** | **int** | The delivery time in days for the variation saved for this supplier | [optional]
**discount** | **float** | The discount in percent the supplier grants for the variation. | [optional]
**is_discountable** | **string** | Flag that indicates if the supplier&#39;s discount for this variation is active. | [optional]
**packaging_unit** | **float** | The packaging unit of the supplier if it differs from the packaging unit settings in plentymarkets. | [optional]
**last_update_timestamp** | **string** | The time the supplier data was last updated | [optional]
**created_at** | **string** | The time the supplier data was created | [optional]
**currency_purchase_price** | **float** | The purchase price in the currency of the supplier | [optional]
**item_description** | **string** | The supplier item description | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

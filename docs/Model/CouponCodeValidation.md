# # CouponCodeValidation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_id** | **int** | The ID of the campaign | [optional]
**validation_type** | **string** | The type of the campaign. Currently the only type available is plentymarkets. | [optional]
**contact_id** | **int** | The ID of the contact that wants to redeem the coupon | [optional]
**coupon_code** | **string** | The coupon code | [optional]
**currency** | **string** | The currency of the purchase | [optional]
**referrer** | **float** | The order referrer | [optional]
**sales_discount** | **float** | The total discount from a coupon applied to an order. The discount is given as gross amount. | [optional]
**sales_discount_net** | **float** | The net discount from a coupon applied to an order. The net discount is the total discount minus the vat amount. | [optional]
**item_discount** | **float** | The discount amount applied to items. | [optional]
**item_discount_net** | **float** | The net discount applied to items. | [optional]
**shipping_discount** | **float** | The discount applied to shipping costs. | [optional]
**shipping_discount_net** | **float** | The net discount applied to shipping costs. | [optional]
**used_vat_fields** | **object[]** | The vat fields used for the validation | [optional]
**rest_coupon_amount** | **float** | The remaining coupon amount | [optional]
**checked_items** | **object[]** | The list of variations that passed the validation | [optional]
**validate_params** | **object[]** | Validation parameters | [optional]
**coupon_campaign_type** | **string** | The campaign type | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

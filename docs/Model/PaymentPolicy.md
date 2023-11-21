# # PaymentPolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_policy_id** | **string** | The ID of the payment policy. | [optional]
**description** | **string** | An optional seller-defined description of the payment policy. (Max length: 250) | [optional]
**immediate_pay** | **bool** | Indicate if the payment is due upon receipt or not. (eBay generates a receipt when the buyer agrees to purchase an item) | [optional]
**marketplace_id** | **string** | The ID of the eBay marketplace to which this return policy applies. If this value is not specified, value defaults to the seller&#39;s eBay registration site. | [optional]
**name** | **string** | A user-defined name for this payment policy. Names must be unique for policies assigned to the same marketplace. (Max length: 64) | [optional]
**payment_instructions** | **string** | Allows the seller to give payment instructions to the buyer. These instructions appear on the eBay View Item and Checkout pages. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

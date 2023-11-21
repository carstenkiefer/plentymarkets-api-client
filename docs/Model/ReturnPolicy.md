# # ReturnPolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_policy_id** | **string** | The ID of the return policy. | [optional]
**description** | **string** | An optional seller-defined description of the return policy. | [optional]
**extended_holiday_returns_offered** | **bool** | If this value is set to true, it indicates the seller offers an Extended Holiday Returns policy for their listings. | [optional]
**marketplace_id** | **string** | The ID of the eBay marketplace to which this return policy applies. If this value is not specified, value defaults to the seller&#39;s eBay registration site. | [optional]
**name** | **string** | A user-defined name for this fulfillment policy. Names must be unique for policies assigned to the same marketplace. | [optional]
**refund_method** | **string** | Indicates the method the seller uses to compensate the buyer for returned items. The return method specified applies only to remorse returns. Available options: &#x60;MERCHANDISE_CREDIT&#x60;, &#x60;MONEY_BACK&#x60;. | [optional]
**restocking_fee_percentage** | **string** | Sellers who accept returns should include this field if they charge buyers a restocking fee when items are returned. | [optional]
**return_instruction** | **string** | This optional free-form string field lets the seller provide a detailed explanation of the return policy. | [optional]
**return_method** | **string** | This field indicates the method in which the seller handles non-money back return requests for remorse returns. Sellers can specify they either exchange or replace items. Available options: &#x60;EXCHANGE&#x60;, &#x60;REPLACEMENT&#x60;. | [optional]
**returns_accepted** | **bool** | Set this value to true to indicate the seller accepts returns. | [optional]
**return_shipping_cost_payer** | **string** | The seller uses this value to specify whether the buyer or the seller is responsible for paying return shipping charges. The field can be set to either &#x60;BUYER&#x60; or &#x60;SELLER&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

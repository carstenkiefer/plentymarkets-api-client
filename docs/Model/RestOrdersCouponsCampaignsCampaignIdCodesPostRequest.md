# # RestOrdersCouponsCampaignsCampaignIdCodesPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_id** | **int** | The ID of the campaign that the code belongs to |
**code** | **string** | The coupon code matching to /^[a-zA-Z0-9_-]{6,32}$/ | [optional]
**value** | **float** | The value of the coupon if it differs from the campaign value. The value is null if the campaign value is used. | [optional]
**used_count** | **int** | How many times a code has been redeemed | [optional]
**used_amount** | **float** | The amount that is already redeemed. The total amount that can be redeemed is defined in the campaign as coupon value, because the value applies to all codes of a campaign. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

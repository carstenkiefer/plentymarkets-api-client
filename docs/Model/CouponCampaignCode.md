# # CouponCampaignCode

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The coupon code | [optional]
**campaign_id** | **int** | The ID of the campaign that the code belongs to | [optional]
**disable** | **int** | Flag that indicates if a code is active or deactivated. &lt;ul&gt;&lt;li&gt;True &#x3D; the code is deactivated&lt;/li&gt;  &lt;li&gt;False &#x3D; the code is active&lt;/li&gt;&lt;/ul&gt; | [optional]
**consumed** | **int** | Flag that indicates if a code was redeemed or not. &lt;ul&gt;&lt;li&gt;True &#x3D; the code was redeemed&lt;/li&gt;  &lt;li&gt;False &#x3D; the code is not redeemed&lt;/li&gt;&lt;/ul&gt; | [optional]
**used_count** | **int** | How many times a code has been redeemed | [optional]
**used_amount** | **float** | The amount that is already redeemed. The total amount that can be redeemed is defined in the campaign as coupon value, because the value applies to all codes of a campaign. | [optional]
**value** | **float** | The value of the coupon if it differs from the campaign value. The value is null if the campaign value is used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

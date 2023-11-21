# # Basket

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the shopping cart. The ID increases by 1 when a new customer enters the online store and adds an item to the shopping cart. | [optional]
**session_id** | **string** | The ID of the current customer session | [optional]
**order_id** | **int** | The ID of the order | [optional]
**customer_id** | **int** | The ID of the customer | [optional]
**customer_invoice_address_id** | **int** | The ID of the customer&#39;s invoice address | [optional]
**customer_shipping_address_id** | **int** | The ID of the customer&#39;s shipping address | [optional]
**currency** | **string** | The currency | [optional]
**referrer_id** | **float** | The ID of the order referrer | [optional]
**shipping_country_id** | **int** | The ID of the shipping country | [optional]
**method_of_payment_id** | **int** | The ID of the payment method | [optional]
**shipping_provider_id** | **int** | The ID of the shipping provider | [optional]
**shipping_profile_id** | **int** | The ID of the shipping profile | [optional]
**item_sum** | **float** | The gross value of items in the shopping cart | [optional]
**item_sum_net** | **float** | The net value of items in the shopping cart | [optional]
**basket_amount** | **float** | The total gross value of the shopping cart | [optional]
**basket_amount_net** | **float** | The total net value of the shopping cart | [optional]
**shipping_amount** | **float** | The gross shipping costs | [optional]
**shipping_amount_net** | **float** | The net shipping costs | [optional]
**payment_amount** | **float** | The amount of the payment | [optional]
**coupon_code** | **string** | The entered coupon code | [optional]
**coupon_discount** | **float** | The received discount due to the coupon code | [optional]
**shipping_delete_by_coupon** | **bool** | Shows whether the shipping costs are subtracted due to a coupon code. Shopping carts that are free of shipping costs have the value true. | [optional]
**basket_rebate** | **float** | The discount to the shopping cart value. The discount can either be set as a discount scale for items, as a customer class discount or as a discount based on the payment method. | [optional]
**basket_rebate_type** | **int** | The discount type. The following types are available: &lt;ul&gt;     &lt;li&gt;Discount scale based on net value of items &#x3D; 4&lt;/li&gt;     &lt;li&gt;    Discount based on method of payment &#x3D; 5&lt;/li&gt; &lt;/ul&gt; | [optional]
**max_fsk** | **int** | The age rating | [optional]
**order_timestamp** | **int** | The timestamp of the order | [optional]
**created_at** | **string** | The date that the shopping cart was created. | [optional]
**updated_at** | **string** | The date that the shopping cart was updated last. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

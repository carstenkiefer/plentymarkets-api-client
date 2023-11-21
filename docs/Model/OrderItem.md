# # OrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the order item | [optional]
**order_id** | **int** | The ID of the order that the order item belongs to | [optional]
**type_id** | **int** | The ID of the order item type &lt;ul&gt; &lt;li&gt;VARIATION   &#x3D; 1&lt;/li&gt; &lt;li&gt;ITEM_BUNDLE   &#x3D; 2&lt;/li&gt; &lt;li&gt;BUNDLE_COMPONENT  &#x3D; 3&lt;/li&gt; &lt;li&gt;PROMOTIONAL_COUPON &#x3D; 4&lt;/li&gt; &lt;li&gt;GIFT_CARD   &#x3D; 5&lt;/li&gt; &lt;li&gt;SHIPPING_COSTS  &#x3D; 6&lt;/li&gt; &lt;li&gt;PAYMENT_SURCHARGE &#x3D; 7&lt;/li&gt; &lt;li&gt;GIFT_WRAP   &#x3D; 8&lt;/li&gt; &lt;li&gt;UNASSIGEND_VARIATION &#x3D; 9&lt;/li&gt; &lt;li&gt;DEPOSIT    &#x3D; 10&lt;/li&gt; &lt;li&gt;ORDER    &#x3D; 11&lt;/li&gt; &lt;li&gt;DUNNING_CHARGE  &#x3D;   12&lt;/li&gt; &lt;li&gt;ITEM_SET          &#x3D;   13&lt;/li&gt; &lt;li&gt;SET_COMPONENT  &#x3D;   14&lt;/li&gt; &lt;/ul&gt; | [optional]
**referrer_id** | **float** | The ID of order item referrer | [optional]
**item_variation_id** | **int** | The ID of the item variation | [optional]
**quantity** | **float** | The quantity. | [optional]
**order_item_name** | **string** | The name of the order item | [optional]
**attribute_values** | **string** | The attribute value names | [optional]
**shipping_profile_id** | **int** | The ID of the order item&#39;s shipping profile | [optional]
**country_vat_id** | **int** | The ID of the country vat | [optional]
**vat_field** | **int** | The vat id (0-3). | [optional]
**vat_rate** | **float** | The vat amount, e.g. 19.0 for 19% VAT. | [optional]
**position** | **int** | The order items position in the order. | [optional]
**warehouse_id** | **int** | The ID of the warehouse. | [optional]
**created_at** | **string** | The date at which the order item was created. | [optional]
**updated_at** | **string** | The date that the order item was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

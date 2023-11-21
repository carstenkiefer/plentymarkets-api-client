# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the order | [optional]
**type_id** | **int** | The ID of the order type                                                               It is possible to define individual order types. However,                                                               the following types are available by default: &lt;ul&gt;     &lt;li&gt;1 &#x3D; Sales order&lt;/li&gt;     &lt;li&gt;2 &#x3D; Delivery&lt;/li&gt;     &lt;li&gt;3 &#x3D; Returns&lt;/li&gt;     &lt;li&gt;4 &#x3D; Credit note&lt;/li&gt;     &lt;li&gt;5 &#x3D; Warranty&lt;/li&gt;     &lt;li&gt;6 &#x3D; Repair&lt;/li&gt;     &lt;li&gt;7 &#x3D; Offer&lt;/li&gt;     &lt;li&gt;8 &#x3D; Advance order&lt;/li&gt;     &lt;li&gt;9 &#x3D; Multi-order&lt;/li&gt;     &lt;li&gt;10 &#x3D; Multi credit note&lt;/li&gt;     &lt;li&gt;11 &#x3D; Multi delivery&lt;/li&gt;     &lt;li&gt;12 &#x3D; Reorder&lt;/li&gt;     &lt;li&gt;13 &#x3D; Partial delivery&lt;/li&gt;     &lt;li&gt;14 &#x3D; Subscription&lt;/li&gt;     &lt;li&gt;15 &#x3D; Redistribution&lt;/li&gt; &lt;/ul&gt; | [optional]
**status_id** | **float** | The ID of the order status | [optional]
**status_name** | **string** | The name for the status ID (read only) | [optional]
**owner_id** | **int** | The user ID of the order&#39;s owner | [optional]
**referrer_id** | **float** | The referrer ID of the order | [optional]
**created_at** | **string** | The date that the order was created | [optional]
**updated_at** | **string** | The date that the order was updated last | [optional]
**plenty_id** | **int** | The plenty ID of the client that the order belongs to | [optional]
**location_id** | **int** | The ID of the location that the order belongs to | [optional]
**round_totals_only** | **bool** | True means only the order&#39;s total amounts are rounded, false the order item price is rounded too. (read-only) | [optional]
**number_of_decimals** | **int** | The number of decimals this order was rounded with. (read-only) | [optional]
**lock_status** | **string** | The lock status of the order. The following statuses are available: &lt;ul&gt;  &lt;li&gt;unlocked&lt;/li&gt;  &lt;li&gt;permanentlyLocked&lt;/li&gt;  &lt;li&gt;reversibleLocked&lt;/li&gt; &lt;/ul&gt; | [optional]
**has_tax_relevant_documents** | **bool** |  | [optional]
**has_delivery_orders** | **bool** | Has the order delivery orders? | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

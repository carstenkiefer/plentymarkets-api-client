# # RestOrdersPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type_id** | **int** | The ID of the order type                                                               It is possible to define individual order types. However,                                                               the following types are available by default:      1 &#x3D; Sales order     2 &#x3D; Delivery     3 &#x3D; Returns     4 &#x3D; Credit note     5 &#x3D; Warranty     6 &#x3D; Repair     7 &#x3D; Offer     8 &#x3D; Advance order     9 &#x3D; Multi-order     10 &#x3D; Multi credit note     11 &#x3D; Multi delivery     12 &#x3D; Reorder     13 &#x3D; Partial delivery     14 &#x3D; Subscription     15 &#x3D; Redistribution |
**plenty_id** | **int** | The plenty ID of the client that the order belongs to |
**status_id** | **float** | The ID of the order status optional | [optional]
**owner_id** | **int** | The user ID of the order&#39;s owner optional | [optional]
**lock_status** | **string** | The lock status of the order. The following statuses are available:   unlocked  permanentlyLocked  reversibleLocked  allowed values are unlocked, permanentlyLocked, reversibleLocked | [optional]
**order_items** | **object[]** |  | [optional]
**properties** | **object[]** |  | [optional]
**address_relations** | **object[]** |  | [optional]
**relations** | **object[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

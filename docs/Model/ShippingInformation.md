# # ShippingInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | The ID of the order | [optional]
**shipping_service_provider** | **string** | The name of the shipping service provider | [optional]
**transaction_id** | **string** | The ID of the transaction | [optional]
**shipping_status** | **string** | The shipping status. Possible values are &#39;open&#39;, &#39;prepared&#39; and &#39;registered&#39;. | [optional]
**shipping_costs** | **float** | The shipping costs | [optional]
**additional_data** | **string** | The additional data. Depending on the shipping service provider selected, this data may contain different information, e.g. shipping service, email address and order ID. | [optional]
**registration_at** | **int** | The date and time the shipment was registered | [optional]
**shipment_at** | **int** | The date the items will be shipped | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

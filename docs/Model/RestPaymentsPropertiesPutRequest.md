# # RestPaymentsPropertiesPutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_id** | **int** | The ID of the payment  matching to /^[0-9]+$/ |
**type_id** | **int** | The ID of the property type. The following property types are available:      Transaction ID &#x3D; 1     Reference ID &#x3D; 2     Booking text &#x3D; 3     Transaction password &#x3D; 4     Transaction code &#x3D; 5     Authorisation ID &#x3D; 6     Capture ID &#x3D; 7     Refund ID &#x3D; 8     Credit note ID &#x3D; 9     Order reference &#x3D; 10     Name of the sender &#x3D; 11     Email of the sender &#x3D; 12     The sender&#39;s sort code &#x3D; 13     The sender&#39;s bank name &#x3D; 14     The sender&#39;s bank account number &#x3D; 15     The holder of the bank account &#x3D; 16     The country of the sender&#39;s bank account &#x3D; 17     The sender&#39;s IBAN &#x3D; 18     The sender&#39;s BIC &#x3D; 19     Name of the recipient &#x3D; 20     The recipient&#39;s bank account &#x3D; 21     Reference text of the payment &#x3D; 22     Payment origin &#x3D; 23     Shipping address ID &#x3D; 24     Invoice address ID &#x3D; 25     Item buyer &#x3D; 26     Item number &#x3D; 27     Item transaction ID &#x3D; 28     External transaction type &#x3D; 29     External transaction status &#x3D; 30     The receiver&#39;s IBAN &#x3D; 31     The receiver&#39;s BIC &#x3D; 32     Transaction fee &#x3D; 33     Transaction lifespan &#x3D; 34   matching to /^[0-9]+$/ |
**value** | **string** | The value of the property type optional matching to /.{0,255}/ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # RestPaymentsPutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | The amount of the payment  matching to /^[0-9]{1,9}[\\.][0-9]{4}+$/ |
**exchange_ratio** | **float** | The exchange rate. Exchange rates are used if the default currency saved in plentymarkets differs from the currency of the order.  matching to /^[0-9]{1,9}[\\.][0-9]{4}+$/ |
**mop_id** | **int** | The ID of the payment method  matching to /^[0-9]+$/ |
**parent_id** | **int** | The ID of the parent payment optional matching to /^[0-9]+$/ | [optional]
**deleted** | **int** | A deleted payment. Deleted payments have the value 1 and are not displayed in the plentymarkets back end. optional matching to /^[0-1]$/ | [optional]
**unaccountable** | **int** | An unassigned payment. Unassigned payments have the value 1. optional matching to /^[0-1]$/ | [optional]
**currency** | **string** | The currency of the payment in ISO 4217 code.  matching to /^[A-Z]{3}$/ |
**type** | **string** | The payment type. Available types are credit and debit.  allowed values are debit, credit |
**status** | **int** | The status of the payment  matching to /^[1-9][0]?$/ |
**transaction_type** | **int** | The transaction type of the payment. The following transaction types are available:      Interim transaction report &#x3D; 1     Booked payment &#x3D; 2     Split payment &#x3D; 3   matching to /^[1-3]$/ |
**regenerate_hash** | **bool** | If $regenerateHash is true, regenerate the payment hash value. Default is false. optional | [optional]
**update_order_payment_status** | **bool** | If $updateOrderPaymentStatus is true, update the order payment status. Default is false. optional | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

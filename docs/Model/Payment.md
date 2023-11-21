# # Payment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the payment | [optional]
**amount** | **float** | The amount of the payment | [optional]
**exchange_ratio** | **float** | The exchange rate. Exchange rates are used if the default currency saved in plentymarkets differs from the currency of the order. | [optional]
**parent_id** | **int** | The ID of the parent payment | [optional]
**deleted** | **int** | A deleted payment. Deleted payments have the value 1 and are not displayed in the plentymarkets back end. | [optional]
**unaccountable** | **int** | An unassigned payment. Unassigned payments have the value 1. | [optional]
**currency** | **string** | The currency of the payment in ISO 4217 code. | [optional]
**type** | **string** | The payment type. Available types are credit and debit. | [optional]
**hash** | **string** | The hash code of the payment. The hash code consists of 32 characters and is automatically generated. | [optional]
**origin** | **int** | The origin of the payment. The following origins are available: &lt;ul&gt;     &lt;li&gt;Undefined &#x3D; 0&lt;/li&gt;     &lt;li&gt;System &#x3D; 1&lt;/li&gt;     &lt;li&gt;Manually &#x3D; 2&lt;/li&gt;     &lt;li&gt;SOAP &#x3D; 3&lt;/li&gt;     &lt;li&gt;Import &#x3D; 4&lt;/li&gt;     &lt;li&gt;Split payment &#x3D; 5&lt;/li&gt;     &lt;li&gt;Plugin &#x3D; 6&lt;/li&gt;     &lt;li&gt;POS &#x3D; 7&lt;/li&gt; &lt;/ul&gt; | [optional]
**received_at** | **string** | The time the payment was received | [optional]
**imported_at** | **string** | The time the payment was imported | [optional]
**status** | **int** | The &lt;a href&#x3D;\&quot;https://developers.plentymarkets.com/rest-doc/introduction#payment-statuses\&quot;  target&#x3D;\&quot;_blank\&quot;&gt;status&lt;/a&gt; of the payment | [optional]
**transaction_type** | **int** | The transaction type of the payment. The following transaction types are available: &lt;ul&gt;     &lt;li&gt;Interim transaction report &#x3D; 1&lt;/li&gt;     &lt;li&gt;Booked payment &#x3D; 2&lt;/li&gt;     &lt;li&gt;Split payment &#x3D; 3&lt;/li&gt; &lt;/ul&gt; | [optional]
**mop_id** | **int** | The ID of the payment method | [optional]
**regenerate_hash** | **bool** | If $regenerateHash is true, regenerate the payment hash value. Default is false. | [optional]
**update_order_payment_status** | **bool** | If $updateOrderPaymentStatus is true, update the order payment status. Default is false. | [optional]
**is_system_currency** | **bool** | If $isSystemCurrency is false, the value will be converted to the standard currency with the provided exchange rate. If $isSystemCurrency is false, the value is not converted. Default is true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

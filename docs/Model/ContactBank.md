# # ContactBank

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the bank account | [optional]
**contact_id** | **int** | The ID of the contact the bank account belongs to | [optional]
**order_id** | **int** | The ID of the order the bank account belongs to | [optional]
**account_owner** | **string** | The owner of the bank account | [optional]
**bank_name** | **string** | The name of the bank | [optional]
**bank_address** | **string** | The address of the bank | [optional]
**bank_postal_code_town** | **string** | The postcode and town of the bank | [optional]
**bank_country** | **string** | The country of the bank | [optional]
**iban** | **string** | The IBAN of the bank account | [optional]
**bic** | **string** | The BIC of the bank account | [optional]
**account_number** | **string** | The account number of the bank account | [optional]
**sort_code** | **string** | The sort code of the bank account | [optional]
**last_update_by** | **string** | The source of the last change (possible values: &#x60;customer&#x60;, &#x60;backend&#x60;, &#x60;import&#x60;) | [optional]
**direct_debit_mandate_available** | **int** | Flag that indicates if a direct debit mandate is available | [optional]
**direct_debit_mandate_at** | **string** | The time the direct debit mandate was created as unix timestamp | [optional]
**direct_debit_method** | **string** | The direct debit method (possible values: &#x60;sepaDirectDebit&#x60;, &#x60;sepaB2bDirectDebit&#x60;) | [optional]
**direct_debit_type** | **string** | The direct debit type (possible values: &#x60;first&#x60;, &#x60;next&#x60;) | [optional]
**payment_method** | **string** | The payment method (possible values: &#x60;recurrent&#x60;, &#x60;onOff&#x60;) | [optional]
**created_at** | **string** | The time the bank account was created as  unix timestamp | [optional]
**updated_at** | **string** | The time the bank account was last updated as  unix timestamp | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

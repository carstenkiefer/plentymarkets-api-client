# # DebtorAccountConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the debtor account configuration | [optional]
**location_id** | **int** | The ID of the accounting location that the debtor account is associated with. | [optional]
**mode** | **string** | The mode describes the criteria based on which pending amounts are assigned to a debtor account. The following modes are available: &lt;ul&gt; &lt;li&gt;character        &#x3D; The debtor accounts are selected based on the first character of customer information. The information and the order of the information that will be used are defined with the sequence. There are 3 different sequences available.&lt;/li&gt; &lt;li&gt;payment          &#x3D; The debtor accounts are selected based on the payment method.&lt;/li&gt; &lt;li&gt;country          &#x3D; The debtor accounts are selected based on the country of delivery.&lt;/li&gt; &lt;li&gt;country_payment  &#x3D; The debtor accounts are selected based on two criteria. The first criteria is the country and if the country is same as the country of the accounting location then the payment method is used to select the deptor account.&lt;/li&gt; &lt;/ul&gt; | [optional]
**sequence** | **string** | The sequence defines the order in which customer information will be used for the debtor account assignment if the character made has been chosen. The following sequences are available: &lt;ul&gt; &lt;li&gt;FNV &#x3D; stands for the sequence: company, lastname, firstname&lt;/li&gt; &lt;li&gt;NVF &#x3D; stands for the sequence: lastname, firstname, company&lt;/li&gt; &lt;li&gt;NFV &#x3D; stands for the sequence: lastname, company, firstname&lt;/li&gt; &lt;/ul&gt; | [optional]
**standard** | **string** | The standard debtor account that will be used if no matching debtor account can be found. | [optional]
**save** | **bool** | Flag that indicates if the debtor account shall be saved within the contact data. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

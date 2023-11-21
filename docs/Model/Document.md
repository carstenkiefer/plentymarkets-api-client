# # Document

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the document | [optional]
**type** | **string** | The type of the document. The following types are available:                            &lt;ul&gt;     &lt;li&gt;admin&lt;/li&gt;     &lt;li&gt;blog&lt;/li&gt;  &lt;li&gt;category&lt;/li&gt;  &lt;li&gt;correction_document&lt;/li&gt;  &lt;li&gt;credit_note&lt;/li&gt;     &lt;li&gt;credit_note_external&lt;/li&gt;        &lt;li&gt;customer&lt;/li&gt;  &lt;li&gt;delivery_note&lt;/li&gt;     &lt;li&gt;dunning_letter&lt;/li&gt;        &lt;li&gt;ebics_hash&lt;/li&gt;     &lt;li&gt;facet&lt;/li&gt;     &lt;li&gt;invoice&lt;/li&gt;     &lt;li&gt;invoice_external&lt;/li&gt;                                &lt;li&gt;pos_invoice&lt;/li&gt;                                &lt;li&gt;pos_invoice_cancellation&lt;/li&gt;  &lt;li&gt;item&lt;/li&gt;  &lt;li&gt;multi_credit_note&lt;/li&gt;     &lt;li&gt;multi_invoice&lt;/li&gt;        &lt;li&gt;offer&lt;/li&gt;     &lt;li&gt;order_confirmation&lt;/li&gt;        &lt;li&gt;pickup_delivery&lt;/li&gt;     &lt;li&gt;receipt&lt;/li&gt;                                &lt;li&gt;refund_reversal&lt;/li&gt;     &lt;li&gt;reorder&lt;/li&gt;     &lt;li&gt;repair_bill&lt;/li&gt;     &lt;li&gt;return_note&lt;/li&gt;        &lt;li&gt;reversal_document&lt;/li&gt;        &lt;li&gt;settlement_report&lt;/li&gt;     &lt;li&gt;success_confirmation&lt;/li&gt;     &lt;li&gt;ticket&lt;/li&gt;     &lt;li&gt;webshop&lt;/li&gt;   &lt;li&gt;webshop_customer&lt;/li&gt;     &lt;li&gt;z_report&lt;/li&gt;     &lt;li&gt;shipping_label&lt;/li&gt;     &lt;li&gt;shipping_export_label&lt;/li&gt;     &lt;li&gt;returns_label&lt;/li&gt;                                &lt;li&gt;reversal_dunning_letter&lt;/l&gt; &lt;/ul&gt; | [optional]
**number** | **int** | The document number | [optional]
**number_with_prefix** | **string** | The document number with prefix | [optional]
**path** | **string** | The path to the document | [optional]
**user_id** | **int** | The ID of the user | [optional]
**source** | **string** | The source where the document was generated. Possible sources are &#39;klarna&#39;, &#39;soap&#39;, &#39;admin&#39;, &#39;hitmeister&#39;, &#39;paypal&#39; and &#39;rest&#39;. | [optional]
**display_date** | **string** | The date displayed on the document | [optional]
**content** | **string** | The base64 encodedcontent of the document. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

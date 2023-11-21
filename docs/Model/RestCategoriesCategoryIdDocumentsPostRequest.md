# # RestCategoriesCategoryIdDocumentsPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the document optional | [optional]
**type** | **string** | The type of the document. The following types are available:                                 admin     blog  category  correction_document  credit_note     credit_note_external        customer  delivery_note     dunning_letter        ebics_hash     facet     invoice     invoice_external                                pos_invoice                                pos_invoice_cancellation  item  multi_credit_note     multi_invoice        offer     order_confirmation        pickup_delivery     receipt                                refund_reversal     reorder     repair_bill     return_note        reversal_document        settlement_report     success_confirmation     ticket     webshop   webshop_customer     z_report     shipping_label     shipping_export_label     returns_label                                reversal_dunning_letter   allowed values are receipt, z_report, invoice_external, invoice, pos_invoice, delivery_note, credit_note, order_confirmation, offer, reorder, dunning_letter, repair_bill, pickup_delivery, return_note, success_confirmation, multi_invoice, multi_credit_note, customer, ticket, item, webshop, pos_invoice_cancellation, webshop_customer, blog, admin, correction_document, ebics_hash, category, facet, settlement_report, reversal_document, reversal_dunning_letter, reversal_refund, shipping_label, shipping_export_label, pro_forma_invoice, returns_label, po_delivery_note, credit_note_external, uploaded |
**number** | **int** | The document number optional | [optional]
**number_with_prefix** | **string** | The document number with prefix optional | [optional]
**content** | **string** | The base64 encodedcontent of the document. |
**display_date** | **string** | The date displayed on the document optional | [optional]
**source** | **string** | The source where the document was generated. Possible sources are &#39;klarna&#39;, &#39;soap&#39;, &#39;admin&#39;, &#39;hitmeister&#39;, &#39;paypal&#39; and &#39;rest&#39;. optional allowed values are klarna, soap, admin, hitmeister, paypal, rest | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

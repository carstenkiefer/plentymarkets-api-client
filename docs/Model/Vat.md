# # Vat

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the VAT configuration. A VAT configuration includes 4 VAT rates | [optional]
**country_id** | **int** | The ID of the country that the VAT configuration belongs to | [optional]
**tax_id_number** | **string** | The tax id number of VAT configuration. | [optional]
**started_at** | **string** | The date when the VAT configuration went into effect | [optional]
**invalid_from** | **string** | The date when the VAT configuration should not be used any more | [optional]
**location_id** | **int** | The ID of the location | [optional]
**margin_scheme** | **string** | Specifies the tax rate that is used, when the margin scheme is applied. Available values: &#39;none&#39;, &#39;vat1&#39;, &#39;vat2&#39;, &#39;vat3&#39;, &#39;vat4&#39;. | [optional]
**is_restricted_to_digital_items** | **bool** | Flag that indicates if the VAT configuration is used only applied to digital goods or not. True&#x3D; The VAT set is only applied to digital goods. False &#x3D; The VAT set is applied to all types of goods. | [optional]
**is_standard** | **bool** | Flag that indicates if the VAT configuration is the standard VAT configuration for the location | [optional]
**created_at** | **string** | The date at which the VAT configuration was created. | [optional]
**updated_at** | **string** | The date that the VAT configuration was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

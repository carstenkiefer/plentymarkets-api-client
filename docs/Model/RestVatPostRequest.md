# # RestVatPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_id** | **int** | The ID of the country that the VAT configuration belongs to |
**location_id** | **int** | The ID of the location |
**tax_id_number** | **string** | The tax id number of VAT configuration. | [optional]
**started_at** | **string** | The date when the VAT configuration went into effect |
**invalid_from** | **string** | The date when the VAT configuration should not be used any more | [optional]
**is_restricted_to_digital_items** | **bool** | Flag that indicates if the VAT configuration is used only applied to digital goods or not. True&#x3D; The VAT set is only applied to digital goods. False &#x3D; The VAT set is applied to all types of goods. | [optional]
**margin_scheme** | **string** | Specifies the tax rate that is used, when the margin scheme is applied. Available values: &#39;none&#39;, &#39;vat1&#39;, &#39;vat2&#39;, &#39;vat3&#39;, &#39;vat4&#39;. allowed values are none, vat0, vat1, vat2, vat3 | [optional]
**vat_rates** | [**\ck/plenty-client\Model\VatRate[]**](VatRate.md) |  |
**id** | **int** | The ID of the VAT rate  allowed values are 0, 1, 2, 3 |
**name** | **string** | The name of a VAT rate | [optional]
**vat_rate** | **float** | The percentage of the VAT rate, e.g. 19.00 for 19 % |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

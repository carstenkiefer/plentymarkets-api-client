# # RestItemsBarcodesPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the barcode |
**type** | **string** | The type of the barcode. Possible values: GTIN_8, GTIN_13, GTIN_14, GTIN_128, ISBN, QR, CODE_128, UPC  allowed values are GTIN_8, GTIN_13, GTIN_14, GTIN_128, ISBN, QR, CODE_128, UPC |
**referrers** | [**\ck\Model\BarcodeLinkReferrer[]**](BarcodeLinkReferrer.md) |  | [optional]
**referrer_id** | **float** | The unique ID of the referrer. To activate all referrers, the value -1 must be specified. This value activates all referrers in the system by default, including any referrers added at a later stage. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

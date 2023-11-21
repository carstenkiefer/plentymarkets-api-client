# # ParcelServicePreset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the shipping profile (autoincrement value) | [optional]
**parcel_service_id** | **int** | The ID of the shipping service provider | [optional]
**backend_name** | **string** | The back end name of the shipping profile | [optional]
**flag** | **int** | The icon of the shipping profile | [optional]
**priority** | **int** | The priority of the shipping profile | [optional]
**category** | **int** | The category of the shipping profile | [optional]
**use_article_porto** | **int** | Flag that indicates if the extra shipping charge saved in the item data record is used | [optional]
**is_insured** | **int** | Flag that indicates if the shipping profile is insured | [optional]
**is_express** | **int** | Flag that indicates if the shipping profile is used for express delivery | [optional]
**is_postident** | **int** | Flag that indicates if the shipping profile includes an authority verification | [optional]
**is_default_enabled** | **int** | Flag that indicates if the shipping profile is automatically assigned to new items | [optional]
**island_fee** | **float** | The extra charge for islands saved in the shipping profile | [optional]
**is_cod** | **int** | Flag that indicates Cash on Delivery | [optional]
**supported_multishop** | **object[]** | The clients (stores) that are activated for the shipping profile | [optional]
**supported_referrer** | **object[]** | The order referrers that are activated for the shipping profile | [optional]
**subreferrer_support** | **object[]** | This field is currently without any function. | [optional]
**excluded_payment_methods** | **object[]** | The blocked payment methods that are not offered for the shipping profile | [optional]
**excluded_customer_groups** | **object[]** | The blocked customer groups for the shipping profile. Blocked customer groups cannot select the shipping profile during checkout. | [optional]
**shipping_group** | **string** | The group of the shipping profile | [optional]
**dispatch_identifier** | **string** | This field is currently without any function. | [optional]
**auction_type** | **int** | The eBay listing type for the shipping profile | [optional]
**supported_loyalty_programs** | **object[]** | The loyalty programs that are supported by the shipping profile | [optional]
**updated_at** | **string** | The date the shipping profile was last updated | [optional]
**show_data_privacy_agreement_hint** | **int** |  | [optional]
**transmit_privacy_rule** | **string** |  | [optional]
**alternative_email** | **string** |  | [optional]
**alternative_phone** | **string** |  | [optional]
**is_parcel_box** | **int** | Indicates whether the e.g. paketshop is supported | [optional]
**is_post_office** | **int** | Indicates whether the e.g. postfiliale is supported | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

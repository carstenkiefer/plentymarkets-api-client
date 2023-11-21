# # RestItemsIdVariationsVariationIdVariationSkusPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**variation_id** | **int** | The ID of the variation |
**market_id** | **float** | The ID of the market |
**account_id** | **int** | The ID of the market account |
**initial_sku** | **string** | The initial SKU of the variation. The initial SKU cannot be modified even if the variation SKU is changed. However, it is possible to reset the variation SKU to the initial SKU. optional | [optional]
**sku** | **string** | The SKU of the variation. The SKU is adjustable but may not exist twice for the combination of market Id and account Id. |
**parent_sku** | **string** | The Parent SKU of the variation. The Parent SKU is adjustable. The same Parent SKU value should be used on variations of same article. optional | [optional]
**is_active** | **bool** | Flag that indicates if the item is ready for export (currently not in use). optional | [optional]
**created_at** | **string** | The time the SKU was created (YYYY-MM-DD HH:MM:SS). optional | [optional]
**updated_at** | **string** | The time the SKU was updated (YYYY-MM-DD HH:MM:SS). optional | [optional]
**exported_at** | **string** | The time the variation was last exported (YYYY-MM-DD HH:MM:SS). optional | [optional]
**stock_updated_at** | **string** | optional | [optional]
**deleted_at** | **string** | The time the variation was deleted (YYYY-MM-DD HH:MM:SS). optional | [optional]
**status** | **string** | The status of the variation after the export. Possible entries are INACTIVE, ERROR, SENT and ACTIVE. optional allowed values are ACTIVE, INACTIVE, ERROR, SENT | [optional]
**additional_information** | **string** | The field that contains additional information. optional | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

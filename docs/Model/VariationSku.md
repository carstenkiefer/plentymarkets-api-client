# # VariationSku

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The row ID of the table plenty_item_variation_market_status | [optional]
**variation_id** | **int** | The ID of the variation | [optional]
**market_id** | **float** | The ID of the market | [optional]
**account_id** | **int** | The ID of the market account | [optional]
**initial_sku** | **string** | The initial SKU of the variation. The initial SKU cannot be modified even if the variation SKU is changed. However, it is possible to reset the variation SKU to the initial SKU. | [optional]
**sku** | **string** | The SKU of the variation. The SKU is adjustable but may not exist twice for the combination of market Id and account Id. | [optional]
**parent_sku** | **string** | The Parent SKU of the variation. The Parent SKU is adjustable. The same Parent SKU value should be used on variations of same article. | [optional]
**is_active** | **bool** | Flag that indicates if the item is ready for export (currently not in use). | [optional]
**created_at** | **string** | The time the SKU was created (YYYY-MM-DD HH:MM:SS). | [optional]
**updated_at** | **string** | The time the SKU was updated (YYYY-MM-DD HH:MM:SS). | [optional]
**exported_at** | **string** | The time the variation was last exported (YYYY-MM-DD HH:MM:SS). | [optional]
**stock_updated_at** | **string** |  | [optional]
**deleted_at** | **string** | The time the variation was deleted (YYYY-MM-DD HH:MM:SS). | [optional]
**status** | **string** | The status of the variation after the export. Possible entries are INACTIVE, ERROR, SENT and ACTIVE. | [optional]
**additional_information** | **string** | The field that contains additional information. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # RestStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**incoming_items** | [**\ck\Model\VariationStockIntake[]**](VariationStockIntake.md) |  | [optional]
**variation_id** | **int** | The ID of the variation |
**delivered_at** | **string** | The date when stock was booked in. The date is given in W3C format. |
**order_number** | **string** | The order number optional | [optional]
**currency** | **string** | The currency |
**quantity** | **float** | The quantity of a variation |
**purchase_price** | **float** | The purchase price optional | [optional]
**storage_location_id** | **int** | The ID of the storage location optional | [optional]
**reason_id** | **int** | The ID of the reason. The following IDs are available:  101: Incoming items 102: Booked in by stocktaking 104: Rebooked into stock because no production errors were found 106: Maculation canceled 107: Packing error, items are re-booked 109: Incoming items (logistics) 115: Incoming items (second choice) 116: Booked in by correction 117: Unpacked item 180: Incoming items (purchase order) 181: Incoming items (warehousing) |
**supplier_id** | **int** | The ID of the supplier optional | [optional]
**exchange_rate** | **float** | The exchange rate optional | [optional]
**batch** | **string** | The batch of the variation optional | [optional]
**best_before_date** | **string** | The best before date of the variation optional | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

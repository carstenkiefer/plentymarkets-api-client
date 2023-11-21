# # RestItemsIdVariationsVariationIdStockBookOutgoingItemsPutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warehouse_id** | **int** | The ID of the warehouse |
**delivered_at** | **string** | The date when stock was booked in. The date is given in W3C format. |
**order_number** | **string** | The order number optional | [optional]
**currency** | **string** | The currency |
**quantity** | **float** | The quantity of a variation |
**storage_location_id** | **int** | The ID of the storage location optional | [optional]
**reason_id** | **int** | The ID of the reason. The following IDs are available:  201: Outbound items 202: Outbound inventur 205: Outbound rubbish 206: Outbound packing error 207: Outbound defect 208: Outbound complaint 209: Outbound logistic 214: Outbound warehouse movement 215: Outbound second choise 216: Outbound correction 280: Outbound purchase order 281: Outbound loss |
**supplier_id** | **int** | The ID of the supplier optional | [optional]
**exchange_rate** | **float** | The exchange rate optional | [optional]
**best_before_date** | **string** | The best before date of the variation optional | [optional]
**batch** | **string** | The batch of the variation optional | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

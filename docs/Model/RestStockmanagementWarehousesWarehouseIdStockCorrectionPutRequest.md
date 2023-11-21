# # RestStockmanagementWarehousesWarehouseIdStockCorrectionPutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**corrections** | [**\ck/plenty-client\Model\VariationStockCorrection[]**](VariationStockCorrection.md) |  | [optional]
**variation_id** | **int** | The ID of the variation |
**quantity** | **float** | The quantity of the variation |
**storage_location_id** | **int** | The ID of the storage location |
**reason_id** | **int** | The reason for correction. The following reasons are available:  301: Stock correction 302: Stock correction by stocktaking 304: Stock correction because of manufacturer error 305: Stock correction because of unusable paper 306: Stock correction because of packing error 307: Stock correction because of damage 309: Stock correction (internal offset) 317: Stock correction because of BBD 318: Stock correction because of shipping items to FBA 319: Stock correction because of shipping items to fulfillment service provider 320: Stock correction because of sample for interested parties 321: Stock correction because of sample for customers 322: Stock correction because of sample 323: Stock correction because quality models are booked in 324: Stock correction because quality models are booked out 325: Stock correction because of gift 326: Stock correction because of malfunction (without return) 327: Stock correction because of loss 328: Stock correction because of unpack  optional | [optional]
**batch** | **string** | The batch of the variation optional | [optional]
**best_before_date** | **string** | The best before date of the variation optional | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

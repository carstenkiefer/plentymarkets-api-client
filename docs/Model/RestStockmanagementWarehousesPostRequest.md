# # RestStockmanagementWarehousesPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the warehouse |
**note** | **string** | A note for this warehouse optional | [optional]
**type_id** | **int** | The id of the warehouse type. The following types are available:      0 &#x3D; Sales warehouse     1 &#x3D; Repair warehouse     4 &#x3D; Storage warehouse     5 &#x3D; Transit warehouse     6 &#x3D; Distribution warehouse     7 &#x3D; Other |
**on_stock_availability** | **int** | Displayed availability of a variation if stock is available optional | [optional]
**out_of_stock_availability** | **int** | Displayed availability of a variation if no stock is available optional | [optional]
**split_by_shipping_profile** | **bool** | Flag that indicates if for this warehouse orders are split by shipping profiles or not. True &#x3D; Orders are split by shipping profiles False &#x3D; Orders will not be split by shipping profiles optional | [optional]
**storage_location_type** | **string** | The storage location type. The following types are available: none smallmedium large europallet optional | [optional]
**storage_location_zone** | **int** | The zone that the storage location is in optional | [optional]
**repair_warehouse_id** | **int** | The id of the associated repair warehouse optional | [optional]
**is_inventory_mode_active** | **bool** | Flag that indicates if the inventory mode for this warehouse is active or not. True &#x3D; active False &#x3D; inactive optional | [optional]
**logistics_type** | **string** | The id of the logistics type of the warehouse. The logistics type states which service provider fulfills the storage and shipping. The following logistics types are available:  own amazon dhlFulfillment |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # ManufacturerCommission

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID of the manufacturer commission | [optional]
**manufacturer_id** | **int** | The unique ID of the manufacturer | [optional]
**plenty_id** | **int** | The unique ID of the client (store) that the commission applies to. The route /rest/webstores provides access to clients (stores). | [optional]
**referrer_id** | **float** | The unique ID of the referrer that the commission applies to. The route /rest/orders/referrers provides access to referrers. | [optional]
**commission** | **float** | The manufacturer commission value in percent | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

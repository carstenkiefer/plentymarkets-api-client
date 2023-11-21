# # RestItemsIdImagesImageIdAvailabilitiesPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image_id** | **int** | The ID of the image. The ID must be unique. |
**type** | **string** | The type of referrer for which the image is available. Possible types: mandant &#x3D; The image can be made available for clients (stores).marketplace &#x3D; The image can be made available for markets.listing &#x3D; The image can be made available for listings.  allowed values are mandant, marketplace, listing |
**value** | **float** | For the type mandant, this is the plentyID of the client (store) for which the image is available. For the types marketplace and listing, this is the ID of the referrer for which the image is available. -1.00 &#x3D; The image is available for all referrers of this type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

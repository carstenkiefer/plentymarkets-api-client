# # RestItemsIdImagesUploadPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** | The ID of the item the image is associated with |
**position** | **int** | The position of the image. The position is used for sorting images in the online store. optional | [optional]
**file_type** | **string** | The file format of the image. Possible file formats: JPG, JPEG, PNG, GIF, SVG optional | [optional]
**upload_file_name** | **string** | The file name assigned to the uploaded image. Permitted characters for file names: alphanumeric (a-z, A-Z, 0-9), hypens (-), underscores (_).  with uploadImageData |
**upload_image_data** | **string** | The base64 encoded image data of the image | [optional]
**upload_url** | **string** | The URL under which the image can be accessed for uploading. Permitted characters for file names: alphanumeric (a-z, A-Z, 0-9), hypens (-), underscores (_). | [optional]
**names** | [**\ck\Model\ItemImageName[]**](ItemImageName.md) |  | [optional]
**lang** | **string** | The language of the image name |
**name** | **string** | The name of the image in the specified language |
**alternate** | **string** | The alternative name of the image in the specified language optional | [optional]
**availabilities** | [**\ck\Model\ItemImageAvailability[]**](ItemImageAvailability.md) |  | [optional]
**type** | **string** | The type of referrer for which the image is available. Possible types: mandant &#x3D; The image can be made available for clients (stores).marketplace &#x3D; The image can be made available for markets.listing &#x3D; The image can be made available for listings.  allowed values are mandant, marketplace, listing |
**value** | **float** | For the type mandant, this is the plentyID of the client (store) for which the image is available. For the types marketplace and listing, this is the ID of the referrer for which the image is available. -1.00 &#x3D; The image is available for all referrers of this type. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

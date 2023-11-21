# # RestMessagesPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | The content of the message |
**whispered** | **bool** | Whether the message is whispered (not visible for the contact/order linked to the message) or not optional | [optional]
**to** | [**\ck/plenty-client\Model\MessageTo[]**](MessageTo.md) |  |
**linked_to** | [**\ck/plenty-client\Model\MessageLinkedTo[]**](MessageLinkedTo.md) |  | [optional]
**meta_data** | [**\ck/plenty-client\Model\MessageMetaData[]**](MessageMetaData.md) |  | [optional]
**from** | [**\ck/plenty-client\Model\MessageFrom[]**](MessageFrom.md) |  |
**tags** | **object[]** |  | [optional]
**referrer** | [**\ck/plenty-client\Model\MessageReferrer[]**](MessageReferrer.md) |  |
**attachments** | [**\ck/plenty-client\Model\Attachment[]**](Attachment.md) |  | [optional]
**name** | **string** | The file name of the attachment |
**size** | **int** | The size of the attachment in bytes |
**content_type** | **string** | The content type fo the attachment  allowed values are image/png, image/jpeg, image/gif, image/bmp, image/tiff, application/pdf, application/zip, application/json, application/octet-stream, text/plain, text/csv |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

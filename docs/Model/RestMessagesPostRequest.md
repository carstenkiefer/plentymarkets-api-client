# # RestMessagesPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | The content of the message |
**whispered** | **bool** | Whether the message is whispered (not visible for the contact/order linked to the message) or not optional | [optional]
**to** | [**\ck\Model\MessageTo[]**](MessageTo.md) |  |
**linked_to** | [**\ck\Model\MessageLinkedTo[]**](MessageLinkedTo.md) |  | [optional]
**meta_data** | [**\ck\Model\MessageMetaData[]**](MessageMetaData.md) |  | [optional]
**from** | [**\ck\Model\MessageFrom[]**](MessageFrom.md) |  |
**tags** | **object[]** |  | [optional]
**referrer** | [**\ck\Model\MessageReferrer[]**](MessageReferrer.md) |  |
**attachments** | [**\ck\Model\Attachment[]**](Attachment.md) |  | [optional]
**name** | **string** | The file name of the attachment |
**size** | **int** | The size of the attachment in bytes |
**content_type** | **string** | The content type fo the attachment  allowed values are image/png, image/jpeg, image/gif, image/bmp, image/tiff, application/pdf, application/zip, application/json, application/octet-stream, text/plain, text/csv |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

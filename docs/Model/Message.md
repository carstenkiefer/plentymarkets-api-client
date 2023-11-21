# # Message

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | The UUID5 identifier of the message | [optional]
**plenty_id_hash** | **string** | The plenty ID hash | [optional]
**parent_uuid** | **string** | The UUID5 of the parent message | [optional]
**whispered** | **bool** | Whether the message is whispered (not visible for the contact/order linked to the message) or not | [optional]
**tags** | **object[]** | An array with tag IDs assigned to the message | [optional]
**title** | **string** | The title of the message | [optional]
**preview** | **string** | The first two lines of the message without any markup | [optional]
**message** | **string** | The content of the message | [optional]
**attached_files_count** | **int** | The amount of attached files (readonly) | [optional]
**done_at** | **string** | The date the messages was set to done | [optional]
**created_at** | **string** | The creation date of the message | [optional]
**updated_at** | **string** | The date of the last update of the message | [optional]
**deleted_at** | **string** | The date the message was deleted | [optional]
**deleted_by** | **int** | The ID of the user who deleted the message | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

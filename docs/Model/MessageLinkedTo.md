# # MessageLinkedTo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the link (one of {@link MessageTypesService::LINKED_TO_TYPE_MESSAGE}, {@link MessageTypesService::LINKED_TO_TYPE_ORDER}, {@link MessageTypesService::LINKED_TO_TYPE_CONTACT} and {@link MessageTypesService::LINKED_TO_TYPE_PAYMENT}) | [optional]
**value** | **string** | The value of the link. For type {@link MessageTypesService::LINKED_TO_TYPE_MESSAGE} it is a string (uuid5) and an integer otherwise. | [optional]
**type_id** | **string** | This can be the ID of a sub-type (e.g. the order subTypeId). (optional) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

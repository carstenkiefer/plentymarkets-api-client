# # MessageFrom

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the from instance (one of {@link MessageTypesService::FROM_TYPE_USER}, {@link MessageTypesService::FROM_TYPE_CONTACT} and {@link MessageTypesService::FROM_TYPE_EMAIL}) | [optional]
**value** | **string** | The value of the instance. For type {@link MessageTypesService::FROM_TYPE_EMAIL} it is a string (the email) and the id of the user or the contact otherwise. | [optional]
**name** | **string** | An optional name for the instance, e.g. the real name for type {@link MessageTypesService::FROM_TYPE_EMAIL} | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

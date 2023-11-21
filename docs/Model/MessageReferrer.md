# # MessageReferrer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the from instance (one of {@link MessageTypesService::REFERRER_TYPE_SYSTEM}, {@link MessageTypesService::REFERRER_TYPE_BACKEND}, {@link MessageTypesService::REFERRER_TYPE_REST} and {@link MessageTypesService::REFERRER_TYPE_PLUGIN}) | [optional]
**value** | **string** | The value of the instance. It is an integer (the user id) for type {@link MessageTypesService::REFERRER_TYPE_SYSTEM}, {@link MessageTypesService::REFERRER_TYPE_BACKEND} and {@link MessageTypesService::REFERRER_TYPE_REST} and a string (the plugin name) for type {@link MessageTypesService::REFERRER_TYPE_PLUGIN}. | [optional]
**name** | **string** | An optional name for the instance. For type {@link MessageTypesService::REFERRER_TYPE_PLUGIN} it is the plugin namespace, the user name otherwise. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

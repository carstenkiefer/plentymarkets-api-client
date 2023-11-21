# # RestItemsIdVariationsVariationIdDescriptionsPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** | The unique ID of the item that this description belongs to |
**lang** | **string** | The language code of the description |
**name** | **string** | The default name of the item. By default, this name is displayed in the online store. For Default items, this name is also used for markets. Character limit: max. 240 characters. optional | [optional]
**name2** | **string** | Alternative item name that can be used e.g. for markets. Character limit: max. 240 characters. optional | [optional]
**name3** | **string** | Alternative item name that can be used e.g. for markets. Character limit: max. 240 characters. optional | [optional]
**preview_description** | **string** | The preview text. The preview text is a short description that can be displayed in item lists. optional | [optional]
**meta_description** | **string** | The meta description of the item. This description is analysed by search engines and displayed in search results. This text should be treated as an advertising text to maximise click-through from search engine result pages. Current recommended limit is 156 characters. optional | [optional]
**description** | **string** | The item description. This is a detailed description displayed in the item layout of the online store. optional | [optional]
**technical_data** | **string** | The technical data for the item. To display the technical data in the online store, insert the template variable TechnicalData and an optional title into the template ItemViewSingleItem. optional | [optional]
**url_path** | **string** | The URL path of the item in the online store. By default, the URL path consists of the categories and the item name. The path will be assigned automatically by plentymarkets when the item is created and will be displayed as part of the URL when the item is selected in the online store. optional | [optional]
**meta_keywords** | **string** | Meta keywords to tag the item for search engines. More than one keyword can be separated by commas. optional | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

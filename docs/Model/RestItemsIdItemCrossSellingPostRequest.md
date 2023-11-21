# # RestItemsIdItemCrossSellingPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** | The unique ID of the item to which cross-selling items are linked |
**cross_item_id** | **int** | The unique ID of the cross-selling item that is linked to the item |
**relationship** | **string** | The cross-selling relationship between item and cross-selling item. Possible values:Accessory &#x3D; The cross-selling item is an accessory of the item.ReplacementPart &#x3D; The cross-selling item is a replacement part for the item.Similar &#x3D; The cross-selling item is similar to the item.Bundle &#x3D; The cross-selling item is suitable to be sold as a bundle with the item.  allowed values are Variation, DisplaySet, Collection, Accessory, Customized, Part, Complements, Piece, Necessary, ReplacementPart, Similar, Episode, Season, Bundle, Component |
**is_dynamic** | **bool** | Flag that indicates if the cross-selling link was generated automatically. optional | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

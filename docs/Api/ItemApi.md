# ck/plenty-client\ItemApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restAvailabilitiesGet()**](ItemApi.md#restAvailabilitiesGet) | **GET** /rest/availabilities | List item availabilities |
| [**restAvailabilitiesIdGet()**](ItemApi.md#restAvailabilitiesIdGet) | **GET** /rest/availabilities/{id} | Get an item availability |
| [**restAvailabilitiesIdPut()**](ItemApi.md#restAvailabilitiesIdPut) | **PUT** /rest/availabilities/{id} | Update an item availability |
| [**restItemSetsDelete()**](ItemApi.md#restItemSetsDelete) | **DELETE** /rest/item_sets | Delete item sets |
| [**restItemSetsGet()**](ItemApi.md#restItemSetsGet) | **GET** /rest/item_sets | List item sets |
| [**restItemSetsIdDelete()**](ItemApi.md#restItemSetsIdDelete) | **DELETE** /rest/item_sets/{id} | Delete an item set |
| [**restItemSetsIdGet()**](ItemApi.md#restItemSetsIdGet) | **GET** /rest/item_sets/{id} | Get an item set |
| [**restItemSetsIdPut()**](ItemApi.md#restItemSetsIdPut) | **PUT** /rest/item_sets/{id} | Update an item set |
| [**restItemSetsPost()**](ItemApi.md#restItemSetsPost) | **POST** /rest/item_sets | Create item sets |
| [**restItemSetsPut()**](ItemApi.md#restItemSetsPut) | **PUT** /rest/item_sets | Update item sets |
| [**restItemSetsSetIdComponentsDelete()**](ItemApi.md#restItemSetsSetIdComponentsDelete) | **DELETE** /rest/item_sets/{setId}/components | Delete item set components |
| [**restItemSetsSetIdComponentsGet()**](ItemApi.md#restItemSetsSetIdComponentsGet) | **GET** /rest/item_sets/{setId}/components | List item set components of an item set |
| [**restItemSetsSetIdComponentsIdDelete()**](ItemApi.md#restItemSetsSetIdComponentsIdDelete) | **DELETE** /rest/item_sets/{setId}/components/{id} | Delete an item set component |
| [**restItemSetsSetIdComponentsIdGet()**](ItemApi.md#restItemSetsSetIdComponentsIdGet) | **GET** /rest/item_sets/{setId}/components/{id} | Get an item set component |
| [**restItemSetsSetIdComponentsIdPut()**](ItemApi.md#restItemSetsSetIdComponentsIdPut) | **PUT** /rest/item_sets/{setId}/components/{id} | Update an item set component |
| [**restItemSetsSetIdComponentsPost()**](ItemApi.md#restItemSetsSetIdComponentsPost) | **POST** /rest/item_sets/{setId}/components | Create item set components |
| [**restItemSetsSetIdComponentsPut()**](ItemApi.md#restItemSetsSetIdComponentsPut) | **PUT** /rest/item_sets/{setId}/components | Update item set components |
| [**restItemSetsSetIdConfigGet()**](ItemApi.md#restItemSetsSetIdConfigGet) | **GET** /rest/item_sets/{setId}/config | Get the item set configuration of an item set |
| [**restItemSetsSetIdConfigPut()**](ItemApi.md#restItemSetsSetIdConfigPut) | **PUT** /rest/item_sets/{setId}/config | Update an item set configuration |
| [**restItemsAttributeValuesValueIdNamesGet()**](ItemApi.md#restItemsAttributeValuesValueIdNamesGet) | **GET** /rest/items/attribute_values/{valueId}/names | Get name and language for an attribute value ID |
| [**restItemsAttributeValuesValueIdNamesLangDelete()**](ItemApi.md#restItemsAttributeValuesValueIdNamesLangDelete) | **DELETE** /rest/items/attribute_values/{valueId}/names/{lang} | Delete an attribute value name |
| [**restItemsAttributeValuesValueIdNamesLangGet()**](ItemApi.md#restItemsAttributeValuesValueIdNamesLangGet) | **GET** /rest/items/attribute_values/{valueId}/names/{lang} | Get an attribute value name |
| [**restItemsAttributeValuesValueIdNamesLangPut()**](ItemApi.md#restItemsAttributeValuesValueIdNamesLangPut) | **PUT** /rest/items/attribute_values/{valueId}/names/{lang} | Update an attribute value name |
| [**restItemsAttributeValuesValueIdNamesPost()**](ItemApi.md#restItemsAttributeValuesValueIdNamesPost) | **POST** /rest/items/attribute_values/{valueId}/names | Create an attribute value name |
| [**restItemsAttributesAttributeIdMarketsMarketIdMapsDelete()**](ItemApi.md#restItemsAttributesAttributeIdMarketsMarketIdMapsDelete) | **DELETE** /rest/items/attributes/{attributeId}/markets/{marketId}/maps | Deletes an attribute map. |
| [**restItemsAttributesAttributeIdMarketsMarketIdMapsGet()**](ItemApi.md#restItemsAttributesAttributeIdMarketsMarketIdMapsGet) | **GET** /rest/items/attributes/{attributeId}/markets/{marketId}/maps | Gets an attribute map. |
| [**restItemsAttributesAttributeIdMarketsMarketIdMapsPut()**](ItemApi.md#restItemsAttributesAttributeIdMarketsMarketIdMapsPut) | **PUT** /rest/items/attributes/{attributeId}/markets/{marketId}/maps | Updates an attribute map. |
| [**restItemsAttributesAttributeIdNamesGet()**](ItemApi.md#restItemsAttributesAttributeIdNamesGet) | **GET** /rest/items/attributes/{attributeId}/names | Get an attribute name |
| [**restItemsAttributesAttributeIdNamesLangDelete()**](ItemApi.md#restItemsAttributesAttributeIdNamesLangDelete) | **DELETE** /rest/items/attributes/{attributeId}/names/{lang} | Delete an attribute name |
| [**restItemsAttributesAttributeIdNamesLangGet()**](ItemApi.md#restItemsAttributesAttributeIdNamesLangGet) | **GET** /rest/items/attributes/{attributeId}/names/{lang} | List attribute names |
| [**restItemsAttributesAttributeIdNamesLangPut()**](ItemApi.md#restItemsAttributesAttributeIdNamesLangPut) | **PUT** /rest/items/attributes/{attributeId}/names/{lang} | Update an attribute name |
| [**restItemsAttributesAttributeIdNamesPost()**](ItemApi.md#restItemsAttributesAttributeIdNamesPost) | **POST** /rest/items/attributes/{attributeId}/names | Create an attribute name |
| [**restItemsAttributesAttributeIdValueMarketNamesGet()**](ItemApi.md#restItemsAttributesAttributeIdValueMarketNamesGet) | **GET** /rest/items/attributes/{attributeId}/value_market_names | Search attribute value market names |
| [**restItemsAttributesAttributeIdValueMarketNamesPost()**](ItemApi.md#restItemsAttributesAttributeIdValueMarketNamesPost) | **POST** /rest/items/attributes/{attributeId}/value_market_names | Create an attribute value market name |
| [**restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypeDelete()**](ItemApi.md#restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypeDelete) | **DELETE** /rest/items/attributes/{attributeId}/value_market_names/{valueId}/{lang}/{referenceType} | Delete an attribute value market name |
| [**restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypePut()**](ItemApi.md#restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypePut) | **PUT** /rest/items/attributes/{attributeId}/value_market_names/{valueId}/{lang}/{referenceType} | Update an attribute value market name |
| [**restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsDelete()**](ItemApi.md#restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsDelete) | **DELETE** /rest/items/attributes/{attributeId}/values/{attributeValueId}/markets/{marketId}/maps | Deletes an attribute value map. |
| [**restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsGet()**](ItemApi.md#restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsGet) | **GET** /rest/items/attributes/{attributeId}/values/{attributeValueId}/markets/{marketId}/maps | Gets an attribute value map. |
| [**restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsPut()**](ItemApi.md#restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsPut) | **PUT** /rest/items/attributes/{attributeId}/values/{attributeValueId}/markets/{marketId}/maps | Updates an attribute value map. |
| [**restItemsAttributesAttributeIdValuesGet()**](ItemApi.md#restItemsAttributesAttributeIdValuesGet) | **GET** /rest/items/attributes/{attributeId}/values | List attribute values |
| [**restItemsAttributesAttributeIdValuesIdDelete()**](ItemApi.md#restItemsAttributesAttributeIdValuesIdDelete) | **DELETE** /rest/items/attributes/{attributeId}/values/{id} | Delete an attribute value |
| [**restItemsAttributesAttributeIdValuesIdGet()**](ItemApi.md#restItemsAttributesAttributeIdValuesIdGet) | **GET** /rest/items/attributes/{attributeId}/values/{id} | Get an attribute value |
| [**restItemsAttributesAttributeIdValuesIdPut()**](ItemApi.md#restItemsAttributesAttributeIdValuesIdPut) | **PUT** /rest/items/attributes/{attributeId}/values/{id} | Update an attribute value |
| [**restItemsAttributesAttributeIdValuesPost()**](ItemApi.md#restItemsAttributesAttributeIdValuesPost) | **POST** /rest/items/attributes/{attributeId}/values | Create an attribute value |
| [**restItemsAttributesGet()**](ItemApi.md#restItemsAttributesGet) | **GET** /rest/items/attributes | List attributes |
| [**restItemsAttributesIdDelete()**](ItemApi.md#restItemsAttributesIdDelete) | **DELETE** /rest/items/attributes/{id} | Delete an attribute |
| [**restItemsAttributesIdGet()**](ItemApi.md#restItemsAttributesIdGet) | **GET** /rest/items/attributes/{id} | Get an attribute |
| [**restItemsAttributesIdPut()**](ItemApi.md#restItemsAttributesIdPut) | **PUT** /rest/items/attributes/{id} | Update an attribute |
| [**restItemsAttributesMapsGet()**](ItemApi.md#restItemsAttributesMapsGet) | **GET** /rest/items/attributes/maps | Lists all attribute maps. |
| [**restItemsAttributesMarketsMapsPost()**](ItemApi.md#restItemsAttributesMarketsMapsPost) | **POST** /rest/items/attributes/markets/maps | Creates a new attribute map. |
| [**restItemsAttributesPost()**](ItemApi.md#restItemsAttributesPost) | **POST** /rest/items/attributes | Create an attribute |
| [**restItemsAttributesValuesMapsGet()**](ItemApi.md#restItemsAttributesValuesMapsGet) | **GET** /rest/items/attributes/values/maps | Lists all attribute value maps. |
| [**restItemsAttributesValuesMarketsMapsPost()**](ItemApi.md#restItemsAttributesValuesMarketsMapsPost) | **POST** /rest/items/attributes/values/markets/maps | Creates a new attribute value map. |
| [**restItemsBarcodesBarcodeIdDelete()**](ItemApi.md#restItemsBarcodesBarcodeIdDelete) | **DELETE** /rest/items/barcodes/{barcodeId} | Delete a barcode |
| [**restItemsBarcodesBarcodeIdGet()**](ItemApi.md#restItemsBarcodesBarcodeIdGet) | **GET** /rest/items/barcodes/{barcodeId} | Get a barcode |
| [**restItemsBarcodesBarcodeIdPut()**](ItemApi.md#restItemsBarcodesBarcodeIdPut) | **PUT** /rest/items/barcodes/{barcodeId} | Update a barcode |
| [**restItemsBarcodesBarcodeIdReferrerPost()**](ItemApi.md#restItemsBarcodesBarcodeIdReferrerPost) | **POST** /rest/items/barcodes/{barcodeId}/referrer | Activate a referrer |
| [**restItemsBarcodesBarcodeIdReferrerReferrerIdDelete()**](ItemApi.md#restItemsBarcodesBarcodeIdReferrerReferrerIdDelete) | **DELETE** /rest/items/barcodes/{barcodeId}/referrer/{referrerId} | Deactivate a referrer |
| [**restItemsBarcodesGet()**](ItemApi.md#restItemsBarcodesGet) | **GET** /rest/items/barcodes | List barcodes |
| [**restItemsBarcodesPost()**](ItemApi.md#restItemsBarcodesPost) | **POST** /rest/items/barcodes | Create a barcode |
| [**restItemsBarcodesReferrerReferrerIdGet()**](ItemApi.md#restItemsBarcodesReferrerReferrerIdGet) | **GET** /rest/items/barcodes/referrer/{referrerId} | List barcodes by referrer |
| [**restItemsBarcodesTypeTypeGet()**](ItemApi.md#restItemsBarcodesTypeTypeGet) | **GET** /rest/items/barcodes/type/{type} | List barcodes by type |
| [**restItemsGet()**](ItemApi.md#restItemsGet) | **GET** /rest/items | Search item |
| [**restItemsIdImagesAttributeValueMarketsGet()**](ItemApi.md#restItemsIdImagesAttributeValueMarketsGet) | **GET** /rest/items/{id}/images/attribute_value_markets | List attribute value image link |
| [**restItemsIdImagesGet()**](ItemApi.md#restItemsIdImagesGet) | **GET** /rest/items/{id}/images | List images of an item |
| [**restItemsIdImagesImageIdAttributeValueMarketsPost()**](ItemApi.md#restItemsIdImagesImageIdAttributeValueMarketsPost) | **POST** /rest/items/{id}/images/{imageId}/attribute_value_markets | Create an attribute value image link |
| [**restItemsIdImagesImageIdAttributeValueMarketsValueIdDelete()**](ItemApi.md#restItemsIdImagesImageIdAttributeValueMarketsValueIdDelete) | **DELETE** /rest/items/{id}/images/{imageId}/attribute_value_markets/{valueId} | Delete an attribute value image link |
| [**restItemsIdImagesImageIdAttributeValueMarketsValueIdGet()**](ItemApi.md#restItemsIdImagesImageIdAttributeValueMarketsValueIdGet) | **GET** /rest/items/{id}/images/{imageId}/attribute_value_markets/{valueId} | Get an attribute value image link |
| [**restItemsIdImagesImageIdAttributeValueMarketsValueIdPut()**](ItemApi.md#restItemsIdImagesImageIdAttributeValueMarketsValueIdPut) | **PUT** /rest/items/{id}/images/{imageId}/attribute_value_markets/{valueId} | Update an attribute value image link |
| [**restItemsIdImagesImageIdAvailabilitiesDelete()**](ItemApi.md#restItemsIdImagesImageIdAvailabilitiesDelete) | **DELETE** /rest/items/{id}/images/{imageId}/availabilities | Delete an availability |
| [**restItemsIdImagesImageIdAvailabilitiesGet()**](ItemApi.md#restItemsIdImagesImageIdAvailabilitiesGet) | **GET** /rest/items/{id}/images/{imageId}/availabilities | List availabilities |
| [**restItemsIdImagesImageIdAvailabilitiesPost()**](ItemApi.md#restItemsIdImagesImageIdAvailabilitiesPost) | **POST** /rest/items/{id}/images/{imageId}/availabilities | Create an availability |
| [**restItemsIdImagesImageIdDelete()**](ItemApi.md#restItemsIdImagesImageIdDelete) | **DELETE** /rest/items/{id}/images/{imageId} | Delete an image |
| [**restItemsIdImagesImageIdGet()**](ItemApi.md#restItemsIdImagesImageIdGet) | **GET** /rest/items/{id}/images/{imageId} | Get an image |
| [**restItemsIdImagesImageIdNamesGet()**](ItemApi.md#restItemsIdImagesImageIdNamesGet) | **GET** /rest/items/{id}/images/{imageId}/names | List names of an image |
| [**restItemsIdImagesImageIdNamesLangDelete()**](ItemApi.md#restItemsIdImagesImageIdNamesLangDelete) | **DELETE** /rest/items/{id}/images/{imageId}/names/{lang} | Delete an image name |
| [**restItemsIdImagesImageIdNamesLangGet()**](ItemApi.md#restItemsIdImagesImageIdNamesLangGet) | **GET** /rest/items/{id}/images/{imageId}/names/{lang} | Get an image name |
| [**restItemsIdImagesImageIdNamesLangPut()**](ItemApi.md#restItemsIdImagesImageIdNamesLangPut) | **PUT** /rest/items/{id}/images/{imageId}/names/{lang} | Update an image name |
| [**restItemsIdImagesImageIdNamesPost()**](ItemApi.md#restItemsIdImagesImageIdNamesPost) | **POST** /rest/items/{id}/images/{imageId}/names | Create an image name |
| [**restItemsIdImagesImageIdPut()**](ItemApi.md#restItemsIdImagesImageIdPut) | **PUT** /rest/items/{id}/images/{imageId} | Update an image |
| [**restItemsIdImagesImageIdVariationImagesGet()**](ItemApi.md#restItemsIdImagesImageIdVariationImagesGet) | **GET** /rest/items/{id}/images/{imageId}/variation_images | List image links of an image |
| [**restItemsIdImagesUploadPost()**](ItemApi.md#restItemsIdImagesUploadPost) | **POST** /rest/items/{id}/images/upload | Upload a new image |
| [**restItemsIdItemCrossSellingCrossItemIdDelete()**](ItemApi.md#restItemsIdItemCrossSellingCrossItemIdDelete) | **DELETE** /rest/items/{id}/item_cross_selling/{crossItemId} | Delete a cross-selling link |
| [**restItemsIdItemCrossSellingGet()**](ItemApi.md#restItemsIdItemCrossSellingGet) | **GET** /rest/items/{id}/item_cross_selling | List cross-selling links |
| [**restItemsIdItemCrossSellingPost()**](ItemApi.md#restItemsIdItemCrossSellingPost) | **POST** /rest/items/{id}/item_cross_selling | Create a cross-selling link |
| [**restItemsIdVariationImagesGet()**](ItemApi.md#restItemsIdVariationImagesGet) | **GET** /rest/items/{id}/variation_images | List image links of an item |
| [**restItemsIdVariationsVariationIdDescriptionsGet()**](ItemApi.md#restItemsIdVariationsVariationIdDescriptionsGet) | **GET** /rest/items/{id}/variations/{variationId}/descriptions | List texts |
| [**restItemsIdVariationsVariationIdDescriptionsLangDelete()**](ItemApi.md#restItemsIdVariationsVariationIdDescriptionsLangDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/descriptions/{lang} | Delete texts |
| [**restItemsIdVariationsVariationIdDescriptionsLangGet()**](ItemApi.md#restItemsIdVariationsVariationIdDescriptionsLangGet) | **GET** /rest/items/{id}/variations/{variationId}/descriptions/{lang} | Get texts |
| [**restItemsIdVariationsVariationIdDescriptionsLangPut()**](ItemApi.md#restItemsIdVariationsVariationIdDescriptionsLangPut) | **PUT** /rest/items/{id}/variations/{variationId}/descriptions/{lang} | Update texts |
| [**restItemsIdVariationsVariationIdDescriptionsPost()**](ItemApi.md#restItemsIdVariationsVariationIdDescriptionsPost) | **POST** /rest/items/{id}/variations/{variationId}/descriptions | Create texts |
| [**restItemsIdVariationsVariationIdImagesGet()**](ItemApi.md#restItemsIdVariationsVariationIdImagesGet) | **GET** /rest/items/{id}/variations/{variationId}/images | List images of a variation |
| [**restItemsIdVariationsVariationIdLabelsPost()**](ItemApi.md#restItemsIdVariationsVariationIdLabelsPost) | **POST** /rest/items/{id}/variations/{variationId}/labels | Get a variation label |
| [**restItemsIdVariationsVariationIdMarketIdentNumbersGet()**](ItemApi.md#restItemsIdVariationsVariationIdMarketIdentNumbersGet) | **GET** /rest/items/{id}/variations/{variationId}/market_ident_numbers | List ident number of a variation |
| [**restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdDelete()**](ItemApi.md#restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/market_ident_numbers/{marketIdentNumberId} | Deletes a market ident number |
| [**restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdGet()**](ItemApi.md#restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdGet) | **GET** /rest/items/{id}/variations/{variationId}/market_ident_numbers/{marketIdentNumberId} | Get a market ident number |
| [**restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdPut()**](ItemApi.md#restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/market_ident_numbers/{marketIdentNumberId} | Updates a market ident number |
| [**restItemsIdVariationsVariationIdMarketIdentNumbersPost()**](ItemApi.md#restItemsIdVariationsVariationIdMarketIdentNumbersPost) | **POST** /rest/items/{id}/variations/{variationId}/market_ident_numbers | Create a market ident number |
| [**restItemsIdVariationsVariationIdStockBookIncomingItemsPut()**](ItemApi.md#restItemsIdVariationsVariationIdStockBookIncomingItemsPut) | **PUT** /rest/items/{id}/variations/{variationId}/stock/bookIncomingItems | Book incoming stock |
| [**restItemsIdVariationsVariationIdStockBookOutgoingItemsPut()**](ItemApi.md#restItemsIdVariationsVariationIdStockBookOutgoingItemsPut) | **PUT** /rest/items/{id}/variations/{variationId}/stock/bookOutgoingItems | Book outgoing stock |
| [**restItemsIdVariationsVariationIdStockCorrectionPut()**](ItemApi.md#restItemsIdVariationsVariationIdStockCorrectionPut) | **PUT** /rest/items/{id}/variations/{variationId}/stock/correction | Correct stock |
| [**restItemsIdVariationsVariationIdStockGet()**](ItemApi.md#restItemsIdVariationsVariationIdStockGet) | **GET** /rest/items/{id}/variations/{variationId}/stock | List stock of a variation per warehouse |
| [**restItemsIdVariationsVariationIdStockMovementsGet()**](ItemApi.md#restItemsIdVariationsVariationIdStockMovementsGet) | **GET** /rest/items/{id}/variations/{variationId}/stock/movements | List stock movements |
| [**restItemsIdVariationsVariationIdStockRedistributePut()**](ItemApi.md#restItemsIdVariationsVariationIdStockRedistributePut) | **PUT** /rest/items/{id}/variations/{variationId}/stock/redistribute | Redistribute stock |
| [**restItemsIdVariationsVariationIdStockStorageLocationsGet()**](ItemApi.md#restItemsIdVariationsVariationIdStockStorageLocationsGet) | **GET** /rest/items/{id}/variations/{variationId}/stock/storageLocations | List stock of a variation per storage locations |
| [**restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_additional_skus/{additionalSkuId} | Delete an additional SKU |
| [**restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_additional_skus/{additionalSkuId} | Gets an additional SKU |
| [**restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdPut()**](ItemApi.md#restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_additional_skus/{additionalSkuId} | Update an additional SKU |
| [**restItemsIdVariationsVariationIdVariationAdditionalSkusGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationAdditionalSkusGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_additional_skus | List additional SKUs |
| [**restItemsIdVariationsVariationIdVariationAdditionalSkusPost()**](ItemApi.md#restItemsIdVariationsVariationIdVariationAdditionalSkusPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_additional_skus | Create an additional SKU |
| [**restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_barcodes/{barcodeId} | Delete a variation barcode |
| [**restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_barcodes/{barcodeId} | Get a variation barcode |
| [**restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdPut()**](ItemApi.md#restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_barcodes/{barcodeId} | Update a variation barcode |
| [**restItemsIdVariationsVariationIdVariationBarcodesGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationBarcodesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_barcodes | List variation barcodes |
| [**restItemsIdVariationsVariationIdVariationBarcodesPost()**](ItemApi.md#restItemsIdVariationsVariationIdVariationBarcodesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_barcodes | Create a variation barcode |
| [**restItemsIdVariationsVariationIdVariationBundlesBundleIdDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationBundlesBundleIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_bundles/{bundleId} | Remove a bundle component |
| [**restItemsIdVariationsVariationIdVariationBundlesBundleIdGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationBundlesBundleIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_bundles/{bundleId} | Get a variation bundle |
| [**restItemsIdVariationsVariationIdVariationBundlesBundleIdPut()**](ItemApi.md#restItemsIdVariationsVariationIdVariationBundlesBundleIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_bundles/{bundleId} | Update a variation bundle |
| [**restItemsIdVariationsVariationIdVariationBundlesGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationBundlesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_bundles | List bundle components |
| [**restItemsIdVariationsVariationIdVariationBundlesPost()**](ItemApi.md#restItemsIdVariationsVariationIdVariationBundlesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_bundles | Add a variation to a bundle |
| [**restItemsIdVariationsVariationIdVariationCategoriesCatIdDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationCategoriesCatIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_categories/{catId} | Remove a category from a variation |
| [**restItemsIdVariationsVariationIdVariationCategoriesCatIdGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationCategoriesCatIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_categories/{catId} | Get link between category and variation |
| [**restItemsIdVariationsVariationIdVariationCategoriesCatIdPut()**](ItemApi.md#restItemsIdVariationsVariationIdVariationCategoriesCatIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_categories/{catId} | Update variation category link |
| [**restItemsIdVariationsVariationIdVariationCategoriesGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationCategoriesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_categories | List categories linked to a variation |
| [**restItemsIdVariationsVariationIdVariationCategoriesPost()**](ItemApi.md#restItemsIdVariationsVariationIdVariationCategoriesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_categories | Link a category to a variation |
| [**restItemsIdVariationsVariationIdVariationClientsGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationClientsGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_clients | List clients linked to a variation |
| [**restItemsIdVariationsVariationIdVariationClientsPlentyIdDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationClientsPlentyIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_clients/{plentyId} | Unlink a client from a variation |
| [**restItemsIdVariationsVariationIdVariationClientsPost()**](ItemApi.md#restItemsIdVariationsVariationIdVariationClientsPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_clients | Link a client to a variation |
| [**restItemsIdVariationsVariationIdVariationComponentBundlesGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationComponentBundlesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_component_bundles | List bundles |
| [**restItemsIdVariationsVariationIdVariationDefaultCategoriesGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationDefaultCategoriesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_default_categories | List default category links |
| [**restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_default_categories/{plentyId} | Delete a default category link |
| [**restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_default_categories/{plentyId} | Gets a default category link |
| [**restItemsIdVariationsVariationIdVariationDefaultCategoriesPost()**](ItemApi.md#restItemsIdVariationsVariationIdVariationDefaultCategoriesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_default_categories | Create a default category link |
| [**restItemsIdVariationsVariationIdVariationImagesGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationImagesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_images | List image links of a variation |
| [**restItemsIdVariationsVariationIdVariationImagesImageIdDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationImagesImageIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_images/{imageId} | Delete an image link |
| [**restItemsIdVariationsVariationIdVariationImagesPost()**](ItemApi.md#restItemsIdVariationsVariationIdVariationImagesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_images | Create an image link |
| [**restItemsIdVariationsVariationIdVariationMarketsDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationMarketsDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_markets | Delete all market links of one variation |
| [**restItemsIdVariationsVariationIdVariationMarketsGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationMarketsGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_markets | List markets linked to a variation |
| [**restItemsIdVariationsVariationIdVariationMarketsMarketplaceIdDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationMarketsMarketplaceIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_markets/{marketplaceId} | Delete link between variation and market |
| [**restItemsIdVariationsVariationIdVariationMarketsPost()**](ItemApi.md#restItemsIdVariationsVariationIdVariationMarketsPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_markets | Create link between variation and market |
| [**restItemsIdVariationsVariationIdVariationPropertiesDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationPropertiesDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_properties | Deletes all links between a variation and its property values |
| [**restItemsIdVariationsVariationIdVariationPropertiesGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationPropertiesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_properties | List property values linked to a variation |
| [**restItemsIdVariationsVariationIdVariationPropertiesPost()**](ItemApi.md#restItemsIdVariationsVariationIdVariationPropertiesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_properties | Create link between variation and property value |
| [**restItemsIdVariationsVariationIdVariationPropertiesPropertyIdDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationPropertiesPropertyIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_properties/{propertyId} | Delete link between variation and property value |
| [**restItemsIdVariationsVariationIdVariationPropertiesPropertyIdGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationPropertiesPropertyIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_properties/{propertyId} | Get a property value |
| [**restItemsIdVariationsVariationIdVariationPropertiesPropertyIdPut()**](ItemApi.md#restItemsIdVariationsVariationIdVariationPropertiesPropertyIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_properties/{propertyId} | Update a property value |
| [**restItemsIdVariationsVariationIdVariationSalesPricesDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSalesPricesDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_sales_prices | Delete all links between a variation and its sales prices |
| [**restItemsIdVariationsVariationIdVariationSalesPricesGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSalesPricesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_sales_prices | List sales prices of a variation |
| [**restItemsIdVariationsVariationIdVariationSalesPricesPost()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSalesPricesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_sales_prices | Create link between variation and sales price |
| [**restItemsIdVariationsVariationIdVariationSalesPricesPriceIdDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSalesPricesPriceIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_sales_prices/{priceId} | Delete link between variation and sales price |
| [**restItemsIdVariationsVariationIdVariationSalesPricesPriceIdGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSalesPricesPriceIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_sales_prices/{priceId} | Get sales price data for a variation |
| [**restItemsIdVariationsVariationIdVariationSalesPricesPriceIdPut()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSalesPricesPriceIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_sales_prices/{priceId} | Update sales price data |
| [**restItemsIdVariationsVariationIdVariationSkusGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSkusGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_skus | List SKUs |
| [**restItemsIdVariationsVariationIdVariationSkusPost()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSkusPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_skus | Create an SKU |
| [**restItemsIdVariationsVariationIdVariationSkusSkuIdDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSkusSkuIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_skus/{skuId} | Delete an SKU |
| [**restItemsIdVariationsVariationIdVariationSkusSkuIdGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSkusSkuIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_skus/{skuId} | Get an SKU |
| [**restItemsIdVariationsVariationIdVariationSkusSkuIdPut()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSkusSkuIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_skus/{skuId} | Update an SKU |
| [**restItemsIdVariationsVariationIdVariationSuppliersGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSuppliersGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_suppliers | Lists suppliers for a variation |
| [**restItemsIdVariationsVariationIdVariationSuppliersPost()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSuppliersPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_suppliers | Create a link between variation and supplier |
| [**restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_suppliers/{variationSupplierId} | Delete link between variation and supplier |
| [**restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_suppliers/{variationSupplierId} | Get supplier data for a variation |
| [**restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdPut()**](ItemApi.md#restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_suppliers/{variationSupplierId} | Updates supplier data for a variation |
| [**restItemsIdVariationsVariationIdVariationWarehousesGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationWarehousesGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_warehouses | List the warehouses linked to a variation |
| [**restItemsIdVariationsVariationIdVariationWarehousesPost()**](ItemApi.md#restItemsIdVariationsVariationIdVariationWarehousesPost) | **POST** /rest/items/{id}/variations/{variationId}/variation_warehouses | Create link between a variation and a warehouse |
| [**restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdDelete()**](ItemApi.md#restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdDelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_warehouses/{warehouseId} | Delete link between a warehouse and a variation |
| [**restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdGet()**](ItemApi.md#restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdGet) | **GET** /rest/items/{id}/variations/{variationId}/variation_warehouses/{warehouseId} | Get warehouse data for a variation |
| [**restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdPut()**](ItemApi.md#restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdPut) | **PUT** /rest/items/{id}/variations/{variationId}/variation_warehouses/{warehouseId} | Update warehouse data of a variation |
| [**restItemsItemIdDelete()**](ItemApi.md#restItemsItemIdDelete) | **DELETE** /rest/items/{itemId} | Delete an item |
| [**restItemsItemIdFillPost()**](ItemApi.md#restItemsItemIdFillPost) | **POST** /rest/items/{itemId}/fill | Fill item to es |
| [**restItemsItemIdGet()**](ItemApi.md#restItemsItemIdGet) | **GET** /rest/items/{itemId} | Show an item |
| [**restItemsItemIdItemShippingProfilesDelete()**](ItemApi.md#restItemsItemIdItemShippingProfilesDelete) | **DELETE** /rest/items/{itemId}/item_shipping_profiles | Deactivate shipping profiles of an item |
| [**restItemsItemIdItemShippingProfilesGet()**](ItemApi.md#restItemsItemIdItemShippingProfilesGet) | **GET** /rest/items/{itemId}/item_shipping_profiles | List shipping profiles of an item |
| [**restItemsItemIdItemShippingProfilesIdDelete()**](ItemApi.md#restItemsItemIdItemShippingProfilesIdDelete) | **DELETE** /rest/items/{itemId}/item_shipping_profiles/{id} | Deactivate a shipping profile |
| [**restItemsItemIdItemShippingProfilesPost()**](ItemApi.md#restItemsItemIdItemShippingProfilesPost) | **POST** /rest/items/{itemId}/item_shipping_profiles | Activate a shipping profile |
| [**restItemsItemIdPut()**](ItemApi.md#restItemsItemIdPut) | **PUT** /rest/items/{itemId} | Update a item |
| [**restItemsItemIdVariationsGet()**](ItemApi.md#restItemsItemIdVariationsGet) | **GET** /rest/items/{itemId}/variations | List variations of an item |
| [**restItemsItemIdVariationsPost()**](ItemApi.md#restItemsItemIdVariationsPost) | **POST** /rest/items/{itemId}/variations | Create a variation |
| [**restItemsItemIdVariationsVariationIdDelete()**](ItemApi.md#restItemsItemIdVariationsVariationIdDelete) | **DELETE** /rest/items/{itemId}/variations/{variationId} | Delete a variation |
| [**restItemsItemIdVariationsVariationIdFillPost()**](ItemApi.md#restItemsItemIdVariationsVariationIdFillPost) | **POST** /rest/items/{itemId}/variations/{variationId}/fill | Fill a variation |
| [**restItemsItemIdVariationsVariationIdGet()**](ItemApi.md#restItemsItemIdVariationsVariationIdGet) | **GET** /rest/items/{itemId}/variations/{variationId} | Get a variation |
| [**restItemsItemIdVariationsVariationIdPut()**](ItemApi.md#restItemsItemIdVariationsVariationIdPut) | **PUT** /rest/items/{itemId}/variations/{variationId} | Update a variation |
| [**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsGet()**](ItemApi.md#restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsGet) | **GET** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts | Get property value texts |
| [**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangDelete()**](ItemApi.md#restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangDelete) | **DELETE** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts/{lang} | Delete property value text by language |
| [**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangGet()**](ItemApi.md#restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangGet) | **GET** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts/{lang} | Get property value text by language |
| [**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangPut()**](ItemApi.md#restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangPut) | **PUT** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts/{lang} | Update property value text by language |
| [**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPost()**](ItemApi.md#restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPost) | **POST** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts | Create property value text by language |
| [**restItemsItemShippingProfilesGet()**](ItemApi.md#restItemsItemShippingProfilesGet) | **GET** /rest/items/item_shipping_profiles | List all shipping profiles of all items |
| [**restItemsItemShippingProfilesPost()**](ItemApi.md#restItemsItemShippingProfilesPost) | **POST** /rest/items/item_shipping_profiles | Bulk activate shipping profiles |
| [**restItemsLabelsGet()**](ItemApi.md#restItemsLabelsGet) | **GET** /rest/items/labels | List item label templates |
| [**restItemsManufacturersGet()**](ItemApi.md#restItemsManufacturersGet) | **GET** /rest/items/manufacturers | List manufacturers |
| [**restItemsManufacturersIdCommissionsGet()**](ItemApi.md#restItemsManufacturersIdCommissionsGet) | **GET** /rest/items/manufacturers/{id}/commissions | List commissions |
| [**restItemsManufacturersIdCommissionsManufacturerIdDelete()**](ItemApi.md#restItemsManufacturersIdCommissionsManufacturerIdDelete) | **DELETE** /rest/items/manufacturers/{id}/commissions/{manufacturerId} | Delete a commission |
| [**restItemsManufacturersIdCommissionsManufacturerIdGet()**](ItemApi.md#restItemsManufacturersIdCommissionsManufacturerIdGet) | **GET** /rest/items/manufacturers/{id}/commissions/{manufacturerId} | Get a commission |
| [**restItemsManufacturersIdCommissionsManufacturerIdPut()**](ItemApi.md#restItemsManufacturersIdCommissionsManufacturerIdPut) | **PUT** /rest/items/manufacturers/{id}/commissions/{manufacturerId} | Update a commission |
| [**restItemsManufacturersIdCommissionsPost()**](ItemApi.md#restItemsManufacturersIdCommissionsPost) | **POST** /rest/items/manufacturers/{id}/commissions | Create a commission |
| [**restItemsManufacturersIdDelete()**](ItemApi.md#restItemsManufacturersIdDelete) | **DELETE** /rest/items/manufacturers/{id} | Delete a manufacturer |
| [**restItemsManufacturersIdGet()**](ItemApi.md#restItemsManufacturersIdGet) | **GET** /rest/items/manufacturers/{id} | Get a manufacturer |
| [**restItemsManufacturersIdPut()**](ItemApi.md#restItemsManufacturersIdPut) | **PUT** /rest/items/manufacturers/{id} | Update a manufacturer |
| [**restItemsManufacturersPost()**](ItemApi.md#restItemsManufacturersPost) | **POST** /rest/items/manufacturers | Create a manufacturer |
| [**restItemsPackingUnitsGet()**](ItemApi.md#restItemsPackingUnitsGet) | **GET** /rest/items/packing_units | Get the item variation packing units |
| [**restItemsPackingUnitsIdGet()**](ItemApi.md#restItemsPackingUnitsIdGet) | **GET** /rest/items/packing_units/{id} | Get the item variation packing unit for a specific given id |
| [**restItemsPost()**](ItemApi.md#restItemsPost) | **POST** /rest/items | Create new items |
| [**restItemsPropertiesGet()**](ItemApi.md#restItemsPropertiesGet) | **GET** /rest/items/properties | List properties |
| [**restItemsPropertiesIdDelete()**](ItemApi.md#restItemsPropertiesIdDelete) | **DELETE** /rest/items/properties/{id} | Delete a property |
| [**restItemsPropertiesIdGet()**](ItemApi.md#restItemsPropertiesIdGet) | **GET** /rest/items/properties/{id} | Get a property |
| [**restItemsPropertiesIdMarketReferencesGet()**](ItemApi.md#restItemsPropertiesIdMarketReferencesGet) | **GET** /rest/items/properties/{id}/market_references | List property market references |
| [**restItemsPropertiesIdMarketReferencesMarketIdDelete()**](ItemApi.md#restItemsPropertiesIdMarketReferencesMarketIdDelete) | **DELETE** /rest/items/properties/{id}/market_references/{marketId} | Delete a property market reference |
| [**restItemsPropertiesIdMarketReferencesMarketIdGet()**](ItemApi.md#restItemsPropertiesIdMarketReferencesMarketIdGet) | **GET** /rest/items/properties/{id}/market_references/{marketId} | Get a property market reference |
| [**restItemsPropertiesIdMarketReferencesMarketIdPut()**](ItemApi.md#restItemsPropertiesIdMarketReferencesMarketIdPut) | **PUT** /rest/items/properties/{id}/market_references/{marketId} | Update a property market reference |
| [**restItemsPropertiesIdMarketReferencesPost()**](ItemApi.md#restItemsPropertiesIdMarketReferencesPost) | **POST** /rest/items/properties/{id}/market_references | Create a property market reference |
| [**restItemsPropertiesIdNamesGet()**](ItemApi.md#restItemsPropertiesIdNamesGet) | **GET** /rest/items/properties/{id}/names | List the property names |
| [**restItemsPropertiesIdNamesLangDelete()**](ItemApi.md#restItemsPropertiesIdNamesLangDelete) | **DELETE** /rest/items/properties/{id}/names/{lang} | Delete a property name |
| [**restItemsPropertiesIdNamesLangGet()**](ItemApi.md#restItemsPropertiesIdNamesLangGet) | **GET** /rest/items/properties/{id}/names/{lang} | Get a property name |
| [**restItemsPropertiesIdNamesLangPut()**](ItemApi.md#restItemsPropertiesIdNamesLangPut) | **PUT** /rest/items/properties/{id}/names/{lang} | Update a property name |
| [**restItemsPropertiesIdNamesPost()**](ItemApi.md#restItemsPropertiesIdNamesPost) | **POST** /rest/items/properties/{id}/names | Create a property name |
| [**restItemsPropertiesIdPut()**](ItemApi.md#restItemsPropertiesIdPut) | **PUT** /rest/items/properties/{id} | Update a property |
| [**restItemsPropertiesPost()**](ItemApi.md#restItemsPropertiesPost) | **POST** /rest/items/properties | Create a property |
| [**restItemsPropertiesPropertyIdSelectionsGet()**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsGet) | **GET** /rest/items/properties/{propertyId}/selections | List property selections |
| [**restItemsPropertiesPropertyIdSelectionsIdDelete()**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsIdDelete) | **DELETE** /rest/items/properties/{propertyId}/selections/{id} | Delete a property selection |
| [**restItemsPropertiesPropertyIdSelectionsIdGet()**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsIdGet) | **GET** /rest/items/properties/{propertyId}/selections/{id} | Get a property selection |
| [**restItemsPropertiesPropertyIdSelectionsIdLangDelete()**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsIdLangDelete) | **DELETE** /rest/items/properties/{propertyId}/selections/{id}/{lang} | Delete a property selection language |
| [**restItemsPropertiesPropertyIdSelectionsIdLangGet()**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsIdLangGet) | **GET** /rest/items/properties/{propertyId}/selections/{id}/{lang} | List property selections by language |
| [**restItemsPropertiesPropertyIdSelectionsIdLangPut()**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsIdLangPut) | **PUT** /rest/items/properties/{propertyId}/selections/{id}/{lang} | Update a property selection |
| [**restItemsPropertiesPropertyIdSelectionsIdPost()**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsIdPost) | **POST** /rest/items/properties/{propertyId}/selections/{id} | Creates a property selection lang |
| [**restItemsPropertiesPropertyIdSelectionsLangGet()**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsLangGet) | **GET** /rest/items/properties/{propertyId}/selections/{lang} | List property selections |
| [**restItemsPropertiesPropertyIdSelectionsPost()**](ItemApi.md#restItemsPropertiesPropertyIdSelectionsPost) | **POST** /rest/items/properties/{propertyId}/selections | Create a property selection |
| [**restItemsPropertyGroupsGet()**](ItemApi.md#restItemsPropertyGroupsGet) | **GET** /rest/items/property_groups | List property groups |
| [**restItemsPropertyGroupsIdDelete()**](ItemApi.md#restItemsPropertyGroupsIdDelete) | **DELETE** /rest/items/property_groups/{id} | Delete a property group |
| [**restItemsPropertyGroupsIdGet()**](ItemApi.md#restItemsPropertyGroupsIdGet) | **GET** /rest/items/property_groups/{id} | Get a property group |
| [**restItemsPropertyGroupsIdNamesGet()**](ItemApi.md#restItemsPropertyGroupsIdNamesGet) | **GET** /rest/items/property_groups/{id}/names | List the property group names of a property group |
| [**restItemsPropertyGroupsIdNamesLangDelete()**](ItemApi.md#restItemsPropertyGroupsIdNamesLangDelete) | **DELETE** /rest/items/property_groups/{id}/names/{lang} | Delete a property group name |
| [**restItemsPropertyGroupsIdNamesLangGet()**](ItemApi.md#restItemsPropertyGroupsIdNamesLangGet) | **GET** /rest/items/property_groups/{id}/names/{lang} | Get a property group name in a language |
| [**restItemsPropertyGroupsIdNamesLangPut()**](ItemApi.md#restItemsPropertyGroupsIdNamesLangPut) | **PUT** /rest/items/property_groups/{id}/names/{lang} | Update a property group name |
| [**restItemsPropertyGroupsIdNamesPost()**](ItemApi.md#restItemsPropertyGroupsIdNamesPost) | **POST** /rest/items/property_groups/{id}/names | Create a property group name |
| [**restItemsPropertyGroupsIdPut()**](ItemApi.md#restItemsPropertyGroupsIdPut) | **PUT** /rest/items/property_groups/{id} | Update a property group |
| [**restItemsPropertyGroupsPost()**](ItemApi.md#restItemsPropertyGroupsPost) | **POST** /rest/items/property_groups | Create a property group |
| [**restItemsPut()**](ItemApi.md#restItemsPut) | **PUT** /rest/items | Bulk update items |
| [**restItemsSalesPricesGet()**](ItemApi.md#restItemsSalesPricesGet) | **GET** /rest/items/sales_prices | List sales prices |
| [**restItemsSalesPricesIdAccountsAccountTypeAccountIdDelete()**](ItemApi.md#restItemsSalesPricesIdAccountsAccountTypeAccountIdDelete) | **DELETE** /rest/items/sales_prices/{id}/accounts/{accountType}/{accountId} | Deactivate a referrer account |
| [**restItemsSalesPricesIdAccountsGet()**](ItemApi.md#restItemsSalesPricesIdAccountsGet) | **GET** /rest/items/sales_prices/{id}/accounts | List referrer accounts |
| [**restItemsSalesPricesIdAccountsPost()**](ItemApi.md#restItemsSalesPricesIdAccountsPost) | **POST** /rest/items/sales_prices/{id}/accounts | Activate a referrer account |
| [**restItemsSalesPricesIdCountriesCountryIdDelete()**](ItemApi.md#restItemsSalesPricesIdCountriesCountryIdDelete) | **DELETE** /rest/items/sales_prices/{id}/countries/{countryId} | Deactivate a country |
| [**restItemsSalesPricesIdCountriesGet()**](ItemApi.md#restItemsSalesPricesIdCountriesGet) | **GET** /rest/items/sales_prices/{id}/countries | List countries by sales price |
| [**restItemsSalesPricesIdCountriesPost()**](ItemApi.md#restItemsSalesPricesIdCountriesPost) | **POST** /rest/items/sales_prices/{id}/countries | Activate a country |
| [**restItemsSalesPricesIdCurrenciesCurrencyDelete()**](ItemApi.md#restItemsSalesPricesIdCurrenciesCurrencyDelete) | **DELETE** /rest/items/sales_prices/{id}/currencies/{currency} | Deactivate a currency |
| [**restItemsSalesPricesIdCurrenciesGet()**](ItemApi.md#restItemsSalesPricesIdCurrenciesGet) | **GET** /rest/items/sales_prices/{id}/currencies | List activated currencies |
| [**restItemsSalesPricesIdCurrenciesPost()**](ItemApi.md#restItemsSalesPricesIdCurrenciesPost) | **POST** /rest/items/sales_prices/{id}/currencies | Activate a currency |
| [**restItemsSalesPricesIdCustomerClassesCustomerClassIdDelete()**](ItemApi.md#restItemsSalesPricesIdCustomerClassesCustomerClassIdDelete) | **DELETE** /rest/items/sales_prices/{id}/customer_classes/{customerClassId} | Activate a customer class |
| [**restItemsSalesPricesIdCustomerClassesGet()**](ItemApi.md#restItemsSalesPricesIdCustomerClassesGet) | **GET** /rest/items/sales_prices/{id}/customer_classes | List activated customer classes |
| [**restItemsSalesPricesIdCustomerClassesPost()**](ItemApi.md#restItemsSalesPricesIdCustomerClassesPost) | **POST** /rest/items/sales_prices/{id}/customer_classes | Activate a customer class |
| [**restItemsSalesPricesIdDelete()**](ItemApi.md#restItemsSalesPricesIdDelete) | **DELETE** /rest/items/sales_prices/{id} | Delete a sales price |
| [**restItemsSalesPricesIdGet()**](ItemApi.md#restItemsSalesPricesIdGet) | **GET** /rest/items/sales_prices/{id} | Get a sales price |
| [**restItemsSalesPricesIdNamesGet()**](ItemApi.md#restItemsSalesPricesIdNamesGet) | **GET** /rest/items/sales_prices/{id}/names | List names of a sales price |
| [**restItemsSalesPricesIdNamesLangDelete()**](ItemApi.md#restItemsSalesPricesIdNamesLangDelete) | **DELETE** /rest/items/sales_prices/{id}/names/{lang} | Delete a sales price name |
| [**restItemsSalesPricesIdNamesLangGet()**](ItemApi.md#restItemsSalesPricesIdNamesLangGet) | **GET** /rest/items/sales_prices/{id}/names/{lang} | Gets a sales price name |
| [**restItemsSalesPricesIdNamesLangPut()**](ItemApi.md#restItemsSalesPricesIdNamesLangPut) | **PUT** /rest/items/sales_prices/{id}/names/{lang} | Update a sales price name |
| [**restItemsSalesPricesIdNamesPost()**](ItemApi.md#restItemsSalesPricesIdNamesPost) | **POST** /rest/items/sales_prices/{id}/names | Create a sales price name |
| [**restItemsSalesPricesIdOnlineStoresGet()**](ItemApi.md#restItemsSalesPricesIdOnlineStoresGet) | **GET** /rest/items/sales_prices/{id}/online_stores | List activated clients (stores) |
| [**restItemsSalesPricesIdOnlineStoresPost()**](ItemApi.md#restItemsSalesPricesIdOnlineStoresPost) | **POST** /rest/items/sales_prices/{id}/online_stores | Activate a client (store) |
| [**restItemsSalesPricesIdOnlineStoresWebstoreIdDelete()**](ItemApi.md#restItemsSalesPricesIdOnlineStoresWebstoreIdDelete) | **DELETE** /rest/items/sales_prices/{id}/online_stores/{webstoreId} | Deactivate a client (store) |
| [**restItemsSalesPricesIdPut()**](ItemApi.md#restItemsSalesPricesIdPut) | **PUT** /rest/items/sales_prices/{id} | Update a sales price |
| [**restItemsSalesPricesIdReferrersGet()**](ItemApi.md#restItemsSalesPricesIdReferrersGet) | **GET** /rest/items/sales_prices/{id}/referrers | List activated referrers |
| [**restItemsSalesPricesIdReferrersPost()**](ItemApi.md#restItemsSalesPricesIdReferrersPost) | **POST** /rest/items/sales_prices/{id}/referrers | Activate a referrer |
| [**restItemsSalesPricesIdReferrersReferrerIdDelete()**](ItemApi.md#restItemsSalesPricesIdReferrersReferrerIdDelete) | **DELETE** /rest/items/sales_prices/{id}/referrers/{referrerId} | Deactivates a referrer |
| [**restItemsSalesPricesPost()**](ItemApi.md#restItemsSalesPricesPost) | **POST** /rest/items/sales_prices | Create a sales price |
| [**restItemsUnitsGet()**](ItemApi.md#restItemsUnitsGet) | **GET** /rest/items/units | List units |
| [**restItemsUnitsIdDelete()**](ItemApi.md#restItemsUnitsIdDelete) | **DELETE** /rest/items/units/{id} | Delete a unit |
| [**restItemsUnitsIdGet()**](ItemApi.md#restItemsUnitsIdGet) | **GET** /rest/items/units/{id} | Get a unit |
| [**restItemsUnitsIdNamesGet()**](ItemApi.md#restItemsUnitsIdNamesGet) | **GET** /rest/items/units/{id}/names | List unit names |
| [**restItemsUnitsIdNamesLangDelete()**](ItemApi.md#restItemsUnitsIdNamesLangDelete) | **DELETE** /rest/items/units/{id}/names/{lang} | Delete a unit name |
| [**restItemsUnitsIdNamesLangGet()**](ItemApi.md#restItemsUnitsIdNamesLangGet) | **GET** /rest/items/units/{id}/names/{lang} | Get a unit name |
| [**restItemsUnitsIdNamesLangPut()**](ItemApi.md#restItemsUnitsIdNamesLangPut) | **PUT** /rest/items/units/{id}/names/{lang} | Update a unit name |
| [**restItemsUnitsIdNamesPost()**](ItemApi.md#restItemsUnitsIdNamesPost) | **POST** /rest/items/units/{id}/names | Create a unit name |
| [**restItemsUnitsIdPut()**](ItemApi.md#restItemsUnitsIdPut) | **PUT** /rest/items/units/{id} | Update a unit |
| [**restItemsUnitsPost()**](ItemApi.md#restItemsUnitsPost) | **POST** /rest/items/units | Create a unit |
| [**restItemsVariationsGet()**](ItemApi.md#restItemsVariationsGet) | **GET** /rest/items/variations | Search variations |
| [**restItemsVariationsPut()**](ItemApi.md#restItemsVariationsPut) | **PUT** /rest/items/variations | Update up to 50 variations |
| [**restItemsVariationsVariationCategoriesPost()**](ItemApi.md#restItemsVariationsVariationCategoriesPost) | **POST** /rest/items/variations/variation_categories | Bulk create category links |
| [**restItemsVariationsVariationCategoriesPut()**](ItemApi.md#restItemsVariationsVariationCategoriesPut) | **PUT** /rest/items/variations/variation_categories | Bulk update category links |
| [**restItemsVariationsVariationMarketsGet()**](ItemApi.md#restItemsVariationsVariationMarketsGet) | **GET** /rest/items/variations/variation_markets | List all links between variations and markets |
| [**restItemsVariationsVariationMarketsPost()**](ItemApi.md#restItemsVariationsVariationMarketsPost) | **POST** /rest/items/variations/variation_markets | Create up to 50 links between variations and markets |
| [**restItemsVariationsVariationPropertiesPost()**](ItemApi.md#restItemsVariationsVariationPropertiesPost) | **POST** /rest/items/variations/variation_properties | Bulk update properties |
| [**restItemsVariationsVariationPropertiesPut()**](ItemApi.md#restItemsVariationsVariationPropertiesPut) | **PUT** /rest/items/variations/variation_properties | Bulk update properties |
| [**restItemsVariationsVariationSalesPricesGet()**](ItemApi.md#restItemsVariationsVariationSalesPricesGet) | **GET** /rest/items/variations/variation_sales_prices | Get all sales price relations |
| [**restItemsVariationsVariationSalesPricesPost()**](ItemApi.md#restItemsVariationsVariationSalesPricesPost) | **POST** /rest/items/variations/variation_sales_prices | Bulk create prices |
| [**restItemsVariationsVariationSalesPricesPut()**](ItemApi.md#restItemsVariationsVariationSalesPricesPut) | **PUT** /rest/items/variations/variation_sales_prices | Bulk update prices |


## `restAvailabilitiesGet()`

```php
restAvailabilitiesGet(): \ck/plenty-client\Model\Availability[]
```

List item availabilities

Lists all item availabilities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAvailabilitiesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restAvailabilitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\Availability[]**](../Model/Availability.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAvailabilitiesIdGet()`

```php
restAvailabilitiesIdGet($id): \ck/plenty-client\Model\Availability
```

Get an item availability

Gets an item availability. The ID of the availability must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restAvailabilitiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restAvailabilitiesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\Availability**](../Model/Availability.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAvailabilitiesIdPut()`

```php
restAvailabilitiesIdPut($id, $_rest_availabilities_id): \ck/plenty-client\Model\Availability
```

Update an item availability

Updates an item availability.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_availabilities_id = new \ck/plenty-client\Model\RestAvailabilitiesIdPutRequest(); // \ck/plenty-client\Model\RestAvailabilitiesIdPutRequest

try {
    $result = $apiInstance->restAvailabilitiesIdPut($id, $_rest_availabilities_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restAvailabilitiesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_availabilities_id** | [**\ck/plenty-client\Model\RestAvailabilitiesIdPutRequest**](../Model/RestAvailabilitiesIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Availability**](../Model/Availability.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsDelete()`

```php
restItemSetsDelete(): \ck/plenty-client\Model\ItemSet[]
```

Delete item sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemSetsDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\ItemSet[]**](../Model/ItemSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsGet()`

```php
restItemSetsGet(): \ck/plenty-client\Model\ItemSet[]
```

List item sets

Lists all item sets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemSetsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\ItemSet[]**](../Model/ItemSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsIdDelete()`

```php
restItemSetsIdDelete($id): object
```

Delete an item set

Deletes an item set. The item ID of the item set must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemSetsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsIdGet()`

```php
restItemSetsIdGet($id): \ck/plenty-client\Model\ItemSet
```

Get an item set

Gets the configuration of an item set. The item ID of the item set must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemSetsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemSet**](../Model/ItemSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsIdPut()`

```php
restItemSetsIdPut($id): \ck/plenty-client\Model\ItemSet
```

Update an item set

Updates an item set. The item ID of the item set must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemSetsIdPut($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemSet**](../Model/ItemSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsPost()`

```php
restItemSetsPost($params): \ck/plenty-client\Model\ItemSet
```

Create item sets

Creates item Sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$params = 56; // int | includes the item sets that have to be created

try {
    $result = $apiInstance->restItemSetsPost($params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **params** | **int**| includes the item sets that have to be created | [optional] |

### Return type

[**\ck/plenty-client\Model\ItemSet**](../Model/ItemSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsPut()`

```php
restItemSetsPut(): \ck/plenty-client\Model\ItemSet[]
```

Update item sets

Updates item sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemSetsPut();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\ItemSet[]**](../Model/ItemSet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsSetIdComponentsDelete()`

```php
restItemSetsSetIdComponentsDelete($set_id): \ck/plenty-client\Model\ItemSetComponent
```

Delete item set components

Deletes item set components. The ID of the set and the component must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int

try {
    $result = $apiInstance->restItemSetsSetIdComponentsDelete($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdComponentsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemSetComponent**](../Model/ItemSetComponent.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsSetIdComponentsGet()`

```php
restItemSetsSetIdComponentsGet($set_id): \ck/plenty-client\Model\ItemSetComponent[]
```

List item set components of an item set

Lists the item set components of an item set. The ID of the item set must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int

try {
    $result = $apiInstance->restItemSetsSetIdComponentsGet($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdComponentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemSetComponent[]**](../Model/ItemSetComponent.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsSetIdComponentsIdDelete()`

```php
restItemSetsSetIdComponentsIdDelete($set_id, $id): object
```

Delete an item set component

Deletes an item set component. The item set component ID of the item set component must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int
$id = 56; // int

try {
    $result = $apiInstance->restItemSetsSetIdComponentsIdDelete($set_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdComponentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |
| **id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsSetIdComponentsIdGet()`

```php
restItemSetsSetIdComponentsIdGet($set_id, $id): \ck/plenty-client\Model\ItemSetComponent
```

Get an item set component

Gets an item set component. The ID of the component and the set must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int
$id = 56; // int

try {
    $result = $apiInstance->restItemSetsSetIdComponentsIdGet($set_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdComponentsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemSetComponent**](../Model/ItemSetComponent.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsSetIdComponentsIdPut()`

```php
restItemSetsSetIdComponentsIdPut($set_id, $id): \ck/plenty-client\Model\ItemSetComponent
```

Update an item set component

Updates an item set component. The ID of the set and the component must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int
$id = 56; // int

try {
    $result = $apiInstance->restItemSetsSetIdComponentsIdPut($set_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdComponentsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemSetComponent**](../Model/ItemSetComponent.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsSetIdComponentsPost()`

```php
restItemSetsSetIdComponentsPost($set_id): \ck/plenty-client\Model\ItemSetComponent
```

Create item set components

Creates item set components. The id of the set must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int

try {
    $result = $apiInstance->restItemSetsSetIdComponentsPost($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdComponentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemSetComponent**](../Model/ItemSetComponent.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsSetIdComponentsPut()`

```php
restItemSetsSetIdComponentsPut($set_id): \ck/plenty-client\Model\ItemSetComponent
```

Update item set components

Updates item set components. The id of the set must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int

try {
    $result = $apiInstance->restItemSetsSetIdComponentsPut($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdComponentsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemSetComponent**](../Model/ItemSetComponent.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsSetIdConfigGet()`

```php
restItemSetsSetIdConfigGet($set_id): \ck/plenty-client\Model\ItemSetConfig
```

Get the item set configuration of an item set

Gets the item set configuration of an item set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int

try {
    $result = $apiInstance->restItemSetsSetIdConfigGet($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemSetConfig**](../Model/ItemSetConfig.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemSetsSetIdConfigPut()`

```php
restItemSetsSetIdConfigPut($set_id): \ck/plenty-client\Model\ItemSetConfig
```

Update an item set configuration

Updates an item set configuration. The id of the item set must be specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = 56; // int

try {
    $result = $apiInstance->restItemSetsSetIdConfigPut($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemSetsSetIdConfigPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemSetConfig**](../Model/ItemSetConfig.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributeValuesValueIdNamesGet()`

```php
restItemsAttributeValuesValueIdNamesGet($value_id): \ck/plenty-client\Model\AttributeValueName[]
```

Get name and language for an attribute value ID

Gets name and language for an attribute value ID. The attribute value ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_id = 56; // int

try {
    $result = $apiInstance->restItemsAttributeValuesValueIdNamesGet($value_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributeValuesValueIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\AttributeValueName[]**](../Model/AttributeValueName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributeValuesValueIdNamesLangDelete()`

```php
restItemsAttributeValuesValueIdNamesLangDelete($value_id, $lang): object
```

Delete an attribute value name

Deletes an attribute value name. The attribute value ID and language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsAttributeValuesValueIdNamesLangDelete($value_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributeValuesValueIdNamesLangDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value_id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributeValuesValueIdNamesLangGet()`

```php
restItemsAttributeValuesValueIdNamesLangGet($value_id, $lang): \ck/plenty-client\Model\AttributeValueName
```

Get an attribute value name

Gets the attribute value name. The attribute value ID and language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsAttributeValuesValueIdNamesLangGet($value_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributeValuesValueIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value_id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\AttributeValueName**](../Model/AttributeValueName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributeValuesValueIdNamesLangPut()`

```php
restItemsAttributeValuesValueIdNamesLangPut($value_id, $lang, $_rest_items_attribute_values_value_id_names_lang): \ck/plenty-client\Model\AttributeValueName
```

Update an attribute value name

Updates an attribute value name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_id = 56; // int
$lang = 56; // int
$_rest_items_attribute_values_value_id_names_lang = new \ck/plenty-client\Model\RestItemsAttributeValuesValueIdNamesPostRequest(); // \ck/plenty-client\Model\RestItemsAttributeValuesValueIdNamesPostRequest

try {
    $result = $apiInstance->restItemsAttributeValuesValueIdNamesLangPut($value_id, $lang, $_rest_items_attribute_values_value_id_names_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributeValuesValueIdNamesLangPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value_id** | **int**|  | |
| **lang** | **int**|  | |
| **_rest_items_attribute_values_value_id_names_lang** | [**\ck/plenty-client\Model\RestItemsAttributeValuesValueIdNamesPostRequest**](../Model/RestItemsAttributeValuesValueIdNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\AttributeValueName**](../Model/AttributeValueName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributeValuesValueIdNamesPost()`

```php
restItemsAttributeValuesValueIdNamesPost($value_id, $_rest_items_attribute_values_value_id_names): \ck/plenty-client\Model\AttributeValueName
```

Create an attribute value name

Creates an attribute value name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value_id = 56; // int
$_rest_items_attribute_values_value_id_names = new \ck/plenty-client\Model\RestItemsAttributeValuesValueIdNamesPostRequest(); // \ck/plenty-client\Model\RestItemsAttributeValuesValueIdNamesPostRequest

try {
    $result = $apiInstance->restItemsAttributeValuesValueIdNamesPost($value_id, $_rest_items_attribute_values_value_id_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributeValuesValueIdNamesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value_id** | **int**|  | |
| **_rest_items_attribute_values_value_id_names** | [**\ck/plenty-client\Model\RestItemsAttributeValuesValueIdNamesPostRequest**](../Model/RestItemsAttributeValuesValueIdNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\AttributeValueName**](../Model/AttributeValueName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdMarketsMarketIdMapsDelete()`

```php
restItemsAttributesAttributeIdMarketsMarketIdMapsDelete($attribute_id, $market_id): object
```

Deletes an attribute map.

Deletes an attribute map. The ID of the attribute and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$market_id = 56; // int

try {
    $result = $apiInstance->restItemsAttributesAttributeIdMarketsMarketIdMapsDelete($attribute_id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdMarketsMarketIdMapsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **market_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdMarketsMarketIdMapsGet()`

```php
restItemsAttributesAttributeIdMarketsMarketIdMapsGet($attribute_id, $market_id): \ck/plenty-client\Model\AttributeMap
```

Gets an attribute map.

Gets an attribute map. The ID of the attribute and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$market_id = 56; // int

try {
    $result = $apiInstance->restItemsAttributesAttributeIdMarketsMarketIdMapsGet($attribute_id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdMarketsMarketIdMapsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **market_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\AttributeMap**](../Model/AttributeMap.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdMarketsMarketIdMapsPut()`

```php
restItemsAttributesAttributeIdMarketsMarketIdMapsPut($attribute_id, $market_id): \ck/plenty-client\Model\AttributeMap
```

Updates an attribute map.

Updates an attribute map. The ID of the attribute and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$market_id = 56; // int

try {
    $result = $apiInstance->restItemsAttributesAttributeIdMarketsMarketIdMapsPut($attribute_id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdMarketsMarketIdMapsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **market_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\AttributeMap**](../Model/AttributeMap.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdNamesGet()`

```php
restItemsAttributesAttributeIdNamesGet($attribute_id): \ck/plenty-client\Model\AttributeName[]
```

Get an attribute name

Gets the attribute name in the specified language. The language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int

try {
    $result = $apiInstance->restItemsAttributesAttributeIdNamesGet($attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\AttributeName[]**](../Model/AttributeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdNamesLangDelete()`

```php
restItemsAttributesAttributeIdNamesLangDelete($attribute_id, $lang): object
```

Delete an attribute name

Deletes the attribute name in the specified language. The language code and attribute name must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsAttributesAttributeIdNamesLangDelete($attribute_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdNamesLangDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdNamesLangGet()`

```php
restItemsAttributesAttributeIdNamesLangGet($attribute_id, $lang): \ck/plenty-client\Model\AttributeName
```

List attribute names

Lists the attribute names of an attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsAttributesAttributeIdNamesLangGet($attribute_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\AttributeName**](../Model/AttributeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdNamesLangPut()`

```php
restItemsAttributesAttributeIdNamesLangPut($attribute_id, $lang, $_rest_items_attributes_attribute_id_names_lang): \ck/plenty-client\Model\AttributeName
```

Update an attribute name

Updates the attribute name in the specified language. The language code and attribute name must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$lang = 56; // int
$_rest_items_attributes_attribute_id_names_lang = new \ck/plenty-client\Model\RestItemsAttributesAttributeIdNamesPostRequest(); // \ck/plenty-client\Model\RestItemsAttributesAttributeIdNamesPostRequest

try {
    $result = $apiInstance->restItemsAttributesAttributeIdNamesLangPut($attribute_id, $lang, $_rest_items_attributes_attribute_id_names_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdNamesLangPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **lang** | **int**|  | |
| **_rest_items_attributes_attribute_id_names_lang** | [**\ck/plenty-client\Model\RestItemsAttributesAttributeIdNamesPostRequest**](../Model/RestItemsAttributesAttributeIdNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\AttributeName**](../Model/AttributeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdNamesPost()`

```php
restItemsAttributesAttributeIdNamesPost($attribute_id, $_rest_items_attributes_attribute_id_names): \ck/plenty-client\Model\AttributeName
```

Create an attribute name

Creates an attribute name in the specified language. The language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$_rest_items_attributes_attribute_id_names = new \ck/plenty-client\Model\RestItemsAttributesAttributeIdNamesPostRequest(); // \ck/plenty-client\Model\RestItemsAttributesAttributeIdNamesPostRequest

try {
    $result = $apiInstance->restItemsAttributesAttributeIdNamesPost($attribute_id, $_rest_items_attributes_attribute_id_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdNamesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **_rest_items_attributes_attribute_id_names** | [**\ck/plenty-client\Model\RestItemsAttributesAttributeIdNamesPostRequest**](../Model/RestItemsAttributesAttributeIdNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\AttributeName**](../Model/AttributeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdValueMarketNamesGet()`

```php
restItemsAttributesAttributeIdValueMarketNamesGet($attribute_id, $reference_type, $lang, $page, $items_per_page): \ck/plenty-client\Model\RestItemsAttributesAttributeIdValueMarketNamesGet200Response
```

Search attribute value market names

Searches the delete log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$reference_type = 'reference_type_example'; // string
$lang = 'lang_example'; // string
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The number of items to list per page

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValueMarketNamesGet($attribute_id, $reference_type, $lang, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValueMarketNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **reference_type** | **string**|  | [optional] |
| **lang** | **string**|  | [optional] |
| **page** | **int**| The page of results to search for | [optional] |
| **items_per_page** | **int**| The number of items to list per page | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsAttributesAttributeIdValueMarketNamesGet200Response**](../Model/RestItemsAttributesAttributeIdValueMarketNamesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdValueMarketNamesPost()`

```php
restItemsAttributesAttributeIdValueMarketNamesPost($attribute_id, $_rest_items_attributes_attribute_id_value_market_names): \ck/plenty-client\Model\AttributeValueMarketName
```

Create an attribute value market name

Creates an attribute value market name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$_rest_items_attributes_attribute_id_value_market_names = new \ck/plenty-client\Model\RestItemsAttributesAttributeIdValueMarketNamesPostRequest(); // \ck/plenty-client\Model\RestItemsAttributesAttributeIdValueMarketNamesPostRequest

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValueMarketNamesPost($attribute_id, $_rest_items_attributes_attribute_id_value_market_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValueMarketNamesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **_rest_items_attributes_attribute_id_value_market_names** | [**\ck/plenty-client\Model\RestItemsAttributesAttributeIdValueMarketNamesPostRequest**](../Model/RestItemsAttributesAttributeIdValueMarketNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\AttributeValueMarketName**](../Model/AttributeValueMarketName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypeDelete()`

```php
restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypeDelete($attribute_id, $value_id, $lang, $reference_type): object
```

Delete an attribute value market name

Deletes an attribute value market name. The attribute value ID and language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$value_id = 56; // int
$lang = 56; // int
$reference_type = 56; // int

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypeDelete($attribute_id, $value_id, $lang, $reference_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **value_id** | **int**|  | |
| **lang** | **int**|  | |
| **reference_type** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypePut()`

```php
restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypePut($attribute_id, $value_id, $lang, $reference_type, $_rest_items_attributes_attribute_id_value_market_names_value_id_lang_reference_type): \ck/plenty-client\Model\AttributeValueMarketName
```

Update an attribute value market name

Updates an attribute value market name. The attribute value ID and language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$value_id = 56; // int
$lang = 56; // int
$reference_type = 56; // int
$_rest_items_attributes_attribute_id_value_market_names_value_id_lang_reference_type = new \ck/plenty-client\Model\RestItemsAttributesAttributeIdValueMarketNamesPostRequest(); // \ck/plenty-client\Model\RestItemsAttributesAttributeIdValueMarketNamesPostRequest

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypePut($attribute_id, $value_id, $lang, $reference_type, $_rest_items_attributes_attribute_id_value_market_names_value_id_lang_reference_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **value_id** | **int**|  | |
| **lang** | **int**|  | |
| **reference_type** | **int**|  | |
| **_rest_items_attributes_attribute_id_value_market_names_value_id_lang_reference_type** | [**\ck/plenty-client\Model\RestItemsAttributesAttributeIdValueMarketNamesPostRequest**](../Model/RestItemsAttributesAttributeIdValueMarketNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\AttributeValueMarketName**](../Model/AttributeValueMarketName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsDelete()`

```php
restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsDelete($attribute_id, $attribute_value_id, $market_id): object
```

Deletes an attribute value map.

Deletes an attribute value map. The ID of the attribute, the ID of the attribute value and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$attribute_value_id = 56; // int
$market_id = 56; // int

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsDelete($attribute_id, $attribute_value_id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **attribute_value_id** | **int**|  | |
| **market_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsGet()`

```php
restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsGet($attribute_id, $attribute_value_id, $market_id): \ck/plenty-client\Model\AttributeValueMap
```

Gets an attribute value map.

Gets an attribute value map. The ID of the attribute, the ID of the attribute value and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$attribute_value_id = 56; // int
$market_id = 56; // int

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsGet($attribute_id, $attribute_value_id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **attribute_value_id** | **int**|  | |
| **market_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\AttributeValueMap**](../Model/AttributeValueMap.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsPut()`

```php
restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsPut($attribute_id, $attribute_value_id, $market_id): \ck/plenty-client\Model\AttributeValueMap
```

Updates an attribute value map.

Updates an attribute value map. The ID of the attribute, the ID of the attribute value and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$attribute_value_id = 56; // int
$market_id = 56; // int

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsPut($attribute_id, $attribute_value_id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **attribute_value_id** | **int**|  | |
| **market_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\AttributeValueMap**](../Model/AttributeValueMap.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdValuesGet()`

```php
restItemsAttributesAttributeIdValuesGet($attribute_id, $with, $updated_at): \ck/plenty-client\Model\RestItemsAttributesAttributeIdValuesGet200Response
```

List attribute values

Lists the attribute values for an attribute. The attribute ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$with = 'with_example'; // string | Includes the specified attribute value information in the results. The following parameters are available:<ul><li>attribute = The attribute of the value</li><li>names = The attribute value names in all languages</li><li>marketNames = The market attribute value links (amazon only)</li><li>valueMaps = The market attribute value links (amazon excluded)</li></ul>
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesGet($attribute_id, $with, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **with** | **string**| Includes the specified attribute value information in the results. The following parameters are available:&lt;ul&gt;&lt;li&gt;attribute &#x3D; The attribute of the value&lt;/li&gt;&lt;li&gt;names &#x3D; The attribute value names in all languages&lt;/li&gt;&lt;li&gt;marketNames &#x3D; The market attribute value links (amazon only)&lt;/li&gt;&lt;li&gt;valueMaps &#x3D; The market attribute value links (amazon excluded)&lt;/li&gt;&lt;/ul&gt; | [optional] |
| **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsAttributesAttributeIdValuesGet200Response**](../Model/RestItemsAttributesAttributeIdValuesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdValuesIdDelete()`

```php
restItemsAttributesAttributeIdValuesIdDelete($attribute_id, $id): object
```

Delete an attribute value

Deletes an attribute value. The attribute ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$id = 56; // int

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesIdDelete($attribute_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdValuesIdGet()`

```php
restItemsAttributesAttributeIdValuesIdGet($attribute_id, $id, $with): \ck/plenty-client\Model\AttributeValue
```

Get an attribute value

Get an attribute value. The ID of the attribute value must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$id = 56; // int
$with = 'with_example'; // string | Includes the specified attribute value information in the results. The following parameters are available:<ul><li>attribute = The attribute of the value</li><li>names = The attribute value names in all languages</li><li>marketNames = The market attribute value links (amazon only)</li><li>valueMaps = The market attribute links (amazon excluded)</li></ul>

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesIdGet($attribute_id, $id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **id** | **int**|  | |
| **with** | **string**| Includes the specified attribute value information in the results. The following parameters are available:&lt;ul&gt;&lt;li&gt;attribute &#x3D; The attribute of the value&lt;/li&gt;&lt;li&gt;names &#x3D; The attribute value names in all languages&lt;/li&gt;&lt;li&gt;marketNames &#x3D; The market attribute value links (amazon only)&lt;/li&gt;&lt;li&gt;valueMaps &#x3D; The market attribute links (amazon excluded)&lt;/li&gt;&lt;/ul&gt; | [optional] |

### Return type

[**\ck/plenty-client\Model\AttributeValue**](../Model/AttributeValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdValuesIdPut()`

```php
restItemsAttributesAttributeIdValuesIdPut($attribute_id, $id, $_rest_items_attributes_attribute_id_values_id): \ck/plenty-client\Model\AttributeValue
```

Update an attribute value

Updates an attribute value. The attribute value must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$id = 56; // int
$_rest_items_attributes_attribute_id_values_id = new \ck/plenty-client\Model\RestItemsAttributesAttributeIdValuesPostRequest(); // \ck/plenty-client\Model\RestItemsAttributesAttributeIdValuesPostRequest

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesIdPut($attribute_id, $id, $_rest_items_attributes_attribute_id_values_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **id** | **int**|  | |
| **_rest_items_attributes_attribute_id_values_id** | [**\ck/plenty-client\Model\RestItemsAttributesAttributeIdValuesPostRequest**](../Model/RestItemsAttributesAttributeIdValuesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\AttributeValue**](../Model/AttributeValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesAttributeIdValuesPost()`

```php
restItemsAttributesAttributeIdValuesPost($attribute_id, $_rest_items_attributes_attribute_id_values): \ck/plenty-client\Model\AttributeValue
```

Create an attribute value

Creates an attribute value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 56; // int
$_rest_items_attributes_attribute_id_values = new \ck/plenty-client\Model\RestItemsAttributesAttributeIdValuesPostRequest(); // \ck/plenty-client\Model\RestItemsAttributesAttributeIdValuesPostRequest

try {
    $result = $apiInstance->restItemsAttributesAttributeIdValuesPost($attribute_id, $_rest_items_attributes_attribute_id_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesAttributeIdValuesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **int**|  | |
| **_rest_items_attributes_attribute_id_values** | [**\ck/plenty-client\Model\RestItemsAttributesAttributeIdValuesPostRequest**](../Model/RestItemsAttributesAttributeIdValuesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\AttributeValue**](../Model/AttributeValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesGet()`

```php
restItemsAttributesGet($with, $updated_at): \ck/plenty-client\Model\RestItemsAttributesGet200Response
```

List attributes

Lists all attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified attribute information in the results. The following parameters are available: <ul><li>names</b> = The names of the attribute</li><li>values</b> = The values of the attribute</li><li>maps</b> = The market maps of the attribute</li></ul> More than one parameter should be separated by commas.
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restItemsAttributesGet($with, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified attribute information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;names&lt;/b&gt; &#x3D; The names of the attribute&lt;/li&gt;&lt;li&gt;values&lt;/b&gt; &#x3D; The values of the attribute&lt;/li&gt;&lt;li&gt;maps&lt;/b&gt; &#x3D; The market maps of the attribute&lt;/li&gt;&lt;/ul&gt; More than one parameter should be separated by commas. | [optional] |
| **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsAttributesGet200Response**](../Model/RestItemsAttributesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesIdDelete()`

```php
restItemsAttributesIdDelete($id): object
```

Delete an attribute

Deletes an attribute. The ID of the attribute must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsAttributesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesIdGet()`

```php
restItemsAttributesIdGet($id, $with): \ck/plenty-client\Model\Attribute
```

Get an attribute

Gets an attribute. The ID of the attribute must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$with = 'with_example'; // string | Includes the specified attribute information in the results. The following parameters are available: <ul><li>names</b> = The names of the attribute</li><li>values</b> = The values of the attribute</li><li>maps</b> = The market maps of the attribute</li></ul> More than one parameter should be separated by commas.

try {
    $result = $apiInstance->restItemsAttributesIdGet($id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **with** | **string**| Includes the specified attribute information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;names&lt;/b&gt; &#x3D; The names of the attribute&lt;/li&gt;&lt;li&gt;values&lt;/b&gt; &#x3D; The values of the attribute&lt;/li&gt;&lt;li&gt;maps&lt;/b&gt; &#x3D; The market maps of the attribute&lt;/li&gt;&lt;/ul&gt; More than one parameter should be separated by commas. | [optional] |

### Return type

[**\ck/plenty-client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesIdPut()`

```php
restItemsAttributesIdPut($id, $_rest_items_attributes_id): \ck/plenty-client\Model\Attribute
```

Update an attribute

Updates an attribute. The ID of the attribute must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_attributes_id = new \ck/plenty-client\Model\RestItemsAttributesPostRequest(); // \ck/plenty-client\Model\RestItemsAttributesPostRequest

try {
    $result = $apiInstance->restItemsAttributesIdPut($id, $_rest_items_attributes_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_attributes_id** | [**\ck/plenty-client\Model\RestItemsAttributesPostRequest**](../Model/RestItemsAttributesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesMapsGet()`

```php
restItemsAttributesMapsGet(): \ck/plenty-client\Model\RestAccountsContactsSalesRepresentativeRegionsGet200Response
```

Lists all attribute maps.

Lists all attribute maps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemsAttributesMapsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesMapsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\RestAccountsContactsSalesRepresentativeRegionsGet200Response**](../Model/RestAccountsContactsSalesRepresentativeRegionsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesMarketsMapsPost()`

```php
restItemsAttributesMarketsMapsPost($_rest_items_attributes_markets_maps): \ck/plenty-client\Model\AttributeMap
```

Creates a new attribute map.

Creates a new attribute map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_attributes_markets_maps = new \ck/plenty-client\Model\RestItemsAttributesMarketsMapsPostRequest(); // \ck/plenty-client\Model\RestItemsAttributesMarketsMapsPostRequest

try {
    $result = $apiInstance->restItemsAttributesMarketsMapsPost($_rest_items_attributes_markets_maps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesMarketsMapsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_attributes_markets_maps** | [**\ck/plenty-client\Model\RestItemsAttributesMarketsMapsPostRequest**](../Model/RestItemsAttributesMarketsMapsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\AttributeMap**](../Model/AttributeMap.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesPost()`

```php
restItemsAttributesPost($_rest_items_attributes): \ck/plenty-client\Model\Attribute
```

Create an attribute

Creates an attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_attributes = new \ck/plenty-client\Model\RestItemsAttributesPostRequest(); // \ck/plenty-client\Model\RestItemsAttributesPostRequest

try {
    $result = $apiInstance->restItemsAttributesPost($_rest_items_attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_attributes** | [**\ck/plenty-client\Model\RestItemsAttributesPostRequest**](../Model/RestItemsAttributesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesValuesMapsGet()`

```php
restItemsAttributesValuesMapsGet(): \ck/plenty-client\Model\RestAccountsContactsSalesRepresentativeRegionsGet200Response
```

Lists all attribute value maps.

Lists all attribute value maps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemsAttributesValuesMapsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesValuesMapsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\RestAccountsContactsSalesRepresentativeRegionsGet200Response**](../Model/RestAccountsContactsSalesRepresentativeRegionsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsAttributesValuesMarketsMapsPost()`

```php
restItemsAttributesValuesMarketsMapsPost($_rest_items_attributes_values_markets_maps): \ck/plenty-client\Model\AttributeValueMap
```

Creates a new attribute value map.

Creates a new attribute value map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_attributes_values_markets_maps = new \ck/plenty-client\Model\RestItemsAttributesValuesMarketsMapsPostRequest(); // \ck/plenty-client\Model\RestItemsAttributesValuesMarketsMapsPostRequest

try {
    $result = $apiInstance->restItemsAttributesValuesMarketsMapsPost($_rest_items_attributes_values_markets_maps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsAttributesValuesMarketsMapsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_attributes_values_markets_maps** | [**\ck/plenty-client\Model\RestItemsAttributesValuesMarketsMapsPostRequest**](../Model/RestItemsAttributesValuesMarketsMapsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\AttributeValueMap**](../Model/AttributeValueMap.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsBarcodesBarcodeIdDelete()`

```php
restItemsBarcodesBarcodeIdDelete($barcode_id): object
```

Delete a barcode

Deletes a barcode. The ID of the barcode must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode_id = 56; // int

try {
    $result = $apiInstance->restItemsBarcodesBarcodeIdDelete($barcode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesBarcodeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **barcode_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsBarcodesBarcodeIdGet()`

```php
restItemsBarcodesBarcodeIdGet($barcode_id): \ck/plenty-client\Model\Barcode
```

Get a barcode

Gets a barcode. The ID of the barcode must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode_id = 56; // int

try {
    $result = $apiInstance->restItemsBarcodesBarcodeIdGet($barcode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesBarcodeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **barcode_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\Barcode**](../Model/Barcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsBarcodesBarcodeIdPut()`

```php
restItemsBarcodesBarcodeIdPut($barcode_id, $_rest_items_barcodes_barcode_id): \ck/plenty-client\Model\Barcode
```

Update a barcode

Updates a barcode. The ID of the barcode must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode_id = 56; // int
$_rest_items_barcodes_barcode_id = new \ck/plenty-client\Model\RestItemsBarcodesPostRequest(); // \ck/plenty-client\Model\RestItemsBarcodesPostRequest

try {
    $result = $apiInstance->restItemsBarcodesBarcodeIdPut($barcode_id, $_rest_items_barcodes_barcode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesBarcodeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **barcode_id** | **int**|  | |
| **_rest_items_barcodes_barcode_id** | [**\ck/plenty-client\Model\RestItemsBarcodesPostRequest**](../Model/RestItemsBarcodesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Barcode**](../Model/Barcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsBarcodesBarcodeIdReferrerPost()`

```php
restItemsBarcodesBarcodeIdReferrerPost($barcode_id): \ck/plenty-client\Model\BarcodeLinkReferrer
```

Activate a referrer

Activate a referrer for a barcode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode_id = 56; // int

try {
    $result = $apiInstance->restItemsBarcodesBarcodeIdReferrerPost($barcode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesBarcodeIdReferrerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **barcode_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\BarcodeLinkReferrer**](../Model/BarcodeLinkReferrer.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsBarcodesBarcodeIdReferrerReferrerIdDelete()`

```php
restItemsBarcodesBarcodeIdReferrerReferrerIdDelete($barcode_id, $referrer_id): object
```

Deactivate a referrer

Deactivate a referrer for a barcode. The ID of the barcode and the ID of the referrer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode_id = 56; // int
$referrer_id = 56; // int

try {
    $result = $apiInstance->restItemsBarcodesBarcodeIdReferrerReferrerIdDelete($barcode_id, $referrer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesBarcodeIdReferrerReferrerIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **barcode_id** | **int**|  | |
| **referrer_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsBarcodesGet()`

```php
restItemsBarcodesGet($updated_at): \ck/plenty-client\Model\RestItemsBarcodesGet200Response
```

List barcodes

Lists all barcodes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restItemsBarcodesGet($updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsBarcodesGet200Response**](../Model/RestItemsBarcodesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsBarcodesPost()`

```php
restItemsBarcodesPost($_rest_items_barcodes): \ck/plenty-client\Model\Barcode
```

Create a barcode

Creates a barcode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_barcodes = new \ck/plenty-client\Model\RestItemsBarcodesPostRequest(); // \ck/plenty-client\Model\RestItemsBarcodesPostRequest

try {
    $result = $apiInstance->restItemsBarcodesPost($_rest_items_barcodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_barcodes** | [**\ck/plenty-client\Model\RestItemsBarcodesPostRequest**](../Model/RestItemsBarcodesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Barcode**](../Model/Barcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsBarcodesReferrerReferrerIdGet()`

```php
restItemsBarcodesReferrerReferrerIdGet($referrer_id): \ck/plenty-client\Model\Barcode[]
```

List barcodes by referrer

Lists barcodes linked to the specified referrer. The ID of the referrer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$referrer_id = 56; // int

try {
    $result = $apiInstance->restItemsBarcodesReferrerReferrerIdGet($referrer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesReferrerReferrerIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **referrer_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\Barcode[]**](../Model/Barcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsBarcodesTypeTypeGet()`

```php
restItemsBarcodesTypeTypeGet($type): \ck/plenty-client\Model\Barcode[]
```

List barcodes by type

Lists all barcodes of a specific type. The type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int

try {
    $result = $apiInstance->restItemsBarcodesTypeTypeGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsBarcodesTypeTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\Barcode[]**](../Model/Barcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsGet()`

```php
restItemsGet($with, $lang, $page, $items_per_page, $name, $manufacturer_id, $id, $flag_one, $flag_two, $updated_between, $variation_updated_between, $variation_related_updated_between, $or): \ck/plenty-client\Model\RestItemsGet200Response
```

Search item

Search item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified variation information in the results. The following parameters are available: itemProperties, itemCrossSelling, variations, itemImages, itemShippingProfiles, ebayTitles
$lang = 'lang_example'; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
$page = 56; // int | Limits the results to a specific page. The page number must be specified.
$items_per_page = 56; // int | Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified.
$name = 'name_example'; // string | Filter restricts the list of results to items with the specified item name. An item name must be specified.
$manufacturer_id = 'manufacturer_id_example'; // string | Filter restricts the list of results to items with the specified manufacturerId.
$id = 56; // int | Filter restricts the list of results to items with the specified ID. More than one ID should be separated by commas.
$flag_one = 56; // int | Filter restricts the list of results to items with the specified flagOne.
$flag_two = 56; // int | Filter restricts the list of results to items with the specified flagTwo.
$updated_between = 'updated_between_example'; // string | Filter restricts the list of results to items updated during the specified period. The end date (to) is optional. If no end date is specified, items updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween=1451606400,1456790400 will list items updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween=1451606400 will list items updated since 2016-01-01. The PHP function strtotime is also supported.
$variation_updated_between = 'variation_updated_between_example'; // string | Filter restricts the list of results to items with variations that were updated during the specified period. The end date (to) is optional. If no end date is specified, items with variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween=1451606400,1456790400 will list items with variations that were updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween=1451606400 will list items with variations that were updated since 2016-01-01. The PHP function strtotime is also supported.
$variation_related_updated_between = 'variation_related_updated_between_example'; // string | Filter restricts the list of results to items with variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats.
$or = 'or_example'; // string | Filters can be defined in this param to link them via OR instead of AND. The syntax looks like the following: or=(updatedBetween=1573050718&varitionUpdatedBetween=1573050718). Everything in the brackets is written in the normal URL-Syntax. The or-param can be used multiple times if it is used like this: or[]=(...)&or[]=(...)

try {
    $result = $apiInstance->restItemsGet($with, $lang, $page, $items_per_page, $name, $manufacturer_id, $id, $flag_one, $flag_two, $updated_between, $variation_updated_between, $variation_related_updated_between, $or);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified variation information in the results. The following parameters are available: itemProperties, itemCrossSelling, variations, itemImages, itemShippingProfiles, ebayTitles | [optional] |
| **lang** | **string**| The &lt;a href&#x3D;&#39;https://developers.plentymarkets.com/rest-doc/introduction#countries&#39; target&#x3D;&#39;_blank&#39;&gt;language&lt;/a&gt; of the variation information. | [optional] |
| **page** | **int**| Limits the results to a specific page. The page number must be specified. | [optional] |
| **items_per_page** | **int**| Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified. | [optional] |
| **name** | **string**| Filter restricts the list of results to items with the specified item name. An item name must be specified. | [optional] |
| **manufacturer_id** | **string**| Filter restricts the list of results to items with the specified manufacturerId. | [optional] |
| **id** | **int**| Filter restricts the list of results to items with the specified ID. More than one ID should be separated by commas. | [optional] |
| **flag_one** | **int**| Filter restricts the list of results to items with the specified flagOne. | [optional] |
| **flag_two** | **int**| Filter restricts the list of results to items with the specified flagTwo. | [optional] |
| **updated_between** | **string**| Filter restricts the list of results to items updated during the specified period. The end date (to) is optional. If no end date is specified, items updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween&#x3D;1451606400,1456790400 will list items updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween&#x3D;1451606400 will list items updated since 2016-01-01. The PHP function strtotime is also supported. | [optional] |
| **variation_updated_between** | **string**| Filter restricts the list of results to items with variations that were updated during the specified period. The end date (to) is optional. If no end date is specified, items with variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween&#x3D;1451606400,1456790400 will list items with variations that were updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween&#x3D;1451606400 will list items with variations that were updated since 2016-01-01. The PHP function strtotime is also supported. | [optional] |
| **variation_related_updated_between** | **string**| Filter restricts the list of results to items with variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats. | [optional] |
| **or** | **string**| Filters can be defined in this param to link them via OR instead of AND. The syntax looks like the following: or&#x3D;(updatedBetween&#x3D;1573050718&amp;varitionUpdatedBetween&#x3D;1573050718). Everything in the brackets is written in the normal URL-Syntax. The or-param can be used multiple times if it is used like this: or[]&#x3D;(...)&amp;or[]&#x3D;(...) | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsGet200Response**](../Model/RestItemsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesAttributeValueMarketsGet()`

```php
restItemsIdImagesAttributeValueMarketsGet($id, $image_id, $item_id, $value_id, $attribute_id): object
```

List attribute value image link

Lists the images linked to an attribute value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$image_id = 56; // int | The unique ID of the image
$item_id = 56; // int | The unique ID of the item
$value_id = 56; // int | The unique ID of the attribute value
$attribute_id = 56; // int | The unique ID of the attribute

try {
    $result = $apiInstance->restItemsIdImagesAttributeValueMarketsGet($id, $image_id, $item_id, $value_id, $attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesAttributeValueMarketsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image_id** | **int**| The unique ID of the image | [optional] |
| **item_id** | **int**| The unique ID of the item | [optional] |
| **value_id** | **int**| The unique ID of the attribute value | [optional] |
| **attribute_id** | **int**| The unique ID of the attribute | [optional] |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesGet()`

```php
restItemsIdImagesGet($id, $updated_at): \ck/plenty-client\Model\ItemImage[]
```

List images of an item

Lists all images of an item. The item ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restItemsIdImagesGet($id, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional] |

### Return type

[**\ck/plenty-client\Model\ItemImage[]**](../Model/ItemImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdAttributeValueMarketsPost()`

```php
restItemsIdImagesImageIdAttributeValueMarketsPost($id, $image_id, $_rest_items_id_images_image_id_attribute_value_markets): \ck/plenty-client\Model\AttributeValueImage
```

Create an attribute value image link

Creates a link between an image and an attribute value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$image_id = 56; // int
$_rest_items_id_images_image_id_attribute_value_markets = new \ck/plenty-client\Model\RestItemsIdImagesImageIdAttributeValueMarketsPostRequest(); // \ck/plenty-client\Model\RestItemsIdImagesImageIdAttributeValueMarketsPostRequest

try {
    $result = $apiInstance->restItemsIdImagesImageIdAttributeValueMarketsPost($id, $image_id, $_rest_items_id_images_image_id_attribute_value_markets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdAttributeValueMarketsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image_id** | **int**|  | |
| **_rest_items_id_images_image_id_attribute_value_markets** | [**\ck/plenty-client\Model\RestItemsIdImagesImageIdAttributeValueMarketsPostRequest**](../Model/RestItemsIdImagesImageIdAttributeValueMarketsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\AttributeValueImage**](../Model/AttributeValueImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdAttributeValueMarketsValueIdDelete()`

```php
restItemsIdImagesImageIdAttributeValueMarketsValueIdDelete($image_id, $item_id, $value_id, $id)
```

Delete an attribute value image link

Deletes the link between an image and an attribute value. The attribute ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_id = 56; // int | The unique ID of the image
$item_id = 56; // int | The unique ID of the item
$value_id = 56; // int | The unique ID of the attribute value
$id = 56; // int

try {
    $apiInstance->restItemsIdImagesImageIdAttributeValueMarketsValueIdDelete($image_id, $item_id, $value_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdAttributeValueMarketsValueIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **image_id** | **int**| The unique ID of the image | |
| **item_id** | **int**| The unique ID of the item | |
| **value_id** | **int**| The unique ID of the attribute value | |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdAttributeValueMarketsValueIdGet()`

```php
restItemsIdImagesImageIdAttributeValueMarketsValueIdGet($image_id, $item_id, $value_id, $id): \ck/plenty-client\Model\AttributeValueImage
```

Get an attribute value image link

Gets an attribute value image link. The following IDs must be specified: image ID, item ID and value ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_id = 56; // int | The unique ID of the image
$item_id = 56; // int | The unique ID of the item
$value_id = 56; // int | The unique ID of the value
$id = 56; // int

try {
    $result = $apiInstance->restItemsIdImagesImageIdAttributeValueMarketsValueIdGet($image_id, $item_id, $value_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdAttributeValueMarketsValueIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **image_id** | **int**| The unique ID of the image | |
| **item_id** | **int**| The unique ID of the item | |
| **value_id** | **int**| The unique ID of the value | |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\AttributeValueImage**](../Model/AttributeValueImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdAttributeValueMarketsValueIdPut()`

```php
restItemsIdImagesImageIdAttributeValueMarketsValueIdPut($image_id, $item_id, $value_id, $attribute_id, $id, $_rest_items_id_images_image_id_attribute_value_markets_value_id): \ck/plenty-client\Model\AttributeValueImage
```

Update an attribute value image link

Updates the link between an image and an attribute value. The following IDs must be specified: image ID, item ID and value ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_id = 56; // int | The unique ID of the image
$item_id = 56; // int | The unique ID of the item
$value_id = 56; // int | The unique ID of the attribute value
$attribute_id = 56; // int | The unique ID of the attribute
$id = 56; // int
$_rest_items_id_images_image_id_attribute_value_markets_value_id = new \ck/plenty-client\Model\RestItemsIdImagesImageIdAttributeValueMarketsPostRequest(); // \ck/plenty-client\Model\RestItemsIdImagesImageIdAttributeValueMarketsPostRequest

try {
    $result = $apiInstance->restItemsIdImagesImageIdAttributeValueMarketsValueIdPut($image_id, $item_id, $value_id, $attribute_id, $id, $_rest_items_id_images_image_id_attribute_value_markets_value_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdAttributeValueMarketsValueIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **image_id** | **int**| The unique ID of the image | |
| **item_id** | **int**| The unique ID of the item | |
| **value_id** | **int**| The unique ID of the attribute value | |
| **attribute_id** | **int**| The unique ID of the attribute | |
| **id** | **int**|  | |
| **_rest_items_id_images_image_id_attribute_value_markets_value_id** | [**\ck/plenty-client\Model\RestItemsIdImagesImageIdAttributeValueMarketsPostRequest**](../Model/RestItemsIdImagesImageIdAttributeValueMarketsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\AttributeValueImage**](../Model/AttributeValueImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdAvailabilitiesDelete()`

```php
restItemsIdImagesImageIdAvailabilitiesDelete($id, $image_id, $_rest_items_id_images_image_id_availabilities): object
```

Delete an availability

Delete an availability for a specified value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$image_id = 56; // int
$_rest_items_id_images_image_id_availabilities = new \ck/plenty-client\Model\RestItemsIdImagesImageIdAvailabilitiesPostRequest(); // \ck/plenty-client\Model\RestItemsIdImagesImageIdAvailabilitiesPostRequest

try {
    $result = $apiInstance->restItemsIdImagesImageIdAvailabilitiesDelete($id, $image_id, $_rest_items_id_images_image_id_availabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdAvailabilitiesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image_id** | **int**|  | |
| **_rest_items_id_images_image_id_availabilities** | [**\ck/plenty-client\Model\RestItemsIdImagesImageIdAvailabilitiesPostRequest**](../Model/RestItemsIdImagesImageIdAvailabilitiesPostRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdAvailabilitiesGet()`

```php
restItemsIdImagesImageIdAvailabilitiesGet($id, $image_id): \ck/plenty-client\Model\ItemImageAvailability
```

List availabilities

List all availabilities of an image. The image ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$image_id = 56; // int

try {
    $result = $apiInstance->restItemsIdImagesImageIdAvailabilitiesGet($id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdAvailabilitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemImageAvailability**](../Model/ItemImageAvailability.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdAvailabilitiesPost()`

```php
restItemsIdImagesImageIdAvailabilitiesPost($id, $image_id, $_rest_items_id_images_image_id_availabilities): \ck/plenty-client\Model\ItemImageAvailability
```

Create an availability

Create an availability. The image ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$image_id = 56; // int
$_rest_items_id_images_image_id_availabilities = new \ck/plenty-client\Model\RestItemsIdImagesImageIdAvailabilitiesPostRequest(); // \ck/plenty-client\Model\RestItemsIdImagesImageIdAvailabilitiesPostRequest

try {
    $result = $apiInstance->restItemsIdImagesImageIdAvailabilitiesPost($id, $image_id, $_rest_items_id_images_image_id_availabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdAvailabilitiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image_id** | **int**|  | |
| **_rest_items_id_images_image_id_availabilities** | [**\ck/plenty-client\Model\RestItemsIdImagesImageIdAvailabilitiesPostRequest**](../Model/RestItemsIdImagesImageIdAvailabilitiesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\ItemImageAvailability**](../Model/ItemImageAvailability.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdDelete()`

```php
restItemsIdImagesImageIdDelete($id, $image_id): object
```

Delete an image

Delete an image. The ID of the image must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$image_id = 56; // int

try {
    $result = $apiInstance->restItemsIdImagesImageIdDelete($id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdGet()`

```php
restItemsIdImagesImageIdGet($id, $image_id): \ck/plenty-client\Model\ItemImage
```

Get an image

Gets an image. The ID of the image must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$image_id = 56; // int

try {
    $result = $apiInstance->restItemsIdImagesImageIdGet($id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemImage**](../Model/ItemImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdNamesGet()`

```php
restItemsIdImagesImageIdNamesGet($id, $image_id): \ck/plenty-client\Model\ItemImageName[]
```

List names of an image

Lists all names of an image. The image ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$image_id = 56; // int

try {
    $result = $apiInstance->restItemsIdImagesImageIdNamesGet($id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemImageName[]**](../Model/ItemImageName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdNamesLangDelete()`

```php
restItemsIdImagesImageIdNamesLangDelete($id, $image_id, $lang): object
```

Delete an image name

Delete an image name. The ID and language of the image must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$image_id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsIdImagesImageIdNamesLangDelete($id, $image_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdNamesLangDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image_id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdNamesLangGet()`

```php
restItemsIdImagesImageIdNamesLangGet($id, $image_id, $lang): \ck/plenty-client\Model\ItemImageName
```

Get an image name

Gets an image name. The image ID and language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$image_id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsIdImagesImageIdNamesLangGet($id, $image_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image_id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemImageName**](../Model/ItemImageName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdNamesLangPut()`

```php
restItemsIdImagesImageIdNamesLangPut($id, $image_id, $lang, $_rest_items_id_images_image_id_names_lang): \ck/plenty-client\Model\ItemImageName
```

Update an image name

Update an image name. The ID, language and name of the image must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$image_id = 56; // int
$lang = 56; // int
$_rest_items_id_images_image_id_names_lang = new \ck/plenty-client\Model\RestItemsIdImagesImageIdNamesPostRequest(); // \ck/plenty-client\Model\RestItemsIdImagesImageIdNamesPostRequest

try {
    $result = $apiInstance->restItemsIdImagesImageIdNamesLangPut($id, $image_id, $lang, $_rest_items_id_images_image_id_names_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdNamesLangPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image_id** | **int**|  | |
| **lang** | **int**|  | |
| **_rest_items_id_images_image_id_names_lang** | [**\ck/plenty-client\Model\RestItemsIdImagesImageIdNamesPostRequest**](../Model/RestItemsIdImagesImageIdNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\ItemImageName**](../Model/ItemImageName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdNamesPost()`

```php
restItemsIdImagesImageIdNamesPost($id, $image_id, $_rest_items_id_images_image_id_names): \ck/plenty-client\Model\ItemImageName
```

Create an image name

Create an image name. The ID, language and name of the image must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$image_id = 56; // int
$_rest_items_id_images_image_id_names = new \ck/plenty-client\Model\RestItemsIdImagesImageIdNamesPostRequest(); // \ck/plenty-client\Model\RestItemsIdImagesImageIdNamesPostRequest

try {
    $result = $apiInstance->restItemsIdImagesImageIdNamesPost($id, $image_id, $_rest_items_id_images_image_id_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdNamesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image_id** | **int**|  | |
| **_rest_items_id_images_image_id_names** | [**\ck/plenty-client\Model\RestItemsIdImagesImageIdNamesPostRequest**](../Model/RestItemsIdImagesImageIdNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\ItemImageName**](../Model/ItemImageName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdPut()`

```php
restItemsIdImagesImageIdPut($id, $image_id, $_rest_items_id_images_image_id): \ck/plenty-client\Model\ItemImage
```

Update an image

Updates an image. The ID of the image must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$image_id = 56; // int
$_rest_items_id_images_image_id = new \ck/plenty-client\Model\RestItemsIdImagesImageIdPutRequest(); // \ck/plenty-client\Model\RestItemsIdImagesImageIdPutRequest

try {
    $result = $apiInstance->restItemsIdImagesImageIdPut($id, $image_id, $_rest_items_id_images_image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image_id** | **int**|  | |
| **_rest_items_id_images_image_id** | [**\ck/plenty-client\Model\RestItemsIdImagesImageIdPutRequest**](../Model/RestItemsIdImagesImageIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\ItemImage**](../Model/ItemImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesImageIdVariationImagesGet()`

```php
restItemsIdImagesImageIdVariationImagesGet($id, $image_id): \ck/plenty-client\Model\VariationImage
```

List image links of an image

Lists all variations linked to an image. The image ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$image_id = 56; // int

try {
    $result = $apiInstance->restItemsIdImagesImageIdVariationImagesGet($id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesImageIdVariationImagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationImage**](../Model/VariationImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdImagesUploadPost()`

```php
restItemsIdImagesUploadPost($id, $_rest_items_id_images_upload): \ck/plenty-client\Model\ItemImage
```

Upload a new image

Uploads an image. The item ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_id_images_upload = new \ck/plenty-client\Model\RestItemsIdImagesUploadPostRequest(); // \ck/plenty-client\Model\RestItemsIdImagesUploadPostRequest

try {
    $result = $apiInstance->restItemsIdImagesUploadPost($id, $_rest_items_id_images_upload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdImagesUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_id_images_upload** | [**\ck/plenty-client\Model\RestItemsIdImagesUploadPostRequest**](../Model/RestItemsIdImagesUploadPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\ItemImage**](../Model/ItemImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdItemCrossSellingCrossItemIdDelete()`

```php
restItemsIdItemCrossSellingCrossItemIdDelete($id, $cross_item_id): object
```

Delete a cross-selling link

Deletes a cross-selling link. The ID of the item and the ID of the cross-selling item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$cross_item_id = 56; // int

try {
    $result = $apiInstance->restItemsIdItemCrossSellingCrossItemIdDelete($id, $cross_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdItemCrossSellingCrossItemIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **cross_item_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdItemCrossSellingGet()`

```php
restItemsIdItemCrossSellingGet($id): \ck/plenty-client\Model\ItemCrossSelling
```

List cross-selling links

Lists all cross-selling items linked to an item. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsIdItemCrossSellingGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdItemCrossSellingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemCrossSelling**](../Model/ItemCrossSelling.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdItemCrossSellingPost()`

```php
restItemsIdItemCrossSellingPost($id, $_rest_items_id_item_cross_selling): \ck/plenty-client\Model\ItemCrossSelling
```

Create a cross-selling link

Creates a cross-selling link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_id_item_cross_selling = new \ck/plenty-client\Model\RestItemsIdItemCrossSellingPostRequest(); // \ck/plenty-client\Model\RestItemsIdItemCrossSellingPostRequest

try {
    $result = $apiInstance->restItemsIdItemCrossSellingPost($id, $_rest_items_id_item_cross_selling);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdItemCrossSellingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_id_item_cross_selling** | [**\ck/plenty-client\Model\RestItemsIdItemCrossSellingPostRequest**](../Model/RestItemsIdItemCrossSellingPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\ItemCrossSelling**](../Model/ItemCrossSelling.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationImagesGet()`

```php
restItemsIdVariationImagesGet($id): \ck/plenty-client\Model\VariationImage
```

List image links of an item

Lists all images linked to an item. The item ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationImagesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationImagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationImage**](../Model/VariationImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdDescriptionsGet()`

```php
restItemsIdVariationsVariationIdDescriptionsGet($id, $variation_id): \ck/plenty-client\Model\VariationDescription[]
```

List texts

Lists the texts for an item in all available languages. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdDescriptionsGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdDescriptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationDescription[]**](../Model/VariationDescription.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdDescriptionsLangDelete()`

```php
restItemsIdVariationsVariationIdDescriptionsLangDelete($id, $variation_id, $lang): object
```

Delete texts

Deletes texts for an item in the specified language. The ID of the variation and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdDescriptionsLangDelete($id, $variation_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdDescriptionsLangDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdDescriptionsLangGet()`

```php
restItemsIdVariationsVariationIdDescriptionsLangGet($id, $variation_id, $lang): \ck/plenty-client\Model\VariationDescription
```

Get texts

Gets the texts for an item in the specified language. The ID of the variation and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdDescriptionsLangGet($id, $variation_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdDescriptionsLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationDescription**](../Model/VariationDescription.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdDescriptionsLangPut()`

```php
restItemsIdVariationsVariationIdDescriptionsLangPut($id, $variation_id, $lang, $_rest_items_id_variations_variation_id_descriptions_lang): \ck/plenty-client\Model\VariationDescription
```

Update texts

Updates texts for an item in the specified language. The ID of the variation and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$lang = 56; // int
$_rest_items_id_variations_variation_id_descriptions_lang = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdDescriptionsPostRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdDescriptionsPostRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdDescriptionsLangPut($id, $variation_id, $lang, $_rest_items_id_variations_variation_id_descriptions_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdDescriptionsLangPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **lang** | **int**|  | |
| **_rest_items_id_variations_variation_id_descriptions_lang** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdDescriptionsPostRequest**](../Model/RestItemsIdVariationsVariationIdDescriptionsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationDescription**](../Model/VariationDescription.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdDescriptionsPost()`

```php
restItemsIdVariationsVariationIdDescriptionsPost($id, $variation_id, $_rest_items_id_variations_variation_id_descriptions): \ck/plenty-client\Model\VariationDescription
```

Create texts

Creates texts for an item. The ID of the variation and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$_rest_items_id_variations_variation_id_descriptions = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdDescriptionsPostRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdDescriptionsPostRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdDescriptionsPost($id, $variation_id, $_rest_items_id_variations_variation_id_descriptions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdDescriptionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_descriptions** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdDescriptionsPostRequest**](../Model/RestItemsIdVariationsVariationIdDescriptionsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationDescription**](../Model/VariationDescription.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdImagesGet()`

```php
restItemsIdVariationsVariationIdImagesGet($id, $variation_id): \ck/plenty-client\Model\ItemImage[]
```

List images of a variation

Lists all images of a variation. The variation ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdImagesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdImagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemImage[]**](../Model/ItemImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdLabelsPost()`

```php
restItemsIdVariationsVariationIdLabelsPost($id, $variation_id): object[]
```

Get a variation label

Gets a base64 encoded label for the specified variation ID. The labelId of the label template must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdLabelsPost($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdLabelsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdMarketIdentNumbersGet()`

```php
restItemsIdVariationsVariationIdMarketIdentNumbersGet($id, $variation_id): \ck/plenty-client\Model\VariationMarketIdentNumber[]
```

List ident number of a variation

Lists the ident number (ASIN/ePID) of a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdMarketIdentNumbersGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdMarketIdentNumbersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationMarketIdentNumber[]**](../Model/VariationMarketIdentNumber.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdDelete()`

```php
restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdDelete($id, $variation_id, $market_ident_number_id): object
```

Deletes a market ident number

Deletes a market ident number (ASIN/ePID) of a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$market_ident_number_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdDelete($id, $variation_id, $market_ident_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **market_ident_number_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdGet()`

```php
restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdGet($id, $variation_id, $market_ident_number_id): \ck/plenty-client\Model\VariationMarketIdentNumber
```

Get a market ident number

Gets a market ident number (ASIN/ePID) of a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$market_ident_number_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdGet($id, $variation_id, $market_ident_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **market_ident_number_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationMarketIdentNumber**](../Model/VariationMarketIdentNumber.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdPut()`

```php
restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdPut($id, $variation_id, $market_ident_number_id, $_rest_items_id_variations_variation_id_market_ident_numbers_market_ident_number_id): \ck/plenty-client\Model\VariationMarketIdentNumber
```

Updates a market ident number

Updates a market ident number (ASIN/ePID) of a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$market_ident_number_id = 56; // int
$_rest_items_id_variations_variation_id_market_ident_numbers_market_ident_number_id = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdMarketIdentNumbersPostRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdMarketIdentNumbersPostRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdPut($id, $variation_id, $market_ident_number_id, $_rest_items_id_variations_variation_id_market_ident_numbers_market_ident_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **market_ident_number_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_market_ident_numbers_market_ident_number_id** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdMarketIdentNumbersPostRequest**](../Model/RestItemsIdVariationsVariationIdMarketIdentNumbersPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationMarketIdentNumber**](../Model/VariationMarketIdentNumber.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdMarketIdentNumbersPost()`

```php
restItemsIdVariationsVariationIdMarketIdentNumbersPost($id, $variation_id, $_rest_items_id_variations_variation_id_market_ident_numbers): \ck/plenty-client\Model\VariationMarketIdentNumber
```

Create a market ident number

Creates a market ident number (ASIN/ePID) for a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$_rest_items_id_variations_variation_id_market_ident_numbers = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdMarketIdentNumbersPostRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdMarketIdentNumbersPostRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdMarketIdentNumbersPost($id, $variation_id, $_rest_items_id_variations_variation_id_market_ident_numbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdMarketIdentNumbersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_market_ident_numbers** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdMarketIdentNumbersPostRequest**](../Model/RestItemsIdVariationsVariationIdMarketIdentNumbersPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationMarketIdentNumber**](../Model/VariationMarketIdentNumber.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdStockBookIncomingItemsPut()`

```php
restItemsIdVariationsVariationIdStockBookIncomingItemsPut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_book_incoming_items): \ck/plenty-client\Model\VariationStock[]
```

Book incoming stock

Books incoming stock for a variation. The incoming stock will be added to the existing stock. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation
$id = 56; // int
$_rest_items_id_variations_variation_id_stock_book_incoming_items = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockBookIncomingItemsPutRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockBookIncomingItemsPutRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdStockBookIncomingItemsPut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_book_incoming_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdStockBookIncomingItemsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**| The ID of the item | |
| **variation_id** | **int**| The ID of the variation | |
| **id** | **int**|  | |
| **_rest_items_id_variations_variation_id_stock_book_incoming_items** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockBookIncomingItemsPutRequest**](../Model/RestItemsIdVariationsVariationIdStockBookIncomingItemsPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationStock[]**](../Model/VariationStock.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdStockBookOutgoingItemsPut()`

```php
restItemsIdVariationsVariationIdStockBookOutgoingItemsPut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_book_outgoing_items): \ck/plenty-client\Model\VariationStock[]
```

Book outgoing stock

Books outgoing stock for a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation
$id = 56; // int
$_rest_items_id_variations_variation_id_stock_book_outgoing_items = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockBookOutgoingItemsPutRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockBookOutgoingItemsPutRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdStockBookOutgoingItemsPut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_book_outgoing_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdStockBookOutgoingItemsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**| The ID of the item | |
| **variation_id** | **int**| The ID of the variation | |
| **id** | **int**|  | |
| **_rest_items_id_variations_variation_id_stock_book_outgoing_items** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockBookOutgoingItemsPutRequest**](../Model/RestItemsIdVariationsVariationIdStockBookOutgoingItemsPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationStock[]**](../Model/VariationStock.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdStockCorrectionPut()`

```php
restItemsIdVariationsVariationIdStockCorrectionPut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_correction): \ck/plenty-client\Model\VariationStock[]
```

Correct stock

Corrects stock. The item ID and the variation ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation
$id = 56; // int
$_rest_items_id_variations_variation_id_stock_correction = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockCorrectionPutRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockCorrectionPutRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdStockCorrectionPut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_correction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdStockCorrectionPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**| The ID of the item | |
| **variation_id** | **int**| The ID of the variation | |
| **id** | **int**|  | |
| **_rest_items_id_variations_variation_id_stock_correction** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockCorrectionPutRequest**](../Model/RestItemsIdVariationsVariationIdStockCorrectionPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationStock[]**](../Model/VariationStock.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdStockGet()`

```php
restItemsIdVariationsVariationIdStockGet($item_id, $variation_id, $id, $columns): \ck/plenty-client\Model\VariationStock[]
```

List stock of a variation per warehouse

Lists stock of a variation per warehouse. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation
$id = 56; // int
$columns = 56; // int | The properties to be loaded

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdStockGet($item_id, $variation_id, $id, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdStockGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**| The ID of the item | |
| **variation_id** | **int**| The ID of the variation | |
| **id** | **int**|  | |
| **columns** | **int**| The properties to be loaded | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationStock[]**](../Model/VariationStock.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdStockMovementsGet()`

```php
restItemsIdVariationsVariationIdStockMovementsGet($item_id, $variation_id, $page, $items_per_page, $id, $warehouse_id, $created_at_from, $created_at_to, $year, $columns): \ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockMovementsGet200Response
```

List stock movements

Lists stock movements for a variation. The ID of the item and the ID of the variation must be specified. To get movements older than 3 months, set the 'year' parameter. NOTE: You can either get archive entries or non-archive entries. You can not get entries for the current year that are younger and older than 3 months with one request. You need separate requests to get entries older and younger than 3 months. To get all entries younger than 3 month you do not need to specify a year or any createdAt parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation
$page = 56; // int | The requested page. The default page that will be returned is page 1.
$items_per_page = 56; // int | The number of items per page. The default number per page is 50.
$id = 56; // int
$warehouse_id = 56; // int | The ID of the warehouse
$created_at_from = 'created_at_from_example'; // string | Get entries with createdAt date after this date
$created_at_to = 'created_at_to_example'; // string | Get entries with createdAt date before this date
$year = 56; // int | Get entries from the archive for the given year. All movements older than 3 months are stored in the archive.
$columns = 56; // int | The properties to be loaded

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdStockMovementsGet($item_id, $variation_id, $page, $items_per_page, $id, $warehouse_id, $created_at_from, $created_at_to, $year, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdStockMovementsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**| The ID of the item | |
| **variation_id** | **int**| The ID of the variation | |
| **page** | **int**| The requested page. The default page that will be returned is page 1. | |
| **items_per_page** | **int**| The number of items per page. The default number per page is 50. | |
| **id** | **int**|  | |
| **warehouse_id** | **int**| The ID of the warehouse | [optional] |
| **created_at_from** | **string**| Get entries with createdAt date after this date | [optional] |
| **created_at_to** | **string**| Get entries with createdAt date before this date | [optional] |
| **year** | **int**| Get entries from the archive for the given year. All movements older than 3 months are stored in the archive. | [optional] |
| **columns** | **int**| The properties to be loaded | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockMovementsGet200Response**](../Model/RestItemsIdVariationsVariationIdStockMovementsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdStockRedistributePut()`

```php
restItemsIdVariationsVariationIdStockRedistributePut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_redistribute): \ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockRedistributePut200Response
```

Redistribute stock

Redistributes the stock of one storage location among one or more storage locations. The item ID and the variation ID need to be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation
$id = 56; // int
$_rest_items_id_variations_variation_id_stock_redistribute = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockRedistributePutRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockRedistributePutRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdStockRedistributePut($item_id, $variation_id, $id, $_rest_items_id_variations_variation_id_stock_redistribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdStockRedistributePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**| The ID of the item | |
| **variation_id** | **int**| The ID of the variation | |
| **id** | **int**|  | |
| **_rest_items_id_variations_variation_id_stock_redistribute** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockRedistributePutRequest**](../Model/RestItemsIdVariationsVariationIdStockRedistributePutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockRedistributePut200Response**](../Model/RestItemsIdVariationsVariationIdStockRedistributePut200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdStockStorageLocationsGet()`

```php
restItemsIdVariationsVariationIdStockStorageLocationsGet($item_id, $variation_id, $page, $items_per_page, $id, $columns): \ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockRedistributePut200Response
```

List stock of a variation per storage locations

Lists stock of a variation per storage location. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation
$page = 56; // int | The requested page
$items_per_page = 56; // int | The number of items per page
$id = 56; // int
$columns = 56; // int | The properties to be loaded

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdStockStorageLocationsGet($item_id, $variation_id, $page, $items_per_page, $id, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdStockStorageLocationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**| The ID of the item | |
| **variation_id** | **int**| The ID of the variation | |
| **page** | **int**| The requested page | |
| **items_per_page** | **int**| The number of items per page | |
| **id** | **int**|  | |
| **columns** | **int**| The properties to be loaded | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdStockRedistributePut200Response**](../Model/RestItemsIdVariationsVariationIdStockRedistributePut200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdDelete()`

```php
restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdDelete($id, $variation_id, $additional_sku_id): object
```

Delete an additional SKU

Deletes an additional SKU. The ID of the additional SKU must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$additional_sku_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdDelete($id, $variation_id, $additional_sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **additional_sku_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdGet()`

```php
restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdGet($id, $variation_id, $additional_sku_id): \ck/plenty-client\Model\VariationAdditionalSku
```

Gets an additional SKU

Gets an additional SKU. The ID of the additional SKU must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$additional_sku_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdGet($id, $variation_id, $additional_sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **additional_sku_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationAdditionalSku**](../Model/VariationAdditionalSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdPut()`

```php
restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdPut($id, $variation_id, $additional_sku_id, $_rest_items_id_variations_variation_id_variation_additional_skus_additional_sku_id): \ck/plenty-client\Model\VariationAdditionalSku
```

Update an additional SKU

Updates an additional SKU. The ID of the additional SKU must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$additional_sku_id = 56; // int
$_rest_items_id_variations_variation_id_variation_additional_skus_additional_sku_id = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationAdditionalSkusGetRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationAdditionalSkusGetRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdPut($id, $variation_id, $additional_sku_id, $_rest_items_id_variations_variation_id_variation_additional_skus_additional_sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **additional_sku_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_additional_skus_additional_sku_id** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationAdditionalSkusGetRequest**](../Model/RestItemsIdVariationsVariationIdVariationAdditionalSkusGetRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationAdditionalSku**](../Model/VariationAdditionalSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationAdditionalSkusGet()`

```php
restItemsIdVariationsVariationIdVariationAdditionalSkusGet($id, $variation_id, $_rest_items_id_variations_variation_id_variation_additional_skus): \ck/plenty-client\Model\VariationAdditionalSku[]
```

List additional SKUs

Lists the additional SKUs of a variation. Filters must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$_rest_items_id_variations_variation_id_variation_additional_skus = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationAdditionalSkusGetRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationAdditionalSkusGetRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationAdditionalSkusGet($id, $variation_id, $_rest_items_id_variations_variation_id_variation_additional_skus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationAdditionalSkusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_additional_skus** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationAdditionalSkusGetRequest**](../Model/RestItemsIdVariationsVariationIdVariationAdditionalSkusGetRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationAdditionalSku[]**](../Model/VariationAdditionalSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationAdditionalSkusPost()`

```php
restItemsIdVariationsVariationIdVariationAdditionalSkusPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_additional_skus): \ck/plenty-client\Model\VariationAdditionalSku
```

Create an additional SKU

Creates an additional SKU. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$_rest_items_id_variations_variation_id_variation_additional_skus = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationAdditionalSkusGetRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationAdditionalSkusGetRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationAdditionalSkusPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_additional_skus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationAdditionalSkusPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_additional_skus** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationAdditionalSkusGetRequest**](../Model/RestItemsIdVariationsVariationIdVariationAdditionalSkusGetRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationAdditionalSku**](../Model/VariationAdditionalSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdDelete()`

```php
restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdDelete($id, $variation_id, $barcode_id): object
```

Delete a variation barcode

Deletes a variation barcode. Unlinks the barcode from the variation and deletes the code saved for the variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$barcode_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdDelete($id, $variation_id, $barcode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **barcode_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdGet()`

```php
restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdGet($id, $variation_id, $barcode_id): \ck/plenty-client\Model\VariationBarcode
```

Get a variation barcode

Get a specific variation barcode. The ID of the item, the ID of the variation and the ID of the barcode must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$barcode_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdGet($id, $variation_id, $barcode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **barcode_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationBarcode**](../Model/VariationBarcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdPut()`

```php
restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdPut($id, $variation_id, $barcode_id, $_rest_items_id_variations_variation_id_variation_barcodes_barcode_id): \ck/plenty-client\Model\VariationBarcode
```

Update a variation barcode

Updates a variation barcode. The ID of the item, the ID of the variation, the ID of the barcode and the code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$barcode_id = 56; // int
$_rest_items_id_variations_variation_id_variation_barcodes_barcode_id = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationBarcodesPostRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationBarcodesPostRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdPut($id, $variation_id, $barcode_id, $_rest_items_id_variations_variation_id_variation_barcodes_barcode_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **barcode_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_barcodes_barcode_id** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationBarcodesPostRequest**](../Model/RestItemsIdVariationsVariationIdVariationBarcodesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationBarcode**](../Model/VariationBarcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationBarcodesGet()`

```php
restItemsIdVariationsVariationIdVariationBarcodesGet($id, $variation_id, $with): \ck/plenty-client\Model\VariationBarcode[]
```

List variation barcodes

Lists all barcodes of a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$with = 'with_example'; // string | Includes the specified variation barcode information in the results. The following parameter is available: <ul><li>barcode</li></ul>

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBarcodesGet($id, $variation_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBarcodesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **with** | **string**| Includes the specified variation barcode information in the results. The following parameter is available: &lt;ul&gt;&lt;li&gt;barcode&lt;/li&gt;&lt;/ul&gt; | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationBarcode[]**](../Model/VariationBarcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationBarcodesPost()`

```php
restItemsIdVariationsVariationIdVariationBarcodesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_barcodes): \ck/plenty-client\Model\VariationBarcode
```

Create a variation barcode

Creates a variation barcode. The ID of the item, the ID of the variation, the ID of the barcode and the code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$_rest_items_id_variations_variation_id_variation_barcodes = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationBarcodesPostRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationBarcodesPostRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBarcodesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_barcodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBarcodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_barcodes** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationBarcodesPostRequest**](../Model/RestItemsIdVariationsVariationIdVariationBarcodesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationBarcode**](../Model/VariationBarcode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationBundlesBundleIdDelete()`

```php
restItemsIdVariationsVariationIdVariationBundlesBundleIdDelete($id, $variation_id, $bundle_id): object
```

Remove a bundle component

Removes a component from a bundle. The bundle ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$bundle_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBundlesBundleIdDelete($id, $variation_id, $bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBundlesBundleIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **bundle_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationBundlesBundleIdGet()`

```php
restItemsIdVariationsVariationIdVariationBundlesBundleIdGet($id, $variation_id, $bundle_id): \ck/plenty-client\Model\VariationBundle
```

Get a variation bundle

Gets the bundle information for a specific bundle component.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$bundle_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBundlesBundleIdGet($id, $variation_id, $bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBundlesBundleIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **bundle_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationBundle**](../Model/VariationBundle.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationBundlesBundleIdPut()`

```php
restItemsIdVariationsVariationIdVariationBundlesBundleIdPut($id, $variation_id, $bundle_id, $_rest_items_id_variations_variation_id_variation_bundles_bundle_id): \ck/plenty-client\Model\VariationBundle
```

Update a variation bundle

Updates a variation bundle component.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$bundle_id = 56; // int
$_rest_items_id_variations_variation_id_variation_bundles_bundle_id = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationBundlesPostRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationBundlesPostRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBundlesBundleIdPut($id, $variation_id, $bundle_id, $_rest_items_id_variations_variation_id_variation_bundles_bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBundlesBundleIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **bundle_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_bundles_bundle_id** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationBundlesPostRequest**](../Model/RestItemsIdVariationsVariationIdVariationBundlesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationBundle**](../Model/VariationBundle.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationBundlesGet()`

```php
restItemsIdVariationsVariationIdVariationBundlesGet($id, $variation_id): \ck/plenty-client\Model\VariationBundle[]
```

List bundle components

List all components of a bundle. The ID of the item and the ID of the variation to which bundle components were added must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBundlesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBundlesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationBundle[]**](../Model/VariationBundle.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationBundlesPost()`

```php
restItemsIdVariationsVariationIdVariationBundlesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_bundles): \ck/plenty-client\Model\VariationBundle
```

Add a variation to a bundle

Adds a variation to a bundle variation as a bundle component.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$_rest_items_id_variations_variation_id_variation_bundles = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationBundlesPostRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationBundlesPostRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationBundlesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_bundles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationBundlesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_bundles** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationBundlesPostRequest**](../Model/RestItemsIdVariationsVariationIdVariationBundlesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationBundle**](../Model/VariationBundle.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationCategoriesCatIdDelete()`

```php
restItemsIdVariationsVariationIdVariationCategoriesCatIdDelete($id, $variation_id, $cat_id): object
```

Remove a category from a variation

Deletes the link between a category and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$cat_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationCategoriesCatIdDelete($id, $variation_id, $cat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationCategoriesCatIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **cat_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationCategoriesCatIdGet()`

```php
restItemsIdVariationsVariationIdVariationCategoriesCatIdGet($id, $variation_id, $cat_id): \ck/plenty-client\Model\VariationCategory
```

Get link between category and variation

Gets the link between a category and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$cat_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationCategoriesCatIdGet($id, $variation_id, $cat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationCategoriesCatIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **cat_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationCategory**](../Model/VariationCategory.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationCategoriesCatIdPut()`

```php
restItemsIdVariationsVariationIdVariationCategoriesCatIdPut($id, $variation_id, $cat_id, $_rest_items_id_variations_variation_id_variation_categories_cat_id): \ck/plenty-client\Model\VariationCategory
```

Update variation category link

Updates the link between a category and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$cat_id = 56; // int
$_rest_items_id_variations_variation_id_variation_categories_cat_id = new \ck/plenty-client\Model\RestItemsVariationsVariationCategoriesPutRequest(); // \ck/plenty-client\Model\RestItemsVariationsVariationCategoriesPutRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationCategoriesCatIdPut($id, $variation_id, $cat_id, $_rest_items_id_variations_variation_id_variation_categories_cat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationCategoriesCatIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **cat_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_categories_cat_id** | [**\ck/plenty-client\Model\RestItemsVariationsVariationCategoriesPutRequest**](../Model/RestItemsVariationsVariationCategoriesPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationCategory**](../Model/VariationCategory.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationCategoriesGet()`

```php
restItemsIdVariationsVariationIdVariationCategoriesGet($id, $variation_id): \ck/plenty-client\Model\VariationCategory
```

List categories linked to a variation

Lists all categories linked to a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationCategoriesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationCategory**](../Model/VariationCategory.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationCategoriesPost()`

```php
restItemsIdVariationsVariationIdVariationCategoriesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_categories): \ck/plenty-client\Model\VariationCategory
```

Link a category to a variation

Creates a link between a category and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$_rest_items_id_variations_variation_id_variation_categories = new \ck/plenty-client\Model\RestItemsVariationsVariationCategoriesPutRequest(); // \ck/plenty-client\Model\RestItemsVariationsVariationCategoriesPutRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationCategoriesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_categories** | [**\ck/plenty-client\Model\RestItemsVariationsVariationCategoriesPutRequest**](../Model/RestItemsVariationsVariationCategoriesPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationCategory**](../Model/VariationCategory.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationClientsGet()`

```php
restItemsIdVariationsVariationIdVariationClientsGet($id, $variation_id): \ck/plenty-client\Model\VariationClient[]
```

List clients linked to a variation

Lists all clients (stores) linked to a variation. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationClientsGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationClientsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationClient[]**](../Model/VariationClient.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationClientsPlentyIdDelete()`

```php
restItemsIdVariationsVariationIdVariationClientsPlentyIdDelete($id, $variation_id, $plenty_id): object
```

Unlink a client from a variation

Deletes the link between a client (store) and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$plenty_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationClientsPlentyIdDelete($id, $variation_id, $plenty_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationClientsPlentyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **plenty_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationClientsPost()`

```php
restItemsIdVariationsVariationIdVariationClientsPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_clients): \ck/plenty-client\Model\VariationClient
```

Link a client to a variation

Creates a link between a client (store) and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$_rest_items_id_variations_variation_id_variation_clients = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationClientsPostRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationClientsPostRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationClientsPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_clients);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationClientsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_clients** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationClientsPostRequest**](../Model/RestItemsIdVariationsVariationIdVariationClientsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationClient**](../Model/VariationClient.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationComponentBundlesGet()`

```php
restItemsIdVariationsVariationIdVariationComponentBundlesGet($id, $variation_id): \ck/plenty-client\Model\VariationBundle[]
```

List bundles

List the bundles that the variation is a component of. The variation ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationComponentBundlesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationComponentBundlesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationBundle[]**](../Model/VariationBundle.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationDefaultCategoriesGet()`

```php
restItemsIdVariationsVariationIdVariationDefaultCategoriesGet($id, $variation_id): \ck/plenty-client\Model\VariationDefaultCategory[]
```

List default category links

Lists the default category of a variation for all clients (stores). The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationDefaultCategoriesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationDefaultCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationDefaultCategory[]**](../Model/VariationDefaultCategory.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdDelete()`

```php
restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdDelete($id, $variation_id, $plenty_id): object
```

Delete a default category link

Deletes a link between a variation and a category that designates this category as the default category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$plenty_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdDelete($id, $variation_id, $plenty_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **plenty_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdGet()`

```php
restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdGet($id, $variation_id, $plenty_id): \ck/plenty-client\Model\VariationDefaultCategory
```

Gets a default category link

Gets the default category linked to a variation for the specified client (store). The ID of the item, the ID of the variation and the ID of the client (store) must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$plenty_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdGet($id, $variation_id, $plenty_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **plenty_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationDefaultCategory**](../Model/VariationDefaultCategory.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationDefaultCategoriesPost()`

```php
restItemsIdVariationsVariationIdVariationDefaultCategoriesPost($id, $variation_id): \ck/plenty-client\Model\VariationDefaultCategory
```

Create a default category link

Creates a link between a variation and a category that designates the category as the default category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationDefaultCategoriesPost($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationDefaultCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationDefaultCategory**](../Model/VariationDefaultCategory.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationImagesGet()`

```php
restItemsIdVariationsVariationIdVariationImagesGet($id, $variation_id, $updated_at): \ck/plenty-client\Model\VariationImage
```

List image links of a variation

Lists all images linked to a variation. The variation ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to variation images updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationImagesGet($id, $variation_id, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationImagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **updated_at** | **string**| Filter restricts the list of results to variation images updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationImage**](../Model/VariationImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationImagesImageIdDelete()`

```php
restItemsIdVariationsVariationIdVariationImagesImageIdDelete($id, $variation_id, $image_id): object
```

Delete an image link

Deletes a link between an image and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$image_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationImagesImageIdDelete($id, $variation_id, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationImagesImageIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **image_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationImagesPost()`

```php
restItemsIdVariationsVariationIdVariationImagesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_images): \ck/plenty-client\Model\VariationImage
```

Create an image link

Creates a link between an image and a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$_rest_items_id_variations_variation_id_variation_images = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationImagesPostRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationImagesPostRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationImagesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_images);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationImagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_images** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationImagesPostRequest**](../Model/RestItemsIdVariationsVariationIdVariationImagesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationImage**](../Model/VariationImage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationMarketsDelete()`

```php
restItemsIdVariationsVariationIdVariationMarketsDelete($id, $variation_id)
```

Delete all market links of one variation

Deletes all links of one variation. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $apiInstance->restItemsIdVariationsVariationIdVariationMarketsDelete($id, $variation_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationMarketsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationMarketsGet()`

```php
restItemsIdVariationsVariationIdVariationMarketsGet($id, $variation_id): \ck/plenty-client\Model\VariationMarket[]
```

List markets linked to a variation

Lists all markets linked to a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationMarketsGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationMarketsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationMarket[]**](../Model/VariationMarket.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationMarketsMarketplaceIdDelete()`

```php
restItemsIdVariationsVariationIdVariationMarketsMarketplaceIdDelete($id, $variation_id, $marketplace_id): object
```

Delete link between variation and market

Deletes a link between a variation and a market. The ID of the item, the ID of the variation and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$marketplace_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationMarketsMarketplaceIdDelete($id, $variation_id, $marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationMarketsMarketplaceIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **marketplace_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationMarketsPost()`

```php
restItemsIdVariationsVariationIdVariationMarketsPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_markets): \ck/plenty-client\Model\VariationMarket
```

Create link between variation and market

Creates a link between a variation and a market. The ID of the item, the ID of the variation and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$_rest_items_id_variations_variation_id_variation_markets = new \ck/plenty-client\Model\RestItemsVariationsVariationMarketsPostRequest(); // \ck/plenty-client\Model\RestItemsVariationsVariationMarketsPostRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationMarketsPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_markets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationMarketsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_markets** | [**\ck/plenty-client\Model\RestItemsVariationsVariationMarketsPostRequest**](../Model/RestItemsVariationsVariationMarketsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationMarket**](../Model/VariationMarket.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationPropertiesDelete()`

```php
restItemsIdVariationsVariationIdVariationPropertiesDelete($id, $variation_id): object
```

Deletes all links between a variation and its property values

Deletes all links between a variation and its property values. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationPropertiesDelete($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationPropertiesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationPropertiesGet()`

```php
restItemsIdVariationsVariationIdVariationPropertiesGet($id, $variation_id): \ck/plenty-client\Model\VariationPropertyValue[]
```

List property values linked to a variation

Lists the property values linked to a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationPropertiesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationPropertyValue[]**](../Model/VariationPropertyValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationPropertiesPost()`

```php
restItemsIdVariationsVariationIdVariationPropertiesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_properties): \ck/plenty-client\Model\VariationPropertyValue
```

Create link between variation and property value

Creates a link between a variation and a property value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$_rest_items_id_variations_variation_id_variation_properties = new \ck/plenty-client\Model\RestItemsVariationsVariationPropertiesPutRequest(); // \ck/plenty-client\Model\RestItemsVariationsVariationPropertiesPutRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationPropertiesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationPropertiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_properties** | [**\ck/plenty-client\Model\RestItemsVariationsVariationPropertiesPutRequest**](../Model/RestItemsVariationsVariationPropertiesPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationPropertyValue**](../Model/VariationPropertyValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationPropertiesPropertyIdDelete()`

```php
restItemsIdVariationsVariationIdVariationPropertiesPropertyIdDelete($id, $variation_id, $property_id): object
```

Delete link between variation and property value

Delete a link between a variation and a property value. The ID of the item, the ID of the variation and the ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$property_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationPropertiesPropertyIdDelete($id, $variation_id, $property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationPropertiesPropertyIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **property_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationPropertiesPropertyIdGet()`

```php
restItemsIdVariationsVariationIdVariationPropertiesPropertyIdGet($id, $variation_id, $property_id): \ck/plenty-client\Model\VariationPropertyValue
```

Get a property value

Gets a property value linked to a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$property_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationPropertiesPropertyIdGet($id, $variation_id, $property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationPropertiesPropertyIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **property_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationPropertyValue**](../Model/VariationPropertyValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationPropertiesPropertyIdPut()`

```php
restItemsIdVariationsVariationIdVariationPropertiesPropertyIdPut($id, $variation_id, $property_id, $_rest_items_id_variations_variation_id_variation_properties_property_id): \ck/plenty-client\Model\VariationPropertyValue
```

Update a property value

Update the data of a property value linked to a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$property_id = 56; // int
$_rest_items_id_variations_variation_id_variation_properties_property_id = new \ck/plenty-client\Model\RestItemsVariationsVariationPropertiesPutRequest(); // \ck/plenty-client\Model\RestItemsVariationsVariationPropertiesPutRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationPropertiesPropertyIdPut($id, $variation_id, $property_id, $_rest_items_id_variations_variation_id_variation_properties_property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationPropertiesPropertyIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **property_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_properties_property_id** | [**\ck/plenty-client\Model\RestItemsVariationsVariationPropertiesPutRequest**](../Model/RestItemsVariationsVariationPropertiesPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationPropertyValue**](../Model/VariationPropertyValue.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSalesPricesDelete()`

```php
restItemsIdVariationsVariationIdVariationSalesPricesDelete($id, $variation_id): object
```

Delete all links between a variation and its sales prices

Deletes all links between a variation and its sales prices and deletes the sales price data. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSalesPricesDelete($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSalesPricesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSalesPricesGet()`

```php
restItemsIdVariationsVariationIdVariationSalesPricesGet($id, $variation_id): \ck/plenty-client\Model\VariationSalesPrice[]
```

List sales prices of a variation

Lists the sales prices of a variation. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSalesPricesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSalesPricesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationSalesPrice[]**](../Model/VariationSalesPrice.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSalesPricesPost()`

```php
restItemsIdVariationsVariationIdVariationSalesPricesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_sales_prices): \ck/plenty-client\Model\VariationSalesPrice
```

Create link between variation and sales price

Creates a link between a variation and a sales price and adds sales price data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$_rest_items_id_variations_variation_id_variation_sales_prices = new \ck/plenty-client\Model\RestItemsVariationsVariationSalesPricesPutRequest(); // \ck/plenty-client\Model\RestItemsVariationsVariationSalesPricesPutRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSalesPricesPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_sales_prices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSalesPricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_sales_prices** | [**\ck/plenty-client\Model\RestItemsVariationsVariationSalesPricesPutRequest**](../Model/RestItemsVariationsVariationSalesPricesPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationSalesPrice**](../Model/VariationSalesPrice.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSalesPricesPriceIdDelete()`

```php
restItemsIdVariationsVariationIdVariationSalesPricesPriceIdDelete($id, $variation_id, $price_id): object
```

Delete link between variation and sales price

Deletes a link between a variation and a sales price and deletes the sales price data. The ID of the sales price and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$price_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSalesPricesPriceIdDelete($id, $variation_id, $price_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSalesPricesPriceIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **price_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSalesPricesPriceIdGet()`

```php
restItemsIdVariationsVariationIdVariationSalesPricesPriceIdGet($id, $variation_id, $price_id): \ck/plenty-client\Model\VariationSalesPrice
```

Get sales price data for a variation

Gets sales price data linked to a variation. The ID of the sales price and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$price_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSalesPricesPriceIdGet($id, $variation_id, $price_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSalesPricesPriceIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **price_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationSalesPrice**](../Model/VariationSalesPrice.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSalesPricesPriceIdPut()`

```php
restItemsIdVariationsVariationIdVariationSalesPricesPriceIdPut($id, $variation_id, $price_id, $_rest_items_id_variations_variation_id_variation_sales_prices_price_id): \ck/plenty-client\Model\VariationSalesPrice
```

Update sales price data

Updates sales price data linked to a variation. The ID of the sales price and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$price_id = 56; // int
$_rest_items_id_variations_variation_id_variation_sales_prices_price_id = new \ck/plenty-client\Model\RestItemsVariationsVariationSalesPricesPutRequest(); // \ck/plenty-client\Model\RestItemsVariationsVariationSalesPricesPutRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSalesPricesPriceIdPut($id, $variation_id, $price_id, $_rest_items_id_variations_variation_id_variation_sales_prices_price_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSalesPricesPriceIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **price_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_sales_prices_price_id** | [**\ck/plenty-client\Model\RestItemsVariationsVariationSalesPricesPutRequest**](../Model/RestItemsVariationsVariationSalesPricesPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationSalesPrice**](../Model/VariationSalesPrice.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSkusGet()`

```php
restItemsIdVariationsVariationIdVariationSkusGet($id, $variation_id): \ck/plenty-client\Model\VariationSku[]
```

List SKUs

Lists the SKUs of a variation. Filters must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSkusGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSkusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationSku[]**](../Model/VariationSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSkusPost()`

```php
restItemsIdVariationsVariationIdVariationSkusPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_skus): \ck/plenty-client\Model\VariationSku
```

Create an SKU

Creates an SKU. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$_rest_items_id_variations_variation_id_variation_skus = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationSkusPostRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationSkusPostRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSkusPost($id, $variation_id, $_rest_items_id_variations_variation_id_variation_skus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSkusPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_skus** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationSkusPostRequest**](../Model/RestItemsIdVariationsVariationIdVariationSkusPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationSku**](../Model/VariationSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSkusSkuIdDelete()`

```php
restItemsIdVariationsVariationIdVariationSkusSkuIdDelete($id, $variation_id, $sku_id): object
```

Delete an SKU

Deletes an SKU. The ID of the SKU must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$sku_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSkusSkuIdDelete($id, $variation_id, $sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSkusSkuIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **sku_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSkusSkuIdGet()`

```php
restItemsIdVariationsVariationIdVariationSkusSkuIdGet($id, $variation_id, $sku_id): \ck/plenty-client\Model\VariationSku
```

Get an SKU

Gets an SKU. The ID of the SKU must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$sku_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSkusSkuIdGet($id, $variation_id, $sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSkusSkuIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **sku_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationSku**](../Model/VariationSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSkusSkuIdPut()`

```php
restItemsIdVariationsVariationIdVariationSkusSkuIdPut($id, $variation_id, $sku_id, $_rest_items_id_variations_variation_id_variation_skus_sku_id): \ck/plenty-client\Model\VariationSku
```

Update an SKU

Updates an SKU. The ID of the SKU must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$sku_id = 56; // int
$_rest_items_id_variations_variation_id_variation_skus_sku_id = new \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationSkusPostRequest(); // \ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationSkusPostRequest

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSkusSkuIdPut($id, $variation_id, $sku_id, $_rest_items_id_variations_variation_id_variation_skus_sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSkusSkuIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **sku_id** | **int**|  | |
| **_rest_items_id_variations_variation_id_variation_skus_sku_id** | [**\ck/plenty-client\Model\RestItemsIdVariationsVariationIdVariationSkusPostRequest**](../Model/RestItemsIdVariationsVariationIdVariationSkusPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationSku**](../Model/VariationSku.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSuppliersGet()`

```php
restItemsIdVariationsVariationIdVariationSuppliersGet($id, $variation_id): \ck/plenty-client\Model\VariationSupplier[]
```

Lists suppliers for a variation

Lists all supplier data linked to a variation. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSuppliersGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSuppliersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationSupplier[]**](../Model/VariationSupplier.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSuppliersPost()`

```php
restItemsIdVariationsVariationIdVariationSuppliersPost($id, $variation_id): \ck/plenty-client\Model\VariationSupplier
```

Create a link between variation and supplier

Creates a link between a variation and a supplier and adds supplier data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSuppliersPost($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSuppliersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationSupplier**](../Model/VariationSupplier.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdDelete()`

```php
restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdDelete($id, $variation_id, $variation_supplier_id): object
```

Delete link between variation and supplier

Deletes a link between a variation and a supplier. The ID of the variation and the ID of the link between the variation and the supplier must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$variation_supplier_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdDelete($id, $variation_id, $variation_supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **variation_supplier_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdGet()`

```php
restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdGet($id, $variation_id, $variation_supplier_id): \ck/plenty-client\Model\VariationSupplier
```

Get supplier data for a variation

Gets the data for a supplier linked to a variation. The ID of the variation and the ID of the link between the variation and the supplier must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$variation_supplier_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdGet($id, $variation_id, $variation_supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **variation_supplier_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationSupplier**](../Model/VariationSupplier.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdPut()`

```php
restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdPut($id, $variation_id, $variation_supplier_id): \ck/plenty-client\Model\VariationSupplier
```

Updates supplier data for a variation

Updates the data of a supplier linked to a variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$variation_supplier_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdPut($id, $variation_id, $variation_supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **variation_supplier_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationSupplier**](../Model/VariationSupplier.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationWarehousesGet()`

```php
restItemsIdVariationsVariationIdVariationWarehousesGet($id, $variation_id): \ck/plenty-client\Model\VariationWarehouse[]
```

List the warehouses linked to a variation

Lists the warehouses linked to a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationWarehousesGet($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationWarehousesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationWarehouse[]**](../Model/VariationWarehouse.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationWarehousesPost()`

```php
restItemsIdVariationsVariationIdVariationWarehousesPost($id, $variation_id): \ck/plenty-client\Model\VariationWarehouse
```

Create link between a variation and a warehouse

Creates a link between a variation and a warehouse and adds warehouse data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationWarehousesPost($id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationWarehousesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationWarehouse**](../Model/VariationWarehouse.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdDelete()`

```php
restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdDelete($id, $variation_id, $warehouse_id): object
```

Delete link between a warehouse and a variation

Deletes the link between a warehouse and a variation. The ID of the variation and the ID of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$warehouse_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdDelete($id, $variation_id, $warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **warehouse_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdGet()`

```php
restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdGet($id, $variation_id, $warehouse_id): \ck/plenty-client\Model\VariationWarehouse
```

Get warehouse data for a variation

Gets the data of a warehouse linked to a variation. The ID of the variation and the ID of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$warehouse_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdGet($id, $variation_id, $warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **warehouse_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationWarehouse**](../Model/VariationWarehouse.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdPut()`

```php
restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdPut($id, $variation_id, $warehouse_id): \ck/plenty-client\Model\VariationWarehouse
```

Update warehouse data of a variation

Updates the data of a warehouse linked to a variation. The ID of the variation and the ID of the warehouse must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$variation_id = 56; // int
$warehouse_id = 56; // int

try {
    $result = $apiInstance->restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdPut($id, $variation_id, $warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **variation_id** | **int**|  | |
| **warehouse_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationWarehouse**](../Model/VariationWarehouse.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdDelete()`

```php
restItemsItemIdDelete($item_id): object
```

Delete an item

Deletes an item. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int

try {
    $result = $apiInstance->restItemsItemIdDelete($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdFillPost()`

```php
restItemsItemIdFillPost($item_id)
```

Fill item to es

Fills item to es. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int

try {
    $apiInstance->restItemsItemIdFillPost($item_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdFillPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdGet()`

```php
restItemsItemIdGet($item_id, $lang): \ck/plenty-client\Model\Item
```

Show an item

Show an item by itemId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int
$lang = 'lang_example'; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.

try {
    $result = $apiInstance->restItemsItemIdGet($item_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |
| **lang** | **string**| The &lt;a href&#x3D;&#39;https://developers.plentymarkets.com/rest-doc/introduction#countries&#39; target&#x3D;&#39;_blank&#39;&gt;language&lt;/a&gt; of the variation information. | [optional] |

### Return type

[**\ck/plenty-client\Model\Item**](../Model/Item.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdItemShippingProfilesDelete()`

```php
restItemsItemIdItemShippingProfilesDelete($item_id)
```

Deactivate shipping profiles of an item

Deactivates all shipping profiles of an item. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int

try {
    $apiInstance->restItemsItemIdItemShippingProfilesDelete($item_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdItemShippingProfilesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdItemShippingProfilesGet()`

```php
restItemsItemIdItemShippingProfilesGet($item_id): \ck/plenty-client\Model\ItemShippingProfiles[]
```

List shipping profiles of an item

Lists the shipping profiles linked to an item. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int

try {
    $result = $apiInstance->restItemsItemIdItemShippingProfilesGet($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdItemShippingProfilesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemShippingProfiles[]**](../Model/ItemShippingProfiles.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdItemShippingProfilesIdDelete()`

```php
restItemsItemIdItemShippingProfilesIdDelete($item_id, $id): object
```

Deactivate a shipping profile

Unlinks a shipping profile from the item. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | The unique ID of the item
$id = 56; // int | The unique ID of the link between item and shipping profile

try {
    $result = $apiInstance->restItemsItemIdItemShippingProfilesIdDelete($item_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdItemShippingProfilesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**| The unique ID of the item | |
| **id** | **int**| The unique ID of the link between item and shipping profile | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdItemShippingProfilesPost()`

```php
restItemsItemIdItemShippingProfilesPost($item_id): \ck/plenty-client\Model\ItemShippingProfiles
```

Activate a shipping profile

Links a shipping profile to the item. The ID of the item and the ID of the shipping profile must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int

try {
    $result = $apiInstance->restItemsItemIdItemShippingProfilesPost($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdItemShippingProfilesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ItemShippingProfiles**](../Model/ItemShippingProfiles.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdPut()`

```php
restItemsItemIdPut($item_id, $_rest_items_item_id): \ck/plenty-client\Model\Item
```

Update a item

Updates a item. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int
$_rest_items_item_id = new \ck/plenty-client\Model\RestItemsItemIdPutRequest(); // \ck/plenty-client\Model\RestItemsItemIdPutRequest

try {
    $result = $apiInstance->restItemsItemIdPut($item_id, $_rest_items_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |
| **_rest_items_item_id** | [**\ck/plenty-client\Model\RestItemsItemIdPutRequest**](../Model/RestItemsItemIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Item**](../Model/Item.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdVariationsGet()`

```php
restItemsItemIdVariationsGet($item_id, $with, $lang, $page, $items_per_page, $is_main, $is_active, $barcode, $number_exact, $number_fuzzy, $is_bundle, $supplier_number, $manufacturer_id, $updated_between, $created_between, $related_updated_between): \ck/plenty-client\Model\RestItemsVariationsGet200Response
```

List variations of an item

Lists all variations of an item. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int
$with = 'with_example'; // string | Includes the specified variation information in the results. The following parameters are available: <ul><li>properties</b> = The properties linked to the variation</li><li>variationProperties</b> = The properties linked to the variation</li><li>variationBarcodes</b> = The barcode linked to the variation and the saved code</li><li>variationBundleComponents</b> = The bundle components of the variation and their quantities</li><li>variationComponentBundles</b> = The bundles that this variation is a component of</li><li>variationSalesPrices</b> = The sales prices linked to the variation and the saved price</li><li>marketItemNumbers</b> = The market ident number of the variation</li><li>variationCategories</b> = The categories linked to the variation</li><li>variationClients</b> = The clients (stores) for which the variation is activated</li><li>variationMarkets</b> = The markets for which the variation is activated </li><li>variationDefaultCategory</b> = The default category of the variation</li><li>variationSuppliers</b> = The supplier data associated with the variation</li><li>variationWarehouses</b> = The warehouse data associated with the variation</li><li>images</b> = The images linked to the variation</li><li>itemImages</b> = The images linked to the item</li><li>variationAttributeValues</b> = The attribute values of the variation</li><li>variationSkus</b> = The SKU data associated with the variation</li><li>variationAdditionalSkus</b> = The additional SKU data associated with the variation</li><li>unit</b> = The unit assigned to the variation</li><li>parent</b> = The main variation of the variation. Value is null if this variation is the item's main variation.</li><li>item</b> = The item of the variation</li><li>stock</b> = The stock data of the variation</li></ul> For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas.
$lang = 'lang_example'; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
$page = 56; // int | Limits the results to a specific page. The page number must be specified.
$items_per_page = 56; // int | Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified.
$is_main = True; // bool | Filter restricts the list of results to variations that are main variations.
$is_active = True; // bool | Filter restricts the list of results to variations that are active.
$barcode = 'barcode_example'; // string | Filter restricts the list of results to variations with the specified barcode. A barcode must be specified.
$number_exact = 'number_exact_example'; // string | Filter restricts the list of results to the variation with the variation number specified.
$number_fuzzy = 'number_fuzzy_example'; // string | Filter restricts the list of results to variations with numbers that contain the variation number specified (SQL LIKE operator). For example, if variations with variation numbers 1 to 400 exist in the system, filtering by 12 will list variation numbers 12, 112, 120-129, 212 and 312.
$is_bundle = True; // bool | Filter restricts the list of results to variations to which variations were added to create a bundle.
$supplier_number = 'supplier_number_example'; // string | Filter restricts the list of results to variations with the specified supplier number. A supplier number must be specified.
$manufacturer_id = 56; // int | Filter restricts the list of results to variations with the specified manufacturer ID.
$updated_between = 'updated_between_example'; // string | Filter restricts the list of results to variations updated during the specified period. The end date (to) is optional. If no end date is specified, variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?updatedBetween=1451606400,1456790400 will list variations updated between 2016-01-01 and 2016-03-01. .../variations?updatedBetween=1451606400 will list variations updated since 2016-01-01. The PHP function strtotime is also supported.
$created_between = 'created_between_example'; // string | Filter restricts the list of results to variations created during the specified period. The end date (to) is optional. If no end date is specified, variations created between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?createdBetween=1451606400,1456790400 will list variations created between 2016-01-01 and 2016-03-01. .../variations?createdBetween=1451606400 will list variations created since 2016-01-01. The PHP function strtotime is also supported.
$related_updated_between = 'related_updated_between_example'; // string | Filter restricts the list of results to those variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats.

try {
    $result = $apiInstance->restItemsItemIdVariationsGet($item_id, $with, $lang, $page, $items_per_page, $is_main, $is_active, $barcode, $number_exact, $number_fuzzy, $is_bundle, $supplier_number, $manufacturer_id, $updated_between, $created_between, $related_updated_between);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |
| **with** | **string**| Includes the specified variation information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;properties&lt;/b&gt; &#x3D; The properties linked to the variation&lt;/li&gt;&lt;li&gt;variationProperties&lt;/b&gt; &#x3D; The properties linked to the variation&lt;/li&gt;&lt;li&gt;variationBarcodes&lt;/b&gt; &#x3D; The barcode linked to the variation and the saved code&lt;/li&gt;&lt;li&gt;variationBundleComponents&lt;/b&gt; &#x3D; The bundle components of the variation and their quantities&lt;/li&gt;&lt;li&gt;variationComponentBundles&lt;/b&gt; &#x3D; The bundles that this variation is a component of&lt;/li&gt;&lt;li&gt;variationSalesPrices&lt;/b&gt; &#x3D; The sales prices linked to the variation and the saved price&lt;/li&gt;&lt;li&gt;marketItemNumbers&lt;/b&gt; &#x3D; The market ident number of the variation&lt;/li&gt;&lt;li&gt;variationCategories&lt;/b&gt; &#x3D; The categories linked to the variation&lt;/li&gt;&lt;li&gt;variationClients&lt;/b&gt; &#x3D; The clients (stores) for which the variation is activated&lt;/li&gt;&lt;li&gt;variationMarkets&lt;/b&gt; &#x3D; The markets for which the variation is activated &lt;/li&gt;&lt;li&gt;variationDefaultCategory&lt;/b&gt; &#x3D; The default category of the variation&lt;/li&gt;&lt;li&gt;variationSuppliers&lt;/b&gt; &#x3D; The supplier data associated with the variation&lt;/li&gt;&lt;li&gt;variationWarehouses&lt;/b&gt; &#x3D; The warehouse data associated with the variation&lt;/li&gt;&lt;li&gt;images&lt;/b&gt; &#x3D; The images linked to the variation&lt;/li&gt;&lt;li&gt;itemImages&lt;/b&gt; &#x3D; The images linked to the item&lt;/li&gt;&lt;li&gt;variationAttributeValues&lt;/b&gt; &#x3D; The attribute values of the variation&lt;/li&gt;&lt;li&gt;variationSkus&lt;/b&gt; &#x3D; The SKU data associated with the variation&lt;/li&gt;&lt;li&gt;variationAdditionalSkus&lt;/b&gt; &#x3D; The additional SKU data associated with the variation&lt;/li&gt;&lt;li&gt;unit&lt;/b&gt; &#x3D; The unit assigned to the variation&lt;/li&gt;&lt;li&gt;parent&lt;/b&gt; &#x3D; The main variation of the variation. Value is null if this variation is the item&#39;s main variation.&lt;/li&gt;&lt;li&gt;item&lt;/b&gt; &#x3D; The item of the variation&lt;/li&gt;&lt;li&gt;stock&lt;/b&gt; &#x3D; The stock data of the variation&lt;/li&gt;&lt;/ul&gt; For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas. | [optional] |
| **lang** | **string**| The &lt;a href&#x3D;&#39;https://developers.plentymarkets.com/rest-doc/introduction#countries&#39; target&#x3D;&#39;_blank&#39;&gt;language&lt;/a&gt; of the variation information. | [optional] |
| **page** | **int**| Limits the results to a specific page. The page number must be specified. | [optional] |
| **items_per_page** | **int**| Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified. | [optional] |
| **is_main** | **bool**| Filter restricts the list of results to variations that are main variations. | [optional] |
| **is_active** | **bool**| Filter restricts the list of results to variations that are active. | [optional] |
| **barcode** | **string**| Filter restricts the list of results to variations with the specified barcode. A barcode must be specified. | [optional] |
| **number_exact** | **string**| Filter restricts the list of results to the variation with the variation number specified. | [optional] |
| **number_fuzzy** | **string**| Filter restricts the list of results to variations with numbers that contain the variation number specified (SQL LIKE operator). For example, if variations with variation numbers 1 to 400 exist in the system, filtering by 12 will list variation numbers 12, 112, 120-129, 212 and 312. | [optional] |
| **is_bundle** | **bool**| Filter restricts the list of results to variations to which variations were added to create a bundle. | [optional] |
| **supplier_number** | **string**| Filter restricts the list of results to variations with the specified supplier number. A supplier number must be specified. | [optional] |
| **manufacturer_id** | **int**| Filter restricts the list of results to variations with the specified manufacturer ID. | [optional] |
| **updated_between** | **string**| Filter restricts the list of results to variations updated during the specified period. The end date (to) is optional. If no end date is specified, variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?updatedBetween&#x3D;1451606400,1456790400 will list variations updated between 2016-01-01 and 2016-03-01. .../variations?updatedBetween&#x3D;1451606400 will list variations updated since 2016-01-01. The PHP function strtotime is also supported. | [optional] |
| **created_between** | **string**| Filter restricts the list of results to variations created during the specified period. The end date (to) is optional. If no end date is specified, variations created between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?createdBetween&#x3D;1451606400,1456790400 will list variations created between 2016-01-01 and 2016-03-01. .../variations?createdBetween&#x3D;1451606400 will list variations created since 2016-01-01. The PHP function strtotime is also supported. | [optional] |
| **related_updated_between** | **string**| Filter restricts the list of results to those variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsVariationsGet200Response**](../Model/RestItemsVariationsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdVariationsPost()`

```php
restItemsItemIdVariationsPost($item_id, $_rest_items_item_id_variations): \ck/plenty-client\Model\Variation
```

Create a variation

Create a variation. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int
$_rest_items_item_id_variations = new \ck/plenty-client\Model\RestItemsVariationsPutRequest(); // \ck/plenty-client\Model\RestItemsVariationsPutRequest

try {
    $result = $apiInstance->restItemsItemIdVariationsPost($item_id, $_rest_items_item_id_variations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |
| **_rest_items_item_id_variations** | [**\ck/plenty-client\Model\RestItemsVariationsPutRequest**](../Model/RestItemsVariationsPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Variation**](../Model/Variation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdVariationsVariationIdDelete()`

```php
restItemsItemIdVariationsVariationIdDelete($item_id, $variation_id): object
```

Delete a variation

Delete a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int
$variation_id = 56; // int

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdDelete($item_id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdVariationsVariationIdFillPost()`

```php
restItemsItemIdVariationsVariationIdFillPost($item_id, $variation_id)
```

Fill a variation

Fills a variation. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int
$variation_id = 56; // int

try {
    $apiInstance->restItemsItemIdVariationsVariationIdFillPost($item_id, $variation_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdFillPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |
| **variation_id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdVariationsVariationIdGet()`

```php
restItemsItemIdVariationsVariationIdGet($item_id, $variation_id, $with): \ck/plenty-client\Model\Variation
```

Get a variation

Get a variation. The ID of the item and the ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int
$variation_id = 56; // int
$with = 'with_example'; // string | Includes the specified variation information in the results. The following parameters are available: <ul><li>properties</b> = The properties linked to the variation</li><li>variationProperties</b> = The properties linked to the variation</li><li>variationBarcodes</b> = The barcode linked to the variation and the saved code</li><li>variationBundleComponents</b> = The bundle components of the variation and their quantities</li><li>variationComponentBundles</b> = The bundles that this variation is a component of</li><li>variationSalesPrices</b> = The sales prices linked to the variation and the saved price</li><li>marketItemNumbers</b> = The market ident number of the variation</li><li>variationCategories</b> = The categories linked to the variation</li><li>variationClients</b> = The clients (stores) for which the variation is activated</li><li>variationMarkets</b> = The markets for which the variation is activated </li><li>variationDefaultCategory</b> = The default category of the variation</li><li>variationSuppliers</b> = The supplier data associated with the variation</li><li>variationWarehouses</b> = The warehouse data associated with the variation</li><li>images</b> = The images linked to the variation</li><li>itemImages</b> = The images linked to the item</li><li>variationAttributeValues</b> = The attribute values of the variation</li><li>variationSkus</b> = The SKU data associated with the variation</li><li>variationAdditionalSkus</b> = The additional SKU data associated with the variation</li><li>unit</b> = The unit assigned to the variation</li><li>parent</b> = The main variation of the variation. Value is null if this variation is the item's main variation.</li><li>item</b> = The item of the variation</li><li>stock</b> = The stock data of the variation</li></ul> For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas.

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdGet($item_id, $variation_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |
| **variation_id** | **int**|  | |
| **with** | **string**| Includes the specified variation information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;properties&lt;/b&gt; &#x3D; The properties linked to the variation&lt;/li&gt;&lt;li&gt;variationProperties&lt;/b&gt; &#x3D; The properties linked to the variation&lt;/li&gt;&lt;li&gt;variationBarcodes&lt;/b&gt; &#x3D; The barcode linked to the variation and the saved code&lt;/li&gt;&lt;li&gt;variationBundleComponents&lt;/b&gt; &#x3D; The bundle components of the variation and their quantities&lt;/li&gt;&lt;li&gt;variationComponentBundles&lt;/b&gt; &#x3D; The bundles that this variation is a component of&lt;/li&gt;&lt;li&gt;variationSalesPrices&lt;/b&gt; &#x3D; The sales prices linked to the variation and the saved price&lt;/li&gt;&lt;li&gt;marketItemNumbers&lt;/b&gt; &#x3D; The market ident number of the variation&lt;/li&gt;&lt;li&gt;variationCategories&lt;/b&gt; &#x3D; The categories linked to the variation&lt;/li&gt;&lt;li&gt;variationClients&lt;/b&gt; &#x3D; The clients (stores) for which the variation is activated&lt;/li&gt;&lt;li&gt;variationMarkets&lt;/b&gt; &#x3D; The markets for which the variation is activated &lt;/li&gt;&lt;li&gt;variationDefaultCategory&lt;/b&gt; &#x3D; The default category of the variation&lt;/li&gt;&lt;li&gt;variationSuppliers&lt;/b&gt; &#x3D; The supplier data associated with the variation&lt;/li&gt;&lt;li&gt;variationWarehouses&lt;/b&gt; &#x3D; The warehouse data associated with the variation&lt;/li&gt;&lt;li&gt;images&lt;/b&gt; &#x3D; The images linked to the variation&lt;/li&gt;&lt;li&gt;itemImages&lt;/b&gt; &#x3D; The images linked to the item&lt;/li&gt;&lt;li&gt;variationAttributeValues&lt;/b&gt; &#x3D; The attribute values of the variation&lt;/li&gt;&lt;li&gt;variationSkus&lt;/b&gt; &#x3D; The SKU data associated with the variation&lt;/li&gt;&lt;li&gt;variationAdditionalSkus&lt;/b&gt; &#x3D; The additional SKU data associated with the variation&lt;/li&gt;&lt;li&gt;unit&lt;/b&gt; &#x3D; The unit assigned to the variation&lt;/li&gt;&lt;li&gt;parent&lt;/b&gt; &#x3D; The main variation of the variation. Value is null if this variation is the item&#39;s main variation.&lt;/li&gt;&lt;li&gt;item&lt;/b&gt; &#x3D; The item of the variation&lt;/li&gt;&lt;li&gt;stock&lt;/b&gt; &#x3D; The stock data of the variation&lt;/li&gt;&lt;/ul&gt; For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas. | [optional] |

### Return type

[**\ck/plenty-client\Model\Variation**](../Model/Variation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdVariationsVariationIdPut()`

```php
restItemsItemIdVariationsVariationIdPut($item_id, $variation_id, $_rest_items_item_id_variations_variation_id): \ck/plenty-client\Model\Variation
```

Update a variation

Updates a variation. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int
$variation_id = 56; // int
$_rest_items_item_id_variations_variation_id = new \ck/plenty-client\Model\RestItemsItemIdVariationsVariationIdPutRequest(); // \ck/plenty-client\Model\RestItemsItemIdVariationsVariationIdPutRequest

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdPut($item_id, $variation_id, $_rest_items_item_id_variations_variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |
| **variation_id** | **int**|  | |
| **_rest_items_item_id_variations_variation_id** | [**\ck/plenty-client\Model\RestItemsItemIdVariationsVariationIdPutRequest**](../Model/RestItemsItemIdVariationsVariationIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Variation**](../Model/Variation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsGet()`

```php
restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsGet($item_id, $variation_id, $property_id): \ck/plenty-client\Model\VariationPropertyValueText[]
```

Get property value texts

Gets the texts saved for a specific property of the type Text in all available languages. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int
$variation_id = 56; // int
$property_id = 56; // int

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsGet($item_id, $variation_id, $property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |
| **variation_id** | **int**|  | |
| **property_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationPropertyValueText[]**](../Model/VariationPropertyValueText.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangDelete()`

```php
restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangDelete($item_id, $variation_id, $property_id, $lang): object
```

Delete property value text by language

Deletes the text saved for a specific property of the type Text in the specified language. The ID of the property  and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int
$variation_id = 56; // int
$property_id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangDelete($item_id, $variation_id, $property_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |
| **variation_id** | **int**|  | |
| **property_id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangGet()`

```php
restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangGet($item_id, $variation_id, $property_id, $lang): \ck/plenty-client\Model\VariationPropertyValueText
```

Get property value text by language

Gets the value text saved for a specific property of the type Text in the specified language. The ID of the property  and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int
$variation_id = 56; // int
$property_id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangGet($item_id, $variation_id, $property_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |
| **variation_id** | **int**|  | |
| **property_id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\VariationPropertyValueText**](../Model/VariationPropertyValueText.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangPut()`

```php
restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangPut($item_id, $variation_id, $property_id, $lang, $_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts_lang): \ck/plenty-client\Model\VariationPropertyValueText
```

Update property value text by language

Updates the text saved for a specific property of the type Text in the specified language. The ID of the property and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int
$variation_id = 56; // int
$property_id = 56; // int
$lang = 56; // int
$_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts_lang = new \ck/plenty-client\Model\RestItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPostRequest(); // \ck/plenty-client\Model\RestItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPostRequest

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangPut($item_id, $variation_id, $property_id, $lang, $_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |
| **variation_id** | **int**|  | |
| **property_id** | **int**|  | |
| **lang** | **int**|  | |
| **_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts_lang** | [**\ck/plenty-client\Model\RestItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPostRequest**](../Model/RestItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationPropertyValueText**](../Model/VariationPropertyValueText.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPost()`

```php
restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPost($item_id, $variation_id, $property_id, $_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts): \ck/plenty-client\Model\VariationPropertyValueText
```

Create property value text by language

Saves text for a specific property of the type Text in the specified language. The ID of the property and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int
$variation_id = 56; // int
$property_id = 56; // int
$_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts = new \ck/plenty-client\Model\RestItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPostRequest(); // \ck/plenty-client\Model\RestItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPostRequest

try {
    $result = $apiInstance->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPost($item_id, $variation_id, $property_id, $_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **int**|  | |
| **variation_id** | **int**|  | |
| **property_id** | **int**|  | |
| **_rest_items_item_id_variations_variation_id_variation_properties_property_id_texts** | [**\ck/plenty-client\Model\RestItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPostRequest**](../Model/RestItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\VariationPropertyValueText**](../Model/VariationPropertyValueText.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemShippingProfilesGet()`

```php
restItemsItemShippingProfilesGet(): \ck/plenty-client\Model\RestAccountsContactsSalesRepresentativeRegionsGet200Response
```

List all shipping profiles of all items

Lists all shipping profiles of all items. Results can be filtered by the timestamp of the link between items and shipping profiles (eq, lt, lte, gt, gte, between). <ul> <li>eq = Equal to</li> <li>gte = Greater than or equal to</li> <li>gt = Greater than</li> <li>lte = Less than or equal to</li> <li>lt = Less than</li> <li>between = Date range</li> </ul> Example: updated=gt:2018-04-16 16:00:00 returns all items with shipping profiles that were activated after 4pm on the 16th of April 2018.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemsItemShippingProfilesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemShippingProfilesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\RestAccountsContactsSalesRepresentativeRegionsGet200Response**](../Model/RestAccountsContactsSalesRepresentativeRegionsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsItemShippingProfilesPost()`

```php
restItemsItemShippingProfilesPost(): object
```

Bulk activate shipping profiles

Activates up to 50 shipping profiles for items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemsItemShippingProfilesPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsItemShippingProfilesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsLabelsGet()`

```php
restItemsLabelsGet(): object[]
```

List item label templates

Lists the ID and name of all item label templates saved in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemsLabelsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsLabelsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsManufacturersGet()`

```php
restItemsManufacturersGet($with, $updated_at, $name): \ck/plenty-client\Model\RestItemsManufacturersGet200Response
```

List manufacturers

Lists all manufacturers in the system.  Display a listing of the resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified manufacturer information in the results. The following parameters are available: commissions, externals
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to records updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
$name = 'name_example'; // string | Filter restricts the list of results to records with specified name.

try {
    $result = $apiInstance->restItemsManufacturersGet($with, $updated_at, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified manufacturer information in the results. The following parameters are available: commissions, externals | [optional] |
| **updated_at** | **string**| Filter restricts the list of results to records updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional] |
| **name** | **string**| Filter restricts the list of results to records with specified name. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsManufacturersGet200Response**](../Model/RestItemsManufacturersGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsManufacturersIdCommissionsGet()`

```php
restItemsManufacturersIdCommissionsGet($id): \ck/plenty-client\Model\ManufacturerCommission[]
```

List commissions

Lists all commissions associated with a manufacturer. The ID of the manufacturer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsManufacturersIdCommissionsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdCommissionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ManufacturerCommission[]**](../Model/ManufacturerCommission.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsManufacturersIdCommissionsManufacturerIdDelete()`

```php
restItemsManufacturersIdCommissionsManufacturerIdDelete($id, $manufacturer_id): object
```

Delete a commission

Delete a commission. The ID of the commission must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$manufacturer_id = 56; // int

try {
    $result = $apiInstance->restItemsManufacturersIdCommissionsManufacturerIdDelete($id, $manufacturer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdCommissionsManufacturerIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **manufacturer_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsManufacturersIdCommissionsManufacturerIdGet()`

```php
restItemsManufacturersIdCommissionsManufacturerIdGet($id, $manufacturer_id): \ck/plenty-client\Model\ManufacturerCommission
```

Get a commission

Gets a commission for a manufacturer. The ID of the commission must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$manufacturer_id = 56; // int

try {
    $result = $apiInstance->restItemsManufacturersIdCommissionsManufacturerIdGet($id, $manufacturer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdCommissionsManufacturerIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **manufacturer_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ManufacturerCommission**](../Model/ManufacturerCommission.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsManufacturersIdCommissionsManufacturerIdPut()`

```php
restItemsManufacturersIdCommissionsManufacturerIdPut($id, $manufacturer_id): \ck/plenty-client\Model\ManufacturerCommission
```

Update a commission

Updates a commission. The ID of the commission must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$manufacturer_id = 56; // int

try {
    $result = $apiInstance->restItemsManufacturersIdCommissionsManufacturerIdPut($id, $manufacturer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdCommissionsManufacturerIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **manufacturer_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ManufacturerCommission**](../Model/ManufacturerCommission.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsManufacturersIdCommissionsPost()`

```php
restItemsManufacturersIdCommissionsPost($id): \ck/plenty-client\Model\ManufacturerCommission
```

Create a commission

Creates a commission for a manufacturer. The ID of the manufacturer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsManufacturersIdCommissionsPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdCommissionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ManufacturerCommission**](../Model/ManufacturerCommission.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsManufacturersIdDelete()`

```php
restItemsManufacturersIdDelete($id): object
```

Delete a manufacturer

Deletes a manufacturer. The ID of the manufacturer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsManufacturersIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsManufacturersIdGet()`

```php
restItemsManufacturersIdGet($id): \ck/plenty-client\Model\Manufacturer
```

Get a manufacturer

Gets a manufacturer. The ID of the manufacturer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsManufacturersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\Manufacturer**](../Model/Manufacturer.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsManufacturersIdPut()`

```php
restItemsManufacturersIdPut($id): \ck/plenty-client\Model\Manufacturer
```

Update a manufacturer

Updates a manufacturer. The ID of the manufacturer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsManufacturersIdPut($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\Manufacturer**](../Model/Manufacturer.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsManufacturersPost()`

```php
restItemsManufacturersPost(): \ck/plenty-client\Model\Manufacturer
```

Create a manufacturer

Creates a manufacturer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemsManufacturersPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsManufacturersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\Manufacturer**](../Model/Manufacturer.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPackingUnitsGet()`

```php
restItemsPackingUnitsGet($language): \ck/plenty-client\Model\PackingUnit[]
```

Get the item variation packing units

Returns the packing units for the item variations based on the language wanted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = 'language_example'; // string | The language to return the unit name for. If no language is provided, all the languages will be returned

try {
    $result = $apiInstance->restItemsPackingUnitsGet($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPackingUnitsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **language** | **string**| The language to return the unit name for. If no language is provided, all the languages will be returned | [optional] |

### Return type

[**\ck/plenty-client\Model\PackingUnit[]**](../Model/PackingUnit.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPackingUnitsIdGet()`

```php
restItemsPackingUnitsIdGet($id, $language, $is_unit_id): \ck/plenty-client\Model\PackingUnit
```

Get the item variation packing unit for a specific given id

Returns the packing unit for the item variations based on the given ID, the language wanted and the flag to say if the ID provided is the a unit ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the packing unit
$language = 'language_example'; // string | The language to return the unit name for. If no language is provided, all the languages will be returned
$is_unit_id = True; // bool | A flag to say if the ID provided is the unit ID or not. If true, the unit ID will be taken into account to get the result

try {
    $result = $apiInstance->restItemsPackingUnitsIdGet($id, $language, $is_unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPackingUnitsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the packing unit | |
| **language** | **string**| The language to return the unit name for. If no language is provided, all the languages will be returned | [optional] |
| **is_unit_id** | **bool**| A flag to say if the ID provided is the unit ID or not. If true, the unit ID will be taken into account to get the result | [optional] |

### Return type

[**\ck/plenty-client\Model\PackingUnit**](../Model/PackingUnit.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPost()`

```php
restItemsPost($_rest_items): \ck/plenty-client\Model\Item
```

Create new items

Create new items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items = new \ck/plenty-client\Model\RestItemsPostRequest(); // \ck/plenty-client\Model\RestItemsPostRequest

try {
    $result = $apiInstance->restItemsPost($_rest_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items** | [**\ck/plenty-client\Model\RestItemsPostRequest**](../Model/RestItemsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Item**](../Model/Item.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesGet()`

```php
restItemsPropertiesGet($with, $updated_at, $group_id, $page, $items_per_page): \ck/plenty-client\Model\RestItemsPropertiesGet200Response
```

List properties

Lists all properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified property information in the results. The following parameters are available: <ul><li>names</b> = The names of the property</li><li>group</b> = The property group assigned to the property</li><li>marketComponents</b> = Lists the markets where the property is available </li><li>selections</b> = Lists the selections of the property</li></ul> More than one parameter should be separated by commas.
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
$group_id = 'group_id_example'; // string | Filter restricts the list of results to items linked to a specified property group
$page = 56; // int | Limits the results to a specific page. The page number must be specified.
$items_per_page = 56; // int | Limits the number of results listed per page to a specific number. The number of properties to be listed per page must be specified.

try {
    $result = $apiInstance->restItemsPropertiesGet($with, $updated_at, $group_id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified property information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;names&lt;/b&gt; &#x3D; The names of the property&lt;/li&gt;&lt;li&gt;group&lt;/b&gt; &#x3D; The property group assigned to the property&lt;/li&gt;&lt;li&gt;marketComponents&lt;/b&gt; &#x3D; Lists the markets where the property is available &lt;/li&gt;&lt;li&gt;selections&lt;/b&gt; &#x3D; Lists the selections of the property&lt;/li&gt;&lt;/ul&gt; More than one parameter should be separated by commas. | [optional] |
| **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional] |
| **group_id** | **string**| Filter restricts the list of results to items linked to a specified property group | [optional] |
| **page** | **int**| Limits the results to a specific page. The page number must be specified. | [optional] |
| **items_per_page** | **int**| Limits the number of results listed per page to a specific number. The number of properties to be listed per page must be specified. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsPropertiesGet200Response**](../Model/RestItemsPropertiesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesIdDelete()`

```php
restItemsPropertiesIdDelete($id)
```

Delete a property

Deletes a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->restItemsPropertiesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesIdGet()`

```php
restItemsPropertiesIdGet($id): \ck/plenty-client\Model\Property
```

Get a property

Gets a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsPropertiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\Property**](../Model/Property.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesIdMarketReferencesGet()`

```php
restItemsPropertiesIdMarketReferencesGet($id): \ck/plenty-client\Model\PropertyMarketReference[]
```

List property market references

Lists the property market references of a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsPropertiesIdMarketReferencesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdMarketReferencesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertyMarketReference[]**](../Model/PropertyMarketReference.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesIdMarketReferencesMarketIdDelete()`

```php
restItemsPropertiesIdMarketReferencesMarketIdDelete($id, $market_id): object
```

Delete a property market reference

Deletes a property market reference. The ID of the property and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$market_id = 56; // int

try {
    $result = $apiInstance->restItemsPropertiesIdMarketReferencesMarketIdDelete($id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdMarketReferencesMarketIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **market_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesIdMarketReferencesMarketIdGet()`

```php
restItemsPropertiesIdMarketReferencesMarketIdGet($id, $market_id): \ck/plenty-client\Model\PropertyMarketReference
```

Get a property market reference

Gets a property market reference. The market ID and the property ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$market_id = 56; // int

try {
    $result = $apiInstance->restItemsPropertiesIdMarketReferencesMarketIdGet($id, $market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdMarketReferencesMarketIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **market_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertyMarketReference**](../Model/PropertyMarketReference.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesIdMarketReferencesMarketIdPut()`

```php
restItemsPropertiesIdMarketReferencesMarketIdPut($id, $market_id, $_rest_items_properties_id_market_references_market_id): \ck/plenty-client\Model\PropertyMarketReference
```

Update a property market reference

Updates a property market reference.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$market_id = 56; // int
$_rest_items_properties_id_market_references_market_id = new \ck/plenty-client\Model\RestItemsPropertiesIdMarketReferencesPostRequest(); // \ck/plenty-client\Model\RestItemsPropertiesIdMarketReferencesPostRequest

try {
    $result = $apiInstance->restItemsPropertiesIdMarketReferencesMarketIdPut($id, $market_id, $_rest_items_properties_id_market_references_market_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdMarketReferencesMarketIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **market_id** | **int**|  | |
| **_rest_items_properties_id_market_references_market_id** | [**\ck/plenty-client\Model\RestItemsPropertiesIdMarketReferencesPostRequest**](../Model/RestItemsPropertiesIdMarketReferencesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyMarketReference**](../Model/PropertyMarketReference.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesIdMarketReferencesPost()`

```php
restItemsPropertiesIdMarketReferencesPost($id, $_rest_items_properties_id_market_references): \ck/plenty-client\Model\PropertyMarketReference
```

Create a property market reference

Creates a property market reference.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_properties_id_market_references = new \ck/plenty-client\Model\RestItemsPropertiesIdMarketReferencesPostRequest(); // \ck/plenty-client\Model\RestItemsPropertiesIdMarketReferencesPostRequest

try {
    $result = $apiInstance->restItemsPropertiesIdMarketReferencesPost($id, $_rest_items_properties_id_market_references);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdMarketReferencesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_properties_id_market_references** | [**\ck/plenty-client\Model\RestItemsPropertiesIdMarketReferencesPostRequest**](../Model/RestItemsPropertiesIdMarketReferencesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyMarketReference**](../Model/PropertyMarketReference.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesIdNamesGet()`

```php
restItemsPropertiesIdNamesGet($id): \ck/plenty-client\Model\PropertyName[]
```

List the property names

Lists the names of a property in all languages. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsPropertiesIdNamesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertyName[]**](../Model/PropertyName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesIdNamesLangDelete()`

```php
restItemsPropertiesIdNamesLangDelete($id, $lang)
```

Delete a property name

Deletes a property name. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$lang = 56; // int

try {
    $apiInstance->restItemsPropertiesIdNamesLangDelete($id, $lang);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdNamesLangDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesIdNamesLangGet()`

```php
restItemsPropertiesIdNamesLangGet($id, $lang): \ck/plenty-client\Model\PropertyName
```

Get a property name

Gets a property name in a specified language. The ID of the property and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsPropertiesIdNamesLangGet($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertyName**](../Model/PropertyName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesIdNamesLangPut()`

```php
restItemsPropertiesIdNamesLangPut($id, $lang, $_rest_items_properties_id_names_lang): \ck/plenty-client\Model\PropertyName
```

Update a property name

Updates a property name. The ID of the property and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$lang = 56; // int
$_rest_items_properties_id_names_lang = new \ck/plenty-client\Model\RestItemsPropertiesIdNamesPostRequest(); // \ck/plenty-client\Model\RestItemsPropertiesIdNamesPostRequest

try {
    $result = $apiInstance->restItemsPropertiesIdNamesLangPut($id, $lang, $_rest_items_properties_id_names_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdNamesLangPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **lang** | **int**|  | |
| **_rest_items_properties_id_names_lang** | [**\ck/plenty-client\Model\RestItemsPropertiesIdNamesPostRequest**](../Model/RestItemsPropertiesIdNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyName**](../Model/PropertyName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesIdNamesPost()`

```php
restItemsPropertiesIdNamesPost($id, $_rest_items_properties_id_names): \ck/plenty-client\Model\PropertyName
```

Create a property name

Creates a property name. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_properties_id_names = new \ck/plenty-client\Model\RestItemsPropertiesIdNamesPostRequest(); // \ck/plenty-client\Model\RestItemsPropertiesIdNamesPostRequest

try {
    $result = $apiInstance->restItemsPropertiesIdNamesPost($id, $_rest_items_properties_id_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdNamesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_properties_id_names** | [**\ck/plenty-client\Model\RestItemsPropertiesIdNamesPostRequest**](../Model/RestItemsPropertiesIdNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyName**](../Model/PropertyName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesIdPut()`

```php
restItemsPropertiesIdPut($id, $_rest_items_properties_id): \ck/plenty-client\Model\Property
```

Update a property

Updates a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_properties_id = new \ck/plenty-client\Model\RestItemsPropertiesPostRequest(); // \ck/plenty-client\Model\RestItemsPropertiesPostRequest

try {
    $result = $apiInstance->restItemsPropertiesIdPut($id, $_rest_items_properties_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_properties_id** | [**\ck/plenty-client\Model\RestItemsPropertiesPostRequest**](../Model/RestItemsPropertiesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Property**](../Model/Property.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesPost()`

```php
restItemsPropertiesPost($_rest_items_properties): \ck/plenty-client\Model\Property
```

Create a property

Creates a property.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_properties = new \ck/plenty-client\Model\RestItemsPropertiesPostRequest(); // \ck/plenty-client\Model\RestItemsPropertiesPostRequest

try {
    $result = $apiInstance->restItemsPropertiesPost($_rest_items_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_properties** | [**\ck/plenty-client\Model\RestItemsPropertiesPostRequest**](../Model/RestItemsPropertiesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Property**](../Model/Property.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesPropertyIdSelectionsGet()`

```php
restItemsPropertiesPropertyIdSelectionsGet($property_id): \ck/plenty-client\Model\PropertySelection[]
```

List property selections

Lists the property selections of a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsGet($property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertySelection[]**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesPropertyIdSelectionsIdDelete()`

```php
restItemsPropertiesPropertyIdSelectionsIdDelete($property_id, $id): object
```

Delete a property selection

Deletes a property selection. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int
$id = 56; // int

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsIdDelete($property_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**|  | |
| **id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesPropertyIdSelectionsIdGet()`

```php
restItemsPropertiesPropertyIdSelectionsIdGet($property_id, $id): \ck/plenty-client\Model\PropertySelection[]
```

Get a property selection

Gets a property selection of a property.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int
$id = 56; // int

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsIdGet($property_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**|  | |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertySelection[]**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesPropertyIdSelectionsIdLangDelete()`

```php
restItemsPropertiesPropertyIdSelectionsIdLangDelete($property_id, $id, $lang): object
```

Delete a property selection language

Deletes a property selection language. The ID of the selection and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int
$id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsIdLangDelete($property_id, $id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsIdLangDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**|  | |
| **id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesPropertyIdSelectionsIdLangGet()`

```php
restItemsPropertiesPropertyIdSelectionsIdLangGet($property_id, $id, $lang): \ck/plenty-client\Model\PropertySelection
```

List property selections by language

Lists the property selections of a property for a specific language. The ID and language of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int
$id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsIdLangGet($property_id, $id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsIdLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**|  | |
| **id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertySelection**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesPropertyIdSelectionsIdLangPut()`

```php
restItemsPropertiesPropertyIdSelectionsIdLangPut($property_id, $id, $lang, $_rest_items_properties_property_id_selections_id_lang): \ck/plenty-client\Model\PropertySelection
```

Update a property selection

Updates a property selection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int
$id = 56; // int
$lang = 56; // int
$_rest_items_properties_property_id_selections_id_lang = new \ck/plenty-client\Model\RestItemsPropertiesPropertyIdSelectionsPostRequest(); // \ck/plenty-client\Model\RestItemsPropertiesPropertyIdSelectionsPostRequest

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsIdLangPut($property_id, $id, $lang, $_rest_items_properties_property_id_selections_id_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsIdLangPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**|  | |
| **id** | **int**|  | |
| **lang** | **int**|  | |
| **_rest_items_properties_property_id_selections_id_lang** | [**\ck/plenty-client\Model\RestItemsPropertiesPropertyIdSelectionsPostRequest**](../Model/RestItemsPropertiesPropertyIdSelectionsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertySelection**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesPropertyIdSelectionsIdPost()`

```php
restItemsPropertiesPropertyIdSelectionsIdPost($property_id, $id, $_rest_items_properties_property_id_selections_id): \ck/plenty-client\Model\PropertySelection
```

Creates a property selection lang

Creates a property selection lang.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int
$id = 56; // int
$_rest_items_properties_property_id_selections_id = new \ck/plenty-client\Model\RestItemsPropertiesPropertyIdSelectionsPostRequest(); // \ck/plenty-client\Model\RestItemsPropertiesPropertyIdSelectionsPostRequest

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsIdPost($property_id, $id, $_rest_items_properties_property_id_selections_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**|  | |
| **id** | **int**|  | |
| **_rest_items_properties_property_id_selections_id** | [**\ck/plenty-client\Model\RestItemsPropertiesPropertyIdSelectionsPostRequest**](../Model/RestItemsPropertiesPropertyIdSelectionsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertySelection**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesPropertyIdSelectionsLangGet()`

```php
restItemsPropertiesPropertyIdSelectionsLangGet($property_id, $lang): \ck/plenty-client\Model\PropertySelection[]
```

List property selections

Lists the property selections of a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsLangGet($property_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertySelection[]**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertiesPropertyIdSelectionsPost()`

```php
restItemsPropertiesPropertyIdSelectionsPost($property_id, $_rest_items_properties_property_id_selections): \ck/plenty-client\Model\PropertySelection
```

Create a property selection

Creates a property selection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = 56; // int
$_rest_items_properties_property_id_selections = new \ck/plenty-client\Model\RestItemsPropertiesPropertyIdSelectionsPostRequest(); // \ck/plenty-client\Model\RestItemsPropertiesPropertyIdSelectionsPostRequest

try {
    $result = $apiInstance->restItemsPropertiesPropertyIdSelectionsPost($property_id, $_rest_items_properties_property_id_selections);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertiesPropertyIdSelectionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_id** | **int**|  | |
| **_rest_items_properties_property_id_selections** | [**\ck/plenty-client\Model\RestItemsPropertiesPropertyIdSelectionsPostRequest**](../Model/RestItemsPropertiesPropertyIdSelectionsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertySelection**](../Model/PropertySelection.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertyGroupsGet()`

```php
restItemsPropertyGroupsGet($with): \ck/plenty-client\Model\RestItemsPropertyGroupsGet200Response
```

List property groups

Lists the property groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified property group information in the results. The following parameters are available: <ul><li>names</b> = The names of the property group</li><li>properties</b> = The properties that are assigned to the property group</li></ul> More than one parameter should be separated by commas.

try {
    $result = $apiInstance->restItemsPropertyGroupsGet($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified property group information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;names&lt;/b&gt; &#x3D; The names of the property group&lt;/li&gt;&lt;li&gt;properties&lt;/b&gt; &#x3D; The properties that are assigned to the property group&lt;/li&gt;&lt;/ul&gt; More than one parameter should be separated by commas. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsPropertyGroupsGet200Response**](../Model/RestItemsPropertyGroupsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertyGroupsIdDelete()`

```php
restItemsPropertyGroupsIdDelete($id): object
```

Delete a property group

Deletes a property group. The ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsPropertyGroupsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertyGroupsIdGet()`

```php
restItemsPropertyGroupsIdGet($id): \ck/plenty-client\Model\PropertyGroup
```

Get a property group

Gets a property group. The ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsPropertyGroupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertyGroup**](../Model/PropertyGroup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertyGroupsIdNamesGet()`

```php
restItemsPropertyGroupsIdNamesGet($id): \ck/plenty-client\Model\PropertyGroupName[]
```

List the property group names of a property group

Lists the property group names of a property group in all languages. The ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsPropertyGroupsIdNamesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertyGroupName[]**](../Model/PropertyGroupName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertyGroupsIdNamesLangDelete()`

```php
restItemsPropertyGroupsIdNamesLangDelete($id, $lang): object
```

Delete a property group name

Deletes a property group name. The ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsPropertyGroupsIdNamesLangDelete($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdNamesLangDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertyGroupsIdNamesLangGet()`

```php
restItemsPropertyGroupsIdNamesLangGet($id, $lang): \ck/plenty-client\Model\PropertyGroupName
```

Get a property group name in a language

Gets a property group name in the specified language. The ID of the property group name and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsPropertyGroupsIdNamesLangGet($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\PropertyGroupName**](../Model/PropertyGroupName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertyGroupsIdNamesLangPut()`

```php
restItemsPropertyGroupsIdNamesLangPut($id, $lang, $_rest_items_property_groups_id_names_lang): \ck/plenty-client\Model\PropertyGroupName
```

Update a property group name

Updates a property group name. The ID of the property group and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$lang = 56; // int
$_rest_items_property_groups_id_names_lang = new \ck/plenty-client\Model\RestItemsPropertyGroupsIdNamesPostRequest(); // \ck/plenty-client\Model\RestItemsPropertyGroupsIdNamesPostRequest

try {
    $result = $apiInstance->restItemsPropertyGroupsIdNamesLangPut($id, $lang, $_rest_items_property_groups_id_names_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdNamesLangPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **lang** | **int**|  | |
| **_rest_items_property_groups_id_names_lang** | [**\ck/plenty-client\Model\RestItemsPropertyGroupsIdNamesPostRequest**](../Model/RestItemsPropertyGroupsIdNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyGroupName**](../Model/PropertyGroupName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertyGroupsIdNamesPost()`

```php
restItemsPropertyGroupsIdNamesPost($id, $_rest_items_property_groups_id_names): \ck/plenty-client\Model\PropertyGroupName
```

Create a property group name

Creates a property group name. The ID of the property group must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_property_groups_id_names = new \ck/plenty-client\Model\RestItemsPropertyGroupsIdNamesPostRequest(); // \ck/plenty-client\Model\RestItemsPropertyGroupsIdNamesPostRequest

try {
    $result = $apiInstance->restItemsPropertyGroupsIdNamesPost($id, $_rest_items_property_groups_id_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdNamesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_property_groups_id_names** | [**\ck/plenty-client\Model\RestItemsPropertyGroupsIdNamesPostRequest**](../Model/RestItemsPropertyGroupsIdNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyGroupName**](../Model/PropertyGroupName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertyGroupsIdPut()`

```php
restItemsPropertyGroupsIdPut($id, $_rest_items_property_groups_id): \ck/plenty-client\Model\PropertyGroup
```

Update a property group

Updates an existing property group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_property_groups_id = new \ck/plenty-client\Model\RestItemsPropertyGroupsPostRequest(); // \ck/plenty-client\Model\RestItemsPropertyGroupsPostRequest

try {
    $result = $apiInstance->restItemsPropertyGroupsIdPut($id, $_rest_items_property_groups_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_property_groups_id** | [**\ck/plenty-client\Model\RestItemsPropertyGroupsPostRequest**](../Model/RestItemsPropertyGroupsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyGroup**](../Model/PropertyGroup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPropertyGroupsPost()`

```php
restItemsPropertyGroupsPost($_rest_items_property_groups): \ck/plenty-client\Model\PropertyGroup
```

Create a property group

Creates a property group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_property_groups = new \ck/plenty-client\Model\RestItemsPropertyGroupsPostRequest(); // \ck/plenty-client\Model\RestItemsPropertyGroupsPostRequest

try {
    $result = $apiInstance->restItemsPropertyGroupsPost($_rest_items_property_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPropertyGroupsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_property_groups** | [**\ck/plenty-client\Model\RestItemsPropertyGroupsPostRequest**](../Model/RestItemsPropertyGroupsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\PropertyGroup**](../Model/PropertyGroup.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsPut()`

```php
restItemsPut($_rest_items): object
```

Bulk update items

Updates up to 50 items. The ID of the item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items = new \ck/plenty-client\Model\RestItemsPutRequest(); // \ck/plenty-client\Model\RestItemsPutRequest

try {
    $result = $apiInstance->restItemsPut($_rest_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items** | [**\ck/plenty-client\Model\RestItemsPutRequest**](../Model/RestItemsPutRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesGet()`

```php
restItemsSalesPricesGet($updated_at): \ck/plenty-client\Model\RestItemsSalesPricesGet200Response
```

List sales prices

Lists all sales prices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restItemsSalesPricesGet($updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsSalesPricesGet200Response**](../Model/RestItemsSalesPricesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdAccountsAccountTypeAccountIdDelete()`

```php
restItemsSalesPricesIdAccountsAccountTypeAccountIdDelete($id, $account_type, $account_id): object
```

Deactivate a referrer account

Deactivates a referrer account for a sales price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$account_type = 56; // int
$account_id = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdAccountsAccountTypeAccountIdDelete($id, $account_type, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdAccountsAccountTypeAccountIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **account_type** | **int**|  | |
| **account_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdAccountsGet()`

```php
restItemsSalesPricesIdAccountsGet($id): \ck/plenty-client\Model\SalesPriceAccount[]
```

List referrer accounts

Lists all activated referrer accounts of a sales price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdAccountsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdAccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\SalesPriceAccount[]**](../Model/SalesPriceAccount.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdAccountsPost()`

```php
restItemsSalesPricesIdAccountsPost($id, $_rest_items_sales_prices_id_accounts): \ck/plenty-client\Model\SalesPriceAccount
```

Activate a referrer account

Activates a referrer account for a sales price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_sales_prices_id_accounts = new \ck/plenty-client\Model\RestItemsSalesPricesIdAccountsPostRequest(); // \ck/plenty-client\Model\RestItemsSalesPricesIdAccountsPostRequest

try {
    $result = $apiInstance->restItemsSalesPricesIdAccountsPost($id, $_rest_items_sales_prices_id_accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdAccountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_sales_prices_id_accounts** | [**\ck/plenty-client\Model\RestItemsSalesPricesIdAccountsPostRequest**](../Model/RestItemsSalesPricesIdAccountsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\SalesPriceAccount**](../Model/SalesPriceAccount.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdCountriesCountryIdDelete()`

```php
restItemsSalesPricesIdCountriesCountryIdDelete($id, $country_id): object
```

Deactivate a country

Deactivates a country for a sales price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$country_id = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdCountriesCountryIdDelete($id, $country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCountriesCountryIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **country_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdCountriesGet()`

```php
restItemsSalesPricesIdCountriesGet($id): \ck/plenty-client\Model\SalesPriceCountry[]
```

List countries by sales price

Lists active countries for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdCountriesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCountriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\SalesPriceCountry[]**](../Model/SalesPriceCountry.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdCountriesPost()`

```php
restItemsSalesPricesIdCountriesPost($id, $_rest_items_sales_prices_id_countries): \ck/plenty-client\Model\SalesPriceCountry
```

Activate a country

Activates a country for a sales price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_sales_prices_id_countries = new \ck/plenty-client\Model\RestItemsSalesPricesIdCountriesPostRequest(); // \ck/plenty-client\Model\RestItemsSalesPricesIdCountriesPostRequest

try {
    $result = $apiInstance->restItemsSalesPricesIdCountriesPost($id, $_rest_items_sales_prices_id_countries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCountriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_sales_prices_id_countries** | [**\ck/plenty-client\Model\RestItemsSalesPricesIdCountriesPostRequest**](../Model/RestItemsSalesPricesIdCountriesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\SalesPriceCountry**](../Model/SalesPriceCountry.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdCurrenciesCurrencyDelete()`

```php
restItemsSalesPricesIdCurrenciesCurrencyDelete($id, $currency): object
```

Deactivate a currency

Deactivate a currency for a sales price. The ID of the sales price and the ISO code of the currency must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$currency = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdCurrenciesCurrencyDelete($id, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCurrenciesCurrencyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **currency** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdCurrenciesGet()`

```php
restItemsSalesPricesIdCurrenciesGet($id): \ck/plenty-client\Model\SalesPriceCurrency[]
```

List activated currencies

List all currencies activated for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdCurrenciesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCurrenciesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\SalesPriceCurrency[]**](../Model/SalesPriceCurrency.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdCurrenciesPost()`

```php
restItemsSalesPricesIdCurrenciesPost($id, $_rest_items_sales_prices_id_currencies): \ck/plenty-client\Model\SalesPriceCurrency
```

Activate a currency

Activates a currency for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_sales_prices_id_currencies = new \ck/plenty-client\Model\RestItemsSalesPricesIdCurrenciesPostRequest(); // \ck/plenty-client\Model\RestItemsSalesPricesIdCurrenciesPostRequest

try {
    $result = $apiInstance->restItemsSalesPricesIdCurrenciesPost($id, $_rest_items_sales_prices_id_currencies);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCurrenciesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_sales_prices_id_currencies** | [**\ck/plenty-client\Model\RestItemsSalesPricesIdCurrenciesPostRequest**](../Model/RestItemsSalesPricesIdCurrenciesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\SalesPriceCurrency**](../Model/SalesPriceCurrency.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdCustomerClassesCustomerClassIdDelete()`

```php
restItemsSalesPricesIdCustomerClassesCustomerClassIdDelete($id, $customer_class_id): object
```

Activate a customer class

Activates a customer class for a sales price. The ID of the sales price and the ID of the customer class must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$customer_class_id = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdCustomerClassesCustomerClassIdDelete($id, $customer_class_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCustomerClassesCustomerClassIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **customer_class_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdCustomerClassesGet()`

```php
restItemsSalesPricesIdCustomerClassesGet($id): \ck/plenty-client\Model\SalesPriceCustomerClass[]
```

List activated customer classes

Lists the activated customer classes for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdCustomerClassesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCustomerClassesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\SalesPriceCustomerClass[]**](../Model/SalesPriceCustomerClass.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdCustomerClassesPost()`

```php
restItemsSalesPricesIdCustomerClassesPost($id, $_rest_items_sales_prices_id_customer_classes): \ck/plenty-client\Model\SalesPriceCustomerClass
```

Activate a customer class

Activates a customer class for a sales price. The ID of the sales price and the ID of the customer class must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_sales_prices_id_customer_classes = new \ck/plenty-client\Model\RestItemsSalesPricesIdCustomerClassesPostRequest(); // \ck/plenty-client\Model\RestItemsSalesPricesIdCustomerClassesPostRequest

try {
    $result = $apiInstance->restItemsSalesPricesIdCustomerClassesPost($id, $_rest_items_sales_prices_id_customer_classes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdCustomerClassesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_sales_prices_id_customer_classes** | [**\ck/plenty-client\Model\RestItemsSalesPricesIdCustomerClassesPostRequest**](../Model/RestItemsSalesPricesIdCustomerClassesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\SalesPriceCustomerClass**](../Model/SalesPriceCustomerClass.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdDelete()`

```php
restItemsSalesPricesIdDelete($id): object
```

Delete a sales price

Deletes a sales price. The ID of the sales price must be specified.  Delete salesPrice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdGet()`

```php
restItemsSalesPricesIdGet($id): \ck/plenty-client\Model\SalesPrice
```

Get a sales price

Gets the data for a specific sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\SalesPrice**](../Model/SalesPrice.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdNamesGet()`

```php
restItemsSalesPricesIdNamesGet($id): \ck/plenty-client\Model\SalesPriceName[]
```

List names of a sales price

Lists the names of a sales price in all languages. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdNamesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\SalesPriceName[]**](../Model/SalesPriceName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdNamesLangDelete()`

```php
restItemsSalesPricesIdNamesLangDelete($id, $lang): object
```

Delete a sales price name

Deletes the name of a sales price in the specified language. The ID of the sales price and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdNamesLangDelete($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdNamesLangDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdNamesLangGet()`

```php
restItemsSalesPricesIdNamesLangGet($id, $lang): \ck/plenty-client\Model\SalesPriceName
```

Gets a sales price name

Gets the sales price name of a sales price in the specified langauge. The ID of the sales price and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdNamesLangGet($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\SalesPriceName**](../Model/SalesPriceName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdNamesLangPut()`

```php
restItemsSalesPricesIdNamesLangPut($id, $lang, $_rest_items_sales_prices_id_names_lang): \ck/plenty-client\Model\SalesPriceName
```

Update a sales price name

Updates a sales price name in the specified language. The ID of the sales price and the language code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$lang = 56; // int
$_rest_items_sales_prices_id_names_lang = new \ck/plenty-client\Model\RestItemsSalesPricesIdNamesPostRequest(); // \ck/plenty-client\Model\RestItemsSalesPricesIdNamesPostRequest

try {
    $result = $apiInstance->restItemsSalesPricesIdNamesLangPut($id, $lang, $_rest_items_sales_prices_id_names_lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdNamesLangPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **lang** | **int**|  | |
| **_rest_items_sales_prices_id_names_lang** | [**\ck/plenty-client\Model\RestItemsSalesPricesIdNamesPostRequest**](../Model/RestItemsSalesPricesIdNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\SalesPriceName**](../Model/SalesPriceName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdNamesPost()`

```php
restItemsSalesPricesIdNamesPost($id, $_rest_items_sales_prices_id_names): \ck/plenty-client\Model\SalesPriceName
```

Create a sales price name

Creates a name for a sales price in the specified language. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_sales_prices_id_names = new \ck/plenty-client\Model\RestItemsSalesPricesIdNamesPostRequest(); // \ck/plenty-client\Model\RestItemsSalesPricesIdNamesPostRequest

try {
    $result = $apiInstance->restItemsSalesPricesIdNamesPost($id, $_rest_items_sales_prices_id_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdNamesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_sales_prices_id_names** | [**\ck/plenty-client\Model\RestItemsSalesPricesIdNamesPostRequest**](../Model/RestItemsSalesPricesIdNamesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\SalesPriceName**](../Model/SalesPriceName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdOnlineStoresGet()`

```php
restItemsSalesPricesIdOnlineStoresGet($id): \ck/plenty-client\Model\SalesPriceOnlineStore[]
```

List activated clients (stores)

Lists all activated clients (stores) for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdOnlineStoresGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdOnlineStoresGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\SalesPriceOnlineStore[]**](../Model/SalesPriceOnlineStore.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdOnlineStoresPost()`

```php
restItemsSalesPricesIdOnlineStoresPost($id, $_rest_items_sales_prices_id_online_stores): \ck/plenty-client\Model\SalesPriceOnlineStore
```

Activate a client (store)

Activates a client (store) for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_sales_prices_id_online_stores = new \ck/plenty-client\Model\RestItemsSalesPricesIdOnlineStoresPostRequest(); // \ck/plenty-client\Model\RestItemsSalesPricesIdOnlineStoresPostRequest

try {
    $result = $apiInstance->restItemsSalesPricesIdOnlineStoresPost($id, $_rest_items_sales_prices_id_online_stores);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdOnlineStoresPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_sales_prices_id_online_stores** | [**\ck/plenty-client\Model\RestItemsSalesPricesIdOnlineStoresPostRequest**](../Model/RestItemsSalesPricesIdOnlineStoresPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\SalesPriceOnlineStore**](../Model/SalesPriceOnlineStore.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdOnlineStoresWebstoreIdDelete()`

```php
restItemsSalesPricesIdOnlineStoresWebstoreIdDelete($id, $webstore_id): object
```

Deactivate a client (store)

Deactivates a client (store) for a sales price. The ID of the sales price and the ID of the client (store) must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$webstore_id = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdOnlineStoresWebstoreIdDelete($id, $webstore_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdOnlineStoresWebstoreIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **webstore_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdPut()`

```php
restItemsSalesPricesIdPut($id, $_rest_items_sales_prices_id): \ck/plenty-client\Model\SalesPrice
```

Update a sales price

Updates a sales price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_sales_prices_id = new \ck/plenty-client\Model\RestItemsSalesPricesPostRequest(); // \ck/plenty-client\Model\RestItemsSalesPricesPostRequest

try {
    $result = $apiInstance->restItemsSalesPricesIdPut($id, $_rest_items_sales_prices_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_sales_prices_id** | [**\ck/plenty-client\Model\RestItemsSalesPricesPostRequest**](../Model/RestItemsSalesPricesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\SalesPrice**](../Model/SalesPrice.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdReferrersGet()`

```php
restItemsSalesPricesIdReferrersGet($id): \ck/plenty-client\Model\SalesPriceReferrer[]
```

List activated referrers

Lists all activated referrers for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdReferrersGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdReferrersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\SalesPriceReferrer[]**](../Model/SalesPriceReferrer.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdReferrersPost()`

```php
restItemsSalesPricesIdReferrersPost($id, $_rest_items_sales_prices_id_referrers): \ck/plenty-client\Model\SalesPriceReferrer
```

Activate a referrer

Activates a referrer for a sales price. The ID of the sales price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_sales_prices_id_referrers = new \ck/plenty-client\Model\RestItemsSalesPricesIdReferrersPostRequest(); // \ck/plenty-client\Model\RestItemsSalesPricesIdReferrersPostRequest

try {
    $result = $apiInstance->restItemsSalesPricesIdReferrersPost($id, $_rest_items_sales_prices_id_referrers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdReferrersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_sales_prices_id_referrers** | [**\ck/plenty-client\Model\RestItemsSalesPricesIdReferrersPostRequest**](../Model/RestItemsSalesPricesIdReferrersPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\SalesPriceReferrer**](../Model/SalesPriceReferrer.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesIdReferrersReferrerIdDelete()`

```php
restItemsSalesPricesIdReferrersReferrerIdDelete($id, $referrer_id): object
```

Deactivates a referrer

Deactivates a referrer for a sales price. The ID of the sales price and the ID of the referrer must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$referrer_id = 56; // int

try {
    $result = $apiInstance->restItemsSalesPricesIdReferrersReferrerIdDelete($id, $referrer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesIdReferrersReferrerIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **referrer_id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsSalesPricesPost()`

```php
restItemsSalesPricesPost($_rest_items_sales_prices): \ck/plenty-client\Model\SalesPrice
```

Create a sales price

Creates a sales price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_sales_prices = new \ck/plenty-client\Model\RestItemsSalesPricesPostRequest(); // \ck/plenty-client\Model\RestItemsSalesPricesPostRequest

try {
    $result = $apiInstance->restItemsSalesPricesPost($_rest_items_sales_prices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsSalesPricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_sales_prices** | [**\ck/plenty-client\Model\RestItemsSalesPricesPostRequest**](../Model/RestItemsSalesPricesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\SalesPrice**](../Model/SalesPrice.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsUnitsGet()`

```php
restItemsUnitsGet($updated_at): \ck/plenty-client\Model\RestItemsUnitsGet200Response
```

List units

Lists all units.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_at = 'updated_at_example'; // string | Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.

try {
    $result = $apiInstance->restItemsUnitsGet($updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updated_at** | **string**| Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsUnitsGet200Response**](../Model/RestItemsUnitsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsUnitsIdDelete()`

```php
restItemsUnitsIdDelete($id): object
```

Delete a unit

Deletes a unit. The ID of the unit must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsUnitsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsUnitsIdGet()`

```php
restItemsUnitsIdGet($id): \ck/plenty-client\Model\Unit
```

Get a unit

Gets a unit. The ID of the unit must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsUnitsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\Unit**](../Model/Unit.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsUnitsIdNamesGet()`

```php
restItemsUnitsIdNamesGet($id): \ck/plenty-client\Model\UnitName[]
```

List unit names

Lists the unit names of a unit. The ID of the unit must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsUnitsIdNamesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\UnitName[]**](../Model/UnitName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsUnitsIdNamesLangDelete()`

```php
restItemsUnitsIdNamesLangDelete($id, $lang): object
```

Delete a unit name

Deletes a unit name. The ID of the unit and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsUnitsIdNamesLangDelete($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdNamesLangDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsUnitsIdNamesLangGet()`

```php
restItemsUnitsIdNamesLangGet($id, $lang): \ck/plenty-client\Model\UnitName
```

Get a unit name

Gets a unit name. The ID of the unit and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsUnitsIdNamesLangGet($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\UnitName**](../Model/UnitName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsUnitsIdNamesLangPut()`

```php
restItemsUnitsIdNamesLangPut($id, $lang): \ck/plenty-client\Model\UnitName
```

Update a unit name

Updates a unit name. The ID of the unit and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$lang = 56; // int

try {
    $result = $apiInstance->restItemsUnitsIdNamesLangPut($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdNamesLangPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **lang** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\UnitName**](../Model/UnitName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsUnitsIdNamesPost()`

```php
restItemsUnitsIdNamesPost($id): \ck/plenty-client\Model\UnitName
```

Create a unit name

Creates a unit name. The ID of the unit and the language must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->restItemsUnitsIdNamesPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdNamesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\UnitName**](../Model/UnitName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsUnitsIdPut()`

```php
restItemsUnitsIdPut($id, $_rest_items_units_id): \ck/plenty-client\Model\Unit
```

Update a unit

Updates a unit. The ID of the unit must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_items_units_id = new \ck/plenty-client\Model\RestItemsUnitsPostRequest(); // \ck/plenty-client\Model\RestItemsUnitsPostRequest

try {
    $result = $apiInstance->restItemsUnitsIdPut($id, $_rest_items_units_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_items_units_id** | [**\ck/plenty-client\Model\RestItemsUnitsPostRequest**](../Model/RestItemsUnitsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Unit**](../Model/Unit.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsUnitsPost()`

```php
restItemsUnitsPost($_rest_items_units): \ck/plenty-client\Model\Unit
```

Create a unit

Creates a unit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_units = new \ck/plenty-client\Model\RestItemsUnitsPostRequest(); // \ck/plenty-client\Model\RestItemsUnitsPostRequest

try {
    $result = $apiInstance->restItemsUnitsPost($_rest_items_units);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsUnitsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_units** | [**\ck/plenty-client\Model\RestItemsUnitsPostRequest**](../Model/RestItemsUnitsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Unit**](../Model/Unit.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsVariationsGet()`

```php
restItemsVariationsGet($with, $lang, $page, $items_per_page, $id, $item_id, $variation_tag_id, $item_name, $flag_one, $flag_two, $store_special, $category_id, $is_main, $is_active, $barcode, $number_exact, $number_fuzzy, $is_bundle, $plenty_id, $referrer_id, $supplier_number, $sku, $manufacturer_id, $updated_between, $created_between, $related_updated_between, $item_description, $stock_warehouse_id, $supplier_id): \ck/plenty-client\Model\RestItemsVariationsGet200Response
```

Search variations

Search variations by different filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Includes the specified variation information in the results. The following parameters are available: <ul><li>properties</b> = The properties linked to the variation</li><li>variationProperties</b> = The properties linked to the variation</li><li>variationBarcodes</b> = The barcode linked to the variation and the saved code</li><li>variationBundleComponents</b> = The bundle components of the variation and their quantities</li><li>variationComponentBundles</b> = The bundles that this variation is a component of</li><li>variationSalesPrices</b> = The sales prices linked to the variation and the saved price</li><li>marketItemNumbers</b> = The market ident number of the variation</li><li>variationCategories</b> = The categories linked to the variation</li><li>variationClients</b> = The clients (stores) for which the variation is activated</li><li>variationMarkets</b> = The markets for which the variation is activated </li><li>variationDefaultCategory</b> = The default category of the variation</li><li>variationSuppliers</b> = The supplier data associated with the variation</li><li>variationWarehouses</b> = The warehouse data associated with the variation</li><li>images</b> = The images linked to the variation</li><li>itemImages</b> = The images linked to the item</li><li>variationAttributeValues</b> = The attribute values of the variation</li><li>variationSkus</b> = The SKU data associated with the variation</li><li>variationAdditionalSkus</b> = The additional SKU data associated with the variation</li><li>unit</b> = The unit assigned to the variation</li><li>parent</b> = The main variation of the variation. Value is null if this variation is the item's main variation.</li><li>item</b> = The item of the variation</li><li>stock</b> = The stock data of the variation</li></ul> For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas.
$lang = 'lang_example'; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
$page = 56; // int | Limits the results to a specific page. The page number must be specified.
$items_per_page = 56; // int | Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified.
$id = 56; // int | Filter restricts the list of results to variations with the specified variation ID. An variation ID must be specified. More than one ID should be separated by commas.
$item_id = 56; // int | Filter restricts the list of results to variations with the specified item ID. An item ID must be specified. More than one ID should be separated by commas.
$variation_tag_id = 56; // int | Filter restricts the list of results to variations with the specified tag ID. An tag ID must be specified. More than one ID should be separated by commas.
$item_name = 'item_name_example'; // string | Filter restricts the list of results to variations with the specified item name. An item name must be specified.
$flag_one = 'flag_one_example'; // string | Filter restricts the list of results to variations of items with the flag one. The flag one must be specified.
$flag_two = 'flag_two_example'; // string | Filter restricts the list of results to variations of items with the flag two. The flag two must be specified.
$store_special = 56; // int | Filter restricts the list of results to variations of items with the specified store special. The following values are allowed: 0 (None), 1 (Special offer), 2 (New item), 3(Top item).
$category_id = 56; // int | Filter restricts the list of results to variations with the specified category id
$is_main = True; // bool | Filter restricts the list of results to variations that are main variations.
$is_active = True; // bool | Filter restricts the list of results to variations that are active.
$barcode = 'barcode_example'; // string | Filter restricts the list of results to variations with the specified barcode. A barcode must be specified.
$number_exact = 'number_exact_example'; // string | Filter restricts the list of results to the variation with the variation number specified.
$number_fuzzy = 'number_fuzzy_example'; // string | Filter restricts the list of results to variations with numbers that contain the variation number specified (SQL LIKE operator). For example, if variations with variation numbers 1 to 400 exist in the system, filtering by 12 will list variation numbers 12, 112, 120-129, 212 and 312.
$is_bundle = True; // bool | Filter restricts the list of results to variations to which variations were added to create a bundle.
$plenty_id = 56; // int | Filter restricts the list of results to variations that are visible in specified clients. Separate more than one client by commas.
$referrer_id = 56; // int | Filter restricts the list of results to variations that are visible in specified markets. Separate more than one referrer by commas.
$supplier_number = 'supplier_number_example'; // string | Filter restricts the list of results to variations with the specified supplier number. A supplier number must be specified.
$sku = 'sku_example'; // string | Filter restricts the list of results to variations with the specified SKU. In additional, results can also be restricted to a specific referrer by specifying the referrer ID after a colon. Example: L0R3MIP5UM:104.1
$manufacturer_id = 56; // int | Filter restricts the list of results to variations with the specified manufacturer ID.
$updated_between = 'updated_between_example'; // string | Filter restricts the list of results to variations updated during the specified period. The end date (to) is optional. If no end date is specified, variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?updatedBetween=1451606400,1456790400 will list variations updated between 2016-01-01 and 2016-03-01. .../variations?updatedBetween=1451606400 will list variations updated since 2016-01-01. The PHP function strtotime is also supported.
$created_between = 'created_between_example'; // string | Filter restricts the list of results to variations created during the specified period. The end date (to) is optional. If no end date is specified, variations created between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?createdBetween=1451606400,1456790400 will list variations created between 2016-01-01 and 2016-03-01. .../variations?createdBetween=1451606400 will list variations created since 2016-01-01. The PHP function strtotime is also supported.
$related_updated_between = 'related_updated_between_example'; // string | Filter restricts the list of results to those variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats.
$item_description = 'item_description_example'; // string | Filter restricts the list of results to variations with descriptions that contain the specified string.
$stock_warehouse_id = 'stock_warehouse_id_example'; // string | Filter restricts the list of results to variations which have physical stock on the given warehouse.
$supplier_id = 56; // int | Filter restricts the list of results to variations with the specified supplier ID.

try {
    $result = $apiInstance->restItemsVariationsGet($with, $lang, $page, $items_per_page, $id, $item_id, $variation_tag_id, $item_name, $flag_one, $flag_two, $store_special, $category_id, $is_main, $is_active, $barcode, $number_exact, $number_fuzzy, $is_bundle, $plenty_id, $referrer_id, $supplier_number, $sku, $manufacturer_id, $updated_between, $created_between, $related_updated_between, $item_description, $stock_warehouse_id, $supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Includes the specified variation information in the results. The following parameters are available: &lt;ul&gt;&lt;li&gt;properties&lt;/b&gt; &#x3D; The properties linked to the variation&lt;/li&gt;&lt;li&gt;variationProperties&lt;/b&gt; &#x3D; The properties linked to the variation&lt;/li&gt;&lt;li&gt;variationBarcodes&lt;/b&gt; &#x3D; The barcode linked to the variation and the saved code&lt;/li&gt;&lt;li&gt;variationBundleComponents&lt;/b&gt; &#x3D; The bundle components of the variation and their quantities&lt;/li&gt;&lt;li&gt;variationComponentBundles&lt;/b&gt; &#x3D; The bundles that this variation is a component of&lt;/li&gt;&lt;li&gt;variationSalesPrices&lt;/b&gt; &#x3D; The sales prices linked to the variation and the saved price&lt;/li&gt;&lt;li&gt;marketItemNumbers&lt;/b&gt; &#x3D; The market ident number of the variation&lt;/li&gt;&lt;li&gt;variationCategories&lt;/b&gt; &#x3D; The categories linked to the variation&lt;/li&gt;&lt;li&gt;variationClients&lt;/b&gt; &#x3D; The clients (stores) for which the variation is activated&lt;/li&gt;&lt;li&gt;variationMarkets&lt;/b&gt; &#x3D; The markets for which the variation is activated &lt;/li&gt;&lt;li&gt;variationDefaultCategory&lt;/b&gt; &#x3D; The default category of the variation&lt;/li&gt;&lt;li&gt;variationSuppliers&lt;/b&gt; &#x3D; The supplier data associated with the variation&lt;/li&gt;&lt;li&gt;variationWarehouses&lt;/b&gt; &#x3D; The warehouse data associated with the variation&lt;/li&gt;&lt;li&gt;images&lt;/b&gt; &#x3D; The images linked to the variation&lt;/li&gt;&lt;li&gt;itemImages&lt;/b&gt; &#x3D; The images linked to the item&lt;/li&gt;&lt;li&gt;variationAttributeValues&lt;/b&gt; &#x3D; The attribute values of the variation&lt;/li&gt;&lt;li&gt;variationSkus&lt;/b&gt; &#x3D; The SKU data associated with the variation&lt;/li&gt;&lt;li&gt;variationAdditionalSkus&lt;/b&gt; &#x3D; The additional SKU data associated with the variation&lt;/li&gt;&lt;li&gt;unit&lt;/b&gt; &#x3D; The unit assigned to the variation&lt;/li&gt;&lt;li&gt;parent&lt;/b&gt; &#x3D; The main variation of the variation. Value is null if this variation is the item&#39;s main variation.&lt;/li&gt;&lt;li&gt;item&lt;/b&gt; &#x3D; The item of the variation&lt;/li&gt;&lt;li&gt;stock&lt;/b&gt; &#x3D; The stock data of the variation&lt;/li&gt;&lt;/ul&gt; For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas. | [optional] |
| **lang** | **string**| The &lt;a href&#x3D;&#39;https://developers.plentymarkets.com/rest-doc/introduction#countries&#39; target&#x3D;&#39;_blank&#39;&gt;language&lt;/a&gt; of the variation information. | [optional] |
| **page** | **int**| Limits the results to a specific page. The page number must be specified. | [optional] |
| **items_per_page** | **int**| Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified. | [optional] |
| **id** | **int**| Filter restricts the list of results to variations with the specified variation ID. An variation ID must be specified. More than one ID should be separated by commas. | [optional] |
| **item_id** | **int**| Filter restricts the list of results to variations with the specified item ID. An item ID must be specified. More than one ID should be separated by commas. | [optional] |
| **variation_tag_id** | **int**| Filter restricts the list of results to variations with the specified tag ID. An tag ID must be specified. More than one ID should be separated by commas. | [optional] |
| **item_name** | **string**| Filter restricts the list of results to variations with the specified item name. An item name must be specified. | [optional] |
| **flag_one** | **string**| Filter restricts the list of results to variations of items with the flag one. The flag one must be specified. | [optional] |
| **flag_two** | **string**| Filter restricts the list of results to variations of items with the flag two. The flag two must be specified. | [optional] |
| **store_special** | **int**| Filter restricts the list of results to variations of items with the specified store special. The following values are allowed: 0 (None), 1 (Special offer), 2 (New item), 3(Top item). | [optional] |
| **category_id** | **int**| Filter restricts the list of results to variations with the specified category id | [optional] |
| **is_main** | **bool**| Filter restricts the list of results to variations that are main variations. | [optional] |
| **is_active** | **bool**| Filter restricts the list of results to variations that are active. | [optional] |
| **barcode** | **string**| Filter restricts the list of results to variations with the specified barcode. A barcode must be specified. | [optional] |
| **number_exact** | **string**| Filter restricts the list of results to the variation with the variation number specified. | [optional] |
| **number_fuzzy** | **string**| Filter restricts the list of results to variations with numbers that contain the variation number specified (SQL LIKE operator). For example, if variations with variation numbers 1 to 400 exist in the system, filtering by 12 will list variation numbers 12, 112, 120-129, 212 and 312. | [optional] |
| **is_bundle** | **bool**| Filter restricts the list of results to variations to which variations were added to create a bundle. | [optional] |
| **plenty_id** | **int**| Filter restricts the list of results to variations that are visible in specified clients. Separate more than one client by commas. | [optional] |
| **referrer_id** | **int**| Filter restricts the list of results to variations that are visible in specified markets. Separate more than one referrer by commas. | [optional] |
| **supplier_number** | **string**| Filter restricts the list of results to variations with the specified supplier number. A supplier number must be specified. | [optional] |
| **sku** | **string**| Filter restricts the list of results to variations with the specified SKU. In additional, results can also be restricted to a specific referrer by specifying the referrer ID after a colon. Example: L0R3MIP5UM:104.1 | [optional] |
| **manufacturer_id** | **int**| Filter restricts the list of results to variations with the specified manufacturer ID. | [optional] |
| **updated_between** | **string**| Filter restricts the list of results to variations updated during the specified period. The end date (to) is optional. If no end date is specified, variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?updatedBetween&#x3D;1451606400,1456790400 will list variations updated between 2016-01-01 and 2016-03-01. .../variations?updatedBetween&#x3D;1451606400 will list variations updated since 2016-01-01. The PHP function strtotime is also supported. | [optional] |
| **created_between** | **string**| Filter restricts the list of results to variations created during the specified period. The end date (to) is optional. If no end date is specified, variations created between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?createdBetween&#x3D;1451606400,1456790400 will list variations created between 2016-01-01 and 2016-03-01. .../variations?createdBetween&#x3D;1451606400 will list variations created since 2016-01-01. The PHP function strtotime is also supported. | [optional] |
| **related_updated_between** | **string**| Filter restricts the list of results to those variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats. | [optional] |
| **item_description** | **string**| Filter restricts the list of results to variations with descriptions that contain the specified string. | [optional] |
| **stock_warehouse_id** | **string**| Filter restricts the list of results to variations which have physical stock on the given warehouse. | [optional] |
| **supplier_id** | **int**| Filter restricts the list of results to variations with the specified supplier ID. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestItemsVariationsGet200Response**](../Model/RestItemsVariationsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsVariationsPut()`

```php
restItemsVariationsPut($_rest_items_variations): object
```

Update up to 50 variations

Updates up to 50 variations. The ID of the variation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations = new \ck/plenty-client\Model\RestItemsVariationsPutRequest(); // \ck/plenty-client\Model\RestItemsVariationsPutRequest

try {
    $result = $apiInstance->restItemsVariationsPut($_rest_items_variations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_variations** | [**\ck/plenty-client\Model\RestItemsVariationsPutRequest**](../Model/RestItemsVariationsPutRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsVariationsVariationCategoriesPost()`

```php
restItemsVariationsVariationCategoriesPost($_rest_items_variations_variation_categories): object
```

Bulk create category links

Creates up to 50 links between variations and categories. The ID of the variations and the ID of the categories must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations_variation_categories = new \ck/plenty-client\Model\RestItemsVariationsVariationCategoriesPutRequest(); // \ck/plenty-client\Model\RestItemsVariationsVariationCategoriesPutRequest

try {
    $result = $apiInstance->restItemsVariationsVariationCategoriesPost($_rest_items_variations_variation_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_variations_variation_categories** | [**\ck/plenty-client\Model\RestItemsVariationsVariationCategoriesPutRequest**](../Model/RestItemsVariationsVariationCategoriesPutRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsVariationsVariationCategoriesPut()`

```php
restItemsVariationsVariationCategoriesPut($_rest_items_variations_variation_categories): object
```

Bulk update category links

Updates up to 50 links between variations and categories. The ID of the variations and the ID of the categories must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations_variation_categories = new \ck/plenty-client\Model\RestItemsVariationsVariationCategoriesPutRequest(); // \ck/plenty-client\Model\RestItemsVariationsVariationCategoriesPutRequest

try {
    $result = $apiInstance->restItemsVariationsVariationCategoriesPut($_rest_items_variations_variation_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationCategoriesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_variations_variation_categories** | [**\ck/plenty-client\Model\RestItemsVariationsVariationCategoriesPutRequest**](../Model/RestItemsVariationsVariationCategoriesPutRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsVariationsVariationMarketsGet()`

```php
restItemsVariationsVariationMarketsGet(): \ck/plenty-client\Model\RestItemsVariationsVariationMarketsGet200Response
```

List all links between variations and markets

Lists all links between variations and markets. Results can be filtered by the ID of the variation and by the ID of the market, e.g. \"variationId=1030\" lists all links of the variation with the ID 1030.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restItemsVariationsVariationMarketsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationMarketsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\RestItemsVariationsVariationMarketsGet200Response**](../Model/RestItemsVariationsVariationMarketsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsVariationsVariationMarketsPost()`

```php
restItemsVariationsVariationMarketsPost($_rest_items_variations_variation_markets): object
```

Create up to 50 links between variations and markets

Creates up to 50 links between variations and markets. The ID of the variation and the ID of the market must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations_variation_markets = new \ck/plenty-client\Model\RestItemsVariationsVariationMarketsPostRequest(); // \ck/plenty-client\Model\RestItemsVariationsVariationMarketsPostRequest

try {
    $result = $apiInstance->restItemsVariationsVariationMarketsPost($_rest_items_variations_variation_markets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationMarketsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_variations_variation_markets** | [**\ck/plenty-client\Model\RestItemsVariationsVariationMarketsPostRequest**](../Model/RestItemsVariationsVariationMarketsPostRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsVariationsVariationPropertiesPost()`

```php
restItemsVariationsVariationPropertiesPost($_rest_items_variations_variation_properties): object
```

Bulk update properties

Creates up to 50 properties of variations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations_variation_properties = new \ck/plenty-client\Model\RestItemsVariationsVariationPropertiesPutRequest(); // \ck/plenty-client\Model\RestItemsVariationsVariationPropertiesPutRequest

try {
    $result = $apiInstance->restItemsVariationsVariationPropertiesPost($_rest_items_variations_variation_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationPropertiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_variations_variation_properties** | [**\ck/plenty-client\Model\RestItemsVariationsVariationPropertiesPutRequest**](../Model/RestItemsVariationsVariationPropertiesPutRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsVariationsVariationPropertiesPut()`

```php
restItemsVariationsVariationPropertiesPut($_rest_items_variations_variation_properties): object
```

Bulk update properties

Updates up to 50 properties of variations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations_variation_properties = new \ck/plenty-client\Model\RestItemsVariationsVariationPropertiesPutRequest(); // \ck/plenty-client\Model\RestItemsVariationsVariationPropertiesPutRequest

try {
    $result = $apiInstance->restItemsVariationsVariationPropertiesPut($_rest_items_variations_variation_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationPropertiesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_variations_variation_properties** | [**\ck/plenty-client\Model\RestItemsVariationsVariationPropertiesPutRequest**](../Model/RestItemsVariationsVariationPropertiesPutRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsVariationsVariationSalesPricesGet()`

```php
restItemsVariationsVariationSalesPricesGet($variation_id, $sales_price_id, $updated_at): \ck/plenty-client\Model\RestAccountsContactsSalesRepresentativeRegionsGet200Response
```

Get all sales price relations

Gets all links between variations and sales prices including sales price data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$variation_id = 56; // int | Filter that restricts the search result to the sales price data of a specific variation.
$sales_price_id = 56; // int | Filter that restricts the search result to the sales price data of variations linked to a specific sales price.
$updated_at = 'updated_at_example'; // string | Filter that restricts the search result to links between variations and sales prices updated after a specific point in time.

try {
    $result = $apiInstance->restItemsVariationsVariationSalesPricesGet($variation_id, $sales_price_id, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationSalesPricesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **variation_id** | **int**| Filter that restricts the search result to the sales price data of a specific variation. | [optional] |
| **sales_price_id** | **int**| Filter that restricts the search result to the sales price data of variations linked to a specific sales price. | [optional] |
| **updated_at** | **string**| Filter that restricts the search result to links between variations and sales prices updated after a specific point in time. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestAccountsContactsSalesRepresentativeRegionsGet200Response**](../Model/RestAccountsContactsSalesRepresentativeRegionsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsVariationsVariationSalesPricesPost()`

```php
restItemsVariationsVariationSalesPricesPost($_rest_items_variations_variation_sales_prices): object
```

Bulk create prices

Creates up to 50 prices of variations. The ID of the variation, the ID of the sales price and a price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations_variation_sales_prices = new \ck/plenty-client\Model\RestItemsVariationsVariationSalesPricesPutRequest(); // \ck/plenty-client\Model\RestItemsVariationsVariationSalesPricesPutRequest

try {
    $result = $apiInstance->restItemsVariationsVariationSalesPricesPost($_rest_items_variations_variation_sales_prices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationSalesPricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_variations_variation_sales_prices** | [**\ck/plenty-client\Model\RestItemsVariationsVariationSalesPricesPutRequest**](../Model/RestItemsVariationsVariationSalesPricesPutRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restItemsVariationsVariationSalesPricesPut()`

```php
restItemsVariationsVariationSalesPricesPut($_rest_items_variations_variation_sales_prices): object
```

Bulk update prices

Updates up to 50 prices of variations. The ID of the variation, the ID of the sales price and a price must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_items_variations_variation_sales_prices = new \ck/plenty-client\Model\RestItemsVariationsVariationSalesPricesPutRequest(); // \ck/plenty-client\Model\RestItemsVariationsVariationSalesPricesPutRequest

try {
    $result = $apiInstance->restItemsVariationsVariationSalesPricesPut($_rest_items_variations_variation_sales_prices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->restItemsVariationsVariationSalesPricesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_items_variations_variation_sales_prices** | [**\ck/plenty-client\Model\RestItemsVariationsVariationSalesPricesPutRequest**](../Model/RestItemsVariationsVariationSalesPricesPutRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

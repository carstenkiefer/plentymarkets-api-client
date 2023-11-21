# # RestItemsItemIdVariationsVariationIdPutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the comment optional | [optional]
**is_main** | **bool** | Flag that indicates if the variation is the main variation of the item. optional | [optional]
**main_variation_id** | **int** | The variation ID of the item&#39;s main variation. Value is NULL if this variation is the item&#39;s main variation. optional | [optional]
**item_id** | **int** | The item ID of the item that this variation belongs to. |
**position** | **int** | The position of the market ident number  (ASIN/ePID) | [optional]
**is_active** | **bool** | Flag that indicates if the item is ready for export (currently not in use). optional | [optional]
**number** | **string** | The unique variation number of the variation. The variation number must be specified. optional | [optional]
**model** | **string** | The model of the variation. Value is inherited from the item&#39;s main variation if inheritance is active. optional | [optional]
**external_id** | **string** | The external variation ID of this variation. The external variation number is optional and allows importing items and variations from external systems to plentymarkets. optional | [optional]
**availability** | **int** | The availability of the variation. Possible values: 1 to 10, null &#x3D; Variation inherits value of main variation. optional | [optional]
**estimated_available_at** | **string** | The estimated delivery date of variations on reorder. optional | [optional]
**purchase_price** | **float** | The price at which the variation was purchased from this supplier. |
**moving_average_price** | **float** | The moving average purchase price of the variation. optional | [optional]
**created_at** | **string** | The time the variation was created. optional | [optional]
**updated_at** | **string** | The time the variation was last updated. optional | [optional]
**related_updated_at** | **string** | The time at which related information for this variation was last updated. Related information is defined as information that is linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. optional | [optional]
**price_calculation_id** | **int** | The ID of the price calculation linked to the variation. optional | [optional]
**picking** | **string** | The order picking type of the variation. Possible values: single_picking, no_single_picking, exclude_from_picklist, null (no order picking type) optional allowed values are single_picking, no_single_picking, exclude_from_picklist | [optional]
**stock_limitation** | **int** | The stock limitation for the variation. Possible values: 0 &#x3D; No limitation, i.e. stock is not limited. The variations&#39;s availability is not checked automatically.1 &#x3D; Stock is limited to net stock. The variation&#39;s availability is checked automatically.2 &#x3D; Do not administer stock for this variation. optional allowed values are 0, 1, 2 | [optional]
**is_visible_if_net_stock_is_positive** | **bool** | Flag that indicates if the variation is visible in the online store if net stock is positive. If true, the variation automatically becomes visible when the net stock changes to positive. optional | [optional]
**is_invisible_if_net_stock_is_not_positive** | **bool** | Flag that indicates if the variation is invisible in the online store if net stock is not positive. If true, the variation automatically becomes invisible when the net stock changes to 0 or negative. optional | [optional]
**is_available_if_net_stock_is_positive** | **bool** | Flag that indicates if the variation is available in the online store if net stock is positive. If true, the variation automatically becomes available when the net stock changes to positive. optional | [optional]
**is_unavailable_if_net_stock_is_not_positive** | **bool** | Flag that indicates if the variation is unavailable in the online store if net stock is not positive. If true, the variation automatically becomes available when the net stock changes to 0 or negative. optional | [optional]
**main_warehouse_id** | **int** | The ID of the main warehouse of the variation. optional | [optional]
**maximum_order_quantity** | **float** | The maximum order quantity permitted per order. Decimal values are possible to allow orders by weight or length. Default value is 0. If value is 0, the maximum order quantity is unlimited. optional | [optional]
**minimum_order_quantity** | **float** | The minimum order quantity. Decimal values are possible to allow orders by weight or length. optional | [optional]
**interval_order_quantity** | **float** | The quantity intervals the variation can be ordered in. Decimal values are possible to allow orders by weight or length. optional | [optional]
**available_until** | **string** | The last date the item will be available for sale. optional | [optional]
**released_at** | **string** | The release date of the variation. This is the date on which the variation will become available. The variation can be visible in the online store before this date, e.g. for preorders. optional | [optional]
**name** | **string** | The default name of the item. By default, this name is displayed in the online store. For Default items, this name is also used for markets. Character limit: max. 240 characters. optional | [optional]
**weight_g** | **int** | The gross weight of the variation in gramms (g). This weight includes the packaging for variations that are packaged separately. This value is used for calculating shipping packages and weight-based shipping costs. optional | [optional]
**weight_net_g** | **int** | The net weight of the variation in gramms (g). This is the weight of the variation without packaging. optional | [optional]
**width_mm** | **int** | The width of the variation in millimetres (mm) optional | [optional]
**length_mm** | **int** | The length of the variation in millimeters (mm) optional | [optional]
**height_mm** | **int** | The height of the variation in millimetres (mm) optional | [optional]
**extra_shipping_charge1** | **float** | The extra shipping charge 1 for the variation. Extra shipping charges are useful for large or bulky items that are particularly expensive to ship. Charge 1 is added to the regular shipping costs for the first item of an order. If different variations are ordered, the extra shipping charge 1 of the variation with the highest charge 1 is selected. optional | [optional]
**extra_shipping_charge2** | **float** | The extra shipping charge 2 for the variation. Extra shipping charges are useful for large or bulky items that are expensive to ship. Charge 2 is added to the shipping costs for any additional items of an order. optional | [optional]
**units_contained** | **int** | The number of sales units contained in one package. Default value is 1. optional | [optional]
**pallet_type_id** | **int** | The ID of the pallet type optional | [optional]
**packing_units** | **int** | The number of packing units if the item consists of multiple packages. Value is 0 if an item is sent as one package. All items of an order that have the value 0 will be packed into one package. optional | [optional]
**packing_unit_type_id** | **int** | The ID of the packing unit type. optional | [optional]
**transportation_costs** | **float** | The net transportation costs for the variation. This value is used for price calculations and for calculating the acquisition price. optional | [optional]
**storage_costs** | **float** | The net storage costs for the variation optional | [optional]
**customs** | **float** | The customs rate in percent optional | [optional]
**operating_costs** | **float** | The operating costs for the variation in percent optional | [optional]
**vat_id** | **int** | The ID of the VAT rate of the variation. VAT rates are created for each client (store) and linked to the variation. optional allowed values are 0, 1, 2, 3 | [optional]
**bundle_type** | **string** | Indicates the bundle type of the variation. Possible values:bundle &#x3D; The variation is a bundlebundle_item &#x3D; The variation is a bundle component.Null &#x3D; The variation is not associated with a bundle optional allowed values are bundle, bundle_item | [optional]
**automatic_client_visibility** | **int** | Indicates if the variation is set as available for any clients (stores). Possible values:0 / -1 (GET) or 0 (POST) &#x3D; Variation is not available in any client (store).1 / 2 (GET) or 1 (POST) &#x3D; Variation is available in at least one client (store).The variation&#39;s actual visibility depends on the settings for net stock dependency. optional allowed values are -1, 0, 1, 2 | [optional]
**is_hidden_in_category_list** | **bool** | Flag that indicates if the variation is hidden in the category list. If true, the variation will not be shown in any item category and will not be returned as a search result. The variation can only be accessed via its URL. optional | [optional]
**may_show_unit_price** | **bool** | Display unit price in the online store optional | [optional]
**has_calculated_bundle_weight** | **bool** | Indicates if the gross bundle weight is calculated by its components. optional | [optional]
**has_calculated_bundle_net_weight** | **bool** | Indicates if the net bundle weight is calculated by its components. optional | [optional]
**has_calculated_bundle_purchase_price** | **bool** | Indicates if the net purchase price is calculated by its components. optional | [optional]
**has_calculated_bundle_moving_average_price** | **bool** | Indicates if the moving average net purchase price is calculated by its components. optional | [optional]
**customs_tariff_number** | **string** | The customs tariff number of the variation; usually a 11 digit code number based on the Harmonised System optional | [optional]
**category_variation_id** | **int** | Either the ID of the variation or the ID of the item&#39;s main variation. No other values are permitted.ID of the variation &#x3D; Categories are not inherited from the main variation.ID of the item&#39;s main variation &#x3D; Inheritance of categories is active. optional | [optional]
**market_variation_id** | **int** | Either the ID of the variation or the ID of the item&#39;s main variation. No other values are permitted.ID of the variation &#x3D; Markets are not inherited from the main variation.ID of the item&#39;s main variation &#x3D; Inheritance of markets is active. optional | [optional]
**client_variation_id** | **int** | Either the ID of the variation or the ID of the item&#39;s main variation. No other values are permitted.ID of the variation &#x3D; Clients (stores) are not inherited from the main variation.ID of the item&#39;s main variation &#x3D; Inheritance of clients (stores) is active. optional | [optional]
**sales_price_variation_id** | **int** | Either the ID of the variation or the ID of the item&#39;s main variation. No other values are permitted.ID of the variation &#x3D; Sales prices are not inherited from the main variation.ID of the item&#39;s main variation &#x3D; Inheritance of sales prices is active. optional | [optional]
**supplier_variation_id** | **int** | Either the ID of the variation or the ID of the item&#39;s main variation. No other values are permitted.ID of the variation &#x3D; Suppliers are not inherited from the main variation.ID of the item&#39;s main variation &#x3D; Inheritance of suppliers is active. optional | [optional]
**warehouse_variation_id** | **int** | Either the ID of the variation or the ID of the item&#39;s main variation. No other values are permitted.ID of the variation &#x3D; Warehouses are not inherited from the main variation.ID of the item&#39;s main variation &#x3D; Inheritance of warehouses is active. optional | [optional]
**variation_barcodes** | [**\ck\Model\VariationBarcode[]**](VariationBarcode.md) |  | [optional]
**barcode_id** | **int** | The unique ID of the barcode linked to the variation. The combination of code and barcode ID must be unique. |
**code** | **string** | The code of the variation&#39;s barcode. The combination of code and barcode ID must be unique. |
**variation_sales_prices** | [**\ck\Model\VariationSalesPrice[]**](VariationSalesPrice.md) |  | [optional]
**sales_price_id** | **int** | The unique ID of the sales price |
**price** | **float** | The price of the variation saved for this sales price |
**variation_categories** | [**\ck\Model\VariationCategory[]**](VariationCategory.md) |  | [optional]
**category_id** | **int** | The unique ID of the category |
**is_neckermann_primary** | **string** | Flag that indicates if the category is the primary category for the market Neckermann for this variation. optional | [optional]
**variation_clients** | [**\ck\Model\VariationClient[]**](VariationClient.md) |  | [optional]
**plenty_id** | **int** | The unique plenty ID of the client (store) |
**variation_markets** | [**\ck\Model\VariationMarket[]**](VariationMarket.md) |  | [optional]
**market_id** | **float** | The ID of the market reference. |
**variation_default_category** | [**\ck\Model\VariationDefaultCategory[]**](VariationDefaultCategory.md) |  | [optional]
**branch_id** | **int** | The unique ID of the category branch |
**variation_suppliers** | [**\ck\Model\VariationSupplier[]**](VariationSupplier.md) |  | [optional]
**supplier_id** | **int** | The unique ID of the supplier optional | [optional]
**item_number** | **string** | The external item number assigned to the variation by this supplier optional | [optional]
**last_price_query** | **string** | The date of the last price query to this supplier. This helps to plan price negotiations. optional | [optional]
**discount** | **float** | The discount in percent the supplier grants for the variation. optional | [optional]
**is_discountable** | **string** | Flag that indicates if the supplier&#39;s discount for this variation is active. optional | [optional]
**packaging_unit** | **float** | The packaging unit of the supplier if it differs from the packaging unit settings in plentymarkets. optional | [optional]
**variation_warehouses** | [**\ck\Model\VariationWarehouse[]**](VariationWarehouse.md) |  | [optional]
**warehouse_id** | **int** | The unique ID of the warehouse |
**warehouse_zone_id** | **int** | The unique ID of the warehouse zone optional | [optional]
**storage_location_type** | **string** | The storage location type of the warehouse optional allowed values are none, small, medium, large, europallet | [optional]
**reorder_level** | **int** | The reorder level for the variation in this warehouse optional | [optional]
**maximum_stock** | **int** | The maximum stock for the variation in this warehouse optional | [optional]
**stock_turnover_in_days** | **int** | The stock turnover in days for the variation in this warehouse optional | [optional]
**storage_location** | **int** | The storage location of the variation in this warehouse optional | [optional]
**stock_buffer** | **int** | The stock buffer for the variation in this warehouse optional | [optional]
**variation_attribute_values** | [**\ck\Model\AttributeValueSet[]**](AttributeValueSet.md) |  | [optional]
**value_id** | **int** | The ID of the attribute value |
**unit** | [**\ck\Model\UnitCombination[]**](UnitCombination.md) |  |
**parent_variation_id** | **int** | optional | [optional]
**parent_variation_quantity** | **float** | optional | [optional]
**item** | **object[]** |  | [optional]
**item_cross_selling** | [**\ck\Model\ItemCrossSelling[]**](ItemCrossSelling.md) |  | [optional]
**cross_item_id** | **int** | The unique ID of the cross-selling item that is linked to the item |
**relationship** | **string** | The cross-selling relationship between item and cross-selling item. Possible values:Accessory &#x3D; The cross-selling item is an accessory of the item.ReplacementPart &#x3D; The cross-selling item is a replacement part for the item.Similar &#x3D; The cross-selling item is similar to the item.Bundle &#x3D; The cross-selling item is suitable to be sold as a bundle with the item.  allowed values are Variation, DisplaySet, Collection, Accessory, Customized, Part, Complements, Piece, Necessary, ReplacementPart, Similar, Episode, Season, Bundle, Component |
**is_dynamic** | **bool** | Flag that indicates if the cross-selling link was generated automatically. optional | [optional]
**item_shipping_profiles** | [**\ck\Model\ItemShippingProfiles[]**](ItemShippingProfiles.md) |  | [optional]
**profile_id** | **int** | The unique ID of the shipping profile |
**variation_texts** | [**\ck\Model\VariationDescription[]**](VariationDescription.md) |  | [optional]
**lang** | **string** | The language code of the description |
**name2** | **string** | Alternative item name that can be used e.g. for markets. Character limit: max. 240 characters. optional | [optional]
**name3** | **string** | Alternative item name that can be used e.g. for markets. Character limit: max. 240 characters. optional | [optional]
**preview_description** | **string** | The preview text. The preview text is a short description that can be displayed in item lists. optional | [optional]
**meta_description** | **string** | The meta description of the item. This description is analysed by search engines and displayed in search results. This text should be treated as an advertising text to maximise click-through from search engine result pages. Current recommended limit is 156 characters. optional | [optional]
**description** | **string** | The item description. This is a detailed description displayed in the item layout of the online store. optional | [optional]
**technical_data** | **string** | The technical data for the item. To display the technical data in the online store, insert the template variable TechnicalData and an optional title into the template ItemViewSingleItem. optional | [optional]
**url_path** | **string** | The URL path of the item in the online store. By default, the URL path consists of the categories and the item name. The path will be assigned automatically by plentymarkets when the item is created and will be displayed as part of the URL when the item is selected in the online store. optional | [optional]
**meta_keywords** | **string** | Meta keywords to tag the item for search engines. More than one keyword can be separated by commas. optional | [optional]
**images** | **object[]** |  | [optional]
**item_images** | **object[]** |  | [optional]
**variation_bundle_components** | [**\ck\Model\VariationBundle[]**](VariationBundle.md) |  | [optional]
**component_variation_id** | **int** | The unique ID of the variation added as bundle component  with componentQuantity |
**component_quantity** | **int** | The quantity of the variation to be added as bundle component  with componentVariationId |
**market_item_numbers** | [**\ck\Model\VariationMarketIdentNumber[]**](VariationMarketIdentNumber.md) |  | [optional]
**country_id** | **int** | The country code of the market ident number (ASIN/ePID) | [optional]
**type** | **string** | The type of market ident number (ASIN/ePID) allowed values are ASIN, EPID, UPC, RSIN | [optional]
**value** | **string** | The value of the market ident number (ASIN/ePID) | [optional]
**variation_skus** | [**\ck\Model\VariationSku[]**](VariationSku.md) |  | [optional]
**account_id** | **int** | The ID of the market account | [optional]
**sku** | **string** | The additional sku for this variation. |
**initial_sku** | **string** | The initial SKU of the variation. The initial SKU cannot be modified even if the variation SKU is changed. However, it is possible to reset the variation SKU to the initial SKU. optional | [optional]
**parent_sku** | **string** | The Parent SKU of the variation. The Parent SKU is adjustable. The same Parent SKU value should be used on variations of same article. optional | [optional]
**status** | **string** | The status of the variation after the export. Possible entries are INACTIVE, ERROR, SENT and ACTIVE. optional allowed values are ACTIVE, INACTIVE, ERROR, SENT | [optional]
**additional_information** | **string** | The field that contains additional information. optional | [optional]
**variation_additional_skus** | [**\ck\Model\VariationAdditionalSku[]**](VariationAdditionalSku.md) |  | [optional]
**market_account_id** | **int** | The ID of the market account. | [optional]
**properties** | [**\ck\Model\PropertyRelation[]**](PropertyRelation.md) |  | [optional]
**property_id** | **int** | The unique ID of the property |
**selection_relation_id** | **int** | The ID of the selection relation optional | [optional]
**variation_properties** | [**\ck\Model\VariationPropertyValue[]**](VariationPropertyValue.md) |  | [optional]
**property_selection_id** | **int** | The unique ID of the property selection of the variation optional | [optional]
**value_int** | **int** | The int value of the property value of the variation optional | [optional]
**value_float** | **float** | The float value of the property value of the variation optional | [optional]
**value_file** | **string** | The file value of the property value of the variation optional | [optional]
**tags** | [**\ck\Model\Tag[]**](Tag.md) |  | [optional]
**comments** | [**\ck\Model\Comment[]**](Comment.md) |  | [optional]
**user_id** | **int** | The ID of the user optional | [optional]
**text** | **string** | The comment text |
**is_visible_for_contact** | **bool** | If true, the comment is visible for the associated contact. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

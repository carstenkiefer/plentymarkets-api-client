# ck/plenty-client\OrderApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restDeliveryOrdersOrderIdDelete()**](OrderApi.md#restDeliveryOrdersOrderIdDelete) | **DELETE** /rest/delivery_orders/{orderId} | Delete a delivery order |
| [**restDeliveryOrdersOrderIdPut()**](OrderApi.md#restDeliveryOrdersOrderIdPut) | **PUT** /rest/delivery_orders/{orderId} | Update a delivery order |
| [**restDeliveryOrdersPost()**](OrderApi.md#restDeliveryOrdersPost) | **POST** /rest/delivery_orders | Create a delivery order |
| [**restOrdersContactsContactIdGet()**](OrderApi.md#restOrdersContactsContactIdGet) | **GET** /rest/orders/contacts/{contactId} | List orders of a contact |
| [**restOrdersContactsContactIdMultiOrderPost()**](OrderApi.md#restOrdersContactsContactIdMultiOrderPost) | **POST** /rest/orders/contacts/{contactId}/multi_order | Create a multi-order |
| [**restOrdersCouponsCampaignsCampaignIdCodesPost()**](OrderApi.md#restOrdersCouponsCampaignsCampaignIdCodesPost) | **POST** /rest/orders/coupons/campaigns/{campaignId}/codes | Create a coupon code |
| [**restOrdersCouponsCampaignsCodesCodeDelete()**](OrderApi.md#restOrdersCouponsCampaignsCodesCodeDelete) | **DELETE** /rest/orders/coupons/campaigns/codes/{code} | Delete a coupon |
| [**restOrdersCouponsCampaignsCodesCodeDisabledIsDisabledPut()**](OrderApi.md#restOrdersCouponsCampaignsCodesCodeDisabledIsDisabledPut) | **PUT** /rest/orders/coupons/campaigns/codes/{code}/disabled/{isDisabled} | Disable or enable coupon |
| [**restOrdersCouponsCampaignsCodesCodeGet()**](OrderApi.md#restOrdersCouponsCampaignsCodesCodeGet) | **GET** /rest/orders/coupons/campaigns/codes/{code} | Get coupon code information |
| [**restOrdersCouponsCodesContactsContactIdGet()**](OrderApi.md#restOrdersCouponsCodesContactsContactIdGet) | **GET** /rest/orders/coupons/codes/contacts/{contactId} | List redeemed coupon codes of a contact |
| [**restOrdersCouponsCodesCouponPost()**](OrderApi.md#restOrdersCouponsCodesCouponPost) | **POST** /rest/orders/coupons/codes/{coupon} | Validate a coupon |
| [**restOrdersCouponsCodesPost()**](OrderApi.md#restOrdersCouponsCodesPost) | **POST** /rest/orders/coupons/codes | Validate multiple coupons |
| [**restOrdersCurrenciesCountriesCountryIdGet()**](OrderApi.md#restOrdersCurrenciesCountriesCountryIdGet) | **GET** /rest/orders/currencies/countries/{countryId} | Get a currency for a country |
| [**restOrdersCurrenciesCurrencyIsoCountriesGet()**](OrderApi.md#restOrdersCurrenciesCurrencyIsoCountriesGet) | **GET** /rest/orders/currencies/{currencyIso}/countries | List countries for a currency |
| [**restOrdersCurrenciesCurrencyIsoExchangeRateGet()**](OrderApi.md#restOrdersCurrenciesCurrencyIsoExchangeRateGet) | **GET** /rest/orders/currencies/{currencyIso}/exchangeRate | Get the exchange rate for a currency |
| [**restOrdersCurrenciesCurrencyIsoGet()**](OrderApi.md#restOrdersCurrenciesCurrencyIsoGet) | **GET** /rest/orders/currencies/{currencyIso} | Get a currency |
| [**restOrdersCurrenciesExchangeRatesFromCurrencyIsoGet()**](OrderApi.md#restOrdersCurrenciesExchangeRatesFromCurrencyIsoGet) | **GET** /rest/orders/currencies/exchange_rates/from/{currencyIso} | Get the exchange rates from a currency |
| [**restOrdersCurrenciesExchangeRatesToCurrencyIsoGet()**](OrderApi.md#restOrdersCurrenciesExchangeRatesToCurrencyIsoGet) | **GET** /rest/orders/currencies/exchange_rates/to/{currencyIso} | Get the exchange rates to a currency |
| [**restOrdersCurrenciesGet()**](OrderApi.md#restOrdersCurrenciesGet) | **GET** /rest/orders/currencies | List currencies |
| [**restOrdersDatesTypesGet()**](OrderApi.md#restOrdersDatesTypesGet) | **GET** /rest/orders/dates/types | List order date types |
| [**restOrdersDatesTypesTypeIdGet()**](OrderApi.md#restOrdersDatesTypesTypeIdGet) | **GET** /rest/orders/dates/types/{typeId} | Find an order date type |
| [**restOrdersDatesTypesTypeIdNamesGet()**](OrderApi.md#restOrdersDatesTypesTypeIdNamesGet) | **GET** /rest/orders/dates/types/{typeId}/names | List names of an order date type |
| [**restOrdersDatesTypesTypeIdNamesLangGet()**](OrderApi.md#restOrdersDatesTypesTypeIdNamesLangGet) | **GET** /rest/orders/dates/types/{typeId}/names/{lang} | Get a name of an order date type |
| [**restOrdersDocumentsAccountingSummaryGet()**](OrderApi.md#restOrdersDocumentsAccountingSummaryGet) | **GET** /rest/orders/documents/accounting_summary | List document accounting summaries |
| [**restOrdersGet()**](OrderApi.md#restOrdersGet) | **GET** /rest/orders | Search order |
| [**restOrdersItemsDatesIdDelete()**](OrderApi.md#restOrdersItemsDatesIdDelete) | **DELETE** /rest/orders/items/dates/{id} | Delete a date of an order item |
| [**restOrdersItemsDatesIdGet()**](OrderApi.md#restOrdersItemsDatesIdGet) | **GET** /rest/orders/items/dates/{id} | Get date of an order item |
| [**restOrdersItemsDatesIdPut()**](OrderApi.md#restOrdersItemsDatesIdPut) | **PUT** /rest/orders/items/dates/{id} | Update a date of an order item |
| [**restOrdersItemsDatesPost()**](OrderApi.md#restOrdersItemsDatesPost) | **POST** /rest/orders/items/dates | Create a date for an order item |
| [**restOrdersItemsOrderItemIdBookingPost()**](OrderApi.md#restOrdersItemsOrderItemIdBookingPost) | **POST** /rest/orders/items/{orderItemId}/booking | Book an order item in |
| [**restOrdersItemsOrderItemIdDatesGet()**](OrderApi.md#restOrdersItemsOrderItemIdDatesGet) | **GET** /rest/orders/items/{orderItemId}/dates | List all dates of an order item |
| [**restOrdersItemsOrderItemIdDatesTypeIdDelete()**](OrderApi.md#restOrdersItemsOrderItemIdDatesTypeIdDelete) | **DELETE** /rest/orders/items/{orderItemId}/dates/{typeId} | Delete a date of an order item by order item and date type |
| [**restOrdersItemsOrderItemIdDatesTypeIdGet()**](OrderApi.md#restOrdersItemsOrderItemIdDatesTypeIdGet) | **GET** /rest/orders/items/{orderItemId}/dates/{typeId} | Get a date of an order item by order item and date type |
| [**restOrdersItemsOrderItemIdDatesTypeIdPost()**](OrderApi.md#restOrdersItemsOrderItemIdDatesTypeIdPost) | **POST** /rest/orders/items/{orderItemId}/dates/{typeId} | Create a date for an order item by order item and date type |
| [**restOrdersItemsOrderItemIdDatesTypeIdPut()**](OrderApi.md#restOrdersItemsOrderItemIdDatesTypeIdPut) | **PUT** /rest/orders/items/{orderItemId}/dates/{typeId} | Update a date of an order item by order item and date type |
| [**restOrdersItemsOrderItemIdPropertiesGet()**](OrderApi.md#restOrdersItemsOrderItemIdPropertiesGet) | **GET** /rest/orders/items/{orderItemId}/properties | Get all order item properties |
| [**restOrdersItemsOrderItemIdPropertiesTypeIdDelete()**](OrderApi.md#restOrdersItemsOrderItemIdPropertiesTypeIdDelete) | **DELETE** /rest/orders/items/{orderItemId}/properties/{typeId} | Delete order item property |
| [**restOrdersItemsOrderItemIdPropertiesTypeIdGet()**](OrderApi.md#restOrdersItemsOrderItemIdPropertiesTypeIdGet) | **GET** /rest/orders/items/{orderItemId}/properties/{typeId} | Get order item property |
| [**restOrdersItemsOrderItemIdPropertiesTypeIdPost()**](OrderApi.md#restOrdersItemsOrderItemIdPropertiesTypeIdPost) | **POST** /rest/orders/items/{orderItemId}/properties/{typeId} | Create order item property |
| [**restOrdersItemsOrderItemIdPropertiesTypeIdPut()**](OrderApi.md#restOrdersItemsOrderItemIdPropertiesTypeIdPut) | **PUT** /rest/orders/items/{orderItemId}/properties/{typeId} | Update order item property |
| [**restOrdersItemsOrderItemIdTransactionsGet()**](OrderApi.md#restOrdersItemsOrderItemIdTransactionsGet) | **GET** /rest/orders/items/{orderItemId}/transactions | List order item transactions |
| [**restOrdersItemsOrderItemIdTransactionsPost()**](OrderApi.md#restOrdersItemsOrderItemIdTransactionsPost) | **POST** /rest/orders/items/{orderItemId}/transactions | Create order item transaction |
| [**restOrdersItemsOutgoingStocksDelete()**](OrderApi.md#restOrdersItemsOutgoingStocksDelete) | **DELETE** /rest/orders/items/outgoing_stocks | Revert outgoing stock for order items |
| [**restOrdersItemsPropertiesIdDelete()**](OrderApi.md#restOrdersItemsPropertiesIdDelete) | **DELETE** /rest/orders/items/properties/{id} | Delete order item property |
| [**restOrdersItemsPropertiesIdGet()**](OrderApi.md#restOrdersItemsPropertiesIdGet) | **GET** /rest/orders/items/properties/{id} | Get order item property |
| [**restOrdersItemsPropertiesIdPut()**](OrderApi.md#restOrdersItemsPropertiesIdPut) | **PUT** /rest/orders/items/properties/{id} | Update order item property |
| [**restOrdersItemsPropertiesPost()**](OrderApi.md#restOrdersItemsPropertiesPost) | **POST** /rest/orders/items/properties | Create order item property |
| [**restOrdersItemsTransactionsBookingPost()**](OrderApi.md#restOrdersItemsTransactionsBookingPost) | **POST** /rest/orders/items/transactions/booking | Book order item transactions |
| [**restOrdersItemsTransactionsGet()**](OrderApi.md#restOrdersItemsTransactionsGet) | **GET** /rest/orders/items/transactions | Search order item transactions |
| [**restOrdersItemsTransactionsTransactionIdDelete()**](OrderApi.md#restOrdersItemsTransactionsTransactionIdDelete) | **DELETE** /rest/orders/items/transactions/{transactionId} | Delete order item transaction |
| [**restOrdersItemsTransactionsTransactionIdPut()**](OrderApi.md#restOrdersItemsTransactionsTransactionIdPut) | **PUT** /rest/orders/items/transactions/{transactionId} | Update order item transaction |
| [**restOrdersOrderIdBookingPost()**](OrderApi.md#restOrdersOrderIdBookingPost) | **POST** /rest/orders/{orderId}/booking | Book an order in |
| [**restOrdersOrderIdCancelPut()**](OrderApi.md#restOrdersOrderIdCancelPut) | **PUT** /rest/orders/{orderId}/cancel | Cancel an order |
| [**restOrdersOrderIdContactWishGet()**](OrderApi.md#restOrdersOrderIdContactWishGet) | **GET** /rest/orders/{orderId}/contactWish | Get a contact wish |
| [**restOrdersOrderIdCouponsCouponPost()**](OrderApi.md#restOrdersOrderIdCouponsCouponPost) | **POST** /rest/orders/{orderId}/coupons/{coupon} | Redeem a coupon code |
| [**restOrdersOrderIdDatesGet()**](OrderApi.md#restOrdersOrderIdDatesGet) | **GET** /rest/orders/{orderId}/dates | List all dates of an order |
| [**restOrdersOrderIdDatesTypeIdGet()**](OrderApi.md#restOrdersOrderIdDatesTypeIdGet) | **GET** /rest/orders/{orderId}/dates/{typeId} | Get a date |
| [**restOrdersOrderIdDelete()**](OrderApi.md#restOrdersOrderIdDelete) | **DELETE** /rest/orders/{orderId} | Delete an order |
| [**restOrdersOrderIdDeliveryOrdersAutomaticPost()**](OrderApi.md#restOrdersOrderIdDeliveryOrdersAutomaticPost) | **POST** /rest/orders/{orderId}/delivery_orders/automatic | Create delivery orders automatically for all order items |
| [**restOrdersOrderIdDeliveryOrdersPost()**](OrderApi.md#restOrdersOrderIdDeliveryOrdersPost) | **POST** /rest/orders/{orderId}/delivery_orders | Create a delivery order from a parent order |
| [**restOrdersOrderIdGet()**](OrderApi.md#restOrdersOrderIdGet) | **GET** /rest/orders/{orderId} | Get an order |
| [**restOrdersOrderIdItemsGet()**](OrderApi.md#restOrdersOrderIdItemsGet) | **GET** /rest/orders/{orderId}/items | Search order items |
| [**restOrdersOrderIdItemsOrderItemIdDelete()**](OrderApi.md#restOrdersOrderIdItemsOrderItemIdDelete) | **DELETE** /rest/orders/{orderId}/items/{orderItemId} | Delete an order item |
| [**restOrdersOrderIdItemsOrderItemIdSerialNumbersGet()**](OrderApi.md#restOrdersOrderIdItemsOrderItemIdSerialNumbersGet) | **GET** /rest/orders/{orderId}/items/{orderItemId}/serialNumbers | List serial numbers of an order item |
| [**restOrdersOrderIdItemsSerialNumbersGet()**](OrderApi.md#restOrdersOrderIdItemsSerialNumbersGet) | **GET** /rest/orders/{orderId}/items/serialNumbers | List serial numbers of an order |
| [**restOrdersOrderIdOutgoingStocksDelete()**](OrderApi.md#restOrdersOrderIdOutgoingStocksDelete) | **DELETE** /rest/orders/{orderId}/outgoing_stocks | Revert outgoing stock |
| [**restOrdersOrderIdOutgoingStocksPost()**](OrderApi.md#restOrdersOrderIdOutgoingStocksPost) | **POST** /rest/orders/{orderId}/outgoing_stocks | Book out order items |
| [**restOrdersOrderIdPackagenumbersGet()**](OrderApi.md#restOrdersOrderIdPackagenumbersGet) | **GET** /rest/orders/{orderId}/packagenumbers | List package numbers of an order |
| [**restOrdersOrderIdPropertiesPost()**](OrderApi.md#restOrdersOrderIdPropertiesPost) | **POST** /rest/orders/{orderId}/properties | Create property for an order |
| [**restOrdersOrderIdPropertiesTypeIdDelete()**](OrderApi.md#restOrdersOrderIdPropertiesTypeIdDelete) | **DELETE** /rest/orders/{orderId}/properties/{typeId} | Delete property of an order by order ID and property type ID |
| [**restOrdersOrderIdPropertiesTypeIdPut()**](OrderApi.md#restOrdersOrderIdPropertiesTypeIdPut) | **PUT** /rest/orders/{orderId}/properties/{typeId} | Update property of an order by order ID and property ID |
| [**restOrdersOrderIdPut()**](OrderApi.md#restOrdersOrderIdPut) | **PUT** /rest/orders/{orderId} | Update an order |
| [**restOrdersOrderIdShippingCancelShipmentDelete()**](OrderApi.md#restOrdersOrderIdShippingCancelShipmentDelete) | **DELETE** /rest/orders/{orderId}/shipping/cancel_shipment | Cancel a shipment |
| [**restOrdersOrderIdShippingPackagesDelete()**](OrderApi.md#restOrdersOrderIdShippingPackagesDelete) | **DELETE** /rest/orders/{orderId}/shipping/packages | Delete all order shipping packages for an order |
| [**restOrdersOrderIdShippingPackagesGet()**](OrderApi.md#restOrdersOrderIdShippingPackagesGet) | **GET** /rest/orders/{orderId}/shipping/packages | List order shipping packages |
| [**restOrdersOrderIdShippingPackagesItemsGet()**](OrderApi.md#restOrdersOrderIdShippingPackagesItemsGet) | **GET** /rest/orders/{orderId}/shipping/packages/items | List items contained in packages of an order |
| [**restOrdersOrderIdShippingPackagesOrderShippingPackageIdDelete()**](OrderApi.md#restOrdersOrderIdShippingPackagesOrderShippingPackageIdDelete) | **DELETE** /rest/orders/{orderId}/shipping/packages/{orderShippingPackageId} | Delete an order shipping package |
| [**restOrdersOrderIdShippingPackagesOrderShippingPackageIdGet()**](OrderApi.md#restOrdersOrderIdShippingPackagesOrderShippingPackageIdGet) | **GET** /rest/orders/{orderId}/shipping/packages/{orderShippingPackageId} | Get an order shipping package |
| [**restOrdersOrderIdShippingPackagesOrderShippingPackageIdPut()**](OrderApi.md#restOrdersOrderIdShippingPackagesOrderShippingPackageIdPut) | **PUT** /rest/orders/{orderId}/shipping/packages/{orderShippingPackageId} | Update an order shipping package |
| [**restOrdersOrderIdShippingPackagesPackedItemsGet()**](OrderApi.md#restOrdersOrderIdShippingPackagesPackedItemsGet) | **GET** /rest/orders/{orderId}/shipping/packages/packed_items | List packed items of a shipping package by the order ID |
| [**restOrdersOrderIdShippingPackagesPost()**](OrderApi.md#restOrdersOrderIdShippingPackagesPost) | **POST** /rest/orders/{orderId}/shipping/packages | Create an order shipping package |
| [**restOrdersOrderIdShippingPackagesUnpackedItemsGet()**](OrderApi.md#restOrdersOrderIdShippingPackagesUnpackedItemsGet) | **GET** /rest/orders/{orderId}/shipping/packages/unpacked_items | List unpacked items of a shipping package by the order ID |
| [**restOrdersOrderIdShippingPalletsPackagesItemsGet()**](OrderApi.md#restOrdersOrderIdShippingPalletsPackagesItemsGet) | **GET** /rest/orders/{orderId}/shipping/pallets/packages/items | List items contained in package pallets of an order |
| [**restOrdersOrderIdShippingPalletsPalletIdPackagesDelete()**](OrderApi.md#restOrdersOrderIdShippingPalletsPalletIdPackagesDelete) | **DELETE** /rest/orders/{orderId}/shipping/pallets/{palletId}/packages | Delete all order shipping packages in a pallet |
| [**restOrdersOrderIdShippingPalletsPalletIdPackagesGet()**](OrderApi.md#restOrdersOrderIdShippingPalletsPalletIdPackagesGet) | **GET** /rest/orders/{orderId}/shipping/pallets/{palletId}/packages | List all packages contained in pallets of an order |
| [**restOrdersOrderIdShippingPalletsPalletIdPackagesPut()**](OrderApi.md#restOrdersOrderIdShippingPalletsPalletIdPackagesPut) | **PUT** /rest/orders/{orderId}/shipping/pallets/{palletId}/packages | Update all packages in a pallet |
| [**restOrdersOrderIdShippingRegisterShipmentPost()**](OrderApi.md#restOrdersOrderIdShippingRegisterShipmentPost) | **POST** /rest/orders/{orderId}/shipping/register_shipment | Register a shipment |
| [**restOrdersOrderIdShippingShippingInformationAdditionalDataPut()**](OrderApi.md#restOrdersOrderIdShippingShippingInformationAdditionalDataPut) | **PUT** /rest/orders/{orderId}/shipping/shipping_information/additional_data | Update additional data of the shipping information |
| [**restOrdersOrderIdShippingShippingInformationDelete()**](OrderApi.md#restOrdersOrderIdShippingShippingInformationDelete) | **DELETE** /rest/orders/{orderId}/shipping/shipping_information | Delete shipping information |
| [**restOrdersOrderIdShippingShippingInformationGet()**](OrderApi.md#restOrdersOrderIdShippingShippingInformationGet) | **GET** /rest/orders/{orderId}/shipping/shipping_information | Get shipping information |
| [**restOrdersOrderIdShippingShippingInformationStatusPut()**](OrderApi.md#restOrdersOrderIdShippingShippingInformationStatusPut) | **PUT** /rest/orders/{orderId}/shipping/shipping_information/status | Update the shipping status of the shipping information |
| [**restOrdersOrderIdStatusHistoryGet()**](OrderApi.md#restOrdersOrderIdStatusHistoryGet) | **GET** /rest/orders/{orderId}/status-history | Get the status history of an order |
| [**restOrdersOrderIdTransactionsPost()**](OrderApi.md#restOrdersOrderIdTransactionsPost) | **POST** /rest/orders/{orderId}/transactions | Create order item transactions for an order |
| [**restOrdersPost()**](OrderApi.md#restOrdersPost) | **POST** /rest/orders | Create an order |
| [**restOrdersPropertiesIdDelete()**](OrderApi.md#restOrdersPropertiesIdDelete) | **DELETE** /rest/orders/properties/{id} | Delete property of an order by property ID |
| [**restOrdersPropertiesIdPut()**](OrderApi.md#restOrdersPropertiesIdPut) | **PUT** /rest/orders/properties/{id} | Update property of an order by property ID |
| [**restOrdersPropertiesTypesGet()**](OrderApi.md#restOrdersPropertiesTypesGet) | **GET** /rest/orders/properties/types | List order property types |
| [**restOrdersPropertiesTypesPost()**](OrderApi.md#restOrdersPropertiesTypesPost) | **POST** /rest/orders/properties/types | Create order property type |
| [**restOrdersPropertiesTypesTypeIdDelete()**](OrderApi.md#restOrdersPropertiesTypesTypeIdDelete) | **DELETE** /rest/orders/properties/types/{typeId} | Delete property type |
| [**restOrdersPropertiesTypesTypeIdGet()**](OrderApi.md#restOrdersPropertiesTypesTypeIdGet) | **GET** /rest/orders/properties/types/{typeId} | Get property type |
| [**restOrdersPropertiesTypesTypeIdPut()**](OrderApi.md#restOrdersPropertiesTypesTypeIdPut) | **PUT** /rest/orders/properties/types/{typeId} | Update property type |
| [**restOrdersReferrersGet()**](OrderApi.md#restOrdersReferrersGet) | **GET** /rest/orders/referrers | List referrers |
| [**restOrdersShippingCountriesGet()**](OrderApi.md#restOrdersShippingCountriesGet) | **GET** /rest/orders/shipping/countries | List shipping countries |
| [**restOrdersShippingPackageTypesGet()**](OrderApi.md#restOrdersShippingPackageTypesGet) | **GET** /rest/orders/shipping/package_types | List shipping package types |
| [**restOrdersShippingPackageTypesShippingPackageTypeIdGet()**](OrderApi.md#restOrdersShippingPackageTypesShippingPackageTypeIdGet) | **GET** /rest/orders/shipping/package_types/{shippingPackageTypeId} | Get a shipping package type |
| [**restOrdersShippingPackagesItemsIdDelete()**](OrderApi.md#restOrdersShippingPackagesItemsIdDelete) | **DELETE** /rest/orders/shipping/packages/items/{id} | Delete package, variation or quantity for an order |
| [**restOrdersShippingPackagesItemsIdPut()**](OrderApi.md#restOrdersShippingPackagesItemsIdPut) | **PUT** /rest/orders/shipping/packages/items/{id} | Update package, variation or quantity for an order |
| [**restOrdersShippingPackagesItemsPackageIdItemIdVariationIdDelete()**](OrderApi.md#restOrdersShippingPackagesItemsPackageIdItemIdVariationIdDelete) | **DELETE** /rest/orders/shipping/packages/items/{packageId}/{itemId}/{variationId} | Delete items of an order package |
| [**restOrdersShippingPackagesItemsPackageIdItemIdVariationIdPut()**](OrderApi.md#restOrdersShippingPackagesItemsPackageIdItemIdVariationIdPut) | **PUT** /rest/orders/shipping/packages/items/{packageId}/{itemId}/{variationId} | Update items of an order package |
| [**restOrdersShippingPackagesPackageIdItemsGet()**](OrderApi.md#restOrdersShippingPackagesPackageIdItemsGet) | **GET** /rest/orders/shipping/packages/{packageId}/items | List items of an order package |
| [**restOrdersShippingPackagesPackageIdItemsPost()**](OrderApi.md#restOrdersShippingPackagesPackageIdItemsPost) | **POST** /rest/orders/shipping/packages/{packageId}/items | Create package, variation or quantity for an order |
| [**restOrdersShippingPalletsGet()**](OrderApi.md#restOrdersShippingPalletsGet) | **GET** /rest/orders/shipping/pallets | List order shipping pallets |
| [**restOrdersShippingPalletsPalletIdDelete()**](OrderApi.md#restOrdersShippingPalletsPalletIdDelete) | **DELETE** /rest/orders/shipping/pallets/{palletId} | Delete all pallets of an order |
| [**restOrdersShippingPalletsPalletIdGet()**](OrderApi.md#restOrdersShippingPalletsPalletIdGet) | **GET** /rest/orders/shipping/pallets/{palletId} | List all pallets of an order |
| [**restOrdersShippingPalletsPalletIdPut()**](OrderApi.md#restOrdersShippingPalletsPalletIdPut) | **PUT** /rest/orders/shipping/pallets/{palletId} | Update all pallets of an order |
| [**restOrdersShippingPalletsPost()**](OrderApi.md#restOrdersShippingPalletsPost) | **POST** /rest/orders/shipping/pallets | Create order shipping pallets |
| [**restOrdersShippingParcelServiceRegionsParcelServiceRegionIdGet()**](OrderApi.md#restOrdersShippingParcelServiceRegionsParcelServiceRegionIdGet) | **GET** /rest/orders/shipping/parcel_service_regions/{parcelServiceRegionId} | Get an  order parcel service region |
| [**restOrdersShippingPresetsGet()**](OrderApi.md#restOrdersShippingPresetsGet) | **GET** /rest/orders/shipping/presets | List shipping profiles |
| [**restOrdersShippingPresetsPresetIdGet()**](OrderApi.md#restOrdersShippingPresetsPresetIdGet) | **GET** /rest/orders/shipping/presets/{presetId} | Get a shipping profile |
| [**restOrdersShippingPresetsPresetIdParcelServiceRegionsGet()**](OrderApi.md#restOrdersShippingPresetsPresetIdParcelServiceRegionsGet) | **GET** /rest/orders/shipping/presets/{presetId}/parcel_service_regions | List parcel service regions by parcel service preset ID |
| [**restOrdersShippingReturnsReturnsServiceProvidersGet()**](OrderApi.md#restOrdersShippingReturnsReturnsServiceProvidersGet) | **GET** /rest/orders/shipping/returns/returns_service_providers | List returns service providers |
| [**restOrdersShippingReturnsReturnsServiceProvidersPluginsGet()**](OrderApi.md#restOrdersShippingReturnsReturnsServiceProvidersPluginsGet) | **GET** /rest/orders/shipping/returns/returns_service_providers/plugins | List returns service provider plugins |
| [**restOrdersShippingReturnsReturnsServiceProvidersProviderIdGet()**](OrderApi.md#restOrdersShippingReturnsReturnsServiceProvidersProviderIdGet) | **GET** /rest/orders/shipping/returns/returns_service_providers/{providerId} | Get returns service provider by the ID |
| [**restOrdersShippingShippingInformationGet()**](OrderApi.md#restOrdersShippingShippingInformationGet) | **GET** /rest/orders/shipping/shipping_information | List orders with shipping information |
| [**restOrdersShippingShippingInformationPost()**](OrderApi.md#restOrdersShippingShippingInformationPost) | **POST** /rest/orders/shipping/shipping_information | Create shipping information |
| [**restOrdersShippingShippingServiceProvidersGet()**](OrderApi.md#restOrdersShippingShippingServiceProvidersGet) | **GET** /rest/orders/shipping/shipping_service_providers | List shipping service providers |
| [**restOrdersShippingShippingServiceProvidersPluginsGet()**](OrderApi.md#restOrdersShippingShippingServiceProvidersPluginsGet) | **GET** /rest/orders/shipping/shipping_service_providers/plugins | List shipping service provider plugins |
| [**restOrdersShippingShippingServiceProvidersPost()**](OrderApi.md#restOrdersShippingShippingServiceProvidersPost) | **POST** /rest/orders/shipping/shipping_service_providers | Save a shipping service provider |
| [**restOrdersShippingShippingServiceProvidersShippingServiceProviderIdGet()**](OrderApi.md#restOrdersShippingShippingServiceProvidersShippingServiceProviderIdGet) | **GET** /rest/orders/shipping/shipping_service_providers/{shipping_service_provider_id} | Get a shipping service provider |
| [**restOrdersStatusHistoryGet()**](OrderApi.md#restOrdersStatusHistoryGet) | **GET** /rest/orders/status-history | List status histories of orders |
| [**restOrdersStatusesAllGet()**](OrderApi.md#restOrdersStatusesAllGet) | **GET** /rest/orders/statuses/all | Get all order statuses |
| [**restOrdersStatusesGet()**](OrderApi.md#restOrdersStatusesGet) | **GET** /rest/orders/statuses | Searches for order statuses |
| [**restOrdersStatusesGroupFunctionsPost()**](OrderApi.md#restOrdersStatusesGroupFunctionsPost) | **POST** /rest/orders/statuses/group_functions | Change order status properties |
| [**restOrdersStatusesPost()**](OrderApi.md#restOrdersStatusesPost) | **POST** /rest/orders/statuses | Creates an order status. |
| [**restOrdersStatusesStatusIdDelete()**](OrderApi.md#restOrdersStatusesStatusIdDelete) | **DELETE** /rest/orders/statuses/{statusId} | Delete an order status |
| [**restOrdersStatusesStatusIdGet()**](OrderApi.md#restOrdersStatusesStatusIdGet) | **GET** /rest/orders/statuses/{statusId} | Get an order status |
| [**restOrdersStatusesStatusIdPut()**](OrderApi.md#restOrdersStatusesStatusIdPut) | **PUT** /rest/orders/statuses/{statusId} | Update an order status |
| [**restRedistributionsOrderIdDelete()**](OrderApi.md#restRedistributionsOrderIdDelete) | **DELETE** /rest/redistributions/{orderId} | Delete a redistribution |
| [**restRedistributionsOrderIdPut()**](OrderApi.md#restRedistributionsOrderIdPut) | **PUT** /rest/redistributions/{orderId} | Update a redistribution |
| [**restRedistributionsPost()**](OrderApi.md#restRedistributionsPost) | **POST** /rest/redistributions | Create a redistribution |
| [**restReordersOrderIdCurrencyPut()**](OrderApi.md#restReordersOrderIdCurrencyPut) | **PUT** /rest/reorders/{orderId}/currency | Update the currency |
| [**restReordersOrderIdDelete()**](OrderApi.md#restReordersOrderIdDelete) | **DELETE** /rest/reorders/{orderId} | Delete a reorder |
| [**restReordersOrderIdDeliveryDateGet()**](OrderApi.md#restReordersOrderIdDeliveryDateGet) | **GET** /rest/reorders/{orderId}/delivery_date | Get the delivery date |
| [**restReordersOrderIdDeliveryDatesPut()**](OrderApi.md#restReordersOrderIdDeliveryDatesPut) | **PUT** /rest/reorders/{orderId}/delivery_dates | Calculate and save the delivery dates |
| [**restReordersOrderIdPut()**](OrderApi.md#restReordersOrderIdPut) | **PUT** /rest/reorders/{orderId} | Update a reorder |
| [**restReordersPost()**](OrderApi.md#restReordersPost) | **POST** /rest/reorders | Create a reorder |
| [**restSystemSettingsTaricVatAssignmentGet()**](OrderApi.md#restSystemSettingsTaricVatAssignmentGet) | **GET** /rest/system/settings/taric_vat_assignment | List taric vat assignments |
| [**restSystemSettingsTaricVatAssignmentTaricCodeCountryIdDelete()**](OrderApi.md#restSystemSettingsTaricVatAssignmentTaricCodeCountryIdDelete) | **DELETE** /rest/system/settings/taric_vat_assignment/{taricCode}/{countryId} | Delete taric vat assignment |
| [**restSystemSettingsTaricVatAssignmentTaricCodeCountryIdGet()**](OrderApi.md#restSystemSettingsTaricVatAssignmentTaricCodeCountryIdGet) | **GET** /rest/system/settings/taric_vat_assignment/{taricCode}/{countryId} | Get taric vat assignment |
| [**restSystemSettingsTaricVatAssignmentTaricCodeCountryIdPost()**](OrderApi.md#restSystemSettingsTaricVatAssignmentTaricCodeCountryIdPost) | **POST** /rest/system/settings/taric_vat_assignment/{taricCode}/{countryId} | Create taric vat assignment |
| [**restSystemSettingsTaricVatAssignmentTaricCodeCountryIdPut()**](OrderApi.md#restSystemSettingsTaricVatAssignmentTaricCodeCountryIdPut) | **PUT** /rest/system/settings/taric_vat_assignment/{taricCode}/{countryId} | Update taric vat assignment |


## `restDeliveryOrdersOrderIdDelete()`

```php
restDeliveryOrdersOrderIdDelete($order_id): object
```

Delete a delivery order

Deletes a delivery order. The order ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int

try {
    $result = $apiInstance->restDeliveryOrdersOrderIdDelete($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restDeliveryOrdersOrderIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**|  | |

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

## `restDeliveryOrdersOrderIdPut()`

```php
restDeliveryOrdersOrderIdPut($order_id): \ck/plenty-client\Model\Order
```

Update a delivery order

Updates a delivery order. The order ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int

try {
    $result = $apiInstance->restDeliveryOrdersOrderIdPut($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restDeliveryOrdersOrderIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\Order**](../Model/Order.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restDeliveryOrdersPost()`

```php
restDeliveryOrdersPost(): \ck/plenty-client\Model\Order
```

Create a delivery order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restDeliveryOrdersPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restDeliveryOrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\Order**](../Model/Order.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersContactsContactIdGet()`

```php
restOrdersContactsContactIdGet($contact_id, $page, $items_per_page, $with): \ck/plenty-client\Model\RestOrdersGet200Response
```

List orders of a contact

Lists all orders of a contact. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact.
$page = 56; // int | The page to get. The default page that will be returned is page 1.
$items_per_page = 56; // int | The number of orders to be displayed per page. The default number of orders per page is 50.
$with = 56; // int | Load additional relations for an order. The following relations are available:      * <ul>        <li>'addresses' = The address objects linked to the order.</li>        <li>'relations' = The order relation reference instances that are associated with the order. These instances contain information such as the reference type. The available reference types are parent and reorder. The ID of the reference and the relation itself are also available.</li>        <li>'comments' = The order comments.</li>        <li>'location' = The accounting location linked to the order.</li>        <li>'payments' = The payments linked to the order.</li>        <li>'documents' = The documents linked to the order.</li>        <li>'contactSender' = The contact belonging the contact-sender relation.</li>        <li>'contactReceiver' = The contact belonging to the contact-receiver relation.</li>        <li>'warehouseSender' = The warehouse belonging to the warehouse-sender relation.</li>        <li>'warehouseReceiver' = The warehouse belonging to the warehouse-receiver relation.</li>        <li>'orderItems.variation' = The variation data belonging to the order item.</li>        <li>'orderItems.giftCardCodes' = The gift card codes belonging to the order item.</li>        <li>'orderItems.transactions' = The transactions belonging to the order item.</li>        <li>'orderItems.serialNumbers' = The serial numbers belonging to the order item.</li>        <li>'orderItems.variationBarcodes' = The barcodes belonging to the order item.</li>        <li>'orderItems.comments' = The comments belonging to the order item.</li>        <li>'shippingPackages' = The shipping packages that are associated with the order.</li>        <li><b>deprecated</b> 'orderItems.warehouseLocations' = The warehouse locations linked to the order item.</li>      </ul>     Example: <code>?with[]=addresses&with[]=orderItems.variation</code>

try {
    $result = $apiInstance->restOrdersContactsContactIdGet($contact_id, $page, $items_per_page, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersContactsContactIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact. | |
| **page** | **int**| The page to get. The default page that will be returned is page 1. | |
| **items_per_page** | **int**| The number of orders to be displayed per page. The default number of orders per page is 50. | |
| **with** | **int**| Load additional relations for an order. The following relations are available:      * &lt;ul&gt;        &lt;li&gt;&#39;addresses&#39; &#x3D; The address objects linked to the order.&lt;/li&gt;        &lt;li&gt;&#39;relations&#39; &#x3D; The order relation reference instances that are associated with the order. These instances contain information such as the reference type. The available reference types are parent and reorder. The ID of the reference and the relation itself are also available.&lt;/li&gt;        &lt;li&gt;&#39;comments&#39; &#x3D; The order comments.&lt;/li&gt;        &lt;li&gt;&#39;location&#39; &#x3D; The accounting location linked to the order.&lt;/li&gt;        &lt;li&gt;&#39;payments&#39; &#x3D; The payments linked to the order.&lt;/li&gt;        &lt;li&gt;&#39;documents&#39; &#x3D; The documents linked to the order.&lt;/li&gt;        &lt;li&gt;&#39;contactSender&#39; &#x3D; The contact belonging the contact-sender relation.&lt;/li&gt;        &lt;li&gt;&#39;contactReceiver&#39; &#x3D; The contact belonging to the contact-receiver relation.&lt;/li&gt;        &lt;li&gt;&#39;warehouseSender&#39; &#x3D; The warehouse belonging to the warehouse-sender relation.&lt;/li&gt;        &lt;li&gt;&#39;warehouseReceiver&#39; &#x3D; The warehouse belonging to the warehouse-receiver relation.&lt;/li&gt;        &lt;li&gt;&#39;orderItems.variation&#39; &#x3D; The variation data belonging to the order item.&lt;/li&gt;        &lt;li&gt;&#39;orderItems.giftCardCodes&#39; &#x3D; The gift card codes belonging to the order item.&lt;/li&gt;        &lt;li&gt;&#39;orderItems.transactions&#39; &#x3D; The transactions belonging to the order item.&lt;/li&gt;        &lt;li&gt;&#39;orderItems.serialNumbers&#39; &#x3D; The serial numbers belonging to the order item.&lt;/li&gt;        &lt;li&gt;&#39;orderItems.variationBarcodes&#39; &#x3D; The barcodes belonging to the order item.&lt;/li&gt;        &lt;li&gt;&#39;orderItems.comments&#39; &#x3D; The comments belonging to the order item.&lt;/li&gt;        &lt;li&gt;&#39;shippingPackages&#39; &#x3D; The shipping packages that are associated with the order.&lt;/li&gt;        &lt;li&gt;&lt;b&gt;deprecated&lt;/b&gt; &#39;orderItems.warehouseLocations&#39; &#x3D; The warehouse locations linked to the order item.&lt;/li&gt;      &lt;/ul&gt;     Example: &lt;code&gt;?with[]&#x3D;addresses&amp;with[]&#x3D;orderItems.variation&lt;/code&gt; | [optional] |

### Return type

[**\ck/plenty-client\Model\RestOrdersGet200Response**](../Model/RestOrdersGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersContactsContactIdMultiOrderPost()`

```php
restOrdersContactsContactIdMultiOrderPost($contact_id): \ck/plenty-client\Model\Order
```

Create a multi-order

Creates a multi-order for a contact. The ID of the contact must be specified. Options chosen in the System » Orders » Order types » Multi-order menu are relevant for this call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int

try {
    $result = $apiInstance->restOrdersContactsContactIdMultiOrderPost($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersContactsContactIdMultiOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\Order**](../Model/Order.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersCouponsCampaignsCampaignIdCodesPost()`

```php
restOrdersCouponsCampaignsCampaignIdCodesPost($campaign_id, $_rest_orders_coupons_campaigns_campaign_id_codes): \ck/plenty-client\Model\CouponCampaignCode
```

Create a coupon code

Creates a coupon code. The ID of the campaign must be specified. A code can optionally be specified. A random code will be generated if the code is not specified. A coupon value can also be optionally specified. The value of the campaign will be used if no individual value is specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int
$_rest_orders_coupons_campaigns_campaign_id_codes = new \ck/plenty-client\Model\RestOrdersCouponsCampaignsCampaignIdCodesPostRequest(); // \ck/plenty-client\Model\RestOrdersCouponsCampaignsCampaignIdCodesPostRequest

try {
    $result = $apiInstance->restOrdersCouponsCampaignsCampaignIdCodesPost($campaign_id, $_rest_orders_coupons_campaigns_campaign_id_codes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersCouponsCampaignsCampaignIdCodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**|  | |
| **_rest_orders_coupons_campaigns_campaign_id_codes** | [**\ck/plenty-client\Model\RestOrdersCouponsCampaignsCampaignIdCodesPostRequest**](../Model/RestOrdersCouponsCampaignsCampaignIdCodesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\CouponCampaignCode**](../Model/CouponCampaignCode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersCouponsCampaignsCodesCodeDelete()`

```php
restOrdersCouponsCampaignsCodesCodeDelete($code, $without_used): object
```

Delete a coupon

Deletes a coupon by the coupon code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 56; // int
$without_used = 56; // int | Do not delete used coupons

try {
    $result = $apiInstance->restOrdersCouponsCampaignsCodesCodeDelete($code, $without_used);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersCouponsCampaignsCodesCodeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **int**|  | |
| **without_used** | **int**| Do not delete used coupons | [optional] |

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

## `restOrdersCouponsCampaignsCodesCodeDisabledIsDisabledPut()`

```php
restOrdersCouponsCampaignsCodesCodeDisabledIsDisabledPut($code, $is_disabled): object
```

Disable or enable coupon

Sets the coupon disable field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 56; // int
$is_disabled = 56; // int

try {
    $result = $apiInstance->restOrdersCouponsCampaignsCodesCodeDisabledIsDisabledPut($code, $is_disabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersCouponsCampaignsCodesCodeDisabledIsDisabledPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **int**|  | |
| **is_disabled** | **int**|  | |

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

## `restOrdersCouponsCampaignsCodesCodeGet()`

```php
restOrdersCouponsCampaignsCodesCodeGet($code, $with): \ck/plenty-client\Model\CouponCampaignCode
```

Get coupon code information

Gets coupon code information. The code must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The coupon code
$with = 'with_example'; // string | Load additional relations for a coupon code. Currently possible are:      * <ul>      *   <li>'campaign' = The coupon campaign to which this code belongs to.</li>      * </ul>      * Example: <code>?with=campaign</code>

try {
    $result = $apiInstance->restOrdersCouponsCampaignsCodesCodeGet($code, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersCouponsCampaignsCodesCodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The coupon code | |
| **with** | **string**| Load additional relations for a coupon code. Currently possible are:      * &lt;ul&gt;      *   &lt;li&gt;&#39;campaign&#39; &#x3D; The coupon campaign to which this code belongs to.&lt;/li&gt;      * &lt;/ul&gt;      * Example: &lt;code&gt;?with&#x3D;campaign&lt;/code&gt; | [optional] |

### Return type

[**\ck/plenty-client\Model\CouponCampaignCode**](../Model/CouponCampaignCode.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersCouponsCodesContactsContactIdGet()`

```php
restOrdersCouponsCodesContactsContactIdGet($contact_id, $page, $items_per_page): \ck/plenty-client\Model\RestOrdersCouponsCodesContactsContactIdGet200Response
```

List redeemed coupon codes of a contact

Lists the redeemed coupon codes of contact. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$page = 56; // int | The page to get. The default page that will be returned is page 1.
$items_per_page = 56; // int | The number of coupons to be displayed per page. The default number of coupons per page is 50.

try {
    $result = $apiInstance->restOrdersCouponsCodesContactsContactIdGet($contact_id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersCouponsCodesContactsContactIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **page** | **int**| The page to get. The default page that will be returned is page 1. | [optional] |
| **items_per_page** | **int**| The number of coupons to be displayed per page. The default number of coupons per page is 50. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestOrdersCouponsCodesContactsContactIdGet200Response**](../Model/RestOrdersCouponsCodesContactsContactIdGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersCouponsCodesCouponPost()`

```php
restOrdersCouponsCodesCouponPost($coupon, $plenty_id, $ship_to_country, $call_from_scheduler, $tax_id_number, $contact_class, $contact_type, $_rest_orders_coupons_codes_coupon): \ck/plenty-client\Model\CouponCodeValidation
```

Validate a coupon

Validates if a coupon code can be used for the specified items, contact ID, etc. The code must be specified. If the coupon code is invalid, a ValidationException will be thrown. If the coupon code is valid, a CouponCodeValidation object will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coupon = 'coupon_example'; // string | The coupon to validate.
$plenty_id = 56; // int | The plenty id.
$ship_to_country = 56; // int | The country of delivery.
$call_from_scheduler = True; // bool | Flag that indicates whether the validation is requested by a subscription order or not. TRUE = The validation is requested by a subscription order. FALSE = The validation is not requested by a subscription order.
$tax_id_number = 'tax_id_number_example'; // string | The tax id number.
$contact_class = 56; // int | The contact class.
$contact_type = 56; // int | The contact type.
$_rest_orders_coupons_codes_coupon = new \ck/plenty-client\Model\RestOrdersCouponsCodesPostRequest(); // \ck/plenty-client\Model\RestOrdersCouponsCodesPostRequest

try {
    $result = $apiInstance->restOrdersCouponsCodesCouponPost($coupon, $plenty_id, $ship_to_country, $call_from_scheduler, $tax_id_number, $contact_class, $contact_type, $_rest_orders_coupons_codes_coupon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersCouponsCodesCouponPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coupon** | **string**| The coupon to validate. | |
| **plenty_id** | **int**| The plenty id. | |
| **ship_to_country** | **int**| The country of delivery. | |
| **call_from_scheduler** | **bool**| Flag that indicates whether the validation is requested by a subscription order or not. TRUE &#x3D; The validation is requested by a subscription order. FALSE &#x3D; The validation is not requested by a subscription order. | [optional] |
| **tax_id_number** | **string**| The tax id number. | [optional] |
| **contact_class** | **int**| The contact class. | [optional] |
| **contact_type** | **int**| The contact type. | [optional] |
| **_rest_orders_coupons_codes_coupon** | [**\ck/plenty-client\Model\RestOrdersCouponsCodesPostRequest**](../Model/RestOrdersCouponsCodesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\CouponCodeValidation**](../Model/CouponCodeValidation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersCouponsCodesPost()`

```php
restOrdersCouponsCodesPost($coupons, $plenty_id, $ship_to_country, $call_from_scheduler, $tax_id_number, $contact_class, $contact_type, $_rest_orders_coupons_codes): \ck/plenty-client\Model\CouponCodeValidation[]
```

Validate multiple coupons

Validates if multiple coupon codes can be used for the specified items, contact ID, etc. At least one code must be specified. Only one coupon code for special offers (promotional code) can be specified. Promotional codes are validated first. Gift card codes are validated and redeemed after the promotional code to ensure that any discounts are calculated correctly. If any coupon code is invalid, a CouponCodeValidation object with an exception parameter will be added to the list. If the coupon code is valid, a CouponCodeValidation object will be added to the list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coupons = 56; // int | The coupons to validate.
$plenty_id = 56; // int | The plenty id.
$ship_to_country = 56; // int | The country of delivery.
$call_from_scheduler = True; // bool | Flag that indicates whether the validation is requested by a subscription order or not. TRUE = The validation is requested by a subscription order. FALSE = The validation is not requested by a subscription order.
$tax_id_number = 'tax_id_number_example'; // string | The tax id number.
$contact_class = 56; // int | The contact class.
$contact_type = 56; // int | The contact type.
$_rest_orders_coupons_codes = new \ck/plenty-client\Model\RestOrdersCouponsCodesPostRequest(); // \ck/plenty-client\Model\RestOrdersCouponsCodesPostRequest

try {
    $result = $apiInstance->restOrdersCouponsCodesPost($coupons, $plenty_id, $ship_to_country, $call_from_scheduler, $tax_id_number, $contact_class, $contact_type, $_rest_orders_coupons_codes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersCouponsCodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coupons** | **int**| The coupons to validate. | |
| **plenty_id** | **int**| The plenty id. | |
| **ship_to_country** | **int**| The country of delivery. | |
| **call_from_scheduler** | **bool**| Flag that indicates whether the validation is requested by a subscription order or not. TRUE &#x3D; The validation is requested by a subscription order. FALSE &#x3D; The validation is not requested by a subscription order. | [optional] |
| **tax_id_number** | **string**| The tax id number. | [optional] |
| **contact_class** | **int**| The contact class. | [optional] |
| **contact_type** | **int**| The contact type. | [optional] |
| **_rest_orders_coupons_codes** | [**\ck/plenty-client\Model\RestOrdersCouponsCodesPostRequest**](../Model/RestOrdersCouponsCodesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\CouponCodeValidation[]**](../Model/CouponCodeValidation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersCurrenciesCountriesCountryIdGet()`

```php
restOrdersCurrenciesCountriesCountryIdGet($country_id, $columns, $with): \ck/plenty-client\Model\Currency
```

Get a currency for a country

Get a currency for a country. The ID of the country must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_id = 56; // int
$columns = 56; // int | The attributes to be loaded
$with = 56; // int | The relations to be loaded. Valid relations are 'names' or 'countries').

try {
    $result = $apiInstance->restOrdersCurrenciesCountriesCountryIdGet($country_id, $columns, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersCurrenciesCountriesCountryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_id** | **int**|  | |
| **columns** | **int**| The attributes to be loaded | [optional] |
| **with** | **int**| The relations to be loaded. Valid relations are &#39;names&#39; or &#39;countries&#39;). | [optional] |

### Return type

[**\ck/plenty-client\Model\Currency**](../Model/Currency.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersCurrenciesCurrencyIsoCountriesGet()`

```php
restOrdersCurrenciesCurrencyIsoCountriesGet($currency_iso, $columns): \ck/plenty-client\Model\Country[]
```

List countries for a currency

List countries for a currency. The ISO 4271 code of the currency must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_iso = 'currency_iso_example'; // string | The ISO 4217 code of the currency
$columns = 56; // int | The attributes to be loaded

try {
    $result = $apiInstance->restOrdersCurrenciesCurrencyIsoCountriesGet($currency_iso, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersCurrenciesCurrencyIsoCountriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_iso** | **string**| The ISO 4217 code of the currency | |
| **columns** | **int**| The attributes to be loaded | [optional] |

### Return type

[**\ck/plenty-client\Model\Country[]**](../Model/Country.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersCurrenciesCurrencyIsoExchangeRateGet()`

```php
restOrdersCurrenciesCurrencyIsoExchangeRateGet($currency_iso): \ck/plenty-client\Model\CurrencyExchangeRate
```

Get the exchange rate for a currency

Gets the exchange rate for a currency. The ISO 4271 code of the currency must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_iso = 56; // int

try {
    $result = $apiInstance->restOrdersCurrenciesCurrencyIsoExchangeRateGet($currency_iso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersCurrenciesCurrencyIsoExchangeRateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_iso** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\CurrencyExchangeRate**](../Model/CurrencyExchangeRate.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersCurrenciesCurrencyIsoGet()`

```php
restOrdersCurrenciesCurrencyIsoGet($currency_iso, $columns, $with): \ck/plenty-client\Model\Currency
```

Get a currency

Get a currency. The ISO 4217 code of the currency must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_iso = 'currency_iso_example'; // string | The ISO 4217 code of the currency
$columns = 56; // int | The attributes to be loaded
$with = 56; // int | The relations to be loaded. Valid relations are 'names' or 'countries'

try {
    $result = $apiInstance->restOrdersCurrenciesCurrencyIsoGet($currency_iso, $columns, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersCurrenciesCurrencyIsoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_iso** | **string**| The ISO 4217 code of the currency | |
| **columns** | **int**| The attributes to be loaded | [optional] |
| **with** | **int**| The relations to be loaded. Valid relations are &#39;names&#39; or &#39;countries&#39; | [optional] |

### Return type

[**\ck/plenty-client\Model\Currency**](../Model/Currency.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersCurrenciesExchangeRatesFromCurrencyIsoGet()`

```php
restOrdersCurrenciesExchangeRatesFromCurrencyIsoGet($currency_iso): object[]
```

Get the exchange rates from a currency

Gets the exchange rates from a currency. The ISO 4271 code of the currency must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_iso = 56; // int

try {
    $result = $apiInstance->restOrdersCurrenciesExchangeRatesFromCurrencyIsoGet($currency_iso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersCurrenciesExchangeRatesFromCurrencyIsoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_iso** | **int**|  | |

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

## `restOrdersCurrenciesExchangeRatesToCurrencyIsoGet()`

```php
restOrdersCurrenciesExchangeRatesToCurrencyIsoGet($currency_iso): object[]
```

Get the exchange rates to a currency

Gets the exchange rates to a currency. The ISO 4271 code of the currency must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_iso = 56; // int

try {
    $result = $apiInstance->restOrdersCurrenciesExchangeRatesToCurrencyIsoGet($currency_iso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersCurrenciesExchangeRatesToCurrencyIsoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_iso** | **int**|  | |

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

## `restOrdersCurrenciesGet()`

```php
restOrdersCurrenciesGet($columns, $with): \ck/plenty-client\Model\Currency[]
```

List currencies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$columns = 56; // int | The attributes to be loaded
$with = 56; // int | The relations to be loaded. Valid relations are 'names' or 'countries'.

try {
    $result = $apiInstance->restOrdersCurrenciesGet($columns, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersCurrenciesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **columns** | **int**| The attributes to be loaded | [optional] |
| **with** | **int**| The relations to be loaded. Valid relations are &#39;names&#39; or &#39;countries&#39;. | [optional] |

### Return type

[**\ck/plenty-client\Model\Currency[]**](../Model/Currency.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersDatesTypesGet()`

```php
restOrdersDatesTypesGet(): \ck/plenty-client\Model\OrderDateType[]
```

List order date types

Lists all available order date types. <br><ul> <li>1 = Deleted on</li> <li>2 = Created on</li> <li>3 = Paid date</li> <li>4 = Last update</li> <li>5 = Completed on</li> <li>6 = Return date</li> <li>7 = Payment due date</li> <li>8 = Estimated shipping date</li> <li>9 = Start date</li> <li>10 = End date</li> <li>11 = Possible delivery date</li> <li>12 = Market transfer date</li> <li>13 = Subscription cancelled on</li> <li>14 = Subscription last run</li> <li>15 = Subscription next run</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restOrdersDatesTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersDatesTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\OrderDateType[]**](../Model/OrderDateType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersDatesTypesTypeIdGet()`

```php
restOrdersDatesTypesTypeIdGet($type_id): \ck/plenty-client\Model\OrderDateType
```

Find an order date type

Finds an order date type. The ID of the type must be specified. The following IDs are available: <br><ul> <li>1 = Deleted on</li> <li>2 = Created on</li> <li>3 = Paid date</li> <li>4 = Last update</li> <li>5 = Completed on</li> <li>6 = Return date</li> <li>7 = Payment due date</li> <li>8 = Estimated shipping date</li> <li>9 = Start date</li> <li>10 = End date</li> <li>11 = Possible delivery date</li> <li>12 = Market transfer date</li> <li>13 = Subscription cancelled on</li> <li>14 = Subscription last run</li> <li>15 = Subscription next run</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int

try {
    $result = $apiInstance->restOrdersDatesTypesTypeIdGet($type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersDatesTypesTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type_id** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\OrderDateType**](../Model/OrderDateType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersDatesTypesTypeIdNamesGet()`

```php
restOrdersDatesTypesTypeIdNamesGet($type_id): \ck/plenty-client\Model\OrderDateTypeName[]
```

List names of an order date type

Lists names in all languages available of an order date type. The ID of the date type must be specified. The following IDs are available: <br><ul> <li>1 = Deleted on</li> <li>2 = Created on</li> <li>3 = Paid date</li> <li>4 = Last update</li> <li>5 = Completed on</li> <li>6 = Return date</li> <li>7 = Payment due date</li> <li>8 = Estimated shipping date</li> <li>9 = Start date</li> <li>10 = End date</li> <li>11 = Possible delivery date</li> <li>12 = Market transfer date</li> <li>13 = Subscription cancelled on</li> <li>14 = Subscription last run</li> <li>15 = Subscription next run</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int | The Id of the OrderDateType to be found

try {
    $result = $apiInstance->restOrdersDatesTypesTypeIdNamesGet($type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersDatesTypesTypeIdNamesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type_id** | **int**| The Id of the OrderDateType to be found | |

### Return type

[**\ck/plenty-client\Model\OrderDateTypeName[]**](../Model/OrderDateTypeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersDatesTypesTypeIdNamesLangGet()`

```php
restOrdersDatesTypesTypeIdNamesLangGet($type_id, $lang): \ck/plenty-client\Model\OrderDateTypeName
```

Get a name of an order date type

Gets a name of an order date type. The ID of the date type must be specified. The language of the order date type name must be specified by setting the ISO code of the language. The following IDs are available:  <br><ul> <li>1 = Deleted on</li> <li>2 = Created on</li> <li>3 = Paid date</li> <li>4 = Last update</li> <li>5 = Completed on</li> <li>6 = Return date</li> <li>7 = Payment due date</li> <li>8 = Estimated shipping date</li> <li>9 = Start date</li> <li>10 = End date</li> <li>11 = Possible delivery date</li> <li>12 = Market transfer date</li> <li>13 = Subscription cancelled on</li> <li>14 = Subscription last run</li> <li>15 = Subscription next run</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int | The ID of the order date type that should be found
$lang = 'lang_example'; // string | The language of the order date type name

try {
    $result = $apiInstance->restOrdersDatesTypesTypeIdNamesLangGet($type_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersDatesTypesTypeIdNamesLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type_id** | **int**| The ID of the order date type that should be found | |
| **lang** | **string**| The language of the order date type name | |

### Return type

[**\ck/plenty-client\Model\OrderDateTypeName**](../Model/OrderDateTypeName.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersDocumentsAccountingSummaryGet()`

```php
restOrdersDocumentsAccountingSummaryGet($order_id, $document_type, $created_at_from, $created_at_to, $page, $items_per_page): object
```

List document accounting summaries

Lists document accounting summaries. A document accounting summary is saved along with each reversal document (for invoice and credit note). It contains accounting information about the order for this point in time. The summary is saved because an order can be updated after a reversal document is generated. The information about the order before the update is needed for accounting purposes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order.
$document_type = 'document_type_example'; // string | The document type. The types that can be returned are the following: reversal_document (reversal document for an invoice) and reversal_refund (reversal document for an invoice).
$created_at_from = 'created_at_from_example'; // string | Get entries with createdAt date after this date.
$created_at_to = 'created_at_to_example'; // string | Get entries with createdAt date before this date.
$page = 56; // int | The page to get. The default page that will be returned is page 1.
$items_per_page = 56; // int | The number of summaries that should be displayed per page. The default number of orders per page is 10.

try {
    $result = $apiInstance->restOrdersDocumentsAccountingSummaryGet($order_id, $document_type, $created_at_from, $created_at_to, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersDocumentsAccountingSummaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order. | [optional] |
| **document_type** | **string**| The document type. The types that can be returned are the following: reversal_document (reversal document for an invoice) and reversal_refund (reversal document for an invoice). | [optional] |
| **created_at_from** | **string**| Get entries with createdAt date after this date. | [optional] |
| **created_at_to** | **string**| Get entries with createdAt date before this date. | [optional] |
| **page** | **int**| The page to get. The default page that will be returned is page 1. | [optional] |
| **items_per_page** | **int**| The number of summaries that should be displayed per page. The default number of orders per page is 10. | [optional] |

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

## `restOrdersGet()`

```php
restOrdersGet($order_type, $contact_id, $referrer_id, $shipping_profile_id, $shipping_service_provider_id, $owner_user_id, $warehouse_id, $is_ebay_plus, $included_variation, $included_item, $order_ids, $country_id, $order_item_name, $variation_number, $sender_contact, $sender_warehouse, $receiver_contact, $receiver_warehouse, $external_order_id, $client_id, $payment_status, $updated_at_from, $updated_at_to, $created_at_from, $created_at_to, $paid_at_from, $paid_at_to, $outgoing_items_booked_at_from, $outgoing_items_booked_at_to, $status_from, $status_to, $has_document, $has_document_number, $parent_order_id, $add_order_items, $page, $items_per_page, $with): \ck/plenty-client\Model\RestOrdersGet200Response
```

Search order

Searches for orders. The results can be restricted by using filter options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_type = 'order_type_example'; // string | Filter that restricts the search result to orders of specific order types. The ID of the order types must be specified. Several order type IDs can be entered separated by commas. @see order model typeId
$contact_id = 56; // int | Filter that restricts the search result to orders of a contact. The ID of the contact must be specified.
$referrer_id = 56; // int | Filter that restricts the search result to orders of a specific order referrer. The ID of the order referrer must be specified.
$shipping_profile_id = 56; // int | Filter that restricts the search result to orders with a specific shipping profile. The ID of shipping profile must be specified.
$shipping_service_provider_id = 56; // int | Filter that restricts the search result to orders with a specific shipping service provider (like DHL, UPS, etc.). The ID of shipping service provider must be specified.
$owner_user_id = 56; // int | Filter that restricts the search result to orders with a specific owner. The user ID of the owner must be specified.
$warehouse_id = 56; // int | Filter that restricts the search result to orders with a specific main warehouse. The ID of the warehouse must be specified.
$is_ebay_plus = True; // bool | Filter that restricts the search result to orders with the referrer eBay PLUS.
$included_variation = 56; // int | Filter that restricts the search result to orders including a specific variation. The ID of the variation must be specified.
$included_item = 56; // int | Filter that restricts the search result to orders including a specific item. The ID of the item must be specified.
$order_ids = 56; // int | Filter that restricts the search result to orders with a specific ID. To list several orders, the order IDs must be enetered separated by commas.
$country_id = 56; // int | Filter that restricts the search result to orders with a specific delivery or invoice country. The ID of the country must be specified.
$order_item_name = 'order_item_name_example'; // string | Filter that restricts the search result to orders including a specific item name. The name of the item must be specified.
$variation_number = 56; // int | Filter that restricts the search result to orders including a specific variation number. The number of the variation must be specified.
$sender_contact = 56; // int | Filter that restricts the search result to orders including a specific sender of the type contact. For example, the supplier is a sender of the type contact for reorders. The ID of the sender must be specified.
$sender_warehouse = 56; // int | Filter that restricts the search result to orders including a specific sender of the type warehouse. For example, the sending warehouse is a sender of the type warehouse for redistributions. The ID of the sender must be specified.
$receiver_contact = 56; // int | Filter that restricts the search result to orders including a specific receiver of the type contact. For example, a receiver of the type contact is the recipient of a main order. The ID of the receiver must be specified.
$receiver_warehouse = 56; // int | Filter that restricts the search result to orders with a specific receiver of the type warehouse. TFor example, the receiving receiving warehouse is a receiver of the type warehouse for redistributions. The ID of the receiver must be specified.
$external_order_id = 'external_order_id_example'; // string | Filter that restricts the search result to orders including a specific external order ID. The external order ID must be specified.
$client_id = 56; // int | Filter that restricts the search result to orders belonging to a specific client. The ID of the client must be specified.
$payment_status = 'payment_status_example'; // string | Filter that restricts the search result to orders with a specific payment status. Valid values are unpaid, partlyPaid, fullyPaid, overpaid. One of these values must be specified.
$updated_at_from = 'updated_at_from_example'; // string | Filter that restricts the search result to orders that were last updated on a specified date. The date has to be entered in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$updated_at_to = 'updated_at_to_example'; // string | Filter that restricts the search result to orders that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be entered in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$created_at_from = 'created_at_from_example'; // string | Filter that restricts the search result to orders that were created from a specified date up to the present date. This filter can be used alone or can be combined with the CreatedAtTo filter. The date has to be entered in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$created_at_to = 'created_at_to_example'; // string | Filter that restricts the search result to orders that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be entered in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$paid_at_from = 'paid_at_from_example'; // string | Filter that restricts the search result to orders that received a payment on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$paid_at_to = 'paid_at_to_example'; // string | Filter that restricts the search result to orders that received a payment within a certain period of time. This filter can be used alone or can be combined with the paidAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$outgoing_items_booked_at_from = 'outgoing_items_booked_at_from_example'; // string | Filter that restricts the search result to orders where the outgoing items were booked on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$outgoing_items_booked_at_to = 'outgoing_items_booked_at_to_example'; // string | Filter that restricts the search result to orders where the outgoing items were booked within a specified period of time. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
$status_from = 56; // int | Filter that restricts the search result to orders in a specific order status. The value of the order status must be specified.
$status_to = 56; // int | Filter that restricts the search result to orders within a range of order statuses. This filter can be used alone or can be combined with the statusFrom filter. The value of the order status must be specified.
$has_document = 'has_document_example'; // string | Filter that restricts the search result to orders which hold the given document type. Valid values are <i>multi_invoice</i>, <i>multi_credit_note</i>, <i>success_confirmation</i>, <i>return_note</i>, <i>pickup_delivery</i>, <i>repair_bill</i>, <i>dunning_letter</i>, <i>offer</i>, <i>order_confirmation</i>, <i>credit_note</i>, <i>correction_document</i>, <i>delivery_note</i>, <i>invoice</i>, <i>invoice_external</i>, <i>receipt</i>
$has_document_number = 'has_document_number_example'; // string | Filter that restricts the search result to orders which hold documents with given number.
$parent_order_id = 56; // int | Filter that restricts the search result to orders which have the given order ID as parent.
$add_order_items = True; // bool | Add the order items to the results. Default = true.
$page = 56; // int | The page to get. The default page that will be returned is page 1.
$items_per_page = 56; // int | The number of orders to be displayed per page. The default number of orders per page is 50.
$with = 56; // int | Load additional relations for an order. Currently possible are:     <ul>     <li>'addresses' = The address objects that are associated with the order.</li>     <li>'relations' = The order relation reference instances that are associated with the order. These instances contain information such as the the reference type, the ID of the reference and the relation itself.</li>     <li>'comments' = The order comments.</li>     <li>'location' = The accounting location of the order.</li>     <li>'payments' = The payments that are associated with the order.</li>     <li>'documents' = The documents that are associated with the order.</li>     <li>'contactSender' = The associated contact for the contact-sender relation.</li>     <li>'contactReceiver' = The associated contact for the contact-receiver relation.</li>     <li>'warehouseSender' = The associated warehouse for the warehouse-sender relation.</li>     <li>'warehouseReceiver' = The associated warehouse for the warehouse-receiver relation.</li>     <li>'orderItems.variation' = The variation that is associated with the order item.</li>     <li>'orderItems.giftCardCodes' = The gift card codes that are associated with the order item.</li>     <li>'orderItems.transactions' = The transactions that are associated with the order item.</li>     <li>'orderItems.serialNumbers' = The serial numbers that are associated with the order item.</li>     <li>'orderItems.variationBarcodes' = The barcodes that are associated with variation of the order item.</li>     <li>'orderItems.comments' = The comments that are associated with the order item.</li>     <li>'originOrderReferences' = The references to other orders, e.g. returns or credit notes, associated with this order.</li>     <li>'shippingPackages' = The shipping packages that are associated with the order.</li>     <li><b>deprecated</b> 'orderItems.warehouseLocations' = The warehouse locations that are associated with the order item.</li>     </ul>     Example: <code>?with[]=addresses&with[]=orderItems.variation</code>

try {
    $result = $apiInstance->restOrdersGet($order_type, $contact_id, $referrer_id, $shipping_profile_id, $shipping_service_provider_id, $owner_user_id, $warehouse_id, $is_ebay_plus, $included_variation, $included_item, $order_ids, $country_id, $order_item_name, $variation_number, $sender_contact, $sender_warehouse, $receiver_contact, $receiver_warehouse, $external_order_id, $client_id, $payment_status, $updated_at_from, $updated_at_to, $created_at_from, $created_at_to, $paid_at_from, $paid_at_to, $outgoing_items_booked_at_from, $outgoing_items_booked_at_to, $status_from, $status_to, $has_document, $has_document_number, $parent_order_id, $add_order_items, $page, $items_per_page, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_type** | **string**| Filter that restricts the search result to orders of specific order types. The ID of the order types must be specified. Several order type IDs can be entered separated by commas. @see order model typeId | [optional] |
| **contact_id** | **int**| Filter that restricts the search result to orders of a contact. The ID of the contact must be specified. | [optional] |
| **referrer_id** | **int**| Filter that restricts the search result to orders of a specific order referrer. The ID of the order referrer must be specified. | [optional] |
| **shipping_profile_id** | **int**| Filter that restricts the search result to orders with a specific shipping profile. The ID of shipping profile must be specified. | [optional] |
| **shipping_service_provider_id** | **int**| Filter that restricts the search result to orders with a specific shipping service provider (like DHL, UPS, etc.). The ID of shipping service provider must be specified. | [optional] |
| **owner_user_id** | **int**| Filter that restricts the search result to orders with a specific owner. The user ID of the owner must be specified. | [optional] |
| **warehouse_id** | **int**| Filter that restricts the search result to orders with a specific main warehouse. The ID of the warehouse must be specified. | [optional] |
| **is_ebay_plus** | **bool**| Filter that restricts the search result to orders with the referrer eBay PLUS. | [optional] |
| **included_variation** | **int**| Filter that restricts the search result to orders including a specific variation. The ID of the variation must be specified. | [optional] |
| **included_item** | **int**| Filter that restricts the search result to orders including a specific item. The ID of the item must be specified. | [optional] |
| **order_ids** | **int**| Filter that restricts the search result to orders with a specific ID. To list several orders, the order IDs must be enetered separated by commas. | [optional] |
| **country_id** | **int**| Filter that restricts the search result to orders with a specific delivery or invoice country. The ID of the country must be specified. | [optional] |
| **order_item_name** | **string**| Filter that restricts the search result to orders including a specific item name. The name of the item must be specified. | [optional] |
| **variation_number** | **int**| Filter that restricts the search result to orders including a specific variation number. The number of the variation must be specified. | [optional] |
| **sender_contact** | **int**| Filter that restricts the search result to orders including a specific sender of the type contact. For example, the supplier is a sender of the type contact for reorders. The ID of the sender must be specified. | [optional] |
| **sender_warehouse** | **int**| Filter that restricts the search result to orders including a specific sender of the type warehouse. For example, the sending warehouse is a sender of the type warehouse for redistributions. The ID of the sender must be specified. | [optional] |
| **receiver_contact** | **int**| Filter that restricts the search result to orders including a specific receiver of the type contact. For example, a receiver of the type contact is the recipient of a main order. The ID of the receiver must be specified. | [optional] |
| **receiver_warehouse** | **int**| Filter that restricts the search result to orders with a specific receiver of the type warehouse. TFor example, the receiving receiving warehouse is a receiver of the type warehouse for redistributions. The ID of the receiver must be specified. | [optional] |
| **external_order_id** | **string**| Filter that restricts the search result to orders including a specific external order ID. The external order ID must be specified. | [optional] |
| **client_id** | **int**| Filter that restricts the search result to orders belonging to a specific client. The ID of the client must be specified. | [optional] |
| **payment_status** | **string**| Filter that restricts the search result to orders with a specific payment status. Valid values are unpaid, partlyPaid, fullyPaid, overpaid. One of these values must be specified. | [optional] |
| **updated_at_from** | **string**| Filter that restricts the search result to orders that were last updated on a specified date. The date has to be entered in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **updated_at_to** | **string**| Filter that restricts the search result to orders that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be entered in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **created_at_from** | **string**| Filter that restricts the search result to orders that were created from a specified date up to the present date. This filter can be used alone or can be combined with the CreatedAtTo filter. The date has to be entered in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **created_at_to** | **string**| Filter that restricts the search result to orders that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be entered in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **paid_at_from** | **string**| Filter that restricts the search result to orders that received a payment on the specified date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **paid_at_to** | **string**| Filter that restricts the search result to orders that received a payment within a certain period of time. This filter can be used alone or can be combined with the paidAtFrom filter. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **outgoing_items_booked_at_from** | **string**| Filter that restricts the search result to orders where the outgoing items were booked on the specified date. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **outgoing_items_booked_at_to** | **string**| Filter that restricts the search result to orders where the outgoing items were booked within a specified period of time. The date has to be in the W3C format, e.g. &#39;2016-10-24T13:33:23+02:00&#39;. | [optional] |
| **status_from** | **int**| Filter that restricts the search result to orders in a specific order status. The value of the order status must be specified. | [optional] |
| **status_to** | **int**| Filter that restricts the search result to orders within a range of order statuses. This filter can be used alone or can be combined with the statusFrom filter. The value of the order status must be specified. | [optional] |
| **has_document** | **string**| Filter that restricts the search result to orders which hold the given document type. Valid values are &lt;i&gt;multi_invoice&lt;/i&gt;, &lt;i&gt;multi_credit_note&lt;/i&gt;, &lt;i&gt;success_confirmation&lt;/i&gt;, &lt;i&gt;return_note&lt;/i&gt;, &lt;i&gt;pickup_delivery&lt;/i&gt;, &lt;i&gt;repair_bill&lt;/i&gt;, &lt;i&gt;dunning_letter&lt;/i&gt;, &lt;i&gt;offer&lt;/i&gt;, &lt;i&gt;order_confirmation&lt;/i&gt;, &lt;i&gt;credit_note&lt;/i&gt;, &lt;i&gt;correction_document&lt;/i&gt;, &lt;i&gt;delivery_note&lt;/i&gt;, &lt;i&gt;invoice&lt;/i&gt;, &lt;i&gt;invoice_external&lt;/i&gt;, &lt;i&gt;receipt&lt;/i&gt; | [optional] |
| **has_document_number** | **string**| Filter that restricts the search result to orders which hold documents with given number. | [optional] |
| **parent_order_id** | **int**| Filter that restricts the search result to orders which have the given order ID as parent. | [optional] |
| **add_order_items** | **bool**| Add the order items to the results. Default &#x3D; true. | [optional] |
| **page** | **int**| The page to get. The default page that will be returned is page 1. | [optional] |
| **items_per_page** | **int**| The number of orders to be displayed per page. The default number of orders per page is 50. | [optional] |
| **with** | **int**| Load additional relations for an order. Currently possible are:     &lt;ul&gt;     &lt;li&gt;&#39;addresses&#39; &#x3D; The address objects that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#39;relations&#39; &#x3D; The order relation reference instances that are associated with the order. These instances contain information such as the the reference type, the ID of the reference and the relation itself.&lt;/li&gt;     &lt;li&gt;&#39;comments&#39; &#x3D; The order comments.&lt;/li&gt;     &lt;li&gt;&#39;location&#39; &#x3D; The accounting location of the order.&lt;/li&gt;     &lt;li&gt;&#39;payments&#39; &#x3D; The payments that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#39;documents&#39; &#x3D; The documents that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#39;contactSender&#39; &#x3D; The associated contact for the contact-sender relation.&lt;/li&gt;     &lt;li&gt;&#39;contactReceiver&#39; &#x3D; The associated contact for the contact-receiver relation.&lt;/li&gt;     &lt;li&gt;&#39;warehouseSender&#39; &#x3D; The associated warehouse for the warehouse-sender relation.&lt;/li&gt;     &lt;li&gt;&#39;warehouseReceiver&#39; &#x3D; The associated warehouse for the warehouse-receiver relation.&lt;/li&gt;     &lt;li&gt;&#39;orderItems.variation&#39; &#x3D; The variation that is associated with the order item.&lt;/li&gt;     &lt;li&gt;&#39;orderItems.giftCardCodes&#39; &#x3D; The gift card codes that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#39;orderItems.transactions&#39; &#x3D; The transactions that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#39;orderItems.serialNumbers&#39; &#x3D; The serial numbers that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#39;orderItems.variationBarcodes&#39; &#x3D; The barcodes that are associated with variation of the order item.&lt;/li&gt;     &lt;li&gt;&#39;orderItems.comments&#39; &#x3D; The comments that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#39;originOrderReferences&#39; &#x3D; The references to other orders, e.g. returns or credit notes, associated with this order.&lt;/li&gt;     &lt;li&gt;&#39;shippingPackages&#39; &#x3D; The shipping packages that are associated with the order.&lt;/li&gt;     &lt;li&gt;&lt;b&gt;deprecated&lt;/b&gt; &#39;orderItems.warehouseLocations&#39; &#x3D; The warehouse locations that are associated with the order item.&lt;/li&gt;     &lt;/ul&gt;     Example: &lt;code&gt;?with[]&#x3D;addresses&amp;with[]&#x3D;orderItems.variation&lt;/code&gt; | [optional] |

### Return type

[**\ck/plenty-client\Model\RestOrdersGet200Response**](../Model/RestOrdersGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsDatesIdDelete()`

```php
restOrdersItemsDatesIdDelete($id)
```

Delete a date of an order item

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Deletes the date of an order item. The ID of the date must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the order item date

try {
    $apiInstance->restOrdersItemsDatesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsDatesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the order item date | |

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

## `restOrdersItemsDatesIdGet()`

```php
restOrdersItemsDatesIdGet($id): \ck/plenty-client\Model\OrderItemDate
```

Get date of an order item

<b>DEPRECATED: Use the following route: GET /rest/orders/{orderId}</b> Gets a date of an order item. The ID of the date must be specified. The following IDs are available: <br><ul> <li>1 = Deleted on</li> <li>2 = Created on</li> <li>3 = Paid date</li> <li>4 = Last update</li> <li>5 = Completed on</li> <li>6 = Return date</li> <li>7 = Payment due date</li> <li>8 = Estimated shipping date</li> <li>9 = Start date</li> <li>10 = End date</li> <li>11 = Possible delivery date</li> <li>12 = Market transfer date</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the order item date

try {
    $result = $apiInstance->restOrdersItemsDatesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsDatesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the order item date | |

### Return type

[**\ck/plenty-client\Model\OrderItemDate**](../Model/OrderItemDate.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsDatesIdPut()`

```php
restOrdersItemsDatesIdPut($id, $_rest_orders_items_dates_id): \ck/plenty-client\Model\OrderItemDate
```

Update a date of an order item

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Updates a date of an order item. The ID of the date must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the order item date
$_rest_orders_items_dates_id = new \ck/plenty-client\Model\RestOrdersItemsDatesIdPutRequest(); // \ck/plenty-client\Model\RestOrdersItemsDatesIdPutRequest

try {
    $result = $apiInstance->restOrdersItemsDatesIdPut($id, $_rest_orders_items_dates_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsDatesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the order item date | |
| **_rest_orders_items_dates_id** | [**\ck/plenty-client\Model\RestOrdersItemsDatesIdPutRequest**](../Model/RestOrdersItemsDatesIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderItemDate**](../Model/OrderItemDate.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsDatesPost()`

```php
restOrdersItemsDatesPost($_rest_orders_items_dates): \ck/plenty-client\Model\OrderItemDate
```

Create a date for an order item

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Creates a date for an order item. The ID of the order item and the order item date must be specified. Also, an array containing the order item ID, the type ID of the order item date must be set. The following order item date type IDs are available:  <br><ul> <li>1 = Deleted on</li> <li>2 = Created on</li> <li>3 = Paid date</li> <li>4 = Last update</li> <li>5 = Completed on</li> <li>6 = Return date</li> <li>7 = Payment due date</li> <li>8 = Estimated shipping date</li> <li>9 = Start date</li> <li>10 = End date</li> <li>11 = Possible delivery date</li> <li>12 = Market transfer date</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_orders_items_dates = new \ck/plenty-client\Model\RestOrdersItemsDatesPostRequest(); // \ck/plenty-client\Model\RestOrdersItemsDatesPostRequest

try {
    $result = $apiInstance->restOrdersItemsDatesPost($_rest_orders_items_dates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsDatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_orders_items_dates** | [**\ck/plenty-client\Model\RestOrdersItemsDatesPostRequest**](../Model/RestOrdersItemsDatesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderItemDate**](../Model/OrderItemDate.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsOrderItemIdBookingPost()`

```php
restOrdersItemsOrderItemIdBookingPost($order_item_id, $delivery_note_number): object
```

Book an order item in

Books an order item in. The ID of the order item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item_id = 56; // int | The ID of the order item.
$delivery_note_number = 'delivery_note_number_example'; // string | If desired, set the delivery note number provided by the supplier.

try {
    $result = $apiInstance->restOrdersItemsOrderItemIdBookingPost($order_item_id, $delivery_note_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsOrderItemIdBookingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_item_id** | **int**| The ID of the order item. | |
| **delivery_note_number** | **string**| If desired, set the delivery note number provided by the supplier. | [optional] |

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

## `restOrdersItemsOrderItemIdDatesGet()`

```php
restOrdersItemsOrderItemIdDatesGet($order_item_id): \ck/plenty-client\Model\OrderItemDate[]
```

List all dates of an order item

<b>DEPRECATED: Use the following route: GET /rest/orders/{orderId}</b> Lists all dates of an order item. The ID of the order item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item_id = 56; // int | The ID of the order item

try {
    $result = $apiInstance->restOrdersItemsOrderItemIdDatesGet($order_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsOrderItemIdDatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_item_id** | **int**| The ID of the order item | |

### Return type

[**\ck/plenty-client\Model\OrderItemDate[]**](../Model/OrderItemDate.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsOrderItemIdDatesTypeIdDelete()`

```php
restOrdersItemsOrderItemIdDatesTypeIdDelete($order_item_id, $type_id)
```

Delete a date of an order item by order item and date type

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Deletes a date of an order item. The ID of the order item and the ID of the date type must be specified. The following order item date type IDs are available:  <br><ul> <li>1 = Deleted on</li> <li>2 = Created on</li> <li>3 = Paid date</li> <li>4 = Last update</li> <li>5 = Completed on</li> <li>6 = Return date</li> <li>7 = Payment due date</li> <li>8 = Estimated shipping date</li> <li>9 = Start date</li> <li>10 = End date</li> <li>11 = Possible delivery date</li> <li>12 = Market transfer date</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item_id = 56; // int | The ID of the order item
$type_id = 56; // int | The ID of the order date

try {
    $apiInstance->restOrdersItemsOrderItemIdDatesTypeIdDelete($order_item_id, $type_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsOrderItemIdDatesTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_item_id** | **int**| The ID of the order item | |
| **type_id** | **int**| The ID of the order date | |

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

## `restOrdersItemsOrderItemIdDatesTypeIdGet()`

```php
restOrdersItemsOrderItemIdDatesTypeIdGet($order_item_id, $type_id): \ck/plenty-client\Model\OrderItemDate
```

Get a date of an order item by order item and date type

<b>DEPRECATED: Use the following route: GET /rest/orders/{orderId}</b> Gets a date of an order item. The ID of the order item and the ID of the date type must be specified. <br><ul> <li>1 = Deleted on</li> <li>2 = Created on</li> <li>3 = Paid date</li> <li>4 = Last update</li> <li>5 = Completed on</li> <li>6 = Return date</li> <li>7 = Payment due date</li> <li>8 = Estimated shipping date</li> <li>9 = Start date</li> <li>10 = End date</li> <li>11 = Possible delivery date</li> <li>12 = Market transfer date</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item_id = 56; // int | The ID of the order item
$type_id = 56; // int | The ID of the order date type

try {
    $result = $apiInstance->restOrdersItemsOrderItemIdDatesTypeIdGet($order_item_id, $type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsOrderItemIdDatesTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_item_id** | **int**| The ID of the order item | |
| **type_id** | **int**| The ID of the order date type | |

### Return type

[**\ck/plenty-client\Model\OrderItemDate**](../Model/OrderItemDate.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsOrderItemIdDatesTypeIdPost()`

```php
restOrdersItemsOrderItemIdDatesTypeIdPost($order_item_id, $type_id, $_rest_orders_items_order_item_id_dates_type_id): \ck/plenty-client\Model\OrderItemDate
```

Create a date for an order item by order item and date type

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Creates a date for an order item. The ID of the order item and the ID of the date type must be specified. The following order item date type IDs are available:  <br><ul> <li>1 = Deleted on</li> <li>2 = Created on</li> <li>3 = Paid date</li> <li>4 = Last update</li> <li>5 = Completed on</li> <li>6 = Return date</li> <li>7 = Payment due date</li> <li>8 = Estimated shipping date</li> <li>9 = Start date</li> <li>10 = End date</li> <li>11 = Possible delivery date</li> <li>12 = Market transfer date</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item_id = 56; // int | The ID of the order item
$type_id = 56; // int | The ID of the order date type
$_rest_orders_items_order_item_id_dates_type_id = new \ck/plenty-client\Model\RestOrdersItemsDatesPostRequest(); // \ck/plenty-client\Model\RestOrdersItemsDatesPostRequest

try {
    $result = $apiInstance->restOrdersItemsOrderItemIdDatesTypeIdPost($order_item_id, $type_id, $_rest_orders_items_order_item_id_dates_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsOrderItemIdDatesTypeIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_item_id** | **int**| The ID of the order item | |
| **type_id** | **int**| The ID of the order date type | |
| **_rest_orders_items_order_item_id_dates_type_id** | [**\ck/plenty-client\Model\RestOrdersItemsDatesPostRequest**](../Model/RestOrdersItemsDatesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderItemDate**](../Model/OrderItemDate.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsOrderItemIdDatesTypeIdPut()`

```php
restOrdersItemsOrderItemIdDatesTypeIdPut($order_item_id, $type_id, $_rest_orders_items_order_item_id_dates_type_id): \ck/plenty-client\Model\OrderItemDate
```

Update a date of an order item by order item and date type

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Updates the date of an order item. The ID of the order item and the ID of the date type must be specified. The following order item date type IDs are available:  <br><ul> <li>1 = Deleted on</li> <li>2 = Created on</li> <li>3 = Paid date</li> <li>4 = Last update</li> <li>5 = Completed on</li> <li>6 = Return date</li> <li>7 = Payment due date</li> <li>8 = Estimated shipping date</li> <li>9 = Start date</li> <li>10 = End date</li> <li>11 = Possible delivery date</li> <li>12 = Market transfer date</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item_id = 56; // int | The ID of the order item
$type_id = 56; // int | The ID of the order date type
$_rest_orders_items_order_item_id_dates_type_id = new \ck/plenty-client\Model\RestOrdersItemsDatesIdPutRequest(); // \ck/plenty-client\Model\RestOrdersItemsDatesIdPutRequest

try {
    $result = $apiInstance->restOrdersItemsOrderItemIdDatesTypeIdPut($order_item_id, $type_id, $_rest_orders_items_order_item_id_dates_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsOrderItemIdDatesTypeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_item_id** | **int**| The ID of the order item | |
| **type_id** | **int**| The ID of the order date type | |
| **_rest_orders_items_order_item_id_dates_type_id** | [**\ck/plenty-client\Model\RestOrdersItemsDatesIdPutRequest**](../Model/RestOrdersItemsDatesIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderItemDate**](../Model/OrderItemDate.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsOrderItemIdPropertiesGet()`

```php
restOrdersItemsOrderItemIdPropertiesGet($order_item_id): \ck/plenty-client\Model\OrderItemProperty[]
```

Get all order item properties

<b>DEPRECATED: Use the following route: GET /rest/orders/{orderId}</b> Gets all order item properties for one order item. The order item ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item_id = 56; // int | The order item ID.

try {
    $result = $apiInstance->restOrdersItemsOrderItemIdPropertiesGet($order_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsOrderItemIdPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_item_id** | **int**| The order item ID. | |

### Return type

[**\ck/plenty-client\Model\OrderItemProperty[]**](../Model/OrderItemProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsOrderItemIdPropertiesTypeIdDelete()`

```php
restOrdersItemsOrderItemIdPropertiesTypeIdDelete($order_item_id, $type_id)
```

Delete order item property

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Deletes an order item property. The order item ID and the order item property type ID must be specified. The following property types are available by default:  <br><ul> <li>1 = WAREHOUSE</li> <li>2 = SHIPPING_PROFILE</li> <li>3 = PAYMENT_METHOD</li> <li>11 = WEIGHT</li> <li>12 = WIDTH</li> <li>13 = LENGTH</li> <li>14 = HEIGHT</li> <li>16 = EXTERNAL_TOKEN_ID</li> <li>17 = EXTERNAL_ITEM_ID</li> <li>18 = COUPON_CODE</li> <li>19 = COUPON_TYPE</li> <li>20 = ORIGINAL_WAREHOUSE</li> <li>21 = ORIGINAL_QUANTITY</li> <li>22 = CATEGORY_ID</li> <li>23 = MARKET_FEE</li> <li>24 = STOCK_REVERSING</li> <li>25 = DISPUTE_STATUS</li> <li>26 = NO_CHANGE_BY_CONTACT</li> <li>29 = SIZE</li> <li>30 = LOCATION_RESERVED</li> <li>31 = EXTERNAL_SHIPMENT_ITEM_ID</li> <li>32 = PARTIAL_SHIPPING_COSTS</li> <li>33 = MAIN_DOCUMENT_NUMBER</li> <li>34 = SALES_TAX_ID_NUMBER</li> <li>35 = RETURNS_REASON</li> <li>36 = RETURNS_ITEM_STATUS</li> <li>37 = FULFILLMENT_CENTER_ID</li> <li>38 = FULFILLMENT_CENTER_COUNTRY_ISO</li> <li>39 = REORDER_ITEM_ID</li> <li>40 = LISTING_TYPE</li> <li>46 = SOLD_COUPON_CODE</li> <li>48 = ORDER_ITEM_STATE</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item_id = 56; // int | The order item ID.
$type_id = 56; // int | The order item property type ID.

try {
    $apiInstance->restOrdersItemsOrderItemIdPropertiesTypeIdDelete($order_item_id, $type_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsOrderItemIdPropertiesTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_item_id** | **int**| The order item ID. | |
| **type_id** | **int**| The order item property type ID. | |

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

## `restOrdersItemsOrderItemIdPropertiesTypeIdGet()`

```php
restOrdersItemsOrderItemIdPropertiesTypeIdGet($order_item_id, $type_id): \ck/plenty-client\Model\OrderItemProperty
```

Get order item property

<b>DEPRECATED: Use the following route: GET /rest/orders/{orderId}</b> Gets an order item property. The order item ID and the order item property type ID must be specified. The following property types are available by default:  <br><ul> <li>1 = WAREHOUSE</li> <li>2 = SHIPPING_PROFILE</li> <li>3 = PAYMENT_METHOD</li> <li>11 = WEIGHT</li> <li>12 = WIDTH</li> <li>13 = LENGTH</li> <li>14 = HEIGHT</li> <li>16 = EXTERNAL_TOKEN_ID</li> <li>17 = EXTERNAL_ITEM_ID</li> <li>18 = COUPON_CODE</li> <li>19 = COUPON_TYPE</li> <li>20 = ORIGINAL_WAREHOUSE</li> <li>21 = ORIGINAL_QUANTITY</li> <li>22 = CATEGORY_ID</li> <li>23 = MARKET_FEE</li> <li>24 = STOCK_REVERSING</li> <li>25 = DISPUTE_STATUS</li> <li>26 = NO_CHANGE_BY_CONTACT</li> <li>29 = SIZE</li> <li>30 = LOCATION_RESERVED</li> <li>31 = EXTERNAL_SHIPMENT_ITEM_ID</li> <li>32 = PARTIAL_SHIPPING_COSTS</li> <li>33 = MAIN_DOCUMENT_NUMBER</li> <li>34 = SALES_TAX_ID_NUMBER</li> <li>35 = RETURNS_REASON</li> <li>36 = RETURNS_ITEM_STATUS</li> <li>37 = FULFILLMENT_CENTER_ID</li> <li>38 = FULFILLMENT_CENTER_COUNTRY_ISO</li> <li>39 = REORDER_ITEM_ID</li> <li>40 = LISTING_TYPE</li> <li>46 = SOLD_COUPON_CODE</li> <li>48 = ORDER_ITEM_STATE</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item_id = 56; // int | The ID of the order item.
$type_id = 56; // int | The ID of the order item property type.

try {
    $result = $apiInstance->restOrdersItemsOrderItemIdPropertiesTypeIdGet($order_item_id, $type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsOrderItemIdPropertiesTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_item_id** | **int**| The ID of the order item. | |
| **type_id** | **int**| The ID of the order item property type. | |

### Return type

[**\ck/plenty-client\Model\OrderItemProperty**](../Model/OrderItemProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsOrderItemIdPropertiesTypeIdPost()`

```php
restOrdersItemsOrderItemIdPropertiesTypeIdPost($order_item_id, $type_id, $_rest_orders_items_order_item_id_properties_type_id): \ck/plenty-client\Model\OrderItemProperty
```

Create order item property

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Creates an order item property. The order item ID and the order item property type ID must be specified. The following properties are available by default:  <br><ul> <li>1 = WAREHOUSE</li> <li>2 = SHIPPING_PROFILE</li> <li>3 = PAYMENT_METHOD</li> <li>11 = WEIGHT</li> <li>12 = WIDTH</li> <li>13 = LENGTH</li> <li>14 = HEIGHT</li> <li>16 = EXTERNAL_TOKEN_ID</li> <li>17 = EXTERNAL_ITEM_ID</li> <li>18 = COUPON_CODE</li> <li>19 = COUPON_TYPE</li> <li>20 = ORIGINAL_WAREHOUSE</li> <li>21 = ORIGINAL_QUANTITY</li> <li>22 = CATEGORY_ID</li> <li>23 = MARKET_FEE</li> <li>24 = STOCK_REVERSING</li> <li>25 = DISPUTE_STATUS</li> <li>26 = NO_CHANGE_BY_CONTACT</li> <li>29 = SIZE</li> <li>30 = LOCATION_RESERVED</li> <li>31 = EXTERNAL_SHIPMENT_ITEM_ID</li> <li>32 = PARTIAL_SHIPPING_COSTS</li> <li>33 = MAIN_DOCUMENT_NUMBER</li> <li>34 = SALES_TAX_ID_NUMBER</li> <li>35 = RETURNS_REASON</li> <li>36 = RETURNS_ITEM_STATUS</li> <li>37 = FULFILLMENT_CENTER_ID</li> <li>38 = FULFILLMENT_CENTER_COUNTRY_ISO</li> <li>39 = REORDER_ITEM_ID</li> <li>40 = LISTING_TYPE</li> <li>46 = SOLD_COUPON_CODE</li> <li>48 = ORDER_ITEM_STATE</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item_id = 56; // int | The order item ID.
$type_id = 56; // int | The order item property type ID.
$_rest_orders_items_order_item_id_properties_type_id = new \ck/plenty-client\Model\RestOrdersItemsPropertiesPostRequest(); // \ck/plenty-client\Model\RestOrdersItemsPropertiesPostRequest

try {
    $result = $apiInstance->restOrdersItemsOrderItemIdPropertiesTypeIdPost($order_item_id, $type_id, $_rest_orders_items_order_item_id_properties_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsOrderItemIdPropertiesTypeIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_item_id** | **int**| The order item ID. | |
| **type_id** | **int**| The order item property type ID. | |
| **_rest_orders_items_order_item_id_properties_type_id** | [**\ck/plenty-client\Model\RestOrdersItemsPropertiesPostRequest**](../Model/RestOrdersItemsPropertiesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderItemProperty**](../Model/OrderItemProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsOrderItemIdPropertiesTypeIdPut()`

```php
restOrdersItemsOrderItemIdPropertiesTypeIdPut($order_item_id, $type_id, $_rest_orders_items_order_item_id_properties_type_id): \ck/plenty-client\Model\OrderItemProperty
```

Update order item property

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Updates an order item property. The order item ID and the order item property type ID must be specified. The following property types are available by default:  <br><ul> <li>1 = WAREHOUSE</li> <li>2 = SHIPPING_PROFILE</li> <li>3 = PAYMENT_METHOD</li> <li>11 = WEIGHT</li> <li>12 = WIDTH</li> <li>13 = LENGTH</li> <li>14 = HEIGHT</li> <li>16 = EXTERNAL_TOKEN_ID</li> <li>17 = EXTERNAL_ITEM_ID</li> <li>18 = COUPON_CODE</li> <li>19 = COUPON_TYPE</li> <li>20 = ORIGINAL_WAREHOUSE</li> <li>21 = ORIGINAL_QUANTITY</li> <li>22 = CATEGORY_ID</li> <li>23 = MARKET_FEE</li> <li>24 = STOCK_REVERSING</li> <li>25 = DISPUTE_STATUS</li> <li>26 = NO_CHANGE_BY_CONTACT</li> <li>29 = SIZE</li> <li>30 = LOCATION_RESERVED</li> <li>31 = EXTERNAL_SHIPMENT_ITEM_ID</li> <li>32 = PARTIAL_SHIPPING_COSTS</li> <li>33 = MAIN_DOCUMENT_NUMBER</li> <li>34 = SALES_TAX_ID_NUMBER</li> <li>35 = RETURNS_REASON</li> <li>36 = RETURNS_ITEM_STATUS</li> <li>37 = FULFILLMENT_CENTER_ID</li> <li>38 = FULFILLMENT_CENTER_COUNTRY_ISO</li> <li>39 = REORDER_ITEM_ID</li> <li>40 = LISTING_TYPE</li> <li>46 = SOLD_COUPON_CODE</li> <li>48 = ORDER_ITEM_STATE</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item_id = 56; // int | The order item ID.
$type_id = 56; // int | The order item property type ID.
$_rest_orders_items_order_item_id_properties_type_id = new \ck/plenty-client\Model\RestOrdersItemsPropertiesIdPutRequest(); // \ck/plenty-client\Model\RestOrdersItemsPropertiesIdPutRequest

try {
    $result = $apiInstance->restOrdersItemsOrderItemIdPropertiesTypeIdPut($order_item_id, $type_id, $_rest_orders_items_order_item_id_properties_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsOrderItemIdPropertiesTypeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_item_id** | **int**| The order item ID. | |
| **type_id** | **int**| The order item property type ID. | |
| **_rest_orders_items_order_item_id_properties_type_id** | [**\ck/plenty-client\Model\RestOrdersItemsPropertiesIdPutRequest**](../Model/RestOrdersItemsPropertiesIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderItemProperty**](../Model/OrderItemProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsOrderItemIdTransactionsGet()`

```php
restOrdersItemsOrderItemIdTransactionsGet($order_item_id, $columns, $with): \ck/plenty-client\Model\OrderItemTransaction[]
```

List order item transactions

Lists transactions for an order item. Transactions are order item movements. These are incoming and outgoing items. The ID of the order item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item_id = 56; // int | The ID of the order item
$columns = 56; // int | The properties to be loaded
$with = 56; // int | Load additional relations for a transaction. Currently possible are 'orderItem' and 'warehouseLocation'.

try {
    $result = $apiInstance->restOrdersItemsOrderItemIdTransactionsGet($order_item_id, $columns, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsOrderItemIdTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_item_id** | **int**| The ID of the order item | |
| **columns** | **int**| The properties to be loaded | [optional] |
| **with** | **int**| Load additional relations for a transaction. Currently possible are &#39;orderItem&#39; and &#39;warehouseLocation&#39;. | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderItemTransaction[]**](../Model/OrderItemTransaction.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsOrderItemIdTransactionsPost()`

```php
restOrdersItemsOrderItemIdTransactionsPost($order_item_id, $_rest_orders_items_order_item_id_transactions): \ck/plenty-client\Model\OrderItemTransaction
```

Create order item transaction

Creates an order item transaction. Transactions are order item movements. These are incoming and outgoing items. The ID of the order item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_item_id = 56; // int
$_rest_orders_items_order_item_id_transactions = new \ck/plenty-client\Model\RestOrdersItemsOrderItemIdTransactionsPostRequest(); // \ck/plenty-client\Model\RestOrdersItemsOrderItemIdTransactionsPostRequest

try {
    $result = $apiInstance->restOrdersItemsOrderItemIdTransactionsPost($order_item_id, $_rest_orders_items_order_item_id_transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsOrderItemIdTransactionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_item_id** | **int**|  | |
| **_rest_orders_items_order_item_id_transactions** | [**\ck/plenty-client\Model\RestOrdersItemsOrderItemIdTransactionsPostRequest**](../Model/RestOrdersItemsOrderItemIdTransactionsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderItemTransaction**](../Model/OrderItemTransaction.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsOutgoingStocksDelete()`

```php
restOrdersItemsOutgoingStocksDelete($_rest_orders_items_outgoing_stocks)
```

Revert outgoing stock for order items

Reverts the booking of the given order items of an order. The order items have to be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_orders_items_outgoing_stocks = new \ck/plenty-client\Model\RestOrdersItemsOutgoingStocksDeleteRequest(); // \ck/plenty-client\Model\RestOrdersItemsOutgoingStocksDeleteRequest

try {
    $apiInstance->restOrdersItemsOutgoingStocksDelete($_rest_orders_items_outgoing_stocks);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsOutgoingStocksDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_orders_items_outgoing_stocks** | [**\ck/plenty-client\Model\RestOrdersItemsOutgoingStocksDeleteRequest**](../Model/RestOrdersItemsOutgoingStocksDeleteRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsPropertiesIdDelete()`

```php
restOrdersItemsPropertiesIdDelete($id)
```

Delete order item property

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Deletes an order item property. The ID of the order item property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the order item property.

try {
    $apiInstance->restOrdersItemsPropertiesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsPropertiesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the order item property. | |

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

## `restOrdersItemsPropertiesIdGet()`

```php
restOrdersItemsPropertiesIdGet($id): \ck/plenty-client\Model\OrderItemProperty
```

Get order item property

Gets an order item property. The ID of the order item property must be specified. <b>DEPRECATED: Use the following route: GET /rest/orders/{orderId}</b>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the order item property.

try {
    $result = $apiInstance->restOrdersItemsPropertiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsPropertiesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the order item property. | |

### Return type

[**\ck/plenty-client\Model\OrderItemProperty**](../Model/OrderItemProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsPropertiesIdPut()`

```php
restOrdersItemsPropertiesIdPut($id, $_rest_orders_items_properties_id): \ck/plenty-client\Model\OrderItemProperty
```

Update order item property

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Updates an order item property. The ID of the order item property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the order item property instance to be updated.
$_rest_orders_items_properties_id = new \ck/plenty-client\Model\RestOrdersItemsPropertiesIdPutRequest(); // \ck/plenty-client\Model\RestOrdersItemsPropertiesIdPutRequest

try {
    $result = $apiInstance->restOrdersItemsPropertiesIdPut($id, $_rest_orders_items_properties_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsPropertiesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the order item property instance to be updated. | |
| **_rest_orders_items_properties_id** | [**\ck/plenty-client\Model\RestOrdersItemsPropertiesIdPutRequest**](../Model/RestOrdersItemsPropertiesIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderItemProperty**](../Model/OrderItemProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsPropertiesPost()`

```php
restOrdersItemsPropertiesPost($_rest_orders_items_properties): \ck/plenty-client\Model\OrderItemProperty
```

Create order item property

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Creates an order item property. The request data must contain the order item ID, the order item property type ID and the value depending on the property type. The following property types are available by default:  <br><ul> <li>1 = WAREHOUSE</li> <li>2 = SHIPPING_PROFILE</li> <li>3 = PAYMENT_METHOD</li> <li>11 = WEIGHT</li> <li>12 = WIDTH</li> <li>13 = LENGTH</li> <li>14 = HEIGHT</li> <li>16 = EXTERNAL_TOKEN_ID</li> <li>17 = EXTERNAL_ITEM_ID</li> <li>18 = COUPON_CODE</li> <li>19 = COUPON_TYPE</li> <li>20 = ORIGINAL_WAREHOUSE</li> <li>21 = ORIGINAL_QUANTITY</li> <li>22 = CATEGORY_ID</li> <li>23 = MARKET_FEE</li> <li>24 = STOCK_REVERSING</li> <li>25 = DISPUTE_STATUS</li> <li>26 = NO_CHANGE_BY_CONTACT</li> <li>29 = SIZE</li> <li>30 = LOCATION_RESERVED</li> <li>31 = EXTERNAL_SHIPMENT_ITEM_ID</li> <li>32 = PARTIAL_SHIPPING_COSTS</li> <li>33 = MAIN_DOCUMENT_NUMBER</li> <li>34 = SALES_TAX_ID_NUMBER</li> <li>35 = RETURNS_REASON</li> <li>36 = RETURNS_ITEM_STATUS</li> <li>37 = FULFILLMENT_CENTER_ID</li> <li>38 = FULFILLMENT_CENTER_COUNTRY_ISO</li> <li>39 = REORDER_ITEM_ID</li> <li>40 = LISTING_TYPE</li> <li>46 = SOLD_COUPON_CODE</li> <li>48 = ORDER_ITEM_STATE</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_orders_items_properties = new \ck/plenty-client\Model\RestOrdersItemsPropertiesPostRequest(); // \ck/plenty-client\Model\RestOrdersItemsPropertiesPostRequest

try {
    $result = $apiInstance->restOrdersItemsPropertiesPost($_rest_orders_items_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsPropertiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_orders_items_properties** | [**\ck/plenty-client\Model\RestOrdersItemsPropertiesPostRequest**](../Model/RestOrdersItemsPropertiesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderItemProperty**](../Model/OrderItemProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsTransactionsBookingPost()`

```php
restOrdersItemsTransactionsBookingPost($transaction_ids, $delivery_note_number): object
```

Book order item transactions

Books order item transactions. Transactions are order item movements. These are incoming and outgoing items. The IDs of the order item transactions must be specified. To get the transactions first, use the <a href=\"#/Order/get_rest_orders_items_transactions\">Search transactions</a> call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_ids = 56; // int | The IDs of the order item transactions.
$delivery_note_number = 'delivery_note_number_example'; // string | If desired, set a delivery note number. The delivery note number has to match the type of order item transaction. For incoming items, set an external delivery note number. For outgoing items, set an external or an internal delivery note number.

try {
    $result = $apiInstance->restOrdersItemsTransactionsBookingPost($transaction_ids, $delivery_note_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsTransactionsBookingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_ids** | **int**| The IDs of the order item transactions. | |
| **delivery_note_number** | **string**| If desired, set a delivery note number. The delivery note number has to match the type of order item transaction. For incoming items, set an external delivery note number. For outgoing items, set an external or an internal delivery note number. | [optional] |

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

## `restOrdersItemsTransactionsGet()`

```php
restOrdersItemsTransactionsGet($page, $items_per_page, $columns, $with, $sort_by, $sort_order, $order_item_id, $order_id, $direction, $status, $is_booked): \ck/plenty-client\Model\RestOrdersItemsTransactionsGet200Response
```

Search order item transactions

Searches for order item transactions by filter parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page to get. The default page that will be returned is page 1.
$items_per_page = 56; // int | The number of orders to be displayed per page. The default number of orders per page is 50.
$columns = 56; // int | Specifies the properties of the order item transactions to be loaded.
$with = 56; // int | Loads additional relations of the order item transactions. The available relations are 'orderItem' and 'warehouseLocation'.
$sort_by = 'sort_by_example'; // string | Sort search result according to createdAt, updatedAt, orderItemId, receiptId or quantity. The default value is orderItemId.
$sort_order = 'sort_order_example'; // string | Sort direction desc or asc. The default value is asc.
$order_item_id = 56; // int | The ID of the order item
$order_id = 56; // int | The ID of the order
$direction = 'direction_example'; // string | The direction of the order item transactions
$status = 'status_example'; // string | The status of the order item transactions ('in' for incoming or 'out' for outgoing)
$is_booked = True; // bool | Returns all booked order item transactions.

try {
    $result = $apiInstance->restOrdersItemsTransactionsGet($page, $items_per_page, $columns, $with, $sort_by, $sort_order, $order_item_id, $order_id, $direction, $status, $is_booked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page to get. The default page that will be returned is page 1. | [optional] |
| **items_per_page** | **int**| The number of orders to be displayed per page. The default number of orders per page is 50. | [optional] |
| **columns** | **int**| Specifies the properties of the order item transactions to be loaded. | [optional] |
| **with** | **int**| Loads additional relations of the order item transactions. The available relations are &#39;orderItem&#39; and &#39;warehouseLocation&#39;. | [optional] |
| **sort_by** | **string**| Sort search result according to createdAt, updatedAt, orderItemId, receiptId or quantity. The default value is orderItemId. | [optional] |
| **sort_order** | **string**| Sort direction desc or asc. The default value is asc. | [optional] |
| **order_item_id** | **int**| The ID of the order item | [optional] |
| **order_id** | **int**| The ID of the order | [optional] |
| **direction** | **string**| The direction of the order item transactions | [optional] |
| **status** | **string**| The status of the order item transactions (&#39;in&#39; for incoming or &#39;out&#39; for outgoing) | [optional] |
| **is_booked** | **bool**| Returns all booked order item transactions. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestOrdersItemsTransactionsGet200Response**](../Model/RestOrdersItemsTransactionsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersItemsTransactionsTransactionIdDelete()`

```php
restOrdersItemsTransactionsTransactionIdDelete($transaction_id): object
```

Delete order item transaction

Deletes an order item transaction. Transactions are order item movements. These are incoming and outgoing items. The ID of the transaction must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 56; // int

try {
    $result = $apiInstance->restOrdersItemsTransactionsTransactionIdDelete($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsTransactionsTransactionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **int**|  | |

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

## `restOrdersItemsTransactionsTransactionIdPut()`

```php
restOrdersItemsTransactionsTransactionIdPut($transaction_id, $_rest_orders_items_transactions_transaction_id): \ck/plenty-client\Model\OrderItemTransaction
```

Update order item transaction

Updates an order item transaction. Transactions are order item movements. These are incoming and outgoing items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 56; // int
$_rest_orders_items_transactions_transaction_id = new \ck/plenty-client\Model\RestOrdersItemsTransactionsTransactionIdPutRequest(); // \ck/plenty-client\Model\RestOrdersItemsTransactionsTransactionIdPutRequest

try {
    $result = $apiInstance->restOrdersItemsTransactionsTransactionIdPut($transaction_id, $_rest_orders_items_transactions_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersItemsTransactionsTransactionIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **int**|  | |
| **_rest_orders_items_transactions_transaction_id** | [**\ck/plenty-client\Model\RestOrdersItemsTransactionsTransactionIdPutRequest**](../Model/RestOrdersItemsTransactionsTransactionIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderItemTransaction**](../Model/OrderItemTransaction.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdBookingPost()`

```php
restOrdersOrderIdBookingPost($order_id, $delivery_note_number): object
```

Book an order in

Books an order in, e.g. an order of the type reorder. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order.
$delivery_note_number = 'delivery_note_number_example'; // string | If desired, set the delivery note number provided by the supplier.

try {
    $result = $apiInstance->restOrdersOrderIdBookingPost($order_id, $delivery_note_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdBookingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order. | |
| **delivery_note_number** | **string**| If desired, set the delivery note number provided by the supplier. | [optional] |

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

## `restOrdersOrderIdCancelPut()`

```php
restOrdersOrderIdCancelPut($order_id, $_rest_orders_order_id_cancel)
```

Cancel an order

Cancels an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order to be canceled.
$_rest_orders_order_id_cancel = new \ck/plenty-client\Model\RestOrdersOrderIdCancelPutRequest(); // \ck/plenty-client\Model\RestOrdersOrderIdCancelPutRequest

try {
    $apiInstance->restOrdersOrderIdCancelPut($order_id, $_rest_orders_order_id_cancel);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdCancelPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order to be canceled. | |
| **_rest_orders_order_id_cancel** | [**\ck/plenty-client\Model\RestOrdersOrderIdCancelPutRequest**](../Model/RestOrdersOrderIdCancelPutRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdContactWishGet()`

```php
restOrdersOrderIdContactWishGet($order_id): \ck/plenty-client\Model\ContactWish
```

Get a contact wish

Gets the contact wish for an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdContactWishGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdContactWishGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

### Return type

[**\ck/plenty-client\Model\ContactWish**](../Model/ContactWish.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdCouponsCouponPost()`

```php
restOrdersOrderIdCouponsCouponPost($order_id, $coupon): \ck/plenty-client\Model\CouponCodeValidation
```

Redeem a coupon code

Redeems a coupon code and applies it to an order. The ID of the order must be specified. If the coupon was successfully redeemed, the coupon data will be returned. If the coupon can not be redeemed, a validation exception will be thrown.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order to redeem the coupon
$coupon = 'coupon_example'; // string | The coupon code to be redeemed

try {
    $result = $apiInstance->restOrdersOrderIdCouponsCouponPost($order_id, $coupon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdCouponsCouponPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order to redeem the coupon | |
| **coupon** | **string**| The coupon code to be redeemed | |

### Return type

[**\ck/plenty-client\Model\CouponCodeValidation**](../Model/CouponCodeValidation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdDatesGet()`

```php
restOrdersOrderIdDatesGet($order_id): \ck/plenty-client\Model\OrderDate[]
```

List all dates of an order

Lists all dates of an order. The ID of the order must be specified. <b>DEPRECATED: Use the following route: GET /rest/orders/{orderId}</b>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdDatesGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdDatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

### Return type

[**\ck/plenty-client\Model\OrderDate[]**](../Model/OrderDate.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdDatesTypeIdGet()`

```php
restOrdersOrderIdDatesTypeIdGet($type_id, $order_id): \ck/plenty-client\Model\OrderDate
```

Get a date

<b>DEPRECATED: Use the following route: GET /rest/orders/{orderId}</b> Gets a date. The ID of the order and the ID of the date type must be specified. The following IDs are available:  <br><ul> <li>1 = Deleted on</li> <li>2 = Created on</li> <li>3 = Paid date</li> <li>4 = Last update</li> <li>5 = Completed on</li> <li>6 = Return date</li> <li>7 = Payment due date</li> <li>8 = Estimated shipping date</li> <li>9 = Start date</li> <li>10 = End date</li> <li>11 = Possible delivery date</li> <li>12 = Market transfer date</li> <li>13 = Subscription cancelled on</li> <li>14 = Subscription last run</li> <li>15 = Subscription next run</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int | The ID of the order date type that should be found
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdDatesTypeIdGet($type_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdDatesTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type_id** | **int**| The ID of the order date type that should be found | |
| **order_id** | **int**| The ID of the order | |

### Return type

[**\ck/plenty-client\Model\OrderDate**](../Model/OrderDate.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdDelete()`

```php
restOrdersOrderIdDelete($order_id)
```

Delete an order

Deletes an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order to be deleted.

try {
    $apiInstance->restOrdersOrderIdDelete($order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order to be deleted. | |

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

## `restOrdersOrderIdDeliveryOrdersAutomaticPost()`

```php
restOrdersOrderIdDeliveryOrdersAutomaticPost($order_id): object
```

Create delivery orders automatically for all order items

Create delivery orders automatically for all order items. The order ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order.

try {
    $result = $apiInstance->restOrdersOrderIdDeliveryOrdersAutomaticPost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdDeliveryOrdersAutomaticPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order. | |

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

## `restOrdersOrderIdDeliveryOrdersPost()`

```php
restOrdersOrderIdDeliveryOrdersPost($order_id): \ck/plenty-client\Model\Order
```

Create a delivery order from a parent order

Creates a delivery order from a parent order. The parent order ID and the quantities to use must be specified. Structure of the data array: [     'quantities' => [          [              [\"orderItemId\" => <orderItemId1>],              [\"quantity\" => <quantity1>]          ],     ] ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order.

try {
    $result = $apiInstance->restOrdersOrderIdDeliveryOrdersPost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdDeliveryOrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order. | |

### Return type

[**\ck/plenty-client\Model\Order**](../Model/Order.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdGet()`

```php
restOrdersOrderIdGet($order_id, $with, $add_order_items): \ck/plenty-client\Model\Order
```

Get an order

Gets an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order.
$with = 56; // int | Load additional relations for an order. The following relations are available:      * <ul>        <li>'addresses' = The address objects linked to the order.</li>        <li>'relations' = The order relation reference instances that are associated with the order. These instances contain information such as the reference type. The available reference types are parent and reorder. The ID of the reference and the relation itself are also available.</li>        <li>'comments' = The order comments.</li>        <li>'location' = The accounting location linked to the order.</li>        <li>'payments' = The payments linked to the order.</li>        <li>'documents' = The documents linked to the order.</li>        <li>'contactSender' = The contact belonging the contact-sender relation.</li>        <li>'contactReceiver' = The contact belonging to the contact-receiver relation.</li>        <li>'warehouseSender' = The warehouse belonging to the warehouse-sender relation.</li>        <li>'warehouseReceiver' = The warehouse belonging to the warehouse-receiver relation.</li>        <li>'orderItems.variation' = The variation data belonging to the order item.</li>        <li>'orderItems.giftCardCodes' = The gift card codes belonging to the order item.</li>        <li>'orderItems.transactions' = The transactions belonging to the order item.</li>        <li>'orderItems.serialNumbers' = The serial numbers belonging to the order item.</li>        <li>'orderItems.variationBarcodes' = The barcodes belonging to the order item.</li>        <li>'orderItems.comments' = The comments belonging to the order item.</li>        <li>'shippingPackages' = The shipping packages that are associated with the order.</li>        <li><b>deprecated</b> 'orderItems.warehouseLocations' = The warehouse locations linked to the order item.</li>      </ul>      Example: <code>?with[]=addresses&with[]=orderItems.variation</code>
$add_order_items = True; // bool | Add the order items to the result. Default = true.

try {
    $result = $apiInstance->restOrdersOrderIdGet($order_id, $with, $add_order_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order. | |
| **with** | **int**| Load additional relations for an order. The following relations are available:      * &lt;ul&gt;        &lt;li&gt;&#39;addresses&#39; &#x3D; The address objects linked to the order.&lt;/li&gt;        &lt;li&gt;&#39;relations&#39; &#x3D; The order relation reference instances that are associated with the order. These instances contain information such as the reference type. The available reference types are parent and reorder. The ID of the reference and the relation itself are also available.&lt;/li&gt;        &lt;li&gt;&#39;comments&#39; &#x3D; The order comments.&lt;/li&gt;        &lt;li&gt;&#39;location&#39; &#x3D; The accounting location linked to the order.&lt;/li&gt;        &lt;li&gt;&#39;payments&#39; &#x3D; The payments linked to the order.&lt;/li&gt;        &lt;li&gt;&#39;documents&#39; &#x3D; The documents linked to the order.&lt;/li&gt;        &lt;li&gt;&#39;contactSender&#39; &#x3D; The contact belonging the contact-sender relation.&lt;/li&gt;        &lt;li&gt;&#39;contactReceiver&#39; &#x3D; The contact belonging to the contact-receiver relation.&lt;/li&gt;        &lt;li&gt;&#39;warehouseSender&#39; &#x3D; The warehouse belonging to the warehouse-sender relation.&lt;/li&gt;        &lt;li&gt;&#39;warehouseReceiver&#39; &#x3D; The warehouse belonging to the warehouse-receiver relation.&lt;/li&gt;        &lt;li&gt;&#39;orderItems.variation&#39; &#x3D; The variation data belonging to the order item.&lt;/li&gt;        &lt;li&gt;&#39;orderItems.giftCardCodes&#39; &#x3D; The gift card codes belonging to the order item.&lt;/li&gt;        &lt;li&gt;&#39;orderItems.transactions&#39; &#x3D; The transactions belonging to the order item.&lt;/li&gt;        &lt;li&gt;&#39;orderItems.serialNumbers&#39; &#x3D; The serial numbers belonging to the order item.&lt;/li&gt;        &lt;li&gt;&#39;orderItems.variationBarcodes&#39; &#x3D; The barcodes belonging to the order item.&lt;/li&gt;        &lt;li&gt;&#39;orderItems.comments&#39; &#x3D; The comments belonging to the order item.&lt;/li&gt;        &lt;li&gt;&#39;shippingPackages&#39; &#x3D; The shipping packages that are associated with the order.&lt;/li&gt;        &lt;li&gt;&lt;b&gt;deprecated&lt;/b&gt; &#39;orderItems.warehouseLocations&#39; &#x3D; The warehouse locations linked to the order item.&lt;/li&gt;      &lt;/ul&gt;      Example: &lt;code&gt;?with[]&#x3D;addresses&amp;with[]&#x3D;orderItems.variation&lt;/code&gt; | [optional] |
| **add_order_items** | **bool**| Add the order items to the result. Default &#x3D; true. | [optional] |

### Return type

[**\ck/plenty-client\Model\Order**](../Model/Order.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdItemsGet()`

```php
restOrdersOrderIdItemsGet($order_id, $page, $items_per_page, $sort_by, $sort_order, $with): \ck/plenty-client\Model\RestOrdersOrderIdItemsGet200Response
```

Search order items

Searches order items. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int
$page = 56; // int | The page to get. The default page that will be returned is page 1.
$items_per_page = 56; // int | The number of order items to be displayed per page. The default number of order items per page is 50. The maximum number is 250.
$sort_by = 'sort_by_example'; // string | Sort search result according to itemVariationId, orderItemName, createdAt, updatedAt or id. The default value is orderItemId.
$sort_order = 'sort_order_example'; // string | Sort direction desc or asc. The default value is asc.
$with = 56; // int | Load additional relations for an order item. Currently possible are:     <ul>     <li>'variation' = The variation that is associated with the order item.</li>     <li>'giftCardCodes' = The gift card codes that are associated with the order item.</li>     <li>'transactions' = The transactions that are associated with the order item.</li>     <li>'serialNumbers' = The serial numbers that are associated with the order item.</li>     <li>'variationBarcodes' = The barcodes that are associated with variation of the order item.</li>     </ul>

try {
    $result = $apiInstance->restOrdersOrderIdItemsGet($order_id, $page, $items_per_page, $sort_by, $sort_order, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**|  | |
| **page** | **int**| The page to get. The default page that will be returned is page 1. | [optional] |
| **items_per_page** | **int**| The number of order items to be displayed per page. The default number of order items per page is 50. The maximum number is 250. | [optional] |
| **sort_by** | **string**| Sort search result according to itemVariationId, orderItemName, createdAt, updatedAt or id. The default value is orderItemId. | [optional] |
| **sort_order** | **string**| Sort direction desc or asc. The default value is asc. | [optional] |
| **with** | **int**| Load additional relations for an order item. Currently possible are:     &lt;ul&gt;     &lt;li&gt;&#39;variation&#39; &#x3D; The variation that is associated with the order item.&lt;/li&gt;     &lt;li&gt;&#39;giftCardCodes&#39; &#x3D; The gift card codes that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#39;transactions&#39; &#x3D; The transactions that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#39;serialNumbers&#39; &#x3D; The serial numbers that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#39;variationBarcodes&#39; &#x3D; The barcodes that are associated with variation of the order item.&lt;/li&gt;     &lt;/ul&gt; | [optional] |

### Return type

[**\ck/plenty-client\Model\RestOrdersOrderIdItemsGet200Response**](../Model/RestOrdersOrderIdItemsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdItemsOrderItemIdDelete()`

```php
restOrdersOrderIdItemsOrderItemIdDelete($order_id, $order_item_id)
```

Delete an order item

Deletes an order item. The ID of the order and the ID of the order item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order that the item belongs to.
$order_item_id = 56; // int | The ID of the order item to be deleted.

try {
    $apiInstance->restOrdersOrderIdItemsOrderItemIdDelete($order_id, $order_item_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdItemsOrderItemIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order that the item belongs to. | |
| **order_item_id** | **int**| The ID of the order item to be deleted. | |

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

## `restOrdersOrderIdItemsOrderItemIdSerialNumbersGet()`

```php
restOrdersOrderIdItemsOrderItemIdSerialNumbersGet($order_id, $order_item_id): \ck/plenty-client\Model\OrderSerialNumber[]
```

List serial numbers of an order item

Lists all serial numbers of an order item. The ID of the order and the ID of the order item must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$order_item_id = 56; // int | The ID of the order item

try {
    $result = $apiInstance->restOrdersOrderIdItemsOrderItemIdSerialNumbersGet($order_id, $order_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdItemsOrderItemIdSerialNumbersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **order_item_id** | **int**| The ID of the order item | |

### Return type

[**\ck/plenty-client\Model\OrderSerialNumber[]**](../Model/OrderSerialNumber.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdItemsSerialNumbersGet()`

```php
restOrdersOrderIdItemsSerialNumbersGet($order_id): \ck/plenty-client\Model\OrderSerialNumber[]
```

List serial numbers of an order

Lists all serial numbers of an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdItemsSerialNumbersGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdItemsSerialNumbersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

### Return type

[**\ck/plenty-client\Model\OrderSerialNumber[]**](../Model/OrderSerialNumber.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdOutgoingStocksDelete()`

```php
restOrdersOrderIdOutgoingStocksDelete($order_id)
```

Revert outgoing stock

Reverts the booking of order items of an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $apiInstance->restOrdersOrderIdOutgoingStocksDelete($order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdOutgoingStocksDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

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

## `restOrdersOrderIdOutgoingStocksPost()`

```php
restOrdersOrderIdOutgoingStocksPost($order_id, $date)
```

Book out order items

Books out the order items of an order. The ID of the order must be specified and a booking date can be specified. The current date and time will be used if no date is specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$date = 'date_example'; // string | The date that is saved as booking date for the outgoing stock.

try {
    $apiInstance->restOrdersOrderIdOutgoingStocksPost($order_id, $date);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdOutgoingStocksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **date** | **string**| The date that is saved as booking date for the outgoing stock. | [optional] |

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

## `restOrdersOrderIdPackagenumbersGet()`

```php
restOrdersOrderIdPackagenumbersGet($order_id): object[]
```

List package numbers of an order

Lists the package numbers of an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdPackagenumbersGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdPackagenumbersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

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

## `restOrdersOrderIdPropertiesPost()`

```php
restOrdersOrderIdPropertiesPost($order_id, $_rest_orders_order_id_properties): \ck/plenty-client\Model\OrderProperty
```

Create property for an order

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Creates a property and links it to an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int
$_rest_orders_order_id_properties = new \ck/plenty-client\Model\RestOrdersOrderIdPropertiesPostRequest(); // \ck/plenty-client\Model\RestOrdersOrderIdPropertiesPostRequest

try {
    $result = $apiInstance->restOrdersOrderIdPropertiesPost($order_id, $_rest_orders_order_id_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdPropertiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**|  | |
| **_rest_orders_order_id_properties** | [**\ck/plenty-client\Model\RestOrdersOrderIdPropertiesPostRequest**](../Model/RestOrdersOrderIdPropertiesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderProperty**](../Model/OrderProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdPropertiesTypeIdDelete()`

```php
restOrdersOrderIdPropertiesTypeIdDelete($order_id, $type_id, $_rest_orders_order_id_properties_type_id): object
```

Delete property of an order by order ID and property type ID

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Deletes a property of an order. The ID of the order and the ID of the order property type must be specified. The following property types are available by default:  <br><ul> <li>1 = WAREHOUSE</li> <li>2 = SHIPPING_PROFILE</li> <li>3 = PAYMENT_METHOD</li> <li>4 = PAYMENT_STATUS</li> <li>5 = EXTERNAL_SHIPPING_PROFILE</li> <li>6 = DOCUMENT_LANGUAGE</li> <li>7 = EXTERNAL_ORDER_ID</li> <li>8 = CUSTOMER_SIGN</li> <li>9 = DUNNING_LEVEL</li> <li>10 = SELLER_ACCOUNT</li> <li>11 = WEIGHT</li> <li>12 = WIDTH</li> <li>13 = LENGTH</li> <li>14 = HEIGHT</li> <li>15 = FLAG</li> <li>16 = EXTERNAL_TOKEN_ID</li> <li>17 = EXTERNAL_ITEM_ID</li> <li>18 = COUPON_CODE</li> <li>19 = COUPON_TYPE</li> <li>33 = MAIN_DOCUMENT_NUMBER</li> <li>34 = SALES_TAX_ID_NUMBER</li> <li>45 = PAYMENT_TRANSACTION_ID</li> <li>47 = EXTERNAL_TAX_SERVICE</li> <li>60 = MERCHANT_ID</li> <li>61 = REPORT_ID</li> <li>63 = PREFERRED_STORAGE_LOCATION_ID</li> <li>64 = AMAZON_SHIPPING_LABEL</li> <li>994 = EBAY_PLUS</li> <li>995 = FULFILLMENT_SERVICE</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int
$type_id = 56; // int
$_rest_orders_order_id_properties_type_id = new \ck/plenty-client\Model\RestOrdersOrderIdPropertiesTypeIdDeleteRequest(); // \ck/plenty-client\Model\RestOrdersOrderIdPropertiesTypeIdDeleteRequest

try {
    $result = $apiInstance->restOrdersOrderIdPropertiesTypeIdDelete($order_id, $type_id, $_rest_orders_order_id_properties_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdPropertiesTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**|  | |
| **type_id** | **int**|  | |
| **_rest_orders_order_id_properties_type_id** | [**\ck/plenty-client\Model\RestOrdersOrderIdPropertiesTypeIdDeleteRequest**](../Model/RestOrdersOrderIdPropertiesTypeIdDeleteRequest.md)|  | [optional] |

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

## `restOrdersOrderIdPropertiesTypeIdPut()`

```php
restOrdersOrderIdPropertiesTypeIdPut($order_id, $type_id, $_rest_orders_order_id_properties_type_id): \ck/plenty-client\Model\OrderProperty
```

Update property of an order by order ID and property ID

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Updates the value of a property already linked to an order. The ID of the order and the ID of the order property type must be specified. The following property types are available by default:  <br><ul> <li>1 = WAREHOUSE</li> <li>2 = SHIPPING_PROFILE</li> <li>3 = PAYMENT_METHOD</li> <li>4 = PAYMENT_STATUS</li> <li>5 = EXTERNAL_SHIPPING_PROFILE</li> <li>6 = DOCUMENT_LANGUAGE</li> <li>7 = EXTERNAL_ORDER_ID</li> <li>8 = CUSTOMER_SIGN</li> <li>9 = DUNNING_LEVEL</li> <li>10 = SELLER_ACCOUNT</li> <li>11 = WEIGHT</li> <li>12 = WIDTH</li> <li>13 = LENGTH</li> <li>14 = HEIGHT</li> <li>15 = FLAG</li> <li>16 = EXTERNAL_TOKEN_ID</li> <li>17 = EXTERNAL_ITEM_ID</li> <li>18 = COUPON_CODE</li> <li>19 = COUPON_TYPE</li> <li>33 = MAIN_DOCUMENT_NUMBER</li> <li>34 = SALES_TAX_ID_NUMBER</li> <li>45 = PAYMENT_TRANSACTION_ID</li> <li>47 = EXTERNAL_TAX_SERVICE</li> <li>60 = MERCHANT_ID</li> <li>61 = REPORT_ID</li> <li>63 = PREFERRED_STORAGE_LOCATION_ID</li> <li>64 = AMAZON_SHIPPING_LABEL</li> <li>994 = EBAY_PLUS</li> <li>995 = FULFILLMENT_SERVICE</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int
$type_id = 56; // int
$_rest_orders_order_id_properties_type_id = new \ck/plenty-client\Model\RestOrdersOrderIdPropertiesPostRequest(); // \ck/plenty-client\Model\RestOrdersOrderIdPropertiesPostRequest

try {
    $result = $apiInstance->restOrdersOrderIdPropertiesTypeIdPut($order_id, $type_id, $_rest_orders_order_id_properties_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdPropertiesTypeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**|  | |
| **type_id** | **int**|  | |
| **_rest_orders_order_id_properties_type_id** | [**\ck/plenty-client\Model\RestOrdersOrderIdPropertiesPostRequest**](../Model/RestOrdersOrderIdPropertiesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderProperty**](../Model/OrderProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdPut()`

```php
restOrdersOrderIdPut($order_id, $_rest_orders_order_id): \ck/plenty-client\Model\Order
```

Update an order

Updates an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$_rest_orders_order_id = new \ck/plenty-client\Model\RestOrdersOrderIdPutRequest(); // \ck/plenty-client\Model\RestOrdersOrderIdPutRequest

try {
    $result = $apiInstance->restOrdersOrderIdPut($order_id, $_rest_orders_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **_rest_orders_order_id** | [**\ck/plenty-client\Model\RestOrdersOrderIdPutRequest**](../Model/RestOrdersOrderIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Order**](../Model/Order.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdShippingCancelShipmentDelete()`

```php
restOrdersOrderIdShippingCancelShipmentDelete($order_id): object
```

Cancel a shipment

Cancel a shipment for an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdShippingCancelShipmentDelete($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingCancelShipmentDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

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

## `restOrdersOrderIdShippingPackagesDelete()`

```php
restOrdersOrderIdShippingPackagesDelete($order_id)
```

Delete all order shipping packages for an order

Deletes all order shipping packages for an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $apiInstance->restOrdersOrderIdShippingPackagesDelete($order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingPackagesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

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

## `restOrdersOrderIdShippingPackagesGet()`

```php
restOrdersOrderIdShippingPackagesGet($order_id, $columns, $with): \ck/plenty-client\Model\OrderShippingPackage[]
```

List order shipping packages

Lists order shipping packages. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$columns = 56; // int | The properties to be loaded
$with = 'with_example'; // string | Possible value is 'labelBase64'

try {
    $result = $apiInstance->restOrdersOrderIdShippingPackagesGet($order_id, $columns, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingPackagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **columns** | **int**| The properties to be loaded | [optional] |
| **with** | **string**| Possible value is &#39;labelBase64&#39; | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderShippingPackage[]**](../Model/OrderShippingPackage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdShippingPackagesItemsGet()`

```php
restOrdersOrderIdShippingPackagesItemsGet($order_id): \ck/plenty-client\Model\OrderShippingPackageItems
```

List items contained in packages of an order

Lists items contained in packages of a specific order. The ID of the order is mandatory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdShippingPackagesItemsGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingPackagesItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

### Return type

[**\ck/plenty-client\Model\OrderShippingPackageItems**](../Model/OrderShippingPackageItems.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdShippingPackagesOrderShippingPackageIdDelete()`

```php
restOrdersOrderIdShippingPackagesOrderShippingPackageIdDelete($order_id, $order_shipping_package_id)
```

Delete an order shipping package

Deletes an order shipping package. The ID of the order and the ID of the order shipping package must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$order_shipping_package_id = 56; // int | The ID of the order shipping package

try {
    $apiInstance->restOrdersOrderIdShippingPackagesOrderShippingPackageIdDelete($order_id, $order_shipping_package_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingPackagesOrderShippingPackageIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **order_shipping_package_id** | **int**| The ID of the order shipping package | |

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

## `restOrdersOrderIdShippingPackagesOrderShippingPackageIdGet()`

```php
restOrdersOrderIdShippingPackagesOrderShippingPackageIdGet($order_id, $order_shipping_package_id, $columns): \ck/plenty-client\Model\OrderShippingPackage
```

Get an order shipping package

Gets an order shipping package. The ID of the order and the ID of the order shipping package must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$order_shipping_package_id = 56; // int | The ID of the order shipping package
$columns = 56; // int | The properties to be loaded

try {
    $result = $apiInstance->restOrdersOrderIdShippingPackagesOrderShippingPackageIdGet($order_id, $order_shipping_package_id, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingPackagesOrderShippingPackageIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **order_shipping_package_id** | **int**| The ID of the order shipping package | |
| **columns** | **int**| The properties to be loaded | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderShippingPackage**](../Model/OrderShippingPackage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdShippingPackagesOrderShippingPackageIdPut()`

```php
restOrdersOrderIdShippingPackagesOrderShippingPackageIdPut($order_id, $order_shipping_package_id, $_rest_orders_order_id_shipping_packages_order_shipping_package_id): \ck/plenty-client\Model\OrderShippingPackage
```

Update an order shipping package

Updates an order shipping package. The ID of the order and the ID of the order shipping package must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$order_shipping_package_id = 56; // int | The ID of the order shipping package
$_rest_orders_order_id_shipping_packages_order_shipping_package_id = new \ck/plenty-client\Model\RestOrdersOrderIdShippingPackagesOrderShippingPackageIdPutRequest(); // \ck/plenty-client\Model\RestOrdersOrderIdShippingPackagesOrderShippingPackageIdPutRequest

try {
    $result = $apiInstance->restOrdersOrderIdShippingPackagesOrderShippingPackageIdPut($order_id, $order_shipping_package_id, $_rest_orders_order_id_shipping_packages_order_shipping_package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingPackagesOrderShippingPackageIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **order_shipping_package_id** | **int**| The ID of the order shipping package | |
| **_rest_orders_order_id_shipping_packages_order_shipping_package_id** | [**\ck/plenty-client\Model\RestOrdersOrderIdShippingPackagesOrderShippingPackageIdPutRequest**](../Model/RestOrdersOrderIdShippingPackagesOrderShippingPackageIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderShippingPackage**](../Model/OrderShippingPackage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdShippingPackagesPackedItemsGet()`

```php
restOrdersOrderIdShippingPackagesPackedItemsGet($order_id): object[]
```

List packed items of a shipping package by the order ID

Lists packed items of a shipping package by a specific order ID. The ID of the order is mandatory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdShippingPackagesPackedItemsGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingPackagesPackedItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

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

## `restOrdersOrderIdShippingPackagesPost()`

```php
restOrdersOrderIdShippingPackagesPost($order_id, $_rest_orders_order_id_shipping_packages): \ck/plenty-client\Model\OrderShippingPackage
```

Create an order shipping package

Creates an order shipping package. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$_rest_orders_order_id_shipping_packages = new \ck/plenty-client\Model\RestOrdersOrderIdShippingPackagesPostRequest(); // \ck/plenty-client\Model\RestOrdersOrderIdShippingPackagesPostRequest

try {
    $result = $apiInstance->restOrdersOrderIdShippingPackagesPost($order_id, $_rest_orders_order_id_shipping_packages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingPackagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **_rest_orders_order_id_shipping_packages** | [**\ck/plenty-client\Model\RestOrdersOrderIdShippingPackagesPostRequest**](../Model/RestOrdersOrderIdShippingPackagesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderShippingPackage**](../Model/OrderShippingPackage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdShippingPackagesUnpackedItemsGet()`

```php
restOrdersOrderIdShippingPackagesUnpackedItemsGet($order_id): object[]
```

List unpacked items of a shipping package by the order ID

Lists unpacked items of a shipping package by a specific order ID. The ID of the order is mandatory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdShippingPackagesUnpackedItemsGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingPackagesUnpackedItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

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

## `restOrdersOrderIdShippingPalletsPackagesItemsGet()`

```php
restOrdersOrderIdShippingPalletsPackagesItemsGet($order_id): \ck/plenty-client\Model\OrderShippingPackageItems
```

List items contained in package pallets of an order

Lists items contained in package pallets of an order. The ID of the order is mandatory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdShippingPalletsPackagesItemsGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingPalletsPackagesItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

### Return type

[**\ck/plenty-client\Model\OrderShippingPackageItems**](../Model/OrderShippingPackageItems.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdShippingPalletsPalletIdPackagesDelete()`

```php
restOrdersOrderIdShippingPalletsPalletIdPackagesDelete($order_id, $pallet_id): object
```

Delete all order shipping packages in a pallet

Deletes all order shipping packages in a pallet. The ID of the order and the ID of the pallet must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$pallet_id = 56; // int | The ID of the pallet

try {
    $result = $apiInstance->restOrdersOrderIdShippingPalletsPalletIdPackagesDelete($order_id, $pallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingPalletsPalletIdPackagesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **pallet_id** | **int**| The ID of the pallet | |

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

## `restOrdersOrderIdShippingPalletsPalletIdPackagesGet()`

```php
restOrdersOrderIdShippingPalletsPalletIdPackagesGet($order_id, $pallet_id): \ck/plenty-client\Model\OrderShippingPackage[]
```

List all packages contained in pallets of an order

Lists all packages contained in pallets of an order. The ID of the order and of the pallet must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$pallet_id = 56; // int | The ID of the pallet

try {
    $result = $apiInstance->restOrdersOrderIdShippingPalletsPalletIdPackagesGet($order_id, $pallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingPalletsPalletIdPackagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **pallet_id** | **int**| The ID of the pallet | |

### Return type

[**\ck/plenty-client\Model\OrderShippingPackage[]**](../Model/OrderShippingPackage.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdShippingPalletsPalletIdPackagesPut()`

```php
restOrdersOrderIdShippingPalletsPalletIdPackagesPut($order_id, $pallet_id): object
```

Update all packages in a pallet

Updates all the packages in a pallet. The ID of the order and the ID of the pallet must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$pallet_id = 56; // int | The ID of the pallet

try {
    $result = $apiInstance->restOrdersOrderIdShippingPalletsPalletIdPackagesPut($order_id, $pallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingPalletsPalletIdPackagesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **pallet_id** | **int**| The ID of the pallet | |

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

## `restOrdersOrderIdShippingRegisterShipmentPost()`

```php
restOrdersOrderIdShippingRegisterShipmentPost($order_id): object
```

Register a shipment

Register a shipment for an order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdShippingRegisterShipmentPost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingRegisterShipmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

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

## `restOrdersOrderIdShippingShippingInformationAdditionalDataPut()`

```php
restOrdersOrderIdShippingShippingInformationAdditionalDataPut($order_id): \ck/plenty-client\Model\ShippingInformation
```

Update additional data of the shipping information

Updates additional data of the shipping information. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdShippingShippingInformationAdditionalDataPut($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingShippingInformationAdditionalDataPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

### Return type

[**\ck/plenty-client\Model\ShippingInformation**](../Model/ShippingInformation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdShippingShippingInformationDelete()`

```php
restOrdersOrderIdShippingShippingInformationDelete($order_id): \ck/plenty-client\Model\ShippingInformation
```

Delete shipping information

Deletes the shipping information. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdShippingShippingInformationDelete($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingShippingInformationDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

### Return type

[**\ck/plenty-client\Model\ShippingInformation**](../Model/ShippingInformation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdShippingShippingInformationGet()`

```php
restOrdersOrderIdShippingShippingInformationGet($order_id): \ck/plenty-client\Model\ShippingInformation
```

Get shipping information

Gets the shipping information. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdShippingShippingInformationGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingShippingInformationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

### Return type

[**\ck/plenty-client\Model\ShippingInformation**](../Model/ShippingInformation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdShippingShippingInformationStatusPut()`

```php
restOrdersOrderIdShippingShippingInformationStatusPut($order_id): \ck/plenty-client\Model\ShippingInformation
```

Update the shipping status of the shipping information

Updates the shipping status of the shipping information. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdShippingShippingInformationStatusPut($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdShippingShippingInformationStatusPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

### Return type

[**\ck/plenty-client\Model\ShippingInformation**](../Model/ShippingInformation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdStatusHistoryGet()`

```php
restOrdersOrderIdStatusHistoryGet($order_id): \ck/plenty-client\Model\StatusHistoryEntry[]
```

Get the status history of an order

Gets the status history of an order. The status history is a list that contains information of status changes of the order. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order

try {
    $result = $apiInstance->restOrdersOrderIdStatusHistoryGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdStatusHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |

### Return type

[**\ck/plenty-client\Model\StatusHistoryEntry[]**](../Model/StatusHistoryEntry.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersOrderIdTransactionsPost()`

```php
restOrdersOrderIdTransactionsPost($order_id, $_rest_orders_order_id_transactions): \ck/plenty-client\Model\OrderItemTransaction[]
```

Create order item transactions for an order

Creates transactions including the full quantity for every order item that does not have an existing transaction. The order ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$_rest_orders_order_id_transactions = new \ck/plenty-client\Model\RestOrdersOrderIdTransactionsPostRequest(); // \ck/plenty-client\Model\RestOrdersOrderIdTransactionsPostRequest

try {
    $result = $apiInstance->restOrdersOrderIdTransactionsPost($order_id, $_rest_orders_order_id_transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersOrderIdTransactionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | |
| **_rest_orders_order_id_transactions** | [**\ck/plenty-client\Model\RestOrdersOrderIdTransactionsPostRequest**](../Model/RestOrdersOrderIdTransactionsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderItemTransaction[]**](../Model/OrderItemTransaction.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersPost()`

```php
restOrdersPost($coupon, $_rest_orders): \ck/plenty-client\Model\Order
```

Create an order

Creates an order. The parameters included in the example below must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coupon = 56; // int | One or multiple coupon code to be redeemed with order creation
$_rest_orders = new \ck/plenty-client\Model\RestOrdersPostRequest(); // \ck/plenty-client\Model\RestOrdersPostRequest

try {
    $result = $apiInstance->restOrdersPost($coupon, $_rest_orders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coupon** | **int**| One or multiple coupon code to be redeemed with order creation | [optional] |
| **_rest_orders** | [**\ck/plenty-client\Model\RestOrdersPostRequest**](../Model/RestOrdersPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Order**](../Model/Order.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersPropertiesIdDelete()`

```php
restOrdersPropertiesIdDelete($id): object
```

Delete property of an order by property ID

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Deletes a property of an order. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the property to be deleted.

try {
    $result = $apiInstance->restOrdersPropertiesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersPropertiesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the property to be deleted. | |

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

## `restOrdersPropertiesIdPut()`

```php
restOrdersPropertiesIdPut($id, $_rest_orders_properties_id): \ck/plenty-client\Model\OrderProperty
```

Update property of an order by property ID

<b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b> Updates the value of a property. The ID of the property must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$_rest_orders_properties_id = new \ck/plenty-client\Model\RestOrdersPropertiesIdPutRequest(); // \ck/plenty-client\Model\RestOrdersPropertiesIdPutRequest

try {
    $result = $apiInstance->restOrdersPropertiesIdPut($id, $_rest_orders_properties_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersPropertiesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **_rest_orders_properties_id** | [**\ck/plenty-client\Model\RestOrdersPropertiesIdPutRequest**](../Model/RestOrdersPropertiesIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderProperty**](../Model/OrderProperty.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersPropertiesTypesGet()`

```php
restOrdersPropertiesTypesGet($lang): \ck/plenty-client\Model\OrderPropertyType[]
```

List order property types

Lists property types and their names in all languages. Optionally, one or more languages can be specified to get a limited response. The following property types are available by default: <br><ul> <li>1 = WAREHOUSE</li> <li>2 = SHIPPING_PROFILE</li> <li>3 = PAYMENT_METHOD</li> <li>4 = PAYMENT_STATUS</li> <li>5 = EXTERNAL_SHIPPING_PROFILE</li> <li>6 = DOCUMENT_LANGUAGE</li> <li>7 = EXTERNAL_ORDER_ID</li> <li>8 = CUSTOMER_SIGN</li> <li>9 = DUNNING_LEVEL</li> <li>10 = SELLER_ACCOUNT</li> <li>11 = WEIGHT</li> <li>12 = WIDTH</li> <li>13 = LENGTH</li> <li>14 = HEIGHT</li> <li>15 = FLAG</li> <li>16 = EXTERNAL_TOKEN_ID</li> <li>17 = EXTERNAL_ITEM_ID</li> <li>18 = COUPON_CODE</li> <li>19 = COUPON_TYPE</li> <li>33 = MAIN_DOCUMENT_NUMBER</li> <li>34 = SALES_TAX_ID_NUMBER</li> <li>45 = PAYMENT_TRANSACTION_ID</li> <li>47 = EXTERNAL_TAX_SERVICE</li> <li>60 = MERCHANT_ID</li> <li>61 = REPORT_ID</li> <li>63 = PREFERRED_STORAGE_LOCATION_ID</li> <li>64 = AMAZON_SHIPPING_LABEL</li> <li>994 = EBAY_PLUS</li> <li>995 = FULFILLMENT_SERVICE</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lang = 56; // int | If no parameter is set here, all languages are loaded by default. Optionally, enter an arry containing the ISO codes of the desired languages.

try {
    $result = $apiInstance->restOrdersPropertiesTypesGet($lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersPropertiesTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lang** | **int**| If no parameter is set here, all languages are loaded by default. Optionally, enter an arry containing the ISO codes of the desired languages. | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderPropertyType[]**](../Model/OrderPropertyType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersPropertiesTypesPost()`

```php
restOrdersPropertiesTypesPost($_rest_orders_properties_types): \ck/plenty-client\Model\OrderPropertyType
```

Create order property type

Creates an order property type. After creating the order property type, it can be linked to an existing order using the property type ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_orders_properties_types = new \ck/plenty-client\Model\RestOrdersPropertiesTypesPostRequest(); // \ck/plenty-client\Model\RestOrdersPropertiesTypesPostRequest

try {
    $result = $apiInstance->restOrdersPropertiesTypesPost($_rest_orders_properties_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersPropertiesTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_orders_properties_types** | [**\ck/plenty-client\Model\RestOrdersPropertiesTypesPostRequest**](../Model/RestOrdersPropertiesTypesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderPropertyType**](../Model/OrderPropertyType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersPropertiesTypesTypeIdDelete()`

```php
restOrdersPropertiesTypesTypeIdDelete($type_id)
```

Delete property type

Deletes a property type and all names for it from the database. The ID of the property type must be specified. Property type IDs lower than 1,000 cannot be deleted because they are system defaults.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int | The ID of the property type

try {
    $apiInstance->restOrdersPropertiesTypesTypeIdDelete($type_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersPropertiesTypesTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type_id** | **int**| The ID of the property type | |

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

## `restOrdersPropertiesTypesTypeIdGet()`

```php
restOrdersPropertiesTypesTypeIdGet($type_id, $lang): \ck/plenty-client\Model\OrderPropertyType
```

Get property type

Gets a property type and its names in all languages. Optionally, one or more languages can be specified to get a limited response. The following property types are available by default:  <br><ul> <li>1 = WAREHOUSE</li> <li>2 = SHIPPING_PROFILE</li> <li>3 = PAYMENT_METHOD</li> <li>4 = PAYMENT_STATUS</li> <li>5 = EXTERNAL_SHIPPING_PROFILE</li> <li>6 = DOCUMENT_LANGUAGE</li> <li>7 = EXTERNAL_ORDER_ID</li> <li>8 = CUSTOMER_SIGN</li> <li>9 = DUNNING_LEVEL</li> <li>10 = SELLER_ACCOUNT</li> <li>11 = WEIGHT</li> <li>12 = WIDTH</li> <li>13 = LENGTH</li> <li>14 = HEIGHT</li> <li>15 = FLAG</li> <li>16 = EXTERNAL_TOKEN_ID</li> <li>17 = EXTERNAL_ITEM_ID</li> <li>18 = COUPON_CODE</li> <li>19 = COUPON_TYPE</li> <li>33 = MAIN_DOCUMENT_NUMBER</li> <li>34 = SALES_TAX_ID_NUMBER</li> <li>45 = PAYMENT_TRANSACTION_ID</li> <li>47 = EXTERNAL_TAX_SERVICE</li> <li>60 = MERCHANT_ID</li> <li>61 = REPORT_ID</li> <li>63 = PREFERRED_STORAGE_LOCATION_ID</li> <li>64 = AMAZON_SHIPPING_LABEL</li> <li>994 = EBAY_PLUS</li> <li>995 = FULFILLMENT_SERVICE</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int | The ID of the type.
$lang = 56; // int | If no parameter is set here, all languages for the property are loaded by default. Optionally, enter an arry containing the ISO codes of the desired languages.

try {
    $result = $apiInstance->restOrdersPropertiesTypesTypeIdGet($type_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersPropertiesTypesTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type_id** | **int**| The ID of the type. | |
| **lang** | **int**| If no parameter is set here, all languages for the property are loaded by default. Optionally, enter an arry containing the ISO codes of the desired languages. | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderPropertyType**](../Model/OrderPropertyType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersPropertiesTypesTypeIdPut()`

```php
restOrdersPropertiesTypesTypeIdPut($type_id, $_rest_orders_properties_types_type_id): \ck/plenty-client\Model\OrderPropertyType
```

Update property type

Updates a property type and its names. The ID of the property type must be specified. If names that do not yet exist for a language are provided, they will be created. Property type IDs lower than 1,000 cannot be updated because they are system defaults.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int
$_rest_orders_properties_types_type_id = new \ck/plenty-client\Model\RestOrdersPropertiesTypesTypeIdPutRequest(); // \ck/plenty-client\Model\RestOrdersPropertiesTypesTypeIdPutRequest

try {
    $result = $apiInstance->restOrdersPropertiesTypesTypeIdPut($type_id, $_rest_orders_properties_types_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersPropertiesTypesTypeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type_id** | **int**|  | |
| **_rest_orders_properties_types_type_id** | [**\ck/plenty-client\Model\RestOrdersPropertiesTypesTypeIdPutRequest**](../Model/RestOrdersPropertiesTypesTypeIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderPropertyType**](../Model/OrderPropertyType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersReferrersGet()`

```php
restOrdersReferrersGet($columns): \ck/plenty-client\Model\OrderReferrer[]
```

List referrers

Lists referrers with the desired columns/attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$columns = 56; // int | The desired columns/attributes of the order referrer to be loaded.

try {
    $result = $apiInstance->restOrdersReferrersGet($columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersReferrersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **columns** | **int**| The desired columns/attributes of the order referrer to be loaded. | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderReferrer[]**](../Model/OrderReferrer.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingCountriesGet()`

```php
restOrdersShippingCountriesGet($active, $with): object
```

List shipping countries

Lists all shipping countries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$active = 56; // int | Returns only the active shipping countries.
$with = 56; // int | The relations to be loaded. Possible values are 'states' and 'names'.

try {
    $result = $apiInstance->restOrdersShippingCountriesGet($active, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingCountriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **active** | **int**| Returns only the active shipping countries. | [optional] |
| **with** | **int**| The relations to be loaded. Possible values are &#39;states&#39; and &#39;names&#39;. | [optional] |

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

## `restOrdersShippingPackageTypesGet()`

```php
restOrdersShippingPackageTypesGet(): \ck/plenty-client\Model\ShippingPackageType[]
```

List shipping package types

Lists all shipping packages types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restOrdersShippingPackageTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPackageTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\ShippingPackageType[]**](../Model/ShippingPackageType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingPackageTypesShippingPackageTypeIdGet()`

```php
restOrdersShippingPackageTypesShippingPackageTypeIdGet($shipping_package_type_id): \ck/plenty-client\Model\ShippingPackageType
```

Get a shipping package type

Gets a shipping package type. The ID of the shipping package type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_package_type_id = 56; // int | The ID of the shipping package type

try {
    $result = $apiInstance->restOrdersShippingPackageTypesShippingPackageTypeIdGet($shipping_package_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPackageTypesShippingPackageTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipping_package_type_id** | **int**| The ID of the shipping package type | |

### Return type

[**\ck/plenty-client\Model\ShippingPackageType**](../Model/ShippingPackageType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingPackagesItemsIdDelete()`

```php
restOrdersShippingPackagesItemsIdDelete($id): object
```

Delete package, variation or quantity for an order

Deletes the package, variation or quantity in a package. The ID of the order package item variation is mandatory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the order package item variation

try {
    $result = $apiInstance->restOrdersShippingPackagesItemsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPackagesItemsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the order package item variation | |

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

## `restOrdersShippingPackagesItemsIdPut()`

```php
restOrdersShippingPackagesItemsIdPut($id): object
```

Update package, variation or quantity for an order

Updates the package, variation or quantity in a package. The ID of the order package item variation is mandatory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the order package item variation

try {
    $result = $apiInstance->restOrdersShippingPackagesItemsIdPut($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPackagesItemsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The ID of the order package item variation | |

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

## `restOrdersShippingPackagesItemsPackageIdItemIdVariationIdDelete()`

```php
restOrdersShippingPackagesItemsPackageIdItemIdVariationIdDelete($package_id, $item_id, $variation_id): object
```

Delete items of an order package

Deletes the items of an order package. The ID of the package, of the item and of the variation are mandatory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 56; // int | The ID of the package
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation

try {
    $result = $apiInstance->restOrdersShippingPackagesItemsPackageIdItemIdVariationIdDelete($package_id, $item_id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPackagesItemsPackageIdItemIdVariationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **package_id** | **int**| The ID of the package | |
| **item_id** | **int**| The ID of the item | |
| **variation_id** | **int**| The ID of the variation | |

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

## `restOrdersShippingPackagesItemsPackageIdItemIdVariationIdPut()`

```php
restOrdersShippingPackagesItemsPackageIdItemIdVariationIdPut($package_id, $item_id, $variation_id): object
```

Update items of an order package

Updates the items of an order package. The ID of the package, of the item and of the variation are mandatory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 56; // int | The ID of the package
$item_id = 56; // int | The ID of the item
$variation_id = 56; // int | The ID of the variation

try {
    $result = $apiInstance->restOrdersShippingPackagesItemsPackageIdItemIdVariationIdPut($package_id, $item_id, $variation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPackagesItemsPackageIdItemIdVariationIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **package_id** | **int**| The ID of the package | |
| **item_id** | **int**| The ID of the item | |
| **variation_id** | **int**| The ID of the variation | |

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

## `restOrdersShippingPackagesPackageIdItemsGet()`

```php
restOrdersShippingPackagesPackageIdItemsGet($package_id): \ck/plenty-client\Model\OrderShippingPackageItems
```

List items of an order package

Lists items of an order package. The ID of the package must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 56; // int | The ID of the order package

try {
    $result = $apiInstance->restOrdersShippingPackagesPackageIdItemsGet($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPackagesPackageIdItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **package_id** | **int**| The ID of the order package | |

### Return type

[**\ck/plenty-client\Model\OrderShippingPackageItems**](../Model/OrderShippingPackageItems.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingPackagesPackageIdItemsPost()`

```php
restOrdersShippingPackagesPackageIdItemsPost($package_id): object[]
```

Create package, variation or quantity for an order

Creates the package, variation or quantity in a package. The ID of the order package item variation is mandatory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 56; // int | The ID of the order package

try {
    $result = $apiInstance->restOrdersShippingPackagesPackageIdItemsPost($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPackagesPackageIdItemsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **package_id** | **int**| The ID of the order package | |

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

## `restOrdersShippingPalletsGet()`

```php
restOrdersShippingPalletsGet($order_id): \ck/plenty-client\Model\OrderShippingPallet[]
```

List order shipping pallets

Lists order shipping pallets. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | The ID of the order

try {
    $result = $apiInstance->restOrdersShippingPalletsGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPalletsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| The ID of the order | |

### Return type

[**\ck/plenty-client\Model\OrderShippingPallet[]**](../Model/OrderShippingPallet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingPalletsPalletIdDelete()`

```php
restOrdersShippingPalletsPalletIdDelete($pallet_id, $_rest_orders_shipping_pallets_pallet_id): \ck/plenty-client\Model\OrderShippingPallet
```

Delete all pallets of an order

Deletes all pallets of an order. The ID of the pallet must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pallet_id = 56; // int | The ID of the pallet
$_rest_orders_shipping_pallets_pallet_id = new \ck/plenty-client\Model\RestOrdersShippingPalletsPalletIdDeleteRequest(); // \ck/plenty-client\Model\RestOrdersShippingPalletsPalletIdDeleteRequest

try {
    $result = $apiInstance->restOrdersShippingPalletsPalletIdDelete($pallet_id, $_rest_orders_shipping_pallets_pallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPalletsPalletIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pallet_id** | **int**| The ID of the pallet | |
| **_rest_orders_shipping_pallets_pallet_id** | [**\ck/plenty-client\Model\RestOrdersShippingPalletsPalletIdDeleteRequest**](../Model/RestOrdersShippingPalletsPalletIdDeleteRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderShippingPallet**](../Model/OrderShippingPallet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingPalletsPalletIdGet()`

```php
restOrdersShippingPalletsPalletIdGet($pallet_id): \ck/plenty-client\Model\OrderShippingPallet
```

List all pallets of an order

Lists all pallets of an order. The ID of the pallet must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pallet_id = 56; // int | The ID of the pallet

try {
    $result = $apiInstance->restOrdersShippingPalletsPalletIdGet($pallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPalletsPalletIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pallet_id** | **int**| The ID of the pallet | |

### Return type

[**\ck/plenty-client\Model\OrderShippingPallet**](../Model/OrderShippingPallet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingPalletsPalletIdPut()`

```php
restOrdersShippingPalletsPalletIdPut($pallet_id, $_rest_orders_shipping_pallets_pallet_id): \ck/plenty-client\Model\OrderShippingPallet
```

Update all pallets of an order

Updates all pallets of an order. The ID of the pallet must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pallet_id = 56; // int | The ID of the pallet
$_rest_orders_shipping_pallets_pallet_id = new \ck/plenty-client\Model\RestOrdersShippingPalletsPostRequest(); // \ck/plenty-client\Model\RestOrdersShippingPalletsPostRequest

try {
    $result = $apiInstance->restOrdersShippingPalletsPalletIdPut($pallet_id, $_rest_orders_shipping_pallets_pallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPalletsPalletIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pallet_id** | **int**| The ID of the pallet | |
| **_rest_orders_shipping_pallets_pallet_id** | [**\ck/plenty-client\Model\RestOrdersShippingPalletsPostRequest**](../Model/RestOrdersShippingPalletsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderShippingPallet**](../Model/OrderShippingPallet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingPalletsPost()`

```php
restOrdersShippingPalletsPost($_rest_orders_shipping_pallets): \ck/plenty-client\Model\OrderShippingPallet
```

Create order shipping pallets

Creates order shipping pallets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_orders_shipping_pallets = new \ck/plenty-client\Model\RestOrdersShippingPalletsPostRequest(); // \ck/plenty-client\Model\RestOrdersShippingPalletsPostRequest

try {
    $result = $apiInstance->restOrdersShippingPalletsPost($_rest_orders_shipping_pallets);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPalletsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_orders_shipping_pallets** | [**\ck/plenty-client\Model\RestOrdersShippingPalletsPostRequest**](../Model/RestOrdersShippingPalletsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderShippingPallet**](../Model/OrderShippingPallet.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingParcelServiceRegionsParcelServiceRegionIdGet()`

```php
restOrdersShippingParcelServiceRegionsParcelServiceRegionIdGet($parcel_service_region_id, $columns): \ck/plenty-client\Model\ParcelServiceRegion
```

Get an  order parcel service region

Gets an parcel service region. The ID of the parcel service region must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_service_region_id = 56; // int | The ID of the parcel service region
$columns = 56; // int | The properties to be loaded

try {
    $result = $apiInstance->restOrdersShippingParcelServiceRegionsParcelServiceRegionIdGet($parcel_service_region_id, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingParcelServiceRegionsParcelServiceRegionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parcel_service_region_id** | **int**| The ID of the parcel service region | |
| **columns** | **int**| The properties to be loaded | [optional] |

### Return type

[**\ck/plenty-client\Model\ParcelServiceRegion**](../Model/ParcelServiceRegion.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingPresetsGet()`

```php
restOrdersShippingPresetsGet($columns, $parcel_service_name, $shipping_service_provider, $with, $updated_at_before, $updated_at_after): \ck/plenty-client\Model\ParcelServicePreset[]
```

List shipping profiles

Lists all shipping profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$columns = 56; // int | The attributes to be loaded in the shipping profile
$parcel_service_name = 'parcel_service_name_example'; // string | Filter that restricts the search result to parcel service presets with a specified service name (e.g. 'DHL' for DHL)
$shipping_service_provider = 'shipping_service_provider_example'; // string | Filter that restricts the search result to a shipping service provider
$with = 'with_example'; // string | The name of an relation to the preset. The following parameter is available: parcelServiceRegion, parcelServiceRegionConstraint, parcelServicePresetNames and parcelServiceNames.
$updated_at_before = 'updated_at_before_example'; // string | Filter that restricts the search result to presets that were updated before a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss
$updated_at_after = 'updated_at_after_example'; // string | Filter that restricts the search result to presets that were updated after a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss

try {
    $result = $apiInstance->restOrdersShippingPresetsGet($columns, $parcel_service_name, $shipping_service_provider, $with, $updated_at_before, $updated_at_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPresetsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **columns** | **int**| The attributes to be loaded in the shipping profile | [optional] |
| **parcel_service_name** | **string**| Filter that restricts the search result to parcel service presets with a specified service name (e.g. &#39;DHL&#39; for DHL) | [optional] |
| **shipping_service_provider** | **string**| Filter that restricts the search result to a shipping service provider | [optional] |
| **with** | **string**| The name of an relation to the preset. The following parameter is available: parcelServiceRegion, parcelServiceRegionConstraint, parcelServicePresetNames and parcelServiceNames. | [optional] |
| **updated_at_before** | **string**| Filter that restricts the search result to presets that were updated before a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss | [optional] |
| **updated_at_after** | **string**| Filter that restricts the search result to presets that were updated after a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss | [optional] |

### Return type

[**\ck/plenty-client\Model\ParcelServicePreset[]**](../Model/ParcelServicePreset.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingPresetsPresetIdGet()`

```php
restOrdersShippingPresetsPresetIdGet($preset_id, $columns): \ck/plenty-client\Model\ParcelServicePreset
```

Get a shipping profile

Gets a shipping profile. The ID of the shipping profile must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preset_id = 56; // int | The ID of the shipping profile
$columns = 56; // int | The attributes to be loaded in the shipping profile

try {
    $result = $apiInstance->restOrdersShippingPresetsPresetIdGet($preset_id, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPresetsPresetIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **preset_id** | **int**| The ID of the shipping profile | |
| **columns** | **int**| The attributes to be loaded in the shipping profile | [optional] |

### Return type

[**\ck/plenty-client\Model\ParcelServicePreset**](../Model/ParcelServicePreset.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingPresetsPresetIdParcelServiceRegionsGet()`

```php
restOrdersShippingPresetsPresetIdParcelServiceRegionsGet($preset_id, $columns): \ck/plenty-client\Model\ParcelServiceRegion[]
```

List parcel service regions by parcel service preset ID

Lists parcel service regions. The ID of the parcel service preset must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preset_id = 56; // int | The ID of the preset
$columns = 56; // int | The properties to be loaded

try {
    $result = $apiInstance->restOrdersShippingPresetsPresetIdParcelServiceRegionsGet($preset_id, $columns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingPresetsPresetIdParcelServiceRegionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **preset_id** | **int**| The ID of the preset | |
| **columns** | **int**| The properties to be loaded | [optional] |

### Return type

[**\ck/plenty-client\Model\ParcelServiceRegion[]**](../Model/ParcelServiceRegion.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingReturnsReturnsServiceProvidersGet()`

```php
restOrdersShippingReturnsReturnsServiceProvidersGet($is_plugin, $plugin_id): \ck/plenty-client\Model\RestOrdersShippingReturnsReturnsServiceProvidersGet200Response
```

List returns service providers

Lists all returns service providers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$is_plugin = 56; // int | Possible values are 1 (true) and 0 (false).
$plugin_id = 56; // int | The ID of the plugin

try {
    $result = $apiInstance->restOrdersShippingReturnsReturnsServiceProvidersGet($is_plugin, $plugin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingReturnsReturnsServiceProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_plugin** | **int**| Possible values are 1 (true) and 0 (false). | [optional] |
| **plugin_id** | **int**| The ID of the plugin | [optional] |

### Return type

[**\ck/plenty-client\Model\RestOrdersShippingReturnsReturnsServiceProvidersGet200Response**](../Model/RestOrdersShippingReturnsReturnsServiceProvidersGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingReturnsReturnsServiceProvidersPluginsGet()`

```php
restOrdersShippingReturnsReturnsServiceProvidersPluginsGet(): object[]
```

List returns service provider plugins

Lists all returns service provider plugins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restOrdersShippingReturnsReturnsServiceProvidersPluginsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingReturnsReturnsServiceProvidersPluginsGet: ', $e->getMessage(), PHP_EOL;
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

## `restOrdersShippingReturnsReturnsServiceProvidersProviderIdGet()`

```php
restOrdersShippingReturnsReturnsServiceProvidersProviderIdGet($provider_id): \ck/plenty-client\Model\ReturnsServiceProvider
```

Get returns service provider by the ID

Gets a specific returns service provider. The ID of the returns service provider must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_id = 56; // int | The ID of the returns service provider

try {
    $result = $apiInstance->restOrdersShippingReturnsReturnsServiceProvidersProviderIdGet($provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingReturnsReturnsServiceProvidersProviderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **int**| The ID of the returns service provider | |

### Return type

[**\ck/plenty-client\Model\ReturnsServiceProvider**](../Model/ReturnsServiceProvider.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingShippingInformationGet()`

```php
restOrdersShippingShippingInformationGet(): object[]
```

List orders with shipping information

Lists all the orders with their shipping information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restOrdersShippingShippingInformationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingShippingInformationGet: ', $e->getMessage(), PHP_EOL;
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

## `restOrdersShippingShippingInformationPost()`

```php
restOrdersShippingShippingInformationPost(): \ck/plenty-client\Model\ShippingInformation
```

Create shipping information

Creates the shipping information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restOrdersShippingShippingInformationPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingShippingInformationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\ShippingInformation**](../Model/ShippingInformation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingShippingServiceProvidersGet()`

```php
restOrdersShippingShippingServiceProvidersGet($updated_at_before, $updated_at_after, $with): \ck/plenty-client\Model\RestOrdersShippingShippingServiceProvidersGet200Response
```

List shipping service providers

Lists all shipping service providers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_at_before = 'updated_at_before_example'; // string | Filter that restricts the search result to shipping providers that were updated before a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss
$updated_at_after = 'updated_at_after_example'; // string | Filter that restricts the search result to shipping providers that were updated after a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss
$with = 'with_example'; // string | The name of an relation to the shipping provider. The following parameter is available: ownShippingServiceProviders.

try {
    $result = $apiInstance->restOrdersShippingShippingServiceProvidersGet($updated_at_before, $updated_at_after, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingShippingServiceProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updated_at_before** | **string**| Filter that restricts the search result to shipping providers that were updated before a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss | [optional] |
| **updated_at_after** | **string**| Filter that restricts the search result to shipping providers that were updated after a specific date. Possible formats: yyyy-mm-dd or yyyy-mm-dd hh:mm:ss | [optional] |
| **with** | **string**| The name of an relation to the shipping provider. The following parameter is available: ownShippingServiceProviders. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestOrdersShippingShippingServiceProvidersGet200Response**](../Model/RestOrdersShippingShippingServiceProvidersGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingShippingServiceProvidersPluginsGet()`

```php
restOrdersShippingShippingServiceProvidersPluginsGet(): object[]
```

List shipping service provider plugins

Lists all shipping service provider plugins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restOrdersShippingShippingServiceProvidersPluginsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingShippingServiceProvidersPluginsGet: ', $e->getMessage(), PHP_EOL;
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

## `restOrdersShippingShippingServiceProvidersPost()`

```php
restOrdersShippingShippingServiceProvidersPost(): \ck/plenty-client\Model\ShippingServiceProvider
```

Save a shipping service provider

Saves a shipping service provider. The name of the shipping service provider must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restOrdersShippingShippingServiceProvidersPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingShippingServiceProvidersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck/plenty-client\Model\ShippingServiceProvider**](../Model/ShippingServiceProvider.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersShippingShippingServiceProvidersShippingServiceProviderIdGet()`

```php
restOrdersShippingShippingServiceProvidersShippingServiceProviderIdGet($shipping_service_provider_id, $shipping_service_provider_id2): \ck/plenty-client\Model\ShippingServiceProvider
```

Get a shipping service provider

Gets a shipping service provider. The ID of the shipping service provider must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_service_provider_id = 56; // int | The ID of the shipping service provider
$shipping_service_provider_id2 = 56; // int

try {
    $result = $apiInstance->restOrdersShippingShippingServiceProvidersShippingServiceProviderIdGet($shipping_service_provider_id, $shipping_service_provider_id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersShippingShippingServiceProvidersShippingServiceProviderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipping_service_provider_id** | **int**| The ID of the shipping service provider | |
| **shipping_service_provider_id2** | **int**|  | |

### Return type

[**\ck/plenty-client\Model\ShippingServiceProvider**](../Model/ShippingServiceProvider.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersStatusHistoryGet()`

```php
restOrdersStatusHistoryGet($order_id, $status_id, $created_at_from, $created_at_to, $user_id): \ck/plenty-client\Model\RestOrdersStatusHistoryGet200Response
```

List status histories of orders

Lists the status histories of all orders. The result can be limited to an order specified by an ID, a status with a particular ID, a period of time or a user specified by the user ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order
$status_id = 3.4; // float | The ID of the status
$created_at_from = 'created_at_from_example'; // string | Set a start date to get status history entries beginning with this date
$created_at_to = 'created_at_to_example'; // string | Set an end date to get status history entries up to this date
$user_id = 'user_id_example'; // string | The ID of the user

try {
    $result = $apiInstance->restOrdersStatusHistoryGet($order_id, $status_id, $created_at_from, $created_at_to, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersStatusHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order | [optional] |
| **status_id** | **float**| The ID of the status | [optional] |
| **created_at_from** | **string**| Set a start date to get status history entries beginning with this date | [optional] |
| **created_at_to** | **string**| Set an end date to get status history entries up to this date | [optional] |
| **user_id** | **string**| The ID of the user | [optional] |

### Return type

[**\ck/plenty-client\Model\RestOrdersStatusHistoryGet200Response**](../Model/RestOrdersStatusHistoryGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersStatusesAllGet()`

```php
restOrdersStatusesAllGet(): object
```

Get all order statuses

Gets all order statuses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restOrdersStatusesAllGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersStatusesAllGet: ', $e->getMessage(), PHP_EOL;
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

## `restOrdersStatusesGet()`

```php
restOrdersStatusesGet($status_id_from, $status_id_to): \ck/plenty-client\Model\RestOrdersStatusesGet200Response
```

Searches for order statuses

Searches for a list of order statuses. The search results are specified by providing filter parameters in the form of order status IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status_id_from = 3.4; // float | Define an ID as a start value for the filter. Filter that restricts the search for order statuses to IDs from a defined value.
$status_id_to = 3.4; // float | Define an ID as an end value for the filter.

try {
    $result = $apiInstance->restOrdersStatusesGet($status_id_from, $status_id_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersStatusesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status_id_from** | **float**| Define an ID as a start value for the filter. Filter that restricts the search for order statuses to IDs from a defined value. | [optional] |
| **status_id_to** | **float**| Define an ID as an end value for the filter. | [optional] |

### Return type

[**\ck/plenty-client\Model\RestOrdersStatusesGet200Response**](../Model/RestOrdersStatusesGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersStatusesGroupFunctionsPost()`

```php
restOrdersStatusesGroupFunctionsPost($new_status_values, $selected_status_list)
```

Change order status properties

Change properties of an order status. Properties are colour of the order status, visibility in the online store and availability for orders of the type reorder or redistribution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_status_values = 56; // int | Set an array of new order status properties consisting of one key and one value for each property. The status colour must be set as a hexadecimal code. All other properties must be specified either by value 0 (inactive) or 1 (active).
$selected_status_list = 56; // int | Set a list with the IDs of the order statuses that should be changed.

try {
    $apiInstance->restOrdersStatusesGroupFunctionsPost($new_status_values, $selected_status_list);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersStatusesGroupFunctionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_status_values** | **int**| Set an array of new order status properties consisting of one key and one value for each property. The status colour must be set as a hexadecimal code. All other properties must be specified either by value 0 (inactive) or 1 (active). | |
| **selected_status_list** | **int**| Set a list with the IDs of the order statuses that should be changed. | |

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

## `restOrdersStatusesPost()`

```php
restOrdersStatusesPost($_rest_orders_statuses): \ck/plenty-client\Model\OrderStatus
```

Creates an order status.

Creates an order status. The ID of the order status must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_orders_statuses = new \ck/plenty-client\Model\RestOrdersStatusesPostRequest(); // \ck/plenty-client\Model\RestOrdersStatusesPostRequest

try {
    $result = $apiInstance->restOrdersStatusesPost($_rest_orders_statuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersStatusesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_orders_statuses** | [**\ck/plenty-client\Model\RestOrdersStatusesPostRequest**](../Model/RestOrdersStatusesPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderStatus**](../Model/OrderStatus.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersStatusesStatusIdDelete()`

```php
restOrdersStatusesStatusIdDelete($status_id)
```

Delete an order status

Deletes an order status. The ID of the order status must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status_id = 3.4; // float | The ID of the status, which shall be deleted.

try {
    $apiInstance->restOrdersStatusesStatusIdDelete($status_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersStatusesStatusIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status_id** | **float**| The ID of the status, which shall be deleted. | |

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

## `restOrdersStatusesStatusIdGet()`

```php
restOrdersStatusesStatusIdGet($status_id): \ck/plenty-client\Model\OrderStatus
```

Get an order status

Gets an order status. The status has to be specified by providing a status ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status_id = 3.4; // float | The ID of the order status.

try {
    $result = $apiInstance->restOrdersStatusesStatusIdGet($status_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersStatusesStatusIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status_id** | **float**| The ID of the order status. | |

### Return type

[**\ck/plenty-client\Model\OrderStatus**](../Model/OrderStatus.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersStatusesStatusIdPut()`

```php
restOrdersStatusesStatusIdPut($status_id, $_rest_orders_statuses_status_id): \ck/plenty-client\Model\OrderStatus
```

Update an order status

Updates an order status. The ID of the order status must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status_id = 3.4; // float | The ID of the order status that should be updated.
$_rest_orders_statuses_status_id = new \ck/plenty-client\Model\RestOrdersStatusesStatusIdPutRequest(); // \ck/plenty-client\Model\RestOrdersStatusesStatusIdPutRequest

try {
    $result = $apiInstance->restOrdersStatusesStatusIdPut($status_id, $_rest_orders_statuses_status_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restOrdersStatusesStatusIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status_id** | **float**| The ID of the order status that should be updated. | |
| **_rest_orders_statuses_status_id** | [**\ck/plenty-client\Model\RestOrdersStatusesStatusIdPutRequest**](../Model/RestOrdersStatusesStatusIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\OrderStatus**](../Model/OrderStatus.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restRedistributionsOrderIdDelete()`

```php
restRedistributionsOrderIdDelete($order_id): object
```

Delete a redistribution

Deletes a redistribution. The order ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int

try {
    $result = $apiInstance->restRedistributionsOrderIdDelete($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restRedistributionsOrderIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**|  | |

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

## `restRedistributionsOrderIdPut()`

```php
restRedistributionsOrderIdPut($order_id, $_rest_redistributions_order_id): \ck/plenty-client\Model\Order
```

Update a redistribution

Updates a redistribution. The ID of the order must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order.
$_rest_redistributions_order_id = new \ck/plenty-client\Model\RestRedistributionsPostRequest(); // \ck/plenty-client\Model\RestRedistributionsPostRequest

try {
    $result = $apiInstance->restRedistributionsOrderIdPut($order_id, $_rest_redistributions_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restRedistributionsOrderIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order. | |
| **_rest_redistributions_order_id** | [**\ck/plenty-client\Model\RestRedistributionsPostRequest**](../Model/RestRedistributionsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Order**](../Model/Order.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restRedistributionsPost()`

```php
restRedistributionsPost($_rest_redistributions): \ck/plenty-client\Model\Order
```

Create a redistribution

Create a redistribution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_redistributions = new \ck/plenty-client\Model\RestRedistributionsPostRequest(); // \ck/plenty-client\Model\RestRedistributionsPostRequest

try {
    $result = $apiInstance->restRedistributionsPost($_rest_redistributions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restRedistributionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_redistributions** | [**\ck/plenty-client\Model\RestRedistributionsPostRequest**](../Model/RestRedistributionsPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Order**](../Model/Order.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restReordersOrderIdCurrencyPut()`

```php
restReordersOrderIdCurrencyPut($order_id): \ck/plenty-client\Model\Order
```

Update the currency

Update the currency for a reorder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order.

try {
    $result = $apiInstance->restReordersOrderIdCurrencyPut($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restReordersOrderIdCurrencyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order. | |

### Return type

[**\ck/plenty-client\Model\Order**](../Model/Order.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restReordersOrderIdDelete()`

```php
restReordersOrderIdDelete($order_id): object
```

Delete a reorder

Deletes a reorder. The order ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int

try {
    $result = $apiInstance->restReordersOrderIdDelete($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restReordersOrderIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**|  | |

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

## `restReordersOrderIdDeliveryDateGet()`

```php
restReordersOrderIdDeliveryDateGet($order_id): object
```

Get the delivery date

Get the delivery date for a reorder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order.

try {
    $result = $apiInstance->restReordersOrderIdDeliveryDateGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restReordersOrderIdDeliveryDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order. | |

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

## `restReordersOrderIdDeliveryDatesPut()`

```php
restReordersOrderIdDeliveryDatesPut($order_id): \ck/plenty-client\Model\Order
```

Calculate and save the delivery dates

Calculates and saves the delivery dates for the reorder and the reorder items. The order ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order.

try {
    $result = $apiInstance->restReordersOrderIdDeliveryDatesPut($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restReordersOrderIdDeliveryDatesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order. | |

### Return type

[**\ck/plenty-client\Model\Order**](../Model/Order.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restReordersOrderIdPut()`

```php
restReordersOrderIdPut($order_id, $_rest_reorders_order_id): \ck/plenty-client\Model\Order
```

Update a reorder

Updates a reorder. The order ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | The ID of the order.
$_rest_reorders_order_id = new \ck/plenty-client\Model\RestReordersPostRequest(); // \ck/plenty-client\Model\RestReordersPostRequest

try {
    $result = $apiInstance->restReordersOrderIdPut($order_id, $_rest_reorders_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restReordersOrderIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| The ID of the order. | |
| **_rest_reorders_order_id** | [**\ck/plenty-client\Model\RestReordersPostRequest**](../Model/RestReordersPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Order**](../Model/Order.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restReordersPost()`

```php
restReordersPost($_rest_reorders): \ck/plenty-client\Model\Order
```

Create a reorder

Create a reorder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_reorders = new \ck/plenty-client\Model\RestReordersPostRequest(); // \ck/plenty-client\Model\RestReordersPostRequest

try {
    $result = $apiInstance->restReordersPost($_rest_reorders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restReordersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_reorders** | [**\ck/plenty-client\Model\RestReordersPostRequest**](../Model/RestReordersPostRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\Order**](../Model/Order.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restSystemSettingsTaricVatAssignmentGet()`

```php
restSystemSettingsTaricVatAssignmentGet($page, $items_per_page, $country_id, $taric_code): \ck/plenty-client\Model\RestSystemSettingsTaricVatAssignmentGet200Response
```

List taric vat assignments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The requested page of results
$items_per_page = 56; // int | The number of results per page
$country_id = 56; // int | The country ID of the taric vat assignments
$taric_code = 56; // int | The taric code of the taric vat assignments

try {
    $result = $apiInstance->restSystemSettingsTaricVatAssignmentGet($page, $items_per_page, $country_id, $taric_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restSystemSettingsTaricVatAssignmentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The requested page of results | [optional] |
| **items_per_page** | **int**| The number of results per page | [optional] |
| **country_id** | **int**| The country ID of the taric vat assignments | [optional] |
| **taric_code** | **int**| The taric code of the taric vat assignments | [optional] |

### Return type

[**\ck/plenty-client\Model\RestSystemSettingsTaricVatAssignmentGet200Response**](../Model/RestSystemSettingsTaricVatAssignmentGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restSystemSettingsTaricVatAssignmentTaricCodeCountryIdDelete()`

```php
restSystemSettingsTaricVatAssignmentTaricCodeCountryIdDelete($taric_code, $country_id, $_rest_system_settings_taric_vat_assignment_taric_code_country_id): object
```

Delete taric vat assignment

Deletes a taric code. The taric code and the country ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taric_code = 'taric_code_example'; // string | The taric code.
$country_id = 56; // int | The country id.
$_rest_system_settings_taric_vat_assignment_taric_code_country_id = new \ck/plenty-client\Model\RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdDeleteRequest(); // \ck/plenty-client\Model\RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdDeleteRequest

try {
    $result = $apiInstance->restSystemSettingsTaricVatAssignmentTaricCodeCountryIdDelete($taric_code, $country_id, $_rest_system_settings_taric_vat_assignment_taric_code_country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restSystemSettingsTaricVatAssignmentTaricCodeCountryIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taric_code** | **string**| The taric code. | |
| **country_id** | **int**| The country id. | |
| **_rest_system_settings_taric_vat_assignment_taric_code_country_id** | [**\ck/plenty-client\Model\RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdDeleteRequest**](../Model/RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdDeleteRequest.md)|  | [optional] |

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

## `restSystemSettingsTaricVatAssignmentTaricCodeCountryIdGet()`

```php
restSystemSettingsTaricVatAssignmentTaricCodeCountryIdGet($taric_code, $country_id): \ck/plenty-client\Model\TaricVatAssignment
```

Get taric vat assignment

Gets a taric vat assignment. The taric code and the country ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taric_code = 'taric_code_example'; // string | The taric code.
$country_id = 56; // int | The country id.

try {
    $result = $apiInstance->restSystemSettingsTaricVatAssignmentTaricCodeCountryIdGet($taric_code, $country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restSystemSettingsTaricVatAssignmentTaricCodeCountryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taric_code** | **string**| The taric code. | |
| **country_id** | **int**| The country id. | |

### Return type

[**\ck/plenty-client\Model\TaricVatAssignment**](../Model/TaricVatAssignment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restSystemSettingsTaricVatAssignmentTaricCodeCountryIdPost()`

```php
restSystemSettingsTaricVatAssignmentTaricCodeCountryIdPost($taric_code, $country_id, $_rest_system_settings_taric_vat_assignment_taric_code_country_id): \ck/plenty-client\Model\TaricVatAssignment
```

Create taric vat assignment

Creates a taric vat assignment. The taric code and the country ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taric_code = 'taric_code_example'; // string | The taric code.
$country_id = 56; // int | The country id.
$_rest_system_settings_taric_vat_assignment_taric_code_country_id = new \ck/plenty-client\Model\RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdPutRequest(); // \ck/plenty-client\Model\RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdPutRequest

try {
    $result = $apiInstance->restSystemSettingsTaricVatAssignmentTaricCodeCountryIdPost($taric_code, $country_id, $_rest_system_settings_taric_vat_assignment_taric_code_country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restSystemSettingsTaricVatAssignmentTaricCodeCountryIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taric_code** | **string**| The taric code. | |
| **country_id** | **int**| The country id. | |
| **_rest_system_settings_taric_vat_assignment_taric_code_country_id** | [**\ck/plenty-client\Model\RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdPutRequest**](../Model/RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\TaricVatAssignment**](../Model/TaricVatAssignment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restSystemSettingsTaricVatAssignmentTaricCodeCountryIdPut()`

```php
restSystemSettingsTaricVatAssignmentTaricCodeCountryIdPut($taric_code, $country_id, $_rest_system_settings_taric_vat_assignment_taric_code_country_id): \ck/plenty-client\Model\TaricVatAssignment
```

Update taric vat assignment

Updates a taric vat assignment. The taric code and the country ID must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck/plenty-client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck/plenty-client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taric_code = 'taric_code_example'; // string | The taric code.
$country_id = 56; // int | The country id.
$_rest_system_settings_taric_vat_assignment_taric_code_country_id = new \ck/plenty-client\Model\RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdPutRequest(); // \ck/plenty-client\Model\RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdPutRequest

try {
    $result = $apiInstance->restSystemSettingsTaricVatAssignmentTaricCodeCountryIdPut($taric_code, $country_id, $_rest_system_settings_taric_vat_assignment_taric_code_country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restSystemSettingsTaricVatAssignmentTaricCodeCountryIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taric_code** | **string**| The taric code. | |
| **country_id** | **int**| The country id. | |
| **_rest_system_settings_taric_vat_assignment_taric_code_country_id** | [**\ck/plenty-client\Model\RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdPutRequest**](../Model/RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdPutRequest.md)|  | [optional] |

### Return type

[**\ck/plenty-client\Model\TaricVatAssignment**](../Model/TaricVatAssignment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# ck\AccountApi

All URIs are relative to https://example.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restAccountLoginPost()**](AccountApi.md#restAccountLoginPost) | **POST** /rest/account/login | Login |
| [**restAccountLoginRefreshPost()**](AccountApi.md#restAccountLoginRefreshPost) | **POST** /rest/account/login/refresh | Refresh |
| [**restAccountLogoutPost()**](AccountApi.md#restAccountLogoutPost) | **POST** /rest/account/logout | Logout |
| [**restAccountsAccountIdContactsGet()**](AccountApi.md#restAccountsAccountIdContactsGet) | **GET** /rest/accounts/{accountId}/contacts | List contacts |
| [**restAccountsAccountIdDelete()**](AccountApi.md#restAccountsAccountIdDelete) | **DELETE** /rest/accounts/{accountId} | Delete account |
| [**restAccountsAccountIdGet()**](AccountApi.md#restAccountsAccountIdGet) | **GET** /rest/accounts/{accountId} | Get account |
| [**restAccountsAccountIdPut()**](AccountApi.md#restAccountsAccountIdPut) | **PUT** /rest/accounts/{accountId} | Update account |
| [**restAccountsAddressesAddressIdDelete()**](AccountApi.md#restAccountsAddressesAddressIdDelete) | **DELETE** /rest/accounts/addresses/{addressId} | Delete address |
| [**restAccountsAddressesAddressIdGet()**](AccountApi.md#restAccountsAddressesAddressIdGet) | **GET** /rest/accounts/addresses/{addressId} | Get address |
| [**restAccountsAddressesAddressIdOptionsDelete()**](AccountApi.md#restAccountsAddressesAddressIdOptionsDelete) | **DELETE** /rest/accounts/addresses/{addressId}/options | Delete address option by addressId |
| [**restAccountsAddressesAddressIdOptionsGet()**](AccountApi.md#restAccountsAddressesAddressIdOptionsGet) | **GET** /rest/accounts/addresses/{addressId}/options | List address options |
| [**restAccountsAddressesAddressIdOptionsPost()**](AccountApi.md#restAccountsAddressesAddressIdOptionsPost) | **POST** /rest/accounts/addresses/{addressId}/options | Create address option |
| [**restAccountsAddressesAddressIdOptionsPut()**](AccountApi.md#restAccountsAddressesAddressIdOptionsPut) | **PUT** /rest/accounts/addresses/{addressId}/options | Update address option by addressId |
| [**restAccountsAddressesAddressIdPut()**](AccountApi.md#restAccountsAddressesAddressIdPut) | **PUT** /rest/accounts/addresses/{addressId} | Update address |
| [**restAccountsAddressesAddressIdRelatedDataGet()**](AccountApi.md#restAccountsAddressesAddressIdRelatedDataGet) | **GET** /rest/accounts/addresses/{addressId}/related_data | Get address data by addressId |
| [**restAccountsAddressesContactRelationsAddressContactRelationIdDelete()**](AccountApi.md#restAccountsAddressesContactRelationsAddressContactRelationIdDelete) | **DELETE** /rest/accounts/addresses/contact_relations/{addressContactRelationId} | Delete address contact relation |
| [**restAccountsAddressesContactRelationsAddressContactRelationIdGet()**](AccountApi.md#restAccountsAddressesContactRelationsAddressContactRelationIdGet) | **GET** /rest/accounts/addresses/contact_relations/{addressContactRelationId} | Get address contact relation |
| [**restAccountsAddressesContactRelationsGet()**](AccountApi.md#restAccountsAddressesContactRelationsGet) | **GET** /rest/accounts/addresses/contact_relations | List address contact relations |
| [**restAccountsAddressesContactRelationsPost()**](AccountApi.md#restAccountsAddressesContactRelationsPost) | **POST** /rest/accounts/addresses/contact_relations | Create address contact relations |
| [**restAccountsAddressesContactRelationsPut()**](AccountApi.md#restAccountsAddressesContactRelationsPut) | **PUT** /rest/accounts/addresses/contact_relations | Update address contact relations |
| [**restAccountsAddressesGet()**](AccountApi.md#restAccountsAddressesGet) | **GET** /rest/accounts/addresses | Get all available addresses |
| [**restAccountsAddressesOptionTypesGet()**](AccountApi.md#restAccountsAddressesOptionTypesGet) | **GET** /rest/accounts/addresses/option_types | List address option types |
| [**restAccountsAddressesOptionTypesOptionTypeIdDelete()**](AccountApi.md#restAccountsAddressesOptionTypesOptionTypeIdDelete) | **DELETE** /rest/accounts/addresses/option_types/{optionTypeId} | Delete address option type |
| [**restAccountsAddressesOptionTypesOptionTypeIdGet()**](AccountApi.md#restAccountsAddressesOptionTypesOptionTypeIdGet) | **GET** /rest/accounts/addresses/option_types/{optionTypeId} | Get address option type |
| [**restAccountsAddressesOptionTypesOptionTypeIdPut()**](AccountApi.md#restAccountsAddressesOptionTypesOptionTypeIdPut) | **PUT** /rest/accounts/addresses/option_types/{optionTypeId} | Update address option type |
| [**restAccountsAddressesOptionTypesPost()**](AccountApi.md#restAccountsAddressesOptionTypesPost) | **POST** /rest/accounts/addresses/option_types | Create address option type |
| [**restAccountsAddressesOptionsOptionIdDelete()**](AccountApi.md#restAccountsAddressesOptionsOptionIdDelete) | **DELETE** /rest/accounts/addresses/options/{optionId} | Delete address option by option ID |
| [**restAccountsAddressesOptionsOptionIdGet()**](AccountApi.md#restAccountsAddressesOptionsOptionIdGet) | **GET** /rest/accounts/addresses/options/{optionId} | Get address option |
| [**restAccountsAddressesOptionsOptionIdPut()**](AccountApi.md#restAccountsAddressesOptionsOptionIdPut) | **PUT** /rest/accounts/addresses/options/{optionId} | Update address option |
| [**restAccountsAddressesPosRelationsAddressPosRelationIdDelete()**](AccountApi.md#restAccountsAddressesPosRelationsAddressPosRelationIdDelete) | **DELETE** /rest/accounts/addresses/pos_relations/{addressPosRelationId} | Delete address POS relation |
| [**restAccountsAddressesPosRelationsAddressPosRelationIdGet()**](AccountApi.md#restAccountsAddressesPosRelationsAddressPosRelationIdGet) | **GET** /rest/accounts/addresses/pos_relations/{addressPosRelationId} | Get address POS relation |
| [**restAccountsAddressesPosRelationsAddressPosRelationIdPut()**](AccountApi.md#restAccountsAddressesPosRelationsAddressPosRelationIdPut) | **PUT** /rest/accounts/addresses/pos_relations/{addressPosRelationId} | Update address POS relation |
| [**restAccountsAddressesPosRelationsGet()**](AccountApi.md#restAccountsAddressesPosRelationsGet) | **GET** /rest/accounts/addresses/pos_relations | List address POS relations |
| [**restAccountsAddressesPosRelationsPost()**](AccountApi.md#restAccountsAddressesPosRelationsPost) | **POST** /rest/accounts/addresses/pos_relations | Create address POS relation |
| [**restAccountsAddressesPost()**](AccountApi.md#restAccountsAddressesPost) | **POST** /rest/accounts/addresses | Create address |
| [**restAccountsAddressesRelationTypesGet()**](AccountApi.md#restAccountsAddressesRelationTypesGet) | **GET** /rest/accounts/addresses/relation_types | List address relation types |
| [**restAccountsAddressesRelationsTypesApplicationsApplicationLangGet()**](AccountApi.md#restAccountsAddressesRelationsTypesApplicationsApplicationLangGet) | **GET** /rest/accounts/addresses/relations/types/applications/{application}/{lang} | List address relation types |
| [**restAccountsAddressesWarehouseRelationsPost()**](AccountApi.md#restAccountsAddressesWarehouseRelationsPost) | **POST** /rest/accounts/addresses/warehouse_relations | Create address warehouse relation |
| [**restAccountsAddressesWarehouseRelationsRelationIdDelete()**](AccountApi.md#restAccountsAddressesWarehouseRelationsRelationIdDelete) | **DELETE** /rest/accounts/addresses/warehouse_relations/{relationId} | Delete address warehouse relation |
| [**restAccountsAddressesWarehouseRelationsRelationIdPut()**](AccountApi.md#restAccountsAddressesWarehouseRelationsRelationIdPut) | **PUT** /rest/accounts/addresses/warehouse_relations/{relationId} | Update address warehouse relation |
| [**restAccountsContactRelationsAccountContactRelationIdDelete()**](AccountApi.md#restAccountsContactRelationsAccountContactRelationIdDelete) | **DELETE** /rest/accounts/contact_relations/{accountContactRelationId} | Delete account contact relation |
| [**restAccountsContactRelationsAccountContactRelationIdGet()**](AccountApi.md#restAccountsContactRelationsAccountContactRelationIdGet) | **GET** /rest/accounts/contact_relations/{accountContactRelationId} | Get account contact relation |
| [**restAccountsContactsBanksContactBankIdDelete()**](AccountApi.md#restAccountsContactsBanksContactBankIdDelete) | **DELETE** /rest/accounts/contacts/banks/{contactBankId} | Delete bank account |
| [**restAccountsContactsBanksContactBankIdGet()**](AccountApi.md#restAccountsContactsBanksContactBankIdGet) | **GET** /rest/accounts/contacts/banks/{contactBankId} | Get bank account |
| [**restAccountsContactsBanksContactBankIdPut()**](AccountApi.md#restAccountsContactsBanksContactBankIdPut) | **PUT** /rest/accounts/contacts/banks/{contactBankId} | Update bank account |
| [**restAccountsContactsBanksPost()**](AccountApi.md#restAccountsContactsBanksPost) | **POST** /rest/accounts/contacts/banks | Create bank account |
| [**restAccountsContactsClassesContactClassIdGet()**](AccountApi.md#restAccountsContactsClassesContactClassIdGet) | **GET** /rest/accounts/contacts/classes/{contactClassId} | Get contact class |
| [**restAccountsContactsClassesGet()**](AccountApi.md#restAccountsContactsClassesGet) | **GET** /rest/accounts/contacts/classes | List contact classes |
| [**restAccountsContactsContactEventsContactEventIdDelete()**](AccountApi.md#restAccountsContactsContactEventsContactEventIdDelete) | **DELETE** /rest/accounts/contacts/contact_events/{contactEventId} | Delete contact event |
| [**restAccountsContactsContactEventsContactEventIdPut()**](AccountApi.md#restAccountsContactsContactEventsContactEventIdPut) | **PUT** /rest/accounts/contacts/contact_events/{contactEventId} | Update contact event |
| [**restAccountsContactsContactEventsGet()**](AccountApi.md#restAccountsContactsContactEventsGet) | **GET** /rest/accounts/contacts/contact_events | List contact events |
| [**restAccountsContactsContactEventsPost()**](AccountApi.md#restAccountsContactsContactEventsPost) | **POST** /rest/accounts/contacts/contact_events | Create contact event |
| [**restAccountsContactsContactEventsTypesPreviewGet()**](AccountApi.md#restAccountsContactsContactEventsTypesPreviewGet) | **GET** /rest/accounts/contacts/contact_events/types/preview | Get contact event types as a key/value array |
| [**restAccountsContactsContactIdAccessDataLoginUrlGet()**](AccountApi.md#restAccountsContactsContactIdAccessDataLoginUrlGet) | **GET** /rest/accounts/contacts/{contactId}/access_data/login_url | Get login URL |
| [**restAccountsContactsContactIdAccessDataNewPasswordPut()**](AccountApi.md#restAccountsContactsContactIdAccessDataNewPasswordPut) | **PUT** /rest/accounts/contacts/{contactId}/access_data/new_password | Send password link for contact |
| [**restAccountsContactsContactIdAccessDataSetPasswordPut()**](AccountApi.md#restAccountsContactsContactIdAccessDataSetPasswordPut) | **PUT** /rest/accounts/contacts/{contactId}/access_data/set_password | Update password for contact |
| [**restAccountsContactsContactIdAccessDataUnblockUserPut()**](AccountApi.md#restAccountsContactsContactIdAccessDataUnblockUserPut) | **PUT** /rest/accounts/contacts/{contactId}/access_data/unblock_user | Unblock contact |
| [**restAccountsContactsContactIdAccountsAccountIdDelete()**](AccountApi.md#restAccountsContactsContactIdAccountsAccountIdDelete) | **DELETE** /rest/accounts/contacts/{contactId}/accounts/{accountId} | Delete account of the contact |
| [**restAccountsContactsContactIdAccountsAccountIdGet()**](AccountApi.md#restAccountsContactsContactIdAccountsAccountIdGet) | **GET** /rest/accounts/contacts/{contactId}/accounts/{accountId} | Get account of the contact |
| [**restAccountsContactsContactIdAccountsAccountIdPut()**](AccountApi.md#restAccountsContactsContactIdAccountsAccountIdPut) | **PUT** /rest/accounts/contacts/{contactId}/accounts/{accountId} | Update account |
| [**restAccountsContactsContactIdAccountsPost()**](AccountApi.md#restAccountsContactsContactIdAccountsPost) | **POST** /rest/accounts/contacts/{contactId}/accounts | Create account for existing contact |
| [**restAccountsContactsContactIdAddressesAddressIdDelete()**](AccountApi.md#restAccountsContactsContactIdAddressesAddressIdDelete) | **DELETE** /rest/accounts/contacts/{contactId}/addresses/{addressId} | Delete address of the contact |
| [**restAccountsContactsContactIdAddressesAddressIdPut()**](AccountApi.md#restAccountsContactsContactIdAddressesAddressIdPut) | **PUT** /rest/accounts/contacts/{contactId}/addresses/{addressId} | Update address of the contact |
| [**restAccountsContactsContactIdAddressesAddressIdTypesAddressTypeIdPrimaryPut()**](AccountApi.md#restAccountsContactsContactIdAddressesAddressIdTypesAddressTypeIdPrimaryPut) | **PUT** /rest/accounts/contacts/{contactId}/addresses/{addressId}/types/{addressTypeId}/primary | Set contact address per address type as primary address |
| [**restAccountsContactsContactIdAddressesAddressIdTypesAddressTypeIdResetPrimaryPut()**](AccountApi.md#restAccountsContactsContactIdAddressesAddressIdTypesAddressTypeIdResetPrimaryPut) | **PUT** /rest/accounts/contacts/{contactId}/addresses/{addressId}/types/{addressTypeId}/reset_primary | Reset contact primary address |
| [**restAccountsContactsContactIdAddressesPost()**](AccountApi.md#restAccountsContactsContactIdAddressesPost) | **POST** /rest/accounts/contacts/{contactId}/addresses | Create address for existing contact |
| [**restAccountsContactsContactIdAddressesPrimaryGet()**](AccountApi.md#restAccountsContactsContactIdAddressesPrimaryGet) | **GET** /rest/accounts/contacts/{contactId}/addresses/primary | Get primary or last created addresses of contact |
| [**restAccountsContactsContactIdBanksGet()**](AccountApi.md#restAccountsContactsContactIdBanksGet) | **GET** /rest/accounts/contacts/{contactId}/banks | List bank accounts |
| [**restAccountsContactsContactIdContactEventsGet()**](AccountApi.md#restAccountsContactsContactIdContactEventsGet) | **GET** /rest/accounts/contacts/{contactId}/contact_events | List contact events by contact ID |
| [**restAccountsContactsContactIdDelete()**](AccountApi.md#restAccountsContactsContactIdDelete) | **DELETE** /rest/accounts/contacts/{contactId} | Delete contact |
| [**restAccountsContactsContactIdGet()**](AccountApi.md#restAccountsContactsContactIdGet) | **GET** /rest/accounts/contacts/{contactId} | Get contact |
| [**restAccountsContactsContactIdOptionsDelete()**](AccountApi.md#restAccountsContactsContactIdOptionsDelete) | **DELETE** /rest/accounts/contacts/{contactId}/options | Delete contact option |
| [**restAccountsContactsContactIdOptionsGet()**](AccountApi.md#restAccountsContactsContactIdOptionsGet) | **GET** /rest/accounts/contacts/{contactId}/options | List contact options |
| [**restAccountsContactsContactIdOptionsPost()**](AccountApi.md#restAccountsContactsContactIdOptionsPost) | **POST** /rest/accounts/contacts/{contactId}/options | Create contact option |
| [**restAccountsContactsContactIdOptionsPut()**](AccountApi.md#restAccountsContactsContactIdOptionsPut) | **PUT** /rest/accounts/contacts/{contactId}/options | Update contact option |
| [**restAccountsContactsContactIdOptionsValidateGet()**](AccountApi.md#restAccountsContactsContactIdOptionsValidateGet) | **GET** /rest/accounts/contacts/{contactId}/options/validate | Validate contact option by given value |
| [**restAccountsContactsContactIdPut()**](AccountApi.md#restAccountsContactsContactIdPut) | **PUT** /rest/accounts/contacts/{contactId} | Update contact |
| [**restAccountsContactsContactIdRelatedDataGet()**](AccountApi.md#restAccountsContactsContactIdRelatedDataGet) | **GET** /rest/accounts/contacts/{contactId}/related_data | List contact related data |
| [**restAccountsContactsContactIdVcardGet()**](AccountApi.md#restAccountsContactsContactIdVcardGet) | **GET** /rest/accounts/contacts/{contactId}/vcard | Get vcard filestream of contact |
| [**restAccountsContactsDepartmentsDepartmentIdDelete()**](AccountApi.md#restAccountsContactsDepartmentsDepartmentIdDelete) | **DELETE** /rest/accounts/contacts/departments/{departmentId} | Delete contact department |
| [**restAccountsContactsDepartmentsDepartmentIdGet()**](AccountApi.md#restAccountsContactsDepartmentsDepartmentIdGet) | **GET** /rest/accounts/contacts/departments/{departmentId} | Get contact department |
| [**restAccountsContactsDepartmentsDepartmentIdPut()**](AccountApi.md#restAccountsContactsDepartmentsDepartmentIdPut) | **PUT** /rest/accounts/contacts/departments/{departmentId} | Update contact department |
| [**restAccountsContactsDepartmentsGet()**](AccountApi.md#restAccountsContactsDepartmentsGet) | **GET** /rest/accounts/contacts/departments | List contact departments |
| [**restAccountsContactsDepartmentsPost()**](AccountApi.md#restAccountsContactsDepartmentsPost) | **POST** /rest/accounts/contacts/departments | Create contact department |
| [**restAccountsContactsGet()**](AccountApi.md#restAccountsContactsGet) | **GET** /rest/accounts/contacts | List contacts |
| [**restAccountsContactsGroupFunctionsGet()**](AccountApi.md#restAccountsContactsGroupFunctionsGet) | **GET** /rest/accounts/contacts/group_functions | List all group function related data |
| [**restAccountsContactsGroupFunctionsPost()**](AccountApi.md#restAccountsContactsGroupFunctionsPost) | **POST** /rest/accounts/contacts/group_functions | Apply selected group function options for given contact IDs |
| [**restAccountsContactsOptionSubTypesGet()**](AccountApi.md#restAccountsContactsOptionSubTypesGet) | **GET** /rest/accounts/contacts/option_sub_types | List contact option sub-types |
| [**restAccountsContactsOptionSubTypesOptionSubTypeIdDelete()**](AccountApi.md#restAccountsContactsOptionSubTypesOptionSubTypeIdDelete) | **DELETE** /rest/accounts/contacts/option_sub_types/{optionSubTypeId} | Delete contact option sub-type |
| [**restAccountsContactsOptionSubTypesOptionSubTypeIdGet()**](AccountApi.md#restAccountsContactsOptionSubTypesOptionSubTypeIdGet) | **GET** /rest/accounts/contacts/option_sub_types/{optionSubTypeId} | Get contact option sub-type |
| [**restAccountsContactsOptionSubTypesOptionSubTypeIdPut()**](AccountApi.md#restAccountsContactsOptionSubTypesOptionSubTypeIdPut) | **PUT** /rest/accounts/contacts/option_sub_types/{optionSubTypeId} | Update contact option sub-type |
| [**restAccountsContactsOptionSubTypesPost()**](AccountApi.md#restAccountsContactsOptionSubTypesPost) | **POST** /rest/accounts/contacts/option_sub_types | Create contact option sub-type |
| [**restAccountsContactsOptionTypesGet()**](AccountApi.md#restAccountsContactsOptionTypesGet) | **GET** /rest/accounts/contacts/option_types | List contact option types |
| [**restAccountsContactsOptionTypesOptionTypeIdDelete()**](AccountApi.md#restAccountsContactsOptionTypesOptionTypeIdDelete) | **DELETE** /rest/accounts/contacts/option_types/{optionTypeId} | Delete contact option type |
| [**restAccountsContactsOptionTypesOptionTypeIdGet()**](AccountApi.md#restAccountsContactsOptionTypesOptionTypeIdGet) | **GET** /rest/accounts/contacts/option_types/{optionTypeId} | Get contact option type |
| [**restAccountsContactsOptionTypesOptionTypeIdPut()**](AccountApi.md#restAccountsContactsOptionTypesOptionTypeIdPut) | **PUT** /rest/accounts/contacts/option_types/{optionTypeId} | Update contact option type |
| [**restAccountsContactsOptionTypesPost()**](AccountApi.md#restAccountsContactsOptionTypesPost) | **POST** /rest/accounts/contacts/option_types | Create contact option type |
| [**restAccountsContactsOptionsOptionIdDelete()**](AccountApi.md#restAccountsContactsOptionsOptionIdDelete) | **DELETE** /rest/accounts/contacts/options/{optionId} | Delete contact option |
| [**restAccountsContactsOptionsOptionIdGet()**](AccountApi.md#restAccountsContactsOptionsOptionIdGet) | **GET** /rest/accounts/contacts/options/{optionId} | Get contact option |
| [**restAccountsContactsOptionsOptionIdPut()**](AccountApi.md#restAccountsContactsOptionsOptionIdPut) | **PUT** /rest/accounts/contacts/options/{optionId} | Update contact option |
| [**restAccountsContactsPositionsGet()**](AccountApi.md#restAccountsContactsPositionsGet) | **GET** /rest/accounts/contacts/positions | List contact positions |
| [**restAccountsContactsPositionsPositionIdDelete()**](AccountApi.md#restAccountsContactsPositionsPositionIdDelete) | **DELETE** /rest/accounts/contacts/positions/{positionId} | Delete contact position |
| [**restAccountsContactsPositionsPositionIdGet()**](AccountApi.md#restAccountsContactsPositionsPositionIdGet) | **GET** /rest/accounts/contacts/positions/{positionId} | Get contact position |
| [**restAccountsContactsPositionsPositionIdPut()**](AccountApi.md#restAccountsContactsPositionsPositionIdPut) | **PUT** /rest/accounts/contacts/positions/{positionId} | Update contact position |
| [**restAccountsContactsPositionsPost()**](AccountApi.md#restAccountsContactsPositionsPost) | **POST** /rest/accounts/contacts/positions | Create contact position |
| [**restAccountsContactsPost()**](AccountApi.md#restAccountsContactsPost) | **POST** /rest/accounts/contacts | Create contact |
| [**restAccountsContactsTypesGet()**](AccountApi.md#restAccountsContactsTypesGet) | **GET** /rest/accounts/contacts/types | List contact types |
| [**restAccountsContactsTypesPost()**](AccountApi.md#restAccountsContactsTypesPost) | **POST** /rest/accounts/contacts/types | Create contact type |
| [**restAccountsContactsTypesTypeIdDelete()**](AccountApi.md#restAccountsContactsTypesTypeIdDelete) | **DELETE** /rest/accounts/contacts/types/{typeId} | Delete contact type |
| [**restAccountsContactsTypesTypeIdGet()**](AccountApi.md#restAccountsContactsTypesTypeIdGet) | **GET** /rest/accounts/contacts/types/{typeId} | Get contact type |
| [**restAccountsContactsTypesTypeIdPut()**](AccountApi.md#restAccountsContactsTypesTypeIdPut) | **PUT** /rest/accounts/contacts/types/{typeId} | Update contact type |
| [**restAccountsGet()**](AccountApi.md#restAccountsGet) | **GET** /rest/accounts | List accounts |
| [**restAccountsPost()**](AccountApi.md#restAccountsPost) | **POST** /rest/accounts | Create account |
| [**restOrdersAddressesPost()**](AccountApi.md#restOrdersAddressesPost) | **POST** /rest/orders/addresses | Create address for existing order |
| [**restStockmanagementWarehousesAddressesPost()**](AccountApi.md#restStockmanagementWarehousesAddressesPost) | **POST** /rest/stockmanagement/warehouses/addresses | Create address for existing warehouse |


## `restAccountLoginPost()`

```php
restAccountLoginPost($_rest_account_login): \ck\Model\TokenData
```

Login

Logs in to the online store with front end user credentials. The login call returns a JSON object that contains information, such as the access token and the refresh token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_rest_account_login = new \ck\Model\RestAccountLoginPostRequest(); // \ck\Model\RestAccountLoginPostRequest

try {
    $result = $apiInstance->restAccountLoginPost($_rest_account_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountLoginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_account_login** | [**\ck\Model\RestAccountLoginPostRequest**](../Model/RestAccountLoginPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\TokenData**](../Model/TokenData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountLoginRefreshPost()`

```php
restAccountLoginRefreshPost()
```

Refresh

Refreshes the access token using the refresh token. The refresh token is part of the login call response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->restAccountLoginRefreshPost();
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountLoginRefreshPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountLogoutPost()`

```php
restAccountLogoutPost()
```

Logout

Logs out the front end user from the online store. The access token expires.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->restAccountLogoutPost();
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountLogoutPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAccountIdContactsGet()`

```php
restAccountsAccountIdContactsGet($account_id): \ck\Model\Contact[]
```

List contacts

Lists all contacts of the account. The ID of the account must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account

try {
    $result = $apiInstance->restAccountsAccountIdContactsGet($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAccountIdContactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**| The ID of the account | |

### Return type

[**\ck\Model\Contact[]**](../Model/Contact.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAccountIdDelete()`

```php
restAccountsAccountIdDelete($account_id)
```

Delete account

Deletes an account. The ID of the account must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account

try {
    $apiInstance->restAccountsAccountIdDelete($account_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAccountIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**| The ID of the account | |

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

## `restAccountsAccountIdGet()`

```php
restAccountsAccountIdGet($account_id): \ck\Model\Account
```

Get account

Gets an account. The ID of the account must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account

try {
    $result = $apiInstance->restAccountsAccountIdGet($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**| The ID of the account | |

### Return type

[**\ck\Model\Account**](../Model/Account.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAccountIdPut()`

```php
restAccountsAccountIdPut($account_id, $_rest_accounts_account_id): \ck\Model\Account
```

Update account

Updates an account. The ID of the account must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account
$_rest_accounts_account_id = new \ck\Model\RestAccountsPostRequest(); // \ck\Model\RestAccountsPostRequest

try {
    $result = $apiInstance->restAccountsAccountIdPut($account_id, $_rest_accounts_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAccountIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **int**| The ID of the account | |
| **_rest_accounts_account_id** | [**\ck\Model\RestAccountsPostRequest**](../Model/RestAccountsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\Account**](../Model/Account.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesAddressIdDelete()`

```php
restAccountsAddressesAddressIdDelete($address_id)
```

Delete address

Deletes an address. The ID of the address must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 56; // int | The ID of the address

try {
    $apiInstance->restAccountsAddressesAddressIdDelete($address_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesAddressIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **int**| The ID of the address | |

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

## `restAccountsAddressesAddressIdGet()`

```php
restAccountsAddressesAddressIdGet($address_id): \ck\Model\Address
```

Get address

Gets an address. The ID of the address must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 56; // int | The ID of the address

try {
    $result = $apiInstance->restAccountsAddressesAddressIdGet($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesAddressIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **int**| The ID of the address | |

### Return type

[**\ck\Model\Address**](../Model/Address.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesAddressIdOptionsDelete()`

```php
restAccountsAddressesAddressIdOptionsDelete($address_id)
```

Delete address option by addressId

Deletes an address option. The ID of the address must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 56; // int | The ID of the address

try {
    $apiInstance->restAccountsAddressesAddressIdOptionsDelete($address_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesAddressIdOptionsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **int**| The ID of the address | |

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

## `restAccountsAddressesAddressIdOptionsGet()`

```php
restAccountsAddressesAddressIdOptionsGet($address_id): \ck\Model\AddressOption[]
```

List address options

Lists address options. The ID of the address must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 56; // int | The ID of the address

try {
    $result = $apiInstance->restAccountsAddressesAddressIdOptionsGet($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesAddressIdOptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **int**| The ID of the address | |

### Return type

[**\ck\Model\AddressOption[]**](../Model/AddressOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesAddressIdOptionsPost()`

```php
restAccountsAddressesAddressIdOptionsPost($address_id, $_rest_accounts_addresses_address_id_options): \ck\Model\AddressOption[]
```

Create address option

Creates an address option. The ID of the address must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 56; // int | The ID of the address
$_rest_accounts_addresses_address_id_options = new \ck\Model\RestAccountsAddressesAddressIdOptionsPostRequest(); // \ck\Model\RestAccountsAddressesAddressIdOptionsPostRequest

try {
    $result = $apiInstance->restAccountsAddressesAddressIdOptionsPost($address_id, $_rest_accounts_addresses_address_id_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesAddressIdOptionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **int**| The ID of the address | |
| **_rest_accounts_addresses_address_id_options** | [**\ck\Model\RestAccountsAddressesAddressIdOptionsPostRequest**](../Model/RestAccountsAddressesAddressIdOptionsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\AddressOption[]**](../Model/AddressOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesAddressIdOptionsPut()`

```php
restAccountsAddressesAddressIdOptionsPut($address_id): \ck\Model\AddressOption[]
```

Update address option by addressId

Updates an address option. The ID of the address must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 56; // int | The ID of the address

try {
    $result = $apiInstance->restAccountsAddressesAddressIdOptionsPut($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesAddressIdOptionsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **int**| The ID of the address | |

### Return type

[**\ck\Model\AddressOption[]**](../Model/AddressOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesAddressIdPut()`

```php
restAccountsAddressesAddressIdPut($address_id, $_rest_accounts_addresses_address_id): \ck\Model\Address
```

Update address

Updates an address. The ID of the address must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 56; // int | The ID of the address
$_rest_accounts_addresses_address_id = new \ck\Model\RestAccountsAddressesPostRequest(); // \ck\Model\RestAccountsAddressesPostRequest

try {
    $result = $apiInstance->restAccountsAddressesAddressIdPut($address_id, $_rest_accounts_addresses_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesAddressIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **int**| The ID of the address | |
| **_rest_accounts_addresses_address_id** | [**\ck\Model\RestAccountsAddressesPostRequest**](../Model/RestAccountsAddressesPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\Address**](../Model/Address.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesAddressIdRelatedDataGet()`

```php
restAccountsAddressesAddressIdRelatedDataGet($address_id, $order_ids): \ck\Model\Address
```

Get address data by addressId

Gets the address data by the address ID. The ID of the address must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 56; // int | The ID of the address
$order_ids = 'order_ids_example'; // string | The ID of the orders

try {
    $result = $apiInstance->restAccountsAddressesAddressIdRelatedDataGet($address_id, $order_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesAddressIdRelatedDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **int**| The ID of the address | |
| **order_ids** | **string**| The ID of the orders | [optional] |

### Return type

[**\ck\Model\Address**](../Model/Address.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesContactRelationsAddressContactRelationIdDelete()`

```php
restAccountsAddressesContactRelationsAddressContactRelationIdDelete($address_contact_relation_id)
```

Delete address contact relation

Deletes an address contact relation. The ID of the address contact relation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_contact_relation_id = 56; // int | The ID of the address contact relation

try {
    $apiInstance->restAccountsAddressesContactRelationsAddressContactRelationIdDelete($address_contact_relation_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesContactRelationsAddressContactRelationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_contact_relation_id** | **int**| The ID of the address contact relation | |

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

## `restAccountsAddressesContactRelationsAddressContactRelationIdGet()`

```php
restAccountsAddressesContactRelationsAddressContactRelationIdGet($address_contact_relation_id): \ck\Model\AddressContactRelation
```

Get address contact relation

Gets an address contact relation. The ID of the address contact relation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_contact_relation_id = 56; // int | The ID of the address contact relation

try {
    $result = $apiInstance->restAccountsAddressesContactRelationsAddressContactRelationIdGet($address_contact_relation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesContactRelationsAddressContactRelationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_contact_relation_id** | **int**| The ID of the address contact relation | |

### Return type

[**\ck\Model\AddressContactRelation**](../Model/AddressContactRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesContactRelationsGet()`

```php
restAccountsAddressesContactRelationsGet($id, $contact_id, $type_id, $address_id, $is_primary, $page, $items_per_page, $with): \ck\Model\RestAccountsAddressesContactRelationsGet200Response
```

List address contact relations

Lists the address contact relations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Filter that restricts the search result to address contact relations with a specific ID
$contact_id = 56; // int | Filter that restricts the search result to contacts with a specific ID
$type_id = 56; // int | Filter that restricts the search result to address types with a specific ID
$address_id = 56; // int | Filter that restricts the search result to addresses with a specific ID
$is_primary = True; // bool | Filter that restricts the search result depending on the flag used. If the flag isPrimary=true is set, the filter restricts the search result to addresses that are primary addresses. If the flag isPrimary=false is set, the filter restricts the search results to addresses that are not primary addresses. If no flag is set, both primary and non-primary addresses are listed.
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The number of items to list per page
$with = 'with_example'; // string | Includes the specified address contact relation information in the results. The following parameters are available: contact and address. More than one parameter should be separated by commas.

try {
    $result = $apiInstance->restAccountsAddressesContactRelationsGet($id, $contact_id, $type_id, $address_id, $is_primary, $page, $items_per_page, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesContactRelationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Filter that restricts the search result to address contact relations with a specific ID | [optional] |
| **contact_id** | **int**| Filter that restricts the search result to contacts with a specific ID | [optional] |
| **type_id** | **int**| Filter that restricts the search result to address types with a specific ID | [optional] |
| **address_id** | **int**| Filter that restricts the search result to addresses with a specific ID | [optional] |
| **is_primary** | **bool**| Filter that restricts the search result depending on the flag used. If the flag isPrimary&#x3D;true is set, the filter restricts the search result to addresses that are primary addresses. If the flag isPrimary&#x3D;false is set, the filter restricts the search results to addresses that are not primary addresses. If no flag is set, both primary and non-primary addresses are listed. | [optional] |
| **page** | **int**| The page of results to search for | [optional] |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **with** | **string**| Includes the specified address contact relation information in the results. The following parameters are available: contact and address. More than one parameter should be separated by commas. | [optional] |

### Return type

[**\ck\Model\RestAccountsAddressesContactRelationsGet200Response**](../Model/RestAccountsAddressesContactRelationsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesContactRelationsPost()`

```php
restAccountsAddressesContactRelationsPost($_rest_accounts_addresses_contact_relations): \ck\Model\AddressContactRelation[]
```

Create address contact relations

Creates an address contact relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_accounts_addresses_contact_relations = new \ck\Model\RestAccountsAddressesContactRelationsPostRequest(); // \ck\Model\RestAccountsAddressesContactRelationsPostRequest

try {
    $result = $apiInstance->restAccountsAddressesContactRelationsPost($_rest_accounts_addresses_contact_relations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesContactRelationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_accounts_addresses_contact_relations** | [**\ck\Model\RestAccountsAddressesContactRelationsPostRequest**](../Model/RestAccountsAddressesContactRelationsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\AddressContactRelation[]**](../Model/AddressContactRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesContactRelationsPut()`

```php
restAccountsAddressesContactRelationsPut($_rest_accounts_addresses_contact_relations): \ck\Model\AddressContactRelation[]
```

Update address contact relations

Updates an address contact relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_accounts_addresses_contact_relations = new \ck\Model\RestAccountsAddressesContactRelationsPutRequest(); // \ck\Model\RestAccountsAddressesContactRelationsPutRequest

try {
    $result = $apiInstance->restAccountsAddressesContactRelationsPut($_rest_accounts_addresses_contact_relations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesContactRelationsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_accounts_addresses_contact_relations** | [**\ck\Model\RestAccountsAddressesContactRelationsPutRequest**](../Model/RestAccountsAddressesContactRelationsPutRequest.md)|  | [optional] |

### Return type

[**\ck\Model\AddressContactRelation[]**](../Model/AddressContactRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesGet()`

```php
restAccountsAddressesGet($updated_to, $updated_from, $created_to, $created_from, $with, $page, $items_per_page): \ck\Model\Address
```

Get all available addresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_to = 'updated_to_example'; // string | Filter that restricts the search result to addresses that were updated before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
$updated_from = 'updated_from_example'; // string | Filter that restricts the search result to addresses that were updated after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
$created_to = 'created_to_example'; // string | Filter that restricts the search result to addresses that were created before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
$created_from = 'created_from_example'; // string | Filter that restricts the search result to addresses that were created after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
$with = 'with_example'; // string | Includes the specified address information in the results. The following parameters are available: contactRelations, orderRelations. More than one parameter should be separated by commas.
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The number of items to list per page

try {
    $result = $apiInstance->restAccountsAddressesGet($updated_to, $updated_from, $created_to, $created_from, $with, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updated_to** | **string**| Filter that restricts the search result to addresses that were updated before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy. | [optional] |
| **updated_from** | **string**| Filter that restricts the search result to addresses that were updated after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy. | [optional] |
| **created_to** | **string**| Filter that restricts the search result to addresses that were created before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy. | [optional] |
| **created_from** | **string**| Filter that restricts the search result to addresses that were created after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy. | [optional] |
| **with** | **string**| Includes the specified address information in the results. The following parameters are available: contactRelations, orderRelations. More than one parameter should be separated by commas. | [optional] |
| **page** | **int**| The page of results to search for | [optional] |
| **items_per_page** | **int**| The number of items to list per page | [optional] |

### Return type

[**\ck\Model\Address**](../Model/Address.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesOptionTypesGet()`

```php
restAccountsAddressesOptionTypesGet(): \ck\Model\AddressOptionType[]
```

List address option types

Lists the address option types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsAddressesOptionTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesOptionTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\AddressOptionType[]**](../Model/AddressOptionType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesOptionTypesOptionTypeIdDelete()`

```php
restAccountsAddressesOptionTypesOptionTypeIdDelete($option_type_id)
```

Delete address option type

Deletes an address option type. The ID of the option type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_type_id = 56; // int | The ID of the address option type

try {
    $apiInstance->restAccountsAddressesOptionTypesOptionTypeIdDelete($option_type_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesOptionTypesOptionTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_type_id** | **int**| The ID of the address option type | |

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

## `restAccountsAddressesOptionTypesOptionTypeIdGet()`

```php
restAccountsAddressesOptionTypesOptionTypeIdGet($option_type_id): \ck\Model\AddressOptionType
```

Get address option type

Gets an address option type. The ID of the address option type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_type_id = 56; // int | The ID of the address option type

try {
    $result = $apiInstance->restAccountsAddressesOptionTypesOptionTypeIdGet($option_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesOptionTypesOptionTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_type_id** | **int**| The ID of the address option type | |

### Return type

[**\ck\Model\AddressOptionType**](../Model/AddressOptionType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesOptionTypesOptionTypeIdPut()`

```php
restAccountsAddressesOptionTypesOptionTypeIdPut($option_type_id, $_rest_accounts_addresses_option_types_option_type_id): \ck\Model\AddressOptionType
```

Update address option type

Updates an address option type. The ID of the option type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_type_id = 56; // int | The ID of the address option type
$_rest_accounts_addresses_option_types_option_type_id = new \ck\Model\RestAccountsAddressesOptionTypesPostRequest(); // \ck\Model\RestAccountsAddressesOptionTypesPostRequest

try {
    $result = $apiInstance->restAccountsAddressesOptionTypesOptionTypeIdPut($option_type_id, $_rest_accounts_addresses_option_types_option_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesOptionTypesOptionTypeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_type_id** | **int**| The ID of the address option type | |
| **_rest_accounts_addresses_option_types_option_type_id** | [**\ck\Model\RestAccountsAddressesOptionTypesPostRequest**](../Model/RestAccountsAddressesOptionTypesPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\AddressOptionType**](../Model/AddressOptionType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesOptionTypesPost()`

```php
restAccountsAddressesOptionTypesPost($_rest_accounts_addresses_option_types): \ck\Model\AddressOptionType
```

Create address option type

Creates an address option type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_accounts_addresses_option_types = new \ck\Model\RestAccountsAddressesOptionTypesPostRequest(); // \ck\Model\RestAccountsAddressesOptionTypesPostRequest

try {
    $result = $apiInstance->restAccountsAddressesOptionTypesPost($_rest_accounts_addresses_option_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesOptionTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_accounts_addresses_option_types** | [**\ck\Model\RestAccountsAddressesOptionTypesPostRequest**](../Model/RestAccountsAddressesOptionTypesPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\AddressOptionType**](../Model/AddressOptionType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesOptionsOptionIdDelete()`

```php
restAccountsAddressesOptionsOptionIdDelete($option_id)
```

Delete address option by option ID

Deletes an address option. The ID of the option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_id = 56; // int | The ID of the address option

try {
    $apiInstance->restAccountsAddressesOptionsOptionIdDelete($option_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesOptionsOptionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_id** | **int**| The ID of the address option | |

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

## `restAccountsAddressesOptionsOptionIdGet()`

```php
restAccountsAddressesOptionsOptionIdGet($option_id): \ck\Model\AddressOption
```

Get address option

Gets an address option. The ID of the option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_id = 56; // int | The ID of the address option

try {
    $result = $apiInstance->restAccountsAddressesOptionsOptionIdGet($option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesOptionsOptionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_id** | **int**| The ID of the address option | |

### Return type

[**\ck\Model\AddressOption**](../Model/AddressOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesOptionsOptionIdPut()`

```php
restAccountsAddressesOptionsOptionIdPut($option_id): \ck\Model\AddressOption
```

Update address option

Updates an address option. The ID of the option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_id = 56; // int | The ID of the address option

try {
    $result = $apiInstance->restAccountsAddressesOptionsOptionIdPut($option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesOptionsOptionIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_id** | **int**| The ID of the address option | |

### Return type

[**\ck\Model\AddressOption**](../Model/AddressOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesPosRelationsAddressPosRelationIdDelete()`

```php
restAccountsAddressesPosRelationsAddressPosRelationIdDelete($address_pos_relation_id)
```

Delete address POS relation

Deletes an address POS relation. The ID of the address POS relation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_pos_relation_id = 56; // int | The ID of the address POS relation

try {
    $apiInstance->restAccountsAddressesPosRelationsAddressPosRelationIdDelete($address_pos_relation_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesPosRelationsAddressPosRelationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_pos_relation_id** | **int**| The ID of the address POS relation | |

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

## `restAccountsAddressesPosRelationsAddressPosRelationIdGet()`

```php
restAccountsAddressesPosRelationsAddressPosRelationIdGet($address_pos_relation_id): \ck\Model\AddressPosRelation
```

Get address POS relation

Gets an address POS relation. The ID of the address POS relation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_pos_relation_id = 56; // int | The ID of the address POS relation

try {
    $result = $apiInstance->restAccountsAddressesPosRelationsAddressPosRelationIdGet($address_pos_relation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesPosRelationsAddressPosRelationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_pos_relation_id** | **int**| The ID of the address POS relation | |

### Return type

[**\ck\Model\AddressPosRelation**](../Model/AddressPosRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesPosRelationsAddressPosRelationIdPut()`

```php
restAccountsAddressesPosRelationsAddressPosRelationIdPut($address_pos_relation_id): \ck\Model\AddressPosRelation
```

Update address POS relation

Updates an address POS relation. The ID of the address POS relation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_pos_relation_id = 56; // int | The ID of the address POS relation

try {
    $result = $apiInstance->restAccountsAddressesPosRelationsAddressPosRelationIdPut($address_pos_relation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesPosRelationsAddressPosRelationIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_pos_relation_id** | **int**| The ID of the address POS relation | |

### Return type

[**\ck\Model\AddressPosRelation**](../Model/AddressPosRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesPosRelationsGet()`

```php
restAccountsAddressesPosRelationsGet($page, $items_per_page, $with): \ck\Model\RestAccountsAddressesPosRelationsGet200Response
```

List address POS relations

Lists the address POS relations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | page
$items_per_page = 56; // int | items per page
$with = 'with_example'; // string | Includes the specified address pos relation information in the results. The following parameters are available: address and type. More than one parameter should be separated by commas.

try {
    $result = $apiInstance->restAccountsAddressesPosRelationsGet($page, $items_per_page, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesPosRelationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| page | [optional] |
| **items_per_page** | **int**| items per page | [optional] |
| **with** | **string**| Includes the specified address pos relation information in the results. The following parameters are available: address and type. More than one parameter should be separated by commas. | [optional] |

### Return type

[**\ck\Model\RestAccountsAddressesPosRelationsGet200Response**](../Model/RestAccountsAddressesPosRelationsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesPosRelationsPost()`

```php
restAccountsAddressesPosRelationsPost(): \ck\Model\AddressPosRelation
```

Create address POS relation

Creates an address POS relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsAddressesPosRelationsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesPosRelationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\AddressPosRelation**](../Model/AddressPosRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesPost()`

```php
restAccountsAddressesPost($_rest_accounts_addresses): \ck\Model\Address
```

Create address

Creates an address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_accounts_addresses = new \ck\Model\RestAccountsAddressesPostRequest(); // \ck\Model\RestAccountsAddressesPostRequest

try {
    $result = $apiInstance->restAccountsAddressesPost($_rest_accounts_addresses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_accounts_addresses** | [**\ck\Model\RestAccountsAddressesPostRequest**](../Model/RestAccountsAddressesPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\Address**](../Model/Address.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesRelationTypesGet()`

```php
restAccountsAddressesRelationTypesGet(): \ck\Model\AddressRelationType[]
```

List address relation types

Lists the address relation types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsAddressesRelationTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesRelationTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\AddressRelationType[]**](../Model/AddressRelationType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesRelationsTypesApplicationsApplicationLangGet()`

```php
restAccountsAddressesRelationsTypesApplicationsApplicationLangGet($application, $lang): object
```

List address relation types

Lists address relation types. The application and the language must be specified.  <br>Possible applications: <ul> <li>contact</li> <li>order</li> <li>warehouse</li> <li>pos</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application = 'application_example'; // string | The application type
$lang = 'lang_example'; // string | The language as ISO 639-1 code (e.g. `en` for English)

try {
    $result = $apiInstance->restAccountsAddressesRelationsTypesApplicationsApplicationLangGet($application, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesRelationsTypesApplicationsApplicationLangGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application** | **string**| The application type | |
| **lang** | **string**| The language as ISO 639-1 code (e.g. &#x60;en&#x60; for English) | |

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

## `restAccountsAddressesWarehouseRelationsPost()`

```php
restAccountsAddressesWarehouseRelationsPost(): \ck\Model\AddressWarehouseRelation
```

Create address warehouse relation

Creates an address warehouse relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsAddressesWarehouseRelationsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesWarehouseRelationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\AddressWarehouseRelation**](../Model/AddressWarehouseRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsAddressesWarehouseRelationsRelationIdDelete()`

```php
restAccountsAddressesWarehouseRelationsRelationIdDelete($relation_id)
```

Delete address warehouse relation

Deletes an address warehouse relation. The ID of the relation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_id = 56; // int | The ID of the address warehouse relation

try {
    $apiInstance->restAccountsAddressesWarehouseRelationsRelationIdDelete($relation_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesWarehouseRelationsRelationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_id** | **int**| The ID of the address warehouse relation | |

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

## `restAccountsAddressesWarehouseRelationsRelationIdPut()`

```php
restAccountsAddressesWarehouseRelationsRelationIdPut($relation_id): \ck\Model\AddressWarehouseRelation
```

Update address warehouse relation

Updates an address warehouse relation. The ID of the relation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_id = 56; // int | The ID of the address warehouse relation

try {
    $result = $apiInstance->restAccountsAddressesWarehouseRelationsRelationIdPut($relation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsAddressesWarehouseRelationsRelationIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relation_id** | **int**| The ID of the address warehouse relation | |

### Return type

[**\ck\Model\AddressWarehouseRelation**](../Model/AddressWarehouseRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactRelationsAccountContactRelationIdDelete()`

```php
restAccountsContactRelationsAccountContactRelationIdDelete($account_contact_relation_id)
```

Delete account contact relation

Deletes an account contact relation. The ID of the account contact relation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_contact_relation_id = 56; // int | The ID of the account contact relation

try {
    $apiInstance->restAccountsContactRelationsAccountContactRelationIdDelete($account_contact_relation_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactRelationsAccountContactRelationIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_contact_relation_id** | **int**| The ID of the account contact relation | |

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

## `restAccountsContactRelationsAccountContactRelationIdGet()`

```php
restAccountsContactRelationsAccountContactRelationIdGet($account_contact_relation_id): \ck\Model\AccountContactRelation
```

Get account contact relation

Gets an account contact relation. The ID of the account contact relation must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_contact_relation_id = 56; // int | The ID of the account contact relation

try {
    $result = $apiInstance->restAccountsContactRelationsAccountContactRelationIdGet($account_contact_relation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactRelationsAccountContactRelationIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_contact_relation_id** | **int**| The ID of the account contact relation | |

### Return type

[**\ck\Model\AccountContactRelation**](../Model/AccountContactRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsBanksContactBankIdDelete()`

```php
restAccountsContactsBanksContactBankIdDelete($contact_bank_id)
```

Delete bank account

Deletes a bank account. The ID of the bank account must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_bank_id = 56; // int | The ID of the bank account

try {
    $apiInstance->restAccountsContactsBanksContactBankIdDelete($contact_bank_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsBanksContactBankIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_bank_id** | **int**| The ID of the bank account | |

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

## `restAccountsContactsBanksContactBankIdGet()`

```php
restAccountsContactsBanksContactBankIdGet($contact_bank_id): \ck\Model\ContactBank
```

Get bank account

Gets a bank account of the contact. The ID of the bank account must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_bank_id = 56; // int | The ID of the bank account

try {
    $result = $apiInstance->restAccountsContactsBanksContactBankIdGet($contact_bank_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsBanksContactBankIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_bank_id** | **int**| The ID of the bank account | |

### Return type

[**\ck\Model\ContactBank**](../Model/ContactBank.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsBanksContactBankIdPut()`

```php
restAccountsContactsBanksContactBankIdPut($contact_bank_id, $_rest_accounts_contacts_banks_contact_bank_id): \ck\Model\ContactBank
```

Update bank account

Updates a bank account. The ID of the bank account must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_bank_id = 56; // int | The ID of the bank account
$_rest_accounts_contacts_banks_contact_bank_id = new \ck\Model\RestAccountsContactsBanksPostRequest(); // \ck\Model\RestAccountsContactsBanksPostRequest

try {
    $result = $apiInstance->restAccountsContactsBanksContactBankIdPut($contact_bank_id, $_rest_accounts_contacts_banks_contact_bank_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsBanksContactBankIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_bank_id** | **int**| The ID of the bank account | |
| **_rest_accounts_contacts_banks_contact_bank_id** | [**\ck\Model\RestAccountsContactsBanksPostRequest**](../Model/RestAccountsContactsBanksPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\ContactBank**](../Model/ContactBank.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsBanksPost()`

```php
restAccountsContactsBanksPost($_rest_accounts_contacts_banks): \ck\Model\ContactBank
```

Create bank account

Creates a bank account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_accounts_contacts_banks = new \ck\Model\RestAccountsContactsBanksPostRequest(); // \ck\Model\RestAccountsContactsBanksPostRequest

try {
    $result = $apiInstance->restAccountsContactsBanksPost($_rest_accounts_contacts_banks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsBanksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_accounts_contacts_banks** | [**\ck\Model\RestAccountsContactsBanksPostRequest**](../Model/RestAccountsContactsBanksPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\ContactBank**](../Model/ContactBank.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsClassesContactClassIdGet()`

```php
restAccountsContactsClassesContactClassIdGet($contact_class_id): object
```

Get contact class

Gets a contact class. The ID of the contact class must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_class_id = 56; // int | The ID of the contact class

try {
    $result = $apiInstance->restAccountsContactsClassesContactClassIdGet($contact_class_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsClassesContactClassIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_class_id** | **int**| The ID of the contact class | |

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

## `restAccountsContactsClassesGet()`

```php
restAccountsContactsClassesGet(): object[]
```

List contact classes

Lists the contact classes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsContactsClassesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsClassesGet: ', $e->getMessage(), PHP_EOL;
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

## `restAccountsContactsContactEventsContactEventIdDelete()`

```php
restAccountsContactsContactEventsContactEventIdDelete($contact_event_id)
```

Delete contact event

Deletes a contact event. The ID of the contact event must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_event_id = 56; // int | The ID of the contact event

try {
    $apiInstance->restAccountsContactsContactEventsContactEventIdDelete($contact_event_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactEventsContactEventIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_event_id** | **int**| The ID of the contact event | |

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

## `restAccountsContactsContactEventsContactEventIdPut()`

```php
restAccountsContactsContactEventsContactEventIdPut($contact_event_id, $_rest_accounts_contacts_contact_events_contact_event_id): \ck\Model\ContactEvent
```

Update contact event

Updates a contact event. The ID of the contact event must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_event_id = 56; // int | The ID of the contact event
$_rest_accounts_contacts_contact_events_contact_event_id = new \ck\Model\RestAccountsContactsContactEventsPostRequest(); // \ck\Model\RestAccountsContactsContactEventsPostRequest

try {
    $result = $apiInstance->restAccountsContactsContactEventsContactEventIdPut($contact_event_id, $_rest_accounts_contacts_contact_events_contact_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactEventsContactEventIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_event_id** | **int**| The ID of the contact event | |
| **_rest_accounts_contacts_contact_events_contact_event_id** | [**\ck\Model\RestAccountsContactsContactEventsPostRequest**](../Model/RestAccountsContactsContactEventsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\ContactEvent**](../Model/ContactEvent.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactEventsGet()`

```php
restAccountsContactsContactEventsGet($page, $items_per_page): \ck\Model\RestAccountsContactsContactEventsGet200Response
```

List contact events

Lists contact events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The number of items to list per page

try {
    $result = $apiInstance->restAccountsContactsContactEventsGet($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactEventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page of results to search for | [optional] |
| **items_per_page** | **int**| The number of items to list per page | [optional] |

### Return type

[**\ck\Model\RestAccountsContactsContactEventsGet200Response**](../Model/RestAccountsContactsContactEventsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactEventsPost()`

```php
restAccountsContactsContactEventsPost($page, $items_per_page, $_rest_accounts_contacts_contact_events): \ck\Model\ContactEvent
```

Create contact event

Creates a contact event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The number of items to list per page
$_rest_accounts_contacts_contact_events = new \ck\Model\RestAccountsContactsContactEventsPostRequest(); // \ck\Model\RestAccountsContactsContactEventsPostRequest

try {
    $result = $apiInstance->restAccountsContactsContactEventsPost($page, $items_per_page, $_rest_accounts_contacts_contact_events);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactEventsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page of results to search for | [optional] |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **_rest_accounts_contacts_contact_events** | [**\ck\Model\RestAccountsContactsContactEventsPostRequest**](../Model/RestAccountsContactsContactEventsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\ContactEvent**](../Model/ContactEvent.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactEventsTypesPreviewGet()`

```php
restAccountsContactsContactEventsTypesPreviewGet(): object[]
```

Get contact event types as a key/value array

Get the contact event types as a key/value array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsContactsContactEventsTypesPreviewGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactEventsTypesPreviewGet: ', $e->getMessage(), PHP_EOL;
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

## `restAccountsContactsContactIdAccessDataLoginUrlGet()`

```php
restAccountsContactsContactIdAccessDataLoginUrlGet($contact_id)
```

Get login URL

Gets the URL to login as the given contact. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact

try {
    $apiInstance->restAccountsContactsContactIdAccessDataLoginUrlGet($contact_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdAccessDataLoginUrlGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |

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

## `restAccountsContactsContactIdAccessDataNewPasswordPut()`

```php
restAccountsContactsContactIdAccessDataNewPasswordPut($password, $contact_id): object
```

Send password link for contact

Sends an email to a contact with a link to change the password. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$password = 'password_example'; // string | The new password
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdAccessDataNewPasswordPut($password, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdAccessDataNewPasswordPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **password** | **string**| The new password | |
| **contact_id** | **int**| The ID of the contact | |

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

## `restAccountsContactsContactIdAccessDataSetPasswordPut()`

```php
restAccountsContactsContactIdAccessDataSetPasswordPut($password, $contact_id): object
```

Update password for contact

Updates the password for a contact. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$password = 'password_example'; // string | The new password
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdAccessDataSetPasswordPut($password, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdAccessDataSetPasswordPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **password** | **string**| The new password | |
| **contact_id** | **int**| The ID of the contact | |

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

## `restAccountsContactsContactIdAccessDataUnblockUserPut()`

```php
restAccountsContactsContactIdAccessDataUnblockUserPut($contact_id): object
```

Unblock contact

Unblocks a contact to allow this contact to log in again. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdAccessDataUnblockUserPut($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdAccessDataUnblockUserPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |

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

## `restAccountsContactsContactIdAccountsAccountIdDelete()`

```php
restAccountsContactsContactIdAccountsAccountIdDelete($contact_id, $account_id)
```

Delete account of the contact

Deletes an account of the contact. The ID of the contact and the ID of the account must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$account_id = 56; // int | The ID of the account

try {
    $apiInstance->restAccountsContactsContactIdAccountsAccountIdDelete($contact_id, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdAccountsAccountIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **account_id** | **int**| The ID of the account | |

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

## `restAccountsContactsContactIdAccountsAccountIdGet()`

```php
restAccountsContactsContactIdAccountsAccountIdGet($contact_id, $account_id): \ck\Model\Account
```

Get account of the contact

Gets an account of the contact. The ID of the contact and the ID of the account must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$account_id = 56; // int | The ID of the account

try {
    $result = $apiInstance->restAccountsContactsContactIdAccountsAccountIdGet($contact_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdAccountsAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **account_id** | **int**| The ID of the account | |

### Return type

[**\ck\Model\Account**](../Model/Account.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdAccountsAccountIdPut()`

```php
restAccountsContactsContactIdAccountsAccountIdPut($contact_id, $account_id): \ck\Model\Account
```

Update account

Updates an account. The ID of the contact and the ID of the account must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$account_id = 56; // int | The ID of the account

try {
    $result = $apiInstance->restAccountsContactsContactIdAccountsAccountIdPut($contact_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdAccountsAccountIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **account_id** | **int**| The ID of the account | |

### Return type

[**\ck\Model\Account**](../Model/Account.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdAccountsPost()`

```php
restAccountsContactsContactIdAccountsPost($contact_id, $_rest_accounts_contacts_contact_id_accounts): \ck\Model\Account
```

Create account for existing contact

Creates an account for an existing contact. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$_rest_accounts_contacts_contact_id_accounts = new \ck\Model\RestAccountsPostRequest(); // \ck\Model\RestAccountsPostRequest

try {
    $result = $apiInstance->restAccountsContactsContactIdAccountsPost($contact_id, $_rest_accounts_contacts_contact_id_accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdAccountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **_rest_accounts_contacts_contact_id_accounts** | [**\ck\Model\RestAccountsPostRequest**](../Model/RestAccountsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\Account**](../Model/Account.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdAddressesAddressIdDelete()`

```php
restAccountsContactsContactIdAddressesAddressIdDelete($contact_id, $address_id, $type_id)
```

Delete address of the contact

Deletes an address of the contact. The ID of the contact and the ID of the address must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$address_id = 56; // int | The ID of the address
$type_id = 56; // int | The type ID of the address. Possible values: <ul><li>Invoice address = 1</li><li> Delivery address = 2</li></ul>

try {
    $apiInstance->restAccountsContactsContactIdAddressesAddressIdDelete($contact_id, $address_id, $type_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdAddressesAddressIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **address_id** | **int**| The ID of the address | |
| **type_id** | **int**| The type ID of the address. Possible values: &lt;ul&gt;&lt;li&gt;Invoice address &#x3D; 1&lt;/li&gt;&lt;li&gt; Delivery address &#x3D; 2&lt;/li&gt;&lt;/ul&gt; | [optional] |

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

## `restAccountsContactsContactIdAddressesAddressIdPut()`

```php
restAccountsContactsContactIdAddressesAddressIdPut($contact_id, $address_id, $is_primary, $type_id): \ck\Model\Address
```

Update address of the contact

Updates an address of the contact. The ID of the contact and the ID of the address must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$address_id = 56; // int | The ID of the address
$is_primary = True; // bool | Sets a contact address per address type as the primary address.
$type_id = 56; // int | The type ID of the address. Possible values: <ul><li>Invoice address = 1</li><li> Delivery address = 2</li></ul>

try {
    $result = $apiInstance->restAccountsContactsContactIdAddressesAddressIdPut($contact_id, $address_id, $is_primary, $type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdAddressesAddressIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **address_id** | **int**| The ID of the address | |
| **is_primary** | **bool**| Sets a contact address per address type as the primary address. | [optional] |
| **type_id** | **int**| The type ID of the address. Possible values: &lt;ul&gt;&lt;li&gt;Invoice address &#x3D; 1&lt;/li&gt;&lt;li&gt; Delivery address &#x3D; 2&lt;/li&gt;&lt;/ul&gt; | [optional] |

### Return type

[**\ck\Model\Address**](../Model/Address.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdAddressesAddressIdTypesAddressTypeIdPrimaryPut()`

```php
restAccountsContactsContactIdAddressesAddressIdTypesAddressTypeIdPrimaryPut($contact_id, $address_id, $address_type_id): \ck\Model\AddressContactRelation
```

Set contact address per address type as primary address

Sets a contact address per address type as the primary address. The ID of the contact, the ID of the address and the ID of the address type must be specified. A primary address can also be defined when you create or update a contact address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$address_id = 56; // int | The ID of the address
$address_type_id = 56; // int | The ID of the address type

try {
    $result = $apiInstance->restAccountsContactsContactIdAddressesAddressIdTypesAddressTypeIdPrimaryPut($contact_id, $address_id, $address_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdAddressesAddressIdTypesAddressTypeIdPrimaryPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **address_id** | **int**| The ID of the address | |
| **address_type_id** | **int**| The ID of the address type | |

### Return type

[**\ck\Model\AddressContactRelation**](../Model/AddressContactRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdAddressesAddressIdTypesAddressTypeIdResetPrimaryPut()`

```php
restAccountsContactsContactIdAddressesAddressIdTypesAddressTypeIdResetPrimaryPut($contact_id, $address_id, $address_type_id): \ck\Model\AddressContactRelation
```

Reset contact primary address

Resets the primary address of the contact. The ID of the contact, the ID of the address and the ID of the address type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$address_id = 56; // int | The ID of the address
$address_type_id = 56; // int | The ID of the address type

try {
    $result = $apiInstance->restAccountsContactsContactIdAddressesAddressIdTypesAddressTypeIdResetPrimaryPut($contact_id, $address_id, $address_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdAddressesAddressIdTypesAddressTypeIdResetPrimaryPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **address_id** | **int**| The ID of the address | |
| **address_type_id** | **int**| The ID of the address type | |

### Return type

[**\ck\Model\AddressContactRelation**](../Model/AddressContactRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdAddressesPost()`

```php
restAccountsContactsContactIdAddressesPost($contact_id, $is_primary, $type_id, $_rest_accounts_contacts_contact_id_addresses): \ck\Model\Address
```

Create address for existing contact

Creates an address for a specific contact. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$is_primary = True; // bool | Sets a contact address per address type as the primary address.
$type_id = 56; // int | The type ID of the address. Possible values: <ul><li>Invoice address = 1</li><li> Delivery address = 2</li></ul>
$_rest_accounts_contacts_contact_id_addresses = new \ck\Model\RestAccountsAddressesPostRequest(); // \ck\Model\RestAccountsAddressesPostRequest

try {
    $result = $apiInstance->restAccountsContactsContactIdAddressesPost($contact_id, $is_primary, $type_id, $_rest_accounts_contacts_contact_id_addresses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdAddressesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **is_primary** | **bool**| Sets a contact address per address type as the primary address. | [optional] |
| **type_id** | **int**| The type ID of the address. Possible values: &lt;ul&gt;&lt;li&gt;Invoice address &#x3D; 1&lt;/li&gt;&lt;li&gt; Delivery address &#x3D; 2&lt;/li&gt;&lt;/ul&gt; | [optional] |
| **_rest_accounts_contacts_contact_id_addresses** | [**\ck\Model\RestAccountsAddressesPostRequest**](../Model/RestAccountsAddressesPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\Address**](../Model/Address.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdAddressesPrimaryGet()`

```php
restAccountsContactsContactIdAddressesPrimaryGet($contact_id): object
```

Get primary or last created addresses of contact

Gets primary or last created addresses of the contact. The ID of contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdAddressesPrimaryGet($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdAddressesPrimaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |

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

## `restAccountsContactsContactIdBanksGet()`

```php
restAccountsContactsContactIdBanksGet($contact_id, $items_per_page): \ck\Model\ContactBank[]
```

List bank accounts

Lists all bank accounts of the contact. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$items_per_page = 56; // int | The number of items per page

try {
    $result = $apiInstance->restAccountsContactsContactIdBanksGet($contact_id, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdBanksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **items_per_page** | **int**| The number of items per page | [optional] |

### Return type

[**\ck\Model\ContactBank[]**](../Model/ContactBank.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdContactEventsGet()`

```php
restAccountsContactsContactIdContactEventsGet($contact_id, $page, $items_per_page): \ck\Model\RestAccountsContactsContactEventsGet200Response
```

List contact events by contact ID

Lists contact events by the contact ID. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The number of items to list per page

try {
    $result = $apiInstance->restAccountsContactsContactIdContactEventsGet($contact_id, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdContactEventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **page** | **int**| The page of results to search for | [optional] |
| **items_per_page** | **int**| The number of items to list per page | [optional] |

### Return type

[**\ck\Model\RestAccountsContactsContactEventsGet200Response**](../Model/RestAccountsContactsContactEventsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdDelete()`

```php
restAccountsContactsContactIdDelete($contact_id, $check_existing_orders)
```

Delete contact

Deletes a contact. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$check_existing_orders = True; // bool | Flag that checks if the contact is linked to orders. If the contact is linked to orders, CustomerDeleteException is thrown and the contact will not be deleted.

try {
    $apiInstance->restAccountsContactsContactIdDelete($contact_id, $check_existing_orders);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **check_existing_orders** | **bool**| Flag that checks if the contact is linked to orders. If the contact is linked to orders, CustomerDeleteException is thrown and the contact will not be deleted. | [optional] |

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

## `restAccountsContactsContactIdGet()`

```php
restAccountsContactsContactIdGet($contact_id, $with): \ck\Model\Contact
```

Get contact

Gets a contact. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$with = 'with_example'; // string | Includes the specified contact information in the results. The following parameters are available: addresses, accounts. More than one parameter should be separated by commas.

try {
    $result = $apiInstance->restAccountsContactsContactIdGet($contact_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **with** | **string**| Includes the specified contact information in the results. The following parameters are available: addresses, accounts. More than one parameter should be separated by commas. | [optional] |

### Return type

[**\ck\Model\Contact**](../Model/Contact.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdOptionsDelete()`

```php
restAccountsContactsContactIdOptionsDelete($contact_id)
```

Delete contact option

Deletes a contact option for an existing contact. The ID of the option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact

try {
    $apiInstance->restAccountsContactsContactIdOptionsDelete($contact_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdOptionsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |

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

## `restAccountsContactsContactIdOptionsGet()`

```php
restAccountsContactsContactIdOptionsGet($contact_id, $type_id, $sub_type_id): \ck\Model\ContactOption[]
```

List contact options

Lists contact options. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$type_id = 56; // int | The ID of the type
$sub_type_id = 56; // int | The ID of the sub type

try {
    $result = $apiInstance->restAccountsContactsContactIdOptionsGet($contact_id, $type_id, $sub_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdOptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **type_id** | **int**| The ID of the type | [optional] |
| **sub_type_id** | **int**| The ID of the sub type | [optional] |

### Return type

[**\ck\Model\ContactOption[]**](../Model/ContactOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdOptionsPost()`

```php
restAccountsContactsContactIdOptionsPost($contact_id): \ck\Model\ContactOption[]
```

Create contact option

Creates a contact option for an existing contact. The ID of the contact option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdOptionsPost($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdOptionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |

### Return type

[**\ck\Model\ContactOption[]**](../Model/ContactOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdOptionsPut()`

```php
restAccountsContactsContactIdOptionsPut($contact_id): \ck\Model\ContactOption[]
```

Update contact option

Updates a contact option for an existing contact. The ID of the contact option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdOptionsPut($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdOptionsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |

### Return type

[**\ck\Model\ContactOption[]**](../Model/ContactOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdOptionsValidateGet()`

```php
restAccountsContactsContactIdOptionsValidateGet($contact_id): object
```

Validate contact option by given value

Validates a contact option by a given value. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdOptionsValidateGet($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdOptionsValidateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |

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

## `restAccountsContactsContactIdPut()`

```php
restAccountsContactsContactIdPut($contact_id, $tag_relationships, $_rest_accounts_contacts_contact_id): \ck\Model\Contact
```

Update contact

Updates a contact. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact
$tag_relationships = 56; // int | When this parameter is used, the current relations between contacts and tags will be deleted and replaced by the given ones. If the parameter is not used, the current relations remain.
$_rest_accounts_contacts_contact_id = new \ck\Model\RestAccountsContactsContactIdPutRequest(); // \ck\Model\RestAccountsContactsContactIdPutRequest

try {
    $result = $apiInstance->restAccountsContactsContactIdPut($contact_id, $tag_relationships, $_rest_accounts_contacts_contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |
| **tag_relationships** | **int**| When this parameter is used, the current relations between contacts and tags will be deleted and replaced by the given ones. If the parameter is not used, the current relations remain. | [optional] |
| **_rest_accounts_contacts_contact_id** | [**\ck\Model\RestAccountsContactsContactIdPutRequest**](../Model/RestAccountsContactsContactIdPutRequest.md)|  | [optional] |

### Return type

[**\ck\Model\Contact**](../Model/Contact.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdRelatedDataGet()`

```php
restAccountsContactsContactIdRelatedDataGet($contact_id): \ck\Model\Contact
```

List contact related data

Lists all contact related data. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdRelatedDataGet($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdRelatedDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |

### Return type

[**\ck\Model\Contact**](../Model/Contact.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsContactIdVcardGet()`

```php
restAccountsContactsContactIdVcardGet($contact_id): object
```

Get vcard filestream of contact

Gets a filestream of the vcard of a contact. The ID of the contact must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | The ID of the contact

try {
    $result = $apiInstance->restAccountsContactsContactIdVcardGet($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsContactIdVcardGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **int**| The ID of the contact | |

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

## `restAccountsContactsDepartmentsDepartmentIdDelete()`

```php
restAccountsContactsDepartmentsDepartmentIdDelete($department_id)
```

Delete contact department

Deletes a contact department. The ID of the department must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$department_id = 56; // int | The ID of the department

try {
    $apiInstance->restAccountsContactsDepartmentsDepartmentIdDelete($department_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsDepartmentsDepartmentIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **department_id** | **int**| The ID of the department | |

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

## `restAccountsContactsDepartmentsDepartmentIdGet()`

```php
restAccountsContactsDepartmentsDepartmentIdGet($department_id): \ck\Model\ContactDepartment
```

Get contact department

Gets a contact department. The ID of the department must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$department_id = 56; // int | The ID of the department

try {
    $result = $apiInstance->restAccountsContactsDepartmentsDepartmentIdGet($department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsDepartmentsDepartmentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **department_id** | **int**| The ID of the department | |

### Return type

[**\ck\Model\ContactDepartment**](../Model/ContactDepartment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsDepartmentsDepartmentIdPut()`

```php
restAccountsContactsDepartmentsDepartmentIdPut($department_id, $_rest_accounts_contacts_departments_department_id): \ck\Model\ContactDepartment
```

Update contact department

Updates a contact department. The ID of the department must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$department_id = 56; // int | The ID of the department
$_rest_accounts_contacts_departments_department_id = new \ck\Model\RestAccountsContactsDepartmentsPostRequest(); // \ck\Model\RestAccountsContactsDepartmentsPostRequest

try {
    $result = $apiInstance->restAccountsContactsDepartmentsDepartmentIdPut($department_id, $_rest_accounts_contacts_departments_department_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsDepartmentsDepartmentIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **department_id** | **int**| The ID of the department | |
| **_rest_accounts_contacts_departments_department_id** | [**\ck\Model\RestAccountsContactsDepartmentsPostRequest**](../Model/RestAccountsContactsDepartmentsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\ContactDepartment**](../Model/ContactDepartment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsDepartmentsGet()`

```php
restAccountsContactsDepartmentsGet(): \ck\Model\ContactDepartment[]
```

List contact departments

Lists all contact departments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsContactsDepartmentsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsDepartmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\ContactDepartment[]**](../Model/ContactDepartment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsDepartmentsPost()`

```php
restAccountsContactsDepartmentsPost($_rest_accounts_contacts_departments): \ck\Model\ContactDepartment
```

Create contact department

Creates a contact department.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_accounts_contacts_departments = new \ck\Model\RestAccountsContactsDepartmentsPostRequest(); // \ck\Model\RestAccountsContactsDepartmentsPostRequest

try {
    $result = $apiInstance->restAccountsContactsDepartmentsPost($_rest_accounts_contacts_departments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsDepartmentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_accounts_contacts_departments** | [**\ck\Model\RestAccountsContactsDepartmentsPostRequest**](../Model/RestAccountsContactsDepartmentsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\ContactDepartment**](../Model/ContactDepartment.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsGet()`

```php
restAccountsContactsGet($full_text, $contact_email, $email, $postal_code, $plenty_id, $external_id, $number, $type_id, $rating, $created_at_before, $created_at_after, $updated_at_before, $updated_at_after, $last_order_at_before, $last_order_at_after, $with, $page, $items_per_page, $newsletter_allowance_after, $newsletter_allowance_before, $newsletter_allowance, $contact_id, $contact_address, $country_id, $user_id, $referrer_id, $name, $name_or_id, $town, $private_phone, $billing_address_id, $delivery_address_id, $tag_ids): \ck\Model\RestAccountsContactsGet200Response
```

List contacts

Lists all contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full_text = 'full_text_example'; // string | Filter for a fulltext search
$contact_email = 'contact_email_example'; // string | Filter that restricts the search result to contacts resembling to the given email address
$email = 'email_example'; // string | Filter that restricts the search result to contacts with a specific email address
$postal_code = 'postal_code_example'; // string | Filter that restricts the search result to contacts with a specific postcode
$plenty_id = 56; // int | Filter that restricts the search result to contacts with a specific plentyId
$external_id = 56; // int | Filter that restricts the search result to contacts with a specific externalId
$number = 56; // int | Filter that restricts the search result to contacts with a specific number
$type_id = 56; // int | Filter that restricts the search result to contacts with a specific contact type
$rating = 56; // int | Filter that restricts the search result to contacts with a specific rating
$created_at_before = 'created_at_before_example'; // string | Filter that restricts the search result to contacts that were created before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
$created_at_after = 'created_at_after_example'; // string | Filter that restricts the search result to contacts that were created after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
$updated_at_before = 'updated_at_before_example'; // string | Filter that restricts the search result to contacts that were updated before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
$updated_at_after = 'updated_at_after_example'; // string | Filter that restricts the search result to contacts that were updated after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
$last_order_at_before = 'last_order_at_before_example'; // string | Filter that restricts the search result to contacts whose last order was created before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
$last_order_at_after = 'last_order_at_after_example'; // string | Filter that restricts the search result to contacts whose last order was created after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
$with = 'with_example'; // string | Includes the specified contact information in the results. The following parameters are available: addresses, accounts, options, orderSummary, primaryBillingAddress, contactOrders. More than one parameter should be separated by commas.
$page = 56; // int | The page of results to search for
$items_per_page = 56; // int | The number of items to list per page
$newsletter_allowance_after = 'newsletter_allowance_after_example'; // string | Filter that restricts the search result to contacts who registered for the newsletter after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
$newsletter_allowance_before = 'newsletter_allowance_before_example'; // string | Filter that restricts the search result to contacts who registered for the newsletter before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy.
$newsletter_allowance = 'newsletter_allowance_example'; // string | Filter that restricts the search result to contacts who registered for the newsletter. Possible values: 'true' and 'false'. True: newsletter registration was successful. False: newsletter registration was not successful.
$contact_id = 56; // int | Filter that restricts the search result to a specific contact
$contact_address = 'contact_address_example'; // string | Filter that restricts the search result to contacts with a specific address
$country_id = 'country_id_example'; // string | Filter that restricts the search result to contacts with a specific country
$user_id = 'user_id_example'; // string | Filter that restricts the search result to contacts with a specific user
$referrer_id = 'referrer_id_example'; // string | Filter that restricts the search result to contacts with a specific referrer
$name = 'name_example'; // string | Filter that restricts the search result to contacts with a specific name
$name_or_id = 'name_or_id_example'; // string | Filter that restricts the search result to contacts with a specific name or ID.
$town = 'town_example'; // string | Filter that restricts the search result to contacts with a specific town
$private_phone = 'private_phone_example'; // string | Filter that restricts the search result to contacts with a private phone number
$billing_address_id = 'billing_address_id_example'; // string | Filter that restricts the search result to contacts with a billing address with the ID provided
$delivery_address_id = 'delivery_address_id_example'; // string | Filter that restricts the search result to contacts with a delivery address with the ID provided
$tag_ids = 56; // int | Filter restricts the list of results to contacts with the specified tagIds. More than one ID should be separated by commas.

try {
    $result = $apiInstance->restAccountsContactsGet($full_text, $contact_email, $email, $postal_code, $plenty_id, $external_id, $number, $type_id, $rating, $created_at_before, $created_at_after, $updated_at_before, $updated_at_after, $last_order_at_before, $last_order_at_after, $with, $page, $items_per_page, $newsletter_allowance_after, $newsletter_allowance_before, $newsletter_allowance, $contact_id, $contact_address, $country_id, $user_id, $referrer_id, $name, $name_or_id, $town, $private_phone, $billing_address_id, $delivery_address_id, $tag_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **full_text** | **string**| Filter for a fulltext search | [optional] |
| **contact_email** | **string**| Filter that restricts the search result to contacts resembling to the given email address | [optional] |
| **email** | **string**| Filter that restricts the search result to contacts with a specific email address | [optional] |
| **postal_code** | **string**| Filter that restricts the search result to contacts with a specific postcode | [optional] |
| **plenty_id** | **int**| Filter that restricts the search result to contacts with a specific plentyId | [optional] |
| **external_id** | **int**| Filter that restricts the search result to contacts with a specific externalId | [optional] |
| **number** | **int**| Filter that restricts the search result to contacts with a specific number | [optional] |
| **type_id** | **int**| Filter that restricts the search result to contacts with a specific contact type | [optional] |
| **rating** | **int**| Filter that restricts the search result to contacts with a specific rating | [optional] |
| **created_at_before** | **string**| Filter that restricts the search result to contacts that were created before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy. | [optional] |
| **created_at_after** | **string**| Filter that restricts the search result to contacts that were created after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy. | [optional] |
| **updated_at_before** | **string**| Filter that restricts the search result to contacts that were updated before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy. | [optional] |
| **updated_at_after** | **string**| Filter that restricts the search result to contacts that were updated after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy. | [optional] |
| **last_order_at_before** | **string**| Filter that restricts the search result to contacts whose last order was created before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy. | [optional] |
| **last_order_at_after** | **string**| Filter that restricts the search result to contacts whose last order was created after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy. | [optional] |
| **with** | **string**| Includes the specified contact information in the results. The following parameters are available: addresses, accounts, options, orderSummary, primaryBillingAddress, contactOrders. More than one parameter should be separated by commas. | [optional] |
| **page** | **int**| The page of results to search for | [optional] |
| **items_per_page** | **int**| The number of items to list per page | [optional] |
| **newsletter_allowance_after** | **string**| Filter that restricts the search result to contacts who registered for the newsletter after a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy. | [optional] |
| **newsletter_allowance_before** | **string**| Filter that restricts the search result to contacts who registered for the newsletter before a specific date. Possible formats: yyyy-mm-dd, mm/dd/yyyy. | [optional] |
| **newsletter_allowance** | **string**| Filter that restricts the search result to contacts who registered for the newsletter. Possible values: &#39;true&#39; and &#39;false&#39;. True: newsletter registration was successful. False: newsletter registration was not successful. | [optional] |
| **contact_id** | **int**| Filter that restricts the search result to a specific contact | [optional] |
| **contact_address** | **string**| Filter that restricts the search result to contacts with a specific address | [optional] |
| **country_id** | **string**| Filter that restricts the search result to contacts with a specific country | [optional] |
| **user_id** | **string**| Filter that restricts the search result to contacts with a specific user | [optional] |
| **referrer_id** | **string**| Filter that restricts the search result to contacts with a specific referrer | [optional] |
| **name** | **string**| Filter that restricts the search result to contacts with a specific name | [optional] |
| **name_or_id** | **string**| Filter that restricts the search result to contacts with a specific name or ID. | [optional] |
| **town** | **string**| Filter that restricts the search result to contacts with a specific town | [optional] |
| **private_phone** | **string**| Filter that restricts the search result to contacts with a private phone number | [optional] |
| **billing_address_id** | **string**| Filter that restricts the search result to contacts with a billing address with the ID provided | [optional] |
| **delivery_address_id** | **string**| Filter that restricts the search result to contacts with a delivery address with the ID provided | [optional] |
| **tag_ids** | **int**| Filter restricts the list of results to contacts with the specified tagIds. More than one ID should be separated by commas. | [optional] |

### Return type

[**\ck\Model\RestAccountsContactsGet200Response**](../Model/RestAccountsContactsGet200Response.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsGroupFunctionsGet()`

```php
restAccountsContactsGroupFunctionsGet(): object
```

List all group function related data

Lists all data that is related to the contact group function contents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsContactsGroupFunctionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsGroupFunctionsGet: ', $e->getMessage(), PHP_EOL;
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

## `restAccountsContactsGroupFunctionsPost()`

```php
restAccountsContactsGroupFunctionsPost($contact_list, $email_template, $newsletter, $address_label_template): object
```

Apply selected group function options for given contact IDs

Applies selected group function options for given contact IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_list = 56; // int | A list of contact IDs
$email_template = 56; // int | An email template ID
$newsletter = 56; // int | A newsletter folder ID
$address_label_template = 56; // int | An address label template ID

try {
    $result = $apiInstance->restAccountsContactsGroupFunctionsPost($contact_list, $email_template, $newsletter, $address_label_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsGroupFunctionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_list** | **int**| A list of contact IDs | [optional] |
| **email_template** | **int**| An email template ID | [optional] |
| **newsletter** | **int**| A newsletter folder ID | [optional] |
| **address_label_template** | **int**| An address label template ID | [optional] |

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

## `restAccountsContactsOptionSubTypesGet()`

```php
restAccountsContactsOptionSubTypesGet(): \ck\Model\ContactOptionSubType[]
```

List contact option sub-types

Lists all contact option sub-types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsContactsOptionSubTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsOptionSubTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\ContactOptionSubType[]**](../Model/ContactOptionSubType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsOptionSubTypesOptionSubTypeIdDelete()`

```php
restAccountsContactsOptionSubTypesOptionSubTypeIdDelete($option_sub_type_id)
```

Delete contact option sub-type

Deletes a contact option sub-type. The ID of the contact option sub-type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_sub_type_id = 56; // int | The ID of the contact option sub-type

try {
    $apiInstance->restAccountsContactsOptionSubTypesOptionSubTypeIdDelete($option_sub_type_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsOptionSubTypesOptionSubTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_sub_type_id** | **int**| The ID of the contact option sub-type | |

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

## `restAccountsContactsOptionSubTypesOptionSubTypeIdGet()`

```php
restAccountsContactsOptionSubTypesOptionSubTypeIdGet($option_sub_type_id): \ck\Model\ContactOptionSubType
```

Get contact option sub-type

Gets a contact option sub-type. The ID of the contact option sub-type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_sub_type_id = 56; // int | The ID of the contact option sub-type

try {
    $result = $apiInstance->restAccountsContactsOptionSubTypesOptionSubTypeIdGet($option_sub_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsOptionSubTypesOptionSubTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_sub_type_id** | **int**| The ID of the contact option sub-type | |

### Return type

[**\ck\Model\ContactOptionSubType**](../Model/ContactOptionSubType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsOptionSubTypesOptionSubTypeIdPut()`

```php
restAccountsContactsOptionSubTypesOptionSubTypeIdPut($option_sub_type_id, $_rest_accounts_contacts_option_sub_types_option_sub_type_id): \ck\Model\ContactOptionSubType
```

Update contact option sub-type

Updates a contact option sub-type. The ID of the contact option sub-type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_sub_type_id = 56; // int | The ID of the contact option sub-type
$_rest_accounts_contacts_option_sub_types_option_sub_type_id = new \ck\Model\RestAccountsAddressesOptionTypesPostRequest(); // \ck\Model\RestAccountsAddressesOptionTypesPostRequest

try {
    $result = $apiInstance->restAccountsContactsOptionSubTypesOptionSubTypeIdPut($option_sub_type_id, $_rest_accounts_contacts_option_sub_types_option_sub_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsOptionSubTypesOptionSubTypeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_sub_type_id** | **int**| The ID of the contact option sub-type | |
| **_rest_accounts_contacts_option_sub_types_option_sub_type_id** | [**\ck\Model\RestAccountsAddressesOptionTypesPostRequest**](../Model/RestAccountsAddressesOptionTypesPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\ContactOptionSubType**](../Model/ContactOptionSubType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsOptionSubTypesPost()`

```php
restAccountsContactsOptionSubTypesPost($_rest_accounts_contacts_option_sub_types): \ck\Model\ContactOptionSubType
```

Create contact option sub-type

Creates a contact option sub-type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_accounts_contacts_option_sub_types = new \ck\Model\RestAccountsAddressesOptionTypesPostRequest(); // \ck\Model\RestAccountsAddressesOptionTypesPostRequest

try {
    $result = $apiInstance->restAccountsContactsOptionSubTypesPost($_rest_accounts_contacts_option_sub_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsOptionSubTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_accounts_contacts_option_sub_types** | [**\ck\Model\RestAccountsAddressesOptionTypesPostRequest**](../Model/RestAccountsAddressesOptionTypesPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\ContactOptionSubType**](../Model/ContactOptionSubType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsOptionTypesGet()`

```php
restAccountsContactsOptionTypesGet($with): \ck\Model\ContactOptionType[]
```

List contact option types

Lists all contact option types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = 'with_example'; // string | Lists possible option sub-types for each listed option if the parameter 'subTypes' is set.

try {
    $result = $apiInstance->restAccountsContactsOptionTypesGet($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsOptionTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **with** | **string**| Lists possible option sub-types for each listed option if the parameter &#39;subTypes&#39; is set. | [optional] |

### Return type

[**\ck\Model\ContactOptionType[]**](../Model/ContactOptionType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsOptionTypesOptionTypeIdDelete()`

```php
restAccountsContactsOptionTypesOptionTypeIdDelete($option_type_id)
```

Delete contact option type

Deletes a contact option type. The ID of the contact option type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_type_id = 56; // int | The ID of the contact option type

try {
    $apiInstance->restAccountsContactsOptionTypesOptionTypeIdDelete($option_type_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsOptionTypesOptionTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_type_id** | **int**| The ID of the contact option type | |

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

## `restAccountsContactsOptionTypesOptionTypeIdGet()`

```php
restAccountsContactsOptionTypesOptionTypeIdGet($option_type_id): \ck\Model\ContactOptionType
```

Get contact option type

Gets a contact option type. The ID of the contact option type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_type_id = 56; // int | The ID of the contact option type

try {
    $result = $apiInstance->restAccountsContactsOptionTypesOptionTypeIdGet($option_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsOptionTypesOptionTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_type_id** | **int**| The ID of the contact option type | |

### Return type

[**\ck\Model\ContactOptionType**](../Model/ContactOptionType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsOptionTypesOptionTypeIdPut()`

```php
restAccountsContactsOptionTypesOptionTypeIdPut($option_type_id, $_rest_accounts_contacts_option_types_option_type_id): \ck\Model\ContactOptionType
```

Update contact option type

Updates a contact option type. The ID of the contact option type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_type_id = 56; // int | The ID of the contact option type
$_rest_accounts_contacts_option_types_option_type_id = new \ck\Model\RestAccountsAddressesOptionTypesPostRequest(); // \ck\Model\RestAccountsAddressesOptionTypesPostRequest

try {
    $result = $apiInstance->restAccountsContactsOptionTypesOptionTypeIdPut($option_type_id, $_rest_accounts_contacts_option_types_option_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsOptionTypesOptionTypeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_type_id** | **int**| The ID of the contact option type | |
| **_rest_accounts_contacts_option_types_option_type_id** | [**\ck\Model\RestAccountsAddressesOptionTypesPostRequest**](../Model/RestAccountsAddressesOptionTypesPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\ContactOptionType**](../Model/ContactOptionType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsOptionTypesPost()`

```php
restAccountsContactsOptionTypesPost($_rest_accounts_contacts_option_types): \ck\Model\ContactOptionType
```

Create contact option type

Creates a contact option type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_accounts_contacts_option_types = new \ck\Model\RestAccountsAddressesOptionTypesPostRequest(); // \ck\Model\RestAccountsAddressesOptionTypesPostRequest

try {
    $result = $apiInstance->restAccountsContactsOptionTypesPost($_rest_accounts_contacts_option_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsOptionTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_accounts_contacts_option_types** | [**\ck\Model\RestAccountsAddressesOptionTypesPostRequest**](../Model/RestAccountsAddressesOptionTypesPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\ContactOptionType**](../Model/ContactOptionType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsOptionsOptionIdDelete()`

```php
restAccountsContactsOptionsOptionIdDelete($option_id)
```

Delete contact option

Deletes a contact option. The ID of the option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_id = 56; // int | The ID of the option

try {
    $apiInstance->restAccountsContactsOptionsOptionIdDelete($option_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsOptionsOptionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_id** | **int**| The ID of the option | |

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

## `restAccountsContactsOptionsOptionIdGet()`

```php
restAccountsContactsOptionsOptionIdGet($option_id): \ck\Model\ContactOption
```

Get contact option

Gets a contact option. The ID of the option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_id = 56; // int | The ID of the option

try {
    $result = $apiInstance->restAccountsContactsOptionsOptionIdGet($option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsOptionsOptionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_id** | **int**| The ID of the option | |

### Return type

[**\ck\Model\ContactOption**](../Model/ContactOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsOptionsOptionIdPut()`

```php
restAccountsContactsOptionsOptionIdPut($option_id): \ck\Model\ContactOption
```

Update contact option

Updates a contact option. The ID of the option must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_id = 56; // int | The ID of the option

try {
    $result = $apiInstance->restAccountsContactsOptionsOptionIdPut($option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsOptionsOptionIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_id** | **int**| The ID of the option | |

### Return type

[**\ck\Model\ContactOption**](../Model/ContactOption.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsPositionsGet()`

```php
restAccountsContactsPositionsGet(): \ck\Model\ContactPosition[]
```

List contact positions

Lists all contact positions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsContactsPositionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsPositionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\ContactPosition[]**](../Model/ContactPosition.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsPositionsPositionIdDelete()`

```php
restAccountsContactsPositionsPositionIdDelete($position_id)
```

Delete contact position

Deletes a contact position. The ID of the position must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$position_id = 56; // int | The ID of the position

try {
    $apiInstance->restAccountsContactsPositionsPositionIdDelete($position_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsPositionsPositionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **position_id** | **int**| The ID of the position | |

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

## `restAccountsContactsPositionsPositionIdGet()`

```php
restAccountsContactsPositionsPositionIdGet($position_id): \ck\Model\ContactPosition
```

Get contact position

Gets a contact position. The ID of the position must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$position_id = 56; // int | The ID of the position

try {
    $result = $apiInstance->restAccountsContactsPositionsPositionIdGet($position_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsPositionsPositionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **position_id** | **int**| The ID of the position | |

### Return type

[**\ck\Model\ContactPosition**](../Model/ContactPosition.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsPositionsPositionIdPut()`

```php
restAccountsContactsPositionsPositionIdPut($position_id, $_rest_accounts_contacts_positions_position_id): \ck\Model\ContactPosition
```

Update contact position

Updates a contact position. The ID of the position must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$position_id = 56; // int | The ID of the position
$_rest_accounts_contacts_positions_position_id = new \ck\Model\RestAccountsContactsPositionsPostRequest(); // \ck\Model\RestAccountsContactsPositionsPostRequest

try {
    $result = $apiInstance->restAccountsContactsPositionsPositionIdPut($position_id, $_rest_accounts_contacts_positions_position_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsPositionsPositionIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **position_id** | **int**| The ID of the position | |
| **_rest_accounts_contacts_positions_position_id** | [**\ck\Model\RestAccountsContactsPositionsPostRequest**](../Model/RestAccountsContactsPositionsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\ContactPosition**](../Model/ContactPosition.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsPositionsPost()`

```php
restAccountsContactsPositionsPost($_rest_accounts_contacts_positions): \ck\Model\ContactPosition
```

Create contact position

Creates a contact position.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_accounts_contacts_positions = new \ck\Model\RestAccountsContactsPositionsPostRequest(); // \ck\Model\RestAccountsContactsPositionsPostRequest

try {
    $result = $apiInstance->restAccountsContactsPositionsPost($_rest_accounts_contacts_positions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsPositionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_accounts_contacts_positions** | [**\ck\Model\RestAccountsContactsPositionsPostRequest**](../Model/RestAccountsContactsPositionsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\ContactPosition**](../Model/ContactPosition.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsPost()`

```php
restAccountsContactsPost($_rest_accounts_contacts): \ck\Model\Contact
```

Create contact

Creates a contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_accounts_contacts = new \ck\Model\RestAccountsContactsPostRequest(); // \ck\Model\RestAccountsContactsPostRequest

try {
    $result = $apiInstance->restAccountsContactsPost($_rest_accounts_contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_accounts_contacts** | [**\ck\Model\RestAccountsContactsPostRequest**](../Model/RestAccountsContactsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\Contact**](../Model/Contact.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsTypesGet()`

```php
restAccountsContactsTypesGet(): \ck\Model\ContactType[]
```

List contact types

Lists all contact types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restAccountsContactsTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\ContactType[]**](../Model/ContactType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsTypesPost()`

```php
restAccountsContactsTypesPost($_rest_accounts_contacts_types): \ck\Model\ContactType
```

Create contact type

Creates a contact type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_accounts_contacts_types = new \ck\Model\RestAccountsAddressesOptionTypesPostRequest(); // \ck\Model\RestAccountsAddressesOptionTypesPostRequest

try {
    $result = $apiInstance->restAccountsContactsTypesPost($_rest_accounts_contacts_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_accounts_contacts_types** | [**\ck\Model\RestAccountsAddressesOptionTypesPostRequest**](../Model/RestAccountsAddressesOptionTypesPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\ContactType**](../Model/ContactType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsTypesTypeIdDelete()`

```php
restAccountsContactsTypesTypeIdDelete($type_id)
```

Delete contact type

Deletes a contact type. The ID of the contact type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int | The ID of the contact type

try {
    $apiInstance->restAccountsContactsTypesTypeIdDelete($type_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsTypesTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type_id** | **int**| The ID of the contact type | |

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

## `restAccountsContactsTypesTypeIdGet()`

```php
restAccountsContactsTypesTypeIdGet($type_id): \ck\Model\ContactType
```

Get contact type

Gets a contact type. The ID of the contact type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int | The ID of the contact type

try {
    $result = $apiInstance->restAccountsContactsTypesTypeIdGet($type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsTypesTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type_id** | **int**| The ID of the contact type | |

### Return type

[**\ck\Model\ContactType**](../Model/ContactType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsContactsTypesTypeIdPut()`

```php
restAccountsContactsTypesTypeIdPut($type_id, $_rest_accounts_contacts_types_type_id): \ck\Model\ContactType
```

Update contact type

Updates a contact type. The ID of the contact type must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int | The ID of the contact type
$_rest_accounts_contacts_types_type_id = new \ck\Model\RestAccountsAddressesOptionTypesPostRequest(); // \ck\Model\RestAccountsAddressesOptionTypesPostRequest

try {
    $result = $apiInstance->restAccountsContactsTypesTypeIdPut($type_id, $_rest_accounts_contacts_types_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsContactsTypesTypeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type_id** | **int**| The ID of the contact type | |
| **_rest_accounts_contacts_types_type_id** | [**\ck\Model\RestAccountsAddressesOptionTypesPostRequest**](../Model/RestAccountsAddressesOptionTypesPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\ContactType**](../Model/ContactType.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAccountsGet()`

```php
restAccountsGet($updated_at, $created_at, $company_name): object
```

List accounts

Lists all accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_at = 'updated_at_example'; // string | Filter that restricts the search result to accounts that were updated according to given filters.                                    <br> Usage: <ul>                                    <li>'updatedAt=between:yyyy-mm-dd,yyyy-mm-dd'</li>                                    <li>'updatedAt=eq:yyyy-mm-dd' (=)</li>                                    <li>'updatedAt=gt:yyyy-mm-dd' (>)</li>                                    <li>'updatedAt=gte:yyyy-mm-dd' (>=)</li>                                    <li>'updatedAt=lt:yyyy-mm-dd' (<)</li>                                    <li>'updatedAt=lte:yyyy-mm-dd' (<=)</li>                                    <li>Dates can also include the time. Example: 2017-03-08 13:24:17</li>                                    <li>Without including the time we will use 00:00:00 as default. Example: 2017-03-08 00:00:00</li>                                    </ul>
$created_at = 'created_at_example'; // string | Filter that restricts the search result to accounts that were created according to given filters.                                    <br> Usage: <ul>                                    <li>'createdAt=between:yyyy-mm-dd,yyyy-mm-dd'</li>                                    <li>'createdAt=eq:yyyy-mm-dd' (=)</li>                                    <li>'createdAt=gt:yyyy-mm-dd' (>)</li>                                    <li>'createdAt=gte:yyyy-mm-dd' (>=)</li>                                    <li>'createdAt=lt:yyyy-mm-dd' (<)</li>                                   <li>'createdAt=lte:yyyy-mm-dd' (<=)</li>                                   <li>Dates can also include the time. Example: 2017-03-08 13:24:17</li>                                    <li>Without including the time we will use 00:00:00 as default. Example: 2017-03-08 00:00:00</li>          </ul>
$company_name = 'company_name_example'; // string | Filter that restricts the search result to accounts that have a company name according to given filters.                                    <br> Usage: <ul>                                    <li>'companyName=like:expamle'</li>                                    <li>'companyName=eq:example' (=)</li>                                    </ul>

try {
    $result = $apiInstance->restAccountsGet($updated_at, $created_at, $company_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updated_at** | **string**| Filter that restricts the search result to accounts that were updated according to given filters.                                    &lt;br&gt; Usage: &lt;ul&gt;                                    &lt;li&gt;&#39;updatedAt&#x3D;between:yyyy-mm-dd,yyyy-mm-dd&#39;&lt;/li&gt;                                    &lt;li&gt;&#39;updatedAt&#x3D;eq:yyyy-mm-dd&#39; (&#x3D;)&lt;/li&gt;                                    &lt;li&gt;&#39;updatedAt&#x3D;gt:yyyy-mm-dd&#39; (&gt;)&lt;/li&gt;                                    &lt;li&gt;&#39;updatedAt&#x3D;gte:yyyy-mm-dd&#39; (&gt;&#x3D;)&lt;/li&gt;                                    &lt;li&gt;&#39;updatedAt&#x3D;lt:yyyy-mm-dd&#39; (&lt;)&lt;/li&gt;                                    &lt;li&gt;&#39;updatedAt&#x3D;lte:yyyy-mm-dd&#39; (&lt;&#x3D;)&lt;/li&gt;                                    &lt;li&gt;Dates can also include the time. Example: 2017-03-08 13:24:17&lt;/li&gt;                                    &lt;li&gt;Without including the time we will use 00:00:00 as default. Example: 2017-03-08 00:00:00&lt;/li&gt;                                    &lt;/ul&gt; | [optional] |
| **created_at** | **string**| Filter that restricts the search result to accounts that were created according to given filters.                                    &lt;br&gt; Usage: &lt;ul&gt;                                    &lt;li&gt;&#39;createdAt&#x3D;between:yyyy-mm-dd,yyyy-mm-dd&#39;&lt;/li&gt;                                    &lt;li&gt;&#39;createdAt&#x3D;eq:yyyy-mm-dd&#39; (&#x3D;)&lt;/li&gt;                                    &lt;li&gt;&#39;createdAt&#x3D;gt:yyyy-mm-dd&#39; (&gt;)&lt;/li&gt;                                    &lt;li&gt;&#39;createdAt&#x3D;gte:yyyy-mm-dd&#39; (&gt;&#x3D;)&lt;/li&gt;                                    &lt;li&gt;&#39;createdAt&#x3D;lt:yyyy-mm-dd&#39; (&lt;)&lt;/li&gt;                                   &lt;li&gt;&#39;createdAt&#x3D;lte:yyyy-mm-dd&#39; (&lt;&#x3D;)&lt;/li&gt;                                   &lt;li&gt;Dates can also include the time. Example: 2017-03-08 13:24:17&lt;/li&gt;                                    &lt;li&gt;Without including the time we will use 00:00:00 as default. Example: 2017-03-08 00:00:00&lt;/li&gt;          &lt;/ul&gt; | [optional] |
| **company_name** | **string**| Filter that restricts the search result to accounts that have a company name according to given filters.                                    &lt;br&gt; Usage: &lt;ul&gt;                                    &lt;li&gt;&#39;companyName&#x3D;like:expamle&#39;&lt;/li&gt;                                    &lt;li&gt;&#39;companyName&#x3D;eq:example&#39; (&#x3D;)&lt;/li&gt;                                    &lt;/ul&gt; | [optional] |

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

## `restAccountsPost()`

```php
restAccountsPost($_rest_accounts): \ck\Model\Account
```

Create account

Creates an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_rest_accounts = new \ck\Model\RestAccountsPostRequest(); // \ck\Model\RestAccountsPostRequest

try {
    $result = $apiInstance->restAccountsPost($_rest_accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restAccountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_rest_accounts** | [**\ck\Model\RestAccountsPostRequest**](../Model/RestAccountsPostRequest.md)|  | [optional] |

### Return type

[**\ck\Model\Account**](../Model/Account.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restOrdersAddressesPost()`

```php
restOrdersAddressesPost(): \ck\Model\AddressOrderRelation
```

Create address for existing order

Creates an address for an existing order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restOrdersAddressesPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restOrdersAddressesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\AddressOrderRelation**](../Model/AddressOrderRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restStockmanagementWarehousesAddressesPost()`

```php
restStockmanagementWarehousesAddressesPost(): \ck\Model\AddressWarehouseRelation
```

Create address for existing warehouse

Creates an address for an existing warehouse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth2
$config = ck\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ck\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restStockmanagementWarehousesAddressesPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->restStockmanagementWarehousesAddressesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ck\Model\AddressWarehouseRelation**](../Model/AddressWarehouseRelation.md)

### Authorization

[oAuth2](../../README.md#oAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# OpenAPIClient-php

The plentymarkets REST API expands the functionality of the plentymarkets CMS and allows access to resources, i.e. data records, via unique URI paths

For more information, please visit [https://forum.plentymarkets.com/c/rest-api](https://forum.plentymarkets.com/c/rest-api).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://example.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**restAccountLoginPost**](docs/Api/AccountApi.md#restaccountloginpost) | **POST** /rest/account/login | Login
*AccountApi* | [**restAccountLoginRefreshPost**](docs/Api/AccountApi.md#restaccountloginrefreshpost) | **POST** /rest/account/login/refresh | Refresh
*AccountApi* | [**restAccountLogoutPost**](docs/Api/AccountApi.md#restaccountlogoutpost) | **POST** /rest/account/logout | Logout
*AccountApi* | [**restAccountsAccountIdContactsGet**](docs/Api/AccountApi.md#restaccountsaccountidcontactsget) | **GET** /rest/accounts/{accountId}/contacts | List contacts
*AccountApi* | [**restAccountsAccountIdDelete**](docs/Api/AccountApi.md#restaccountsaccountiddelete) | **DELETE** /rest/accounts/{accountId} | Delete account
*AccountApi* | [**restAccountsAccountIdGet**](docs/Api/AccountApi.md#restaccountsaccountidget) | **GET** /rest/accounts/{accountId} | Get account
*AccountApi* | [**restAccountsAccountIdPut**](docs/Api/AccountApi.md#restaccountsaccountidput) | **PUT** /rest/accounts/{accountId} | Update account
*AccountApi* | [**restAccountsAddressesAddressIdDelete**](docs/Api/AccountApi.md#restaccountsaddressesaddressiddelete) | **DELETE** /rest/accounts/addresses/{addressId} | Delete address
*AccountApi* | [**restAccountsAddressesAddressIdGet**](docs/Api/AccountApi.md#restaccountsaddressesaddressidget) | **GET** /rest/accounts/addresses/{addressId} | Get address
*AccountApi* | [**restAccountsAddressesAddressIdOptionsDelete**](docs/Api/AccountApi.md#restaccountsaddressesaddressidoptionsdelete) | **DELETE** /rest/accounts/addresses/{addressId}/options | Delete address option by addressId
*AccountApi* | [**restAccountsAddressesAddressIdOptionsGet**](docs/Api/AccountApi.md#restaccountsaddressesaddressidoptionsget) | **GET** /rest/accounts/addresses/{addressId}/options | List address options
*AccountApi* | [**restAccountsAddressesAddressIdOptionsPost**](docs/Api/AccountApi.md#restaccountsaddressesaddressidoptionspost) | **POST** /rest/accounts/addresses/{addressId}/options | Create address option
*AccountApi* | [**restAccountsAddressesAddressIdOptionsPut**](docs/Api/AccountApi.md#restaccountsaddressesaddressidoptionsput) | **PUT** /rest/accounts/addresses/{addressId}/options | Update address option by addressId
*AccountApi* | [**restAccountsAddressesAddressIdPut**](docs/Api/AccountApi.md#restaccountsaddressesaddressidput) | **PUT** /rest/accounts/addresses/{addressId} | Update address
*AccountApi* | [**restAccountsAddressesAddressIdRelatedDataGet**](docs/Api/AccountApi.md#restaccountsaddressesaddressidrelateddataget) | **GET** /rest/accounts/addresses/{addressId}/related_data | Get address data by addressId
*AccountApi* | [**restAccountsAddressesContactRelationsAddressContactRelationIdDelete**](docs/Api/AccountApi.md#restaccountsaddressescontactrelationsaddresscontactrelationiddelete) | **DELETE** /rest/accounts/addresses/contact_relations/{addressContactRelationId} | Delete address contact relation
*AccountApi* | [**restAccountsAddressesContactRelationsAddressContactRelationIdGet**](docs/Api/AccountApi.md#restaccountsaddressescontactrelationsaddresscontactrelationidget) | **GET** /rest/accounts/addresses/contact_relations/{addressContactRelationId} | Get address contact relation
*AccountApi* | [**restAccountsAddressesContactRelationsGet**](docs/Api/AccountApi.md#restaccountsaddressescontactrelationsget) | **GET** /rest/accounts/addresses/contact_relations | List address contact relations
*AccountApi* | [**restAccountsAddressesContactRelationsPost**](docs/Api/AccountApi.md#restaccountsaddressescontactrelationspost) | **POST** /rest/accounts/addresses/contact_relations | Create address contact relations
*AccountApi* | [**restAccountsAddressesContactRelationsPut**](docs/Api/AccountApi.md#restaccountsaddressescontactrelationsput) | **PUT** /rest/accounts/addresses/contact_relations | Update address contact relations
*AccountApi* | [**restAccountsAddressesGet**](docs/Api/AccountApi.md#restaccountsaddressesget) | **GET** /rest/accounts/addresses | Get all available addresses
*AccountApi* | [**restAccountsAddressesOptionTypesGet**](docs/Api/AccountApi.md#restaccountsaddressesoptiontypesget) | **GET** /rest/accounts/addresses/option_types | List address option types
*AccountApi* | [**restAccountsAddressesOptionTypesOptionTypeIdDelete**](docs/Api/AccountApi.md#restaccountsaddressesoptiontypesoptiontypeiddelete) | **DELETE** /rest/accounts/addresses/option_types/{optionTypeId} | Delete address option type
*AccountApi* | [**restAccountsAddressesOptionTypesOptionTypeIdGet**](docs/Api/AccountApi.md#restaccountsaddressesoptiontypesoptiontypeidget) | **GET** /rest/accounts/addresses/option_types/{optionTypeId} | Get address option type
*AccountApi* | [**restAccountsAddressesOptionTypesOptionTypeIdPut**](docs/Api/AccountApi.md#restaccountsaddressesoptiontypesoptiontypeidput) | **PUT** /rest/accounts/addresses/option_types/{optionTypeId} | Update address option type
*AccountApi* | [**restAccountsAddressesOptionTypesPost**](docs/Api/AccountApi.md#restaccountsaddressesoptiontypespost) | **POST** /rest/accounts/addresses/option_types | Create address option type
*AccountApi* | [**restAccountsAddressesOptionsOptionIdDelete**](docs/Api/AccountApi.md#restaccountsaddressesoptionsoptioniddelete) | **DELETE** /rest/accounts/addresses/options/{optionId} | Delete address option by option ID
*AccountApi* | [**restAccountsAddressesOptionsOptionIdGet**](docs/Api/AccountApi.md#restaccountsaddressesoptionsoptionidget) | **GET** /rest/accounts/addresses/options/{optionId} | Get address option
*AccountApi* | [**restAccountsAddressesOptionsOptionIdPut**](docs/Api/AccountApi.md#restaccountsaddressesoptionsoptionidput) | **PUT** /rest/accounts/addresses/options/{optionId} | Update address option
*AccountApi* | [**restAccountsAddressesPosRelationsAddressPosRelationIdDelete**](docs/Api/AccountApi.md#restaccountsaddressesposrelationsaddressposrelationiddelete) | **DELETE** /rest/accounts/addresses/pos_relations/{addressPosRelationId} | Delete address POS relation
*AccountApi* | [**restAccountsAddressesPosRelationsAddressPosRelationIdGet**](docs/Api/AccountApi.md#restaccountsaddressesposrelationsaddressposrelationidget) | **GET** /rest/accounts/addresses/pos_relations/{addressPosRelationId} | Get address POS relation
*AccountApi* | [**restAccountsAddressesPosRelationsAddressPosRelationIdPut**](docs/Api/AccountApi.md#restaccountsaddressesposrelationsaddressposrelationidput) | **PUT** /rest/accounts/addresses/pos_relations/{addressPosRelationId} | Update address POS relation
*AccountApi* | [**restAccountsAddressesPosRelationsGet**](docs/Api/AccountApi.md#restaccountsaddressesposrelationsget) | **GET** /rest/accounts/addresses/pos_relations | List address POS relations
*AccountApi* | [**restAccountsAddressesPosRelationsPost**](docs/Api/AccountApi.md#restaccountsaddressesposrelationspost) | **POST** /rest/accounts/addresses/pos_relations | Create address POS relation
*AccountApi* | [**restAccountsAddressesPost**](docs/Api/AccountApi.md#restaccountsaddressespost) | **POST** /rest/accounts/addresses | Create address
*AccountApi* | [**restAccountsAddressesRelationTypesGet**](docs/Api/AccountApi.md#restaccountsaddressesrelationtypesget) | **GET** /rest/accounts/addresses/relation_types | List address relation types
*AccountApi* | [**restAccountsAddressesRelationsTypesApplicationsApplicationLangGet**](docs/Api/AccountApi.md#restaccountsaddressesrelationstypesapplicationsapplicationlangget) | **GET** /rest/accounts/addresses/relations/types/applications/{application}/{lang} | List address relation types
*AccountApi* | [**restAccountsAddressesWarehouseRelationsPost**](docs/Api/AccountApi.md#restaccountsaddresseswarehouserelationspost) | **POST** /rest/accounts/addresses/warehouse_relations | Create address warehouse relation
*AccountApi* | [**restAccountsAddressesWarehouseRelationsRelationIdDelete**](docs/Api/AccountApi.md#restaccountsaddresseswarehouserelationsrelationiddelete) | **DELETE** /rest/accounts/addresses/warehouse_relations/{relationId} | Delete address warehouse relation
*AccountApi* | [**restAccountsAddressesWarehouseRelationsRelationIdPut**](docs/Api/AccountApi.md#restaccountsaddresseswarehouserelationsrelationidput) | **PUT** /rest/accounts/addresses/warehouse_relations/{relationId} | Update address warehouse relation
*AccountApi* | [**restAccountsContactRelationsAccountContactRelationIdDelete**](docs/Api/AccountApi.md#restaccountscontactrelationsaccountcontactrelationiddelete) | **DELETE** /rest/accounts/contact_relations/{accountContactRelationId} | Delete account contact relation
*AccountApi* | [**restAccountsContactRelationsAccountContactRelationIdGet**](docs/Api/AccountApi.md#restaccountscontactrelationsaccountcontactrelationidget) | **GET** /rest/accounts/contact_relations/{accountContactRelationId} | Get account contact relation
*AccountApi* | [**restAccountsContactsBanksContactBankIdDelete**](docs/Api/AccountApi.md#restaccountscontactsbankscontactbankiddelete) | **DELETE** /rest/accounts/contacts/banks/{contactBankId} | Delete bank account
*AccountApi* | [**restAccountsContactsBanksContactBankIdGet**](docs/Api/AccountApi.md#restaccountscontactsbankscontactbankidget) | **GET** /rest/accounts/contacts/banks/{contactBankId} | Get bank account
*AccountApi* | [**restAccountsContactsBanksContactBankIdPut**](docs/Api/AccountApi.md#restaccountscontactsbankscontactbankidput) | **PUT** /rest/accounts/contacts/banks/{contactBankId} | Update bank account
*AccountApi* | [**restAccountsContactsBanksPost**](docs/Api/AccountApi.md#restaccountscontactsbankspost) | **POST** /rest/accounts/contacts/banks | Create bank account
*AccountApi* | [**restAccountsContactsClassesContactClassIdGet**](docs/Api/AccountApi.md#restaccountscontactsclassescontactclassidget) | **GET** /rest/accounts/contacts/classes/{contactClassId} | Get contact class
*AccountApi* | [**restAccountsContactsClassesGet**](docs/Api/AccountApi.md#restaccountscontactsclassesget) | **GET** /rest/accounts/contacts/classes | List contact classes
*AccountApi* | [**restAccountsContactsContactEventsContactEventIdDelete**](docs/Api/AccountApi.md#restaccountscontactscontacteventscontacteventiddelete) | **DELETE** /rest/accounts/contacts/contact_events/{contactEventId} | Delete contact event
*AccountApi* | [**restAccountsContactsContactEventsContactEventIdPut**](docs/Api/AccountApi.md#restaccountscontactscontacteventscontacteventidput) | **PUT** /rest/accounts/contacts/contact_events/{contactEventId} | Update contact event
*AccountApi* | [**restAccountsContactsContactEventsGet**](docs/Api/AccountApi.md#restaccountscontactscontacteventsget) | **GET** /rest/accounts/contacts/contact_events | List contact events
*AccountApi* | [**restAccountsContactsContactEventsPost**](docs/Api/AccountApi.md#restaccountscontactscontacteventspost) | **POST** /rest/accounts/contacts/contact_events | Create contact event
*AccountApi* | [**restAccountsContactsContactEventsTypesPreviewGet**](docs/Api/AccountApi.md#restaccountscontactscontacteventstypespreviewget) | **GET** /rest/accounts/contacts/contact_events/types/preview | Get contact event types as a key/value array
*AccountApi* | [**restAccountsContactsContactIdAccessDataLoginUrlGet**](docs/Api/AccountApi.md#restaccountscontactscontactidaccessdataloginurlget) | **GET** /rest/accounts/contacts/{contactId}/access_data/login_url | Get login URL
*AccountApi* | [**restAccountsContactsContactIdAccessDataNewPasswordPut**](docs/Api/AccountApi.md#restaccountscontactscontactidaccessdatanewpasswordput) | **PUT** /rest/accounts/contacts/{contactId}/access_data/new_password | Send password link for contact
*AccountApi* | [**restAccountsContactsContactIdAccessDataSetPasswordPut**](docs/Api/AccountApi.md#restaccountscontactscontactidaccessdatasetpasswordput) | **PUT** /rest/accounts/contacts/{contactId}/access_data/set_password | Update password for contact
*AccountApi* | [**restAccountsContactsContactIdAccessDataUnblockUserPut**](docs/Api/AccountApi.md#restaccountscontactscontactidaccessdataunblockuserput) | **PUT** /rest/accounts/contacts/{contactId}/access_data/unblock_user | Unblock contact
*AccountApi* | [**restAccountsContactsContactIdAccountsAccountIdDelete**](docs/Api/AccountApi.md#restaccountscontactscontactidaccountsaccountiddelete) | **DELETE** /rest/accounts/contacts/{contactId}/accounts/{accountId} | Delete account of the contact
*AccountApi* | [**restAccountsContactsContactIdAccountsAccountIdGet**](docs/Api/AccountApi.md#restaccountscontactscontactidaccountsaccountidget) | **GET** /rest/accounts/contacts/{contactId}/accounts/{accountId} | Get account of the contact
*AccountApi* | [**restAccountsContactsContactIdAccountsAccountIdPut**](docs/Api/AccountApi.md#restaccountscontactscontactidaccountsaccountidput) | **PUT** /rest/accounts/contacts/{contactId}/accounts/{accountId} | Update account
*AccountApi* | [**restAccountsContactsContactIdAccountsPost**](docs/Api/AccountApi.md#restaccountscontactscontactidaccountspost) | **POST** /rest/accounts/contacts/{contactId}/accounts | Create account for existing contact
*AccountApi* | [**restAccountsContactsContactIdAddressesAddressIdDelete**](docs/Api/AccountApi.md#restaccountscontactscontactidaddressesaddressiddelete) | **DELETE** /rest/accounts/contacts/{contactId}/addresses/{addressId} | Delete address of the contact
*AccountApi* | [**restAccountsContactsContactIdAddressesAddressIdPut**](docs/Api/AccountApi.md#restaccountscontactscontactidaddressesaddressidput) | **PUT** /rest/accounts/contacts/{contactId}/addresses/{addressId} | Update address of the contact
*AccountApi* | [**restAccountsContactsContactIdAddressesAddressIdTypesAddressTypeIdPrimaryPut**](docs/Api/AccountApi.md#restaccountscontactscontactidaddressesaddressidtypesaddresstypeidprimaryput) | **PUT** /rest/accounts/contacts/{contactId}/addresses/{addressId}/types/{addressTypeId}/primary | Set contact address per address type as primary address
*AccountApi* | [**restAccountsContactsContactIdAddressesAddressIdTypesAddressTypeIdResetPrimaryPut**](docs/Api/AccountApi.md#restaccountscontactscontactidaddressesaddressidtypesaddresstypeidresetprimaryput) | **PUT** /rest/accounts/contacts/{contactId}/addresses/{addressId}/types/{addressTypeId}/reset_primary | Reset contact primary address
*AccountApi* | [**restAccountsContactsContactIdAddressesPost**](docs/Api/AccountApi.md#restaccountscontactscontactidaddressespost) | **POST** /rest/accounts/contacts/{contactId}/addresses | Create address for existing contact
*AccountApi* | [**restAccountsContactsContactIdAddressesPrimaryGet**](docs/Api/AccountApi.md#restaccountscontactscontactidaddressesprimaryget) | **GET** /rest/accounts/contacts/{contactId}/addresses/primary | Get primary or last created addresses of contact
*AccountApi* | [**restAccountsContactsContactIdBanksGet**](docs/Api/AccountApi.md#restaccountscontactscontactidbanksget) | **GET** /rest/accounts/contacts/{contactId}/banks | List bank accounts
*AccountApi* | [**restAccountsContactsContactIdContactEventsGet**](docs/Api/AccountApi.md#restaccountscontactscontactidcontacteventsget) | **GET** /rest/accounts/contacts/{contactId}/contact_events | List contact events by contact ID
*AccountApi* | [**restAccountsContactsContactIdDelete**](docs/Api/AccountApi.md#restaccountscontactscontactiddelete) | **DELETE** /rest/accounts/contacts/{contactId} | Delete contact
*AccountApi* | [**restAccountsContactsContactIdGet**](docs/Api/AccountApi.md#restaccountscontactscontactidget) | **GET** /rest/accounts/contacts/{contactId} | Get contact
*AccountApi* | [**restAccountsContactsContactIdOptionsDelete**](docs/Api/AccountApi.md#restaccountscontactscontactidoptionsdelete) | **DELETE** /rest/accounts/contacts/{contactId}/options | Delete contact option
*AccountApi* | [**restAccountsContactsContactIdOptionsGet**](docs/Api/AccountApi.md#restaccountscontactscontactidoptionsget) | **GET** /rest/accounts/contacts/{contactId}/options | List contact options
*AccountApi* | [**restAccountsContactsContactIdOptionsPost**](docs/Api/AccountApi.md#restaccountscontactscontactidoptionspost) | **POST** /rest/accounts/contacts/{contactId}/options | Create contact option
*AccountApi* | [**restAccountsContactsContactIdOptionsPut**](docs/Api/AccountApi.md#restaccountscontactscontactidoptionsput) | **PUT** /rest/accounts/contacts/{contactId}/options | Update contact option
*AccountApi* | [**restAccountsContactsContactIdOptionsValidateGet**](docs/Api/AccountApi.md#restaccountscontactscontactidoptionsvalidateget) | **GET** /rest/accounts/contacts/{contactId}/options/validate | Validate contact option by given value
*AccountApi* | [**restAccountsContactsContactIdPut**](docs/Api/AccountApi.md#restaccountscontactscontactidput) | **PUT** /rest/accounts/contacts/{contactId} | Update contact
*AccountApi* | [**restAccountsContactsContactIdRelatedDataGet**](docs/Api/AccountApi.md#restaccountscontactscontactidrelateddataget) | **GET** /rest/accounts/contacts/{contactId}/related_data | List contact related data
*AccountApi* | [**restAccountsContactsContactIdVcardGet**](docs/Api/AccountApi.md#restaccountscontactscontactidvcardget) | **GET** /rest/accounts/contacts/{contactId}/vcard | Get vcard filestream of contact
*AccountApi* | [**restAccountsContactsDepartmentsDepartmentIdDelete**](docs/Api/AccountApi.md#restaccountscontactsdepartmentsdepartmentiddelete) | **DELETE** /rest/accounts/contacts/departments/{departmentId} | Delete contact department
*AccountApi* | [**restAccountsContactsDepartmentsDepartmentIdGet**](docs/Api/AccountApi.md#restaccountscontactsdepartmentsdepartmentidget) | **GET** /rest/accounts/contacts/departments/{departmentId} | Get contact department
*AccountApi* | [**restAccountsContactsDepartmentsDepartmentIdPut**](docs/Api/AccountApi.md#restaccountscontactsdepartmentsdepartmentidput) | **PUT** /rest/accounts/contacts/departments/{departmentId} | Update contact department
*AccountApi* | [**restAccountsContactsDepartmentsGet**](docs/Api/AccountApi.md#restaccountscontactsdepartmentsget) | **GET** /rest/accounts/contacts/departments | List contact departments
*AccountApi* | [**restAccountsContactsDepartmentsPost**](docs/Api/AccountApi.md#restaccountscontactsdepartmentspost) | **POST** /rest/accounts/contacts/departments | Create contact department
*AccountApi* | [**restAccountsContactsGet**](docs/Api/AccountApi.md#restaccountscontactsget) | **GET** /rest/accounts/contacts | List contacts
*AccountApi* | [**restAccountsContactsGroupFunctionsGet**](docs/Api/AccountApi.md#restaccountscontactsgroupfunctionsget) | **GET** /rest/accounts/contacts/group_functions | List all group function related data
*AccountApi* | [**restAccountsContactsGroupFunctionsPost**](docs/Api/AccountApi.md#restaccountscontactsgroupfunctionspost) | **POST** /rest/accounts/contacts/group_functions | Apply selected group function options for given contact IDs
*AccountApi* | [**restAccountsContactsOptionSubTypesGet**](docs/Api/AccountApi.md#restaccountscontactsoptionsubtypesget) | **GET** /rest/accounts/contacts/option_sub_types | List contact option sub-types
*AccountApi* | [**restAccountsContactsOptionSubTypesOptionSubTypeIdDelete**](docs/Api/AccountApi.md#restaccountscontactsoptionsubtypesoptionsubtypeiddelete) | **DELETE** /rest/accounts/contacts/option_sub_types/{optionSubTypeId} | Delete contact option sub-type
*AccountApi* | [**restAccountsContactsOptionSubTypesOptionSubTypeIdGet**](docs/Api/AccountApi.md#restaccountscontactsoptionsubtypesoptionsubtypeidget) | **GET** /rest/accounts/contacts/option_sub_types/{optionSubTypeId} | Get contact option sub-type
*AccountApi* | [**restAccountsContactsOptionSubTypesOptionSubTypeIdPut**](docs/Api/AccountApi.md#restaccountscontactsoptionsubtypesoptionsubtypeidput) | **PUT** /rest/accounts/contacts/option_sub_types/{optionSubTypeId} | Update contact option sub-type
*AccountApi* | [**restAccountsContactsOptionSubTypesPost**](docs/Api/AccountApi.md#restaccountscontactsoptionsubtypespost) | **POST** /rest/accounts/contacts/option_sub_types | Create contact option sub-type
*AccountApi* | [**restAccountsContactsOptionTypesGet**](docs/Api/AccountApi.md#restaccountscontactsoptiontypesget) | **GET** /rest/accounts/contacts/option_types | List contact option types
*AccountApi* | [**restAccountsContactsOptionTypesOptionTypeIdDelete**](docs/Api/AccountApi.md#restaccountscontactsoptiontypesoptiontypeiddelete) | **DELETE** /rest/accounts/contacts/option_types/{optionTypeId} | Delete contact option type
*AccountApi* | [**restAccountsContactsOptionTypesOptionTypeIdGet**](docs/Api/AccountApi.md#restaccountscontactsoptiontypesoptiontypeidget) | **GET** /rest/accounts/contacts/option_types/{optionTypeId} | Get contact option type
*AccountApi* | [**restAccountsContactsOptionTypesOptionTypeIdPut**](docs/Api/AccountApi.md#restaccountscontactsoptiontypesoptiontypeidput) | **PUT** /rest/accounts/contacts/option_types/{optionTypeId} | Update contact option type
*AccountApi* | [**restAccountsContactsOptionTypesPost**](docs/Api/AccountApi.md#restaccountscontactsoptiontypespost) | **POST** /rest/accounts/contacts/option_types | Create contact option type
*AccountApi* | [**restAccountsContactsOptionsOptionIdDelete**](docs/Api/AccountApi.md#restaccountscontactsoptionsoptioniddelete) | **DELETE** /rest/accounts/contacts/options/{optionId} | Delete contact option
*AccountApi* | [**restAccountsContactsOptionsOptionIdGet**](docs/Api/AccountApi.md#restaccountscontactsoptionsoptionidget) | **GET** /rest/accounts/contacts/options/{optionId} | Get contact option
*AccountApi* | [**restAccountsContactsOptionsOptionIdPut**](docs/Api/AccountApi.md#restaccountscontactsoptionsoptionidput) | **PUT** /rest/accounts/contacts/options/{optionId} | Update contact option
*AccountApi* | [**restAccountsContactsPositionsGet**](docs/Api/AccountApi.md#restaccountscontactspositionsget) | **GET** /rest/accounts/contacts/positions | List contact positions
*AccountApi* | [**restAccountsContactsPositionsPositionIdDelete**](docs/Api/AccountApi.md#restaccountscontactspositionspositioniddelete) | **DELETE** /rest/accounts/contacts/positions/{positionId} | Delete contact position
*AccountApi* | [**restAccountsContactsPositionsPositionIdGet**](docs/Api/AccountApi.md#restaccountscontactspositionspositionidget) | **GET** /rest/accounts/contacts/positions/{positionId} | Get contact position
*AccountApi* | [**restAccountsContactsPositionsPositionIdPut**](docs/Api/AccountApi.md#restaccountscontactspositionspositionidput) | **PUT** /rest/accounts/contacts/positions/{positionId} | Update contact position
*AccountApi* | [**restAccountsContactsPositionsPost**](docs/Api/AccountApi.md#restaccountscontactspositionspost) | **POST** /rest/accounts/contacts/positions | Create contact position
*AccountApi* | [**restAccountsContactsPost**](docs/Api/AccountApi.md#restaccountscontactspost) | **POST** /rest/accounts/contacts | Create contact
*AccountApi* | [**restAccountsContactsTypesGet**](docs/Api/AccountApi.md#restaccountscontactstypesget) | **GET** /rest/accounts/contacts/types | List contact types
*AccountApi* | [**restAccountsContactsTypesPost**](docs/Api/AccountApi.md#restaccountscontactstypespost) | **POST** /rest/accounts/contacts/types | Create contact type
*AccountApi* | [**restAccountsContactsTypesTypeIdDelete**](docs/Api/AccountApi.md#restaccountscontactstypestypeiddelete) | **DELETE** /rest/accounts/contacts/types/{typeId} | Delete contact type
*AccountApi* | [**restAccountsContactsTypesTypeIdGet**](docs/Api/AccountApi.md#restaccountscontactstypestypeidget) | **GET** /rest/accounts/contacts/types/{typeId} | Get contact type
*AccountApi* | [**restAccountsContactsTypesTypeIdPut**](docs/Api/AccountApi.md#restaccountscontactstypestypeidput) | **PUT** /rest/accounts/contacts/types/{typeId} | Update contact type
*AccountApi* | [**restAccountsGet**](docs/Api/AccountApi.md#restaccountsget) | **GET** /rest/accounts | List accounts
*AccountApi* | [**restAccountsPost**](docs/Api/AccountApi.md#restaccountspost) | **POST** /rest/accounts | Create account
*AccountApi* | [**restOrdersAddressesPost**](docs/Api/AccountApi.md#restordersaddressespost) | **POST** /rest/orders/addresses | Create address for existing order
*AccountApi* | [**restStockmanagementWarehousesAddressesPost**](docs/Api/AccountApi.md#reststockmanagementwarehousesaddressespost) | **POST** /rest/stockmanagement/warehouses/addresses | Create address for existing warehouse
*AccountingApi* | [**restAccountingLocationsExistingAccountsGet**](docs/Api/AccountingApi.md#restaccountinglocationsexistingaccountsget) | **GET** /rest/accounting/locations/existing_accounts | Get all unique posting accounts
*AccountingApi* | [**restAccountingLocationsLocationIdCountriesCountryIdRevenueAccountsGet**](docs/Api/AccountingApi.md#restaccountinglocationslocationidcountriescountryidrevenueaccountsget) | **GET** /rest/accounting/locations/{locationId}/countries/{countryId}/revenue_accounts | Get the revenue account configuration of a country
*AccountingApi* | [**restAccountingLocationsLocationIdDebtorAccountConfigurationsGet**](docs/Api/AccountingApi.md#restaccountinglocationslocationiddebtoraccountconfigurationsget) | **GET** /rest/accounting/locations/{locationId}/debtor_account_configurations | Get debtor account configuration of an accounting location
*AccountingApi* | [**restAccountingLocationsLocationIdDebtorAccountsModeGet**](docs/Api/AccountingApi.md#restaccountinglocationslocationiddebtoraccountsmodeget) | **GET** /rest/accounting/locations/{locationId}/debtor_accounts/{mode} | Lists the debtor accounts by mode.
*AccountingApi* | [**restAccountingLocationsLocationIdDelete**](docs/Api/AccountingApi.md#restaccountinglocationslocationiddelete) | **DELETE** /rest/accounting/locations/{locationId} | Delete an accounting location
*AccountingApi* | [**restAccountingLocationsLocationIdGet**](docs/Api/AccountingApi.md#restaccountinglocationslocationidget) | **GET** /rest/accounting/locations/{locationId} | Get an accounting location
*AccountingApi* | [**restAccountingLocationsLocationIdPostingAccountsGet**](docs/Api/AccountingApi.md#restaccountinglocationslocationidpostingaccountsget) | **GET** /rest/accounting/locations/{locationId}/posting_accounts | Get all posting accounts by locationId
*AccountingApi* | [**restAccountingLocationsLocationIdPostingKeyConfigurationsGet**](docs/Api/AccountingApi.md#restaccountinglocationslocationidpostingkeyconfigurationsget) | **GET** /rest/accounting/locations/{locationId}/posting_key_configurations | Get a posting key configuration of an accounting location
*AccountingApi* | [**restAccountingLocationsLocationIdPut**](docs/Api/AccountingApi.md#restaccountinglocationslocationidput) | **PUT** /rest/accounting/locations/{locationId} | Update an accounting location
*AccountingApi* | [**restAccountingLocationsLocationIdRevenueAccountConfigurationsGet**](docs/Api/AccountingApi.md#restaccountinglocationslocationidrevenueaccountconfigurationsget) | **GET** /rest/accounting/locations/{locationId}/revenue_account_configurations | Get the revenue account configuration of an accounting location
*AccountingApi* | [**restAccountingLocationsLocationIdSettingsGet**](docs/Api/AccountingApi.md#restaccountinglocationslocationidsettingsget) | **GET** /rest/accounting/locations/{locationId}/settings | Get accounting location settings
*AccountingApi* | [**restAccountingLocationsLocationIdTypePostingAccountsGet**](docs/Api/AccountingApi.md#restaccountinglocationslocationidtypepostingaccountsget) | **GET** /rest/accounting/locations/{locationId}/{type}/posting_accounts | Get all posting accounts by locationId and type
*AccountingApi* | [**restAccountingLocationsPost**](docs/Api/AccountingApi.md#restaccountinglocationspost) | **POST** /rest/accounting/locations | Create an accounting location
*AccountingApi* | [**restAccountingLocationsPostingAccountsGet**](docs/Api/AccountingApi.md#restaccountinglocationspostingaccountsget) | **GET** /rest/accounting/locations/posting_accounts | Get all posting accounts
*AccountingApi* | [**restAccountingLocationsPostingAccountsIdDelete**](docs/Api/AccountingApi.md#restaccountinglocationspostingaccountsiddelete) | **DELETE** /rest/accounting/locations/posting_accounts/{id} | Delete an posting account
*AccountingApi* | [**restAccountingLocationsPostingAccountsIdGet**](docs/Api/AccountingApi.md#restaccountinglocationspostingaccountsidget) | **GET** /rest/accounting/locations/posting_accounts/{id} | Gets posting account by the unique id
*AccountingApi* | [**restAccountingLocationsPostingAccountsPost**](docs/Api/AccountingApi.md#restaccountinglocationspostingaccountspost) | **POST** /rest/accounting/locations/posting_accounts | Save posting accounts
*AccountingApi* | [**restAccountingLocationsRevenueAccountConfigurationsGet**](docs/Api/AccountingApi.md#restaccountinglocationsrevenueaccountconfigurationsget) | **GET** /rest/accounting/locations/revenue_account_configurations | List revenue account configurations
*AccountingApi* | [**restAccountingLocationsWebstoreIdCountryIdPostingAccountsGet**](docs/Api/AccountingApi.md#restaccountinglocationswebstoreidcountryidpostingaccountsget) | **GET** /rest/accounting/locations/{webstoreId}/{countryId}/posting_accounts | Get all posting accounts for a country of a webstore
*AccountingApi* | [**restAccountingStoresLocationsGet**](docs/Api/AccountingApi.md#restaccountingstoreslocationsget) | **GET** /rest/accounting/stores/locations | List all accounting locations
*AccountingApi* | [**restAccountingStoresPlentyIdLocationsGet**](docs/Api/AccountingApi.md#restaccountingstoresplentyidlocationsget) | **GET** /rest/accounting/stores/{plentyId}/locations | List accounting locations of a client
*AccountingApi* | [**restStoresPlentyIdLocationsGet**](docs/Api/AccountingApi.md#reststoresplentyidlocationsget) | **GET** /rest/stores/{plentyId}/locations | Get the ID of an accounting location of a country
*AccountingApi* | [**restVatGet**](docs/Api/AccountingApi.md#restvatget) | **GET** /rest/vat | List VAT configurations.
*AccountingApi* | [**restVatLocationsLocationIdCountriesCountryIdDateDateGet**](docs/Api/AccountingApi.md#restvatlocationslocationidcountriescountryiddatedateget) | **GET** /rest/vat/locations/{locationId}/countries/{countryId}/date/{date} | Get a VAT configuration for a country in a location.
*AccountingApi* | [**restVatLocationsLocationIdCountriesCountryIdGet**](docs/Api/AccountingApi.md#restvatlocationslocationidcountriescountryidget) | **GET** /rest/vat/locations/{locationId}/countries/{countryId} | List VAT configurations for one country of delivery
*AccountingApi* | [**restVatLocationsLocationIdGet**](docs/Api/AccountingApi.md#restvatlocationslocationidget) | **GET** /rest/vat/locations/{locationId} | List VAT configurations of an accounting location
*AccountingApi* | [**restVatPost**](docs/Api/AccountingApi.md#restvatpost) | **POST** /rest/vat | Create a VAT configuration
*AccountingApi* | [**restVatStandardGet**](docs/Api/AccountingApi.md#restvatstandardget) | **GET** /rest/vat/standard | Get a VAT configuration for the standard accounting location of a client
*AccountingApi* | [**restVatVatIdGet**](docs/Api/AccountingApi.md#restvatvatidget) | **GET** /rest/vat/{vatId} | Get a VAT configuration by id
*AccountingApi* | [**restVatVatIdPut**](docs/Api/AccountingApi.md#restvatvatidput) | **PUT** /rest/vat/{vatId} | Update a VAT configuration
*AddressDesignApi* | [**restAddressLayoutCountryCountryIdGet**](docs/Api/AddressDesignApi.md#restaddresslayoutcountrycountryidget) | **GET** /rest/address_layout/country/{countryId} | Get layout by country id
*AddressDesignApi* | [**restAddressLayoutDefaultGet**](docs/Api/AddressDesignApi.md#restaddresslayoutdefaultget) | **GET** /rest/address_layout/default | Get default layout
*AddressDesignApi* | [**restAddressLayoutFieldsGet**](docs/Api/AddressDesignApi.md#restaddresslayoutfieldsget) | **GET** /rest/address_layout_fields | List all available fields
*AddressDesignApi* | [**restAddressLayoutGet**](docs/Api/AddressDesignApi.md#restaddresslayoutget) | **GET** /rest/address_layout | List all layouts with their contents
*AddressDesignApi* | [**restAddressLayoutPost**](docs/Api/AddressDesignApi.md#restaddresslayoutpost) | **POST** /rest/address_layout | Create new layout
*AddressDesignApi* | [**restAddressLayoutUuidDelete**](docs/Api/AddressDesignApi.md#restaddresslayoutuuiddelete) | **DELETE** /rest/address_layout/{uuid} | Delete layout
*AddressDesignApi* | [**restAddressLayoutUuidGet**](docs/Api/AddressDesignApi.md#restaddresslayoutuuidget) | **GET** /rest/address_layout/{uuid} | Get layout
*AddressDesignApi* | [**restAddressLayoutUuidPut**](docs/Api/AddressDesignApi.md#restaddresslayoutuuidput) | **PUT** /rest/address_layout/{uuid} | Update layout
*AuthenticationApi* | [**restCheckPasswordPost**](docs/Api/AuthenticationApi.md#restcheckpasswordpost) | **POST** /rest/check_password | 
*AuthenticationApi* | [**restCheckPinPost**](docs/Api/AuthenticationApi.md#restcheckpinpost) | **POST** /rest/check_pin | 
*AuthenticationApi* | [**restLoginPost**](docs/Api/AuthenticationApi.md#restloginpost) | **POST** /rest/login | Login
*AuthenticationApi* | [**restLoginRefreshPost**](docs/Api/AuthenticationApi.md#restloginrefreshpost) | **POST** /rest/login/refresh | Refresh
*AuthenticationApi* | [**restLogoutPost**](docs/Api/AuthenticationApi.md#restlogoutpost) | **POST** /rest/logout | Logout
*AuthenticationApi* | [**restQuickLoginPost**](docs/Api/AuthenticationApi.md#restquickloginpost) | **POST** /rest/quick_login | 
*AuthenticationApi* | [**restSessionLimitsGet**](docs/Api/AuthenticationApi.md#restsessionlimitsget) | **GET** /rest/session_limits | 
*AuthenticationApi* | [**restUserGet**](docs/Api/AuthenticationApi.md#restuserget) | **GET** /rest/user | User
*AuthorizationApi* | [**restAuthorizedUserGet**](docs/Api/AuthorizationApi.md#restauthorizeduserget) | **GET** /rest/authorized_user | Get authorized user
*AuthorizationApi* | [**restUserAuthorizedUserWithUiConfigGet**](docs/Api/AuthorizationApi.md#restuserauthorizeduserwithuiconfigget) | **GET** /rest/user/authorized_user_with_ui_config | Get authorized user with UiConfig
*AuthorizationApi* | [**restUsersMeGet**](docs/Api/AuthorizationApi.md#restusersmeget) | **GET** /rest/users/me | Get authorized user
*BasketApi* | [**restBasketGet**](docs/Api/BasketApi.md#restbasketget) | **GET** /rest/basket | Get basket
*BasketApi* | [**restBasketItemsGet**](docs/Api/BasketApi.md#restbasketitemsget) | **GET** /rest/basket/items | List basket items
*BasketApi* | [**restBasketItemsIdGet**](docs/Api/BasketApi.md#restbasketitemsidget) | **GET** /rest/basket/items/{id} | Find a basket item by it&#39;s ID
*BasketApi* | [**restBasketItemsPost**](docs/Api/BasketApi.md#restbasketitemspost) | **POST** /rest/basket/items | Add item to basket
*BatchApi* | [**restBatchGet**](docs/Api/BatchApi.md#restbatchget) | **GET** /rest/batch | Make batch requests
*BlogApi* | [**restBlogsPostPost**](docs/Api/BlogApi.md#restblogspostpost) | **POST** /rest/blogs/post | Create a blog post
*BlogApi* | [**restBlogsPostPostIdDelete**](docs/Api/BlogApi.md#restblogspostpostiddelete) | **DELETE** /rest/blogs/post/{postId} | Delete a blog post
*BlogApi* | [**restBlogsPostPostIdGet**](docs/Api/BlogApi.md#restblogspostpostidget) | **GET** /rest/blogs/post/{postId} | Get a blog post
*BlogApi* | [**restBlogsPostPostIdPut**](docs/Api/BlogApi.md#restblogspostpostidput) | **PUT** /rest/blogs/post/{postId} | Update a blog post
*BlogApi* | [**restBlogsPostsGet**](docs/Api/BlogApi.md#restblogspostsget) | **GET** /rest/blogs/posts | List blog posts
*BoardApi* | [**restBoardsBoardIdColumnsColumnIdDelete**](docs/Api/BoardApi.md#restboardsboardidcolumnscolumniddelete) | **DELETE** /rest/boards/{boardId}/columns/{columnId} | Delete column
*BoardApi* | [**restBoardsBoardIdColumnsColumnIdPositionPut**](docs/Api/BoardApi.md#restboardsboardidcolumnscolumnidpositionput) | **PUT** /rest/boards/{boardId}/columns/{columnId}/position | Update position of of a column
*BoardApi* | [**restBoardsBoardIdColumnsColumnIdPost**](docs/Api/BoardApi.md#restboardsboardidcolumnscolumnidpost) | **POST** /rest/boards/{boardId}/columns/{columnId} | Copy column
*BoardApi* | [**restBoardsBoardIdColumnsColumnIdPut**](docs/Api/BoardApi.md#restboardsboardidcolumnscolumnidput) | **PUT** /rest/boards/{boardId}/columns/{columnId} | Update column
*BoardApi* | [**restBoardsBoardIdColumnsColumnIdTasksGet**](docs/Api/BoardApi.md#restboardsboardidcolumnscolumnidtasksget) | **GET** /rest/boards/{boardId}/columns/{columnId}/tasks | List all task of a column
*BoardApi* | [**restBoardsBoardIdColumnsColumnIdTasksPost**](docs/Api/BoardApi.md#restboardsboardidcolumnscolumnidtaskspost) | **POST** /rest/boards/{boardId}/columns/{columnId}/tasks | Create task in specific column
*BoardApi* | [**restBoardsBoardIdColumnsColumnIdTasksTaskIdDelete**](docs/Api/BoardApi.md#restboardsboardidcolumnscolumnidtaskstaskiddelete) | **DELETE** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId} | Delete task
*BoardApi* | [**restBoardsBoardIdColumnsColumnIdTasksTaskIdGet**](docs/Api/BoardApi.md#restboardsboardidcolumnscolumnidtaskstaskidget) | **GET** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId} | Get task by ID
*BoardApi* | [**restBoardsBoardIdColumnsColumnIdTasksTaskIdPositionPut**](docs/Api/BoardApi.md#restboardsboardidcolumnscolumnidtaskstaskidpositionput) | **PUT** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId}/position | Update task position
*BoardApi* | [**restBoardsBoardIdColumnsColumnIdTasksTaskIdPost**](docs/Api/BoardApi.md#restboardsboardidcolumnscolumnidtaskstaskidpost) | **POST** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId} | Copy task
*BoardApi* | [**restBoardsBoardIdColumnsColumnIdTasksTaskIdPut**](docs/Api/BoardApi.md#restboardsboardidcolumnscolumnidtaskstaskidput) | **PUT** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId} | Update task
*BoardApi* | [**restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesPost**](docs/Api/BoardApi.md#restboardsboardidcolumnscolumnidtaskstaskidreferencespost) | **POST** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId}/references | Create reference
*BoardApi* | [**restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceIdDelete**](docs/Api/BoardApi.md#restboardsboardidcolumnscolumnidtaskstaskidreferencesreferenceiddelete) | **DELETE** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId}/references/{referenceId} | Delete reference from a given task
*BoardApi* | [**restBoardsBoardIdColumnsColumnIdTasksTaskIdReferencesReferenceTypeReferenceKeyGet**](docs/Api/BoardApi.md#restboardsboardidcolumnscolumnidtaskstaskidreferencesreferencetypereferencekeyget) | **GET** /rest/boards/{boardId}/columns/{columnId}/tasks/{taskId}/references/{referenceType}/{referenceKey} | Check reference key
*BoardApi* | [**restBoardsBoardIdColumnsGet**](docs/Api/BoardApi.md#restboardsboardidcolumnsget) | **GET** /rest/boards/{boardId}/columns | List all columns of a given board
*BoardApi* | [**restBoardsBoardIdColumnsPost**](docs/Api/BoardApi.md#restboardsboardidcolumnspost) | **POST** /rest/boards/{boardId}/columns | Create column and assign it to a board
*BoardsApi* | [**restBoardsBoardIdDelete**](docs/Api/BoardsApi.md#restboardsboardiddelete) | **DELETE** /rest/boards/{boardId} | Delete board
*BoardsApi* | [**restBoardsBoardIdGet**](docs/Api/BoardsApi.md#restboardsboardidget) | **GET** /rest/boards/{boardId} | Get board by ID
*BoardsApi* | [**restBoardsBoardIdPost**](docs/Api/BoardsApi.md#restboardsboardidpost) | **POST** /rest/boards/{boardId} | Copy board
*BoardsApi* | [**restBoardsBoardIdPut**](docs/Api/BoardsApi.md#restboardsboardidput) | **PUT** /rest/boards/{boardId} | Update board
*BoardsApi* | [**restBoardsGet**](docs/Api/BoardsApi.md#restboardsget) | **GET** /rest/boards | List all boards
*BoardsApi* | [**restBoardsPost**](docs/Api/BoardsApi.md#restboardspost) | **POST** /rest/boards | Create new board
*CategoryApi* | [**restCategoriesGet**](docs/Api/CategoryApi.md#restcategoriesget) | **GET** /rest/categories | List categories
*CategoryApi* | [**restCategoriesIdClientsDelete**](docs/Api/CategoryApi.md#restcategoriesidclientsdelete) | **DELETE** /rest/categories/{id}/clients | Deactivate availability for clients
*CategoryApi* | [**restCategoriesIdDelete**](docs/Api/CategoryApi.md#restcategoriesiddelete) | **DELETE** /rest/categories/{id} | Deletes a category
*CategoryApi* | [**restCategoriesIdDetailsDelete**](docs/Api/CategoryApi.md#restcategoriesiddetailsdelete) | **DELETE** /rest/categories/{id}/details | Delete category details for the specified languages
*CategoryApi* | [**restCategoriesIdGet**](docs/Api/CategoryApi.md#restcategoriesidget) | **GET** /rest/categories/{id} | Get a category
*CategoryApi* | [**restCategoriesIdPut**](docs/Api/CategoryApi.md#restcategoriesidput) | **PUT** /rest/categories/{id} | Updates one category
*CategoryApi* | [**restCategoriesIdTemplatesDelete**](docs/Api/CategoryApi.md#restcategoriesidtemplatesdelete) | **DELETE** /rest/categories/{id}/templates | Delete a category template
*CategoryApi* | [**restCategoriesIdTemplatesGet**](docs/Api/CategoryApi.md#restcategoriesidtemplatesget) | **GET** /rest/categories/{id}/templates | Get a category template
*CategoryApi* | [**restCategoriesIdTemplatesPut**](docs/Api/CategoryApi.md#restcategoriesidtemplatesput) | **PUT** /rest/categories/{id}/templates | Update a category template
*CategoryApi* | [**restCategoriesPost**](docs/Api/CategoryApi.md#restcategoriespost) | **POST** /rest/categories | Creates new categories
*CategoryApi* | [**restCategoriesPut**](docs/Api/CategoryApi.md#restcategoriesput) | **PUT** /rest/categories | Updates categories
*CategoryApi* | [**restCategoryBranchesGet**](docs/Api/CategoryApi.md#restcategorybranchesget) | **GET** /rest/category_branches | Get category trees
*CategoryApi* | [**restCategoryBranchesIdGet**](docs/Api/CategoryApi.md#restcategorybranchesidget) | **GET** /rest/category_branches/{id} | Get category tree
*CloudApi* | [**restStorageFrontendFileDelete**](docs/Api/CloudApi.md#reststoragefrontendfiledelete) | **DELETE** /rest/storage/frontend/file | Remove a single object from frontend storage.
*CloudApi* | [**restStorageFrontendFileGet**](docs/Api/CloudApi.md#reststoragefrontendfileget) | **GET** /rest/storage/frontend/file | Get file information for a single object in frontend storage. Append public cloudfront url to retrieved object.
*CloudApi* | [**restStorageFrontendFileMetadataGet**](docs/Api/CloudApi.md#reststoragefrontendfilemetadataget) | **GET** /rest/storage/frontend/file/metadata | Get assigend metadata for a single storage object
*CloudApi* | [**restStorageFrontendFileMetadataPost**](docs/Api/CloudApi.md#reststoragefrontendfilemetadatapost) | **POST** /rest/storage/frontend/file/metadata | Update metadata of an storage object
*CloudApi* | [**restStorageFrontendFilePost**](docs/Api/CloudApi.md#reststoragefrontendfilepost) | **POST** /rest/storage/frontend/file | Upload a single file to frontend storage.
*CloudApi* | [**restStorageFrontendFilesDelete**](docs/Api/CloudApi.md#reststoragefrontendfilesdelete) | **DELETE** /rest/storage/frontend/files | Delete files from frontend storage.
*CloudApi* | [**restStorageFrontendFilesGet**](docs/Api/CloudApi.md#reststoragefrontendfilesget) | **GET** /rest/storage/frontend/files | List files from frontend storage. Append public cloudfront url to each retrieved object.
*CloudApi* | [**restStorageFrontendObjectUrlGet**](docs/Api/CloudApi.md#reststoragefrontendobjecturlget) | **GET** /rest/storage/frontend/object-url | Get the URL for a layout document
*CloudApi* | [**restStorageLayoutDelete**](docs/Api/CloudApi.md#reststoragelayoutdelete) | **DELETE** /rest/storage/layout | Delete layout documents
*CloudApi* | [**restStorageLayoutListGet**](docs/Api/CloudApi.md#reststoragelayoutlistget) | **GET** /rest/storage/layout/list | List layout documents
*CloudApi* | [**restStorageLayoutObjectUrlGet**](docs/Api/CloudApi.md#reststoragelayoutobjecturlget) | **GET** /rest/storage/layout/object-url | Get the URL for a layout document
*CloudApi* | [**restStorageLayoutPost**](docs/Api/CloudApi.md#reststoragelayoutpost) | **POST** /rest/storage/layout | Upload a layout document
*CloudApi* | [**restStorageOrderPropertiesObjectUrlGet**](docs/Api/CloudApi.md#reststorageorderpropertiesobjecturlget) | **GET** /rest/storage/order-properties/object-url | Get the URL for a order property file
*CloudApi* | [**restStoragePluginsInboxCommitPost**](docs/Api/CloudApi.md#reststoragepluginsinboxcommitpost) | **POST** /rest/storage/plugins/inbox/commit | 
*CloudApi* | [**restStoragePluginsInboxDelete**](docs/Api/CloudApi.md#reststoragepluginsinboxdelete) | **DELETE** /rest/storage/plugins/inbox | Delete files from the inbox
*CloudApi* | [**restStoragePluginsInboxListGet**](docs/Api/CloudApi.md#reststoragepluginsinboxlistget) | **GET** /rest/storage/plugins/inbox/list | List files from the inbox
*CloudApi* | [**restStoragePluginsInboxObjectUrlGet**](docs/Api/CloudApi.md#reststoragepluginsinboxobjecturlget) | **GET** /rest/storage/plugins/inbox/object-url | Get the content of a file from the inbox
*CloudApi* | [**restStoragePluginsInboxPost**](docs/Api/CloudApi.md#reststoragepluginsinboxpost) | **POST** /rest/storage/plugins/inbox | Upload a file to the inbox
*CloudApi* | [**restSystemCloudMetricsGet**](docs/Api/CloudApi.md#restsystemcloudmetricsget) | **GET** /rest/system/cloud/metrics | Get the cloud metrics for this system
*CloudApi* | [**restSystemMetricsPlentyIdDateGet**](docs/Api/CloudApi.md#restsystemmetricsplentyiddateget) | **GET** /rest/system/metrics/{plentyId}/{date} | Supply usage data for given plentymarkets system
*CommentApi* | [**restCommentsCommentIdDelete**](docs/Api/CommentApi.md#restcommentscommentiddelete) | **DELETE** /rest/comments/{commentId} | Delete a comment
*CommentApi* | [**restCommentsCommentIdGet**](docs/Api/CommentApi.md#restcommentscommentidget) | **GET** /rest/comments/{commentId} | Get a comment
*CommentApi* | [**restCommentsCommentIdPut**](docs/Api/CommentApi.md#restcommentscommentidput) | **PUT** /rest/comments/{commentId} | 
*CommentApi* | [**restCommentsPost**](docs/Api/CommentApi.md#restcommentspost) | **POST** /rest/comments | Create a comment
*CommentApi* | [**restCommentsReferenceTypeReferenceValueGet**](docs/Api/CommentApi.md#restcommentsreferencetypereferencevalueget) | **GET** /rest/comments/{referenceType}/{referenceValue} | List comments
*ConfigurationApi* | [**restPluginsPluginIdPluginSetsPluginSetIdConfigurationLayoutGet**](docs/Api/ConfigurationApi.md#restpluginspluginidpluginsetspluginsetidconfigurationlayoutget) | **GET** /rest/plugins/{pluginId}/plugin_sets/{pluginSetId}/configuration_layout | 
*ConfigurationApi* | [**restPluginsPluginIdPluginSetsPluginSetIdConfigurationsGet**](docs/Api/ConfigurationApi.md#restpluginspluginidpluginsetspluginsetidconfigurationsget) | **GET** /rest/plugins/{pluginId}/plugin_sets/{pluginSetId}/configurations | 
*ConfigurationApi* | [**restPluginsPluginIdPluginSetsPluginSetIdConfigurationsPut**](docs/Api/ConfigurationApi.md#restpluginspluginidpluginsetspluginsetidconfigurationsput) | **PUT** /rest/plugins/{pluginId}/plugin_sets/{pluginSetId}/configurations | 
*ConfigurationApi* | [**restPluginsPluginSetsPluginSetIdConfigurationsExportGet**](docs/Api/ConfigurationApi.md#restpluginspluginsetspluginsetidconfigurationsexportget) | **GET** /rest/plugins/plugin_sets/{pluginSetId}/configurations/export | 
*ConfigurationApi* | [**restPluginsPluginSetsPluginSetIdConfigurationsImportPost**](docs/Api/ConfigurationApi.md#restpluginspluginsetspluginsetidconfigurationsimportpost) | **POST** /rest/plugins/plugin_sets/{pluginSetId}/configurations/import | 
*ContactApi* | [**restAccountsContactsContactIdDocumentGet**](docs/Api/ContactApi.md#restaccountscontactscontactiddocumentget) | **GET** /rest/accounts/contacts/{contactId}/document | Get storage object from contact documents
*ContactApi* | [**restAccountsContactsContactIdDocumentPost**](docs/Api/ContactApi.md#restaccountscontactscontactiddocumentpost) | **POST** /rest/accounts/contacts/{contactId}/document | Upload document to contact directory
*ContactApi* | [**restAccountsContactsContactIdDocumentUrlGet**](docs/Api/ContactApi.md#restaccountscontactscontactiddocumenturlget) | **GET** /rest/accounts/contacts/{contactId}/document/url | Get temporary url for document
*ContactApi* | [**restAccountsContactsContactIdDocumentsDelete**](docs/Api/ContactApi.md#restaccountscontactscontactiddocumentsdelete) | **DELETE** /rest/accounts/contacts/{contactId}/documents | Delete files from contact documents
*ContactApi* | [**restAccountsContactsContactIdDocumentsGet**](docs/Api/ContactApi.md#restaccountscontactscontactiddocumentsget) | **GET** /rest/accounts/contacts/{contactId}/documents | List documents of a contact
*ContactAnonymizationApi* | [**restAccountsContactsContactIdAnonymizePut**](docs/Api/ContactAnonymizationApi.md#restaccountscontactscontactidanonymizeput) | **PUT** /rest/accounts/contacts/{contactId}/anonymize | Anonymize contact
*ConvertGuestsApi* | [**restAccountsGuestsConvertPost**](docs/Api/ConvertGuestsApi.md#restaccountsguestsconvertpost) | **POST** /rest/accounts/guests/convert | Convert guest account into regular account
*CustomerContractApi* | [**restCustomerContractsContractIdDocumentGet**](docs/Api/CustomerContractApi.md#restcustomercontractscontractiddocumentget) | **GET** /rest/customer_contracts/{contractId}/document | Starts download of contract document
*CustomerContractApi* | [**restCustomerContractsContractIdGet**](docs/Api/CustomerContractApi.md#restcustomercontractscontractidget) | **GET** /rest/customer_contracts/{contractId} | Returns a single contract
*CustomerContractApi* | [**restCustomerContractsContractIdSignDocumentGet**](docs/Api/CustomerContractApi.md#restcustomercontractscontractidsigndocumentget) | **GET** /rest/customer_contracts/{contractId}/sign/document | Starts download of signed contract document
*CustomerContractApi* | [**restCustomerContractsContractIdSignGet**](docs/Api/CustomerContractApi.md#restcustomercontractscontractidsignget) | **GET** /rest/customer_contracts/{contractId}/sign | Returns signing of a contract
*CustomerContractApi* | [**restCustomerContractsContractIdSignPost**](docs/Api/CustomerContractApi.md#restcustomercontractscontractidsignpost) | **POST** /rest/customer_contracts/{contractId}/sign | Sign a contract
*CustomerContractApi* | [**restCustomerContractsGet**](docs/Api/CustomerContractApi.md#restcustomercontractsget) | **GET** /rest/customer_contracts | List contracts
*CustomerContractApi* | [**restCustomerContractsPost**](docs/Api/CustomerContractApi.md#restcustomercontractspost) | **POST** /rest/customer_contracts | Creates a new contract
*DocumentApi* | [**restCategoriesCategoryIdDocumentsDocumentIdDelete**](docs/Api/DocumentApi.md#restcategoriescategoryiddocumentsdocumentiddelete) | **DELETE** /rest/categories/{categoryId}/documents/{documentId} | Deletes a category document. The ID of the document must be specified.
*DocumentApi* | [**restCategoriesCategoryIdDocumentsDownloadsGet**](docs/Api/DocumentApi.md#restcategoriescategoryiddocumentsdownloadsget) | **GET** /rest/categories/{categoryId}/documents/downloads | Download category documents
*DocumentApi* | [**restCategoriesCategoryIdDocumentsGet**](docs/Api/DocumentApi.md#restcategoriescategoryiddocumentsget) | **GET** /rest/categories/{categoryId}/documents | List documents of a category
*DocumentApi* | [**restCategoriesCategoryIdDocumentsPost**](docs/Api/DocumentApi.md#restcategoriescategoryiddocumentspost) | **POST** /rest/categories/{categoryId}/documents | Upload category documents
*DocumentApi* | [**restDocumentsDocumentIdGet**](docs/Api/DocumentApi.md#restdocumentsdocumentidget) | **GET** /rest/documents/{documentId} | Download the content of a document
*DocumentApi* | [**restOrdersDocumentsDownloadsTypeGet**](docs/Api/DocumentApi.md#restordersdocumentsdownloadstypeget) | **GET** /rest/orders/documents/downloads/{type} | Download documents of a document type
*DocumentApi* | [**restOrdersDocumentsGet**](docs/Api/DocumentApi.md#restordersdocumentsget) | **GET** /rest/orders/documents | List order documents
*DocumentApi* | [**restOrdersDocumentsTypeGet**](docs/Api/DocumentApi.md#restordersdocumentstypeget) | **GET** /rest/orders/documents/{type} | List documents of a type
*DocumentApi* | [**restOrdersOrderIdDocumentsCorrectionDocumentGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentscorrectiondocumentgeneratepost) | **POST** /rest/orders/{orderId}/documents/correction_document/generate | Generate adjustment form of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsCreditNoteGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentscreditnotegeneratepost) | **POST** /rest/orders/{orderId}/documents/credit_note/generate | Generate credit note of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsDeliveryNoteGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentsdeliverynotegeneratepost) | **POST** /rest/orders/{orderId}/documents/delivery_note/generate | Generate delivery note of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsDocumentIdDelete**](docs/Api/DocumentApi.md#restordersorderiddocumentsdocumentiddelete) | **DELETE** /rest/orders/{orderId}/documents/{documentId} | Delete document of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsDunningLetterGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentsdunninglettergeneratepost) | **POST** /rest/orders/{orderId}/documents/dunning_letter/generate | Generate dunning letter of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsInvoiceGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentsinvoicegeneratepost) | **POST** /rest/orders/{orderId}/documents/invoice/generate | Generate invoice of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsOfferGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentsoffergeneratepost) | **POST** /rest/orders/{orderId}/documents/offer/generate | Generate offer document of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsOrderConfirmationGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentsorderconfirmationgeneratepost) | **POST** /rest/orders/{orderId}/documents/order_confirmation/generate | Generate order confirmation of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsPickupDeliveryGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentspickupdeliverygeneratepost) | **POST** /rest/orders/{orderId}/documents/pickup_delivery/generate | Generate pick-up delivery note of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsPoDeliveryNoteGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentspodeliverynotegeneratepost) | **POST** /rest/orders/{orderId}/documents/po_delivery_note/generate | Generate purchase order (PO) delivery note of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsProFormaInvoiceGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentsproformainvoicegeneratepost) | **POST** /rest/orders/{orderId}/documents/pro_forma_invoice/generate | Generate pro forma invoice of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsReorderGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentsreordergeneratepost) | **POST** /rest/orders/{orderId}/documents/reorder/generate | Generate reorder document of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsRepairBillGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentsrepairbillgeneratepost) | **POST** /rest/orders/{orderId}/documents/repair_bill/generate | Generate repair slip of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsReturnNoteGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentsreturnnotegeneratepost) | **POST** /rest/orders/{orderId}/documents/return_note/generate | Generate return slip of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsReversalDocumentGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentsreversaldocumentgeneratepost) | **POST** /rest/orders/{orderId}/documents/reversal_document/generate | Generate reversal document of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsReversalDunningLetterGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentsreversaldunninglettergeneratepost) | **POST** /rest/orders/{orderId}/documents/reversal_dunning_letter/generate | Generate dunning letter reversal document of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsReversalRefundGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentsreversalrefundgeneratepost) | **POST** /rest/orders/{orderId}/documents/reversal_refund/generate | Generate refund reversal document of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsSuccessConfirmationGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentssuccessconfirmationgeneratepost) | **POST** /rest/orders/{orderId}/documents/success_confirmation/generate | Generate success confirmation of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsTypeCurrentGet**](docs/Api/DocumentApi.md#restordersorderiddocumentstypecurrentget) | **GET** /rest/orders/{orderId}/documents/{type}/current | Get current invoice or credit note of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsTypeGeneratePost**](docs/Api/DocumentApi.md#restordersorderiddocumentstypegeneratepost) | **POST** /rest/orders/{orderId}/documents/{type}/generate | Generate document of an order
*DocumentApi* | [**restOrdersOrderIdDocumentsTypePost**](docs/Api/DocumentApi.md#restordersorderiddocumentstypepost) | **POST** /rest/orders/{orderId}/documents/{type} | Upload order documents
*DocumentApi* | [**restOrdersOrderIdDocumentsTypeRecentGet**](docs/Api/DocumentApi.md#restordersorderiddocumentstyperecentget) | **GET** /rest/orders/{orderId}/documents/{type}/recent | Get most recent document of an order
*ElasticSyncApi* | [**restElasticSyncMappingCsvRowsSyncIdGet**](docs/Api/ElasticSyncApi.md#restelasticsyncmappingcsvrowssyncidget) | **GET** /rest/elastic-sync/mapping/csv-rows/{syncId} | Get the csv rows.
*ElasticSyncApi* | [**restElasticSyncMappingFieldsSyncTypeGet**](docs/Api/ElasticSyncApi.md#restelasticsyncmappingfieldssynctypeget) | **GET** /rest/elastic-sync/mapping/fields/{syncType} | Get the plenty fields value map for a particular sync type.
*ElasticSyncApi* | [**restElasticSyncMappingFilterLabelsGet**](docs/Api/ElasticSyncApi.md#restelasticsyncmappingfilterlabelsget) | **GET** /rest/elastic-sync/mapping/filter/labels | Get the label list for mapping filtration.
*ElasticSyncApi* | [**restElasticSyncMappingMapCsvColumnsSyncIdGet**](docs/Api/ElasticSyncApi.md#restelasticsyncmappingmapcsvcolumnssyncidget) | **GET** /rest/elastic-sync/mapping/map/csv-columns/{syncId} | Get the csv columns of a sync.
*ElasticSyncApi* | [**restElasticSyncMappingMapTreeGet**](docs/Api/ElasticSyncApi.md#restelasticsyncmappingmaptreeget) | **GET** /rest/elastic-sync/mapping/map/tree | Get the mapping values tree.
*ElasticSyncApi* | [**restElasticSyncMappingModelSyncTypeGet**](docs/Api/ElasticSyncApi.md#restelasticsyncmappingmodelsynctypeget) | **GET** /rest/elastic-sync/mapping/model/{syncType} | Get the model key to field value key.
*ElasticSyncApi* | [**restElasticSyncMappingValuesSyncTypeGet**](docs/Api/ElasticSyncApi.md#restelasticsyncmappingvaluessynctypeget) | **GET** /rest/elastic-sync/mapping/values/{syncType} | Get the mapping values.
*ElasticSyncApi* | [**restElasticSyncMappingVariationGet**](docs/Api/ElasticSyncApi.md#restelasticsyncmappingvariationget) | **GET** /rest/elastic-sync/mapping/variation | Get a list with variation matches.
*ElasticSyncApi* | [**restElasticSyncSyncChangeCsvPut**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncchangecsvput) | **PUT** /rest/elastic-sync/sync/change-csv | Update the Csv of a Sync.
*ElasticSyncApi* | [**restElasticSyncSyncImportDifferentPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncimportdifferentpost) | **POST** /rest/elastic-sync/sync/import-different | Import the sync with different plentyId.
*ElasticSyncApi* | [**restElasticSyncSyncImportFilePublicUrlDifferentPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncimportfilepublicurldifferentpost) | **POST** /rest/elastic-sync/sync/import/file/public-url/different | Import the sync with different plentyId.
*ElasticSyncApi* | [**restElasticSyncSyncImportFilePublicUrlPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncimportfilepublicurlpost) | **POST** /rest/elastic-sync/sync/import/file/public-url | Save the CSV on S3.
*ElasticSyncApi* | [**restElasticSyncSyncImportPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncimportpost) | **POST** /rest/elastic-sync/sync/import | Save the CSV on S3.
*ElasticSyncApi* | [**restElasticSyncSyncIntervalsGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncintervalsget) | **GET** /rest/elastic-sync/sync/intervals | Get list of sync intervals.
*ElasticSyncApi* | [**restElasticSyncSyncMappingFilterFilterIdDelete**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingfilterfilteriddelete) | **DELETE** /rest/elastic-sync/sync/mapping/filter/{filterId} | Delete a sync mapping.
*ElasticSyncApi* | [**restElasticSyncSyncMappingFilterFilterIdGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingfilterfilteridget) | **GET** /rest/elastic-sync/sync/mapping/filter/{filterId} | Get a sync mapping.
*ElasticSyncApi* | [**restElasticSyncSyncMappingFilterFilterIdPut**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingfilterfilteridput) | **PUT** /rest/elastic-sync/sync/mapping/filter/{filterId} | Update a sync mapping filter.
*ElasticSyncApi* | [**restElasticSyncSyncMappingMappingIdDelete**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingmappingiddelete) | **DELETE** /rest/elastic-sync/sync/mapping/{mappingId} | Delete a sync mapping.
*ElasticSyncApi* | [**restElasticSyncSyncMappingMappingIdFilterPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingmappingidfilterpost) | **POST** /rest/elastic-sync/sync/mapping/{mappingId}/filter | Create a sync mapping filter.
*ElasticSyncApi* | [**restElasticSyncSyncMappingMappingIdFiltersGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingmappingidfiltersget) | **GET** /rest/elastic-sync/sync/mapping/{mappingId}/filters | List sync mappings.
*ElasticSyncApi* | [**restElasticSyncSyncMappingMappingIdFiltersPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingmappingidfilterspost) | **POST** /rest/elastic-sync/sync/mapping/{mappingId}/filters | Create sync mapping filters.
*ElasticSyncApi* | [**restElasticSyncSyncMappingMappingIdFiltersPut**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingmappingidfiltersput) | **PUT** /rest/elastic-sync/sync/mapping/{mappingId}/filters | Update sync mapping filters.
*ElasticSyncApi* | [**restElasticSyncSyncMappingMappingIdGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingmappingidget) | **GET** /rest/elastic-sync/sync/mapping/{mappingId} | Get a sync mapping.
*ElasticSyncApi* | [**restElasticSyncSyncMappingMappingIdPut**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingmappingidput) | **PUT** /rest/elastic-sync/sync/mapping/{mappingId} | Update a sync mapping.
*ElasticSyncApi* | [**restElasticSyncSyncMappingMappingIdRowPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingmappingidrowpost) | **POST** /rest/elastic-sync/sync/mapping/{mappingId}/row | Create a sync mapping row.
*ElasticSyncApi* | [**restElasticSyncSyncMappingMappingIdRowsGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingmappingidrowsget) | **GET** /rest/elastic-sync/sync/mapping/{mappingId}/rows | List sync mapping rows.
*ElasticSyncApi* | [**restElasticSyncSyncMappingMappingIdRowsPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingmappingidrowspost) | **POST** /rest/elastic-sync/sync/mapping/{mappingId}/rows | Create sync mapping rows.
*ElasticSyncApi* | [**restElasticSyncSyncMappingMappingIdRowsPut**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingmappingidrowsput) | **PUT** /rest/elastic-sync/sync/mapping/{mappingId}/rows | Update sync mapping rows.
*ElasticSyncApi* | [**restElasticSyncSyncMappingRowRowIdDelete**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingrowrowiddelete) | **DELETE** /rest/elastic-sync/sync/mapping/row/{rowId} | Delete a sync mapping row.
*ElasticSyncApi* | [**restElasticSyncSyncMappingRowRowIdGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingrowrowidget) | **GET** /rest/elastic-sync/sync/mapping/row/{rowId} | Get a sync mapping row.
*ElasticSyncApi* | [**restElasticSyncSyncMappingRowRowIdPut**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingrowrowidput) | **PUT** /rest/elastic-sync/sync/mapping/row/{rowId} | Update a sync mapping row.
*ElasticSyncApi* | [**restElasticSyncSyncMappingsCopyPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingscopypost) | **POST** /rest/elastic-sync/sync/mappings/copy | Copy one or more mappings.
*ElasticSyncApi* | [**restElasticSyncSyncMappingsDelete**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmappingsdelete) | **DELETE** /rest/elastic-sync/sync/mappings | Delete one or more mappings.
*ElasticSyncApi* | [**restElasticSyncSyncMatchingDecimalsGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmatchingdecimalsget) | **GET** /rest/elastic-sync/sync/matching/decimals | Get list of decimals.
*ElasticSyncApi* | [**restElasticSyncSyncMatchingMatchingIdDelete**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmatchingmatchingiddelete) | **DELETE** /rest/elastic-sync/sync/matching/{matchingId} | Delete a sync matching.
*ElasticSyncApi* | [**restElasticSyncSyncMatchingMatchingIdGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmatchingmatchingidget) | **GET** /rest/elastic-sync/sync/matching/{matchingId} | Get a sync matching.
*ElasticSyncApi* | [**restElasticSyncSyncMatchingMatchingIdPut**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncmatchingmatchingidput) | **PUT** /rest/elastic-sync/sync/matching/{matchingId} | Update a sync matching.
*ElasticSyncApi* | [**restElasticSyncSyncOptionOptionIdDelete**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncoptionoptioniddelete) | **DELETE** /rest/elastic-sync/sync/option/{optionId} | Delete a sync.
*ElasticSyncApi* | [**restElasticSyncSyncOptionOptionIdGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncoptionoptionidget) | **GET** /rest/elastic-sync/sync/option/{optionId} | Get a sync.
*ElasticSyncApi* | [**restElasticSyncSyncOptionOptionIdPut**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncoptionoptionidput) | **PUT** /rest/elastic-sync/sync/option/{optionId} | Update a sync option.
*ElasticSyncApi* | [**restElasticSyncSyncPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncpost) | **POST** /rest/elastic-sync/sync | Create a sync.
*ElasticSyncApi* | [**restElasticSyncSyncReportIdGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncreportidget) | **GET** /rest/elastic-sync/sync/report/{id} | Get Log ID
*ElasticSyncApi* | [**restElasticSyncSyncReportsAvailabilityGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncreportsavailabilityget) | **GET** /rest/elastic-sync/sync/reports/availability | Check Report Log.
*ElasticSyncApi* | [**restElasticSyncSyncReportsGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncreportsget) | **GET** /rest/elastic-sync/sync/reports | Check Report Log.
*ElasticSyncApi* | [**restElasticSyncSyncResetCacheGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncresetcacheget) | **GET** /rest/elastic-sync/sync/reset-cache | Reset the cache.
*ElasticSyncApi* | [**restElasticSyncSyncScheduleTimesGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncscheduletimesget) | **GET** /rest/elastic-sync/sync/schedule/times | Get schedule times.
*ElasticSyncApi* | [**restElasticSyncSyncStatusGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncstatusget) | **GET** /rest/elastic-sync/sync/status | Get syncs status.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdDelete**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsynciddelete) | **DELETE** /rest/elastic-sync/sync/{syncId} | Delete a sync.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidget) | **GET** /rest/elastic-sync/sync/{syncId} | Get a sync.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdMappingPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidmappingpost) | **POST** /rest/elastic-sync/sync/{syncId}/mapping | Create a sync mapping.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdMappingsGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidmappingsget) | **GET** /rest/elastic-sync/sync/{syncId}/mappings | List sync mappings.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdMatchesGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidmatchesget) | **GET** /rest/elastic-sync/sync/{syncId}/matches | List sync matches.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdMatchesPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidmatchespost) | **POST** /rest/elastic-sync/sync/{syncId}/matches | Create sync matches.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdMatchesPut**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidmatchesput) | **PUT** /rest/elastic-sync/sync/{syncId}/matches | Update sync matches.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdMatchingEntityGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidmatchingentityget) | **GET** /rest/elastic-sync/sync/{syncId}/matching/entity | Get an entity.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdMatchingPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidmatchingpost) | **POST** /rest/elastic-sync/sync/{syncId}/matching | Create a sync matching.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdOptionPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidoptionpost) | **POST** /rest/elastic-sync/sync/{syncId}/option | Create a sync option.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdOptionsGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidoptionsget) | **GET** /rest/elastic-sync/sync/{syncId}/options | List syncs.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdOptionsPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidoptionspost) | **POST** /rest/elastic-sync/sync/{syncId}/options | Create sync options.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdOptionsPut**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidoptionsput) | **PUT** /rest/elastic-sync/sync/{syncId}/options | Update sync options.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdPreviewValuesGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidpreviewvaluesget) | **GET** /rest/elastic-sync/sync/{syncId}/preview-values | Get preview of csv values.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdPut**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidput) | **PUT** /rest/elastic-sync/sync/{syncId} | Update a sync.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdRunPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidrunpost) | **POST** /rest/elastic-sync/sync/{syncId}/run | Execute the run procedure.
*ElasticSyncApi* | [**restElasticSyncSyncSyncIdSourcePreviewGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsyncidsourcepreviewget) | **GET** /rest/elastic-sync/sync/{syncId}/source-preview | Preview the syncs.
*ElasticSyncApi* | [**restElasticSyncSyncSyncTypeMatchingFieldsGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsynctypematchingfieldsget) | **GET** /rest/elastic-sync/sync/{syncType}/matching/fields | Get a list of all mappings for a particular sync type.
*ElasticSyncApi* | [**restElasticSyncSyncTypesGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsynctypesget) | **GET** /rest/elastic-sync/sync/types | Get list of sync types.
*ElasticSyncApi* | [**restElasticSyncSyncsCopyPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncscopypost) | **POST** /rest/elastic-sync/syncs/copy | Copy the syncs.
*ElasticSyncApi* | [**restElasticSyncSyncsDelete**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsdelete) | **DELETE** /rest/elastic-sync/syncs | Delete syncs.
*ElasticSyncApi* | [**restElasticSyncSyncsExportPost**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsexportpost) | **POST** /rest/elastic-sync/syncs/export | Export the syncs.
*ElasticSyncApi* | [**restElasticSyncSyncsExportSyncIdGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsexportsyncidget) | **GET** /rest/elastic-sync/syncs/export/{syncId} | Export the sync.
*ElasticSyncApi* | [**restElasticSyncSyncsGet**](docs/Api/ElasticSyncApi.md#restelasticsyncsyncsget) | **GET** /rest/elastic-sync/syncs | Get all Syncs
*ExportApi* | [**exportExportKeyGet**](docs/Api/ExportApi.md#exportexportkeyget) | **GET** /export/{exportKey} | 
*ExportApi* | [**exportExportKeyTokenGet**](docs/Api/ExportApi.md#exportexportkeytokenget) | **GET** /export/{exportKey}/{token} | 
*ExportApi* | [**restExportsFormatKeysGet**](docs/Api/ExportApi.md#restexportsformatkeysget) | **GET** /rest/exports/format_keys | Get format keys
*ExportApi* | [**restExportsFormatKeysTypeGet**](docs/Api/ExportApi.md#restexportsformatkeystypeget) | **GET** /rest/exports/format_keys/{type} | Get format keys
*ExportApi* | [**restExportsGenerateTokenGet**](docs/Api/ExportApi.md#restexportsgeneratetokenget) | **GET** /rest/exports/generate_token | Generate a token
*ExportApi* | [**restOrdersShippingExportDocumentsOrderIdGet**](docs/Api/ExportApi.md#restordersshippingexportdocumentsorderidget) | **GET** /rest/orders/shipping/export_documents/{orderId} | List export documents by order ID
*ExportSettingsApi* | [**restExportsExportIdDelete**](docs/Api/ExportSettingsApi.md#restexportsexportiddelete) | **DELETE** /rest/exports/{exportId} | Delete export
*ExportSettingsApi* | [**restExportsExportIdFiltersKeyDelete**](docs/Api/ExportSettingsApi.md#restexportsexportidfilterskeydelete) | **DELETE** /rest/exports/{exportId}/filters/{key} | Delete filter from the export
*ExportSettingsApi* | [**restExportsExportIdGet**](docs/Api/ExportSettingsApi.md#restexportsexportidget) | **GET** /rest/exports/{exportId} | Get export
*ExportSettingsApi* | [**restExportsExportIdPut**](docs/Api/ExportSettingsApi.md#restexportsexportidput) | **PUT** /rest/exports/{exportId} | Update an export
*ExportSettingsApi* | [**restExportsGet**](docs/Api/ExportSettingsApi.md#restexportsget) | **GET** /rest/exports | List elastic exports
*ExportSettingsApi* | [**restExportsPost**](docs/Api/ExportSettingsApi.md#restexportspost) | **POST** /rest/exports | Create an export
*FeedbackApi* | [**restFeedbacksCommentCommentIdDelete**](docs/Api/FeedbackApi.md#restfeedbackscommentcommentiddelete) | **DELETE** /rest/feedbacks/comment/{commentId} | Delete a feedback comment
*FeedbackApi* | [**restFeedbacksCommentCommentIdGet**](docs/Api/FeedbackApi.md#restfeedbackscommentcommentidget) | **GET** /rest/feedbacks/comment/{commentId} | Get a feedback comment
*FeedbackApi* | [**restFeedbacksCommentPost**](docs/Api/FeedbackApi.md#restfeedbackscommentpost) | **POST** /rest/feedbacks/comment | Create a feedback comment
*FeedbackApi* | [**restFeedbacksCommentsGet**](docs/Api/FeedbackApi.md#restfeedbackscommentsget) | **GET** /rest/feedbacks/comments | List feedback comments
*FeedbackApi* | [**restFeedbacksDeleteFeedbacksFeedbackIdsDelete**](docs/Api/FeedbackApi.md#restfeedbacksdeletefeedbacksfeedbackidsdelete) | **DELETE** /rest/feedbacks/delete_feedbacks/{feedbackIds} | Delete multiple feedbacks
*FeedbackApi* | [**restFeedbacksFeedbackFeedbackIdDelete**](docs/Api/FeedbackApi.md#restfeedbacksfeedbackfeedbackiddelete) | **DELETE** /rest/feedbacks/feedback/{feedbackId} | Delete a feedback
*FeedbackApi* | [**restFeedbacksFeedbackFeedbackIdGet**](docs/Api/FeedbackApi.md#restfeedbacksfeedbackfeedbackidget) | **GET** /rest/feedbacks/feedback/{feedbackId} | Get a feedback
*FeedbackApi* | [**restFeedbacksFeedbackFeedbackIdPut**](docs/Api/FeedbackApi.md#restfeedbacksfeedbackfeedbackidput) | **PUT** /rest/feedbacks/feedback/{feedbackId} | Update a feedback
*FeedbackApi* | [**restFeedbacksFeedbackPost**](docs/Api/FeedbackApi.md#restfeedbacksfeedbackpost) | **POST** /rest/feedbacks/feedback | Create a feedback
*FeedbackApi* | [**restFeedbacksFeedbackRepliesFeedbackIdGet**](docs/Api/FeedbackApi.md#restfeedbacksfeedbackrepliesfeedbackidget) | **GET** /rest/feedbacks/feedback/replies/{feedbackId} | List feedback replies
*FeedbackApi* | [**restFeedbacksFeedbacksGet**](docs/Api/FeedbackApi.md#restfeedbacksfeedbacksget) | **GET** /rest/feedbacks/feedbacks | List feedbacks
*FeedbackApi* | [**restFeedbacksFeedbacksVisibilityPut**](docs/Api/FeedbackApi.md#restfeedbacksfeedbacksvisibilityput) | **PUT** /rest/feedbacks/feedbacks_visibility | Update the visibility of multiple feedbacks
*FeedbackApi* | [**restFeedbacksMigratePost**](docs/Api/FeedbackApi.md#restfeedbacksmigratepost) | **POST** /rest/feedbacks/migrate | Migrate legacy feedbacks
*FeedbackApi* | [**restFeedbacksRatingPost**](docs/Api/FeedbackApi.md#restfeedbacksratingpost) | **POST** /rest/feedbacks/rating | Create a feedback rating
*FeedbackApi* | [**restFeedbacksRatingRatingIdDelete**](docs/Api/FeedbackApi.md#restfeedbacksratingratingiddelete) | **DELETE** /rest/feedbacks/rating/{ratingId} | Delete a feedback rating
*FeedbackApi* | [**restFeedbacksRatingRatingIdGet**](docs/Api/FeedbackApi.md#restfeedbacksratingratingidget) | **GET** /rest/feedbacks/rating/{ratingId} | Get a feedback rating
*FeedbackApi* | [**restFeedbacksRatingsGet**](docs/Api/FeedbackApi.md#restfeedbacksratingsget) | **GET** /rest/feedbacks/ratings | List feedback ratings
*FulfillmentApi* | [**restFulfillmentPicklistPickingOrderItemGet**](docs/Api/FulfillmentApi.md#restfulfillmentpicklistpickingorderitemget) | **GET** /rest/fulfillment/picklist/picking_order_item | 
*FulfillmentApi* | [**restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet**](docs/Api/FulfillmentApi.md#restfulfillmentpicklistpickingorderitempickingorderitemidget) | **GET** /rest/fulfillment/picklist/picking_order_item/{pickingOrderItemId} | 
*ItemApi* | [**restAvailabilitiesGet**](docs/Api/ItemApi.md#restavailabilitiesget) | **GET** /rest/availabilities | List item availabilities
*ItemApi* | [**restAvailabilitiesIdGet**](docs/Api/ItemApi.md#restavailabilitiesidget) | **GET** /rest/availabilities/{id} | Get an item availability
*ItemApi* | [**restAvailabilitiesIdPut**](docs/Api/ItemApi.md#restavailabilitiesidput) | **PUT** /rest/availabilities/{id} | Update an item availability
*ItemApi* | [**restItemSetsDelete**](docs/Api/ItemApi.md#restitemsetsdelete) | **DELETE** /rest/item_sets | Delete item sets
*ItemApi* | [**restItemSetsGet**](docs/Api/ItemApi.md#restitemsetsget) | **GET** /rest/item_sets | List item sets
*ItemApi* | [**restItemSetsIdDelete**](docs/Api/ItemApi.md#restitemsetsiddelete) | **DELETE** /rest/item_sets/{id} | Delete an item set
*ItemApi* | [**restItemSetsIdGet**](docs/Api/ItemApi.md#restitemsetsidget) | **GET** /rest/item_sets/{id} | Get an item set
*ItemApi* | [**restItemSetsIdPut**](docs/Api/ItemApi.md#restitemsetsidput) | **PUT** /rest/item_sets/{id} | Update an item set
*ItemApi* | [**restItemSetsPost**](docs/Api/ItemApi.md#restitemsetspost) | **POST** /rest/item_sets | Create item sets
*ItemApi* | [**restItemSetsPut**](docs/Api/ItemApi.md#restitemsetsput) | **PUT** /rest/item_sets | Update item sets
*ItemApi* | [**restItemSetsSetIdComponentsDelete**](docs/Api/ItemApi.md#restitemsetssetidcomponentsdelete) | **DELETE** /rest/item_sets/{setId}/components | Delete item set components
*ItemApi* | [**restItemSetsSetIdComponentsGet**](docs/Api/ItemApi.md#restitemsetssetidcomponentsget) | **GET** /rest/item_sets/{setId}/components | List item set components of an item set
*ItemApi* | [**restItemSetsSetIdComponentsIdDelete**](docs/Api/ItemApi.md#restitemsetssetidcomponentsiddelete) | **DELETE** /rest/item_sets/{setId}/components/{id} | Delete an item set component
*ItemApi* | [**restItemSetsSetIdComponentsIdGet**](docs/Api/ItemApi.md#restitemsetssetidcomponentsidget) | **GET** /rest/item_sets/{setId}/components/{id} | Get an item set component
*ItemApi* | [**restItemSetsSetIdComponentsIdPut**](docs/Api/ItemApi.md#restitemsetssetidcomponentsidput) | **PUT** /rest/item_sets/{setId}/components/{id} | Update an item set component
*ItemApi* | [**restItemSetsSetIdComponentsPost**](docs/Api/ItemApi.md#restitemsetssetidcomponentspost) | **POST** /rest/item_sets/{setId}/components | Create item set components
*ItemApi* | [**restItemSetsSetIdComponentsPut**](docs/Api/ItemApi.md#restitemsetssetidcomponentsput) | **PUT** /rest/item_sets/{setId}/components | Update item set components
*ItemApi* | [**restItemSetsSetIdConfigGet**](docs/Api/ItemApi.md#restitemsetssetidconfigget) | **GET** /rest/item_sets/{setId}/config | Get the item set configuration of an item set
*ItemApi* | [**restItemSetsSetIdConfigPut**](docs/Api/ItemApi.md#restitemsetssetidconfigput) | **PUT** /rest/item_sets/{setId}/config | Update an item set configuration
*ItemApi* | [**restItemsAttributeValuesValueIdNamesGet**](docs/Api/ItemApi.md#restitemsattributevaluesvalueidnamesget) | **GET** /rest/items/attribute_values/{valueId}/names | Get name and language for an attribute value ID
*ItemApi* | [**restItemsAttributeValuesValueIdNamesLangDelete**](docs/Api/ItemApi.md#restitemsattributevaluesvalueidnameslangdelete) | **DELETE** /rest/items/attribute_values/{valueId}/names/{lang} | Delete an attribute value name
*ItemApi* | [**restItemsAttributeValuesValueIdNamesLangGet**](docs/Api/ItemApi.md#restitemsattributevaluesvalueidnameslangget) | **GET** /rest/items/attribute_values/{valueId}/names/{lang} | Get an attribute value name
*ItemApi* | [**restItemsAttributeValuesValueIdNamesLangPut**](docs/Api/ItemApi.md#restitemsattributevaluesvalueidnameslangput) | **PUT** /rest/items/attribute_values/{valueId}/names/{lang} | Update an attribute value name
*ItemApi* | [**restItemsAttributeValuesValueIdNamesPost**](docs/Api/ItemApi.md#restitemsattributevaluesvalueidnamespost) | **POST** /rest/items/attribute_values/{valueId}/names | Create an attribute value name
*ItemApi* | [**restItemsAttributesAttributeIdMarketsMarketIdMapsDelete**](docs/Api/ItemApi.md#restitemsattributesattributeidmarketsmarketidmapsdelete) | **DELETE** /rest/items/attributes/{attributeId}/markets/{marketId}/maps | Deletes an attribute map.
*ItemApi* | [**restItemsAttributesAttributeIdMarketsMarketIdMapsGet**](docs/Api/ItemApi.md#restitemsattributesattributeidmarketsmarketidmapsget) | **GET** /rest/items/attributes/{attributeId}/markets/{marketId}/maps | Gets an attribute map.
*ItemApi* | [**restItemsAttributesAttributeIdMarketsMarketIdMapsPut**](docs/Api/ItemApi.md#restitemsattributesattributeidmarketsmarketidmapsput) | **PUT** /rest/items/attributes/{attributeId}/markets/{marketId}/maps | Updates an attribute map.
*ItemApi* | [**restItemsAttributesAttributeIdNamesGet**](docs/Api/ItemApi.md#restitemsattributesattributeidnamesget) | **GET** /rest/items/attributes/{attributeId}/names | Get an attribute name
*ItemApi* | [**restItemsAttributesAttributeIdNamesLangDelete**](docs/Api/ItemApi.md#restitemsattributesattributeidnameslangdelete) | **DELETE** /rest/items/attributes/{attributeId}/names/{lang} | Delete an attribute name
*ItemApi* | [**restItemsAttributesAttributeIdNamesLangGet**](docs/Api/ItemApi.md#restitemsattributesattributeidnameslangget) | **GET** /rest/items/attributes/{attributeId}/names/{lang} | List attribute names
*ItemApi* | [**restItemsAttributesAttributeIdNamesLangPut**](docs/Api/ItemApi.md#restitemsattributesattributeidnameslangput) | **PUT** /rest/items/attributes/{attributeId}/names/{lang} | Update an attribute name
*ItemApi* | [**restItemsAttributesAttributeIdNamesPost**](docs/Api/ItemApi.md#restitemsattributesattributeidnamespost) | **POST** /rest/items/attributes/{attributeId}/names | Create an attribute name
*ItemApi* | [**restItemsAttributesAttributeIdValueMarketNamesGet**](docs/Api/ItemApi.md#restitemsattributesattributeidvaluemarketnamesget) | **GET** /rest/items/attributes/{attributeId}/value_market_names | Search attribute value market names
*ItemApi* | [**restItemsAttributesAttributeIdValueMarketNamesPost**](docs/Api/ItemApi.md#restitemsattributesattributeidvaluemarketnamespost) | **POST** /rest/items/attributes/{attributeId}/value_market_names | Create an attribute value market name
*ItemApi* | [**restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypeDelete**](docs/Api/ItemApi.md#restitemsattributesattributeidvaluemarketnamesvalueidlangreferencetypedelete) | **DELETE** /rest/items/attributes/{attributeId}/value_market_names/{valueId}/{lang}/{referenceType} | Delete an attribute value market name
*ItemApi* | [**restItemsAttributesAttributeIdValueMarketNamesValueIdLangReferenceTypePut**](docs/Api/ItemApi.md#restitemsattributesattributeidvaluemarketnamesvalueidlangreferencetypeput) | **PUT** /rest/items/attributes/{attributeId}/value_market_names/{valueId}/{lang}/{referenceType} | Update an attribute value market name
*ItemApi* | [**restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsDelete**](docs/Api/ItemApi.md#restitemsattributesattributeidvaluesattributevalueidmarketsmarketidmapsdelete) | **DELETE** /rest/items/attributes/{attributeId}/values/{attributeValueId}/markets/{marketId}/maps | Deletes an attribute value map.
*ItemApi* | [**restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsGet**](docs/Api/ItemApi.md#restitemsattributesattributeidvaluesattributevalueidmarketsmarketidmapsget) | **GET** /rest/items/attributes/{attributeId}/values/{attributeValueId}/markets/{marketId}/maps | Gets an attribute value map.
*ItemApi* | [**restItemsAttributesAttributeIdValuesAttributeValueIdMarketsMarketIdMapsPut**](docs/Api/ItemApi.md#restitemsattributesattributeidvaluesattributevalueidmarketsmarketidmapsput) | **PUT** /rest/items/attributes/{attributeId}/values/{attributeValueId}/markets/{marketId}/maps | Updates an attribute value map.
*ItemApi* | [**restItemsAttributesAttributeIdValuesGet**](docs/Api/ItemApi.md#restitemsattributesattributeidvaluesget) | **GET** /rest/items/attributes/{attributeId}/values | List attribute values
*ItemApi* | [**restItemsAttributesAttributeIdValuesIdDelete**](docs/Api/ItemApi.md#restitemsattributesattributeidvaluesiddelete) | **DELETE** /rest/items/attributes/{attributeId}/values/{id} | Delete an attribute value
*ItemApi* | [**restItemsAttributesAttributeIdValuesIdGet**](docs/Api/ItemApi.md#restitemsattributesattributeidvaluesidget) | **GET** /rest/items/attributes/{attributeId}/values/{id} | Get an attribute value
*ItemApi* | [**restItemsAttributesAttributeIdValuesIdPut**](docs/Api/ItemApi.md#restitemsattributesattributeidvaluesidput) | **PUT** /rest/items/attributes/{attributeId}/values/{id} | Update an attribute value
*ItemApi* | [**restItemsAttributesAttributeIdValuesPost**](docs/Api/ItemApi.md#restitemsattributesattributeidvaluespost) | **POST** /rest/items/attributes/{attributeId}/values | Create an attribute value
*ItemApi* | [**restItemsAttributesGet**](docs/Api/ItemApi.md#restitemsattributesget) | **GET** /rest/items/attributes | List attributes
*ItemApi* | [**restItemsAttributesIdDelete**](docs/Api/ItemApi.md#restitemsattributesiddelete) | **DELETE** /rest/items/attributes/{id} | Delete an attribute
*ItemApi* | [**restItemsAttributesIdGet**](docs/Api/ItemApi.md#restitemsattributesidget) | **GET** /rest/items/attributes/{id} | Get an attribute
*ItemApi* | [**restItemsAttributesIdPut**](docs/Api/ItemApi.md#restitemsattributesidput) | **PUT** /rest/items/attributes/{id} | Update an attribute
*ItemApi* | [**restItemsAttributesMapsGet**](docs/Api/ItemApi.md#restitemsattributesmapsget) | **GET** /rest/items/attributes/maps | Lists all attribute maps.
*ItemApi* | [**restItemsAttributesMarketsMapsPost**](docs/Api/ItemApi.md#restitemsattributesmarketsmapspost) | **POST** /rest/items/attributes/markets/maps | Creates a new attribute map.
*ItemApi* | [**restItemsAttributesPost**](docs/Api/ItemApi.md#restitemsattributespost) | **POST** /rest/items/attributes | Create an attribute
*ItemApi* | [**restItemsAttributesValuesMapsGet**](docs/Api/ItemApi.md#restitemsattributesvaluesmapsget) | **GET** /rest/items/attributes/values/maps | Lists all attribute value maps.
*ItemApi* | [**restItemsAttributesValuesMarketsMapsPost**](docs/Api/ItemApi.md#restitemsattributesvaluesmarketsmapspost) | **POST** /rest/items/attributes/values/markets/maps | Creates a new attribute value map.
*ItemApi* | [**restItemsBarcodesBarcodeIdDelete**](docs/Api/ItemApi.md#restitemsbarcodesbarcodeiddelete) | **DELETE** /rest/items/barcodes/{barcodeId} | Delete a barcode
*ItemApi* | [**restItemsBarcodesBarcodeIdGet**](docs/Api/ItemApi.md#restitemsbarcodesbarcodeidget) | **GET** /rest/items/barcodes/{barcodeId} | Get a barcode
*ItemApi* | [**restItemsBarcodesBarcodeIdPut**](docs/Api/ItemApi.md#restitemsbarcodesbarcodeidput) | **PUT** /rest/items/barcodes/{barcodeId} | Update a barcode
*ItemApi* | [**restItemsBarcodesBarcodeIdReferrerPost**](docs/Api/ItemApi.md#restitemsbarcodesbarcodeidreferrerpost) | **POST** /rest/items/barcodes/{barcodeId}/referrer | Activate a referrer
*ItemApi* | [**restItemsBarcodesBarcodeIdReferrerReferrerIdDelete**](docs/Api/ItemApi.md#restitemsbarcodesbarcodeidreferrerreferreriddelete) | **DELETE** /rest/items/barcodes/{barcodeId}/referrer/{referrerId} | Deactivate a referrer
*ItemApi* | [**restItemsBarcodesGet**](docs/Api/ItemApi.md#restitemsbarcodesget) | **GET** /rest/items/barcodes | List barcodes
*ItemApi* | [**restItemsBarcodesPost**](docs/Api/ItemApi.md#restitemsbarcodespost) | **POST** /rest/items/barcodes | Create a barcode
*ItemApi* | [**restItemsBarcodesReferrerReferrerIdGet**](docs/Api/ItemApi.md#restitemsbarcodesreferrerreferreridget) | **GET** /rest/items/barcodes/referrer/{referrerId} | List barcodes by referrer
*ItemApi* | [**restItemsBarcodesTypeTypeGet**](docs/Api/ItemApi.md#restitemsbarcodestypetypeget) | **GET** /rest/items/barcodes/type/{type} | List barcodes by type
*ItemApi* | [**restItemsGet**](docs/Api/ItemApi.md#restitemsget) | **GET** /rest/items | Search item
*ItemApi* | [**restItemsIdImagesAttributeValueMarketsGet**](docs/Api/ItemApi.md#restitemsidimagesattributevaluemarketsget) | **GET** /rest/items/{id}/images/attribute_value_markets | List attribute value image link
*ItemApi* | [**restItemsIdImagesGet**](docs/Api/ItemApi.md#restitemsidimagesget) | **GET** /rest/items/{id}/images | List images of an item
*ItemApi* | [**restItemsIdImagesImageIdAttributeValueMarketsPost**](docs/Api/ItemApi.md#restitemsidimagesimageidattributevaluemarketspost) | **POST** /rest/items/{id}/images/{imageId}/attribute_value_markets | Create an attribute value image link
*ItemApi* | [**restItemsIdImagesImageIdAttributeValueMarketsValueIdDelete**](docs/Api/ItemApi.md#restitemsidimagesimageidattributevaluemarketsvalueiddelete) | **DELETE** /rest/items/{id}/images/{imageId}/attribute_value_markets/{valueId} | Delete an attribute value image link
*ItemApi* | [**restItemsIdImagesImageIdAttributeValueMarketsValueIdGet**](docs/Api/ItemApi.md#restitemsidimagesimageidattributevaluemarketsvalueidget) | **GET** /rest/items/{id}/images/{imageId}/attribute_value_markets/{valueId} | Get an attribute value image link
*ItemApi* | [**restItemsIdImagesImageIdAttributeValueMarketsValueIdPut**](docs/Api/ItemApi.md#restitemsidimagesimageidattributevaluemarketsvalueidput) | **PUT** /rest/items/{id}/images/{imageId}/attribute_value_markets/{valueId} | Update an attribute value image link
*ItemApi* | [**restItemsIdImagesImageIdAvailabilitiesDelete**](docs/Api/ItemApi.md#restitemsidimagesimageidavailabilitiesdelete) | **DELETE** /rest/items/{id}/images/{imageId}/availabilities | Delete an availability
*ItemApi* | [**restItemsIdImagesImageIdAvailabilitiesGet**](docs/Api/ItemApi.md#restitemsidimagesimageidavailabilitiesget) | **GET** /rest/items/{id}/images/{imageId}/availabilities | List availabilities
*ItemApi* | [**restItemsIdImagesImageIdAvailabilitiesPost**](docs/Api/ItemApi.md#restitemsidimagesimageidavailabilitiespost) | **POST** /rest/items/{id}/images/{imageId}/availabilities | Create an availability
*ItemApi* | [**restItemsIdImagesImageIdDelete**](docs/Api/ItemApi.md#restitemsidimagesimageiddelete) | **DELETE** /rest/items/{id}/images/{imageId} | Delete an image
*ItemApi* | [**restItemsIdImagesImageIdGet**](docs/Api/ItemApi.md#restitemsidimagesimageidget) | **GET** /rest/items/{id}/images/{imageId} | Get an image
*ItemApi* | [**restItemsIdImagesImageIdNamesGet**](docs/Api/ItemApi.md#restitemsidimagesimageidnamesget) | **GET** /rest/items/{id}/images/{imageId}/names | List names of an image
*ItemApi* | [**restItemsIdImagesImageIdNamesLangDelete**](docs/Api/ItemApi.md#restitemsidimagesimageidnameslangdelete) | **DELETE** /rest/items/{id}/images/{imageId}/names/{lang} | Delete an image name
*ItemApi* | [**restItemsIdImagesImageIdNamesLangGet**](docs/Api/ItemApi.md#restitemsidimagesimageidnameslangget) | **GET** /rest/items/{id}/images/{imageId}/names/{lang} | Get an image name
*ItemApi* | [**restItemsIdImagesImageIdNamesLangPut**](docs/Api/ItemApi.md#restitemsidimagesimageidnameslangput) | **PUT** /rest/items/{id}/images/{imageId}/names/{lang} | Update an image name
*ItemApi* | [**restItemsIdImagesImageIdNamesPost**](docs/Api/ItemApi.md#restitemsidimagesimageidnamespost) | **POST** /rest/items/{id}/images/{imageId}/names | Create an image name
*ItemApi* | [**restItemsIdImagesImageIdPut**](docs/Api/ItemApi.md#restitemsidimagesimageidput) | **PUT** /rest/items/{id}/images/{imageId} | Update an image
*ItemApi* | [**restItemsIdImagesImageIdVariationImagesGet**](docs/Api/ItemApi.md#restitemsidimagesimageidvariationimagesget) | **GET** /rest/items/{id}/images/{imageId}/variation_images | List image links of an image
*ItemApi* | [**restItemsIdImagesUploadPost**](docs/Api/ItemApi.md#restitemsidimagesuploadpost) | **POST** /rest/items/{id}/images/upload | Upload a new image
*ItemApi* | [**restItemsIdItemCrossSellingCrossItemIdDelete**](docs/Api/ItemApi.md#restitemsiditemcrosssellingcrossitemiddelete) | **DELETE** /rest/items/{id}/item_cross_selling/{crossItemId} | Delete a cross-selling link
*ItemApi* | [**restItemsIdItemCrossSellingGet**](docs/Api/ItemApi.md#restitemsiditemcrosssellingget) | **GET** /rest/items/{id}/item_cross_selling | List cross-selling links
*ItemApi* | [**restItemsIdItemCrossSellingPost**](docs/Api/ItemApi.md#restitemsiditemcrosssellingpost) | **POST** /rest/items/{id}/item_cross_selling | Create a cross-selling link
*ItemApi* | [**restItemsIdVariationImagesGet**](docs/Api/ItemApi.md#restitemsidvariationimagesget) | **GET** /rest/items/{id}/variation_images | List image links of an item
*ItemApi* | [**restItemsIdVariationsVariationIdDescriptionsGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationiddescriptionsget) | **GET** /rest/items/{id}/variations/{variationId}/descriptions | List texts
*ItemApi* | [**restItemsIdVariationsVariationIdDescriptionsLangDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationiddescriptionslangdelete) | **DELETE** /rest/items/{id}/variations/{variationId}/descriptions/{lang} | Delete texts
*ItemApi* | [**restItemsIdVariationsVariationIdDescriptionsLangGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationiddescriptionslangget) | **GET** /rest/items/{id}/variations/{variationId}/descriptions/{lang} | Get texts
*ItemApi* | [**restItemsIdVariationsVariationIdDescriptionsLangPut**](docs/Api/ItemApi.md#restitemsidvariationsvariationiddescriptionslangput) | **PUT** /rest/items/{id}/variations/{variationId}/descriptions/{lang} | Update texts
*ItemApi* | [**restItemsIdVariationsVariationIdDescriptionsPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationiddescriptionspost) | **POST** /rest/items/{id}/variations/{variationId}/descriptions | Create texts
*ItemApi* | [**restItemsIdVariationsVariationIdImagesGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidimagesget) | **GET** /rest/items/{id}/variations/{variationId}/images | List images of a variation
*ItemApi* | [**restItemsIdVariationsVariationIdLabelsPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidlabelspost) | **POST** /rest/items/{id}/variations/{variationId}/labels | Get a variation label
*ItemApi* | [**restItemsIdVariationsVariationIdMarketIdentNumbersGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidmarketidentnumbersget) | **GET** /rest/items/{id}/variations/{variationId}/market_ident_numbers | List ident number of a variation
*ItemApi* | [**restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidmarketidentnumbersmarketidentnumberiddelete) | **DELETE** /rest/items/{id}/variations/{variationId}/market_ident_numbers/{marketIdentNumberId} | Deletes a market ident number
*ItemApi* | [**restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidmarketidentnumbersmarketidentnumberidget) | **GET** /rest/items/{id}/variations/{variationId}/market_ident_numbers/{marketIdentNumberId} | Get a market ident number
*ItemApi* | [**restItemsIdVariationsVariationIdMarketIdentNumbersMarketIdentNumberIdPut**](docs/Api/ItemApi.md#restitemsidvariationsvariationidmarketidentnumbersmarketidentnumberidput) | **PUT** /rest/items/{id}/variations/{variationId}/market_ident_numbers/{marketIdentNumberId} | Updates a market ident number
*ItemApi* | [**restItemsIdVariationsVariationIdMarketIdentNumbersPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidmarketidentnumberspost) | **POST** /rest/items/{id}/variations/{variationId}/market_ident_numbers | Create a market ident number
*ItemApi* | [**restItemsIdVariationsVariationIdStockBookIncomingItemsPut**](docs/Api/ItemApi.md#restitemsidvariationsvariationidstockbookincomingitemsput) | **PUT** /rest/items/{id}/variations/{variationId}/stock/bookIncomingItems | Book incoming stock
*ItemApi* | [**restItemsIdVariationsVariationIdStockBookOutgoingItemsPut**](docs/Api/ItemApi.md#restitemsidvariationsvariationidstockbookoutgoingitemsput) | **PUT** /rest/items/{id}/variations/{variationId}/stock/bookOutgoingItems | Book outgoing stock
*ItemApi* | [**restItemsIdVariationsVariationIdStockCorrectionPut**](docs/Api/ItemApi.md#restitemsidvariationsvariationidstockcorrectionput) | **PUT** /rest/items/{id}/variations/{variationId}/stock/correction | Correct stock
*ItemApi* | [**restItemsIdVariationsVariationIdStockGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidstockget) | **GET** /rest/items/{id}/variations/{variationId}/stock | List stock of a variation per warehouse
*ItemApi* | [**restItemsIdVariationsVariationIdStockMovementsGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidstockmovementsget) | **GET** /rest/items/{id}/variations/{variationId}/stock/movements | List stock movements
*ItemApi* | [**restItemsIdVariationsVariationIdStockRedistributePut**](docs/Api/ItemApi.md#restitemsidvariationsvariationidstockredistributeput) | **PUT** /rest/items/{id}/variations/{variationId}/stock/redistribute | Redistribute stock
*ItemApi* | [**restItemsIdVariationsVariationIdStockStorageLocationsGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidstockstoragelocationsget) | **GET** /rest/items/{id}/variations/{variationId}/stock/storageLocations | List stock of a variation per storage locations
*ItemApi* | [**restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationadditionalskusadditionalskuiddelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_additional_skus/{additionalSkuId} | Delete an additional SKU
*ItemApi* | [**restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationadditionalskusadditionalskuidget) | **GET** /rest/items/{id}/variations/{variationId}/variation_additional_skus/{additionalSkuId} | Gets an additional SKU
*ItemApi* | [**restItemsIdVariationsVariationIdVariationAdditionalSkusAdditionalSkuIdPut**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationadditionalskusadditionalskuidput) | **PUT** /rest/items/{id}/variations/{variationId}/variation_additional_skus/{additionalSkuId} | Update an additional SKU
*ItemApi* | [**restItemsIdVariationsVariationIdVariationAdditionalSkusGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationadditionalskusget) | **GET** /rest/items/{id}/variations/{variationId}/variation_additional_skus | List additional SKUs
*ItemApi* | [**restItemsIdVariationsVariationIdVariationAdditionalSkusPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationadditionalskuspost) | **POST** /rest/items/{id}/variations/{variationId}/variation_additional_skus | Create an additional SKU
*ItemApi* | [**restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationbarcodesbarcodeiddelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_barcodes/{barcodeId} | Delete a variation barcode
*ItemApi* | [**restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationbarcodesbarcodeidget) | **GET** /rest/items/{id}/variations/{variationId}/variation_barcodes/{barcodeId} | Get a variation barcode
*ItemApi* | [**restItemsIdVariationsVariationIdVariationBarcodesBarcodeIdPut**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationbarcodesbarcodeidput) | **PUT** /rest/items/{id}/variations/{variationId}/variation_barcodes/{barcodeId} | Update a variation barcode
*ItemApi* | [**restItemsIdVariationsVariationIdVariationBarcodesGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationbarcodesget) | **GET** /rest/items/{id}/variations/{variationId}/variation_barcodes | List variation barcodes
*ItemApi* | [**restItemsIdVariationsVariationIdVariationBarcodesPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationbarcodespost) | **POST** /rest/items/{id}/variations/{variationId}/variation_barcodes | Create a variation barcode
*ItemApi* | [**restItemsIdVariationsVariationIdVariationBundlesBundleIdDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationbundlesbundleiddelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_bundles/{bundleId} | Remove a bundle component
*ItemApi* | [**restItemsIdVariationsVariationIdVariationBundlesBundleIdGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationbundlesbundleidget) | **GET** /rest/items/{id}/variations/{variationId}/variation_bundles/{bundleId} | Get a variation bundle
*ItemApi* | [**restItemsIdVariationsVariationIdVariationBundlesBundleIdPut**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationbundlesbundleidput) | **PUT** /rest/items/{id}/variations/{variationId}/variation_bundles/{bundleId} | Update a variation bundle
*ItemApi* | [**restItemsIdVariationsVariationIdVariationBundlesGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationbundlesget) | **GET** /rest/items/{id}/variations/{variationId}/variation_bundles | List bundle components
*ItemApi* | [**restItemsIdVariationsVariationIdVariationBundlesPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationbundlespost) | **POST** /rest/items/{id}/variations/{variationId}/variation_bundles | Add a variation to a bundle
*ItemApi* | [**restItemsIdVariationsVariationIdVariationCategoriesCatIdDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationcategoriescatiddelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_categories/{catId} | Remove a category from a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationCategoriesCatIdGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationcategoriescatidget) | **GET** /rest/items/{id}/variations/{variationId}/variation_categories/{catId} | Get link between category and variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationCategoriesCatIdPut**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationcategoriescatidput) | **PUT** /rest/items/{id}/variations/{variationId}/variation_categories/{catId} | Update variation category link
*ItemApi* | [**restItemsIdVariationsVariationIdVariationCategoriesGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationcategoriesget) | **GET** /rest/items/{id}/variations/{variationId}/variation_categories | List categories linked to a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationCategoriesPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationcategoriespost) | **POST** /rest/items/{id}/variations/{variationId}/variation_categories | Link a category to a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationClientsGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationclientsget) | **GET** /rest/items/{id}/variations/{variationId}/variation_clients | List clients linked to a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationClientsPlentyIdDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationclientsplentyiddelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_clients/{plentyId} | Unlink a client from a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationClientsPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationclientspost) | **POST** /rest/items/{id}/variations/{variationId}/variation_clients | Link a client to a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationComponentBundlesGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationcomponentbundlesget) | **GET** /rest/items/{id}/variations/{variationId}/variation_component_bundles | List bundles
*ItemApi* | [**restItemsIdVariationsVariationIdVariationDefaultCategoriesGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationdefaultcategoriesget) | **GET** /rest/items/{id}/variations/{variationId}/variation_default_categories | List default category links
*ItemApi* | [**restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationdefaultcategoriesplentyiddelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_default_categories/{plentyId} | Delete a default category link
*ItemApi* | [**restItemsIdVariationsVariationIdVariationDefaultCategoriesPlentyIdGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationdefaultcategoriesplentyidget) | **GET** /rest/items/{id}/variations/{variationId}/variation_default_categories/{plentyId} | Gets a default category link
*ItemApi* | [**restItemsIdVariationsVariationIdVariationDefaultCategoriesPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationdefaultcategoriespost) | **POST** /rest/items/{id}/variations/{variationId}/variation_default_categories | Create a default category link
*ItemApi* | [**restItemsIdVariationsVariationIdVariationImagesGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationimagesget) | **GET** /rest/items/{id}/variations/{variationId}/variation_images | List image links of a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationImagesImageIdDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationimagesimageiddelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_images/{imageId} | Delete an image link
*ItemApi* | [**restItemsIdVariationsVariationIdVariationImagesPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationimagespost) | **POST** /rest/items/{id}/variations/{variationId}/variation_images | Create an image link
*ItemApi* | [**restItemsIdVariationsVariationIdVariationMarketsDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationmarketsdelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_markets | Delete all market links of one variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationMarketsGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationmarketsget) | **GET** /rest/items/{id}/variations/{variationId}/variation_markets | List markets linked to a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationMarketsMarketplaceIdDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationmarketsmarketplaceiddelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_markets/{marketplaceId} | Delete link between variation and market
*ItemApi* | [**restItemsIdVariationsVariationIdVariationMarketsPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationmarketspost) | **POST** /rest/items/{id}/variations/{variationId}/variation_markets | Create link between variation and market
*ItemApi* | [**restItemsIdVariationsVariationIdVariationPropertiesDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationpropertiesdelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_properties | Deletes all links between a variation and its property values
*ItemApi* | [**restItemsIdVariationsVariationIdVariationPropertiesGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationpropertiesget) | **GET** /rest/items/{id}/variations/{variationId}/variation_properties | List property values linked to a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationPropertiesPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationpropertiespost) | **POST** /rest/items/{id}/variations/{variationId}/variation_properties | Create link between variation and property value
*ItemApi* | [**restItemsIdVariationsVariationIdVariationPropertiesPropertyIdDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationpropertiespropertyiddelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_properties/{propertyId} | Delete link between variation and property value
*ItemApi* | [**restItemsIdVariationsVariationIdVariationPropertiesPropertyIdGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationpropertiespropertyidget) | **GET** /rest/items/{id}/variations/{variationId}/variation_properties/{propertyId} | Get a property value
*ItemApi* | [**restItemsIdVariationsVariationIdVariationPropertiesPropertyIdPut**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationpropertiespropertyidput) | **PUT** /rest/items/{id}/variations/{variationId}/variation_properties/{propertyId} | Update a property value
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSalesPricesDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationsalespricesdelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_sales_prices | Delete all links between a variation and its sales prices
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSalesPricesGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationsalespricesget) | **GET** /rest/items/{id}/variations/{variationId}/variation_sales_prices | List sales prices of a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSalesPricesPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationsalespricespost) | **POST** /rest/items/{id}/variations/{variationId}/variation_sales_prices | Create link between variation and sales price
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSalesPricesPriceIdDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationsalespricespriceiddelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_sales_prices/{priceId} | Delete link between variation and sales price
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSalesPricesPriceIdGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationsalespricespriceidget) | **GET** /rest/items/{id}/variations/{variationId}/variation_sales_prices/{priceId} | Get sales price data for a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSalesPricesPriceIdPut**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationsalespricespriceidput) | **PUT** /rest/items/{id}/variations/{variationId}/variation_sales_prices/{priceId} | Update sales price data
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSkusGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationskusget) | **GET** /rest/items/{id}/variations/{variationId}/variation_skus | List SKUs
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSkusPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationskuspost) | **POST** /rest/items/{id}/variations/{variationId}/variation_skus | Create an SKU
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSkusSkuIdDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationskusskuiddelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_skus/{skuId} | Delete an SKU
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSkusSkuIdGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationskusskuidget) | **GET** /rest/items/{id}/variations/{variationId}/variation_skus/{skuId} | Get an SKU
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSkusSkuIdPut**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationskusskuidput) | **PUT** /rest/items/{id}/variations/{variationId}/variation_skus/{skuId} | Update an SKU
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSuppliersGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationsuppliersget) | **GET** /rest/items/{id}/variations/{variationId}/variation_suppliers | Lists suppliers for a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSuppliersPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationsupplierspost) | **POST** /rest/items/{id}/variations/{variationId}/variation_suppliers | Create a link between variation and supplier
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationsuppliersvariationsupplieriddelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_suppliers/{variationSupplierId} | Delete link between variation and supplier
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationsuppliersvariationsupplieridget) | **GET** /rest/items/{id}/variations/{variationId}/variation_suppliers/{variationSupplierId} | Get supplier data for a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationSuppliersVariationSupplierIdPut**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationsuppliersvariationsupplieridput) | **PUT** /rest/items/{id}/variations/{variationId}/variation_suppliers/{variationSupplierId} | Updates supplier data for a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationWarehousesGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationwarehousesget) | **GET** /rest/items/{id}/variations/{variationId}/variation_warehouses | List the warehouses linked to a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationWarehousesPost**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationwarehousespost) | **POST** /rest/items/{id}/variations/{variationId}/variation_warehouses | Create link between a variation and a warehouse
*ItemApi* | [**restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdDelete**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationwarehouseswarehouseiddelete) | **DELETE** /rest/items/{id}/variations/{variationId}/variation_warehouses/{warehouseId} | Delete link between a warehouse and a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdGet**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationwarehouseswarehouseidget) | **GET** /rest/items/{id}/variations/{variationId}/variation_warehouses/{warehouseId} | Get warehouse data for a variation
*ItemApi* | [**restItemsIdVariationsVariationIdVariationWarehousesWarehouseIdPut**](docs/Api/ItemApi.md#restitemsidvariationsvariationidvariationwarehouseswarehouseidput) | **PUT** /rest/items/{id}/variations/{variationId}/variation_warehouses/{warehouseId} | Update warehouse data of a variation
*ItemApi* | [**restItemsItemIdDelete**](docs/Api/ItemApi.md#restitemsitemiddelete) | **DELETE** /rest/items/{itemId} | Delete an item
*ItemApi* | [**restItemsItemIdFillPost**](docs/Api/ItemApi.md#restitemsitemidfillpost) | **POST** /rest/items/{itemId}/fill | Fill item to es
*ItemApi* | [**restItemsItemIdGet**](docs/Api/ItemApi.md#restitemsitemidget) | **GET** /rest/items/{itemId} | Show an item
*ItemApi* | [**restItemsItemIdItemShippingProfilesDelete**](docs/Api/ItemApi.md#restitemsitemiditemshippingprofilesdelete) | **DELETE** /rest/items/{itemId}/item_shipping_profiles | Deactivate shipping profiles of an item
*ItemApi* | [**restItemsItemIdItemShippingProfilesGet**](docs/Api/ItemApi.md#restitemsitemiditemshippingprofilesget) | **GET** /rest/items/{itemId}/item_shipping_profiles | List shipping profiles of an item
*ItemApi* | [**restItemsItemIdItemShippingProfilesIdDelete**](docs/Api/ItemApi.md#restitemsitemiditemshippingprofilesiddelete) | **DELETE** /rest/items/{itemId}/item_shipping_profiles/{id} | Deactivate a shipping profile
*ItemApi* | [**restItemsItemIdItemShippingProfilesPost**](docs/Api/ItemApi.md#restitemsitemiditemshippingprofilespost) | **POST** /rest/items/{itemId}/item_shipping_profiles | Activate a shipping profile
*ItemApi* | [**restItemsItemIdPut**](docs/Api/ItemApi.md#restitemsitemidput) | **PUT** /rest/items/{itemId} | Update a item
*ItemApi* | [**restItemsItemIdVariationsGet**](docs/Api/ItemApi.md#restitemsitemidvariationsget) | **GET** /rest/items/{itemId}/variations | List variations of an item
*ItemApi* | [**restItemsItemIdVariationsPost**](docs/Api/ItemApi.md#restitemsitemidvariationspost) | **POST** /rest/items/{itemId}/variations | Create a variation
*ItemApi* | [**restItemsItemIdVariationsVariationIdDelete**](docs/Api/ItemApi.md#restitemsitemidvariationsvariationiddelete) | **DELETE** /rest/items/{itemId}/variations/{variationId} | Delete a variation
*ItemApi* | [**restItemsItemIdVariationsVariationIdFillPost**](docs/Api/ItemApi.md#restitemsitemidvariationsvariationidfillpost) | **POST** /rest/items/{itemId}/variations/{variationId}/fill | Fill a variation
*ItemApi* | [**restItemsItemIdVariationsVariationIdGet**](docs/Api/ItemApi.md#restitemsitemidvariationsvariationidget) | **GET** /rest/items/{itemId}/variations/{variationId} | Get a variation
*ItemApi* | [**restItemsItemIdVariationsVariationIdPut**](docs/Api/ItemApi.md#restitemsitemidvariationsvariationidput) | **PUT** /rest/items/{itemId}/variations/{variationId} | Update a variation
*ItemApi* | [**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsGet**](docs/Api/ItemApi.md#restitemsitemidvariationsvariationidvariationpropertiespropertyidtextsget) | **GET** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts | Get property value texts
*ItemApi* | [**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangDelete**](docs/Api/ItemApi.md#restitemsitemidvariationsvariationidvariationpropertiespropertyidtextslangdelete) | **DELETE** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts/{lang} | Delete property value text by language
*ItemApi* | [**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangGet**](docs/Api/ItemApi.md#restitemsitemidvariationsvariationidvariationpropertiespropertyidtextslangget) | **GET** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts/{lang} | Get property value text by language
*ItemApi* | [**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsLangPut**](docs/Api/ItemApi.md#restitemsitemidvariationsvariationidvariationpropertiespropertyidtextslangput) | **PUT** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts/{lang} | Update property value text by language
*ItemApi* | [**restItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPost**](docs/Api/ItemApi.md#restitemsitemidvariationsvariationidvariationpropertiespropertyidtextspost) | **POST** /rest/items/{itemId}/variations/{variationId}/variation_properties/{propertyId}/texts | Create property value text by language
*ItemApi* | [**restItemsItemShippingProfilesGet**](docs/Api/ItemApi.md#restitemsitemshippingprofilesget) | **GET** /rest/items/item_shipping_profiles | List all shipping profiles of all items
*ItemApi* | [**restItemsItemShippingProfilesPost**](docs/Api/ItemApi.md#restitemsitemshippingprofilespost) | **POST** /rest/items/item_shipping_profiles | Bulk activate shipping profiles
*ItemApi* | [**restItemsLabelsGet**](docs/Api/ItemApi.md#restitemslabelsget) | **GET** /rest/items/labels | List item label templates
*ItemApi* | [**restItemsManufacturersGet**](docs/Api/ItemApi.md#restitemsmanufacturersget) | **GET** /rest/items/manufacturers | List manufacturers
*ItemApi* | [**restItemsManufacturersIdCommissionsGet**](docs/Api/ItemApi.md#restitemsmanufacturersidcommissionsget) | **GET** /rest/items/manufacturers/{id}/commissions | List commissions
*ItemApi* | [**restItemsManufacturersIdCommissionsManufacturerIdDelete**](docs/Api/ItemApi.md#restitemsmanufacturersidcommissionsmanufactureriddelete) | **DELETE** /rest/items/manufacturers/{id}/commissions/{manufacturerId} | Delete a commission
*ItemApi* | [**restItemsManufacturersIdCommissionsManufacturerIdGet**](docs/Api/ItemApi.md#restitemsmanufacturersidcommissionsmanufactureridget) | **GET** /rest/items/manufacturers/{id}/commissions/{manufacturerId} | Get a commission
*ItemApi* | [**restItemsManufacturersIdCommissionsManufacturerIdPut**](docs/Api/ItemApi.md#restitemsmanufacturersidcommissionsmanufactureridput) | **PUT** /rest/items/manufacturers/{id}/commissions/{manufacturerId} | Update a commission
*ItemApi* | [**restItemsManufacturersIdCommissionsPost**](docs/Api/ItemApi.md#restitemsmanufacturersidcommissionspost) | **POST** /rest/items/manufacturers/{id}/commissions | Create a commission
*ItemApi* | [**restItemsManufacturersIdDelete**](docs/Api/ItemApi.md#restitemsmanufacturersiddelete) | **DELETE** /rest/items/manufacturers/{id} | Delete a manufacturer
*ItemApi* | [**restItemsManufacturersIdGet**](docs/Api/ItemApi.md#restitemsmanufacturersidget) | **GET** /rest/items/manufacturers/{id} | Get a manufacturer
*ItemApi* | [**restItemsManufacturersIdPut**](docs/Api/ItemApi.md#restitemsmanufacturersidput) | **PUT** /rest/items/manufacturers/{id} | Update a manufacturer
*ItemApi* | [**restItemsManufacturersPost**](docs/Api/ItemApi.md#restitemsmanufacturerspost) | **POST** /rest/items/manufacturers | Create a manufacturer
*ItemApi* | [**restItemsPackingUnitsGet**](docs/Api/ItemApi.md#restitemspackingunitsget) | **GET** /rest/items/packing_units | Get the item variation packing units
*ItemApi* | [**restItemsPackingUnitsIdGet**](docs/Api/ItemApi.md#restitemspackingunitsidget) | **GET** /rest/items/packing_units/{id} | Get the item variation packing unit for a specific given id
*ItemApi* | [**restItemsPost**](docs/Api/ItemApi.md#restitemspost) | **POST** /rest/items | Create new items
*ItemApi* | [**restItemsPropertiesGet**](docs/Api/ItemApi.md#restitemspropertiesget) | **GET** /rest/items/properties | List properties
*ItemApi* | [**restItemsPropertiesIdDelete**](docs/Api/ItemApi.md#restitemspropertiesiddelete) | **DELETE** /rest/items/properties/{id} | Delete a property
*ItemApi* | [**restItemsPropertiesIdGet**](docs/Api/ItemApi.md#restitemspropertiesidget) | **GET** /rest/items/properties/{id} | Get a property
*ItemApi* | [**restItemsPropertiesIdMarketReferencesGet**](docs/Api/ItemApi.md#restitemspropertiesidmarketreferencesget) | **GET** /rest/items/properties/{id}/market_references | List property market references
*ItemApi* | [**restItemsPropertiesIdMarketReferencesMarketIdDelete**](docs/Api/ItemApi.md#restitemspropertiesidmarketreferencesmarketiddelete) | **DELETE** /rest/items/properties/{id}/market_references/{marketId} | Delete a property market reference
*ItemApi* | [**restItemsPropertiesIdMarketReferencesMarketIdGet**](docs/Api/ItemApi.md#restitemspropertiesidmarketreferencesmarketidget) | **GET** /rest/items/properties/{id}/market_references/{marketId} | Get a property market reference
*ItemApi* | [**restItemsPropertiesIdMarketReferencesMarketIdPut**](docs/Api/ItemApi.md#restitemspropertiesidmarketreferencesmarketidput) | **PUT** /rest/items/properties/{id}/market_references/{marketId} | Update a property market reference
*ItemApi* | [**restItemsPropertiesIdMarketReferencesPost**](docs/Api/ItemApi.md#restitemspropertiesidmarketreferencespost) | **POST** /rest/items/properties/{id}/market_references | Create a property market reference
*ItemApi* | [**restItemsPropertiesIdNamesGet**](docs/Api/ItemApi.md#restitemspropertiesidnamesget) | **GET** /rest/items/properties/{id}/names | List the property names
*ItemApi* | [**restItemsPropertiesIdNamesLangDelete**](docs/Api/ItemApi.md#restitemspropertiesidnameslangdelete) | **DELETE** /rest/items/properties/{id}/names/{lang} | Delete a property name
*ItemApi* | [**restItemsPropertiesIdNamesLangGet**](docs/Api/ItemApi.md#restitemspropertiesidnameslangget) | **GET** /rest/items/properties/{id}/names/{lang} | Get a property name
*ItemApi* | [**restItemsPropertiesIdNamesLangPut**](docs/Api/ItemApi.md#restitemspropertiesidnameslangput) | **PUT** /rest/items/properties/{id}/names/{lang} | Update a property name
*ItemApi* | [**restItemsPropertiesIdNamesPost**](docs/Api/ItemApi.md#restitemspropertiesidnamespost) | **POST** /rest/items/properties/{id}/names | Create a property name
*ItemApi* | [**restItemsPropertiesIdPut**](docs/Api/ItemApi.md#restitemspropertiesidput) | **PUT** /rest/items/properties/{id} | Update a property
*ItemApi* | [**restItemsPropertiesPost**](docs/Api/ItemApi.md#restitemspropertiespost) | **POST** /rest/items/properties | Create a property
*ItemApi* | [**restItemsPropertiesPropertyIdSelectionsGet**](docs/Api/ItemApi.md#restitemspropertiespropertyidselectionsget) | **GET** /rest/items/properties/{propertyId}/selections | List property selections
*ItemApi* | [**restItemsPropertiesPropertyIdSelectionsIdDelete**](docs/Api/ItemApi.md#restitemspropertiespropertyidselectionsiddelete) | **DELETE** /rest/items/properties/{propertyId}/selections/{id} | Delete a property selection
*ItemApi* | [**restItemsPropertiesPropertyIdSelectionsIdGet**](docs/Api/ItemApi.md#restitemspropertiespropertyidselectionsidget) | **GET** /rest/items/properties/{propertyId}/selections/{id} | Get a property selection
*ItemApi* | [**restItemsPropertiesPropertyIdSelectionsIdLangDelete**](docs/Api/ItemApi.md#restitemspropertiespropertyidselectionsidlangdelete) | **DELETE** /rest/items/properties/{propertyId}/selections/{id}/{lang} | Delete a property selection language
*ItemApi* | [**restItemsPropertiesPropertyIdSelectionsIdLangGet**](docs/Api/ItemApi.md#restitemspropertiespropertyidselectionsidlangget) | **GET** /rest/items/properties/{propertyId}/selections/{id}/{lang} | List property selections by language
*ItemApi* | [**restItemsPropertiesPropertyIdSelectionsIdLangPut**](docs/Api/ItemApi.md#restitemspropertiespropertyidselectionsidlangput) | **PUT** /rest/items/properties/{propertyId}/selections/{id}/{lang} | Update a property selection
*ItemApi* | [**restItemsPropertiesPropertyIdSelectionsIdPost**](docs/Api/ItemApi.md#restitemspropertiespropertyidselectionsidpost) | **POST** /rest/items/properties/{propertyId}/selections/{id} | Creates a property selection lang
*ItemApi* | [**restItemsPropertiesPropertyIdSelectionsLangGet**](docs/Api/ItemApi.md#restitemspropertiespropertyidselectionslangget) | **GET** /rest/items/properties/{propertyId}/selections/{lang} | List property selections
*ItemApi* | [**restItemsPropertiesPropertyIdSelectionsPost**](docs/Api/ItemApi.md#restitemspropertiespropertyidselectionspost) | **POST** /rest/items/properties/{propertyId}/selections | Create a property selection
*ItemApi* | [**restItemsPropertyGroupsGet**](docs/Api/ItemApi.md#restitemspropertygroupsget) | **GET** /rest/items/property_groups | List property groups
*ItemApi* | [**restItemsPropertyGroupsIdDelete**](docs/Api/ItemApi.md#restitemspropertygroupsiddelete) | **DELETE** /rest/items/property_groups/{id} | Delete a property group
*ItemApi* | [**restItemsPropertyGroupsIdGet**](docs/Api/ItemApi.md#restitemspropertygroupsidget) | **GET** /rest/items/property_groups/{id} | Get a property group
*ItemApi* | [**restItemsPropertyGroupsIdNamesGet**](docs/Api/ItemApi.md#restitemspropertygroupsidnamesget) | **GET** /rest/items/property_groups/{id}/names | List the property group names of a property group
*ItemApi* | [**restItemsPropertyGroupsIdNamesLangDelete**](docs/Api/ItemApi.md#restitemspropertygroupsidnameslangdelete) | **DELETE** /rest/items/property_groups/{id}/names/{lang} | Delete a property group name
*ItemApi* | [**restItemsPropertyGroupsIdNamesLangGet**](docs/Api/ItemApi.md#restitemspropertygroupsidnameslangget) | **GET** /rest/items/property_groups/{id}/names/{lang} | Get a property group name in a language
*ItemApi* | [**restItemsPropertyGroupsIdNamesLangPut**](docs/Api/ItemApi.md#restitemspropertygroupsidnameslangput) | **PUT** /rest/items/property_groups/{id}/names/{lang} | Update a property group name
*ItemApi* | [**restItemsPropertyGroupsIdNamesPost**](docs/Api/ItemApi.md#restitemspropertygroupsidnamespost) | **POST** /rest/items/property_groups/{id}/names | Create a property group name
*ItemApi* | [**restItemsPropertyGroupsIdPut**](docs/Api/ItemApi.md#restitemspropertygroupsidput) | **PUT** /rest/items/property_groups/{id} | Update a property group
*ItemApi* | [**restItemsPropertyGroupsPost**](docs/Api/ItemApi.md#restitemspropertygroupspost) | **POST** /rest/items/property_groups | Create a property group
*ItemApi* | [**restItemsPut**](docs/Api/ItemApi.md#restitemsput) | **PUT** /rest/items | Bulk update items
*ItemApi* | [**restItemsSalesPricesGet**](docs/Api/ItemApi.md#restitemssalespricesget) | **GET** /rest/items/sales_prices | List sales prices
*ItemApi* | [**restItemsSalesPricesIdAccountsAccountTypeAccountIdDelete**](docs/Api/ItemApi.md#restitemssalespricesidaccountsaccounttypeaccountiddelete) | **DELETE** /rest/items/sales_prices/{id}/accounts/{accountType}/{accountId} | Deactivate a referrer account
*ItemApi* | [**restItemsSalesPricesIdAccountsGet**](docs/Api/ItemApi.md#restitemssalespricesidaccountsget) | **GET** /rest/items/sales_prices/{id}/accounts | List referrer accounts
*ItemApi* | [**restItemsSalesPricesIdAccountsPost**](docs/Api/ItemApi.md#restitemssalespricesidaccountspost) | **POST** /rest/items/sales_prices/{id}/accounts | Activate a referrer account
*ItemApi* | [**restItemsSalesPricesIdCountriesCountryIdDelete**](docs/Api/ItemApi.md#restitemssalespricesidcountriescountryiddelete) | **DELETE** /rest/items/sales_prices/{id}/countries/{countryId} | Deactivate a country
*ItemApi* | [**restItemsSalesPricesIdCountriesGet**](docs/Api/ItemApi.md#restitemssalespricesidcountriesget) | **GET** /rest/items/sales_prices/{id}/countries | List countries by sales price
*ItemApi* | [**restItemsSalesPricesIdCountriesPost**](docs/Api/ItemApi.md#restitemssalespricesidcountriespost) | **POST** /rest/items/sales_prices/{id}/countries | Activate a country
*ItemApi* | [**restItemsSalesPricesIdCurrenciesCurrencyDelete**](docs/Api/ItemApi.md#restitemssalespricesidcurrenciescurrencydelete) | **DELETE** /rest/items/sales_prices/{id}/currencies/{currency} | Deactivate a currency
*ItemApi* | [**restItemsSalesPricesIdCurrenciesGet**](docs/Api/ItemApi.md#restitemssalespricesidcurrenciesget) | **GET** /rest/items/sales_prices/{id}/currencies | List activated currencies
*ItemApi* | [**restItemsSalesPricesIdCurrenciesPost**](docs/Api/ItemApi.md#restitemssalespricesidcurrenciespost) | **POST** /rest/items/sales_prices/{id}/currencies | Activate a currency
*ItemApi* | [**restItemsSalesPricesIdCustomerClassesCustomerClassIdDelete**](docs/Api/ItemApi.md#restitemssalespricesidcustomerclassescustomerclassiddelete) | **DELETE** /rest/items/sales_prices/{id}/customer_classes/{customerClassId} | Activate a customer class
*ItemApi* | [**restItemsSalesPricesIdCustomerClassesGet**](docs/Api/ItemApi.md#restitemssalespricesidcustomerclassesget) | **GET** /rest/items/sales_prices/{id}/customer_classes | List activated customer classes
*ItemApi* | [**restItemsSalesPricesIdCustomerClassesPost**](docs/Api/ItemApi.md#restitemssalespricesidcustomerclassespost) | **POST** /rest/items/sales_prices/{id}/customer_classes | Activate a customer class
*ItemApi* | [**restItemsSalesPricesIdDelete**](docs/Api/ItemApi.md#restitemssalespricesiddelete) | **DELETE** /rest/items/sales_prices/{id} | Delete a sales price
*ItemApi* | [**restItemsSalesPricesIdGet**](docs/Api/ItemApi.md#restitemssalespricesidget) | **GET** /rest/items/sales_prices/{id} | Get a sales price
*ItemApi* | [**restItemsSalesPricesIdNamesGet**](docs/Api/ItemApi.md#restitemssalespricesidnamesget) | **GET** /rest/items/sales_prices/{id}/names | List names of a sales price
*ItemApi* | [**restItemsSalesPricesIdNamesLangDelete**](docs/Api/ItemApi.md#restitemssalespricesidnameslangdelete) | **DELETE** /rest/items/sales_prices/{id}/names/{lang} | Delete a sales price name
*ItemApi* | [**restItemsSalesPricesIdNamesLangGet**](docs/Api/ItemApi.md#restitemssalespricesidnameslangget) | **GET** /rest/items/sales_prices/{id}/names/{lang} | Gets a sales price name
*ItemApi* | [**restItemsSalesPricesIdNamesLangPut**](docs/Api/ItemApi.md#restitemssalespricesidnameslangput) | **PUT** /rest/items/sales_prices/{id}/names/{lang} | Update a sales price name
*ItemApi* | [**restItemsSalesPricesIdNamesPost**](docs/Api/ItemApi.md#restitemssalespricesidnamespost) | **POST** /rest/items/sales_prices/{id}/names | Create a sales price name
*ItemApi* | [**restItemsSalesPricesIdOnlineStoresGet**](docs/Api/ItemApi.md#restitemssalespricesidonlinestoresget) | **GET** /rest/items/sales_prices/{id}/online_stores | List activated clients (stores)
*ItemApi* | [**restItemsSalesPricesIdOnlineStoresPost**](docs/Api/ItemApi.md#restitemssalespricesidonlinestorespost) | **POST** /rest/items/sales_prices/{id}/online_stores | Activate a client (store)
*ItemApi* | [**restItemsSalesPricesIdOnlineStoresWebstoreIdDelete**](docs/Api/ItemApi.md#restitemssalespricesidonlinestoreswebstoreiddelete) | **DELETE** /rest/items/sales_prices/{id}/online_stores/{webstoreId} | Deactivate a client (store)
*ItemApi* | [**restItemsSalesPricesIdPut**](docs/Api/ItemApi.md#restitemssalespricesidput) | **PUT** /rest/items/sales_prices/{id} | Update a sales price
*ItemApi* | [**restItemsSalesPricesIdReferrersGet**](docs/Api/ItemApi.md#restitemssalespricesidreferrersget) | **GET** /rest/items/sales_prices/{id}/referrers | List activated referrers
*ItemApi* | [**restItemsSalesPricesIdReferrersPost**](docs/Api/ItemApi.md#restitemssalespricesidreferrerspost) | **POST** /rest/items/sales_prices/{id}/referrers | Activate a referrer
*ItemApi* | [**restItemsSalesPricesIdReferrersReferrerIdDelete**](docs/Api/ItemApi.md#restitemssalespricesidreferrersreferreriddelete) | **DELETE** /rest/items/sales_prices/{id}/referrers/{referrerId} | Deactivates a referrer
*ItemApi* | [**restItemsSalesPricesPost**](docs/Api/ItemApi.md#restitemssalespricespost) | **POST** /rest/items/sales_prices | Create a sales price
*ItemApi* | [**restItemsUnitsGet**](docs/Api/ItemApi.md#restitemsunitsget) | **GET** /rest/items/units | List units
*ItemApi* | [**restItemsUnitsIdDelete**](docs/Api/ItemApi.md#restitemsunitsiddelete) | **DELETE** /rest/items/units/{id} | Delete a unit
*ItemApi* | [**restItemsUnitsIdGet**](docs/Api/ItemApi.md#restitemsunitsidget) | **GET** /rest/items/units/{id} | Get a unit
*ItemApi* | [**restItemsUnitsIdNamesGet**](docs/Api/ItemApi.md#restitemsunitsidnamesget) | **GET** /rest/items/units/{id}/names | List unit names
*ItemApi* | [**restItemsUnitsIdNamesLangDelete**](docs/Api/ItemApi.md#restitemsunitsidnameslangdelete) | **DELETE** /rest/items/units/{id}/names/{lang} | Delete a unit name
*ItemApi* | [**restItemsUnitsIdNamesLangGet**](docs/Api/ItemApi.md#restitemsunitsidnameslangget) | **GET** /rest/items/units/{id}/names/{lang} | Get a unit name
*ItemApi* | [**restItemsUnitsIdNamesLangPut**](docs/Api/ItemApi.md#restitemsunitsidnameslangput) | **PUT** /rest/items/units/{id}/names/{lang} | Update a unit name
*ItemApi* | [**restItemsUnitsIdNamesPost**](docs/Api/ItemApi.md#restitemsunitsidnamespost) | **POST** /rest/items/units/{id}/names | Create a unit name
*ItemApi* | [**restItemsUnitsIdPut**](docs/Api/ItemApi.md#restitemsunitsidput) | **PUT** /rest/items/units/{id} | Update a unit
*ItemApi* | [**restItemsUnitsPost**](docs/Api/ItemApi.md#restitemsunitspost) | **POST** /rest/items/units | Create a unit
*ItemApi* | [**restItemsVariationsGet**](docs/Api/ItemApi.md#restitemsvariationsget) | **GET** /rest/items/variations | Search variations
*ItemApi* | [**restItemsVariationsPut**](docs/Api/ItemApi.md#restitemsvariationsput) | **PUT** /rest/items/variations | Update up to 50 variations
*ItemApi* | [**restItemsVariationsVariationCategoriesPost**](docs/Api/ItemApi.md#restitemsvariationsvariationcategoriespost) | **POST** /rest/items/variations/variation_categories | Bulk create category links
*ItemApi* | [**restItemsVariationsVariationCategoriesPut**](docs/Api/ItemApi.md#restitemsvariationsvariationcategoriesput) | **PUT** /rest/items/variations/variation_categories | Bulk update category links
*ItemApi* | [**restItemsVariationsVariationMarketsGet**](docs/Api/ItemApi.md#restitemsvariationsvariationmarketsget) | **GET** /rest/items/variations/variation_markets | List all links between variations and markets
*ItemApi* | [**restItemsVariationsVariationMarketsPost**](docs/Api/ItemApi.md#restitemsvariationsvariationmarketspost) | **POST** /rest/items/variations/variation_markets | Create up to 50 links between variations and markets
*ItemApi* | [**restItemsVariationsVariationPropertiesPost**](docs/Api/ItemApi.md#restitemsvariationsvariationpropertiespost) | **POST** /rest/items/variations/variation_properties | Bulk update properties
*ItemApi* | [**restItemsVariationsVariationPropertiesPut**](docs/Api/ItemApi.md#restitemsvariationsvariationpropertiesput) | **PUT** /rest/items/variations/variation_properties | Bulk update properties
*ItemApi* | [**restItemsVariationsVariationSalesPricesGet**](docs/Api/ItemApi.md#restitemsvariationsvariationsalespricesget) | **GET** /rest/items/variations/variation_sales_prices | Get all sales price relations
*ItemApi* | [**restItemsVariationsVariationSalesPricesPost**](docs/Api/ItemApi.md#restitemsvariationsvariationsalespricespost) | **POST** /rest/items/variations/variation_sales_prices | Bulk create prices
*ItemApi* | [**restItemsVariationsVariationSalesPricesPut**](docs/Api/ItemApi.md#restitemsvariationsvariationsalespricesput) | **PUT** /rest/items/variations/variation_sales_prices | Bulk update prices
*LegalInformationApi* | [**restLegalinformationPlentyIdLangTypeGet**](docs/Api/LegalInformationApi.md#restlegalinformationplentyidlangtypeget) | **GET** /rest/legalinformation/{plentyId}/{lang}/{type} | Get legal information of an online store
*LegalInformationApi* | [**restLegalinformationPlentyIdLangTypePut**](docs/Api/LegalInformationApi.md#restlegalinformationplentyidlangtypeput) | **PUT** /rest/legalinformation/{plentyId}/{lang}/{type} | Save legal information for an online store
*ListingApi* | [**restListingsGet**](docs/Api/ListingApi.md#restlistingsget) | **GET** /rest/listings | List listing
*ListingApi* | [**restListingsIdDelete**](docs/Api/ListingApi.md#restlistingsiddelete) | **DELETE** /rest/listings/{id} | Delete a listing
*ListingApi* | [**restListingsIdGet**](docs/Api/ListingApi.md#restlistingsidget) | **GET** /rest/listings/{id} | Get a listing
*ListingApi* | [**restListingsIdPut**](docs/Api/ListingApi.md#restlistingsidput) | **PUT** /rest/listings/{id} | Update a listing
*ListingApi* | [**restListingsLayoutTemplatesIdDelete**](docs/Api/ListingApi.md#restlistingslayouttemplatesiddelete) | **DELETE** /rest/listings/layout_templates/{id} | Delete a layout template
*ListingApi* | [**restListingsLayoutTemplatesIdGet**](docs/Api/ListingApi.md#restlistingslayouttemplatesidget) | **GET** /rest/listings/layout_templates/{id} | Get a layout template
*ListingApi* | [**restListingsLayoutTemplatesPost**](docs/Api/ListingApi.md#restlistingslayouttemplatespost) | **POST** /rest/listings/layout_templates | Create new layout template
*ListingApi* | [**restListingsMarketsDirectoriesGet**](docs/Api/ListingApi.md#restlistingsmarketsdirectoriesget) | **GET** /rest/listings/markets/directories | Get all listing market directories
*ListingApi* | [**restListingsMarketsDirectoriesIdDelete**](docs/Api/ListingApi.md#restlistingsmarketsdirectoriesiddelete) | **DELETE** /rest/listings/markets/directories/{id} | Delete listing market directory
*ListingApi* | [**restListingsMarketsDirectoriesIdGet**](docs/Api/ListingApi.md#restlistingsmarketsdirectoriesidget) | **GET** /rest/listings/markets/directories/{id} | Get a listing market directory
*ListingApi* | [**restListingsMarketsDirectoriesIdPut**](docs/Api/ListingApi.md#restlistingsmarketsdirectoriesidput) | **PUT** /rest/listings/markets/directories/{id} | Update listing market directory
*ListingApi* | [**restListingsMarketsDirectoriesPost**](docs/Api/ListingApi.md#restlistingsmarketsdirectoriespost) | **POST** /rest/listings/markets/directories | Create listing market directory
*ListingApi* | [**restListingsMarketsFindGet**](docs/Api/ListingApi.md#restlistingsmarketsfindget) | **GET** /rest/listings/markets/find | Find listing markets
*ListingApi* | [**restListingsMarketsGet**](docs/Api/ListingApi.md#restlistingsmarketsget) | **GET** /rest/listings/markets | List listing markets
*ListingApi* | [**restListingsMarketsHistoriesGet**](docs/Api/ListingApi.md#restlistingsmarketshistoriesget) | **GET** /rest/listings/markets/histories | List listing market history
*ListingApi* | [**restListingsMarketsHistoriesIdGet**](docs/Api/ListingApi.md#restlistingsmarketshistoriesidget) | **GET** /rest/listings/markets/histories/{id} | Get a listing market history
*ListingApi* | [**restListingsMarketsIdDelete**](docs/Api/ListingApi.md#restlistingsmarketsiddelete) | **DELETE** /rest/listings/markets/{id} | Delete listing market
*ListingApi* | [**restListingsMarketsIdGet**](docs/Api/ListingApi.md#restlistingsmarketsidget) | **GET** /rest/listings/markets/{id} | Get a listing market
*ListingApi* | [**restListingsMarketsIdPut**](docs/Api/ListingApi.md#restlistingsmarketsidput) | **PUT** /rest/listings/markets/{id} | Update a listing market
*ListingApi* | [**restListingsMarketsInfosGet**](docs/Api/ListingApi.md#restlistingsmarketsinfosget) | **GET** /rest/listings/markets/infos | Search listing market info
*ListingApi* | [**restListingsMarketsItemSpecificsFindGet**](docs/Api/ListingApi.md#restlistingsmarketsitemspecificsfindget) | **GET** /rest/listings/markets/item_specifics/find | Gets all ListingMarketItemSpecifics.
*ListingApi* | [**restListingsMarketsItemSpecificsGet**](docs/Api/ListingApi.md#restlistingsmarketsitemspecificsget) | **GET** /rest/listings/markets/item_specifics | Gets all ListingMarketItemSpecifics.
*ListingApi* | [**restListingsMarketsItemSpecificsIdDelete**](docs/Api/ListingApi.md#restlistingsmarketsitemspecificsiddelete) | **DELETE** /rest/listings/markets/item_specifics/{id} | Deletes a ListingMarketItemSpecific.
*ListingApi* | [**restListingsMarketsItemSpecificsIdGet**](docs/Api/ListingApi.md#restlistingsmarketsitemspecificsidget) | **GET** /rest/listings/markets/item_specifics/{id} | Gets a ListingMarketItemSpecific.
*ListingApi* | [**restListingsMarketsItemSpecificsIdPut**](docs/Api/ListingApi.md#restlistingsmarketsitemspecificsidput) | **PUT** /rest/listings/markets/item_specifics/{id} | Updates a ListingMarketItemSpecific.
*ListingApi* | [**restListingsMarketsPost**](docs/Api/ListingApi.md#restlistingsmarketspost) | **POST** /rest/listings/markets | Create new listing market
*ListingApi* | [**restListingsMarketsTextsGet**](docs/Api/ListingApi.md#restlistingsmarketstextsget) | **GET** /rest/listings/markets/texts | List listing market texts
*ListingApi* | [**restListingsMarketsTextsIdDelete**](docs/Api/ListingApi.md#restlistingsmarketstextsiddelete) | **DELETE** /rest/listings/markets/texts/{id} | Delete a listing market text
*ListingApi* | [**restListingsMarketsTextsIdGet**](docs/Api/ListingApi.md#restlistingsmarketstextsidget) | **GET** /rest/listings/markets/texts/{id} | Get a listing market text
*ListingApi* | [**restListingsMarketsTextsListingMarketIdLangPut**](docs/Api/ListingApi.md#restlistingsmarketstextslistingmarketidlangput) | **PUT** /rest/listings/markets/texts/{listingMarketId}/{lang} | Update a listing market text
*ListingApi* | [**restListingsMarketsTextsPost**](docs/Api/ListingApi.md#restlistingsmarketstextspost) | **POST** /rest/listings/markets/texts | Create a listing market text
*ListingApi* | [**restListingsOptionTemplatesIdDelete**](docs/Api/ListingApi.md#restlistingsoptiontemplatesiddelete) | **DELETE** /rest/listings/option_templates/{id} | Delete option template
*ListingApi* | [**restListingsOptionTemplatesIdGet**](docs/Api/ListingApi.md#restlistingsoptiontemplatesidget) | **GET** /rest/listings/option_templates/{id} | Get option template
*ListingApi* | [**restListingsOptionTemplatesIdPut**](docs/Api/ListingApi.md#restlistingsoptiontemplatesidput) | **PUT** /rest/listings/option_templates/{id} | Update option template
*ListingApi* | [**restListingsOptionTemplatesPost**](docs/Api/ListingApi.md#restlistingsoptiontemplatespost) | **POST** /rest/listings/option_templates | Create option template
*ListingApi* | [**restListingsOptionTemplatesPreviewGet**](docs/Api/ListingApi.md#restlistingsoptiontemplatespreviewget) | **GET** /rest/listings/option_templates/preview | Get a preview list of option templates
*ListingApi* | [**restListingsPost**](docs/Api/ListingApi.md#restlistingspost) | **POST** /rest/listings | Create new listing
*ListingApi* | [**restListingsShippingProfilesGet**](docs/Api/ListingApi.md#restlistingsshippingprofilesget) | **GET** /rest/listings/shipping_profiles | List listing shipping profiles
*ListingApi* | [**restListingsShippingProfilesIdGet**](docs/Api/ListingApi.md#restlistingsshippingprofilesidget) | **GET** /rest/listings/shipping_profiles/{id} | Get a shipping profile
*ListingApi* | [**restListingsStockDependenceTypesGet**](docs/Api/ListingApi.md#restlistingsstockdependencetypesget) | **GET** /rest/listings/stock_dependence_types | List listing stock dependence types
*ListingApi* | [**restListingsStockDependenceTypesIdGet**](docs/Api/ListingApi.md#restlistingsstockdependencetypesidget) | **GET** /rest/listings/stock_dependence_types/{id} | Get a listing stock dependence type
*ListingApi* | [**restListingsTypesGet**](docs/Api/ListingApi.md#restlistingstypesget) | **GET** /rest/listings/types | List listing types
*ListingApi* | [**restListingsTypesIdGet**](docs/Api/ListingApi.md#restlistingstypesidget) | **GET** /rest/listings/types/{id} | Get a listing type
*LogApi* | [**restDeleteLogGet**](docs/Api/LogApi.md#restdeletelogget) | **GET** /rest/delete_log | Search the delete log
*LogApi* | [**restLogsGet**](docs/Api/LogApi.md#restlogsget) | **GET** /rest/logs | Perform a search operation.
*LogApi* | [**restLogsIdGet**](docs/Api/LogApi.md#restlogsidget) | **GET** /rest/logs/{id} | Get Log entry by ID.
*LogApi* | [**restLogsIntegrationKeysGet**](docs/Api/LogApi.md#restlogsintegrationkeysget) | **GET** /rest/logs/integration_keys | 
*LogApi* | [**restLogsPost**](docs/Api/LogApi.md#restlogspost) | **POST** /rest/logs | Create a log entry.
*LogApi* | [**restLogsReferenceTypesGet**](docs/Api/LogApi.md#restlogsreferencetypesget) | **GET** /rest/logs/reference_types | Get all registered reference types.
*LogApi* | [**restLogsSettingsGet**](docs/Api/LogApi.md#restlogssettingsget) | **GET** /rest/logs/settings | Show config.
*LogApi* | [**restLogsSettingsPost**](docs/Api/LogApi.md#restlogssettingspost) | **POST** /rest/logs/settings | Save config.
*MarketApi* | [**restMarketsCredentialsCredentialsIdDelete**](docs/Api/MarketApi.md#restmarketscredentialscredentialsiddelete) | **DELETE** /rest/markets/credentials/{credentialsId} | Delete a credential
*MarketApi* | [**restMarketsCredentialsCredentialsIdGet**](docs/Api/MarketApi.md#restmarketscredentialscredentialsidget) | **GET** /rest/markets/credentials/{credentialsId} | Get a credential
*MarketApi* | [**restMarketsCredentialsCredentialsIdPut**](docs/Api/MarketApi.md#restmarketscredentialscredentialsidput) | **PUT** /rest/markets/credentials/{credentialsId} | Update a credential
*MarketApi* | [**restMarketsCredentialsGet**](docs/Api/MarketApi.md#restmarketscredentialsget) | **GET** /rest/markets/credentials | List credentials
*MarketApi* | [**restMarketsCredentialsPost**](docs/Api/MarketApi.md#restmarketscredentialspost) | **POST** /rest/markets/credentials | Create a credential
*MarketApi* | [**restMarketsEbayAuthLoginGet**](docs/Api/MarketApi.md#restmarketsebayauthloginget) | **GET** /rest/markets/ebay/auth/login | Get the login URL.
*MarketApi* | [**restMarketsEbayAuthRefreshTokenPut**](docs/Api/MarketApi.md#restmarketsebayauthrefreshtokenput) | **PUT** /rest/markets/ebay/auth/refresh-token | Refresh an expired access token.
*MarketApi* | [**restMarketsEbayCategoriesGet**](docs/Api/MarketApi.md#restmarketsebaycategoriesget) | **GET** /rest/markets/ebay/categories | List categories
*MarketApi* | [**restMarketsEbayCategoriesIdGet**](docs/Api/MarketApi.md#restmarketsebaycategoriesidget) | **GET** /rest/markets/ebay/categories/{id} | Get category
*MarketApi* | [**restMarketsEbayFulfillmentPoliciesIdGet**](docs/Api/MarketApi.md#restmarketsebayfulfillmentpoliciesidget) | **GET** /rest/markets/ebay/fulfillment_policies/{id} | Get fulfillment policy
*MarketApi* | [**restMarketsEbayItemSpecificsGet**](docs/Api/MarketApi.md#restmarketsebayitemspecificsget) | **GET** /rest/markets/ebay/item_specifics | List item specifics
*MarketApi* | [**restMarketsEbayMarketplacesGet**](docs/Api/MarketApi.md#restmarketsebaymarketplacesget) | **GET** /rest/markets/ebay/marketplaces | Get all eBay marketplaces.
*MarketApi* | [**restMarketsEbayPartsFitmentsFitmentIdDelete**](docs/Api/MarketApi.md#restmarketsebaypartsfitmentsfitmentiddelete) | **DELETE** /rest/markets/ebay/parts-fitments/{fitmentId} | Delete a fitment.
*MarketApi* | [**restMarketsEbayPartsFitmentsFitmentIdGet**](docs/Api/MarketApi.md#restmarketsebaypartsfitmentsfitmentidget) | **GET** /rest/markets/ebay/parts-fitments/{fitmentId} | Get a fitment
*MarketApi* | [**restMarketsEbayPartsFitmentsFitmentIdPut**](docs/Api/MarketApi.md#restmarketsebaypartsfitmentsfitmentidput) | **PUT** /rest/markets/ebay/parts-fitments/{fitmentId} | Update fitment.
*MarketApi* | [**restMarketsEbayPartsFitmentsGet**](docs/Api/MarketApi.md#restmarketsebaypartsfitmentsget) | **GET** /rest/markets/ebay/parts-fitments | List fitments
*MarketApi* | [**restMarketsEbayPartsFitmentsPost**](docs/Api/MarketApi.md#restmarketsebaypartsfitmentspost) | **POST** /rest/markets/ebay/parts-fitments | Create a fitment
*MarketApi* | [**restMarketsEbayPartsFitmentsSearchGet**](docs/Api/MarketApi.md#restmarketsebaypartsfitmentssearchget) | **GET** /rest/markets/ebay/parts-fitments/search | Search fitments
*MarketApi* | [**restMarketsEbayPaymentPoliciesIdGet**](docs/Api/MarketApi.md#restmarketsebaypaymentpoliciesidget) | **GET** /rest/markets/ebay/payment_policies/{id} | Get payment policy
*MarketApi* | [**restMarketsEbayReturnPoliciesIdGet**](docs/Api/MarketApi.md#restmarketsebayreturnpoliciesidget) | **GET** /rest/markets/ebay/return_policies/{id} | Get return policy
*MarketApi* | [**restMarketsEbayShopCategoriesGet**](docs/Api/MarketApi.md#restmarketsebayshopcategoriesget) | **GET** /rest/markets/ebay/shop_categories | List all eBay shop categories
*MarketApi* | [**restMarketsListingsMarketplacesGet**](docs/Api/MarketApi.md#restmarketslistingsmarketplacesget) | **GET** /rest/markets/listings/marketplaces | Get all listing marketplaces.
*MarketApi* | [**restMarketsSettingsBulkPost**](docs/Api/MarketApi.md#restmarketssettingsbulkpost) | **POST** /rest/markets/settings/bulk | Create market settings
*MarketApi* | [**restMarketsSettingsBulkPut**](docs/Api/MarketApi.md#restmarketssettingsbulkput) | **PUT** /rest/markets/settings/bulk | Update market settings
*MarketApi* | [**restMarketsSettingsCorrelationsBulkPost**](docs/Api/MarketApi.md#restmarketssettingscorrelationsbulkpost) | **POST** /rest/markets/settings/correlations/bulk | Create multiple correlations
*MarketApi* | [**restMarketsSettingsCorrelationsGet**](docs/Api/MarketApi.md#restmarketssettingscorrelationsget) | **GET** /rest/markets/settings/correlations | List correlation
*MarketApi* | [**restMarketsSettingsCorrelationsPost**](docs/Api/MarketApi.md#restmarketssettingscorrelationspost) | **POST** /rest/markets/settings/correlations | Create a correlation
*MarketApi* | [**restMarketsSettingsGet**](docs/Api/MarketApi.md#restmarketssettingsget) | **GET** /rest/markets/settings | List market settings
*MarketApi* | [**restMarketsSettingsPost**](docs/Api/MarketApi.md#restmarketssettingspost) | **POST** /rest/markets/settings | Create market settings
*MarketApi* | [**restMarketsSettingsSettingIdDelete**](docs/Api/MarketApi.md#restmarketssettingssettingiddelete) | **DELETE** /rest/markets/settings/{settingId} | Delete market settings
*MarketApi* | [**restMarketsSettingsSettingIdGet**](docs/Api/MarketApi.md#restmarketssettingssettingidget) | **GET** /rest/markets/settings/{settingId} | Get market settings
*MarketApi* | [**restMarketsSettingsSettingIdPut**](docs/Api/MarketApi.md#restmarketssettingssettingidput) | **PUT** /rest/markets/settings/{settingId} | Update market settings
*MessengerApi* | [**restMessagesGet**](docs/Api/MessengerApi.md#restmessagesget) | **GET** /rest/messages | List message stream of a certain message (excluding message with UUID5)
*MessengerApi* | [**restMessagesGetGet**](docs/Api/MessengerApi.md#restmessagesgetget) | **GET** /rest/messages/get | List messages per page
*MessengerApi* | [**restMessagesPost**](docs/Api/MessengerApi.md#restmessagespost) | **POST** /rest/messages | Create message
*MessengerApi* | [**restMessagesUuid5AttachmentsGet**](docs/Api/MessengerApi.md#restmessagesuuid5attachmentsget) | **GET** /rest/messages/{uuid5}/attachments | Get attachment by UUID and file name
*MessengerApi* | [**restMessagesUuid5ControlsPut**](docs/Api/MessengerApi.md#restmessagesuuid5controlsput) | **PUT** /rest/messages/{uuid5}/controls | Update message controls
*MessengerApi* | [**restMessagesUuid5Delete**](docs/Api/MessengerApi.md#restmessagesuuid5delete) | **DELETE** /rest/messages/{uuid5} | Delete message by UUID
*MessengerApi* | [**restMessagesUuid5DonePut**](docs/Api/MessengerApi.md#restmessagesuuid5doneput) | **PUT** /rest/messages/{uuid5}/done | Set or unset doneAt date of message
*MessengerApi* | [**restMessagesUuid5Get**](docs/Api/MessengerApi.md#restmessagesuuid5get) | **GET** /rest/messages/{uuid5} | Get message for the given UUID5 and all its associated successors
*MessengerApi* | [**restMessagesUuid5ReadByPut**](docs/Api/MessengerApi.md#restmessagesuuid5readbyput) | **PUT** /rest/messages/{uuid5}/readBy | Update ReadBy array of message
*MessengerApi* | [**restMessagesUuid5TagsPut**](docs/Api/MessengerApi.md#restmessagesuuid5tagsput) | **PUT** /rest/messages/{uuid5}/tags | Update tags of message
*MessengerApi* | [**restMessagesUuid5VisibilityPut**](docs/Api/MessengerApi.md#restmessagesuuid5visibilityput) | **PUT** /rest/messages/{uuid5}/visibility | Update message visibility
*NewsletterApi* | [**restNewslettersDelete**](docs/Api/NewsletterApi.md#restnewslettersdelete) | **DELETE** /rest/newsletters | Delete entries
*NewsletterApi* | [**restNewslettersDoubleOptInContactIdPost**](docs/Api/NewsletterApi.md#restnewslettersdoubleoptincontactidpost) | **POST** /rest/newsletters/double_opt_in/{contactId} | Send doubleOptIn mail
*NewsletterApi* | [**restNewslettersEntryIdDelete**](docs/Api/NewsletterApi.md#restnewslettersentryiddelete) | **DELETE** /rest/newsletters/{entryId} | Delete entry
*NewsletterApi* | [**restNewslettersEntryIdGet**](docs/Api/NewsletterApi.md#restnewslettersentryidget) | **GET** /rest/newsletters/{entryId} | List details of an entry
*NewsletterApi* | [**restNewslettersEntryIdPut**](docs/Api/NewsletterApi.md#restnewslettersentryidput) | **PUT** /rest/newsletters/{entryId} | Update entry
*NewsletterApi* | [**restNewslettersFoldersDelete**](docs/Api/NewsletterApi.md#restnewslettersfoldersdelete) | **DELETE** /rest/newsletters/folders | Delete folders
*NewsletterApi* | [**restNewslettersFoldersFolderIdDelete**](docs/Api/NewsletterApi.md#restnewslettersfoldersfolderiddelete) | **DELETE** /rest/newsletters/folders/{folderId} | Delete folder
*NewsletterApi* | [**restNewslettersFoldersFolderIdGet**](docs/Api/NewsletterApi.md#restnewslettersfoldersfolderidget) | **GET** /rest/newsletters/folders/{folderId} | List details of a folder
*NewsletterApi* | [**restNewslettersFoldersFolderIdPut**](docs/Api/NewsletterApi.md#restnewslettersfoldersfolderidput) | **PUT** /rest/newsletters/folders/{folderId} | Update folder
*NewsletterApi* | [**restNewslettersFoldersFolderIdRecipientsGet**](docs/Api/NewsletterApi.md#restnewslettersfoldersfolderidrecipientsget) | **GET** /rest/newsletters/folders/{folderId}/recipients | List all recipients of a folder
*NewsletterApi* | [**restNewslettersFoldersGet**](docs/Api/NewsletterApi.md#restnewslettersfoldersget) | **GET** /rest/newsletters/folders | List newsletter folders
*NewsletterApi* | [**restNewslettersFoldersPost**](docs/Api/NewsletterApi.md#restnewslettersfolderspost) | **POST** /rest/newsletters/folders | Create folder
*NewsletterApi* | [**restNewslettersGet**](docs/Api/NewsletterApi.md#restnewslettersget) | **GET** /rest/newsletters | List newsletter entries
*NewsletterApi* | [**restNewslettersListRecipientsGet**](docs/Api/NewsletterApi.md#restnewsletterslistrecipientsget) | **GET** /rest/newsletters/list_recipients | List recipients
*NewsletterApi* | [**restNewslettersPost**](docs/Api/NewsletterApi.md#restnewsletterspost) | **POST** /rest/newsletters | Create entry
*NewsletterApi* | [**restNewslettersRecipientsDelete**](docs/Api/NewsletterApi.md#restnewslettersrecipientsdelete) | **DELETE** /rest/newsletters/recipients | Delete recipients
*NewsletterApi* | [**restNewslettersRecipientsGet**](docs/Api/NewsletterApi.md#restnewslettersrecipientsget) | **GET** /rest/newsletters/recipients | List recipients of folder
*NewsletterApi* | [**restNewslettersRecipientsPost**](docs/Api/NewsletterApi.md#restnewslettersrecipientspost) | **POST** /rest/newsletters/recipients | Create recipient
*NewsletterApi* | [**restNewslettersRecipientsRecipientIdDelete**](docs/Api/NewsletterApi.md#restnewslettersrecipientsrecipientiddelete) | **DELETE** /rest/newsletters/recipients/{recipientId} | Delete recipient
*NewsletterApi* | [**restNewslettersRecipientsRecipientIdGet**](docs/Api/NewsletterApi.md#restnewslettersrecipientsrecipientidget) | **GET** /rest/newsletters/recipients/{recipientId} | List recipient
*NewsletterApi* | [**restNewslettersRecipientsRecipientIdPut**](docs/Api/NewsletterApi.md#restnewslettersrecipientsrecipientidput) | **PUT** /rest/newsletters/recipients/{recipientId} | Update recipient
*OrderApi* | [**restDeliveryOrdersOrderIdDelete**](docs/Api/OrderApi.md#restdeliveryordersorderiddelete) | **DELETE** /rest/delivery_orders/{orderId} | Delete a delivery order
*OrderApi* | [**restDeliveryOrdersOrderIdPut**](docs/Api/OrderApi.md#restdeliveryordersorderidput) | **PUT** /rest/delivery_orders/{orderId} | Update a delivery order
*OrderApi* | [**restDeliveryOrdersPost**](docs/Api/OrderApi.md#restdeliveryorderspost) | **POST** /rest/delivery_orders | Create a delivery order
*OrderApi* | [**restOrdersContactsContactIdGet**](docs/Api/OrderApi.md#restorderscontactscontactidget) | **GET** /rest/orders/contacts/{contactId} | List orders of a contact
*OrderApi* | [**restOrdersContactsContactIdMultiOrderPost**](docs/Api/OrderApi.md#restorderscontactscontactidmultiorderpost) | **POST** /rest/orders/contacts/{contactId}/multi_order | Create a multi-order
*OrderApi* | [**restOrdersCouponsCampaignsCampaignIdCodesPost**](docs/Api/OrderApi.md#restorderscouponscampaignscampaignidcodespost) | **POST** /rest/orders/coupons/campaigns/{campaignId}/codes | Create a coupon code
*OrderApi* | [**restOrdersCouponsCampaignsCodesCodeDelete**](docs/Api/OrderApi.md#restorderscouponscampaignscodescodedelete) | **DELETE** /rest/orders/coupons/campaigns/codes/{code} | Delete a coupon
*OrderApi* | [**restOrdersCouponsCampaignsCodesCodeDisabledIsDisabledPut**](docs/Api/OrderApi.md#restorderscouponscampaignscodescodedisabledisdisabledput) | **PUT** /rest/orders/coupons/campaigns/codes/{code}/disabled/{isDisabled} | Disable or enable coupon
*OrderApi* | [**restOrdersCouponsCampaignsCodesCodeGet**](docs/Api/OrderApi.md#restorderscouponscampaignscodescodeget) | **GET** /rest/orders/coupons/campaigns/codes/{code} | Get coupon code information
*OrderApi* | [**restOrdersCouponsCodesContactsContactIdGet**](docs/Api/OrderApi.md#restorderscouponscodescontactscontactidget) | **GET** /rest/orders/coupons/codes/contacts/{contactId} | List redeemed coupon codes of a contact
*OrderApi* | [**restOrdersCouponsCodesCouponPost**](docs/Api/OrderApi.md#restorderscouponscodescouponpost) | **POST** /rest/orders/coupons/codes/{coupon} | Validate a coupon
*OrderApi* | [**restOrdersCouponsCodesPost**](docs/Api/OrderApi.md#restorderscouponscodespost) | **POST** /rest/orders/coupons/codes | Validate multiple coupons
*OrderApi* | [**restOrdersCurrenciesCountriesCountryIdGet**](docs/Api/OrderApi.md#restorderscurrenciescountriescountryidget) | **GET** /rest/orders/currencies/countries/{countryId} | Get a currency for a country
*OrderApi* | [**restOrdersCurrenciesCurrencyIsoCountriesGet**](docs/Api/OrderApi.md#restorderscurrenciescurrencyisocountriesget) | **GET** /rest/orders/currencies/{currencyIso}/countries | List countries for a currency
*OrderApi* | [**restOrdersCurrenciesCurrencyIsoExchangeRateGet**](docs/Api/OrderApi.md#restorderscurrenciescurrencyisoexchangerateget) | **GET** /rest/orders/currencies/{currencyIso}/exchangeRate | Get the exchange rate for a currency
*OrderApi* | [**restOrdersCurrenciesCurrencyIsoGet**](docs/Api/OrderApi.md#restorderscurrenciescurrencyisoget) | **GET** /rest/orders/currencies/{currencyIso} | Get a currency
*OrderApi* | [**restOrdersCurrenciesExchangeRatesFromCurrencyIsoGet**](docs/Api/OrderApi.md#restorderscurrenciesexchangeratesfromcurrencyisoget) | **GET** /rest/orders/currencies/exchange_rates/from/{currencyIso} | Get the exchange rates from a currency
*OrderApi* | [**restOrdersCurrenciesExchangeRatesToCurrencyIsoGet**](docs/Api/OrderApi.md#restorderscurrenciesexchangeratestocurrencyisoget) | **GET** /rest/orders/currencies/exchange_rates/to/{currencyIso} | Get the exchange rates to a currency
*OrderApi* | [**restOrdersCurrenciesGet**](docs/Api/OrderApi.md#restorderscurrenciesget) | **GET** /rest/orders/currencies | List currencies
*OrderApi* | [**restOrdersDatesTypesGet**](docs/Api/OrderApi.md#restordersdatestypesget) | **GET** /rest/orders/dates/types | List order date types
*OrderApi* | [**restOrdersDatesTypesTypeIdGet**](docs/Api/OrderApi.md#restordersdatestypestypeidget) | **GET** /rest/orders/dates/types/{typeId} | Find an order date type
*OrderApi* | [**restOrdersDatesTypesTypeIdNamesGet**](docs/Api/OrderApi.md#restordersdatestypestypeidnamesget) | **GET** /rest/orders/dates/types/{typeId}/names | List names of an order date type
*OrderApi* | [**restOrdersDatesTypesTypeIdNamesLangGet**](docs/Api/OrderApi.md#restordersdatestypestypeidnameslangget) | **GET** /rest/orders/dates/types/{typeId}/names/{lang} | Get a name of an order date type
*OrderApi* | [**restOrdersDocumentsAccountingSummaryGet**](docs/Api/OrderApi.md#restordersdocumentsaccountingsummaryget) | **GET** /rest/orders/documents/accounting_summary | List document accounting summaries
*OrderApi* | [**restOrdersGet**](docs/Api/OrderApi.md#restordersget) | **GET** /rest/orders | Search order
*OrderApi* | [**restOrdersItemsDatesIdDelete**](docs/Api/OrderApi.md#restordersitemsdatesiddelete) | **DELETE** /rest/orders/items/dates/{id} | Delete a date of an order item
*OrderApi* | [**restOrdersItemsDatesIdGet**](docs/Api/OrderApi.md#restordersitemsdatesidget) | **GET** /rest/orders/items/dates/{id} | Get date of an order item
*OrderApi* | [**restOrdersItemsDatesIdPut**](docs/Api/OrderApi.md#restordersitemsdatesidput) | **PUT** /rest/orders/items/dates/{id} | Update a date of an order item
*OrderApi* | [**restOrdersItemsDatesPost**](docs/Api/OrderApi.md#restordersitemsdatespost) | **POST** /rest/orders/items/dates | Create a date for an order item
*OrderApi* | [**restOrdersItemsOrderItemIdBookingPost**](docs/Api/OrderApi.md#restordersitemsorderitemidbookingpost) | **POST** /rest/orders/items/{orderItemId}/booking | Book an order item in
*OrderApi* | [**restOrdersItemsOrderItemIdDatesGet**](docs/Api/OrderApi.md#restordersitemsorderitemiddatesget) | **GET** /rest/orders/items/{orderItemId}/dates | List all dates of an order item
*OrderApi* | [**restOrdersItemsOrderItemIdDatesTypeIdDelete**](docs/Api/OrderApi.md#restordersitemsorderitemiddatestypeiddelete) | **DELETE** /rest/orders/items/{orderItemId}/dates/{typeId} | Delete a date of an order item by order item and date type
*OrderApi* | [**restOrdersItemsOrderItemIdDatesTypeIdGet**](docs/Api/OrderApi.md#restordersitemsorderitemiddatestypeidget) | **GET** /rest/orders/items/{orderItemId}/dates/{typeId} | Get a date of an order item by order item and date type
*OrderApi* | [**restOrdersItemsOrderItemIdDatesTypeIdPost**](docs/Api/OrderApi.md#restordersitemsorderitemiddatestypeidpost) | **POST** /rest/orders/items/{orderItemId}/dates/{typeId} | Create a date for an order item by order item and date type
*OrderApi* | [**restOrdersItemsOrderItemIdDatesTypeIdPut**](docs/Api/OrderApi.md#restordersitemsorderitemiddatestypeidput) | **PUT** /rest/orders/items/{orderItemId}/dates/{typeId} | Update a date of an order item by order item and date type
*OrderApi* | [**restOrdersItemsOrderItemIdPropertiesGet**](docs/Api/OrderApi.md#restordersitemsorderitemidpropertiesget) | **GET** /rest/orders/items/{orderItemId}/properties | Get all order item properties
*OrderApi* | [**restOrdersItemsOrderItemIdPropertiesTypeIdDelete**](docs/Api/OrderApi.md#restordersitemsorderitemidpropertiestypeiddelete) | **DELETE** /rest/orders/items/{orderItemId}/properties/{typeId} | Delete order item property
*OrderApi* | [**restOrdersItemsOrderItemIdPropertiesTypeIdGet**](docs/Api/OrderApi.md#restordersitemsorderitemidpropertiestypeidget) | **GET** /rest/orders/items/{orderItemId}/properties/{typeId} | Get order item property
*OrderApi* | [**restOrdersItemsOrderItemIdPropertiesTypeIdPost**](docs/Api/OrderApi.md#restordersitemsorderitemidpropertiestypeidpost) | **POST** /rest/orders/items/{orderItemId}/properties/{typeId} | Create order item property
*OrderApi* | [**restOrdersItemsOrderItemIdPropertiesTypeIdPut**](docs/Api/OrderApi.md#restordersitemsorderitemidpropertiestypeidput) | **PUT** /rest/orders/items/{orderItemId}/properties/{typeId} | Update order item property
*OrderApi* | [**restOrdersItemsOrderItemIdTransactionsGet**](docs/Api/OrderApi.md#restordersitemsorderitemidtransactionsget) | **GET** /rest/orders/items/{orderItemId}/transactions | List order item transactions
*OrderApi* | [**restOrdersItemsOrderItemIdTransactionsPost**](docs/Api/OrderApi.md#restordersitemsorderitemidtransactionspost) | **POST** /rest/orders/items/{orderItemId}/transactions | Create order item transaction
*OrderApi* | [**restOrdersItemsOutgoingStocksDelete**](docs/Api/OrderApi.md#restordersitemsoutgoingstocksdelete) | **DELETE** /rest/orders/items/outgoing_stocks | Revert outgoing stock for order items
*OrderApi* | [**restOrdersItemsPropertiesIdDelete**](docs/Api/OrderApi.md#restordersitemspropertiesiddelete) | **DELETE** /rest/orders/items/properties/{id} | Delete order item property
*OrderApi* | [**restOrdersItemsPropertiesIdGet**](docs/Api/OrderApi.md#restordersitemspropertiesidget) | **GET** /rest/orders/items/properties/{id} | Get order item property
*OrderApi* | [**restOrdersItemsPropertiesIdPut**](docs/Api/OrderApi.md#restordersitemspropertiesidput) | **PUT** /rest/orders/items/properties/{id} | Update order item property
*OrderApi* | [**restOrdersItemsPropertiesPost**](docs/Api/OrderApi.md#restordersitemspropertiespost) | **POST** /rest/orders/items/properties | Create order item property
*OrderApi* | [**restOrdersItemsTransactionsBookingPost**](docs/Api/OrderApi.md#restordersitemstransactionsbookingpost) | **POST** /rest/orders/items/transactions/booking | Book order item transactions
*OrderApi* | [**restOrdersItemsTransactionsGet**](docs/Api/OrderApi.md#restordersitemstransactionsget) | **GET** /rest/orders/items/transactions | Search order item transactions
*OrderApi* | [**restOrdersItemsTransactionsTransactionIdDelete**](docs/Api/OrderApi.md#restordersitemstransactionstransactioniddelete) | **DELETE** /rest/orders/items/transactions/{transactionId} | Delete order item transaction
*OrderApi* | [**restOrdersItemsTransactionsTransactionIdPut**](docs/Api/OrderApi.md#restordersitemstransactionstransactionidput) | **PUT** /rest/orders/items/transactions/{transactionId} | Update order item transaction
*OrderApi* | [**restOrdersOrderIdBookingPost**](docs/Api/OrderApi.md#restordersorderidbookingpost) | **POST** /rest/orders/{orderId}/booking | Book an order in
*OrderApi* | [**restOrdersOrderIdCancelPut**](docs/Api/OrderApi.md#restordersorderidcancelput) | **PUT** /rest/orders/{orderId}/cancel | Cancel an order
*OrderApi* | [**restOrdersOrderIdContactWishGet**](docs/Api/OrderApi.md#restordersorderidcontactwishget) | **GET** /rest/orders/{orderId}/contactWish | Get a contact wish
*OrderApi* | [**restOrdersOrderIdCouponsCouponPost**](docs/Api/OrderApi.md#restordersorderidcouponscouponpost) | **POST** /rest/orders/{orderId}/coupons/{coupon} | Redeem a coupon code
*OrderApi* | [**restOrdersOrderIdDatesGet**](docs/Api/OrderApi.md#restordersorderiddatesget) | **GET** /rest/orders/{orderId}/dates | List all dates of an order
*OrderApi* | [**restOrdersOrderIdDatesTypeIdGet**](docs/Api/OrderApi.md#restordersorderiddatestypeidget) | **GET** /rest/orders/{orderId}/dates/{typeId} | Get a date
*OrderApi* | [**restOrdersOrderIdDelete**](docs/Api/OrderApi.md#restordersorderiddelete) | **DELETE** /rest/orders/{orderId} | Delete an order
*OrderApi* | [**restOrdersOrderIdDeliveryOrdersAutomaticPost**](docs/Api/OrderApi.md#restordersorderiddeliveryordersautomaticpost) | **POST** /rest/orders/{orderId}/delivery_orders/automatic | Create delivery orders automatically for all order items
*OrderApi* | [**restOrdersOrderIdDeliveryOrdersPost**](docs/Api/OrderApi.md#restordersorderiddeliveryorderspost) | **POST** /rest/orders/{orderId}/delivery_orders | Create a delivery order from a parent order
*OrderApi* | [**restOrdersOrderIdGet**](docs/Api/OrderApi.md#restordersorderidget) | **GET** /rest/orders/{orderId} | Get an order
*OrderApi* | [**restOrdersOrderIdItemsGet**](docs/Api/OrderApi.md#restordersorderiditemsget) | **GET** /rest/orders/{orderId}/items | Search order items
*OrderApi* | [**restOrdersOrderIdItemsOrderItemIdDelete**](docs/Api/OrderApi.md#restordersorderiditemsorderitemiddelete) | **DELETE** /rest/orders/{orderId}/items/{orderItemId} | Delete an order item
*OrderApi* | [**restOrdersOrderIdItemsOrderItemIdSerialNumbersGet**](docs/Api/OrderApi.md#restordersorderiditemsorderitemidserialnumbersget) | **GET** /rest/orders/{orderId}/items/{orderItemId}/serialNumbers | List serial numbers of an order item
*OrderApi* | [**restOrdersOrderIdItemsSerialNumbersGet**](docs/Api/OrderApi.md#restordersorderiditemsserialnumbersget) | **GET** /rest/orders/{orderId}/items/serialNumbers | List serial numbers of an order
*OrderApi* | [**restOrdersOrderIdOutgoingStocksDelete**](docs/Api/OrderApi.md#restordersorderidoutgoingstocksdelete) | **DELETE** /rest/orders/{orderId}/outgoing_stocks | Revert outgoing stock
*OrderApi* | [**restOrdersOrderIdOutgoingStocksPost**](docs/Api/OrderApi.md#restordersorderidoutgoingstockspost) | **POST** /rest/orders/{orderId}/outgoing_stocks | Book out order items
*OrderApi* | [**restOrdersOrderIdPackagenumbersGet**](docs/Api/OrderApi.md#restordersorderidpackagenumbersget) | **GET** /rest/orders/{orderId}/packagenumbers | List package numbers of an order
*OrderApi* | [**restOrdersOrderIdPropertiesPost**](docs/Api/OrderApi.md#restordersorderidpropertiespost) | **POST** /rest/orders/{orderId}/properties | Create property for an order
*OrderApi* | [**restOrdersOrderIdPropertiesTypeIdDelete**](docs/Api/OrderApi.md#restordersorderidpropertiestypeiddelete) | **DELETE** /rest/orders/{orderId}/properties/{typeId} | Delete property of an order by order ID and property type ID
*OrderApi* | [**restOrdersOrderIdPropertiesTypeIdPut**](docs/Api/OrderApi.md#restordersorderidpropertiestypeidput) | **PUT** /rest/orders/{orderId}/properties/{typeId} | Update property of an order by order ID and property ID
*OrderApi* | [**restOrdersOrderIdPut**](docs/Api/OrderApi.md#restordersorderidput) | **PUT** /rest/orders/{orderId} | Update an order
*OrderApi* | [**restOrdersOrderIdShippingCancelShipmentDelete**](docs/Api/OrderApi.md#restordersorderidshippingcancelshipmentdelete) | **DELETE** /rest/orders/{orderId}/shipping/cancel_shipment | Cancel a shipment
*OrderApi* | [**restOrdersOrderIdShippingPackagesDelete**](docs/Api/OrderApi.md#restordersorderidshippingpackagesdelete) | **DELETE** /rest/orders/{orderId}/shipping/packages | Delete all order shipping packages for an order
*OrderApi* | [**restOrdersOrderIdShippingPackagesGet**](docs/Api/OrderApi.md#restordersorderidshippingpackagesget) | **GET** /rest/orders/{orderId}/shipping/packages | List order shipping packages
*OrderApi* | [**restOrdersOrderIdShippingPackagesItemsGet**](docs/Api/OrderApi.md#restordersorderidshippingpackagesitemsget) | **GET** /rest/orders/{orderId}/shipping/packages/items | List items contained in packages of an order
*OrderApi* | [**restOrdersOrderIdShippingPackagesOrderShippingPackageIdDelete**](docs/Api/OrderApi.md#restordersorderidshippingpackagesordershippingpackageiddelete) | **DELETE** /rest/orders/{orderId}/shipping/packages/{orderShippingPackageId} | Delete an order shipping package
*OrderApi* | [**restOrdersOrderIdShippingPackagesOrderShippingPackageIdGet**](docs/Api/OrderApi.md#restordersorderidshippingpackagesordershippingpackageidget) | **GET** /rest/orders/{orderId}/shipping/packages/{orderShippingPackageId} | Get an order shipping package
*OrderApi* | [**restOrdersOrderIdShippingPackagesOrderShippingPackageIdPut**](docs/Api/OrderApi.md#restordersorderidshippingpackagesordershippingpackageidput) | **PUT** /rest/orders/{orderId}/shipping/packages/{orderShippingPackageId} | Update an order shipping package
*OrderApi* | [**restOrdersOrderIdShippingPackagesPackedItemsGet**](docs/Api/OrderApi.md#restordersorderidshippingpackagespackeditemsget) | **GET** /rest/orders/{orderId}/shipping/packages/packed_items | List packed items of a shipping package by the order ID
*OrderApi* | [**restOrdersOrderIdShippingPackagesPost**](docs/Api/OrderApi.md#restordersorderidshippingpackagespost) | **POST** /rest/orders/{orderId}/shipping/packages | Create an order shipping package
*OrderApi* | [**restOrdersOrderIdShippingPackagesUnpackedItemsGet**](docs/Api/OrderApi.md#restordersorderidshippingpackagesunpackeditemsget) | **GET** /rest/orders/{orderId}/shipping/packages/unpacked_items | List unpacked items of a shipping package by the order ID
*OrderApi* | [**restOrdersOrderIdShippingPalletsPackagesItemsGet**](docs/Api/OrderApi.md#restordersorderidshippingpalletspackagesitemsget) | **GET** /rest/orders/{orderId}/shipping/pallets/packages/items | List items contained in package pallets of an order
*OrderApi* | [**restOrdersOrderIdShippingPalletsPalletIdPackagesDelete**](docs/Api/OrderApi.md#restordersorderidshippingpalletspalletidpackagesdelete) | **DELETE** /rest/orders/{orderId}/shipping/pallets/{palletId}/packages | Delete all order shipping packages in a pallet
*OrderApi* | [**restOrdersOrderIdShippingPalletsPalletIdPackagesGet**](docs/Api/OrderApi.md#restordersorderidshippingpalletspalletidpackagesget) | **GET** /rest/orders/{orderId}/shipping/pallets/{palletId}/packages | List all packages contained in pallets of an order
*OrderApi* | [**restOrdersOrderIdShippingPalletsPalletIdPackagesPut**](docs/Api/OrderApi.md#restordersorderidshippingpalletspalletidpackagesput) | **PUT** /rest/orders/{orderId}/shipping/pallets/{palletId}/packages | Update all packages in a pallet
*OrderApi* | [**restOrdersOrderIdShippingRegisterShipmentPost**](docs/Api/OrderApi.md#restordersorderidshippingregistershipmentpost) | **POST** /rest/orders/{orderId}/shipping/register_shipment | Register a shipment
*OrderApi* | [**restOrdersOrderIdShippingShippingInformationAdditionalDataPut**](docs/Api/OrderApi.md#restordersorderidshippingshippinginformationadditionaldataput) | **PUT** /rest/orders/{orderId}/shipping/shipping_information/additional_data | Update additional data of the shipping information
*OrderApi* | [**restOrdersOrderIdShippingShippingInformationDelete**](docs/Api/OrderApi.md#restordersorderidshippingshippinginformationdelete) | **DELETE** /rest/orders/{orderId}/shipping/shipping_information | Delete shipping information
*OrderApi* | [**restOrdersOrderIdShippingShippingInformationGet**](docs/Api/OrderApi.md#restordersorderidshippingshippinginformationget) | **GET** /rest/orders/{orderId}/shipping/shipping_information | Get shipping information
*OrderApi* | [**restOrdersOrderIdShippingShippingInformationStatusPut**](docs/Api/OrderApi.md#restordersorderidshippingshippinginformationstatusput) | **PUT** /rest/orders/{orderId}/shipping/shipping_information/status | Update the shipping status of the shipping information
*OrderApi* | [**restOrdersOrderIdStatusHistoryGet**](docs/Api/OrderApi.md#restordersorderidstatushistoryget) | **GET** /rest/orders/{orderId}/status-history | Get the status history of an order
*OrderApi* | [**restOrdersOrderIdTransactionsPost**](docs/Api/OrderApi.md#restordersorderidtransactionspost) | **POST** /rest/orders/{orderId}/transactions | Create order item transactions for an order
*OrderApi* | [**restOrdersPost**](docs/Api/OrderApi.md#restorderspost) | **POST** /rest/orders | Create an order
*OrderApi* | [**restOrdersPropertiesIdDelete**](docs/Api/OrderApi.md#restorderspropertiesiddelete) | **DELETE** /rest/orders/properties/{id} | Delete property of an order by property ID
*OrderApi* | [**restOrdersPropertiesIdPut**](docs/Api/OrderApi.md#restorderspropertiesidput) | **PUT** /rest/orders/properties/{id} | Update property of an order by property ID
*OrderApi* | [**restOrdersPropertiesTypesGet**](docs/Api/OrderApi.md#restorderspropertiestypesget) | **GET** /rest/orders/properties/types | List order property types
*OrderApi* | [**restOrdersPropertiesTypesPost**](docs/Api/OrderApi.md#restorderspropertiestypespost) | **POST** /rest/orders/properties/types | Create order property type
*OrderApi* | [**restOrdersPropertiesTypesTypeIdDelete**](docs/Api/OrderApi.md#restorderspropertiestypestypeiddelete) | **DELETE** /rest/orders/properties/types/{typeId} | Delete property type
*OrderApi* | [**restOrdersPropertiesTypesTypeIdGet**](docs/Api/OrderApi.md#restorderspropertiestypestypeidget) | **GET** /rest/orders/properties/types/{typeId} | Get property type
*OrderApi* | [**restOrdersPropertiesTypesTypeIdPut**](docs/Api/OrderApi.md#restorderspropertiestypestypeidput) | **PUT** /rest/orders/properties/types/{typeId} | Update property type
*OrderApi* | [**restOrdersReferrersGet**](docs/Api/OrderApi.md#restordersreferrersget) | **GET** /rest/orders/referrers | List referrers
*OrderApi* | [**restOrdersShippingCountriesGet**](docs/Api/OrderApi.md#restordersshippingcountriesget) | **GET** /rest/orders/shipping/countries | List shipping countries
*OrderApi* | [**restOrdersShippingPackageTypesGet**](docs/Api/OrderApi.md#restordersshippingpackagetypesget) | **GET** /rest/orders/shipping/package_types | List shipping package types
*OrderApi* | [**restOrdersShippingPackageTypesShippingPackageTypeIdGet**](docs/Api/OrderApi.md#restordersshippingpackagetypesshippingpackagetypeidget) | **GET** /rest/orders/shipping/package_types/{shippingPackageTypeId} | Get a shipping package type
*OrderApi* | [**restOrdersShippingPackagesItemsIdDelete**](docs/Api/OrderApi.md#restordersshippingpackagesitemsiddelete) | **DELETE** /rest/orders/shipping/packages/items/{id} | Delete package, variation or quantity for an order
*OrderApi* | [**restOrdersShippingPackagesItemsIdPut**](docs/Api/OrderApi.md#restordersshippingpackagesitemsidput) | **PUT** /rest/orders/shipping/packages/items/{id} | Update package, variation or quantity for an order
*OrderApi* | [**restOrdersShippingPackagesItemsPackageIdItemIdVariationIdDelete**](docs/Api/OrderApi.md#restordersshippingpackagesitemspackageiditemidvariationiddelete) | **DELETE** /rest/orders/shipping/packages/items/{packageId}/{itemId}/{variationId} | Delete items of an order package
*OrderApi* | [**restOrdersShippingPackagesItemsPackageIdItemIdVariationIdPut**](docs/Api/OrderApi.md#restordersshippingpackagesitemspackageiditemidvariationidput) | **PUT** /rest/orders/shipping/packages/items/{packageId}/{itemId}/{variationId} | Update items of an order package
*OrderApi* | [**restOrdersShippingPackagesPackageIdItemsGet**](docs/Api/OrderApi.md#restordersshippingpackagespackageiditemsget) | **GET** /rest/orders/shipping/packages/{packageId}/items | List items of an order package
*OrderApi* | [**restOrdersShippingPackagesPackageIdItemsPost**](docs/Api/OrderApi.md#restordersshippingpackagespackageiditemspost) | **POST** /rest/orders/shipping/packages/{packageId}/items | Create package, variation or quantity for an order
*OrderApi* | [**restOrdersShippingPalletsGet**](docs/Api/OrderApi.md#restordersshippingpalletsget) | **GET** /rest/orders/shipping/pallets | List order shipping pallets
*OrderApi* | [**restOrdersShippingPalletsPalletIdDelete**](docs/Api/OrderApi.md#restordersshippingpalletspalletiddelete) | **DELETE** /rest/orders/shipping/pallets/{palletId} | Delete all pallets of an order
*OrderApi* | [**restOrdersShippingPalletsPalletIdGet**](docs/Api/OrderApi.md#restordersshippingpalletspalletidget) | **GET** /rest/orders/shipping/pallets/{palletId} | List all pallets of an order
*OrderApi* | [**restOrdersShippingPalletsPalletIdPut**](docs/Api/OrderApi.md#restordersshippingpalletspalletidput) | **PUT** /rest/orders/shipping/pallets/{palletId} | Update all pallets of an order
*OrderApi* | [**restOrdersShippingPalletsPost**](docs/Api/OrderApi.md#restordersshippingpalletspost) | **POST** /rest/orders/shipping/pallets | Create order shipping pallets
*OrderApi* | [**restOrdersShippingParcelServiceRegionsParcelServiceRegionIdGet**](docs/Api/OrderApi.md#restordersshippingparcelserviceregionsparcelserviceregionidget) | **GET** /rest/orders/shipping/parcel_service_regions/{parcelServiceRegionId} | Get an  order parcel service region
*OrderApi* | [**restOrdersShippingPresetsGet**](docs/Api/OrderApi.md#restordersshippingpresetsget) | **GET** /rest/orders/shipping/presets | List shipping profiles
*OrderApi* | [**restOrdersShippingPresetsPresetIdGet**](docs/Api/OrderApi.md#restordersshippingpresetspresetidget) | **GET** /rest/orders/shipping/presets/{presetId} | Get a shipping profile
*OrderApi* | [**restOrdersShippingPresetsPresetIdParcelServiceRegionsGet**](docs/Api/OrderApi.md#restordersshippingpresetspresetidparcelserviceregionsget) | **GET** /rest/orders/shipping/presets/{presetId}/parcel_service_regions | List parcel service regions by parcel service preset ID
*OrderApi* | [**restOrdersShippingReturnsReturnsServiceProvidersGet**](docs/Api/OrderApi.md#restordersshippingreturnsreturnsserviceprovidersget) | **GET** /rest/orders/shipping/returns/returns_service_providers | List returns service providers
*OrderApi* | [**restOrdersShippingReturnsReturnsServiceProvidersPluginsGet**](docs/Api/OrderApi.md#restordersshippingreturnsreturnsserviceproviderspluginsget) | **GET** /rest/orders/shipping/returns/returns_service_providers/plugins | List returns service provider plugins
*OrderApi* | [**restOrdersShippingReturnsReturnsServiceProvidersProviderIdGet**](docs/Api/OrderApi.md#restordersshippingreturnsreturnsserviceprovidersprovideridget) | **GET** /rest/orders/shipping/returns/returns_service_providers/{providerId} | Get returns service provider by the ID
*OrderApi* | [**restOrdersShippingShippingInformationGet**](docs/Api/OrderApi.md#restordersshippingshippinginformationget) | **GET** /rest/orders/shipping/shipping_information | List orders with shipping information
*OrderApi* | [**restOrdersShippingShippingInformationPost**](docs/Api/OrderApi.md#restordersshippingshippinginformationpost) | **POST** /rest/orders/shipping/shipping_information | Create shipping information
*OrderApi* | [**restOrdersShippingShippingServiceProvidersGet**](docs/Api/OrderApi.md#restordersshippingshippingserviceprovidersget) | **GET** /rest/orders/shipping/shipping_service_providers | List shipping service providers
*OrderApi* | [**restOrdersShippingShippingServiceProvidersPluginsGet**](docs/Api/OrderApi.md#restordersshippingshippingserviceproviderspluginsget) | **GET** /rest/orders/shipping/shipping_service_providers/plugins | List shipping service provider plugins
*OrderApi* | [**restOrdersShippingShippingServiceProvidersPost**](docs/Api/OrderApi.md#restordersshippingshippingserviceproviderspost) | **POST** /rest/orders/shipping/shipping_service_providers | Save a shipping service provider
*OrderApi* | [**restOrdersShippingShippingServiceProvidersShippingServiceProviderIdGet**](docs/Api/OrderApi.md#restordersshippingshippingserviceprovidersshippingserviceprovideridget) | **GET** /rest/orders/shipping/shipping_service_providers/{shipping_service_provider_id} | Get a shipping service provider
*OrderApi* | [**restOrdersStatusHistoryGet**](docs/Api/OrderApi.md#restordersstatushistoryget) | **GET** /rest/orders/status-history | List status histories of orders
*OrderApi* | [**restOrdersStatusesAllGet**](docs/Api/OrderApi.md#restordersstatusesallget) | **GET** /rest/orders/statuses/all | Get all order statuses
*OrderApi* | [**restOrdersStatusesGet**](docs/Api/OrderApi.md#restordersstatusesget) | **GET** /rest/orders/statuses | Searches for order statuses
*OrderApi* | [**restOrdersStatusesGroupFunctionsPost**](docs/Api/OrderApi.md#restordersstatusesgroupfunctionspost) | **POST** /rest/orders/statuses/group_functions | Change order status properties
*OrderApi* | [**restOrdersStatusesPost**](docs/Api/OrderApi.md#restordersstatusespost) | **POST** /rest/orders/statuses | Creates an order status.
*OrderApi* | [**restOrdersStatusesStatusIdDelete**](docs/Api/OrderApi.md#restordersstatusesstatusiddelete) | **DELETE** /rest/orders/statuses/{statusId} | Delete an order status
*OrderApi* | [**restOrdersStatusesStatusIdGet**](docs/Api/OrderApi.md#restordersstatusesstatusidget) | **GET** /rest/orders/statuses/{statusId} | Get an order status
*OrderApi* | [**restOrdersStatusesStatusIdPut**](docs/Api/OrderApi.md#restordersstatusesstatusidput) | **PUT** /rest/orders/statuses/{statusId} | Update an order status
*OrderApi* | [**restRedistributionsOrderIdDelete**](docs/Api/OrderApi.md#restredistributionsorderiddelete) | **DELETE** /rest/redistributions/{orderId} | Delete a redistribution
*OrderApi* | [**restRedistributionsOrderIdPut**](docs/Api/OrderApi.md#restredistributionsorderidput) | **PUT** /rest/redistributions/{orderId} | Update a redistribution
*OrderApi* | [**restRedistributionsPost**](docs/Api/OrderApi.md#restredistributionspost) | **POST** /rest/redistributions | Create a redistribution
*OrderApi* | [**restReordersOrderIdCurrencyPut**](docs/Api/OrderApi.md#restreordersorderidcurrencyput) | **PUT** /rest/reorders/{orderId}/currency | Update the currency
*OrderApi* | [**restReordersOrderIdDelete**](docs/Api/OrderApi.md#restreordersorderiddelete) | **DELETE** /rest/reorders/{orderId} | Delete a reorder
*OrderApi* | [**restReordersOrderIdDeliveryDateGet**](docs/Api/OrderApi.md#restreordersorderiddeliverydateget) | **GET** /rest/reorders/{orderId}/delivery_date | Get the delivery date
*OrderApi* | [**restReordersOrderIdDeliveryDatesPut**](docs/Api/OrderApi.md#restreordersorderiddeliverydatesput) | **PUT** /rest/reorders/{orderId}/delivery_dates | Calculate and save the delivery dates
*OrderApi* | [**restReordersOrderIdPut**](docs/Api/OrderApi.md#restreordersorderidput) | **PUT** /rest/reorders/{orderId} | Update a reorder
*OrderApi* | [**restReordersPost**](docs/Api/OrderApi.md#restreorderspost) | **POST** /rest/reorders | Create a reorder
*OrderApi* | [**restSystemSettingsTaricVatAssignmentGet**](docs/Api/OrderApi.md#restsystemsettingstaricvatassignmentget) | **GET** /rest/system/settings/taric_vat_assignment | List taric vat assignments
*OrderApi* | [**restSystemSettingsTaricVatAssignmentTaricCodeCountryIdDelete**](docs/Api/OrderApi.md#restsystemsettingstaricvatassignmenttariccodecountryiddelete) | **DELETE** /rest/system/settings/taric_vat_assignment/{taricCode}/{countryId} | Delete taric vat assignment
*OrderApi* | [**restSystemSettingsTaricVatAssignmentTaricCodeCountryIdGet**](docs/Api/OrderApi.md#restsystemsettingstaricvatassignmenttariccodecountryidget) | **GET** /rest/system/settings/taric_vat_assignment/{taricCode}/{countryId} | Get taric vat assignment
*OrderApi* | [**restSystemSettingsTaricVatAssignmentTaricCodeCountryIdPost**](docs/Api/OrderApi.md#restsystemsettingstaricvatassignmenttariccodecountryidpost) | **POST** /rest/system/settings/taric_vat_assignment/{taricCode}/{countryId} | Create taric vat assignment
*OrderApi* | [**restSystemSettingsTaricVatAssignmentTaricCodeCountryIdPut**](docs/Api/OrderApi.md#restsystemsettingstaricvatassignmenttariccodecountryidput) | **PUT** /rest/system/settings/taric_vat_assignment/{taricCode}/{countryId} | Update taric vat assignment
*OrderSummaryApi* | [**restAccountsOrderSummariesContactsContactIdGet**](docs/Api/OrderSummaryApi.md#restaccountsordersummariescontactscontactidget) | **GET** /rest/accounts/order_summaries/contacts/{contactId} | Get order summary by contact ID
*OrderSummaryApi* | [**restAccountsOrderSummariesGet**](docs/Api/OrderSummaryApi.md#restaccountsordersummariesget) | **GET** /rest/accounts/order_summaries | List order summaries
*OrderSummaryApi* | [**restAccountsOrderSummariesOrderSummaryIdDelete**](docs/Api/OrderSummaryApi.md#restaccountsordersummariesordersummaryiddelete) | **DELETE** /rest/accounts/order_summaries/{orderSummaryId} | Delete order summary
*OrderSummaryApi* | [**restAccountsOrderSummariesOrderSummaryIdGet**](docs/Api/OrderSummaryApi.md#restaccountsordersummariesordersummaryidget) | **GET** /rest/accounts/order_summaries/{orderSummaryId} | Get order summary by order summary ID
*OrderSummaryApi* | [**restAccountsOrderSummariesOrderSummaryIdPut**](docs/Api/OrderSummaryApi.md#restaccountsordersummariesordersummaryidput) | **PUT** /rest/accounts/order_summaries/{orderSummaryId} | Update order summary
*OrderSummaryApi* | [**restAccountsOrderSummariesOrdersAddressIdGet**](docs/Api/OrderSummaryApi.md#restaccountsordersummariesordersaddressidget) | **GET** /rest/accounts/order_summaries/orders/{addressId} | Get order summary by address ID
*OrderSummaryApi* | [**restAccountsOrderSummariesPost**](docs/Api/OrderSummaryApi.md#restaccountsordersummariespost) | **POST** /rest/accounts/order_summaries | Create order summary
*PaymentApi* | [**restPaymentPaymentIdContactContactIdPost**](docs/Api/PaymentApi.md#restpaymentpaymentidcontactcontactidpost) | **POST** /rest/payment/{paymentId}/contact/{contactId} | Create Payment-Contact-Relation
*PaymentApi* | [**restPaymentPaymentIdContactDelete**](docs/Api/PaymentApi.md#restpaymentpaymentidcontactdelete) | **DELETE** /rest/payment/{paymentId}/contact | Delete Payment-Contact-Relation
*PaymentApi* | [**restPaymentPaymentIdOrderDelete**](docs/Api/PaymentApi.md#restpaymentpaymentidorderdelete) | **DELETE** /rest/payment/{paymentId}/order | Delete Payment-Order-Relation
*PaymentApi* | [**restPaymentPaymentIdOrderOrderIdPost**](docs/Api/PaymentApi.md#restpaymentpaymentidorderorderidpost) | **POST** /rest/payment/{paymentId}/order/{orderId} | Create Payment-Order-Relation
*PaymentApi* | [**restPaymentPropertiesTypesNamesNameIdGet**](docs/Api/PaymentApi.md#restpaymentpropertiestypesnamesnameidget) | **GET** /rest/payment/properties/types/names/{nameId} | Get a name of a property type
*PaymentApi* | [**restPaymentPropertiesTypesNamesPost**](docs/Api/PaymentApi.md#restpaymentpropertiestypesnamespost) | **POST** /rest/payment/properties/types/names | Create a name of a property type
*PaymentApi* | [**restPaymentPropertiesTypesNamesPut**](docs/Api/PaymentApi.md#restpaymentpropertiestypesnamesput) | **PUT** /rest/payment/properties/types/names | Update a name of a property type
*PaymentApi* | [**restPaymentsEntrydateGet**](docs/Api/PaymentApi.md#restpaymentsentrydateget) | **GET** /rest/payments/entrydate | List payments by entry date
*PaymentApi* | [**restPaymentsGet**](docs/Api/PaymentApi.md#restpaymentsget) | **GET** /rest/payments | List payments
*PaymentApi* | [**restPaymentsImportdateGet**](docs/Api/PaymentApi.md#restpaymentsimportdateget) | **GET** /rest/payments/importdate | List payments by import date
*PaymentApi* | [**restPaymentsMethodNamesGet**](docs/Api/PaymentApi.md#restpaymentsmethodnamesget) | **GET** /rest/payments/methodNames | List payment methods names
*PaymentApi* | [**restPaymentsMethodNamesPaymentMethodIdGet**](docs/Api/PaymentApi.md#restpaymentsmethodnamespaymentmethodidget) | **GET** /rest/payments/methodNames/{paymentMethodId} | List all payment method names for a payment method id
*PaymentApi* | [**restPaymentsMethodNamesPaymentMethodIdLangGet**](docs/Api/PaymentApi.md#restpaymentsmethodnamespaymentmethodidlangget) | **GET** /rest/payments/methodNames/{paymentMethodId}/{lang} | Gets a payment method name by id and lang
*PaymentApi* | [**restPaymentsMethodsEbicsGet**](docs/Api/PaymentApi.md#restpaymentsmethodsebicsget) | **GET** /rest/payments/methods/ebics | Get EBICS Accounts
*PaymentApi* | [**restPaymentsMethodsEbicsPost**](docs/Api/PaymentApi.md#restpaymentsmethodsebicspost) | **POST** /rest/payments/methods/ebics | Create an EBICS Account
*PaymentApi* | [**restPaymentsMethodsGet**](docs/Api/PaymentApi.md#restpaymentsmethodsget) | **GET** /rest/payments/methods | List payment methods
*PaymentApi* | [**restPaymentsMethodsHbciGet**](docs/Api/PaymentApi.md#restpaymentsmethodshbciget) | **GET** /rest/payments/methods/hbci | Returns the HBCI-Account count
*PaymentApi* | [**restPaymentsMethodsListBackendActiveLanguageGet**](docs/Api/PaymentApi.md#restpaymentsmethodslistbackendactivelanguageget) | **GET** /rest/payments/methods/list/backend_active/{language} | Returns all payment methods with id and name which are active for the backend
*PaymentApi* | [**restPaymentsMethodsListBackendIconGet**](docs/Api/PaymentApi.md#restpaymentsmethodslistbackendiconget) | **GET** /rest/payments/methods/list/backend_icon | Returns all payment methods with id and backend icon url
*PaymentApi* | [**restPaymentsMethodsListBackendSearchableLanguageGet**](docs/Api/PaymentApi.md#restpaymentsmethodslistbackendsearchablelanguageget) | **GET** /rest/payments/methods/list/backend_searchable/{language} | Returns all payment methods with id and name which are searchable for the backend
*PaymentApi* | [**restPaymentsMethodsListGet**](docs/Api/PaymentApi.md#restpaymentsmethodslistget) | **GET** /rest/payments/methods/list | Returns all payment methods with id and name
*PaymentApi* | [**restPaymentsMethodsListHandleSubscriptionLanguageGet**](docs/Api/PaymentApi.md#restpaymentsmethodslisthandlesubscriptionlanguageget) | **GET** /rest/payments/methods/list/handle_subscription/{language} | 
*PaymentApi* | [**restPaymentsMethodsMethodIdGet**](docs/Api/PaymentApi.md#restpaymentsmethodsmethodidget) | **GET** /rest/payments/methods/{methodId} | List payments of a payment method
*PaymentApi* | [**restPaymentsMethodsPluginsPluginKeyGet**](docs/Api/PaymentApi.md#restpaymentsmethodspluginspluginkeyget) | **GET** /rest/payments/methods/plugins/{pluginKey} | Get a payment method
*PaymentApi* | [**restPaymentsMethodsPost**](docs/Api/PaymentApi.md#restpaymentsmethodspost) | **POST** /rest/payments/methods | Create a payment method
*PaymentApi* | [**restPaymentsMethodsPut**](docs/Api/PaymentApi.md#restpaymentsmethodsput) | **PUT** /rest/payments/methods | Update a payment method
*PaymentApi* | [**restPaymentsOrdersOrderIdGet**](docs/Api/PaymentApi.md#restpaymentsordersorderidget) | **GET** /rest/payments/orders/{orderId} | List payments of an order
*PaymentApi* | [**restPaymentsPaymentIdGet**](docs/Api/PaymentApi.md#restpaymentspaymentidget) | **GET** /rest/payments/{paymentId} | Get a payment
*PaymentApi* | [**restPaymentsPaymentIdPropertiesGet**](docs/Api/PaymentApi.md#restpaymentspaymentidpropertiesget) | **GET** /rest/payments/{paymentId}/properties | List properties for a payment
*PaymentApi* | [**restPaymentsPost**](docs/Api/PaymentApi.md#restpaymentspost) | **POST** /rest/payments | Create a payment
*PaymentApi* | [**restPaymentsPropertiesDateGet**](docs/Api/PaymentApi.md#restpaymentspropertiesdateget) | **GET** /rest/payments/properties/date | List properties by creation date
*PaymentApi* | [**restPaymentsPropertiesGet**](docs/Api/PaymentApi.md#restpaymentspropertiesget) | **GET** /rest/payments/properties | List properties
*PaymentApi* | [**restPaymentsPropertiesPost**](docs/Api/PaymentApi.md#restpaymentspropertiespost) | **POST** /rest/payments/properties | Create a payment property
*PaymentApi* | [**restPaymentsPropertiesPropertyIdGet**](docs/Api/PaymentApi.md#restpaymentspropertiespropertyidget) | **GET** /rest/payments/properties/{propertyId} | Get a property
*PaymentApi* | [**restPaymentsPropertiesPut**](docs/Api/PaymentApi.md#restpaymentspropertiesput) | **PUT** /rest/payments/properties | Update a payment property
*PaymentApi* | [**restPaymentsPropertiesTypesGet**](docs/Api/PaymentApi.md#restpaymentspropertiestypesget) | **GET** /rest/payments/properties/types | List property types
*PaymentApi* | [**restPaymentsPropertiesTypesPost**](docs/Api/PaymentApi.md#restpaymentspropertiestypespost) | **POST** /rest/payments/properties/types | Create a property type
*PaymentApi* | [**restPaymentsPropertiesTypesPut**](docs/Api/PaymentApi.md#restpaymentspropertiestypesput) | **PUT** /rest/payments/properties/types | Update a property type
*PaymentApi* | [**restPaymentsPropertiesTypesTypeIdGet**](docs/Api/PaymentApi.md#restpaymentspropertiestypestypeidget) | **GET** /rest/payments/properties/types/{typeId} | Get a property type
*PaymentApi* | [**restPaymentsPropertyPropertyTypeIdPropertyValueGet**](docs/Api/PaymentApi.md#restpaymentspropertypropertytypeidpropertyvalueget) | **GET** /rest/payments/property/{propertyTypeId}/{propertyValue} | List payments by property type ID and value
*PaymentApi* | [**restPaymentsPut**](docs/Api/PaymentApi.md#restpaymentsput) | **PUT** /rest/payments | Update a payment
*PaymentApi* | [**restPaymentsStatusStatusIdGet**](docs/Api/PaymentApi.md#restpaymentsstatusstatusidget) | **GET** /rest/payments/status/{statusId} | List payments of a payment status
*PaymentApi* | [**restPaymentsTransactionsTransactionTypeIdGet**](docs/Api/PaymentApi.md#restpaymentstransactionstransactiontypeidget) | **GET** /rest/payments/transactions/{transactionTypeId} | List payments of a transaction type
*PimApi* | [**restPimAttributesDelete**](docs/Api/PimApi.md#restpimattributesdelete) | **DELETE** /rest/pim/attributes | Delete attributes
*PimApi* | [**restPimAttributesGet**](docs/Api/PimApi.md#restpimattributesget) | **GET** /rest/pim/attributes | Search attributes
*PimApi* | [**restPimAttributesIdGet**](docs/Api/PimApi.md#restpimattributesidget) | **GET** /rest/pim/attributes/{id} | Get one attribute
*PimApi* | [**restPimAttributesNamesDelete**](docs/Api/PimApi.md#restpimattributesnamesdelete) | **DELETE** /rest/pim/attributes/names | Delete attribute names
*PimApi* | [**restPimAttributesNamesGet**](docs/Api/PimApi.md#restpimattributesnamesget) | **GET** /rest/pim/attributes/names | Search attribute names
*PimApi* | [**restPimAttributesNamesPost**](docs/Api/PimApi.md#restpimattributesnamespost) | **POST** /rest/pim/attributes/names | Create attribute names
*PimApi* | [**restPimAttributesNamesPut**](docs/Api/PimApi.md#restpimattributesnamesput) | **PUT** /rest/pim/attributes/names | Update attribute names
*PimApi* | [**restPimAttributesPost**](docs/Api/PimApi.md#restpimattributespost) | **POST** /rest/pim/attributes | Create attributes
*PimApi* | [**restPimAttributesPut**](docs/Api/PimApi.md#restpimattributesput) | **PUT** /rest/pim/attributes | Update attributes
*PimApi* | [**restPimAttributesValuesDelete**](docs/Api/PimApi.md#restpimattributesvaluesdelete) | **DELETE** /rest/pim/attributes/values | Delete attribute values
*PimApi* | [**restPimAttributesValuesGet**](docs/Api/PimApi.md#restpimattributesvaluesget) | **GET** /rest/pim/attributes/values | Search attribute values
*PimApi* | [**restPimAttributesValuesIdGet**](docs/Api/PimApi.md#restpimattributesvaluesidget) | **GET** /rest/pim/attributes/values/{id} | Get one attribute value
*PimApi* | [**restPimAttributesValuesNamesDelete**](docs/Api/PimApi.md#restpimattributesvaluesnamesdelete) | **DELETE** /rest/pim/attributes/values/names | Delete attribute value names
*PimApi* | [**restPimAttributesValuesNamesGet**](docs/Api/PimApi.md#restpimattributesvaluesnamesget) | **GET** /rest/pim/attributes/values/names | Search attribute value names
*PimApi* | [**restPimAttributesValuesNamesPost**](docs/Api/PimApi.md#restpimattributesvaluesnamespost) | **POST** /rest/pim/attributes/values/names | Create attribute value names
*PimApi* | [**restPimAttributesValuesNamesPut**](docs/Api/PimApi.md#restpimattributesvaluesnamesput) | **PUT** /rest/pim/attributes/values/names | Update attribute value names
*PimApi* | [**restPimAttributesValuesPost**](docs/Api/PimApi.md#restpimattributesvaluespost) | **POST** /rest/pim/attributes/values | Create attribute values
*PimApi* | [**restPimAttributesValuesPut**](docs/Api/PimApi.md#restpimattributesvaluesput) | **PUT** /rest/pim/attributes/values | Update attribute values
*PimApi* | [**restPimCategoriesBranchesGet**](docs/Api/PimApi.md#restpimcategoriesbranchesget) | **GET** /rest/pim/categories/branches | Search category branches
*PimApi* | [**restPimCategoriesClientsGet**](docs/Api/PimApi.md#restpimcategoriesclientsget) | **GET** /rest/pim/categories/clients | Search category clients
*PimApi* | [**restPimCategoriesDetailsGet**](docs/Api/PimApi.md#restpimcategoriesdetailsget) | **GET** /rest/pim/categories/details | Search category details
*PimApi* | [**restPimCategoriesGet**](docs/Api/PimApi.md#restpimcategoriesget) | **GET** /rest/pim/categories | Search categories
*PimApi* | [**restPimCategoriesIdGet**](docs/Api/PimApi.md#restpimcategoriesidget) | **GET** /rest/pim/categories/{id} | Get one category
*PimApi* | [**restPimCategoriesPropertiesGet**](docs/Api/PimApi.md#restpimcategoriespropertiesget) | **GET** /rest/pim/categories/properties | Search category properties
*PimApi* | [**restPimVariationsGet**](docs/Api/PimApi.md#restpimvariationsget) | **GET** /rest/pim/variations | Lists variations
*PlentyMarketplaceApi* | [**restIoCustomerLoginPost**](docs/Api/PlentyMarketplaceApi.md#restiocustomerloginpost) | **POST** /rest/io/customer/login | plentyMarketplace login
*PlentyMarketplaceApi* | [**restPartnerPortalPartnerPluginVisibilityPost**](docs/Api/PlentyMarketplaceApi.md#restpartnerportalpartnerpluginvisibilitypost) | **POST** /rest/partner-portal/partner-plugin/visibility | Change plugin visibility
*PluginMultilingualismApi* | [**restLanguagesTranslationsPost**](docs/Api/PluginMultilingualismApi.md#restlanguagestranslationspost) | **POST** /rest/languages/translations | Create a new translation
*PluginMultilingualismApi* | [**restLanguagesTranslationsTranslationIdDelete**](docs/Api/PluginMultilingualismApi.md#restlanguagestranslationstranslationiddelete) | **DELETE** /rest/languages/translations/{translationId} | Delete a translation
*PluginMultilingualismApi* | [**restLanguagesTranslationsTranslationIdGet**](docs/Api/PluginMultilingualismApi.md#restlanguagestranslationstranslationidget) | **GET** /rest/languages/translations/{translationId} | Get a translation
*PluginMultilingualismApi* | [**restLanguagesTranslationsTranslationIdPut**](docs/Api/PluginMultilingualismApi.md#restlanguagestranslationstranslationidput) | **PUT** /rest/languages/translations/{translationId} | Update a translation
*PluginMultilingualismApi* | [**restPluginSetsPluginSetIdLanguagesLanguageCodeDelete**](docs/Api/PluginMultilingualismApi.md#restpluginsetspluginsetidlanguageslanguagecodedelete) | **DELETE** /rest/plugin_sets/{pluginSetId}/languages/{languageCode} | Delete multiple translation
*PluginSetApi* | [**restPluginSetsGet**](docs/Api/PluginSetApi.md#restpluginsetsget) | **GET** /rest/plugin_sets | List all Sets
*PluginSetApi* | [**restPluginSetsNewGitPluginDetailsPluginNameGet**](docs/Api/PluginSetApi.md#restpluginsetsnewgitplugindetailspluginnameget) | **GET** /rest/plugin_sets_new/git_plugin_details/{pluginName} | get git plugin description data
*PluginSetApi* | [**restPluginSetsNewPluginDetailsPluginNameVariationIdGet**](docs/Api/PluginSetApi.md#restpluginsetsnewplugindetailspluginnamevariationidget) | **GET** /rest/plugin_sets_new/plugin_details/{pluginName}/{variationId} | get plugin description data
*PluginSetApi* | [**restPluginSetsPluginSetIdLanguagesCsvLanguageCodeGet**](docs/Api/PluginSetApi.md#restpluginsetspluginsetidlanguagescsvlanguagecodeget) | **GET** /rest/plugin_sets/{pluginSetId}/languages/csv/{languageCode} | List all plugin translations csv.
*PluginSetApi* | [**restPluginSetsPluginSetIdLanguagesGet**](docs/Api/PluginSetApi.md#restpluginsetspluginsetidlanguagesget) | **GET** /rest/plugin_sets/{pluginSetId}/languages | List all the plugins translations for a plugin set
*PluginSetApi* | [**restPluginSetsPluginSetIdLanguagesTargetLanguageGet**](docs/Api/PluginSetApi.md#restpluginsetspluginsetidlanguagestargetlanguageget) | **GET** /rest/plugin_sets/{pluginSetId}/languages/{targetLanguage} | List all plugin translations merged.
*PluginSetApi* | [**restPluginSetsPluginSetIdLanguagesTargetLanguagePost**](docs/Api/PluginSetApi.md#restpluginsetspluginsetidlanguagestargetlanguagepost) | **POST** /rest/plugin_sets/{pluginSetId}/languages/{targetLanguage} | Update all plugin translations
*PluginSetApi* | [**restPluginSetsPost**](docs/Api/PluginSetApi.md#restpluginsetspost) | **POST** /rest/plugin_sets | Create a Set
*PluginSetApi* | [**restPluginSetsPreviewHashGet**](docs/Api/PluginSetApi.md#restpluginsetspreviewhashget) | **GET** /rest/plugin_sets/preview_hash | Get the preview hash for a set
*PluginSetApi* | [**restPluginSetsS3InboxOpensourcePluginsGet**](docs/Api/PluginSetApi.md#restpluginsetss3inboxopensourcepluginsget) | **GET** /rest/plugin_sets/s3-inbox-opensource-plugins | 
*PluginSetApi* | [**restPluginSetsSetIdDelete**](docs/Api/PluginSetApi.md#restpluginsetssetiddelete) | **DELETE** /rest/plugin_sets/{setId} | Delete a set
*PluginSetApi* | [**restPluginSetsSetIdGet**](docs/Api/PluginSetApi.md#restpluginsetssetidget) | **GET** /rest/plugin_sets/{setId} | Get a set
*PluginSetApi* | [**restPluginSetsSetIdPluginsGet**](docs/Api/PluginSetApi.md#restpluginsetssetidpluginsget) | **GET** /rest/plugin_sets/{setId}/plugins | List all Plugins of Set
*PluginSetApi* | [**restPluginSetsSetIdPluginsGetCompatibilityPluginNameVariationIdGet**](docs/Api/PluginSetApi.md#restpluginsetssetidpluginsgetcompatibilitypluginnamevariationidget) | **GET** /rest/plugin_sets/{setId}/plugins/get_compatibility/{pluginName}/{variationId} | 
*PluginSetApi* | [**restPluginSetsSetIdPluginsPluginIdDelete**](docs/Api/PluginSetApi.md#restpluginsetssetidpluginspluginiddelete) | **DELETE** /rest/plugin_sets/{setId}/plugins/{pluginId} | Remove a plugin from a set
*PluginSetApi* | [**restPluginSetsSetIdPluginsPluginIdInstallGitPluginPost**](docs/Api/PluginSetApi.md#restpluginsetssetidpluginspluginidinstallgitpluginpost) | **POST** /rest/plugin_sets/{setId}/plugins/{pluginId}/install_git_plugin | Install a git plugin into a set
*PluginSetApi* | [**restPluginSetsSetIdPluginsPluginIdPost**](docs/Api/PluginSetApi.md#restpluginsetssetidpluginspluginidpost) | **POST** /rest/plugin_sets/{setId}/plugins/{pluginId} | Add a plugin to a set
*PluginSetApi* | [**restPluginSetsSetIdPluginsPluginIdPut**](docs/Api/PluginSetApi.md#restpluginsetssetidpluginspluginidput) | **PUT** /rest/plugin_sets/{setId}/plugins/{pluginId} | Change a plugin&#39;s &#39;active&#39; status for a set.
*PluginSetApi* | [**restPluginSetsSetIdPluginsPluginIdSetPositionPost**](docs/Api/PluginSetApi.md#restpluginsetssetidpluginspluginidsetpositionpost) | **POST** /rest/plugin_sets/{setId}/plugins/{pluginId}/setPosition | Set a plugin&#39;s position in a set
*PluginSetApi* | [**restPluginSetsSetIdPluginsSearchGet**](docs/Api/PluginSetApi.md#restpluginsetssetidpluginssearchget) | **GET** /rest/plugin_sets/{setId}/plugins/search | Search plugins
*PluginSetApi* | [**restPluginSetsSetIdPut**](docs/Api/PluginSetApi.md#restpluginsetssetidput) | **PUT** /rest/plugin_sets/{setId} | Update a set
*PluginSetApi* | [**restPluginSetsSetIdSetEntriesGet**](docs/Api/PluginSetApi.md#restpluginsetssetidsetentriesget) | **GET** /rest/plugin_sets/{setId}/set_entries | List all SetEntries of Set
*PluginSetApi* | [**restPluginsPluginSetsPluginSetIdPluginsGet**](docs/Api/PluginSetApi.md#restpluginspluginsetspluginsetidpluginsget) | **GET** /rest/plugins/plugin_sets/{pluginSetId}/plugins | List all Plugins of Set
*PluginsApi* | [**restPluginsGet**](docs/Api/PluginsApi.md#restpluginsget) | **GET** /rest/plugins | List plugins
*PluginsApi* | [**restPluginsMailPost**](docs/Api/PluginsApi.md#restpluginsmailpost) | **POST** /rest/plugins_mail | Send mail
*PluginsApi* | [**restPluginsPluginIdDelete**](docs/Api/PluginsApi.md#restpluginspluginiddelete) | **DELETE** /rest/plugins/{pluginId} | Delete a plugin
*PluginsApi* | [**restPluginsPluginIdGet**](docs/Api/PluginsApi.md#restpluginspluginidget) | **GET** /rest/plugins/{pluginId} | Get a plugin
*PluginsApi* | [**restPluginsPluginIdPluginSetsPluginSetIdDelete**](docs/Api/PluginsApi.md#restpluginspluginidpluginsetspluginsetiddelete) | **DELETE** /rest/plugins/{pluginId}/plugin_sets/{pluginSetId} | Delete a plugin
*PluginsApi* | [**restPluginsPluginIdPut**](docs/Api/PluginsApi.md#restpluginspluginidput) | **PUT** /rest/plugins/{pluginId} | Update a plugin
*PluginsApi* | [**restPluginsPost**](docs/Api/PluginsApi.md#restpluginspost) | **POST** /rest/plugins | Create a plugin
*PluginsApi* | [**restPluginsSearchGet**](docs/Api/PluginsApi.md#restpluginssearchget) | **GET** /rest/plugins/search | List plugins
*PluginsApi* | [**restPluginsSeoSitemapGet**](docs/Api/PluginsApi.md#restpluginsseositemapget) | **GET** /rest/plugins/seo/sitemap | Load sitemap patterns
*PluginsApi* | [**restPluginsUiGet**](docs/Api/PluginsApi.md#restpluginsuiget) | **GET** /rest/plugins/ui | List plugins for backend UI
*PropertyApi* | [**restPropertiesAmazonsGet**](docs/Api/PropertyApi.md#restpropertiesamazonsget) | **GET** /rest/properties/amazons | List property amazons
*PropertyApi* | [**restPropertiesAmazonsPost**](docs/Api/PropertyApi.md#restpropertiesamazonspost) | **POST** /rest/properties/amazons | Create one or multiple property amazon
*PropertyApi* | [**restPropertiesAmazonsPropertyAmazonIdDelete**](docs/Api/PropertyApi.md#restpropertiesamazonspropertyamazoniddelete) | **DELETE** /rest/properties/amazons/{propertyAmazonId} | Delete a property amazon
*PropertyApi* | [**restPropertiesAmazonsPropertyAmazonIdGet**](docs/Api/PropertyApi.md#restpropertiesamazonspropertyamazonidget) | **GET** /rest/properties/amazons/{propertyAmazonId} | Get a property amazon
*PropertyApi* | [**restPropertiesAmazonsPut**](docs/Api/PropertyApi.md#restpropertiesamazonsput) | **PUT** /rest/properties/amazons | Update one or multiple property amazon
*PropertyApi* | [**restPropertiesAvailabilitiesAvailabilityIdDelete**](docs/Api/PropertyApi.md#restpropertiesavailabilitiesavailabilityiddelete) | **DELETE** /rest/properties/availabilities/{availabilityId} | Delete an availability
*PropertyApi* | [**restPropertiesAvailabilitiesAvailabilityIdGet**](docs/Api/PropertyApi.md#restpropertiesavailabilitiesavailabilityidget) | **GET** /rest/properties/availabilities/{availabilityId} | Get an availability
*PropertyApi* | [**restPropertiesAvailabilitiesAvailabilityIdPut**](docs/Api/PropertyApi.md#restpropertiesavailabilitiesavailabilityidput) | **PUT** /rest/properties/availabilities/{availabilityId} | Update an availability
*PropertyApi* | [**restPropertiesAvailabilitiesGet**](docs/Api/PropertyApi.md#restpropertiesavailabilitiesget) | **GET** /rest/properties/availabilities | List availabilities
*PropertyApi* | [**restPropertiesAvailabilitiesPost**](docs/Api/PropertyApi.md#restpropertiesavailabilitiespost) | **POST** /rest/properties/availabilities | Create an availability
*PropertyApi* | [**restPropertiesDestinationsGet**](docs/Api/PropertyApi.md#restpropertiesdestinationsget) | **GET** /rest/properties/destinations | Get property destinations
*PropertyApi* | [**restPropertiesGet**](docs/Api/PropertyApi.md#restpropertiesget) | **GET** /rest/properties | List properties
*PropertyApi* | [**restPropertiesGroupsGet**](docs/Api/PropertyApi.md#restpropertiesgroupsget) | **GET** /rest/properties/groups | List property groups
*PropertyApi* | [**restPropertiesGroupsGroupIdGet**](docs/Api/PropertyApi.md#restpropertiesgroupsgroupidget) | **GET** /rest/properties/groups/{groupId} | Get a property group
*PropertyApi* | [**restPropertiesGroupsGroupIdPropertiesPost**](docs/Api/PropertyApi.md#restpropertiesgroupsgroupidpropertiespost) | **POST** /rest/properties/groups/{groupId}/properties | Mass attach propertyId and groupId collection into the pivot table.
*PropertyApi* | [**restPropertiesGroupsGroupIdPropertiesPropertyIdDelete**](docs/Api/PropertyApi.md#restpropertiesgroupsgroupidpropertiespropertyiddelete) | **DELETE** /rest/properties/groups/{groupId}/properties/{propertyId} | Detach a property from a property group.
*PropertyApi* | [**restPropertiesGroupsGroupIdPropertiesPropertyIdPost**](docs/Api/PropertyApi.md#restpropertiesgroupsgroupidpropertiespropertyidpost) | **POST** /rest/properties/groups/{groupId}/properties/{propertyId} | Attach a property to a property group
*PropertyApi* | [**restPropertiesGroupsGroupIdPut**](docs/Api/PropertyApi.md#restpropertiesgroupsgroupidput) | **PUT** /rest/properties/groups/{groupId} | Update a property group
*PropertyApi* | [**restPropertiesGroupsNamesGet**](docs/Api/PropertyApi.md#restpropertiesgroupsnamesget) | **GET** /rest/properties/groups/names | List group names
*PropertyApi* | [**restPropertiesGroupsNamesGroupNameIdDelete**](docs/Api/PropertyApi.md#restpropertiesgroupsnamesgroupnameiddelete) | **DELETE** /rest/properties/groups/names/{groupNameId} | Delete a group name
*PropertyApi* | [**restPropertiesGroupsNamesGroupNameIdGet**](docs/Api/PropertyApi.md#restpropertiesgroupsnamesgroupnameidget) | **GET** /rest/properties/groups/names/{groupNameId} | Get a group name
*PropertyApi* | [**restPropertiesGroupsNamesGroupNameIdPut**](docs/Api/PropertyApi.md#restpropertiesgroupsnamesgroupnameidput) | **PUT** /rest/properties/groups/names/{groupNameId} | Update a group name
*PropertyApi* | [**restPropertiesGroupsNamesPost**](docs/Api/PropertyApi.md#restpropertiesgroupsnamespost) | **POST** /rest/properties/groups/names | Create an group name
*PropertyApi* | [**restPropertiesGroupsOptionsGet**](docs/Api/PropertyApi.md#restpropertiesgroupsoptionsget) | **GET** /rest/properties/groups/options | List group options
*PropertyApi* | [**restPropertiesGroupsOptionsGroupOptionIdDelete**](docs/Api/PropertyApi.md#restpropertiesgroupsoptionsgroupoptioniddelete) | **DELETE** /rest/properties/groups/options/{groupOptionId} | Delete a group option
*PropertyApi* | [**restPropertiesGroupsOptionsGroupOptionIdGet**](docs/Api/PropertyApi.md#restpropertiesgroupsoptionsgroupoptionidget) | **GET** /rest/properties/groups/options/{groupOptionId} | Get a group option
*PropertyApi* | [**restPropertiesGroupsOptionsGroupOptionIdPut**](docs/Api/PropertyApi.md#restpropertiesgroupsoptionsgroupoptionidput) | **PUT** /rest/properties/groups/options/{groupOptionId} | Update a group option
*PropertyApi* | [**restPropertiesGroupsOptionsPost**](docs/Api/PropertyApi.md#restpropertiesgroupsoptionspost) | **POST** /rest/properties/groups/options | Create a group option
*PropertyApi* | [**restPropertiesGroupsPost**](docs/Api/PropertyApi.md#restpropertiesgroupspost) | **POST** /rest/properties/groups | Create a property group
*PropertyApi* | [**restPropertiesGroupsPropertyIdDelete**](docs/Api/PropertyApi.md#restpropertiesgroupspropertyiddelete) | **DELETE** /rest/properties/groups/{propertyId} | Delete a property group
*PropertyApi* | [**restPropertiesGroupsSurchargeTypesGet**](docs/Api/PropertyApi.md#restpropertiesgroupssurchargetypesget) | **GET** /rest/properties/groups/surcharge/types | Get surcharge types from module configuration
*PropertyApi* | [**restPropertiesGroupsTypesGet**](docs/Api/PropertyApi.md#restpropertiesgroupstypesget) | **GET** /rest/properties/groups/types | Get group types from module configuration
*PropertyApi* | [**restPropertiesMarketsGet**](docs/Api/PropertyApi.md#restpropertiesmarketsget) | **GET** /rest/properties/markets | List property markets
*PropertyApi* | [**restPropertiesMarketsPost**](docs/Api/PropertyApi.md#restpropertiesmarketspost) | **POST** /rest/properties/markets | Create a property market
*PropertyApi* | [**restPropertiesMarketsPropertiesMarketIdDelete**](docs/Api/PropertyApi.md#restpropertiesmarketspropertiesmarketiddelete) | **DELETE** /rest/properties/markets/{propertiesMarketId} | Delete a property market
*PropertyApi* | [**restPropertiesMarketsPropertiesMarketIdGet**](docs/Api/PropertyApi.md#restpropertiesmarketspropertiesmarketidget) | **GET** /rest/properties/markets/{propertiesMarketId} | Get a property market
*PropertyApi* | [**restPropertiesMarketsPropertiesMarketIdPut**](docs/Api/PropertyApi.md#restpropertiesmarketspropertiesmarketidput) | **PUT** /rest/properties/markets/{propertiesMarketId} | Update a property market
*PropertyApi* | [**restPropertiesMultipleOptionsDelete**](docs/Api/PropertyApi.md#restpropertiesmultipleoptionsdelete) | **DELETE** /rest/properties/multiple/options | Delete property options
*PropertyApi* | [**restPropertiesMultipleOptionsPost**](docs/Api/PropertyApi.md#restpropertiesmultipleoptionspost) | **POST** /rest/properties/multiple/options | Create property options
*PropertyApi* | [**restPropertiesNamesGet**](docs/Api/PropertyApi.md#restpropertiesnamesget) | **GET** /rest/properties/names | List names
*PropertyApi* | [**restPropertiesNamesNameIdDelete**](docs/Api/PropertyApi.md#restpropertiesnamesnameiddelete) | **DELETE** /rest/properties/names/{nameId} | Delete a property name
*PropertyApi* | [**restPropertiesNamesNameIdGet**](docs/Api/PropertyApi.md#restpropertiesnamesnameidget) | **GET** /rest/properties/names/{nameId} | Get a property name
*PropertyApi* | [**restPropertiesNamesNameIdPut**](docs/Api/PropertyApi.md#restpropertiesnamesnameidput) | **PUT** /rest/properties/names/{nameId} | Update a property name
*PropertyApi* | [**restPropertiesNamesPost**](docs/Api/PropertyApi.md#restpropertiesnamespost) | **POST** /rest/properties/names | Create a name
*PropertyApi* | [**restPropertiesOptionsGet**](docs/Api/PropertyApi.md#restpropertiesoptionsget) | **GET** /rest/properties/options | List property options
*PropertyApi* | [**restPropertiesOptionsPost**](docs/Api/PropertyApi.md#restpropertiesoptionspost) | **POST** /rest/properties/options | Create a property option
*PropertyApi* | [**restPropertiesOptionsPropertyOptionIdDelete**](docs/Api/PropertyApi.md#restpropertiesoptionspropertyoptioniddelete) | **DELETE** /rest/properties/options/{propertyOptionId} | Delete a property option
*PropertyApi* | [**restPropertiesOptionsPropertyOptionIdGet**](docs/Api/PropertyApi.md#restpropertiesoptionspropertyoptionidget) | **GET** /rest/properties/options/{propertyOptionId} | Get a property option
*PropertyApi* | [**restPropertiesOptionsPropertyOptionIdPut**](docs/Api/PropertyApi.md#restpropertiesoptionspropertyoptionidput) | **PUT** /rest/properties/options/{propertyOptionId} | Update a property option
*PropertyApi* | [**restPropertiesPost**](docs/Api/PropertyApi.md#restpropertiespost) | **POST** /rest/properties | Create a property
*PropertyApi* | [**restPropertiesPropertyIdDelete**](docs/Api/PropertyApi.md#restpropertiespropertyiddelete) | **DELETE** /rest/properties/{propertyId} | Delete a property
*PropertyApi* | [**restPropertiesPropertyIdGet**](docs/Api/PropertyApi.md#restpropertiespropertyidget) | **GET** /rest/properties/{propertyId} | Get a property.
*PropertyApi* | [**restPropertiesPropertyIdPut**](docs/Api/PropertyApi.md#restpropertiespropertyidput) | **PUT** /rest/properties/{propertyId} | Update a property
*PropertyApi* | [**restPropertiesRelationsDelete**](docs/Api/PropertyApi.md#restpropertiesrelationsdelete) | **DELETE** /rest/properties/relations | Delete property relations
*PropertyApi* | [**restPropertiesRelationsGet**](docs/Api/PropertyApi.md#restpropertiesrelationsget) | **GET** /rest/properties/relations | List property relations
*PropertyApi* | [**restPropertiesRelationsMarkupsGet**](docs/Api/PropertyApi.md#restpropertiesrelationsmarkupsget) | **GET** /rest/properties/relations/markups | List relation markups
*PropertyApi* | [**restPropertiesRelationsMarkupsPost**](docs/Api/PropertyApi.md#restpropertiesrelationsmarkupspost) | **POST** /rest/properties/relations/markups | Create a property relation markup
*PropertyApi* | [**restPropertiesRelationsMarkupsRelationMarkupIdDelete**](docs/Api/PropertyApi.md#restpropertiesrelationsmarkupsrelationmarkupiddelete) | **DELETE** /rest/properties/relations/markups/{relationMarkupId} | Delete a property relation markup
*PropertyApi* | [**restPropertiesRelationsMarkupsRelationMarkupIdGet**](docs/Api/PropertyApi.md#restpropertiesrelationsmarkupsrelationmarkupidget) | **GET** /rest/properties/relations/markups/{relationMarkupId} | Get a property relation markup
*PropertyApi* | [**restPropertiesRelationsMarkupsRelationMarkupIdPut**](docs/Api/PropertyApi.md#restpropertiesrelationsmarkupsrelationmarkupidput) | **PUT** /rest/properties/relations/markups/{relationMarkupId} | Update a property relation markup
*PropertyApi* | [**restPropertiesRelationsPost**](docs/Api/PropertyApi.md#restpropertiesrelationspost) | **POST** /rest/properties/relations | Create a property relation
*PropertyApi* | [**restPropertiesRelationsPut**](docs/Api/PropertyApi.md#restpropertiesrelationsput) | **PUT** /rest/properties/relations | Update relations
*PropertyApi* | [**restPropertiesRelationsRelationIdDelete**](docs/Api/PropertyApi.md#restpropertiesrelationsrelationiddelete) | **DELETE** /rest/properties/relations/{relationId} | Delete a property relation
*PropertyApi* | [**restPropertiesRelationsRelationIdFilePost**](docs/Api/PropertyApi.md#restpropertiesrelationsrelationidfilepost) | **POST** /rest/properties/relations/{relationId}/file | Save property relation file to S3
*PropertyApi* | [**restPropertiesRelationsRelationIdGet**](docs/Api/PropertyApi.md#restpropertiesrelationsrelationidget) | **GET** /rest/properties/relations/{relationId} | Get a property relation
*PropertyApi* | [**restPropertiesRelationsRelationIdPut**](docs/Api/PropertyApi.md#restpropertiesrelationsrelationidput) | **PUT** /rest/properties/relations/{relationId} | Update a property relation
*PropertyApi* | [**restPropertiesRelationsRelationIdValuesDelete**](docs/Api/PropertyApi.md#restpropertiesrelationsrelationidvaluesdelete) | **DELETE** /rest/properties/relations/{relationId}/values | Delete all property relation values of a specified property relation
*PropertyApi* | [**restPropertiesRelationsValuesGet**](docs/Api/PropertyApi.md#restpropertiesrelationsvaluesget) | **GET** /rest/properties/relations/values | List property relation values
*PropertyApi* | [**restPropertiesRelationsValuesPost**](docs/Api/PropertyApi.md#restpropertiesrelationsvaluespost) | **POST** /rest/properties/relations/values | Create a property relation value
*PropertyApi* | [**restPropertiesRelationsValuesPropertiesRelationValueIdDelete**](docs/Api/PropertyApi.md#restpropertiesrelationsvaluespropertiesrelationvalueiddelete) | **DELETE** /rest/properties/relations/values/{propertiesRelationValueId} | Delete a property relation value
*PropertyApi* | [**restPropertiesRelationsValuesPropertiesRelationValueIdPut**](docs/Api/PropertyApi.md#restpropertiesrelationsvaluespropertiesrelationvalueidput) | **PUT** /rest/properties/relations/values/{propertiesRelationValueId} | Update a property relation value
*PropertyApi* | [**restPropertiesRelationsValuesPut**](docs/Api/PropertyApi.md#restpropertiesrelationsvaluesput) | **PUT** /rest/properties/relations/values | Update multiple property relation value
*PropertyApi* | [**restPropertiesRelationsValuesRelationMarkupIdGet**](docs/Api/PropertyApi.md#restpropertiesrelationsvaluesrelationmarkupidget) | **GET** /rest/properties/relations/values/{relationMarkupId} | Get a property relation value
*PropertyApi* | [**restPropertiesSelectionsGet**](docs/Api/PropertyApi.md#restpropertiesselectionsget) | **GET** /rest/properties/selections | List property selections
*PropertyApi* | [**restPropertiesSelectionsPost**](docs/Api/PropertyApi.md#restpropertiesselectionspost) | **POST** /rest/properties/selections | Create a property selection
*PropertyApi* | [**restPropertiesSelectionsPropertySelectionIdDelete**](docs/Api/PropertyApi.md#restpropertiesselectionspropertyselectioniddelete) | **DELETE** /rest/properties/selections/{propertySelectionId} | Delete a property selection
*PropertyApi* | [**restPropertiesSelectionsPropertySelectionIdGet**](docs/Api/PropertyApi.md#restpropertiesselectionspropertyselectionidget) | **GET** /rest/properties/selections/{propertySelectionId} | Get a property selection
*PropertyApi* | [**restPropertiesSelectionsPropertySelectionIdPut**](docs/Api/PropertyApi.md#restpropertiesselectionspropertyselectionidput) | **PUT** /rest/properties/selections/{propertySelectionId} | Update a property selection
*PropertyApi* | [**restPropertiesSystemlangGet**](docs/Api/PropertyApi.md#restpropertiessystemlangget) | **GET** /rest/properties/systemlang | Get system language
*ReportApi* | [**restReportsKeyFiguresConfigGet**](docs/Api/ReportApi.md#restreportskeyfiguresconfigget) | **GET** /rest/reports/key-figures/config | Returns all key figure configs
*ReportApi* | [**restReportsKeyFiguresConfigKeyFigureConfigIdDelete**](docs/Api/ReportApi.md#restreportskeyfiguresconfigkeyfigureconfigiddelete) | **DELETE** /rest/reports/key-figures/config/{keyFigureConfigId} | Delete key figure configuration
*ReportApi* | [**restReportsKeyFiguresConfigKeyFigureConfigIdGet**](docs/Api/ReportApi.md#restreportskeyfiguresconfigkeyfigureconfigidget) | **GET** /rest/reports/key-figures/config/{keyFigureConfigId} | Get key figure config
*ReportApi* | [**restReportsKeyFiguresConfigKeyFigureConfigIdPut**](docs/Api/ReportApi.md#restreportskeyfiguresconfigkeyfigureconfigidput) | **PUT** /rest/reports/key-figures/config/{keyFigureConfigId} | Update key figure configuration
*ReportApi* | [**restReportsKeyFiguresConfigPost**](docs/Api/ReportApi.md#restreportskeyfiguresconfigpost) | **POST** /rest/reports/key-figures/config | Add a key figure configuration
*ReportApi* | [**restReportsKeyFiguresConfigTemplatePost**](docs/Api/ReportApi.md#restreportskeyfiguresconfigtemplatepost) | **POST** /rest/reports/key-figures/config/template | Generate key figure config from template class
*ReportApi* | [**restReportsKeyFiguresConfigTemplatesGet**](docs/Api/ReportApi.md#restreportskeyfiguresconfigtemplatesget) | **GET** /rest/reports/key-figures/config/templates | Get key figure templates
*ReportApi* | [**restReportsKeyFiguresConfigsDelete**](docs/Api/ReportApi.md#restreportskeyfiguresconfigsdelete) | **DELETE** /rest/reports/key-figures/configs | Delete multiple key figure configurations
*ReportApi* | [**restReportsKeyFiguresDetailsKeyFigureNameGet**](docs/Api/ReportApi.md#restreportskeyfiguresdetailskeyfigurenameget) | **GET** /rest/reports/key-figures/details/{keyFigureName} | Return key figure calculation details
*ReportApi* | [**restReportsKeyFiguresGet**](docs/Api/ReportApi.md#restreportskeyfiguresget) | **GET** /rest/reports/key-figures | Return list of key figure classes
*ReportApi* | [**restReportsKeyFiguresResultsPost**](docs/Api/ReportApi.md#restreportskeyfiguresresultspost) | **POST** /rest/reports/key-figures/results | Search for key figure calculation results
*ReportApi* | [**restReportsOrderTypesGet**](docs/Api/ReportApi.md#restreportsordertypesget) | **GET** /rest/reports/order-types | Get order types in string format
*ReportApi* | [**restReportsRawDataConfigGet**](docs/Api/ReportApi.md#restreportsrawdataconfigget) | **GET** /rest/reports/raw-data/config | Returns list of all saved configurations
*ReportApi* | [**restReportsRawDataConfigPut**](docs/Api/ReportApi.md#restreportsrawdataconfigput) | **PUT** /rest/reports/raw-data/config | Resets all saved raw data configurations with given data
*ReportApi* | [**restReportsRawDataCreatorsConfigsGet**](docs/Api/ReportApi.md#restreportsrawdatacreatorsconfigsget) | **GET** /rest/reports/raw-data/creators-configs | Return a list of raw data creators with their configurations
*ReportApi* | [**restReportsRawDataCreatorsGet**](docs/Api/ReportApi.md#restreportsrawdatacreatorsget) | **GET** /rest/reports/raw-data/creators | Get list of all raw data creators
*ReportApi* | [**restReportsRawDataFileGet**](docs/Api/ReportApi.md#restreportsrawdatafileget) | **GET** /rest/reports/raw-data/file | Get a raw data file from the storage, the storage path of the file must be specified.
*ReportApi* | [**restReportsRawDataGet**](docs/Api/ReportApi.md#restreportsrawdataget) | **GET** /rest/reports/raw-data | Get list of raw data files. Valid filter combinations: (dataName), (dataName &amp; processStatus), (createdAtTimestamp)
*ReturnsApi* | [**restOrdersOrderIdShippingReturnsAssignLabelReturnsIdPut**](docs/Api/ReturnsApi.md#restordersorderidshippingreturnsassignlabelreturnsidput) | **PUT** /rest/orders/{orderId}/shipping/returns/assign_label/{returnsId} | 
*ReturnsApi* | [**restOrdersOrderIdShippingReturnsGet**](docs/Api/ReturnsApi.md#restordersorderidshippingreturnsget) | **GET** /rest/orders/{orderId}/shipping/returns | 
*ReturnsApi* | [**restOrdersShippingReturnsReturnsIdGet**](docs/Api/ReturnsApi.md#restordersshippingreturnsreturnsidget) | **GET** /rest/orders/shipping/returns/{returnsId} | 
*SalesRepresentativeRegionApi* | [**restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsGet**](docs/Api/SalesRepresentativeRegionApi.md#restaccountsaccountidcontactscontactidsalesrepresentativeregionsget) | **GET** /rest/accounts/{accountId}/contacts/{contactId}/sales_representative_regions | Get region by contactId and accountId
*SalesRepresentativeRegionApi* | [**restAccountsAccountIdContactsContactIdSalesRepresentativeRegionsPost**](docs/Api/SalesRepresentativeRegionApi.md#restaccountsaccountidcontactscontactidsalesrepresentativeregionspost) | **POST** /rest/accounts/{accountId}/contacts/{contactId}/sales_representative_regions | Create region for sales representative
*SalesRepresentativeRegionApi* | [**restAccountsContactsContactIdSalesRepresentativeRegionsGet**](docs/Api/SalesRepresentativeRegionApi.md#restaccountscontactscontactidsalesrepresentativeregionsget) | **GET** /rest/accounts/contacts/{contactId}/sales_representative_regions | List regions by contactId
*SalesRepresentativeRegionApi* | [**restAccountsContactsSalesRepresentativeRegionsGet**](docs/Api/SalesRepresentativeRegionApi.md#restaccountscontactssalesrepresentativeregionsget) | **GET** /rest/accounts/contacts/sales_representative_regions | Get sales representative of region
*SalesRepresentativeRegionApi* | [**restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdDelete**](docs/Api/SalesRepresentativeRegionApi.md#restaccountssalesrepresentativeregionssalesrepresentativeregioniddelete) | **DELETE** /rest/accounts/sales_representative_regions/{salesRepresentativeRegionId} | Delete region
*SalesRepresentativeRegionApi* | [**restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdGet**](docs/Api/SalesRepresentativeRegionApi.md#restaccountssalesrepresentativeregionssalesrepresentativeregionidget) | **GET** /rest/accounts/sales_representative_regions/{salesRepresentativeRegionId} | Get region by ID
*SalesRepresentativeRegionApi* | [**restAccountsSalesRepresentativeRegionsSalesRepresentativeRegionIdPut**](docs/Api/SalesRepresentativeRegionApi.md#restaccountssalesrepresentativeregionssalesrepresentativeregionidput) | **PUT** /rest/accounts/sales_representative_regions/{salesRepresentativeRegionId} | Update region
*ShopApi* | [**restShopBuilderContentLinksContentLinkIdDelete**](docs/Api/ShopApi.md#restshopbuildercontentlinkscontentlinkiddelete) | **DELETE** /rest/shop_builder/content_links/{contentLinkId} | Delete a content link.
*ShopApi* | [**restShopBuilderContentLinksContentLinkIdGet**](docs/Api/ShopApi.md#restshopbuildercontentlinkscontentlinkidget) | **GET** /rest/shop_builder/content_links/{contentLinkId} | Find a content link by id.
*ShopApi* | [**restShopBuilderContentLinksContentLinkIdPreviewUrlGet**](docs/Api/ShopApi.md#restshopbuildercontentlinkscontentlinkidpreviewurlget) | **GET** /rest/shop_builder/content_links/{contentLinkId}/preview_url | Generate a preview link for a contentLink.
*ShopApi* | [**restShopBuilderContentLinksContentLinkIdPut**](docs/Api/ShopApi.md#restshopbuildercontentlinkscontentlinkidput) | **PUT** /rest/shop_builder/content_links/{contentLinkId} | Update a content link.
*ShopApi* | [**restShopBuilderContentLinksGet**](docs/Api/ShopApi.md#restshopbuildercontentlinksget) | **GET** /rest/shop_builder/content_links | List all content links for a given plugin set
*ShopApi* | [**restShopBuilderContentLinksPost**](docs/Api/ShopApi.md#restshopbuildercontentlinkspost) | **POST** /rest/shop_builder/content_links | Link a content to a layout container of a frontend plugin.
*ShopApi* | [**restShopBuilderContentsContentIdDelete**](docs/Api/ShopApi.md#restshopbuildercontentscontentiddelete) | **DELETE** /rest/shop_builder/contents/{contentId} | Delete a content
*ShopApi* | [**restShopBuilderContentsContentIdGet**](docs/Api/ShopApi.md#restshopbuildercontentscontentidget) | **GET** /rest/shop_builder/contents/{contentId} | Find a content by id.
*ShopApi* | [**restShopBuilderContentsContentIdOptions**](docs/Api/ShopApi.md#restshopbuildercontentscontentidoptions) | **OPTIONS** /rest/shop_builder/contents/{contentId} | Get cross origin headers.
*ShopApi* | [**restShopBuilderContentsContentIdPost**](docs/Api/ShopApi.md#restshopbuildercontentscontentidpost) | **POST** /rest/shop_builder/contents/{contentId} | Duplicate a content by id.
*ShopApi* | [**restShopBuilderContentsContentIdPut**](docs/Api/ShopApi.md#restshopbuildercontentscontentidput) | **PUT** /rest/shop_builder/contents/{contentId} | Update a content.
*ShopApi* | [**restShopBuilderContentsGet**](docs/Api/ShopApi.md#restshopbuildercontentsget) | **GET** /rest/shop_builder/contents | List all contents.
*ShopApi* | [**restShopBuilderContentsPost**](docs/Api/ShopApi.md#restshopbuildercontentspost) | **POST** /rest/shop_builder/contents | Create new content.
*ShopApi* | [**restShopBuilderContentsPut**](docs/Api/ShopApi.md#restshopbuildercontentsput) | **PUT** /rest/shop_builder/contents | Generate templates for all contents.
*ShopApi* | [**restShopBuilderContentsSearchGet**](docs/Api/ShopApi.md#restshopbuildercontentssearchget) | **GET** /rest/shop_builder/contents/search | Search for contents.
*ShopApi* | [**restShopBuilderPagesGet**](docs/Api/ShopApi.md#restshopbuilderpagesget) | **GET** /rest/shop_builder/pages | List content pages
*ShopApi* | [**restShopBuilderWidgetsGet**](docs/Api/ShopApi.md#restshopbuilderwidgetsget) | **GET** /rest/shop_builder/widgets | List all widgets
*ShopApi* | [**restShopBuilderWidgetsOptions**](docs/Api/ShopApi.md#restshopbuilderwidgetsoptions) | **OPTIONS** /rest/shop_builder/widgets | Get cross origin headers.
*ShopApi* | [**restShopBuilderWidgetsPost**](docs/Api/ShopApi.md#restshopbuilderwidgetspost) | **POST** /rest/shop_builder/widgets | Render the preview for widgets
*StockManagementApi* | [**restStockmanagementStockGet**](docs/Api/StockManagementApi.md#reststockmanagementstockget) | **GET** /rest/stockmanagement/stock | List stock
*StockManagementApi* | [**restStockmanagementStockRedistributePut**](docs/Api/StockManagementApi.md#reststockmanagementstockredistributeput) | **PUT** /rest/stockmanagement/stock/redistribute | Redistribute stock
*StockManagementApi* | [**restStockmanagementStockTypesTypeGet**](docs/Api/StockManagementApi.md#reststockmanagementstocktypestypeget) | **GET** /rest/stockmanagement/stock/types/{type} | List stock by warehouse type
*StockManagementApi* | [**restStockmanagementWarehousesGet**](docs/Api/StockManagementApi.md#reststockmanagementwarehousesget) | **GET** /rest/stockmanagement/warehouses | List warehouses
*StockManagementApi* | [**restStockmanagementWarehousesPost**](docs/Api/StockManagementApi.md#reststockmanagementwarehousespost) | **POST** /rest/stockmanagement/warehouses | Create a warehouse
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdGet**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidget) | **GET** /rest/stockmanagement/warehouses/{warehouseId} | Get a warehouse
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdManagementRacksGet**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidmanagementracksget) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/racks | List racks
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdManagementRacksPost**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidmanagementrackspost) | **POST** /rest/stockmanagement/warehouses/{warehouseId}/management/racks | Create a rack
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdManagementRacksRackIdGet**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidmanagementracksrackidget) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/racks/{rackId} | Get a rack
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesGet**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidmanagementracksrackidshelvesget) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/racks/{rackId}/shelves | List shelves
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesPost**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidmanagementracksrackidshelvespost) | **POST** /rest/stockmanagement/warehouses/{warehouseId}/management/racks/{rackId}/shelves | Create a shelf
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdGet**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidmanagementracksrackidshelvesshelfidget) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/racks/{rackId}/shelves/{shelfId} | Get a shelf
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidmanagementracksrackidshelvesshelfidstoragelocationsget) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/racks/{rackId}/shelves/{shelfId}/storageLocations | List storage locations
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsPost**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidmanagementracksrackidshelvesshelfidstoragelocationspost) | **POST** /rest/stockmanagement/warehouses/{warehouseId}/management/racks/{rackId}/shelves/{shelfId}/storageLocations | Create a storage location
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsStorageLocationIdGet**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidmanagementracksrackidshelvesshelfidstoragelocationsstoragelocationidget) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/racks/{rackId}/shelves/{shelfId}/storageLocations/{storageLocationId} | Get a storage location
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdManagementStorageLocationsGet**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidmanagementstoragelocationsget) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/storageLocations | List storage locations
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdManagementStorageLocationsStorageLocationIdGet**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidmanagementstoragelocationsstoragelocationidget) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/management/storageLocations/{storageLocationId} | Get a storage location
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPut**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidstockbookincomingitemsput) | **PUT** /rest/stockmanagement/warehouses/{warehouseId}/stock/bookIncomingItems | Book incoming stock
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdStockBookOutgoingItemsPut**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidstockbookoutgoingitemsput) | **PUT** /rest/stockmanagement/warehouses/{warehouseId}/stock/bookOutgoingItems | Book outgoing stock
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdStockCorrectionPut**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidstockcorrectionput) | **PUT** /rest/stockmanagement/warehouses/{warehouseId}/stock/correction | Correct stock
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdStockGet**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidstockget) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/stock | List stock by warehouse
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdStockMovementsGet**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidstockmovementsget) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/stock/movements | List stock movements
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdStockStorageLocationsGet**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidstockstoragelocationsget) | **GET** /rest/stockmanagement/warehouses/{warehouseId}/stock/storageLocations | List stock of a warehouse per storage location
*StockManagementApi* | [**restStockmanagementWarehousesWarehouseIdStockUnpackVariationPut**](docs/Api/StockManagementApi.md#reststockmanagementwarehouseswarehouseidstockunpackvariationput) | **PUT** /rest/stockmanagement/warehouses/{warehouseId}/stock/unpackVariation | Unpack variation
*SyncApi* | [**restElasticSyncDocumentGet**](docs/Api/SyncApi.md#restelasticsyncdocumentget) | **GET** /rest/elastic-sync/document | Get a single storage object from sync documents
*SyncApi* | [**restElasticSyncDocumentPost**](docs/Api/SyncApi.md#restelasticsyncdocumentpost) | **POST** /rest/elastic-sync/document | Upload a document to sync directory
*SyncApi* | [**restElasticSyncDocumentUrlGet**](docs/Api/SyncApi.md#restelasticsyncdocumenturlget) | **GET** /rest/elastic-sync/document/url | Get a temporary url for a single document
*SyncApi* | [**restElasticSyncDocumentsDelete**](docs/Api/SyncApi.md#restelasticsyncdocumentsdelete) | **DELETE** /rest/elastic-sync/documents | Delete files from sync documents
*SyncApi* | [**restElasticSyncDocumentsGet**](docs/Api/SyncApi.md#restelasticsyncdocumentsget) | **GET** /rest/elastic-sync/documents | List documents for a single sync
*TagApi* | [**restTagsBulkPost**](docs/Api/TagApi.md#resttagsbulkpost) | **POST** /rest/tags/bulk | Create up to 50 tags
*TagApi* | [**restTagsBulkPut**](docs/Api/TagApi.md#resttagsbulkput) | **PUT** /rest/tags/bulk | Update up to 50 tags
*TagApi* | [**restTagsGet**](docs/Api/TagApi.md#resttagsget) | **GET** /rest/tags | List tags
*TagApi* | [**restTagsIdDelete**](docs/Api/TagApi.md#resttagsiddelete) | **DELETE** /rest/tags/{id} | Delete tag
*TagApi* | [**restTagsIdGet**](docs/Api/TagApi.md#resttagsidget) | **GET** /rest/tags/{id} | Get tag by ID
*TagApi* | [**restTagsIdPut**](docs/Api/TagApi.md#resttagsidput) | **PUT** /rest/tags/{id} | Update tag
*TagApi* | [**restTagsIdRelationshipsTagTypeRelationshipUUIDDelete**](docs/Api/TagApi.md#resttagsidrelationshipstagtyperelationshipuuiddelete) | **DELETE** /rest/tags/{id}/relationships/{tagType}/{relationshipUUID} | Delete tag relationship
*TagApi* | [**restTagsPost**](docs/Api/TagApi.md#resttagspost) | **POST** /rest/tags | Create a tag
*TagApi* | [**restTagsRelationshipsDelete**](docs/Api/TagApi.md#resttagsrelationshipsdelete) | **DELETE** /rest/tags/relationships | Delete tag relationships
*TagApi* | [**restTagsRelationshipsGet**](docs/Api/TagApi.md#resttagsrelationshipsget) | **GET** /rest/tags/relationships | List relationships
*TagApi* | [**restTagsRelationshipsPost**](docs/Api/TagApi.md#resttagsrelationshipspost) | **POST** /rest/tags/relationships | Create tag relationship
*TagApi* | [**restTagsRelationshipsRelationshipValueTagTypeIdDelete**](docs/Api/TagApi.md#resttagsrelationshipsrelationshipvaluetagtypeiddelete) | **DELETE** /rest/tags/relationships/{relationshipValue}/{tagType}/{id} | Delete tag relationship
*TagApi* | [**restTagsRelationshipsRelationshipValueTagTypeIdPut**](docs/Api/TagApi.md#resttagsrelationshipsrelationshipvaluetagtypeidput) | **PUT** /rest/tags/relationships/{relationshipValue}/{tagType}/{id} | Update tag relationship
*TicketApi* | [**restTicketsGet**](docs/Api/TicketApi.md#restticketsget) | **GET** /rest/tickets | List tickets by filters
*TicketApi* | [**restTicketsPost**](docs/Api/TicketApi.md#restticketspost) | **POST** /rest/tickets | Create ticket
*TicketApi* | [**restTicketsStatusNamesGet**](docs/Api/TicketApi.md#restticketsstatusnamesget) | **GET** /rest/tickets/status/names | List status names
*TicketApi* | [**restTicketsStatusTypeNamesGet**](docs/Api/TicketApi.md#restticketsstatustypenamesget) | **GET** /rest/tickets/status/type/names | List status names with typeId
*TicketApi* | [**restTicketsTicketIdGet**](docs/Api/TicketApi.md#restticketsticketidget) | **GET** /rest/tickets/{ticketId} | Get ticket
*TicketApi* | [**restTicketsTicketIdPost**](docs/Api/TicketApi.md#restticketsticketidpost) | **POST** /rest/tickets/{ticketId} | Create message
*TicketApi* | [**restTicketsTicketIdPut**](docs/Api/TicketApi.md#restticketsticketidput) | **PUT** /rest/tickets/{ticketId} | Update ticket
*TicketApi* | [**restTicketsTypesNamesGet**](docs/Api/TicketApi.md#restticketstypesnamesget) | **GET** /rest/tickets/types/names | List type names
*TicketMessageApi* | [**restTicketsMessagesMessageIdGet**](docs/Api/TicketMessageApi.md#restticketsmessagesmessageidget) | **GET** /rest/tickets/messages/{messageId} | Get ticket message for given message ID
*TicketMessageApi* | [**restTicketsTicketIdMessagesCommentGet**](docs/Api/TicketMessageApi.md#restticketsticketidmessagescommentget) | **GET** /rest/tickets/{ticketId}/messages/comment | List all internal ticket messages
*TicketMessageApi* | [**restTicketsTicketIdMessagesGet**](docs/Api/TicketMessageApi.md#restticketsticketidmessagesget) | **GET** /rest/tickets/{ticketId}/messages | List all ticket messages for given ticket ID
*TicketMessageApi* | [**restTicketsTicketIdMessagesMessageGet**](docs/Api/TicketMessageApi.md#restticketsticketidmessagesmessageget) | **GET** /rest/tickets/{ticketId}/messages/message | List all public ticket messages
*UserApi* | [**restBackendUserUserIdGet**](docs/Api/UserApi.md#restbackenduseruseridget) | **GET** /rest/backend/user/{userId} | 
*UserApi* | [**restBackendUsersGet**](docs/Api/UserApi.md#restbackendusersget) | **GET** /rest/backend/users | 
*UserApi* | [**restBackendUsersSearchNameNameGet**](docs/Api/UserApi.md#restbackenduserssearchnamenameget) | **GET** /rest/backend/users/search_name/{name} | Find all users having a name or username like the given one.
*UserApi* | [**restUserBackendPluginsetGet**](docs/Api/UserApi.md#restuserbackendpluginsetget) | **GET** /rest/user/backend_pluginset | get the backend plugin set for user
*UserApi* | [**restUserBackendPluginsetPost**](docs/Api/UserApi.md#restuserbackendpluginsetpost) | **POST** /rest/user/backend_pluginset | set the backend plugin set for user
*UserApi* | [**restUserPinUsersGet**](docs/Api/UserApi.md#restuserpinusersget) | **GET** /rest/user/pin_users | get all User with a secret value
*WarehouseApi* | [**restWarehousesLayoutsPost**](docs/Api/WarehouseApi.md#restwarehouseslayoutspost) | **POST** /rest/warehouses/layouts | Create a warehouse location layout
*WarehouseApi* | [**restWarehousesLocationsAvailabilityWarehouseLocationIdGet**](docs/Api/WarehouseApi.md#restwarehouseslocationsavailabilitywarehouselocationidget) | **GET** /rest/warehouses/locations/availability/{warehouseLocationId} | Get availability for storage location
*WarehouseApi* | [**restWarehousesLocationsDelete**](docs/Api/WarehouseApi.md#restwarehouseslocationsdelete) | **DELETE** /rest/warehouses/locations | Delete multiple warehouse locations
*WarehouseApi* | [**restWarehousesLocationsDetailsGet**](docs/Api/WarehouseApi.md#restwarehouseslocationsdetailsget) | **GET** /rest/warehouses/locations/details | Get warehouse location details
*WarehouseApi* | [**restWarehousesLocationsDimensionsPost**](docs/Api/WarehouseApi.md#restwarehouseslocationsdimensionspost) | **POST** /rest/warehouses/locations/dimensions | Create a warehouse location dimension
*WarehouseApi* | [**restWarehousesLocationsDimensionsWarehouseLocationDimensionIdDelete**](docs/Api/WarehouseApi.md#restwarehouseslocationsdimensionswarehouselocationdimensioniddelete) | **DELETE** /rest/warehouses/locations/dimensions/{warehouseLocationDimensionId} | Delete a warehouse location dimension
*WarehouseApi* | [**restWarehousesLocationsDimensionsWarehouseLocationDimensionIdGet**](docs/Api/WarehouseApi.md#restwarehouseslocationsdimensionswarehouselocationdimensionidget) | **GET** /rest/warehouses/locations/dimensions/{warehouseLocationDimensionId} | Get a warehouse location dimension
*WarehouseApi* | [**restWarehousesLocationsDimensionsWarehouseLocationDimensionIdPut**](docs/Api/WarehouseApi.md#restwarehouseslocationsdimensionswarehouselocationdimensionidput) | **PUT** /rest/warehouses/locations/dimensions/{warehouseLocationDimensionId} | Update a warehouse location dimension
*WarehouseApi* | [**restWarehousesLocationsGroupPut**](docs/Api/WarehouseApi.md#restwarehouseslocationsgroupput) | **PUT** /rest/warehouses/locations/group | Edit the purpose and status for a group of storage locations
*WarehouseApi* | [**restWarehousesLocationsLevelsPositionsPost**](docs/Api/WarehouseApi.md#restwarehouseslocationslevelspositionspost) | **POST** /rest/warehouses/locations/levels/positions | Move a warehouse location level position
*WarehouseApi* | [**restWarehousesLocationsLevelsPost**](docs/Api/WarehouseApi.md#restwarehouseslocationslevelspost) | **POST** /rest/warehouses/locations/levels | Create a warehouse location level
*WarehouseApi* | [**restWarehousesLocationsLevelsWarehouseLocationLevelIdDelete**](docs/Api/WarehouseApi.md#restwarehouseslocationslevelswarehouselocationleveliddelete) | **DELETE** /rest/warehouses/locations/levels/{warehouseLocationLevelId} | Delete a warehouse location level
*WarehouseApi* | [**restWarehousesLocationsLevelsWarehouseLocationLevelIdGet**](docs/Api/WarehouseApi.md#restwarehouseslocationslevelswarehouselocationlevelidget) | **GET** /rest/warehouses/locations/levels/{warehouseLocationLevelId} | Get a warehouse location level
*WarehouseApi* | [**restWarehousesLocationsLevelsWarehouseLocationLevelIdPut**](docs/Api/WarehouseApi.md#restwarehouseslocationslevelswarehouselocationlevelidput) | **PUT** /rest/warehouses/locations/levels/{warehouseLocationLevelId} | Update a warehouse location level
*WarehouseApi* | [**restWarehousesLocationsMultipleDimensionsPost**](docs/Api/WarehouseApi.md#restwarehouseslocationsmultipledimensionspost) | **POST** /rest/warehouses/locations/multiple_dimensions | Create multiple warehouse location dimensions
*WarehouseApi* | [**restWarehousesLocationsPositionsPost**](docs/Api/WarehouseApi.md#restwarehouseslocationspositionspost) | **POST** /rest/warehouses/locations/positions | Move a warehouse location position
*WarehouseApi* | [**restWarehousesLocationsPost**](docs/Api/WarehouseApi.md#restwarehouseslocationspost) | **POST** /rest/warehouses/locations | Create a warehouse location
*WarehouseApi* | [**restWarehousesLocationsPreviewsPost**](docs/Api/WarehouseApi.md#restwarehouseslocationspreviewspost) | **POST** /rest/warehouses/locations/previews | Generate warehouse location preview and saves it
*WarehouseApi* | [**restWarehousesLocationsStockWarehouseLocationIdGet**](docs/Api/WarehouseApi.md#restwarehouseslocationsstockwarehouselocationidget) | **GET** /rest/warehouses/locations/stock/{warehouseLocationId} | List warehouse locations stock
*WarehouseApi* | [**restWarehousesLocationsWarehouseIdLabelPost**](docs/Api/WarehouseApi.md#restwarehouseslocationswarehouseidlabelpost) | **POST** /rest/warehouses/locations/{warehouseId}/label | Generate the warehouse location label
*WarehouseApi* | [**restWarehousesLocationsWarehouseLocationIdDelete**](docs/Api/WarehouseApi.md#restwarehouseslocationswarehouselocationiddelete) | **DELETE** /rest/warehouses/locations/{warehouseLocationId} | Delete a warehouse location
*WarehouseApi* | [**restWarehousesLocationsWarehouseLocationIdGet**](docs/Api/WarehouseApi.md#restwarehouseslocationswarehouselocationidget) | **GET** /rest/warehouses/locations/{warehouseLocationId} | Get a warehouse location
*WarehouseApi* | [**restWarehousesLocationsWarehouseLocationIdPut**](docs/Api/WarehouseApi.md#restwarehouseslocationswarehouselocationidput) | **PUT** /rest/warehouses/locations/{warehouseLocationId} | Update a warehouse location
*WarehouseApi* | [**restWarehousesStructureWarehouseIdGet**](docs/Api/WarehouseApi.md#restwarehousesstructurewarehouseidget) | **GET** /rest/warehouses/structure/{warehouseId} | Get a warehouse location structure
*WarehouseApi* | [**restWarehousesStructureWarehouseIdMovingGet**](docs/Api/WarehouseApi.md#restwarehousesstructurewarehouseidmovingget) | **GET** /rest/warehouses/structure/{warehouseId}/moving | Get a warehouse location structure moving
*WarehouseApi* | [**restWarehousesWarehouseIdLocationsDimensionsGet**](docs/Api/WarehouseApi.md#restwarehouseswarehouseidlocationsdimensionsget) | **GET** /rest/warehouses/{warehouseId}/locations/dimensions | List warehouse location dimensions
*WarehouseApi* | [**restWarehousesWarehouseIdLocationsGet**](docs/Api/WarehouseApi.md#restwarehouseswarehouseidlocationsget) | **GET** /rest/warehouses/{warehouseId}/locations | List warehouse locations
*WarehouseApi* | [**restWarehousesWarehouseIdLocationsLevelWarehouseLocationLevelIdGet**](docs/Api/WarehouseApi.md#restwarehouseswarehouseidlocationslevelwarehouselocationlevelidget) | **GET** /rest/warehouses/{warehouseId}/locations/level/{warehouseLocationLevelId} | List warehouse locations by levelId
*WarehouseApi* | [**restWarehousesWarehouseIdLocationsLevelsGet**](docs/Api/WarehouseApi.md#restwarehouseswarehouseidlocationslevelsget) | **GET** /rest/warehouses/{warehouseId}/locations/levels | List warehouse location levels
*WebstoreApi* | [**restWebstoresGet**](docs/Api/WebstoreApi.md#restwebstoresget) | **GET** /rest/webstores | List clients (stores)
*WebstoreApi* | [**restWebstoresWebstoreIdPluginSetGet**](docs/Api/WebstoreApi.md#restwebstoreswebstoreidpluginsetget) | **GET** /rest/webstores/{webstoreId}/plugin_set | Find a plugin set
*WebstoreApi* | [**restWebstoresWebstoreIdPluginSetPost**](docs/Api/WebstoreApi.md#restwebstoreswebstoreidpluginsetpost) | **POST** /rest/webstores/{webstoreId}/plugin_set | Set a plugin set relation to a webstore
*WizardApi* | [**restWizardsFoldersGet**](docs/Api/WizardApi.md#restwizardsfoldersget) | **GET** /rest/wizards/folders | List wizard folders
*WizardApi* | [**restWizardsGet**](docs/Api/WizardApi.md#restwizardsget) | **GET** /rest/wizards | List wizards
*WizardApi* | [**restWizardsWizardKeyActionsActionKeyPost**](docs/Api/WizardApi.md#restwizardswizardkeyactionsactionkeypost) | **POST** /rest/wizards/{wizardKey}/actions/{actionKey} | Perform an action of a registered actionHandlerClass of a given wizard
*WizardApi* | [**restWizardsWizardKeyDataDelete**](docs/Api/WizardApi.md#restwizardswizardkeydatadelete) | **DELETE** /rest/wizards/{wizardKey}/data | Delete a wizard data
*WizardApi* | [**restWizardsWizardKeyDataGet**](docs/Api/WizardApi.md#restwizardswizardkeydataget) | **GET** /rest/wizards/{wizardKey}/data | Get a wizard data
*WizardApi* | [**restWizardsWizardKeyDataOptionIdDelete**](docs/Api/WizardApi.md#restwizardswizardkeydataoptioniddelete) | **DELETE** /rest/wizards/{wizardKey}/data/{optionId} | Delete a wizard data&#39;s option
*WizardApi* | [**restWizardsWizardKeyDataOptionIdGet**](docs/Api/WizardApi.md#restwizardswizardkeydataoptionidget) | **GET** /rest/wizards/{wizardKey}/data/{optionId} | Get a wizard data by optionId
*WizardApi* | [**restWizardsWizardKeyDataOptionIdPost**](docs/Api/WizardApi.md#restwizardswizardkeydataoptionidpost) | **POST** /rest/wizards/{wizardKey}/data/{optionId} | Create a wizard data option
*WizardApi* | [**restWizardsWizardKeyDataOptionIdPut**](docs/Api/WizardApi.md#restwizardswizardkeydataoptionidput) | **PUT** /rest/wizards/{wizardKey}/data/{optionId} | Update a wizard data option
*WizardApi* | [**restWizardsWizardKeyDataPost**](docs/Api/WizardApi.md#restwizardswizardkeydatapost) | **POST** /rest/wizards/{wizardKey}/data | Create a wizard data
*WizardApi* | [**restWizardsWizardKeyDataPut**](docs/Api/WizardApi.md#restwizardswizardkeydataput) | **PUT** /rest/wizards/{wizardKey}/data | Update a wizard data
*WizardApi* | [**restWizardsWizardKeyFormfieldsFormfieldKeyPost**](docs/Api/WizardApi.md#restwizardswizardkeyformfieldsformfieldkeypost) | **POST** /rest/wizards/{wizardKey}/formfields/{formfieldKey} | Load dynamic data
*WizardApi* | [**restWizardsWizardKeyGet**](docs/Api/WizardApi.md#restwizardswizardkeyget) | **GET** /rest/wizards/{wizardKey} | Get a wizard
*WizardApi* | [**restWizardsWizardKeySettingsOptionIdPost**](docs/Api/WizardApi.md#restwizardswizardkeysettingsoptionidpost) | **POST** /rest/wizards/{wizardKey}/settings/{optionId} | Finalize the wizard

## Models

- [Account](docs/Model/Account.md)
- [AccountContactRelation](docs/Model/AccountContactRelation.md)
- [AccountingLocation](docs/Model/AccountingLocation.md)
- [AccountingLocationSettings](docs/Model/AccountingLocationSettings.md)
- [Address](docs/Model/Address.md)
- [AddressContactRelation](docs/Model/AddressContactRelation.md)
- [AddressOption](docs/Model/AddressOption.md)
- [AddressOptionType](docs/Model/AddressOptionType.md)
- [AddressOrderRelation](docs/Model/AddressOrderRelation.md)
- [AddressPosRelation](docs/Model/AddressPosRelation.md)
- [AddressRelationType](docs/Model/AddressRelationType.md)
- [AddressWarehouseRelation](docs/Model/AddressWarehouseRelation.md)
- [Attachment](docs/Model/Attachment.md)
- [Attribute](docs/Model/Attribute.md)
- [AttributeMap](docs/Model/AttributeMap.md)
- [AttributeName](docs/Model/AttributeName.md)
- [AttributeValue](docs/Model/AttributeValue.md)
- [AttributeValueImage](docs/Model/AttributeValueImage.md)
- [AttributeValueMap](docs/Model/AttributeValueMap.md)
- [AttributeValueMarketName](docs/Model/AttributeValueMarketName.md)
- [AttributeValueName](docs/Model/AttributeValueName.md)
- [AttributeValueSet](docs/Model/AttributeValueSet.md)
- [Availability](docs/Model/Availability.md)
- [AvailabilityName](docs/Model/AvailabilityName.md)
- [Barcode](docs/Model/Barcode.md)
- [BarcodeLinkReferrer](docs/Model/BarcodeLinkReferrer.md)
- [Basket](docs/Model/Basket.md)
- [BasketItem](docs/Model/BasketItem.md)
- [BlogPost](docs/Model/BlogPost.md)
- [Board](docs/Model/Board.md)
- [BoardColumn](docs/Model/BoardColumn.md)
- [BoardTask](docs/Model/BoardTask.md)
- [BoardTaskReference](docs/Model/BoardTaskReference.md)
- [Category](docs/Model/Category.md)
- [CategoryBranch](docs/Model/CategoryBranch.md)
- [CategoryClient](docs/Model/CategoryClient.md)
- [CategoryDetails](docs/Model/CategoryDetails.md)
- [CategoryProperty](docs/Model/CategoryProperty.md)
- [CategoryTemplate](docs/Model/CategoryTemplate.md)
- [CloudMetricsList](docs/Model/CloudMetricsList.md)
- [Comment](docs/Model/Comment.md)
- [Configuration](docs/Model/Configuration.md)
- [Contact](docs/Model/Contact.md)
- [ContactBank](docs/Model/ContactBank.md)
- [ContactDepartment](docs/Model/ContactDepartment.md)
- [ContactDepartmentName](docs/Model/ContactDepartmentName.md)
- [ContactEvent](docs/Model/ContactEvent.md)
- [ContactOption](docs/Model/ContactOption.md)
- [ContactOptionSubType](docs/Model/ContactOptionSubType.md)
- [ContactOptionType](docs/Model/ContactOptionType.md)
- [ContactPosition](docs/Model/ContactPosition.md)
- [ContactPositionName](docs/Model/ContactPositionName.md)
- [ContactType](docs/Model/ContactType.md)
- [ContactWish](docs/Model/ContactWish.md)
- [Content](docs/Model/Content.md)
- [ContentLink](docs/Model/ContentLink.md)
- [ContentPage](docs/Model/ContentPage.md)
- [Country](docs/Model/Country.md)
- [CouponCampaignCode](docs/Model/CouponCampaignCode.md)
- [CouponCodeContact](docs/Model/CouponCodeContact.md)
- [CouponCodeValidation](docs/Model/CouponCodeValidation.md)
- [Credentials](docs/Model/Credentials.md)
- [Currency](docs/Model/Currency.md)
- [CurrencyExchangeRate](docs/Model/CurrencyExchangeRate.md)
- [CustomerContract](docs/Model/CustomerContract.md)
- [DebtorAccountConfiguration](docs/Model/DebtorAccountConfiguration.md)
- [DeleteLog](docs/Model/DeleteLog.md)
- [Document](docs/Model/Document.md)
- [DocumentData](docs/Model/DocumentData.md)
- [ElasticSyncMapping](docs/Model/ElasticSyncMapping.md)
- [ElasticSyncMappingFilter](docs/Model/ElasticSyncMappingFilter.md)
- [ElasticSyncMappingRow](docs/Model/ElasticSyncMappingRow.md)
- [ElasticSyncMatching](docs/Model/ElasticSyncMatching.md)
- [ElasticSyncOption](docs/Model/ElasticSyncOption.md)
- [ElasticSyncSync](docs/Model/ElasticSyncSync.md)
- [Entry](docs/Model/Entry.md)
- [Export](docs/Model/Export.md)
- [ExportDocument](docs/Model/ExportDocument.md)
- [Feedback](docs/Model/Feedback.md)
- [FeedbackComment](docs/Model/FeedbackComment.md)
- [FeedbackRating](docs/Model/FeedbackRating.md)
- [Filter](docs/Model/Filter.md)
- [Fitment](docs/Model/Fitment.md)
- [FitmentItem](docs/Model/FitmentItem.md)
- [Folder](docs/Model/Folder.md)
- [FormatSetting](docs/Model/FormatSetting.md)
- [FulfillmentPolicy](docs/Model/FulfillmentPolicy.md)
- [Item](docs/Model/Item.md)
- [ItemCrossSelling](docs/Model/ItemCrossSelling.md)
- [ItemEbayTitle](docs/Model/ItemEbayTitle.md)
- [ItemImage](docs/Model/ItemImage.md)
- [ItemImageAvailability](docs/Model/ItemImageAvailability.md)
- [ItemImageName](docs/Model/ItemImageName.md)
- [ItemProperty](docs/Model/ItemProperty.md)
- [ItemSet](docs/Model/ItemSet.md)
- [ItemSetComponent](docs/Model/ItemSetComponent.md)
- [ItemSetConfig](docs/Model/ItemSetConfig.md)
- [ItemShippingProfiles](docs/Model/ItemShippingProfiles.md)
- [ItemSpecific](docs/Model/ItemSpecific.md)
- [KeyFigure](docs/Model/KeyFigure.md)
- [KeyFigureConfig](docs/Model/KeyFigureConfig.md)
- [KeyFigureConfigSearchResult](docs/Model/KeyFigureConfigSearchResult.md)
- [LayoutTemplate](docs/Model/LayoutTemplate.md)
- [LegalInformation](docs/Model/LegalInformation.md)
- [Listing](docs/Model/Listing.md)
- [ListingMarket](docs/Model/ListingMarket.md)
- [ListingMarketDirectory](docs/Model/ListingMarketDirectory.md)
- [ListingMarketHistory](docs/Model/ListingMarketHistory.md)
- [ListingMarketInfo](docs/Model/ListingMarketInfo.md)
- [ListingMarketItemSpecific](docs/Model/ListingMarketItemSpecific.md)
- [ListingMarketText](docs/Model/ListingMarketText.md)
- [ListingType](docs/Model/ListingType.md)
- [Log](docs/Model/Log.md)
- [Manufacturer](docs/Model/Manufacturer.md)
- [ManufacturerCommission](docs/Model/ManufacturerCommission.md)
- [Marketplace](docs/Model/Marketplace.md)
- [Message](docs/Model/Message.md)
- [MessageFrom](docs/Model/MessageFrom.md)
- [MessageLinkedTo](docs/Model/MessageLinkedTo.md)
- [MessageMetaData](docs/Model/MessageMetaData.md)
- [MessageReferrer](docs/Model/MessageReferrer.md)
- [MessageTo](docs/Model/MessageTo.md)
- [OptionTemplate](docs/Model/OptionTemplate.md)
- [Order](docs/Model/Order.md)
- [OrderDate](docs/Model/OrderDate.md)
- [OrderDateType](docs/Model/OrderDateType.md)
- [OrderDateTypeName](docs/Model/OrderDateTypeName.md)
- [OrderItem](docs/Model/OrderItem.md)
- [OrderItemDate](docs/Model/OrderItemDate.md)
- [OrderItemProperty](docs/Model/OrderItemProperty.md)
- [OrderItemTransaction](docs/Model/OrderItemTransaction.md)
- [OrderProperty](docs/Model/OrderProperty.md)
- [OrderPropertyType](docs/Model/OrderPropertyType.md)
- [OrderPropertyTypeName](docs/Model/OrderPropertyTypeName.md)
- [OrderReferrer](docs/Model/OrderReferrer.md)
- [OrderReturns](docs/Model/OrderReturns.md)
- [OrderSerialNumber](docs/Model/OrderSerialNumber.md)
- [OrderShippingPackage](docs/Model/OrderShippingPackage.md)
- [OrderShippingPackageItems](docs/Model/OrderShippingPackageItems.md)
- [OrderShippingPallet](docs/Model/OrderShippingPallet.md)
- [OrderStatus](docs/Model/OrderStatus.md)
- [OrderSummary](docs/Model/OrderSummary.md)
- [OutputParam](docs/Model/OutputParam.md)
- [PackingUnit](docs/Model/PackingUnit.md)
- [ParcelServicePreset](docs/Model/ParcelServicePreset.md)
- [ParcelServiceRegion](docs/Model/ParcelServiceRegion.md)
- [Payment](docs/Model/Payment.md)
- [PaymentContactRelation](docs/Model/PaymentContactRelation.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentMethodName](docs/Model/PaymentMethodName.md)
- [PaymentOrderRelation](docs/Model/PaymentOrderRelation.md)
- [PaymentPolicy](docs/Model/PaymentPolicy.md)
- [PaymentProperty](docs/Model/PaymentProperty.md)
- [PaymentPropertyType](docs/Model/PaymentPropertyType.md)
- [PaymentPropertyTypeName](docs/Model/PaymentPropertyTypeName.md)
- [PickingOrderItem](docs/Model/PickingOrderItem.md)
- [Plugin](docs/Model/Plugin.md)
- [PluginSet](docs/Model/PluginSet.md)
- [PluginSetEntry](docs/Model/PluginSetEntry.md)
- [PluginTranslation](docs/Model/PluginTranslation.md)
- [PostingAccounts](docs/Model/PostingAccounts.md)
- [PostingKeyConfiguration](docs/Model/PostingKeyConfiguration.md)
- [Property](docs/Model/Property.md)
- [PropertyAmazon](docs/Model/PropertyAmazon.md)
- [PropertyAvailability](docs/Model/PropertyAvailability.md)
- [PropertyGroup](docs/Model/PropertyGroup.md)
- [PropertyGroupName](docs/Model/PropertyGroupName.md)
- [PropertyGroupOption](docs/Model/PropertyGroupOption.md)
- [PropertyMarket](docs/Model/PropertyMarket.md)
- [PropertyMarketReference](docs/Model/PropertyMarketReference.md)
- [PropertyName](docs/Model/PropertyName.md)
- [PropertyOption](docs/Model/PropertyOption.md)
- [PropertyRelation](docs/Model/PropertyRelation.md)
- [PropertyRelationMarkup](docs/Model/PropertyRelationMarkup.md)
- [PropertyRelationValue](docs/Model/PropertyRelationValue.md)
- [PropertySelection](docs/Model/PropertySelection.md)
- [Rack](docs/Model/Rack.md)
- [RawDataConfigs](docs/Model/RawDataConfigs.md)
- [RawDataSearchResult](docs/Model/RawDataSearchResult.md)
- [Recipient](docs/Model/Recipient.md)
- [RestAccountLoginPostRequest](docs/Model/RestAccountLoginPostRequest.md)
- [RestAccountingLocationsLocationIdPutRequest](docs/Model/RestAccountingLocationsLocationIdPutRequest.md)
- [RestAccountingLocationsPostRequest](docs/Model/RestAccountingLocationsPostRequest.md)
- [RestAccountingLocationsRevenueAccountConfigurationsGet200Response](docs/Model/RestAccountingLocationsRevenueAccountConfigurationsGet200Response.md)
- [RestAccountsAddressesAddressIdOptionsPostRequest](docs/Model/RestAccountsAddressesAddressIdOptionsPostRequest.md)
- [RestAccountsAddressesContactRelationsGet200Response](docs/Model/RestAccountsAddressesContactRelationsGet200Response.md)
- [RestAccountsAddressesContactRelationsPostRequest](docs/Model/RestAccountsAddressesContactRelationsPostRequest.md)
- [RestAccountsAddressesContactRelationsPutRequest](docs/Model/RestAccountsAddressesContactRelationsPutRequest.md)
- [RestAccountsAddressesOptionTypesPostRequest](docs/Model/RestAccountsAddressesOptionTypesPostRequest.md)
- [RestAccountsAddressesPosRelationsGet200Response](docs/Model/RestAccountsAddressesPosRelationsGet200Response.md)
- [RestAccountsAddressesPostRequest](docs/Model/RestAccountsAddressesPostRequest.md)
- [RestAccountsContactsBanksPostRequest](docs/Model/RestAccountsContactsBanksPostRequest.md)
- [RestAccountsContactsContactEventsGet200Response](docs/Model/RestAccountsContactsContactEventsGet200Response.md)
- [RestAccountsContactsContactEventsPostRequest](docs/Model/RestAccountsContactsContactEventsPostRequest.md)
- [RestAccountsContactsContactIdPutRequest](docs/Model/RestAccountsContactsContactIdPutRequest.md)
- [RestAccountsContactsDepartmentsPostRequest](docs/Model/RestAccountsContactsDepartmentsPostRequest.md)
- [RestAccountsContactsGet200Response](docs/Model/RestAccountsContactsGet200Response.md)
- [RestAccountsContactsPositionsPostRequest](docs/Model/RestAccountsContactsPositionsPostRequest.md)
- [RestAccountsContactsPostRequest](docs/Model/RestAccountsContactsPostRequest.md)
- [RestAccountsContactsSalesRepresentativeRegionsGet200Response](docs/Model/RestAccountsContactsSalesRepresentativeRegionsGet200Response.md)
- [RestAccountsPostRequest](docs/Model/RestAccountsPostRequest.md)
- [RestAvailabilitiesIdPutRequest](docs/Model/RestAvailabilitiesIdPutRequest.md)
- [RestBasketItemsPostRequest](docs/Model/RestBasketItemsPostRequest.md)
- [RestBatchGetRequest](docs/Model/RestBatchGetRequest.md)
- [RestBoardsBoardIdColumnsColumnIdPutRequest](docs/Model/RestBoardsBoardIdColumnsColumnIdPutRequest.md)
- [RestBoardsBoardIdColumnsColumnIdTasksPostRequest](docs/Model/RestBoardsBoardIdColumnsColumnIdTasksPostRequest.md)
- [RestBoardsBoardIdColumnsColumnIdTasksTaskIdPutRequest](docs/Model/RestBoardsBoardIdColumnsColumnIdTasksTaskIdPutRequest.md)
- [RestBoardsBoardIdColumnsPostRequest](docs/Model/RestBoardsBoardIdColumnsPostRequest.md)
- [RestBoardsBoardIdPutRequest](docs/Model/RestBoardsBoardIdPutRequest.md)
- [RestBoardsPostRequest](docs/Model/RestBoardsPostRequest.md)
- [RestCategoriesCategoryIdDocumentsGet200Response](docs/Model/RestCategoriesCategoryIdDocumentsGet200Response.md)
- [RestCategoriesCategoryIdDocumentsPostRequest](docs/Model/RestCategoriesCategoryIdDocumentsPostRequest.md)
- [RestCategoriesGet200Response](docs/Model/RestCategoriesGet200Response.md)
- [RestCategoriesIdDetailsDeleteRequest](docs/Model/RestCategoriesIdDetailsDeleteRequest.md)
- [RestCategoriesIdTemplatesGetRequest](docs/Model/RestCategoriesIdTemplatesGetRequest.md)
- [RestCategoriesIdTemplatesPutRequest](docs/Model/RestCategoriesIdTemplatesPutRequest.md)
- [RestCategoriesPostRequest](docs/Model/RestCategoriesPostRequest.md)
- [RestCategoriesPutRequest](docs/Model/RestCategoriesPutRequest.md)
- [RestCommentsPostRequest](docs/Model/RestCommentsPostRequest.md)
- [RestDeleteLogGet200Response](docs/Model/RestDeleteLogGet200Response.md)
- [RestExportsExportIdPutRequest](docs/Model/RestExportsExportIdPutRequest.md)
- [RestExportsGet200Response](docs/Model/RestExportsGet200Response.md)
- [RestExportsPostRequest](docs/Model/RestExportsPostRequest.md)
- [RestIoCustomerLoginPostRequest](docs/Model/RestIoCustomerLoginPostRequest.md)
- [RestItemsAttributeValuesValueIdNamesPostRequest](docs/Model/RestItemsAttributeValuesValueIdNamesPostRequest.md)
- [RestItemsAttributesAttributeIdNamesPostRequest](docs/Model/RestItemsAttributesAttributeIdNamesPostRequest.md)
- [RestItemsAttributesAttributeIdValueMarketNamesGet200Response](docs/Model/RestItemsAttributesAttributeIdValueMarketNamesGet200Response.md)
- [RestItemsAttributesAttributeIdValueMarketNamesPostRequest](docs/Model/RestItemsAttributesAttributeIdValueMarketNamesPostRequest.md)
- [RestItemsAttributesAttributeIdValuesGet200Response](docs/Model/RestItemsAttributesAttributeIdValuesGet200Response.md)
- [RestItemsAttributesAttributeIdValuesPostRequest](docs/Model/RestItemsAttributesAttributeIdValuesPostRequest.md)
- [RestItemsAttributesGet200Response](docs/Model/RestItemsAttributesGet200Response.md)
- [RestItemsAttributesMarketsMapsPostRequest](docs/Model/RestItemsAttributesMarketsMapsPostRequest.md)
- [RestItemsAttributesPostRequest](docs/Model/RestItemsAttributesPostRequest.md)
- [RestItemsAttributesValuesMarketsMapsPostRequest](docs/Model/RestItemsAttributesValuesMarketsMapsPostRequest.md)
- [RestItemsBarcodesGet200Response](docs/Model/RestItemsBarcodesGet200Response.md)
- [RestItemsBarcodesPostRequest](docs/Model/RestItemsBarcodesPostRequest.md)
- [RestItemsGet200Response](docs/Model/RestItemsGet200Response.md)
- [RestItemsIdImagesImageIdAttributeValueMarketsPostRequest](docs/Model/RestItemsIdImagesImageIdAttributeValueMarketsPostRequest.md)
- [RestItemsIdImagesImageIdAvailabilitiesPostRequest](docs/Model/RestItemsIdImagesImageIdAvailabilitiesPostRequest.md)
- [RestItemsIdImagesImageIdNamesPostRequest](docs/Model/RestItemsIdImagesImageIdNamesPostRequest.md)
- [RestItemsIdImagesImageIdPutRequest](docs/Model/RestItemsIdImagesImageIdPutRequest.md)
- [RestItemsIdImagesUploadPostRequest](docs/Model/RestItemsIdImagesUploadPostRequest.md)
- [RestItemsIdItemCrossSellingPostRequest](docs/Model/RestItemsIdItemCrossSellingPostRequest.md)
- [RestItemsIdVariationsVariationIdDescriptionsPostRequest](docs/Model/RestItemsIdVariationsVariationIdDescriptionsPostRequest.md)
- [RestItemsIdVariationsVariationIdMarketIdentNumbersPostRequest](docs/Model/RestItemsIdVariationsVariationIdMarketIdentNumbersPostRequest.md)
- [RestItemsIdVariationsVariationIdStockBookIncomingItemsPutRequest](docs/Model/RestItemsIdVariationsVariationIdStockBookIncomingItemsPutRequest.md)
- [RestItemsIdVariationsVariationIdStockBookOutgoingItemsPutRequest](docs/Model/RestItemsIdVariationsVariationIdStockBookOutgoingItemsPutRequest.md)
- [RestItemsIdVariationsVariationIdStockCorrectionPutRequest](docs/Model/RestItemsIdVariationsVariationIdStockCorrectionPutRequest.md)
- [RestItemsIdVariationsVariationIdStockMovementsGet200Response](docs/Model/RestItemsIdVariationsVariationIdStockMovementsGet200Response.md)
- [RestItemsIdVariationsVariationIdStockRedistributePut200Response](docs/Model/RestItemsIdVariationsVariationIdStockRedistributePut200Response.md)
- [RestItemsIdVariationsVariationIdStockRedistributePutRequest](docs/Model/RestItemsIdVariationsVariationIdStockRedistributePutRequest.md)
- [RestItemsIdVariationsVariationIdVariationAdditionalSkusGetRequest](docs/Model/RestItemsIdVariationsVariationIdVariationAdditionalSkusGetRequest.md)
- [RestItemsIdVariationsVariationIdVariationBarcodesPostRequest](docs/Model/RestItemsIdVariationsVariationIdVariationBarcodesPostRequest.md)
- [RestItemsIdVariationsVariationIdVariationBundlesPostRequest](docs/Model/RestItemsIdVariationsVariationIdVariationBundlesPostRequest.md)
- [RestItemsIdVariationsVariationIdVariationClientsPostRequest](docs/Model/RestItemsIdVariationsVariationIdVariationClientsPostRequest.md)
- [RestItemsIdVariationsVariationIdVariationImagesPostRequest](docs/Model/RestItemsIdVariationsVariationIdVariationImagesPostRequest.md)
- [RestItemsIdVariationsVariationIdVariationSkusPostRequest](docs/Model/RestItemsIdVariationsVariationIdVariationSkusPostRequest.md)
- [RestItemsItemIdPutRequest](docs/Model/RestItemsItemIdPutRequest.md)
- [RestItemsItemIdVariationsVariationIdPutRequest](docs/Model/RestItemsItemIdVariationsVariationIdPutRequest.md)
- [RestItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPostRequest](docs/Model/RestItemsItemIdVariationsVariationIdVariationPropertiesPropertyIdTextsPostRequest.md)
- [RestItemsManufacturersGet200Response](docs/Model/RestItemsManufacturersGet200Response.md)
- [RestItemsPostRequest](docs/Model/RestItemsPostRequest.md)
- [RestItemsPropertiesGet200Response](docs/Model/RestItemsPropertiesGet200Response.md)
- [RestItemsPropertiesIdMarketReferencesPostRequest](docs/Model/RestItemsPropertiesIdMarketReferencesPostRequest.md)
- [RestItemsPropertiesIdNamesPostRequest](docs/Model/RestItemsPropertiesIdNamesPostRequest.md)
- [RestItemsPropertiesPostRequest](docs/Model/RestItemsPropertiesPostRequest.md)
- [RestItemsPropertiesPropertyIdSelectionsPostRequest](docs/Model/RestItemsPropertiesPropertyIdSelectionsPostRequest.md)
- [RestItemsPropertyGroupsGet200Response](docs/Model/RestItemsPropertyGroupsGet200Response.md)
- [RestItemsPropertyGroupsIdNamesPostRequest](docs/Model/RestItemsPropertyGroupsIdNamesPostRequest.md)
- [RestItemsPropertyGroupsPostRequest](docs/Model/RestItemsPropertyGroupsPostRequest.md)
- [RestItemsPutRequest](docs/Model/RestItemsPutRequest.md)
- [RestItemsSalesPricesGet200Response](docs/Model/RestItemsSalesPricesGet200Response.md)
- [RestItemsSalesPricesIdAccountsPostRequest](docs/Model/RestItemsSalesPricesIdAccountsPostRequest.md)
- [RestItemsSalesPricesIdCountriesPostRequest](docs/Model/RestItemsSalesPricesIdCountriesPostRequest.md)
- [RestItemsSalesPricesIdCurrenciesPostRequest](docs/Model/RestItemsSalesPricesIdCurrenciesPostRequest.md)
- [RestItemsSalesPricesIdCustomerClassesPostRequest](docs/Model/RestItemsSalesPricesIdCustomerClassesPostRequest.md)
- [RestItemsSalesPricesIdNamesPostRequest](docs/Model/RestItemsSalesPricesIdNamesPostRequest.md)
- [RestItemsSalesPricesIdOnlineStoresPostRequest](docs/Model/RestItemsSalesPricesIdOnlineStoresPostRequest.md)
- [RestItemsSalesPricesIdReferrersPostRequest](docs/Model/RestItemsSalesPricesIdReferrersPostRequest.md)
- [RestItemsSalesPricesPostRequest](docs/Model/RestItemsSalesPricesPostRequest.md)
- [RestItemsUnitsGet200Response](docs/Model/RestItemsUnitsGet200Response.md)
- [RestItemsUnitsPostRequest](docs/Model/RestItemsUnitsPostRequest.md)
- [RestItemsVariationsGet200Response](docs/Model/RestItemsVariationsGet200Response.md)
- [RestItemsVariationsPutRequest](docs/Model/RestItemsVariationsPutRequest.md)
- [RestItemsVariationsVariationCategoriesPutRequest](docs/Model/RestItemsVariationsVariationCategoriesPutRequest.md)
- [RestItemsVariationsVariationMarketsGet200Response](docs/Model/RestItemsVariationsVariationMarketsGet200Response.md)
- [RestItemsVariationsVariationMarketsPostRequest](docs/Model/RestItemsVariationsVariationMarketsPostRequest.md)
- [RestItemsVariationsVariationPropertiesPutRequest](docs/Model/RestItemsVariationsVariationPropertiesPutRequest.md)
- [RestItemsVariationsVariationSalesPricesPutRequest](docs/Model/RestItemsVariationsVariationSalesPricesPutRequest.md)
- [RestLegalinformationPlentyIdLangTypePutRequest](docs/Model/RestLegalinformationPlentyIdLangTypePutRequest.md)
- [RestListingsGet200Response](docs/Model/RestListingsGet200Response.md)
- [RestListingsIdPutRequest](docs/Model/RestListingsIdPutRequest.md)
- [RestListingsLayoutTemplatesPostRequest](docs/Model/RestListingsLayoutTemplatesPostRequest.md)
- [RestListingsMarketsDirectoriesIdPutRequest](docs/Model/RestListingsMarketsDirectoriesIdPutRequest.md)
- [RestListingsMarketsDirectoriesPostRequest](docs/Model/RestListingsMarketsDirectoriesPostRequest.md)
- [RestListingsMarketsGet200Response](docs/Model/RestListingsMarketsGet200Response.md)
- [RestListingsMarketsHistoriesGet200Response](docs/Model/RestListingsMarketsHistoriesGet200Response.md)
- [RestListingsMarketsIdPutRequest](docs/Model/RestListingsMarketsIdPutRequest.md)
- [RestListingsMarketsInfosGet200Response](docs/Model/RestListingsMarketsInfosGet200Response.md)
- [RestListingsMarketsItemSpecificsFindGet200Response](docs/Model/RestListingsMarketsItemSpecificsFindGet200Response.md)
- [RestListingsMarketsItemSpecificsGetRequest](docs/Model/RestListingsMarketsItemSpecificsGetRequest.md)
- [RestListingsMarketsItemSpecificsIdPutRequest](docs/Model/RestListingsMarketsItemSpecificsIdPutRequest.md)
- [RestListingsMarketsPostRequest](docs/Model/RestListingsMarketsPostRequest.md)
- [RestListingsMarketsTextsGet200Response](docs/Model/RestListingsMarketsTextsGet200Response.md)
- [RestListingsMarketsTextsListingMarketIdLangPutRequest](docs/Model/RestListingsMarketsTextsListingMarketIdLangPutRequest.md)
- [RestListingsMarketsTextsPostRequest](docs/Model/RestListingsMarketsTextsPostRequest.md)
- [RestListingsOptionTemplatesIdPutRequest](docs/Model/RestListingsOptionTemplatesIdPutRequest.md)
- [RestListingsOptionTemplatesPostRequest](docs/Model/RestListingsOptionTemplatesPostRequest.md)
- [RestListingsPostRequest](docs/Model/RestListingsPostRequest.md)
- [RestListingsShippingProfilesGet200Response](docs/Model/RestListingsShippingProfilesGet200Response.md)
- [RestListingsStockDependenceTypesGet200Response](docs/Model/RestListingsStockDependenceTypesGet200Response.md)
- [RestListingsTypesGet200Response](docs/Model/RestListingsTypesGet200Response.md)
- [RestLoginPostRequest](docs/Model/RestLoginPostRequest.md)
- [RestLogsGet200Response](docs/Model/RestLogsGet200Response.md)
- [RestLogsPostRequest](docs/Model/RestLogsPostRequest.md)
- [RestMarketsCredentialsCredentialsIdPutRequest](docs/Model/RestMarketsCredentialsCredentialsIdPutRequest.md)
- [RestMarketsCredentialsGet200Response](docs/Model/RestMarketsCredentialsGet200Response.md)
- [RestMarketsCredentialsPostRequest](docs/Model/RestMarketsCredentialsPostRequest.md)
- [RestMarketsEbayPartsFitmentsPostRequest](docs/Model/RestMarketsEbayPartsFitmentsPostRequest.md)
- [RestMarketsEbayPartsFitmentsSearchGet200Response](docs/Model/RestMarketsEbayPartsFitmentsSearchGet200Response.md)
- [RestMessagesPostRequest](docs/Model/RestMessagesPostRequest.md)
- [RestMessagesUuid5ControlsPutRequest](docs/Model/RestMessagesUuid5ControlsPutRequest.md)
- [RestMessagesUuid5DonePutRequest](docs/Model/RestMessagesUuid5DonePutRequest.md)
- [RestNewslettersFoldersPostRequest](docs/Model/RestNewslettersFoldersPostRequest.md)
- [RestNewslettersPostRequest](docs/Model/RestNewslettersPostRequest.md)
- [RestNewslettersRecipientsPostRequest](docs/Model/RestNewslettersRecipientsPostRequest.md)
- [RestOrdersCouponsCampaignsCampaignIdCodesPostRequest](docs/Model/RestOrdersCouponsCampaignsCampaignIdCodesPostRequest.md)
- [RestOrdersCouponsCodesContactsContactIdGet200Response](docs/Model/RestOrdersCouponsCodesContactsContactIdGet200Response.md)
- [RestOrdersCouponsCodesPostRequest](docs/Model/RestOrdersCouponsCodesPostRequest.md)
- [RestOrdersGet200Response](docs/Model/RestOrdersGet200Response.md)
- [RestOrdersItemsDatesIdPutRequest](docs/Model/RestOrdersItemsDatesIdPutRequest.md)
- [RestOrdersItemsDatesPostRequest](docs/Model/RestOrdersItemsDatesPostRequest.md)
- [RestOrdersItemsOrderItemIdTransactionsPostRequest](docs/Model/RestOrdersItemsOrderItemIdTransactionsPostRequest.md)
- [RestOrdersItemsOutgoingStocksDeleteRequest](docs/Model/RestOrdersItemsOutgoingStocksDeleteRequest.md)
- [RestOrdersItemsPropertiesIdPutRequest](docs/Model/RestOrdersItemsPropertiesIdPutRequest.md)
- [RestOrdersItemsPropertiesPostRequest](docs/Model/RestOrdersItemsPropertiesPostRequest.md)
- [RestOrdersItemsTransactionsGet200Response](docs/Model/RestOrdersItemsTransactionsGet200Response.md)
- [RestOrdersItemsTransactionsTransactionIdPutRequest](docs/Model/RestOrdersItemsTransactionsTransactionIdPutRequest.md)
- [RestOrdersOrderIdCancelPutRequest](docs/Model/RestOrdersOrderIdCancelPutRequest.md)
- [RestOrdersOrderIdDocumentsTypePostRequest](docs/Model/RestOrdersOrderIdDocumentsTypePostRequest.md)
- [RestOrdersOrderIdItemsGet200Response](docs/Model/RestOrdersOrderIdItemsGet200Response.md)
- [RestOrdersOrderIdPropertiesPostRequest](docs/Model/RestOrdersOrderIdPropertiesPostRequest.md)
- [RestOrdersOrderIdPropertiesTypeIdDeleteRequest](docs/Model/RestOrdersOrderIdPropertiesTypeIdDeleteRequest.md)
- [RestOrdersOrderIdPutRequest](docs/Model/RestOrdersOrderIdPutRequest.md)
- [RestOrdersOrderIdShippingPackagesOrderShippingPackageIdPutRequest](docs/Model/RestOrdersOrderIdShippingPackagesOrderShippingPackageIdPutRequest.md)
- [RestOrdersOrderIdShippingPackagesPostRequest](docs/Model/RestOrdersOrderIdShippingPackagesPostRequest.md)
- [RestOrdersOrderIdTransactionsPostRequest](docs/Model/RestOrdersOrderIdTransactionsPostRequest.md)
- [RestOrdersPostRequest](docs/Model/RestOrdersPostRequest.md)
- [RestOrdersPropertiesIdPutRequest](docs/Model/RestOrdersPropertiesIdPutRequest.md)
- [RestOrdersPropertiesTypesPostRequest](docs/Model/RestOrdersPropertiesTypesPostRequest.md)
- [RestOrdersPropertiesTypesTypeIdPutRequest](docs/Model/RestOrdersPropertiesTypesTypeIdPutRequest.md)
- [RestOrdersShippingPalletsPalletIdDeleteRequest](docs/Model/RestOrdersShippingPalletsPalletIdDeleteRequest.md)
- [RestOrdersShippingPalletsPostRequest](docs/Model/RestOrdersShippingPalletsPostRequest.md)
- [RestOrdersShippingReturnsReturnsIdGet200Response](docs/Model/RestOrdersShippingReturnsReturnsIdGet200Response.md)
- [RestOrdersShippingReturnsReturnsServiceProvidersGet200Response](docs/Model/RestOrdersShippingReturnsReturnsServiceProvidersGet200Response.md)
- [RestOrdersShippingShippingServiceProvidersGet200Response](docs/Model/RestOrdersShippingShippingServiceProvidersGet200Response.md)
- [RestOrdersStatusHistoryGet200Response](docs/Model/RestOrdersStatusHistoryGet200Response.md)
- [RestOrdersStatusesGet200Response](docs/Model/RestOrdersStatusesGet200Response.md)
- [RestOrdersStatusesPostRequest](docs/Model/RestOrdersStatusesPostRequest.md)
- [RestOrdersStatusesStatusIdPutRequest](docs/Model/RestOrdersStatusesStatusIdPutRequest.md)
- [RestPartnerPortalPartnerPluginVisibilityPostRequest](docs/Model/RestPartnerPortalPartnerPluginVisibilityPostRequest.md)
- [RestPaymentPropertiesTypesNamesPutRequest](docs/Model/RestPaymentPropertiesTypesNamesPutRequest.md)
- [RestPaymentsMethodsPostRequest](docs/Model/RestPaymentsMethodsPostRequest.md)
- [RestPaymentsMethodsPutRequest](docs/Model/RestPaymentsMethodsPutRequest.md)
- [RestPaymentsPostRequest](docs/Model/RestPaymentsPostRequest.md)
- [RestPaymentsPropertiesPutRequest](docs/Model/RestPaymentsPropertiesPutRequest.md)
- [RestPaymentsPropertiesTypesPutRequest](docs/Model/RestPaymentsPropertiesTypesPutRequest.md)
- [RestPaymentsPutRequest](docs/Model/RestPaymentsPutRequest.md)
- [RestPimAttributesNamesGet200Response](docs/Model/RestPimAttributesNamesGet200Response.md)
- [RestPimAttributesValuesNamesGet200Response](docs/Model/RestPimAttributesValuesNamesGet200Response.md)
- [RestPimCategoriesBranchesGet200Response](docs/Model/RestPimCategoriesBranchesGet200Response.md)
- [RestPimCategoriesClientsGet200Response](docs/Model/RestPimCategoriesClientsGet200Response.md)
- [RestPimCategoriesDetailsGet200Response](docs/Model/RestPimCategoriesDetailsGet200Response.md)
- [RestPimCategoriesPropertiesGet200Response](docs/Model/RestPimCategoriesPropertiesGet200Response.md)
- [RestPluginSetsSetIdPluginsSearchGet200Response](docs/Model/RestPluginSetsSetIdPluginsSearchGet200Response.md)
- [RestPluginsPluginIdPutRequest](docs/Model/RestPluginsPluginIdPutRequest.md)
- [RestPluginsPostRequest](docs/Model/RestPluginsPostRequest.md)
- [RestPropertiesAmazonsPostRequest](docs/Model/RestPropertiesAmazonsPostRequest.md)
- [RestPropertiesAvailabilitiesPostRequest](docs/Model/RestPropertiesAvailabilitiesPostRequest.md)
- [RestPropertiesGroupsNamesPostRequest](docs/Model/RestPropertiesGroupsNamesPostRequest.md)
- [RestPropertiesGroupsOptionsPostRequest](docs/Model/RestPropertiesGroupsOptionsPostRequest.md)
- [RestPropertiesGroupsPostRequest](docs/Model/RestPropertiesGroupsPostRequest.md)
- [RestPropertiesMarketsPostRequest](docs/Model/RestPropertiesMarketsPostRequest.md)
- [RestPropertiesMarketsPropertiesMarketIdPutRequest](docs/Model/RestPropertiesMarketsPropertiesMarketIdPutRequest.md)
- [RestPropertiesNamesPostRequest](docs/Model/RestPropertiesNamesPostRequest.md)
- [RestPropertiesOptionsPostRequest](docs/Model/RestPropertiesOptionsPostRequest.md)
- [RestPropertiesPostRequest](docs/Model/RestPropertiesPostRequest.md)
- [RestPropertiesRelationsMarkupsPostRequest](docs/Model/RestPropertiesRelationsMarkupsPostRequest.md)
- [RestPropertiesRelationsPostRequest](docs/Model/RestPropertiesRelationsPostRequest.md)
- [RestPropertiesRelationsValuesPostRequest](docs/Model/RestPropertiesRelationsValuesPostRequest.md)
- [RestPropertiesSelectionsPostRequest](docs/Model/RestPropertiesSelectionsPostRequest.md)
- [RestRedistributionsPostRequest](docs/Model/RestRedistributionsPostRequest.md)
- [RestReordersPostRequest](docs/Model/RestReordersPostRequest.md)
- [RestShopBuilderContentLinksPostRequest](docs/Model/RestShopBuilderContentLinksPostRequest.md)
- [RestShopBuilderContentsPostRequest](docs/Model/RestShopBuilderContentsPostRequest.md)
- [RestStockmanagementStockGet200Response](docs/Model/RestStockmanagementStockGet200Response.md)
- [RestStockmanagementStockRedistributePutRequest](docs/Model/RestStockmanagementStockRedistributePutRequest.md)
- [RestStockmanagementWarehousesPostRequest](docs/Model/RestStockmanagementWarehousesPostRequest.md)
- [RestStockmanagementWarehousesWarehouseIdManagementRacksGet200Response](docs/Model/RestStockmanagementWarehousesWarehouseIdManagementRacksGet200Response.md)
- [RestStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesGet200Response](docs/Model/RestStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesGet200Response.md)
- [RestStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet200Response](docs/Model/RestStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet200Response.md)
- [RestStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPutRequest](docs/Model/RestStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPutRequest.md)
- [RestStockmanagementWarehousesWarehouseIdStockBookOutgoingItemsPutRequest](docs/Model/RestStockmanagementWarehousesWarehouseIdStockBookOutgoingItemsPutRequest.md)
- [RestStockmanagementWarehousesWarehouseIdStockCorrectionPutRequest](docs/Model/RestStockmanagementWarehousesWarehouseIdStockCorrectionPutRequest.md)
- [RestSystemSettingsTaricVatAssignmentGet200Response](docs/Model/RestSystemSettingsTaricVatAssignmentGet200Response.md)
- [RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdDeleteRequest](docs/Model/RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdDeleteRequest.md)
- [RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdPutRequest](docs/Model/RestSystemSettingsTaricVatAssignmentTaricCodeCountryIdPutRequest.md)
- [RestTagsPostRequest](docs/Model/RestTagsPostRequest.md)
- [RestTagsRelationshipsPostRequest](docs/Model/RestTagsRelationshipsPostRequest.md)
- [RestTicketsGet200Response](docs/Model/RestTicketsGet200Response.md)
- [RestTicketsPostRequest](docs/Model/RestTicketsPostRequest.md)
- [RestVatGet200Response](docs/Model/RestVatGet200Response.md)
- [RestVatPostRequest](docs/Model/RestVatPostRequest.md)
- [RestVatVatIdPutRequest](docs/Model/RestVatVatIdPutRequest.md)
- [RestWarehousesLocationsStockWarehouseLocationIdGet200Response](docs/Model/RestWarehousesLocationsStockWarehouseLocationIdGet200Response.md)
- [ReturnPolicy](docs/Model/ReturnPolicy.md)
- [ReturnsServiceProvider](docs/Model/ReturnsServiceProvider.md)
- [RevenueAccountCountryConfiguration](docs/Model/RevenueAccountCountryConfiguration.md)
- [RevenueAccountLocationConfiguration](docs/Model/RevenueAccountLocationConfiguration.md)
- [SalesPrice](docs/Model/SalesPrice.md)
- [SalesPriceAccount](docs/Model/SalesPriceAccount.md)
- [SalesPriceCountry](docs/Model/SalesPriceCountry.md)
- [SalesPriceCurrency](docs/Model/SalesPriceCurrency.md)
- [SalesPriceCustomerClass](docs/Model/SalesPriceCustomerClass.md)
- [SalesPriceName](docs/Model/SalesPriceName.md)
- [SalesPriceOnlineStore](docs/Model/SalesPriceOnlineStore.md)
- [SalesPriceReferrer](docs/Model/SalesPriceReferrer.md)
- [SalesRepresentativeRegion](docs/Model/SalesRepresentativeRegion.md)
- [Settings](docs/Model/Settings.md)
- [Shelf](docs/Model/Shelf.md)
- [ShippingInformation](docs/Model/ShippingInformation.md)
- [ShippingPackageType](docs/Model/ShippingPackageType.md)
- [ShippingProfile](docs/Model/ShippingProfile.md)
- [ShippingServiceProvider](docs/Model/ShippingServiceProvider.md)
- [Signing](docs/Model/Signing.md)
- [StatusHistoryEntry](docs/Model/StatusHistoryEntry.md)
- [Stock](docs/Model/Stock.md)
- [StockDependenceType](docs/Model/StockDependenceType.md)
- [StockStorageLocation](docs/Model/StockStorageLocation.md)
- [StorageLocation](docs/Model/StorageLocation.md)
- [StorageObject](docs/Model/StorageObject.md)
- [StorageObjectList](docs/Model/StorageObjectList.md)
- [Tag](docs/Model/Tag.md)
- [TagAvailability](docs/Model/TagAvailability.md)
- [TagName](docs/Model/TagName.md)
- [TagRelationship](docs/Model/TagRelationship.md)
- [TaricVatAssignment](docs/Model/TaricVatAssignment.md)
- [Ticket](docs/Model/Ticket.md)
- [TicketMessage](docs/Model/TicketMessage.md)
- [TicketOwner](docs/Model/TicketOwner.md)
- [TicketStatusName](docs/Model/TicketStatusName.md)
- [TicketTypeName](docs/Model/TicketTypeName.md)
- [TokenData](docs/Model/TokenData.md)
- [Unit](docs/Model/Unit.md)
- [UnitCombination](docs/Model/UnitCombination.md)
- [UnitName](docs/Model/UnitName.md)
- [User](docs/Model/User.md)
- [Variation](docs/Model/Variation.md)
- [VariationAdditionalSku](docs/Model/VariationAdditionalSku.md)
- [VariationBarcode](docs/Model/VariationBarcode.md)
- [VariationBundle](docs/Model/VariationBundle.md)
- [VariationCategory](docs/Model/VariationCategory.md)
- [VariationClient](docs/Model/VariationClient.md)
- [VariationDefaultCategory](docs/Model/VariationDefaultCategory.md)
- [VariationDescription](docs/Model/VariationDescription.md)
- [VariationImage](docs/Model/VariationImage.md)
- [VariationMarket](docs/Model/VariationMarket.md)
- [VariationMarketIdentNumber](docs/Model/VariationMarketIdentNumber.md)
- [VariationPropertyValue](docs/Model/VariationPropertyValue.md)
- [VariationPropertyValueText](docs/Model/VariationPropertyValueText.md)
- [VariationSalesPrice](docs/Model/VariationSalesPrice.md)
- [VariationSku](docs/Model/VariationSku.md)
- [VariationStock](docs/Model/VariationStock.md)
- [VariationStockCorrection](docs/Model/VariationStockCorrection.md)
- [VariationStockDischarge](docs/Model/VariationStockDischarge.md)
- [VariationStockIntake](docs/Model/VariationStockIntake.md)
- [VariationStockMovement](docs/Model/VariationStockMovement.md)
- [VariationStockRedistribution](docs/Model/VariationStockRedistribution.md)
- [VariationSupplier](docs/Model/VariationSupplier.md)
- [VariationWarehouse](docs/Model/VariationWarehouse.md)
- [Vat](docs/Model/Vat.md)
- [VatRate](docs/Model/VatRate.md)
- [Warehouse](docs/Model/Warehouse.md)
- [WarehouseLocation](docs/Model/WarehouseLocation.md)
- [WarehouseLocationDimension](docs/Model/WarehouseLocationDimension.md)
- [WarehouseLocationLevel](docs/Model/WarehouseLocationLevel.md)
- [Webstore](docs/Model/Webstore.md)
- [Wizard](docs/Model/Wizard.md)

## Authorization

### oAuth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://example.com/oauth/authorize`
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`

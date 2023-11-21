# # RestTicketsPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type_id** | **int** | The type ID of the ticket |
**priority_id** | **int** | The priority ID of the ticket optional | [optional]
**parent_ticket_id** | **int** | The ID of the parent ticket optional | [optional]
**status_id** | **int** | The status ID of the ticket |
**confidential** | **object[]** |  | [optional]
**contact_id** | **int** | The ID of the contact that is linked with the ticket optional | [optional]
**contact_last_update_at** | **string** | The time the contact was last updated optional | [optional]
**deadline_at** | **string** | The date of the ticket deadline optional | [optional]
**title** | **string** | The title of the ticket |
**plenty_id** | **int** | The ID of the client (store) |
**source** | **object[]** |  |
**documents_count** | **int** | The number of documents that are attached to the ticket optional | [optional]
**order_id** | **int** | The ID of the order linked with the ticket optional | [optional]
**has_documents** | **int** | Displays 1 if the ticket has one or more documents. Displays 0 if the ticket has no document. optional | [optional]
**resubmission_at** | **string** | The date the ticket should be resubmitted optional | [optional]
**owners** | [**\ck/plenty-client\Model\TicketOwner[]**](TicketOwner.md) |  |
**user_id** | **int** | The user ID of the owner |
**role_id** | **int** | The role ID of the owner |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

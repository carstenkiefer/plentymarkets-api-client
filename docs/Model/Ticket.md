# # Ticket

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the ticket | [optional]
**type_id** | **int** | The type ID of the ticket | [optional]
**priority_id** | **int** | The priority ID of the ticket | [optional]
**parent_ticket_id** | **int** | The ID of the parent ticket | [optional]
**status_id** | **int** | The status ID of the ticket | [optional]
**confidential** | **object[]** | The confidential value. Displays 1 if the ticket is confidential. Displays 0 if the ticket is not confidential. | [optional]
**contact_id** | **int** | The ID of the contact that is linked with the ticket | [optional]
**order_id** | **int** | The ID of the order linked with the ticket | [optional]
**created_at** | **string** | The time the ticket was created as unix timestamp or carbon object | [optional]
**updated_at** | **string** | The time the ticket was last updated as unix timestamp or carbon object | [optional]
**contact_last_update_at** | **string** | The time the contact was last updated | [optional]
**deadline_at** | **string** | The date of the ticket deadline | [optional]
**finished_at** | **string** | The date the ticket is solved and displays 100 percent in the progress bar | [optional]
**title** | **string** | The title of the ticket | [optional]
**progress** | **int** | The progress of the ticket in percent | [optional]
**plenty_id** | **int** | The ID of the client (store) | [optional]
**source** | **object[]** | The source of the ticket. Possible values are &#39;frontend&#39;, &#39;backend&#39;, &#39;ebay&#39; and &#39;email&#39;. | [optional]
**documents_count** | **int** | The number of documents that are attached to the ticket | [optional]
**has_documents** | **int** | Displays 1 if the ticket has one or more documents. Displays 0 if the ticket has no document. | [optional]
**children_count** | **int** | The number of child tickets | [optional]
**resubmission_at** | **string** | The date the ticket should be resubmitted | [optional]
**parse_data** | **string** | The ParseData from the ticket | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

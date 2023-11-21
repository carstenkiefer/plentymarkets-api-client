# # ContactEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **int** | The ID of the event | [optional]
**contact_id** | **int** | The ID of the contact this event belongs to | [optional]
**user_id** | **int** | The ID of the user this event belongs to | [optional]
**event_duration** | **int** | The duration of the event in seconds | [optional]
**event_type** | **string** | The type of the event. Possible values are call, ticket, email, meeting, webinar, development and design. | [optional]
**order_row_id** | **int** |  | [optional]
**event_info** | **string** | Informational text about the event | [optional]
**billable** | **bool** | Billable if set to 1 | [optional]
**event_inserted_at** | **string** | The date the event was created at as unix timestamp | [optional]
**event_billed_at** | **string** | The date the event was billed at as unix timestamp | [optional]
**event_provision_paid_at** | **string** | The date the provision was paid at as unix timestamp | [optional]
**event_credit_value** | **float** | The credit value of the event | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

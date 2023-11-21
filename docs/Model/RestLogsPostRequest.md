# # RestLogsPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**integration** | **string** | The integration key used for the log entry. Used as a first level allocation. |
**identifier** | **string** | The identifier used for the log entry. Used as a second level allocation. |
**code** | **string** | The code for this current log entry. For log entries with level \&quot;debug\&quot;, \&quot;info\&quot;, \&quot;notice\&quot;, \&quot;warning\&quot; and \&quot;report\&quot; this needs to have an translation in order to be stored. |
**level** | **string** | The level this current log entry belongs to. Notice! When storing log entries with level \&quot;report\&quot; the entries will actually be stored as level \&quot;info\&quot;. The difference between \&quot;report\&quot; and \&quot;info\&quot; is that log entries with level \&quot;report\&quot; do not need prior activation.  allowed values are report, debug, info, notice, warning, error, critical, alert, emergency |
**reference_type** | **string** | Deprecated field, see the references field instead. optional | [optional]
**reference_value** | **string** | Deprecated field, see the references field instead. optional | [optional]
**references** | **object[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # Log

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the log entry | [optional]
**created_at** | **string** | The date when the log entry was created | [optional]
**integration** | **string** | The integration key used for the log entry. Used as a first level allocation. | [optional]
**identifier** | **string** | The identifier used for the log entry. Used as a second level allocation. | [optional]
**code** | **string** | The code for this current log entry. For log entries with level \&quot;debug\&quot;, \&quot;info\&quot;, \&quot;notice\&quot;, \&quot;warning\&quot; and \&quot;report\&quot; this needs to have an translation in order to be stored. | [optional]
**reference_type** | **string** | Deprecated field, see the &lt;code&gt;references&lt;/code&gt; field instead. | [optional]
**reference_value** | **string** | Deprecated field, see the &lt;code&gt;references&lt;/code&gt; field instead. | [optional]
**level** | **string** | The level this current log entry belongs to. Notice! When storing log entries with level \&quot;report\&quot; the entries will actually be stored as level \&quot;info\&quot;. The difference between \&quot;report\&quot; and \&quot;info\&quot; is that log entries with level \&quot;report\&quot; do not need prior activation. | [optional]
**additional_info** | **string** | Additional information that need to also be stored. Can be an int, string or object. | [optional]
**caller_function** | **string** |  | [optional]
**caller_line** | **int** |  | [optional]
**references** | **object[]** | All the reference types and values correlated with this log entry. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

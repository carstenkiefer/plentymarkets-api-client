# # TicketMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the message | [optional]
**ticket_id** | **int** | The ticket ID the message belongs to | [optional]
**user_id** | **int** | The user of the message | [optional]
**created_at** | **string** | The time the ticket message was created as unix timestamp or carbon object | [optional]
**text** | **string** | The content of the message | [optional]
**type** | **object[]** | The type of the message. Two types are available: &lt;ul&gt; &lt;li&gt;message (visible for the customer)&lt;/li&gt; &lt;li&gt;comment (not visible for the customer)&lt;/li&gt; &lt;/ul&gt; | [optional]
**source** | **object[]** | The origin of the message. The following sources are available by default and cannot be deleted. &lt;ul&gt; &lt;li&gt;backend&lt;/li&gt; &lt;li&gt;frontend&lt;/li&gt; &lt;li&gt;ebay&lt;/li&gt; &lt;li&gt;email&lt;/li&gt; &lt;/ul&gt; | [optional]
**topic_id** | **int** | The ID of the topic the message is assigned to | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

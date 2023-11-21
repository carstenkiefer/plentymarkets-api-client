# # ContactOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the contact option | [optional]
**contact_id** | **int** | The ID of the contact the option belongs to | [optional]
**type_id** | **int** | The type ID of the contact option. It is possible to define individual contact option types. The following types are available by default and cannot be deleted: &lt;ul&gt; &lt;li&gt;1 &#x3D; Telephone&lt;/li&gt; &lt;li&gt;2 &#x3D; Email&lt;/li&gt; &lt;li&gt;3 &#x3D; Telefax&lt;/li&gt; &lt;li&gt;4 &#x3D; Web page&lt;/li&gt; &lt;li&gt;5 &#x3D; Marketplace&lt;/li&gt; &lt;li&gt;6 &#x3D; Identification number&lt;/li&gt; &lt;li&gt;7 &#x3D; Payment&lt;/li&gt; &lt;li&gt;8 &#x3D; User name&lt;/li&gt; &lt;li&gt;9 &#x3D; Group&lt;/li&gt; &lt;li&gt;10 &#x3D; Access&lt;/li&gt; &lt;li&gt;11 &#x3D; Additional&lt;/li&gt; &lt;/ul&gt; | [optional]
**sub_type_id** | **int** | The sub-type ID of the contact option. It is possible to define individual contact option sub-types. The following types are available by default and cannot be deleted: &lt;ul&gt; &lt;li&gt;1 &#x3D; Work&lt;/li&gt; &lt;li&gt;2 &#x3D; Mobile private&lt;/li&gt; &lt;li&gt;3 &#x3D; Mobile work&lt;/li&gt; &lt;li&gt;4 &#x3D; Private&lt;/li&gt; &lt;li&gt;5 &#x3D; PayPal&lt;/li&gt; &lt;li&gt;6 &#x3D; Ebay&lt;/li&gt; &lt;li&gt;7 &#x3D; Amazon&lt;/li&gt; &lt;li&gt;8 &#x3D; Klarna&lt;/li&gt; &lt;li&gt;9 &#x3D; DHL&lt;/li&gt; &lt;li&gt;10 &#x3D; Forum&lt;/li&gt; &lt;li&gt;11 &#x3D; Guest&lt;/li&gt; &lt;li&gt;12 &#x3D; Contact person&lt;/li&gt; &lt;li&gt;13 &#x3D; Marketplace partner&lt;/li&gt; &lt;/ul&gt; | [optional]
**value** | **string** | The value of the option. Depends on the type/sub-type. | [optional]
**priority** | **int** | The priority for sorting | [optional]
**created_at** | **string** | The time the option was created as unix timestamp | [optional]
**updated_at** | **string** | The time the option was last updated as unix timestamp | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

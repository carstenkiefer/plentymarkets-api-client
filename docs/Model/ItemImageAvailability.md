# # ItemImageAvailability

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image_id** | **int** | The ID of the image. The ID must be unique. | [optional]
**type** | **string** | The type of referrer for which the image is available. Possible types: &lt;ul&gt;&lt;li&gt;mandant &#x3D; The image can be made available for clients (stores).&lt;/li&gt;&lt;li&gt;marketplace &#x3D; The image can be made available for markets.&lt;/li&gt;&lt;li&gt;listing &#x3D; The image can be made available for listings.&lt;/li&gt;&lt;/ul&gt; | [optional]
**value** | **float** | For the type &lt;b&gt;mandant&lt;/b&gt;, this is the plentyID of the client (store) for which the image is available. For the types &lt;b&gt;marketplace&lt;/b&gt; and &lt;b&gt;listing&lt;/b&gt;, this is the ID of the referrer for which the image is available. &lt;ul&gt;&lt;li&gt;&lt;strong&gt;-1.00&lt;/strong&gt; &#x3D; The image is available for all referrers of this type.&lt;/li&gt;&lt;/ul&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

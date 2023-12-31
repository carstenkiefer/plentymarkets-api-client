# # CategoryDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **int** | The unique ID of the category these category details belong to | [optional]
**plenty_id** | **int** | The unique plenty ID of the client (store) in which the category is visible. If a subcategory is linked to a client, its parent categories will be linked to this client as well. | [optional]
**lang** | **string** | The &lt;a href&#x3D;\&quot;https://developers.plentymarkets.com/rest-doc/introduction#languages\&quot; target&#x3D;\&quot;_blank\&quot;&gt;language&lt;/a&gt; of the category | [optional]
**name** | **string** | The name of the category. The same category name can be used more than once in different categories or on different category levels. However, category names must be unique within the same category or level. | [optional]
**description** | **string** | The category text. The description is inserted into the online store using template variables. | [optional]
**description2** | **string** | The category text 2. The description 2 is inserted into the online store using template variables. | [optional]
**short_description** | **string** | The short description of the category. The short description can be inserted into the store&#39;s design using template variables. | [optional]
**meta_keywords** | **string** | HTML meta keywords to tag the category for search engines. More than one keyword can be separated by commas. | [optional]
**meta_description** | **string** | The meta description of the category. This description is analysed by search engines and displayed in search results. This text should be treated as an advertising text to maximise click-through from search engine result pages. Current recommended limit is 156 characters. | [optional]
**name_url** | **string** | The category name to be used for the category&#39;s URL. The same URL name can be used more than once in different categories or on different category levels. However, URL names must be unique within the same category or level. The URL name should not be changed once the category is indexed by search engines. If no URL name is specified, the name will automatically be used as the URL name when the category is created.&lt;br /&gt;Important: Name should contain ASCII code only and no special characters. The following character strings may not be used as prefixes to URL names: a-, b-, c-, f-, fa-, p-, t-. These prefixes will be removed automatically. For instance, a-class will be changed to class automatically. However, the URL name aclass can be used for a category named A-class. | [optional]
**meta_title** | **string** | This will be displayed as the title of a tab in the web browser and as a search result in search engines. If this is left blank, the category name will be used as the title. Current recommended limit is 50 characters. Longer titles will be cut off. | [optional]
**image** | **string** | The ID to the image1 of the category. | [optional]
**image2** | **string** | The ID to the image2 of the category. | [optional]
**image_path** | **string** | The path to the image1 of the category. | [optional]
**image2_path** | **string** | The path to the image2 of the category. | [optional]
**preview_url** | **string** | The category&#39;s URL. | [optional]
**position** | **int** | The position of the category within a category level. | [optional]
**item_list_view** | **string** | The template the category is linked to for the category overview. The template determines what the category overview will look like for this category. This option is available for categories of the type &lt;strong&gt;Item&lt;/strong&gt; only. Possible values: ItemViewCategoriesList, ItemViewCategoriesList2 to ItemViewCategoriesList10. | [optional]
**single_item_view** | **string** | The template the category is linked to for the single item view. The template determines the appearance of the single item design for this category. This option is available for categories of the type &lt;strong&gt;Item&lt;/strong&gt; only. Possible values: ItemViewSingleItem, ItemViewSingleItem2 to ItemViewSingleItem5. | [optional]
**page_view** | **string** |  | [optional]
**fulltext** | **bool** | Flag that indicates if the complete category text, i.e. the complete description, will be searched.&lt;ul&gt;&lt;li&gt;Y &#x3D; Complete text will be searched.&lt;/li&gt;&lt;li&gt;N &#x3D; Text will not be searched completely.&lt;/li&gt;&lt;/ul&gt; | [optional]
**meta_robots** | **string** | Values from the meta element Robots are analyzed by Web crawlers. These values tell the crawler what it should do with the page and with the links on the page.&lt;ul&gt;&lt;li&gt;all &#x3D; Include this category in the search engine index and follow the links on the page.&lt;/li&gt;&lt;li&gt;index &#x3D; Include in the search engine index.&lt;/li&gt;&lt;li&gt;nofollow &#x3D; Do not follow the links on the page.&lt;/li&gt;&lt;li&gt;noindex &#x3D; Do not include in the search engine index.&lt;/li&gt;&lt;li&gt;nofollow, noindex &#x3D; Do not follow the links and do not include the category in the search engine index.&lt;/li&gt;&lt;/ul&gt; | [optional]
**canonical_link** | **string** | The URL of any category that contains the same content. This will avoid duplicate content. | [optional]
**updated_at** | **string** | The time the category details were last updated | [optional]
**updated_by** | **string** | The user who last updated the category details | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

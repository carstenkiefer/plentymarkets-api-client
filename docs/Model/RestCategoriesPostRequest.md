# # RestCategoriesPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID of the category optional | [optional]
**parent_category_id** | **int** | The ID of the category&#39;s parent category. Value is null if category level is 1. optional | [optional]
**type** | **string** | The category type of the category  allowed values are blog, container, item, content |
**linklist** | **string** | Flag that indicates if the category will be displayed in the online store&#39;s navigation. optional allowed values are Y, N | [optional]
**right** | **string** | Flag that indicates who can see this category. all &#x3D; Category is visible to all visitors of the online store.customer &#x3D; Category and all of its subcategories are visible to visitors of the online store that have logged in only. Visitors that are not logged in are redirected to the login page. optional allowed values are all, customer | [optional]
**sitemap** | **string** | Flag that indicates if the category will be included in the sitemap. optional allowed values are Y, N | [optional]
**details** | [**\ck\Model\CategoryDetails[]**](CategoryDetails.md) |  |
**plenty_id** | **int** | The unique plenty ID of the client (store) |
**name** | **string** | The name of the category. The same category name can be used more than once in different categories or on different category levels. However, category names must be unique within the same category or level. |
**lang** | **string** | The language of the category  allowed values are LANG, de, en, bg, fr, it, es, tr, nl, pl, pt, nn, ro, da, se, cz, ru, sk, cn, vn |
**description** | **string** | The category text. The description is inserted into the online store using template variables. optional | [optional]
**description2** | **string** | The category text 2. The description 2 is inserted into the online store using template variables. optional | [optional]
**short_description** | **string** | The short description of the category. The short description can be inserted into the store&#39;s design using template variables. optional | [optional]
**meta_description** | **string** | The meta description of the category. This description is analysed by search engines and displayed in search results. This text should be treated as an advertising text to maximise click-through from search engine result pages. Current recommended limit is 156 characters. optional | [optional]
**name_url** | **string** | The category name to be used for the category&#39;s URL. The same URL name can be used more than once in different categories or on different category levels. However, URL names must be unique within the same category or level. The URL name should not be changed once the category is indexed by search engines. If no URL name is specified, the name will automatically be used as the URL name when the category is created.Important: Name should contain ASCII code only and no special characters. The following character strings may not be used as prefixes to URL names: a-, b-, c-, f-, fa-, p-, t-. These prefixes will be removed automatically. For instance, a-class will be changed to class automatically. However, the URL name aclass can be used for a category named A-class. optional | [optional]
**image** | **string** | The ID to the image1 of the category. optional | [optional]
**image2** | **string** | The ID to the image2 of the category. optional | [optional]
**position** | **int** | The position of the category within a category level. optional | [optional]
**item_list_view** | **string** | The template the category is linked to for the category overview. The template determines what the category overview will look like for this category. This option is available for categories of the type Item only. Possible values: ItemViewCategoriesList, ItemViewCategoriesList2 to ItemViewCategoriesList10. optional allowed values are ItemViewCategoriesList, ItemViewCategoriesList2, ItemViewCategoriesList3, ItemViewCategoriesList4, ItemViewCategoriesList5, ItemViewCategoriesList6, ItemViewCategoriesList7, ItemViewCategoriesList8, ItemViewCategoriesList9, ItemViewCategoriesList10 | [optional]
**single_item_view** | **string** | The template the category is linked to for the single item view. The template determines the appearance of the single item design for this category. This option is available for categories of the type Item only. Possible values: ItemViewSingleItem, ItemViewSingleItem2 to ItemViewSingleItem5. optional allowed values are ItemViewSingleItem, ItemViewSingleItem2, ItemViewSingleItem3, ItemViewSingleItem4, ItemViewSingleItem5 | [optional]
**page_view** | **string** | optional allowed values are PageDesignContent, PageDesignCheckout, PageDesignCustom, PageDesignCustom2, PageDesignCustom3 | [optional]
**fulltext** | **bool** | Flag that indicates if the complete category text, i.e. the complete description, will be searched.Y &#x3D; Complete text will be searched.N &#x3D; Text will not be searched completely. optional allowed values are Y, N | [optional]
**meta_robots** | **string** | Values from the meta element Robots are analyzed by Web crawlers. These values tell the crawler what it should do with the page and with the links on the page.all &#x3D; Include this category in the search engine index and follow the links on the page.index &#x3D; Include in the search engine index.nofollow &#x3D; Do not follow the links on the page.noindex &#x3D; Do not include in the search engine index.nofollow, noindex &#x3D; Do not follow the links and do not include the category in the search engine index. optional allowed values are ALL, INDEX, NOFOLLOW, NOINDEX, NOINDEX_NOFOLLOW | [optional]
**clients** | [**\ck\Model\CategoryClient[]**](CategoryClient.md) |  | [optional]
**elmar_categories** | [**\ck\Model\CategoryProperty[]**](CategoryProperty.md) |  | [optional]
**category_id** | **int** | The unique ID of the category optional | [optional]
**market_id** | **float** | The unique ID of the referrer optional | [optional]
**value** | **string** | The category of the referrer |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

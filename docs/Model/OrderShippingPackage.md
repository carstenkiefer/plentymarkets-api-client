# # OrderShippingPackage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the order shipping package | [optional]
**order_id** | **int** | The ID of the order | [optional]
**package_id** | **int** | The ID of the package | [optional]
**weight** | **int** | The weight of the package in grams | [optional]
**package_number** | **string** | The package number | [optional]
**label_path** | **string** | The path to the label | [optional]
**label_base64** | **string** | The base64 encoded label | [optional]
**export_label_base64** | **string** | The base64 encoded export label | [optional]
**return_package_number** | **string** | The return package number | [optional]
**package_type** | **int** | The type of the package. The following types are valid: &lt;ul&gt; &lt;li&gt;0: unpacked&lt;/li&gt; &lt;li&gt;1: Bale&lt;/li&gt; &lt;li&gt;2: Dispenser&lt;/li&gt; &lt;li&gt;3: Coil&lt;/li&gt; &lt;li&gt;4: Roll pallet&lt;/li&gt; &lt;li&gt;5: Colli&lt;/li&gt; &lt;li&gt;6: Container&lt;/li&gt; &lt;li&gt;7: Bucket&lt;/li&gt; &lt;li&gt;8: Cask&lt;/li&gt; &lt;li&gt;9: Bottles&lt;/li&gt; &lt;li&gt;10: European flat pallet&lt;/li&gt; &lt;li&gt;11: Structural frame&lt;/li&gt; &lt;li&gt;12: Gas cylinder&lt;/li&gt; &lt;li&gt;13: Pallet cage&lt;/li&gt; &lt;li&gt;14: Hobbock&lt;/li&gt; &lt;li&gt;15: Half pallet&lt;/li&gt; &lt;li&gt;16: Pallet of food items&lt;/li&gt; &lt;li&gt;17: Wooden coaster&lt;/li&gt; &lt;li&gt;18: IBC container&lt;/li&gt; &lt;li&gt;19: Pitcher&lt;/li&gt; &lt;li&gt;20: Wicker bottle&lt;/li&gt; &lt;li&gt;21: Case&lt;/li&gt; &lt;li&gt;22: Canister&lt;/li&gt; &lt;li&gt;23: Customer pallet&lt;/li&gt; &lt;li&gt;24: Cardboard box&lt;/li&gt; &lt;li&gt;25: Composite packaging&lt;/li&gt; &lt;li&gt;26: Package&lt;/li&gt; &lt;li&gt;27: Ring&lt;/li&gt; &lt;li&gt;28: Role&lt;/li&gt; &lt;li&gt;29: Sack&lt;/li&gt; &lt;li&gt;30: units&lt;/li&gt; &lt;li&gt;31: Tank&lt;/li&gt; &lt;li&gt;32: Drum&lt;/li&gt; &lt;li&gt;34: Crate&lt;/li&gt; &lt;li&gt;35: Quarter pallet&lt;/li&gt; &lt;li&gt;36: Other pallets&lt;/li&gt; &lt;li&gt;37: Bin&lt;/li&gt; &lt;li&gt;38: One-way pallet&lt;/li&gt; &lt;li&gt;39: Foil bag&lt;/li&gt; &lt;/ul&gt; | [optional]
**volume** | **float** | The volume of the package | [optional]
**pallet_id** | **int** | The id of the pallet of which the package belong to | [optional]
**is_closed** | **bool** | Flag to say if the package is editable or not | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

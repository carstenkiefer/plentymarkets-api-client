<?php
/**
 * RestItemsAttributesPostRequest
 *
 * PHP version 8.1
 *
 * @package  ck
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * plentymarkets REST-API
 *
 * The plentymarkets REST API expands the functionality of the plentymarkets CMS and allows access to resources, i.e. data records, via unique URI paths
 *
 * The version of the OpenAPI document: 1.0.0
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ck\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use ck\ObjectSerializer;

/**
 * RestItemsAttributesPostRequest Class Doc Comment
 *
 * @package  ck
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RestItemsAttributesPostRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = '_rest_items_attributes_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'backend_name' => 'string',
        'position' => 'int',
        'is_surcharge_percental' => 'bool',
        'is_linkable_to_image' => 'bool',
        'amazon_attribute' => 'string',
        'fruugo_attribute' => 'string',
        'pixmania_attribute' => 'int',
        'otto_attribute' => 'string',
        'google_shopping_attribute' => 'string',
        'neckermann_at_ep_attribute' => 'int',
        'type_of_selection_in_online_store' => 'string',
        'la_redoute_attribute' => 'int',
        'is_groupable' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'backend_name' => null,
        'position' => null,
        'is_surcharge_percental' => null,
        'is_linkable_to_image' => null,
        'amazon_attribute' => null,
        'fruugo_attribute' => null,
        'pixmania_attribute' => null,
        'otto_attribute' => null,
        'google_shopping_attribute' => null,
        'neckermann_at_ep_attribute' => null,
        'type_of_selection_in_online_store' => null,
        'la_redoute_attribute' => null,
        'is_groupable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'backend_name' => false,
		'position' => false,
		'is_surcharge_percental' => false,
		'is_linkable_to_image' => false,
		'amazon_attribute' => false,
		'fruugo_attribute' => false,
		'pixmania_attribute' => false,
		'otto_attribute' => false,
		'google_shopping_attribute' => false,
		'neckermann_at_ep_attribute' => false,
		'type_of_selection_in_online_store' => false,
		'la_redoute_attribute' => false,
		'is_groupable' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'backend_name' => 'backendName',
        'position' => 'position',
        'is_surcharge_percental' => 'isSurchargePercental',
        'is_linkable_to_image' => 'isLinkableToImage',
        'amazon_attribute' => 'amazonAttribute',
        'fruugo_attribute' => 'fruugoAttribute',
        'pixmania_attribute' => 'pixmaniaAttribute',
        'otto_attribute' => 'ottoAttribute',
        'google_shopping_attribute' => 'googleShoppingAttribute',
        'neckermann_at_ep_attribute' => 'neckermannAtEpAttribute',
        'type_of_selection_in_online_store' => 'typeOfSelectionInOnlineStore',
        'la_redoute_attribute' => 'laRedouteAttribute',
        'is_groupable' => 'isGroupable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'backend_name' => 'setBackendName',
        'position' => 'setPosition',
        'is_surcharge_percental' => 'setIsSurchargePercental',
        'is_linkable_to_image' => 'setIsLinkableToImage',
        'amazon_attribute' => 'setAmazonAttribute',
        'fruugo_attribute' => 'setFruugoAttribute',
        'pixmania_attribute' => 'setPixmaniaAttribute',
        'otto_attribute' => 'setOttoAttribute',
        'google_shopping_attribute' => 'setGoogleShoppingAttribute',
        'neckermann_at_ep_attribute' => 'setNeckermannAtEpAttribute',
        'type_of_selection_in_online_store' => 'setTypeOfSelectionInOnlineStore',
        'la_redoute_attribute' => 'setLaRedouteAttribute',
        'is_groupable' => 'setIsGroupable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'backend_name' => 'getBackendName',
        'position' => 'getPosition',
        'is_surcharge_percental' => 'getIsSurchargePercental',
        'is_linkable_to_image' => 'getIsLinkableToImage',
        'amazon_attribute' => 'getAmazonAttribute',
        'fruugo_attribute' => 'getFruugoAttribute',
        'pixmania_attribute' => 'getPixmaniaAttribute',
        'otto_attribute' => 'getOttoAttribute',
        'google_shopping_attribute' => 'getGoogleShoppingAttribute',
        'neckermann_at_ep_attribute' => 'getNeckermannAtEpAttribute',
        'type_of_selection_in_online_store' => 'getTypeOfSelectionInOnlineStore',
        'la_redoute_attribute' => 'getLaRedouteAttribute',
        'is_groupable' => 'getIsGroupable'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('backend_name', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('is_surcharge_percental', $data ?? [], null);
        $this->setIfExists('is_linkable_to_image', $data ?? [], null);
        $this->setIfExists('amazon_attribute', $data ?? [], null);
        $this->setIfExists('fruugo_attribute', $data ?? [], null);
        $this->setIfExists('pixmania_attribute', $data ?? [], null);
        $this->setIfExists('otto_attribute', $data ?? [], null);
        $this->setIfExists('google_shopping_attribute', $data ?? [], null);
        $this->setIfExists('neckermann_at_ep_attribute', $data ?? [], null);
        $this->setIfExists('type_of_selection_in_online_store', $data ?? [], null);
        $this->setIfExists('la_redoute_attribute', $data ?? [], null);
        $this->setIfExists('is_groupable', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets backend_name
     *
     * @return string|null
     */
    public function getBackendName(): ?string
    {
        return $this->container['backend_name'];
    }

    /**
     * Sets backend_name
     *
     * @param string|null $backend_name The back end name of the attribute. The name must be unique and must not contain commas, colons, semicolons or quotation marks. It is not visible in the plentymarkets front end. optional
     *
     * @return $this
     */
    public function setBackendName(?string $backend_name): static
    {
        if (is_null($backend_name)) {
            throw new InvalidArgumentException('non-nullable backend_name cannot be null');
        }
        $this->container['backend_name'] = $backend_name;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int|null $position The position of the attribute. Attributes are displayed in the attribute overview in ascending order by position. optional
     *
     * @return $this
     */
    public function setPosition(?int $position): static
    {
        if (is_null($position)) {
            throw new InvalidArgumentException('non-nullable position cannot be null');
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets is_surcharge_percental
     *
     * @return bool|null
     */
    public function getIsSurchargePercental(): ?bool
    {
        return $this->container['is_surcharge_percental'];
    }

    /**
     * Sets is_surcharge_percental
     *
     * @param bool|null $is_surcharge_percental Flag that indicates if the surcharge is percental. optional
     *
     * @return $this
     */
    public function setIsSurchargePercental(?bool $is_surcharge_percental): static
    {
        if (is_null($is_surcharge_percental)) {
            throw new InvalidArgumentException('non-nullable is_surcharge_percental cannot be null');
        }
        $this->container['is_surcharge_percental'] = $is_surcharge_percental;

        return $this;
    }

    /**
     * Gets is_linkable_to_image
     *
     * @return bool|null
     */
    public function getIsLinkableToImage(): ?bool
    {
        return $this->container['is_linkable_to_image'];
    }

    /**
     * Sets is_linkable_to_image
     *
     * @param bool|null $is_linkable_to_image Flag that indicates if an image can be linked to the attribute. optional
     *
     * @return $this
     */
    public function setIsLinkableToImage(?bool $is_linkable_to_image): static
    {
        if (is_null($is_linkable_to_image)) {
            throw new InvalidArgumentException('non-nullable is_linkable_to_image cannot be null');
        }
        $this->container['is_linkable_to_image'] = $is_linkable_to_image;

        return $this;
    }

    /**
     * Gets amazon_attribute
     *
     * @return string|null
     */
    public function getAmazonAttribute(): ?string
    {
        return $this->container['amazon_attribute'];
    }

    /**
     * Sets amazon_attribute
     *
     * @param string|null $amazon_attribute The attribute of the market Amazon that this attribute is liked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values. optional
     *
     * @return $this
     */
    public function setAmazonAttribute(?string $amazon_attribute): static
    {
        if (is_null($amazon_attribute)) {
            throw new InvalidArgumentException('non-nullable amazon_attribute cannot be null');
        }
        $this->container['amazon_attribute'] = $amazon_attribute;

        return $this;
    }

    /**
     * Gets fruugo_attribute
     *
     * @return string|null
     */
    public function getFruugoAttribute(): ?string
    {
        return $this->container['fruugo_attribute'];
    }

    /**
     * Sets fruugo_attribute
     *
     * @param string|null $fruugo_attribute The attribute of the market Fruugo that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. optional allowed values are null, color, size
     *
     * @return $this
     */
    public function setFruugoAttribute(?string $fruugo_attribute): static
    {
        if (is_null($fruugo_attribute)) {
            throw new InvalidArgumentException('non-nullable fruugo_attribute cannot be null');
        }
        $this->container['fruugo_attribute'] = $fruugo_attribute;

        return $this;
    }

    /**
     * Gets pixmania_attribute
     *
     * @return int|null
     */
    public function getPixmaniaAttribute(): ?int
    {
        return $this->container['pixmania_attribute'];
    }

    /**
     * Sets pixmania_attribute
     *
     * @param int|null $pixmania_attribute The attribute of the market PIXmania that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values. optional
     *
     * @return $this
     */
    public function setPixmaniaAttribute(?int $pixmania_attribute): static
    {
        if (is_null($pixmania_attribute)) {
            throw new InvalidArgumentException('non-nullable pixmania_attribute cannot be null');
        }
        $this->container['pixmania_attribute'] = $pixmania_attribute;

        return $this;
    }

    /**
     * Gets otto_attribute
     *
     * @return string|null
     */
    public function getOttoAttribute(): ?string
    {
        return $this->container['otto_attribute'];
    }

    /**
     * Sets otto_attribute
     *
     * @param string|null $otto_attribute The attribute of the market OTTO that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. optional allowed values are none, Dimension1, Dimension2, Dimension3, Dimension4
     *
     * @return $this
     */
    public function setOttoAttribute(?string $otto_attribute): static
    {
        if (is_null($otto_attribute)) {
            throw new InvalidArgumentException('non-nullable otto_attribute cannot be null');
        }
        $this->container['otto_attribute'] = $otto_attribute;

        return $this;
    }

    /**
     * Gets google_shopping_attribute
     *
     * @return string|null
     */
    public function getGoogleShoppingAttribute(): ?string
    {
        return $this->container['google_shopping_attribute'];
    }

    /**
     * Sets google_shopping_attribute
     *
     * @param string|null $google_shopping_attribute The attribute of the market Google Shopping that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. optional allowed values are none, size, color, material, pattern
     *
     * @return $this
     */
    public function setGoogleShoppingAttribute(?string $google_shopping_attribute): static
    {
        if (is_null($google_shopping_attribute)) {
            throw new InvalidArgumentException('non-nullable google_shopping_attribute cannot be null');
        }
        $this->container['google_shopping_attribute'] = $google_shopping_attribute;

        return $this;
    }

    /**
     * Gets neckermann_at_ep_attribute
     *
     * @return int|null
     */
    public function getNeckermannAtEpAttribute(): ?int
    {
        return $this->container['neckermann_at_ep_attribute'];
    }

    /**
     * Sets neckermann_at_ep_attribute
     *
     * @param int|null $neckermann_at_ep_attribute The component of the market neckermann AT EP that this attribute is linked to. To list variations on this market, attributes must be linked to one of the components specified by the market. Check documentation of the market for permitted values. optional
     *
     * @return $this
     */
    public function setNeckermannAtEpAttribute(?int $neckermann_at_ep_attribute): static
    {
        if (is_null($neckermann_at_ep_attribute)) {
            throw new InvalidArgumentException('non-nullable neckermann_at_ep_attribute cannot be null');
        }
        $this->container['neckermann_at_ep_attribute'] = $neckermann_at_ep_attribute;

        return $this;
    }

    /**
     * Gets type_of_selection_in_online_store
     *
     * @return string|null
     */
    public function getTypeOfSelectionInOnlineStore(): ?string
    {
        return $this->container['type_of_selection_in_online_store'];
    }

    /**
     * Sets type_of_selection_in_online_store
     *
     * @param string|null $type_of_selection_in_online_store How customers can select the attribute in the front end of a client. To allow attribute selection by check mark, attribute availability must be checked on the client side. optional allowed values are dropdown, image, box
     *
     * @return $this
     */
    public function setTypeOfSelectionInOnlineStore(?string $type_of_selection_in_online_store): static
    {
        if (is_null($type_of_selection_in_online_store)) {
            throw new InvalidArgumentException('non-nullable type_of_selection_in_online_store cannot be null');
        }
        $this->container['type_of_selection_in_online_store'] = $type_of_selection_in_online_store;

        return $this;
    }

    /**
     * Gets la_redoute_attribute
     *
     * @return int|null
     */
    public function getLaRedouteAttribute(): ?int
    {
        return $this->container['la_redoute_attribute'];
    }

    /**
     * Sets la_redoute_attribute
     *
     * @param int|null $la_redoute_attribute The attribute of the market La Redoute that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values. optional
     *
     * @return $this
     */
    public function setLaRedouteAttribute(?int $la_redoute_attribute): static
    {
        if (is_null($la_redoute_attribute)) {
            throw new InvalidArgumentException('non-nullable la_redoute_attribute cannot be null');
        }
        $this->container['la_redoute_attribute'] = $la_redoute_attribute;

        return $this;
    }

    /**
     * Gets is_groupable
     *
     * @return bool|null
     */
    public function getIsGroupable(): ?bool
    {
        return $this->container['is_groupable'];
    }

    /**
     * Sets is_groupable
     *
     * @param bool|null $is_groupable Flag that indicates if the attribute can be grouped in item lists. If yes, variations with this attribute can be shown in the ItemViewCategoriesList template first. Other attributes are nested and can only be selected after this attribute has been selected. optional
     *
     * @return $this
     */
    public function setIsGroupable(?bool $is_groupable): static
    {
        if (is_null($is_groupable)) {
            throw new InvalidArgumentException('non-nullable is_groupable cannot be null');
        }
        $this->container['is_groupable'] = $is_groupable;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



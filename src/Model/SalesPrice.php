<?php
/**
 * SalesPrice
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
 * SalesPrice Class Doc Comment
 *
 * @package  ck
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SalesPrice implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SalesPrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'position' => 'int',
        'minimum_order_quantity' => 'float',
        'type' => 'string',
        'is_customer_price' => 'bool',
        'is_displayed_by_default' => 'bool',
        'is_live_conversion' => 'bool',
        'interval' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'position' => null,
        'minimum_order_quantity' => null,
        'type' => null,
        'is_customer_price' => null,
        'is_displayed_by_default' => null,
        'is_live_conversion' => null,
        'interval' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'position' => false,
		'minimum_order_quantity' => false,
		'type' => false,
		'is_customer_price' => false,
		'is_displayed_by_default' => false,
		'is_live_conversion' => false,
		'interval' => false
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
        'id' => 'id',
        'position' => 'position',
        'minimum_order_quantity' => 'minimumOrderQuantity',
        'type' => 'type',
        'is_customer_price' => 'isCustomerPrice',
        'is_displayed_by_default' => 'isDisplayedByDefault',
        'is_live_conversion' => 'isLiveConversion',
        'interval' => 'interval'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'position' => 'setPosition',
        'minimum_order_quantity' => 'setMinimumOrderQuantity',
        'type' => 'setType',
        'is_customer_price' => 'setIsCustomerPrice',
        'is_displayed_by_default' => 'setIsDisplayedByDefault',
        'is_live_conversion' => 'setIsLiveConversion',
        'interval' => 'setInterval'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'position' => 'getPosition',
        'minimum_order_quantity' => 'getMinimumOrderQuantity',
        'type' => 'getType',
        'is_customer_price' => 'getIsCustomerPrice',
        'is_displayed_by_default' => 'getIsDisplayedByDefault',
        'is_live_conversion' => 'getIsLiveConversion',
        'interval' => 'getInterval'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('minimum_order_quantity', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('is_customer_price', $data ?? [], null);
        $this->setIfExists('is_displayed_by_default', $data ?? [], null);
        $this->setIfExists('is_live_conversion', $data ?? [], null);
        $this->setIfExists('interval', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The unique ID of the sales price
     *
     * @return $this
     */
    public function setId(?int $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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
     * @param int|null $position The position of the sales price
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
     * Gets minimum_order_quantity
     *
     * @return float|null
     */
    public function getMinimumOrderQuantity(): ?float
    {
        return $this->container['minimum_order_quantity'];
    }

    /**
     * Sets minimum_order_quantity
     *
     * @param float|null $minimum_order_quantity The minimum order quantity of the sales price. Sales prices with different minimum quantities can be used to create a quantity based graduation of prices in plentymarkets.
     *
     * @return $this
     */
    public function setMinimumOrderQuantity(?float $minimum_order_quantity): static
    {
        if (is_null($minimum_order_quantity)) {
            throw new InvalidArgumentException('non-nullable minimum_order_quantity cannot be null');
        }
        $this->container['minimum_order_quantity'] = $minimum_order_quantity;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The price type of the sales price.<ul><li>RRP = Sales price is the recommended retail price (RRP). If the RRP and another sales price are linked with a variation, the RRP will be displayed in the online store as red strike-through text next to the sales price.</li><li>Special offer = Sales price as a special offer. Special offers are used for markets, e.g. Amazon and Hitmeister.</li></ul>
     *
     * @return $this
     */
    public function setType(?string $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets is_customer_price
     *
     * @return bool|null
     */
    public function getIsCustomerPrice(): ?bool
    {
        return $this->container['is_customer_price'];
    }

    /**
     * Sets is_customer_price
     *
     * @param bool|null $is_customer_price Flag that indicates if the sales price is a customer price. Currently, this setting is not in use.
     *
     * @return $this
     */
    public function setIsCustomerPrice(?bool $is_customer_price): static
    {
        if (is_null($is_customer_price)) {
            throw new InvalidArgumentException('non-nullable is_customer_price cannot be null');
        }
        $this->container['is_customer_price'] = $is_customer_price;

        return $this;
    }

    /**
     * Gets is_displayed_by_default
     *
     * @return bool|null
     */
    public function getIsDisplayedByDefault(): ?bool
    {
        return $this->container['is_displayed_by_default'];
    }

    /**
     * Sets is_displayed_by_default
     *
     * @param bool|null $is_displayed_by_default Flag that indicates if the sales price is displayed automatically in the Sales Prices area of the plentymarkets backend when a new item is created. When false, the sales price can still be added manually when a new item is created.
     *
     * @return $this
     */
    public function setIsDisplayedByDefault(?bool $is_displayed_by_default): static
    {
        if (is_null($is_displayed_by_default)) {
            throw new InvalidArgumentException('non-nullable is_displayed_by_default cannot be null');
        }
        $this->container['is_displayed_by_default'] = $is_displayed_by_default;

        return $this;
    }

    /**
     * Gets is_live_conversion
     *
     * @return bool|null
     */
    public function getIsLiveConversion(): ?bool
    {
        return $this->container['is_live_conversion'];
    }

    /**
     * Sets is_live_conversion
     *
     * @param bool|null $is_live_conversion Flag that indicates if the sales price is converted live in the online store. When true, the default currency price will be converted into the active currencies based on the conversion rates saved in plentymarkets.
     *
     * @return $this
     */
    public function setIsLiveConversion(?bool $is_live_conversion): static
    {
        if (is_null($is_live_conversion)) {
            throw new InvalidArgumentException('non-nullable is_live_conversion cannot be null');
        }
        $this->container['is_live_conversion'] = $is_live_conversion;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return string|null
     */
    public function getInterval(): ?string
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param string|null $interval The interval of the price. Possible values are: daily, weekly, monthly, quarterly, semi-annual and annual.
     *
     * @return $this
     */
    public function setInterval(?string $interval): static
    {
        if (is_null($interval)) {
            throw new InvalidArgumentException('non-nullable interval cannot be null');
        }
        $this->container['interval'] = $interval;

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



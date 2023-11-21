<?php
/**
 * VariationStock
 *
 * PHP version 8.1
 *
 * @package  ck/plenty-client
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

namespace ck/plenty-client\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use ck/plenty-client\ObjectSerializer;

/**
 * VariationStock Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class VariationStock implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'VariationStock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'item_id' => 'int',
        'variation_id' => 'int',
        'warehouse_id' => 'int',
        'reserved_listing' => 'float',
        'reserved_bundles' => 'float',
        'value_of_goods' => 'float',
        'purchase_price' => 'float',
        'physical_stock' => 'float',
        'reserved_stock' => 'float',
        'net_stock' => 'float',
        'reorder_level' => 'float',
        'delta_reorder_level' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'item_id' => null,
        'variation_id' => null,
        'warehouse_id' => null,
        'reserved_listing' => null,
        'reserved_bundles' => null,
        'value_of_goods' => null,
        'purchase_price' => null,
        'physical_stock' => null,
        'reserved_stock' => null,
        'net_stock' => null,
        'reorder_level' => null,
        'delta_reorder_level' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'item_id' => false,
		'variation_id' => false,
		'warehouse_id' => false,
		'reserved_listing' => false,
		'reserved_bundles' => false,
		'value_of_goods' => false,
		'purchase_price' => false,
		'physical_stock' => false,
		'reserved_stock' => false,
		'net_stock' => false,
		'reorder_level' => false,
		'delta_reorder_level' => false
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
        'item_id' => 'itemId',
        'variation_id' => 'variationId',
        'warehouse_id' => 'warehouseId',
        'reserved_listing' => 'reservedListing',
        'reserved_bundles' => 'reservedBundles',
        'value_of_goods' => 'valueOfGoods',
        'purchase_price' => 'purchasePrice',
        'physical_stock' => 'physicalStock',
        'reserved_stock' => 'reservedStock',
        'net_stock' => 'netStock',
        'reorder_level' => 'reorderLevel',
        'delta_reorder_level' => 'deltaReorderLevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'item_id' => 'setItemId',
        'variation_id' => 'setVariationId',
        'warehouse_id' => 'setWarehouseId',
        'reserved_listing' => 'setReservedListing',
        'reserved_bundles' => 'setReservedBundles',
        'value_of_goods' => 'setValueOfGoods',
        'purchase_price' => 'setPurchasePrice',
        'physical_stock' => 'setPhysicalStock',
        'reserved_stock' => 'setReservedStock',
        'net_stock' => 'setNetStock',
        'reorder_level' => 'setReorderLevel',
        'delta_reorder_level' => 'setDeltaReorderLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'item_id' => 'getItemId',
        'variation_id' => 'getVariationId',
        'warehouse_id' => 'getWarehouseId',
        'reserved_listing' => 'getReservedListing',
        'reserved_bundles' => 'getReservedBundles',
        'value_of_goods' => 'getValueOfGoods',
        'purchase_price' => 'getPurchasePrice',
        'physical_stock' => 'getPhysicalStock',
        'reserved_stock' => 'getReservedStock',
        'net_stock' => 'getNetStock',
        'reorder_level' => 'getReorderLevel',
        'delta_reorder_level' => 'getDeltaReorderLevel'
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
        $this->setIfExists('item_id', $data ?? [], null);
        $this->setIfExists('variation_id', $data ?? [], null);
        $this->setIfExists('warehouse_id', $data ?? [], null);
        $this->setIfExists('reserved_listing', $data ?? [], null);
        $this->setIfExists('reserved_bundles', $data ?? [], null);
        $this->setIfExists('value_of_goods', $data ?? [], null);
        $this->setIfExists('purchase_price', $data ?? [], null);
        $this->setIfExists('physical_stock', $data ?? [], null);
        $this->setIfExists('reserved_stock', $data ?? [], null);
        $this->setIfExists('net_stock', $data ?? [], null);
        $this->setIfExists('reorder_level', $data ?? [], null);
        $this->setIfExists('delta_reorder_level', $data ?? [], null);
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
     * Gets item_id
     *
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int|null $item_id The ID of the item
     *
     * @return $this
     */
    public function setItemId(?int $item_id): static
    {
        if (is_null($item_id)) {
            throw new InvalidArgumentException('non-nullable item_id cannot be null');
        }
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets variation_id
     *
     * @return int|null
     */
    public function getVariationId(): ?int
    {
        return $this->container['variation_id'];
    }

    /**
     * Sets variation_id
     *
     * @param int|null $variation_id The ID of the variation
     *
     * @return $this
     */
    public function setVariationId(?int $variation_id): static
    {
        if (is_null($variation_id)) {
            throw new InvalidArgumentException('non-nullable variation_id cannot be null');
        }
        $this->container['variation_id'] = $variation_id;

        return $this;
    }

    /**
     * Gets warehouse_id
     *
     * @return int|null
     */
    public function getWarehouseId(): ?int
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param int|null $warehouse_id The ID of the warehouse
     *
     * @return $this
     */
    public function setWarehouseId(?int $warehouse_id): static
    {
        if (is_null($warehouse_id)) {
            throw new InvalidArgumentException('non-nullable warehouse_id cannot be null');
        }
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets reserved_listing
     *
     * @return float|null
     */
    public function getReservedListing(): ?float
    {
        return $this->container['reserved_listing'];
    }

    /**
     * Sets reserved_listing
     *
     * @param float|null $reserved_listing The quantity of a variation that is reserved for listings
     *
     * @return $this
     */
    public function setReservedListing(?float $reserved_listing): static
    {
        if (is_null($reserved_listing)) {
            throw new InvalidArgumentException('non-nullable reserved_listing cannot be null');
        }
        $this->container['reserved_listing'] = $reserved_listing;

        return $this;
    }

    /**
     * Gets reserved_bundles
     *
     * @return float|null
     */
    public function getReservedBundles(): ?float
    {
        return $this->container['reserved_bundles'];
    }

    /**
     * Sets reserved_bundles
     *
     * @param float|null $reserved_bundles The quantity of a variation that is reserved for item bundles
     *
     * @return $this
     */
    public function setReservedBundles(?float $reserved_bundles): static
    {
        if (is_null($reserved_bundles)) {
            throw new InvalidArgumentException('non-nullable reserved_bundles cannot be null');
        }
        $this->container['reserved_bundles'] = $reserved_bundles;

        return $this;
    }

    /**
     * Gets value_of_goods
     *
     * @return float|null
     */
    public function getValueOfGoods(): ?float
    {
        return $this->container['value_of_goods'];
    }

    /**
     * Sets value_of_goods
     *
     * @param float|null $value_of_goods The value of goods based on the physical stock
     *
     * @return $this
     */
    public function setValueOfGoods(?float $value_of_goods): static
    {
        if (is_null($value_of_goods)) {
            throw new InvalidArgumentException('non-nullable value_of_goods cannot be null');
        }
        $this->container['value_of_goods'] = $value_of_goods;

        return $this;
    }

    /**
     * Gets purchase_price
     *
     * @return float|null
     */
    public function getPurchasePrice(): ?float
    {
        return $this->container['purchase_price'];
    }

    /**
     * Sets purchase_price
     *
     * @param float|null $purchase_price The purchase price of the variation stock
     *
     * @return $this
     */
    public function setPurchasePrice(?float $purchase_price): static
    {
        if (is_null($purchase_price)) {
            throw new InvalidArgumentException('non-nullable purchase_price cannot be null');
        }
        $this->container['purchase_price'] = $purchase_price;

        return $this;
    }

    /**
     * Gets physical_stock
     *
     * @return float|null
     */
    public function getPhysicalStock(): ?float
    {
        return $this->container['physical_stock'];
    }

    /**
     * Sets physical_stock
     *
     * @param float|null $physical_stock The physical stock of the variation stock
     *
     * @return $this
     */
    public function setPhysicalStock(?float $physical_stock): static
    {
        if (is_null($physical_stock)) {
            throw new InvalidArgumentException('non-nullable physical_stock cannot be null');
        }
        $this->container['physical_stock'] = $physical_stock;

        return $this;
    }

    /**
     * Gets reserved_stock
     *
     * @return float|null
     */
    public function getReservedStock(): ?float
    {
        return $this->container['reserved_stock'];
    }

    /**
     * Sets reserved_stock
     *
     * @param float|null $reserved_stock The reserved stock of the variation stock
     *
     * @return $this
     */
    public function setReservedStock(?float $reserved_stock): static
    {
        if (is_null($reserved_stock)) {
            throw new InvalidArgumentException('non-nullable reserved_stock cannot be null');
        }
        $this->container['reserved_stock'] = $reserved_stock;

        return $this;
    }

    /**
     * Gets net_stock
     *
     * @return float|null
     */
    public function getNetStock(): ?float
    {
        return $this->container['net_stock'];
    }

    /**
     * Sets net_stock
     *
     * @param float|null $net_stock The net stock is the stock that can still be sold
     *
     * @return $this
     */
    public function setNetStock(?float $net_stock): static
    {
        if (is_null($net_stock)) {
            throw new InvalidArgumentException('non-nullable net_stock cannot be null');
        }
        $this->container['net_stock'] = $net_stock;

        return $this;
    }

    /**
     * Gets reorder_level
     *
     * @return float|null
     */
    public function getReorderLevel(): ?float
    {
        return $this->container['reorder_level'];
    }

    /**
     * Sets reorder_level
     *
     * @param float|null $reorder_level The quantity of a variation that triggers a reorder
     *
     * @return $this
     */
    public function setReorderLevel(?float $reorder_level): static
    {
        if (is_null($reorder_level)) {
            throw new InvalidArgumentException('non-nullable reorder_level cannot be null');
        }
        $this->container['reorder_level'] = $reorder_level;

        return $this;
    }

    /**
     * Gets delta_reorder_level
     *
     * @return float|null
     */
    public function getDeltaReorderLevel(): ?float
    {
        return $this->container['delta_reorder_level'];
    }

    /**
     * Sets delta_reorder_level
     *
     * @param float|null $delta_reorder_level The quantity of a variation that is required to reach the reorder level
     *
     * @return $this
     */
    public function setDeltaReorderLevel(?float $delta_reorder_level): static
    {
        if (is_null($delta_reorder_level)) {
            throw new InvalidArgumentException('non-nullable delta_reorder_level cannot be null');
        }
        $this->container['delta_reorder_level'] = $delta_reorder_level;

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


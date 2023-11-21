<?php
/**
 * RestStockmanagementWarehousesPostRequest
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
 * RestStockmanagementWarehousesPostRequest Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RestStockmanagementWarehousesPostRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = '_rest_stockmanagement_warehouses_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'note' => 'string',
        'type_id' => 'int',
        'on_stock_availability' => 'int',
        'out_of_stock_availability' => 'int',
        'split_by_shipping_profile' => 'bool',
        'storage_location_type' => 'string',
        'storage_location_zone' => 'int',
        'repair_warehouse_id' => 'int',
        'is_inventory_mode_active' => 'bool',
        'logistics_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'note' => null,
        'type_id' => null,
        'on_stock_availability' => null,
        'out_of_stock_availability' => null,
        'split_by_shipping_profile' => null,
        'storage_location_type' => null,
        'storage_location_zone' => null,
        'repair_warehouse_id' => null,
        'is_inventory_mode_active' => null,
        'logistics_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'name' => false,
		'note' => false,
		'type_id' => false,
		'on_stock_availability' => false,
		'out_of_stock_availability' => false,
		'split_by_shipping_profile' => false,
		'storage_location_type' => false,
		'storage_location_zone' => false,
		'repair_warehouse_id' => false,
		'is_inventory_mode_active' => false,
		'logistics_type' => false
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
        'name' => 'name',
        'note' => 'note',
        'type_id' => 'typeId',
        'on_stock_availability' => 'onStockAvailability',
        'out_of_stock_availability' => 'outOfStockAvailability',
        'split_by_shipping_profile' => 'splitByShippingProfile',
        'storage_location_type' => 'storageLocationType',
        'storage_location_zone' => 'storageLocationZone',
        'repair_warehouse_id' => 'repairWarehouseId',
        'is_inventory_mode_active' => 'isInventoryModeActive',
        'logistics_type' => 'logisticsType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'name' => 'setName',
        'note' => 'setNote',
        'type_id' => 'setTypeId',
        'on_stock_availability' => 'setOnStockAvailability',
        'out_of_stock_availability' => 'setOutOfStockAvailability',
        'split_by_shipping_profile' => 'setSplitByShippingProfile',
        'storage_location_type' => 'setStorageLocationType',
        'storage_location_zone' => 'setStorageLocationZone',
        'repair_warehouse_id' => 'setRepairWarehouseId',
        'is_inventory_mode_active' => 'setIsInventoryModeActive',
        'logistics_type' => 'setLogisticsType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'name' => 'getName',
        'note' => 'getNote',
        'type_id' => 'getTypeId',
        'on_stock_availability' => 'getOnStockAvailability',
        'out_of_stock_availability' => 'getOutOfStockAvailability',
        'split_by_shipping_profile' => 'getSplitByShippingProfile',
        'storage_location_type' => 'getStorageLocationType',
        'storage_location_zone' => 'getStorageLocationZone',
        'repair_warehouse_id' => 'getRepairWarehouseId',
        'is_inventory_mode_active' => 'getIsInventoryModeActive',
        'logistics_type' => 'getLogisticsType'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('type_id', $data ?? [], null);
        $this->setIfExists('on_stock_availability', $data ?? [], null);
        $this->setIfExists('out_of_stock_availability', $data ?? [], null);
        $this->setIfExists('split_by_shipping_profile', $data ?? [], null);
        $this->setIfExists('storage_location_type', $data ?? [], null);
        $this->setIfExists('storage_location_zone', $data ?? [], null);
        $this->setIfExists('repair_warehouse_id', $data ?? [], null);
        $this->setIfExists('is_inventory_mode_active', $data ?? [], null);
        $this->setIfExists('logistics_type', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalidProperties[] = "'type_id' can't be null";
        }
        if ($this->container['logistics_type'] === null) {
            $invalidProperties[] = "'logistics_type' can't be null";
        }
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
     * Gets name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the warehouse
     *
     * @return $this
     */
    public function setName(string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note A note for this warehouse optional
     *
     * @return $this
     */
    public function setNote(?string $note): static
    {
        if (is_null($note)) {
            throw new InvalidArgumentException('non-nullable note cannot be null');
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id The id of the warehouse type. The following types are available:      0 = Sales warehouse     1 = Repair warehouse     4 = Storage warehouse     5 = Transit warehouse     6 = Distribution warehouse     7 = Other
     *
     * @return $this
     */
    public function setTypeId(int $type_id): static
    {
        if (is_null($type_id)) {
            throw new InvalidArgumentException('non-nullable type_id cannot be null');
        }
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets on_stock_availability
     *
     * @return int|null
     */
    public function getOnStockAvailability(): ?int
    {
        return $this->container['on_stock_availability'];
    }

    /**
     * Sets on_stock_availability
     *
     * @param int|null $on_stock_availability Displayed availability of a variation if stock is available optional
     *
     * @return $this
     */
    public function setOnStockAvailability(?int $on_stock_availability): static
    {
        if (is_null($on_stock_availability)) {
            throw new InvalidArgumentException('non-nullable on_stock_availability cannot be null');
        }
        $this->container['on_stock_availability'] = $on_stock_availability;

        return $this;
    }

    /**
     * Gets out_of_stock_availability
     *
     * @return int|null
     */
    public function getOutOfStockAvailability(): ?int
    {
        return $this->container['out_of_stock_availability'];
    }

    /**
     * Sets out_of_stock_availability
     *
     * @param int|null $out_of_stock_availability Displayed availability of a variation if no stock is available optional
     *
     * @return $this
     */
    public function setOutOfStockAvailability(?int $out_of_stock_availability): static
    {
        if (is_null($out_of_stock_availability)) {
            throw new InvalidArgumentException('non-nullable out_of_stock_availability cannot be null');
        }
        $this->container['out_of_stock_availability'] = $out_of_stock_availability;

        return $this;
    }

    /**
     * Gets split_by_shipping_profile
     *
     * @return bool|null
     */
    public function getSplitByShippingProfile(): ?bool
    {
        return $this->container['split_by_shipping_profile'];
    }

    /**
     * Sets split_by_shipping_profile
     *
     * @param bool|null $split_by_shipping_profile Flag that indicates if for this warehouse orders are split by shipping profiles or not. True = Orders are split by shipping profiles False = Orders will not be split by shipping profiles optional
     *
     * @return $this
     */
    public function setSplitByShippingProfile(?bool $split_by_shipping_profile): static
    {
        if (is_null($split_by_shipping_profile)) {
            throw new InvalidArgumentException('non-nullable split_by_shipping_profile cannot be null');
        }
        $this->container['split_by_shipping_profile'] = $split_by_shipping_profile;

        return $this;
    }

    /**
     * Gets storage_location_type
     *
     * @return string|null
     */
    public function getStorageLocationType(): ?string
    {
        return $this->container['storage_location_type'];
    }

    /**
     * Sets storage_location_type
     *
     * @param string|null $storage_location_type The storage location type. The following types are available: none smallmedium large europallet optional
     *
     * @return $this
     */
    public function setStorageLocationType(?string $storage_location_type): static
    {
        if (is_null($storage_location_type)) {
            throw new InvalidArgumentException('non-nullable storage_location_type cannot be null');
        }
        $this->container['storage_location_type'] = $storage_location_type;

        return $this;
    }

    /**
     * Gets storage_location_zone
     *
     * @return int|null
     */
    public function getStorageLocationZone(): ?int
    {
        return $this->container['storage_location_zone'];
    }

    /**
     * Sets storage_location_zone
     *
     * @param int|null $storage_location_zone The zone that the storage location is in optional
     *
     * @return $this
     */
    public function setStorageLocationZone(?int $storage_location_zone): static
    {
        if (is_null($storage_location_zone)) {
            throw new InvalidArgumentException('non-nullable storage_location_zone cannot be null');
        }
        $this->container['storage_location_zone'] = $storage_location_zone;

        return $this;
    }

    /**
     * Gets repair_warehouse_id
     *
     * @return int|null
     */
    public function getRepairWarehouseId(): ?int
    {
        return $this->container['repair_warehouse_id'];
    }

    /**
     * Sets repair_warehouse_id
     *
     * @param int|null $repair_warehouse_id The id of the associated repair warehouse optional
     *
     * @return $this
     */
    public function setRepairWarehouseId(?int $repair_warehouse_id): static
    {
        if (is_null($repair_warehouse_id)) {
            throw new InvalidArgumentException('non-nullable repair_warehouse_id cannot be null');
        }
        $this->container['repair_warehouse_id'] = $repair_warehouse_id;

        return $this;
    }

    /**
     * Gets is_inventory_mode_active
     *
     * @return bool|null
     */
    public function getIsInventoryModeActive(): ?bool
    {
        return $this->container['is_inventory_mode_active'];
    }

    /**
     * Sets is_inventory_mode_active
     *
     * @param bool|null $is_inventory_mode_active Flag that indicates if the inventory mode for this warehouse is active or not. True = active False = inactive optional
     *
     * @return $this
     */
    public function setIsInventoryModeActive(?bool $is_inventory_mode_active): static
    {
        if (is_null($is_inventory_mode_active)) {
            throw new InvalidArgumentException('non-nullable is_inventory_mode_active cannot be null');
        }
        $this->container['is_inventory_mode_active'] = $is_inventory_mode_active;

        return $this;
    }

    /**
     * Gets logistics_type
     *
     * @return string
     */
    public function getLogisticsType(): string
    {
        return $this->container['logistics_type'];
    }

    /**
     * Sets logistics_type
     *
     * @param string $logistics_type The id of the logistics type of the warehouse. The logistics type states which service provider fulfills the storage and shipping. The following logistics types are available:  own amazon dhlFulfillment
     *
     * @return $this
     */
    public function setLogisticsType(string $logistics_type): static
    {
        if (is_null($logistics_type)) {
            throw new InvalidArgumentException('non-nullable logistics_type cannot be null');
        }
        $this->container['logistics_type'] = $logistics_type;

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



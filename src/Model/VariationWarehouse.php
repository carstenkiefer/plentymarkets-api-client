<?php
/**
 * VariationWarehouse
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
 * VariationWarehouse Class Doc Comment
 *
 * @package  ck
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class VariationWarehouse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'VariationWarehouse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'variation_id' => 'int',
        'warehouse_id' => 'int',
        'warehouse_zone_id' => 'int',
        'storage_location_type' => 'string',
        'reorder_level' => 'int',
        'maximum_stock' => 'int',
        'stock_turnover_in_days' => 'int',
        'storage_location' => 'int',
        'stock_buffer' => 'int',
        'is_batch' => 'bool',
        'is_best_before_date' => 'bool',
        'last_update_timestamp' => 'string',
        'created_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'variation_id' => null,
        'warehouse_id' => null,
        'warehouse_zone_id' => null,
        'storage_location_type' => null,
        'reorder_level' => null,
        'maximum_stock' => null,
        'stock_turnover_in_days' => null,
        'storage_location' => null,
        'stock_buffer' => null,
        'is_batch' => null,
        'is_best_before_date' => null,
        'last_update_timestamp' => null,
        'created_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'variation_id' => false,
		'warehouse_id' => false,
		'warehouse_zone_id' => false,
		'storage_location_type' => false,
		'reorder_level' => false,
		'maximum_stock' => false,
		'stock_turnover_in_days' => false,
		'storage_location' => false,
		'stock_buffer' => false,
		'is_batch' => false,
		'is_best_before_date' => false,
		'last_update_timestamp' => false,
		'created_at' => false
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
        'variation_id' => 'variationId',
        'warehouse_id' => 'warehouseId',
        'warehouse_zone_id' => 'warehouseZoneId',
        'storage_location_type' => 'storageLocationType',
        'reorder_level' => 'reorderLevel',
        'maximum_stock' => 'maximumStock',
        'stock_turnover_in_days' => 'stockTurnoverInDays',
        'storage_location' => 'storageLocation',
        'stock_buffer' => 'stockBuffer',
        'is_batch' => 'isBatch',
        'is_best_before_date' => 'isBestBeforeDate',
        'last_update_timestamp' => 'lastUpdateTimestamp',
        'created_at' => 'createdAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'variation_id' => 'setVariationId',
        'warehouse_id' => 'setWarehouseId',
        'warehouse_zone_id' => 'setWarehouseZoneId',
        'storage_location_type' => 'setStorageLocationType',
        'reorder_level' => 'setReorderLevel',
        'maximum_stock' => 'setMaximumStock',
        'stock_turnover_in_days' => 'setStockTurnoverInDays',
        'storage_location' => 'setStorageLocation',
        'stock_buffer' => 'setStockBuffer',
        'is_batch' => 'setIsBatch',
        'is_best_before_date' => 'setIsBestBeforeDate',
        'last_update_timestamp' => 'setLastUpdateTimestamp',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'variation_id' => 'getVariationId',
        'warehouse_id' => 'getWarehouseId',
        'warehouse_zone_id' => 'getWarehouseZoneId',
        'storage_location_type' => 'getStorageLocationType',
        'reorder_level' => 'getReorderLevel',
        'maximum_stock' => 'getMaximumStock',
        'stock_turnover_in_days' => 'getStockTurnoverInDays',
        'storage_location' => 'getStorageLocation',
        'stock_buffer' => 'getStockBuffer',
        'is_batch' => 'getIsBatch',
        'is_best_before_date' => 'getIsBestBeforeDate',
        'last_update_timestamp' => 'getLastUpdateTimestamp',
        'created_at' => 'getCreatedAt'
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
        $this->setIfExists('variation_id', $data ?? [], null);
        $this->setIfExists('warehouse_id', $data ?? [], null);
        $this->setIfExists('warehouse_zone_id', $data ?? [], null);
        $this->setIfExists('storage_location_type', $data ?? [], null);
        $this->setIfExists('reorder_level', $data ?? [], null);
        $this->setIfExists('maximum_stock', $data ?? [], null);
        $this->setIfExists('stock_turnover_in_days', $data ?? [], null);
        $this->setIfExists('storage_location', $data ?? [], null);
        $this->setIfExists('stock_buffer', $data ?? [], null);
        $this->setIfExists('is_batch', $data ?? [], null);
        $this->setIfExists('is_best_before_date', $data ?? [], null);
        $this->setIfExists('last_update_timestamp', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
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
     * @param int|null $variation_id The unique ID of the variation
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
     * @param int|null $warehouse_id The unique ID of the warehouse
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
     * Gets warehouse_zone_id
     *
     * @return int|null
     */
    public function getWarehouseZoneId(): ?int
    {
        return $this->container['warehouse_zone_id'];
    }

    /**
     * Sets warehouse_zone_id
     *
     * @param int|null $warehouse_zone_id The unique ID of the warehouse zone
     *
     * @return $this
     */
    public function setWarehouseZoneId(?int $warehouse_zone_id): static
    {
        if (is_null($warehouse_zone_id)) {
            throw new InvalidArgumentException('non-nullable warehouse_zone_id cannot be null');
        }
        $this->container['warehouse_zone_id'] = $warehouse_zone_id;

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
     * @param string|null $storage_location_type The storage location type of the warehouse
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
     * Gets reorder_level
     *
     * @return int|null
     */
    public function getReorderLevel(): ?int
    {
        return $this->container['reorder_level'];
    }

    /**
     * Sets reorder_level
     *
     * @param int|null $reorder_level The reorder level for the variation in this warehouse
     *
     * @return $this
     */
    public function setReorderLevel(?int $reorder_level): static
    {
        if (is_null($reorder_level)) {
            throw new InvalidArgumentException('non-nullable reorder_level cannot be null');
        }
        $this->container['reorder_level'] = $reorder_level;

        return $this;
    }

    /**
     * Gets maximum_stock
     *
     * @return int|null
     */
    public function getMaximumStock(): ?int
    {
        return $this->container['maximum_stock'];
    }

    /**
     * Sets maximum_stock
     *
     * @param int|null $maximum_stock The maximum stock for the variation in this warehouse
     *
     * @return $this
     */
    public function setMaximumStock(?int $maximum_stock): static
    {
        if (is_null($maximum_stock)) {
            throw new InvalidArgumentException('non-nullable maximum_stock cannot be null');
        }
        $this->container['maximum_stock'] = $maximum_stock;

        return $this;
    }

    /**
     * Gets stock_turnover_in_days
     *
     * @return int|null
     */
    public function getStockTurnoverInDays(): ?int
    {
        return $this->container['stock_turnover_in_days'];
    }

    /**
     * Sets stock_turnover_in_days
     *
     * @param int|null $stock_turnover_in_days The stock turnover in days for the variation in this warehouse
     *
     * @return $this
     */
    public function setStockTurnoverInDays(?int $stock_turnover_in_days): static
    {
        if (is_null($stock_turnover_in_days)) {
            throw new InvalidArgumentException('non-nullable stock_turnover_in_days cannot be null');
        }
        $this->container['stock_turnover_in_days'] = $stock_turnover_in_days;

        return $this;
    }

    /**
     * Gets storage_location
     *
     * @return int|null
     */
    public function getStorageLocation(): ?int
    {
        return $this->container['storage_location'];
    }

    /**
     * Sets storage_location
     *
     * @param int|null $storage_location The storage location of the variation in this warehouse
     *
     * @return $this
     */
    public function setStorageLocation(?int $storage_location): static
    {
        if (is_null($storage_location)) {
            throw new InvalidArgumentException('non-nullable storage_location cannot be null');
        }
        $this->container['storage_location'] = $storage_location;

        return $this;
    }

    /**
     * Gets stock_buffer
     *
     * @return int|null
     */
    public function getStockBuffer(): ?int
    {
        return $this->container['stock_buffer'];
    }

    /**
     * Sets stock_buffer
     *
     * @param int|null $stock_buffer The stock buffer for the variation in this warehouse
     *
     * @return $this
     */
    public function setStockBuffer(?int $stock_buffer): static
    {
        if (is_null($stock_buffer)) {
            throw new InvalidArgumentException('non-nullable stock_buffer cannot be null');
        }
        $this->container['stock_buffer'] = $stock_buffer;

        return $this;
    }

    /**
     * Gets is_batch
     *
     * @return bool|null
     */
    public function getIsBatch(): ?bool
    {
        return $this->container['is_batch'];
    }

    /**
     * Sets is_batch
     *
     * @param bool|null $is_batch Is for warehouse and variation stock batch active
     *
     * @return $this
     */
    public function setIsBatch(?bool $is_batch): static
    {
        if (is_null($is_batch)) {
            throw new InvalidArgumentException('non-nullable is_batch cannot be null');
        }
        $this->container['is_batch'] = $is_batch;

        return $this;
    }

    /**
     * Gets is_best_before_date
     *
     * @return bool|null
     */
    public function getIsBestBeforeDate(): ?bool
    {
        return $this->container['is_best_before_date'];
    }

    /**
     * Sets is_best_before_date
     *
     * @param bool|null $is_best_before_date Is for warehouse and variation stock best before date active
     *
     * @return $this
     */
    public function setIsBestBeforeDate(?bool $is_best_before_date): static
    {
        if (is_null($is_best_before_date)) {
            throw new InvalidArgumentException('non-nullable is_best_before_date cannot be null');
        }
        $this->container['is_best_before_date'] = $is_best_before_date;

        return $this;
    }

    /**
     * Gets last_update_timestamp
     *
     * @return string|null
     */
    public function getLastUpdateTimestamp(): ?string
    {
        return $this->container['last_update_timestamp'];
    }

    /**
     * Sets last_update_timestamp
     *
     * @param string|null $last_update_timestamp The time the warehouse data was last updated.
     *
     * @return $this
     */
    public function setLastUpdateTimestamp(?string $last_update_timestamp): static
    {
        if (is_null($last_update_timestamp)) {
            throw new InvalidArgumentException('non-nullable last_update_timestamp cannot be null');
        }
        $this->container['last_update_timestamp'] = $last_update_timestamp;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at The time the warehouse data was created.
     *
     * @return $this
     */
    public function setCreatedAt(?string $created_at): static
    {
        if (is_null($created_at)) {
            throw new InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

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



<?php
/**
 * VariationStockRedistribution
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
 * VariationStockRedistribution Class Doc Comment
 *
 * @package  ck
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class VariationStockRedistribution implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'VariationStockRedistribution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'variation_id' => 'int',
        'reason_id' => 'int',
        'quantity' => 'float',
        'best_before_date' => 'string',
        'batch' => 'string',
        'current_storage_location_id' => 'int',
        'current_warehouse_id' => 'int',
        'new_storage_location_id' => 'int',
        'new_warehouse_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'variation_id' => null,
        'reason_id' => null,
        'quantity' => null,
        'best_before_date' => null,
        'batch' => null,
        'current_storage_location_id' => null,
        'current_warehouse_id' => null,
        'new_storage_location_id' => null,
        'new_warehouse_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'variation_id' => false,
		'reason_id' => false,
		'quantity' => false,
		'best_before_date' => false,
		'batch' => false,
		'current_storage_location_id' => false,
		'current_warehouse_id' => false,
		'new_storage_location_id' => false,
		'new_warehouse_id' => false
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
        'reason_id' => 'reasonId',
        'quantity' => 'quantity',
        'best_before_date' => 'bestBeforeDate',
        'batch' => 'batch',
        'current_storage_location_id' => 'currentStorageLocationId',
        'current_warehouse_id' => 'currentWarehouseId',
        'new_storage_location_id' => 'newStorageLocationId',
        'new_warehouse_id' => 'newWarehouseId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'variation_id' => 'setVariationId',
        'reason_id' => 'setReasonId',
        'quantity' => 'setQuantity',
        'best_before_date' => 'setBestBeforeDate',
        'batch' => 'setBatch',
        'current_storage_location_id' => 'setCurrentStorageLocationId',
        'current_warehouse_id' => 'setCurrentWarehouseId',
        'new_storage_location_id' => 'setNewStorageLocationId',
        'new_warehouse_id' => 'setNewWarehouseId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'variation_id' => 'getVariationId',
        'reason_id' => 'getReasonId',
        'quantity' => 'getQuantity',
        'best_before_date' => 'getBestBeforeDate',
        'batch' => 'getBatch',
        'current_storage_location_id' => 'getCurrentStorageLocationId',
        'current_warehouse_id' => 'getCurrentWarehouseId',
        'new_storage_location_id' => 'getNewStorageLocationId',
        'new_warehouse_id' => 'getNewWarehouseId'
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
        $this->setIfExists('reason_id', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('best_before_date', $data ?? [], null);
        $this->setIfExists('batch', $data ?? [], null);
        $this->setIfExists('current_storage_location_id', $data ?? [], null);
        $this->setIfExists('current_warehouse_id', $data ?? [], null);
        $this->setIfExists('new_storage_location_id', $data ?? [], null);
        $this->setIfExists('new_warehouse_id', $data ?? [], null);
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
     * Gets reason_id
     *
     * @return int|null
     */
    public function getReasonId(): ?int
    {
        return $this->container['reason_id'];
    }

    /**
     * Sets reason_id
     *
     * @param int|null $reason_id The reason for the redistribution. Valid reasons are: <ul>  <li>401: Stock transfer</li>  <li>402: Stock correction by stocktaking</li>  <li>403: Stock transfer because of need for repair</li> </ul>
     *
     * @return $this
     */
    public function setReasonId(?int $reason_id): static
    {
        if (is_null($reason_id)) {
            throw new InvalidArgumentException('non-nullable reason_id cannot be null');
        }
        $this->container['reason_id'] = $reason_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity The quantity to redistribute
     *
     * @return $this
     */
    public function setQuantity(?float $quantity): static
    {
        if (is_null($quantity)) {
            throw new InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets best_before_date
     *
     * @return string|null
     */
    public function getBestBeforeDate(): ?string
    {
        return $this->container['best_before_date'];
    }

    /**
     * Sets best_before_date
     *
     * @param string|null $best_before_date The best before date of the redistribution
     *
     * @return $this
     */
    public function setBestBeforeDate(?string $best_before_date): static
    {
        if (is_null($best_before_date)) {
            throw new InvalidArgumentException('non-nullable best_before_date cannot be null');
        }
        $this->container['best_before_date'] = $best_before_date;

        return $this;
    }

    /**
     * Gets batch
     *
     * @return string|null
     */
    public function getBatch(): ?string
    {
        return $this->container['batch'];
    }

    /**
     * Sets batch
     *
     * @param string|null $batch The batch of the redistribution
     *
     * @return $this
     */
    public function setBatch(?string $batch): static
    {
        if (is_null($batch)) {
            throw new InvalidArgumentException('non-nullable batch cannot be null');
        }
        $this->container['batch'] = $batch;

        return $this;
    }

    /**
     * Gets current_storage_location_id
     *
     * @return int|null
     */
    public function getCurrentStorageLocationId(): ?int
    {
        return $this->container['current_storage_location_id'];
    }

    /**
     * Sets current_storage_location_id
     *
     * @param int|null $current_storage_location_id The ID of the current storage location
     *
     * @return $this
     */
    public function setCurrentStorageLocationId(?int $current_storage_location_id): static
    {
        if (is_null($current_storage_location_id)) {
            throw new InvalidArgumentException('non-nullable current_storage_location_id cannot be null');
        }
        $this->container['current_storage_location_id'] = $current_storage_location_id;

        return $this;
    }

    /**
     * Gets current_warehouse_id
     *
     * @return int|null
     */
    public function getCurrentWarehouseId(): ?int
    {
        return $this->container['current_warehouse_id'];
    }

    /**
     * Sets current_warehouse_id
     *
     * @param int|null $current_warehouse_id The ID of the current warehouse
     *
     * @return $this
     */
    public function setCurrentWarehouseId(?int $current_warehouse_id): static
    {
        if (is_null($current_warehouse_id)) {
            throw new InvalidArgumentException('non-nullable current_warehouse_id cannot be null');
        }
        $this->container['current_warehouse_id'] = $current_warehouse_id;

        return $this;
    }

    /**
     * Gets new_storage_location_id
     *
     * @return int|null
     */
    public function getNewStorageLocationId(): ?int
    {
        return $this->container['new_storage_location_id'];
    }

    /**
     * Sets new_storage_location_id
     *
     * @param int|null $new_storage_location_id The ID of the new storage location
     *
     * @return $this
     */
    public function setNewStorageLocationId(?int $new_storage_location_id): static
    {
        if (is_null($new_storage_location_id)) {
            throw new InvalidArgumentException('non-nullable new_storage_location_id cannot be null');
        }
        $this->container['new_storage_location_id'] = $new_storage_location_id;

        return $this;
    }

    /**
     * Gets new_warehouse_id
     *
     * @return int|null
     */
    public function getNewWarehouseId(): ?int
    {
        return $this->container['new_warehouse_id'];
    }

    /**
     * Sets new_warehouse_id
     *
     * @param int|null $new_warehouse_id The ID of the new warehouse
     *
     * @return $this
     */
    public function setNewWarehouseId(?int $new_warehouse_id): static
    {
        if (is_null($new_warehouse_id)) {
            throw new InvalidArgumentException('non-nullable new_warehouse_id cannot be null');
        }
        $this->container['new_warehouse_id'] = $new_warehouse_id;

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



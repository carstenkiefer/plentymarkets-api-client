<?php
/**
 * VariationStockCorrection
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
 * VariationStockCorrection Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class VariationStockCorrection implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'VariationStockCorrection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'variation_id' => 'int',
        'warehouse_id' => 'int',
        'storage_location_id' => 'int',
        'quantity' => 'float',
        'best_before_date' => 'string',
        'batch' => 'string',
        'reason_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'variation_id' => null,
        'warehouse_id' => null,
        'storage_location_id' => null,
        'quantity' => null,
        'best_before_date' => null,
        'batch' => null,
        'reason_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'variation_id' => false,
		'warehouse_id' => false,
		'storage_location_id' => false,
		'quantity' => false,
		'best_before_date' => false,
		'batch' => false,
		'reason_id' => false
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
        'storage_location_id' => 'storageLocationId',
        'quantity' => 'quantity',
        'best_before_date' => 'bestBeforeDate',
        'batch' => 'batch',
        'reason_id' => 'reasonId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'variation_id' => 'setVariationId',
        'warehouse_id' => 'setWarehouseId',
        'storage_location_id' => 'setStorageLocationId',
        'quantity' => 'setQuantity',
        'best_before_date' => 'setBestBeforeDate',
        'batch' => 'setBatch',
        'reason_id' => 'setReasonId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'variation_id' => 'getVariationId',
        'warehouse_id' => 'getWarehouseId',
        'storage_location_id' => 'getStorageLocationId',
        'quantity' => 'getQuantity',
        'best_before_date' => 'getBestBeforeDate',
        'batch' => 'getBatch',
        'reason_id' => 'getReasonId'
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
        $this->setIfExists('storage_location_id', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('best_before_date', $data ?? [], null);
        $this->setIfExists('batch', $data ?? [], null);
        $this->setIfExists('reason_id', $data ?? [], null);
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
     * Gets storage_location_id
     *
     * @return int|null
     */
    public function getStorageLocationId(): ?int
    {
        return $this->container['storage_location_id'];
    }

    /**
     * Sets storage_location_id
     *
     * @param int|null $storage_location_id The ID of the storage location
     *
     * @return $this
     */
    public function setStorageLocationId(?int $storage_location_id): static
    {
        if (is_null($storage_location_id)) {
            throw new InvalidArgumentException('non-nullable storage_location_id cannot be null');
        }
        $this->container['storage_location_id'] = $storage_location_id;

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
     * @param float|null $quantity The quantity of the variation
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
     * @param string|null $best_before_date The best before date of the variation
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
     * @param string|null $batch The batch of the variation
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
     * @param int|null $reason_id The reason for correction. The following reasons are available: <ul> <li>301: Stock correction</li> <li>302: Stock correction by stocktaking</li> <li>304: Stock correction because of manufacturer error</li> <li>305: Stock correction because of unusable paper</li> <li>306: Stock correction because of packing error</li> <li>307: Stock correction because of damage</li> <li>309: Stock correction (internal offset)</li> <li>317: Stock correction because of BBD</li> <li>318: Stock correction because of shipping items to FBA</li> <li>319: Stock correction because of shipping items to fulfillment service provider</li> <li>320: Stock correction because of sample for interested parties</li> <li>321: Stock correction because of sample for customers</li> <li>322: Stock correction because of sample</li> <li>323: Stock correction because quality models are booked in</li> <li>324: Stock correction because quality models are booked out</li> <li>325: Stock correction because of gift</li> <li>326: Stock correction because of malfunction (without return)</li> <li>327: Stock correction because of loss</li> <li>328: Stock correction because of unpack</li> </ul>
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



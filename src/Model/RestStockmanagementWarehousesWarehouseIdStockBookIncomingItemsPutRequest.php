<?php
/**
 * RestStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPutRequest
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
 * RestStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPutRequest Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RestStockmanagementWarehousesWarehouseIdStockBookIncomingItemsPutRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = '_rest_stockmanagement_warehouses__warehouseId__stock_bookIncomingItems_put_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'incoming_items' => '\ck/plenty-client\Model\VariationStockIntake[]',
        'variation_id' => 'int',
        'delivered_at' => 'string',
        'order_number' => 'string',
        'currency' => 'string',
        'quantity' => 'float',
        'purchase_price' => 'float',
        'storage_location_id' => 'int',
        'reason_id' => 'int',
        'supplier_id' => 'int',
        'exchange_rate' => 'float',
        'batch' => 'string',
        'best_before_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'incoming_items' => null,
        'variation_id' => null,
        'delivered_at' => null,
        'order_number' => null,
        'currency' => null,
        'quantity' => null,
        'purchase_price' => null,
        'storage_location_id' => null,
        'reason_id' => null,
        'supplier_id' => null,
        'exchange_rate' => null,
        'batch' => null,
        'best_before_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'incoming_items' => false,
		'variation_id' => false,
		'delivered_at' => false,
		'order_number' => false,
		'currency' => false,
		'quantity' => false,
		'purchase_price' => false,
		'storage_location_id' => false,
		'reason_id' => false,
		'supplier_id' => false,
		'exchange_rate' => false,
		'batch' => false,
		'best_before_date' => false
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
        'incoming_items' => 'incomingItems',
        'variation_id' => 'variationId',
        'delivered_at' => 'deliveredAt',
        'order_number' => 'orderNumber',
        'currency' => 'currency',
        'quantity' => 'quantity',
        'purchase_price' => 'purchasePrice',
        'storage_location_id' => 'storageLocationId',
        'reason_id' => 'reasonId',
        'supplier_id' => 'supplierId',
        'exchange_rate' => 'exchangeRate',
        'batch' => 'batch',
        'best_before_date' => 'bestBeforeDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'incoming_items' => 'setIncomingItems',
        'variation_id' => 'setVariationId',
        'delivered_at' => 'setDeliveredAt',
        'order_number' => 'setOrderNumber',
        'currency' => 'setCurrency',
        'quantity' => 'setQuantity',
        'purchase_price' => 'setPurchasePrice',
        'storage_location_id' => 'setStorageLocationId',
        'reason_id' => 'setReasonId',
        'supplier_id' => 'setSupplierId',
        'exchange_rate' => 'setExchangeRate',
        'batch' => 'setBatch',
        'best_before_date' => 'setBestBeforeDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'incoming_items' => 'getIncomingItems',
        'variation_id' => 'getVariationId',
        'delivered_at' => 'getDeliveredAt',
        'order_number' => 'getOrderNumber',
        'currency' => 'getCurrency',
        'quantity' => 'getQuantity',
        'purchase_price' => 'getPurchasePrice',
        'storage_location_id' => 'getStorageLocationId',
        'reason_id' => 'getReasonId',
        'supplier_id' => 'getSupplierId',
        'exchange_rate' => 'getExchangeRate',
        'batch' => 'getBatch',
        'best_before_date' => 'getBestBeforeDate'
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
        $this->setIfExists('incoming_items', $data ?? [], null);
        $this->setIfExists('variation_id', $data ?? [], null);
        $this->setIfExists('delivered_at', $data ?? [], null);
        $this->setIfExists('order_number', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('purchase_price', $data ?? [], null);
        $this->setIfExists('storage_location_id', $data ?? [], null);
        $this->setIfExists('reason_id', $data ?? [], null);
        $this->setIfExists('supplier_id', $data ?? [], null);
        $this->setIfExists('exchange_rate', $data ?? [], null);
        $this->setIfExists('batch', $data ?? [], null);
        $this->setIfExists('best_before_date', $data ?? [], null);
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

        if ($this->container['variation_id'] === null) {
            $invalidProperties[] = "'variation_id' can't be null";
        }
        if ($this->container['delivered_at'] === null) {
            $invalidProperties[] = "'delivered_at' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['reason_id'] === null) {
            $invalidProperties[] = "'reason_id' can't be null";
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
     * Gets incoming_items
     *
     * @return \ck/plenty-client\Model\VariationStockIntake[]|null
     */
    public function getIncomingItems(): ?array
    {
        return $this->container['incoming_items'];
    }

    /**
     * Sets incoming_items
     *
     * @param \ck/plenty-client\Model\VariationStockIntake[]|null $incoming_items incoming_items
     *
     * @return $this
     */
    public function setIncomingItems(?array $incoming_items): static
    {
        if (is_null($incoming_items)) {
            throw new InvalidArgumentException('non-nullable incoming_items cannot be null');
        }
        $this->container['incoming_items'] = $incoming_items;

        return $this;
    }

    /**
     * Gets variation_id
     *
     * @return int
     */
    public function getVariationId(): int
    {
        return $this->container['variation_id'];
    }

    /**
     * Sets variation_id
     *
     * @param int $variation_id The ID of the variation
     *
     * @return $this
     */
    public function setVariationId(int $variation_id): static
    {
        if (is_null($variation_id)) {
            throw new InvalidArgumentException('non-nullable variation_id cannot be null');
        }
        $this->container['variation_id'] = $variation_id;

        return $this;
    }

    /**
     * Gets delivered_at
     *
     * @return string
     */
    public function getDeliveredAt(): string
    {
        return $this->container['delivered_at'];
    }

    /**
     * Sets delivered_at
     *
     * @param string $delivered_at The date when stock was booked in. The date is given in W3C format.
     *
     * @return $this
     */
    public function setDeliveredAt(string $delivered_at): static
    {
        if (is_null($delivered_at)) {
            throw new InvalidArgumentException('non-nullable delivered_at cannot be null');
        }
        $this->container['delivered_at'] = $delivered_at;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return string|null
     */
    public function getOrderNumber(): ?string
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string|null $order_number The order number optional
     *
     * @return $this
     */
    public function setOrderNumber(?string $order_number): static
    {
        if (is_null($order_number)) {
            throw new InvalidArgumentException('non-nullable order_number cannot be null');
        }
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The currency
     *
     * @return $this
     */
    public function setCurrency(string $currency): static
    {
        if (is_null($currency)) {
            throw new InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity The quantity of a variation
     *
     * @return $this
     */
    public function setQuantity(float $quantity): static
    {
        if (is_null($quantity)) {
            throw new InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

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
     * @param float|null $purchase_price The purchase price optional
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
     * @param int|null $storage_location_id The ID of the storage location optional
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
     * Gets reason_id
     *
     * @return int
     */
    public function getReasonId(): int
    {
        return $this->container['reason_id'];
    }

    /**
     * Sets reason_id
     *
     * @param int $reason_id The ID of the reason. The following IDs are available:  101: Incoming items 102: Booked in by stocktaking 104: Rebooked into stock because no production errors were found 106: Maculation canceled 107: Packing error, items are re-booked 109: Incoming items (logistics) 115: Incoming items (second choice) 116: Booked in by correction 117: Unpacked item 180: Incoming items (purchase order) 181: Incoming items (warehousing)
     *
     * @return $this
     */
    public function setReasonId(int $reason_id): static
    {
        if (is_null($reason_id)) {
            throw new InvalidArgumentException('non-nullable reason_id cannot be null');
        }
        $this->container['reason_id'] = $reason_id;

        return $this;
    }

    /**
     * Gets supplier_id
     *
     * @return int|null
     */
    public function getSupplierId(): ?int
    {
        return $this->container['supplier_id'];
    }

    /**
     * Sets supplier_id
     *
     * @param int|null $supplier_id The ID of the supplier optional
     *
     * @return $this
     */
    public function setSupplierId(?int $supplier_id): static
    {
        if (is_null($supplier_id)) {
            throw new InvalidArgumentException('non-nullable supplier_id cannot be null');
        }
        $this->container['supplier_id'] = $supplier_id;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param float|null $exchange_rate The exchange rate optional
     *
     * @return $this
     */
    public function setExchangeRate(?float $exchange_rate): static
    {
        if (is_null($exchange_rate)) {
            throw new InvalidArgumentException('non-nullable exchange_rate cannot be null');
        }
        $this->container['exchange_rate'] = $exchange_rate;

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
     * @param string|null $batch The batch of the variation optional
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
     * @param string|null $best_before_date The best before date of the variation optional
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



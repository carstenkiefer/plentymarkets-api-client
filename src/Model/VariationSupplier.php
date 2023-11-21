<?php
/**
 * VariationSupplier
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
 * VariationSupplier Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class VariationSupplier implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'VariationSupplier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'variation_id' => 'int',
        'supplier_id' => 'int',
        'purchase_price' => 'float',
        'minimum_purchase' => 'int',
        'item_number' => 'string',
        'last_price_query' => 'string',
        'delivery_time_in_days' => 'int',
        'discount' => 'float',
        'is_discountable' => 'string',
        'packaging_unit' => 'float',
        'last_update_timestamp' => 'string',
        'created_at' => 'string',
        'currency_purchase_price' => 'float',
        'item_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'variation_id' => null,
        'supplier_id' => null,
        'purchase_price' => null,
        'minimum_purchase' => null,
        'item_number' => null,
        'last_price_query' => null,
        'delivery_time_in_days' => null,
        'discount' => null,
        'is_discountable' => null,
        'packaging_unit' => null,
        'last_update_timestamp' => null,
        'created_at' => null,
        'currency_purchase_price' => null,
        'item_description' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'variation_id' => false,
		'supplier_id' => false,
		'purchase_price' => false,
		'minimum_purchase' => false,
		'item_number' => false,
		'last_price_query' => false,
		'delivery_time_in_days' => false,
		'discount' => false,
		'is_discountable' => false,
		'packaging_unit' => false,
		'last_update_timestamp' => false,
		'created_at' => false,
		'currency_purchase_price' => false,
		'item_description' => false
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
        'variation_id' => 'variationId',
        'supplier_id' => 'supplierId',
        'purchase_price' => 'purchasePrice',
        'minimum_purchase' => 'minimumPurchase',
        'item_number' => 'itemNumber',
        'last_price_query' => 'lastPriceQuery',
        'delivery_time_in_days' => 'deliveryTimeInDays',
        'discount' => 'discount',
        'is_discountable' => 'isDiscountable',
        'packaging_unit' => 'packagingUnit',
        'last_update_timestamp' => 'lastUpdateTimestamp',
        'created_at' => 'createdAt',
        'currency_purchase_price' => 'currencyPurchasePrice',
        'item_description' => 'itemDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'variation_id' => 'setVariationId',
        'supplier_id' => 'setSupplierId',
        'purchase_price' => 'setPurchasePrice',
        'minimum_purchase' => 'setMinimumPurchase',
        'item_number' => 'setItemNumber',
        'last_price_query' => 'setLastPriceQuery',
        'delivery_time_in_days' => 'setDeliveryTimeInDays',
        'discount' => 'setDiscount',
        'is_discountable' => 'setIsDiscountable',
        'packaging_unit' => 'setPackagingUnit',
        'last_update_timestamp' => 'setLastUpdateTimestamp',
        'created_at' => 'setCreatedAt',
        'currency_purchase_price' => 'setCurrencyPurchasePrice',
        'item_description' => 'setItemDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'variation_id' => 'getVariationId',
        'supplier_id' => 'getSupplierId',
        'purchase_price' => 'getPurchasePrice',
        'minimum_purchase' => 'getMinimumPurchase',
        'item_number' => 'getItemNumber',
        'last_price_query' => 'getLastPriceQuery',
        'delivery_time_in_days' => 'getDeliveryTimeInDays',
        'discount' => 'getDiscount',
        'is_discountable' => 'getIsDiscountable',
        'packaging_unit' => 'getPackagingUnit',
        'last_update_timestamp' => 'getLastUpdateTimestamp',
        'created_at' => 'getCreatedAt',
        'currency_purchase_price' => 'getCurrencyPurchasePrice',
        'item_description' => 'getItemDescription'
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
        $this->setIfExists('variation_id', $data ?? [], null);
        $this->setIfExists('supplier_id', $data ?? [], null);
        $this->setIfExists('purchase_price', $data ?? [], null);
        $this->setIfExists('minimum_purchase', $data ?? [], null);
        $this->setIfExists('item_number', $data ?? [], null);
        $this->setIfExists('last_price_query', $data ?? [], null);
        $this->setIfExists('delivery_time_in_days', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('is_discountable', $data ?? [], null);
        $this->setIfExists('packaging_unit', $data ?? [], null);
        $this->setIfExists('last_update_timestamp', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('currency_purchase_price', $data ?? [], null);
        $this->setIfExists('item_description', $data ?? [], null);
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
     * @param int|null $id The unique ID of the link between variation and supplier
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
     * @param int|null $supplier_id The unique ID of the supplier
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
     * @param float|null $purchase_price The price at which the variation was purchased from this supplier.
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
     * Gets minimum_purchase
     *
     * @return int|null
     */
    public function getMinimumPurchase(): ?int
    {
        return $this->container['minimum_purchase'];
    }

    /**
     * Sets minimum_purchase
     *
     * @param int|null $minimum_purchase The minimum quantity of the variation that has to be ordered from the supplier. This value is also used as a quantity suggestion when creating reorders.
     *
     * @return $this
     */
    public function setMinimumPurchase(?int $minimum_purchase): static
    {
        if (is_null($minimum_purchase)) {
            throw new InvalidArgumentException('non-nullable minimum_purchase cannot be null');
        }
        $this->container['minimum_purchase'] = $minimum_purchase;

        return $this;
    }

    /**
     * Gets item_number
     *
     * @return string|null
     */
    public function getItemNumber(): ?string
    {
        return $this->container['item_number'];
    }

    /**
     * Sets item_number
     *
     * @param string|null $item_number The external item number assigned to the variation by this supplier
     *
     * @return $this
     */
    public function setItemNumber(?string $item_number): static
    {
        if (is_null($item_number)) {
            throw new InvalidArgumentException('non-nullable item_number cannot be null');
        }
        $this->container['item_number'] = $item_number;

        return $this;
    }

    /**
     * Gets last_price_query
     *
     * @return string|null
     */
    public function getLastPriceQuery(): ?string
    {
        return $this->container['last_price_query'];
    }

    /**
     * Sets last_price_query
     *
     * @param string|null $last_price_query The date of the last price query to this supplier. This helps to plan price negotiations.
     *
     * @return $this
     */
    public function setLastPriceQuery(?string $last_price_query): static
    {
        if (is_null($last_price_query)) {
            throw new InvalidArgumentException('non-nullable last_price_query cannot be null');
        }
        $this->container['last_price_query'] = $last_price_query;

        return $this;
    }

    /**
     * Gets delivery_time_in_days
     *
     * @return int|null
     */
    public function getDeliveryTimeInDays(): ?int
    {
        return $this->container['delivery_time_in_days'];
    }

    /**
     * Sets delivery_time_in_days
     *
     * @param int|null $delivery_time_in_days The delivery time in days for the variation saved for this supplier
     *
     * @return $this
     */
    public function setDeliveryTimeInDays(?int $delivery_time_in_days): static
    {
        if (is_null($delivery_time_in_days)) {
            throw new InvalidArgumentException('non-nullable delivery_time_in_days cannot be null');
        }
        $this->container['delivery_time_in_days'] = $delivery_time_in_days;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return float|null
     */
    public function getDiscount(): ?float
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param float|null $discount The discount in percent the supplier grants for the variation.
     *
     * @return $this
     */
    public function setDiscount(?float $discount): static
    {
        if (is_null($discount)) {
            throw new InvalidArgumentException('non-nullable discount cannot be null');
        }
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets is_discountable
     *
     * @return string|null
     */
    public function getIsDiscountable(): ?string
    {
        return $this->container['is_discountable'];
    }

    /**
     * Sets is_discountable
     *
     * @param string|null $is_discountable Flag that indicates if the supplier's discount for this variation is active.
     *
     * @return $this
     */
    public function setIsDiscountable(?string $is_discountable): static
    {
        if (is_null($is_discountable)) {
            throw new InvalidArgumentException('non-nullable is_discountable cannot be null');
        }
        $this->container['is_discountable'] = $is_discountable;

        return $this;
    }

    /**
     * Gets packaging_unit
     *
     * @return float|null
     */
    public function getPackagingUnit(): ?float
    {
        return $this->container['packaging_unit'];
    }

    /**
     * Sets packaging_unit
     *
     * @param float|null $packaging_unit The packaging unit of the supplier if it differs from the packaging unit settings in plentymarkets.
     *
     * @return $this
     */
    public function setPackagingUnit(?float $packaging_unit): static
    {
        if (is_null($packaging_unit)) {
            throw new InvalidArgumentException('non-nullable packaging_unit cannot be null');
        }
        $this->container['packaging_unit'] = $packaging_unit;

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
     * @param string|null $last_update_timestamp The time the supplier data was last updated
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
     * @param string|null $created_at The time the supplier data was created
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
     * Gets currency_purchase_price
     *
     * @return float|null
     */
    public function getCurrencyPurchasePrice(): ?float
    {
        return $this->container['currency_purchase_price'];
    }

    /**
     * Sets currency_purchase_price
     *
     * @param float|null $currency_purchase_price The purchase price in the currency of the supplier
     *
     * @return $this
     */
    public function setCurrencyPurchasePrice(?float $currency_purchase_price): static
    {
        if (is_null($currency_purchase_price)) {
            throw new InvalidArgumentException('non-nullable currency_purchase_price cannot be null');
        }
        $this->container['currency_purchase_price'] = $currency_purchase_price;

        return $this;
    }

    /**
     * Gets item_description
     *
     * @return string|null
     */
    public function getItemDescription(): ?string
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description
     *
     * @param string|null $item_description The supplier item description
     *
     * @return $this
     */
    public function setItemDescription(?string $item_description): static
    {
        if (is_null($item_description)) {
            throw new InvalidArgumentException('non-nullable item_description cannot be null');
        }
        $this->container['item_description'] = $item_description;

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



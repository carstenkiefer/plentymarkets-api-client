<?php
/**
 * RestPaymentsPutRequest
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
 * RestPaymentsPutRequest Class Doc Comment
 *
 * @package  ck
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RestPaymentsPutRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = '_rest_payments_put_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'amount' => 'float',
        'exchange_ratio' => 'float',
        'mop_id' => 'int',
        'parent_id' => 'int',
        'deleted' => 'int',
        'unaccountable' => 'int',
        'currency' => 'string',
        'type' => 'string',
        'status' => 'int',
        'transaction_type' => 'int',
        'regenerate_hash' => 'bool',
        'update_order_payment_status' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'amount' => null,
        'exchange_ratio' => null,
        'mop_id' => null,
        'parent_id' => null,
        'deleted' => null,
        'unaccountable' => null,
        'currency' => null,
        'type' => null,
        'status' => null,
        'transaction_type' => null,
        'regenerate_hash' => null,
        'update_order_payment_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'amount' => false,
		'exchange_ratio' => false,
		'mop_id' => false,
		'parent_id' => false,
		'deleted' => false,
		'unaccountable' => false,
		'currency' => false,
		'type' => false,
		'status' => false,
		'transaction_type' => false,
		'regenerate_hash' => false,
		'update_order_payment_status' => false
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
        'amount' => 'amount',
        'exchange_ratio' => 'exchangeRatio',
        'mop_id' => 'mopId',
        'parent_id' => 'parentId',
        'deleted' => 'deleted',
        'unaccountable' => 'unaccountable',
        'currency' => 'currency',
        'type' => 'type',
        'status' => 'status',
        'transaction_type' => 'transactionType',
        'regenerate_hash' => 'regenerateHash',
        'update_order_payment_status' => 'updateOrderPaymentStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'amount' => 'setAmount',
        'exchange_ratio' => 'setExchangeRatio',
        'mop_id' => 'setMopId',
        'parent_id' => 'setParentId',
        'deleted' => 'setDeleted',
        'unaccountable' => 'setUnaccountable',
        'currency' => 'setCurrency',
        'type' => 'setType',
        'status' => 'setStatus',
        'transaction_type' => 'setTransactionType',
        'regenerate_hash' => 'setRegenerateHash',
        'update_order_payment_status' => 'setUpdateOrderPaymentStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'amount' => 'getAmount',
        'exchange_ratio' => 'getExchangeRatio',
        'mop_id' => 'getMopId',
        'parent_id' => 'getParentId',
        'deleted' => 'getDeleted',
        'unaccountable' => 'getUnaccountable',
        'currency' => 'getCurrency',
        'type' => 'getType',
        'status' => 'getStatus',
        'transaction_type' => 'getTransactionType',
        'regenerate_hash' => 'getRegenerateHash',
        'update_order_payment_status' => 'getUpdateOrderPaymentStatus'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('exchange_ratio', $data ?? [], null);
        $this->setIfExists('mop_id', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('deleted', $data ?? [], null);
        $this->setIfExists('unaccountable', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('transaction_type', $data ?? [], null);
        $this->setIfExists('regenerate_hash', $data ?? [], null);
        $this->setIfExists('update_order_payment_status', $data ?? [], null);
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

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['exchange_ratio'] === null) {
            $invalidProperties[] = "'exchange_ratio' can't be null";
        }
        if ($this->container['mop_id'] === null) {
            $invalidProperties[] = "'mop_id' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['transaction_type'] === null) {
            $invalidProperties[] = "'transaction_type' can't be null";
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
     * Gets amount
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The amount of the payment  matching to /^[0-9]{1,9}[\\.][0-9]{4}+$/
     *
     * @return $this
     */
    public function setAmount(float $amount): static
    {
        if (is_null($amount)) {
            throw new InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets exchange_ratio
     *
     * @return float
     */
    public function getExchangeRatio(): float
    {
        return $this->container['exchange_ratio'];
    }

    /**
     * Sets exchange_ratio
     *
     * @param float $exchange_ratio The exchange rate. Exchange rates are used if the default currency saved in plentymarkets differs from the currency of the order.  matching to /^[0-9]{1,9}[\\.][0-9]{4}+$/
     *
     * @return $this
     */
    public function setExchangeRatio(float $exchange_ratio): static
    {
        if (is_null($exchange_ratio)) {
            throw new InvalidArgumentException('non-nullable exchange_ratio cannot be null');
        }
        $this->container['exchange_ratio'] = $exchange_ratio;

        return $this;
    }

    /**
     * Gets mop_id
     *
     * @return int
     */
    public function getMopId(): int
    {
        return $this->container['mop_id'];
    }

    /**
     * Sets mop_id
     *
     * @param int $mop_id The ID of the payment method  matching to /^[0-9]+$/
     *
     * @return $this
     */
    public function setMopId(int $mop_id): static
    {
        if (is_null($mop_id)) {
            throw new InvalidArgumentException('non-nullable mop_id cannot be null');
        }
        $this->container['mop_id'] = $mop_id;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int|null $parent_id The ID of the parent payment optional matching to /^[0-9]+$/
     *
     * @return $this
     */
    public function setParentId(?int $parent_id): static
    {
        if (is_null($parent_id)) {
            throw new InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return int|null
     */
    public function getDeleted(): ?int
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param int|null $deleted A deleted payment. Deleted payments have the value 1 and are not displayed in the plentymarkets back end. optional matching to /^[0-1]$/
     *
     * @return $this
     */
    public function setDeleted(?int $deleted): static
    {
        if (is_null($deleted)) {
            throw new InvalidArgumentException('non-nullable deleted cannot be null');
        }
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets unaccountable
     *
     * @return int|null
     */
    public function getUnaccountable(): ?int
    {
        return $this->container['unaccountable'];
    }

    /**
     * Sets unaccountable
     *
     * @param int|null $unaccountable An unassigned payment. Unassigned payments have the value 1. optional matching to /^[0-1]$/
     *
     * @return $this
     */
    public function setUnaccountable(?int $unaccountable): static
    {
        if (is_null($unaccountable)) {
            throw new InvalidArgumentException('non-nullable unaccountable cannot be null');
        }
        $this->container['unaccountable'] = $unaccountable;

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
     * @param string $currency The currency of the payment in ISO 4217 code.  matching to /^[A-Z]{3}$/
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
     * Gets type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The payment type. Available types are credit and debit.  allowed values are debit, credit
     *
     * @return $this
     */
    public function setType(string $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus(): int
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status The status of the payment  matching to /^[1-9][0]?$/
     *
     * @return $this
     */
    public function setStatus(int $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return int
     */
    public function getTransactionType(): int
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param int $transaction_type The transaction type of the payment. The following transaction types are available:      Interim transaction report = 1     Booked payment = 2     Split payment = 3   matching to /^[1-3]$/
     *
     * @return $this
     */
    public function setTransactionType(int $transaction_type): static
    {
        if (is_null($transaction_type)) {
            throw new InvalidArgumentException('non-nullable transaction_type cannot be null');
        }
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets regenerate_hash
     *
     * @return bool|null
     */
    public function getRegenerateHash(): ?bool
    {
        return $this->container['regenerate_hash'];
    }

    /**
     * Sets regenerate_hash
     *
     * @param bool|null $regenerate_hash If $regenerateHash is true, regenerate the payment hash value. Default is false. optional
     *
     * @return $this
     */
    public function setRegenerateHash(?bool $regenerate_hash): static
    {
        if (is_null($regenerate_hash)) {
            throw new InvalidArgumentException('non-nullable regenerate_hash cannot be null');
        }
        $this->container['regenerate_hash'] = $regenerate_hash;

        return $this;
    }

    /**
     * Gets update_order_payment_status
     *
     * @return bool|null
     */
    public function getUpdateOrderPaymentStatus(): ?bool
    {
        return $this->container['update_order_payment_status'];
    }

    /**
     * Sets update_order_payment_status
     *
     * @param bool|null $update_order_payment_status If $updateOrderPaymentStatus is true, update the order payment status. Default is false. optional
     *
     * @return $this
     */
    public function setUpdateOrderPaymentStatus(?bool $update_order_payment_status): static
    {
        if (is_null($update_order_payment_status)) {
            throw new InvalidArgumentException('non-nullable update_order_payment_status cannot be null');
        }
        $this->container['update_order_payment_status'] = $update_order_payment_status;

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



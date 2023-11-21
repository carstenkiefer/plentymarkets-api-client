<?php
/**
 * PaymentPolicy
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
 * PaymentPolicy Class Doc Comment
 *
 * @package  ck
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PaymentPolicy implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PaymentPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'payment_policy_id' => 'string',
        'description' => 'string',
        'immediate_pay' => 'bool',
        'marketplace_id' => 'string',
        'name' => 'string',
        'payment_instructions' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'payment_policy_id' => null,
        'description' => null,
        'immediate_pay' => null,
        'marketplace_id' => null,
        'name' => null,
        'payment_instructions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'payment_policy_id' => false,
		'description' => false,
		'immediate_pay' => false,
		'marketplace_id' => false,
		'name' => false,
		'payment_instructions' => false
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
        'payment_policy_id' => 'paymentPolicyId',
        'description' => 'description',
        'immediate_pay' => 'immediatePay',
        'marketplace_id' => 'marketplaceId',
        'name' => 'name',
        'payment_instructions' => 'paymentInstructions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'payment_policy_id' => 'setPaymentPolicyId',
        'description' => 'setDescription',
        'immediate_pay' => 'setImmediatePay',
        'marketplace_id' => 'setMarketplaceId',
        'name' => 'setName',
        'payment_instructions' => 'setPaymentInstructions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'payment_policy_id' => 'getPaymentPolicyId',
        'description' => 'getDescription',
        'immediate_pay' => 'getImmediatePay',
        'marketplace_id' => 'getMarketplaceId',
        'name' => 'getName',
        'payment_instructions' => 'getPaymentInstructions'
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
        $this->setIfExists('payment_policy_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('immediate_pay', $data ?? [], null);
        $this->setIfExists('marketplace_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('payment_instructions', $data ?? [], null);
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
     * Gets payment_policy_id
     *
     * @return string|null
     */
    public function getPaymentPolicyId(): ?string
    {
        return $this->container['payment_policy_id'];
    }

    /**
     * Sets payment_policy_id
     *
     * @param string|null $payment_policy_id The ID of the payment policy.
     *
     * @return $this
     */
    public function setPaymentPolicyId(?string $payment_policy_id): static
    {
        if (is_null($payment_policy_id)) {
            throw new InvalidArgumentException('non-nullable payment_policy_id cannot be null');
        }
        $this->container['payment_policy_id'] = $payment_policy_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description An optional seller-defined description of the payment policy. (Max length: 250)
     *
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        if (is_null($description)) {
            throw new InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets immediate_pay
     *
     * @return bool|null
     */
    public function getImmediatePay(): ?bool
    {
        return $this->container['immediate_pay'];
    }

    /**
     * Sets immediate_pay
     *
     * @param bool|null $immediate_pay Indicate if the payment is due upon receipt or not. (eBay generates a receipt when the buyer agrees to purchase an item)
     *
     * @return $this
     */
    public function setImmediatePay(?bool $immediate_pay): static
    {
        if (is_null($immediate_pay)) {
            throw new InvalidArgumentException('non-nullable immediate_pay cannot be null');
        }
        $this->container['immediate_pay'] = $immediate_pay;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId(): ?string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id The ID of the eBay marketplace to which this return policy applies. If this value is not specified, value defaults to the seller's eBay registration site.
     *
     * @return $this
     */
    public function setMarketplaceId(?string $marketplace_id): static
    {
        if (is_null($marketplace_id)) {
            throw new InvalidArgumentException('non-nullable marketplace_id cannot be null');
        }
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name A user-defined name for this payment policy. Names must be unique for policies assigned to the same marketplace. (Max length: 64)
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets payment_instructions
     *
     * @return string|null
     */
    public function getPaymentInstructions(): ?string
    {
        return $this->container['payment_instructions'];
    }

    /**
     * Sets payment_instructions
     *
     * @param string|null $payment_instructions Allows the seller to give payment instructions to the buyer. These instructions appear on the eBay View Item and Checkout pages.
     *
     * @return $this
     */
    public function setPaymentInstructions(?string $payment_instructions): static
    {
        if (is_null($payment_instructions)) {
            throw new InvalidArgumentException('non-nullable payment_instructions cannot be null');
        }
        $this->container['payment_instructions'] = $payment_instructions;

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



<?php
/**
 * ReturnPolicy
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
 * ReturnPolicy Class Doc Comment
 *
 * @package  ck
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ReturnPolicy implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ReturnPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'return_policy_id' => 'string',
        'description' => 'string',
        'extended_holiday_returns_offered' => 'bool',
        'marketplace_id' => 'string',
        'name' => 'string',
        'refund_method' => 'string',
        'restocking_fee_percentage' => 'string',
        'return_instruction' => 'string',
        'return_method' => 'string',
        'returns_accepted' => 'bool',
        'return_shipping_cost_payer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'return_policy_id' => null,
        'description' => null,
        'extended_holiday_returns_offered' => null,
        'marketplace_id' => null,
        'name' => null,
        'refund_method' => null,
        'restocking_fee_percentage' => null,
        'return_instruction' => null,
        'return_method' => null,
        'returns_accepted' => null,
        'return_shipping_cost_payer' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'return_policy_id' => false,
		'description' => false,
		'extended_holiday_returns_offered' => false,
		'marketplace_id' => false,
		'name' => false,
		'refund_method' => false,
		'restocking_fee_percentage' => false,
		'return_instruction' => false,
		'return_method' => false,
		'returns_accepted' => false,
		'return_shipping_cost_payer' => false
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
        'return_policy_id' => 'returnPolicyId',
        'description' => 'description',
        'extended_holiday_returns_offered' => 'extendedHolidayReturnsOffered',
        'marketplace_id' => 'marketplaceId',
        'name' => 'name',
        'refund_method' => 'refundMethod',
        'restocking_fee_percentage' => 'restockingFeePercentage',
        'return_instruction' => 'returnInstruction',
        'return_method' => 'returnMethod',
        'returns_accepted' => 'returnsAccepted',
        'return_shipping_cost_payer' => 'returnShippingCostPayer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'return_policy_id' => 'setReturnPolicyId',
        'description' => 'setDescription',
        'extended_holiday_returns_offered' => 'setExtendedHolidayReturnsOffered',
        'marketplace_id' => 'setMarketplaceId',
        'name' => 'setName',
        'refund_method' => 'setRefundMethod',
        'restocking_fee_percentage' => 'setRestockingFeePercentage',
        'return_instruction' => 'setReturnInstruction',
        'return_method' => 'setReturnMethod',
        'returns_accepted' => 'setReturnsAccepted',
        'return_shipping_cost_payer' => 'setReturnShippingCostPayer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'return_policy_id' => 'getReturnPolicyId',
        'description' => 'getDescription',
        'extended_holiday_returns_offered' => 'getExtendedHolidayReturnsOffered',
        'marketplace_id' => 'getMarketplaceId',
        'name' => 'getName',
        'refund_method' => 'getRefundMethod',
        'restocking_fee_percentage' => 'getRestockingFeePercentage',
        'return_instruction' => 'getReturnInstruction',
        'return_method' => 'getReturnMethod',
        'returns_accepted' => 'getReturnsAccepted',
        'return_shipping_cost_payer' => 'getReturnShippingCostPayer'
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
        $this->setIfExists('return_policy_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('extended_holiday_returns_offered', $data ?? [], null);
        $this->setIfExists('marketplace_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('refund_method', $data ?? [], null);
        $this->setIfExists('restocking_fee_percentage', $data ?? [], null);
        $this->setIfExists('return_instruction', $data ?? [], null);
        $this->setIfExists('return_method', $data ?? [], null);
        $this->setIfExists('returns_accepted', $data ?? [], null);
        $this->setIfExists('return_shipping_cost_payer', $data ?? [], null);
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
     * Gets return_policy_id
     *
     * @return string|null
     */
    public function getReturnPolicyId(): ?string
    {
        return $this->container['return_policy_id'];
    }

    /**
     * Sets return_policy_id
     *
     * @param string|null $return_policy_id The ID of the return policy.
     *
     * @return $this
     */
    public function setReturnPolicyId(?string $return_policy_id): static
    {
        if (is_null($return_policy_id)) {
            throw new InvalidArgumentException('non-nullable return_policy_id cannot be null');
        }
        $this->container['return_policy_id'] = $return_policy_id;

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
     * @param string|null $description An optional seller-defined description of the return policy.
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
     * Gets extended_holiday_returns_offered
     *
     * @return bool|null
     */
    public function getExtendedHolidayReturnsOffered(): ?bool
    {
        return $this->container['extended_holiday_returns_offered'];
    }

    /**
     * Sets extended_holiday_returns_offered
     *
     * @param bool|null $extended_holiday_returns_offered If this value is set to true, it indicates the seller offers an Extended Holiday Returns policy for their listings.
     *
     * @return $this
     */
    public function setExtendedHolidayReturnsOffered(?bool $extended_holiday_returns_offered): static
    {
        if (is_null($extended_holiday_returns_offered)) {
            throw new InvalidArgumentException('non-nullable extended_holiday_returns_offered cannot be null');
        }
        $this->container['extended_holiday_returns_offered'] = $extended_holiday_returns_offered;

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
     * @param string|null $name A user-defined name for this fulfillment policy. Names must be unique for policies assigned to the same marketplace.
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
     * Gets refund_method
     *
     * @return string|null
     */
    public function getRefundMethod(): ?string
    {
        return $this->container['refund_method'];
    }

    /**
     * Sets refund_method
     *
     * @param string|null $refund_method Indicates the method the seller uses to compensate the buyer for returned items. The return method specified applies only to remorse returns. Available options: `MERCHANDISE_CREDIT`, `MONEY_BACK`.
     *
     * @return $this
     */
    public function setRefundMethod(?string $refund_method): static
    {
        if (is_null($refund_method)) {
            throw new InvalidArgumentException('non-nullable refund_method cannot be null');
        }
        $this->container['refund_method'] = $refund_method;

        return $this;
    }

    /**
     * Gets restocking_fee_percentage
     *
     * @return string|null
     */
    public function getRestockingFeePercentage(): ?string
    {
        return $this->container['restocking_fee_percentage'];
    }

    /**
     * Sets restocking_fee_percentage
     *
     * @param string|null $restocking_fee_percentage Sellers who accept returns should include this field if they charge buyers a restocking fee when items are returned.
     *
     * @return $this
     */
    public function setRestockingFeePercentage(?string $restocking_fee_percentage): static
    {
        if (is_null($restocking_fee_percentage)) {
            throw new InvalidArgumentException('non-nullable restocking_fee_percentage cannot be null');
        }
        $this->container['restocking_fee_percentage'] = $restocking_fee_percentage;

        return $this;
    }

    /**
     * Gets return_instruction
     *
     * @return string|null
     */
    public function getReturnInstruction(): ?string
    {
        return $this->container['return_instruction'];
    }

    /**
     * Sets return_instruction
     *
     * @param string|null $return_instruction This optional free-form string field lets the seller provide a detailed explanation of the return policy.
     *
     * @return $this
     */
    public function setReturnInstruction(?string $return_instruction): static
    {
        if (is_null($return_instruction)) {
            throw new InvalidArgumentException('non-nullable return_instruction cannot be null');
        }
        $this->container['return_instruction'] = $return_instruction;

        return $this;
    }

    /**
     * Gets return_method
     *
     * @return string|null
     */
    public function getReturnMethod(): ?string
    {
        return $this->container['return_method'];
    }

    /**
     * Sets return_method
     *
     * @param string|null $return_method This field indicates the method in which the seller handles non-money back return requests for remorse returns. Sellers can specify they either exchange or replace items. Available options: `EXCHANGE`, `REPLACEMENT`.
     *
     * @return $this
     */
    public function setReturnMethod(?string $return_method): static
    {
        if (is_null($return_method)) {
            throw new InvalidArgumentException('non-nullable return_method cannot be null');
        }
        $this->container['return_method'] = $return_method;

        return $this;
    }

    /**
     * Gets returns_accepted
     *
     * @return bool|null
     */
    public function getReturnsAccepted(): ?bool
    {
        return $this->container['returns_accepted'];
    }

    /**
     * Sets returns_accepted
     *
     * @param bool|null $returns_accepted Set this value to true to indicate the seller accepts returns.
     *
     * @return $this
     */
    public function setReturnsAccepted(?bool $returns_accepted): static
    {
        if (is_null($returns_accepted)) {
            throw new InvalidArgumentException('non-nullable returns_accepted cannot be null');
        }
        $this->container['returns_accepted'] = $returns_accepted;

        return $this;
    }

    /**
     * Gets return_shipping_cost_payer
     *
     * @return string|null
     */
    public function getReturnShippingCostPayer(): ?string
    {
        return $this->container['return_shipping_cost_payer'];
    }

    /**
     * Sets return_shipping_cost_payer
     *
     * @param string|null $return_shipping_cost_payer The seller uses this value to specify whether the buyer or the seller is responsible for paying return shipping charges. The field can be set to either `BUYER` or `SELLER`.
     *
     * @return $this
     */
    public function setReturnShippingCostPayer(?string $return_shipping_cost_payer): static
    {
        if (is_null($return_shipping_cost_payer)) {
            throw new InvalidArgumentException('non-nullable return_shipping_cost_payer cannot be null');
        }
        $this->container['return_shipping_cost_payer'] = $return_shipping_cost_payer;

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



<?php
/**
 * RestAccountsPostRequest
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
 * RestAccountsPostRequest Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RestAccountsPostRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = '_rest_accounts_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'number' => 'string',
        'company_name' => 'string',
        'tax_id_number' => 'string',
        'discount_percent' => 'float',
        'valuta' => 'int',
        'discount_days' => 'int',
        'time_for_payment_allowed_days' => 'int',
        'sales_representative_contact_id' => 'int',
        'user_id' => 'int',
        'delivery_time' => 'int',
        'dealer_min_order_value' => 'float',
        'supplier_currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'number' => null,
        'company_name' => null,
        'tax_id_number' => null,
        'discount_percent' => null,
        'valuta' => null,
        'discount_days' => null,
        'time_for_payment_allowed_days' => null,
        'sales_representative_contact_id' => null,
        'user_id' => null,
        'delivery_time' => null,
        'dealer_min_order_value' => null,
        'supplier_currency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'number' => false,
		'company_name' => false,
		'tax_id_number' => false,
		'discount_percent' => false,
		'valuta' => false,
		'discount_days' => false,
		'time_for_payment_allowed_days' => false,
		'sales_representative_contact_id' => false,
		'user_id' => false,
		'delivery_time' => false,
		'dealer_min_order_value' => false,
		'supplier_currency' => false
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
        'number' => 'number',
        'company_name' => 'companyName',
        'tax_id_number' => 'taxIdNumber',
        'discount_percent' => 'discountPercent',
        'valuta' => 'valuta',
        'discount_days' => 'discountDays',
        'time_for_payment_allowed_days' => 'timeForPaymentAllowedDays',
        'sales_representative_contact_id' => 'salesRepresentativeContactId',
        'user_id' => 'userId',
        'delivery_time' => 'deliveryTime',
        'dealer_min_order_value' => 'dealerMinOrderValue',
        'supplier_currency' => 'supplierCurrency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'number' => 'setNumber',
        'company_name' => 'setCompanyName',
        'tax_id_number' => 'setTaxIdNumber',
        'discount_percent' => 'setDiscountPercent',
        'valuta' => 'setValuta',
        'discount_days' => 'setDiscountDays',
        'time_for_payment_allowed_days' => 'setTimeForPaymentAllowedDays',
        'sales_representative_contact_id' => 'setSalesRepresentativeContactId',
        'user_id' => 'setUserId',
        'delivery_time' => 'setDeliveryTime',
        'dealer_min_order_value' => 'setDealerMinOrderValue',
        'supplier_currency' => 'setSupplierCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'number' => 'getNumber',
        'company_name' => 'getCompanyName',
        'tax_id_number' => 'getTaxIdNumber',
        'discount_percent' => 'getDiscountPercent',
        'valuta' => 'getValuta',
        'discount_days' => 'getDiscountDays',
        'time_for_payment_allowed_days' => 'getTimeForPaymentAllowedDays',
        'sales_representative_contact_id' => 'getSalesRepresentativeContactId',
        'user_id' => 'getUserId',
        'delivery_time' => 'getDeliveryTime',
        'dealer_min_order_value' => 'getDealerMinOrderValue',
        'supplier_currency' => 'getSupplierCurrency'
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
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('tax_id_number', $data ?? [], null);
        $this->setIfExists('discount_percent', $data ?? [], null);
        $this->setIfExists('valuta', $data ?? [], null);
        $this->setIfExists('discount_days', $data ?? [], null);
        $this->setIfExists('time_for_payment_allowed_days', $data ?? [], null);
        $this->setIfExists('sales_representative_contact_id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('delivery_time', $data ?? [], null);
        $this->setIfExists('dealer_min_order_value', $data ?? [], null);
        $this->setIfExists('supplier_currency', $data ?? [], null);
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

        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
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
     * Gets number
     *
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number The number of the account optional
     *
     * @return $this
     */
    public function setNumber(?string $number): static
    {
        if (is_null($number)) {
            throw new InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name The company name
     *
     * @return $this
     */
    public function setCompanyName(string $company_name): static
    {
        if (is_null($company_name)) {
            throw new InvalidArgumentException('non-nullable company_name cannot be null');
        }
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets tax_id_number
     *
     * @return string|null
     */
    public function getTaxIdNumber(): ?string
    {
        return $this->container['tax_id_number'];
    }

    /**
     * Sets tax_id_number
     *
     * @param string|null $tax_id_number The ID of the tax number optional
     *
     * @return $this
     */
    public function setTaxIdNumber(?string $tax_id_number): static
    {
        if (is_null($tax_id_number)) {
            throw new InvalidArgumentException('non-nullable tax_id_number cannot be null');
        }
        $this->container['tax_id_number'] = $tax_id_number;

        return $this;
    }

    /**
     * Gets discount_percent
     *
     * @return float|null
     */
    public function getDiscountPercent(): ?float
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param float|null $discount_percent The early payment discount in percent specified for the account optional
     *
     * @return $this
     */
    public function setDiscountPercent(?float $discount_percent): static
    {
        if (is_null($discount_percent)) {
            throw new InvalidArgumentException('non-nullable discount_percent cannot be null');
        }
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets valuta
     *
     * @return int|null
     */
    public function getValuta(): ?int
    {
        return $this->container['valuta'];
    }

    /**
     * Sets valuta
     *
     * @param int|null $valuta The valuta date in days specified for the account optional
     *
     * @return $this
     */
    public function setValuta(?int $valuta): static
    {
        if (is_null($valuta)) {
            throw new InvalidArgumentException('non-nullable valuta cannot be null');
        }
        $this->container['valuta'] = $valuta;

        return $this;
    }

    /**
     * Gets discount_days
     *
     * @return int|null
     */
    public function getDiscountDays(): ?int
    {
        return $this->container['discount_days'];
    }

    /**
     * Sets discount_days
     *
     * @param int|null $discount_days The early payment discount period in days specified for the account optional
     *
     * @return $this
     */
    public function setDiscountDays(?int $discount_days): static
    {
        if (is_null($discount_days)) {
            throw new InvalidArgumentException('non-nullable discount_days cannot be null');
        }
        $this->container['discount_days'] = $discount_days;

        return $this;
    }

    /**
     * Gets time_for_payment_allowed_days
     *
     * @return int|null
     */
    public function getTimeForPaymentAllowedDays(): ?int
    {
        return $this->container['time_for_payment_allowed_days'];
    }

    /**
     * Sets time_for_payment_allowed_days
     *
     * @param int|null $time_for_payment_allowed_days The payment due date in days specified for the account optional
     *
     * @return $this
     */
    public function setTimeForPaymentAllowedDays(?int $time_for_payment_allowed_days): static
    {
        if (is_null($time_for_payment_allowed_days)) {
            throw new InvalidArgumentException('non-nullable time_for_payment_allowed_days cannot be null');
        }
        $this->container['time_for_payment_allowed_days'] = $time_for_payment_allowed_days;

        return $this;
    }

    /**
     * Gets sales_representative_contact_id
     *
     * @return int|null
     */
    public function getSalesRepresentativeContactId(): ?int
    {
        return $this->container['sales_representative_contact_id'];
    }

    /**
     * Sets sales_representative_contact_id
     *
     * @param int|null $sales_representative_contact_id The contact ID of the sales representative optional
     *
     * @return $this
     */
    public function setSalesRepresentativeContactId(?int $sales_representative_contact_id): static
    {
        if (is_null($sales_representative_contact_id)) {
            throw new InvalidArgumentException('non-nullable sales_representative_contact_id cannot be null');
        }
        $this->container['sales_representative_contact_id'] = $sales_representative_contact_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id The ID of the account owner optional
     *
     * @return $this
     */
    public function setUserId(?int $user_id): static
    {
        if (is_null($user_id)) {
            throw new InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets delivery_time
     *
     * @return int|null
     */
    public function getDeliveryTime(): ?int
    {
        return $this->container['delivery_time'];
    }

    /**
     * Sets delivery_time
     *
     * @param int|null $delivery_time The delivery time for the supplier optional
     *
     * @return $this
     */
    public function setDeliveryTime(?int $delivery_time): static
    {
        if (is_null($delivery_time)) {
            throw new InvalidArgumentException('non-nullable delivery_time cannot be null');
        }
        $this->container['delivery_time'] = $delivery_time;

        return $this;
    }

    /**
     * Gets dealer_min_order_value
     *
     * @return float|null
     */
    public function getDealerMinOrderValue(): ?float
    {
        return $this->container['dealer_min_order_value'];
    }

    /**
     * Sets dealer_min_order_value
     *
     * @param float|null $dealer_min_order_value The minimum order value for the supplier optional
     *
     * @return $this
     */
    public function setDealerMinOrderValue(?float $dealer_min_order_value): static
    {
        if (is_null($dealer_min_order_value)) {
            throw new InvalidArgumentException('non-nullable dealer_min_order_value cannot be null');
        }
        $this->container['dealer_min_order_value'] = $dealer_min_order_value;

        return $this;
    }

    /**
     * Gets supplier_currency
     *
     * @return string|null
     */
    public function getSupplierCurrency(): ?string
    {
        return $this->container['supplier_currency'];
    }

    /**
     * Sets supplier_currency
     *
     * @param string|null $supplier_currency The currency used by a supplier optional
     *
     * @return $this
     */
    public function setSupplierCurrency(?string $supplier_currency): static
    {
        if (is_null($supplier_currency)) {
            throw new InvalidArgumentException('non-nullable supplier_currency cannot be null');
        }
        $this->container['supplier_currency'] = $supplier_currency;

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



<?php
/**
 * AccountingLocationSettings
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
 * AccountingLocationSettings Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class AccountingLocationSettings implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AccountingLocationSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'location_id' => 'int',
        'is_invoice_eu_net' => 'bool',
        'is_invoice_export_net' => 'bool',
        'show_shipping_vat' => 'bool',
        'is_small_business' => 'bool',
        'number_of_decimal_places' => 'int',
        'round_totals_only' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'location_id' => null,
        'is_invoice_eu_net' => null,
        'is_invoice_export_net' => null,
        'show_shipping_vat' => null,
        'is_small_business' => null,
        'number_of_decimal_places' => null,
        'round_totals_only' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'location_id' => false,
		'is_invoice_eu_net' => false,
		'is_invoice_export_net' => false,
		'show_shipping_vat' => false,
		'is_small_business' => false,
		'number_of_decimal_places' => false,
		'round_totals_only' => false
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
        'location_id' => 'locationId',
        'is_invoice_eu_net' => 'isInvoiceEUNet',
        'is_invoice_export_net' => 'isInvoiceExportNet',
        'show_shipping_vat' => 'showShippingVat',
        'is_small_business' => 'isSmallBusiness',
        'number_of_decimal_places' => 'numberOfDecimalPlaces',
        'round_totals_only' => 'roundTotalsOnly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'location_id' => 'setLocationId',
        'is_invoice_eu_net' => 'setIsInvoiceEuNet',
        'is_invoice_export_net' => 'setIsInvoiceExportNet',
        'show_shipping_vat' => 'setShowShippingVat',
        'is_small_business' => 'setIsSmallBusiness',
        'number_of_decimal_places' => 'setNumberOfDecimalPlaces',
        'round_totals_only' => 'setRoundTotalsOnly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'location_id' => 'getLocationId',
        'is_invoice_eu_net' => 'getIsInvoiceEuNet',
        'is_invoice_export_net' => 'getIsInvoiceExportNet',
        'show_shipping_vat' => 'getShowShippingVat',
        'is_small_business' => 'getIsSmallBusiness',
        'number_of_decimal_places' => 'getNumberOfDecimalPlaces',
        'round_totals_only' => 'getRoundTotalsOnly'
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
        $this->setIfExists('location_id', $data ?? [], null);
        $this->setIfExists('is_invoice_eu_net', $data ?? [], null);
        $this->setIfExists('is_invoice_export_net', $data ?? [], null);
        $this->setIfExists('show_shipping_vat', $data ?? [], null);
        $this->setIfExists('is_small_business', $data ?? [], null);
        $this->setIfExists('number_of_decimal_places', $data ?? [], null);
        $this->setIfExists('round_totals_only', $data ?? [], null);
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
     * Gets location_id
     *
     * @return int|null
     */
    public function getLocationId(): ?int
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int|null $location_id The ID of the accounting location
     *
     * @return $this
     */
    public function setLocationId(?int $location_id): static
    {
        if (is_null($location_id)) {
            throw new InvalidArgumentException('non-nullable location_id cannot be null');
        }
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets is_invoice_eu_net
     *
     * @return bool|null
     */
    public function getIsInvoiceEuNet(): ?bool
    {
        return $this->container['is_invoice_eu_net'];
    }

    /**
     * Sets is_invoice_eu_net
     *
     * @param bool|null $is_invoice_eu_net Is the invoice net for EU?
     *
     * @return $this
     */
    public function setIsInvoiceEuNet(?bool $is_invoice_eu_net): static
    {
        if (is_null($is_invoice_eu_net)) {
            throw new InvalidArgumentException('non-nullable is_invoice_eu_net cannot be null');
        }
        $this->container['is_invoice_eu_net'] = $is_invoice_eu_net;

        return $this;
    }

    /**
     * Gets is_invoice_export_net
     *
     * @return bool|null
     */
    public function getIsInvoiceExportNet(): ?bool
    {
        return $this->container['is_invoice_export_net'];
    }

    /**
     * Sets is_invoice_export_net
     *
     * @param bool|null $is_invoice_export_net Is the invoice net for export?
     *
     * @return $this
     */
    public function setIsInvoiceExportNet(?bool $is_invoice_export_net): static
    {
        if (is_null($is_invoice_export_net)) {
            throw new InvalidArgumentException('non-nullable is_invoice_export_net cannot be null');
        }
        $this->container['is_invoice_export_net'] = $is_invoice_export_net;

        return $this;
    }

    /**
     * Gets show_shipping_vat
     *
     * @return bool|null
     */
    public function getShowShippingVat(): ?bool
    {
        return $this->container['show_shipping_vat'];
    }

    /**
     * Sets show_shipping_vat
     *
     * @param bool|null $show_shipping_vat Show the vat for shipping costs on the invoice?
     *
     * @return $this
     */
    public function setShowShippingVat(?bool $show_shipping_vat): static
    {
        if (is_null($show_shipping_vat)) {
            throw new InvalidArgumentException('non-nullable show_shipping_vat cannot be null');
        }
        $this->container['show_shipping_vat'] = $show_shipping_vat;

        return $this;
    }

    /**
     * Gets is_small_business
     *
     * @return bool|null
     */
    public function getIsSmallBusiness(): ?bool
    {
        return $this->container['is_small_business'];
    }

    /**
     * Sets is_small_business
     *
     * @param bool|null $is_small_business Is it a small business?
     *
     * @return $this
     */
    public function setIsSmallBusiness(?bool $is_small_business): static
    {
        if (is_null($is_small_business)) {
            throw new InvalidArgumentException('non-nullable is_small_business cannot be null');
        }
        $this->container['is_small_business'] = $is_small_business;

        return $this;
    }

    /**
     * Gets number_of_decimal_places
     *
     * @return int|null
     */
    public function getNumberOfDecimalPlaces(): ?int
    {
        return $this->container['number_of_decimal_places'];
    }

    /**
     * Sets number_of_decimal_places
     *
     * @param int|null $number_of_decimal_places The number of decimal places for prices
     *
     * @return $this
     */
    public function setNumberOfDecimalPlaces(?int $number_of_decimal_places): static
    {
        if (is_null($number_of_decimal_places)) {
            throw new InvalidArgumentException('non-nullable number_of_decimal_places cannot be null');
        }
        $this->container['number_of_decimal_places'] = $number_of_decimal_places;

        return $this;
    }

    /**
     * Gets round_totals_only
     *
     * @return bool|null
     */
    public function getRoundTotalsOnly(): ?bool
    {
        return $this->container['round_totals_only'];
    }

    /**
     * Sets round_totals_only
     *
     * @param bool|null $round_totals_only Do only round totals?
     *
     * @return $this
     */
    public function setRoundTotalsOnly(?bool $round_totals_only): static
    {
        if (is_null($round_totals_only)) {
            throw new InvalidArgumentException('non-nullable round_totals_only cannot be null');
        }
        $this->container['round_totals_only'] = $round_totals_only;

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



<?php
/**
 * DebtorAccountConfiguration
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
 * DebtorAccountConfiguration Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DebtorAccountConfiguration implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DebtorAccountConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'location_id' => 'int',
        'mode' => 'string',
        'sequence' => 'string',
        'standard' => 'string',
        'save' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'location_id' => null,
        'mode' => null,
        'sequence' => null,
        'standard' => null,
        'save' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'location_id' => false,
		'mode' => false,
		'sequence' => false,
		'standard' => false,
		'save' => false
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
        'location_id' => 'locationId',
        'mode' => 'mode',
        'sequence' => 'sequence',
        'standard' => 'standard',
        'save' => 'save'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'location_id' => 'setLocationId',
        'mode' => 'setMode',
        'sequence' => 'setSequence',
        'standard' => 'setStandard',
        'save' => 'setSave'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'location_id' => 'getLocationId',
        'mode' => 'getMode',
        'sequence' => 'getSequence',
        'standard' => 'getStandard',
        'save' => 'getSave'
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
        $this->setIfExists('location_id', $data ?? [], null);
        $this->setIfExists('mode', $data ?? [], null);
        $this->setIfExists('sequence', $data ?? [], null);
        $this->setIfExists('standard', $data ?? [], null);
        $this->setIfExists('save', $data ?? [], null);
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
     * @param int|null $id The ID of the debtor account configuration
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
     * @param int|null $location_id The ID of the accounting location that the debtor account is associated with.
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
     * Gets mode
     *
     * @return string|null
     */
    public function getMode(): ?string
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string|null $mode The mode describes the criteria based on which pending amounts are assigned to a debtor account. The following modes are available: <ul> <li>character        = The debtor accounts are selected based on the first character of customer information. The information and the order of the information that will be used are defined with the sequence. There are 3 different sequences available.</li> <li>payment          = The debtor accounts are selected based on the payment method.</li> <li>country          = The debtor accounts are selected based on the country of delivery.</li> <li>country_payment  = The debtor accounts are selected based on two criteria. The first criteria is the country and if the country is same as the country of the accounting location then the payment method is used to select the deptor account.</li> </ul>
     *
     * @return $this
     */
    public function setMode(?string $mode): static
    {
        if (is_null($mode)) {
            throw new InvalidArgumentException('non-nullable mode cannot be null');
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return string|null
     */
    public function getSequence(): ?string
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param string|null $sequence The sequence defines the order in which customer information will be used for the debtor account assignment if the character made has been chosen. The following sequences are available: <ul> <li>FNV = stands for the sequence: company, lastname, firstname</li> <li>NVF = stands for the sequence: lastname, firstname, company</li> <li>NFV = stands for the sequence: lastname, company, firstname</li> </ul>
     *
     * @return $this
     */
    public function setSequence(?string $sequence): static
    {
        if (is_null($sequence)) {
            throw new InvalidArgumentException('non-nullable sequence cannot be null');
        }
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets standard
     *
     * @return string|null
     */
    public function getStandard(): ?string
    {
        return $this->container['standard'];
    }

    /**
     * Sets standard
     *
     * @param string|null $standard The standard debtor account that will be used if no matching debtor account can be found.
     *
     * @return $this
     */
    public function setStandard(?string $standard): static
    {
        if (is_null($standard)) {
            throw new InvalidArgumentException('non-nullable standard cannot be null');
        }
        $this->container['standard'] = $standard;

        return $this;
    }

    /**
     * Gets save
     *
     * @return bool|null
     */
    public function getSave(): ?bool
    {
        return $this->container['save'];
    }

    /**
     * Sets save
     *
     * @param bool|null $save Flag that indicates if the debtor account shall be saved within the contact data.
     *
     * @return $this
     */
    public function setSave(?bool $save): static
    {
        if (is_null($save)) {
            throw new InvalidArgumentException('non-nullable save cannot be null');
        }
        $this->container['save'] = $save;

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



<?php
/**
 * AddressContactRelation
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
 * AddressContactRelation Class Doc Comment
 *
 * @package  ck
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class AddressContactRelation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AddressContactRelation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'contact_id' => 'int',
        'type_id' => 'int',
        'address_id' => 'int',
        'is_primary' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'contact_id' => null,
        'type_id' => null,
        'address_id' => null,
        'is_primary' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'contact_id' => false,
		'type_id' => false,
		'address_id' => false,
		'is_primary' => false
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
        'contact_id' => 'contactId',
        'type_id' => 'typeId',
        'address_id' => 'addressId',
        'is_primary' => 'isPrimary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'contact_id' => 'setContactId',
        'type_id' => 'setTypeId',
        'address_id' => 'setAddressId',
        'is_primary' => 'setIsPrimary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'contact_id' => 'getContactId',
        'type_id' => 'getTypeId',
        'address_id' => 'getAddressId',
        'is_primary' => 'getIsPrimary'
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
        $this->setIfExists('contact_id', $data ?? [], null);
        $this->setIfExists('type_id', $data ?? [], null);
        $this->setIfExists('address_id', $data ?? [], null);
        $this->setIfExists('is_primary', $data ?? [], null);
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
     * @param int|null $id The ID of the address contact relation
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
     * Gets contact_id
     *
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param int|null $contact_id The ID of the contact
     *
     * @return $this
     */
    public function setContactId(?int $contact_id): static
    {
        if (is_null($contact_id)) {
            throw new InvalidArgumentException('non-nullable contact_id cannot be null');
        }
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int|null $type_id The type ID of the address. Possible values: <ul> <li>Invoice address = 1</li> <li>Delivery address = 2</li> </ul>
     *
     * @return $this
     */
    public function setTypeId(?int $type_id): static
    {
        if (is_null($type_id)) {
            throw new InvalidArgumentException('non-nullable type_id cannot be null');
        }
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets address_id
     *
     * @return int|null
     */
    public function getAddressId(): ?int
    {
        return $this->container['address_id'];
    }

    /**
     * Sets address_id
     *
     * @param int|null $address_id The ID of the address
     *
     * @return $this
     */
    public function setAddressId(?int $address_id): static
    {
        if (is_null($address_id)) {
            throw new InvalidArgumentException('non-nullable address_id cannot be null');
        }
        $this->container['address_id'] = $address_id;

        return $this;
    }

    /**
     * Gets is_primary
     *
     * @return bool|null
     */
    public function getIsPrimary(): ?bool
    {
        return $this->container['is_primary'];
    }

    /**
     * Sets is_primary
     *
     * @param bool|null $is_primary Flag that indicates if the address is primary
     *
     * @return $this
     */
    public function setIsPrimary(?bool $is_primary): static
    {
        if (is_null($is_primary)) {
            throw new InvalidArgumentException('non-nullable is_primary cannot be null');
        }
        $this->container['is_primary'] = $is_primary;

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



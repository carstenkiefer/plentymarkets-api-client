<?php
/**
 * WarehouseLocation
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
 * WarehouseLocation Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class WarehouseLocation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'WarehouseLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'level_id' => 'int',
        'label' => 'string',
        'purpose_key' => 'string',
        'status_key' => 'string',
        'position' => 'int',
        'full_label' => 'string',
        'type' => 'string',
        'notes' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'level_id' => null,
        'label' => null,
        'purpose_key' => null,
        'status_key' => null,
        'position' => null,
        'full_label' => null,
        'type' => null,
        'notes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'level_id' => false,
		'label' => false,
		'purpose_key' => false,
		'status_key' => false,
		'position' => false,
		'full_label' => false,
		'type' => false,
		'notes' => false
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
        'level_id' => 'levelId',
        'label' => 'label',
        'purpose_key' => 'purposeKey',
        'status_key' => 'statusKey',
        'position' => 'position',
        'full_label' => 'fullLabel',
        'type' => 'type',
        'notes' => 'notes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'level_id' => 'setLevelId',
        'label' => 'setLabel',
        'purpose_key' => 'setPurposeKey',
        'status_key' => 'setStatusKey',
        'position' => 'setPosition',
        'full_label' => 'setFullLabel',
        'type' => 'setType',
        'notes' => 'setNotes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'level_id' => 'getLevelId',
        'label' => 'getLabel',
        'purpose_key' => 'getPurposeKey',
        'status_key' => 'getStatusKey',
        'position' => 'getPosition',
        'full_label' => 'getFullLabel',
        'type' => 'getType',
        'notes' => 'getNotes'
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
        $this->setIfExists('level_id', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('purpose_key', $data ?? [], null);
        $this->setIfExists('status_key', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('full_label', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
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
     * @param int|null $id The ID of the warehouse location
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
     * Gets level_id
     *
     * @return int|null
     */
    public function getLevelId(): ?int
    {
        return $this->container['level_id'];
    }

    /**
     * Sets level_id
     *
     * @param int|null $level_id The level ID of the warehouse location
     *
     * @return $this
     */
    public function setLevelId(?int $level_id): static
    {
        if (is_null($level_id)) {
            throw new InvalidArgumentException('non-nullable level_id cannot be null');
        }
        $this->container['level_id'] = $level_id;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label The label of the warehouse location
     *
     * @return $this
     */
    public function setLabel(?string $label): static
    {
        if (is_null($label)) {
            throw new InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets purpose_key
     *
     * @return string|null
     */
    public function getPurposeKey(): ?string
    {
        return $this->container['purpose_key'];
    }

    /**
     * Sets purpose_key
     *
     * @param string|null $purpose_key The purpose key of the warehouse location
     *
     * @return $this
     */
    public function setPurposeKey(?string $purpose_key): static
    {
        if (is_null($purpose_key)) {
            throw new InvalidArgumentException('non-nullable purpose_key cannot be null');
        }
        $this->container['purpose_key'] = $purpose_key;

        return $this;
    }

    /**
     * Gets status_key
     *
     * @return string|null
     */
    public function getStatusKey(): ?string
    {
        return $this->container['status_key'];
    }

    /**
     * Sets status_key
     *
     * @param string|null $status_key The status key of the warehouse location
     *
     * @return $this
     */
    public function setStatusKey(?string $status_key): static
    {
        if (is_null($status_key)) {
            throw new InvalidArgumentException('non-nullable status_key cannot be null');
        }
        $this->container['status_key'] = $status_key;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int|null $position The position of the warehouse location
     *
     * @return $this
     */
    public function setPosition(?int $position): static
    {
        if (is_null($position)) {
            throw new InvalidArgumentException('non-nullable position cannot be null');
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets full_label
     *
     * @return string|null
     */
    public function getFullLabel(): ?string
    {
        return $this->container['full_label'];
    }

    /**
     * Sets full_label
     *
     * @param string|null $full_label The label with level path name
     *
     * @return $this
     */
    public function setFullLabel(?string $full_label): static
    {
        if (is_null($full_label)) {
            throw new InvalidArgumentException('non-nullable full_label cannot be null');
        }
        $this->container['full_label'] = $full_label;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of the warehouse location (array values: 'small','medium','large','europallet')
     *
     * @return $this
     */
    public function setType(?string $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes(): ?string
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes The notes of the warehouse location
     *
     * @return $this
     */
    public function setNotes(?string $notes): static
    {
        if (is_null($notes)) {
            throw new InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

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



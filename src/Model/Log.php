<?php
/**
 * Log
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
 * Log Class Doc Comment
 *
 * @package  ck
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Log implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Log';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'created_at' => 'string',
        'integration' => 'string',
        'identifier' => 'string',
        'code' => 'string',
        'reference_type' => 'string',
        'reference_value' => 'string',
        'level' => 'string',
        'additional_info' => 'string',
        'caller_function' => 'string',
        'caller_line' => 'int',
        'references' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'created_at' => null,
        'integration' => null,
        'identifier' => null,
        'code' => null,
        'reference_type' => null,
        'reference_value' => null,
        'level' => null,
        'additional_info' => null,
        'caller_function' => null,
        'caller_line' => null,
        'references' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'created_at' => false,
		'integration' => false,
		'identifier' => false,
		'code' => false,
		'reference_type' => false,
		'reference_value' => false,
		'level' => false,
		'additional_info' => false,
		'caller_function' => false,
		'caller_line' => false,
		'references' => false
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
        'created_at' => 'createdAt',
        'integration' => 'integration',
        'identifier' => 'identifier',
        'code' => 'code',
        'reference_type' => 'referenceType',
        'reference_value' => 'referenceValue',
        'level' => 'level',
        'additional_info' => 'additionalInfo',
        'caller_function' => 'callerFunction',
        'caller_line' => 'callerLine',
        'references' => 'references'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'integration' => 'setIntegration',
        'identifier' => 'setIdentifier',
        'code' => 'setCode',
        'reference_type' => 'setReferenceType',
        'reference_value' => 'setReferenceValue',
        'level' => 'setLevel',
        'additional_info' => 'setAdditionalInfo',
        'caller_function' => 'setCallerFunction',
        'caller_line' => 'setCallerLine',
        'references' => 'setReferences'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'integration' => 'getIntegration',
        'identifier' => 'getIdentifier',
        'code' => 'getCode',
        'reference_type' => 'getReferenceType',
        'reference_value' => 'getReferenceValue',
        'level' => 'getLevel',
        'additional_info' => 'getAdditionalInfo',
        'caller_function' => 'getCallerFunction',
        'caller_line' => 'getCallerLine',
        'references' => 'getReferences'
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
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('integration', $data ?? [], null);
        $this->setIfExists('identifier', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('reference_type', $data ?? [], null);
        $this->setIfExists('reference_value', $data ?? [], null);
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('additional_info', $data ?? [], null);
        $this->setIfExists('caller_function', $data ?? [], null);
        $this->setIfExists('caller_line', $data ?? [], null);
        $this->setIfExists('references', $data ?? [], null);
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
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The ID of the log entry
     *
     * @return $this
     */
    public function setId(?string $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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
     * @param string|null $created_at The date when the log entry was created
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
     * Gets integration
     *
     * @return string|null
     */
    public function getIntegration(): ?string
    {
        return $this->container['integration'];
    }

    /**
     * Sets integration
     *
     * @param string|null $integration The integration key used for the log entry. Used as a first level allocation.
     *
     * @return $this
     */
    public function setIntegration(?string $integration): static
    {
        if (is_null($integration)) {
            throw new InvalidArgumentException('non-nullable integration cannot be null');
        }
        $this->container['integration'] = $integration;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string|null $identifier The identifier used for the log entry. Used as a second level allocation.
     *
     * @return $this
     */
    public function setIdentifier(?string $identifier): static
    {
        if (is_null($identifier)) {
            throw new InvalidArgumentException('non-nullable identifier cannot be null');
        }
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code The code for this current log entry. For log entries with level \"debug\", \"info\", \"notice\", \"warning\" and \"report\" this needs to have an translation in order to be stored.
     *
     * @return $this
     */
    public function setCode(?string $code): static
    {
        if (is_null($code)) {
            throw new InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets reference_type
     *
     * @return string|null
     */
    public function getReferenceType(): ?string
    {
        return $this->container['reference_type'];
    }

    /**
     * Sets reference_type
     *
     * @param string|null $reference_type Deprecated field, see the <code>references</code> field instead.
     *
     * @return $this
     */
    public function setReferenceType(?string $reference_type): static
    {
        if (is_null($reference_type)) {
            throw new InvalidArgumentException('non-nullable reference_type cannot be null');
        }
        $this->container['reference_type'] = $reference_type;

        return $this;
    }

    /**
     * Gets reference_value
     *
     * @return string|null
     */
    public function getReferenceValue(): ?string
    {
        return $this->container['reference_value'];
    }

    /**
     * Sets reference_value
     *
     * @param string|null $reference_value Deprecated field, see the <code>references</code> field instead.
     *
     * @return $this
     */
    public function setReferenceValue(?string $reference_value): static
    {
        if (is_null($reference_value)) {
            throw new InvalidArgumentException('non-nullable reference_value cannot be null');
        }
        $this->container['reference_value'] = $reference_value;

        return $this;
    }

    /**
     * Gets level
     *
     * @return string|null
     */
    public function getLevel(): ?string
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param string|null $level The level this current log entry belongs to. Notice! When storing log entries with level \"report\" the entries will actually be stored as level \"info\". The difference between \"report\" and \"info\" is that log entries with level \"report\" do not need prior activation.
     *
     * @return $this
     */
    public function setLevel(?string $level): static
    {
        if (is_null($level)) {
            throw new InvalidArgumentException('non-nullable level cannot be null');
        }
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets additional_info
     *
     * @return string|null
     */
    public function getAdditionalInfo(): ?string
    {
        return $this->container['additional_info'];
    }

    /**
     * Sets additional_info
     *
     * @param string|null $additional_info Additional information that need to also be stored. Can be an int, string or object.
     *
     * @return $this
     */
    public function setAdditionalInfo(?string $additional_info): static
    {
        if (is_null($additional_info)) {
            throw new InvalidArgumentException('non-nullable additional_info cannot be null');
        }
        $this->container['additional_info'] = $additional_info;

        return $this;
    }

    /**
     * Gets caller_function
     *
     * @return string|null
     */
    public function getCallerFunction(): ?string
    {
        return $this->container['caller_function'];
    }

    /**
     * Sets caller_function
     *
     * @param string|null $caller_function 
     *
     * @return $this
     */
    public function setCallerFunction(?string $caller_function): static
    {
        if (is_null($caller_function)) {
            throw new InvalidArgumentException('non-nullable caller_function cannot be null');
        }
        $this->container['caller_function'] = $caller_function;

        return $this;
    }

    /**
     * Gets caller_line
     *
     * @return int|null
     */
    public function getCallerLine(): ?int
    {
        return $this->container['caller_line'];
    }

    /**
     * Sets caller_line
     *
     * @param int|null $caller_line 
     *
     * @return $this
     */
    public function setCallerLine(?int $caller_line): static
    {
        if (is_null($caller_line)) {
            throw new InvalidArgumentException('non-nullable caller_line cannot be null');
        }
        $this->container['caller_line'] = $caller_line;

        return $this;
    }

    /**
     * Gets references
     *
     * @return object[]|null
     */
    public function getReferences(): ?array
    {
        return $this->container['references'];
    }

    /**
     * Sets references
     *
     * @param object[]|null $references All the reference types and values correlated with this log entry.
     *
     * @return $this
     */
    public function setReferences(?array $references): static
    {
        if (is_null($references)) {
            throw new InvalidArgumentException('non-nullable references cannot be null');
        }
        $this->container['references'] = $references;

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



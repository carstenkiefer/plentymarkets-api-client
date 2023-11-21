<?php
/**
 * RestOrdersOrderIdDocumentsTypePostRequest
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
 * RestOrdersOrderIdDocumentsTypePostRequest Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RestOrdersOrderIdDocumentsTypePostRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = '_rest_orders__orderId__documents__type__post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'documents' => '\ck/plenty-client\Model\DocumentData[]',
        'content' => 'string',
        'number' => 'int',
        'number_with_prefix' => 'string',
        'directory_id' => 'int',
        'display_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'documents' => null,
        'content' => null,
        'number' => null,
        'number_with_prefix' => null,
        'directory_id' => null,
        'display_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'documents' => false,
		'content' => false,
		'number' => false,
		'number_with_prefix' => false,
		'directory_id' => false,
		'display_date' => false
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
        'documents' => 'documents',
        'content' => 'content',
        'number' => 'number',
        'number_with_prefix' => 'numberWithPrefix',
        'directory_id' => 'directoryId',
        'display_date' => 'displayDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'documents' => 'setDocuments',
        'content' => 'setContent',
        'number' => 'setNumber',
        'number_with_prefix' => 'setNumberWithPrefix',
        'directory_id' => 'setDirectoryId',
        'display_date' => 'setDisplayDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'documents' => 'getDocuments',
        'content' => 'getContent',
        'number' => 'getNumber',
        'number_with_prefix' => 'getNumberWithPrefix',
        'directory_id' => 'getDirectoryId',
        'display_date' => 'getDisplayDate'
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
        $this->setIfExists('documents', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('number_with_prefix', $data ?? [], null);
        $this->setIfExists('directory_id', $data ?? [], null);
        $this->setIfExists('display_date', $data ?? [], null);
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

        if ($this->container['documents'] === null) {
            $invalidProperties[] = "'documents' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ($this->container['number_with_prefix'] === null) {
            $invalidProperties[] = "'number_with_prefix' can't be null";
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
     * Gets documents
     *
     * @return \ck/plenty-client\Model\DocumentData[]
     */
    public function getDocuments(): array
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \ck/plenty-client\Model\DocumentData[] $documents documents
     *
     * @return $this
     */
    public function setDocuments(array $documents): static
    {
        if (is_null($documents)) {
            throw new InvalidArgumentException('non-nullable documents cannot be null');
        }
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content The base64 encoded file data.
     *
     * @return $this
     */
    public function setContent(string $content): static
    {
        if (is_null($content)) {
            throw new InvalidArgumentException('non-nullable content cannot be null');
        }
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int|null $number The document number optional
     *
     * @return $this
     */
    public function setNumber(?int $number): static
    {
        if (is_null($number)) {
            throw new InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets number_with_prefix
     *
     * @return string
     */
    public function getNumberWithPrefix(): string
    {
        return $this->container['number_with_prefix'];
    }

    /**
     * Sets number_with_prefix
     *
     * @param string $number_with_prefix The document number with prefix
     *
     * @return $this
     */
    public function setNumberWithPrefix(string $number_with_prefix): static
    {
        if (is_null($number_with_prefix)) {
            throw new InvalidArgumentException('non-nullable number_with_prefix cannot be null');
        }
        $this->container['number_with_prefix'] = $number_with_prefix;

        return $this;
    }

    /**
     * Gets directory_id
     *
     * @return int|null
     */
    public function getDirectoryId(): ?int
    {
        return $this->container['directory_id'];
    }

    /**
     * Sets directory_id
     *
     * @param int|null $directory_id The ID of the directory optional
     *
     * @return $this
     */
    public function setDirectoryId(?int $directory_id): static
    {
        if (is_null($directory_id)) {
            throw new InvalidArgumentException('non-nullable directory_id cannot be null');
        }
        $this->container['directory_id'] = $directory_id;

        return $this;
    }

    /**
     * Gets display_date
     *
     * @return string|null
     */
    public function getDisplayDate(): ?string
    {
        return $this->container['display_date'];
    }

    /**
     * Sets display_date
     *
     * @param string|null $display_date The date displayed on the document optional
     *
     * @return $this
     */
    public function setDisplayDate(?string $display_date): static
    {
        if (is_null($display_date)) {
            throw new InvalidArgumentException('non-nullable display_date cannot be null');
        }
        $this->container['display_date'] = $display_date;

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



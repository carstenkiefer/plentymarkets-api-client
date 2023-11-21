<?php
/**
 * RestExportsExportIdPutRequest
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
 * RestExportsExportIdPutRequest Class Doc Comment
 *
 * @package  ck
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RestExportsExportIdPutRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = '_rest_exports__exportId__put_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'limit' => 'int',
        'format_key' => 'string',
        'type' => 'string',
        'output_type' => 'string',
        'filters' => '\ck\Model\Filter[]',
        'key' => 'string',
        'value' => 'string',
        'format_settings' => '\ck\Model\FormatSetting[]',
        'output_params' => '\ck\Model\OutputParam[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'name' => null,
        'limit' => null,
        'format_key' => null,
        'type' => null,
        'output_type' => null,
        'filters' => null,
        'key' => null,
        'value' => null,
        'format_settings' => null,
        'output_params' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'limit' => false,
		'format_key' => false,
		'type' => false,
		'output_type' => false,
		'filters' => false,
		'key' => false,
		'value' => false,
		'format_settings' => false,
		'output_params' => false
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
        'name' => 'name',
        'limit' => 'limit',
        'format_key' => 'formatKey',
        'type' => 'type',
        'output_type' => 'outputType',
        'filters' => 'filters',
        'key' => 'key',
        'value' => 'value',
        'format_settings' => 'formatSettings',
        'output_params' => 'outputParams'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'limit' => 'setLimit',
        'format_key' => 'setFormatKey',
        'type' => 'setType',
        'output_type' => 'setOutputType',
        'filters' => 'setFilters',
        'key' => 'setKey',
        'value' => 'setValue',
        'format_settings' => 'setFormatSettings',
        'output_params' => 'setOutputParams'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'limit' => 'getLimit',
        'format_key' => 'getFormatKey',
        'type' => 'getType',
        'output_type' => 'getOutputType',
        'filters' => 'getFilters',
        'key' => 'getKey',
        'value' => 'getValue',
        'format_settings' => 'getFormatSettings',
        'output_params' => 'getOutputParams'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('format_key', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('output_type', $data ?? [], null);
        $this->setIfExists('filters', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('format_settings', $data ?? [], null);
        $this->setIfExists('output_params', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['format_key'] === null) {
            $invalidProperties[] = "'format_key' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['output_type'] === null) {
            $invalidProperties[] = "'output_type' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id export id
     *
     * @return $this
     */
    public function setId(int $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name export name
     *
     * @return $this
     */
    public function setName(string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit maximum number of entries optional
     *
     * @return $this
     */
    public function setLimit(?int $limit): static
    {
        if (is_null($limit)) {
            throw new InvalidArgumentException('non-nullable limit cannot be null');
        }
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets format_key
     *
     * @return string
     */
    public function getFormatKey(): string
    {
        return $this->container['format_key'];
    }

    /**
     * Sets format_key
     *
     * @param string $format_key the format key
     *
     * @return $this
     */
    public function setFormatKey(string $format_key): static
    {
        if (is_null($format_key)) {
            throw new InvalidArgumentException('non-nullable format_key cannot be null');
        }
        $this->container['format_key'] = $format_key;

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
     * @param string $type export type  allowed values are item, order, order_item, contact, contactNewsletter, warehouse, attribute, category, property, item_image, manufacturer, stock_movement, stock, facet, facetValue, facetValueReference, listing, listingMarketHistory
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
     * Gets output_type
     *
     * @return string
     */
    public function getOutputType(): string
    {
        return $this->container['output_type'];
    }

    /**
     * Sets output_type
     *
     * @param string $output_type the output type  allowed values are admin, download, ftp, sftp, ftps
     *
     * @return $this
     */
    public function setOutputType(string $output_type): static
    {
        if (is_null($output_type)) {
            throw new InvalidArgumentException('non-nullable output_type cannot be null');
        }
        $this->container['output_type'] = $output_type;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \ck\Model\Filter[]|null
     */
    public function getFilters(): ?array
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \ck\Model\Filter[]|null $filters filters
     *
     * @return $this
     */
    public function setFilters(?array $filters): static
    {
        if (is_null($filters)) {
            throw new InvalidArgumentException('non-nullable filters cannot be null');
        }
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key output param key  with outputParams
     *
     * @return $this
     */
    public function setKey(string $key): static
    {
        if (is_null($key)) {
            throw new InvalidArgumentException('non-nullable key cannot be null');
        }
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value output param value optional
     *
     * @return $this
     */
    public function setValue(?string $value): static
    {
        if (is_null($value)) {
            throw new InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets format_settings
     *
     * @return \ck\Model\FormatSetting[]|null
     */
    public function getFormatSettings(): ?array
    {
        return $this->container['format_settings'];
    }

    /**
     * Sets format_settings
     *
     * @param \ck\Model\FormatSetting[]|null $format_settings format_settings
     *
     * @return $this
     */
    public function setFormatSettings(?array $format_settings): static
    {
        if (is_null($format_settings)) {
            throw new InvalidArgumentException('non-nullable format_settings cannot be null');
        }
        $this->container['format_settings'] = $format_settings;

        return $this;
    }

    /**
     * Gets output_params
     *
     * @return \ck\Model\OutputParam[]|null
     */
    public function getOutputParams(): ?array
    {
        return $this->container['output_params'];
    }

    /**
     * Sets output_params
     *
     * @param \ck\Model\OutputParam[]|null $output_params output_params
     *
     * @return $this
     */
    public function setOutputParams(?array $output_params): static
    {
        if (is_null($output_params)) {
            throw new InvalidArgumentException('non-nullable output_params cannot be null');
        }
        $this->container['output_params'] = $output_params;

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



<?php
/**
 * Configuration
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
 * Configuration Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Configuration implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Configuration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'key' => 'string',
        'value' => 'string',
        'plugin_id' => 'int',
        'tab' => 'string',
        'label' => 'string',
        'type' => 'string',
        'possible_values' => 'object[]',
        'default' => 'string',
        'scss' => 'bool',
        'updated_at' => 'string',
        'plugin_set_entry_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'key' => null,
        'value' => null,
        'plugin_id' => null,
        'tab' => null,
        'label' => null,
        'type' => null,
        'possible_values' => null,
        'default' => null,
        'scss' => null,
        'updated_at' => null,
        'plugin_set_entry_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'key' => false,
		'value' => false,
		'plugin_id' => false,
		'tab' => false,
		'label' => false,
		'type' => false,
		'possible_values' => false,
		'default' => false,
		'scss' => false,
		'updated_at' => false,
		'plugin_set_entry_id' => false
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
        'key' => 'key',
        'value' => 'value',
        'plugin_id' => 'plugin_id',
        'tab' => 'tab',
        'label' => 'label',
        'type' => 'type',
        'possible_values' => 'possibleValues',
        'default' => 'default',
        'scss' => 'scss',
        'updated_at' => 'updated_at',
        'plugin_set_entry_id' => 'pluginSetEntryId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'key' => 'setKey',
        'value' => 'setValue',
        'plugin_id' => 'setPluginId',
        'tab' => 'setTab',
        'label' => 'setLabel',
        'type' => 'setType',
        'possible_values' => 'setPossibleValues',
        'default' => 'setDefault',
        'scss' => 'setScss',
        'updated_at' => 'setUpdatedAt',
        'plugin_set_entry_id' => 'setPluginSetEntryId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'key' => 'getKey',
        'value' => 'getValue',
        'plugin_id' => 'getPluginId',
        'tab' => 'getTab',
        'label' => 'getLabel',
        'type' => 'getType',
        'possible_values' => 'getPossibleValues',
        'default' => 'getDefault',
        'scss' => 'getScss',
        'updated_at' => 'getUpdatedAt',
        'plugin_set_entry_id' => 'getPluginSetEntryId'
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
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('plugin_id', $data ?? [], null);
        $this->setIfExists('tab', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('possible_values', $data ?? [], null);
        $this->setIfExists('default', $data ?? [], null);
        $this->setIfExists('scss', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('plugin_set_entry_id', $data ?? [], null);
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
     * @param int|null $id 
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
     * Gets key
     *
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key 
     *
     * @return $this
     */
    public function setKey(?string $key): static
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
     * @param string|null $value 
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
     * Gets plugin_id
     *
     * @return int|null
     */
    public function getPluginId(): ?int
    {
        return $this->container['plugin_id'];
    }

    /**
     * Sets plugin_id
     *
     * @param int|null $plugin_id 
     *
     * @return $this
     */
    public function setPluginId(?int $plugin_id): static
    {
        if (is_null($plugin_id)) {
            throw new InvalidArgumentException('non-nullable plugin_id cannot be null');
        }
        $this->container['plugin_id'] = $plugin_id;

        return $this;
    }

    /**
     * Gets tab
     *
     * @return string|null
     */
    public function getTab(): ?string
    {
        return $this->container['tab'];
    }

    /**
     * Sets tab
     *
     * @param string|null $tab 
     *
     * @return $this
     */
    public function setTab(?string $tab): static
    {
        if (is_null($tab)) {
            throw new InvalidArgumentException('non-nullable tab cannot be null');
        }
        $this->container['tab'] = $tab;

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
     * @param string|null $label 
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
     * @param string|null $type 
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
     * Gets possible_values
     *
     * @return object[]|null
     */
    public function getPossibleValues(): ?array
    {
        return $this->container['possible_values'];
    }

    /**
     * Sets possible_values
     *
     * @param object[]|null $possible_values 
     *
     * @return $this
     */
    public function setPossibleValues(?array $possible_values): static
    {
        if (is_null($possible_values)) {
            throw new InvalidArgumentException('non-nullable possible_values cannot be null');
        }
        $this->container['possible_values'] = $possible_values;

        return $this;
    }

    /**
     * Gets default
     *
     * @return string|null
     */
    public function getDefault(): ?string
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param string|null $default 
     *
     * @return $this
     */
    public function setDefault(?string $default): static
    {
        if (is_null($default)) {
            throw new InvalidArgumentException('non-nullable default cannot be null');
        }
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets scss
     *
     * @return bool|null
     */
    public function getScss(): ?bool
    {
        return $this->container['scss'];
    }

    /**
     * Sets scss
     *
     * @param bool|null $scss 
     *
     * @return $this
     */
    public function setScss(?bool $scss): static
    {
        if (is_null($scss)) {
            throw new InvalidArgumentException('non-nullable scss cannot be null');
        }
        $this->container['scss'] = $scss;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at 
     *
     * @return $this
     */
    public function setUpdatedAt(?string $updated_at): static
    {
        if (is_null($updated_at)) {
            throw new InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets plugin_set_entry_id
     *
     * @return int|null
     */
    public function getPluginSetEntryId(): ?int
    {
        return $this->container['plugin_set_entry_id'];
    }

    /**
     * Sets plugin_set_entry_id
     *
     * @param int|null $plugin_set_entry_id 
     *
     * @return $this
     */
    public function setPluginSetEntryId(?int $plugin_set_entry_id): static
    {
        if (is_null($plugin_set_entry_id)) {
            throw new InvalidArgumentException('non-nullable plugin_set_entry_id cannot be null');
        }
        $this->container['plugin_set_entry_id'] = $plugin_set_entry_id;

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



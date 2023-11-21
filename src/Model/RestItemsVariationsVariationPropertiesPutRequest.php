<?php
/**
 * RestItemsVariationsVariationPropertiesPutRequest
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
 * RestItemsVariationsVariationPropertiesPutRequest Class Doc Comment
 *
 * @package  ck
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RestItemsVariationsVariationPropertiesPutRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = '_rest_items_variations_variation_properties_put_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'variation_id' => 'int',
        'property_id' => 'int',
        'property_selection_id' => 'int',
        'value_int' => 'int',
        'value_float' => 'float',
        'value_file' => 'string',
        'value_texts' => '\ck\Model\VariationPropertyValueText[]',
        'lang' => 'string',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'variation_id' => null,
        'property_id' => null,
        'property_selection_id' => null,
        'value_int' => null,
        'value_float' => null,
        'value_file' => null,
        'value_texts' => null,
        'lang' => null,
        'value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'variation_id' => false,
		'property_id' => false,
		'property_selection_id' => false,
		'value_int' => false,
		'value_float' => false,
		'value_file' => false,
		'value_texts' => false,
		'lang' => false,
		'value' => false
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
        'variation_id' => 'variationId',
        'property_id' => 'propertyId',
        'property_selection_id' => 'propertySelectionId',
        'value_int' => 'valueInt',
        'value_float' => 'valueFloat',
        'value_file' => 'valueFile',
        'value_texts' => 'valueTexts',
        'lang' => 'lang',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'variation_id' => 'setVariationId',
        'property_id' => 'setPropertyId',
        'property_selection_id' => 'setPropertySelectionId',
        'value_int' => 'setValueInt',
        'value_float' => 'setValueFloat',
        'value_file' => 'setValueFile',
        'value_texts' => 'setValueTexts',
        'lang' => 'setLang',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'variation_id' => 'getVariationId',
        'property_id' => 'getPropertyId',
        'property_selection_id' => 'getPropertySelectionId',
        'value_int' => 'getValueInt',
        'value_float' => 'getValueFloat',
        'value_file' => 'getValueFile',
        'value_texts' => 'getValueTexts',
        'lang' => 'getLang',
        'value' => 'getValue'
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
        $this->setIfExists('variation_id', $data ?? [], null);
        $this->setIfExists('property_id', $data ?? [], null);
        $this->setIfExists('property_selection_id', $data ?? [], null);
        $this->setIfExists('value_int', $data ?? [], null);
        $this->setIfExists('value_float', $data ?? [], null);
        $this->setIfExists('value_file', $data ?? [], null);
        $this->setIfExists('value_texts', $data ?? [], null);
        $this->setIfExists('lang', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
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

        if ($this->container['variation_id'] === null) {
            $invalidProperties[] = "'variation_id' can't be null";
        }
        if ($this->container['property_id'] === null) {
            $invalidProperties[] = "'property_id' can't be null";
        }
        if ($this->container['lang'] === null) {
            $invalidProperties[] = "'lang' can't be null";
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
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The unique ID of the link between the variation and the property value optional
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
     * Gets variation_id
     *
     * @return int
     */
    public function getVariationId(): int
    {
        return $this->container['variation_id'];
    }

    /**
     * Sets variation_id
     *
     * @param int $variation_id The unique ID of the variation
     *
     * @return $this
     */
    public function setVariationId(int $variation_id): static
    {
        if (is_null($variation_id)) {
            throw new InvalidArgumentException('non-nullable variation_id cannot be null');
        }
        $this->container['variation_id'] = $variation_id;

        return $this;
    }

    /**
     * Gets property_id
     *
     * @return int
     */
    public function getPropertyId(): int
    {
        return $this->container['property_id'];
    }

    /**
     * Sets property_id
     *
     * @param int $property_id The unique ID of the property
     *
     * @return $this
     */
    public function setPropertyId(int $property_id): static
    {
        if (is_null($property_id)) {
            throw new InvalidArgumentException('non-nullable property_id cannot be null');
        }
        $this->container['property_id'] = $property_id;

        return $this;
    }

    /**
     * Gets property_selection_id
     *
     * @return int|null
     */
    public function getPropertySelectionId(): ?int
    {
        return $this->container['property_selection_id'];
    }

    /**
     * Sets property_selection_id
     *
     * @param int|null $property_selection_id The unique ID of the property selection of the variation optional
     *
     * @return $this
     */
    public function setPropertySelectionId(?int $property_selection_id): static
    {
        if (is_null($property_selection_id)) {
            throw new InvalidArgumentException('non-nullable property_selection_id cannot be null');
        }
        $this->container['property_selection_id'] = $property_selection_id;

        return $this;
    }

    /**
     * Gets value_int
     *
     * @return int|null
     */
    public function getValueInt(): ?int
    {
        return $this->container['value_int'];
    }

    /**
     * Sets value_int
     *
     * @param int|null $value_int The int value of the property value of the variation optional
     *
     * @return $this
     */
    public function setValueInt(?int $value_int): static
    {
        if (is_null($value_int)) {
            throw new InvalidArgumentException('non-nullable value_int cannot be null');
        }
        $this->container['value_int'] = $value_int;

        return $this;
    }

    /**
     * Gets value_float
     *
     * @return float|null
     */
    public function getValueFloat(): ?float
    {
        return $this->container['value_float'];
    }

    /**
     * Sets value_float
     *
     * @param float|null $value_float The float value of the property value of the variation optional
     *
     * @return $this
     */
    public function setValueFloat(?float $value_float): static
    {
        if (is_null($value_float)) {
            throw new InvalidArgumentException('non-nullable value_float cannot be null');
        }
        $this->container['value_float'] = $value_float;

        return $this;
    }

    /**
     * Gets value_file
     *
     * @return string|null
     */
    public function getValueFile(): ?string
    {
        return $this->container['value_file'];
    }

    /**
     * Sets value_file
     *
     * @param string|null $value_file The file value of the property value of the variation optional
     *
     * @return $this
     */
    public function setValueFile(?string $value_file): static
    {
        if (is_null($value_file)) {
            throw new InvalidArgumentException('non-nullable value_file cannot be null');
        }
        $this->container['value_file'] = $value_file;

        return $this;
    }

    /**
     * Gets value_texts
     *
     * @return \ck\Model\VariationPropertyValueText[]|null
     */
    public function getValueTexts(): ?array
    {
        return $this->container['value_texts'];
    }

    /**
     * Sets value_texts
     *
     * @param \ck\Model\VariationPropertyValueText[]|null $value_texts value_texts
     *
     * @return $this
     */
    public function setValueTexts(?array $value_texts): static
    {
        if (is_null($value_texts)) {
            throw new InvalidArgumentException('non-nullable value_texts cannot be null');
        }
        $this->container['value_texts'] = $value_texts;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string
     */
    public function getLang(): string
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string $lang The language of the property value text
     *
     * @return $this
     */
    public function setLang(string $lang): static
    {
        if (is_null($lang)) {
            throw new InvalidArgumentException('non-nullable lang cannot be null');
        }
        $this->container['lang'] = $lang;

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
     * @param string|null $value The text saved for the property of the type Text optional
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



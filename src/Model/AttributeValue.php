<?php
/**
 * AttributeValue
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
 * AttributeValue Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class AttributeValue implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AttributeValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'attribute_id' => 'int',
        'backend_name' => 'string',
        'position' => 'int',
        'image' => 'string',
        'comment' => 'string',
        'amazon_value' => 'string',
        'otto_value' => 'string',
        'neckermann_at_ep_value' => 'string',
        'la_redoute_value' => 'string',
        'tracdelight_value' => 'string',
        'percentage_distribution' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'attribute_id' => null,
        'backend_name' => null,
        'position' => null,
        'image' => null,
        'comment' => null,
        'amazon_value' => null,
        'otto_value' => null,
        'neckermann_at_ep_value' => null,
        'la_redoute_value' => null,
        'tracdelight_value' => null,
        'percentage_distribution' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'attribute_id' => false,
		'backend_name' => false,
		'position' => false,
		'image' => false,
		'comment' => false,
		'amazon_value' => false,
		'otto_value' => false,
		'neckermann_at_ep_value' => false,
		'la_redoute_value' => false,
		'tracdelight_value' => false,
		'percentage_distribution' => false
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
        'attribute_id' => 'attributeId',
        'backend_name' => 'backendName',
        'position' => 'position',
        'image' => 'image',
        'comment' => 'comment',
        'amazon_value' => 'amazonValue',
        'otto_value' => 'ottoValue',
        'neckermann_at_ep_value' => 'neckermannAtEpValue',
        'la_redoute_value' => 'laRedouteValue',
        'tracdelight_value' => 'tracdelightValue',
        'percentage_distribution' => 'percentageDistribution'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'attribute_id' => 'setAttributeId',
        'backend_name' => 'setBackendName',
        'position' => 'setPosition',
        'image' => 'setImage',
        'comment' => 'setComment',
        'amazon_value' => 'setAmazonValue',
        'otto_value' => 'setOttoValue',
        'neckermann_at_ep_value' => 'setNeckermannAtEpValue',
        'la_redoute_value' => 'setLaRedouteValue',
        'tracdelight_value' => 'setTracdelightValue',
        'percentage_distribution' => 'setPercentageDistribution'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'attribute_id' => 'getAttributeId',
        'backend_name' => 'getBackendName',
        'position' => 'getPosition',
        'image' => 'getImage',
        'comment' => 'getComment',
        'amazon_value' => 'getAmazonValue',
        'otto_value' => 'getOttoValue',
        'neckermann_at_ep_value' => 'getNeckermannAtEpValue',
        'la_redoute_value' => 'getLaRedouteValue',
        'tracdelight_value' => 'getTracdelightValue',
        'percentage_distribution' => 'getPercentageDistribution'
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
        $this->setIfExists('attribute_id', $data ?? [], null);
        $this->setIfExists('backend_name', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('amazon_value', $data ?? [], null);
        $this->setIfExists('otto_value', $data ?? [], null);
        $this->setIfExists('neckermann_at_ep_value', $data ?? [], null);
        $this->setIfExists('la_redoute_value', $data ?? [], null);
        $this->setIfExists('tracdelight_value', $data ?? [], null);
        $this->setIfExists('percentage_distribution', $data ?? [], null);
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
     * @param int|null $id The unique ID of the attribute value.
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
     * Gets attribute_id
     *
     * @return int|null
     */
    public function getAttributeId(): ?int
    {
        return $this->container['attribute_id'];
    }

    /**
     * Sets attribute_id
     *
     * @param int|null $attribute_id The unique ID of the attribute associated with the attribute value.
     *
     * @return $this
     */
    public function setAttributeId(?int $attribute_id): static
    {
        if (is_null($attribute_id)) {
            throw new InvalidArgumentException('non-nullable attribute_id cannot be null');
        }
        $this->container['attribute_id'] = $attribute_id;

        return $this;
    }

    /**
     * Gets backend_name
     *
     * @return string|null
     */
    public function getBackendName(): ?string
    {
        return $this->container['backend_name'];
    }

    /**
     * Sets backend_name
     *
     * @param string|null $backend_name The back end name of the attribute value. This name can only be assigned once per attribute. It is not visible in the plentymarkets front end.
     *
     * @return $this
     */
    public function setBackendName(?string $backend_name): static
    {
        if (is_null($backend_name)) {
            throw new InvalidArgumentException('non-nullable backend_name cannot be null');
        }
        $this->container['backend_name'] = $backend_name;

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
     * @param int|null $position The position of the attribute value. Attribute values are sorted in ascending order by position.
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
     * Gets image
     *
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image The name of the image associated with the attribute value; naming pattern is attr\\_\\{valueId\\}.
     *
     * @return $this
     */
    public function setImage(?string $image): static
    {
        if (is_null($image)) {
            throw new InvalidArgumentException('non-nullable image cannot be null');
        }
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment Optional comment on the attribute value. Comments are not visible in the plentymarkets front end.
     *
     * @return $this
     */
    public function setComment(?string $comment): static
    {
        if (is_null($comment)) {
            throw new InvalidArgumentException('non-nullable comment cannot be null');
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets amazon_value
     *
     * @return string|null
     */
    public function getAmazonValue(): ?string
    {
        return $this->container['amazon_value'];
    }

    /**
     * Sets amazon_value
     *
     * @param string|null $amazon_value The attribute value of the market Amazon that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the values specified by the market. Check documentation of the market for permitted values.
     *
     * @return $this
     */
    public function setAmazonValue(?string $amazon_value): static
    {
        if (is_null($amazon_value)) {
            throw new InvalidArgumentException('non-nullable amazon_value cannot be null');
        }
        $this->container['amazon_value'] = $amazon_value;

        return $this;
    }

    /**
     * Gets otto_value
     *
     * @return string|null
     */
    public function getOttoValue(): ?string
    {
        return $this->container['otto_value'];
    }

    /**
     * Sets otto_value
     *
     * @param string|null $otto_value The attribute value of the market OTTO that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the attribute values specified by the market.
     *
     * @return $this
     */
    public function setOttoValue(?string $otto_value): static
    {
        if (is_null($otto_value)) {
            throw new InvalidArgumentException('non-nullable otto_value cannot be null');
        }
        $this->container['otto_value'] = $otto_value;

        return $this;
    }

    /**
     * Gets neckermann_at_ep_value
     *
     * @return string|null
     */
    public function getNeckermannAtEpValue(): ?string
    {
        return $this->container['neckermann_at_ep_value'];
    }

    /**
     * Sets neckermann_at_ep_value
     *
     * @param string|null $neckermann_at_ep_value The attribute value of the market Neckermann AT EP that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the attribute values specified by the market. Check documentation of the market for permitted values.
     *
     * @return $this
     */
    public function setNeckermannAtEpValue(?string $neckermann_at_ep_value): static
    {
        if (is_null($neckermann_at_ep_value)) {
            throw new InvalidArgumentException('non-nullable neckermann_at_ep_value cannot be null');
        }
        $this->container['neckermann_at_ep_value'] = $neckermann_at_ep_value;

        return $this;
    }

    /**
     * Gets la_redoute_value
     *
     * @return string|null
     */
    public function getLaRedouteValue(): ?string
    {
        return $this->container['la_redoute_value'];
    }

    /**
     * Sets la_redoute_value
     *
     * @param string|null $la_redoute_value The attribute value of the market La Redoute that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the attribute values specified by the market. Check documentation of the market for permitted values.
     *
     * @return $this
     */
    public function setLaRedouteValue(?string $la_redoute_value): static
    {
        if (is_null($la_redoute_value)) {
            throw new InvalidArgumentException('non-nullable la_redoute_value cannot be null');
        }
        $this->container['la_redoute_value'] = $la_redoute_value;

        return $this;
    }

    /**
     * Gets tracdelight_value
     *
     * @return string|null
     */
    public function getTracdelightValue(): ?string
    {
        return $this->container['tracdelight_value'];
    }

    /**
     * Sets tracdelight_value
     *
     * @param string|null $tracdelight_value 
     *
     * @return $this
     */
    public function setTracdelightValue(?string $tracdelight_value): static
    {
        if (is_null($tracdelight_value)) {
            throw new InvalidArgumentException('non-nullable tracdelight_value cannot be null');
        }
        $this->container['tracdelight_value'] = $tracdelight_value;

        return $this;
    }

    /**
     * Gets percentage_distribution
     *
     * @return int|null
     */
    public function getPercentageDistribution(): ?int
    {
        return $this->container['percentage_distribution'];
    }

    /**
     * Sets percentage_distribution
     *
     * @param int|null $percentage_distribution The percentage for automatic stock distribution of attribute values. When reordering an item, the quantities of attribute values is automatically distributed among the total quantity.
     *
     * @return $this
     */
    public function setPercentageDistribution(?int $percentage_distribution): static
    {
        if (is_null($percentage_distribution)) {
            throw new InvalidArgumentException('non-nullable percentage_distribution cannot be null');
        }
        $this->container['percentage_distribution'] = $percentage_distribution;

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


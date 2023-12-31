<?php
/**
 * ContentLink
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
 * ContentLink Class Doc Comment
 *
 * @package  ck
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ContentLink implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ContentLink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'content_id' => 'int',
        'container_name' => 'string',
        'plugin_set_id' => 'int',
        'language' => 'string',
        'active' => 'bool',
        'related_content_type' => 'string',
        'related_container_name' => 'string',
        'inherit' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'content_id' => null,
        'container_name' => null,
        'plugin_set_id' => null,
        'language' => null,
        'active' => null,
        'related_content_type' => null,
        'related_container_name' => null,
        'inherit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'content_id' => false,
		'container_name' => false,
		'plugin_set_id' => false,
		'language' => false,
		'active' => false,
		'related_content_type' => false,
		'related_container_name' => false,
		'inherit' => false
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
        'content_id' => 'contentId',
        'container_name' => 'containerName',
        'plugin_set_id' => 'pluginSetId',
        'language' => 'language',
        'active' => 'active',
        'related_content_type' => 'relatedContentType',
        'related_container_name' => 'relatedContainerName',
        'inherit' => 'inherit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'content_id' => 'setContentId',
        'container_name' => 'setContainerName',
        'plugin_set_id' => 'setPluginSetId',
        'language' => 'setLanguage',
        'active' => 'setActive',
        'related_content_type' => 'setRelatedContentType',
        'related_container_name' => 'setRelatedContainerName',
        'inherit' => 'setInherit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'content_id' => 'getContentId',
        'container_name' => 'getContainerName',
        'plugin_set_id' => 'getPluginSetId',
        'language' => 'getLanguage',
        'active' => 'getActive',
        'related_content_type' => 'getRelatedContentType',
        'related_container_name' => 'getRelatedContainerName',
        'inherit' => 'getInherit'
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
        $this->setIfExists('content_id', $data ?? [], null);
        $this->setIfExists('container_name', $data ?? [], null);
        $this->setIfExists('plugin_set_id', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('related_content_type', $data ?? [], null);
        $this->setIfExists('related_container_name', $data ?? [], null);
        $this->setIfExists('inherit', $data ?? [], null);
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
     * @param int|null $id The ID of the content link
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
     * Gets content_id
     *
     * @return int|null
     */
    public function getContentId(): ?int
    {
        return $this->container['content_id'];
    }

    /**
     * Sets content_id
     *
     * @param int|null $content_id The ID of the content
     *
     * @return $this
     */
    public function setContentId(?int $content_id): static
    {
        if (is_null($content_id)) {
            throw new InvalidArgumentException('non-nullable content_id cannot be null');
        }
        $this->container['content_id'] = $content_id;

        return $this;
    }

    /**
     * Gets container_name
     *
     * @return string|null
     */
    public function getContainerName(): ?string
    {
        return $this->container['container_name'];
    }

    /**
     * Sets container_name
     *
     * @param string|null $container_name The name of the container
     *
     * @return $this
     */
    public function setContainerName(?string $container_name): static
    {
        if (is_null($container_name)) {
            throw new InvalidArgumentException('non-nullable container_name cannot be null');
        }
        $this->container['container_name'] = $container_name;

        return $this;
    }

    /**
     * Gets plugin_set_id
     *
     * @return int|null
     */
    public function getPluginSetId(): ?int
    {
        return $this->container['plugin_set_id'];
    }

    /**
     * Sets plugin_set_id
     *
     * @param int|null $plugin_set_id The Id of the plugin set
     *
     * @return $this
     */
    public function setPluginSetId(?int $plugin_set_id): static
    {
        if (is_null($plugin_set_id)) {
            throw new InvalidArgumentException('non-nullable plugin_set_id cannot be null');
        }
        $this->container['plugin_set_id'] = $plugin_set_id;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language The language where the content is linked to.
     *
     * @return $this
     */
    public function setLanguage(?string $language): static
    {
        if (is_null($language)) {
            throw new InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Indicates if the link is active and the content should be visible for the frontend.
     *
     * @return $this
     */
    public function setActive(?bool $active): static
    {
        if (is_null($active)) {
            throw new InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets related_content_type
     *
     * @return string|null
     */
    public function getRelatedContentType(): ?string
    {
        return $this->container['related_content_type'];
    }

    /**
     * Sets related_content_type
     *
     * @param string|null $related_content_type The content type the content is linked to
     *
     * @return $this
     */
    public function setRelatedContentType(?string $related_content_type): static
    {
        if (is_null($related_content_type)) {
            throw new InvalidArgumentException('non-nullable related_content_type cannot be null');
        }
        $this->container['related_content_type'] = $related_content_type;

        return $this;
    }

    /**
     * Gets related_container_name
     *
     * @return string|null
     */
    public function getRelatedContainerName(): ?string
    {
        return $this->container['related_container_name'];
    }

    /**
     * Sets related_container_name
     *
     * @param string|null $related_container_name The container name the content is linked to
     *
     * @return $this
     */
    public function setRelatedContainerName(?string $related_container_name): static
    {
        if (is_null($related_container_name)) {
            throw new InvalidArgumentException('non-nullable related_container_name cannot be null');
        }
        $this->container['related_container_name'] = $related_container_name;

        return $this;
    }

    /**
     * Gets inherit
     *
     * @return bool|null
     */
    public function getInherit(): ?bool
    {
        return $this->container['inherit'];
    }

    /**
     * Sets inherit
     *
     * @param bool|null $inherit Indicates if this content should be inherited to child contents.
     *
     * @return $this
     */
    public function setInherit(?bool $inherit): static
    {
        if (is_null($inherit)) {
            throw new InvalidArgumentException('non-nullable inherit cannot be null');
        }
        $this->container['inherit'] = $inherit;

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



<?php
/**
 * RestMarketsCredentialsGet200Response
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
 * RestMarketsCredentialsGet200Response Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RestMarketsCredentialsGet200Response implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = '_rest_markets_credentials_get_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'page' => 'int',
        'totals_count' => 'int',
        'is_last_page' => 'bool',
        'last_page_number' => 'int',
        'first_on_page' => 'int',
        'last_on_page' => 'int',
        'items_per_page' => 'int',
        'entries' => '\ck/plenty-client\Model\Credentials[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'page' => null,
        'totals_count' => null,
        'is_last_page' => null,
        'last_page_number' => null,
        'first_on_page' => null,
        'last_on_page' => null,
        'items_per_page' => null,
        'entries' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'page' => false,
		'totals_count' => false,
		'is_last_page' => false,
		'last_page_number' => false,
		'first_on_page' => false,
		'last_on_page' => false,
		'items_per_page' => false,
		'entries' => false
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
        'page' => 'page',
        'totals_count' => 'totalsCount',
        'is_last_page' => 'isLastPage',
        'last_page_number' => 'lastPageNumber',
        'first_on_page' => 'firstOnPage',
        'last_on_page' => 'lastOnPage',
        'items_per_page' => 'itemsPerPage',
        'entries' => 'entries'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'page' => 'setPage',
        'totals_count' => 'setTotalsCount',
        'is_last_page' => 'setIsLastPage',
        'last_page_number' => 'setLastPageNumber',
        'first_on_page' => 'setFirstOnPage',
        'last_on_page' => 'setLastOnPage',
        'items_per_page' => 'setItemsPerPage',
        'entries' => 'setEntries'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'page' => 'getPage',
        'totals_count' => 'getTotalsCount',
        'is_last_page' => 'getIsLastPage',
        'last_page_number' => 'getLastPageNumber',
        'first_on_page' => 'getFirstOnPage',
        'last_on_page' => 'getLastOnPage',
        'items_per_page' => 'getItemsPerPage',
        'entries' => 'getEntries'
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
        $this->setIfExists('page', $data ?? [], null);
        $this->setIfExists('totals_count', $data ?? [], null);
        $this->setIfExists('is_last_page', $data ?? [], null);
        $this->setIfExists('last_page_number', $data ?? [], null);
        $this->setIfExists('first_on_page', $data ?? [], null);
        $this->setIfExists('last_on_page', $data ?? [], null);
        $this->setIfExists('items_per_page', $data ?? [], null);
        $this->setIfExists('entries', $data ?? [], null);
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
     * Gets page
     *
     * @return int|null
     */
    public function getPage(): ?int
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|null $page Current page of the response
     *
     * @return $this
     */
    public function setPage(?int $page): static
    {
        if (is_null($page)) {
            throw new InvalidArgumentException('non-nullable page cannot be null');
        }
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets totals_count
     *
     * @return int|null
     */
    public function getTotalsCount(): ?int
    {
        return $this->container['totals_count'];
    }

    /**
     * Sets totals_count
     *
     * @param int|null $totals_count The total number of entries in the response
     *
     * @return $this
     */
    public function setTotalsCount(?int $totals_count): static
    {
        if (is_null($totals_count)) {
            throw new InvalidArgumentException('non-nullable totals_count cannot be null');
        }
        $this->container['totals_count'] = $totals_count;

        return $this;
    }

    /**
     * Gets is_last_page
     *
     * @return bool|null
     */
    public function getIsLastPage(): ?bool
    {
        return $this->container['is_last_page'];
    }

    /**
     * Sets is_last_page
     *
     * @param bool|null $is_last_page Flag that indicates if the page shown is the last page of the response
     *
     * @return $this
     */
    public function setIsLastPage(?bool $is_last_page): static
    {
        if (is_null($is_last_page)) {
            throw new InvalidArgumentException('non-nullable is_last_page cannot be null');
        }
        $this->container['is_last_page'] = $is_last_page;

        return $this;
    }

    /**
     * Gets last_page_number
     *
     * @return int|null
     */
    public function getLastPageNumber(): ?int
    {
        return $this->container['last_page_number'];
    }

    /**
     * Sets last_page_number
     *
     * @param int|null $last_page_number The last page number
     *
     * @return $this
     */
    public function setLastPageNumber(?int $last_page_number): static
    {
        if (is_null($last_page_number)) {
            throw new InvalidArgumentException('non-nullable last_page_number cannot be null');
        }
        $this->container['last_page_number'] = $last_page_number;

        return $this;
    }

    /**
     * Gets first_on_page
     *
     * @return int|null
     */
    public function getFirstOnPage(): ?int
    {
        return $this->container['first_on_page'];
    }

    /**
     * Sets first_on_page
     *
     * @param int|null $first_on_page The index of the first item of the current page result
     *
     * @return $this
     */
    public function setFirstOnPage(?int $first_on_page): static
    {
        if (is_null($first_on_page)) {
            throw new InvalidArgumentException('non-nullable first_on_page cannot be null');
        }
        $this->container['first_on_page'] = $first_on_page;

        return $this;
    }

    /**
     * Gets last_on_page
     *
     * @return int|null
     */
    public function getLastOnPage(): ?int
    {
        return $this->container['last_on_page'];
    }

    /**
     * Sets last_on_page
     *
     * @param int|null $last_on_page The index of the last item of the current page result
     *
     * @return $this
     */
    public function setLastOnPage(?int $last_on_page): static
    {
        if (is_null($last_on_page)) {
            throw new InvalidArgumentException('non-nullable last_on_page cannot be null');
        }
        $this->container['last_on_page'] = $last_on_page;

        return $this;
    }

    /**
     * Gets items_per_page
     *
     * @return int|null
     */
    public function getItemsPerPage(): ?int
    {
        return $this->container['items_per_page'];
    }

    /**
     * Sets items_per_page
     *
     * @param int|null $items_per_page The requested amount of items per result page
     *
     * @return $this
     */
    public function setItemsPerPage(?int $items_per_page): static
    {
        if (is_null($items_per_page)) {
            throw new InvalidArgumentException('non-nullable items_per_page cannot be null');
        }
        $this->container['items_per_page'] = $items_per_page;

        return $this;
    }

    /**
     * Gets entries
     *
     * @return \ck/plenty-client\Model\Credentials[]|null
     */
    public function getEntries(): ?array
    {
        return $this->container['entries'];
    }

    /**
     * Sets entries
     *
     * @param \ck/plenty-client\Model\Credentials[]|null $entries List of Credentials
     *
     * @return $this
     */
    public function setEntries(?array $entries): static
    {
        if (is_null($entries)) {
            throw new InvalidArgumentException('non-nullable entries cannot be null');
        }
        $this->container['entries'] = $entries;

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



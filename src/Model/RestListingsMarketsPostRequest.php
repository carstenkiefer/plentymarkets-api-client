<?php
/**
 * RestListingsMarketsPostRequest
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
 * RestListingsMarketsPostRequest Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RestListingsMarketsPostRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = '_rest_listings_markets_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'listing_id' => 'int',
        'option_template_id' => 'int',
        'referrer_id' => 'int',
        'listing' => '\ck/plenty-client\Model\ListingMarketHistory[]',
        'properties' => 'object[]',
        'prices' => 'object[]',
        'texts' => 'object[]',
        'item_specifics' => 'object[]',
        'dates' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'listing_id' => null,
        'option_template_id' => null,
        'referrer_id' => null,
        'listing' => null,
        'properties' => null,
        'prices' => null,
        'texts' => null,
        'item_specifics' => null,
        'dates' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'listing_id' => false,
		'option_template_id' => false,
		'referrer_id' => false,
		'listing' => false,
		'properties' => false,
		'prices' => false,
		'texts' => false,
		'item_specifics' => false,
		'dates' => false
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
        'listing_id' => 'listingId',
        'option_template_id' => 'optionTemplateId',
        'referrer_id' => 'referrerId',
        'listing' => 'listing',
        'properties' => 'properties',
        'prices' => 'prices',
        'texts' => 'texts',
        'item_specifics' => 'itemSpecifics',
        'dates' => 'dates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'listing_id' => 'setListingId',
        'option_template_id' => 'setOptionTemplateId',
        'referrer_id' => 'setReferrerId',
        'listing' => 'setListing',
        'properties' => 'setProperties',
        'prices' => 'setPrices',
        'texts' => 'setTexts',
        'item_specifics' => 'setItemSpecifics',
        'dates' => 'setDates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'listing_id' => 'getListingId',
        'option_template_id' => 'getOptionTemplateId',
        'referrer_id' => 'getReferrerId',
        'listing' => 'getListing',
        'properties' => 'getProperties',
        'prices' => 'getPrices',
        'texts' => 'getTexts',
        'item_specifics' => 'getItemSpecifics',
        'dates' => 'getDates'
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
        $this->setIfExists('listing_id', $data ?? [], null);
        $this->setIfExists('option_template_id', $data ?? [], null);
        $this->setIfExists('referrer_id', $data ?? [], null);
        $this->setIfExists('listing', $data ?? [], null);
        $this->setIfExists('properties', $data ?? [], null);
        $this->setIfExists('prices', $data ?? [], null);
        $this->setIfExists('texts', $data ?? [], null);
        $this->setIfExists('item_specifics', $data ?? [], null);
        $this->setIfExists('dates', $data ?? [], null);
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

        if ($this->container['listing'] === null) {
            $invalidProperties[] = "'listing' can't be null";
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
     * Gets listing_id
     *
     * @return int|null
     */
    public function getListingId(): ?int
    {
        return $this->container['listing_id'];
    }

    /**
     * Sets listing_id
     *
     * @param int|null $listing_id The listing ID of the current listing market.
     *
     * @return $this
     */
    public function setListingId(?int $listing_id): static
    {
        if (is_null($listing_id)) {
            throw new InvalidArgumentException('non-nullable listing_id cannot be null');
        }
        $this->container['listing_id'] = $listing_id;

        return $this;
    }

    /**
     * Gets option_template_id
     *
     * @return int|null
     */
    public function getOptionTemplateId(): ?int
    {
        return $this->container['option_template_id'];
    }

    /**
     * Sets option_template_id
     *
     * @param int|null $option_template_id The ID of an existing listing option template from where to load listing market settings. @see OptionTemplate.
     *
     * @return $this
     */
    public function setOptionTemplateId(?int $option_template_id): static
    {
        if (is_null($option_template_id)) {
            throw new InvalidArgumentException('non-nullable option_template_id cannot be null');
        }
        $this->container['option_template_id'] = $option_template_id;

        return $this;
    }

    /**
     * Gets referrer_id
     *
     * @return int|null
     */
    public function getReferrerId(): ?int
    {
        return $this->container['referrer_id'];
    }

    /**
     * Sets referrer_id
     *
     * @param int|null $referrer_id The ID of the referrer. array
     *
     * @return $this
     */
    public function setReferrerId(?int $referrer_id): static
    {
        if (is_null($referrer_id)) {
            throw new InvalidArgumentException('non-nullable referrer_id cannot be null');
        }
        $this->container['referrer_id'] = $referrer_id;

        return $this;
    }

    /**
     * Gets listing
     *
     * @return \ck/plenty-client\Model\ListingMarketHistory[]
     */
    public function getListing(): array
    {
        return $this->container['listing'];
    }

    /**
     * Sets listing
     *
     * @param \ck/plenty-client\Model\ListingMarketHistory[] $listing listing
     *
     * @return $this
     */
    public function setListing(array $listing): static
    {
        if (is_null($listing)) {
            throw new InvalidArgumentException('non-nullable listing cannot be null');
        }
        $this->container['listing'] = $listing;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return object[]|null
     */
    public function getProperties(): ?array
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param object[]|null $properties properties
     *
     * @return $this
     */
    public function setProperties(?array $properties): static
    {
        if (is_null($properties)) {
            throw new InvalidArgumentException('non-nullable properties cannot be null');
        }
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return object[]|null
     */
    public function getPrices(): ?array
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param object[]|null $prices prices
     *
     * @return $this
     */
    public function setPrices(?array $prices): static
    {
        if (is_null($prices)) {
            throw new InvalidArgumentException('non-nullable prices cannot be null');
        }
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets texts
     *
     * @return object[]|null
     */
    public function getTexts(): ?array
    {
        return $this->container['texts'];
    }

    /**
     * Sets texts
     *
     * @param object[]|null $texts texts
     *
     * @return $this
     */
    public function setTexts(?array $texts): static
    {
        if (is_null($texts)) {
            throw new InvalidArgumentException('non-nullable texts cannot be null');
        }
        $this->container['texts'] = $texts;

        return $this;
    }

    /**
     * Gets item_specifics
     *
     * @return object[]|null
     */
    public function getItemSpecifics(): ?array
    {
        return $this->container['item_specifics'];
    }

    /**
     * Sets item_specifics
     *
     * @param object[]|null $item_specifics item_specifics
     *
     * @return $this
     */
    public function setItemSpecifics(?array $item_specifics): static
    {
        if (is_null($item_specifics)) {
            throw new InvalidArgumentException('non-nullable item_specifics cannot be null');
        }
        $this->container['item_specifics'] = $item_specifics;

        return $this;
    }

    /**
     * Gets dates
     *
     * @return object[]|null
     */
    public function getDates(): ?array
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates
     *
     * @param object[]|null $dates dates
     *
     * @return $this
     */
    public function setDates(?array $dates): static
    {
        if (is_null($dates)) {
            throw new InvalidArgumentException('non-nullable dates cannot be null');
        }
        $this->container['dates'] = $dates;

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



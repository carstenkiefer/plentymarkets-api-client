<?php
/**
 * RestOrdersOrderIdShippingPackagesOrderShippingPackageIdPutRequest
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
 * RestOrdersOrderIdShippingPackagesOrderShippingPackageIdPutRequest Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RestOrdersOrderIdShippingPackagesOrderShippingPackageIdPutRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = '_rest_orders__orderId__shipping_packages__orderShippingPackageId__put_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'package_id' => 'int',
        'weight' => 'int',
        'package_number' => 'string',
        'package_type' => 'int',
        'volume' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'package_id' => null,
        'weight' => null,
        'package_number' => null,
        'package_type' => null,
        'volume' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'package_id' => false,
		'weight' => false,
		'package_number' => false,
		'package_type' => false,
		'volume' => false
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
        'package_id' => 'packageId',
        'weight' => 'weight',
        'package_number' => 'packageNumber',
        'package_type' => 'packageType',
        'volume' => 'volume'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'package_id' => 'setPackageId',
        'weight' => 'setWeight',
        'package_number' => 'setPackageNumber',
        'package_type' => 'setPackageType',
        'volume' => 'setVolume'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'package_id' => 'getPackageId',
        'weight' => 'getWeight',
        'package_number' => 'getPackageNumber',
        'package_type' => 'getPackageType',
        'volume' => 'getVolume'
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
        $this->setIfExists('package_id', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('package_number', $data ?? [], null);
        $this->setIfExists('package_type', $data ?? [], null);
        $this->setIfExists('volume', $data ?? [], null);
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
     * Gets package_id
     *
     * @return int|null
     */
    public function getPackageId(): ?int
    {
        return $this->container['package_id'];
    }

    /**
     * Sets package_id
     *
     * @param int|null $package_id The ID of the package optional
     *
     * @return $this
     */
    public function setPackageId(?int $package_id): static
    {
        if (is_null($package_id)) {
            throw new InvalidArgumentException('non-nullable package_id cannot be null');
        }
        $this->container['package_id'] = $package_id;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int|null $weight The weight of the package in grams optional
     *
     * @return $this
     */
    public function setWeight(?int $weight): static
    {
        if (is_null($weight)) {
            throw new InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets package_number
     *
     * @return string|null
     */
    public function getPackageNumber(): ?string
    {
        return $this->container['package_number'];
    }

    /**
     * Sets package_number
     *
     * @param string|null $package_number The package number optional
     *
     * @return $this
     */
    public function setPackageNumber(?string $package_number): static
    {
        if (is_null($package_number)) {
            throw new InvalidArgumentException('non-nullable package_number cannot be null');
        }
        $this->container['package_number'] = $package_number;

        return $this;
    }

    /**
     * Gets package_type
     *
     * @return int|null
     */
    public function getPackageType(): ?int
    {
        return $this->container['package_type'];
    }

    /**
     * Sets package_type
     *
     * @param int|null $package_type The type of the package. The following types are valid:  0: unpacked 1: Bale 2: Dispenser 3: Coil 4: Roll pallet 5: Colli 6: Container 7: Bucket 8: Cask 9: Bottles 10: European flat pallet 11: Structural frame 12: Gas cylinder 13: Pallet cage 14: Hobbock 15: Half pallet 16: Pallet of food items 17: Wooden coaster 18: IBC container 19: Pitcher 20: Wicker bottle 21: Case 22: Canister 23: Customer pallet 24: Cardboard box 25: Composite packaging 26: Package 27: Ring 28: Role 29: Sack 30: units 31: Tank 32: Drum 34: Crate 35: Quarter pallet 36: Other pallets 37: Bin 38: One-way pallet 39: Foil bag  optional
     *
     * @return $this
     */
    public function setPackageType(?int $package_type): static
    {
        if (is_null($package_type)) {
            throw new InvalidArgumentException('non-nullable package_type cannot be null');
        }
        $this->container['package_type'] = $package_type;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return float|null
     */
    public function getVolume(): ?float
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param float|null $volume The volume of the package optional
     *
     * @return $this
     */
    public function setVolume(?float $volume): static
    {
        if (is_null($volume)) {
            throw new InvalidArgumentException('non-nullable volume cannot be null');
        }
        $this->container['volume'] = $volume;

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



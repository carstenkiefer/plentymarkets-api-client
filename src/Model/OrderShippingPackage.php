<?php
/**
 * OrderShippingPackage
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
 * OrderShippingPackage Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class OrderShippingPackage implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderShippingPackage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'order_id' => 'int',
        'package_id' => 'int',
        'weight' => 'int',
        'package_number' => 'string',
        'label_path' => 'string',
        'label_base64' => 'string',
        'export_label_base64' => 'string',
        'return_package_number' => 'string',
        'package_type' => 'int',
        'volume' => 'float',
        'pallet_id' => 'int',
        'is_closed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'order_id' => null,
        'package_id' => null,
        'weight' => null,
        'package_number' => null,
        'label_path' => null,
        'label_base64' => null,
        'export_label_base64' => null,
        'return_package_number' => null,
        'package_type' => null,
        'volume' => null,
        'pallet_id' => null,
        'is_closed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'order_id' => false,
		'package_id' => false,
		'weight' => false,
		'package_number' => false,
		'label_path' => false,
		'label_base64' => false,
		'export_label_base64' => false,
		'return_package_number' => false,
		'package_type' => false,
		'volume' => false,
		'pallet_id' => false,
		'is_closed' => false
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
        'order_id' => 'orderId',
        'package_id' => 'packageId',
        'weight' => 'weight',
        'package_number' => 'packageNumber',
        'label_path' => 'labelPath',
        'label_base64' => 'labelBase64',
        'export_label_base64' => 'exportLabelBase64',
        'return_package_number' => 'returnPackageNumber',
        'package_type' => 'packageType',
        'volume' => 'volume',
        'pallet_id' => 'palletId',
        'is_closed' => 'isClosed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'order_id' => 'setOrderId',
        'package_id' => 'setPackageId',
        'weight' => 'setWeight',
        'package_number' => 'setPackageNumber',
        'label_path' => 'setLabelPath',
        'label_base64' => 'setLabelBase64',
        'export_label_base64' => 'setExportLabelBase64',
        'return_package_number' => 'setReturnPackageNumber',
        'package_type' => 'setPackageType',
        'volume' => 'setVolume',
        'pallet_id' => 'setPalletId',
        'is_closed' => 'setIsClosed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'order_id' => 'getOrderId',
        'package_id' => 'getPackageId',
        'weight' => 'getWeight',
        'package_number' => 'getPackageNumber',
        'label_path' => 'getLabelPath',
        'label_base64' => 'getLabelBase64',
        'export_label_base64' => 'getExportLabelBase64',
        'return_package_number' => 'getReturnPackageNumber',
        'package_type' => 'getPackageType',
        'volume' => 'getVolume',
        'pallet_id' => 'getPalletId',
        'is_closed' => 'getIsClosed'
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
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('package_id', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('package_number', $data ?? [], null);
        $this->setIfExists('label_path', $data ?? [], null);
        $this->setIfExists('label_base64', $data ?? [], null);
        $this->setIfExists('export_label_base64', $data ?? [], null);
        $this->setIfExists('return_package_number', $data ?? [], null);
        $this->setIfExists('package_type', $data ?? [], null);
        $this->setIfExists('volume', $data ?? [], null);
        $this->setIfExists('pallet_id', $data ?? [], null);
        $this->setIfExists('is_closed', $data ?? [], null);
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
     * @param int|null $id The ID of the order shipping package
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
     * Gets order_id
     *
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int|null $order_id The ID of the order
     *
     * @return $this
     */
    public function setOrderId(?int $order_id): static
    {
        if (is_null($order_id)) {
            throw new InvalidArgumentException('non-nullable order_id cannot be null');
        }
        $this->container['order_id'] = $order_id;

        return $this;
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
     * @param int|null $package_id The ID of the package
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
     * @param int|null $weight The weight of the package in grams
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
     * @param string|null $package_number The package number
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
     * Gets label_path
     *
     * @return string|null
     */
    public function getLabelPath(): ?string
    {
        return $this->container['label_path'];
    }

    /**
     * Sets label_path
     *
     * @param string|null $label_path The path to the label
     *
     * @return $this
     */
    public function setLabelPath(?string $label_path): static
    {
        if (is_null($label_path)) {
            throw new InvalidArgumentException('non-nullable label_path cannot be null');
        }
        $this->container['label_path'] = $label_path;

        return $this;
    }

    /**
     * Gets label_base64
     *
     * @return string|null
     */
    public function getLabelBase64(): ?string
    {
        return $this->container['label_base64'];
    }

    /**
     * Sets label_base64
     *
     * @param string|null $label_base64 The base64 encoded label
     *
     * @return $this
     */
    public function setLabelBase64(?string $label_base64): static
    {
        if (is_null($label_base64)) {
            throw new InvalidArgumentException('non-nullable label_base64 cannot be null');
        }
        $this->container['label_base64'] = $label_base64;

        return $this;
    }

    /**
     * Gets export_label_base64
     *
     * @return string|null
     */
    public function getExportLabelBase64(): ?string
    {
        return $this->container['export_label_base64'];
    }

    /**
     * Sets export_label_base64
     *
     * @param string|null $export_label_base64 The base64 encoded export label
     *
     * @return $this
     */
    public function setExportLabelBase64(?string $export_label_base64): static
    {
        if (is_null($export_label_base64)) {
            throw new InvalidArgumentException('non-nullable export_label_base64 cannot be null');
        }
        $this->container['export_label_base64'] = $export_label_base64;

        return $this;
    }

    /**
     * Gets return_package_number
     *
     * @return string|null
     */
    public function getReturnPackageNumber(): ?string
    {
        return $this->container['return_package_number'];
    }

    /**
     * Sets return_package_number
     *
     * @param string|null $return_package_number The return package number
     *
     * @return $this
     */
    public function setReturnPackageNumber(?string $return_package_number): static
    {
        if (is_null($return_package_number)) {
            throw new InvalidArgumentException('non-nullable return_package_number cannot be null');
        }
        $this->container['return_package_number'] = $return_package_number;

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
     * @param int|null $package_type The type of the package. The following types are valid: <ul> <li>0: unpacked</li> <li>1: Bale</li> <li>2: Dispenser</li> <li>3: Coil</li> <li>4: Roll pallet</li> <li>5: Colli</li> <li>6: Container</li> <li>7: Bucket</li> <li>8: Cask</li> <li>9: Bottles</li> <li>10: European flat pallet</li> <li>11: Structural frame</li> <li>12: Gas cylinder</li> <li>13: Pallet cage</li> <li>14: Hobbock</li> <li>15: Half pallet</li> <li>16: Pallet of food items</li> <li>17: Wooden coaster</li> <li>18: IBC container</li> <li>19: Pitcher</li> <li>20: Wicker bottle</li> <li>21: Case</li> <li>22: Canister</li> <li>23: Customer pallet</li> <li>24: Cardboard box</li> <li>25: Composite packaging</li> <li>26: Package</li> <li>27: Ring</li> <li>28: Role</li> <li>29: Sack</li> <li>30: units</li> <li>31: Tank</li> <li>32: Drum</li> <li>34: Crate</li> <li>35: Quarter pallet</li> <li>36: Other pallets</li> <li>37: Bin</li> <li>38: One-way pallet</li> <li>39: Foil bag</li> </ul>
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
     * @param float|null $volume The volume of the package
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
     * Gets pallet_id
     *
     * @return int|null
     */
    public function getPalletId(): ?int
    {
        return $this->container['pallet_id'];
    }

    /**
     * Sets pallet_id
     *
     * @param int|null $pallet_id The id of the pallet of which the package belong to
     *
     * @return $this
     */
    public function setPalletId(?int $pallet_id): static
    {
        if (is_null($pallet_id)) {
            throw new InvalidArgumentException('non-nullable pallet_id cannot be null');
        }
        $this->container['pallet_id'] = $pallet_id;

        return $this;
    }

    /**
     * Gets is_closed
     *
     * @return bool|null
     */
    public function getIsClosed(): ?bool
    {
        return $this->container['is_closed'];
    }

    /**
     * Sets is_closed
     *
     * @param bool|null $is_closed Flag to say if the package is editable or not
     *
     * @return $this
     */
    public function setIsClosed(?bool $is_closed): static
    {
        if (is_null($is_closed)) {
            throw new InvalidArgumentException('non-nullable is_closed cannot be null');
        }
        $this->container['is_closed'] = $is_closed;

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



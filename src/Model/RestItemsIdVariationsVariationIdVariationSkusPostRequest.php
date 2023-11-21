<?php
/**
 * RestItemsIdVariationsVariationIdVariationSkusPostRequest
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
 * RestItemsIdVariationsVariationIdVariationSkusPostRequest Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RestItemsIdVariationsVariationIdVariationSkusPostRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = '_rest_items__id__variations__variationId__variation_skus_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'variation_id' => 'int',
        'market_id' => 'float',
        'account_id' => 'int',
        'initial_sku' => 'string',
        'sku' => 'string',
        'parent_sku' => 'string',
        'is_active' => 'bool',
        'created_at' => 'string',
        'updated_at' => 'string',
        'exported_at' => 'string',
        'stock_updated_at' => 'string',
        'deleted_at' => 'string',
        'status' => 'string',
        'additional_information' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'variation_id' => null,
        'market_id' => null,
        'account_id' => null,
        'initial_sku' => null,
        'sku' => null,
        'parent_sku' => null,
        'is_active' => null,
        'created_at' => null,
        'updated_at' => null,
        'exported_at' => null,
        'stock_updated_at' => null,
        'deleted_at' => null,
        'status' => null,
        'additional_information' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'variation_id' => false,
		'market_id' => false,
		'account_id' => false,
		'initial_sku' => false,
		'sku' => false,
		'parent_sku' => false,
		'is_active' => false,
		'created_at' => false,
		'updated_at' => false,
		'exported_at' => false,
		'stock_updated_at' => false,
		'deleted_at' => false,
		'status' => false,
		'additional_information' => false
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
        'variation_id' => 'variationId',
        'market_id' => 'marketId',
        'account_id' => 'accountId',
        'initial_sku' => 'initialSku',
        'sku' => 'sku',
        'parent_sku' => 'parentSku',
        'is_active' => 'isActive',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'exported_at' => 'exportedAt',
        'stock_updated_at' => 'stockUpdatedAt',
        'deleted_at' => 'deletedAt',
        'status' => 'status',
        'additional_information' => 'additionalInformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'variation_id' => 'setVariationId',
        'market_id' => 'setMarketId',
        'account_id' => 'setAccountId',
        'initial_sku' => 'setInitialSku',
        'sku' => 'setSku',
        'parent_sku' => 'setParentSku',
        'is_active' => 'setIsActive',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'exported_at' => 'setExportedAt',
        'stock_updated_at' => 'setStockUpdatedAt',
        'deleted_at' => 'setDeletedAt',
        'status' => 'setStatus',
        'additional_information' => 'setAdditionalInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'variation_id' => 'getVariationId',
        'market_id' => 'getMarketId',
        'account_id' => 'getAccountId',
        'initial_sku' => 'getInitialSku',
        'sku' => 'getSku',
        'parent_sku' => 'getParentSku',
        'is_active' => 'getIsActive',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'exported_at' => 'getExportedAt',
        'stock_updated_at' => 'getStockUpdatedAt',
        'deleted_at' => 'getDeletedAt',
        'status' => 'getStatus',
        'additional_information' => 'getAdditionalInformation'
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
        $this->setIfExists('variation_id', $data ?? [], null);
        $this->setIfExists('market_id', $data ?? [], null);
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('initial_sku', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('parent_sku', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('exported_at', $data ?? [], null);
        $this->setIfExists('stock_updated_at', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('additional_information', $data ?? [], null);
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
        if ($this->container['market_id'] === null) {
            $invalidProperties[] = "'market_id' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
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
     * @param int $variation_id The ID of the variation
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
     * Gets market_id
     *
     * @return float
     */
    public function getMarketId(): float
    {
        return $this->container['market_id'];
    }

    /**
     * Sets market_id
     *
     * @param float $market_id The ID of the market
     *
     * @return $this
     */
    public function setMarketId(float $market_id): static
    {
        if (is_null($market_id)) {
            throw new InvalidArgumentException('non-nullable market_id cannot be null');
        }
        $this->container['market_id'] = $market_id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return int
     */
    public function getAccountId(): int
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int $account_id The ID of the market account
     *
     * @return $this
     */
    public function setAccountId(int $account_id): static
    {
        if (is_null($account_id)) {
            throw new InvalidArgumentException('non-nullable account_id cannot be null');
        }
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets initial_sku
     *
     * @return string|null
     */
    public function getInitialSku(): ?string
    {
        return $this->container['initial_sku'];
    }

    /**
     * Sets initial_sku
     *
     * @param string|null $initial_sku The initial SKU of the variation. The initial SKU cannot be modified even if the variation SKU is changed. However, it is possible to reset the variation SKU to the initial SKU. optional
     *
     * @return $this
     */
    public function setInitialSku(?string $initial_sku): static
    {
        if (is_null($initial_sku)) {
            throw new InvalidArgumentException('non-nullable initial_sku cannot be null');
        }
        $this->container['initial_sku'] = $initial_sku;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku The SKU of the variation. The SKU is adjustable but may not exist twice for the combination of market Id and account Id.
     *
     * @return $this
     */
    public function setSku(string $sku): static
    {
        if (is_null($sku)) {
            throw new InvalidArgumentException('non-nullable sku cannot be null');
        }
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets parent_sku
     *
     * @return string|null
     */
    public function getParentSku(): ?string
    {
        return $this->container['parent_sku'];
    }

    /**
     * Sets parent_sku
     *
     * @param string|null $parent_sku The Parent SKU of the variation. The Parent SKU is adjustable. The same Parent SKU value should be used on variations of same article. optional
     *
     * @return $this
     */
    public function setParentSku(?string $parent_sku): static
    {
        if (is_null($parent_sku)) {
            throw new InvalidArgumentException('non-nullable parent_sku cannot be null');
        }
        $this->container['parent_sku'] = $parent_sku;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active Flag that indicates if the item is ready for export (currently not in use). optional
     *
     * @return $this
     */
    public function setIsActive(?bool $is_active): static
    {
        if (is_null($is_active)) {
            throw new InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at The time the SKU was created (YYYY-MM-DD HH:MM:SS). optional
     *
     * @return $this
     */
    public function setCreatedAt(?string $created_at): static
    {
        if (is_null($created_at)) {
            throw new InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

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
     * @param string|null $updated_at The time the SKU was updated (YYYY-MM-DD HH:MM:SS). optional
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
     * Gets exported_at
     *
     * @return string|null
     */
    public function getExportedAt(): ?string
    {
        return $this->container['exported_at'];
    }

    /**
     * Sets exported_at
     *
     * @param string|null $exported_at The time the variation was last exported (YYYY-MM-DD HH:MM:SS). optional
     *
     * @return $this
     */
    public function setExportedAt(?string $exported_at): static
    {
        if (is_null($exported_at)) {
            throw new InvalidArgumentException('non-nullable exported_at cannot be null');
        }
        $this->container['exported_at'] = $exported_at;

        return $this;
    }

    /**
     * Gets stock_updated_at
     *
     * @return string|null
     */
    public function getStockUpdatedAt(): ?string
    {
        return $this->container['stock_updated_at'];
    }

    /**
     * Sets stock_updated_at
     *
     * @param string|null $stock_updated_at optional
     *
     * @return $this
     */
    public function setStockUpdatedAt(?string $stock_updated_at): static
    {
        if (is_null($stock_updated_at)) {
            throw new InvalidArgumentException('non-nullable stock_updated_at cannot be null');
        }
        $this->container['stock_updated_at'] = $stock_updated_at;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return string|null
     */
    public function getDeletedAt(): ?string
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param string|null $deleted_at The time the variation was deleted (YYYY-MM-DD HH:MM:SS). optional
     *
     * @return $this
     */
    public function setDeletedAt(?string $deleted_at): static
    {
        if (is_null($deleted_at)) {
            throw new InvalidArgumentException('non-nullable deleted_at cannot be null');
        }
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the variation after the export. Possible entries are INACTIVE, ERROR, SENT and ACTIVE. optional allowed values are ACTIVE, INACTIVE, ERROR, SENT
     *
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets additional_information
     *
     * @return string|null
     */
    public function getAdditionalInformation(): ?string
    {
        return $this->container['additional_information'];
    }

    /**
     * Sets additional_information
     *
     * @param string|null $additional_information The field that contains additional information. optional
     *
     * @return $this
     */
    public function setAdditionalInformation(?string $additional_information): static
    {
        if (is_null($additional_information)) {
            throw new InvalidArgumentException('non-nullable additional_information cannot be null');
        }
        $this->container['additional_information'] = $additional_information;

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


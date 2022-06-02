<?php
/**
 * PropertyModificationMetadata
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Properties
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Properties
 *
 * All HubSpot objects store data in default and custom properties. These endpoints provide access to read and modify object properties in HubSpot.
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Properties\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Properties\ObjectSerializer;

/**
 * PropertyModificationMetadata Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Properties
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PropertyModificationMetadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PropertyModificationMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'archivable' => 'bool',
        'read_only_definition' => 'bool',
        'read_only_options' => 'bool',
        'read_only_value' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'archivable' => null,
        'read_only_definition' => null,
        'read_only_options' => null,
        'read_only_value' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'archivable' => 'archivable',
        'read_only_definition' => 'readOnlyDefinition',
        'read_only_options' => 'readOnlyOptions',
        'read_only_value' => 'readOnlyValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'archivable' => 'setArchivable',
        'read_only_definition' => 'setReadOnlyDefinition',
        'read_only_options' => 'setReadOnlyOptions',
        'read_only_value' => 'setReadOnlyValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'archivable' => 'getArchivable',
        'read_only_definition' => 'getReadOnlyDefinition',
        'read_only_options' => 'getReadOnlyOptions',
        'read_only_value' => 'getReadOnlyValue'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['archivable'] = $data['archivable'] ?? null;
        $this->container['read_only_definition'] = $data['read_only_definition'] ?? null;
        $this->container['read_only_options'] = $data['read_only_options'] ?? null;
        $this->container['read_only_value'] = $data['read_only_value'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['archivable'] === null) {
            $invalidProperties[] = "'archivable' can't be null";
        }
        if ($this->container['read_only_definition'] === null) {
            $invalidProperties[] = "'read_only_definition' can't be null";
        }
        if ($this->container['read_only_value'] === null) {
            $invalidProperties[] = "'read_only_value' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets archivable
     *
     * @return bool
     */
    public function getArchivable()
    {
        return $this->container['archivable'];
    }

    /**
     * Sets archivable
     *
     * @param bool $archivable archivable
     *
     * @return self
     */
    public function setArchivable($archivable)
    {
        $this->container['archivable'] = $archivable;

        return $this;
    }

    /**
     * Gets read_only_definition
     *
     * @return bool
     */
    public function getReadOnlyDefinition()
    {
        return $this->container['read_only_definition'];
    }

    /**
     * Sets read_only_definition
     *
     * @param bool $read_only_definition read_only_definition
     *
     * @return self
     */
    public function setReadOnlyDefinition($read_only_definition)
    {
        $this->container['read_only_definition'] = $read_only_definition;

        return $this;
    }

    /**
     * Gets read_only_options
     *
     * @return bool|null
     */
    public function getReadOnlyOptions()
    {
        return $this->container['read_only_options'];
    }

    /**
     * Sets read_only_options
     *
     * @param bool|null $read_only_options read_only_options
     *
     * @return self
     */
    public function setReadOnlyOptions($read_only_options)
    {
        $this->container['read_only_options'] = $read_only_options;

        return $this;
    }

    /**
     * Gets read_only_value
     *
     * @return bool
     */
    public function getReadOnlyValue()
    {
        return $this->container['read_only_value'];
    }

    /**
     * Sets read_only_value
     *
     * @param bool $read_only_value read_only_value
     *
     * @return self
     */
    public function setReadOnlyValue($read_only_value)
    {
        $this->container['read_only_value'] = $read_only_value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



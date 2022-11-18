<?php
/**
 * RGBAColor
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Blogs\BlogPosts
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Blog Post endpoints
 *
 * Use these endpoints for interacting with Blog Posts, Blog Authors, and Blog Tags
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Cms\Blogs\BlogPosts\Model;

use \ArrayAccess;
use \HubSpot\Client\Cms\Blogs\BlogPosts\ObjectSerializer;

/**
 * RGBAColor Class Doc Comment
 *
 * @category Class
 * @description A color defined by RGB values.
 * @package  HubSpot\Client\Cms\Blogs\BlogPosts
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RGBAColor implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RGBAColor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'r' => 'int',
        'g' => 'int',
        'b' => 'int',
        'a' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'r' => 'int32',
        'g' => 'int32',
        'b' => 'int32',
        'a' => null
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
        'r' => 'r',
        'g' => 'g',
        'b' => 'b',
        'a' => 'a'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'r' => 'setR',
        'g' => 'setG',
        'b' => 'setB',
        'a' => 'setA'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'r' => 'getR',
        'g' => 'getG',
        'b' => 'getB',
        'a' => 'getA'
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
        $this->container['r'] = $data['r'] ?? null;
        $this->container['g'] = $data['g'] ?? null;
        $this->container['b'] = $data['b'] ?? null;
        $this->container['a'] = $data['a'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['r'] === null) {
            $invalidProperties[] = "'r' can't be null";
        }
        if ($this->container['g'] === null) {
            $invalidProperties[] = "'g' can't be null";
        }
        if ($this->container['b'] === null) {
            $invalidProperties[] = "'b' can't be null";
        }
        if ($this->container['a'] === null) {
            $invalidProperties[] = "'a' can't be null";
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
     * Gets r
     *
     * @return int
     */
    public function getR()
    {
        return $this->container['r'];
    }

    /**
     * Sets r
     *
     * @param int $r Red.
     *
     * @return self
     */
    public function setR($r)
    {
        $this->container['r'] = $r;

        return $this;
    }

    /**
     * Gets g
     *
     * @return int
     */
    public function getG()
    {
        return $this->container['g'];
    }

    /**
     * Sets g
     *
     * @param int $g Green.
     *
     * @return self
     */
    public function setG($g)
    {
        $this->container['g'] = $g;

        return $this;
    }

    /**
     * Gets b
     *
     * @return int
     */
    public function getB()
    {
        return $this->container['b'];
    }

    /**
     * Sets b
     *
     * @param int $b Blue.
     *
     * @return self
     */
    public function setB($b)
    {
        $this->container['b'] = $b;

        return $this;
    }

    /**
     * Gets a
     *
     * @return float
     */
    public function getA()
    {
        return $this->container['a'];
    }

    /**
     * Sets a
     *
     * @param float $a Alpha.
     *
     * @return self
     */
    public function setA($a)
    {
        $this->container['a'] = $a;

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



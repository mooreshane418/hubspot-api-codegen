<?php
/**
 * DomainSetupInfo
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Domains
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Domains
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Cms\Domains\Model;

use \ArrayAccess;
use \HubSpot\Client\Cms\Domains\ObjectSerializer;

/**
 * DomainSetupInfo Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Domains
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DomainSetupInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DomainSetupInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'supports_ssl_externally' => 'bool',
        'who_is_email_addresses' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'supports_ssl_externally' => null,
        'who_is_email_addresses' => null
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
        'supports_ssl_externally' => 'supportsSslExternally',
        'who_is_email_addresses' => 'whoIsEmailAddresses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'supports_ssl_externally' => 'setSupportsSslExternally',
        'who_is_email_addresses' => 'setWhoIsEmailAddresses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'supports_ssl_externally' => 'getSupportsSslExternally',
        'who_is_email_addresses' => 'getWhoIsEmailAddresses'
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
        $this->container['supports_ssl_externally'] = $data['supports_ssl_externally'] ?? null;
        $this->container['who_is_email_addresses'] = $data['who_is_email_addresses'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['supports_ssl_externally'] === null) {
            $invalidProperties[] = "'supports_ssl_externally' can't be null";
        }
        if ($this->container['who_is_email_addresses'] === null) {
            $invalidProperties[] = "'who_is_email_addresses' can't be null";
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
     * Gets supports_ssl_externally
     *
     * @return bool
     */
    public function getSupportsSslExternally()
    {
        return $this->container['supports_ssl_externally'];
    }

    /**
     * Sets supports_ssl_externally
     *
     * @param bool $supports_ssl_externally supports_ssl_externally
     *
     * @return self
     */
    public function setSupportsSslExternally($supports_ssl_externally)
    {
        $this->container['supports_ssl_externally'] = $supports_ssl_externally;

        return $this;
    }

    /**
     * Gets who_is_email_addresses
     *
     * @return string[]
     */
    public function getWhoIsEmailAddresses()
    {
        return $this->container['who_is_email_addresses'];
    }

    /**
     * Sets who_is_email_addresses
     *
     * @param string[] $who_is_email_addresses who_is_email_addresses
     *
     * @return self
     */
    public function setWhoIsEmailAddresses($who_is_email_addresses)
    {
        $this->container['who_is_email_addresses'] = $who_is_email_addresses;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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



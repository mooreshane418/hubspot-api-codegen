<?php
/**
 * AccessTokenInfoResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  HubSpot\Client\Auth\OAuth
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OAuthService
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Auth\OAuth\Model;

use \ArrayAccess;
use \HubSpot\Client\Auth\OAuth\ObjectSerializer;

/**
 * AccessTokenInfoResponse Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Auth\OAuth
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccessTokenInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccessTokenInfoResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'token' => 'string',
        'user' => 'string',
        'hub_domain' => 'string',
        'scopes' => 'string[]',
        'hub_id' => 'int',
        'app_id' => 'int',
        'expires_in' => 'int',
        'user_id' => 'int',
        'token_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'token' => null,
        'user' => null,
        'hub_domain' => null,
        'scopes' => null,
        'hub_id' => 'int32',
        'app_id' => 'int32',
        'expires_in' => 'int32',
        'user_id' => 'int32',
        'token_type' => null
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
        'token' => 'token',
        'user' => 'user',
        'hub_domain' => 'hub_domain',
        'scopes' => 'scopes',
        'hub_id' => 'hub_id',
        'app_id' => 'app_id',
        'expires_in' => 'expires_in',
        'user_id' => 'user_id',
        'token_type' => 'token_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token' => 'setToken',
        'user' => 'setUser',
        'hub_domain' => 'setHubDomain',
        'scopes' => 'setScopes',
        'hub_id' => 'setHubId',
        'app_id' => 'setAppId',
        'expires_in' => 'setExpiresIn',
        'user_id' => 'setUserId',
        'token_type' => 'setTokenType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token' => 'getToken',
        'user' => 'getUser',
        'hub_domain' => 'getHubDomain',
        'scopes' => 'getScopes',
        'hub_id' => 'getHubId',
        'app_id' => 'getAppId',
        'expires_in' => 'getExpiresIn',
        'user_id' => 'getUserId',
        'token_type' => 'getTokenType'
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
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['hub_domain'] = isset($data['hub_domain']) ? $data['hub_domain'] : null;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['hub_id'] = isset($data['hub_id']) ? $data['hub_id'] : null;
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
        $this->container['expires_in'] = isset($data['expires_in']) ? $data['expires_in'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['token_type'] = isset($data['token_type']) ? $data['token_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['scopes'] === null) {
            $invalidProperties[] = "'scopes' can't be null";
        }
        if ($this->container['hub_id'] === null) {
            $invalidProperties[] = "'hub_id' can't be null";
        }
        if ($this->container['app_id'] === null) {
            $invalidProperties[] = "'app_id' can't be null";
        }
        if ($this->container['expires_in'] === null) {
            $invalidProperties[] = "'expires_in' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['token_type'] === null) {
            $invalidProperties[] = "'token_type' can't be null";
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
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string|null $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets hub_domain
     *
     * @return string|null
     */
    public function getHubDomain()
    {
        return $this->container['hub_domain'];
    }

    /**
     * Sets hub_domain
     *
     * @param string|null $hub_domain hub_domain
     *
     * @return $this
     */
    public function setHubDomain($hub_domain)
    {
        $this->container['hub_domain'] = $hub_domain;

        return $this;
    }

    /**
     * Gets scopes
     *
     * @return string[]
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     *
     * @param string[] $scopes scopes
     *
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;

        return $this;
    }

    /**
     * Gets hub_id
     *
     * @return int
     */
    public function getHubId()
    {
        return $this->container['hub_id'];
    }

    /**
     * Sets hub_id
     *
     * @param int $hub_id hub_id
     *
     * @return $this
     */
    public function setHubId($hub_id)
    {
        $this->container['hub_id'] = $hub_id;

        return $this;
    }

    /**
     * Gets app_id
     *
     * @return int
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param int $app_id app_id
     *
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets expires_in
     *
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->container['expires_in'];
    }

    /**
     * Sets expires_in
     *
     * @param int $expires_in expires_in
     *
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        $this->container['expires_in'] = $expires_in;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string $token_type token_type
     *
     * @return $this
     */
    public function setTokenType($token_type)
    {
        $this->container['token_type'] = $token_type;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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



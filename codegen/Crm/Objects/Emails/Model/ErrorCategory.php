<?php
/**
 * ErrorCategory
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Objects\Emails
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Emails
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Objects\Emails\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Objects\Emails\ObjectSerializer;

/**
 * ErrorCategory Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Objects\Emails
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ErrorCategory implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ErrorCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'http_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'http_status' => null
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
        'name' => 'name',
        'http_status' => 'httpStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'http_status' => 'setHttpStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'http_status' => 'getHttpStatus'
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

    const HTTP_STATUS__CONTINUE = 'CONTINUE';
    const HTTP_STATUS_SWITCHING_PROTOCOLS = 'SWITCHING_PROTOCOLS';
    const HTTP_STATUS_PROCESSING = 'PROCESSING';
    const HTTP_STATUS_OK = 'OK';
    const HTTP_STATUS_CREATED = 'CREATED';
    const HTTP_STATUS_ACCEPTED = 'ACCEPTED';
    const HTTP_STATUS_NON_AUTHORITATIVE_INFORMATION = 'NON_AUTHORITATIVE_INFORMATION';
    const HTTP_STATUS_NO_CONTENT = 'NO_CONTENT';
    const HTTP_STATUS_RESET_CONTENT = 'RESET_CONTENT';
    const HTTP_STATUS_PARTIAL_CONTENT = 'PARTIAL_CONTENT';
    const HTTP_STATUS_MULTI_STATUS = 'MULTI_STATUS';
    const HTTP_STATUS_ALREADY_REPORTED = 'ALREADY_REPORTED';
    const HTTP_STATUS_IM_USED = 'IM_USED';
    const HTTP_STATUS_MULTIPLE_CHOICES = 'MULTIPLE_CHOICES';
    const HTTP_STATUS_MOVED_PERMANENTLY = 'MOVED_PERMANENTLY';
    const HTTP_STATUS_FOUND = 'FOUND';
    const HTTP_STATUS_SEE_OTHER = 'SEE_OTHER';
    const HTTP_STATUS_NOT_MODIFIED = 'NOT_MODIFIED';
    const HTTP_STATUS_USE_PROXY = 'USE_PROXY';
    const HTTP_STATUS_TEMPORARY_REDIRECT = 'TEMPORARY_REDIRECT';
    const HTTP_STATUS_PERMANENT_REDIRECT = 'PERMANENT_REDIRECT';
    const HTTP_STATUS_BAD_REQUEST = 'BAD_REQUEST';
    const HTTP_STATUS_UNAUTHORIZED = 'UNAUTHORIZED';
    const HTTP_STATUS_PAYMENT_REQUIRED = 'PAYMENT_REQUIRED';
    const HTTP_STATUS_FORBIDDEN = 'FORBIDDEN';
    const HTTP_STATUS_NOT_FOUND = 'NOT_FOUND';
    const HTTP_STATUS_METHOD_NOT_ALLOWED = 'METHOD_NOT_ALLOWED';
    const HTTP_STATUS_NOT_ACCEPTABLE = 'NOT_ACCEPTABLE';
    const HTTP_STATUS_PROXY_AUTHENTICATION_REQUIRED = 'PROXY_AUTHENTICATION_REQUIRED';
    const HTTP_STATUS_REQUEST_TIMEOUT = 'REQUEST_TIMEOUT';
    const HTTP_STATUS_CONFLICT = 'CONFLICT';
    const HTTP_STATUS_GONE = 'GONE';
    const HTTP_STATUS_LENGTH_REQUIRED = 'LENGTH_REQUIRED';
    const HTTP_STATUS_PRECONDITION_FAILED = 'PRECONDITION_FAILED';
    const HTTP_STATUS_REQUEST_ENTITY_TOO_LARGE = 'REQUEST_ENTITY_TOO_LARGE';
    const HTTP_STATUS_REQUEST_URI_TOO_LONG = 'REQUEST_URI_TOO_LONG';
    const HTTP_STATUS_UNSUPPORTED_MEDIA_TYPE = 'UNSUPPORTED_MEDIA_TYPE';
    const HTTP_STATUS_REQUESTED_RANGE_NOT_SATISFIABLE = 'REQUESTED_RANGE_NOT_SATISFIABLE';
    const HTTP_STATUS_EXPECTATION_FAILED = 'EXPECTATION_FAILED';
    const HTTP_STATUS_IM_A_TEAPOT = 'IM_A_TEAPOT';
    const HTTP_STATUS_MISDIRECTED_REQUEST = 'MISDIRECTED_REQUEST';
    const HTTP_STATUS_UNPROCESSABLE_ENTITY = 'UNPROCESSABLE_ENTITY';
    const HTTP_STATUS_LOCKED = 'LOCKED';
    const HTTP_STATUS_FAILED_DEPENDENCY = 'FAILED_DEPENDENCY';
    const HTTP_STATUS_UPGRADE_REQUIRED = 'UPGRADE_REQUIRED';
    const HTTP_STATUS_PRECONDITION_REQUIRED = 'PRECONDITION_REQUIRED';
    const HTTP_STATUS_TOO_MANY_REQUESTS = 'TOO_MANY_REQUESTS';
    const HTTP_STATUS_REQUEST_HEADERS_FIELDS_TOO_LARGE = 'REQUEST_HEADERS_FIELDS_TOO_LARGE';
    const HTTP_STATUS_INTERNAL_STALE_SERVICE_DISCOVERY = 'INTERNAL_STALE_SERVICE_DISCOVERY';
    const HTTP_STATUS_UNAVAILABLE_FOR_LEGAL_REASONS = 'UNAVAILABLE_FOR_LEGAL_REASONS';
    const HTTP_STATUS_MIGRATION_IN_PROGRESS = 'MIGRATION_IN_PROGRESS';
    const HTTP_STATUS_INTERNAL_SERVER_ERROR = 'INTERNAL_SERVER_ERROR';
    const HTTP_STATUS_NOT_IMPLEMENTED = 'NOT_IMPLEMENTED';
    const HTTP_STATUS_BAD_GATEWAY = 'BAD_GATEWAY';
    const HTTP_STATUS_SERVICE_UNAVAILABLE = 'SERVICE_UNAVAILABLE';
    const HTTP_STATUS_GATEWAY_TIMEOUT = 'GATEWAY_TIMEOUT';
    const HTTP_STATUS_HTTP_VERSION_NOT_SUPPORTED = 'HTTP_VERSION_NOT_SUPPORTED';
    const HTTP_STATUS_VARIANT_ALSO_NEGOTIATES = 'VARIANT_ALSO_NEGOTIATES';
    const HTTP_STATUS_INSUFFICIENT_STORAGE = 'INSUFFICIENT_STORAGE';
    const HTTP_STATUS_LOOP_DETECTED = 'LOOP_DETECTED';
    const HTTP_STATUS_NOT_EXTENDED = 'NOT_EXTENDED';
    const HTTP_STATUS_NETWORK_AUTHENTICATION_REQUIRED = 'NETWORK_AUTHENTICATION_REQUIRED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHttpStatusAllowableValues()
    {
        return [
            self::HTTP_STATUS__CONTINUE,
            self::HTTP_STATUS_SWITCHING_PROTOCOLS,
            self::HTTP_STATUS_PROCESSING,
            self::HTTP_STATUS_OK,
            self::HTTP_STATUS_CREATED,
            self::HTTP_STATUS_ACCEPTED,
            self::HTTP_STATUS_NON_AUTHORITATIVE_INFORMATION,
            self::HTTP_STATUS_NO_CONTENT,
            self::HTTP_STATUS_RESET_CONTENT,
            self::HTTP_STATUS_PARTIAL_CONTENT,
            self::HTTP_STATUS_MULTI_STATUS,
            self::HTTP_STATUS_ALREADY_REPORTED,
            self::HTTP_STATUS_IM_USED,
            self::HTTP_STATUS_MULTIPLE_CHOICES,
            self::HTTP_STATUS_MOVED_PERMANENTLY,
            self::HTTP_STATUS_FOUND,
            self::HTTP_STATUS_SEE_OTHER,
            self::HTTP_STATUS_NOT_MODIFIED,
            self::HTTP_STATUS_USE_PROXY,
            self::HTTP_STATUS_TEMPORARY_REDIRECT,
            self::HTTP_STATUS_PERMANENT_REDIRECT,
            self::HTTP_STATUS_BAD_REQUEST,
            self::HTTP_STATUS_UNAUTHORIZED,
            self::HTTP_STATUS_PAYMENT_REQUIRED,
            self::HTTP_STATUS_FORBIDDEN,
            self::HTTP_STATUS_NOT_FOUND,
            self::HTTP_STATUS_METHOD_NOT_ALLOWED,
            self::HTTP_STATUS_NOT_ACCEPTABLE,
            self::HTTP_STATUS_PROXY_AUTHENTICATION_REQUIRED,
            self::HTTP_STATUS_REQUEST_TIMEOUT,
            self::HTTP_STATUS_CONFLICT,
            self::HTTP_STATUS_GONE,
            self::HTTP_STATUS_LENGTH_REQUIRED,
            self::HTTP_STATUS_PRECONDITION_FAILED,
            self::HTTP_STATUS_REQUEST_ENTITY_TOO_LARGE,
            self::HTTP_STATUS_REQUEST_URI_TOO_LONG,
            self::HTTP_STATUS_UNSUPPORTED_MEDIA_TYPE,
            self::HTTP_STATUS_REQUESTED_RANGE_NOT_SATISFIABLE,
            self::HTTP_STATUS_EXPECTATION_FAILED,
            self::HTTP_STATUS_IM_A_TEAPOT,
            self::HTTP_STATUS_MISDIRECTED_REQUEST,
            self::HTTP_STATUS_UNPROCESSABLE_ENTITY,
            self::HTTP_STATUS_LOCKED,
            self::HTTP_STATUS_FAILED_DEPENDENCY,
            self::HTTP_STATUS_UPGRADE_REQUIRED,
            self::HTTP_STATUS_PRECONDITION_REQUIRED,
            self::HTTP_STATUS_TOO_MANY_REQUESTS,
            self::HTTP_STATUS_REQUEST_HEADERS_FIELDS_TOO_LARGE,
            self::HTTP_STATUS_INTERNAL_STALE_SERVICE_DISCOVERY,
            self::HTTP_STATUS_UNAVAILABLE_FOR_LEGAL_REASONS,
            self::HTTP_STATUS_MIGRATION_IN_PROGRESS,
            self::HTTP_STATUS_INTERNAL_SERVER_ERROR,
            self::HTTP_STATUS_NOT_IMPLEMENTED,
            self::HTTP_STATUS_BAD_GATEWAY,
            self::HTTP_STATUS_SERVICE_UNAVAILABLE,
            self::HTTP_STATUS_GATEWAY_TIMEOUT,
            self::HTTP_STATUS_HTTP_VERSION_NOT_SUPPORTED,
            self::HTTP_STATUS_VARIANT_ALSO_NEGOTIATES,
            self::HTTP_STATUS_INSUFFICIENT_STORAGE,
            self::HTTP_STATUS_LOOP_DETECTED,
            self::HTTP_STATUS_NOT_EXTENDED,
            self::HTTP_STATUS_NETWORK_AUTHENTICATION_REQUIRED,
        ];
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['http_status'] = $data['http_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['http_status'] === null) {
            $invalidProperties[] = "'http_status' can't be null";
        }
        $allowedValues = $this->getHttpStatusAllowableValues();
        if (!is_null($this->container['http_status']) && !in_array($this->container['http_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'http_status', must be one of '%s'",
                $this->container['http_status'],
                implode("', '", $allowedValues)
            );
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets http_status
     *
     * @return string
     */
    public function getHttpStatus()
    {
        return $this->container['http_status'];
    }

    /**
     * Sets http_status
     *
     * @param string $http_status http_status
     *
     * @return self
     */
    public function setHttpStatus($http_status)
    {
        $allowedValues = $this->getHttpStatusAllowableValues();
        if (!in_array($http_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'http_status', must be one of '%s'",
                    $http_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['http_status'] = $http_status;

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



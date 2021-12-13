<?php
/**
 * TimelineEvent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Timeline
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Timeline events
 *
 * This feature allows an app to create and configure custom events that can show up in the timelines of certain CRM objects like contacts, companies, tickets, or deals. You'll find multiple use cases for this API in the sections below.
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

namespace HubSpot\Client\Crm\Timeline\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Timeline\ObjectSerializer;

/**
 * TimelineEvent Class Doc Comment
 *
 * @category Class
 * @description The state of the timeline event.
 * @package  HubSpot\Client\Crm\Timeline
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TimelineEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TimelineEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'event_template_id' => 'string',
        'email' => 'string',
        'object_id' => 'string',
        'utk' => 'string',
        'domain' => 'string',
        'timestamp' => '\DateTime',
        'tokens' => 'array<string,string>',
        'extra_data' => 'object',
        'timeline_i_frame' => '\HubSpot\Client\Crm\Timeline\Model\TimelineEventIFrame',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'event_template_id' => null,
        'email' => null,
        'object_id' => null,
        'utk' => null,
        'domain' => null,
        'timestamp' => 'date-time',
        'tokens' => null,
        'extra_data' => null,
        'timeline_i_frame' => null,
        'id' => null
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
        'event_template_id' => 'eventTemplateId',
        'email' => 'email',
        'object_id' => 'objectId',
        'utk' => 'utk',
        'domain' => 'domain',
        'timestamp' => 'timestamp',
        'tokens' => 'tokens',
        'extra_data' => 'extraData',
        'timeline_i_frame' => 'timelineIFrame',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_template_id' => 'setEventTemplateId',
        'email' => 'setEmail',
        'object_id' => 'setObjectId',
        'utk' => 'setUtk',
        'domain' => 'setDomain',
        'timestamp' => 'setTimestamp',
        'tokens' => 'setTokens',
        'extra_data' => 'setExtraData',
        'timeline_i_frame' => 'setTimelineIFrame',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_template_id' => 'getEventTemplateId',
        'email' => 'getEmail',
        'object_id' => 'getObjectId',
        'utk' => 'getUtk',
        'domain' => 'getDomain',
        'timestamp' => 'getTimestamp',
        'tokens' => 'getTokens',
        'extra_data' => 'getExtraData',
        'timeline_i_frame' => 'getTimelineIFrame',
        'id' => 'getId'
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
        $this->container['event_template_id'] = $data['event_template_id'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['object_id'] = $data['object_id'] ?? null;
        $this->container['utk'] = $data['utk'] ?? null;
        $this->container['domain'] = $data['domain'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['tokens'] = $data['tokens'] ?? null;
        $this->container['extra_data'] = $data['extra_data'] ?? null;
        $this->container['timeline_i_frame'] = $data['timeline_i_frame'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['event_template_id'] === null) {
            $invalidProperties[] = "'event_template_id' can't be null";
        }
        if ($this->container['tokens'] === null) {
            $invalidProperties[] = "'tokens' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets event_template_id
     *
     * @return string
     */
    public function getEventTemplateId()
    {
        return $this->container['event_template_id'];
    }

    /**
     * Sets event_template_id
     *
     * @param string $event_template_id The event template ID.
     *
     * @return self
     */
    public function setEventTemplateId($event_template_id)
    {
        $this->container['event_template_id'] = $event_template_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The email address used for contact-specific events. This can be used to identify existing contacts, create new ones, or change the email for an existing contact (if paired with the `objectId`).
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets object_id
     *
     * @return string|null
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     *
     * @param string|null $object_id The CRM object identifier. This is required for every event other than contacts (where utk or email can be used).
     *
     * @return self
     */
    public function setObjectId($object_id)
    {
        $this->container['object_id'] = $object_id;

        return $this;
    }

    /**
     * Gets utk
     *
     * @return string|null
     */
    public function getUtk()
    {
        return $this->container['utk'];
    }

    /**
     * Sets utk
     *
     * @param string|null $utk Use the `utk` parameter to associate an event with a contact by `usertoken`. This is recommended if you don't know a user's email, but have an identifying user token in your cookie.
     *
     * @return self
     */
    public function setUtk($utk)
    {
        $this->container['utk'] = $utk;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain The event domain (often paired with utk).
     *
     * @return self
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp The time the event occurred. If not passed in, the curren time will be assumed. This is used to determine where an event is shown on a CRM object's timeline.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets tokens
     *
     * @return array<string,string>
     */
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     *
     * @param array<string,string> $tokens A collection of token keys and values associated with the template tokens.
     *
     * @return self
     */
    public function setTokens($tokens)
    {
        $this->container['tokens'] = $tokens;

        return $this;
    }

    /**
     * Gets extra_data
     *
     * @return object|null
     */
    public function getExtraData()
    {
        return $this->container['extra_data'];
    }

    /**
     * Sets extra_data
     *
     * @param object|null $extra_data Additional event-specific data that can be interpreted by the template's markdown.
     *
     * @return self
     */
    public function setExtraData($extra_data)
    {
        $this->container['extra_data'] = $extra_data;

        return $this;
    }

    /**
     * Gets timeline_i_frame
     *
     * @return \HubSpot\Client\Crm\Timeline\Model\TimelineEventIFrame|null
     */
    public function getTimelineIFrame()
    {
        return $this->container['timeline_i_frame'];
    }

    /**
     * Sets timeline_i_frame
     *
     * @param \HubSpot\Client\Crm\Timeline\Model\TimelineEventIFrame|null $timeline_i_frame timeline_i_frame
     *
     * @return self
     */
    public function setTimelineIFrame($timeline_i_frame)
    {
        $this->container['timeline_i_frame'] = $timeline_i_frame;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Identifier for the event. This is optional, and we recommend you do not pass this in. We will create one for you if you omit this. You can also use `{{uuid}}` anywhere in the ID to generate a unique string, guaranteeing uniqueness.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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



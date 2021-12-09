<?php
/**
 * ImportFromUrlInput
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Files
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Files
 *
 * Upload and manage files.
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

namespace HubSpot\Client\Files\Model;

use \ArrayAccess;
use \HubSpot\Client\Files\ObjectSerializer;

/**
 * ImportFromUrlInput Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Files
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ImportFromUrlInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImportFromUrlInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'access' => 'string',
        'ttl' => 'string',
        'name' => 'string',
        'url' => 'string',
        'folder_id' => 'string',
        'folder_path' => 'string',
        'duplicate_validation_strategy' => 'string',
        'duplicate_validation_scope' => 'string',
        'overwrite' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'access' => null,
        'ttl' => null,
        'name' => null,
        'url' => null,
        'folder_id' => null,
        'folder_path' => null,
        'duplicate_validation_strategy' => null,
        'duplicate_validation_scope' => null,
        'overwrite' => null
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
        'access' => 'access',
        'ttl' => 'ttl',
        'name' => 'name',
        'url' => 'url',
        'folder_id' => 'folderId',
        'folder_path' => 'folderPath',
        'duplicate_validation_strategy' => 'duplicateValidationStrategy',
        'duplicate_validation_scope' => 'duplicateValidationScope',
        'overwrite' => 'overwrite'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access' => 'setAccess',
        'ttl' => 'setTtl',
        'name' => 'setName',
        'url' => 'setUrl',
        'folder_id' => 'setFolderId',
        'folder_path' => 'setFolderPath',
        'duplicate_validation_strategy' => 'setDuplicateValidationStrategy',
        'duplicate_validation_scope' => 'setDuplicateValidationScope',
        'overwrite' => 'setOverwrite'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access' => 'getAccess',
        'ttl' => 'getTtl',
        'name' => 'getName',
        'url' => 'getUrl',
        'folder_id' => 'getFolderId',
        'folder_path' => 'getFolderPath',
        'duplicate_validation_strategy' => 'getDuplicateValidationStrategy',
        'duplicate_validation_scope' => 'getDuplicateValidationScope',
        'overwrite' => 'getOverwrite'
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

    const ACCESS_PUBLIC_INDEXABLE = 'PUBLIC_INDEXABLE';
    const ACCESS_PUBLIC_NOT_INDEXABLE = 'PUBLIC_NOT_INDEXABLE';
    const ACCESS_HIDDEN_INDEXABLE = 'HIDDEN_INDEXABLE';
    const ACCESS_HIDDEN_NOT_INDEXABLE = 'HIDDEN_NOT_INDEXABLE';
    const ACCESS_HIDDEN_PRIVATE = 'HIDDEN_PRIVATE';
    const ACCESS__PRIVATE = 'PRIVATE';
    const DUPLICATE_VALIDATION_STRATEGY_NONE = 'NONE';
    const DUPLICATE_VALIDATION_STRATEGY_REJECT = 'REJECT';
    const DUPLICATE_VALIDATION_STRATEGY_RETURN_EXISTING = 'RETURN_EXISTING';
    const DUPLICATE_VALIDATION_SCOPE_ENTIRE_PORTAL = 'ENTIRE_PORTAL';
    const DUPLICATE_VALIDATION_SCOPE_EXACT_FOLDER = 'EXACT_FOLDER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessAllowableValues()
    {
        return [
            self::ACCESS_PUBLIC_INDEXABLE,
            self::ACCESS_PUBLIC_NOT_INDEXABLE,
            self::ACCESS_HIDDEN_INDEXABLE,
            self::ACCESS_HIDDEN_NOT_INDEXABLE,
            self::ACCESS_HIDDEN_PRIVATE,
            self::ACCESS__PRIVATE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDuplicateValidationStrategyAllowableValues()
    {
        return [
            self::DUPLICATE_VALIDATION_STRATEGY_NONE,
            self::DUPLICATE_VALIDATION_STRATEGY_REJECT,
            self::DUPLICATE_VALIDATION_STRATEGY_RETURN_EXISTING,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDuplicateValidationScopeAllowableValues()
    {
        return [
            self::DUPLICATE_VALIDATION_SCOPE_ENTIRE_PORTAL,
            self::DUPLICATE_VALIDATION_SCOPE_EXACT_FOLDER,
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
        $this->container['access'] = $data['access'] ?? null;
        $this->container['ttl'] = $data['ttl'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['folder_id'] = $data['folder_id'] ?? null;
        $this->container['folder_path'] = $data['folder_path'] ?? null;
        $this->container['duplicate_validation_strategy'] = $data['duplicate_validation_strategy'] ?? null;
        $this->container['duplicate_validation_scope'] = $data['duplicate_validation_scope'] ?? null;
        $this->container['overwrite'] = $data['overwrite'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['access'] === null) {
            $invalidProperties[] = "'access' can't be null";
        }
        $allowedValues = $this->getAccessAllowableValues();
        if (!is_null($this->container['access']) && !in_array($this->container['access'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'access', must be one of '%s'",
                $this->container['access'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['duplicate_validation_strategy'] === null) {
            $invalidProperties[] = "'duplicate_validation_strategy' can't be null";
        }
        $allowedValues = $this->getDuplicateValidationStrategyAllowableValues();
        if (!is_null($this->container['duplicate_validation_strategy']) && !in_array($this->container['duplicate_validation_strategy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'duplicate_validation_strategy', must be one of '%s'",
                $this->container['duplicate_validation_strategy'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['duplicate_validation_scope'] === null) {
            $invalidProperties[] = "'duplicate_validation_scope' can't be null";
        }
        $allowedValues = $this->getDuplicateValidationScopeAllowableValues();
        if (!is_null($this->container['duplicate_validation_scope']) && !in_array($this->container['duplicate_validation_scope'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'duplicate_validation_scope', must be one of '%s'",
                $this->container['duplicate_validation_scope'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['overwrite'] === null) {
            $invalidProperties[] = "'overwrite' can't be null";
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
     * Gets access
     *
     * @return string
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param string $access PUBLIC_INDEXABLE: File is publicly accessible by anyone who has the URL. Search engines can index the file. PUBLIC_NOT_INDEXABLE: File is publicly accessible by anyone who has the URL. Search engines *can't* index the file. PRIVATE: File is NOT publicly accessible. Requires a signed URL to see content. Search engines *can't* index the file.
     *
     * @return self
     */
    public function setAccess($access)
    {
        $allowedValues = $this->getAccessAllowableValues();
        if (!in_array($access, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'access', must be one of '%s'",
                    $access,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['access'] = $access;

        return $this;
    }

    /**
     * Gets ttl
     *
     * @return string|null
     */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
     * Sets ttl
     *
     * @param string|null $ttl Time to live. If specified the file will be deleted after the given time frame.
     *
     * @return self
     */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name to give the resulting file in the file manager.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL to download the new file from.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return string|null
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param string|null $folder_id One of folderId or folderPath is required. Destination folder ID for the uploaded file.
     *
     * @return self
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets folder_path
     *
     * @return string|null
     */
    public function getFolderPath()
    {
        return $this->container['folder_path'];
    }

    /**
     * Sets folder_path
     *
     * @param string|null $folder_path One of folderPath or folderId is required. Destination folder path for the uploaded file. If the folder path does not exist, there will be an attempt to create the folder path.
     *
     * @return self
     */
    public function setFolderPath($folder_path)
    {
        $this->container['folder_path'] = $folder_path;

        return $this;
    }

    /**
     * Gets duplicate_validation_strategy
     *
     * @return string
     */
    public function getDuplicateValidationStrategy()
    {
        return $this->container['duplicate_validation_strategy'];
    }

    /**
     * Sets duplicate_validation_strategy
     *
     * @param string $duplicate_validation_strategy NONE: Do not run any duplicate validation. REJECT: Reject the upload if a duplicate is found. RETURN_EXISTING: If a duplicate file is found, do not upload a new file and return the found duplicate instead.
     *
     * @return self
     */
    public function setDuplicateValidationStrategy($duplicate_validation_strategy)
    {
        $allowedValues = $this->getDuplicateValidationStrategyAllowableValues();
        if (!in_array($duplicate_validation_strategy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'duplicate_validation_strategy', must be one of '%s'",
                    $duplicate_validation_strategy,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['duplicate_validation_strategy'] = $duplicate_validation_strategy;

        return $this;
    }

    /**
     * Gets duplicate_validation_scope
     *
     * @return string
     */
    public function getDuplicateValidationScope()
    {
        return $this->container['duplicate_validation_scope'];
    }

    /**
     * Sets duplicate_validation_scope
     *
     * @param string $duplicate_validation_scope ENTIRE_PORTAL: Look for a duplicate file in the entire account. EXACT_FOLDER: Look for a duplicate file in the provided folder.
     *
     * @return self
     */
    public function setDuplicateValidationScope($duplicate_validation_scope)
    {
        $allowedValues = $this->getDuplicateValidationScopeAllowableValues();
        if (!in_array($duplicate_validation_scope, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'duplicate_validation_scope', must be one of '%s'",
                    $duplicate_validation_scope,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['duplicate_validation_scope'] = $duplicate_validation_scope;

        return $this;
    }

    /**
     * Gets overwrite
     *
     * @return bool
     */
    public function getOverwrite()
    {
        return $this->container['overwrite'];
    }

    /**
     * Sets overwrite
     *
     * @param bool $overwrite If true, it will overwrite existing files if a file with the same name exists in the given folder.
     *
     * @return self
     */
    public function setOverwrite($overwrite)
    {
        $this->container['overwrite'] = $overwrite;

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



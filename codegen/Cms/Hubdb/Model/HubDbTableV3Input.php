<?php
/**
 * HubDbTableV3Input
 *
 * PHP version 5
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Hubdb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * HubDB endpoints
 *
 * HubDB is a relational data store that presents data as rows, columns, and cells in a table, much like a spreadsheet. HubDB tables can be added or modified [in the HubSpot CMS](https://knowledge.hubspot.com/cos-general/how-to-edit-hubdb-tables), but you can also use the API endpoints documented here. For more information on HubDB tables and using their data on a HubSpot site, see the [CMS developers site](https://designers.hubspot.com/docs/tools/hubdb). You can also see the [documentation for dynamic pages](https://designers.hubspot.com/docs/tutorials/how-to-build-dynamic-pages-with-hubdb) for more details about the `useForPages` field.  HubDB tables support `draft` and `live` versions and you can publish and unpublish the live version. This allows you to update data in the table, either for testing or to allow for a manual approval process, without affecting any live pages using the existing data. Draft data can be reviewed, pushed to live version, and published by a user working in HubSpot or published via the API. Draft data can also be discarded, allowing users to go back to the live version of the data without disrupting it. If a table is set to be `allowed for public access`, you can access the published version of the table and rows without any authentication by specifying the portal id via the query parameter `portalId`.
 *
 * The version of the OpenAPI document: v3
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Cms\Hubdb\Model;

use \ArrayAccess;
use \HubSpot\Client\Cms\Hubdb\ObjectSerializer;

/**
 * HubDbTableV3Input Class Doc Comment
 *
 * @category Class
 * @description Model for HubDB table input
 * @package  HubSpot\Client\Cms\Hubdb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HubDbTableV3Input implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HubDbTableV3Input';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dynamic_meta_tags' => 'map[string,int]',
        'allow_public_api_access' => 'bool',
        'use_for_pages' => 'bool',
        'columns' => '\HubSpot\Client\Cms\Hubdb\Model\ColumnInput[]',
        'name' => 'string',
        'enable_child_table_pages' => 'bool',
        'label' => 'string',
        'allow_child_tables' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'dynamic_meta_tags' => 'int32',
        'allow_public_api_access' => null,
        'use_for_pages' => null,
        'columns' => null,
        'name' => null,
        'enable_child_table_pages' => null,
        'label' => null,
        'allow_child_tables' => null
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
        'dynamic_meta_tags' => 'dynamicMetaTags',
        'allow_public_api_access' => 'allowPublicApiAccess',
        'use_for_pages' => 'useForPages',
        'columns' => 'columns',
        'name' => 'name',
        'enable_child_table_pages' => 'enableChildTablePages',
        'label' => 'label',
        'allow_child_tables' => 'allowChildTables'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dynamic_meta_tags' => 'setDynamicMetaTags',
        'allow_public_api_access' => 'setAllowPublicApiAccess',
        'use_for_pages' => 'setUseForPages',
        'columns' => 'setColumns',
        'name' => 'setName',
        'enable_child_table_pages' => 'setEnableChildTablePages',
        'label' => 'setLabel',
        'allow_child_tables' => 'setAllowChildTables'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dynamic_meta_tags' => 'getDynamicMetaTags',
        'allow_public_api_access' => 'getAllowPublicApiAccess',
        'use_for_pages' => 'getUseForPages',
        'columns' => 'getColumns',
        'name' => 'getName',
        'enable_child_table_pages' => 'getEnableChildTablePages',
        'label' => 'getLabel',
        'allow_child_tables' => 'getAllowChildTables'
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
        $this->container['dynamic_meta_tags'] = isset($data['dynamic_meta_tags']) ? $data['dynamic_meta_tags'] : null;
        $this->container['allow_public_api_access'] = isset($data['allow_public_api_access']) ? $data['allow_public_api_access'] : null;
        $this->container['use_for_pages'] = isset($data['use_for_pages']) ? $data['use_for_pages'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enable_child_table_pages'] = isset($data['enable_child_table_pages']) ? $data['enable_child_table_pages'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['allow_child_tables'] = isset($data['allow_child_tables']) ? $data['allow_child_tables'] : null;
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
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
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
     * Gets dynamic_meta_tags
     *
     * @return map[string,int]|null
     */
    public function getDynamicMetaTags()
    {
        return $this->container['dynamic_meta_tags'];
    }

    /**
     * Sets dynamic_meta_tags
     *
     * @param map[string,int]|null $dynamic_meta_tags Specifies the key value pairs of the metadata fields with the associated column ids  input
     *
     * @return $this
     */
    public function setDynamicMetaTags($dynamic_meta_tags)
    {
        $this->container['dynamic_meta_tags'] = $dynamic_meta_tags;

        return $this;
    }

    /**
     * Gets allow_public_api_access
     *
     * @return bool|null
     */
    public function getAllowPublicApiAccess()
    {
        return $this->container['allow_public_api_access'];
    }

    /**
     * Sets allow_public_api_access
     *
     * @param bool|null $allow_public_api_access Specifies whether the table can be read by public without authorization input
     *
     * @return $this
     */
    public function setAllowPublicApiAccess($allow_public_api_access)
    {
        $this->container['allow_public_api_access'] = $allow_public_api_access;

        return $this;
    }

    /**
     * Gets use_for_pages
     *
     * @return bool|null
     */
    public function getUseForPages()
    {
        return $this->container['use_for_pages'];
    }

    /**
     * Sets use_for_pages
     *
     * @param bool|null $use_for_pages Specifies whether the table can be used for creation of dynamic pages input
     *
     * @return $this
     */
    public function setUseForPages($use_for_pages)
    {
        $this->container['use_for_pages'] = $use_for_pages;

        return $this;
    }

    /**
     * Gets columns
     *
     * @return \HubSpot\Client\Cms\Hubdb\Model\ColumnInput[]|null
     */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
     * Sets columns
     *
     * @param \HubSpot\Client\Cms\Hubdb\Model\ColumnInput[]|null $columns List of columns in the table input
     *
     * @return $this
     */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;

        return $this;
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
     * @param string $name Name of the table input
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets enable_child_table_pages
     *
     * @return bool|null
     */
    public function getEnableChildTablePages()
    {
        return $this->container['enable_child_table_pages'];
    }

    /**
     * Sets enable_child_table_pages
     *
     * @param bool|null $enable_child_table_pages Specifies creation of multi-level dynamic pages using child tables input
     *
     * @return $this
     */
    public function setEnableChildTablePages($enable_child_table_pages)
    {
        $this->container['enable_child_table_pages'] = $enable_child_table_pages;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Label of the table input
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets allow_child_tables
     *
     * @return bool|null
     */
    public function getAllowChildTables()
    {
        return $this->container['allow_child_tables'];
    }

    /**
     * Sets allow_child_tables
     *
     * @param bool|null $allow_child_tables Specifies whether child tables can be created input
     *
     * @return $this
     */
    public function setAllowChildTables($allow_child_tables)
    {
        $this->container['allow_child_tables'] = $allow_child_tables;

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



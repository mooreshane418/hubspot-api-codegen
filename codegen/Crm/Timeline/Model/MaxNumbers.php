<?php
/**
 * MaxNumbers
 *
 * PHP version 5
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Timeline
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Timeline events
 *
 * This feature allows an app to create and configure custom events that can show up in the timelines of certain CRM object like contacts, companies, or deals. You'll find multiple use cases for this API in the sections below.
 *
 * The version of the OpenAPI document: v3
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
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
 * MaxNumbers Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Timeline
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MaxNumbers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MaxNumbers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'operator' => 'string',
        'value' => 'float',
        'inputs' => 'AnyOfConstantBooleanConstantNumberConstantStringBooleanPropertyVariableStringPropertyVariableNumberPropertyVariableAddNumbersSubtractNumbersMultiplyNumbersDivideNumbersRoundDownNumbersRoundUpNumbersUpperCaseLowerCaseConcatStringsContainsBeginsWithNumberToStringParseNumberFetchExchangeRatePipelineProbabilityMaxNumbersMinNumbersLessThanLessThanOrEqualMoreThanMoreThanOrEqualNumberEqualsStringEqualsNotDateMonthYearNowTimeBetweenPeriodToMonthsAndOrXorIfStringIfNumberIfBooleanIsPresentHasEmailReplyHasPlainTextEmailReplyExtractMostRecentEmailReplyHtmlExtractMostRecentEmailReplyTextExtractMostRecentPlainTextEmailReply[]',
        'property_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'operator' => null,
        'value' => null,
        'inputs' => null,
        'property_name' => null
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
        'operator' => 'operator',
        'value' => 'value',
        'inputs' => 'inputs',
        'property_name' => 'propertyName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operator' => 'setOperator',
        'value' => 'setValue',
        'inputs' => 'setInputs',
        'property_name' => 'setPropertyName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operator' => 'getOperator',
        'value' => 'getValue',
        'inputs' => 'getInputs',
        'property_name' => 'getPropertyName'
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

    const OPERATOR_MAX_NUMBERS = 'MAX_NUMBERS';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperatorAllowableValues()
    {
        return [
            self::OPERATOR_MAX_NUMBERS,
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
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : 'MAX_NUMBERS';
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['property_name'] = isset($data['property_name']) ? $data['property_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        $allowedValues = $this->getOperatorAllowableValues();
        if (!is_null($this->container['operator']) && !in_array($this->container['operator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operator', must be one of '%s'",
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
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator operator
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $allowedValues = $this->getOperatorAllowableValues();
        if (!in_array($operator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operator', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float|null $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets inputs
     *
     * @return AnyOfConstantBooleanConstantNumberConstantStringBooleanPropertyVariableStringPropertyVariableNumberPropertyVariableAddNumbersSubtractNumbersMultiplyNumbersDivideNumbersRoundDownNumbersRoundUpNumbersUpperCaseLowerCaseConcatStringsContainsBeginsWithNumberToStringParseNumberFetchExchangeRatePipelineProbabilityMaxNumbersMinNumbersLessThanLessThanOrEqualMoreThanMoreThanOrEqualNumberEqualsStringEqualsNotDateMonthYearNowTimeBetweenPeriodToMonthsAndOrXorIfStringIfNumberIfBooleanIsPresentHasEmailReplyHasPlainTextEmailReplyExtractMostRecentEmailReplyHtmlExtractMostRecentEmailReplyTextExtractMostRecentPlainTextEmailReply[]|null
     */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
     * Sets inputs
     *
     * @param AnyOfConstantBooleanConstantNumberConstantStringBooleanPropertyVariableStringPropertyVariableNumberPropertyVariableAddNumbersSubtractNumbersMultiplyNumbersDivideNumbersRoundDownNumbersRoundUpNumbersUpperCaseLowerCaseConcatStringsContainsBeginsWithNumberToStringParseNumberFetchExchangeRatePipelineProbabilityMaxNumbersMinNumbersLessThanLessThanOrEqualMoreThanMoreThanOrEqualNumberEqualsStringEqualsNotDateMonthYearNowTimeBetweenPeriodToMonthsAndOrXorIfStringIfNumberIfBooleanIsPresentHasEmailReplyHasPlainTextEmailReplyExtractMostRecentEmailReplyHtmlExtractMostRecentEmailReplyTextExtractMostRecentPlainTextEmailReply[]|null $inputs inputs
     *
     * @return $this
     */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;

        return $this;
    }

    /**
     * Gets property_name
     *
     * @return string|null
     */
    public function getPropertyName()
    {
        return $this->container['property_name'];
    }

    /**
     * Sets property_name
     *
     * @param string|null $property_name property_name
     *
     * @return $this
     */
    public function setPropertyName($property_name)
    {
        $this->container['property_name'] = $property_name;

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



<?php
/**
 * InvoiceUpdateResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Extensions\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting Extension
 *
 * These APIs allow you to interact with HubSpot's Accounting Extension. It allows you to: * Specify the URLs that HubSpot will use when making webhook requests to your external accounting system. * Respond to webhook calls made to your external accounting system by HubSpot
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

namespace HubSpot\Client\Crm\Extensions\Accounting\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Extensions\Accounting\ObjectSerializer;

/**
 * InvoiceUpdateResponse Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Extensions\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvoiceUpdateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceUpdateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'external_invoice_number' => 'string',
        'total_amount_billed' => 'float',
        'balance_due' => 'float',
        'currency_code' => 'string',
        'due_date' => '\DateTime',
        'external_recipient_id' => 'string',
        'received_by_recipient_date' => 'int',
        'external_create_date_time' => 'int',
        'is_voided' => 'bool',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'archived_at' => '\DateTime',
        'archived' => 'bool',
        'external_account_id' => 'string',
        'invoice_status' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'external_invoice_number' => null,
        'total_amount_billed' => null,
        'balance_due' => null,
        'currency_code' => null,
        'due_date' => 'date',
        'external_recipient_id' => null,
        'received_by_recipient_date' => 'int64',
        'external_create_date_time' => 'int64',
        'is_voided' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'archived_at' => 'date-time',
        'archived' => null,
        'external_account_id' => null,
        'invoice_status' => null,
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
        'external_invoice_number' => 'externalInvoiceNumber',
        'total_amount_billed' => 'totalAmountBilled',
        'balance_due' => 'balanceDue',
        'currency_code' => 'currencyCode',
        'due_date' => 'dueDate',
        'external_recipient_id' => 'externalRecipientId',
        'received_by_recipient_date' => 'receivedByRecipientDate',
        'external_create_date_time' => 'externalCreateDateTime',
        'is_voided' => 'isVoided',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'archived_at' => 'archivedAt',
        'archived' => 'archived',
        'external_account_id' => 'externalAccountId',
        'invoice_status' => 'invoiceStatus',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_invoice_number' => 'setExternalInvoiceNumber',
        'total_amount_billed' => 'setTotalAmountBilled',
        'balance_due' => 'setBalanceDue',
        'currency_code' => 'setCurrencyCode',
        'due_date' => 'setDueDate',
        'external_recipient_id' => 'setExternalRecipientId',
        'received_by_recipient_date' => 'setReceivedByRecipientDate',
        'external_create_date_time' => 'setExternalCreateDateTime',
        'is_voided' => 'setIsVoided',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'archived_at' => 'setArchivedAt',
        'archived' => 'setArchived',
        'external_account_id' => 'setExternalAccountId',
        'invoice_status' => 'setInvoiceStatus',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_invoice_number' => 'getExternalInvoiceNumber',
        'total_amount_billed' => 'getTotalAmountBilled',
        'balance_due' => 'getBalanceDue',
        'currency_code' => 'getCurrencyCode',
        'due_date' => 'getDueDate',
        'external_recipient_id' => 'getExternalRecipientId',
        'received_by_recipient_date' => 'getReceivedByRecipientDate',
        'external_create_date_time' => 'getExternalCreateDateTime',
        'is_voided' => 'getIsVoided',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'archived_at' => 'getArchivedAt',
        'archived' => 'getArchived',
        'external_account_id' => 'getExternalAccountId',
        'invoice_status' => 'getInvoiceStatus',
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

    const INVOICE_STATUS_CREATED = 'CREATED';
    const INVOICE_STATUS_SENT = 'SENT';
    const INVOICE_STATUS_PAID = 'PAID';
    const INVOICE_STATUS_CLOSED = 'CLOSED';
    const INVOICE_STATUS_OVERDUE = 'OVERDUE';
    const INVOICE_STATUS_VOIDED = 'VOIDED';
    const INVOICE_STATUS_NONE = 'NONE';
    const INVOICE_STATUS_UNPAID = 'UNPAID';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceStatusAllowableValues()
    {
        return [
            self::INVOICE_STATUS_CREATED,
            self::INVOICE_STATUS_SENT,
            self::INVOICE_STATUS_PAID,
            self::INVOICE_STATUS_CLOSED,
            self::INVOICE_STATUS_OVERDUE,
            self::INVOICE_STATUS_VOIDED,
            self::INVOICE_STATUS_NONE,
            self::INVOICE_STATUS_UNPAID,
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
        $this->container['external_invoice_number'] = isset($data['external_invoice_number']) ? $data['external_invoice_number'] : null;
        $this->container['total_amount_billed'] = isset($data['total_amount_billed']) ? $data['total_amount_billed'] : null;
        $this->container['balance_due'] = isset($data['balance_due']) ? $data['balance_due'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['external_recipient_id'] = isset($data['external_recipient_id']) ? $data['external_recipient_id'] : null;
        $this->container['received_by_recipient_date'] = isset($data['received_by_recipient_date']) ? $data['received_by_recipient_date'] : null;
        $this->container['external_create_date_time'] = isset($data['external_create_date_time']) ? $data['external_create_date_time'] : null;
        $this->container['is_voided'] = isset($data['is_voided']) ? $data['is_voided'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['archived_at'] = isset($data['archived_at']) ? $data['archived_at'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['external_account_id'] = isset($data['external_account_id']) ? $data['external_account_id'] : null;
        $this->container['invoice_status'] = isset($data['invoice_status']) ? $data['invoice_status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['total_amount_billed'] === null) {
            $invalidProperties[] = "'total_amount_billed' can't be null";
        }
        if ($this->container['balance_due'] === null) {
            $invalidProperties[] = "'balance_due' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['due_date'] === null) {
            $invalidProperties[] = "'due_date' can't be null";
        }
        if ($this->container['external_recipient_id'] === null) {
            $invalidProperties[] = "'external_recipient_id' can't be null";
        }
        if ($this->container['is_voided'] === null) {
            $invalidProperties[] = "'is_voided' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['archived'] === null) {
            $invalidProperties[] = "'archived' can't be null";
        }
        if ($this->container['external_account_id'] === null) {
            $invalidProperties[] = "'external_account_id' can't be null";
        }
        if ($this->container['invoice_status'] === null) {
            $invalidProperties[] = "'invoice_status' can't be null";
        }
        $allowedValues = $this->getInvoiceStatusAllowableValues();
        if (!is_null($this->container['invoice_status']) && !in_array($this->container['invoice_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets external_invoice_number
     *
     * @return string|null
     */
    public function getExternalInvoiceNumber()
    {
        return $this->container['external_invoice_number'];
    }

    /**
     * Sets external_invoice_number
     *
     * @param string|null $external_invoice_number external_invoice_number
     *
     * @return $this
     */
    public function setExternalInvoiceNumber($external_invoice_number)
    {
        $this->container['external_invoice_number'] = $external_invoice_number;

        return $this;
    }

    /**
     * Gets total_amount_billed
     *
     * @return float
     */
    public function getTotalAmountBilled()
    {
        return $this->container['total_amount_billed'];
    }

    /**
     * Sets total_amount_billed
     *
     * @param float $total_amount_billed total_amount_billed
     *
     * @return $this
     */
    public function setTotalAmountBilled($total_amount_billed)
    {
        $this->container['total_amount_billed'] = $total_amount_billed;

        return $this;
    }

    /**
     * Gets balance_due
     *
     * @return float
     */
    public function getBalanceDue()
    {
        return $this->container['balance_due'];
    }

    /**
     * Sets balance_due
     *
     * @param float $balance_due balance_due
     *
     * @return $this
     */
    public function setBalanceDue($balance_due)
    {
        $this->container['balance_due'] = $balance_due;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets external_recipient_id
     *
     * @return string
     */
    public function getExternalRecipientId()
    {
        return $this->container['external_recipient_id'];
    }

    /**
     * Sets external_recipient_id
     *
     * @param string $external_recipient_id external_recipient_id
     *
     * @return $this
     */
    public function setExternalRecipientId($external_recipient_id)
    {
        $this->container['external_recipient_id'] = $external_recipient_id;

        return $this;
    }

    /**
     * Gets received_by_recipient_date
     *
     * @return int|null
     */
    public function getReceivedByRecipientDate()
    {
        return $this->container['received_by_recipient_date'];
    }

    /**
     * Sets received_by_recipient_date
     *
     * @param int|null $received_by_recipient_date received_by_recipient_date
     *
     * @return $this
     */
    public function setReceivedByRecipientDate($received_by_recipient_date)
    {
        $this->container['received_by_recipient_date'] = $received_by_recipient_date;

        return $this;
    }

    /**
     * Gets external_create_date_time
     *
     * @return int|null
     */
    public function getExternalCreateDateTime()
    {
        return $this->container['external_create_date_time'];
    }

    /**
     * Sets external_create_date_time
     *
     * @param int|null $external_create_date_time external_create_date_time
     *
     * @return $this
     */
    public function setExternalCreateDateTime($external_create_date_time)
    {
        $this->container['external_create_date_time'] = $external_create_date_time;

        return $this;
    }

    /**
     * Gets is_voided
     *
     * @return bool
     */
    public function getIsVoided()
    {
        return $this->container['is_voided'];
    }

    /**
     * Sets is_voided
     *
     * @param bool $is_voided is_voided
     *
     * @return $this
     */
    public function setIsVoided($is_voided)
    {
        $this->container['is_voided'] = $is_voided;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets archived_at
     *
     * @return \DateTime|null
     */
    public function getArchivedAt()
    {
        return $this->container['archived_at'];
    }

    /**
     * Sets archived_at
     *
     * @param \DateTime|null $archived_at archived_at
     *
     * @return $this
     */
    public function setArchivedAt($archived_at)
    {
        $this->container['archived_at'] = $archived_at;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool $archived archived
     *
     * @return $this
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets external_account_id
     *
     * @return string
     */
    public function getExternalAccountId()
    {
        return $this->container['external_account_id'];
    }

    /**
     * Sets external_account_id
     *
     * @param string $external_account_id external_account_id
     *
     * @return $this
     */
    public function setExternalAccountId($external_account_id)
    {
        $this->container['external_account_id'] = $external_account_id;

        return $this;
    }

    /**
     * Gets invoice_status
     *
     * @return string
     */
    public function getInvoiceStatus()
    {
        return $this->container['invoice_status'];
    }

    /**
     * Sets invoice_status
     *
     * @param string $invoice_status invoice_status
     *
     * @return $this
     */
    public function setInvoiceStatus($invoice_status)
    {
        $allowedValues = $this->getInvoiceStatusAllowableValues();
        if (!in_array($invoice_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_status'] = $invoice_status;

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
     * @param string $id id
     *
     * @return $this
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



<?php
/**
 * PaymentPaidCreditCard
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FlowAccount Open API
 *
 * # Introduction  **Servers Production**    <site>Site:</site> https://www.flowaccount.com    <site>Api url:</site> https://openapi.flowaccount.com/v1    **Beta test**   <site>Site:</site> http://sandbox-new.flowaccount.com/    <site>Api url:</site> https://openapi.flowaccount.com/test    **PostMan Collection**   <site>Link:</site> https://www.getpostman.com/collections/01e7c68d7093e2092a64
 *
 * The version of the OpenAPI document: 2-oas3
 * Contact: developer_support@flowaccount.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PaymentPaidCreditCard Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentPaidCreditCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'payment_structure_type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentPaidCreditCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_structure_type' => 'string',
        'document_id' => 'int',
        'payment_method' => 'int',
        'payment_date' => '\DateTime',
        'collected' => 'float',
        'withheld_percentage' => 'int',
        'withheld_amount' => 'float',
        'credit_card_bank_account_id' => 'int',
        'payment_remarks' => 'string',
        'remaining_collected_type' => 'int',
        'remaining_collected' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payment_structure_type' => null,
        'document_id' => 'int64',
        'payment_method' => 'int64',
        'payment_date' => 'date',
        'collected' => 'decimal',
        'withheld_percentage' => 'int64',
        'withheld_amount' => 'decimal',
        'credit_card_bank_account_id' => 'int64',
        'payment_remarks' => null,
        'remaining_collected_type' => 'int64',
        'remaining_collected' => 'decimal'
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
        'payment_structure_type' => 'paymentStructureType',
        'document_id' => 'documentId',
        'payment_method' => 'paymentMethod',
        'payment_date' => 'paymentDate',
        'collected' => 'collected',
        'withheld_percentage' => 'withheldPercentage',
        'withheld_amount' => 'withheldAmount',
        'credit_card_bank_account_id' => 'creditCardBankAccountId',
        'payment_remarks' => 'paymentRemarks',
        'remaining_collected_type' => 'remainingCollectedType',
        'remaining_collected' => 'remainingCollected'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_structure_type' => 'setPaymentStructureType',
        'document_id' => 'setDocumentId',
        'payment_method' => 'setPaymentMethod',
        'payment_date' => 'setPaymentDate',
        'collected' => 'setCollected',
        'withheld_percentage' => 'setWithheldPercentage',
        'withheld_amount' => 'setWithheldAmount',
        'credit_card_bank_account_id' => 'setCreditCardBankAccountId',
        'payment_remarks' => 'setPaymentRemarks',
        'remaining_collected_type' => 'setRemainingCollectedType',
        'remaining_collected' => 'setRemainingCollected'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_structure_type' => 'getPaymentStructureType',
        'document_id' => 'getDocumentId',
        'payment_method' => 'getPaymentMethod',
        'payment_date' => 'getPaymentDate',
        'collected' => 'getCollected',
        'withheld_percentage' => 'getWithheldPercentage',
        'withheld_amount' => 'getWithheldAmount',
        'credit_card_bank_account_id' => 'getCreditCardBankAccountId',
        'payment_remarks' => 'getPaymentRemarks',
        'remaining_collected_type' => 'getRemainingCollectedType',
        'remaining_collected' => 'getRemainingCollected'
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
        $this->container['payment_structure_type'] = isset($data['payment_structure_type']) ? $data['payment_structure_type'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : 1;
        $this->container['payment_date'] = isset($data['payment_date']) ? $data['payment_date'] : null;
        $this->container['collected'] = isset($data['collected']) ? $data['collected'] : 0;
        $this->container['withheld_percentage'] = isset($data['withheld_percentage']) ? $data['withheld_percentage'] : 0;
        $this->container['withheld_amount'] = isset($data['withheld_amount']) ? $data['withheld_amount'] : 0;
        $this->container['credit_card_bank_account_id'] = isset($data['credit_card_bank_account_id']) ? $data['credit_card_bank_account_id'] : 0;
        $this->container['payment_remarks'] = isset($data['payment_remarks']) ? $data['payment_remarks'] : null;
        $this->container['remaining_collected_type'] = isset($data['remaining_collected_type']) ? $data['remaining_collected_type'] : 0;
        $this->container['remaining_collected'] = isset($data['remaining_collected']) ? $data['remaining_collected'] : 0;

        // Initialize discriminator property with the model name.
        $this->container['payment_structure_type'] = static::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['payment_structure_type'] === null) {
            $invalidProperties[] = "'payment_structure_type' can't be null";
        }
        if ($this->container['document_id'] === null) {
            $invalidProperties[] = "'document_id' can't be null";
        }
        if ($this->container['payment_method'] === null) {
            $invalidProperties[] = "'payment_method' can't be null";
        }
        if ($this->container['payment_date'] === null) {
            $invalidProperties[] = "'payment_date' can't be null";
        }
        if ($this->container['collected'] === null) {
            $invalidProperties[] = "'collected' can't be null";
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
     * Gets payment_structure_type
     *
     * @return string
     */
    public function getPaymentStructureType()
    {
        return $this->container['payment_structure_type'];
    }

    /**
     * Sets payment_structure_type
     *
     * @param string $payment_structure_type ชำระเงิน ด้วยบัตรเครดิต
     *
     * @return $this
     */
    public function setPaymentStructureType($payment_structure_type)
    {
        $this->container['payment_structure_type'] = $payment_structure_type;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return int
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param int $document_id id เอกสาร
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return int
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param int $payment_method ประเภทการชำระเงิน <br> 7 = บัตรเครดิต
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_date
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date
     *
     * @param \DateTime $payment_date วันที่รับชำระเงิน / วันที่ชำระเงิน รูปแบบ yyyy-MM-dd <br> <ex>Example: 2020-01-01</ex>
     *
     * @return $this
     */
    public function setPaymentDate($payment_date)
    {
        $this->container['payment_date'] = $payment_date;

        return $this;
    }

    /**
     * Gets collected
     *
     * @return float
     */
    public function getCollected()
    {
        return $this->container['collected'];
    }

    /**
     * Sets collected
     *
     * @param float $collected จำนวนเงินยอดจ่ายสุทธิ <br> <ex> Example : 100.00 </ex>
     *
     * @return $this
     */
    public function setCollected($collected)
    {
        $this->container['collected'] = $collected;

        return $this;
    }

    /**
     * Gets withheld_percentage
     *
     * @return int|null
     */
    public function getWithheldPercentage()
    {
        return $this->container['withheld_percentage'];
    }

    /**
     * Sets withheld_percentage
     *
     * @param int|null $withheld_percentage เปอร์เซ็น หัก ณ ที่จ่าย <br> 0.5 = 0.5% <br> 0.75 = 0.75% <br> 1 = 1% <br> 1.5 = 1.5% <br> 2 = 2% <br> 3 = 3% <br> 5 = 5% <br> 10 = 10% <br> 15 = 15% <br> -1 = จำนวนเงิน <red>(สำหรับเอกสารที่ใช้ภาษีแยกตามรายการสินค้า ต้องใช้เป็นจำนวนเงิน)</red>
     *
     * @return $this
     */
    public function setWithheldPercentage($withheld_percentage)
    {
        $this->container['withheld_percentage'] = $withheld_percentage;

        return $this;
    }

    /**
     * Gets withheld_amount
     *
     * @return float|null
     */
    public function getWithheldAmount()
    {
        return $this->container['withheld_amount'];
    }

    /**
     * Sets withheld_amount
     *
     * @param float|null $withheld_amount จำนวน ยอดหัก ณ ที่จ่าย <br> <ex> Example : 100.00 </ex>
     *
     * @return $this
     */
    public function setWithheldAmount($withheld_amount)
    {
        $this->container['withheld_amount'] = $withheld_amount;

        return $this;
    }

    /**
     * Gets credit_card_bank_account_id
     *
     * @return int|null
     */
    public function getCreditCardBankAccountId()
    {
        return $this->container['credit_card_bank_account_id'];
    }

    /**
     * Sets credit_card_bank_account_id
     *
     * @param int|null $credit_card_bank_account_id ธนาคารที่ชำระด้วยบัตรเครดิต <br> 1 = ธนาคารกรุงเทพ <br> 2 = ธนาคารกสิกรไทย <br> 3 = ธนาคารกรุงไทย <br> 4 = ธนาคารทหารไทย <br> 5 = ธนาคารไทยพาณิชย์ <br> 6 = ธนาคารสแตนดาร์ดชาร์เตอร์ด <br> 7 = ธนาคารซีไอเอ็มบี ไทย <br> 8 = ธนาคารยูโอบี <br> 10 = ธนาคารกรุงศรีอยุธยา <br> 11 = ธนาคารออมสิน <br> 12 = ธนาคารธนชาต <br> 13 = ธนาคารแลนด์ แอนด์ เฮ้าส์ <br> 14 = ธนาคารเกียรตินาคิน <br> 15 = ธนาคารซิตี้แบงก์ <br> 16 = ธนาคารทิสโก้ <br> 53 = ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร <br> 54 = ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย <br> 55 = ธนาคารอาคารสงเคราะห์ <br> 56 = ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย <br> 57 = ธนาคารอิสลามแห่งประเทศไทย <br> 58 = ธนาคารแห่งประเทศจีน (ไทย) <br> 59 = ธนาคารไอซีบีซี (ไทย) <br> 60 = ธนาคารเมกะ สากลพาณิชย์ <br> 61 = ธนาคารซูมิโตโม มิตซุย แบงกิ้ง คอร์ปอเรชั่น <br> 62 = ธนาคารมิซูโฮ จำกัด (กรุงเทพฯ) <br> 63 = ธนาคารฮ่องกงและเซี่ยงไฮ้แบงกิ้งคอร์ปอเรชั่น <br> 64 = ธนาคารไทยเครดิต เพื่อรายย่อย
     *
     * @return $this
     */
    public function setCreditCardBankAccountId($credit_card_bank_account_id)
    {
        $this->container['credit_card_bank_account_id'] = $credit_card_bank_account_id;

        return $this;
    }

    /**
     * Gets payment_remarks
     *
     * @return string|null
     */
    public function getPaymentRemarks()
    {
        return $this->container['payment_remarks'];
    }

    /**
     * Sets payment_remarks
     *
     * @param string|null $payment_remarks หมายเหตุ การรับชำระเงิน หรือ ชำระเงิน
     *
     * @return $this
     */
    public function setPaymentRemarks($payment_remarks)
    {
        $this->container['payment_remarks'] = $payment_remarks;

        return $this;
    }

    /**
     * Gets remaining_collected_type
     *
     * @return int|null
     */
    public function getRemainingCollectedType()
    {
        return $this->container['remaining_collected_type'];
    }

    /**
     * Sets remaining_collected_type
     *
     * @param int|null $remaining_collected_type สาเหตุเงินขาด เงินเกิน <br> 51 = เงินขาดหรือเงินกิน <br> 55 = ค่าธรรมเนียมธนาคาร
     *
     * @return $this
     */
    public function setRemainingCollectedType($remaining_collected_type)
    {
        $this->container['remaining_collected_type'] = $remaining_collected_type;

        return $this;
    }

    /**
     * Gets remaining_collected
     *
     * @return float|null
     */
    public function getRemainingCollected()
    {
        return $this->container['remaining_collected'];
    }

    /**
     * Sets remaining_collected
     *
     * @param float|null $remaining_collected จำนวน ยอดเงินขาด หรือ เงินเกิน <br> <ex> Example : 100.00 </ex>
     *
     * @return $this
     */
    public function setRemainingCollected($remaining_collected)
    {
        $this->container['remaining_collected'] = $remaining_collected;

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



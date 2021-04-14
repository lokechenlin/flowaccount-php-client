<?php
/**
 * ExpenseInlineProductItem
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
 * ExpenseInlineProductItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExpenseInlineProductItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpenseInlineProductItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'system_code' => 'int',
        'category_id' => 'int',
        'description' => 'string',
        'name_local' => 'string',
        'name_foreign' => 'string',
        'credit_category' => 'int',
        'credit_id' => 'int',
        'credit_code' => 'string',
        'credit_name_local' => 'string',
        'credit_name_foreign' => 'string',
        'debit_category' => 'int',
        'debit_id' => 'int',
        'debit_code' => 'string',
        'debit_name_local' => 'string',
        'debit_name_foreign' => 'string',
        'quantity' => 'float',
        'unit_name' => 'string',
        'price_per_unit' => 'float',
        'discount_amount' => 'int',
        'vat_rate' => 'int',
        'total' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'system_code' => null,
        'category_id' => null,
        'description' => null,
        'name_local' => null,
        'name_foreign' => null,
        'credit_category' => null,
        'credit_id' => null,
        'credit_code' => null,
        'credit_name_local' => null,
        'credit_name_foreign' => null,
        'debit_category' => null,
        'debit_id' => null,
        'debit_code' => null,
        'debit_name_local' => null,
        'debit_name_foreign' => null,
        'quantity' => 'decimal',
        'unit_name' => null,
        'price_per_unit' => 'decimal',
        'discount_amount' => 'decimal',
        'vat_rate' => null,
        'total' => 'decimal'
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
        'system_code' => 'systemCode',
        'category_id' => 'categoryId',
        'description' => 'description',
        'name_local' => 'nameLocal',
        'name_foreign' => 'nameForeign',
        'credit_category' => 'creditCategory',
        'credit_id' => 'creditId',
        'credit_code' => 'creditCode',
        'credit_name_local' => 'creditNameLocal',
        'credit_name_foreign' => 'creditNameForeign',
        'debit_category' => 'debitCategory',
        'debit_id' => 'debitId',
        'debit_code' => 'debitCode',
        'debit_name_local' => 'debitNameLocal',
        'debit_name_foreign' => 'debitNameForeign',
        'quantity' => 'quantity',
        'unit_name' => 'unitName',
        'price_per_unit' => 'pricePerUnit',
        'discount_amount' => 'discountAmount',
        'vat_rate' => 'vatRate',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'system_code' => 'setSystemCode',
        'category_id' => 'setCategoryId',
        'description' => 'setDescription',
        'name_local' => 'setNameLocal',
        'name_foreign' => 'setNameForeign',
        'credit_category' => 'setCreditCategory',
        'credit_id' => 'setCreditId',
        'credit_code' => 'setCreditCode',
        'credit_name_local' => 'setCreditNameLocal',
        'credit_name_foreign' => 'setCreditNameForeign',
        'debit_category' => 'setDebitCategory',
        'debit_id' => 'setDebitId',
        'debit_code' => 'setDebitCode',
        'debit_name_local' => 'setDebitNameLocal',
        'debit_name_foreign' => 'setDebitNameForeign',
        'quantity' => 'setQuantity',
        'unit_name' => 'setUnitName',
        'price_per_unit' => 'setPricePerUnit',
        'discount_amount' => 'setDiscountAmount',
        'vat_rate' => 'setVatRate',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'system_code' => 'getSystemCode',
        'category_id' => 'getCategoryId',
        'description' => 'getDescription',
        'name_local' => 'getNameLocal',
        'name_foreign' => 'getNameForeign',
        'credit_category' => 'getCreditCategory',
        'credit_id' => 'getCreditId',
        'credit_code' => 'getCreditCode',
        'credit_name_local' => 'getCreditNameLocal',
        'credit_name_foreign' => 'getCreditNameForeign',
        'debit_category' => 'getDebitCategory',
        'debit_id' => 'getDebitId',
        'debit_code' => 'getDebitCode',
        'debit_name_local' => 'getDebitNameLocal',
        'debit_name_foreign' => 'getDebitNameForeign',
        'quantity' => 'getQuantity',
        'unit_name' => 'getUnitName',
        'price_per_unit' => 'getPricePerUnit',
        'discount_amount' => 'getDiscountAmount',
        'vat_rate' => 'getVatRate',
        'total' => 'getTotal'
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
        $this->container['system_code'] = isset($data['system_code']) ? $data['system_code'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name_local'] = isset($data['name_local']) ? $data['name_local'] : null;
        $this->container['name_foreign'] = isset($data['name_foreign']) ? $data['name_foreign'] : null;
        $this->container['credit_category'] = isset($data['credit_category']) ? $data['credit_category'] : null;
        $this->container['credit_id'] = isset($data['credit_id']) ? $data['credit_id'] : null;
        $this->container['credit_code'] = isset($data['credit_code']) ? $data['credit_code'] : null;
        $this->container['credit_name_local'] = isset($data['credit_name_local']) ? $data['credit_name_local'] : null;
        $this->container['credit_name_foreign'] = isset($data['credit_name_foreign']) ? $data['credit_name_foreign'] : null;
        $this->container['debit_category'] = isset($data['debit_category']) ? $data['debit_category'] : null;
        $this->container['debit_id'] = isset($data['debit_id']) ? $data['debit_id'] : null;
        $this->container['debit_code'] = isset($data['debit_code']) ? $data['debit_code'] : null;
        $this->container['debit_name_local'] = isset($data['debit_name_local']) ? $data['debit_name_local'] : null;
        $this->container['debit_name_foreign'] = isset($data['debit_name_foreign']) ? $data['debit_name_foreign'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit_name'] = isset($data['unit_name']) ? $data['unit_name'] : null;
        $this->container['price_per_unit'] = isset($data['price_per_unit']) ? $data['price_per_unit'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : 0;
        $this->container['vat_rate'] = isset($data['vat_rate']) ? $data['vat_rate'] : 7;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['system_code'] === null) {
            $invalidProperties[] = "'system_code' can't be null";
        }
        if ($this->container['category_id'] === null) {
            $invalidProperties[] = "'category_id' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['name_local'] === null) {
            $invalidProperties[] = "'name_local' can't be null";
        }
        if ($this->container['name_foreign'] === null) {
            $invalidProperties[] = "'name_foreign' can't be null";
        }
        if ($this->container['credit_category'] === null) {
            $invalidProperties[] = "'credit_category' can't be null";
        }
        if ($this->container['credit_id'] === null) {
            $invalidProperties[] = "'credit_id' can't be null";
        }
        if ($this->container['credit_code'] === null) {
            $invalidProperties[] = "'credit_code' can't be null";
        }
        if ($this->container['credit_name_local'] === null) {
            $invalidProperties[] = "'credit_name_local' can't be null";
        }
        if ($this->container['credit_name_foreign'] === null) {
            $invalidProperties[] = "'credit_name_foreign' can't be null";
        }
        if ($this->container['debit_category'] === null) {
            $invalidProperties[] = "'debit_category' can't be null";
        }
        if ($this->container['debit_id'] === null) {
            $invalidProperties[] = "'debit_id' can't be null";
        }
        if ($this->container['debit_code'] === null) {
            $invalidProperties[] = "'debit_code' can't be null";
        }
        if ($this->container['debit_name_local'] === null) {
            $invalidProperties[] = "'debit_name_local' can't be null";
        }
        if ($this->container['debit_name_foreign'] === null) {
            $invalidProperties[] = "'debit_name_foreign' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (!is_null($this->container['unit_name']) && (mb_strlen($this->container['unit_name']) > 7)) {
            $invalidProperties[] = "invalid value for 'unit_name', the character length must be smaller than or equal to 7.";
        }

        if ($this->container['price_per_unit'] === null) {
            $invalidProperties[] = "'price_per_unit' can't be null";
        }
        if ($this->container['discount_amount'] === null) {
            $invalidProperties[] = "'discount_amount' can't be null";
        }
        if ($this->container['vat_rate'] === null) {
            $invalidProperties[] = "'vat_rate' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
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
     * Gets system_code
     *
     * @return int
     */
    public function getSystemCode()
    {
        return $this->container['system_code'];
    }

    /**
     * Sets system_code
     *
     * @param int $system_code เลขที่ system code หมวดหมู่ค่าใช้จ่าย (เลือกใช้ หมวดหมู่ค่าใช้จ่ายสำหรับธุรกิจ)
     *
     * @return $this
     */
    public function setSystemCode($system_code)
    {
        $this->container['system_code'] = $system_code;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int $category_id เลขที่ id หมวดหมู่ค่าใช้จ่าย (เลือกใช้ หมวดหมู่ค่าใช้จ่ายสำหรับธุรกิจ) <br> <ex>Example: 40238</ex>
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description รายละเอียดค่าใช้จ่าย
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets name_local
     *
     * @return string
     */
    public function getNameLocal()
    {
        return $this->container['name_local'];
    }

    /**
     * Sets name_local
     *
     * @param string $name_local ชื่อหมวดหมู่ค่าใช้จ่าย <br> <ex>Example: การตลาดและโฆษณา</ex>
     *
     * @return $this
     */
    public function setNameLocal($name_local)
    {
        $this->container['name_local'] = $name_local;

        return $this;
    }

    /**
     * Gets name_foreign
     *
     * @return string
     */
    public function getNameForeign()
    {
        return $this->container['name_foreign'];
    }

    /**
     * Sets name_foreign
     *
     * @param string $name_foreign ชื่อหมวดหมู่ค่าใช้จ่าย (ภาษาอังกฤษ) <br> <ex>Example: Marketing & Advertising</ex>
     *
     * @return $this
     */
    public function setNameForeign($name_foreign)
    {
        $this->container['name_foreign'] = $name_foreign;

        return $this;
    }

    /**
     * Gets credit_category
     *
     * @return int
     */
    public function getCreditCategory()
    {
        return $this->container['credit_category'];
    }

    /**
     * Sets credit_category
     *
     * @param int $credit_category เลขหมวดหมู่ ฝั่งเครดิต ของ หมวดหมู่ค่าใช้จ่าย <br> <ex>Example: 2</ex>
     *
     * @return $this
     */
    public function setCreditCategory($credit_category)
    {
        $this->container['credit_category'] = $credit_category;

        return $this;
    }

    /**
     * Gets credit_id
     *
     * @return int
     */
    public function getCreditId()
    {
        return $this->container['credit_id'];
    }

    /**
     * Sets credit_id
     *
     * @param int $credit_id เลข id หมวดหมู่ค่าใช้จ่ายทางบัญชี ฝั่งเครดิิต <br> <ex>Example: 1081994</ex>
     *
     * @return $this
     */
    public function setCreditId($credit_id)
    {
        $this->container['credit_id'] = $credit_id;

        return $this;
    }

    /**
     * Gets credit_code
     *
     * @return string
     */
    public function getCreditCode()
    {
        return $this->container['credit_code'];
    }

    /**
     * Sets credit_code
     *
     * @param string $credit_code เลขที่หมวดหมู่ค่าใช้จ่ายทางบัญชี ฝั่งเครดิต <br> <ex>Example: 21399</ex>
     *
     * @return $this
     */
    public function setCreditCode($credit_code)
    {
        $this->container['credit_code'] = $credit_code;

        return $this;
    }

    /**
     * Gets credit_name_local
     *
     * @return string
     */
    public function getCreditNameLocal()
    {
        return $this->container['credit_name_local'];
    }

    /**
     * Sets credit_name_local
     *
     * @param string $credit_name_local ชื่อหมวดหมู่ค่าใช้จ่ายทางบัญชี ฝั่งเครดิต <br> <ex>Example: 21399 / เจ้าหนี้อื่นๆ</ex>
     *
     * @return $this
     */
    public function setCreditNameLocal($credit_name_local)
    {
        $this->container['credit_name_local'] = $credit_name_local;

        return $this;
    }

    /**
     * Gets credit_name_foreign
     *
     * @return string
     */
    public function getCreditNameForeign()
    {
        return $this->container['credit_name_foreign'];
    }

    /**
     * Sets credit_name_foreign
     *
     * @param string $credit_name_foreign ชื่อหมวดหมู่ค่าใช้จ่ายทางบัญชี ฝั่งเครดิต (ภาษาอังกฤษ) <br> <ex>Example: 21399 / Other Payables</ex>
     *
     * @return $this
     */
    public function setCreditNameForeign($credit_name_foreign)
    {
        $this->container['credit_name_foreign'] = $credit_name_foreign;

        return $this;
    }

    /**
     * Gets debit_category
     *
     * @return int
     */
    public function getDebitCategory()
    {
        return $this->container['debit_category'];
    }

    /**
     * Sets debit_category
     *
     * @param int $debit_category เลขหมวดหมู่ ฝั่งเดบิต ของ หมวดหมู่ค่าใช้จ่าย
     *
     * @return $this
     */
    public function setDebitCategory($debit_category)
    {
        $this->container['debit_category'] = $debit_category;

        return $this;
    }

    /**
     * Gets debit_id
     *
     * @return int
     */
    public function getDebitId()
    {
        return $this->container['debit_id'];
    }

    /**
     * Sets debit_id
     *
     * @param int $debit_id เลข id หมวดหมู่ค่าใช้จ่ายทางบัญชี ฝั่งเดบิต <br> <ex>Example: 1082099</ex>
     *
     * @return $this
     */
    public function setDebitId($debit_id)
    {
        $this->container['debit_id'] = $debit_id;

        return $this;
    }

    /**
     * Gets debit_code
     *
     * @return string
     */
    public function getDebitCode()
    {
        return $this->container['debit_code'];
    }

    /**
     * Sets debit_code
     *
     * @param string $debit_code เลขที่หมวดหมู่ค่าใช้จ่ายทางบัญชี ฝั่งเดบิต <br> <ex>Example: 53029</ex>
     *
     * @return $this
     */
    public function setDebitCode($debit_code)
    {
        $this->container['debit_code'] = $debit_code;

        return $this;
    }

    /**
     * Gets debit_name_local
     *
     * @return string
     */
    public function getDebitNameLocal()
    {
        return $this->container['debit_name_local'];
    }

    /**
     * Sets debit_name_local
     *
     * @param string $debit_name_local ชื่อหมวดหมู่ค่าใช้จ่ายทางบัญชี ฝั่งเดบิต <br> <ex>Example: 53029 / ค่าใช้จ่ายด้านโฆษณาและการตลาดอื่นๆ</ex>
     *
     * @return $this
     */
    public function setDebitNameLocal($debit_name_local)
    {
        $this->container['debit_name_local'] = $debit_name_local;

        return $this;
    }

    /**
     * Gets debit_name_foreign
     *
     * @return string
     */
    public function getDebitNameForeign()
    {
        return $this->container['debit_name_foreign'];
    }

    /**
     * Sets debit_name_foreign
     *
     * @param string $debit_name_foreign ชื่อหมวดหมู่ค่าใช้จ่ายทางบัญชี ฝั่งเดบิต (ภาษาอังกฤษ) <br> <ex>Example: 53029 / Other advertising and marketing expenses</ex>
     *
     * @return $this
     */
    public function setDebitNameForeign($debit_name_foreign)
    {
        $this->container['debit_name_foreign'] = $debit_name_foreign;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity จำนวนรายการค่าใช้จ่าย
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_name
     *
     * @return string|null
     */
    public function getUnitName()
    {
        return $this->container['unit_name'];
    }

    /**
     * Sets unit_name
     *
     * @param string|null $unit_name หน่วยรายการค่าใช้จ่าย
     *
     * @return $this
     */
    public function setUnitName($unit_name)
    {
        if (!is_null($unit_name) && (mb_strlen($unit_name) > 7)) {
            throw new \InvalidArgumentException('invalid length for $unit_name when calling ExpenseInlineProductItem., must be smaller than or equal to 7.');
        }

        $this->container['unit_name'] = $unit_name;

        return $this;
    }

    /**
     * Gets price_per_unit
     *
     * @return float
     */
    public function getPricePerUnit()
    {
        return $this->container['price_per_unit'];
    }

    /**
     * Sets price_per_unit
     *
     * @param float $price_per_unit ราคาต่อหน่วยค่าใช้จ่าย
     *
     * @return $this
     */
    public function setPricePerUnit($price_per_unit)
    {
        $this->container['price_per_unit'] = $price_per_unit;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return int
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param int $discount_amount จำนวนส่วนลดรายการค่าใช้จ่าย
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets vat_rate
     *
     * @return int
     */
    public function getVatRate()
    {
        return $this->container['vat_rate'];
    }

    /**
     * Sets vat_rate
     *
     * @param int $vat_rate รูปแบบภาษี <br> 7 = ภาษี 7% <br> 0 = ภาษี 0% <br> -1 = ยกเว้นภาษี
     *
     * @return $this
     */
    public function setVatRate($vat_rate)
    {
        $this->container['vat_rate'] = $vat_rate;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total มูลค่ารวม
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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



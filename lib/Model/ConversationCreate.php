<?php
/**
 * ConversationCreate
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Forsta Atlas API
 *
 * User and Tag management API for Forsta Messaging Platform
 *
 * The version of the OpenAPI document: v1
 * Contact: support@forsta.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
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
 * ConversationCreate Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConversationCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversationCreate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'captcha' => 'string',
        'thread_id' => 'string',
        'distribution' => 'string',
        'expires' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'captcha' => null,
        'thread_id' => null,
        'distribution' => null,
        'expires' => 'date-time'
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
        'captcha' => 'captcha',
        'thread_id' => 'thread_id',
        'distribution' => 'distribution',
        'expires' => 'expires'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'captcha' => 'setCaptcha',
        'thread_id' => 'setThreadId',
        'distribution' => 'setDistribution',
        'expires' => 'setExpires'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'captcha' => 'getCaptcha',
        'thread_id' => 'getThreadId',
        'distribution' => 'getDistribution',
        'expires' => 'getExpires'
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
        $this->container['captcha'] = isset($data['captcha']) ? $data['captcha'] : null;
        $this->container['thread_id'] = isset($data['thread_id']) ? $data['thread_id'] : '4840e228-7ecb-4e11-b8fc-b8109df925ea';
        $this->container['distribution'] = isset($data['distribution']) ? $data['distribution'] : null;
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['captcha']) && (mb_strlen($this->container['captcha']) < 1)) {
            $invalidProperties[] = "invalid value for 'captcha', the character length must be bigger than or equal to 1.";
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
     * Gets captcha
     *
     * @return string|null
     */
    public function getCaptcha()
    {
        return $this->container['captcha'];
    }

    /**
     * Sets captcha
     *
     * @param string|null $captcha ReCaptcha output
     *
     * @return $this
     */
    public function setCaptcha($captcha)
    {

        if (!is_null($captcha) && (mb_strlen($captcha) < 1)) {
            throw new \InvalidArgumentException('invalid length for $captcha when calling ConversationCreate., must be bigger than or equal to 1.');
        }

        $this->container['captcha'] = $captcha;

        return $this;
    }

    /**
     * Gets thread_id
     *
     * @return string|null
     */
    public function getThreadId()
    {
        return $this->container['thread_id'];
    }

    /**
     * Sets thread_id
     *
     * @param string|null $thread_id thread_id
     *
     * @return $this
     */
    public function setThreadId($thread_id)
    {
        $this->container['thread_id'] = $thread_id;

        return $this;
    }

    /**
     * Gets distribution
     *
     * @return string|null
     */
    public function getDistribution()
    {
        return $this->container['distribution'];
    }

    /**
     * Sets distribution
     *
     * @param string|null $distribution distribution
     *
     * @return $this
     */
    public function setDistribution($distribution)
    {
        $this->container['distribution'] = $distribution;

        return $this;
    }

    /**
     * Gets expires
     *
     * @return \DateTime|null
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires
     *
     * @param \DateTime|null $expires expires
     *
     * @return $this
     */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;

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


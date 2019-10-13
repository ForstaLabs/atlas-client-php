<?php
/**
 * Org
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forsta Atlas API
 *
 * User and Tag management API for Forsta Messaging Platform
 *
 * OpenAPI spec version: v1
 * Contact: support@forsta.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Org Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Org implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Org';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'logo' => 'string',
        'name' => 'string',
        'preferences' => 'string',
        'address' => 'string',
        'billing' => 'string',
        'slug' => 'string',
        'slogan' => 'string',
        'website' => 'string',
        'email' => 'string',
        'account_control' => 'string',
        'sending_allowed' => 'bool',
        'ephemeral_user_token' => 'string',
        'banner' => 'string',
        'custom_css' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'logo' => 'uri',
        'name' => null,
        'preferences' => null,
        'address' => null,
        'billing' => null,
        'slug' => null,
        'slogan' => null,
        'website' => 'uri',
        'email' => 'email',
        'account_control' => null,
        'sending_allowed' => null,
        'ephemeral_user_token' => null,
        'banner' => 'uri',
        'custom_css' => null,
        'url' => 'uri'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'logo' => 'logo',
        'name' => 'name',
        'preferences' => 'preferences',
        'address' => 'address',
        'billing' => 'billing',
        'slug' => 'slug',
        'slogan' => 'slogan',
        'website' => 'website',
        'email' => 'email',
        'account_control' => 'account_control',
        'sending_allowed' => 'sending_allowed',
        'ephemeral_user_token' => 'ephemeral_user_token',
        'banner' => 'banner',
        'custom_css' => 'custom_css',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'logo' => 'setLogo',
        'name' => 'setName',
        'preferences' => 'setPreferences',
        'address' => 'setAddress',
        'billing' => 'setBilling',
        'slug' => 'setSlug',
        'slogan' => 'setSlogan',
        'website' => 'setWebsite',
        'email' => 'setEmail',
        'account_control' => 'setAccountControl',
        'sending_allowed' => 'setSendingAllowed',
        'ephemeral_user_token' => 'setEphemeralUserToken',
        'banner' => 'setBanner',
        'custom_css' => 'setCustomCss',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'logo' => 'getLogo',
        'name' => 'getName',
        'preferences' => 'getPreferences',
        'address' => 'getAddress',
        'billing' => 'getBilling',
        'slug' => 'getSlug',
        'slogan' => 'getSlogan',
        'website' => 'getWebsite',
        'email' => 'getEmail',
        'account_control' => 'getAccountControl',
        'sending_allowed' => 'getSendingAllowed',
        'ephemeral_user_token' => 'getEphemeralUserToken',
        'banner' => 'getBanner',
        'custom_css' => 'getCustomCss',
        'url' => 'getUrl'
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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['preferences'] = isset($data['preferences']) ? $data['preferences'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['slogan'] = isset($data['slogan']) ? $data['slogan'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['account_control'] = isset($data['account_control']) ? $data['account_control'] : null;
        $this->container['sending_allowed'] = isset($data['sending_allowed']) ? $data['sending_allowed'] : null;
        $this->container['ephemeral_user_token'] = isset($data['ephemeral_user_token']) ? $data['ephemeral_user_token'] : null;
        $this->container['banner'] = isset($data['banner']) ? $data['banner'] : null;
        $this->container['custom_css'] = isset($data['custom_css']) ? $data['custom_css'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['logo']) && (mb_strlen($this->container['logo']) > 255)) {
            $invalidProperties[] = "invalid value for 'logo', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['slug'] === null) {
            $invalidProperties[] = "'slug' can't be null";
        }
        if ((mb_strlen($this->container['slug']) < 1)) {
            $invalidProperties[] = "invalid value for 'slug', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^(([\\da-z_](\\.[\\da-z_]|[\\da-z_])*)|\\.)$/", $this->container['slug'])) {
            $invalidProperties[] = "invalid value for 'slug', must be conform to the pattern /^(([\\da-z_](\\.[\\da-z_]|[\\da-z_])*)|\\.)$/.";
        }

        if (!is_null($this->container['slogan']) && (mb_strlen($this->container['slogan']) > 255)) {
            $invalidProperties[] = "invalid value for 'slogan', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['website']) && (mb_strlen($this->container['website']) > 512)) {
            $invalidProperties[] = "invalid value for 'website', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 254)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['ephemeral_user_token']) && (mb_strlen($this->container['ephemeral_user_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'ephemeral_user_token', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['banner']) && (mb_strlen($this->container['banner']) > 256)) {
            $invalidProperties[] = "invalid value for 'banner', the character length must be smaller than or equal to 256.";
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
     * Gets logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string $logo Org Logo URL
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        if (!is_null($logo) && (mb_strlen($logo) > 255)) {
            throw new \InvalidArgumentException('invalid length for $logo when calling Org., must be smaller than or equal to 255.');
        }

        $this->container['logo'] = $logo;

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
     * @param string $name Organization name
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Org., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Org., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets preferences
     *
     * @return string
     */
    public function getPreferences()
    {
        return $this->container['preferences'];
    }

    /**
     * Sets preferences
     *
     * @param string $preferences preferences
     *
     * @return $this
     */
    public function setPreferences($preferences)
    {
        $this->container['preferences'] = $preferences;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return string
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param string $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug slug
     *
     * @return $this
     */
    public function setSlug($slug)
    {

        if ((mb_strlen($slug) < 1)) {
            throw new \InvalidArgumentException('invalid length for $slug when calling Org., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^(([\\da-z_](\\.[\\da-z_]|[\\da-z_])*)|\\.)$/", $slug))) {
            throw new \InvalidArgumentException("invalid value for $slug when calling Org., must conform to the pattern /^(([\\da-z_](\\.[\\da-z_]|[\\da-z_])*)|\\.)$/.");
        }

        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets slogan
     *
     * @return string
     */
    public function getSlogan()
    {
        return $this->container['slogan'];
    }

    /**
     * Sets slogan
     *
     * @param string $slogan Organization slogan
     *
     * @return $this
     */
    public function setSlogan($slogan)
    {
        if (!is_null($slogan) && (mb_strlen($slogan) > 255)) {
            throw new \InvalidArgumentException('invalid length for $slogan when calling Org., must be smaller than or equal to 255.');
        }

        $this->container['slogan'] = $slogan;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website Org website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        if (!is_null($website) && (mb_strlen($website) > 512)) {
            throw new \InvalidArgumentException('invalid length for $website when calling Org., must be smaller than or equal to 512.');
        }

        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email your_company@domain.com
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Org., must be smaller than or equal to 254.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets account_control
     *
     * @return string
     */
    public function getAccountControl()
    {
        return $this->container['account_control'];
    }

    /**
     * Sets account_control
     *
     * @param string $account_control account_control
     *
     * @return $this
     */
    public function setAccountControl($account_control)
    {
        $this->container['account_control'] = $account_control;

        return $this;
    }

    /**
     * Gets sending_allowed
     *
     * @return bool
     */
    public function getSendingAllowed()
    {
        return $this->container['sending_allowed'];
    }

    /**
     * Sets sending_allowed
     *
     * @param bool $sending_allowed sending_allowed
     *
     * @return $this
     */
    public function setSendingAllowed($sending_allowed)
    {
        $this->container['sending_allowed'] = $sending_allowed;

        return $this;
    }

    /**
     * Gets ephemeral_user_token
     *
     * @return string
     */
    public function getEphemeralUserToken()
    {
        return $this->container['ephemeral_user_token'];
    }

    /**
     * Sets ephemeral_user_token
     *
     * @param string $ephemeral_user_token Token for creating ephemeral users (/@embed client)
     *
     * @return $this
     */
    public function setEphemeralUserToken($ephemeral_user_token)
    {

        if (!is_null($ephemeral_user_token) && (mb_strlen($ephemeral_user_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $ephemeral_user_token when calling Org., must be bigger than or equal to 1.');
        }

        $this->container['ephemeral_user_token'] = $ephemeral_user_token;

        return $this;
    }

    /**
     * Gets banner
     *
     * @return string
     */
    public function getBanner()
    {
        return $this->container['banner'];
    }

    /**
     * Sets banner
     *
     * @param string $banner URL of banner image for toolbar header
     *
     * @return $this
     */
    public function setBanner($banner)
    {
        if (!is_null($banner) && (mb_strlen($banner) > 256)) {
            throw new \InvalidArgumentException('invalid length for $banner when calling Org., must be smaller than or equal to 256.');
        }

        $this->container['banner'] = $banner;

        return $this;
    }

    /**
     * Gets custom_css
     *
     * @return string
     */
    public function getCustomCss()
    {
        return $this->container['custom_css'];
    }

    /**
     * Sets custom_css
     *
     * @param string $custom_css Org-level css style for messenger
     *
     * @return $this
     */
    public function setCustomCss($custom_css)
    {
        $this->container['custom_css'] = $custom_css;

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
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



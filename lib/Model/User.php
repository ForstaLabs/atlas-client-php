<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'url' => 'string',
        'email' => 'string',
        'user_type' => 'string',
        'is_monitor' => 'bool',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'phone' => 'string',
        'org' => 'string',
        'tag' => 'string',
        'tags' => '\Swagger\Client\Model\AssociatedTags[]',
        'address' => 'string',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'permissions' => 'string',
        'gravatar_hash' => 'string',
        'expire' => '\DateTime',
        'tag_slug' => 'string',
        'password' => 'string',
        'has_password' => 'bool',
        'has_totp' => 'bool',
        'totp_reset' => 'bool',
        'totp_proof' => 'string',
        'new_totp_secret' => 'string',
        'password_proof' => 'string',
        'website' => 'string',
        'avatar_url' => 'string',
        'is_active' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'url' => 'uri',
        'email' => 'email',
        'user_type' => null,
        'is_monitor' => null,
        'first_name' => null,
        'middle_name' => null,
        'last_name' => null,
        'phone' => null,
        'org' => null,
        'tag' => null,
        'tags' => null,
        'address' => null,
        'created' => 'date-time',
        'modified' => 'date-time',
        'permissions' => null,
        'gravatar_hash' => null,
        'expire' => 'date-time',
        'tag_slug' => null,
        'password' => null,
        'has_password' => null,
        'has_totp' => null,
        'totp_reset' => null,
        'totp_proof' => null,
        'new_totp_secret' => null,
        'password_proof' => null,
        'website' => null,
        'avatar_url' => null,
        'is_active' => null
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
        'url' => 'url',
        'email' => 'email',
        'user_type' => 'user_type',
        'is_monitor' => 'is_monitor',
        'first_name' => 'first_name',
        'middle_name' => 'middle_name',
        'last_name' => 'last_name',
        'phone' => 'phone',
        'org' => 'org',
        'tag' => 'tag',
        'tags' => 'tags',
        'address' => 'address',
        'created' => 'created',
        'modified' => 'modified',
        'permissions' => 'permissions',
        'gravatar_hash' => 'gravatar_hash',
        'expire' => 'expire',
        'tag_slug' => 'tag_slug',
        'password' => 'password',
        'has_password' => 'has_password',
        'has_totp' => 'has_totp',
        'totp_reset' => 'totp_reset',
        'totp_proof' => 'totp_proof',
        'new_totp_secret' => 'new_totp_secret',
        'password_proof' => 'password_proof',
        'website' => 'website',
        'avatar_url' => 'avatar_url',
        'is_active' => 'is_active'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'url' => 'setUrl',
        'email' => 'setEmail',
        'user_type' => 'setUserType',
        'is_monitor' => 'setIsMonitor',
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'phone' => 'setPhone',
        'org' => 'setOrg',
        'tag' => 'setTag',
        'tags' => 'setTags',
        'address' => 'setAddress',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'permissions' => 'setPermissions',
        'gravatar_hash' => 'setGravatarHash',
        'expire' => 'setExpire',
        'tag_slug' => 'setTagSlug',
        'password' => 'setPassword',
        'has_password' => 'setHasPassword',
        'has_totp' => 'setHasTotp',
        'totp_reset' => 'setTotpReset',
        'totp_proof' => 'setTotpProof',
        'new_totp_secret' => 'setNewTotpSecret',
        'password_proof' => 'setPasswordProof',
        'website' => 'setWebsite',
        'avatar_url' => 'setAvatarUrl',
        'is_active' => 'setIsActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'url' => 'getUrl',
        'email' => 'getEmail',
        'user_type' => 'getUserType',
        'is_monitor' => 'getIsMonitor',
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'phone' => 'getPhone',
        'org' => 'getOrg',
        'tag' => 'getTag',
        'tags' => 'getTags',
        'address' => 'getAddress',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'permissions' => 'getPermissions',
        'gravatar_hash' => 'getGravatarHash',
        'expire' => 'getExpire',
        'tag_slug' => 'getTagSlug',
        'password' => 'getPassword',
        'has_password' => 'getHasPassword',
        'has_totp' => 'getHasTotp',
        'totp_reset' => 'getTotpReset',
        'totp_proof' => 'getTotpProof',
        'new_totp_secret' => 'getNewTotpSecret',
        'password_proof' => 'getPasswordProof',
        'website' => 'getWebsite',
        'avatar_url' => 'getAvatarUrl',
        'is_active' => 'getIsActive'
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

    const USER_TYPE_PERSON = 'PERSON';
    const USER_TYPE_BOT = 'BOT';
    const USER_TYPE_EPHEMERAL = 'EPHEMERAL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUserTypeAllowableValues()
    {
        return [
            self::USER_TYPE_PERSON,
            self::USER_TYPE_BOT,
            self::USER_TYPE_EPHEMERAL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['user_type'] = isset($data['user_type']) ? $data['user_type'] : null;
        $this->container['is_monitor'] = isset($data['is_monitor']) ? $data['is_monitor'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['org'] = isset($data['org']) ? $data['org'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['gravatar_hash'] = isset($data['gravatar_hash']) ? $data['gravatar_hash'] : null;
        $this->container['expire'] = isset($data['expire']) ? $data['expire'] : null;
        $this->container['tag_slug'] = isset($data['tag_slug']) ? $data['tag_slug'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['has_password'] = isset($data['has_password']) ? $data['has_password'] : null;
        $this->container['has_totp'] = isset($data['has_totp']) ? $data['has_totp'] : null;
        $this->container['totp_reset'] = isset($data['totp_reset']) ? $data['totp_reset'] : null;
        $this->container['totp_proof'] = isset($data['totp_proof']) ? $data['totp_proof'] : null;
        $this->container['new_totp_secret'] = isset($data['new_totp_secret']) ? $data['new_totp_secret'] : null;
        $this->container['password_proof'] = isset($data['password_proof']) ? $data['password_proof'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['avatar_url'] = isset($data['avatar_url']) ? $data['avatar_url'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : true;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 254)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 254.";
        }

        $allowedValues = $this->getUserTypeAllowableValues();
        if (!is_null($this->container['user_type']) && !in_array($this->container['user_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'user_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ((mb_strlen($this->container['first_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['first_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['middle_name']) && (mb_strlen($this->container['middle_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'middle_name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['org'] === null) {
            $invalidProperties[] = "'org' can't be null";
        }
        if (!is_null($this->container['tag_slug']) && (mb_strlen($this->container['tag_slug']) < 1)) {
            $invalidProperties[] = "invalid value for 'tag_slug', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 1)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['totp_proof']) && (mb_strlen($this->container['totp_proof']) < 1)) {
            $invalidProperties[] = "invalid value for 'totp_proof', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['password_proof']) && (mb_strlen($this->container['password_proof']) < 1)) {
            $invalidProperties[] = "invalid value for 'password_proof', the character length must be bigger than or equal to 1.";
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
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email when calling User., must be smaller than or equal to 254.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets user_type
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->container['user_type'];
    }

    /**
     * Sets user_type
     *
     * @param string $user_type user_type
     *
     * @return $this
     */
    public function setUserType($user_type)
    {
        $allowedValues = $this->getUserTypeAllowableValues();
        if (!is_null($user_type) && !in_array($user_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'user_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['user_type'] = $user_type;

        return $this;
    }

    /**
     * Gets is_monitor
     *
     * @return bool
     */
    public function getIsMonitor()
    {
        return $this->container['is_monitor'];
    }

    /**
     * Sets is_monitor
     *
     * @param bool $is_monitor is_monitor
     *
     * @return $this
     */
    public function setIsMonitor($is_monitor)
    {
        $this->container['is_monitor'] = $is_monitor;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        if ((mb_strlen($first_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling User., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($first_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling User., must be bigger than or equal to 1.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string $middle_name middle_name
     *
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        if (!is_null($middle_name) && (mb_strlen($middle_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $middle_name when calling User., must be smaller than or equal to 64.');
        }

        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        if (!is_null($last_name) && (mb_strlen($last_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling User., must be smaller than or equal to 64.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets org
     *
     * @return string
     */
    public function getOrg()
    {
        return $this->container['org'];
    }

    /**
     * Sets org
     *
     * @param string $org org
     *
     * @return $this
     */
    public function setOrg($org)
    {
        $this->container['org'] = $org;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string $tag tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Swagger\Client\Model\AssociatedTags[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Swagger\Client\Model\AssociatedTags[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param \DateTime $modified modified
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return string
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param string $permissions permissions
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets gravatar_hash
     *
     * @return string
     */
    public function getGravatarHash()
    {
        return $this->container['gravatar_hash'];
    }

    /**
     * Sets gravatar_hash
     *
     * @param string $gravatar_hash gravatar_hash
     *
     * @return $this
     */
    public function setGravatarHash($gravatar_hash)
    {
        $this->container['gravatar_hash'] = $gravatar_hash;

        return $this;
    }

    /**
     * Gets expire
     *
     * @return \DateTime
     */
    public function getExpire()
    {
        return $this->container['expire'];
    }

    /**
     * Sets expire
     *
     * @param \DateTime $expire expire
     *
     * @return $this
     */
    public function setExpire($expire)
    {
        $this->container['expire'] = $expire;

        return $this;
    }

    /**
     * Gets tag_slug
     *
     * @return string
     */
    public function getTagSlug()
    {
        return $this->container['tag_slug'];
    }

    /**
     * Sets tag_slug
     *
     * @param string $tag_slug tag_slug
     *
     * @return $this
     */
    public function setTagSlug($tag_slug)
    {

        if (!is_null($tag_slug) && (mb_strlen($tag_slug) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tag_slug when calling User., must be bigger than or equal to 1.');
        }

        $this->container['tag_slug'] = $tag_slug;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {

        if (!is_null($password) && (mb_strlen($password) < 1)) {
            throw new \InvalidArgumentException('invalid length for $password when calling User., must be bigger than or equal to 1.');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets has_password
     *
     * @return bool
     */
    public function getHasPassword()
    {
        return $this->container['has_password'];
    }

    /**
     * Sets has_password
     *
     * @param bool $has_password has_password
     *
     * @return $this
     */
    public function setHasPassword($has_password)
    {
        $this->container['has_password'] = $has_password;

        return $this;
    }

    /**
     * Gets has_totp
     *
     * @return bool
     */
    public function getHasTotp()
    {
        return $this->container['has_totp'];
    }

    /**
     * Sets has_totp
     *
     * @param bool $has_totp has_totp
     *
     * @return $this
     */
    public function setHasTotp($has_totp)
    {
        $this->container['has_totp'] = $has_totp;

        return $this;
    }

    /**
     * Gets totp_reset
     *
     * @return bool
     */
    public function getTotpReset()
    {
        return $this->container['totp_reset'];
    }

    /**
     * Sets totp_reset
     *
     * @param bool $totp_reset totp_reset
     *
     * @return $this
     */
    public function setTotpReset($totp_reset)
    {
        $this->container['totp_reset'] = $totp_reset;

        return $this;
    }

    /**
     * Gets totp_proof
     *
     * @return string
     */
    public function getTotpProof()
    {
        return $this->container['totp_proof'];
    }

    /**
     * Sets totp_proof
     *
     * @param string $totp_proof totp_proof
     *
     * @return $this
     */
    public function setTotpProof($totp_proof)
    {

        if (!is_null($totp_proof) && (mb_strlen($totp_proof) < 1)) {
            throw new \InvalidArgumentException('invalid length for $totp_proof when calling User., must be bigger than or equal to 1.');
        }

        $this->container['totp_proof'] = $totp_proof;

        return $this;
    }

    /**
     * Gets new_totp_secret
     *
     * @return string
     */
    public function getNewTotpSecret()
    {
        return $this->container['new_totp_secret'];
    }

    /**
     * Sets new_totp_secret
     *
     * @param string $new_totp_secret new_totp_secret
     *
     * @return $this
     */
    public function setNewTotpSecret($new_totp_secret)
    {
        $this->container['new_totp_secret'] = $new_totp_secret;

        return $this;
    }

    /**
     * Gets password_proof
     *
     * @return string
     */
    public function getPasswordProof()
    {
        return $this->container['password_proof'];
    }

    /**
     * Sets password_proof
     *
     * @param string $password_proof password_proof
     *
     * @return $this
     */
    public function setPasswordProof($password_proof)
    {

        if (!is_null($password_proof) && (mb_strlen($password_proof) < 1)) {
            throw new \InvalidArgumentException('invalid length for $password_proof when calling User., must be bigger than or equal to 1.');
        }

        $this->container['password_proof'] = $password_proof;

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
     * @param string $website website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets avatar_url
     *
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     *
     * @param string $avatar_url avatar_url
     *
     * @return $this
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

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



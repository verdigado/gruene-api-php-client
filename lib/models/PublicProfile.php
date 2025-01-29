<?php
/**
 * PublicProfile
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Verdigado\Gruen eApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Gruene API
 *
 * ## OpenAPI Endpoints <a href=\"/api-json\">OpenAPI Spec in JSON</a><br> <a href=\"/api-yaml\">OpenAPI Spec in YAML</a><br>  ### Offboarding Every service conntected to Grünes Netz needs to remove users when they are removed from `saml.gruene.de`. Connected services need to pull a list of users waiting for removal at least once a week. api.gruene.de needs to be informed whether the user did not exist or was removed. API tokens can be obtained from `technik@verdigado.com`.
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Verdigado\Gruen eApiClient\models;

use \ArrayAccess;
use \Verdigado\Gruen eApiClient\ObjectSerializer;

/**
 * PublicProfile Class Doc Comment
 *
 * @category Class
 * @package  Verdigado\Gruen eApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicProfile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_id' => 'string',
        'personal_id' => 'string',
        'username' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'image' => '\Verdigado\Gruen eApiClient\models\ProfileImage',
        'phone_numbers' => '\Verdigado\Gruen eApiClient\models\PhoneNumberEntry[]',
        'messengers' => '\Verdigado\Gruen eApiClient\models\MessengerEntry[]',
        'social_media' => '\Verdigado\Gruen eApiClient\models\SocialMediaEntry[]',
        'tags' => '\Verdigado\Gruen eApiClient\models\ProfileTag[]',
        'joined_at' => '\DateTime',
        'memberships' => '\Verdigado\Gruen eApiClient\models\DivisionMembership[]',
        'roles' => '\Verdigado\Gruen eApiClient\models\ProfileRole[]',
        'achievements' => 'string[]',
        'email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'user_id' => null,
        'personal_id' => null,
        'username' => null,
        'first_name' => null,
        'last_name' => null,
        'image' => null,
        'phone_numbers' => null,
        'messengers' => null,
        'social_media' => null,
        'tags' => null,
        'joined_at' => 'date-time',
        'memberships' => null,
        'roles' => null,
        'achievements' => null,
        'email' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'user_id' => false,
		'personal_id' => false,
		'username' => false,
		'first_name' => false,
		'last_name' => false,
		'image' => false,
		'phone_numbers' => false,
		'messengers' => false,
		'social_media' => false,
		'tags' => false,
		'joined_at' => false,
		'memberships' => false,
		'roles' => false,
		'achievements' => false,
		'email' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'user_id' => 'userId',
        'personal_id' => 'personalId',
        'username' => 'username',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'image' => 'image',
        'phone_numbers' => 'phoneNumbers',
        'messengers' => 'messengers',
        'social_media' => 'socialMedia',
        'tags' => 'tags',
        'joined_at' => 'joinedAt',
        'memberships' => 'memberships',
        'roles' => 'roles',
        'achievements' => 'achievements',
        'email' => 'email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'personal_id' => 'setPersonalId',
        'username' => 'setUsername',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'image' => 'setImage',
        'phone_numbers' => 'setPhoneNumbers',
        'messengers' => 'setMessengers',
        'social_media' => 'setSocialMedia',
        'tags' => 'setTags',
        'joined_at' => 'setJoinedAt',
        'memberships' => 'setMemberships',
        'roles' => 'setRoles',
        'achievements' => 'setAchievements',
        'email' => 'setEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'personal_id' => 'getPersonalId',
        'username' => 'getUsername',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'image' => 'getImage',
        'phone_numbers' => 'getPhoneNumbers',
        'messengers' => 'getMessengers',
        'social_media' => 'getSocialMedia',
        'tags' => 'getTags',
        'joined_at' => 'getJoinedAt',
        'memberships' => 'getMemberships',
        'roles' => 'getRoles',
        'achievements' => 'getAchievements',
        'email' => 'getEmail'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('personal_id', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('phone_numbers', $data ?? [], null);
        $this->setIfExists('messengers', $data ?? [], null);
        $this->setIfExists('social_media', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('joined_at', $data ?? [], null);
        $this->setIfExists('memberships', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('achievements', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['personal_id'] === null) {
            $invalidProperties[] = "'personal_id' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['phone_numbers'] === null) {
            $invalidProperties[] = "'phone_numbers' can't be null";
        }
        if ($this->container['messengers'] === null) {
            $invalidProperties[] = "'messengers' can't be null";
        }
        if ($this->container['social_media'] === null) {
            $invalidProperties[] = "'social_media' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['roles'] === null) {
            $invalidProperties[] = "'roles' can't be null";
        }
        if ($this->container['achievements'] === null) {
            $invalidProperties[] = "'achievements' can't be null";
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
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id User id (Sherpa user id)
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets personal_id
     *
     * @return string
     */
    public function getPersonalId()
    {
        return $this->container['personal_id'];
    }

    /**
     * Sets personal_id
     *
     * @param string $personal_id personal identification number
     *
     * @return self
     */
    public function setPersonalId($personal_id)
    {
        if (is_null($personal_id)) {
            throw new \InvalidArgumentException('non-nullable personal_id cannot be null');
        }
        $this->container['personal_id'] = $personal_id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

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
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

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
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \Verdigado\Gruen eApiClient\models\ProfileImage|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Verdigado\Gruen eApiClient\models\ProfileImage|null $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        if (is_null($image)) {
            throw new \InvalidArgumentException('non-nullable image cannot be null');
        }
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets phone_numbers
     *
     * @return \Verdigado\Gruen eApiClient\models\PhoneNumberEntry[]
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param \Verdigado\Gruen eApiClient\models\PhoneNumberEntry[] $phone_numbers phone_numbers
     *
     * @return self
     */
    public function setPhoneNumbers($phone_numbers)
    {
        if (is_null($phone_numbers)) {
            throw new \InvalidArgumentException('non-nullable phone_numbers cannot be null');
        }
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets messengers
     *
     * @return \Verdigado\Gruen eApiClient\models\MessengerEntry[]
     */
    public function getMessengers()
    {
        return $this->container['messengers'];
    }

    /**
     * Sets messengers
     *
     * @param \Verdigado\Gruen eApiClient\models\MessengerEntry[] $messengers messengers
     *
     * @return self
     */
    public function setMessengers($messengers)
    {
        if (is_null($messengers)) {
            throw new \InvalidArgumentException('non-nullable messengers cannot be null');
        }
        $this->container['messengers'] = $messengers;

        return $this;
    }

    /**
     * Gets social_media
     *
     * @return \Verdigado\Gruen eApiClient\models\SocialMediaEntry[]
     */
    public function getSocialMedia()
    {
        return $this->container['social_media'];
    }

    /**
     * Sets social_media
     *
     * @param \Verdigado\Gruen eApiClient\models\SocialMediaEntry[] $social_media social_media
     *
     * @return self
     */
    public function setSocialMedia($social_media)
    {
        if (is_null($social_media)) {
            throw new \InvalidArgumentException('non-nullable social_media cannot be null');
        }
        $this->container['social_media'] = $social_media;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Verdigado\Gruen eApiClient\models\ProfileTag[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Verdigado\Gruen eApiClient\models\ProfileTag[] $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets joined_at
     *
     * @return \DateTime|null
     */
    public function getJoinedAt()
    {
        return $this->container['joined_at'];
    }

    /**
     * Sets joined_at
     *
     * @param \DateTime|null $joined_at First entry date in the BV
     *
     * @return self
     */
    public function setJoinedAt($joined_at)
    {
        if (is_null($joined_at)) {
            throw new \InvalidArgumentException('non-nullable joined_at cannot be null');
        }
        $this->container['joined_at'] = $joined_at;

        return $this;
    }

    /**
     * Gets memberships
     *
     * @return \Verdigado\Gruen eApiClient\models\DivisionMembership[]|null
     */
    public function getMemberships()
    {
        return $this->container['memberships'];
    }

    /**
     * Sets memberships
     *
     * @param \Verdigado\Gruen eApiClient\models\DivisionMembership[]|null $memberships memberships
     *
     * @return self
     */
    public function setMemberships($memberships)
    {
        if (is_null($memberships)) {
            throw new \InvalidArgumentException('non-nullable memberships cannot be null');
        }
        $this->container['memberships'] = $memberships;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \Verdigado\Gruen eApiClient\models\ProfileRole[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \Verdigado\Gruen eApiClient\models\ProfileRole[] $roles roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets achievements
     *
     * @return string[]
     */
    public function getAchievements()
    {
        return $this->container['achievements'];
    }

    /**
     * Sets achievements
     *
     * @param string[] $achievements achievements
     *
     * @return self
     */
    public function setAchievements($achievements)
    {
        if (is_null($achievements)) {
            throw new \InvalidArgumentException('non-nullable achievements cannot be null');
        }
        $this->container['achievements'] = $achievements;

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
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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



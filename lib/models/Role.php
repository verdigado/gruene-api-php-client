<?php
/**
 * Role
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
 * Role Class Doc Comment
 *
 * @category Class
 * @package  Verdigado\Gruen eApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Role implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Role';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'hierarchy' => 'string',
        'type' => 'string',
        'min_age' => 'float',
        'max_age' => 'float',
        'level' => 'string',
        'categories' => '\Verdigado\Gruen eApiClient\models\RoleCategory[]',
        'tags' => '\Verdigado\Gruen eApiClient\models\RoleTag[]',
        'aliases' => '\Verdigado\Gruen eApiClient\models\RoleAlias[]'
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
        'name' => null,
        'hierarchy' => null,
        'type' => null,
        'min_age' => null,
        'max_age' => null,
        'level' => null,
        'categories' => null,
        'tags' => null,
        'aliases' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'hierarchy' => false,
		'type' => false,
		'min_age' => true,
		'max_age' => false,
		'level' => false,
		'categories' => false,
		'tags' => false,
		'aliases' => false
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
        'name' => 'name',
        'hierarchy' => 'hierarchy',
        'type' => 'type',
        'min_age' => 'minAge',
        'max_age' => 'maxAge',
        'level' => 'level',
        'categories' => 'categories',
        'tags' => 'tags',
        'aliases' => 'aliases'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'hierarchy' => 'setHierarchy',
        'type' => 'setType',
        'min_age' => 'setMinAge',
        'max_age' => 'setMaxAge',
        'level' => 'setLevel',
        'categories' => 'setCategories',
        'tags' => 'setTags',
        'aliases' => 'setAliases'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'hierarchy' => 'getHierarchy',
        'type' => 'getType',
        'min_age' => 'getMinAge',
        'max_age' => 'getMaxAge',
        'level' => 'getLevel',
        'categories' => 'getCategories',
        'tags' => 'getTags',
        'aliases' => 'getAliases'
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

    public const HIERARCHY_GR = 'GR';
    public const HIERARCHY_GJ = 'GJ';
    public const HIERARCHY_KPV = 'KPV';
    public const TYPE_AMT = 'AMT';
    public const TYPE_BEZ = 'BEZ';
    public const TYPE_MANDAT = 'MANDAT';
    public const TYPE_ROLLE = 'ROLLE';
    public const TYPE_SYSTEM = 'SYSTEM';
    public const LEVEL_ALL = 'ALL';
    public const LEVEL_BV = 'BV';
    public const LEVEL_LV = 'LV';
    public const LEVEL_KV = 'KV';
    public const LEVEL_OV = 'OV';
    public const LEVEL_BEZV = 'BEZV';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHierarchyAllowableValues()
    {
        return [
            self::HIERARCHY_GR,
            self::HIERARCHY_GJ,
            self::HIERARCHY_KPV,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_AMT,
            self::TYPE_BEZ,
            self::TYPE_MANDAT,
            self::TYPE_ROLLE,
            self::TYPE_SYSTEM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_ALL,
            self::LEVEL_BV,
            self::LEVEL_LV,
            self::LEVEL_KV,
            self::LEVEL_OV,
            self::LEVEL_BEZV,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('hierarchy', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('min_age', $data ?? [], null);
        $this->setIfExists('max_age', $data ?? [], null);
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('aliases', $data ?? [], null);
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['hierarchy'] === null) {
            $invalidProperties[] = "'hierarchy' can't be null";
        }
        $allowedValues = $this->getHierarchyAllowableValues();
        if (!is_null($this->container['hierarchy']) && !in_array($this->container['hierarchy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'hierarchy', must be one of '%s'",
                $this->container['hierarchy'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['min_age'] === null) {
            $invalidProperties[] = "'min_age' can't be null";
        }
        if ($this->container['max_age'] === null) {
            $invalidProperties[] = "'max_age' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        $allowedValues = $this->getLevelAllowableValues();
        if (!is_null($this->container['level']) && !in_array($this->container['level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'level', must be one of '%s'",
                $this->container['level'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['categories'] === null) {
            $invalidProperties[] = "'categories' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['aliases'] === null) {
            $invalidProperties[] = "'aliases' can't be null";
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
     * @param string $id The role id
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
     * @param string $name Name of the role
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets hierarchy
     *
     * @return string
     */
    public function getHierarchy()
    {
        return $this->container['hierarchy'];
    }

    /**
     * Sets hierarchy
     *
     * @param string $hierarchy Hierarchy this role refers to
     *
     * @return self
     */
    public function setHierarchy($hierarchy)
    {
        if (is_null($hierarchy)) {
            throw new \InvalidArgumentException('non-nullable hierarchy cannot be null');
        }
        $allowedValues = $this->getHierarchyAllowableValues();
        if (!in_array($hierarchy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'hierarchy', must be one of '%s'",
                    $hierarchy,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hierarchy'] = $hierarchy;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of role
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets min_age
     *
     * @return float
     */
    public function getMinAge()
    {
        return $this->container['min_age'];
    }

    /**
     * Sets min_age
     *
     * @param float $min_age Role min age
     *
     * @return self
     */
    public function setMinAge($min_age)
    {
        if (is_null($min_age)) {
            array_push($this->openAPINullablesSetToNull, 'min_age');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_age', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_age'] = $min_age;

        return $this;
    }

    /**
     * Gets max_age
     *
     * @return float
     */
    public function getMaxAge()
    {
        return $this->container['max_age'];
    }

    /**
     * Sets max_age
     *
     * @param float $max_age Role max age
     *
     * @return self
     */
    public function setMaxAge($max_age)
    {
        if (is_null($max_age)) {
            throw new \InvalidArgumentException('non-nullable max_age cannot be null');
        }
        $this->container['max_age'] = $max_age;

        return $this;
    }

    /**
     * Gets level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param string $level Hierarchy level this role applies to
     *
     * @return self
     */
    public function setLevel($level)
    {
        if (is_null($level)) {
            throw new \InvalidArgumentException('non-nullable level cannot be null');
        }
        $allowedValues = $this->getLevelAllowableValues();
        if (!in_array($level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'level', must be one of '%s'",
                    $level,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Verdigado\Gruen eApiClient\models\RoleCategory[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Verdigado\Gruen eApiClient\models\RoleCategory[] $categories Role categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        if (is_null($categories)) {
            throw new \InvalidArgumentException('non-nullable categories cannot be null');
        }
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Verdigado\Gruen eApiClient\models\RoleTag[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Verdigado\Gruen eApiClient\models\RoleTag[] $tags Role tags
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
     * Gets aliases
     *
     * @return \Verdigado\Gruen eApiClient\models\RoleAlias[]
     */
    public function getAliases()
    {
        return $this->container['aliases'];
    }

    /**
     * Sets aliases
     *
     * @param \Verdigado\Gruen eApiClient\models\RoleAlias[] $aliases Role Aliases
     *
     * @return self
     */
    public function setAliases($aliases)
    {
        if (is_null($aliases)) {
            throw new \InvalidArgumentException('non-nullable aliases cannot be null');
        }
        $this->container['aliases'] = $aliases;

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



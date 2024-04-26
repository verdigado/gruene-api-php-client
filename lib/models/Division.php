<?php
/**
 * Division
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Verdigado\GrueneApiClient
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

namespace Verdigado\GrueneApiClient\models;

use \ArrayAccess;
use \Verdigado\GrueneApiClient\ObjectSerializer;

/**
 * Division Class Doc Comment
 *
 * @category Class
 * @package  Verdigado\GrueneApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Division implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Division';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'division_key' => 'string',
        'name1' => 'string',
        'name2' => 'string',
        'short_name' => 'string',
        'hierarchy' => 'object',
        'level' => 'string',
        'office_address' => '\Verdigado\GrueneApiClient\models\DivisionOfficeAddress'
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
        'division_key' => null,
        'name1' => null,
        'name2' => null,
        'short_name' => null,
        'hierarchy' => null,
        'level' => null,
        'office_address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'division_key' => false,
		'name1' => false,
		'name2' => false,
		'short_name' => false,
		'hierarchy' => false,
		'level' => false,
		'office_address' => false
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
        'division_key' => 'divisionKey',
        'name1' => 'name1',
        'name2' => 'name2',
        'short_name' => 'shortName',
        'hierarchy' => 'hierarchy',
        'level' => 'level',
        'office_address' => 'officeAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'division_key' => 'setDivisionKey',
        'name1' => 'setName1',
        'name2' => 'setName2',
        'short_name' => 'setShortName',
        'hierarchy' => 'setHierarchy',
        'level' => 'setLevel',
        'office_address' => 'setOfficeAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'division_key' => 'getDivisionKey',
        'name1' => 'getName1',
        'name2' => 'getName2',
        'short_name' => 'getShortName',
        'hierarchy' => 'getHierarchy',
        'level' => 'getLevel',
        'office_address' => 'getOfficeAddress'
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

    public const LEVEL_BV = 'BV';
    public const LEVEL_LV = 'LV';
    public const LEVEL_KV = 'KV';
    public const LEVEL_OV = 'OV';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_BV,
            self::LEVEL_LV,
            self::LEVEL_KV,
            self::LEVEL_OV,
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
        $this->setIfExists('division_key', $data ?? [], null);
        $this->setIfExists('name1', $data ?? [], null);
        $this->setIfExists('name2', $data ?? [], null);
        $this->setIfExists('short_name', $data ?? [], null);
        $this->setIfExists('hierarchy', $data ?? [], null);
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('office_address', $data ?? [], null);
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
        if ($this->container['division_key'] === null) {
            $invalidProperties[] = "'division_key' can't be null";
        }
        if ($this->container['name1'] === null) {
            $invalidProperties[] = "'name1' can't be null";
        }
        if ($this->container['name2'] === null) {
            $invalidProperties[] = "'name2' can't be null";
        }
        if ($this->container['short_name'] === null) {
            $invalidProperties[] = "'short_name' can't be null";
        }
        if ($this->container['hierarchy'] === null) {
            $invalidProperties[] = "'hierarchy' can't be null";
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

        if ($this->container['office_address'] === null) {
            $invalidProperties[] = "'office_address' can't be null";
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
     * @param string $id The division id
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
     * Gets division_key
     *
     * @return string
     */
    public function getDivisionKey()
    {
        return $this->container['division_key'];
    }

    /**
     * Sets division_key
     *
     * @param string $division_key The division key
     *
     * @return self
     */
    public function setDivisionKey($division_key)
    {
        if (is_null($division_key)) {
            throw new \InvalidArgumentException('non-nullable division_key cannot be null');
        }
        $this->container['division_key'] = $division_key;

        return $this;
    }

    /**
     * Gets name1
     *
     * @return string
     */
    public function getName1()
    {
        return $this->container['name1'];
    }

    /**
     * Sets name1
     *
     * @param string $name1 name1
     *
     * @return self
     */
    public function setName1($name1)
    {
        if (is_null($name1)) {
            throw new \InvalidArgumentException('non-nullable name1 cannot be null');
        }
        $this->container['name1'] = $name1;

        return $this;
    }

    /**
     * Gets name2
     *
     * @return string
     */
    public function getName2()
    {
        return $this->container['name2'];
    }

    /**
     * Sets name2
     *
     * @param string $name2 name2
     *
     * @return self
     */
    public function setName2($name2)
    {
        if (is_null($name2)) {
            throw new \InvalidArgumentException('non-nullable name2 cannot be null');
        }
        $this->container['name2'] = $name2;

        return $this;
    }

    /**
     * Gets short_name
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string $short_name Descriptive name of the division.
     *
     * @return self
     */
    public function setShortName($short_name)
    {
        if (is_null($short_name)) {
            throw new \InvalidArgumentException('non-nullable short_name cannot be null');
        }
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets hierarchy
     *
     * @return object
     */
    public function getHierarchy()
    {
        return $this->container['hierarchy'];
    }

    /**
     * Sets hierarchy
     *
     * @param object $hierarchy The root hierarchy the division belongs to
     *
     * @return self
     */
    public function setHierarchy($hierarchy)
    {
        if (is_null($hierarchy)) {
            throw new \InvalidArgumentException('non-nullable hierarchy cannot be null');
        }
        $this->container['hierarchy'] = $hierarchy;

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
     * @param string $level Level in the hierarchy
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
     * Gets office_address
     *
     * @return \Verdigado\GrueneApiClient\models\DivisionOfficeAddress
     */
    public function getOfficeAddress()
    {
        return $this->container['office_address'];
    }

    /**
     * Sets office_address
     *
     * @param \Verdigado\GrueneApiClient\models\DivisionOfficeAddress $office_address office_address
     *
     * @return self
     */
    public function setOfficeAddress($office_address)
    {
        if (is_null($office_address)) {
            throw new \InvalidArgumentException('non-nullable office_address cannot be null');
        }
        $this->container['office_address'] = $office_address;

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


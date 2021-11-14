<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mission_generator.proto

namespace MGenerator\Mission;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>mGenerator.Mission.Terrain</code>
 */
class Terrain extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string title = 1;</code>
     */
    private $title = '';
    /**
     * Generated from protobuf field <code>.mGenerator.Mission.Terrain.Category category = 2;</code>
     */
    private $category = null;
    /**
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Generated from protobuf field <code>string rules = 4;</code>
     */
    private $rules = '';
    /**
     * Generated from protobuf field <code>string rules_short = 5;</code>
     */
    private $rules_short = '';
    /**
     * Generated from protobuf field <code>repeated .mGenerator.Mission.Terrain.Trait traits = 6;</code>
     */
    private $traits;
    /**
     * Generated from protobuf field <code>.mGenerator.Point point = 7;</code>
     */
    private $point = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *     @type \MGenerator\Mission\Terrain\Category $category
     *     @type string $description
     *     @type string $rules
     *     @type string $rules_short
     *     @type \MGenerator\Mission\Terrain\PBTrait[]|\Google\Protobuf\Internal\RepeatedField $traits
     *     @type \MGenerator\Point $point
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\MissionGenerator::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mGenerator.Mission.Terrain.Category category = 2;</code>
     * @return \MGenerator\Mission\Terrain\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Generated from protobuf field <code>.mGenerator.Mission.Terrain.Category category = 2;</code>
     * @param \MGenerator\Mission\Terrain\Category $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkMessage($var, \MGenerator\Mission_Terrain_Category::class);
        $this->category = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string rules = 4;</code>
     * @return string
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Generated from protobuf field <code>string rules = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRules($var)
    {
        GPBUtil::checkString($var, True);
        $this->rules = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string rules_short = 5;</code>
     * @return string
     */
    public function getRulesShort()
    {
        return $this->rules_short;
    }

    /**
     * Generated from protobuf field <code>string rules_short = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRulesShort($var)
    {
        GPBUtil::checkString($var, True);
        $this->rules_short = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .mGenerator.Mission.Terrain.Trait traits = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTraits()
    {
        return $this->traits;
    }

    /**
     * Generated from protobuf field <code>repeated .mGenerator.Mission.Terrain.Trait traits = 6;</code>
     * @param \MGenerator\Mission\Terrain\PBTrait[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTraits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MGenerator\Mission\Terrain\PBTrait::class);
        $this->traits = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mGenerator.Point point = 7;</code>
     * @return \MGenerator\Point
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Generated from protobuf field <code>.mGenerator.Point point = 7;</code>
     * @param \MGenerator\Point $var
     * @return $this
     */
    public function setPoint($var)
    {
        GPBUtil::checkMessage($var, \MGenerator\Point::class);
        $this->point = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Terrain::class, \MGenerator\Mission_Terrain::class);

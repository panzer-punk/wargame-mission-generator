<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mission_generator.proto

namespace MGenerator;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>mGenerator.Point</code>
 */
class Point extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float x = 1;</code>
     */
    private $x = 0.0;
    /**
     * Generated from protobuf field <code>float y = 2;</code>
     */
    private $y = 0.0;
    /**
     * Generated from protobuf field <code>repeated .mGenerator.Point links = 3;</code>
     */
    private $links;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $x
     *     @type float $y
     *     @type \MGenerator\Point[]|\Google\Protobuf\Internal\RepeatedField $links
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\MissionGenerator::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>float x = 1;</code>
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Generated from protobuf field <code>float x = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setX($var)
    {
        GPBUtil::checkFloat($var);
        $this->x = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float y = 2;</code>
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Generated from protobuf field <code>float y = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setY($var)
    {
        GPBUtil::checkFloat($var);
        $this->y = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .mGenerator.Point links = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Generated from protobuf field <code>repeated .mGenerator.Point links = 3;</code>
     * @param \MGenerator\Point[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MGenerator\Point::class);
        $this->links = $arr;

        return $this;
    }

}

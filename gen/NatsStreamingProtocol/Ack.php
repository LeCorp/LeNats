<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protoc/nats_streaming.proto

namespace NatsStreamingProtocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Ack will deliver an ack for a delivered msg.
 *
 * Generated from protobuf message <code>NatsStreamingProtocol.Ack</code>
 */
class Ack extends \Google\Protobuf\Internal\Message
{
    /**
     * Subject
     *
     * Generated from protobuf field <code>string subject = 1;</code>
     */
    private $subject = '';
    /**
     * Sequence to acknowledge
     *
     * Generated from protobuf field <code>uint64 sequence = 2;</code>
     */
    private $sequence = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subject
     *           Subject
     *     @type int|string $sequence
     *           Sequence to acknowledge
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protoc\NatsStreaming::initOnce();
        parent::__construct($data);
    }

    /**
     * Subject
     *
     * Generated from protobuf field <code>string subject = 1;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Subject
     *
     * Generated from protobuf field <code>string subject = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * Sequence to acknowledge
     *
     * Generated from protobuf field <code>uint64 sequence = 2;</code>
     * @return int|string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sequence to acknowledge
     *
     * Generated from protobuf field <code>uint64 sequence = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSequence($var)
    {
        GPBUtil::checkUint64($var);
        $this->sequence = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protoc/nats_streaming.proto

namespace NatsStreamingProtocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protocol for a client to subscribe
 *
 * Generated from protobuf message <code>NatsStreamingProtocol.SubscriptionRequest</code>
 */
class SubscriptionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ClientID
     *
     * Generated from protobuf field <code>string clientID = 1;</code>
     */
    private $clientID = '';
    /**
     * Formal subject to subscribe to, e.g. foo.bar
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     */
    private $subject = '';
    /**
     * Optional queue group
     *
     * Generated from protobuf field <code>string qGroup = 3;</code>
     */
    private $qGroup = '';
    /**
     * Inbox subject to deliver messages on
     *
     * Generated from protobuf field <code>string inbox = 4;</code>
     */
    private $inbox = '';
    /**
     * Maximum inflight messages without an ack allowed
     *
     * Generated from protobuf field <code>int32 maxInFlight = 5;</code>
     */
    private $maxInFlight = 0;
    /**
     * Timeout for receiving an ack from the client
     *
     * Generated from protobuf field <code>int32 ackWaitInSecs = 6;</code>
     */
    private $ackWaitInSecs = 0;
    /**
     * Optional durable name which survives client restarts
     *
     * Generated from protobuf field <code>string durableName = 7;</code>
     */
    private $durableName = '';
    /**
     * Start position
     *
     * Generated from protobuf field <code>.NatsStreamingProtocol.StartPosition startPosition = 10;</code>
     */
    private $startPosition = 0;
    /**
     * Optional start sequence number
     *
     * Generated from protobuf field <code>uint64 startSequence = 11;</code>
     */
    private $startSequence = 0;
    /**
     * Optional start time
     *
     * Generated from protobuf field <code>int64 startTimeDelta = 12;</code>
     */
    private $startTimeDelta = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $clientID
     *           ClientID
     *     @type string $subject
     *           Formal subject to subscribe to, e.g. foo.bar
     *     @type string $qGroup
     *           Optional queue group
     *     @type string $inbox
     *           Inbox subject to deliver messages on
     *     @type int $maxInFlight
     *           Maximum inflight messages without an ack allowed
     *     @type int $ackWaitInSecs
     *           Timeout for receiving an ack from the client
     *     @type string $durableName
     *           Optional durable name which survives client restarts
     *     @type int $startPosition
     *           Start position
     *     @type int|string $startSequence
     *           Optional start sequence number
     *     @type int|string $startTimeDelta
     *           Optional start time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protoc\NatsStreaming::initOnce();
        parent::__construct($data);
    }

    /**
     * ClientID
     *
     * Generated from protobuf field <code>string clientID = 1;</code>
     * @return string
     */
    public function getClientID()
    {
        return $this->clientID;
    }

    /**
     * ClientID
     *
     * Generated from protobuf field <code>string clientID = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setClientID($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientID = $var;

        return $this;
    }

    /**
     * Formal subject to subscribe to, e.g. foo.bar
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Formal subject to subscribe to, e.g. foo.bar
     *
     * Generated from protobuf field <code>string subject = 2;</code>
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
     * Optional queue group
     *
     * Generated from protobuf field <code>string qGroup = 3;</code>
     * @return string
     */
    public function getQGroup()
    {
        return $this->qGroup;
    }

    /**
     * Optional queue group
     *
     * Generated from protobuf field <code>string qGroup = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setQGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->qGroup = $var;

        return $this;
    }

    /**
     * Inbox subject to deliver messages on
     *
     * Generated from protobuf field <code>string inbox = 4;</code>
     * @return string
     */
    public function getInbox()
    {
        return $this->inbox;
    }

    /**
     * Inbox subject to deliver messages on
     *
     * Generated from protobuf field <code>string inbox = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setInbox($var)
    {
        GPBUtil::checkString($var, True);
        $this->inbox = $var;

        return $this;
    }

    /**
     * Maximum inflight messages without an ack allowed
     *
     * Generated from protobuf field <code>int32 maxInFlight = 5;</code>
     * @return int
     */
    public function getMaxInFlight()
    {
        return $this->maxInFlight;
    }

    /**
     * Maximum inflight messages without an ack allowed
     *
     * Generated from protobuf field <code>int32 maxInFlight = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxInFlight($var)
    {
        GPBUtil::checkInt32($var);
        $this->maxInFlight = $var;

        return $this;
    }

    /**
     * Timeout for receiving an ack from the client
     *
     * Generated from protobuf field <code>int32 ackWaitInSecs = 6;</code>
     * @return int
     */
    public function getAckWaitInSecs()
    {
        return $this->ackWaitInSecs;
    }

    /**
     * Timeout for receiving an ack from the client
     *
     * Generated from protobuf field <code>int32 ackWaitInSecs = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setAckWaitInSecs($var)
    {
        GPBUtil::checkInt32($var);
        $this->ackWaitInSecs = $var;

        return $this;
    }

    /**
     * Optional durable name which survives client restarts
     *
     * Generated from protobuf field <code>string durableName = 7;</code>
     * @return string
     */
    public function getDurableName()
    {
        return $this->durableName;
    }

    /**
     * Optional durable name which survives client restarts
     *
     * Generated from protobuf field <code>string durableName = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDurableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->durableName = $var;

        return $this;
    }

    /**
     * Start position
     *
     * Generated from protobuf field <code>.NatsStreamingProtocol.StartPosition startPosition = 10;</code>
     * @return int
     */
    public function getStartPosition()
    {
        return $this->startPosition;
    }

    /**
     * Start position
     *
     * Generated from protobuf field <code>.NatsStreamingProtocol.StartPosition startPosition = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setStartPosition($var)
    {
        GPBUtil::checkEnum($var, \NatsStreamingProtocol\StartPosition::class);
        $this->startPosition = $var;

        return $this;
    }

    /**
     * Optional start sequence number
     *
     * Generated from protobuf field <code>uint64 startSequence = 11;</code>
     * @return int|string
     */
    public function getStartSequence()
    {
        return $this->startSequence;
    }

    /**
     * Optional start sequence number
     *
     * Generated from protobuf field <code>uint64 startSequence = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartSequence($var)
    {
        GPBUtil::checkUint64($var);
        $this->startSequence = $var;

        return $this;
    }

    /**
     * Optional start time
     *
     * Generated from protobuf field <code>int64 startTimeDelta = 12;</code>
     * @return int|string
     */
    public function getStartTimeDelta()
    {
        return $this->startTimeDelta;
    }

    /**
     * Optional start time
     *
     * Generated from protobuf field <code>int64 startTimeDelta = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTimeDelta($var)
    {
        GPBUtil::checkInt64($var);
        $this->startTimeDelta = $var;

        return $this;
    }

}


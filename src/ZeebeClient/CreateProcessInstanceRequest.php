<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: zeebe.proto

namespace ZeebeClient;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gateway_protocol.CreateProcessInstanceRequest</code>
 */
class CreateProcessInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * the unique key identifying the process definition (e.g. returned from a process
     * in the DeployProcessResponse message)
     *
     * Generated from protobuf field <code>int64 processDefinitionKey = 1;</code>
     */
    protected $processDefinitionKey = 0;
    /**
     * the BPMN process ID of the process definition
     *
     * Generated from protobuf field <code>string bpmnProcessId = 2;</code>
     */
    protected $bpmnProcessId = '';
    /**
     * the version of the process; set to -1 to use the latest version
     *
     * Generated from protobuf field <code>int32 version = 3;</code>
     */
    protected $version = 0;
    /**
     * JSON document that will instantiate the variables for the root variable scope of the
     * process instance; it must be a JSON object, as variables will be mapped in a
     * key-value fashion. e.g. { "a": 1, "b": 2 } will create two variables, named "a" and
     * "b" respectively, with their associated values. [{ "a": 1, "b": 2 }] would not be a
     * valid argument, as the root of the JSON document is an array and not an object.
     *
     * Generated from protobuf field <code>string variables = 4;</code>
     */
    protected $variables = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $processDefinitionKey
     *           the unique key identifying the process definition (e.g. returned from a process
     *           in the DeployProcessResponse message)
     *     @type string $bpmnProcessId
     *           the BPMN process ID of the process definition
     *     @type int $version
     *           the version of the process; set to -1 to use the latest version
     *     @type string $variables
     *           JSON document that will instantiate the variables for the root variable scope of the
     *           process instance; it must be a JSON object, as variables will be mapped in a
     *           key-value fashion. e.g. { "a": 1, "b": 2 } will create two variables, named "a" and
     *           "b" respectively, with their associated values. [{ "a": 1, "b": 2 }] would not be a
     *           valid argument, as the root of the JSON document is an array and not an object.
     * }
     */
    public function __construct($data = NULL) {
        \ZeebeClient\Zeebe::initOnce();
        parent::__construct($data);
    }

    /**
     * the unique key identifying the process definition (e.g. returned from a process
     * in the DeployProcessResponse message)
     *
     * Generated from protobuf field <code>int64 processDefinitionKey = 1;</code>
     * @return int|string
     */
    public function getProcessDefinitionKey()
    {
        return $this->processDefinitionKey;
    }

    /**
     * the unique key identifying the process definition (e.g. returned from a process
     * in the DeployProcessResponse message)
     *
     * Generated from protobuf field <code>int64 processDefinitionKey = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setProcessDefinitionKey($var)
    {
        GPBUtil::checkInt64($var);
        $this->processDefinitionKey = $var;

        return $this;
    }

    /**
     * the BPMN process ID of the process definition
     *
     * Generated from protobuf field <code>string bpmnProcessId = 2;</code>
     * @return string
     */
    public function getBpmnProcessId()
    {
        return $this->bpmnProcessId;
    }

    /**
     * the BPMN process ID of the process definition
     *
     * Generated from protobuf field <code>string bpmnProcessId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBpmnProcessId($var)
    {
        GPBUtil::checkString($var, True);
        $this->bpmnProcessId = $var;

        return $this;
    }

    /**
     * the version of the process; set to -1 to use the latest version
     *
     * Generated from protobuf field <code>int32 version = 3;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * the version of the process; set to -1 to use the latest version
     *
     * Generated from protobuf field <code>int32 version = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * JSON document that will instantiate the variables for the root variable scope of the
     * process instance; it must be a JSON object, as variables will be mapped in a
     * key-value fashion. e.g. { "a": 1, "b": 2 } will create two variables, named "a" and
     * "b" respectively, with their associated values. [{ "a": 1, "b": 2 }] would not be a
     * valid argument, as the root of the JSON document is an array and not an object.
     *
     * Generated from protobuf field <code>string variables = 4;</code>
     * @return string
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * JSON document that will instantiate the variables for the root variable scope of the
     * process instance; it must be a JSON object, as variables will be mapped in a
     * key-value fashion. e.g. { "a": 1, "b": 2 } will create two variables, named "a" and
     * "b" respectively, with their associated values. [{ "a": 1, "b": 2 }] would not be a
     * valid argument, as the root of the JSON document is an array and not an object.
     *
     * Generated from protobuf field <code>string variables = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVariables($var)
    {
        GPBUtil::checkString($var, True);
        $this->variables = $var;

        return $this;
    }

}


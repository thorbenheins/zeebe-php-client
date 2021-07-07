<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: zeebe.proto

namespace ZeebeClient;

class Zeebe
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�!
zeebe.protogateway_protocol"�
ActivateJobsRequest
type (	
worker (	
timeout (
maxJobsToActivate (
fetchVariable (	
requestTimeout ("D
ActivateJobsResponse,
jobs (2.gateway_protocol.ActivatedJob"�
ActivatedJob
key (
type (	
processInstanceKey (
bpmnProcessId (	 
processDefinitionVersion (
processDefinitionKey (
	elementId (	
elementInstanceKey (
customHeaders	 (	
worker
 (	
retries (
deadline (
	variables (	":
CancelProcessInstanceRequest
processInstanceKey ("
CancelProcessInstanceResponse"7
CompleteJobRequest
jobKey (
	variables (	"
CompleteJobResponse"w
CreateProcessInstanceRequest
processDefinitionKey (
bpmnProcessId (	
version (
	variables (	"�
CreateProcessInstanceResponse
processDefinitionKey (
bpmnProcessId (	
version (
processInstanceKey ("�
&CreateProcessInstanceWithResultRequest?
request (2..gateway_protocol.CreateProcessInstanceRequest
requestTimeout (
fetchVariables (	"�
\'CreateProcessInstanceWithResultResponse
processDefinitionKey (
bpmnProcessId (	
version (
processInstanceKey (
	variables (	"Q
DeployProcessRequest9
	processes (2&.gateway_protocol.ProcessRequestObject"8
ProcessRequestObject
name (	

definition ("Z
DeployProcessResponse
key (4
	processes (2!.gateway_protocol.ProcessMetadata"m
ProcessMetadata
bpmnProcessId (	
version (
processDefinitionKey (
resourceName (	"G
FailJobRequest
jobKey (
retries (
errorMessage (	"
FailJobResponse"L
ThrowErrorRequest
jobKey (
	errorCode (	
errorMessage (	"
ThrowErrorResponse"w
PublishMessageRequest
name (	
correlationKey (	

timeToLive (
	messageId (	
	variables (	"%
PublishMessageResponse
key ("-
ResolveIncidentRequest
incidentKey ("
ResolveIncidentResponse"
TopologyRequest"�
TopologyResponse-
brokers (2.gateway_protocol.BrokerInfo
clusterSize (
partitionsCount (
replicationFactor (
gatewayVersion (	"z

BrokerInfo
nodeId (
host (	
port (/

partitions (2.gateway_protocol.Partition
version (	"�
	Partition
partitionId (=
role (2/.gateway_protocol.Partition.PartitionBrokerRoleA
health (21.gateway_protocol.Partition.PartitionBrokerHealth"=
PartitionBrokerRole

LEADER 
FOLLOWER
INACTIVE"3
PartitionBrokerHealth
HEALTHY 
	UNHEALTHY":
UpdateJobRetriesRequest
jobKey (
retries ("
UpdateJobRetriesResponse"S
SetVariablesRequest
elementInstanceKey (
	variables (	
local ("#
SetVariablesResponse
key (2�

Gatewaya
ActivateJobs%.gateway_protocol.ActivateJobsRequest&.gateway_protocol.ActivateJobsResponse" 0z
CancelProcessInstance..gateway_protocol.CancelProcessInstanceRequest/.gateway_protocol.CancelProcessInstanceResponse" \\
CompleteJob$.gateway_protocol.CompleteJobRequest%.gateway_protocol.CompleteJobResponse" z
CreateProcessInstance..gateway_protocol.CreateProcessInstanceRequest/.gateway_protocol.CreateProcessInstanceResponse" �
CreateProcessInstanceWithResult8.gateway_protocol.CreateProcessInstanceWithResultRequest9.gateway_protocol.CreateProcessInstanceWithResultResponse" b
DeployProcess&.gateway_protocol.DeployProcessRequest\'.gateway_protocol.DeployProcessResponse" P
FailJob .gateway_protocol.FailJobRequest!.gateway_protocol.FailJobResponse" Y

ThrowError#.gateway_protocol.ThrowErrorRequest$.gateway_protocol.ThrowErrorResponse" e
PublishMessage\'.gateway_protocol.PublishMessageRequest(.gateway_protocol.PublishMessageResponse" h
ResolveIncident(.gateway_protocol.ResolveIncidentRequest).gateway_protocol.ResolveIncidentResponse" _
SetVariables%.gateway_protocol.SetVariablesRequest&.gateway_protocol.SetVariablesResponse" S
Topology!.gateway_protocol.TopologyRequest".gateway_protocol.TopologyResponse" k
UpdateJobRetries).gateway_protocol.UpdateJobRetriesRequest*.gateway_protocol.UpdateJobRetriesResponse" BH
!io.camunda.zeebe.gateway.protocolP Z./;pb�ZeebeClient�ZeebeClientbproto3'
        , true);

        static::$is_initialized = true;
    }
}


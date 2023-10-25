<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class SetLoadBalancerUDPListenerAttributeRequest extends Model
{
    /**
     * @description The ID of the network access control list (ACL) that is associated with the listener.
     *
     * >  If **AclStatus** is set to **on**, this parameter is required.
     * @example off
     *
     * @var string
     */
    public $aclId;

    /**
     * @description Specifies whether to enable access control. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example off
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description The type of the network ACL. Valid values:
     *
     *   **white**: a whitelist. Only requests from the IP addresses or CIDR blocks in the network ACL are forwarded. Whitelists apply to scenarios where you want to allow only specific IP addresses to access an application. Your service may be adversely affected if the whitelist is not properly configured. After a whitelist is configured, only requests from IP addresses that are added to the whitelist are forwarded by the listener.
     *
     * If you enable a whitelist but do not add an IP address to the ACL, the listener forwards all requests.
     *
     *   **black**: a blacklist. All requests from the IP addresses or CIDR blocks in the network ACL are denied. Blacklists apply to scenarios where you want to block access from specified IP addresses to an application.
     *
     * If a blacklist is configured for a listener but no IP address is added to the blacklist, the listener forwards all requests.
     *
     * >  If **AclStatus** is set to **on**, this parameter is required.
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The maximum bandwidth of the listener. Unit: Mbit/s. Valid values:
     *
     *   **-1**: For a pay-by-data-transfer Internet-facing CLB instance, you can set this parameter to **-1**. This way, the bandwidth of the listener is unlimited.
     *   **1** to **5120**: For a pay-by-bandwidth Internet-facing CLB instance, you can specify the maximum bandwidth of each listener. The sum of bandwidth limits that you set for all listeners cannot exceed the maximum bandwidth of the CLB instance.
     *
     * @example -1
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The name of the listener.
     *
     * The name must be 1 to 256 characters in length and can contain letters, digits, hyphens (-), forward slashes (/), periods (.), and underscores (\_).
     * @example udp_80
     *
     * @var string
     */
    public $description;

    /**
     * @description The port that is used for health checks.
     *
     * Valid values: **1** to **65535**.
     * @example 80
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description The timeout period of a health check. If a backend server, such as an Elastic Compute Service (ECS) instance, does not return a health check response within the specified timeout period, the server fails the health check. Unit: seconds.
     *
     * Valid values: **1** to **300**.
     *
     * >  If the value of the **HealthCheckConnectTimeout** parameter is smaller than that of the **HealthCheckInterval** parameter, the timeout period specified by the **HealthCheckConnectTimeout** parameter is ignored and the period of time specified by the **HealthCheckInterval** parameter is used as the timeout period.
     * @example 100
     *
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @description The interval at which health checks are performed. Unit: seconds.
     *
     * Valid values: **1** to **50**.
     * @example 5
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description Specifies whether to enable the health check feature. Valid values:
     *
     *   **on** (default): yes
     *   **off**: no
     *
     * @example on
     *
     * @var string
     */
    public $healthCheckSwitch;

    /**
     * @description The number of times that an unhealthy backend server must consecutively pass health checks before it can be declared healthy (from **fail** to **success**).
     *
     * Valid values: **1** to **10**.
     * @example 4
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description The frontend port used by the CLB instance.
     *
     * Valid values: **1** to **65535**.
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The ID of the CLB instance.
     *
     * @example lb-bp1rtfnodmywb43ecu4sf-c****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description Specifies whether to use a primary/secondary server group. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * >  You cannot set **VserverGroup** and **MasterSlaveServerGroup** both to **on**.
     * @example on
     *
     * @var string
     */
    public $masterSlaveServerGroup;

    /**
     * @description The ID of the primary/secondary server group.
     *
     * >  You cannot specify both VServerGroupId and MasterSlaveServerGroupId.
     * @example rsp-0bfuc****
     *
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Specifies whether to use the Proxy protocol to pass client IP addresses to backend servers. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * @example false
     *
     * @var bool
     */
    public $proxyProtocolV2Enabled;

    /**
     * @description The region ID of the CLB instance.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The scheduling algorithm. Valid values:
     *
     *   **wrr**: Backend servers with higher weights receive more requests than those with lower weights.
     *
     * If two backend servers have the same weight, the backend server that has fewer connections is expected to receive more requests.
     *
     *   **rr**: Requests are distributed to backend servers in sequence.
     *
     *   **sch**: specifies consistent hashing that is based on source IP addresses. Requests from the same source IP address are distributed to the same backend server.
     *
     *   **tch**: specifies consistent hashing that is based on the following parameters: source IP address, destination IP address, source port, and destination port. Requests that contain the same preceding information are distributed to the same backend server.
     *
     *   **qch**: specifies consistent hashing that is based on QUIC connection IDs. Requests that contain the same QUIC connection ID are distributed to the same backend server.
     *
     * >
     *   Only high-performance CLB instances support **sch**, **tch**, and **qch**.
     *   You cannot switch the algorithm used by a CLB instance from **wrr** or **rr** to consistent hashing or from consistent hashing to weighted round robin or round robin.
     *
     * @example wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description The number of times that a healthy backend server must consecutively fail health checks before it is declared unhealthy. In this case, the health status is changed from **success** to **fail**.
     *
     * Valid values: **1** to **10**.
     * @example 4
     *
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @description Specifies whether to use a vServer group. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * >  You cannot set both **VserverGroup** and **MasterSlaveServerGroup** to **on**.
     * @example on
     *
     * @var string
     */
    public $VServerGroup;

    /**
     * @description The ID of the vServer group.
     *
     * @example rsp-cige6****
     *
     * @var string
     */
    public $VServerGroupId;

    /**
     * @description The response string for UDP listener health checks. The string must be 1 to 64 characters in length and can contain only letters and digits.
     *
     * @example ok
     *
     * @var string
     */
    public $healthCheckExp;

    /**
     * @description The request string for UDP listener health checks. The string must be 1 to 64 characters in length and can contain only letters and digits.
     *
     * @example hello
     *
     * @var string
     */
    public $healthCheckReq;
    protected $_name = [
        'aclId'                     => 'AclId',
        'aclStatus'                 => 'AclStatus',
        'aclType'                   => 'AclType',
        'bandwidth'                 => 'Bandwidth',
        'description'               => 'Description',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckSwitch'         => 'HealthCheckSwitch',
        'healthyThreshold'          => 'HealthyThreshold',
        'listenerPort'              => 'ListenerPort',
        'loadBalancerId'            => 'LoadBalancerId',
        'masterSlaveServerGroup'    => 'MasterSlaveServerGroup',
        'masterSlaveServerGroupId'  => 'MasterSlaveServerGroupId',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'proxyProtocolV2Enabled'    => 'ProxyProtocolV2Enabled',
        'regionId'                  => 'RegionId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'scheduler'                 => 'Scheduler',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
        'VServerGroup'              => 'VServerGroup',
        'VServerGroupId'            => 'VServerGroupId',
        'healthCheckExp'            => 'healthCheckExp',
        'healthCheckReq'            => 'healthCheckReq',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckConnectTimeout) {
            $res['HealthCheckConnectTimeout'] = $this->healthCheckConnectTimeout;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckSwitch) {
            $res['HealthCheckSwitch'] = $this->healthCheckSwitch;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->masterSlaveServerGroup) {
            $res['MasterSlaveServerGroup'] = $this->masterSlaveServerGroup;
        }
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->proxyProtocolV2Enabled) {
            $res['ProxyProtocolV2Enabled'] = $this->proxyProtocolV2Enabled;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->VServerGroup) {
            $res['VServerGroup'] = $this->VServerGroup;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->healthCheckExp) {
            $res['healthCheckExp'] = $this->healthCheckExp;
        }
        if (null !== $this->healthCheckReq) {
            $res['healthCheckReq'] = $this->healthCheckReq;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLoadBalancerUDPListenerAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckConnectTimeout'])) {
            $model->healthCheckConnectTimeout = $map['HealthCheckConnectTimeout'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckSwitch'])) {
            $model->healthCheckSwitch = $map['HealthCheckSwitch'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['MasterSlaveServerGroup'])) {
            $model->masterSlaveServerGroup = $map['MasterSlaveServerGroup'];
        }
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProxyProtocolV2Enabled'])) {
            $model->proxyProtocolV2Enabled = $map['ProxyProtocolV2Enabled'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['VServerGroup'])) {
            $model->VServerGroup = $map['VServerGroup'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['healthCheckExp'])) {
            $model->healthCheckExp = $map['healthCheckExp'];
        }
        if (isset($map['healthCheckReq'])) {
            $model->healthCheckReq = $map['healthCheckReq'];
        }

        return $model;
    }
}

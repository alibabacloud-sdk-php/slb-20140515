<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class SetListenerAccessControlStatusRequest extends Model
{
    /**
     * @description Specifies whether to enable the whitelist. Valid values:
     *
     *   **open_white_list**: enables the whitelist.
     *   **close**: disables the whitelist.
     *
     * >  After the whitelist is enabled, if no IP address is added to the whitelist, the CLB instance does not distribute network traffic.
     * @example open_white_list
     *
     * @var string
     */
    public $accessControlStatus;

    /**
     * @description The frontend port that is used by the CLB instance.
     *
     * Valid values: **1 to 65535**.
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The frontend protocol that is used by the CLB instance.
     *
     * >  This parameter is required when listeners that use different protocols listen on the same port.
     * @example https
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The ID of the CLB instance.
     *
     * @example lb-8vb86hxixo8lvsja8****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region where the Classic Load Balancer (CLB) instance is created.
     *
     * You can call the [DescribeRegions](~~27584~~) operation to query the most recent region list.
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
    protected $_name = [
        'accessControlStatus'  => 'AccessControlStatus',
        'listenerPort'         => 'ListenerPort',
        'listenerProtocol'     => 'ListenerProtocol',
        'loadBalancerId'       => 'LoadBalancerId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlStatus) {
            $res['AccessControlStatus'] = $this->accessControlStatus;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetListenerAccessControlStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessControlStatus'])) {
            $model->accessControlStatus = $map['AccessControlStatus'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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

        return $model;
    }
}

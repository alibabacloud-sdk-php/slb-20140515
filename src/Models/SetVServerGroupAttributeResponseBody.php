<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\SetVServerGroupAttributeResponseBody\backendServers;
use AlibabaCloud\Tea\Model;

class SetVServerGroupAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $VServerGroupName;

    /**
     * @var backendServers[]
     */
    public $backendServers;
    protected $_name = [
        'VServerGroupId'   => 'VServerGroupId',
        'requestId'        => 'RequestId',
        'VServerGroupName' => 'VServerGroupName',
        'backendServers'   => 'BackendServers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->VServerGroupName) {
            $res['VServerGroupName'] = $this->VServerGroupName;
        }
        if (null !== $this->backendServers) {
            $res['BackendServers'] = [];
            if (null !== $this->backendServers && \is_array($this->backendServers)) {
                $n = 0;
                foreach ($this->backendServers as $item) {
                    $res['BackendServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetVServerGroupAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VServerGroupName'])) {
            $model->VServerGroupName = $map['VServerGroupName'];
        }
        if (isset($map['BackendServers'])) {
            if (!empty($map['BackendServers'])) {
                $model->backendServers = [];
                $n                     = 0;
                foreach ($map['BackendServers'] as $item) {
                    $model->backendServers[$n++] = null !== $item ? backendServers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
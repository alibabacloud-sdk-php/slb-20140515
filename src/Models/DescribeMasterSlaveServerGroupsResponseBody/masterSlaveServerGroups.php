<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups\associatedObjects;
use AlibabaCloud\Tea\Model;

class masterSlaveServerGroups extends Model
{
    /**
     * @var string
     */
    public $masterSlaveServerGroupId;

    /**
     * @var associatedObjects
     */
    public $associatedObjects;

    /**
     * @var string
     */
    public $masterSlaveServerGroupName;
    protected $_name = [
        'masterSlaveServerGroupId'   => 'MasterSlaveServerGroupId',
        'associatedObjects'          => 'AssociatedObjects',
        'masterSlaveServerGroupName' => 'MasterSlaveServerGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterSlaveServerGroupId) {
            $res['MasterSlaveServerGroupId'] = $this->masterSlaveServerGroupId;
        }
        if (null !== $this->associatedObjects) {
            $res['AssociatedObjects'] = null !== $this->associatedObjects ? $this->associatedObjects->toMap() : null;
        }
        if (null !== $this->masterSlaveServerGroupName) {
            $res['MasterSlaveServerGroupName'] = $this->masterSlaveServerGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return masterSlaveServerGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MasterSlaveServerGroupId'])) {
            $model->masterSlaveServerGroupId = $map['MasterSlaveServerGroupId'];
        }
        if (isset($map['AssociatedObjects'])) {
            $model->associatedObjects = associatedObjects::fromMap($map['AssociatedObjects']);
        }
        if (isset($map['MasterSlaveServerGroupName'])) {
            $model->masterSlaveServerGroupName = $map['MasterSlaveServerGroupName'];
        }

        return $model;
    }
}

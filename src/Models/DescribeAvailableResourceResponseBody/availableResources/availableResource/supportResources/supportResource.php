<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAvailableResourceResponseBody\availableResources\availableResource\supportResources;

use AlibabaCloud\Tea\Model;

class supportResource extends Model
{
    /**
     * @description The type of the IP address.
     *
     * Valid values: **ipv4 and ipv6**.
     * @example ipv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @description The network type.
     *
     * Valid values: **vpc, classic-internet, and classic-intranet**.
     * @example classic_internet
     *
     * @var string
     */
    public $addressType;
    protected $_name = [
        'addressIPVersion' => 'AddressIPVersion',
        'addressType'      => 'AddressType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponseBody\serverCertificates;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponseBody\serverCertificates\serverCertificate\subjectAlternativeNames;
use AlibabaCloud\Tea\Model;

class serverCertificate extends Model
{
    /**
     * @var string
     */
    public $aliCloudCertificateId;

    /**
     * @var string
     */
    public $aliCloudCertificateName;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimeStamp;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $expireTimeStamp;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var int
     */
    public $isAliCloudCertificate;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $serverCertificateId;

    /**
     * @var string
     */
    public $serverCertificateName;

    /**
     * @var subjectAlternativeNames
     */
    public $subjectAlternativeNames;
    protected $_name = [
        'aliCloudCertificateId'   => 'AliCloudCertificateId',
        'aliCloudCertificateName' => 'AliCloudCertificateName',
        'commonName'              => 'CommonName',
        'createTime'              => 'CreateTime',
        'createTimeStamp'         => 'CreateTimeStamp',
        'expireTime'              => 'ExpireTime',
        'expireTimeStamp'         => 'ExpireTimeStamp',
        'fingerprint'             => 'Fingerprint',
        'isAliCloudCertificate'   => 'IsAliCloudCertificate',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'serverCertificateId'     => 'ServerCertificateId',
        'serverCertificateName'   => 'ServerCertificateName',
        'subjectAlternativeNames' => 'SubjectAlternativeNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliCloudCertificateId) {
            $res['AliCloudCertificateId'] = $this->aliCloudCertificateId;
        }
        if (null !== $this->aliCloudCertificateName) {
            $res['AliCloudCertificateName'] = $this->aliCloudCertificateName;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expireTimeStamp) {
            $res['ExpireTimeStamp'] = $this->expireTimeStamp;
        }
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->isAliCloudCertificate) {
            $res['IsAliCloudCertificate'] = $this->isAliCloudCertificate;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->serverCertificateName) {
            $res['ServerCertificateName'] = $this->serverCertificateName;
        }
        if (null !== $this->subjectAlternativeNames) {
            $res['SubjectAlternativeNames'] = null !== $this->subjectAlternativeNames ? $this->subjectAlternativeNames->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverCertificate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliCloudCertificateId'])) {
            $model->aliCloudCertificateId = $map['AliCloudCertificateId'];
        }
        if (isset($map['AliCloudCertificateName'])) {
            $model->aliCloudCertificateName = $map['AliCloudCertificateName'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExpireTimeStamp'])) {
            $model->expireTimeStamp = $map['ExpireTimeStamp'];
        }
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['IsAliCloudCertificate'])) {
            $model->isAliCloudCertificate = $map['IsAliCloudCertificate'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['ServerCertificateName'])) {
            $model->serverCertificateName = $map['ServerCertificateName'];
        }
        if (isset($map['SubjectAlternativeNames'])) {
            $model->subjectAlternativeNames = subjectAlternativeNames::fromMap($map['SubjectAlternativeNames']);
        }

        return $model;
    }
}

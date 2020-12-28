<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\CreateLoadBalancerHTTPSListenerRequest\serverCertificate;
use AlibabaCloud\Tea\Model;

class CreateLoadBalancerHTTPSListenerRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var int
     */
    public $backendServerPort;

    /**
     * @var string
     */
    public $backendProtocol;

    /**
     * @var string
     */
    public $XForwardedFor;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var string
     */
    public $stickySession;

    /**
     * @var string
     */
    public $stickySessionType;

    /**
     * @var int
     */
    public $cookieTimeout;

    /**
     * @var string
     */
    public $cookie;

    /**
     * @var string
     */
    public $healthCheck;

    /**
     * @var string
     */
    public $healthCheckType;

    /**
     * @var string
     */
    public $healthCheckMethod;

    /**
     * @var string
     */
    public $healthCheckHttpVersion;

    /**
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @var string
     */
    public $healthCheckURI;

    /**
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var int
     */
    public $unhealthyThreshold;

    /**
     * @var int
     */
    public $healthCheckTimeout;

    /**
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @var string
     */
    public $serverCertificateId;

    /**
     * @var int
     */
    public $maxConnection;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var string
     */
    public $CACertificateId;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $XForwardedFor_SLBIP;

    /**
     * @var string
     */
    public $XForwardedFor_SLBID;

    /**
     * @var string
     */
    public $XForwardedFor_proto;

    /**
     * @var string
     */
    public $gzip;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string
     */
    public $aclStatus;

    /**
     * @var string
     */
    public $vpcIds;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var int
     */
    public $requestTimeout;

    /**
     * @var string
     */
    public $enableHttp2;

    /**
     * @var string
     */
    public $TLSCipherPolicy;

    /**
     * @var string
     */
    public $XForwardedFor_SLBPORT;

    /**
     * @var string
     */
    public $XForwardedFor_ClientSrcPort;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertSubjectDN;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertIssuerDN;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertFingerprint;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertClientVerify;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertIssuerDNAlias;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertSubjectDNAlias;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertFingerprintAlias;

    /**
     * @var string
     */
    public $XForwardedFor_ClientCertClientVerifyAlias;

    /**
     * @var serverCertificate[]
     */
    public $serverCertificate;
    protected $_name = [
        'regionId'                                  => 'RegionId',
        'ownerId'                                   => 'OwnerId',
        'resourceOwnerAccount'                      => 'ResourceOwnerAccount',
        'resourceOwnerId'                           => 'ResourceOwnerId',
        'loadBalancerId'                            => 'LoadBalancerId',
        'bandwidth'                                 => 'Bandwidth',
        'listenerPort'                              => 'ListenerPort',
        'backendServerPort'                         => 'BackendServerPort',
        'backendProtocol'                           => 'BackendProtocol',
        'XForwardedFor'                             => 'XForwardedFor',
        'scheduler'                                 => 'Scheduler',
        'stickySession'                             => 'StickySession',
        'stickySessionType'                         => 'StickySessionType',
        'cookieTimeout'                             => 'CookieTimeout',
        'cookie'                                    => 'Cookie',
        'healthCheck'                               => 'HealthCheck',
        'healthCheckType'                           => 'HealthCheckType',
        'healthCheckMethod'                         => 'HealthCheckMethod',
        'healthCheckHttpVersion'                    => 'HealthCheckHttpVersion',
        'healthCheckDomain'                         => 'HealthCheckDomain',
        'healthCheckURI'                            => 'HealthCheckURI',
        'healthyThreshold'                          => 'HealthyThreshold',
        'unhealthyThreshold'                        => 'UnhealthyThreshold',
        'healthCheckTimeout'                        => 'HealthCheckTimeout',
        'healthCheckConnectPort'                    => 'HealthCheckConnectPort',
        'healthCheckInterval'                       => 'HealthCheckInterval',
        'healthCheckHttpCode'                       => 'HealthCheckHttpCode',
        'serverCertificateId'                       => 'ServerCertificateId',
        'maxConnection'                             => 'MaxConnection',
        'ownerAccount'                              => 'OwnerAccount',
        'accessKeyId'                               => 'access_key_id',
        'VServerGroupId'                            => 'VServerGroupId',
        'CACertificateId'                           => 'CACertificateId',
        'tags'                                      => 'Tags',
        'XForwardedFor_SLBIP'                       => 'XForwardedFor_SLBIP',
        'XForwardedFor_SLBID'                       => 'XForwardedFor_SLBID',
        'XForwardedFor_proto'                       => 'XForwardedFor_proto',
        'gzip'                                      => 'Gzip',
        'aclId'                                     => 'AclId',
        'aclType'                                   => 'AclType',
        'aclStatus'                                 => 'AclStatus',
        'vpcIds'                                    => 'VpcIds',
        'description'                               => 'Description',
        'idleTimeout'                               => 'IdleTimeout',
        'requestTimeout'                            => 'RequestTimeout',
        'enableHttp2'                               => 'EnableHttp2',
        'TLSCipherPolicy'                           => 'TLSCipherPolicy',
        'XForwardedFor_SLBPORT'                     => 'XForwardedFor_SLBPORT',
        'XForwardedFor_ClientSrcPort'               => 'XForwardedFor_ClientSrcPort',
        'XForwardedFor_ClientCertSubjectDN'         => 'XForwardedFor_ClientCertSubjectDN',
        'XForwardedFor_ClientCertIssuerDN'          => 'XForwardedFor_ClientCertIssuerDN',
        'XForwardedFor_ClientCertFingerprint'       => 'XForwardedFor_ClientCertFingerprint',
        'XForwardedFor_ClientCertClientVerify'      => 'XForwardedFor_ClientCertClientVerify',
        'XForwardedFor_ClientCertIssuerDNAlias'     => 'XForwardedFor_ClientCertIssuerDNAlias',
        'XForwardedFor_ClientCertSubjectDNAlias'    => 'XForwardedFor_ClientCertSubjectDNAlias',
        'XForwardedFor_ClientCertFingerprintAlias'  => 'XForwardedFor_ClientCertFingerprintAlias',
        'XForwardedFor_ClientCertClientVerifyAlias' => 'XForwardedFor_ClientCertClientVerifyAlias',
        'serverCertificate'                         => 'ServerCertificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->backendProtocol) {
            $res['BackendProtocol'] = $this->backendProtocol;
        }
        if (null !== $this->XForwardedFor) {
            $res['XForwardedFor'] = $this->XForwardedFor;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->stickySession) {
            $res['StickySession'] = $this->stickySession;
        }
        if (null !== $this->stickySessionType) {
            $res['StickySessionType'] = $this->stickySessionType;
        }
        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }
        if (null !== $this->cookie) {
            $res['Cookie'] = $this->cookie;
        }
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = $this->healthCheck;
        }
        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }
        if (null !== $this->healthCheckMethod) {
            $res['HealthCheckMethod'] = $this->healthCheckMethod;
        }
        if (null !== $this->healthCheckHttpVersion) {
            $res['HealthCheckHttpVersion'] = $this->healthCheckHttpVersion;
        }
        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }
        if (null !== $this->healthCheckTimeout) {
            $res['HealthCheckTimeout'] = $this->healthCheckTimeout;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->maxConnection) {
            $res['MaxConnection'] = $this->maxConnection;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->accessKeyId) {
            $res['access_key_id'] = $this->accessKeyId;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->CACertificateId) {
            $res['CACertificateId'] = $this->CACertificateId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->XForwardedFor_SLBIP) {
            $res['XForwardedFor_SLBIP'] = $this->XForwardedFor_SLBIP;
        }
        if (null !== $this->XForwardedFor_SLBID) {
            $res['XForwardedFor_SLBID'] = $this->XForwardedFor_SLBID;
        }
        if (null !== $this->XForwardedFor_proto) {
            $res['XForwardedFor_proto'] = $this->XForwardedFor_proto;
        }
        if (null !== $this->gzip) {
            $res['Gzip'] = $this->gzip;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->vpcIds) {
            $res['VpcIds'] = $this->vpcIds;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }
        if (null !== $this->enableHttp2) {
            $res['EnableHttp2'] = $this->enableHttp2;
        }
        if (null !== $this->TLSCipherPolicy) {
            $res['TLSCipherPolicy'] = $this->TLSCipherPolicy;
        }
        if (null !== $this->XForwardedFor_SLBPORT) {
            $res['XForwardedFor_SLBPORT'] = $this->XForwardedFor_SLBPORT;
        }
        if (null !== $this->XForwardedFor_ClientSrcPort) {
            $res['XForwardedFor_ClientSrcPort'] = $this->XForwardedFor_ClientSrcPort;
        }
        if (null !== $this->XForwardedFor_ClientCertSubjectDN) {
            $res['XForwardedFor_ClientCertSubjectDN'] = $this->XForwardedFor_ClientCertSubjectDN;
        }
        if (null !== $this->XForwardedFor_ClientCertIssuerDN) {
            $res['XForwardedFor_ClientCertIssuerDN'] = $this->XForwardedFor_ClientCertIssuerDN;
        }
        if (null !== $this->XForwardedFor_ClientCertFingerprint) {
            $res['XForwardedFor_ClientCertFingerprint'] = $this->XForwardedFor_ClientCertFingerprint;
        }
        if (null !== $this->XForwardedFor_ClientCertClientVerify) {
            $res['XForwardedFor_ClientCertClientVerify'] = $this->XForwardedFor_ClientCertClientVerify;
        }
        if (null !== $this->XForwardedFor_ClientCertIssuerDNAlias) {
            $res['XForwardedFor_ClientCertIssuerDNAlias'] = $this->XForwardedFor_ClientCertIssuerDNAlias;
        }
        if (null !== $this->XForwardedFor_ClientCertSubjectDNAlias) {
            $res['XForwardedFor_ClientCertSubjectDNAlias'] = $this->XForwardedFor_ClientCertSubjectDNAlias;
        }
        if (null !== $this->XForwardedFor_ClientCertFingerprintAlias) {
            $res['XForwardedFor_ClientCertFingerprintAlias'] = $this->XForwardedFor_ClientCertFingerprintAlias;
        }
        if (null !== $this->XForwardedFor_ClientCertClientVerifyAlias) {
            $res['XForwardedFor_ClientCertClientVerifyAlias'] = $this->XForwardedFor_ClientCertClientVerifyAlias;
        }
        if (null !== $this->serverCertificate) {
            $res['ServerCertificate'] = [];
            if (null !== $this->serverCertificate && \is_array($this->serverCertificate)) {
                $n = 0;
                foreach ($this->serverCertificate as $item) {
                    $res['ServerCertificate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoadBalancerHTTPSListenerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['BackendProtocol'])) {
            $model->backendProtocol = $map['BackendProtocol'];
        }
        if (isset($map['XForwardedFor'])) {
            $model->XForwardedFor = $map['XForwardedFor'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['StickySession'])) {
            $model->stickySession = $map['StickySession'];
        }
        if (isset($map['StickySessionType'])) {
            $model->stickySessionType = $map['StickySessionType'];
        }
        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
        }
        if (isset($map['Cookie'])) {
            $model->cookie = $map['Cookie'];
        }
        if (isset($map['HealthCheck'])) {
            $model->healthCheck = $map['HealthCheck'];
        }
        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }
        if (isset($map['HealthCheckMethod'])) {
            $model->healthCheckMethod = $map['HealthCheckMethod'];
        }
        if (isset($map['HealthCheckHttpVersion'])) {
            $model->healthCheckHttpVersion = $map['HealthCheckHttpVersion'];
        }
        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }
        if (isset($map['HealthCheckTimeout'])) {
            $model->healthCheckTimeout = $map['HealthCheckTimeout'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['MaxConnection'])) {
            $model->maxConnection = $map['MaxConnection'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['access_key_id'])) {
            $model->accessKeyId = $map['access_key_id'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['CACertificateId'])) {
            $model->CACertificateId = $map['CACertificateId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['XForwardedFor_SLBIP'])) {
            $model->XForwardedFor_SLBIP = $map['XForwardedFor_SLBIP'];
        }
        if (isset($map['XForwardedFor_SLBID'])) {
            $model->XForwardedFor_SLBID = $map['XForwardedFor_SLBID'];
        }
        if (isset($map['XForwardedFor_proto'])) {
            $model->XForwardedFor_proto = $map['XForwardedFor_proto'];
        }
        if (isset($map['Gzip'])) {
            $model->gzip = $map['Gzip'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['VpcIds'])) {
            $model->vpcIds = $map['VpcIds'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }
        if (isset($map['EnableHttp2'])) {
            $model->enableHttp2 = $map['EnableHttp2'];
        }
        if (isset($map['TLSCipherPolicy'])) {
            $model->TLSCipherPolicy = $map['TLSCipherPolicy'];
        }
        if (isset($map['XForwardedFor_SLBPORT'])) {
            $model->XForwardedFor_SLBPORT = $map['XForwardedFor_SLBPORT'];
        }
        if (isset($map['XForwardedFor_ClientSrcPort'])) {
            $model->XForwardedFor_ClientSrcPort = $map['XForwardedFor_ClientSrcPort'];
        }
        if (isset($map['XForwardedFor_ClientCertSubjectDN'])) {
            $model->XForwardedFor_ClientCertSubjectDN = $map['XForwardedFor_ClientCertSubjectDN'];
        }
        if (isset($map['XForwardedFor_ClientCertIssuerDN'])) {
            $model->XForwardedFor_ClientCertIssuerDN = $map['XForwardedFor_ClientCertIssuerDN'];
        }
        if (isset($map['XForwardedFor_ClientCertFingerprint'])) {
            $model->XForwardedFor_ClientCertFingerprint = $map['XForwardedFor_ClientCertFingerprint'];
        }
        if (isset($map['XForwardedFor_ClientCertClientVerify'])) {
            $model->XForwardedFor_ClientCertClientVerify = $map['XForwardedFor_ClientCertClientVerify'];
        }
        if (isset($map['XForwardedFor_ClientCertIssuerDNAlias'])) {
            $model->XForwardedFor_ClientCertIssuerDNAlias = $map['XForwardedFor_ClientCertIssuerDNAlias'];
        }
        if (isset($map['XForwardedFor_ClientCertSubjectDNAlias'])) {
            $model->XForwardedFor_ClientCertSubjectDNAlias = $map['XForwardedFor_ClientCertSubjectDNAlias'];
        }
        if (isset($map['XForwardedFor_ClientCertFingerprintAlias'])) {
            $model->XForwardedFor_ClientCertFingerprintAlias = $map['XForwardedFor_ClientCertFingerprintAlias'];
        }
        if (isset($map['XForwardedFor_ClientCertClientVerifyAlias'])) {
            $model->XForwardedFor_ClientCertClientVerifyAlias = $map['XForwardedFor_ClientCertClientVerifyAlias'];
        }
        if (isset($map['ServerCertificate'])) {
            if (!empty($map['ServerCertificate'])) {
                $model->serverCertificate = [];
                $n                        = 0;
                foreach ($map['ServerCertificate'] as $item) {
                    $model->serverCertificate[$n++] = null !== $item ? serverCertificate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

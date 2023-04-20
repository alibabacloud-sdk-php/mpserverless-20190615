<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class UpdateServicePolicyRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $collectionName;

    /**
     * @example {\".write\":false,\".read\":true}
     *
     * @var string
     */
    public $policy;

    /**
     * @example EXTENDED
     *
     * @var string
     */
    public $policyName;

    /**
     * @example db
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example 0e16bb12-14af-****-b24c-5ac1a9a7bb9f
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'collectionName' => 'CollectionName',
        'policy'         => 'Policy',
        'policyName'     => 'PolicyName',
        'serviceName'    => 'ServiceName',
        'spaceId'        => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectionName) {
            $res['CollectionName'] = $this->collectionName;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServicePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectionName'])) {
            $model->collectionName = $map['CollectionName'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}

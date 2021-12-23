<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\RunFunctionResponseBody;

use AlibabaCloud\Tea\Model;

class runtimeMeta extends Model
{
    /**
     * @var int
     */
    public $billingDuration;

    /**
     * @var int
     */
    public $invocationDuration;

    /**
     * @var int
     */
    public $maxMemoryUsage;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'billingDuration'    => 'BillingDuration',
        'invocationDuration' => 'InvocationDuration',
        'maxMemoryUsage'     => 'MaxMemoryUsage',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingDuration) {
            $res['BillingDuration'] = $this->billingDuration;
        }
        if (null !== $this->invocationDuration) {
            $res['InvocationDuration'] = $this->invocationDuration;
        }
        if (null !== $this->maxMemoryUsage) {
            $res['MaxMemoryUsage'] = $this->maxMemoryUsage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runtimeMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillingDuration'])) {
            $model->billingDuration = $map['BillingDuration'];
        }
        if (isset($map['InvocationDuration'])) {
            $model->invocationDuration = $map['InvocationDuration'];
        }
        if (isset($map['MaxMemoryUsage'])) {
            $model->maxMemoryUsage = $map['MaxMemoryUsage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

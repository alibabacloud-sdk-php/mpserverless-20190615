<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\UpdateFunctionResponseBody\spec;
use AlibabaCloud\Tea\Model;

class UpdateFunctionResponseBody extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $httpTriggerPath;

    /**
     * @var string
     */
    public $modifiedAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var spec
     */
    public $spec;

    /**
     * @var string
     */
    public $timingTriggerConfig;
    protected $_name = [
        'createdAt'           => 'CreatedAt',
        'desc'                => 'Desc',
        'httpTriggerPath'     => 'HttpTriggerPath',
        'modifiedAt'          => 'ModifiedAt',
        'name'                => 'Name',
        'requestId'           => 'RequestId',
        'spec'                => 'Spec',
        'timingTriggerConfig' => 'TimingTriggerConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->httpTriggerPath) {
            $res['HttpTriggerPath'] = $this->httpTriggerPath;
        }
        if (null !== $this->modifiedAt) {
            $res['ModifiedAt'] = $this->modifiedAt;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toMap() : null;
        }
        if (null !== $this->timingTriggerConfig) {
            $res['TimingTriggerConfig'] = $this->timingTriggerConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFunctionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['HttpTriggerPath'])) {
            $model->httpTriggerPath = $map['HttpTriggerPath'];
        }
        if (isset($map['ModifiedAt'])) {
            $model->modifiedAt = $map['ModifiedAt'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = spec::fromMap($map['Spec']);
        }
        if (isset($map['TimingTriggerConfig'])) {
            $model->timingTriggerConfig = $map['TimingTriggerConfig'];
        }

        return $model;
    }
}

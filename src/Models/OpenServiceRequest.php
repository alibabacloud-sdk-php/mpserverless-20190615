<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class OpenServiceRequest extends Model
{
    /**
     * @example CLOUD_FUNCTION
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example 226e5213-697c-4a52-b4ff-xxxxx
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'serviceName' => 'ServiceName',
        'spaceId'     => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return OpenServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CheckMpServerlessRoleExistsResponseBody extends Model
{
    /**
     * @var bool
     */
    public $exists;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exists'    => 'Exists',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exists) {
            $res['Exists'] = $this->exists;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckMpServerlessRoleExistsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Exists'])) {
            $model->exists = $map['Exists'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

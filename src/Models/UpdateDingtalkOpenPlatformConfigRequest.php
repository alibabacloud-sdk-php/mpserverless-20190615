<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class UpdateDingtalkOpenPlatformConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appSecret;

    /**
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'appId'     => 'AppId',
        'appSecret' => 'AppSecret',
        'spaceId'   => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDingtalkOpenPlatformConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}

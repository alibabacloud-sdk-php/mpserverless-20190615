<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CreateFunctionRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $runtime;
    protected $_name = [
        'name'    => 'Name',
        'desc'    => 'Desc',
        'spaceId' => 'SpaceId',
        'runtime' => 'Runtime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->runtime) {
            $res['Runtime'] = $this->runtime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['Runtime'])) {
            $model->runtime = $map['Runtime'];
        }

        return $model;
    }
}

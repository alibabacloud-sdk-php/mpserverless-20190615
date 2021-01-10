<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSpaceResponseBody;

use AlibabaCloud\Tea\Model;

class spaces extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'status'    => 'Status',
        'spaceId'   => 'SpaceId',
        'gmtCreate' => 'GmtCreate',
        'name'      => 'Name',
        'desc'      => 'Desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}

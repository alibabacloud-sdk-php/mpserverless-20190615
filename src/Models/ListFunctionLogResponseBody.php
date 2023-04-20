<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionLogResponseBody\dataList;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionLogResponseBody\paginator;
use AlibabaCloud\Tea\Model;

class ListFunctionLogResponseBody extends Model
{
    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var paginator
     */
    public $paginator;

    /**
     * @example C293BB03-B6AD-46C2-80D1-19C8FB573916
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataList'  => 'DataList',
        'paginator' => 'Paginator',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataList) {
            $res['DataList'] = [];
            if (null !== $this->dataList && \is_array($this->dataList)) {
                $n = 0;
                foreach ($this->dataList as $item) {
                    $res['DataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->paginator) {
            $res['Paginator'] = null !== $this->paginator ? $this->paginator->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataList'])) {
            if (!empty($map['DataList'])) {
                $model->dataList = [];
                $n               = 0;
                foreach ($map['DataList'] as $item) {
                    $model->dataList[$n++] = null !== $item ? dataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Paginator'])) {
            $model->paginator = paginator::fromMap($map['Paginator']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

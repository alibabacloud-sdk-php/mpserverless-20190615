<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionDeploymentResponseBody\dataList;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionDeploymentResponseBody\paginator;
use AlibabaCloud\Tea\Model;

class ListFunctionDeploymentResponseBody extends Model
{
    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var paginator
     */
    public $paginator;
    protected $_name = [
        'dataList'  => 'DataList',
        'requestId' => 'RequestId',
        'paginator' => 'Paginator',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->paginator) {
            $res['Paginator'] = null !== $this->paginator ? $this->paginator->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionDeploymentResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Paginator'])) {
            $model->paginator = paginator::fromMap($map['Paginator']);
        }

        return $model;
    }
}

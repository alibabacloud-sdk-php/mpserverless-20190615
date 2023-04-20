<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class ListFunctionLogRequest extends Model
{
    /**
     * @example 1560134212326
     *
     * @var int
     */
    public $fromDate;

    /**
     * @example 0a206a521561344642018387523432
     *
     * @var string
     */
    public $logRequestId;

    /**
     * @example demoFunction
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example dece4ea0-****-4cfa-8514-8a88d205e2b8
     *
     * @var string
     */
    public $spaceId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example 1560134212326
     *
     * @var int
     */
    public $toDate;
    protected $_name = [
        'fromDate'     => 'FromDate',
        'logRequestId' => 'LogRequestId',
        'name'         => 'Name',
        'pageNum'      => 'PageNum',
        'pageSize'     => 'PageSize',
        'spaceId'      => 'SpaceId',
        'status'       => 'Status',
        'toDate'       => 'ToDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromDate) {
            $res['FromDate'] = $this->fromDate;
        }
        if (null !== $this->logRequestId) {
            $res['LogRequestId'] = $this->logRequestId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->toDate) {
            $res['ToDate'] = $this->toDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromDate'])) {
            $model->fromDate = $map['FromDate'];
        }
        if (isset($map['LogRequestId'])) {
            $model->logRequestId = $map['LogRequestId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ToDate'])) {
            $model->toDate = $map['ToDate'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingDomainVerificationContentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example verify_c28a8e24b4bc9fab22d949cebdb1d7ae
     *
     * @var string
     */
    public $content;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domain;
    protected $_name = [
        'content' => 'Content',
        'domain'  => 'Domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}

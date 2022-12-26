<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeFaqResponseBody;

use AlibabaCloud\Tea\Model;

class simQuestions extends Model
{
    /**
     * @example 2022-05-26T10:24:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2022-05-29T03:55:07Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 10000000581
     *
     * @var int
     */
    public $simQuestionId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'modifyTime'    => 'ModifyTime',
        'simQuestionId' => 'SimQuestionId',
        'title'         => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->simQuestionId) {
            $res['SimQuestionId'] = $this->simQuestionId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return simQuestions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['SimQuestionId'])) {
            $model->simQuestionId = $map['SimQuestionId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}

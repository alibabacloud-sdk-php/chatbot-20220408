<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class ContinueInstancePublishTaskResponseBody extends Model
{
    /**
     * @description 业务类型列表
     *
     * @var string[]
     */
    public $bizTypeList;

    /**
     * @description 任务创建的 UTC 时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description job失败信息
     *
     * @var string
     */
    public $error;

    /**
     * @description 各子发布模块的错误信息，key是子发布模块，value是错误信息
     *
     * @var mixed[]
     */
    public $errors;

    /**
     * @description 任务Id
     *
     * @var int
     */
    public $id;

    /**
     * @description 任务修改的 UTC 时间
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 任务Id
     *
     * @var string
     */
    public $response;

    /**
     * @description 任务状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 各子发布模块的警告信息，key是子发布模块，value是警告信息
     *
     * @var mixed[]
     */
    public $warnings;
    protected $_name = [
        'bizTypeList' => 'BizTypeList',
        'createTime'  => 'CreateTime',
        'error'       => 'Error',
        'errors'      => 'Errors',
        'id'          => 'Id',
        'modifyTime'  => 'ModifyTime',
        'requestId'   => 'RequestId',
        'response'    => 'Response',
        'status'      => 'Status',
        'warnings'    => 'Warnings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTypeList) {
            $res['BizTypeList'] = $this->bizTypeList;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->errors) {
            $res['Errors'] = $this->errors;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->response) {
            $res['Response'] = $this->response;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->warnings) {
            $res['Warnings'] = $this->warnings;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContinueInstancePublishTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTypeList'])) {
            if (!empty($map['BizTypeList'])) {
                $model->bizTypeList = $map['BizTypeList'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['Errors'])) {
            $model->errors = $map['Errors'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Response'])) {
            $model->response = $map['Response'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Warnings'])) {
            $model->warnings = $map['Warnings'];
        }

        return $model;
    }
}

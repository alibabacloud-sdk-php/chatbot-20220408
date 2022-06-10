<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserSayShrinkRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description 机器人ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $userSayDefinitionShrink;

    /**
     * @description 用户话术ID
     *
     * @var int
     */
    public $userSayId;
    protected $_name = [
        'agentKey'                => 'AgentKey',
        'instanceId'              => 'InstanceId',
        'userSayDefinitionShrink' => 'UserSayDefinition',
        'userSayId'               => 'UserSayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->userSayDefinitionShrink) {
            $res['UserSayDefinition'] = $this->userSayDefinitionShrink;
        }
        if (null !== $this->userSayId) {
            $res['UserSayId'] = $this->userSayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserSayShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserSayDefinition'])) {
            $model->userSayDefinitionShrink = $map['UserSayDefinition'];
        }
        if (isset($map['UserSayId'])) {
            $model->userSayId = $map['UserSayId'];
        }

        return $model;
    }
}

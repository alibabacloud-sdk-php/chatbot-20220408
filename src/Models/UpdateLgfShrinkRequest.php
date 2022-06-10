<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class UpdateLgfShrinkRequest extends Model
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
    public $lgfDefinitionShrink;

    /**
     * @description LGF ID
     *
     * @var int
     */
    public $lgfId;
    protected $_name = [
        'agentKey'            => 'AgentKey',
        'instanceId'          => 'InstanceId',
        'lgfDefinitionShrink' => 'LgfDefinition',
        'lgfId'               => 'LgfId',
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
        if (null !== $this->lgfDefinitionShrink) {
            $res['LgfDefinition'] = $this->lgfDefinitionShrink;
        }
        if (null !== $this->lgfId) {
            $res['LgfId'] = $this->lgfId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLgfShrinkRequest
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
        if (isset($map['LgfDefinition'])) {
            $model->lgfDefinitionShrink = $map['LgfDefinition'];
        }
        if (isset($map['LgfId'])) {
            $model->lgfId = $map['LgfId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class ListTongyiChatHistorysResponseBody extends Model
{
    /**
     * @example 116
     *
     * @var string
     */
    public $costTime;

    /**
     * @var mixed[][]
     */
    public $datas;

    /**
     * @example D0DDFC4C-D66D-4787-9AE4-4D757481EDEE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'costTime'  => 'CostTime',
        'datas'     => 'Datas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }
        if (null !== $this->datas) {
            $res['Datas'] = $this->datas;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTongyiChatHistorysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }
        if (isset($map['Datas'])) {
            if (!empty($map['Datas'])) {
                $model->datas = $map['Datas'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

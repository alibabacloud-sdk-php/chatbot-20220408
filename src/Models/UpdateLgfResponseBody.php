<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class UpdateLgfResponseBody extends Model
{
    /**
     * @example 2342556223532
     *
     * @var int
     */
    public $lgfId;

    /**
     * @example 289dfa131adf23wqe2r
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'lgfId'     => 'LgfId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lgfId) {
            $res['LgfId'] = $this->lgfId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLgfResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LgfId'])) {
            $model->lgfId = $map['LgfId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

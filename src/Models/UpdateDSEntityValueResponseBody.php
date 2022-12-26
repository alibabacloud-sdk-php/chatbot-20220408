<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class UpdateDSEntityValueResponseBody extends Model
{
    /**
     * @example 2342377423
     *
     * @var int
     */
    public $entityValueId;

    /**
     * @example sDag3g43wesf2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'entityValueId' => 'EntityValueId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityValueId) {
            $res['EntityValueId'] = $this->entityValueId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDSEntityValueResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityValueId'])) {
            $model->entityValueId = $map['EntityValueId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

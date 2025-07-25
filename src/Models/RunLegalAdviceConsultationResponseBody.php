<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunLegalAdviceConsultationResponseBody\usage;

class RunLegalAdviceConsultationResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $responseMarkdown;

    /**
     * @var int
     */
    public $round;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var usage
     */
    public $usage;

    /**
     * @var string
     */
    public $contents;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $httpStatusCode;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'responseMarkdown' => 'ResponseMarkdown',
        'round' => 'Round',
        'status' => 'Status',
        'success' => 'Success',
        'usage' => 'Usage',
        'contents' => 'contents',
        'extra' => 'extra',
        'httpStatusCode' => 'httpStatusCode',
    ];

    public function validate()
    {
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->responseMarkdown) {
            $res['ResponseMarkdown'] = $this->responseMarkdown;
        }

        if (null !== $this->round) {
            $res['Round'] = $this->round;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->usage) {
            $res['Usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
        }

        if (null !== $this->contents) {
            $res['contents'] = $this->contents;
        }

        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        if (null !== $this->httpStatusCode) {
            $res['httpStatusCode'] = $this->httpStatusCode;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResponseMarkdown'])) {
            $model->responseMarkdown = $map['ResponseMarkdown'];
        }

        if (isset($map['Round'])) {
            $model->round = $map['Round'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Usage'])) {
            $model->usage = usage::fromMap($map['Usage']);
        }

        if (isset($map['contents'])) {
            $model->contents = $map['contents'];
        }

        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        if (isset($map['httpStatusCode'])) {
            $model->httpStatusCode = $map['httpStatusCode'];
        }

        return $model;
    }
}

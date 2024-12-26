<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextRequest;

use AlibabaCloud\Tea\Model;

class filterCondition extends Model
{
    /**
     * @var string
     */
    public $caseNo;

    /**
     * @var string
     */
    public $caseTitle;
    protected $_name = [
        'caseNo'    => 'caseNo',
        'caseTitle' => 'caseTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caseNo) {
            $res['caseNo'] = $this->caseNo;
        }
        if (null !== $this->caseTitle) {
            $res['caseTitle'] = $this->caseTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterCondition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['caseNo'])) {
            $model->caseNo = $map['caseNo'];
        }
        if (isset($map['caseTitle'])) {
            $model->caseTitle = $map['caseTitle'];
        }

        return $model;
    }
}

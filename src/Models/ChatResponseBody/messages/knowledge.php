<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages\knowledge\relatedKnowledges;
use AlibabaCloud\Tea\Model;

class knowledge extends Model
{
    /**
     * @example KnowledgeBase
     *
     * @var string
     */
    public $answerSource;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $content;

    /**
     * @example PLAIN_TEXT
     *
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $hitStatement;

    /**
     * @example 735898
     *
     * @var string
     */
    public $id;

    /**
     * @var relatedKnowledges[]
     */
    public $relatedKnowledges;

    /**
     * @example 0.998
     *
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'answerSource'      => 'AnswerSource',
        'category'          => 'Category',
        'content'           => 'Content',
        'contentType'       => 'ContentType',
        'hitStatement'      => 'HitStatement',
        'id'                => 'Id',
        'relatedKnowledges' => 'RelatedKnowledges',
        'score'             => 'Score',
        'summary'           => 'Summary',
        'title'             => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerSource) {
            $res['AnswerSource'] = $this->answerSource;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->hitStatement) {
            $res['HitStatement'] = $this->hitStatement;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->relatedKnowledges) {
            $res['RelatedKnowledges'] = [];
            if (null !== $this->relatedKnowledges && \is_array($this->relatedKnowledges)) {
                $n = 0;
                foreach ($this->relatedKnowledges as $item) {
                    $res['RelatedKnowledges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return knowledge
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnswerSource'])) {
            $model->answerSource = $map['AnswerSource'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['HitStatement'])) {
            $model->hitStatement = $map['HitStatement'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RelatedKnowledges'])) {
            if (!empty($map['RelatedKnowledges'])) {
                $model->relatedKnowledges = [];
                $n                        = 0;
                foreach ($map['RelatedKnowledges'] as $item) {
                    $model->relatedKnowledges[$n++] = null !== $item ? relatedKnowledges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}

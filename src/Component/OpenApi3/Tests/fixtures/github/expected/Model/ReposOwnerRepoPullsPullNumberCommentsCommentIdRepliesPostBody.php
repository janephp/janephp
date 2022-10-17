<?php

namespace Github\Model;

class ReposOwnerRepoPullsPullNumberCommentsCommentIdRepliesPostBody extends \ArrayObject
{
    /**
     * The text of the review comment.
     *
     * @var string
     */
    protected $body;
    /**
     * The text of the review comment.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The text of the review comment.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->body = $body;
        return $this;
    }
}
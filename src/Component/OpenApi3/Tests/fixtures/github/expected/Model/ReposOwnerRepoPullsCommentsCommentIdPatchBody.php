<?php

namespace Github\Model;

class ReposOwnerRepoPullsCommentsCommentIdPatchBody extends \ArrayObject
{
    /**
     * The text of the reply to the review comment.
     *
     * @var string
     */
    protected $body;
    /**
     * The text of the reply to the review comment.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The text of the reply to the review comment.
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
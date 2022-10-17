<?php

namespace Github\Model;

class ReposOwnerRepoPullsPullNumberReviewsReviewIdPutBody extends \ArrayObject
{
    /**
     * The body text of the pull request review.
     *
     * @var string
     */
    protected $body;
    /**
     * The body text of the pull request review.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The body text of the pull request review.
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
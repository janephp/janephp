<?php

namespace Github\Model;

class ReposOwnerRepoPullsPullNumberReviewsReviewIdPutBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['body'] = true;
        $this->body = $body;
        return $this;
    }
}
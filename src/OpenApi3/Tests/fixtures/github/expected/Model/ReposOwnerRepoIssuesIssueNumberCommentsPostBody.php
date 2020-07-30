<?php

namespace Github\Model;

class ReposOwnerRepoIssuesIssueNumberCommentsPostBody
{
    /**
     * The contents of the comment.
     *
     * @var string
     */
    protected $body;
    /**
     * The contents of the comment.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The contents of the comment.
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
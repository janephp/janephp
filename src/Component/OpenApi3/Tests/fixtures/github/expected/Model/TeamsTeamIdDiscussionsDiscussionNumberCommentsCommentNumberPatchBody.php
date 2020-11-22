<?php

namespace Github\Model;

class TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberPatchBody
{
    /**
     * The discussion comment's body text.
     *
     * @var string
     */
    protected $body;
    /**
     * The discussion comment's body text.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The discussion comment's body text.
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
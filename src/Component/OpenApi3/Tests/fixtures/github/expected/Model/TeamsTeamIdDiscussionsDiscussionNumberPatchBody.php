<?php

namespace Github\Model;

class TeamsTeamIdDiscussionsDiscussionNumberPatchBody
{
    /**
     * The discussion post's title.
     *
     * @var string
     */
    protected $title;
    /**
     * The discussion post's body text.
     *
     * @var string
     */
    protected $body;
    /**
     * The discussion post's title.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The discussion post's title.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * The discussion post's body text.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The discussion post's body text.
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
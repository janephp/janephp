<?php

namespace Github\Model;

class TeamsTeamIdDiscussionsDiscussionNumberReactionsPostBody
{
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the team discussion.
     *
     * @var string
     */
    protected $content;
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the team discussion.
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the team discussion.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content) : self
    {
        $this->content = $content;
        return $this;
    }
}
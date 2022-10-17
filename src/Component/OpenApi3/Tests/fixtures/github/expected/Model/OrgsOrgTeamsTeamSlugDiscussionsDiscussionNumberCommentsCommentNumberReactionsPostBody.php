<?php

namespace Github\Model;

class OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody extends \ArrayObject
{
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the team discussion comment.
     *
     * @var string
     */
    protected $content;
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the team discussion comment.
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the team discussion comment.
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
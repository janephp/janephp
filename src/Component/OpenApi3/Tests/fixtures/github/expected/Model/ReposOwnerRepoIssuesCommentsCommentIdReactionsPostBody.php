<?php

namespace Github\Model;

class ReposOwnerRepoIssuesCommentsCommentIdReactionsPostBody
{
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the issue comment.
     *
     * @var string
     */
    protected $content;
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the issue comment.
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the issue comment.
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
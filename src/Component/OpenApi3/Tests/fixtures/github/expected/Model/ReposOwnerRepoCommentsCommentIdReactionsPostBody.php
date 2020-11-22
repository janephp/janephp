<?php

namespace Github\Model;

class ReposOwnerRepoCommentsCommentIdReactionsPostBody
{
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the commit comment.
     *
     * @var string
     */
    protected $content;
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the commit comment.
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the commit comment.
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
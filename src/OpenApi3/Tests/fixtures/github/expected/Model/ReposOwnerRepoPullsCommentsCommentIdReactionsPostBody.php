<?php

namespace Github\Model;

class ReposOwnerRepoPullsCommentsCommentIdReactionsPostBody
{
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the pull request review comment.
     *
     * @var string
     */
    protected $content;
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the pull request review comment.
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * The [reaction type](https://developer.github.com/v3/reactions/#reaction-types) to add to the pull request review comment.
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
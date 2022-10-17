<?php

namespace Github\Model;

class ReposOwnerRepoMergesPostBody extends \ArrayObject
{
    /**
     * The name of the base branch that the head will be merged into.
     *
     * @var string
     */
    protected $base;
    /**
     * The head to merge. This can be a branch name or a commit SHA1.
     *
     * @var string
     */
    protected $head;
    /**
     * Commit message to use for the merge commit. If omitted, a default message will be used.
     *
     * @var string
     */
    protected $commitMessage;
    /**
     * The name of the base branch that the head will be merged into.
     *
     * @return string
     */
    public function getBase() : string
    {
        return $this->base;
    }
    /**
     * The name of the base branch that the head will be merged into.
     *
     * @param string $base
     *
     * @return self
     */
    public function setBase(string $base) : self
    {
        $this->base = $base;
        return $this;
    }
    /**
     * The head to merge. This can be a branch name or a commit SHA1.
     *
     * @return string
     */
    public function getHead() : string
    {
        return $this->head;
    }
    /**
     * The head to merge. This can be a branch name or a commit SHA1.
     *
     * @param string $head
     *
     * @return self
     */
    public function setHead(string $head) : self
    {
        $this->head = $head;
        return $this;
    }
    /**
     * Commit message to use for the merge commit. If omitted, a default message will be used.
     *
     * @return string
     */
    public function getCommitMessage() : string
    {
        return $this->commitMessage;
    }
    /**
     * Commit message to use for the merge commit. If omitted, a default message will be used.
     *
     * @param string $commitMessage
     *
     * @return self
     */
    public function setCommitMessage(string $commitMessage) : self
    {
        $this->commitMessage = $commitMessage;
        return $this;
    }
}
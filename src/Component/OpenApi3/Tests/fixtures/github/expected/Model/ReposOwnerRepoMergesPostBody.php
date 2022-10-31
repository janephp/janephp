<?php

namespace Github\Model;

class ReposOwnerRepoMergesPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['base'] = true;
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
        $this->initialized['head'] = true;
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
        $this->initialized['commitMessage'] = true;
        $this->commitMessage = $commitMessage;
        return $this;
    }
}
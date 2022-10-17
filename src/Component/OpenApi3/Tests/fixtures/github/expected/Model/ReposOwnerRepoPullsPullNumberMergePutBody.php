<?php

namespace Github\Model;

class ReposOwnerRepoPullsPullNumberMergePutBody extends \ArrayObject
{
    /**
     * Title for the automatic commit message.
     *
     * @var string
     */
    protected $commitTitle;
    /**
     * Extra detail to append to automatic commit message.
     *
     * @var string
     */
    protected $commitMessage;
    /**
     * SHA that pull request head must match to allow merge.
     *
     * @var string
     */
    protected $sha;
    /**
     * Merge method to use. Possible values are `merge`, `squash` or `rebase`. Default is `merge`.
     *
     * @var string
     */
    protected $mergeMethod;
    /**
     * Title for the automatic commit message.
     *
     * @return string
     */
    public function getCommitTitle() : string
    {
        return $this->commitTitle;
    }
    /**
     * Title for the automatic commit message.
     *
     * @param string $commitTitle
     *
     * @return self
     */
    public function setCommitTitle(string $commitTitle) : self
    {
        $this->commitTitle = $commitTitle;
        return $this;
    }
    /**
     * Extra detail to append to automatic commit message.
     *
     * @return string
     */
    public function getCommitMessage() : string
    {
        return $this->commitMessage;
    }
    /**
     * Extra detail to append to automatic commit message.
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
    /**
     * SHA that pull request head must match to allow merge.
     *
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * SHA that pull request head must match to allow merge.
     *
     * @param string $sha
     *
     * @return self
     */
    public function setSha(string $sha) : self
    {
        $this->sha = $sha;
        return $this;
    }
    /**
     * Merge method to use. Possible values are `merge`, `squash` or `rebase`. Default is `merge`.
     *
     * @return string
     */
    public function getMergeMethod() : string
    {
        return $this->mergeMethod;
    }
    /**
     * Merge method to use. Possible values are `merge`, `squash` or `rebase`. Default is `merge`.
     *
     * @param string $mergeMethod
     *
     * @return self
     */
    public function setMergeMethod(string $mergeMethod) : self
    {
        $this->mergeMethod = $mergeMethod;
        return $this;
    }
}
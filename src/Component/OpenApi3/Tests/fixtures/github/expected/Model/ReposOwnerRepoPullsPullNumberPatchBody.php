<?php

namespace Github\Model;

class ReposOwnerRepoPullsPullNumberPatchBody extends \ArrayObject
{
    /**
     * The title of the pull request.
     *
     * @var string
     */
    protected $title;
    /**
     * The contents of the pull request.
     *
     * @var string
     */
    protected $body;
    /**
     * State of this Pull Request. Either `open` or `closed`.
     *
     * @var string
     */
    protected $state;
    /**
     * The name of the branch you want your changes pulled into. This should be an existing branch on the current repository. You cannot update the base branch on a pull request to point to another repository.
     *
     * @var string
     */
    protected $base;
    /**
     * Indicates whether [maintainers can modify](https://help.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     *
     * @var bool
     */
    protected $maintainerCanModify;
    /**
     * The title of the pull request.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the pull request.
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
     * The contents of the pull request.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The contents of the pull request.
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
    /**
     * State of this Pull Request. Either `open` or `closed`.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * State of this Pull Request. Either `open` or `closed`.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * The name of the branch you want your changes pulled into. This should be an existing branch on the current repository. You cannot update the base branch on a pull request to point to another repository.
     *
     * @return string
     */
    public function getBase() : string
    {
        return $this->base;
    }
    /**
     * The name of the branch you want your changes pulled into. This should be an existing branch on the current repository. You cannot update the base branch on a pull request to point to another repository.
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
     * Indicates whether [maintainers can modify](https://help.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     *
     * @return bool
     */
    public function getMaintainerCanModify() : bool
    {
        return $this->maintainerCanModify;
    }
    /**
     * Indicates whether [maintainers can modify](https://help.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     *
     * @param bool $maintainerCanModify
     *
     * @return self
     */
    public function setMaintainerCanModify(bool $maintainerCanModify) : self
    {
        $this->maintainerCanModify = $maintainerCanModify;
        return $this;
    }
}
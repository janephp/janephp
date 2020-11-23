<?php

namespace Github\Model;

class ReposOwnerRepoPullsPostBody
{
    /**
     * The title of the new pull request.
     *
     * @var string
     */
    protected $title;
    /**
     * The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`.
     *
     * @var string
     */
    protected $head;
    /**
     * The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository.
     *
     * @var string
     */
    protected $base;
    /**
     * The contents of the pull request.
     *
     * @var string
     */
    protected $body;
    /**
     * Indicates whether [maintainers can modify](https://help.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     *
     * @var bool
     */
    protected $maintainerCanModify;
    /**
     * Indicates whether the pull request is a draft. See "[Draft Pull Requests](https://help.github.com/en/articles/about-pull-requests#draft-pull-requests)" in the GitHub Help documentation to learn more.
     *
     * @var bool
     */
    protected $draft;
    /**
     * 
     *
     * @var int
     */
    protected $issue;
    /**
     * The title of the new pull request.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the new pull request.
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
     * The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`.
     *
     * @return string
     */
    public function getHead() : string
    {
        return $this->head;
    }
    /**
     * The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`.
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
     * The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository.
     *
     * @return string
     */
    public function getBase() : string
    {
        return $this->base;
    }
    /**
     * The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository.
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
    /**
     * Indicates whether the pull request is a draft. See "[Draft Pull Requests](https://help.github.com/en/articles/about-pull-requests#draft-pull-requests)" in the GitHub Help documentation to learn more.
     *
     * @return bool
     */
    public function getDraft() : bool
    {
        return $this->draft;
    }
    /**
     * Indicates whether the pull request is a draft. See "[Draft Pull Requests](https://help.github.com/en/articles/about-pull-requests#draft-pull-requests)" in the GitHub Help documentation to learn more.
     *
     * @param bool $draft
     *
     * @return self
     */
    public function setDraft(bool $draft) : self
    {
        $this->draft = $draft;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIssue() : int
    {
        return $this->issue;
    }
    /**
     * 
     *
     * @param int $issue
     *
     * @return self
     */
    public function setIssue(int $issue) : self
    {
        $this->issue = $issue;
        return $this;
    }
}
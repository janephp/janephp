<?php

namespace Github\Model;

class PullRequestHead extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @var string
     */
    protected $ref;
    /**
     * 
     *
     * @var PullRequestHeadRepo
     */
    protected $repo;
    /**
     * 
     *
     * @var string
     */
    protected $sha;
    /**
     * 
     *
     * @var PullRequestHeadUser
     */
    protected $user;
    /**
     * 
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRef() : string
    {
        return $this->ref;
    }
    /**
     * 
     *
     * @param string $ref
     *
     * @return self
     */
    public function setRef(string $ref) : self
    {
        $this->ref = $ref;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestHeadRepo
     */
    public function getRepo() : PullRequestHeadRepo
    {
        return $this->repo;
    }
    /**
     * 
     *
     * @param PullRequestHeadRepo $repo
     *
     * @return self
     */
    public function setRepo(PullRequestHeadRepo $repo) : self
    {
        $this->repo = $repo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * 
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
     * 
     *
     * @return PullRequestHeadUser
     */
    public function getUser() : PullRequestHeadUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param PullRequestHeadUser $user
     *
     * @return self
     */
    public function setUser(PullRequestHeadUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
}
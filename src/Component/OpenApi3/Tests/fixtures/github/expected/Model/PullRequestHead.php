<?php

namespace Github\Model;

class PullRequestHead extends \ArrayObject
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
        $this->initialized['label'] = true;
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
        $this->initialized['ref'] = true;
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
        $this->initialized['repo'] = true;
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
        $this->initialized['sha'] = true;
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
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}
<?php

namespace Github\Model;

class PullRequestMinimalHead extends \ArrayObject
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
    protected $ref;
    /**
     * 
     *
     * @var string
     */
    protected $sha;
    /**
     * 
     *
     * @var PullRequestMinimalHeadRepo
     */
    protected $repo;
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
     * @return PullRequestMinimalHeadRepo
     */
    public function getRepo() : PullRequestMinimalHeadRepo
    {
        return $this->repo;
    }
    /**
     * 
     *
     * @param PullRequestMinimalHeadRepo $repo
     *
     * @return self
     */
    public function setRepo(PullRequestMinimalHeadRepo $repo) : self
    {
        $this->initialized['repo'] = true;
        $this->repo = $repo;
        return $this;
    }
}
<?php

namespace Github\Model;

class PullRequestMinimalBase extends \ArrayObject
{
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
     * @var PullRequestMinimalBaseRepo
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
        $this->sha = $sha;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestMinimalBaseRepo
     */
    public function getRepo() : PullRequestMinimalBaseRepo
    {
        return $this->repo;
    }
    /**
     * 
     *
     * @param PullRequestMinimalBaseRepo $repo
     *
     * @return self
     */
    public function setRepo(PullRequestMinimalBaseRepo $repo) : self
    {
        $this->repo = $repo;
        return $this;
    }
}
<?php

namespace Github\Model;

class PullRequestMinimalHead
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
        $this->repo = $repo;
        return $this;
    }
}
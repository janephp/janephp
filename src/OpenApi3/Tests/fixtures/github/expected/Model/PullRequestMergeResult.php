<?php

namespace Github\Model;

class PullRequestMergeResult
{
    /**
     * 
     *
     * @var string
     */
    protected $sha;
    /**
     * 
     *
     * @var bool
     */
    protected $merged;
    /**
     * 
     *
     * @var string
     */
    protected $message;
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
     * @return bool
     */
    public function getMerged() : bool
    {
        return $this->merged;
    }
    /**
     * 
     *
     * @param bool $merged
     *
     * @return self
     */
    public function setMerged(bool $merged) : self
    {
        $this->merged = $merged;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
}
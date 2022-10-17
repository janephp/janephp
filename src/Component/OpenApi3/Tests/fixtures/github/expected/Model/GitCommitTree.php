<?php

namespace Github\Model;

class GitCommitTree extends \ArrayObject
{
    /**
     * SHA for the commit
     *
     * @var string
     */
    protected $sha;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * SHA for the commit
     *
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * SHA for the commit
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
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
}
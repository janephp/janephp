<?php

namespace Github\Model;

class GitTree extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
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
     * 
     *
     * @var bool
     */
    protected $truncated;
    /**
     * Objects specifying a tree structure
     *
     * @var GitTreeTreeItem[]
     */
    protected $tree;
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
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTruncated() : bool
    {
        return $this->truncated;
    }
    /**
     * 
     *
     * @param bool $truncated
     *
     * @return self
     */
    public function setTruncated(bool $truncated) : self
    {
        $this->initialized['truncated'] = true;
        $this->truncated = $truncated;
        return $this;
    }
    /**
     * Objects specifying a tree structure
     *
     * @return GitTreeTreeItem[]
     */
    public function getTree() : array
    {
        return $this->tree;
    }
    /**
     * Objects specifying a tree structure
     *
     * @param GitTreeTreeItem[] $tree
     *
     * @return self
     */
    public function setTree(array $tree) : self
    {
        $this->initialized['tree'] = true;
        $this->tree = $tree;
        return $this;
    }
}
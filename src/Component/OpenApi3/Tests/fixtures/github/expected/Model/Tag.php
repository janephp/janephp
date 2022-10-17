<?php

namespace Github\Model;

class Tag extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var TagCommit
     */
    protected $commit;
    /**
     * 
     *
     * @var string
     */
    protected $zipballUrl;
    /**
     * 
     *
     * @var string
     */
    protected $tarballUrl;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return TagCommit
     */
    public function getCommit() : TagCommit
    {
        return $this->commit;
    }
    /**
     * 
     *
     * @param TagCommit $commit
     *
     * @return self
     */
    public function setCommit(TagCommit $commit) : self
    {
        $this->commit = $commit;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getZipballUrl() : string
    {
        return $this->zipballUrl;
    }
    /**
     * 
     *
     * @param string $zipballUrl
     *
     * @return self
     */
    public function setZipballUrl(string $zipballUrl) : self
    {
        $this->zipballUrl = $zipballUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTarballUrl() : string
    {
        return $this->tarballUrl;
    }
    /**
     * 
     *
     * @param string $tarballUrl
     *
     * @return self
     */
    public function setTarballUrl(string $tarballUrl) : self
    {
        $this->tarballUrl = $tarballUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->nodeId = $nodeId;
        return $this;
    }
}
<?php

namespace Github\Model;

class DiffEntry extends \ArrayObject
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
    protected $filename;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $additions;
    /**
     * 
     *
     * @var int
     */
    protected $deletions;
    /**
     * 
     *
     * @var int
     */
    protected $changes;
    /**
     * 
     *
     * @var string
     */
    protected $blobUrl;
    /**
     * 
     *
     * @var string
     */
    protected $rawUrl;
    /**
     * 
     *
     * @var string
     */
    protected $contentsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $patch;
    /**
     * 
     *
     * @var string
     */
    protected $previousFilename;
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
    public function getFilename() : string
    {
        return $this->filename;
    }
    /**
     * 
     *
     * @param string $filename
     *
     * @return self
     */
    public function setFilename(string $filename) : self
    {
        $this->initialized['filename'] = true;
        $this->filename = $filename;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAdditions() : int
    {
        return $this->additions;
    }
    /**
     * 
     *
     * @param int $additions
     *
     * @return self
     */
    public function setAdditions(int $additions) : self
    {
        $this->initialized['additions'] = true;
        $this->additions = $additions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDeletions() : int
    {
        return $this->deletions;
    }
    /**
     * 
     *
     * @param int $deletions
     *
     * @return self
     */
    public function setDeletions(int $deletions) : self
    {
        $this->initialized['deletions'] = true;
        $this->deletions = $deletions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getChanges() : int
    {
        return $this->changes;
    }
    /**
     * 
     *
     * @param int $changes
     *
     * @return self
     */
    public function setChanges(int $changes) : self
    {
        $this->initialized['changes'] = true;
        $this->changes = $changes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBlobUrl() : string
    {
        return $this->blobUrl;
    }
    /**
     * 
     *
     * @param string $blobUrl
     *
     * @return self
     */
    public function setBlobUrl(string $blobUrl) : self
    {
        $this->initialized['blobUrl'] = true;
        $this->blobUrl = $blobUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRawUrl() : string
    {
        return $this->rawUrl;
    }
    /**
     * 
     *
     * @param string $rawUrl
     *
     * @return self
     */
    public function setRawUrl(string $rawUrl) : self
    {
        $this->initialized['rawUrl'] = true;
        $this->rawUrl = $rawUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContentsUrl() : string
    {
        return $this->contentsUrl;
    }
    /**
     * 
     *
     * @param string $contentsUrl
     *
     * @return self
     */
    public function setContentsUrl(string $contentsUrl) : self
    {
        $this->initialized['contentsUrl'] = true;
        $this->contentsUrl = $contentsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPatch() : string
    {
        return $this->patch;
    }
    /**
     * 
     *
     * @param string $patch
     *
     * @return self
     */
    public function setPatch(string $patch) : self
    {
        $this->initialized['patch'] = true;
        $this->patch = $patch;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPreviousFilename() : string
    {
        return $this->previousFilename;
    }
    /**
     * 
     *
     * @param string $previousFilename
     *
     * @return self
     */
    public function setPreviousFilename(string $previousFilename) : self
    {
        $this->initialized['previousFilename'] = true;
        $this->previousFilename = $previousFilename;
        return $this;
    }
}
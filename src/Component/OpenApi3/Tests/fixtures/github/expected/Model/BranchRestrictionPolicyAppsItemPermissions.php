<?php

namespace Github\Model;

class BranchRestrictionPolicyAppsItemPermissions extends \ArrayObject
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
    protected $metadata;
    /**
     * 
     *
     * @var string
     */
    protected $contents;
    /**
     * 
     *
     * @var string
     */
    protected $issues;
    /**
     * 
     *
     * @var string
     */
    protected $singleFile;
    /**
     * 
     *
     * @return string
     */
    public function getMetadata() : string
    {
        return $this->metadata;
    }
    /**
     * 
     *
     * @param string $metadata
     *
     * @return self
     */
    public function setMetadata(string $metadata) : self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContents() : string
    {
        return $this->contents;
    }
    /**
     * 
     *
     * @param string $contents
     *
     * @return self
     */
    public function setContents(string $contents) : self
    {
        $this->initialized['contents'] = true;
        $this->contents = $contents;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIssues() : string
    {
        return $this->issues;
    }
    /**
     * 
     *
     * @param string $issues
     *
     * @return self
     */
    public function setIssues(string $issues) : self
    {
        $this->initialized['issues'] = true;
        $this->issues = $issues;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSingleFile() : string
    {
        return $this->singleFile;
    }
    /**
     * 
     *
     * @param string $singleFile
     *
     * @return self
     */
    public function setSingleFile(string $singleFile) : self
    {
        $this->initialized['singleFile'] = true;
        $this->singleFile = $singleFile;
        return $this;
    }
}
<?php

namespace Github\Model;

class IntegrationPermissions extends \ArrayObject
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
    protected $issues;
    /**
     * 
     *
     * @var string
     */
    protected $checks;
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
    protected $deployments;
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
    public function getChecks() : string
    {
        return $this->checks;
    }
    /**
     * 
     *
     * @param string $checks
     *
     * @return self
     */
    public function setChecks(string $checks) : self
    {
        $this->initialized['checks'] = true;
        $this->checks = $checks;
        return $this;
    }
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
    public function getDeployments() : string
    {
        return $this->deployments;
    }
    /**
     * 
     *
     * @param string $deployments
     *
     * @return self
     */
    public function setDeployments(string $deployments) : self
    {
        $this->initialized['deployments'] = true;
        $this->deployments = $deployments;
        return $this;
    }
}
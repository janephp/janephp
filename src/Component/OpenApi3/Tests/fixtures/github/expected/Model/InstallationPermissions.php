<?php

namespace Github\Model;

class InstallationPermissions extends \ArrayObject
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
    protected $deployments;
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
    protected $pullRequests;
    /**
     * 
     *
     * @var string
     */
    protected $statuses;
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
    protected $organizationAdministration;
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
    public function getPullRequests() : string
    {
        return $this->pullRequests;
    }
    /**
     * 
     *
     * @param string $pullRequests
     *
     * @return self
     */
    public function setPullRequests(string $pullRequests) : self
    {
        $this->initialized['pullRequests'] = true;
        $this->pullRequests = $pullRequests;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatuses() : string
    {
        return $this->statuses;
    }
    /**
     * 
     *
     * @param string $statuses
     *
     * @return self
     */
    public function setStatuses(string $statuses) : self
    {
        $this->initialized['statuses'] = true;
        $this->statuses = $statuses;
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
    public function getOrganizationAdministration() : string
    {
        return $this->organizationAdministration;
    }
    /**
     * 
     *
     * @param string $organizationAdministration
     *
     * @return self
     */
    public function setOrganizationAdministration(string $organizationAdministration) : self
    {
        $this->initialized['organizationAdministration'] = true;
        $this->organizationAdministration = $organizationAdministration;
        return $this;
    }
}
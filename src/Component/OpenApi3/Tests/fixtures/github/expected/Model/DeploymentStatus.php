<?php

namespace Github\Model;

class DeploymentStatus extends \ArrayObject
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
    protected $url;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * The state of the status.
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var DeploymentStatusCreator|null
     */
    protected $creator;
    /**
     * A short description of the status.
     *
     * @var string
     */
    protected $description = '';
    /**
     * The environment of the deployment that the status is for.
     *
     * @var string
     */
    protected $environment = '';
    /**
     * Deprecated: the URL to associate with this status.
     *
     * @var string
     */
    protected $targetUrl = '';
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var string
     */
    protected $deploymentUrl;
    /**
     * 
     *
     * @var string
     */
    protected $repositoryUrl;
    /**
     * The URL for accessing your environment.
     *
     * @var string
     */
    protected $environmentUrl = '';
    /**
     * The URL to associate with this status.
     *
     * @var string
     */
    protected $logUrl = '';
    /**
     * 
     *
     * @var DeploymentStatusPerformedViaGithubApp|null
     */
    protected $performedViaGithubApp;
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
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
        $this->initialized['nodeId'] = true;
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * The state of the status.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * The state of the status.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return DeploymentStatusCreator|null
     */
    public function getCreator() : ?DeploymentStatusCreator
    {
        return $this->creator;
    }
    /**
     * 
     *
     * @param DeploymentStatusCreator|null $creator
     *
     * @return self
     */
    public function setCreator(?DeploymentStatusCreator $creator) : self
    {
        $this->initialized['creator'] = true;
        $this->creator = $creator;
        return $this;
    }
    /**
     * A short description of the status.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A short description of the status.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The environment of the deployment that the status is for.
     *
     * @return string
     */
    public function getEnvironment() : string
    {
        return $this->environment;
    }
    /**
     * The environment of the deployment that the status is for.
     *
     * @param string $environment
     *
     * @return self
     */
    public function setEnvironment(string $environment) : self
    {
        $this->initialized['environment'] = true;
        $this->environment = $environment;
        return $this;
    }
    /**
     * Deprecated: the URL to associate with this status.
     *
     * @return string
     */
    public function getTargetUrl() : string
    {
        return $this->targetUrl;
    }
    /**
     * Deprecated: the URL to associate with this status.
     *
     * @param string $targetUrl
     *
     * @return self
     */
    public function setTargetUrl(string $targetUrl) : self
    {
        $this->initialized['targetUrl'] = true;
        $this->targetUrl = $targetUrl;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeploymentUrl() : string
    {
        return $this->deploymentUrl;
    }
    /**
     * 
     *
     * @param string $deploymentUrl
     *
     * @return self
     */
    public function setDeploymentUrl(string $deploymentUrl) : self
    {
        $this->initialized['deploymentUrl'] = true;
        $this->deploymentUrl = $deploymentUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRepositoryUrl() : string
    {
        return $this->repositoryUrl;
    }
    /**
     * 
     *
     * @param string $repositoryUrl
     *
     * @return self
     */
    public function setRepositoryUrl(string $repositoryUrl) : self
    {
        $this->initialized['repositoryUrl'] = true;
        $this->repositoryUrl = $repositoryUrl;
        return $this;
    }
    /**
     * The URL for accessing your environment.
     *
     * @return string
     */
    public function getEnvironmentUrl() : string
    {
        return $this->environmentUrl;
    }
    /**
     * The URL for accessing your environment.
     *
     * @param string $environmentUrl
     *
     * @return self
     */
    public function setEnvironmentUrl(string $environmentUrl) : self
    {
        $this->initialized['environmentUrl'] = true;
        $this->environmentUrl = $environmentUrl;
        return $this;
    }
    /**
     * The URL to associate with this status.
     *
     * @return string
     */
    public function getLogUrl() : string
    {
        return $this->logUrl;
    }
    /**
     * The URL to associate with this status.
     *
     * @param string $logUrl
     *
     * @return self
     */
    public function setLogUrl(string $logUrl) : self
    {
        $this->initialized['logUrl'] = true;
        $this->logUrl = $logUrl;
        return $this;
    }
    /**
     * 
     *
     * @return DeploymentStatusPerformedViaGithubApp|null
     */
    public function getPerformedViaGithubApp() : ?DeploymentStatusPerformedViaGithubApp
    {
        return $this->performedViaGithubApp;
    }
    /**
     * 
     *
     * @param DeploymentStatusPerformedViaGithubApp|null $performedViaGithubApp
     *
     * @return self
     */
    public function setPerformedViaGithubApp(?DeploymentStatusPerformedViaGithubApp $performedViaGithubApp) : self
    {
        $this->initialized['performedViaGithubApp'] = true;
        $this->performedViaGithubApp = $performedViaGithubApp;
        return $this;
    }
}
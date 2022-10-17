<?php

namespace Github\Model;

class DeploymentPerformedViaGithubApp extends \ArrayObject
{
    /**
     * Unique identifier of the GitHub app
     *
     * @var int
     */
    protected $id;
    /**
     * The slug name of the GitHub app
     *
     * @var string
     */
    protected $slug;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * 
     *
     * @var IntegrationOwner|null
     */
    protected $owner;
    /**
     * The name of the GitHub app
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $externalUrl;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
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
     * The set of permissions for the GitHub app
     *
     * @var IntegrationPermissions
     */
    protected $permissions;
    /**
     * The list of events for the GitHub app
     *
     * @var string[]
     */
    protected $events;
    /**
     * The number of installations associated with the GitHub app
     *
     * @var int
     */
    protected $installationsCount;
    /**
     * 
     *
     * @var string
     */
    protected $clientId;
    /**
     * 
     *
     * @var string
     */
    protected $clientSecret;
    /**
     * 
     *
     * @var string
     */
    protected $webhookSecret;
    /**
     * 
     *
     * @var string
     */
    protected $pem;
    /**
     * Unique identifier of the GitHub app
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique identifier of the GitHub app
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The slug name of the GitHub app
     *
     * @return string
     */
    public function getSlug() : string
    {
        return $this->slug;
    }
    /**
     * The slug name of the GitHub app
     *
     * @param string $slug
     *
     * @return self
     */
    public function setSlug(string $slug) : self
    {
        $this->slug = $slug;
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
    /**
     * 
     *
     * @return IntegrationOwner|null
     */
    public function getOwner() : ?IntegrationOwner
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param IntegrationOwner|null $owner
     *
     * @return self
     */
    public function setOwner(?IntegrationOwner $owner) : self
    {
        $this->owner = $owner;
        return $this;
    }
    /**
     * The name of the GitHub app
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the GitHub app
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
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExternalUrl() : string
    {
        return $this->externalUrl;
    }
    /**
     * 
     *
     * @param string $externalUrl
     *
     * @return self
     */
    public function setExternalUrl(string $externalUrl) : self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }
    /**
     * 
     *
     * @param string $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(string $htmlUrl) : self
    {
        $this->htmlUrl = $htmlUrl;
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
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * The set of permissions for the GitHub app
     *
     * @return IntegrationPermissions
     */
    public function getPermissions() : IntegrationPermissions
    {
        return $this->permissions;
    }
    /**
     * The set of permissions for the GitHub app
     *
     * @param IntegrationPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(IntegrationPermissions $permissions) : self
    {
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * The list of events for the GitHub app
     *
     * @return string[]
     */
    public function getEvents() : array
    {
        return $this->events;
    }
    /**
     * The list of events for the GitHub app
     *
     * @param string[] $events
     *
     * @return self
     */
    public function setEvents(array $events) : self
    {
        $this->events = $events;
        return $this;
    }
    /**
     * The number of installations associated with the GitHub app
     *
     * @return int
     */
    public function getInstallationsCount() : int
    {
        return $this->installationsCount;
    }
    /**
     * The number of installations associated with the GitHub app
     *
     * @param int $installationsCount
     *
     * @return self
     */
    public function setInstallationsCount(int $installationsCount) : self
    {
        $this->installationsCount = $installationsCount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getClientId() : string
    {
        return $this->clientId;
    }
    /**
     * 
     *
     * @param string $clientId
     *
     * @return self
     */
    public function setClientId(string $clientId) : self
    {
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getClientSecret() : string
    {
        return $this->clientSecret;
    }
    /**
     * 
     *
     * @param string $clientSecret
     *
     * @return self
     */
    public function setClientSecret(string $clientSecret) : self
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWebhookSecret() : string
    {
        return $this->webhookSecret;
    }
    /**
     * 
     *
     * @param string $webhookSecret
     *
     * @return self
     */
    public function setWebhookSecret(string $webhookSecret) : self
    {
        $this->webhookSecret = $webhookSecret;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPem() : string
    {
        return $this->pem;
    }
    /**
     * 
     *
     * @param string $pem
     *
     * @return self
     */
    public function setPem(string $pem) : self
    {
        $this->pem = $pem;
        return $this;
    }
}
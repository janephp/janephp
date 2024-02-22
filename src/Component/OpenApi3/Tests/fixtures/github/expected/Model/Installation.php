<?php

namespace Github\Model;

class Installation extends \ArrayObject
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
     * The ID of the installation.
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var SimpleUser|Enterprise|null
     */
    protected $account;
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     *
     * @var string
     */
    protected $repositorySelection;
    /**
     * 
     *
     * @var string
     */
    protected $accessTokensUrl;
    /**
     * 
     *
     * @var string
     */
    protected $repositoriesUrl;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * 
     *
     * @var int
     */
    protected $appId;
    /**
     * The ID of the user or organization this token is being scoped to.
     *
     * @var int
     */
    protected $targetId;
    /**
     * 
     *
     * @var string
     */
    protected $targetType;
    /**
     * 
     *
     * @var InstallationPermissions
     */
    protected $permissions;
    /**
     * 
     *
     * @var list<string>
     */
    protected $events;
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
     * @var string|null
     */
    protected $singleFileName;
    /**
     * 
     *
     * @var string
     */
    protected $appSlug;
    /**
     * 
     *
     * @var InstallationSuspendedBy|null
     */
    protected $suspendedBy;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $suspendedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $contactEmail;
    /**
     * The ID of the installation.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The ID of the installation.
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
     * @return SimpleUser|Enterprise|null
     */
    public function getAccount()
    {
        return $this->account;
    }
    /**
     * 
     *
     * @param SimpleUser|Enterprise|null $account
     *
     * @return self
     */
    public function setAccount($account) : self
    {
        $this->initialized['account'] = true;
        $this->account = $account;
        return $this;
    }
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     *
     * @return string
     */
    public function getRepositorySelection() : string
    {
        return $this->repositorySelection;
    }
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     *
     * @param string $repositorySelection
     *
     * @return self
     */
    public function setRepositorySelection(string $repositorySelection) : self
    {
        $this->initialized['repositorySelection'] = true;
        $this->repositorySelection = $repositorySelection;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAccessTokensUrl() : string
    {
        return $this->accessTokensUrl;
    }
    /**
     * 
     *
     * @param string $accessTokensUrl
     *
     * @return self
     */
    public function setAccessTokensUrl(string $accessTokensUrl) : self
    {
        $this->initialized['accessTokensUrl'] = true;
        $this->accessTokensUrl = $accessTokensUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRepositoriesUrl() : string
    {
        return $this->repositoriesUrl;
    }
    /**
     * 
     *
     * @param string $repositoriesUrl
     *
     * @return self
     */
    public function setRepositoriesUrl(string $repositoriesUrl) : self
    {
        $this->initialized['repositoriesUrl'] = true;
        $this->repositoriesUrl = $repositoriesUrl;
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
        $this->initialized['htmlUrl'] = true;
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAppId() : int
    {
        return $this->appId;
    }
    /**
     * 
     *
     * @param int $appId
     *
     * @return self
     */
    public function setAppId(int $appId) : self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;
        return $this;
    }
    /**
     * The ID of the user or organization this token is being scoped to.
     *
     * @return int
     */
    public function getTargetId() : int
    {
        return $this->targetId;
    }
    /**
     * The ID of the user or organization this token is being scoped to.
     *
     * @param int $targetId
     *
     * @return self
     */
    public function setTargetId(int $targetId) : self
    {
        $this->initialized['targetId'] = true;
        $this->targetId = $targetId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTargetType() : string
    {
        return $this->targetType;
    }
    /**
     * 
     *
     * @param string $targetType
     *
     * @return self
     */
    public function setTargetType(string $targetType) : self
    {
        $this->initialized['targetType'] = true;
        $this->targetType = $targetType;
        return $this;
    }
    /**
     * 
     *
     * @return InstallationPermissions
     */
    public function getPermissions() : InstallationPermissions
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param InstallationPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(InstallationPermissions $permissions) : self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getEvents() : array
    {
        return $this->events;
    }
    /**
     * 
     *
     * @param list<string> $events
     *
     * @return self
     */
    public function setEvents(array $events) : self
    {
        $this->initialized['events'] = true;
        $this->events = $events;
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
     * @return string|null
     */
    public function getSingleFileName() : ?string
    {
        return $this->singleFileName;
    }
    /**
     * 
     *
     * @param string|null $singleFileName
     *
     * @return self
     */
    public function setSingleFileName(?string $singleFileName) : self
    {
        $this->initialized['singleFileName'] = true;
        $this->singleFileName = $singleFileName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAppSlug() : string
    {
        return $this->appSlug;
    }
    /**
     * 
     *
     * @param string $appSlug
     *
     * @return self
     */
    public function setAppSlug(string $appSlug) : self
    {
        $this->initialized['appSlug'] = true;
        $this->appSlug = $appSlug;
        return $this;
    }
    /**
     * 
     *
     * @return InstallationSuspendedBy|null
     */
    public function getSuspendedBy() : ?InstallationSuspendedBy
    {
        return $this->suspendedBy;
    }
    /**
     * 
     *
     * @param InstallationSuspendedBy|null $suspendedBy
     *
     * @return self
     */
    public function setSuspendedBy(?InstallationSuspendedBy $suspendedBy) : self
    {
        $this->initialized['suspendedBy'] = true;
        $this->suspendedBy = $suspendedBy;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getSuspendedAt() : ?\DateTime
    {
        return $this->suspendedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $suspendedAt
     *
     * @return self
     */
    public function setSuspendedAt(?\DateTime $suspendedAt) : self
    {
        $this->initialized['suspendedAt'] = true;
        $this->suspendedAt = $suspendedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContactEmail() : ?string
    {
        return $this->contactEmail;
    }
    /**
     * 
     *
     * @param string|null $contactEmail
     *
     * @return self
     */
    public function setContactEmail(?string $contactEmail) : self
    {
        $this->initialized['contactEmail'] = true;
        $this->contactEmail = $contactEmail;
        return $this;
    }
}
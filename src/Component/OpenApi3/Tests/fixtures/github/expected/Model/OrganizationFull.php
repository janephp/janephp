<?php

namespace Github\Model;

class OrganizationFull
{
    /**
     * 
     *
     * @var string
     */
    protected $login;
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
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $reposUrl;
    /**
     * 
     *
     * @var string
     */
    protected $eventsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $hooksUrl;
    /**
     * 
     *
     * @var string
     */
    protected $issuesUrl;
    /**
     * 
     *
     * @var string
     */
    protected $membersUrl;
    /**
     * 
     *
     * @var string
     */
    protected $publicMembersUrl;
    /**
     * 
     *
     * @var string
     */
    protected $avatarUrl;
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
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $company;
    /**
     * 
     *
     * @var string
     */
    protected $blog;
    /**
     * 
     *
     * @var string
     */
    protected $location;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string|null
     */
    protected $twitterUsername;
    /**
     * 
     *
     * @var bool
     */
    protected $isVerified;
    /**
     * 
     *
     * @var bool
     */
    protected $hasOrganizationProjects;
    /**
     * 
     *
     * @var bool
     */
    protected $hasRepositoryProjects;
    /**
     * 
     *
     * @var int
     */
    protected $publicRepos;
    /**
     * 
     *
     * @var int
     */
    protected $publicGists;
    /**
     * 
     *
     * @var int
     */
    protected $followers;
    /**
     * 
     *
     * @var int
     */
    protected $following;
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
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var int
     */
    protected $totalPrivateRepos;
    /**
     * 
     *
     * @var int
     */
    protected $ownedPrivateRepos;
    /**
     * 
     *
     * @var int|null
     */
    protected $privateGists;
    /**
     * 
     *
     * @var int|null
     */
    protected $diskUsage;
    /**
     * 
     *
     * @var int|null
     */
    protected $collaborators;
    /**
     * 
     *
     * @var string|null
     */
    protected $billingEmail;
    /**
     * 
     *
     * @var OrganizationFullPlan
     */
    protected $plan;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultRepositoryPermission;
    /**
     * 
     *
     * @var bool|null
     */
    protected $membersCanCreateRepositories;
    /**
     * 
     *
     * @var bool|null
     */
    protected $twoFactorRequirementEnabled;
    /**
     * 
     *
     * @var string
     */
    protected $membersAllowedRepositoryCreationType;
    /**
     * 
     *
     * @var bool
     */
    protected $membersCanCreatePublicRepositories;
    /**
     * 
     *
     * @var bool
     */
    protected $membersCanCreatePrivateRepositories;
    /**
     * 
     *
     * @var bool
     */
    protected $membersCanCreateInternalRepositories;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return string
     */
    public function getLogin() : string
    {
        return $this->login;
    }
    /**
     * 
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin(string $login) : self
    {
        $this->login = $login;
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
        $this->nodeId = $nodeId;
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
    /**
     * 
     *
     * @return string
     */
    public function getReposUrl() : string
    {
        return $this->reposUrl;
    }
    /**
     * 
     *
     * @param string $reposUrl
     *
     * @return self
     */
    public function setReposUrl(string $reposUrl) : self
    {
        $this->reposUrl = $reposUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEventsUrl() : string
    {
        return $this->eventsUrl;
    }
    /**
     * 
     *
     * @param string $eventsUrl
     *
     * @return self
     */
    public function setEventsUrl(string $eventsUrl) : self
    {
        $this->eventsUrl = $eventsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHooksUrl() : string
    {
        return $this->hooksUrl;
    }
    /**
     * 
     *
     * @param string $hooksUrl
     *
     * @return self
     */
    public function setHooksUrl(string $hooksUrl) : self
    {
        $this->hooksUrl = $hooksUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIssuesUrl() : string
    {
        return $this->issuesUrl;
    }
    /**
     * 
     *
     * @param string $issuesUrl
     *
     * @return self
     */
    public function setIssuesUrl(string $issuesUrl) : self
    {
        $this->issuesUrl = $issuesUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMembersUrl() : string
    {
        return $this->membersUrl;
    }
    /**
     * 
     *
     * @param string $membersUrl
     *
     * @return self
     */
    public function setMembersUrl(string $membersUrl) : self
    {
        $this->membersUrl = $membersUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPublicMembersUrl() : string
    {
        return $this->publicMembersUrl;
    }
    /**
     * 
     *
     * @param string $publicMembersUrl
     *
     * @return self
     */
    public function setPublicMembersUrl(string $publicMembersUrl) : self
    {
        $this->publicMembersUrl = $publicMembersUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAvatarUrl() : string
    {
        return $this->avatarUrl;
    }
    /**
     * 
     *
     * @param string $avatarUrl
     *
     * @return self
     */
    public function setAvatarUrl(string $avatarUrl) : self
    {
        $this->avatarUrl = $avatarUrl;
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
     * @return string
     */
    public function getCompany() : string
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany(string $company) : self
    {
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBlog() : string
    {
        return $this->blog;
    }
    /**
     * 
     *
     * @param string $blog
     *
     * @return self
     */
    public function setBlog(string $blog) : self
    {
        $this->blog = $blog;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTwitterUsername() : ?string
    {
        return $this->twitterUsername;
    }
    /**
     * 
     *
     * @param string|null $twitterUsername
     *
     * @return self
     */
    public function setTwitterUsername(?string $twitterUsername) : self
    {
        $this->twitterUsername = $twitterUsername;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsVerified() : bool
    {
        return $this->isVerified;
    }
    /**
     * 
     *
     * @param bool $isVerified
     *
     * @return self
     */
    public function setIsVerified(bool $isVerified) : self
    {
        $this->isVerified = $isVerified;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasOrganizationProjects() : bool
    {
        return $this->hasOrganizationProjects;
    }
    /**
     * 
     *
     * @param bool $hasOrganizationProjects
     *
     * @return self
     */
    public function setHasOrganizationProjects(bool $hasOrganizationProjects) : self
    {
        $this->hasOrganizationProjects = $hasOrganizationProjects;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasRepositoryProjects() : bool
    {
        return $this->hasRepositoryProjects;
    }
    /**
     * 
     *
     * @param bool $hasRepositoryProjects
     *
     * @return self
     */
    public function setHasRepositoryProjects(bool $hasRepositoryProjects) : self
    {
        $this->hasRepositoryProjects = $hasRepositoryProjects;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPublicRepos() : int
    {
        return $this->publicRepos;
    }
    /**
     * 
     *
     * @param int $publicRepos
     *
     * @return self
     */
    public function setPublicRepos(int $publicRepos) : self
    {
        $this->publicRepos = $publicRepos;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPublicGists() : int
    {
        return $this->publicGists;
    }
    /**
     * 
     *
     * @param int $publicGists
     *
     * @return self
     */
    public function setPublicGists(int $publicGists) : self
    {
        $this->publicGists = $publicGists;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFollowers() : int
    {
        return $this->followers;
    }
    /**
     * 
     *
     * @param int $followers
     *
     * @return self
     */
    public function setFollowers(int $followers) : self
    {
        $this->followers = $followers;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFollowing() : int
    {
        return $this->following;
    }
    /**
     * 
     *
     * @param int $following
     *
     * @return self
     */
    public function setFollowing(int $following) : self
    {
        $this->following = $following;
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
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalPrivateRepos() : int
    {
        return $this->totalPrivateRepos;
    }
    /**
     * 
     *
     * @param int $totalPrivateRepos
     *
     * @return self
     */
    public function setTotalPrivateRepos(int $totalPrivateRepos) : self
    {
        $this->totalPrivateRepos = $totalPrivateRepos;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOwnedPrivateRepos() : int
    {
        return $this->ownedPrivateRepos;
    }
    /**
     * 
     *
     * @param int $ownedPrivateRepos
     *
     * @return self
     */
    public function setOwnedPrivateRepos(int $ownedPrivateRepos) : self
    {
        $this->ownedPrivateRepos = $ownedPrivateRepos;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPrivateGists() : ?int
    {
        return $this->privateGists;
    }
    /**
     * 
     *
     * @param int|null $privateGists
     *
     * @return self
     */
    public function setPrivateGists(?int $privateGists) : self
    {
        $this->privateGists = $privateGists;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDiskUsage() : ?int
    {
        return $this->diskUsage;
    }
    /**
     * 
     *
     * @param int|null $diskUsage
     *
     * @return self
     */
    public function setDiskUsage(?int $diskUsage) : self
    {
        $this->diskUsage = $diskUsage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCollaborators() : ?int
    {
        return $this->collaborators;
    }
    /**
     * 
     *
     * @param int|null $collaborators
     *
     * @return self
     */
    public function setCollaborators(?int $collaborators) : self
    {
        $this->collaborators = $collaborators;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBillingEmail() : ?string
    {
        return $this->billingEmail;
    }
    /**
     * 
     *
     * @param string|null $billingEmail
     *
     * @return self
     */
    public function setBillingEmail(?string $billingEmail) : self
    {
        $this->billingEmail = $billingEmail;
        return $this;
    }
    /**
     * 
     *
     * @return OrganizationFullPlan
     */
    public function getPlan() : OrganizationFullPlan
    {
        return $this->plan;
    }
    /**
     * 
     *
     * @param OrganizationFullPlan $plan
     *
     * @return self
     */
    public function setPlan(OrganizationFullPlan $plan) : self
    {
        $this->plan = $plan;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultRepositoryPermission() : ?string
    {
        return $this->defaultRepositoryPermission;
    }
    /**
     * 
     *
     * @param string|null $defaultRepositoryPermission
     *
     * @return self
     */
    public function setDefaultRepositoryPermission(?string $defaultRepositoryPermission) : self
    {
        $this->defaultRepositoryPermission = $defaultRepositoryPermission;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getMembersCanCreateRepositories() : ?bool
    {
        return $this->membersCanCreateRepositories;
    }
    /**
     * 
     *
     * @param bool|null $membersCanCreateRepositories
     *
     * @return self
     */
    public function setMembersCanCreateRepositories(?bool $membersCanCreateRepositories) : self
    {
        $this->membersCanCreateRepositories = $membersCanCreateRepositories;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getTwoFactorRequirementEnabled() : ?bool
    {
        return $this->twoFactorRequirementEnabled;
    }
    /**
     * 
     *
     * @param bool|null $twoFactorRequirementEnabled
     *
     * @return self
     */
    public function setTwoFactorRequirementEnabled(?bool $twoFactorRequirementEnabled) : self
    {
        $this->twoFactorRequirementEnabled = $twoFactorRequirementEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMembersAllowedRepositoryCreationType() : string
    {
        return $this->membersAllowedRepositoryCreationType;
    }
    /**
     * 
     *
     * @param string $membersAllowedRepositoryCreationType
     *
     * @return self
     */
    public function setMembersAllowedRepositoryCreationType(string $membersAllowedRepositoryCreationType) : self
    {
        $this->membersAllowedRepositoryCreationType = $membersAllowedRepositoryCreationType;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getMembersCanCreatePublicRepositories() : bool
    {
        return $this->membersCanCreatePublicRepositories;
    }
    /**
     * 
     *
     * @param bool $membersCanCreatePublicRepositories
     *
     * @return self
     */
    public function setMembersCanCreatePublicRepositories(bool $membersCanCreatePublicRepositories) : self
    {
        $this->membersCanCreatePublicRepositories = $membersCanCreatePublicRepositories;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getMembersCanCreatePrivateRepositories() : bool
    {
        return $this->membersCanCreatePrivateRepositories;
    }
    /**
     * 
     *
     * @param bool $membersCanCreatePrivateRepositories
     *
     * @return self
     */
    public function setMembersCanCreatePrivateRepositories(bool $membersCanCreatePrivateRepositories) : self
    {
        $this->membersCanCreatePrivateRepositories = $membersCanCreatePrivateRepositories;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getMembersCanCreateInternalRepositories() : bool
    {
        return $this->membersCanCreateInternalRepositories;
    }
    /**
     * 
     *
     * @param bool $membersCanCreateInternalRepositories
     *
     * @return self
     */
    public function setMembersCanCreateInternalRepositories(bool $membersCanCreateInternalRepositories) : self
    {
        $this->membersCanCreateInternalRepositories = $membersCanCreateInternalRepositories;
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
}
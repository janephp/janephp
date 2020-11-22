<?php

namespace Github\Model;

class Organization
{
    /**
     * Unique login name of the organization
     *
     * @var string
     */
    protected $login;
    /**
     * URL for the organization
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
     * Display blog url for the organization
     *
     * @var string
     */
    protected $blog;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * Display name for the organization
     *
     * @var string
     */
    protected $name;
    /**
     * Display company name for the organization
     *
     * @var string
     */
    protected $company;
    /**
     * Display location for the organization
     *
     * @var string
     */
    protected $location;
    /**
     * Display email for the organization
     *
     * @var string
     */
    protected $email;
    /**
     * Specifies if organization projects are enabled for this org
     *
     * @var bool
     */
    protected $hasOrganizationProjects;
    /**
     * Specifies if repository projects are enabled for repositories that belong to this org
     *
     * @var bool
     */
    protected $hasRepositoryProjects;
    /**
     * 
     *
     * @var bool
     */
    protected $isVerified;
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
    protected $type;
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
     * @var OrganizationPlan
     */
    protected $plan;
    /**
     * Unique login name of the organization
     *
     * @return string
     */
    public function getLogin() : string
    {
        return $this->login;
    }
    /**
     * Unique login name of the organization
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
     * URL for the organization
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * URL for the organization
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
     * Display blog url for the organization
     *
     * @return string
     */
    public function getBlog() : string
    {
        return $this->blog;
    }
    /**
     * Display blog url for the organization
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
     * Display name for the organization
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Display name for the organization
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
     * Display company name for the organization
     *
     * @return string
     */
    public function getCompany() : string
    {
        return $this->company;
    }
    /**
     * Display company name for the organization
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
     * Display location for the organization
     *
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
    /**
     * Display location for the organization
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
     * Display email for the organization
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * Display email for the organization
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
     * Specifies if organization projects are enabled for this org
     *
     * @return bool
     */
    public function getHasOrganizationProjects() : bool
    {
        return $this->hasOrganizationProjects;
    }
    /**
     * Specifies if organization projects are enabled for this org
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
     * Specifies if repository projects are enabled for repositories that belong to this org
     *
     * @return bool
     */
    public function getHasRepositoryProjects() : bool
    {
        return $this->hasRepositoryProjects;
    }
    /**
     * Specifies if repository projects are enabled for repositories that belong to this org
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
     * 
     *
     * @return OrganizationPlan
     */
    public function getPlan() : OrganizationPlan
    {
        return $this->plan;
    }
    /**
     * 
     *
     * @param OrganizationPlan $plan
     *
     * @return self
     */
    public function setPlan(OrganizationPlan $plan) : self
    {
        $this->plan = $plan;
        return $this;
    }
}
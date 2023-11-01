<?php

namespace Github\Model;

class TeamFull extends \ArrayObject
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
     * Unique identifier of the team
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
     * URL for the team
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * Name of the team
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $slug;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * The level of privacy this team should have
     *
     * @var string
     */
    protected $privacy;
    /**
     * Permission that the team will have for its repositories
     *
     * @var string
     */
    protected $permission;
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
    protected $repositoriesUrl;
    /**
     * 
     *
     * @var TeamFullParent|null
     */
    protected $parent;
    /**
     * 
     *
     * @var int
     */
    protected $membersCount;
    /**
     * 
     *
     * @var int
     */
    protected $reposCount;
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
     * GitHub account for managing multiple users, teams, and repositories
     *
     * @var Organization
     */
    protected $organization;
    /**
     * Distinguished Name (DN) that team maps to within LDAP environment
     *
     * @var string
     */
    protected $ldapDn;
    /**
     * Unique identifier of the team
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique identifier of the team
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
     * URL for the team
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * URL for the team
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
     * Name of the team
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the team
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSlug() : string
    {
        return $this->slug;
    }
    /**
     * 
     *
     * @param string $slug
     *
     * @return self
     */
    public function setSlug(string $slug) : self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;
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
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The level of privacy this team should have
     *
     * @return string
     */
    public function getPrivacy() : string
    {
        return $this->privacy;
    }
    /**
     * The level of privacy this team should have
     *
     * @param string $privacy
     *
     * @return self
     */
    public function setPrivacy(string $privacy) : self
    {
        $this->initialized['privacy'] = true;
        $this->privacy = $privacy;
        return $this;
    }
    /**
     * Permission that the team will have for its repositories
     *
     * @return string
     */
    public function getPermission() : string
    {
        return $this->permission;
    }
    /**
     * Permission that the team will have for its repositories
     *
     * @param string $permission
     *
     * @return self
     */
    public function setPermission(string $permission) : self
    {
        $this->initialized['permission'] = true;
        $this->permission = $permission;
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
        $this->initialized['membersUrl'] = true;
        $this->membersUrl = $membersUrl;
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
     * @return TeamFullParent|null
     */
    public function getParent() : ?TeamFullParent
    {
        return $this->parent;
    }
    /**
     * 
     *
     * @param TeamFullParent|null $parent
     *
     * @return self
     */
    public function setParent(?TeamFullParent $parent) : self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMembersCount() : int
    {
        return $this->membersCount;
    }
    /**
     * 
     *
     * @param int $membersCount
     *
     * @return self
     */
    public function setMembersCount(int $membersCount) : self
    {
        $this->initialized['membersCount'] = true;
        $this->membersCount = $membersCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReposCount() : int
    {
        return $this->reposCount;
    }
    /**
     * 
     *
     * @param int $reposCount
     *
     * @return self
     */
    public function setReposCount(int $reposCount) : self
    {
        $this->initialized['reposCount'] = true;
        $this->reposCount = $reposCount;
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
     * GitHub account for managing multiple users, teams, and repositories
     *
     * @return Organization
     */
    public function getOrganization() : Organization
    {
        return $this->organization;
    }
    /**
     * GitHub account for managing multiple users, teams, and repositories
     *
     * @param Organization $organization
     *
     * @return self
     */
    public function setOrganization(Organization $organization) : self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
    /**
     * Distinguished Name (DN) that team maps to within LDAP environment
     *
     * @return string
     */
    public function getLdapDn() : string
    {
        return $this->ldapDn;
    }
    /**
     * Distinguished Name (DN) that team maps to within LDAP environment
     *
     * @param string $ldapDn
     *
     * @return self
     */
    public function setLdapDn(string $ldapDn) : self
    {
        $this->initialized['ldapDn'] = true;
        $this->ldapDn = $ldapDn;
        return $this;
    }
}
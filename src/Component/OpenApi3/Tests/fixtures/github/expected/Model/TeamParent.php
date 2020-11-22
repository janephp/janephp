<?php

namespace Github\Model;

class TeamParent
{
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
    protected $membersUrl;
    /**
     * Name of the team
     *
     * @var string
     */
    protected $name;
    /**
     * Description of the team
     *
     * @var string|null
     */
    protected $description;
    /**
     * Permission that the team will have for its repositories
     *
     * @var string
     */
    protected $permission;
    /**
     * The level of privacy this team should have
     *
     * @var string
     */
    protected $privacy;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
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
    protected $slug;
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
        $this->url = $url;
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
        $this->name = $name;
        return $this;
    }
    /**
     * Description of the team
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of the team
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
        $this->permission = $permission;
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
        $this->privacy = $privacy;
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
        $this->repositoriesUrl = $repositoriesUrl;
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
        $this->slug = $slug;
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
        $this->ldapDn = $ldapDn;
        return $this;
    }
}
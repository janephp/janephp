<?php

namespace Github\Model;

class Project extends \ArrayObject
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
    protected $ownerUrl;
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
    protected $htmlUrl;
    /**
     * 
     *
     * @var string
     */
    protected $columnsUrl;
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
     * Name of the project
     *
     * @var string
     */
    protected $name;
    /**
     * Body of the project
     *
     * @var string|null
     */
    protected $body;
    /**
     * 
     *
     * @var int
     */
    protected $number;
    /**
     * State of the project; either 'open' or 'closed'
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var ProjectCreator|null
     */
    protected $creator;
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
     * The baseline permission that all organization members have on this project
     *
     * @var string
     */
    protected $organizationPermission;
    /**
     * Whether or not this project can be seen by everyone.
     *
     * @var bool
     */
    protected $private;
    /**
     * 
     *
     * @var string
     */
    protected $cardsUrl;
    /**
     * 
     *
     * @var ProjectPermissions
     */
    protected $permissions;
    /**
     * 
     *
     * @return string
     */
    public function getOwnerUrl() : string
    {
        return $this->ownerUrl;
    }
    /**
     * 
     *
     * @param string $ownerUrl
     *
     * @return self
     */
    public function setOwnerUrl(string $ownerUrl) : self
    {
        $this->initialized['ownerUrl'] = true;
        $this->ownerUrl = $ownerUrl;
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
     * 
     *
     * @return string
     */
    public function getColumnsUrl() : string
    {
        return $this->columnsUrl;
    }
    /**
     * 
     *
     * @param string $columnsUrl
     *
     * @return self
     */
    public function setColumnsUrl(string $columnsUrl) : self
    {
        $this->initialized['columnsUrl'] = true;
        $this->columnsUrl = $columnsUrl;
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
     * Name of the project
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the project
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
     * Body of the project
     *
     * @return string|null
     */
    public function getBody() : ?string
    {
        return $this->body;
    }
    /**
     * Body of the project
     *
     * @param string|null $body
     *
     * @return self
     */
    public function setBody(?string $body) : self
    {
        $this->initialized['body'] = true;
        $this->body = $body;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * State of the project; either 'open' or 'closed'
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * State of the project; either 'open' or 'closed'
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
     * @return ProjectCreator|null
     */
    public function getCreator() : ?ProjectCreator
    {
        return $this->creator;
    }
    /**
     * 
     *
     * @param ProjectCreator|null $creator
     *
     * @return self
     */
    public function setCreator(?ProjectCreator $creator) : self
    {
        $this->initialized['creator'] = true;
        $this->creator = $creator;
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
     * The baseline permission that all organization members have on this project
     *
     * @return string
     */
    public function getOrganizationPermission() : string
    {
        return $this->organizationPermission;
    }
    /**
     * The baseline permission that all organization members have on this project
     *
     * @param string $organizationPermission
     *
     * @return self
     */
    public function setOrganizationPermission(string $organizationPermission) : self
    {
        $this->initialized['organizationPermission'] = true;
        $this->organizationPermission = $organizationPermission;
        return $this;
    }
    /**
     * Whether or not this project can be seen by everyone.
     *
     * @return bool
     */
    public function getPrivate() : bool
    {
        return $this->private;
    }
    /**
     * Whether or not this project can be seen by everyone.
     *
     * @param bool $private
     *
     * @return self
     */
    public function setPrivate(bool $private) : self
    {
        $this->initialized['private'] = true;
        $this->private = $private;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCardsUrl() : string
    {
        return $this->cardsUrl;
    }
    /**
     * 
     *
     * @param string $cardsUrl
     *
     * @return self
     */
    public function setCardsUrl(string $cardsUrl) : self
    {
        $this->initialized['cardsUrl'] = true;
        $this->cardsUrl = $cardsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return ProjectPermissions
     */
    public function getPermissions() : ProjectPermissions
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param ProjectPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(ProjectPermissions $permissions) : self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
}
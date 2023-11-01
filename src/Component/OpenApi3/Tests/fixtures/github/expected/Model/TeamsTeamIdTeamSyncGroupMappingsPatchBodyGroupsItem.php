<?php

namespace Github\Model;

class TeamsTeamIdTeamSyncGroupMappingsPatchBodyGroupsItem extends \ArrayObject
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
     * ID of the IdP group.
     *
     * @var string
     */
    protected $groupId;
    /**
     * Name of the IdP group.
     *
     * @var string
     */
    protected $groupName;
    /**
     * Description of the IdP group.
     *
     * @var string
     */
    protected $groupDescription;
    /**
     * 
     *
     * @var string
     */
    protected $id;
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
    protected $description;
    /**
     * ID of the IdP group.
     *
     * @return string
     */
    public function getGroupId() : string
    {
        return $this->groupId;
    }
    /**
     * ID of the IdP group.
     *
     * @param string $groupId
     *
     * @return self
     */
    public function setGroupId(string $groupId) : self
    {
        $this->initialized['groupId'] = true;
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Name of the IdP group.
     *
     * @return string
     */
    public function getGroupName() : string
    {
        return $this->groupName;
    }
    /**
     * Name of the IdP group.
     *
     * @param string $groupName
     *
     * @return self
     */
    public function setGroupName(string $groupName) : self
    {
        $this->initialized['groupName'] = true;
        $this->groupName = $groupName;
        return $this;
    }
    /**
     * Description of the IdP group.
     *
     * @return string
     */
    public function getGroupDescription() : string
    {
        return $this->groupDescription;
    }
    /**
     * Description of the IdP group.
     *
     * @param string $groupDescription
     *
     * @return self
     */
    public function setGroupDescription(string $groupDescription) : self
    {
        $this->initialized['groupDescription'] = true;
        $this->groupDescription = $groupDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
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
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
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
}
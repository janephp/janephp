<?php

namespace Github\Model;

class TeamsTeamIdTeamSyncGroupMappingsPatchBodyGroupsItem
{
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
        $this->description = $description;
        return $this;
    }
}
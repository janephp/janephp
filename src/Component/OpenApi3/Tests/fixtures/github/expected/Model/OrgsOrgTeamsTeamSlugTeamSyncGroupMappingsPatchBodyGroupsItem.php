<?php

namespace Github\Model;

class OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
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
}
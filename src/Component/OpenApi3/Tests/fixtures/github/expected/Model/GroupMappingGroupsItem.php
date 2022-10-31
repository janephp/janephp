<?php

namespace Github\Model;

class GroupMappingGroupsItem extends \ArrayObject
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
     * The ID of the group
     *
     * @var string
     */
    protected $groupId;
    /**
     * The name of the group
     *
     * @var string
     */
    protected $groupName;
    /**
     * a description of the group
     *
     * @var string
     */
    protected $groupDescription;
    /**
     * The ID of the group
     *
     * @return string
     */
    public function getGroupId() : string
    {
        return $this->groupId;
    }
    /**
     * The ID of the group
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
     * The name of the group
     *
     * @return string
     */
    public function getGroupName() : string
    {
        return $this->groupName;
    }
    /**
     * The name of the group
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
     * a description of the group
     *
     * @return string
     */
    public function getGroupDescription() : string
    {
        return $this->groupDescription;
    }
    /**
     * a description of the group
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
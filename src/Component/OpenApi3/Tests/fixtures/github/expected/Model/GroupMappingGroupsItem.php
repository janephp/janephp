<?php

namespace Github\Model;

class GroupMappingGroupsItem
{
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
        $this->groupDescription = $groupDescription;
        return $this;
    }
}
<?php

namespace Github\Model;

class GroupMapping extends \ArrayObject
{
    /**
     * Array of groups to be mapped to this team
     *
     * @var GroupMappingGroupsItem[]
     */
    protected $groups;
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
     * synchronization status for this group mapping
     *
     * @var string
     */
    protected $status;
    /**
     * the time of the last sync for this group-mapping
     *
     * @var string
     */
    protected $syncedAt;
    /**
     * Array of groups to be mapped to this team
     *
     * @return GroupMappingGroupsItem[]
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * Array of groups to be mapped to this team
     *
     * @param GroupMappingGroupsItem[] $groups
     *
     * @return self
     */
    public function setGroups(array $groups) : self
    {
        $this->groups = $groups;
        return $this;
    }
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
    /**
     * synchronization status for this group mapping
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * synchronization status for this group mapping
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * the time of the last sync for this group-mapping
     *
     * @return string
     */
    public function getSyncedAt() : string
    {
        return $this->syncedAt;
    }
    /**
     * the time of the last sync for this group-mapping
     *
     * @param string $syncedAt
     *
     * @return self
     */
    public function setSyncedAt(string $syncedAt) : self
    {
        $this->syncedAt = $syncedAt;
        return $this;
    }
}
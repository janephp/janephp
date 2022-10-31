<?php

namespace Github\Model;

class ReposOwnerRepoTransferPostBody extends \ArrayObject
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
     * **Required:** The username or organization name the repository will be transferred to.
     *
     * @var string
     */
    protected $newOwner;
    /**
     * ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories.
     *
     * @var int[]
     */
    protected $teamIds;
    /**
     * **Required:** The username or organization name the repository will be transferred to.
     *
     * @return string
     */
    public function getNewOwner() : string
    {
        return $this->newOwner;
    }
    /**
     * **Required:** The username or organization name the repository will be transferred to.
     *
     * @param string $newOwner
     *
     * @return self
     */
    public function setNewOwner(string $newOwner) : self
    {
        $this->initialized['newOwner'] = true;
        $this->newOwner = $newOwner;
        return $this;
    }
    /**
     * ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories.
     *
     * @return int[]
     */
    public function getTeamIds() : array
    {
        return $this->teamIds;
    }
    /**
     * ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories.
     *
     * @param int[] $teamIds
     *
     * @return self
     */
    public function setTeamIds(array $teamIds) : self
    {
        $this->initialized['teamIds'] = true;
        $this->teamIds = $teamIds;
        return $this;
    }
}
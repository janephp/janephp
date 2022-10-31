<?php

namespace Docker\Api\Model;

class BuildPrunePostResponse200
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
     * 
     *
     * @var string[]
     */
    protected $cachesDeleted;
    /**
     * Disk space reclaimed in bytes
     *
     * @var int
     */
    protected $spaceReclaimed;
    /**
     * 
     *
     * @return string[]
     */
    public function getCachesDeleted() : array
    {
        return $this->cachesDeleted;
    }
    /**
     * 
     *
     * @param string[] $cachesDeleted
     *
     * @return self
     */
    public function setCachesDeleted(array $cachesDeleted) : self
    {
        $this->initialized['cachesDeleted'] = true;
        $this->cachesDeleted = $cachesDeleted;
        return $this;
    }
    /**
     * Disk space reclaimed in bytes
     *
     * @return int
     */
    public function getSpaceReclaimed() : int
    {
        return $this->spaceReclaimed;
    }
    /**
     * Disk space reclaimed in bytes
     *
     * @param int $spaceReclaimed
     *
     * @return self
     */
    public function setSpaceReclaimed(int $spaceReclaimed) : self
    {
        $this->initialized['spaceReclaimed'] = true;
        $this->spaceReclaimed = $spaceReclaimed;
        return $this;
    }
}
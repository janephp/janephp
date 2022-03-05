<?php

namespace Docker\Api\Model;

class BuildPrunePostResponse200
{
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
        $this->spaceReclaimed = $spaceReclaimed;
        return $this;
    }
}
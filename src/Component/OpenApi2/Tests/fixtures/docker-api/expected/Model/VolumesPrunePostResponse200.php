<?php

namespace Docker\Api\Model;

class VolumesPrunePostResponse200
{
    /**
     * Volumes that were deleted
     *
     * @var string[]
     */
    protected $volumesDeleted;
    /**
     * Disk space reclaimed in bytes
     *
     * @var int
     */
    protected $spaceReclaimed;
    /**
     * Volumes that were deleted
     *
     * @return string[]
     */
    public function getVolumesDeleted() : array
    {
        return $this->volumesDeleted;
    }
    /**
     * Volumes that were deleted
     *
     * @param string[] $volumesDeleted
     *
     * @return self
     */
    public function setVolumesDeleted(array $volumesDeleted) : self
    {
        $this->volumesDeleted = $volumesDeleted;
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
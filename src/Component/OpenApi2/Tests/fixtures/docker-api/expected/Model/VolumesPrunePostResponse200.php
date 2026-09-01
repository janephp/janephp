<?php

namespace Docker\Api\Model;

class VolumesPrunePostResponse200
{
    /**
     * Volumes that were deleted
     *
     * @var list<string>
     */
    public array $volumesDeleted;
    /**
     * Disk space reclaimed in bytes
     *
     * @var int
     */
    public int $spaceReclaimed;
}
<?php

namespace Docker\Api\Model;

class ContainersPrunePostResponse200
{
    /**
     * Container IDs that were deleted
     *
     * @var list<string>
     */
    public array $containersDeleted;
    /**
     * Disk space reclaimed in bytes
     *
     * @var int
     */
    public int $spaceReclaimed;
}
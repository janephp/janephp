<?php

namespace Docker\Api\Model;

class BuildPrunePostResponse200
{
    /**
     * @var list<string>
     */
    public array $cachesDeleted;
    /**
     * Disk space reclaimed in bytes
     *
     * @var int
     */
    public int $spaceReclaimed;
}
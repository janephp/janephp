<?php

namespace Docker\Api\Model;

class ImagesPrunePostResponse200
{
    /**
     * Images that were deleted
     *
     * @var list<ImageDeleteResponseItem>
     */
    public array $imagesDeleted;
    /**
     * Disk space reclaimed in bytes
     *
     * @var int
     */
    public int $spaceReclaimed;
}
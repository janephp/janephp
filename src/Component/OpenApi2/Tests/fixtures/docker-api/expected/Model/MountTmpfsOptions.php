<?php

namespace Docker\Api\Model;

class MountTmpfsOptions
{
    /**
     * The size for the tmpfs mount in bytes.
     *
     * @var int
     */
    public int $sizeBytes;
    /**
     * The permission mode for the tmpfs mount in an integer.
     *
     * @var int
     */
    public int $mode;
}
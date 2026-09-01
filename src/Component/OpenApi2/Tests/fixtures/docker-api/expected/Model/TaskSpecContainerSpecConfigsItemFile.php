<?php

namespace Docker\Api\Model;

class TaskSpecContainerSpecConfigsItemFile
{
    /**
     * Name represents the final filename in the filesystem.
     * 
     *
     * @var string
     */
    public string $name;
    /**
     * UID represents the file UID.
     *
     * @var string
     */
    public string $uID;
    /**
     * GID represents the file GID.
     *
     * @var string
     */
    public string $gID;
    /**
     * Mode represents the FileMode of the file.
     *
     * @var int
     */
    public int $mode;
}
<?php

namespace PicturePark\API\Model;

class ContentRestoreManyRequest
{
    /**
     * IDs of the contents to restore.
     *
     * @var list<string>
     */
    public array $contentIds;
    /**
     * Allows creating contents that refer to list items or contents that don't exist in the system.
     *
     * @var bool
     */
    public bool $allowMissingDependencies;
}
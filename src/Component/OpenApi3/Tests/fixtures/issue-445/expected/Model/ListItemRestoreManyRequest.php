<?php

namespace PicturePark\API\Model;

class ListItemRestoreManyRequest
{
    /**
     * The IDs of the list items to restore.
     *
     * @var list<string>
     */
    public array $listItemIds;
    /**
     * Allows restoring list items that refer to list items or contents that don't exist in the system.
     *
     * @var bool
     */
    public bool $allowMissingDependencies;
}
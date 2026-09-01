<?php

namespace PicturePark\API\Model;

class ListItemUpdateManyRequest
{
    /**
     * Allows updating list items with references to list items or contents that don't exist in the system.
     *
     * @var bool
     */
    public bool $allowMissingDependencies;
    /**
     * Items to be updated.
     *
     * @var list<ListItemUpdateItem>
     */
    public array $items;
}
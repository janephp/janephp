<?php

namespace PicturePark\API\Model;

class ListItemCreateManyRequest
{
    /**
     * Allows creating list items that refer to list items or contents that don't exist in the system.
     *
     * @var bool
     */
    public bool $allowMissingDependencies;
    /**
     * Items to be created.
     *
     * @var list<ListItemCreateRequest>
     */
    public array $items;
}
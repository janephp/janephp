<?php

namespace PicturePark\API\Model;

class ContentCreateManyRequest
{
    /**
     * Allows creating contents that refer to list items or contents that don't exist in the system.
     *
     * @var bool
     */
    public bool $allowMissingDependencies;
    /**
     * Items to be created.
     *
     * @var list<ContentCreateRequest>
     */
    public array $items;
}
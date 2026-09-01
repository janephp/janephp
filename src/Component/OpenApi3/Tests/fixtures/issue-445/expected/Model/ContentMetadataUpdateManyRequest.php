<?php

namespace PicturePark\API\Model;

class ContentMetadataUpdateManyRequest
{
    /**
     * Allows storing references to list items or contents that don't exist in the system.
     *
     * @var bool
     */
    public bool $allowMissingDependencies;
    /**
     * Update items
     *
     * @var list<ContentMetadataUpdateItem>
     */
    public array $items;
}
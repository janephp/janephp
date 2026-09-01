<?php

namespace PicturePark\API\Model;

class ListItemManyReferencesRequest
{
    /**
     * The IDs of the list items whose references need to be retrieved.
     *
     * @var list<string>
     */
    public array $listItemIds;
    /**
     * Limits the number of the returned metadata references by setting paging information.
     *
     * @var MetadataReferencesPagingRequest|null
     */
    public ?MetadataReferencesPagingRequest $references;
}
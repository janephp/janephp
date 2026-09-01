<?php

namespace PicturePark\API\Model;

class ListItemReferencesRequest
{
    /**
     * Limits the number of the returned metadata references by setting paging information.
     *
     * @var MetadataReferencesPagingRequest|null
     */
    public ?MetadataReferencesPagingRequest $references;
}
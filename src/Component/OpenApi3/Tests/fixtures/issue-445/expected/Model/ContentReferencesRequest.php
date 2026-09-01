<?php

namespace PicturePark\API\Model;

class ContentReferencesRequest
{
    /**
     * Limits the number of the returned metadata references by setting paging information.
     *
     * @var MetadataReferencesPagingRequest|null
     */
    public ?MetadataReferencesPagingRequest $references;
    /**
     * Limits the number of the returned share references by setting paging information.
     *
     * @var PagingRequest|null
     */
    public ?PagingRequest $shares;
}
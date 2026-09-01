<?php

namespace PicturePark\API\Model;

class ListItemReferencesResult
{
    /**
     * List of references. Only available when requested in the request.
     *
     * @var MetadataReferenceResult|null
     */
    public ?MetadataReferenceResult $metadataReferences;
}
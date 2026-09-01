<?php

namespace PicturePark\API\Model;

class ContentReferencesResult
{
    /**
     * List of references. Only available when requested in the request.
     *
     * @var MetadataReferenceResult|null
     */
    public ?MetadataReferenceResult $metadataReferences;
    /**
     * List of share references
     *
     * @var ContentShareReferenceResult|null
     */
    public ?ContentShareReferenceResult $shareReferences;
}
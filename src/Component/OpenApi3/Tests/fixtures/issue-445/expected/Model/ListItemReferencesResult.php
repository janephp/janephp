<?php

namespace PicturePark\API\Model;

class ListItemReferencesResult
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * List of references. Only available when requested in the request.
     *
     * @var MetadataReferenceResult|null
     */
    protected $metadataReferences;
    /**
     * List of references. Only available when requested in the request.
     *
     * @return MetadataReferenceResult|null
     */
    public function getMetadataReferences(): ?MetadataReferenceResult
    {
        return $this->metadataReferences;
    }
    /**
     * List of references. Only available when requested in the request.
     *
     * @param MetadataReferenceResult|null $metadataReferences
     *
     * @return self
     */
    public function setMetadataReferences(?MetadataReferenceResult $metadataReferences): self
    {
        $this->initialized['metadataReferences'] = true;
        $this->metadataReferences = $metadataReferences;
        return $this;
    }
}
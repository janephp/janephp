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
     * @var mixed|null
     */
    protected $metadataReferences;
    /**
     * List of references. Only available when requested in the request.
     *
     * @return mixed
     */
    public function getMetadataReferences()
    {
        return $this->metadataReferences;
    }
    /**
     * List of references. Only available when requested in the request.
     *
     * @param mixed $metadataReferences
     *
     * @return self
     */
    public function setMetadataReferences($metadataReferences): self
    {
        $this->initialized['metadataReferences'] = true;
        $this->metadataReferences = $metadataReferences;
        return $this;
    }
}
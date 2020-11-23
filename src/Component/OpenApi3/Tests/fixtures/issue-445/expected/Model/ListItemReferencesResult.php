<?php

namespace PicturePark\API\Model;

class ListItemReferencesResult
{
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
    public function setMetadataReferences($metadataReferences) : self
    {
        $this->metadataReferences = $metadataReferences;
        return $this;
    }
}
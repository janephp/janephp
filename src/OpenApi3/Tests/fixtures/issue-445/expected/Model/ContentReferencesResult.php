<?php

namespace PicturePark\API\Model;

class ContentReferencesResult
{
    /**
     * List of references. Only available when requested in the request.
     *
     * @var mixed|null
     */
    protected $metadataReferences;
    /**
     * List of share references
     *
     * @var mixed|null
     */
    protected $shareReferences;
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
    /**
     * List of share references
     *
     * @return mixed
     */
    public function getShareReferences()
    {
        return $this->shareReferences;
    }
    /**
     * List of share references
     *
     * @param mixed $shareReferences
     *
     * @return self
     */
    public function setShareReferences($shareReferences) : self
    {
        $this->shareReferences = $shareReferences;
        return $this;
    }
}
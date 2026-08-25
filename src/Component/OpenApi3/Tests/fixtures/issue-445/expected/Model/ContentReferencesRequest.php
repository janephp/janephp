<?php

namespace PicturePark\API\Model;

class ContentReferencesRequest
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
     * Limits the number of the returned metadata references by setting paging information.
     *
     * @var MetadataReferencesPagingRequest|null
     */
    protected $references;
    /**
     * Limits the number of the returned share references by setting paging information.
     *
     * @var PagingRequest|null
     */
    protected $shares;
    /**
     * Limits the number of the returned metadata references by setting paging information.
     *
     * @return MetadataReferencesPagingRequest|null
     */
    public function getReferences(): ?MetadataReferencesPagingRequest
    {
        return $this->references;
    }
    /**
     * Limits the number of the returned metadata references by setting paging information.
     *
     * @param MetadataReferencesPagingRequest|null $references
     *
     * @return self
     */
    public function setReferences(?MetadataReferencesPagingRequest $references): self
    {
        $this->initialized['references'] = true;
        $this->references = $references;
        return $this;
    }
    /**
     * Limits the number of the returned share references by setting paging information.
     *
     * @return PagingRequest|null
     */
    public function getShares(): ?PagingRequest
    {
        return $this->shares;
    }
    /**
     * Limits the number of the returned share references by setting paging information.
     *
     * @param PagingRequest|null $shares
     *
     * @return self
     */
    public function setShares(?PagingRequest $shares): self
    {
        $this->initialized['shares'] = true;
        $this->shares = $shares;
        return $this;
    }
}
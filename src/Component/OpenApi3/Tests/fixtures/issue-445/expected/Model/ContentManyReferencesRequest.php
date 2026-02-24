<?php

namespace PicturePark\API\Model;

class ContentManyReferencesRequest
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
     * The IDs of the contents whose references need to be retrieved.
     *
     * @var list<string>
     */
    protected $contentIds;
    /**
     * Limits the number of the returned metadata references by setting paging information.
     *
     * @var mixed|null
     */
    protected $references;
    /**
     * Limits the number of the returned share references by setting paging information.
     *
     * @var mixed|null
     */
    protected $shares;
    /**
     * The IDs of the contents whose references need to be retrieved.
     *
     * @return list<string>
     */
    public function getContentIds(): array
    {
        return $this->contentIds;
    }
    /**
     * The IDs of the contents whose references need to be retrieved.
     *
     * @param list<string> $contentIds
     *
     * @return self
     */
    public function setContentIds(array $contentIds): self
    {
        $this->initialized['contentIds'] = true;
        $this->contentIds = $contentIds;
        return $this;
    }
    /**
     * Limits the number of the returned metadata references by setting paging information.
     *
     * @return mixed
     */
    public function getReferences()
    {
        return $this->references;
    }
    /**
     * Limits the number of the returned metadata references by setting paging information.
     *
     * @param mixed $references
     *
     * @return self
     */
    public function setReferences($references): self
    {
        $this->initialized['references'] = true;
        $this->references = $references;
        return $this;
    }
    /**
     * Limits the number of the returned share references by setting paging information.
     *
     * @return mixed
     */
    public function getShares()
    {
        return $this->shares;
    }
    /**
     * Limits the number of the returned share references by setting paging information.
     *
     * @param mixed $shares
     *
     * @return self
     */
    public function setShares($shares): self
    {
        $this->initialized['shares'] = true;
        $this->shares = $shares;
        return $this;
    }
}
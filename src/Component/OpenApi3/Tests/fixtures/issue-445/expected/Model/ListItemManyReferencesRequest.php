<?php

namespace PicturePark\API\Model;

class ListItemManyReferencesRequest
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
     * The IDs of the list items whose references need to be retrieved.
     *
     * @var list<string>
     */
    protected $listItemIds;
    /**
     * Limits the number of the returned metadata references by setting paging information.
     *
     * @var mixed|null
     */
    protected $references;
    /**
     * The IDs of the list items whose references need to be retrieved.
     *
     * @return list<string>
     */
    public function getListItemIds(): array
    {
        return $this->listItemIds;
    }
    /**
     * The IDs of the list items whose references need to be retrieved.
     *
     * @param list<string> $listItemIds
     *
     * @return self
     */
    public function setListItemIds(array $listItemIds): self
    {
        $this->initialized['listItemIds'] = true;
        $this->listItemIds = $listItemIds;
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
}
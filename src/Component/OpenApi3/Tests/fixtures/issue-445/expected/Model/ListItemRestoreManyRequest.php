<?php

namespace PicturePark\API\Model;

class ListItemRestoreManyRequest
{
    /**
     * The IDs of the list items to restore.
     *
     * @var string[]
     */
    protected $listItemIds;
    /**
     * Allows restoring list items that refer to list items or contents that don't exist in the system.
     *
     * @var bool
     */
    protected $allowMissingDependencies;
    /**
     * The IDs of the list items to restore.
     *
     * @return string[]
     */
    public function getListItemIds() : array
    {
        return $this->listItemIds;
    }
    /**
     * The IDs of the list items to restore.
     *
     * @param string[] $listItemIds
     *
     * @return self
     */
    public function setListItemIds(array $listItemIds) : self
    {
        $this->listItemIds = $listItemIds;
        return $this;
    }
    /**
     * Allows restoring list items that refer to list items or contents that don't exist in the system.
     *
     * @return bool
     */
    public function getAllowMissingDependencies() : bool
    {
        return $this->allowMissingDependencies;
    }
    /**
     * Allows restoring list items that refer to list items or contents that don't exist in the system.
     *
     * @param bool $allowMissingDependencies
     *
     * @return self
     */
    public function setAllowMissingDependencies(bool $allowMissingDependencies) : self
    {
        $this->allowMissingDependencies = $allowMissingDependencies;
        return $this;
    }
}
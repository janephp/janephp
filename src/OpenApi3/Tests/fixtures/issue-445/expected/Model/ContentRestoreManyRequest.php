<?php

namespace PicturePark\API\Model;

class ContentRestoreManyRequest
{
    /**
     * IDs of the contents to restore.
     *
     * @var string[]
     */
    protected $contentIds;
    /**
     * Allows creating contents that refer to list items or contents that don't exist in the system.
     *
     * @var bool
     */
    protected $allowMissingDependencies;
    /**
     * IDs of the contents to restore.
     *
     * @return string[]
     */
    public function getContentIds() : array
    {
        return $this->contentIds;
    }
    /**
     * IDs of the contents to restore.
     *
     * @param string[] $contentIds
     *
     * @return self
     */
    public function setContentIds(array $contentIds) : self
    {
        $this->contentIds = $contentIds;
        return $this;
    }
    /**
     * Allows creating contents that refer to list items or contents that don't exist in the system.
     *
     * @return bool
     */
    public function getAllowMissingDependencies() : bool
    {
        return $this->allowMissingDependencies;
    }
    /**
     * Allows creating contents that refer to list items or contents that don't exist in the system.
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
<?php

namespace PicturePark\API\Model;

class OutputResolveManyRequest
{
    /**
     * The IDs of the contents whose outputs should to be retrieved.
     *
     * @var string[]
     */
    protected $contentIds;
    /**
     * The IDs of the contents whose outputs should to be retrieved.
     *
     * @return string[]
     */
    public function getContentIds() : array
    {
        return $this->contentIds;
    }
    /**
     * The IDs of the contents whose outputs should to be retrieved.
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
}
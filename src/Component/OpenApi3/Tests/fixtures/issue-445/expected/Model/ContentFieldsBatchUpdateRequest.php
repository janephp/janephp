<?php

namespace PicturePark\API\Model;

class ContentFieldsBatchUpdateRequest extends MetadataValuesChangeRequestBase
{
    /**
     * The IDs of the contents whose fields need to be updated.
     *
     * @var string[]
     */
    protected $contentIds;
    /**
     * The IDs of the contents whose fields need to be updated.
     *
     * @return string[]
     */
    public function getContentIds() : array
    {
        return $this->contentIds;
    }
    /**
     * The IDs of the contents whose fields need to be updated.
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
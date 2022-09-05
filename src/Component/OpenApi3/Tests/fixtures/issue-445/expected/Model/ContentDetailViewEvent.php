<?php

namespace PicturePark\API\Model;

class ContentDetailViewEvent extends ApplicationEvent
{
    /**
     * 
     *
     * @var string[]|null
     */
    protected $contentIds;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getContentIds() : ?array
    {
        return $this->contentIds;
    }
    /**
     * 
     *
     * @param string[]|null $contentIds
     *
     * @return self
     */
    public function setContentIds(?array $contentIds) : self
    {
        $this->contentIds = $contentIds;
        return $this;
    }
}
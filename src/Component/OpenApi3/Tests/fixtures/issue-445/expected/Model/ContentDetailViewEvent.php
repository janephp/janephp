<?php

namespace PicturePark\API\Model;

class ContentDetailViewEvent extends ApplicationEvent
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $contentIds;
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getContentIds() : ?array
    {
        return $this->contentIds;
    }
    /**
     * 
     *
     * @param list<string>|null $contentIds
     *
     * @return self
     */
    public function setContentIds(?array $contentIds) : self
    {
        $this->initialized['contentIds'] = true;
        $this->contentIds = $contentIds;
        return $this;
    }
}
<?php

namespace PicturePark\API\Model;

class SearchReindexCompletedEvent extends ApplicationEvent
{
    /**
     * 
     *
     * @var string
     */
    protected $searchIndex;
    /**
     * 
     *
     * @var int
     */
    protected $items;
    /**
     * 
     *
     * @var string
     */
    protected $duration;
    /**
     * 
     *
     * @return string
     */
    public function getSearchIndex() : string
    {
        return $this->searchIndex;
    }
    /**
     * 
     *
     * @param string $searchIndex
     *
     * @return self
     */
    public function setSearchIndex(string $searchIndex) : self
    {
        $this->searchIndex = $searchIndex;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getItems() : int
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param int $items
     *
     * @return self
     */
    public function setItems(int $items) : self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDuration() : string
    {
        return $this->duration;
    }
    /**
     * 
     *
     * @param string $duration
     *
     * @return self
     */
    public function setDuration(string $duration) : self
    {
        $this->duration = $duration;
        return $this;
    }
}
<?php

namespace PicturePark\API\Model;

class SearchReindexCompletedEvent extends ApplicationEvent
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['searchIndex'] = true;
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
        $this->initialized['items'] = true;
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
        $this->initialized['duration'] = true;
        $this->duration = $duration;
        return $this;
    }
}
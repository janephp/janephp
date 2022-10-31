<?php

namespace PicturePark\API\Model;

class ReindexEvent extends ApplicationEvent
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
     * @var string|null
     */
    protected $indexId;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @return string|null
     */
    public function getIndexId() : ?string
    {
        return $this->indexId;
    }
    /**
     * 
     *
     * @param string|null $indexId
     *
     * @return self
     */
    public function setIndexId(?string $indexId) : self
    {
        $this->initialized['indexId'] = true;
        $this->indexId = $indexId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
}
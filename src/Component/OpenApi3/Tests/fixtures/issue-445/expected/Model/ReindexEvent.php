<?php

namespace PicturePark\API\Model;

class ReindexEvent extends ApplicationEvent
{
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
        $this->state = $state;
        return $this;
    }
}
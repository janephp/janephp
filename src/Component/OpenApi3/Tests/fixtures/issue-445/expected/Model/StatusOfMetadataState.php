<?php

namespace PicturePark\API\Model;

class StatusOfMetadataState
{
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * The state of the contents and list items
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The state of the contents and list items
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * The state of the contents and list items
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
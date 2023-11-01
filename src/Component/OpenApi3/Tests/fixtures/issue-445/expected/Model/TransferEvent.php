<?php

namespace PicturePark\API\Model;

class TransferEvent extends ApplicationEvent
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
     * @var string|null
     */
    protected $transferId;
    /**
     * Transfer states
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @return string|null
     */
    public function getTransferId() : ?string
    {
        return $this->transferId;
    }
    /**
     * 
     *
     * @param string|null $transferId
     *
     * @return self
     */
    public function setTransferId(?string $transferId) : self
    {
        $this->initialized['transferId'] = true;
        $this->transferId = $transferId;
        return $this;
    }
    /**
     * Transfer states
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * Transfer states
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
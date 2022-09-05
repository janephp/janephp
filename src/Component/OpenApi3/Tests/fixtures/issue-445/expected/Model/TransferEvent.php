<?php

namespace PicturePark\API\Model;

class TransferEvent extends ApplicationEvent
{
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
        $this->state = $state;
        return $this;
    }
}
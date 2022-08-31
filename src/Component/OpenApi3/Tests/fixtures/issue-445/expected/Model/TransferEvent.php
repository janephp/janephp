<?php

namespace PicturePark\API\Model;

class TransferEvent extends ApplicationEvent
{
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
     * @return \DateTime
     */
    public function getTimestamp() : \DateTime
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp) : self
    {
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
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
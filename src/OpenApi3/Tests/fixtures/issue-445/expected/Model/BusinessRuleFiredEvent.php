<?php

namespace PicturePark\API\Model;

class BusinessRuleFiredEvent
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
     * @var BusinessRuleFiredEventDetail[]|null
     */
    protected $details;
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
     * @return BusinessRuleFiredEventDetail[]|null
     */
    public function getDetails() : ?array
    {
        return $this->details;
    }
    /**
     * 
     *
     * @param BusinessRuleFiredEventDetail[]|null $details
     *
     * @return self
     */
    public function setDetails(?array $details) : self
    {
        $this->details = $details;
        return $this;
    }
}
<?php

namespace PicturePark\API\Model;

class SessionRenewalEvent
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
     * User authorization state
     *
     * @var string
     */
    protected $authorizationState;
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
     * User authorization state
     *
     * @return string
     */
    public function getAuthorizationState() : string
    {
        return $this->authorizationState;
    }
    /**
     * User authorization state
     *
     * @param string $authorizationState
     *
     * @return self
     */
    public function setAuthorizationState(string $authorizationState) : self
    {
        $this->authorizationState = $authorizationState;
        return $this;
    }
}
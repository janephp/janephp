<?php

namespace PicturePark\API\Model;

class SessionRenewalEvent extends ApplicationEvent
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
     * User authorization state
     *
     * @var string
     */
    protected $authorizationState;
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
        $this->initialized['authorizationState'] = true;
        $this->authorizationState = $authorizationState;
        return $this;
    }
}
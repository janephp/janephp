<?php

namespace PicturePark\API\Model;

class SessionRenewalEvent extends ApplicationEvent
{
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
        $this->authorizationState = $authorizationState;
        return $this;
    }
}
<?php

namespace CreditSafe\API\Model;

class AuthenticationSuccessResponse extends \ArrayObject
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
     * Authentication Token
     *
     * @var string
     */
    protected $token;
    /**
     * Authentication Token
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    /**
     * Authentication Token
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token) : self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
}
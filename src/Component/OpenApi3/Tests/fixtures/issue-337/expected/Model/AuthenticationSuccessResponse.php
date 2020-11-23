<?php

namespace CreditSafe\API\Model;

class AuthenticationSuccessResponse
{
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
        $this->token = $token;
        return $this;
    }
}
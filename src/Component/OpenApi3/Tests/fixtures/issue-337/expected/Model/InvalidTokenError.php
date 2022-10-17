<?php

namespace CreditSafe\API\Model;

class InvalidTokenError extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $error;
    /**
     * 
     *
     * @return string
     */
    public function getError() : string
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error) : self
    {
        $this->error = $error;
        return $this;
    }
}
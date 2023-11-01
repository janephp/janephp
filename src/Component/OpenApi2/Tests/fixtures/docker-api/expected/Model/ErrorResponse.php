<?php

namespace Docker\Api\Model;

class ErrorResponse
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
     * The error message.
     *
     * @var string
     */
    protected $message;
    /**
     * The error message.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * The error message.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}
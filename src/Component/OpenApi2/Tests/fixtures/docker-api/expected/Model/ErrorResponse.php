<?php

namespace Docker\Api\Model;

class ErrorResponse
{
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
        $this->message = $message;
        return $this;
    }
}
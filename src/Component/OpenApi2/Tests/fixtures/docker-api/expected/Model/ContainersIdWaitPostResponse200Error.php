<?php

namespace Docker\Api\Model;

class ContainersIdWaitPostResponse200Error
{
    /**
     * Details of an error
     *
     * @var string
     */
    protected $message;
    /**
     * Details of an error
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Details of an error
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
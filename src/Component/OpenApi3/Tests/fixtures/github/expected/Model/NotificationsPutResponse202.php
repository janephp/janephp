<?php

namespace Github\Model;

class NotificationsPutResponse202 extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
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
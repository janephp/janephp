<?php

namespace Docker\Api\Model;

class ContainersIdArchiveGetResponse400
{
    /**
    * The error message. Either "must specify path parameter"
    (path cannot be empty) or "not a directory" (path was
    asserted to be a directory but exists as a file).
    
    *
    * @var string
    */
    protected $message;
    /**
    * The error message. Either "must specify path parameter"
    (path cannot be empty) or "not a directory" (path was
    asserted to be a directory but exists as a file).
    
    *
    * @return string
    */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
    * The error message. Either "must specify path parameter"
    (path cannot be empty) or "not a directory" (path was
    asserted to be a directory but exists as a file).
    
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
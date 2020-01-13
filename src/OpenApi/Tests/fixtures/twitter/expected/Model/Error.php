<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class Error
{
    /**
     * 
     *
     * @var int
     */
    protected $code;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @return int
     */
    public function getCode() : int
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param int $code
     *
     * @return self
     */
    public function setCode(int $code) : self
    {
        $this->code = $code;
        return $this;
    }
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
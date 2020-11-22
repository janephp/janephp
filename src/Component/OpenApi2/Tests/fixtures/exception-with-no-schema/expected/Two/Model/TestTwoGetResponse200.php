<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Two\Model;

class TestTwoGetResponse200
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
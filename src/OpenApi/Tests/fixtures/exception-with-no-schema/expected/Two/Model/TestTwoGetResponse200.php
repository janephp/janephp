<?php

namespace Jane\OpenApi\Tests\Expected\Two\Model;

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
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
}
<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class TestComplexListGetResponse200Item1
{
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
}
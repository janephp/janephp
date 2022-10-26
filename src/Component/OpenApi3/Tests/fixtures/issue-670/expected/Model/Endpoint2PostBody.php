<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Endpoint2PostBody extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $postField2;
    /**
     * 
     *
     * @return string
     */
    public function getPostField2() : string
    {
        return $this->postField2;
    }
    /**
     * 
     *
     * @param string $postField2
     *
     * @return self
     */
    public function setPostField2(string $postField2) : self
    {
        $this->postField2 = $postField2;
        return $this;
    }
}
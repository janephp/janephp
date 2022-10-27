<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Endpoint1PostBody extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $postField1;
    /**
     * 
     *
     * @return string
     */
    public function getPostField1() : string
    {
        return $this->postField1;
    }
    /**
     * 
     *
     * @param string $postField1
     *
     * @return self
     */
    public function setPostField1(string $postField1) : self
    {
        $this->postField1 = $postField1;
        return $this;
    }
}
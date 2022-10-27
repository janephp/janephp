<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Endpoint3PostBodyPostField3 extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $postSubField3;
    /**
     * 
     *
     * @return string
     */
    public function getPostSubField3() : string
    {
        return $this->postSubField3;
    }
    /**
     * 
     *
     * @param string $postSubField3
     *
     * @return self
     */
    public function setPostSubField3(string $postSubField3) : self
    {
        $this->postSubField3 = $postSubField3;
        return $this;
    }
}
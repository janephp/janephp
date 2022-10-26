<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Endpoint3PostBody extends \ArrayObject
{
    /**
     * 
     *
     * @var Endpoint3PostBodyPostField3
     */
    protected $postField3;
    /**
     * 
     *
     * @return Endpoint3PostBodyPostField3
     */
    public function getPostField3() : Endpoint3PostBodyPostField3
    {
        return $this->postField3;
    }
    /**
     * 
     *
     * @param Endpoint3PostBodyPostField3 $postField3
     *
     * @return self
     */
    public function setPostField3(Endpoint3PostBodyPostField3 $postField3) : self
    {
        $this->postField3 = $postField3;
        return $this;
    }
}
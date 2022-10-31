<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Endpoint3PostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['postField3'] = true;
        $this->postField3 = $postField3;
        return $this;
    }
}
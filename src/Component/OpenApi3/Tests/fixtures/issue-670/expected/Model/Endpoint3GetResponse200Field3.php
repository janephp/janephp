<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Endpoint3GetResponse200Field3 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $subField3;
    /**
     * 
     *
     * @return string
     */
    public function getSubField3() : string
    {
        return $this->subField3;
    }
    /**
     * 
     *
     * @param string $subField3
     *
     * @return self
     */
    public function setSubField3(string $subField3) : self
    {
        $this->initialized['subField3'] = true;
        $this->subField3 = $subField3;
        return $this;
    }
}
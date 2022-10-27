<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Endpoint3GetResponse200Field3 extends \ArrayObject
{
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
        $this->subField3 = $subField3;
        return $this;
    }
}
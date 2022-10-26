<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Endpoint3GetResponse200 extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $field3;
    /**
     * 
     *
     * @return string
     */
    public function getField3() : string
    {
        return $this->field3;
    }
    /**
     * 
     *
     * @param string $field3
     *
     * @return self
     */
    public function setField3(string $field3) : self
    {
        $this->field3 = $field3;
        return $this;
    }
}
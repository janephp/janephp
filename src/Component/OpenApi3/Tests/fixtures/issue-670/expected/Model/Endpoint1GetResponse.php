<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Endpoint1GetResponse extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $field1;
    /**
     * 
     *
     * @return string
     */
    public function getField1() : string
    {
        return $this->field1;
    }
    /**
     * 
     *
     * @param string $field1
     *
     * @return self
     */
    public function setField1(string $field1) : self
    {
        $this->field1 = $field1;
        return $this;
    }
}
<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Endpoint1GetResponse extends \ArrayObject
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
        $this->initialized['field1'] = true;
        $this->field1 = $field1;
        return $this;
    }
}
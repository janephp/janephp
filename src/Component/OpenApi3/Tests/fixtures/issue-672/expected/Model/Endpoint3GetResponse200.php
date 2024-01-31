<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Endpoint3GetResponse200 extends \ArrayObject
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
        $this->initialized['field3'] = true;
        $this->field3 = $field3;
        return $this;
    }
}
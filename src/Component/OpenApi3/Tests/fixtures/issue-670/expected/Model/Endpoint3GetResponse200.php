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
     * @var Endpoint3GetResponse200Field3
     */
    protected $field3;
    /**
     * 
     *
     * @return Endpoint3GetResponse200Field3
     */
    public function getField3() : Endpoint3GetResponse200Field3
    {
        return $this->field3;
    }
    /**
     * 
     *
     * @param Endpoint3GetResponse200Field3 $field3
     *
     * @return self
     */
    public function setField3(Endpoint3GetResponse200Field3 $field3) : self
    {
        $this->initialized['field3'] = true;
        $this->field3 = $field3;
        return $this;
    }
}
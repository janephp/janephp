<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Endpoint2GetResponse extends \ArrayObject
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
     * @var SubLevel1
     */
    protected $field2;
    /**
     * 
     *
     * @var SubLevel2
     */
    protected $field2Bis;
    /**
     * 
     *
     * @return SubLevel1
     */
    public function getField2() : SubLevel1
    {
        return $this->field2;
    }
    /**
     * 
     *
     * @param SubLevel1 $field2
     *
     * @return self
     */
    public function setField2(SubLevel1 $field2) : self
    {
        $this->initialized['field2'] = true;
        $this->field2 = $field2;
        return $this;
    }
    /**
     * 
     *
     * @return SubLevel2
     */
    public function getField2Bis() : SubLevel2
    {
        return $this->field2Bis;
    }
    /**
     * 
     *
     * @param SubLevel2 $field2Bis
     *
     * @return self
     */
    public function setField2Bis(SubLevel2 $field2Bis) : self
    {
        $this->initialized['field2Bis'] = true;
        $this->field2Bis = $field2Bis;
        return $this;
    }
}
<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SubLevel3 extends \ArrayObject
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
    protected $end;
    /**
     * 
     *
     * @return string
     */
    public function getEnd() : string
    {
        return $this->end;
    }
    /**
     * 
     *
     * @param string $end
     *
     * @return self
     */
    public function setEnd(string $end) : self
    {
        $this->initialized['end'] = true;
        $this->end = $end;
        return $this;
    }
}
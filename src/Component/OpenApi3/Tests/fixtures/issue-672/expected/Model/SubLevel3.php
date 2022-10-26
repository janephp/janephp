<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SubLevel3 extends \ArrayObject
{
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
        $this->end = $end;
        return $this;
    }
}
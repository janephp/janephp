<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WithoutImplicitAdditionalProps
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
    protected $a;
    /**
     * 
     *
     * @return string
     */
    public function getA() : string
    {
        return $this->a;
    }
    /**
     * 
     *
     * @param string $a
     *
     * @return self
     */
    public function setA(string $a) : self
    {
        $this->initialized['a'] = true;
        $this->a = $a;
        return $this;
    }
}
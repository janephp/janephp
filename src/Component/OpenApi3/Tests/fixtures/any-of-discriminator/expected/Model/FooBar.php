<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class FooBar extends \ArrayObject
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
     * @var Foo|Bar
     */
    protected $what;
    /**
     * 
     *
     * @return Foo|Bar
     */
    public function getWhat()
    {
        return $this->what;
    }
    /**
     * 
     *
     * @param Foo|Bar $what
     *
     * @return self
     */
    public function setWhat($what) : self
    {
        $this->initialized['what'] = true;
        $this->what = $what;
        return $this;
    }
}
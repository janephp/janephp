<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Foo extends \ArrayObject
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
     * @var mixed
     */
    protected $bar;
    /**
     * @return mixed
     */
    public function getBar()
    {
        return $this->bar;
    }
    /**
     * @param mixed $bar
     *
     * @return self
     */
    public function setBar($bar) : self
    {
        $this->initialized['bar'] = true;
        $this->bar = $bar;
        return $this;
    }
}

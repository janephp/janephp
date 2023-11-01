<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SubBaz extends \ArrayObject
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
     * @var Baz
     */
    protected $parent;
    /**
     * 
     *
     * @return Baz
     */
    public function getParent() : Baz
    {
        return $this->parent;
    }
    /**
     * 
     *
     * @param Baz $parent
     *
     * @return self
     */
    public function setParent(Baz $parent) : self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
}
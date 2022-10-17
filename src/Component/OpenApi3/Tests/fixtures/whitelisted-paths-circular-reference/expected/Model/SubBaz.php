<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SubBaz extends \ArrayObject
{
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
        $this->parent = $parent;
        return $this;
    }
}
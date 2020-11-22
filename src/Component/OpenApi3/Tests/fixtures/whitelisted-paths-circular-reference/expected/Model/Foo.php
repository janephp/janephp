<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Foo
{
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @var Foo
     */
    protected $parent;
    /**
     * 
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return Foo
     */
    public function getParent() : Foo
    {
        return $this->parent;
    }
    /**
     * 
     *
     * @param Foo $parent
     *
     * @return self
     */
    public function setParent(Foo $parent) : self
    {
        $this->parent = $parent;
        return $this;
    }
}
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
        $this->initialized['label'] = true;
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
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
}
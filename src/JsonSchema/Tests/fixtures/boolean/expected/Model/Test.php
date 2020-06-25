<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var bool
     */
    protected $elements;
    /**
     * 
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function isActive() : bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getElements() : bool
    {
        return $this->elements;
    }
    /**
     * 
     *
     * @param bool $elements
     *
     * @return self
     */
    public function setElements(bool $elements) : self
    {
        $this->elements = $elements;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function hasElements() : bool
    {
        return $this->elements;
    }
}
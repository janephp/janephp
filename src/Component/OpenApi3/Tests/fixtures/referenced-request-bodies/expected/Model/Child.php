<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Child extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
}
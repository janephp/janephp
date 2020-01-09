<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class Parent
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
     * @var Child[]
     */
    protected $child;
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
    /**
     * 
     *
     * @return Child[]
     */
    public function getChild() : array
    {
        return $this->child;
    }
    /**
     * 
     *
     * @param Child[] $child
     *
     * @return self
     */
    public function setChild(array $child) : self
    {
        $this->child = $child;
        return $this;
    }
}
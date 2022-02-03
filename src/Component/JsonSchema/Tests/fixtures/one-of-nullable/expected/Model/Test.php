<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * 
     *
     * @var null|Id
     */
    protected $id;
    /**
     * 
     *
     * @return null|Id
     */
    public function getId() : ?Id
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param null|Id $id
     *
     * @return self
     */
    public function setId(?Id $id) : self
    {
        $this->id = $id;
        return $this;
    }
}
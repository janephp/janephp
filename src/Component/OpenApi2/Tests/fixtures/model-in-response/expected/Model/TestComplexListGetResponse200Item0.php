<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class TestComplexListGetResponse200Item0
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}
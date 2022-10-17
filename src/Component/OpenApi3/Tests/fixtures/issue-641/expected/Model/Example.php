<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Example extends \ArrayObject
{
    /**
     * 
     *
     * @var string|null
     */
    protected $property1;
    /**
     * 
     *
     * @return string|null
     */
    public function getProperty1() : ?string
    {
        return $this->property1;
    }
    /**
     * 
     *
     * @param string|null $property1
     *
     * @return self
     */
    public function setProperty1(?string $property1) : self
    {
        $this->property1 = $property1;
        return $this;
    }
}
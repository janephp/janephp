<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * 
     *
     * @var string
     */
    protected $string;
    /**
     * 
     *
     * @var TestSubObject
     */
    protected $subObject;
    /**
     * 
     *
     * @return string|null
     */
    public function getString() : ?string
    {
        return $this->string;
    }
    /**
     * 
     *
     * @param string|null $string
     *
     * @return self
     */
    public function setString(?string $string) : self
    {
        $this->string = $string;
        return $this;
    }
    /**
     * 
     *
     * @return TestSubObject|null
     */
    public function getSubObject() : ?TestSubObject
    {
        return $this->subObject;
    }
    /**
     * 
     *
     * @param TestSubObject|null $subObject
     *
     * @return self
     */
    public function setSubObject(?TestSubObject $subObject) : self
    {
        $this->subObject = $subObject;
        return $this;
    }
}
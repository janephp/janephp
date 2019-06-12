<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class EmptySpace
{
    /**
     * 
     *
     * @var string
     */
    protected $stringProperty;
    /**
     * 
     *
     * @return string|null
     */
    public function getStringProperty() : ?string
    {
        return $this->stringProperty;
    }
    /**
     * 
     *
     * @param string|null $stringProperty
     *
     * @return self
     */
    public function setStringProperty(?string $stringProperty) : self
    {
        $this->stringProperty = $stringProperty;
        return $this;
    }
}
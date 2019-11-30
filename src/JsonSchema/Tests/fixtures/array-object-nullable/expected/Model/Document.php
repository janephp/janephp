<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Document
{
    /**
     * 
     *
     * @var Attributes[]|null
     */
    protected $attributes;
    /**
     * 
     *
     * @return Attributes[]|null
     */
    public function getAttributes() : ?array
    {
        return $this->attributes;
    }
    /**
     * 
     *
     * @param Attributes[]|null $attributes
     *
     * @return self
     */
    public function setAttributes(?array $attributes) : self
    {
        $this->attributes = $attributes;
        return $this;
    }
}
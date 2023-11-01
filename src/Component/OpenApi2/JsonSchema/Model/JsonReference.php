<?php

namespace Jane\Component\OpenApi2\JsonSchema\Model;

class JsonReference
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string|null
     */
    protected $dollarRef;
    /**
     * 
     *
     * @return string|null
     */
    public function getDollarRef() : ?string
    {
        return $this->dollarRef;
    }
    /**
     * 
     *
     * @param string|null $dollarRef
     *
     * @return self
     */
    public function setDollarRef(?string $dollarRef) : self
    {
        $this->initialized['dollarRef'] = true;
        $this->dollarRef = $dollarRef;
        return $this;
    }
}
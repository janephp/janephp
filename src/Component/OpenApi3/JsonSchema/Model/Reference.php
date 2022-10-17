<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class Reference
{
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
        $this->dollarRef = $dollarRef;
        return $this;
    }
}
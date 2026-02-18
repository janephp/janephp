<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseCa extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var Ca
     */
    protected $ca;
    /**
     * @return Ca
     */
    public function getCa(): Ca
    {
        return $this->ca;
    }
    /**
     * @param Ca $ca
     *
     * @return self
     */
    public function setCa(Ca $ca): self
    {
        $this->initialized['ca'] = true;
        $this->ca = $ca;
        return $this;
    }
}
<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseCa implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['ca' => ['ca', 'getCa', 'setCa']];
    }
}
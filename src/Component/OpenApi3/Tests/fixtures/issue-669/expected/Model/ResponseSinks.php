<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseSinks implements AdditionalPropertiesInterface
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
     * @var SinksResponse
     */
    protected $sink;
    /**
     * @return SinksResponse
     */
    public function getSink(): SinksResponse
    {
        return $this->sink;
    }
    /**
     * @param SinksResponse $sink
     *
     * @return self
     */
    public function setSink(SinksResponse $sink): self
    {
        $this->initialized['sink'] = true;
        $this->sink = $sink;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['sink' => ['sink', 'getSink', 'setSink']];
    }
}
<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseExistingVpc implements AdditionalPropertiesInterface
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
     * @var array<string, mixed>
     */
    protected $vpc;
    /**
     * @return array<string, mixed>
     */
    public function getVpc(): iterable
    {
        return $this->vpc;
    }
    /**
     * @param array<string, mixed> $vpc
     *
     * @return self
     */
    public function setVpc(iterable $vpc): self
    {
        $this->initialized['vpc'] = true;
        $this->vpc = $vpc;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['vpc' => ['vpc', 'getVpc', 'setVpc']];
    }
}
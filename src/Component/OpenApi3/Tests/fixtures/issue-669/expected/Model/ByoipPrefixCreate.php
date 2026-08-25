<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ByoipPrefixCreate implements AdditionalPropertiesInterface
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
     * The IP prefix in CIDR notation to bring
     *
     * @var string
     */
    protected $prefix;
    /**
     * The region where the prefix will be created
     *
     * @var string
     */
    protected $region;
    /**
     * The signature hash for the prefix creation request
     *
     * @var string
     */
    protected $signature;
    /**
     * The IP prefix in CIDR notation to bring
     *
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }
    /**
     * The IP prefix in CIDR notation to bring
     *
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix(string $prefix): self
    {
        $this->initialized['prefix'] = true;
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * The region where the prefix will be created
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The region where the prefix will be created
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * The signature hash for the prefix creation request
     *
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }
    /**
     * The signature hash for the prefix creation request
     *
     * @param string $signature
     *
     * @return self
     */
    public function setSignature(string $signature): self
    {
        $this->initialized['signature'] = true;
        $this->signature = $signature;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['prefix' => ['prefix', 'getPrefix', 'setPrefix'], 'region' => ['region', 'getRegion', 'setRegion'], 'signature' => ['signature', 'getSignature', 'setSignature']];
    }
}
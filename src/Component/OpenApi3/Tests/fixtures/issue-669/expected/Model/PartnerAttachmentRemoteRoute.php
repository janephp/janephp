<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PartnerAttachmentRemoteRoute implements AdditionalPropertiesInterface
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
     * A CIDR block representing a remote route.
     *
     * @var string
     */
    protected $cidr;
    /**
     * A CIDR block representing a remote route.
     *
     * @return string
     */
    public function getCidr(): string
    {
        return $this->cidr;
    }
    /**
     * A CIDR block representing a remote route.
     *
     * @param string $cidr
     *
     * @return self
     */
    public function setCidr(string $cidr): self
    {
        $this->initialized['cidr'] = true;
        $this->cidr = $cidr;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['cidr' => ['cidr', 'getCidr', 'setCidr']];
    }
}
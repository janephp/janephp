<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PartnerAttachmentUpdatableAnyOf implements AdditionalPropertiesInterface
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
     * BGP configurations
     *
     * @var PartnerAttachmentUpdatableAnyOfBgp
     */
    protected $bgp;
    /**
     * BGP configurations
     *
     * @return PartnerAttachmentUpdatableAnyOfBgp
     */
    public function getBgp(): PartnerAttachmentUpdatableAnyOfBgp
    {
        return $this->bgp;
    }
    /**
     * BGP configurations
     *
     * @param PartnerAttachmentUpdatableAnyOfBgp $bgp
     *
     * @return self
     */
    public function setBgp(PartnerAttachmentUpdatableAnyOfBgp $bgp): self
    {
        $this->initialized['bgp'] = true;
        $this->bgp = $bgp;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['bgp' => ['bgp', 'getBgp', 'setBgp']];
    }
}
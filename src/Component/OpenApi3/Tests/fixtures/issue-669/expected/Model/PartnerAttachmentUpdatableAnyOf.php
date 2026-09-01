<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PartnerAttachmentUpdatableAnyOf implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * BGP configurations
     *
     * @var PartnerAttachmentUpdatableAnyOfBgp
     */
    public PartnerAttachmentUpdatableAnyOfBgp $bgp;
    public function definedProperties(): array
    {
        return ['bgp' => 'bgp'];
    }
}
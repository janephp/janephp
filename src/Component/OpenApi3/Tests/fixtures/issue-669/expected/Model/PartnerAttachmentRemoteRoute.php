<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PartnerAttachmentRemoteRoute implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A CIDR block representing a remote route.
     *
     * @var string
     */
    public string $cidr;
    public function definedProperties(): array
    {
        return ['cidr' => 'cidr'];
    }
}
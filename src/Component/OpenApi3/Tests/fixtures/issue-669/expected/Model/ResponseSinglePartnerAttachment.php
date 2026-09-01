<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseSinglePartnerAttachment implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var PartnerAttachment
     */
    public PartnerAttachment $partnerAttachment;
    public function definedProperties(): array
    {
        return ['partnerAttachment' => 'partner_attachment'];
    }
}
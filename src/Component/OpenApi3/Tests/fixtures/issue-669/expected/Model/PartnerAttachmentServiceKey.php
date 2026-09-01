<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PartnerAttachmentServiceKey implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $value;
    /**
     * A time value given in the ISO 8601 combined date and time format.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * @var string
     */
    public string $state;
    public function definedProperties(): array
    {
        return ['value' => 'value', 'createdAt' => 'created_at', 'state' => 'state'];
    }
}
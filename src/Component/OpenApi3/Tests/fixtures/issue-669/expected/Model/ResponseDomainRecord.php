<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDomainRecord implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var DomainRecord
     */
    public DomainRecord $domainRecord;
    public function definedProperties(): array
    {
        return ['domainRecord' => 'domain_record'];
    }
}
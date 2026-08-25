<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDomainRecord implements AdditionalPropertiesInterface
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
     * @var DomainRecord
     */
    protected $domainRecord;
    /**
     * @return DomainRecord
     */
    public function getDomainRecord(): DomainRecord
    {
        return $this->domainRecord;
    }
    /**
     * @param DomainRecord $domainRecord
     *
     * @return self
     */
    public function setDomainRecord(DomainRecord $domainRecord): self
    {
        $this->initialized['domainRecord'] = true;
        $this->domainRecord = $domainRecord;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['domainRecord' => ['domain_record', 'getDomainRecord', 'setDomainRecord']];
    }
}
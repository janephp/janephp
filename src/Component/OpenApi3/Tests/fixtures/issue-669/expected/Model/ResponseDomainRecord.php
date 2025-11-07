<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseDomainRecord extends \ArrayObject
{
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
}
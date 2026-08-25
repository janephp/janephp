<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseSinglePartnerAttachmentServiceKey implements AdditionalPropertiesInterface
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
     * @var array<string, mixed>
     */
    protected $serviceKey;
    /**
     * @return array<string, mixed>
     */
    public function getServiceKey(): iterable
    {
        return $this->serviceKey;
    }
    /**
     * @param array<string, mixed> $serviceKey
     *
     * @return self
     */
    public function setServiceKey(iterable $serviceKey): self
    {
        $this->initialized['serviceKey'] = true;
        $this->serviceKey = $serviceKey;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['serviceKey' => ['service_key', 'getServiceKey', 'setServiceKey']];
    }
}
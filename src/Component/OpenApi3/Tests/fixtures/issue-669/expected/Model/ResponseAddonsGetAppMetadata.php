<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAddonsGetAppMetadata implements AdditionalPropertiesInterface
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
     * @var list<AddonsAppMetadata>
     */
    protected $metadata;
    /**
     * @return list<AddonsAppMetadata>
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }
    /**
     * @param list<AddonsAppMetadata> $metadata
     *
     * @return self
     */
    public function setMetadata(array $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['metadata' => ['metadata', 'getMetadata', 'setMetadata']];
    }
}
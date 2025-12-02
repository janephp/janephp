<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAddonsGetAppMetadata extends \ArrayObject
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
}
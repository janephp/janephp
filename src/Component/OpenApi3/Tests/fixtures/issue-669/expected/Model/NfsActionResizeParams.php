<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsActionResizeParams implements AdditionalPropertiesInterface
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
     * The new size for the NFS share.
     *
     * @var int
     */
    protected $sizeGib;
    /**
     * The new size for the NFS share.
     *
     * @return int
     */
    public function getSizeGib(): int
    {
        return $this->sizeGib;
    }
    /**
     * The new size for the NFS share.
     *
     * @param int $sizeGib
     *
     * @return self
     */
    public function setSizeGib(int $sizeGib): self
    {
        $this->initialized['sizeGib'] = true;
        $this->sizeGib = $sizeGib;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['sizeGib' => ['size_gib', 'getSizeGib', 'setSizeGib']];
    }
}
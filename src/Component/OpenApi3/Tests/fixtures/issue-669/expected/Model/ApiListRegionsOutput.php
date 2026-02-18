<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiListRegionsOutput extends \ArrayObject
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
     * Region code
     *
     * @var list<GenaiapiRegion>
     */
    protected $regions;
    /**
     * Region code
     *
     * @return list<GenaiapiRegion>
     */
    public function getRegions(): array
    {
        return $this->regions;
    }
    /**
     * Region code
     *
     * @param list<GenaiapiRegion> $regions
     *
     * @return self
     */
    public function setRegions(array $regions): self
    {
        $this->initialized['regions'] = true;
        $this->regions = $regions;
        return $this;
    }
}
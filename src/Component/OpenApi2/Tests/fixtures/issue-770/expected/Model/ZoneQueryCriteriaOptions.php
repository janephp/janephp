<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneQueryCriteriaOptions
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
     * @var string
     */
    protected $zoneIpmode;
    /**
     * Include the resources of parent domain as well while querying.
     *
     * @var bool
     */
    protected $includeSharedResources;
    /**
     * @return string
     */
    public function getZoneIpmode(): string
    {
        return $this->zoneIpmode;
    }
    /**
     * @param string $zoneIpmode
     *
     * @return self
     */
    public function setZoneIpmode(string $zoneIpmode): self
    {
        $this->initialized['zoneIpmode'] = true;
        $this->zoneIpmode = $zoneIpmode;
        return $this;
    }
    /**
     * Include the resources of parent domain as well while querying.
     *
     * @return bool
     */
    public function getIncludeSharedResources(): bool
    {
        return $this->includeSharedResources;
    }
    /**
     * Include the resources of parent domain as well while querying.
     *
     * @param bool $includeSharedResources
     *
     * @return self
     */
    public function setIncludeSharedResources(bool $includeSharedResources): self
    {
        $this->initialized['includeSharedResources'] = true;
        $this->includeSharedResources = $includeSharedResources;
        return $this;
    }
}
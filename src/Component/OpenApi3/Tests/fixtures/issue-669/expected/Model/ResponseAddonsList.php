<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAddonsList extends \ArrayObject
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
     * @var list<AddonsResource>
     */
    protected $resources;
    /**
     * @return list<AddonsResource>
     */
    public function getResources(): array
    {
        return $this->resources;
    }
    /**
     * @param list<AddonsResource> $resources
     *
     * @return self
     */
    public function setResources(array $resources): self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;
        return $this;
    }
}
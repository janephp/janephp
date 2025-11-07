<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppInstances extends \ArrayObject
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
     * @var list<AppInstance>
     */
    protected $instances;
    /**
     * @return list<AppInstance>
     */
    public function getInstances(): array
    {
        return $this->instances;
    }
    /**
     * @param list<AppInstance> $instances
     *
     * @return self
     */
    public function setInstances(array $instances): self
    {
        $this->initialized['instances'] = true;
        $this->instances = $instances;
        return $this;
    }
}
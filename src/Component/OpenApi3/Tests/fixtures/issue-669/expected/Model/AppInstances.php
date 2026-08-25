<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppInstances implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['instances' => ['instances', 'getInstances', 'setInstances']];
    }
}
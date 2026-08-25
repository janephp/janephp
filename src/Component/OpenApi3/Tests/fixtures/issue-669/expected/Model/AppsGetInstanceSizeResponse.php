<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsGetInstanceSizeResponse implements AdditionalPropertiesInterface
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
     * @var AppsInstanceSize
     */
    protected $instanceSize;
    /**
     * @return AppsInstanceSize
     */
    public function getInstanceSize(): AppsInstanceSize
    {
        return $this->instanceSize;
    }
    /**
     * @param AppsInstanceSize $instanceSize
     *
     * @return self
     */
    public function setInstanceSize(AppsInstanceSize $instanceSize): self
    {
        $this->initialized['instanceSize'] = true;
        $this->instanceSize = $instanceSize;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['instanceSize' => ['instance_size', 'getInstanceSize', 'setInstanceSize']];
    }
}
<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAutoscalePoolCreate implements AdditionalPropertiesInterface
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
     * @var AutoscalePool
     */
    protected $autoscalePool;
    /**
     * @return AutoscalePool
     */
    public function getAutoscalePool(): AutoscalePool
    {
        return $this->autoscalePool;
    }
    /**
     * @param AutoscalePool $autoscalePool
     *
     * @return self
     */
    public function setAutoscalePool(AutoscalePool $autoscalePool): self
    {
        $this->initialized['autoscalePool'] = true;
        $this->autoscalePool = $autoscalePool;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['autoscalePool' => ['autoscale_pool', 'getAutoscalePool', 'setAutoscalePool']];
    }
}
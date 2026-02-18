<?php

namespace Jane\Generated\DigitalOcean\Model;

class AutoscalePoolStaticConfig extends \ArrayObject
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
     * Fixed number of instances in an autoscale pool.
     *
     * @var int
     */
    protected $targetNumberInstances;
    /**
     * Fixed number of instances in an autoscale pool.
     *
     * @return int
     */
    public function getTargetNumberInstances(): int
    {
        return $this->targetNumberInstances;
    }
    /**
     * Fixed number of instances in an autoscale pool.
     *
     * @param int $targetNumberInstances
     *
     * @return self
     */
    public function setTargetNumberInstances(int $targetNumberInstances): self
    {
        $this->initialized['targetNumberInstances'] = true;
        $this->targetNumberInstances = $targetNumberInstances;
        return $this;
    }
}
<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class WorkflowUsageBillableUBUNTU implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $totalMs;
    /**
     * @return int
     */
    public function getTotalMs(): int
    {
        return $this->totalMs;
    }
    /**
     * @param int $totalMs
     *
     * @return self
     */
    public function setTotalMs(int $totalMs): self
    {
        $this->initialized['totalMs'] = true;
        $this->totalMs = $totalMs;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['totalMs' => ['total_ms', 'getTotalMs', 'setTotalMs']];
    }
}
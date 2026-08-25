<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class WorkflowUsage implements AdditionalPropertiesInterface
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
     * @var WorkflowUsageBillable
     */
    protected $billable;
    /**
     * @return WorkflowUsageBillable
     */
    public function getBillable(): WorkflowUsageBillable
    {
        return $this->billable;
    }
    /**
     * @param WorkflowUsageBillable $billable
     *
     * @return self
     */
    public function setBillable(WorkflowUsageBillable $billable): self
    {
        $this->initialized['billable'] = true;
        $this->billable = $billable;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['billable' => ['billable', 'getBillable', 'setBillable']];
    }
}
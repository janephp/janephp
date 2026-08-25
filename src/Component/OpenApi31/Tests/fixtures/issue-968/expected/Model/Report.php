<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Report implements AdditionalPropertiesInterface
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
     * @var ReportPeriod|null
     */
    protected $period;
    /**
     * @return ReportPeriod|null
     */
    public function getPeriod(): ?ReportPeriod
    {
        return $this->period;
    }
    /**
     * @param ReportPeriod|null $period
     *
     * @return self
     */
    public function setPeriod(?ReportPeriod $period): self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['period' => ['period', 'getPeriod', 'setPeriod']];
    }
}
<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class Report
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
}
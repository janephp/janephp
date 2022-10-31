<?php

namespace Github\Model;

class ActionsBillingUsage extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The sum of the free and paid GitHub Actions minutes used.
     *
     * @var int
     */
    protected $totalMinutesUsed;
    /**
     * The total paid GitHub Actions minutes used.
     *
     * @var int
     */
    protected $totalPaidMinutesUsed;
    /**
     * The amount of free GitHub Actions minutes available.
     *
     * @var int
     */
    protected $includedMinutes;
    /**
     * 
     *
     * @var ActionsBillingUsageMinutesUsedBreakdown
     */
    protected $minutesUsedBreakdown;
    /**
     * The sum of the free and paid GitHub Actions minutes used.
     *
     * @return int
     */
    public function getTotalMinutesUsed() : int
    {
        return $this->totalMinutesUsed;
    }
    /**
     * The sum of the free and paid GitHub Actions minutes used.
     *
     * @param int $totalMinutesUsed
     *
     * @return self
     */
    public function setTotalMinutesUsed(int $totalMinutesUsed) : self
    {
        $this->initialized['totalMinutesUsed'] = true;
        $this->totalMinutesUsed = $totalMinutesUsed;
        return $this;
    }
    /**
     * The total paid GitHub Actions minutes used.
     *
     * @return int
     */
    public function getTotalPaidMinutesUsed() : int
    {
        return $this->totalPaidMinutesUsed;
    }
    /**
     * The total paid GitHub Actions minutes used.
     *
     * @param int $totalPaidMinutesUsed
     *
     * @return self
     */
    public function setTotalPaidMinutesUsed(int $totalPaidMinutesUsed) : self
    {
        $this->initialized['totalPaidMinutesUsed'] = true;
        $this->totalPaidMinutesUsed = $totalPaidMinutesUsed;
        return $this;
    }
    /**
     * The amount of free GitHub Actions minutes available.
     *
     * @return int
     */
    public function getIncludedMinutes() : int
    {
        return $this->includedMinutes;
    }
    /**
     * The amount of free GitHub Actions minutes available.
     *
     * @param int $includedMinutes
     *
     * @return self
     */
    public function setIncludedMinutes(int $includedMinutes) : self
    {
        $this->initialized['includedMinutes'] = true;
        $this->includedMinutes = $includedMinutes;
        return $this;
    }
    /**
     * 
     *
     * @return ActionsBillingUsageMinutesUsedBreakdown
     */
    public function getMinutesUsedBreakdown() : ActionsBillingUsageMinutesUsedBreakdown
    {
        return $this->minutesUsedBreakdown;
    }
    /**
     * 
     *
     * @param ActionsBillingUsageMinutesUsedBreakdown $minutesUsedBreakdown
     *
     * @return self
     */
    public function setMinutesUsedBreakdown(ActionsBillingUsageMinutesUsedBreakdown $minutesUsedBreakdown) : self
    {
        $this->initialized['minutesUsedBreakdown'] = true;
        $this->minutesUsedBreakdown = $minutesUsedBreakdown;
        return $this;
    }
}
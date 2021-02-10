<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class CompanyPatchBody
{
    /**
     * Whether time is tracked via duration or start and end times.
     *
     * @var bool
     */
    protected $wantsTimestampTimers;
    /**
     * The weekly capacity in seconds.
     *
     * @var int
     */
    protected $weeklyCapacity;
    /**
     * Whether time is tracked via duration or start and end times.
     *
     * @return bool
     */
    public function getWantsTimestampTimers() : bool
    {
        return $this->wantsTimestampTimers;
    }
    /**
     * Whether time is tracked via duration or start and end times.
     *
     * @param bool $wantsTimestampTimers
     *
     * @return self
     */
    public function setWantsTimestampTimers(bool $wantsTimestampTimers) : self
    {
        $this->wantsTimestampTimers = $wantsTimestampTimers;
        return $this;
    }
    /**
     * The weekly capacity in seconds.
     *
     * @return int
     */
    public function getWeeklyCapacity() : int
    {
        return $this->weeklyCapacity;
    }
    /**
     * The weekly capacity in seconds.
     *
     * @param int $weeklyCapacity
     *
     * @return self
     */
    public function setWeeklyCapacity(int $weeklyCapacity) : self
    {
        $this->weeklyCapacity = $weeklyCapacity;
        return $this;
    }
}
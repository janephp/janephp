<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneDaylightSavingTime
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
     * Month when daylight saving time begins
     *
     * @var int
     */
    protected $month;
    /**
     * Week of the month (1 for the first week, 2 for the second week, and so on)
     *
     * @var int
     */
    protected $week;
    /**
     * Day of the week (0 for Sunday, 1 for Monday, 2 for Tuesday, and so on)
     *
     * @var int
     */
    protected $day;
    /**
     * Hour of the day
     *
     * @var int
     */
    protected $hour;
    /**
     * Month when daylight saving time begins
     *
     * @return int
     */
    public function getMonth(): int
    {
        return $this->month;
    }
    /**
     * Month when daylight saving time begins
     *
     * @param int $month
     *
     * @return self
     */
    public function setMonth(int $month): self
    {
        $this->initialized['month'] = true;
        $this->month = $month;
        return $this;
    }
    /**
     * Week of the month (1 for the first week, 2 for the second week, and so on)
     *
     * @return int
     */
    public function getWeek(): int
    {
        return $this->week;
    }
    /**
     * Week of the month (1 for the first week, 2 for the second week, and so on)
     *
     * @param int $week
     *
     * @return self
     */
    public function setWeek(int $week): self
    {
        $this->initialized['week'] = true;
        $this->week = $week;
        return $this;
    }
    /**
     * Day of the week (0 for Sunday, 1 for Monday, 2 for Tuesday, and so on)
     *
     * @return int
     */
    public function getDay(): int
    {
        return $this->day;
    }
    /**
     * Day of the week (0 for Sunday, 1 for Monday, 2 for Tuesday, and so on)
     *
     * @param int $day
     *
     * @return self
     */
    public function setDay(int $day): self
    {
        $this->initialized['day'] = true;
        $this->day = $day;
        return $this;
    }
    /**
     * Hour of the day
     *
     * @return int
     */
    public function getHour(): int
    {
        return $this->hour;
    }
    /**
     * Hour of the day
     *
     * @param int $hour
     *
     * @return self
     */
    public function setHour(int $hour): self
    {
        $this->initialized['hour'] = true;
        $this->hour = $hour;
        return $this;
    }
}
<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationModifyScheduleBackup
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
     * enable schedule backup
     *
     * @var bool
     */
    protected $enableScheduleBackup = false;
    /**
     * schedule interval
     *
     * @var string
     */
    protected $interval;
    /**
     * day of the week
     *
     * @var string
     */
    protected $dayOfWeek;
    /**
     * date of the month
     *
     * @var int
     */
    protected $dateOfMonth;
    /**
     * hour
     *
     * @var int
     */
    protected $hour = 0;
    /**
     * minute
     *
     * @var int
     */
    protected $minute = 0;
    /**
     * enable schedule backup
     *
     * @return bool
     */
    public function getEnableScheduleBackup(): bool
    {
        return $this->enableScheduleBackup;
    }
    /**
     * enable schedule backup
     *
     * @param bool $enableScheduleBackup
     *
     * @return self
     */
    public function setEnableScheduleBackup(bool $enableScheduleBackup): self
    {
        $this->initialized['enableScheduleBackup'] = true;
        $this->enableScheduleBackup = $enableScheduleBackup;
        return $this;
    }
    /**
     * schedule interval
     *
     * @return string
     */
    public function getInterval(): string
    {
        return $this->interval;
    }
    /**
     * schedule interval
     *
     * @param string $interval
     *
     * @return self
     */
    public function setInterval(string $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;
        return $this;
    }
    /**
     * day of the week
     *
     * @return string
     */
    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }
    /**
     * day of the week
     *
     * @param string $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(string $dayOfWeek): self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * date of the month
     *
     * @return int
     */
    public function getDateOfMonth(): int
    {
        return $this->dateOfMonth;
    }
    /**
     * date of the month
     *
     * @param int $dateOfMonth
     *
     * @return self
     */
    public function setDateOfMonth(int $dateOfMonth): self
    {
        $this->initialized['dateOfMonth'] = true;
        $this->dateOfMonth = $dateOfMonth;
        return $this;
    }
    /**
     * hour
     *
     * @return int
     */
    public function getHour(): int
    {
        return $this->hour;
    }
    /**
     * hour
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
    /**
     * minute
     *
     * @return int
     */
    public function getMinute(): int
    {
        return $this->minute;
    }
    /**
     * minute
     *
     * @param int $minute
     *
     * @return self
     */
    public function setMinute(int $minute): self
    {
        $this->initialized['minute'] = true;
        $this->minute = $minute;
        return $this;
    }
}
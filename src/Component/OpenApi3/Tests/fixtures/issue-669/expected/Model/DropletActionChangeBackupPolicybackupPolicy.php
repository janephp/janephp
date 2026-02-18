<?php

namespace Jane\Generated\DigitalOcean\Model;

class DropletActionChangeBackupPolicybackupPolicy extends \ArrayObject
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
     * The backup plan used for the Droplet. The plan can be either `daily` or `weekly`.
     *
     * @var string
     */
    protected $plan;
    /**
     * The day of the week on which the backup will occur.
     *
     * @var string
     */
    protected $weekday;
    /**
     * The hour of the day that the backup window will start.
     *
     * @var int
     */
    protected $hour;
    /**
     * The length of the backup window starting from `hour`.
     *
     * @var int
     */
    protected $windowLengthHours;
    /**
     * The number of days the backup will be retained.
     *
     * @var int
     */
    protected $retentionPeriodDays;
    /**
     * The backup plan used for the Droplet. The plan can be either `daily` or `weekly`.
     *
     * @return string
     */
    public function getPlan(): string
    {
        return $this->plan;
    }
    /**
     * The backup plan used for the Droplet. The plan can be either `daily` or `weekly`.
     *
     * @param string $plan
     *
     * @return self
     */
    public function setPlan(string $plan): self
    {
        $this->initialized['plan'] = true;
        $this->plan = $plan;
        return $this;
    }
    /**
     * The day of the week on which the backup will occur.
     *
     * @return string
     */
    public function getWeekday(): string
    {
        return $this->weekday;
    }
    /**
     * The day of the week on which the backup will occur.
     *
     * @param string $weekday
     *
     * @return self
     */
    public function setWeekday(string $weekday): self
    {
        $this->initialized['weekday'] = true;
        $this->weekday = $weekday;
        return $this;
    }
    /**
     * The hour of the day that the backup window will start.
     *
     * @return int
     */
    public function getHour(): int
    {
        return $this->hour;
    }
    /**
     * The hour of the day that the backup window will start.
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
     * The length of the backup window starting from `hour`.
     *
     * @return int
     */
    public function getWindowLengthHours(): int
    {
        return $this->windowLengthHours;
    }
    /**
     * The length of the backup window starting from `hour`.
     *
     * @param int $windowLengthHours
     *
     * @return self
     */
    public function setWindowLengthHours(int $windowLengthHours): self
    {
        $this->initialized['windowLengthHours'] = true;
        $this->windowLengthHours = $windowLengthHours;
        return $this;
    }
    /**
     * The number of days the backup will be retained.
     *
     * @return int
     */
    public function getRetentionPeriodDays(): int
    {
        return $this->retentionPeriodDays;
    }
    /**
     * The number of days the backup will be retained.
     *
     * @param int $retentionPeriodDays
     *
     * @return self
     */
    public function setRetentionPeriodDays(int $retentionPeriodDays): self
    {
        $this->initialized['retentionPeriodDays'] = true;
        $this->retentionPeriodDays = $retentionPeriodDays;
        return $this;
    }
}
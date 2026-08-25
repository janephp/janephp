<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class SupportedDropletBackupPolicy implements AdditionalPropertiesInterface
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
     * The name of the Droplet backup plan.
     *
     * @var string
     */
    protected $name;
    /**
     * An array of integers representing the hours of the day that a backup can
     * start.
     * 
     *
     * @var list<int>
     */
    protected $possibleWindowStarts;
    /**
     * The number of hours that a backup window is open.
     *
     * @var int
     */
    protected $windowLengthHours;
    /**
     * The number of days that a backup will be kept.
     *
     * @var int
     */
    protected $retentionPeriodDays;
    /**
     * The day of the week the backup will occur.
     *
     * @var list<string>
     */
    protected $possibleDays;
    /**
     * The name of the Droplet backup plan.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the Droplet backup plan.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * An array of integers representing the hours of the day that a backup can
     * start.
     * 
     *
     * @return list<int>
     */
    public function getPossibleWindowStarts(): array
    {
        return $this->possibleWindowStarts;
    }
    /**
    * An array of integers representing the hours of the day that a backup can
    start.
    
    *
    * @param list<int> $possibleWindowStarts
    *
    * @return self
    */
    public function setPossibleWindowStarts(array $possibleWindowStarts): self
    {
        $this->initialized['possibleWindowStarts'] = true;
        $this->possibleWindowStarts = $possibleWindowStarts;
        return $this;
    }
    /**
     * The number of hours that a backup window is open.
     *
     * @return int
     */
    public function getWindowLengthHours(): int
    {
        return $this->windowLengthHours;
    }
    /**
     * The number of hours that a backup window is open.
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
     * The number of days that a backup will be kept.
     *
     * @return int
     */
    public function getRetentionPeriodDays(): int
    {
        return $this->retentionPeriodDays;
    }
    /**
     * The number of days that a backup will be kept.
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
    /**
     * The day of the week the backup will occur.
     *
     * @return list<string>
     */
    public function getPossibleDays(): array
    {
        return $this->possibleDays;
    }
    /**
     * The day of the week the backup will occur.
     *
     * @param list<string> $possibleDays
     *
     * @return self
     */
    public function setPossibleDays(array $possibleDays): self
    {
        $this->initialized['possibleDays'] = true;
        $this->possibleDays = $possibleDays;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'possibleWindowStarts' => ['possible_window_starts', 'getPossibleWindowStarts', 'setPossibleWindowStarts'], 'windowLengthHours' => ['window_length_hours', 'getWindowLengthHours', 'setWindowLengthHours'], 'retentionPeriodDays' => ['retention_period_days', 'getRetentionPeriodDays', 'setRetentionPeriodDays'], 'possibleDays' => ['possible_days', 'getPossibleDays', 'setPossibleDays']];
    }
}
<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationModifyScheduleBackup
{
    /**
     * enable schedule backup
     *
     * @var bool
     */
    public bool $enableScheduleBackup = false;
    /**
     * schedule interval
     *
     * @var string
     */
    public string $interval;
    /**
     * day of the week
     *
     * @var string
     */
    public string $dayOfWeek;
    /**
     * date of the month
     *
     * @var int
     */
    public int $dateOfMonth;
    /**
     * hour
     *
     * @var int
     */
    public int $hour = 0;
    /**
     * minute
     *
     * @var int
     */
    public int $minute = 0;
}
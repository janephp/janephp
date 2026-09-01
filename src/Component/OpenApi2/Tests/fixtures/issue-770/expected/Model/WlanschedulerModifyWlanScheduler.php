<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class WlanschedulerModifyWlanScheduler
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * Schedules on Sunday
     *
     * @var list<string>
     */
    public array $sun;
    /**
     * Schedules on Monday
     *
     * @var list<string>
     */
    public array $mon;
    /**
     * Schedules on Tuesday
     *
     * @var list<string>
     */
    public array $tue;
    /**
     * schedules on Wednesday
     *
     * @var list<string>
     */
    public array $wed;
    /**
     * Schedules on Thursday
     *
     * @var list<string>
     */
    public array $thu;
    /**
     * Schedules on Friday
     *
     * @var list<string>
     */
    public array $fri;
    /**
     * Schedules on Saturday
     *
     * @var list<string>
     */
    public array $sat;
}
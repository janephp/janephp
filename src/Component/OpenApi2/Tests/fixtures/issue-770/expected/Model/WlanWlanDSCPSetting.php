<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class WlanWlanDSCPSetting
{
    /**
     * Enabled or disabled
     *
     * @var bool
     */
    public bool $enable;
    /**
     * Priority
     *
     * @var int
     */
    public int $priority;
    /**
     * DSCP range - low
     *
     * @var int
     */
    public int $low;
    /**
     * DSCP range - high
     *
     * @var int
     */
    public int $high;
    /**
     * @var list<int>
     */
    public array $excepts;
}
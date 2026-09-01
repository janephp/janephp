<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonLteBandLockChannel
{
    /**
     * SIM card ID(Primary:0, Secondary:1)
     *
     * @var int
     */
    public int $simCardId;
    /**
     * LTE chipset SKU type
     *
     * @var string
     */
    public string $type;
    /**
     * LTE 4G channels
     *
     * @var string
     */
    public string $channel4g;
    /**
     * LTE 3G channels
     *
     * @var string
     */
    public string $channel3g;
}
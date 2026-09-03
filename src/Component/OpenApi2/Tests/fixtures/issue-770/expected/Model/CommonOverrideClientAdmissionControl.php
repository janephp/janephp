<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class CommonOverrideClientAdmissionControl
{
    /**
     * @var bool
     */
    public bool $enabled;
    /**
     * Maximum radio load percentage.
     *
     * @var int
     */
    public int $maxRadioLoadPercent = 75;
    /**
     * Minimum client count number.
     *
     * @var int
     */
    public int $minClientCount = 10;
    /**
     * Minimum client throughput in Mbps.
     *
     * @var float
     */
    public float $minClientThroughputMbps = 0;
}
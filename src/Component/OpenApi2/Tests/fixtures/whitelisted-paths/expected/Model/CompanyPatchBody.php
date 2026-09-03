<?php

namespace Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model;

class CompanyPatchBody
{
    /**
     * Whether time is tracked via duration or start and end times.
     *
     * @var bool
     */
    public bool $wantsTimestampTimers;
    /**
     * The weekly capacity in seconds.
     *
     * @var int
     */
    public int $weeklyCapacity;
}
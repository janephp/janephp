<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class PortalserviceUserSession
{
    /**
     * Time out value in minutes
     *
     * @var int
     */
    public int $timeoutInMin = 1440;
    /**
     * Grace period in minutes
     *
     * @var int
     */
    public int $gracePeriodInMin = 60;
}
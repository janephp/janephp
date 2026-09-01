<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanSchedule
{
    /**
     * Type of WLAN schedule
     *
     * @var string
     */
    public string $type = 'AlwaysOn';
    /**
     * Identifier of the schedule profile. At least one ID or name is required in the request.
     *
     * @var string
     */
    public string $id;
    /**
     * Name of the schedule profile. At least one ID or name is required in the request.
     *
     * @var string
     */
    public string $name;
}
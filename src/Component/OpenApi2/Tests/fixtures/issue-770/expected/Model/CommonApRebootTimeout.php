<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonApRebootTimeout
{
    /**
     * Gateway loss timeout in second
     *
     * @var int
     */
    public int $gatewayLossTimeoutInSec = 1800;
    /**
     * Server loss timeout in second
     *
     * @var int
     */
    public int $serverLossTimeoutInSec = 7200;
}
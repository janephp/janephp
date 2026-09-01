<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCoreNetworkGateway
{
    /**
     * Primary Gateway
     *
     * @var string
     */
    public string $primaryGateway;
    /**
     * Secondary Gateway
     *
     * @var string
     */
    public string $secondaryGateway;
    /**
     * Gateway path MTU
     *
     * @var string
     */
    public string $tunnelMTU;
    /**
     * Manual setting value of Gateway path MTU
     *
     * @var int
     */
    public int $tunnelMTUSize = 1500;
    /**
     * ICMP Keep-Alive Period(secs)
     *
     * @var int
     */
    public int $keepAlivePeriod = 10;
    /**
     * ICMP Keep-Alive Retry
     *
     * @var int
     */
    public int $keepAliveRetry = 3;
}
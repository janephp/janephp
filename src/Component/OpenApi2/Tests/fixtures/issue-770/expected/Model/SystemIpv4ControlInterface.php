<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemIpv4ControlInterface
{
    /**
     * IP mode
     *
     * @var string
     */
    public string $ipMode;
    /**
     * IP address
     *
     * @var string
     */
    public string $ipAddress;
    /**
     * Subnet mask
     *
     * @var string
     */
    public string $subnetMask;
    /**
     * Gateway
     *
     * @var string
     */
    public string $gateway;
    /**
     * NAT IP
     *
     * @var string
     */
    public string $natIp;
}
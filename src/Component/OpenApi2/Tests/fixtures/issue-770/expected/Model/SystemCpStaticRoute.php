<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemCpStaticRoute
{
    /**
     * Network Address
     *
     * @var string
     */
    public string $networkAddress;
    /**
     * Subnet Mask
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
     * Interface Type or UserDefined Interface Name
     *
     * @var string
     */
    public string $interfaceMode;
    /**
     * Metric
     *
     * @var int
     */
    public int $metric;
}
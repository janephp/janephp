<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemReservedPort
{
    /**
     * Inbound/Outbound
     *
     * @var string
     */
    public string $trafficDirection;
    /**
     * Reserved port range for SZ service
     *
     * @var string
     */
    public string $portRange;
    /**
     * The binding interfaces, ["Control", "Cluster", "Management"]
     *
     * @var string
     */
    public string $bindingInterface;
    /**
     * The traffic destination (IP Address)
     *
     * @var string
     */
    public string $destination;
    /**
     * TCP/UDP
     *
     * @var string
     */
    public string $protocol;
    /**
     * Rule from System or User
     *
     * @var string
     */
    public string $from;
    /**
     * The purpose of reserved port range
     *
     * @var string
     */
    public string $description;
}
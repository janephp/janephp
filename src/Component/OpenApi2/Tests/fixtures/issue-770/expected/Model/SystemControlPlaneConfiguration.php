<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemControlPlaneConfiguration
{
    /**
     * @var SystemIpv4ControlInterface
     */
    public SystemIpv4ControlInterface $ipv4ControlInterface;
    /**
     * @var SystemIpv4ClusterInterface
     */
    public SystemIpv4ClusterInterface $ipv4ClusterInterface;
    /**
     * @var SystemIpv4ManagementInterface
     */
    public SystemIpv4ManagementInterface $ipv4ManagementInterface;
    /**
     * @var SystemIpv6ControlInterface
     */
    public SystemIpv6ControlInterface $ipv6ControlInterface;
    /**
     * @var SystemIpv6ManagementInterface
     */
    public SystemIpv6ManagementInterface $ipv6ManagementInterface;
    /**
     * @var SystemIpv4AccessAndCoreSeparation
     */
    public SystemIpv4AccessAndCoreSeparation $ipv4AccessAndCoreSeparation;
    /**
     * @var SystemIpv6AccessAndCoreSeparation
     */
    public SystemIpv6AccessAndCoreSeparation $ipv6AccessAndCoreSeparation;
    /**
     * IP support version
     *
     * @var string
     */
    public string $ipMode;
}
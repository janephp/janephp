<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemDataPlaneConfiguration
{
    /**
     * Interface mode
     *
     * @var string
     */
    public string $interfaceMode;
    /**
     * @var SystemPrimaryInterface
     */
    public SystemPrimaryInterface $primaryInterface;
    /**
     * @var SystemIpv6PrimaryInterface
     */
    public SystemIpv6PrimaryInterface $ipv6PrimaryInterface;
    /**
     * @var SystemIpv6SecondaryInterface
     */
    public SystemIpv6SecondaryInterface $ipv6SecondaryInterface;
    /**
     * @var SystemSecondaryInterface
     */
    public SystemSecondaryInterface $secondaryInterface;
    /**
     * Primary(Access) interface
     *
     * @var list<SystemStaticRoute>
     */
    public array $staticRoute;
    /**
     * @var bool
     */
    public bool $keepConfig;
    /**
     * @var bool
     */
    public bool $isDataCenter;
}
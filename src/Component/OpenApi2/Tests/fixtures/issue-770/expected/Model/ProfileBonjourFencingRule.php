<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileBonjourFencingRule
{
    /**
     * Name of the Bonjour Fencing Rule
     *
     * @var string
     */
    public string $deviceType;
    /**
     * Specify the device list providing Bonjour Service
     *
     * @var list<ProfileBonjourFencingRuleDeviceMac>
     */
    public array $deviceMacList;
    /**
     * @var string
     */
    public string $closestAp;
    /**
     * Bonjour Service Type
     *
     * @var string
     */
    public string $serviceType;
    /**
     * @var string
     */
    public string $customServiceName;
    /**
     * The range of AP can take Bonjour work
     *
     * @var string
     */
    public string $fencingRange;
    /**
     * @var string
     */
    public string $description;
}
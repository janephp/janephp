<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AprulesApRuleConfiguration
{
    /**
     * Identifier of the AP Registration Rules
     *
     * @var string
     */
    public string $id;
    /**
     * priority of the AP Registration Rules
     *
     * @var int
     */
    public int $priority;
    /**
     * @var string
     */
    public string $description;
    /**
     * type of the AP Registration Rules
     *
     * @var string
     */
    public string $type;
    /**
     * @var AprulesIpAddressRange
     */
    public AprulesIpAddressRange $ipAddressRange;
    /**
     * @var AprulesSubnet
     */
    public AprulesSubnet $subnet;
    /**
     * @var AprulesGpsCoordinates
     */
    public AprulesGpsCoordinates $gpsCoordinates;
    /**
     * ProvisionTag of the AP Registration Rules
     *
     * @var mixed
     */
    public $provisionTag;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $mobilityZone;
}
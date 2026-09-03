<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AprulesCreateApRule
{
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
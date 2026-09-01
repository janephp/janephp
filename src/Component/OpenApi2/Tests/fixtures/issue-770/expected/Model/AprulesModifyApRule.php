<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AprulesModifyApRule
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
     * ProvisionTag of the AP Registration Rules
     *
     * @var string
     */
    public string $provisionTag;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $mobilityZone;
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
}
<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemGatewayAdvanced
{
    /**
     * Allow session on accounting fail
     *
     * @var bool
     */
    public bool $allowSessionOnAccountingFail;
    /**
     * GTP network service access point identifier (NSAPI)
     *
     * @var int
     */
    public int $gtpNetworkServiceAcessPointIdentifier;
    /**
     * Include IMEI IE in GTP messages
     *
     * @var bool
     */
    public bool $imeiInGtp;
    /**
     * Include SCG-RAI in GTPv2 messages
     *
     * @var bool
     */
    public bool $scgRaiInGtpV2;
    /**
     * Include SCG-SAI in GTPv2 messages
     *
     * @var bool
     */
    public bool $scgSaiInGtpV2;
    /**
     * Include ECGI in GTPv2 messages
     *
     * @var bool
     */
    public bool $ecgiInGtpV2;
    /**
     * Include TAI in GTPv2 messages
     *
     * @var bool
     */
    public bool $taiInGtpV2;
    /**
     * GTPv2 interface type
     *
     * @var string
     */
    public string $gtpInterfaceType;
}
<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class CommonDhcpSiteConfigRef
{
    /**
     * DHCP Service Enabling Status
     *
     * @var bool
     */
    public bool $siteEnabled;
    /**
     * DHCP Port Selection Enabled
     *
     * @var bool
     */
    public bool $portSelectionEnabled;
    /**
     * DHCP Service Dynamic WAN Port Detection
     *
     * @var bool
     */
    public bool $dwpdEnabled;
    /**
     * DHCP Service AP Selection Mode. This value is effective when the siteMode is EnableOnMultipleAPs.
     *
     * @var bool
     */
    public bool $manualSelect;
    /**
     * DHCP Service mode
     *
     * @var string
     */
    public string $siteMode;
    /**
     * @var int
     */
    public int $eth0ProfileId;
    /**
     * @var int
     */
    public int $eth1ProfileId;
    /**
     * @var list<CommonDhcpSiteConfigRefSiteApsItem>
     */
    public array $siteAps;
    /**
     * @var list<string>
     */
    public array $siteProfileIds;
}
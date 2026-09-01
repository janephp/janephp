<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class PortalserviceHotspot
{
    /**
     * Identifier of the Hotspot
     *
     * @var string
     */
    public string $id;
    /**
     * Identifier of the zone which the Hotspot belongs to
     *
     * @var string
     */
    public string $zoneId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * Smart client support of the Hotspot
     *
     * @var string
     */
    public string $smartClientSupport;
    /**
     * Smart client info of the Hotspot. Type instructions for enabling users to log on using the Smart Client application.
     *
     * @var string
     */
    public string $smartClientInfo;
    /**
     * Portal type of the Hotspot
     *
     * @var string
     */
    public string $portalType;
    /**
     * @var string
     */
    public string $portalUrl;
    /**
     * @var string
     */
    public string $backupPortalUrl;
    /**
     * @var PortalservicePortalLocation
     */
    public PortalservicePortalLocation $location;
    /**
     * @var PortalservicePortalRedirect
     */
    public PortalservicePortalRedirect $redirect;
    /**
     * @var CommonPortalCustomization
     */
    public CommonPortalCustomization $portalCustomization;
    /**
     * @var PortalserviceUserSession
     */
    public PortalserviceUserSession $userSession;
    /**
     * Walled garden map set of the Hotspot. Unauthenticated users are allowed to access the following destinations. Format: - IP (e.g. 10.11.12.13) - IP Range (e.g. 10.11.12.13-10.11.12.15) - CIDR (e.g. 10.11.12.100/28) - IP and mask (e.g. 10.11.12.13 255.255.255.0) - Precise web site (e.g. www.ruckus.com) - Web site with special regular expression like    - *.amazon.com    - *.com
     *
     * @var list<string>
     */
    public array $walledGardens;
    /**
     * Traffic Class Profile of the Hotspot
     *
     * @var string
     */
    public string $trafficClassProfileId;
    /**
     * Signature Signing Key of the Hotspot
     *
     * @var string
     */
    public string $signatureSigningKey;
    /**
     * Internal Node of the Hotspot
     *
     * @var string
     */
    public string $internalNode;
    /**
     * mac address format of redirection,the format define: 0(aabbccddeeff), 1(AA-BB-CC-DD-EE-FF), 2(AA:BB:CC:DD:EE:FF), 3(AABBCCDDEEFF), 4(aa-bb-cc-dd-ee-ff), 5(aa:bb:cc:dd:ee:ff)
     *
     * @var int
     */
    public int $macAddressFormat = 2;
    /**
     * HTTPS Redirect is disable or not
     *
     * @var bool
     */
    public bool $httpsRedirect = 'true';
}
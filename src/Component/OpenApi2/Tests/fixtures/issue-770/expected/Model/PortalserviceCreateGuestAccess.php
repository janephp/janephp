<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class PortalserviceCreateGuestAccess
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var CommonPortalCustomization
     */
    public CommonPortalCustomization $portalCustomization;
    /**
     * @var PortalservicePortalRedirect
     */
    public PortalservicePortalRedirect $redirect;
    /**
     * @var CommonGenericRef
     */
    public CommonGenericRef $smsGateway;
    /**
     * @var PortalserviceUserSession
     */
    public PortalserviceUserSession $userSession;
    /**
     * Enable self-registration mechanism
     *
     * @var bool
     */
    public bool $selfRegistration = 'false';
    /**
     * Enable SMTP server to send SMS
     *
     * @var bool
     */
    public bool $smtpServerEnabled;
    /**
     * Guest pass expiration value
     *
     * @var int
     */
    public int $expirationValue;
    /**
     * Guest pass expiration unit
     *
     * @var string
     */
    public string $expirationUnit;
    /**
     * Assign guest pass effect since creation time or first use
     *
     * @var string
     */
    public string $passEffectSince;
    /**
     * Assign guest pass valid time
     *
     * @var int
     */
    public int $passUseDays;
    /**
     * Assign the max. device count which can use one guest pass
     *
     * @var int
     */
    public int $maxAllowedDeviceLimitNum;
    /**
     * @var bool
     */
    public bool $sponsorApproval;
    /**
     * @var string
     */
    public string $sponsorAuthServer;
    /**
     * @var list<string>
     */
    public array $sponsorEmailAddress;
    /**
     * Assign notification method for self-registration guest pass
     *
     * @var string
     */
    public string $notificationMethod;
    /**
     * Enable session duration
     *
     * @var bool
     */
    public bool $requireLoginAgain;
    /**
     * Assign session duration
     *
     * @var int
     */
    public int $sessionValue;
    /**
     * Session unit
     *
     * @var string
     */
    public string $sessionUnit;
}
<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceModifyGuestAccess
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
     * Enable self registration guest pass.
     *
     * @var bool
     */
    public bool $selfRegistration = 'false';
    /**
     * Enable SMTP server setting.
     *
     * @var bool
     */
    public bool $smtpServerEnabled;
    /**
     * Set the expiration time of self registration guest pass.
     *
     * @var int
     */
    public int $expirationValue;
    /**
     * Set the unit of expiration time of self registration guest pass.
     *
     * @var string
     */
    public string $expirationUnit;
    /**
     * Set the guest pass effective since creation time or first used.
     *
     * @var string
     */
    public string $passEffectSince;
    /**
     * Set the expiration time for the new self registration guest pass if not used within some days.
     *
     * @var int
     */
    public int $passUseDays;
    /**
     * Set the max. allowed device for one self registration guest pass.
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
     * Set the notification method.
     *
     * @var string
     */
    public string $notificationMethod;
    /**
     * Required the user login again.
     *
     * @var bool
     */
    public bool $requireLoginAgain;
    /**
     * Set the value of session.
     *
     * @var int
     */
    public int $sessionValue;
    /**
     * Set the unit of session.
     *
     * @var string
     */
    public string $sessionUnit;
}
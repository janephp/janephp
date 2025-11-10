<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceCreateGuestAccess
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var CommonPortalCustomization
     */
    protected $portalCustomization;
    /**
     * @var PortalservicePortalRedirect
     */
    protected $redirect;
    /**
     * @var CommonGenericRef
     */
    protected $smsGateway;
    /**
     * @var PortalserviceUserSession
     */
    protected $userSession;
    /**
     * Enable self-registration mechanism
     *
     * @var bool
     */
    protected $selfRegistration = 'false';
    /**
     * Enable SMTP server to send SMS
     *
     * @var bool
     */
    protected $smtpServerEnabled;
    /**
     * Guest pass expiration value
     *
     * @var int
     */
    protected $expirationValue;
    /**
     * Guest pass expiration unit
     *
     * @var string
     */
    protected $expirationUnit;
    /**
     * Assign guest pass effect since creation time or first use
     *
     * @var string
     */
    protected $passEffectSince;
    /**
     * Assign guest pass valid time
     *
     * @var int
     */
    protected $passUseDays;
    /**
     * Assign the max. device count which can use one guest pass
     *
     * @var int
     */
    protected $maxAllowedDeviceLimitNum;
    /**
     * @var bool
     */
    protected $sponsorApproval;
    /**
     * @var string
     */
    protected $sponsorAuthServer;
    /**
     * @var list<string>
     */
    protected $sponsorEmailAddress;
    /**
     * Assign notification method for self-registration guest pass
     *
     * @var string
     */
    protected $notificationMethod;
    /**
     * Enable session duration
     *
     * @var bool
     */
    protected $requireLoginAgain;
    /**
     * Assign session duration
     *
     * @var int
     */
    protected $sessionValue;
    /**
     * Session unit
     *
     * @var string
     */
    protected $sessionUnit;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return CommonPortalCustomization
     */
    public function getPortalCustomization(): CommonPortalCustomization
    {
        return $this->portalCustomization;
    }
    /**
     * @param CommonPortalCustomization $portalCustomization
     *
     * @return self
     */
    public function setPortalCustomization(CommonPortalCustomization $portalCustomization): self
    {
        $this->initialized['portalCustomization'] = true;
        $this->portalCustomization = $portalCustomization;
        return $this;
    }
    /**
     * @return PortalservicePortalRedirect
     */
    public function getRedirect(): PortalservicePortalRedirect
    {
        return $this->redirect;
    }
    /**
     * @param PortalservicePortalRedirect $redirect
     *
     * @return self
     */
    public function setRedirect(PortalservicePortalRedirect $redirect): self
    {
        $this->initialized['redirect'] = true;
        $this->redirect = $redirect;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getSmsGateway(): CommonGenericRef
    {
        return $this->smsGateway;
    }
    /**
     * @param CommonGenericRef $smsGateway
     *
     * @return self
     */
    public function setSmsGateway(CommonGenericRef $smsGateway): self
    {
        $this->initialized['smsGateway'] = true;
        $this->smsGateway = $smsGateway;
        return $this;
    }
    /**
     * @return PortalserviceUserSession
     */
    public function getUserSession(): PortalserviceUserSession
    {
        return $this->userSession;
    }
    /**
     * @param PortalserviceUserSession $userSession
     *
     * @return self
     */
    public function setUserSession(PortalserviceUserSession $userSession): self
    {
        $this->initialized['userSession'] = true;
        $this->userSession = $userSession;
        return $this;
    }
    /**
     * Enable self-registration mechanism
     *
     * @return bool
     */
    public function getSelfRegistration(): bool
    {
        return $this->selfRegistration;
    }
    /**
     * Enable self-registration mechanism
     *
     * @param bool $selfRegistration
     *
     * @return self
     */
    public function setSelfRegistration(bool $selfRegistration): self
    {
        $this->initialized['selfRegistration'] = true;
        $this->selfRegistration = $selfRegistration;
        return $this;
    }
    /**
     * Enable SMTP server to send SMS
     *
     * @return bool
     */
    public function getSmtpServerEnabled(): bool
    {
        return $this->smtpServerEnabled;
    }
    /**
     * Enable SMTP server to send SMS
     *
     * @param bool $smtpServerEnabled
     *
     * @return self
     */
    public function setSmtpServerEnabled(bool $smtpServerEnabled): self
    {
        $this->initialized['smtpServerEnabled'] = true;
        $this->smtpServerEnabled = $smtpServerEnabled;
        return $this;
    }
    /**
     * Guest pass expiration value
     *
     * @return int
     */
    public function getExpirationValue(): int
    {
        return $this->expirationValue;
    }
    /**
     * Guest pass expiration value
     *
     * @param int $expirationValue
     *
     * @return self
     */
    public function setExpirationValue(int $expirationValue): self
    {
        $this->initialized['expirationValue'] = true;
        $this->expirationValue = $expirationValue;
        return $this;
    }
    /**
     * Guest pass expiration unit
     *
     * @return string
     */
    public function getExpirationUnit(): string
    {
        return $this->expirationUnit;
    }
    /**
     * Guest pass expiration unit
     *
     * @param string $expirationUnit
     *
     * @return self
     */
    public function setExpirationUnit(string $expirationUnit): self
    {
        $this->initialized['expirationUnit'] = true;
        $this->expirationUnit = $expirationUnit;
        return $this;
    }
    /**
     * Assign guest pass effect since creation time or first use
     *
     * @return string
     */
    public function getPassEffectSince(): string
    {
        return $this->passEffectSince;
    }
    /**
     * Assign guest pass effect since creation time or first use
     *
     * @param string $passEffectSince
     *
     * @return self
     */
    public function setPassEffectSince(string $passEffectSince): self
    {
        $this->initialized['passEffectSince'] = true;
        $this->passEffectSince = $passEffectSince;
        return $this;
    }
    /**
     * Assign guest pass valid time
     *
     * @return int
     */
    public function getPassUseDays(): int
    {
        return $this->passUseDays;
    }
    /**
     * Assign guest pass valid time
     *
     * @param int $passUseDays
     *
     * @return self
     */
    public function setPassUseDays(int $passUseDays): self
    {
        $this->initialized['passUseDays'] = true;
        $this->passUseDays = $passUseDays;
        return $this;
    }
    /**
     * Assign the max. device count which can use one guest pass
     *
     * @return int
     */
    public function getMaxAllowedDeviceLimitNum(): int
    {
        return $this->maxAllowedDeviceLimitNum;
    }
    /**
     * Assign the max. device count which can use one guest pass
     *
     * @param int $maxAllowedDeviceLimitNum
     *
     * @return self
     */
    public function setMaxAllowedDeviceLimitNum(int $maxAllowedDeviceLimitNum): self
    {
        $this->initialized['maxAllowedDeviceLimitNum'] = true;
        $this->maxAllowedDeviceLimitNum = $maxAllowedDeviceLimitNum;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSponsorApproval(): bool
    {
        return $this->sponsorApproval;
    }
    /**
     * @param bool $sponsorApproval
     *
     * @return self
     */
    public function setSponsorApproval(bool $sponsorApproval): self
    {
        $this->initialized['sponsorApproval'] = true;
        $this->sponsorApproval = $sponsorApproval;
        return $this;
    }
    /**
     * @return string
     */
    public function getSponsorAuthServer(): string
    {
        return $this->sponsorAuthServer;
    }
    /**
     * @param string $sponsorAuthServer
     *
     * @return self
     */
    public function setSponsorAuthServer(string $sponsorAuthServer): self
    {
        $this->initialized['sponsorAuthServer'] = true;
        $this->sponsorAuthServer = $sponsorAuthServer;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getSponsorEmailAddress(): array
    {
        return $this->sponsorEmailAddress;
    }
    /**
     * @param list<string> $sponsorEmailAddress
     *
     * @return self
     */
    public function setSponsorEmailAddress(array $sponsorEmailAddress): self
    {
        $this->initialized['sponsorEmailAddress'] = true;
        $this->sponsorEmailAddress = $sponsorEmailAddress;
        return $this;
    }
    /**
     * Assign notification method for self-registration guest pass
     *
     * @return string
     */
    public function getNotificationMethod(): string
    {
        return $this->notificationMethod;
    }
    /**
     * Assign notification method for self-registration guest pass
     *
     * @param string $notificationMethod
     *
     * @return self
     */
    public function setNotificationMethod(string $notificationMethod): self
    {
        $this->initialized['notificationMethod'] = true;
        $this->notificationMethod = $notificationMethod;
        return $this;
    }
    /**
     * Enable session duration
     *
     * @return bool
     */
    public function getRequireLoginAgain(): bool
    {
        return $this->requireLoginAgain;
    }
    /**
     * Enable session duration
     *
     * @param bool $requireLoginAgain
     *
     * @return self
     */
    public function setRequireLoginAgain(bool $requireLoginAgain): self
    {
        $this->initialized['requireLoginAgain'] = true;
        $this->requireLoginAgain = $requireLoginAgain;
        return $this;
    }
    /**
     * Assign session duration
     *
     * @return int
     */
    public function getSessionValue(): int
    {
        return $this->sessionValue;
    }
    /**
     * Assign session duration
     *
     * @param int $sessionValue
     *
     * @return self
     */
    public function setSessionValue(int $sessionValue): self
    {
        $this->initialized['sessionValue'] = true;
        $this->sessionValue = $sessionValue;
        return $this;
    }
    /**
     * Session unit
     *
     * @return string
     */
    public function getSessionUnit(): string
    {
        return $this->sessionUnit;
    }
    /**
     * Session unit
     *
     * @param string $sessionUnit
     *
     * @return self
     */
    public function setSessionUnit(string $sessionUnit): self
    {
        $this->initialized['sessionUnit'] = true;
        $this->sessionUnit = $sessionUnit;
        return $this;
    }
}
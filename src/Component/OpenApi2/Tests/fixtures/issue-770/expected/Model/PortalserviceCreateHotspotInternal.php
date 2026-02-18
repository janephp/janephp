<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceCreateHotspotInternal
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
     * Smart client support of the Hotspot
     *
     * @var string
     */
    protected $smartClientSupport;
    /**
     * @var PortalservicePortalLocation
     */
    protected $location;
    /**
     * @var PortalservicePortalRedirect
     */
    protected $redirect;
    /**
     * @var PortalserviceUserSession
     */
    protected $userSession;
    /**
     * Walled garden map set of the Hotspot. Unauthenticated users are allowed to access the following destinations. Format: - IP (e.g. 10.11.12.13) - IP Range (e.g. 10.11.12.13-10.11.12.15) - CIDR (e.g. 10.11.12.100/28) - IP and mask (e.g. 10.11.12.13 255.255.255.0) - Precise web site (e.g. www.ruckus.com) - Web site with special regular expression like    - *.amazon.com    - *.com
     *
     * @var list<string>
     */
    protected $walledGardens;
    /**
     * mac address format of redirection,the format define: 0(aabbccddeeff), 1(AA-BB-CC-DD-EE-FF), 2(AA:BB:CC:DD:EE:FF), 3(AABBCCDDEEFF), 4(aa-bb-cc-dd-ee-ff), 5(aa:bb:cc:dd:ee:ff)
     *
     * @var int
     */
    protected $macAddressFormat = 2;
    /**
     * HTTPS Redirect is disable or not
     *
     * @var bool
     */
    protected $httpsRedirect = 'true';
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
     * Smart client support of the Hotspot
     *
     * @return string
     */
    public function getSmartClientSupport(): string
    {
        return $this->smartClientSupport;
    }
    /**
     * Smart client support of the Hotspot
     *
     * @param string $smartClientSupport
     *
     * @return self
     */
    public function setSmartClientSupport(string $smartClientSupport): self
    {
        $this->initialized['smartClientSupport'] = true;
        $this->smartClientSupport = $smartClientSupport;
        return $this;
    }
    /**
     * @return PortalservicePortalLocation
     */
    public function getLocation(): PortalservicePortalLocation
    {
        return $this->location;
    }
    /**
     * @param PortalservicePortalLocation $location
     *
     * @return self
     */
    public function setLocation(PortalservicePortalLocation $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
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
     * Walled garden map set of the Hotspot. Unauthenticated users are allowed to access the following destinations. Format: - IP (e.g. 10.11.12.13) - IP Range (e.g. 10.11.12.13-10.11.12.15) - CIDR (e.g. 10.11.12.100/28) - IP and mask (e.g. 10.11.12.13 255.255.255.0) - Precise web site (e.g. www.ruckus.com) - Web site with special regular expression like    - *.amazon.com    - *.com
     *
     * @return list<string>
     */
    public function getWalledGardens(): array
    {
        return $this->walledGardens;
    }
    /**
     * Walled garden map set of the Hotspot. Unauthenticated users are allowed to access the following destinations. Format: - IP (e.g. 10.11.12.13) - IP Range (e.g. 10.11.12.13-10.11.12.15) - CIDR (e.g. 10.11.12.100/28) - IP and mask (e.g. 10.11.12.13 255.255.255.0) - Precise web site (e.g. www.ruckus.com) - Web site with special regular expression like    - *.amazon.com    - *.com
     *
     * @param list<string> $walledGardens
     *
     * @return self
     */
    public function setWalledGardens(array $walledGardens): self
    {
        $this->initialized['walledGardens'] = true;
        $this->walledGardens = $walledGardens;
        return $this;
    }
    /**
     * mac address format of redirection,the format define: 0(aabbccddeeff), 1(AA-BB-CC-DD-EE-FF), 2(AA:BB:CC:DD:EE:FF), 3(AABBCCDDEEFF), 4(aa-bb-cc-dd-ee-ff), 5(aa:bb:cc:dd:ee:ff)
     *
     * @return int
     */
    public function getMacAddressFormat(): int
    {
        return $this->macAddressFormat;
    }
    /**
     * mac address format of redirection,the format define: 0(aabbccddeeff), 1(AA-BB-CC-DD-EE-FF), 2(AA:BB:CC:DD:EE:FF), 3(AABBCCDDEEFF), 4(aa-bb-cc-dd-ee-ff), 5(aa:bb:cc:dd:ee:ff)
     *
     * @param int $macAddressFormat
     *
     * @return self
     */
    public function setMacAddressFormat(int $macAddressFormat): self
    {
        $this->initialized['macAddressFormat'] = true;
        $this->macAddressFormat = $macAddressFormat;
        return $this;
    }
    /**
     * HTTPS Redirect is disable or not
     *
     * @return bool
     */
    public function getHttpsRedirect(): bool
    {
        return $this->httpsRedirect;
    }
    /**
     * HTTPS Redirect is disable or not
     *
     * @param bool $httpsRedirect
     *
     * @return self
     */
    public function setHttpsRedirect(bool $httpsRedirect): self
    {
        $this->initialized['httpsRedirect'] = true;
        $this->httpsRedirect = $httpsRedirect;
        return $this;
    }
}
<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemModifySystemTimeSetting
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
     * Primary NtpServer address
     *
     * @var string
     */
    protected $ntpServer;
    /**
     * Secondary NtpServer address
     *
     * @var string
     */
    protected $secondaryNtpServer;
    /**
     * Third NtpServer address
     *
     * @var string
     */
    protected $thirdNtpServer;
    /**
     * System defined time zone, please refer to the 'Overview > Time Zone' list
     *
     * @var string
     */
    protected $timezone;
    /**
     * @var SystemAuthenticationKey
     */
    protected $authenticationKey;
    /**
     * @var SystemAuthenticationKey
     */
    protected $secondaryAuthenticationKey;
    /**
     * @var SystemAuthenticationKey
     */
    protected $thirdAuthenticationKey;
    /**
     * Primary NtpServer address
     *
     * @return string
     */
    public function getNtpServer(): string
    {
        return $this->ntpServer;
    }
    /**
     * Primary NtpServer address
     *
     * @param string $ntpServer
     *
     * @return self
     */
    public function setNtpServer(string $ntpServer): self
    {
        $this->initialized['ntpServer'] = true;
        $this->ntpServer = $ntpServer;
        return $this;
    }
    /**
     * Secondary NtpServer address
     *
     * @return string
     */
    public function getSecondaryNtpServer(): string
    {
        return $this->secondaryNtpServer;
    }
    /**
     * Secondary NtpServer address
     *
     * @param string $secondaryNtpServer
     *
     * @return self
     */
    public function setSecondaryNtpServer(string $secondaryNtpServer): self
    {
        $this->initialized['secondaryNtpServer'] = true;
        $this->secondaryNtpServer = $secondaryNtpServer;
        return $this;
    }
    /**
     * Third NtpServer address
     *
     * @return string
     */
    public function getThirdNtpServer(): string
    {
        return $this->thirdNtpServer;
    }
    /**
     * Third NtpServer address
     *
     * @param string $thirdNtpServer
     *
     * @return self
     */
    public function setThirdNtpServer(string $thirdNtpServer): self
    {
        $this->initialized['thirdNtpServer'] = true;
        $this->thirdNtpServer = $thirdNtpServer;
        return $this;
    }
    /**
     * System defined time zone, please refer to the 'Overview > Time Zone' list
     *
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }
    /**
     * System defined time zone, please refer to the 'Overview > Time Zone' list
     *
     * @param string $timezone
     *
     * @return self
     */
    public function setTimezone(string $timezone): self
    {
        $this->initialized['timezone'] = true;
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * @return SystemAuthenticationKey
     */
    public function getAuthenticationKey(): SystemAuthenticationKey
    {
        return $this->authenticationKey;
    }
    /**
     * @param SystemAuthenticationKey $authenticationKey
     *
     * @return self
     */
    public function setAuthenticationKey(SystemAuthenticationKey $authenticationKey): self
    {
        $this->initialized['authenticationKey'] = true;
        $this->authenticationKey = $authenticationKey;
        return $this;
    }
    /**
     * @return SystemAuthenticationKey
     */
    public function getSecondaryAuthenticationKey(): SystemAuthenticationKey
    {
        return $this->secondaryAuthenticationKey;
    }
    /**
     * @param SystemAuthenticationKey $secondaryAuthenticationKey
     *
     * @return self
     */
    public function setSecondaryAuthenticationKey(SystemAuthenticationKey $secondaryAuthenticationKey): self
    {
        $this->initialized['secondaryAuthenticationKey'] = true;
        $this->secondaryAuthenticationKey = $secondaryAuthenticationKey;
        return $this;
    }
    /**
     * @return SystemAuthenticationKey
     */
    public function getThirdAuthenticationKey(): SystemAuthenticationKey
    {
        return $this->thirdAuthenticationKey;
    }
    /**
     * @param SystemAuthenticationKey $thirdAuthenticationKey
     *
     * @return self
     */
    public function setThirdAuthenticationKey(SystemAuthenticationKey $thirdAuthenticationKey): self
    {
        $this->initialized['thirdAuthenticationKey'] = true;
        $this->thirdAuthenticationKey = $thirdAuthenticationKey;
        return $this;
    }
}
<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemNtpServerValidation
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
     * NTP Server address for validation
     *
     * @var string
     */
    protected $ntpServer;
    /**
     * @var SystemAuthenticationKey
     */
    protected $authenticationKey;
    /**
     * NTP Server address for validation
     *
     * @return string
     */
    public function getNtpServer(): string
    {
        return $this->ntpServer;
    }
    /**
     * NTP Server address for validation
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
}
<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemFtpGlobalSetting
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
     * enable logging to remote syslog server
     *
     * @var bool
     */
    protected $enabled;
    /**
     * ftpInterval
     *
     * @var string
     */
    protected $ftpInterval;
    /**
     * Identifier of the FTP Server
     *
     * @var string
     */
    protected $ftpId;
    /**
     * enable logging to remote syslog server
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * enable logging to remote syslog server
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * ftpInterval
     *
     * @return string
     */
    public function getFtpInterval(): string
    {
        return $this->ftpInterval;
    }
    /**
     * ftpInterval
     *
     * @param string $ftpInterval
     *
     * @return self
     */
    public function setFtpInterval(string $ftpInterval): self
    {
        $this->initialized['ftpInterval'] = true;
        $this->ftpInterval = $ftpInterval;
        return $this;
    }
    /**
     * Identifier of the FTP Server
     *
     * @return string
     */
    public function getFtpId(): string
    {
        return $this->ftpId;
    }
    /**
     * Identifier of the FTP Server
     *
     * @param string $ftpId
     *
     * @return self
     */
    public function setFtpId(string $ftpId): self
    {
        $this->initialized['ftpId'] = true;
        $this->ftpId = $ftpId;
        return $this;
    }
}
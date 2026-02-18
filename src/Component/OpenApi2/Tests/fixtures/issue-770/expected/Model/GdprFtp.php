<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class GdprFtp
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
     * IP/DN of FTP
     *
     * @var string
     */
    protected $ftpHost;
    /**
     * Port used by FTP
     *
     * @var int
     */
    protected $ftpPort;
    /**
     * Destination directory used for file upload
     *
     * @var string
     */
    protected $ftpRemoteDirectory;
    /**
     * Username for FTP login
     *
     * @var string
     */
    protected $ftpUserName;
    /**
     * Password for FTP login
     *
     * @var string
     */
    protected $ftpPassword;
    /**
     * Protocol used
     *
     * @var string
     */
    protected $ftpProtocol;
    /**
     * IP/DN of FTP
     *
     * @return string
     */
    public function getFtpHost(): string
    {
        return $this->ftpHost;
    }
    /**
     * IP/DN of FTP
     *
     * @param string $ftpHost
     *
     * @return self
     */
    public function setFtpHost(string $ftpHost): self
    {
        $this->initialized['ftpHost'] = true;
        $this->ftpHost = $ftpHost;
        return $this;
    }
    /**
     * Port used by FTP
     *
     * @return int
     */
    public function getFtpPort(): int
    {
        return $this->ftpPort;
    }
    /**
     * Port used by FTP
     *
     * @param int $ftpPort
     *
     * @return self
     */
    public function setFtpPort(int $ftpPort): self
    {
        $this->initialized['ftpPort'] = true;
        $this->ftpPort = $ftpPort;
        return $this;
    }
    /**
     * Destination directory used for file upload
     *
     * @return string
     */
    public function getFtpRemoteDirectory(): string
    {
        return $this->ftpRemoteDirectory;
    }
    /**
     * Destination directory used for file upload
     *
     * @param string $ftpRemoteDirectory
     *
     * @return self
     */
    public function setFtpRemoteDirectory(string $ftpRemoteDirectory): self
    {
        $this->initialized['ftpRemoteDirectory'] = true;
        $this->ftpRemoteDirectory = $ftpRemoteDirectory;
        return $this;
    }
    /**
     * Username for FTP login
     *
     * @return string
     */
    public function getFtpUserName(): string
    {
        return $this->ftpUserName;
    }
    /**
     * Username for FTP login
     *
     * @param string $ftpUserName
     *
     * @return self
     */
    public function setFtpUserName(string $ftpUserName): self
    {
        $this->initialized['ftpUserName'] = true;
        $this->ftpUserName = $ftpUserName;
        return $this;
    }
    /**
     * Password for FTP login
     *
     * @return string
     */
    public function getFtpPassword(): string
    {
        return $this->ftpPassword;
    }
    /**
     * Password for FTP login
     *
     * @param string $ftpPassword
     *
     * @return self
     */
    public function setFtpPassword(string $ftpPassword): self
    {
        $this->initialized['ftpPassword'] = true;
        $this->ftpPassword = $ftpPassword;
        return $this;
    }
    /**
     * Protocol used
     *
     * @return string
     */
    public function getFtpProtocol(): string
    {
        return $this->ftpProtocol;
    }
    /**
     * Protocol used
     *
     * @param string $ftpProtocol
     *
     * @return self
     */
    public function setFtpProtocol(string $ftpProtocol): self
    {
        $this->initialized['ftpProtocol'] = true;
        $this->ftpProtocol = $ftpProtocol;
        return $this;
    }
}
<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationAutoExportBackup
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
     * enable auto export backup
     *
     * @var bool
     */
    protected $enableAutoExportBackup;
    /**
     * File prefix name
     *
     * @var string
     */
    protected $ftpNamePrefix;
    /**
     * FTP server name
     *
     * @var string
     */
    protected $ftpServer;
    /**
     * enable auto export backup
     *
     * @return bool
     */
    public function getEnableAutoExportBackup(): bool
    {
        return $this->enableAutoExportBackup;
    }
    /**
     * enable auto export backup
     *
     * @param bool $enableAutoExportBackup
     *
     * @return self
     */
    public function setEnableAutoExportBackup(bool $enableAutoExportBackup): self
    {
        $this->initialized['enableAutoExportBackup'] = true;
        $this->enableAutoExportBackup = $enableAutoExportBackup;
        return $this;
    }
    /**
     * File prefix name
     *
     * @return string
     */
    public function getFtpNamePrefix(): string
    {
        return $this->ftpNamePrefix;
    }
    /**
     * File prefix name
     *
     * @param string $ftpNamePrefix
     *
     * @return self
     */
    public function setFtpNamePrefix(string $ftpNamePrefix): self
    {
        $this->initialized['ftpNamePrefix'] = true;
        $this->ftpNamePrefix = $ftpNamePrefix;
        return $this;
    }
    /**
     * FTP server name
     *
     * @return string
     */
    public function getFtpServer(): string
    {
        return $this->ftpServer;
    }
    /**
     * FTP server name
     *
     * @param string $ftpServer
     *
     * @return self
     */
    public function setFtpServer(string $ftpServer): self
    {
        $this->initialized['ftpServer'] = true;
        $this->ftpServer = $ftpServer;
        return $this;
    }
}
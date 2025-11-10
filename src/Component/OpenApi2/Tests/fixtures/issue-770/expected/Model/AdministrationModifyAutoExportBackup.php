<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationModifyAutoExportBackup
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
    protected $enableAutoExportBackup = false;
    /**
     * file prefix name
     *
     * @var string
     */
    protected $ftpNamePrefix;
    /**
     * ftp server name
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
     * file prefix name
     *
     * @return string
     */
    public function getFtpNamePrefix(): string
    {
        return $this->ftpNamePrefix;
    }
    /**
     * file prefix name
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
     * ftp server name
     *
     * @return string
     */
    public function getFtpServer(): string
    {
        return $this->ftpServer;
    }
    /**
     * ftp server name
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
<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemFtp
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
     * FTP Id
     *
     * @var string
     */
    protected $id;
    /**
     * Tenant Id
     *
     * @var string
     */
    protected $tenantId;
    /**
     * Domain Id
     *
     * @var string
     */
    protected $domainId;
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
     * Username for login
     *
     * @var string
     */
    protected $ftpUserName;
    /**
     * Password for login
     *
     * @var string
     */
    protected $ftpPassword;
    /**
     * creator id
     *
     * @var string
     */
    protected $creatorUUID;
    /**
     * entry create time
     *
     * @var int
     */
    protected $createDatetime;
    /**
     * last modified user
     *
     * @var string
     */
    protected $lastModifiedBy;
    /**
     * last modified time
     *
     * @var int
     */
    protected $lastModifiedOn;
    /**
     * FTP name
     *
     * @var string
     */
    protected $ftpName;
    /**
     * Protocol used
     *
     * @var string
     */
    protected $ftpProtocol;
    /**
     * FTP Id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * FTP Id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Tenant Id
     *
     * @return string
     */
    public function getTenantId(): string
    {
        return $this->tenantId;
    }
    /**
     * Tenant Id
     *
     * @param string $tenantId
     *
     * @return self
     */
    public function setTenantId(string $tenantId): self
    {
        $this->initialized['tenantId'] = true;
        $this->tenantId = $tenantId;
        return $this;
    }
    /**
     * Domain Id
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain Id
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
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
     * Username for login
     *
     * @return string
     */
    public function getFtpUserName(): string
    {
        return $this->ftpUserName;
    }
    /**
     * Username for login
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
     * Password for login
     *
     * @return string
     */
    public function getFtpPassword(): string
    {
        return $this->ftpPassword;
    }
    /**
     * Password for login
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
     * creator id
     *
     * @return string
     */
    public function getCreatorUUID(): string
    {
        return $this->creatorUUID;
    }
    /**
     * creator id
     *
     * @param string $creatorUUID
     *
     * @return self
     */
    public function setCreatorUUID(string $creatorUUID): self
    {
        $this->initialized['creatorUUID'] = true;
        $this->creatorUUID = $creatorUUID;
        return $this;
    }
    /**
     * entry create time
     *
     * @return int
     */
    public function getCreateDatetime(): int
    {
        return $this->createDatetime;
    }
    /**
     * entry create time
     *
     * @param int $createDatetime
     *
     * @return self
     */
    public function setCreateDatetime(int $createDatetime): self
    {
        $this->initialized['createDatetime'] = true;
        $this->createDatetime = $createDatetime;
        return $this;
    }
    /**
     * last modified user
     *
     * @return string
     */
    public function getLastModifiedBy(): string
    {
        return $this->lastModifiedBy;
    }
    /**
     * last modified user
     *
     * @param string $lastModifiedBy
     *
     * @return self
     */
    public function setLastModifiedBy(string $lastModifiedBy): self
    {
        $this->initialized['lastModifiedBy'] = true;
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }
    /**
     * last modified time
     *
     * @return int
     */
    public function getLastModifiedOn(): int
    {
        return $this->lastModifiedOn;
    }
    /**
     * last modified time
     *
     * @param int $lastModifiedOn
     *
     * @return self
     */
    public function setLastModifiedOn(int $lastModifiedOn): self
    {
        $this->initialized['lastModifiedOn'] = true;
        $this->lastModifiedOn = $lastModifiedOn;
        return $this;
    }
    /**
     * FTP name
     *
     * @return string
     */
    public function getFtpName(): string
    {
        return $this->ftpName;
    }
    /**
     * FTP name
     *
     * @param string $ftpName
     *
     * @return self
     */
    public function setFtpName(string $ftpName): self
    {
        $this->initialized['ftpName'] = true;
        $this->ftpName = $ftpName;
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
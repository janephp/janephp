<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemFtp
{
    /**
     * FTP Id
     *
     * @var string
     */
    public string $id;
    /**
     * Tenant Id
     *
     * @var string
     */
    public string $tenantId;
    /**
     * Domain Id
     *
     * @var string
     */
    public string $domainId;
    /**
     * IP/DN of FTP
     *
     * @var string
     */
    public string $ftpHost;
    /**
     * Port used by FTP
     *
     * @var int
     */
    public int $ftpPort;
    /**
     * Destination directory used for file upload
     *
     * @var string
     */
    public string $ftpRemoteDirectory;
    /**
     * Username for login
     *
     * @var string
     */
    public string $ftpUserName;
    /**
     * Password for login
     *
     * @var string
     */
    public string $ftpPassword;
    /**
     * creator id
     *
     * @var string
     */
    public string $creatorUUID;
    /**
     * entry create time
     *
     * @var int
     */
    public int $createDatetime;
    /**
     * last modified user
     *
     * @var string
     */
    public string $lastModifiedBy;
    /**
     * last modified time
     *
     * @var int
     */
    public int $lastModifiedOn;
    /**
     * FTP name
     *
     * @var string
     */
    public string $ftpName;
    /**
     * Protocol used
     *
     * @var string
     */
    public string $ftpProtocol;
}
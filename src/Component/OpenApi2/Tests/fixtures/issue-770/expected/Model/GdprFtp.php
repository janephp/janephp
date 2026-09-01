<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class GdprFtp
{
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
     * Username for FTP login
     *
     * @var string
     */
    public string $ftpUserName;
    /**
     * Password for FTP login
     *
     * @var string
     */
    public string $ftpPassword;
    /**
     * Protocol used
     *
     * @var string
     */
    public string $ftpProtocol;
}
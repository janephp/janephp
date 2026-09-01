<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationModifyAutoExportBackup
{
    /**
     * enable auto export backup
     *
     * @var bool
     */
    public bool $enableAutoExportBackup = false;
    /**
     * file prefix name
     *
     * @var string
     */
    public string $ftpNamePrefix;
    /**
     * ftp server name
     *
     * @var string
     */
    public string $ftpServer;
}
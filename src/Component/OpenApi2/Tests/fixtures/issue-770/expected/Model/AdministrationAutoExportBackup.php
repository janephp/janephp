<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AdministrationAutoExportBackup
{
    /**
     * enable auto export backup
     *
     * @var bool
     */
    public bool $enableAutoExportBackup;
    /**
     * File prefix name
     *
     * @var string
     */
    public string $ftpNamePrefix;
    /**
     * FTP server name
     *
     * @var string
     */
    public string $ftpServer;
}
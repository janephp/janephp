<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationBackupFile
{
    /**
     * Identifier of system configuration backup file.
     *
     * @var string
     */
    public string $id;
    /**
     * the create time of the configuration backup file.
     *
     * @var float
     */
    public float $createdOn;
    /**
     * SCG version of the configuration backup file.
     *
     * @var string
     */
    public string $scgVersion;
    /**
     * control plane software version of the configuration backup file
     *
     * @var string
     */
    public string $controlPlaneSoftwareVersion;
    /**
     * data plane software version of the configuration backup file
     *
     * @var string
     */
    public string $dataPlaneSoftwareVersion;
    /**
     * creator of the configuration backup file.
     *
     * @var string
     */
    public string $createdBy;
    /**
     * type of the configuration backup file
     *
     * @var string
     */
    public string $type;
    /**
     * backup elapsed of the configuration backup file
     *
     * @var int
     */
    public int $backupElapsed;
    /**
     * file size of the backup file
     *
     * @var int
     */
    public int $fileSize;
    /**
     * file md5 of the backup file
     *
     * @var string
     */
    public string $md5;
}
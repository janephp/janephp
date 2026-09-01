<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationClusterBackupSummary
{
    /**
     * Identifier of cluster backup file.
     *
     * @var string
     */
    public string $id;
    /**
     * the patch version of the cluster backup file.
     *
     * @var string
     */
    public string $version;
    /**
     * filesize of the cluster backup file.
     *
     * @var float
     */
    public float $filesize;
    /**
     * Created date and time of the cluster backup file
     *
     * @var string
     */
    public string $createdOn;
}
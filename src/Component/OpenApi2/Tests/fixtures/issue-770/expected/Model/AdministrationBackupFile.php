<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationBackupFile
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
     * Identifier of system configuration backup file.
     *
     * @var string
     */
    protected $id;
    /**
     * the create time of the configuration backup file.
     *
     * @var float
     */
    protected $createdOn;
    /**
     * SCG version of the configuration backup file.
     *
     * @var string
     */
    protected $scgVersion;
    /**
     * control plane software version of the configuration backup file
     *
     * @var string
     */
    protected $controlPlaneSoftwareVersion;
    /**
     * data plane software version of the configuration backup file
     *
     * @var string
     */
    protected $dataPlaneSoftwareVersion;
    /**
     * creator of the configuration backup file.
     *
     * @var string
     */
    protected $createdBy;
    /**
     * type of the configuration backup file
     *
     * @var string
     */
    protected $type;
    /**
     * backup elapsed of the configuration backup file
     *
     * @var int
     */
    protected $backupElapsed;
    /**
     * file size of the backup file
     *
     * @var int
     */
    protected $fileSize;
    /**
     * file md5 of the backup file
     *
     * @var string
     */
    protected $md5;
    /**
     * Identifier of system configuration backup file.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of system configuration backup file.
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
     * the create time of the configuration backup file.
     *
     * @return float
     */
    public function getCreatedOn(): float
    {
        return $this->createdOn;
    }
    /**
     * the create time of the configuration backup file.
     *
     * @param float $createdOn
     *
     * @return self
     */
    public function setCreatedOn(float $createdOn): self
    {
        $this->initialized['createdOn'] = true;
        $this->createdOn = $createdOn;
        return $this;
    }
    /**
     * SCG version of the configuration backup file.
     *
     * @return string
     */
    public function getScgVersion(): string
    {
        return $this->scgVersion;
    }
    /**
     * SCG version of the configuration backup file.
     *
     * @param string $scgVersion
     *
     * @return self
     */
    public function setScgVersion(string $scgVersion): self
    {
        $this->initialized['scgVersion'] = true;
        $this->scgVersion = $scgVersion;
        return $this;
    }
    /**
     * control plane software version of the configuration backup file
     *
     * @return string
     */
    public function getControlPlaneSoftwareVersion(): string
    {
        return $this->controlPlaneSoftwareVersion;
    }
    /**
     * control plane software version of the configuration backup file
     *
     * @param string $controlPlaneSoftwareVersion
     *
     * @return self
     */
    public function setControlPlaneSoftwareVersion(string $controlPlaneSoftwareVersion): self
    {
        $this->initialized['controlPlaneSoftwareVersion'] = true;
        $this->controlPlaneSoftwareVersion = $controlPlaneSoftwareVersion;
        return $this;
    }
    /**
     * data plane software version of the configuration backup file
     *
     * @return string
     */
    public function getDataPlaneSoftwareVersion(): string
    {
        return $this->dataPlaneSoftwareVersion;
    }
    /**
     * data plane software version of the configuration backup file
     *
     * @param string $dataPlaneSoftwareVersion
     *
     * @return self
     */
    public function setDataPlaneSoftwareVersion(string $dataPlaneSoftwareVersion): self
    {
        $this->initialized['dataPlaneSoftwareVersion'] = true;
        $this->dataPlaneSoftwareVersion = $dataPlaneSoftwareVersion;
        return $this;
    }
    /**
     * creator of the configuration backup file.
     *
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
    /**
     * creator of the configuration backup file.
     *
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * type of the configuration backup file
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * type of the configuration backup file
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * backup elapsed of the configuration backup file
     *
     * @return int
     */
    public function getBackupElapsed(): int
    {
        return $this->backupElapsed;
    }
    /**
     * backup elapsed of the configuration backup file
     *
     * @param int $backupElapsed
     *
     * @return self
     */
    public function setBackupElapsed(int $backupElapsed): self
    {
        $this->initialized['backupElapsed'] = true;
        $this->backupElapsed = $backupElapsed;
        return $this;
    }
    /**
     * file size of the backup file
     *
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }
    /**
     * file size of the backup file
     *
     * @param int $fileSize
     *
     * @return self
     */
    public function setFileSize(int $fileSize): self
    {
        $this->initialized['fileSize'] = true;
        $this->fileSize = $fileSize;
        return $this;
    }
    /**
     * file md5 of the backup file
     *
     * @return string
     */
    public function getMd5(): string
    {
        return $this->md5;
    }
    /**
     * file md5 of the backup file
     *
     * @param string $md5
     *
     * @return self
     */
    public function setMd5(string $md5): self
    {
        $this->initialized['md5'] = true;
        $this->md5 = $md5;
        return $this;
    }
}
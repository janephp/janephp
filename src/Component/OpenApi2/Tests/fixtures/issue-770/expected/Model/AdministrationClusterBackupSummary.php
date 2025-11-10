<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationClusterBackupSummary
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
     * Identifier of cluster backup file.
     *
     * @var string
     */
    protected $id;
    /**
     * the patch version of the cluster backup file.
     *
     * @var string
     */
    protected $version;
    /**
     * filesize of the cluster backup file.
     *
     * @var float
     */
    protected $filesize;
    /**
     * Created date and time of the cluster backup file
     *
     * @var string
     */
    protected $createdOn;
    /**
     * Identifier of cluster backup file.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of cluster backup file.
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
     * the patch version of the cluster backup file.
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * the patch version of the cluster backup file.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * filesize of the cluster backup file.
     *
     * @return float
     */
    public function getFilesize(): float
    {
        return $this->filesize;
    }
    /**
     * filesize of the cluster backup file.
     *
     * @param float $filesize
     *
     * @return self
     */
    public function setFilesize(float $filesize): self
    {
        $this->initialized['filesize'] = true;
        $this->filesize = $filesize;
        return $this;
    }
    /**
     * Created date and time of the cluster backup file
     *
     * @return string
     */
    public function getCreatedOn(): string
    {
        return $this->createdOn;
    }
    /**
     * Created date and time of the cluster backup file
     *
     * @param string $createdOn
     *
     * @return self
     */
    public function setCreatedOn(string $createdOn): self
    {
        $this->initialized['createdOn'] = true;
        $this->createdOn = $createdOn;
        return $this;
    }
}
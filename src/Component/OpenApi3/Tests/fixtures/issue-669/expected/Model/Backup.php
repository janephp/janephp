<?php

namespace Jane\Generated\DigitalOcean\Model;

class Backup extends \ArrayObject
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
     * A time value given in ISO8601 combined date and time format at which the backup was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The size of the database backup in GBs.
     *
     * @var float
     */
    protected $sizeGigabytes;
    /**
     * Indicates if this backup is a full or an incremental one (available only for MySQL).
     *
     * @var bool
     */
    protected $incremental;
    /**
     * A time value given in ISO8601 combined date and time format at which the backup was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format at which the backup was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The size of the database backup in GBs.
     *
     * @return float
     */
    public function getSizeGigabytes(): float
    {
        return $this->sizeGigabytes;
    }
    /**
     * The size of the database backup in GBs.
     *
     * @param float $sizeGigabytes
     *
     * @return self
     */
    public function setSizeGigabytes(float $sizeGigabytes): self
    {
        $this->initialized['sizeGigabytes'] = true;
        $this->sizeGigabytes = $sizeGigabytes;
        return $this;
    }
    /**
     * Indicates if this backup is a full or an incremental one (available only for MySQL).
     *
     * @return bool
     */
    public function getIncremental(): bool
    {
        return $this->incremental;
    }
    /**
     * Indicates if this backup is a full or an incremental one (available only for MySQL).
     *
     * @param bool $incremental
     *
     * @return self
     */
    public function setIncremental(bool $incremental): self
    {
        $this->initialized['incremental'] = true;
        $this->incremental = $incremental;
        return $this;
    }
}
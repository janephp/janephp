<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiAgentAPIKeyInfo extends \ArrayObject
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
     * Creation date
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Created by
     *
     * @var string
     */
    protected $createdBy;
    /**
     * Deleted date
     *
     * @var \DateTime
     */
    protected $deletedAt;
    /**
     * Name
     *
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $secretKey;
    /**
     * Uuid
     *
     * @var string
     */
    protected $uuid;
    /**
     * Creation date
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Creation date
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
     * Created by
     *
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
    /**
     * Created by
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
     * Deleted date
     *
     * @return \DateTime
     */
    public function getDeletedAt(): \DateTime
    {
        return $this->deletedAt;
    }
    /**
     * Deleted date
     *
     * @param \DateTime $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
    /**
     * Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getSecretKey(): string
    {
        return $this->secretKey;
    }
    /**
     * @param string $secretKey
     *
     * @return self
     */
    public function setSecretKey(string $secretKey): self
    {
        $this->initialized['secretKey'] = true;
        $this->secretKey = $secretKey;
        return $this;
    }
    /**
     * Uuid
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Uuid
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
}
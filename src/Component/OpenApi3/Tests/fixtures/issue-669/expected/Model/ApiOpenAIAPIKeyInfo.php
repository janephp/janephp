<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiOpenAIAPIKeyInfo extends \ArrayObject
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
     * Key creation date
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Created by user id from DO
     *
     * @var string
     */
    protected $createdBy;
    /**
     * Key deleted date
     *
     * @var \DateTime
     */
    protected $deletedAt;
    /**
     * Models supported by the openAI api key
     *
     * @var list<ApiModel>
     */
    protected $models;
    /**
     * Name
     *
     * @var string
     */
    protected $name;
    /**
     * Key last updated date
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Uuid
     *
     * @var string
     */
    protected $uuid;
    /**
     * Key creation date
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Key creation date
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
     * Created by user id from DO
     *
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
    /**
     * Created by user id from DO
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
     * Key deleted date
     *
     * @return \DateTime
     */
    public function getDeletedAt(): \DateTime
    {
        return $this->deletedAt;
    }
    /**
     * Key deleted date
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
     * Models supported by the openAI api key
     *
     * @return list<ApiModel>
     */
    public function getModels(): array
    {
        return $this->models;
    }
    /**
     * Models supported by the openAI api key
     *
     * @param list<ApiModel> $models
     *
     * @return self
     */
    public function setModels(array $models): self
    {
        $this->initialized['models'] = true;
        $this->models = $models;
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
     * Key last updated date
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Key last updated date
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
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
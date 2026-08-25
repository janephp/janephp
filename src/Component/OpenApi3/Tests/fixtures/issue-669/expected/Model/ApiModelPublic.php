<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiModelPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Agreement Description
     *
     * @var ApiAgreement
     */
    protected $agreement;
    /**
     * Creation date / time
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Human-readable model identifier
     *
     * @var string
     */
    protected $id;
    /**
     * True if it is a foundational model provided by do
     *
     * @var bool
     */
    protected $isFoundational;
    /**
     * Default chunking size limit to show in UI
     *
     * @var int
     */
    protected $kbDefaultChunkSize;
    /**
     * Maximum chunk size limit of model
     *
     * @var int
     */
    protected $kbMaxChunkSize;
    /**
     * Minimum chunking size token limits if model supports KNOWLEDGEBASE usecase
     *
     * @var int
     */
    protected $kbMinChunkSize;
    /**
     * Display name of the model
     *
     * @var string
     */
    protected $name;
    /**
     * Unique id of the model, this model is based on
     *
     * @var string
     */
    protected $parentUuid;
    /**
     * Last modified
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Model has been fully uploaded
     *
     * @var bool
     */
    protected $uploadComplete;
    /**
     * Download url
     *
     * @var string
     */
    protected $url;
    /**
     * Unique id
     *
     * @var string
     */
    protected $uuid;
    /**
     * Version Information about a Model
     *
     * @var ApiModelVersion
     */
    protected $version;
    /**
     * Agreement Description
     *
     * @return ApiAgreement
     */
    public function getAgreement(): ApiAgreement
    {
        return $this->agreement;
    }
    /**
     * Agreement Description
     *
     * @param ApiAgreement $agreement
     *
     * @return self
     */
    public function setAgreement(ApiAgreement $agreement): self
    {
        $this->initialized['agreement'] = true;
        $this->agreement = $agreement;
        return $this;
    }
    /**
     * Creation date / time
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Creation date / time
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
     * Human-readable model identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Human-readable model identifier
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
     * True if it is a foundational model provided by do
     *
     * @return bool
     */
    public function getIsFoundational(): bool
    {
        return $this->isFoundational;
    }
    /**
     * True if it is a foundational model provided by do
     *
     * @param bool $isFoundational
     *
     * @return self
     */
    public function setIsFoundational(bool $isFoundational): self
    {
        $this->initialized['isFoundational'] = true;
        $this->isFoundational = $isFoundational;
        return $this;
    }
    /**
     * Default chunking size limit to show in UI
     *
     * @return int
     */
    public function getKbDefaultChunkSize(): int
    {
        return $this->kbDefaultChunkSize;
    }
    /**
     * Default chunking size limit to show in UI
     *
     * @param int $kbDefaultChunkSize
     *
     * @return self
     */
    public function setKbDefaultChunkSize(int $kbDefaultChunkSize): self
    {
        $this->initialized['kbDefaultChunkSize'] = true;
        $this->kbDefaultChunkSize = $kbDefaultChunkSize;
        return $this;
    }
    /**
     * Maximum chunk size limit of model
     *
     * @return int
     */
    public function getKbMaxChunkSize(): int
    {
        return $this->kbMaxChunkSize;
    }
    /**
     * Maximum chunk size limit of model
     *
     * @param int $kbMaxChunkSize
     *
     * @return self
     */
    public function setKbMaxChunkSize(int $kbMaxChunkSize): self
    {
        $this->initialized['kbMaxChunkSize'] = true;
        $this->kbMaxChunkSize = $kbMaxChunkSize;
        return $this;
    }
    /**
     * Minimum chunking size token limits if model supports KNOWLEDGEBASE usecase
     *
     * @return int
     */
    public function getKbMinChunkSize(): int
    {
        return $this->kbMinChunkSize;
    }
    /**
     * Minimum chunking size token limits if model supports KNOWLEDGEBASE usecase
     *
     * @param int $kbMinChunkSize
     *
     * @return self
     */
    public function setKbMinChunkSize(int $kbMinChunkSize): self
    {
        $this->initialized['kbMinChunkSize'] = true;
        $this->kbMinChunkSize = $kbMinChunkSize;
        return $this;
    }
    /**
     * Display name of the model
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Display name of the model
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
     * Unique id of the model, this model is based on
     *
     * @return string
     */
    public function getParentUuid(): string
    {
        return $this->parentUuid;
    }
    /**
     * Unique id of the model, this model is based on
     *
     * @param string $parentUuid
     *
     * @return self
     */
    public function setParentUuid(string $parentUuid): self
    {
        $this->initialized['parentUuid'] = true;
        $this->parentUuid = $parentUuid;
        return $this;
    }
    /**
     * Last modified
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Last modified
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
     * Model has been fully uploaded
     *
     * @return bool
     */
    public function getUploadComplete(): bool
    {
        return $this->uploadComplete;
    }
    /**
     * Model has been fully uploaded
     *
     * @param bool $uploadComplete
     *
     * @return self
     */
    public function setUploadComplete(bool $uploadComplete): self
    {
        $this->initialized['uploadComplete'] = true;
        $this->uploadComplete = $uploadComplete;
        return $this;
    }
    /**
     * Download url
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * Download url
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * Unique id
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Unique id
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
    /**
     * Version Information about a Model
     *
     * @return ApiModelVersion
     */
    public function getVersion(): ApiModelVersion
    {
        return $this->version;
    }
    /**
     * Version Information about a Model
     *
     * @param ApiModelVersion $version
     *
     * @return self
     */
    public function setVersion(ApiModelVersion $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['agreement' => ['agreement', 'getAgreement', 'setAgreement'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'id' => ['id', 'getId', 'setId'], 'isFoundational' => ['is_foundational', 'getIsFoundational', 'setIsFoundational'], 'kbDefaultChunkSize' => ['kb_default_chunk_size', 'getKbDefaultChunkSize', 'setKbDefaultChunkSize'], 'kbMaxChunkSize' => ['kb_max_chunk_size', 'getKbMaxChunkSize', 'setKbMaxChunkSize'], 'kbMinChunkSize' => ['kb_min_chunk_size', 'getKbMinChunkSize', 'setKbMinChunkSize'], 'name' => ['name', 'getName', 'setName'], 'parentUuid' => ['parent_uuid', 'getParentUuid', 'setParentUuid'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt'], 'uploadComplete' => ['upload_complete', 'getUploadComplete', 'setUploadComplete'], 'url' => ['url', 'getUrl', 'setUrl'], 'uuid' => ['uuid', 'getUuid', 'setUuid'], 'version' => ['version', 'getVersion', 'setVersion']];
    }
}
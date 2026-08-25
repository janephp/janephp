<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiModelProviderKeyInfo implements AdditionalPropertiesInterface
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
     * API key ID
     *
     * @var string
     */
    protected $apiKeyUuid;
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
     * Name of the key
     *
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $provider = 'MODEL_PROVIDER_DIGITALOCEAN';
    /**
     * Key last updated date
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * API key ID
     *
     * @return string
     */
    public function getApiKeyUuid(): string
    {
        return $this->apiKeyUuid;
    }
    /**
     * API key ID
     *
     * @param string $apiKeyUuid
     *
     * @return self
     */
    public function setApiKeyUuid(string $apiKeyUuid): self
    {
        $this->initialized['apiKeyUuid'] = true;
        $this->apiKeyUuid = $apiKeyUuid;
        return $this;
    }
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
     * Name of the key
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the key
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
    public function getProvider(): string
    {
        return $this->provider;
    }
    /**
     * @param string $provider
     *
     * @return self
     */
    public function setProvider(string $provider): self
    {
        $this->initialized['provider'] = true;
        $this->provider = $provider;
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
    public function definedProperties(): array
    {
        return ['apiKeyUuid' => ['api_key_uuid', 'getApiKeyUuid', 'setApiKeyUuid'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'createdBy' => ['created_by', 'getCreatedBy', 'setCreatedBy'], 'deletedAt' => ['deleted_at', 'getDeletedAt', 'setDeletedAt'], 'models' => ['models', 'getModels', 'setModels'], 'name' => ['name', 'getName', 'setName'], 'provider' => ['provider', 'getProvider', 'setProvider'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt']];
    }
}
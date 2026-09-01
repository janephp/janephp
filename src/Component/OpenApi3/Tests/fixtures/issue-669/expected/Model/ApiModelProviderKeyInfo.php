<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiModelProviderKeyInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * API key ID
     *
     * @var string
     */
    public string $apiKeyUuid;
    /**
     * Key creation date
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Created by user id from DO
     *
     * @var string
     */
    public string $createdBy;
    /**
     * Key deleted date
     *
     * @var \DateTime
     */
    public \DateTime $deletedAt;
    /**
     * Models supported by the openAI api key
     *
     * @var list<ApiModel>
     */
    public array $models;
    /**
     * Name of the key
     *
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $provider = 'MODEL_PROVIDER_DIGITALOCEAN';
    /**
     * Key last updated date
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    public function definedProperties(): array
    {
        return ['apiKeyUuid' => 'api_key_uuid', 'createdAt' => 'created_at', 'createdBy' => 'created_by', 'deletedAt' => 'deleted_at', 'models' => 'models', 'name' => 'name', 'provider' => 'provider', 'updatedAt' => 'updated_at'];
    }
}
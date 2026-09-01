<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiModel implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Agreement Description
     *
     * @var ApiAgreement
     */
    public ApiAgreement $agreement;
    /**
     * Creation date / time
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Internally used name
     *
     * @var string
     */
    public string $inferenceName;
    /**
     * Internally used version
     *
     * @var string
     */
    public string $inferenceVersion;
    /**
     * True if it is a foundational model provided by do
     *
     * @var bool
     */
    public bool $isFoundational;
    /**
     * Default chunking size limit to show in UI
     *
     * @var int
     */
    public int $kbDefaultChunkSize;
    /**
     * Maximum chunk size limit of model
     *
     * @var int
     */
    public int $kbMaxChunkSize;
    /**
     * Minimum chunking size token limits if model supports KNOWLEDGEBASE usecase
     *
     * @var int
     */
    public int $kbMinChunkSize;
    /**
     * Additional meta data
     *
     * @var array<string, mixed>
     */
    public iterable $metadata;
    /**
     * Name of the model
     *
     * @var string
     */
    public string $name;
    /**
     * Unique id of the model, this model is based on
     *
     * @var string
     */
    public string $parentUuid;
    /**
     * @var string
     */
    public string $provider = 'MODEL_PROVIDER_DIGITALOCEAN';
    /**
     * Last modified
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * Model has been fully uploaded
     *
     * @var bool
     */
    public bool $uploadComplete;
    /**
     * Download url
     *
     * @var string
     */
    public string $url;
    /**
     * Usecases of the model
     *
     * @var list<string>
     */
    public array $usecases;
    /**
     * Unique id
     *
     * @var string
     */
    public string $uuid;
    /**
     * Version Information about a Model
     *
     * @var ApiModelVersion
     */
    public ApiModelVersion $version;
    public function definedProperties(): array
    {
        return ['agreement' => 'agreement', 'createdAt' => 'created_at', 'inferenceName' => 'inference_name', 'inferenceVersion' => 'inference_version', 'isFoundational' => 'is_foundational', 'kbDefaultChunkSize' => 'kb_default_chunk_size', 'kbMaxChunkSize' => 'kb_max_chunk_size', 'kbMinChunkSize' => 'kb_min_chunk_size', 'metadata' => 'metadata', 'name' => 'name', 'parentUuid' => 'parent_uuid', 'provider' => 'provider', 'updatedAt' => 'updated_at', 'uploadComplete' => 'upload_complete', 'url' => 'url', 'usecases' => 'usecases', 'uuid' => 'uuid', 'version' => 'version'];
    }
}
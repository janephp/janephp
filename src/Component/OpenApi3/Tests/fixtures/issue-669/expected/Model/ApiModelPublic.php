<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiModelPublic implements AdditionalPropertiesInterface
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
     * Human-readable model identifier
     *
     * @var string
     */
    public string $id;
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
     * Display name of the model
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
        return ['agreement' => 'agreement', 'createdAt' => 'created_at', 'id' => 'id', 'isFoundational' => 'is_foundational', 'kbDefaultChunkSize' => 'kb_default_chunk_size', 'kbMaxChunkSize' => 'kb_max_chunk_size', 'kbMinChunkSize' => 'kb_min_chunk_size', 'name' => 'name', 'parentUuid' => 'parent_uuid', 'updatedAt' => 'updated_at', 'uploadComplete' => 'upload_complete', 'url' => 'url', 'uuid' => 'uuid', 'version' => 'version'];
    }
}
<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentFunction implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Api key
     *
     * @var string
     */
    public string $apiKey;
    /**
     * Creation date / time
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
     * Agent description
     *
     * @var string
     */
    public string $description;
    /**
     * @var string
     */
    public string $faasName;
    /**
     * @var string
     */
    public string $faasNamespace;
    /**
     * @var array<string, mixed>
     */
    public iterable $inputSchema;
    /**
     * Name
     *
     * @var string
     */
    public string $name;
    /**
     * @var array<string, mixed>
     */
    public iterable $outputSchema;
    /**
     * Last modified
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * Download your agent here
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
    public function definedProperties(): array
    {
        return ['apiKey' => 'api_key', 'createdAt' => 'created_at', 'createdBy' => 'created_by', 'description' => 'description', 'faasName' => 'faas_name', 'faasNamespace' => 'faas_namespace', 'inputSchema' => 'input_schema', 'name' => 'name', 'outputSchema' => 'output_schema', 'updatedAt' => 'updated_at', 'url' => 'url', 'uuid' => 'uuid'];
    }
}
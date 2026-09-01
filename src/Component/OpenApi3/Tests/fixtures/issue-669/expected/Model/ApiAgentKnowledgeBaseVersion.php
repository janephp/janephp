<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentKnowledgeBaseVersion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Deletet at date / time
     *
     * @var bool
     */
    public bool $isDeleted;
    /**
     * Name of the knowledge base
     *
     * @var string
     */
    public string $name;
    /**
     * Unique id of the knowledge base
     *
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['isDeleted' => 'is_deleted', 'name' => 'name', 'uuid' => 'uuid'];
    }
}
<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCancelKnowledgeBaseIndexingJobInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique identifier for an indexing job.
     *
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['uuid' => 'uuid'];
    }
}
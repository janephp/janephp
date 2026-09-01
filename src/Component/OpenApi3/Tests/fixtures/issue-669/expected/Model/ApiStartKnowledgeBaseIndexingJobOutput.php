<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiStartKnowledgeBaseIndexingJobOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * IndexingJob description
     *
     * @var ApiIndexingJob
     */
    public ApiIndexingJob $job;
    public function definedProperties(): array
    {
        return ['job' => 'job'];
    }
}
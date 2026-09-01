<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListKnowledgeBaseIndexingJobsOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The indexing jobs
     *
     * @var list<ApiIndexingJob>
     */
    public array $jobs;
    /**
     * Links to other pages
     *
     * @var ApiLinks
     */
    public ApiLinks $links;
    /**
     * Meta information about the data set
     *
     * @var ApiMeta
     */
    public ApiMeta $meta;
    public function definedProperties(): array
    {
        return ['jobs' => 'jobs', 'links' => 'links', 'meta' => 'meta'];
    }
}
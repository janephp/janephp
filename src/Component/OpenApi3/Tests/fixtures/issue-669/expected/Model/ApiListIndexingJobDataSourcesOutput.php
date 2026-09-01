<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListIndexingJobDataSourcesOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ApiIndexedDataSource>
     */
    public array $indexedDataSources;
    public function definedProperties(): array
    {
        return ['indexedDataSources' => 'indexed_data_sources'];
    }
}
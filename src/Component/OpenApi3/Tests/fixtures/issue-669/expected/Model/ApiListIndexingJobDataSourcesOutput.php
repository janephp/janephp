<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListIndexingJobDataSourcesOutput implements AdditionalPropertiesInterface
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
     * @var list<ApiIndexedDataSource>
     */
    protected $indexedDataSources;
    /**
     * @return list<ApiIndexedDataSource>
     */
    public function getIndexedDataSources(): array
    {
        return $this->indexedDataSources;
    }
    /**
     * @param list<ApiIndexedDataSource> $indexedDataSources
     *
     * @return self
     */
    public function setIndexedDataSources(array $indexedDataSources): self
    {
        $this->initialized['indexedDataSources'] = true;
        $this->indexedDataSources = $indexedDataSources;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['indexedDataSources' => ['indexed_data_sources', 'getIndexedDataSources', 'setIndexedDataSources']];
    }
}
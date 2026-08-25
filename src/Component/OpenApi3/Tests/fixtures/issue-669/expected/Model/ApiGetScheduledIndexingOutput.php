<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetScheduledIndexingOutput implements AdditionalPropertiesInterface
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
     * Metadata for scheduled indexing entries
     *
     * @var ApiScheduledIndexingInfo
     */
    protected $indexingInfo;
    /**
     * Metadata for scheduled indexing entries
     *
     * @return ApiScheduledIndexingInfo
     */
    public function getIndexingInfo(): ApiScheduledIndexingInfo
    {
        return $this->indexingInfo;
    }
    /**
     * Metadata for scheduled indexing entries
     *
     * @param ApiScheduledIndexingInfo $indexingInfo
     *
     * @return self
     */
    public function setIndexingInfo(ApiScheduledIndexingInfo $indexingInfo): self
    {
        $this->initialized['indexingInfo'] = true;
        $this->indexingInfo = $indexingInfo;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['indexingInfo' => ['indexing_info', 'getIndexingInfo', 'setIndexingInfo']];
    }
}
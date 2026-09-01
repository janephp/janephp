<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetScheduledIndexingOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Metadata for scheduled indexing entries
     *
     * @var ApiScheduledIndexingInfo
     */
    public ApiScheduledIndexingInfo $indexingInfo;
    public function definedProperties(): array
    {
        return ['indexingInfo' => 'indexing_info'];
    }
}
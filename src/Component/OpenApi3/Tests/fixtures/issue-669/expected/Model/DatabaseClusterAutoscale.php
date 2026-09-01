<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseClusterAutoscale implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var DatabaseAutoscaleParamsStorage
     */
    public DatabaseAutoscaleParamsStorage $storage;
    public function definedProperties(): array
    {
        return ['storage' => 'storage'];
    }
}
<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2DatabasesDatabaseClusterUuidMigratePutBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A slug identifier for the region to which the database cluster will be migrated.
     *
     * @var string
     */
    public string $region;
    public function definedProperties(): array
    {
        return ['region' => 'region'];
    }
}
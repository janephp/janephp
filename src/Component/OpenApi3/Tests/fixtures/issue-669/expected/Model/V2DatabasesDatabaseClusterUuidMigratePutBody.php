<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2DatabasesDatabaseClusterUuidMigratePutBody implements AdditionalPropertiesInterface
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
     * A slug identifier for the region to which the database cluster will be migrated.
     *
     * @var string
     */
    protected $region;
    /**
     * A slug identifier for the region to which the database cluster will be migrated.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * A slug identifier for the region to which the database cluster will be migrated.
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['region' => ['region', 'getRegion', 'setRegion']];
    }
}
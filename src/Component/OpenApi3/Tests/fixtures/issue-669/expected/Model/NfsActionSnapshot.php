<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsActionSnapshot implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The type of action to initiate for the NFS share (such as resize or snapshot).
     *
     * @var string
     */
    public string $type;
    /**
     * The DigitalOcean region slug (e.g. atl1, nyc2) where the NFS snapshot resides.
     *
     * @var string
     */
    public string $region;
    /**
     * @var NfsActionSnapshotParams
     */
    public NfsActionSnapshotParams $params;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'region' => 'region', 'params' => 'params'];
    }
}
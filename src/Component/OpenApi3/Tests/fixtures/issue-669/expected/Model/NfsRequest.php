<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The human-readable name of the share.
     *
     * @var string
     */
    public string $name;
    /**
     * The desired/provisioned size of the share in GiB (Gibibytes). Must be >= 50.
     *
     * @var int
     */
    public int $sizeGib;
    /**
     * The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
     *
     * @var string
     */
    public string $region;
    /**
     * List of VPC IDs that should be able to access the share.
     *
     * @var list<string>
     */
    public array $vpcIds;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'sizeGib' => 'size_gib', 'region' => 'region', 'vpcIds' => 'vpc_ids'];
    }
}
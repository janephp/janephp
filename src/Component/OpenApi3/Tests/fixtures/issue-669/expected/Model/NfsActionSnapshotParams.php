<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsActionSnapshotParams implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Snapshot name of the NFS share
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['name' => 'name'];
    }
}
<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseVolumeSnapshot implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Snapshots
     */
    public Snapshots $snapshot;
    public function definedProperties(): array
    {
        return ['snapshot' => 'snapshot'];
    }
}
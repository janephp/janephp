<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsActionResizeParams implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The new size for the NFS share.
     *
     * @var int
     */
    public int $sizeGib;
    public function definedProperties(): array
    {
        return ['sizeGib' => 'size_gib'];
    }
}
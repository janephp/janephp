<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiModelVersion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Major version number
     *
     * @var int
     */
    public int $major;
    /**
     * Minor version number
     *
     * @var int
     */
    public int $minor;
    /**
     * Patch version number
     *
     * @var int
     */
    public int $patch;
    public function definedProperties(): array
    {
        return ['major' => 'major', 'minor' => 'minor', 'patch' => 'patch'];
    }
}
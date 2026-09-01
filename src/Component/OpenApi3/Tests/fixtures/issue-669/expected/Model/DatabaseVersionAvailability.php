<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseVersionAvailability implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A timestamp referring to the date when the particular version will no longer be supported. If null, the version does not have an end of life timeline.
     *
     * @var string|null
     */
    public ?string $endOfLife;
    /**
     * A timestamp referring to the date when the particular version will no longer be available for creating new clusters. If null, the version does not have an end of availability timeline.
     *
     * @var string|null
     */
    public ?string $endOfAvailability;
    /**
     * The engine version.
     *
     * @var string
     */
    public string $version;
    public function definedProperties(): array
    {
        return ['endOfLife' => 'end_of_life', 'endOfAvailability' => 'end_of_availability', 'version' => 'version'];
    }
}
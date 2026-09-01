<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AddonsDimensionVolumeWithPrice implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier for the addon.
     *
     * @var int
     */
    public int $id;
    /**
     * The minimum volume for the volume pricing tier.
     *
     * @var int
     */
    public int $lowVolume;
    /**
     * The maximum volume for the volume pricing tier.
     *
     * @var int
     */
    public int $maxVolume;
    /**
     * The price per unit for the volume tier in US dollars.
     *
     * @var string
     */
    public string $pricePerUnit;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'lowVolume' => 'low_volume', 'maxVolume' => 'max_volume', 'pricePerUnit' => 'price_per_unit'];
    }
}
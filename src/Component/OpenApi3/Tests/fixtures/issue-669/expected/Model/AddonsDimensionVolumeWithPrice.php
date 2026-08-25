<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AddonsDimensionVolumeWithPrice implements AdditionalPropertiesInterface
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
     * Unique identifier for the addon.
     *
     * @var int
     */
    protected $id;
    /**
     * The minimum volume for the volume pricing tier.
     *
     * @var int
     */
    protected $lowVolume;
    /**
     * The maximum volume for the volume pricing tier.
     *
     * @var int
     */
    protected $maxVolume;
    /**
     * The price per unit for the volume tier in US dollars.
     *
     * @var string
     */
    protected $pricePerUnit;
    /**
     * Unique identifier for the addon.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Unique identifier for the addon.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The minimum volume for the volume pricing tier.
     *
     * @return int
     */
    public function getLowVolume(): int
    {
        return $this->lowVolume;
    }
    /**
     * The minimum volume for the volume pricing tier.
     *
     * @param int $lowVolume
     *
     * @return self
     */
    public function setLowVolume(int $lowVolume): self
    {
        $this->initialized['lowVolume'] = true;
        $this->lowVolume = $lowVolume;
        return $this;
    }
    /**
     * The maximum volume for the volume pricing tier.
     *
     * @return int
     */
    public function getMaxVolume(): int
    {
        return $this->maxVolume;
    }
    /**
     * The maximum volume for the volume pricing tier.
     *
     * @param int $maxVolume
     *
     * @return self
     */
    public function setMaxVolume(int $maxVolume): self
    {
        $this->initialized['maxVolume'] = true;
        $this->maxVolume = $maxVolume;
        return $this;
    }
    /**
     * The price per unit for the volume tier in US dollars.
     *
     * @return string
     */
    public function getPricePerUnit(): string
    {
        return $this->pricePerUnit;
    }
    /**
     * The price per unit for the volume tier in US dollars.
     *
     * @param string $pricePerUnit
     *
     * @return self
     */
    public function setPricePerUnit(string $pricePerUnit): self
    {
        $this->initialized['pricePerUnit'] = true;
        $this->pricePerUnit = $pricePerUnit;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'lowVolume' => ['low_volume', 'getLowVolume', 'setLowVolume'], 'maxVolume' => ['max_volume', 'getMaxVolume', 'setMaxVolume'], 'pricePerUnit' => ['price_per_unit', 'getPricePerUnit', 'setPricePerUnit']];
    }
}
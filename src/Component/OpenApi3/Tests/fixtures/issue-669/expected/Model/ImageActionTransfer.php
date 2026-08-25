<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ImageActionTransfer implements AdditionalPropertiesInterface
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
     * The action to be taken on the image. Can be either `convert` or `transfer`.
     *
     * @var string
     */
    protected $type;
    /**
     * The slug identifier for the region where the resource will initially be available.
     *
     * @var string
     */
    protected $region;
    /**
     * The action to be taken on the image. Can be either `convert` or `transfer`.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The action to be taken on the image. Can be either `convert` or `transfer`.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The slug identifier for the region where the resource will initially be available.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The slug identifier for the region where the resource will initially be available.
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
        return ['type' => ['type', 'getType', 'setType'], 'region' => ['region', 'getRegion', 'setRegion']];
    }
}
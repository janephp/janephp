<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseUpdatedImage implements AdditionalPropertiesInterface
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
     * @var Image
     */
    protected $image;
    /**
     * @return Image
     */
    public function getImage(): Image
    {
        return $this->image;
    }
    /**
     * @param Image $image
     *
     * @return self
     */
    public function setImage(Image $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['image' => ['image', 'getImage', 'setImage']];
    }
}
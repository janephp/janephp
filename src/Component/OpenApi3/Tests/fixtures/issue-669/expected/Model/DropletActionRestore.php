<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DropletActionRestore implements AdditionalPropertiesInterface
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
     * The type of action to initiate for the Droplet.
     *
     * @var string
     */
    protected $type;
    /**
     * The ID of a backup of the current Droplet instance to restore from.
     *
     * @var int
     */
    protected $image;
    /**
     * The type of action to initiate for the Droplet.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of action to initiate for the Droplet.
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
     * The ID of a backup of the current Droplet instance to restore from.
     *
     * @return int
     */
    public function getImage(): int
    {
        return $this->image;
    }
    /**
     * The ID of a backup of the current Droplet instance to restore from.
     *
     * @param int $image
     *
     * @return self
     */
    public function setImage(int $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'image' => ['image', 'getImage', 'setImage']];
    }
}
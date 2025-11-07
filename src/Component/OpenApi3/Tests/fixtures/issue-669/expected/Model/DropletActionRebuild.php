<?php

namespace Jane\Generated\DigitalOcean\Model;

class DropletActionRebuild extends \ArrayObject
{
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
     * The image ID of a public or private image or the slug identifier for a public image. The Droplet will be rebuilt using this image as its base.
     *
     * @var mixed
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
     * The image ID of a public or private image or the slug identifier for a public image. The Droplet will be rebuilt using this image as its base.
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * The image ID of a public or private image or the slug identifier for a public image. The Droplet will be rebuilt using this image as its base.
     *
     * @param mixed $image
     *
     * @return self
     */
    public function setImage($image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}
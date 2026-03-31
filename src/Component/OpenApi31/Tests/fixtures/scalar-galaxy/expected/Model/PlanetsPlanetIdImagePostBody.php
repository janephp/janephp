<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class PlanetsPlanetIdImagePostBody
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
     * The image file to upload
     *
     * @var string
     */
    protected $image;
    /**
     * The image file to upload
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }
    /**
     * The image file to upload
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}
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
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    protected $image;
    /**
     * The image file to upload
     *
     * @return string|resource|\Psr\Http\Message\StreamInterface
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * The image file to upload
     *
     * @param string|resource|\Psr\Http\Message\StreamInterface $image
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
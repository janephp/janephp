<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class OutputDataImage extends OutputDataBase implements AdditionalPropertiesInterface
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
     * The width of the image.
     *
     * @var int
     */
    protected $width;
    /**
     * The height of the image.
     *
     * @var int
     */
    protected $height;
    /**
     * The width of the image.
     *
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }
    /**
     * The width of the image.
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * The height of the image.
     *
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }
    /**
     * The height of the image.
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['width' => ['width', 'getWidth', 'setWidth'], 'height' => ['height', 'getHeight', 'setHeight']];
    }
}
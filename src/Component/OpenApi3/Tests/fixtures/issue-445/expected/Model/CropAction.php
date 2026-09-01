<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class CropAction extends ImageActionBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * X-Coordinate of top left point of the cropping rectangle.
     *
     * @var int
     */
    public int $x;
    /**
     * Y-Coordinate of top left point of the cropping rectangle.
     *
     * @var int
     */
    public int $y;
    /**
     * Width of the cropping rectangle.
     *
     * @var int
     */
    public int $width;
    /**
     * Height of the cropping rectangle.
     *
     * @var int
     */
    public int $height;
    public function definedProperties(): array
    {
        return ['x' => 'x', 'y' => 'y', 'width' => 'width', 'height' => 'height'];
    }
}
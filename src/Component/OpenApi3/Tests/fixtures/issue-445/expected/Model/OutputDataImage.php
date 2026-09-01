<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class OutputDataImage extends OutputDataBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The width of the image.
     *
     * @var int
     */
    public int $width;
    /**
     * The height of the image.
     *
     * @var int
     */
    public int $height;
    public function definedProperties(): array
    {
        return ['width' => 'width', 'height' => 'height'];
    }
}
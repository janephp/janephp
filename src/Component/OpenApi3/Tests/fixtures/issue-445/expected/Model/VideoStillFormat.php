<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class VideoStillFormat extends FormatBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $extension;
    /**
     * Specifies the position from which to produce the image.
     *
     * @var int
     */
    public int $positionInSeconds;
    public function definedProperties(): array
    {
        return ['extension' => 'extension', 'positionInSeconds' => 'positionInSeconds'];
    }
}
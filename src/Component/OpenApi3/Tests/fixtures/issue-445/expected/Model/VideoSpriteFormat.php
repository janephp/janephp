<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class VideoSpriteFormat extends FormatBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Specifies the dimensions of a single frame in the sprite.
     *
     * @var ResizeAction|null
     */
    public ?ResizeAction $spriteResizeAction;
    /**
     * Limit for the number of frames to generate.
     *
     * @var int
     */
    public int $maxNumberOfSprites;
    /**
     * JPEG-quality to use for the sprite.
     *
     * @var int
     */
    public int $quality;
    /**
     * @var string|null
     */
    public ?string $extension;
    public function definedProperties(): array
    {
        return ['spriteResizeAction' => 'spriteResizeAction', 'maxNumberOfSprites' => 'maxNumberOfSprites', 'quality' => 'quality', 'extension' => 'extension'];
    }
}
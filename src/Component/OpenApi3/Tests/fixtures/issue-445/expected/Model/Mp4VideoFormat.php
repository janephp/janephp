<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class Mp4VideoFormat extends FormatBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Allows resizing of the video.
     *
     * @var ResizeAction|null
     */
    public ?ResizeAction $resizeAction;
    /**
     * Gets or sets the encoding audio codec.
     *
     * @var AudioFormatBase|null
     */
    public ?AudioFormatBase $audioCodec;
    /**
     * Gets or sets the encoding codec preset.
     *
     * @var string
     */
    public string $preset;
    /**
     * @var string|null
     */
    public ?string $extension;
    public function definedProperties(): array
    {
        return ['resizeAction' => 'resizeAction', 'audioCodec' => 'audioCodec', 'preset' => 'preset', 'extension' => 'extension'];
    }
}
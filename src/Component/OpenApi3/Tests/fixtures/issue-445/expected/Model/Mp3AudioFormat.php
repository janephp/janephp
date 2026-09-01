<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class Mp3AudioFormat extends FormatBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $extension;
    /**
     * Gets or sets the encoding bitrate. This setting and Quality are mutually exclusive.
     *
     * @var int|null
     */
    public ?int $bitrate;
    /**
     * Gets or sets the encoding quality. This setting and Bitrate are mutually exclusive.
     * Values can be set it range of 0 to 9, where a lower value is a higher quality.
     *
     * @var int|null
     */
    public ?int $quality;
    public function definedProperties(): array
    {
        return ['extension' => 'extension', 'bitrate' => 'bitrate', 'quality' => 'quality'];
    }
}
<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class AacAudioFormat extends FormatBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $extension;
    /**
     * Gets or sets the encoding profile.
     *
     * @var string
     */
    public string $profile;
    /**
     * Gets or sets the encoding coder.
     *
     * @var string
     */
    public string $coder;
    /**
     * Gets or sets the bitrate of the encoding in kbps.
     *
     * @var int|null
     */
    public ?int $bitrate;
    /**
     * Gets or sets the encoding variable bit rate (VBR) - 1 is lowest quality and 5 is highest quality.
     *
     * @var int|null
     */
    public ?int $variableBitRate;
    public function definedProperties(): array
    {
        return ['extension' => 'extension', 'profile' => 'profile', 'coder' => 'coder', 'bitrate' => 'bitrate', 'variableBitRate' => 'variableBitRate'];
    }
}
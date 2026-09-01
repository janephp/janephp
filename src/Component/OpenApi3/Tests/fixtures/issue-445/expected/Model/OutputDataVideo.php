<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class OutputDataVideo extends OutputDataBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Duration of the video in seconds.
     *
     * @var float
     */
    public float $durationInSeconds;
    /**
     * With of the video.
     *
     * @var int
     */
    public int $width;
    /**
     * Height of the video.
     *
     * @var int
     */
    public int $height;
    /**
     * The sprites making up the key frames of the video.
     *
     * @var list<Sprite>|null
     */
    public ?array $sprites;
    public function definedProperties(): array
    {
        return ['durationInSeconds' => 'durationInSeconds', 'width' => 'width', 'height' => 'height', 'sprites' => 'sprites'];
    }
}
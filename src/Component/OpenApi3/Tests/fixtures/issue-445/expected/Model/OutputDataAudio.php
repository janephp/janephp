<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class OutputDataAudio extends OutputDataBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Duration of the audio stream in seconds.
     *
     * @var float|null
     */
    public ?float $durationInSeconds;
    public function definedProperties(): array
    {
        return ['durationInSeconds' => 'durationInSeconds'];
    }
}
<?php

namespace PicturePark\API\Model;

class AudioStream
{
    /**
     * @var string|null
     */
    public ?string $bitRate;
    /**
     * @var string|null
     */
    public ?string $bitRateMode;
    /**
     * @var string|null
     */
    public ?string $channels;
    /**
     * @var string|null
     */
    public ?string $channelPositions;
    /**
     * @var string|null
     */
    public ?string $codec;
    /**
     * @var float|null
     */
    public ?float $durationInSeconds;
    /**
     * @var string|null
     */
    public ?string $format;
    /**
     * @var string|null
     */
    public ?string $language;
    /**
     * @var int|null
     */
    public ?int $resolution;
    /**
     * @var int|null
     */
    public ?int $samplingRate;
    /**
     * @var int|null
     */
    public ?int $streamSize;
}
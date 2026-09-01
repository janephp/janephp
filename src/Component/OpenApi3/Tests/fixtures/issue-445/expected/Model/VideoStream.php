<?php

namespace PicturePark\API\Model;

class VideoStream
{
    /**
     * @var string|null
     */
    public ?string $bitRate;
    /**
     * @var string|null
     */
    public ?string $codec;
    /**
     * @var string|null
     */
    public ?string $displayAspectRatio;
    /**
     * @var float
     */
    public float $durationInSeconds;
    /**
     * @var string|null
     */
    public ?string $format;
    /**
     * @var int|null
     */
    public ?int $frameCount;
    /**
     * @var float|null
     */
    public ?float $frameRate;
    /**
     * @var int|null
     */
    public ?int $height;
    /**
     * @var string|null
     */
    public ?string $language;
    /**
     * @var float|null
     */
    public ?float $pixelAspectRatio;
    /**
     * @var int|null
     */
    public ?int $resolution;
    /**
     * @var int|null
     */
    public ?int $streamSize;
    /**
     * @var int|null
     */
    public ?int $width;
    /**
     * @var float|null
     */
    public ?float $rotation;
}
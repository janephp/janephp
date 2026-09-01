<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class VideoMetadata implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array<string, string>|null
     */
    public ?iterable $names;
    /**
     * @var array<string, string>|null
     */
    public ?iterable $descriptions;
    /**
     * @var string|null
     */
    public ?string $fileExtension;
    /**
     * @var string|null
     */
    public ?string $fileName;
    /**
     * @var string|null
     */
    public ?string $filePath;
    /**
     * @var int|null
     */
    public ?int $fileSizeInBytes;
    /**
     * @var string|null
     */
    public ?string $sha1Hash;
    /**
     * @var mixed|null
     */
    public $xmpMetadata;
    /**
     * @var mixed|null
     */
    public $exifMetadata;
    /**
     * @var string|null
     */
    public ?string $language;
    /**
     * @var int
     */
    public int $width;
    /**
     * @var int
     */
    public int $height;
    /**
     * @var float
     */
    public float $durationInSeconds;
    /**
     * @var string|null
     */
    public ?string $format;
    /**
     * @var string|null
     */
    public ?string $codec;
    /**
     * @var int|null
     */
    public ?int $overallBitrate;
    /**
     * @var list<VideoStream>|null
     */
    public ?array $videoStreams;
    /**
     * @var list<AudioStream>|null
     */
    public ?array $audioStreams;
    public function definedProperties(): array
    {
        return ['names' => 'names', 'descriptions' => 'descriptions', 'fileExtension' => 'fileExtension', 'fileName' => 'fileName', 'filePath' => 'filePath', 'fileSizeInBytes' => 'fileSizeInBytes', 'sha1Hash' => 'sha1Hash', 'xmpMetadata' => 'xmpMetadata', 'exifMetadata' => 'exifMetadata', 'language' => 'language', 'width' => 'width', 'height' => 'height', 'durationInSeconds' => 'durationInSeconds', 'format' => 'format', 'codec' => 'codec', 'overallBitrate' => 'overallBitrate', 'videoStreams' => 'videoStreams', 'audioStreams' => 'audioStreams'];
    }
}